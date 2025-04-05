<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Form verilerini al
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $subject = $_POST['subject'] ?? '';
        $message = $_POST['message'] ?? '';
        
        // Boş alan kontrolü
        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
            throw new Exception("Lütfen tüm alanları doldurun.");
        }
        
        // E-posta formatı kontrolü
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Geçerli bir e-posta adresi girin.");
        }
        
        // Mesajı dosyaya kaydet
        $data = array(
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
            'date' => date('Y-m-d H:i:s')
        );
        
        // Dosya yolu
        $file_path = __DIR__ . '/messages.txt';
        
        // Dosya yazma işlemi
        $result = file_put_contents($file_path, json_encode($data) . "\n", FILE_APPEND);
        
        if ($result === false) {
            // Hata detayını al
            $error = error_get_last();
            throw new Exception("Mesaj kaydedilemedi. Hata: " . ($error['message'] ?? 'Bilinmeyen hata'));
        }
        
        // Başarılı mesajıyla yönlendir
        header("Location: ../contact.php?success=1");
        exit();
        
    } catch (Exception $e) {
        // Hata durumunda
        error_log("Form Hatası: " . $e->getMessage());
        header("Location: ../contact.php?error=1");
        exit();
    }
} else {
    // POST değilse ana sayfaya yönlendir
    header("Location: ../contact.php");
    exit();
} 