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


        .cart-items {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .cart-item {
            display: flex;
            align-items: center;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .cart-item-image img {
            max-width: 100px;
            height: auto;
            border-radius: 8px;
        }

        .cart-item-details {
            margin-left: 15px;
        }

        .cart-item-name {
            font-size: 16px;
            font-weight: bold;
            margin: 0;
        }

        .cart-item-quantity,
        .cart-item-price {
            margin: 5px 0;
        }

        .cart-items {
            max-width: 800px;
            margin: 0 auto;
        }

        .cart-item:last-child {
            border-bottom: none;

        }


        .attribute-item {
            margin: 0;
            text-transform: capitalize;
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
                <h3 style="text-align:center">Thông tin đơn hàng</h3>
                <ul class="cart-items">
                    @foreach ($getCart as $item)
                        <li class="cart-item">
                            <div class="cart-item-image">
                                <img src="{{ asset('uploads/products/' . $item->associatedModel->image) }}"
                                    alt="{{ $item->name }}">
                            </div>
                            <div class="cart-item-details">
                                <p class="cart-item-name">{{ $item->name }}</p>
                                <p class="cart-item-quantity">
                                    Số lượng: <span style="color: red">{{ $item->quantity }}</span>
                                </p>
                                <p class="cart-item-price">
                                    Giá: <span style="color: red">{{ number_format($item->price, 0, '', '.') }}</span>
                                    VND
                                </p>
                                <div class="attributes-container">
                                    @if ($item->attributes->count() > 0)
                                        @foreach ($item->attributes as $key => $value)
                                            <p class="attribute-item ">
                                                <strong>{{ $key }}:</strong>
                                                {{ $value }}
                                            </p>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <p style="max-width: 800px;
            margin: 0 auto;margin-top: 10px;"><strong>Tổng tiền:</strong>
                    <span style="color: red;">{{ number_format($order->total, 0, '', '.') }}</span> VND
                </p>
                @if (isset($getCoupon) && $getCoupon->precent_amount > 0)
                    <p>
                        <span style="color: red;">
                            <span class="text-muted mb-0">
                                <span class="fw-bold">Giảm giá:</span>
                                {{ $getCoupon->precent_amount }}
                                {{ $getCoupon->coupon_type == 'percent' ? '%' : 'VND' }}
                            </span>
                        </span>
                    </p>
                @endif
                <p style="max-width: 800px;
            margin: 0 auto;margin-top: 10px;"><strong>Phí giao
                        hàng:</strong>
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
