<?php
require_once '../config/db.php';

// Admin bilgileri
$username = 'admin';
$password = 'admin123';
$email = 'admin@example.com';

// Şifreyi hashle
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

try {
    // Önce mevcut admin kullanıcılarını temizle
    $conn->exec("TRUNCATE TABLE admin_users");
    
    // Yeni admin kullanıcısını ekle
    $sql = "INSERT INTO admin_users (username, password, email) VALUES (:username, :password, :email)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hashed_password);
    $stmt->bindParam(':email', $email);
    
    if($stmt->execute()) {
        echo "Admin kullanıcısı başarıyla oluşturuldu!<br>";
        echo "Kullanıcı adı: admin<br>";
        echo "Şifre: admin123<br>";
        echo "Hash: " . $hashed_password;
    } else {
        echo "Bir hata oluştu!";
    }
} catch(PDOException $e) {
    echo "Hata: " . $e->getMessage();
}
?> 