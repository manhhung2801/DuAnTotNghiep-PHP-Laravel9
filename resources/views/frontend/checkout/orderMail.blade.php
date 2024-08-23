<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail đơn hàng</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Font-Awesome-640/css/all.css') }}">
    <style>
        table {
            width: 100%;
            border-spacing: 0;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 5px;
            text-align: left;
        }

        th {
            text-align: right;
        }

        .header {
            text-align: center;
            padding: 5px;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td style="width: 153px;">
                <img src="https://cybermart.io.vn/uploads/logo/cybermart_logo_1x1.png"
                    style="width: 153px; height: 153px;" alt="CyberMart Logo" />
            </td>
            <td colspan="3" class="header">
                <h1 style="color: red;">Phát triển hệ thống website bán hàng & phụ kiện công nghệ CyberMart</h1>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="border-bottom: 1px solid black; padding: 5px;">
                Thông tin đơn hàng <span style="color: red;"> #{{ $order->order_code }}</span>
            </td>
        </tr>
        <tr>
            <th>Email khách hàng:</th>
            <td>{{ $order->order_email }}</td>

            <th>Thời gian đặt hàng:</th>
            <td>{{ $order->created_at }}</td>
        </tr>
        <tr>
            <th>Địa chỉ khách hàng:</th>
            <td>
                <?php
                $address = json_decode($order->order_address);
                $fullAddress = trim(($address->address ?? '') . ', ' . ($address->ward ?? '') . ', ' . ($address->district ?? '') . ', ' . ($address->province ?? ''));
                ?>
                {{ $fullAddress }}
            </td>

            <th>Tên khách hàng:</th>
            <td>{{ $order->order_name }}</td>
        </tr>
        <tr>
            <th>Số điện thoại:</th>
            <td>{{ $order->order_phone }}</td>

            <th>Ghi chú:</th>
            <td>{{ $order->user_note }}</td>
        </tr>
        <tr>
            <th>Phương thức thanh toán</th>
            <td colspan="3">
                @if ($order->payment_method == 0)
                    <p style="color: red;">Thanh toán khi nhận hàng (COD)</p>
                @elseif($order->payment_method == 1)
                    <p style="color: red;">Thanh toán qua VNPAY</p>
                @endif
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <h3>Thông tin đơn hàng</h3>
                <ul>
                    @foreach ($getCart as $item)
                        <li>{{ $item->name }}: {{ $item->quantity }} x <span
                                style="color: red;">{{ number_format($item->price, 0, '', '.') }}</span> VND
                        </li>
                    @endforeach
                </ul>
                <p><strong>Tổng tiền:</strong> <span
                        style="color: red;">{{ number_format($order->total, 0, '', '.') }}</span> VND</p>
                <p><strong>Phí giao hàng:</strong>
                    <span style="color: red;">
                        @isset($order->ship_money)
                            +{{ number_format($order->ship_money, 0, ',', '.') }}
                        @else
                            Không có phí giao hàng
                        @endisset
                    </span> VNĐ
                </p>
            </td>
        </tr>
    </table>
</body>

</html>
