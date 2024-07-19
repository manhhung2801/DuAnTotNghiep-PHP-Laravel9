<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            $nameIP = 'iPhone ' . rand(11, 15) . ' ' . collect([' ', 'Pro ', 'ProMax '])->random() . collect(['64GB ', '128GB ', '256GB ', '512GB ', '1TB '])->random();
            $nameLap = 'Apple Macbook Air ' . collect([' ', 'M1 ', 'M2 ', 'M3 '])->random() . collect([' ', 'Pro '])->random() . collect(['2019 ', '2020 ', '2021 ', '2022 ', '2023 '])->random() . collect([' 64GB ', ' 128GB ', '256GB ', ' 512GB ', ' 1TB '])->random();
            $nameSound = collect('Tai nghe Bluetooth ', 'Loa Bluetooth ')->random() . collect(['True Wireless JBL ', 'JBL Quantum '])->random();
            $namePhukien = collect('Phụ Kiện ', 'Ốp lưng ', 'Cáp sạt ')->random() . collect(['IPhone ', 'Samsung '])->random() . collect([' ', 'Pro ', 'ProMax '])->random();

            DB::table('products')->insert([
                [
                    'name' => $nameIP,
                    'slug' => Str::slug($nameIP . rand(1, 990), '-'),
                    'image' => 'iphone_0' . rand(1, 9) . '.png',
                    'qty' => 200,
                    'price' => round(rand(29000000, 33900000) / 100000) * 100000,
                    'offer_price' => round(rand(10900000, 25900000) / 100000) * 100000,
                    'offer_start_date' => now(),
                    'sku' => 'SPIP' . rand(100, 1020),
                    'video_link' => 'https://youtube.com',
                    'long_description' => '
                    <div class="ksp-content p-2 mb-2"><h2 class="ksp-title has-text-centered">ĐẶC ĐIỂM NỔI BẬT</h2> <div><ul><li> Mạnh mẽ, siêu nhanh với chip A14, RAM 6GB, mạng 5G tốc độ cao</li><li> Rực rỡ, sắc nét, độ sáng cao - Màn hình OLED cao cấp, Super Retina XDR hỗ trợ HDR10, Dolby Vision</li><li> Chụp ảnh siêu đỉnh - Night Mode , thuật toán Deep Fusion, Smart HDR 3, camera LiDar</li><li> Bền bỉ vượt trội - Kháng nước, kháng bụi IP68, mặt lưng Ceramic Shield</li></ul></div></div>
                    <div><p style="text-align: justify;"><strong>Sản phẩm ' . $nameIP . ' sắp hết hàng, bạn có thể tham khảo thêm <a href="https://cellphones.com.vn/iphone-13-pro-max.html" target="_blank">' . $nameIP . '</a> với nhiều nâng cấp về cấu hình, camera, màn hình đang có mức giá cực hấp dẫn tại hệ thống CellphoneS.</strong></p><h2 style="text-align: justify;"><strong>Điện thoại iPhone 12 Pro Max: Nâng tầm đẳng cấp sử dụng</strong></h2><p style="text-align: justify;">Cứ mỗi năm, đến dạo cuối tháng 8 và gần đầu tháng 9 thì mọi thông tin sôi sục mới về chiếc iPhone mới lại xuất hiện. Apple năm nay lại ra thêm một chiếc iPhone mới với tên gọi mới là <strong>iPhone 12 Pro Max</strong>, đây là một dòng điện thoại mới và mạnh mẽ nhất của nhà Apple năm nay. Mời bạn tham khảo thêm một số mô tả sản phẩm bên dưới để bạn có thể ra quyết định mua sắm.</p><blockquote><p style="text-align: justify;">Năm 2023, Apple vừa cho ra mắt series iPhone 15 với nhiều nâng cấp từ các thế hệ iPhone 12, 13, 14 trước đó. Vì vậy nếu bạn đang tìm một phiên bản mới nhất của dòng điện thoại Apple, tham khảo ngay <a href="https://cellphones.com.vn/iphone-15-pro-max.html" title="giá ' . $nameIP . '" target="_blank"><strong>giá ' . $nameIP . '</strong></a> tại CellphoneS cùng nhiều ưu đãi hấp dẫn. Đặc biệt ' . $nameIP . ' còn được trợ giá lên đời tối đa 4 triệu đồng. Xem ngay!</p></blockquote><p style="text-align: justify;">Năm nay, công nghệ màn hình trên 12 Pro Max cũng được đổi mới và trang bị tốt hơn cùng kích thước lên đến 6.7 inch, lớn hơn so với <a href="https://cellphones.com.vn/mobile/apple/iphone-12-vna.html">điện thoại iPhone 12</a> thường. Với công nghệ màn hình OLED cho khả năng hiển thị hình ảnh lên đến 2778 x 1284&nbsp;pixels. Bên cạnh đó, màn hình này còn cho độ sáng tối đa cao nhất lên đến 800 nits, luôn đảm bảo cho bạn một độ sáng cao và dễ nhìn nhất ngoài nắng.</p><p style="text-align: justify;"><img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/mobile/apple/iphone-12-pro-max-1.jpg" alt="Màn hình 6.7 inches Super Retina XDR" loading="lazy"></p><p style="text-align: justify;">Một điểm đổi mới nữa trên màn hình của chiếc&nbsp;điện thoại Apple iPhone 12 năm nay là việc chúng được thiết kế với khung viền vuông vức, viền thép không gỉ mang đến vẻ đẹp sang trọng cho điện thoại. Máy cũng được trang bị nhiều phiên bản màu sắc đặc biệt cho người dùng lựa chọn.</p><h3 style="text-align: justify;"><strong>RAM 6GB đa nhiệm thoải mái, bộ nhớ trong dung lượng lớn</strong></h3><p style="text-align: justify;">Về trang bị phần cứng bên trong thì iPhone 12 Pro Max có một thanh RAM lên đến 6GB. Điều này cho thấy rằng Apple ngày đang lắng nghe người dùng nhiều hơn khi trang bị một dung lượng RAM lớn hơn để việc đa nhiệm ngày càng được cải thiện hơn. Việc thanh ram lớn giúp cho bạn trải nghiệm các tựa game và đa nhiệm mượt mà hơn.</p><p style="text-align: justify;"><img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/mobile/apple/iphone-12-pro-max-2.jpg" alt="RAM 6GB đa nhiệm thoải mái, bộ nhớ trong dung lượng lớn" loading="lazy"></p><p style="text-align: justify;">Năm nay, 12 Pro Max cũng sẽ có ba phiên bản bộ nhớ trong khác nhau, với bộ nhớ trong nhỏ nhất bắt đầu từ 128GB, 256GB và cao nhất sẽ là 512GB. Một chiếc điện thoại mà có một bộ nhớ trong lớn ngang ngửa một chiếc laptop là điều mà Apple muốn mang lại cho người dùng để có thể san sẻ bớt bộ nhớ cho các thiết bị khác.</p></div>
                    ',
                    'short_description' => '
                    <p>✔️Máy mới Fullbox 100% - Chưa Active - Chính Hãng Apple<br>
                    ✔️Được hỗ trợ 1 đổi 1 trong 30 ngày nếu có lỗi từ nhà sản xuất<br>
                    ✔️Bảo hành chính hãng Apple 12 tháng</p>',
                    'specifications' => '
                    <table id="tskt" class="table table-striped">
                        <tbody>
                        <tr>
                            <td class="w-50">Hãng sản xuất</td>
                            <td>Apple</td>
                        </tr>
                        <tr>
                            <td class="w-50">Kích thước màn hình</td>
                            <td>6.7&nbsp;inches</td>
                        </tr>
                        <tr>
                            <td class="w-50">Độ phân giải màn hình</td>
                            <td>2796&nbsp;x 1290&nbsp;pixels</td>
                        </tr>
                        <tr>
                            <td class="w-50">Loại màn hình</td>
                            <td>OLED LPTS</td>
                        </tr>
                        <tr>
                            <td class="w-50">Bộ nhớ trong</td>
                            <td>1TB</td>
                        </tr>
                        <tr>
                            <td class="w-50">Chipset</td>
                            <td>Apple A16 Bionic</td>
                        </tr>
                        <tr>
                            <td class="w-50">CPU</td>
                            <td>Apple A16 Bionic&nbsp;120Hz</td>
                        </tr>
                        </tbody></table>
                    ',
                    'product_type' => 'new',
                    'seo_title' => '',
                    'seo_description' => '',
                    'category_id' => 1,
                    'weight' => 0.5,
                    'sub_category_id' => 1,
                    'child_category_id' => rand(1, 5),
                    'created_at' => now(),
                ]
            ]);
            DB::table('products')->insert([
                [
                    'name' => $nameLap,
                    'slug' => Str::slug($nameLap . rand(1, 990), '-'),
                    'image' => 'mac_0' . rand(1, 9) . '.png',
                    'qty' => 200,
                    'price' => round(rand(29000000, 33900000) / 10000) * 10000,
                    'offer_price' => round(rand(15900000, 2900000) / 10000) * 10000,
                    'offer_start_date' => now(),
                    'sku' => 'SPLP' . rand(120, 140),
                    'video_link' => 'https://youtube.com',
                    'long_description' => 'mô tả',
                    'short_description' => '
                    <p>✔️Máy mới Fullbox 100% - Chưa Active - Chính Hãng Apple<br>
                    ✔️Được hỗ trợ 1 đổi 1 trong 30 ngày nếu có lỗi từ nhà sản xuất<br>
                    ✔️Bảo hành chính hãng Apple 12 tháng</p>',
                    'product_type' => 'new',
                    'seo_title' => 'SEO tile',
                    'seo_description' => 'SEO des',
                    'category_id' => 2,
                    'weight' => 0.8,
                    'sub_category_id' => 16,
                    'child_category_id' => rand(21, 25),
                    'created_at' => now(),
                ]
            ]);
            DB::table('products')->insert([
                [
                    'name' => $nameSound,
                    'slug' => Str::slug($nameSound . rand(1, 990), '-'),
                    'image' => 'sound_0' . rand(1, 9) . '.png',
                    'qty' => 200,
                    'price' => round(rand(29000000, 33900000) / 10000) * 10000,
                    'offer_price' => round(rand(15900000, 2900000) / 10000) * 10000,
                    'offer_start_date' => now(),
                    'sku' => 'SPSD' . rand(120, 140),
                    'video_link' => 'https://youtube.com',
                    'long_description' => 'mô tả',
                    'short_description' => '
                    <p>✔️Máy mới Fullbox 100% - Chưa Active - Chính Hãng Apple<br>
                    ✔️Được hỗ trợ 1 đổi 1 trong 30 ngày nếu có lỗi từ nhà sản xuất<br>
                    ✔️Bảo hành chính hãng Apple 12 tháng</p>',
                    'product_type' => 'new',
                    'seo_title' => 'SEO tile',
                    'seo_description' => 'SEO des',
                    'category_id' => 3,
                    'weight' => 0.8,
                    'sub_category_id' => 28,
                    'child_category_id' => rand(43, 47),
                    'created_at' => now(),
                ]
            ]);
            DB::table('products')->insert([
                [
                    'name' => $namePhukien,
                    'slug' => Str::slug($namePhukien . rand(1, 990), '-'),
                    'image' => 'phukien_0' . rand(1, 9) . '.png',
                    'qty' => 200,
                    'price' => round(rand(29000000, 33900000) / 10000) * 10000,
                    'offer_price' => round(rand(15900000, 2900000) / 10000) * 10000,
                    'offer_start_date' => now(),
                    'sku' => 'SPPK' . rand(120, 140),
                    'video_link' => 'https://youtube.com',
                    'long_description' => 'mô tả',
                    'short_description' => '<p>✔️Máy mới Fullbox 100% - Chưa Active - Chính Hãng Apple<br>
                    ✔️Được hỗ trợ 1 đổi 1 trong 30 ngày nếu có lỗi từ nhà sản xuất<br>
                    ✔️Bảo hành chính hãng Apple 12 tháng</p>',
                    'product_type' => 'new',
                    'seo_title' => 'SEO tile',
                    'seo_description' => 'SEO des',
                    'category_id' => 6,
                    'weight' => 0.8,
                    'sub_category_id' => 52,
                    'child_category_id' => 48,
                    'created_at' => now(),
                ]
            ]);
        }
    }
}
