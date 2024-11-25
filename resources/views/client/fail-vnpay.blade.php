<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="payment-fail">
        <h1>Thanh toán không thành công</h1>
        <p>Rất tiếc, thanh toán của bạn không thành công. Vui lòng thử lại hoặc liên hệ với chúng tôi để được hỗ trợ.</p>
        
        <div class="payment-details">
            <p><strong>Mã giao dịch:</strong> {{ $data['vnp_TxnRef'] }}</p>
            <p><strong>Số tiền:</strong> {{ number_format($data['vnp_Amount'] / 100, 0, ',', '.') }} VND</p>
            <p><strong>Ngày thanh toán:</strong> {{ $data['vnp_CreateDate'] }}</p>
            <p><strong>Trạng thái:</strong> Thất bại</p>
        </div>

       
    </div>
</body>
</html>