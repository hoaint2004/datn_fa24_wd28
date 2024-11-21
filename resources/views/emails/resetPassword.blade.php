<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <style>
        /* Cấu hình chung cho email */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Hộp chứa nội dung email */
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Tiêu đề */
        h1 {
            color: #4CAF50;
            text-align: center;
        }

        /* Nội dung văn bản */
        p {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        /* Liên kết */
        a {
            color: #ffffff !important;
            background-color: #4CAF50;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            text-align: center;
        }

        /* Liên kết khi hover */
        a:hover {
            background-color: #45a049;
        }

        /* Cấu hình lại độ rộng của các thẻ */
        .email-container p,
        .email-container a {
            width: 100%;
            text-align: center;
        }

    </style>
</head>
<body>
    <div class="email-container">
        <h1>Đặt lại mật khẩu của bạn</h1>
        <p>Chúng tôi đã nhận được yêu cầu đặt lại mật khẩu cho tài khoản của bạn. Bạn có thể đặt lại mật khẩu bằng cách nhấp vào liên kết bên dưới:</p>
        <a href="{{ url('/forgot_password/') . '/?code=' . $token . '&email=' . urlencode($email) }}">Đặt lại mật khẩu</a>
        <p>Nếu bạn không yêu cầu đặt lại mật khẩu, hãy bỏ qua email này.</p>
    </div>
</body> 
</html>
