<?php
require_once '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
    $created_at = date('Y-m-d H:i:s');

    try {
        $sql = "INSERT INTO messages (name, email, subject, message, created_at) 
                VALUES (:name, :email, :subject, :message, :created_at)";
        
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':message', $message);
        $stmt->bindParam(':created_at', $created_at);
        
        if($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Mesajınız başarıyla gönderildi.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Bir hata oluştu. Lütfen tekrar deneyin.']);
        }
    } catch(PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Veritabanı hatası: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Geçersiz istek metodu.']);
}
?> 