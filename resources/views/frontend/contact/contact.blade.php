<!DOCTYPE html>
<html>

<head>
    <title>Thông tin liên hệ từ khách hàng</title>
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
                    style="width: 153px; height: 153px;" />
            </td>
            <td colspan="3" class="header">
                <h1 style="color: red;">Phát triển hệ thống website bán hàng & phụ kiện công nghệ CyberMart</h1>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="border-bottom: 1px solid black; padding: 5px;text-align: center">
                Thông tin liên hệ từ khách hàng ( <span style="color: red">{{ $data['name'] }}</span> )
            </td>
        </tr>
        <tr>
            <th>Tên khách hàng:</th>
            <td>{{ $data['name'] }}</td>

            <th>Email khách hàng:</th>
            <td>{{ $data['email'] }}</td>

        </tr>
        <tr>
            <th>Số điện thoaị:</th>
            <td>{{ $data['phone'] }}</td>

            <th>Nội dung liên hệ: </th>
            <td colspan="3">{{ $data['content'] }}</td>

        </tr>
    </table>
</body>

</html>
