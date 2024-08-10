<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác nhận đơn hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #dddddd;
        }

        .header {
            text-align: center;
            padding: 10px 0;
            border-bottom: 1px solid #dddddd;
        }

        .content {
            padding: 20px;
        }

        .footer {
            text-align: center;
            padding: 10px 0;
            border-top: 1px solid #dddddd;
            font-size: 12px;
            color: #888888;
        }

     

        .btn {
            display: inline-block;
            padding: 8px 20px;
            margin: 10px 0;
            font-size: 16px;
            color: white;
            background-color: #f7941d;
            border: none;
            border-radius: 3px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Xác nhận đơn hàng</h2>
        </div>
        <div class="content">
            <h3>Chào, {{$order->name}}</h3>
            <p>Cảm ơn bạn đã đặt hàng tại cửa hàng của chúng tôi. Dưới đây là chi tiết đơn hàng của bạn:</p>
            <table class="table table-bordered" style="width: 100%; border-collapse: collapse; border: 1px solid #fcfcfc; padding: 10px;">
                <thead>
                    <tr style="text-align: center;">
                        <th>Sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $total = 0;
                    @endphp
                    @foreach ($order->detail as $item)
                   
                    <tr style="text-align: center;">
                        <td>{{ $item->product['name'] }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>{{ number_format($item['price'], 0, ',', '.') }} đ</td>
                        <td>{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }} đ</td>
                    </tr>
                    @endforeach
                </tbody>
                

            </table>
            <p>Chúng tôi sẽ liên hệ với bạn sớm nhất để xác nhận đơn hàng. Nếu có bất kỳ câu hỏi nào, vui lòng liên hệ với chúng tôi.</p>
            <a  href=" {{ route('verify', $token)}}" class="btn">Xem đơn hàng</a>
        </div>

    </div>
</body>

</html>