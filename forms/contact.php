<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "locpg12@gmail.com"; // Thay bằng email của bạn
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    if (mail($to, $subject, $message, $headers)) {
        echo "✅ Gửi email thành công!";
    } else {
        echo "❌ Gửi email thất bại!";
    }
} else {
    echo "❌ Lỗi: Phương thức không hợp lệ!";
}
?>
