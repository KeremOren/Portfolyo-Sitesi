<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

// Mesajları oku
$messages = array();
if (file_exists("messages.txt")) {
    $lines = file("messages.txt");
    foreach ($lines as $line) {
        $messages[] = json_decode($line, true);
    }
}

// Mesajları tarihe göre sırala (en yeni en üstte)
usort($messages, function($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
});
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --light-bg: #f3f4f6;
        }
        
        body {
            background-color: var(--light-bg);
            font-family: 'Poppins', sans-serif;
        }
        
        .navbar {
            background: var(--primary-color);
            padding: 1rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .navbar-brand {
            color: white !important;
            font-weight: 600;
            font-size: 1.25rem;
        }
        
        .btn-logout {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            background: rgba(255,255,255,0.1);
            transition: all 0.3s ease;
        }
        
        .btn-logout:hover {
            background: rgba(255,255,255,0.2);
            color: white;
        }
        
        .dashboard-stats {
            margin-bottom: 2rem;
        }
        
        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
        }
        
        .stat-card i {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
        
        .stat-card h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: #1a1a1a;
        }
        
        .stat-card p {
            color: #666;
            margin: 0;
        }
        
        .messages-table {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        
        .messages-table .table {
            margin-bottom: 0;
        }
        
        .messages-table th {
            background: var(--light-bg);
            border: none;
            padding: 1rem;
            font-weight: 600;
        }
        
        .messages-table td {
            padding: 1rem;
            vertical-align: middle;
        }
        
        .message-content {
            max-width: 300px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .btn-action {
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.875rem;
        }
        
        .date-badge {
            background: var(--light-bg);
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-size: 0.875rem;
            color: #666;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-user-shield me-2"></i>Admin Panel
            </a>
            <div class="d-flex align-items-center">
                <a href="../contact.php" class="btn-logout me-3">
                    <i class="fas fa-globe me-2"></i>Siteye Git
                </a>
                <a href="logout.php" class="btn-logout">
                    <i class="fas fa-sign-out-alt me-2"></i>Çıkış Yap
                </a>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        <!-- İstatistikler -->
        <div class="dashboard-stats">
            <div class="row">
                <div class="col-md-4">
                    <div class="stat-card text-center">
                        <i class="fas fa-envelope"></i>
                        <h3><?php echo count($messages); ?></h3>
                        <p>Toplam Mesaj</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card text-center">
                        <i class="fas fa-clock"></i>
                        <h3><?php echo count($messages) > 0 ? date('d.m.Y', strtotime($messages[0]['date'])) : '-'; ?></h3>
                        <p>Son Mesaj Tarihi</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card text-center">
                        <i class="fas fa-users"></i>
                        <h3><?php echo count(array_unique(array_column($messages, 'email'))); ?></h3>
                        <p>Farklı Gönderici</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mesajlar Tablosu -->
        <div class="messages-table">
            <div class="card">
                <div class="card-header bg-white py-3">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-inbox me-2"></i>Gelen Mesajlar
                    </h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Tarih</th>
                                    <th>Gönderen</th>
                                    <th>E-posta</th>
                                    <th>Konu</th>
                                    <th>Mesaj</th>
                                    <th>İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($messages)): ?>
                                    <tr>
                                        <td colspan="6" class="text-center py-4">
                                            <i class="fas fa-inbox fa-2x mb-3 text-muted"></i>
                                            <p class="mb-0 text-muted">Henüz mesaj yok.</p>
                                        </td>
                                    </tr>
                                <?php else: ?>
                                    <?php foreach ($messages as $message): ?>
                                        <tr>
                                            <td>
                                                <span class="date-badge">
                                                    <?php echo date('d.m.Y H:i', strtotime($message['date'])); ?>
                                                </span>
                                            </td>
                                            <td><?php echo htmlspecialchars($message['name']); ?></td>
                                            <td>
                                                <a href="mailto:<?php echo htmlspecialchars($message['email']); ?>" class="text-decoration-none">
                                                    <?php echo htmlspecialchars($message['email']); ?>
                                                </a>
                                            </td>
                                            <td><?php echo htmlspecialchars($message['subject']); ?></td>
                                            <td>
                                                <div class="message-content" title="<?php echo htmlspecialchars($message['message']); ?>">
                                                    <?php echo htmlspecialchars($message['message']); ?>
                                                </div>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-primary btn-action me-2" 
                                                        data-bs-toggle="modal" data-bs-target="#messageModal"
                                                        data-message="<?php echo htmlspecialchars($message['message']); ?>">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-danger btn-action">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mesaj Detay Modal -->
    <div class="modal fade" id="messageModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Mesaj Detayı</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p id="messageContent"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Mesaj detay modalı için
        document.addEventListener('DOMContentLoaded', function() {
            var messageModal = document.getElementById('messageModal');
            messageModal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget;
                var message = button.getAttribute('data-message');
                var messageContent = document.getElementById('messageContent');
                messageContent.textContent = message;
            });
        });
    </script>
</body>
</html> 