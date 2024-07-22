<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $family = htmlspecialchars(trim($_POST["family"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST["phone"]));
    $title = htmlspecialchars(trim($_POST["title"]));
    $message = htmlspecialchars(trim($_POST["txt_area"]));

    // بررسی صحت ایمیل
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact-me.html?status=error");
        exit;
    }

    // ساختن متن ایمیل
    $email_content = "نام: $name\n";
    $email_content = "نام خانوادگی: $family\n";
    $email_content = "ایمیل: $email\n";
    $email_content = "شماره تلفن: $phone\n";
    $email_content = "موضوع: $title\n\n";
    $email_content = "پیام:\n$message\n";

    // ساختن سرآیند ایمیل
    $email_headers = "From: $name <$email>";

    // ارسال ایمیل
    if (mail("soheilbabaee@gmail.com", $title, $email_content, $email_headers)) {
        header("Location: contact-me.html?status=success");
    } else {
        header("Location: contact-me.html?status=error");
    }
} else {
    header("Location: contact-me.html?status=error");
}