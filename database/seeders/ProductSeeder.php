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

        for ($i = 0; $i < 50; $i++) {
            // Dùng chung promotion
            $pro = collect(['Không phí chuyển đổi khi trả góp 0% qua thẻ tín dụng kỳ hạn 3-6 tháng', ' Giảm ngay 600K cho Buds 3 và 800K cho Buds pro khi mua kèm điện thoại Samsung Fold6/ Flip6/ S23 Series/ S24 series/ A35/ A55 (Không áp dụng chung CT giảm 500K qua Gift code)  ', ' ĐẶT MUA NGAY qua Hotline để nhận GIÁ TỐT NHẤT cho khách hàng thành viên  '])->random();
            // end promotion
            // Điện thoại-Tablet iphone 
            $nameIP11 = 'iPhone 11 SERIES' . collect([' ', ' Pro ', ' Pro Max ', ' Plus '])->random() . collect([' ', ' 64GB ', ' 128GB ', ' 256GB ', ' 512GB ', ' 1TB '])->random();
            $nameIP12 = 'iPhone 12 SERIES' . collect([' ', ' Pro ', ' Pro Max ', ' Plus '])->random() . collect([' ', ' 64GB ', ' 128GB ', ' 256GB ', ' 512GB ', ' 1TB '])->random();
            $nameIP13 = 'iPhone 13 SERIES' . collect([' ', ' Pro ', ' Pro Max ', ' Plus '])->random() . collect([' ', ' 64GB ', ' 128GB ', ' 256GB ', ' 512GB ', ' 1TB '])->random();
            $nameIP14 = 'iPhone 14 SERIES' . collect([' ', ' Pro ', ' Pro Max ', ' Plus '])->random() . collect([' ', ' 64GB ', ' 128GB ', ' 256GB ', ' 512GB ', ' 1TB '])->random();
            $nameIP15 = 'iPhone 15 SERIES' . collect([' ', ' Pro ', ' Pro Max ', ' Plus '])->random() . collect([' ', ' 64GB ', ' 128GB ', ' 256GB ', ' 512GB ', ' 1TB '])->random();
            // End  Điện thoại-Tablet iphone
            $nameOP = 'OPPO' . collect(['Reno12 ', ' Reno11 ', ' A18 ', ' A79 ', ' Reno10 ', ' A77s ', ' A78 ', ' Reno7 '])->random() . collect([' ', ' F ', ' X5 ', ' Pro ', ' Plus ', ' N3 ', ' T '])->random() . collect([' ', ' 64GB ', ' 128GB ', ' 256GB ', ' 512GB ', ' 1TB '])->random();
            $nameMac = 'Oppo Macbook' . collect([' ', ' Air ', ' Pro ', ' Plus '])->random() . collect([' ', ' 14 ', ' 15 ', ' 16 '])->random()  . collect([' ', ' M1 ', ' M2 ', ' M3 '])->random() . collect([' 2019 ', ' 2020 ', ' 2021 ', ' 2022 ', ' 2023 '])->random() . collect([' 64GB ', ' 128GB ', ' 256GB ', ' 512GB ', ' 1TB '])->random();
            $nameMSI = 'Laptop' . collect([' ', ' Gaming ', ' MSI '])->random() . collect([' ', ' Modern ', ' Pulse ', ' Crosshair ', ' Prestige ', ' Katana ', ' Cyborg ', ' Crosshair ', ' Bravo '])->random() . collect([' ', ' 15 ', ' GF63 ', ' 14 '])->random()  . collect([' ', ' A12VE-412VN ', ' 11UC-1228VN ', ' 13VE-452VN ', ' A15VE-412VN ', ' 10UC-1228VN ', ' 13VE-454VN '])->random();
            $nameSounds = 'Tai nghe Bluetooth  ' . collect([' ', ' Apple ', ' True '])->random() . collect([' ', ' Chụp tai Edifier ', ' AirPods Pro ', ' Wireless HUAWEI ', ' Wireless Samsung Galaxy Buds ', ' Wireless Anker Soundcore R50i ', ' Wireless Samsung Galaxy Buds2 ', ' Wireless Havit ', ' Bravo '])->random() . collect([' ', ' A3949 ', ' 2 ', ' 3 ', ' FreeClip ', ' Pro ', ' 2022 ', ' TW969 ', ' Air '])->random();
            $nameLoa = 'Loa Bluetooth' . collect([' ', ' Edifier ', ' JBL ', ' Marshall ', ' Sony ', ' Alpha ', ' Robot ', ' Harman ', ' Tronsmart ', ' Partybox '])->random() . collect([' ', ' Kardon ', ' Encore ', ' T7 ', ' Boombox ', ' Willen ', ' Acton ', ' SRS-XB100 ', ' Works AW-W88 '])->random() . collect([' ', ' A3949 ', ' 2 ', ' 3 ', ' III ', ' Pro ', ' 2022 ', ' TW969 ', ' Air '])->random();
            $nameSmartPhone = 'Đồng hồ' . collect([' thông minh', ' định vị'])->random() . collect([ ' Huawei', ' SamSung', ' Galaxy', ' Garmin', ' Xiaomi', ' CorosPace', ' Garmin Forerunner', ' Watch'])->random() . collect([ ' 165', ' 40mm', ' 2', ' 965', ' 2022', ' 3', ' Air'])->random() . collect([ ' Pro', ' Bluetooth', ' 4G', ' 5G', ' dây cao su', ' dây da', ' 3S', ' Edge'])->random();
            $nameNoiChien = 'Nồi chiên không dầu' . collect([' ', ' Xiaomi ', ' Kalite ', ' Bear ', ' Gaabor ', ' Philips ', ' SHARP ', ' BlueStone ', ' Cuckoo ', ' Kangaroo ', ' Sunhouse '])->random() . collect([' ', ' Smart Air Fryer Pro ', ' Q6 ', ' QZG-E12H9 ', ' Q10 ', ' GA-M4A01 ', ' HD9257/80 ', ' HD9200/90 ', ' KF-AF70EV-BK ', ' HD9285/90 ', ' Smart Air Fryer  ', ' QZG-F15G1 ', ' KG55AF1A '])->random() . collect([' ', ' 5L ', ' 6L ', ' 7L ', ' 8L ', ' 9L ', ' 10L ', ' 11L ', ' 12L ', ' 13L ', ' 14L ', ' 15L ', ' 16L ', ' 17L ', ' 18L '])->random();
            $nameOplung = 'Ốp lưng Iphone' . rand(11, 15) . collect([' ', ' Pro ', ' Pro Max ', ' Plus '])->random() . collect([' ', ' Silicone ', ' Wiwu ', ' Leather ', ' Q10 ', ' GA-M4A01 ', ' HD9257/80 ', ' HD9200/90 ', ' KF-AF70EV-BK ', ' HD9285/90 ', ' Smart Air Fryer  ', ' QZG-F15G1 ', ' KG55AF1A '])->random() . collect([' ', ' Hỗ trợ sạc Magsafe ', ' Chính hãng ', ' Quốc tế ', ' Nội địa ', ' Japan ', ' Việt Name ', ' Chine ', ' USA '])->random();
            $nameManHinhMsi = 'Màn hình' . collect([' ', ' di động MSI ', ' Gaming MSI ', ' MSI ', ' văn phòng MSI '])->random() . collect([' ', ' Pro ', ' Plus ', ' Modern '])->random() . collect([' ', ' MP161 ', ' G225F ', ' G255F ', ' G63S ', ' G100 ', ' G3 ', ' G9 ', ' G20 '])->random() . collect([' ', ' 25 inch ', ' 26 inch ', ' 21 inch ', ' 22 inch ', ' 15 inch '])->random();
            // tivi category 8
            $nameTiVi32 = collect(['Xiaomi Smart', 'Smart', 'Google'])->random() . collect([' Tivi ', ' Tivi QNED '])->random() . collect([' Samsung ', ' Samsung QLED'])->random() . collect([' ', ' 4K ', ' 47LMHD456 ', ' 5K '])->random() . ' 32 INCH ';
            //End tivi category 8
            $nameTiVi = collect(['Xiaomi Smart', 'Smart', 'Google'])->random() . collect([' Tivi ', ' Tivi QNED '])->random() . collect([' ', ' LG ', ' Samsung ', ' TCL ', ' Samsung QLED'])->random() . collect([' ', ' 4K ', ' 47LMHD456 ', ' 5K '])->random() . collect([' ', ' 25 inch ', ' 26 inch ', ' 21 inch ', ' 22 inch ', ' 15 inch '])->random();
            // Thêm tên sản phẩm vào mảng Iphone
            DB::table('products')->insert([
                [
                    'name' => $nameIP11,
                    'slug' => Str::slug($nameIP11 . rand(0, 990), '-'),
                    'image' => 'iphone_' . rand(1, 30) . '.webp',
                    'qty' => 200,
                    'price' => round(rand(29000000, 33900000) / 100000) * 100000,
                    'offer_price' => round(rand(10900000, 25900000) / 100000) * 100000,
                    'offer_start_date' => now(),
                    'offer_end_date' => '2025-07-31',
                    'sku' => 'SPIP' . rand(100, 1020). rand(100, 1020),
                    'video_link' => 'https://youtube.com',
                    'short_description' => '
                <p>✔️Máy mới Fullbox 100% - Chưa Active - Chính Hãng Apple<br>
                ✔️Được hỗ trợ 1 đổi 1 trong 30 ngày nếu có lỗi từ nhà sản xuất<br>
                ✔️Bảo hành chính hãng Apple 12 tháng</p>',
                    'long_description' => '
                <div class="ksp-content p-2 mb-2"><h2 class="ksp-title has-text-centered">ĐẶC ĐIỂM NỔI BẬT</h2> <div><ul><li> Mạnh mẽ, siêu nhanh với chip A14, RAM 6GB, mạng 5G tốc độ cao</li><li> Rực rỡ, sắc nét, độ sáng cao - Màn hình OLED cao cấp, Super Retina XDR hỗ trợ HDR10, Dolby Vision</li><li> Chụp ảnh siêu đỉnh - Night Mode , thuật toán Deep Fusion, Smart HDR 3, camera LiDar</li><li> Bền bỉ vượt trội - Kháng nước, kháng bụi IP68, mặt lưng Ceramic Shield</li></ul></div></div>
                <div><p style="text-align: justify;"><strong>Sản phẩm ' . $nameIP11 . ' sắp hết hàng, bạn có thể tham khảo thêm <a href="https://cybermart.io.vn/" target="_blank">' . $nameIP11 . '</a> với nhiều nâng cấp về cấu hình, camera, màn hình đang có mức giá cực hấp dẫn tại hệ thống cybermart.</strong></p><h2 style="text-align: justify;"><strong>Điện thoại ' . $nameIP11 . ': Nâng tầm đẳng cấp sử dụng</strong></h2><p style="text-align: justify;">Cứ mỗi năm, đến dạo cuối tháng 8 và gần đầu tháng 9 thì mọi thông tin sôi sục mới về chiếc iPhone mới lại xuất hiện. Apple năm nay lại ra thêm một chiếc iPhone mới với tên gọi mới là <strong>' . $nameIP11 . '</strong>, đây là một dòng điện thoại mới và mạnh mẽ nhất của nhà Apple năm nay. Mời bạn tham khảo thêm một số mô tả sản phẩm bên dưới để bạn có thể ra quyết định mua sắm.</p><blockquote><p style="text-align: justify;">Năm 2023, Apple vừa cho ra mắt series iPhone 15 với nhiều nâng cấp từ các thế hệ iPhone 12, 13, 14 trước đó. Vì vậy nếu bạn đang tìm một phiên bản mới nhất của dòng điện thoại Apple, tham khảo ngay <a href="https://cybermart.io.vn/" title="giá ' . $nameIP11 . '" target="_blank"><strong>giá ' . $nameIP11 . '</strong></a> tại cybermart cùng nhiều ưu đãi hấp dẫn. Đặc biệt ' . $nameIP11 . ' còn được trợ giá lên đời tối đa 4 triệu đồng. Xem ngay!</p></blockquote><p style="text-align: justify;">Năm nay, công nghệ màn hình trên ' . $nameIP11 . ' cũng được đổi mới và trang bị tốt hơn cùng kích thước lên đến 6.7 inch, lớn hơn so với <a href="https://cybermart.io.vn/">điện thoại iPhone 12</a> thường. Với công nghệ màn hình OLED cho khả năng hiển thị hình ảnh lên đến 2778 x 1284&nbsp;pixels. Bên cạnh đó, màn hình này còn cho độ sáng tối đa cao nhất lên đến 800 nits, luôn đảm bảo cho bạn một độ sáng cao và dễ nhìn nhất ngoài nắng.</p><p style="text-align: justify;"><img src="https://www.bigw.com.au/medias/sys_master/images/images/hd0/h91/17559628939294.jpg" alt="Màn hình 6.7 inches Super Retina XDR" loading="lazy"></p><p style="text-align: justify;">Một điểm đổi mới nữa trên màn hình của chiếc&nbsp;điện thoại Apple iPhone 12 năm nay là việc chúng được thiết kế với khung viền vuông vức, viền thép không gỉ mang đến vẻ đẹp sang trọng cho điện thoại. Máy cũng được trang bị nhiều phiên bản màu sắc đặc biệt cho người dùng lựa chọn.</p><h3 style="text-align: justify;"><strong>RAM 6GB đa nhiệm thoải mái, bộ nhớ trong dung lượng lớn</strong></h3><p style="text-align: justify;">Về trang bị phần cứng bên trong thì ' . $nameIP11 . ' có một thanh RAM lên đến 6GB. Điều này cho thấy rằng Apple ngày đang lắng nghe người dùng nhiều hơn khi trang bị một dung lượng RAM lớn hơn để việc đa nhiệm ngày càng được cải thiện hơn. Việc thanh ram lớn giúp cho bạn trải nghiệm các tựa game và đa nhiệm mượt mà hơn.</p><p style="text-align: justify;"><img src="https://www.trustedreviews.com/wp-content/uploads/sites/54/2020/11/iphone12promax-2-scaled.jpg" alt="RAM 6GB đa nhiệm thoải mái, bộ nhớ trong dung lượng lớn" loading="lazy"></p><p style="text-align: justify;">Năm nay, ' . $nameIP11 . ' cũng sẽ có ba phiên bản bộ nhớ trong khác nhau, với bộ nhớ trong nhỏ nhất bắt đầu từ 128GB, 256GB và cao nhất sẽ là 512GB. Một chiếc điện thoại mà có một bộ nhớ trong lớn ngang ngửa một chiếc laptop là điều mà Apple muốn mang lại cho người dùng để có thể san sẻ bớt bộ nhớ cho các thiết bị khác.</p></div>
                ',
                    'specifications' => '
               <table id="tskt" class="table table-striped">
<tbody>
<tr>
	<td>Hãng sản xuất</td>
	<td>Oppo</td>
</tr>
<tr>
	<td>Kích thước màn hình</td>
	<td>6.7&nbsp;inches</td>
</tr>
<tr>
	<td>Độ phân giải màn hình</td>
	<td>2796&nbsp;x 1290&nbsp;pixels</td>
</tr>
<tr>
	<td>Loại màn hình</td>
	<td>OLED LPTS</td>
</tr>
<tr>
	<td>Bộ nhớ trong</td>
	<td>1TB</td>
</tr>
<tr>
	<td>Chipset</td>
	<td>Oppo A16 Bionic</td>
</tr>
<tr>
	<td>CPU</td>
	<td>Oppo A16 Bionic&nbsp;120Hz</td>
</tr>
<tr>
	<td>GPU</td>
	<td>Oppo GPU (5 lõi)</td>
</tr>
<tr>
	<td>Kích thước</td>
	<td>160.7 x 77.6 x 7.9 mm</td>
</tr>
<tr>
	<td>Trọng lượng</td>
	<td>240 g</td>
</tr>
<tr>
	<td>Camera sau</td>
	<td>Camera chính: 48MP<br>
	Camera góc siêu rộng: 12MP<br>
	Camera tele: 12MP</td>
</tr>
<tr>
	<td>Camera trước</td>
	<td>12 MP</td>
</tr>
<tr>
	<td>Quay video</td>
	<td>4K @24 fps, 25 fps, 30 fps, 60 fps<br>
	1080p @25 fps, 30 fps, 60 fps<br>
	720p @30 fps<br>
	4K HDR @30 fps<br>
	2.8K @ 60 fps<br>
	HDR với Dolby Vision @60 fps<br>
	ProRes 4K @30fps<br>
	Chuyển động chậm 1080p @ 120fps, 240 fps</td>
</tr>
<tr>
	<td>Pin</td>
	<td>Li - Ion, Không thể thay thế</td>
</tr>
<tr>
	<td>Cổng sạc</td>
	<td>Lightning</td>
</tr>
<tr>
	<td>Loại SIM</td>
	<td>Nano SIM, eSIM</td>
</tr>
<tr>
	<td>Hệ điều hành</td>
	<td>iOS</td>
</tr>
<tr>
	<td>Phiên bản hệ điều hành</td>
	<td>iOS 16.2</td>
</tr>
<tr>
	<td>Khe cắm thẻ nhớ</td>
	<td>Không</td>
</tr>
<tr>
	<td>3G</td>
	<td>HSPA 42.2/5.76 Mbps, EV-DO Rev.A 3.1 Mbps</td>
</tr>
<tr>
	<td>4G</td>
	<td>LTE-A (4CA) Cat16 1024/150 Mbps</td>
</tr>
<tr>
	<td>5G</td>
	<td>mmWave, Sub-6 GHz</td>
</tr>
<tr>
	<td>WLAN</td>
	<td>Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot</td>
</tr>
<tr>
	<td>Bluetooth</td>
	<td>Bluetooth 5.3</td>
</tr>
<tr>
	<td>GPS</td>
	<td>A-GPS, GLONASS, GALILEO, QZSS</td>
</tr>
<tr>
	<td>NFC</td>
	<td>Yes</td>
</tr>
<tr>
	<td>Cảm biến</td>
	<td>Cảm biến gia tốc, Cảm biến tiệm cận, Cảm biến ánh sáng, La bàn, Con quay hồi chuyển, Cảm biến áp kế</td>
</tr>
</tbody></table>
                ',
                    'product_type' => 'new',
                    'seo_title' => '' . $nameIP11 . ' - Màn Hình OLED 6.7 inches | Cybermart',
                    'promotion' => $pro,
                    'seo_description' => 'Khám phá ' . $nameIP11 . ' với màn hình OLED 6.7 inches, chip A14 mạnh mẽ, RAM 6GB và bộ nhớ lên đến 512GB. Đặc biệt, sản phẩm hỗ trợ mạng 5G, chống nước IP68 và được trang bị camera LiDar để chụp ảnh siêu đỉnh. Nhận ưu đãi và giảm giá hấp dẫn tại Cybermart. Mua ngay hôm nay để trải nghiệm công nghệ mới nhất từ Apple!',
                    'category_id' => 1,
                    'weight' => 0.5,
                    'sub_category_id' => 1,
                    'child_category_id' => 5,
                    'created_at' => now(),
                ], [
                    'name' => $nameIP12,
                    'slug' => Str::slug($nameIP12 . rand(0, 990), '-'),
                    'image' => 'iphone_' . rand(1, 30) . '.webp',
                    'qty' => 200,
                    'price' => round(rand(29000000, 33900000) / 100000) * 100000,
                    'offer_price' => round(rand(10900000, 25900000) / 100000) * 100000,
                    'offer_start_date' => now(),
                    'offer_end_date' => '2025-07-31',
                    'sku' => 'SPIP' . rand(100, 1020). rand(100, 1020),
                    'video_link' => 'https://youtube.com',
                    'short_description' => '
                <p>✔️Máy mới Fullbox 100% - Chưa Active - Chính Hãng Apple<br>
                ✔️Được hỗ trợ 1 đổi 1 trong 30 ngày nếu có lỗi từ nhà sản xuất<br>
                ✔️Bảo hành chính hãng Apple 12 tháng</p>',
                    'long_description' => '
                <div class="ksp-content p-2 mb-2"><h2 class="ksp-title has-text-centered">ĐẶC ĐIỂM NỔI BẬT</h2> <div><ul><li> Mạnh mẽ, siêu nhanh với chip A14, RAM 6GB, mạng 5G tốc độ cao</li><li> Rực rỡ, sắc nét, độ sáng cao - Màn hình OLED cao cấp, Super Retina XDR hỗ trợ HDR10, Dolby Vision</li><li> Chụp ảnh siêu đỉnh - Night Mode , thuật toán Deep Fusion, Smart HDR 3, camera LiDar</li><li> Bền bỉ vượt trội - Kháng nước, kháng bụi IP68, mặt lưng Ceramic Shield</li></ul></div></div>
                <div><p style="text-align: justify;"><strong>Sản phẩm ' . $nameIP12 . ' sắp hết hàng, bạn có thể tham khảo thêm <a href="https://cybermart.io.vn/" target="_blank">' . $nameIP12 . '</a> với nhiều nâng cấp về cấu hình, camera, màn hình đang có mức giá cực hấp dẫn tại hệ thống cybermart.</strong></p><h2 style="text-align: justify;"><strong>Điện thoại ' . $nameIP12 . ': Nâng tầm đẳng cấp sử dụng</strong></h2><p style="text-align: justify;">Cứ mỗi năm, đến dạo cuối tháng 8 và gần đầu tháng 9 thì mọi thông tin sôi sục mới về chiếc iPhone mới lại xuất hiện. Apple năm nay lại ra thêm một chiếc iPhone mới với tên gọi mới là <strong>' . $nameIP12 . '</strong>, đây là một dòng điện thoại mới và mạnh mẽ nhất của nhà Apple năm nay. Mời bạn tham khảo thêm một số mô tả sản phẩm bên dưới để bạn có thể ra quyết định mua sắm.</p><blockquote><p style="text-align: justify;">Năm 2023, Apple vừa cho ra mắt series iPhone 15 với nhiều nâng cấp từ các thế hệ iPhone 12, 13, 14 trước đó. Vì vậy nếu bạn đang tìm một phiên bản mới nhất của dòng điện thoại Apple, tham khảo ngay <a href="https://cybermart.io.vn/" title="giá ' . $nameIP12 . '" target="_blank"><strong>giá ' . $nameIP12 . '</strong></a> tại cybermart cùng nhiều ưu đãi hấp dẫn. Đặc biệt ' . $nameIP12 . ' còn được trợ giá lên đời tối đa 4 triệu đồng. Xem ngay!</p></blockquote><p style="text-align: justify;">Năm nay, công nghệ màn hình trên ' . $nameIP12 . ' cũng được đổi mới và trang bị tốt hơn cùng kích thước lên đến 6.7 inch, lớn hơn so với <a href="https://cybermart.io.vn/">điện thoại iPhone 12</a> thường. Với công nghệ màn hình OLED cho khả năng hiển thị hình ảnh lên đến 2778 x 1284&nbsp;pixels. Bên cạnh đó, màn hình này còn cho độ sáng tối đa cao nhất lên đến 800 nits, luôn đảm bảo cho bạn một độ sáng cao và dễ nhìn nhất ngoài nắng.</p><p style="text-align: justify;"><img src="https://www.bigw.com.au/medias/sys_master/images/images/hd0/h91/17559628939294.jpg" alt="Màn hình 6.7 inches Super Retina XDR" loading="lazy"></p><p style="text-align: justify;">Một điểm đổi mới nữa trên màn hình của chiếc&nbsp;điện thoại Apple iPhone 12 năm nay là việc chúng được thiết kế với khung viền vuông vức, viền thép không gỉ mang đến vẻ đẹp sang trọng cho điện thoại. Máy cũng được trang bị nhiều phiên bản màu sắc đặc biệt cho người dùng lựa chọn.</p><h3 style="text-align: justify;"><strong>RAM 6GB đa nhiệm thoải mái, bộ nhớ trong dung lượng lớn</strong></h3><p style="text-align: justify;">Về trang bị phần cứng bên trong thì ' . $nameIP12 . ' có một thanh RAM lên đến 6GB. Điều này cho thấy rằng Apple ngày đang lắng nghe người dùng nhiều hơn khi trang bị một dung lượng RAM lớn hơn để việc đa nhiệm ngày càng được cải thiện hơn. Việc thanh ram lớn giúp cho bạn trải nghiệm các tựa game và đa nhiệm mượt mà hơn.</p><p style="text-align: justify;"><img src="https://www.trustedreviews.com/wp-content/uploads/sites/54/2020/11/iphone12promax-2-scaled.jpg" alt="RAM 6GB đa nhiệm thoải mái, bộ nhớ trong dung lượng lớn" loading="lazy"></p><p style="text-align: justify;">Năm nay, ' . $nameIP12 . ' cũng sẽ có ba phiên bản bộ nhớ trong khác nhau, với bộ nhớ trong nhỏ nhất bắt đầu từ 128GB, 256GB và cao nhất sẽ là 512GB. Một chiếc điện thoại mà có một bộ nhớ trong lớn ngang ngửa một chiếc laptop là điều mà Apple muốn mang lại cho người dùng để có thể san sẻ bớt bộ nhớ cho các thiết bị khác.</p></div>
                ',
                    'specifications' => '
               <table id="tskt" class="table table-striped">
<tbody>
<tr>
	<td>Hãng sản xuất</td>
	<td>Oppo</td>
</tr>
<tr>
	<td>Kích thước màn hình</td>
	<td>6.7&nbsp;inches</td>
</tr>
<tr>
	<td>Độ phân giải màn hình</td>
	<td>2796&nbsp;x 1290&nbsp;pixels</td>
</tr>
<tr>
	<td>Loại màn hình</td>
	<td>OLED LPTS</td>
</tr>
<tr>
	<td>Bộ nhớ trong</td>
	<td>1TB</td>
</tr>
<tr>
	<td>Chipset</td>
	<td>Oppo A16 Bionic</td>
</tr>
<tr>
	<td>CPU</td>
	<td>Oppo A16 Bionic&nbsp;120Hz</td>
</tr>
<tr>
	<td>GPU</td>
	<td>Oppo GPU (5 lõi)</td>
</tr>
<tr>
	<td>Kích thước</td>
	<td>160.7 x 77.6 x 7.9 mm</td>
</tr>
<tr>
	<td>Trọng lượng</td>
	<td>240 g</td>
</tr>
<tr>
	<td>Camera sau</td>
	<td>Camera chính: 48MP<br>
	Camera góc siêu rộng: 12MP<br>
	Camera tele: 12MP</td>
</tr>
<tr>
	<td>Camera trước</td>
	<td>12 MP</td>
</tr>
<tr>
	<td>Quay video</td>
	<td>4K @24 fps, 25 fps, 30 fps, 60 fps<br>
	1080p @25 fps, 30 fps, 60 fps<br>
	720p @30 fps<br>
	4K HDR @30 fps<br>
	2.8K @ 60 fps<br>
	HDR với Dolby Vision @60 fps<br>
	ProRes 4K @30fps<br>
	Chuyển động chậm 1080p @ 120fps, 240 fps</td>
</tr>
<tr>
	<td>Pin</td>
	<td>Li - Ion, Không thể thay thế</td>
</tr>
<tr>
	<td>Cổng sạc</td>
	<td>Lightning</td>
</tr>
<tr>
	<td>Loại SIM</td>
	<td>Nano SIM, eSIM</td>
</tr>
<tr>
	<td>Hệ điều hành</td>
	<td>iOS</td>
</tr>
<tr>
	<td>Phiên bản hệ điều hành</td>
	<td>iOS 16.2</td>
</tr>
<tr>
	<td>Khe cắm thẻ nhớ</td>
	<td>Không</td>
</tr>
<tr>
	<td>3G</td>
	<td>HSPA 42.2/5.76 Mbps, EV-DO Rev.A 3.1 Mbps</td>
</tr>
<tr>
	<td>4G</td>
	<td>LTE-A (4CA) Cat16 1024/150 Mbps</td>
</tr>
<tr>
	<td>5G</td>
	<td>mmWave, Sub-6 GHz</td>
</tr>
<tr>
	<td>WLAN</td>
	<td>Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot</td>
</tr>
<tr>
	<td>Bluetooth</td>
	<td>Bluetooth 5.3</td>
</tr>
<tr>
	<td>GPS</td>
	<td>A-GPS, GLONASS, GALILEO, QZSS</td>
</tr>
<tr>
	<td>NFC</td>
	<td>Yes</td>
</tr>
<tr>
	<td>Cảm biến</td>
	<td>Cảm biến gia tốc, Cảm biến tiệm cận, Cảm biến ánh sáng, La bàn, Con quay hồi chuyển, Cảm biến áp kế</td>
</tr>
</tbody></table>
                ',
                    'product_type' => 'new',
                    'seo_title' => '' . $nameIP12 . ' - Màn Hình OLED 6.7 inches | Cybermart',
                    'promotion' => $pro,
                    'seo_description' => 'Khám phá ' . $nameIP12 . ' với màn hình OLED 6.7 inches, chip A14 mạnh mẽ, RAM 6GB và bộ nhớ lên đến 512GB. Đặc biệt, sản phẩm hỗ trợ mạng 5G, chống nước IP68 và được trang bị camera LiDar để chụp ảnh siêu đỉnh. Nhận ưu đãi và giảm giá hấp dẫn tại Cybermart. Mua ngay hôm nay để trải nghiệm công nghệ mới nhất từ Apple!',
                    'category_id' => 1,
                    'weight' => 0.5,
                    'sub_category_id' => 1,
                    'child_category_id' => 4,
                    'created_at' => now(),
                ], [
                    'name' => $nameIP15,
                    'slug' => Str::slug($nameIP15 . rand(0, 990), '-'),
                    'image' => 'iphone_' . rand(1, 30) . '.webp',
                    'qty' => 200,
                    'price' => round(rand(29000000, 33900000) / 100000) * 100000,
                    'offer_price' => round(rand(10900000, 25900000) / 100000) * 100000,
                    'offer_start_date' => now(),
                    'offer_end_date' => '2025-07-31',
                    'sku' => 'SPIP' . rand(100, 1020). rand(100, 1020),
                    'video_link' => 'https://youtube.com',
                    'short_description' => '
                <p>✔️Máy mới Fullbox 100% - Chưa Active - Chính Hãng Apple<br>
                ✔️Được hỗ trợ 1 đổi 1 trong 30 ngày nếu có lỗi từ nhà sản xuất<br>
                ✔️Bảo hành chính hãng Apple 12 tháng</p>',
                    'long_description' => '
                <div class="ksp-content p-2 mb-2"><h2 class="ksp-title has-text-centered">ĐẶC ĐIỂM NỔI BẬT</h2> <div><ul><li> Mạnh mẽ, siêu nhanh với chip A14, RAM 6GB, mạng 5G tốc độ cao</li><li> Rực rỡ, sắc nét, độ sáng cao - Màn hình OLED cao cấp, Super Retina XDR hỗ trợ HDR10, Dolby Vision</li><li> Chụp ảnh siêu đỉnh - Night Mode , thuật toán Deep Fusion, Smart HDR 3, camera LiDar</li><li> Bền bỉ vượt trội - Kháng nước, kháng bụi IP68, mặt lưng Ceramic Shield</li></ul></div></div>
                <div><p style="text-align: justify;"><strong>Sản phẩm ' . $nameIP15 . ' sắp hết hàng, bạn có thể tham khảo thêm <a href="https://cybermart.io.vn/" target="_blank">' . $nameIP15 . '</a> với nhiều nâng cấp về cấu hình, camera, màn hình đang có mức giá cực hấp dẫn tại hệ thống cybermart.</strong></p><h2 style="text-align: justify;"><strong>Điện thoại ' . $nameIP15 . ': Nâng tầm đẳng cấp sử dụng</strong></h2><p style="text-align: justify;">Cứ mỗi năm, đến dạo cuối tháng 8 và gần đầu tháng 9 thì mọi thông tin sôi sục mới về chiếc iPhone mới lại xuất hiện. Apple năm nay lại ra thêm một chiếc iPhone mới với tên gọi mới là <strong>' . $nameIP15 . '</strong>, đây là một dòng điện thoại mới và mạnh mẽ nhất của nhà Apple năm nay. Mời bạn tham khảo thêm một số mô tả sản phẩm bên dưới để bạn có thể ra quyết định mua sắm.</p><blockquote><p style="text-align: justify;">Năm 2023, Apple vừa cho ra mắt series iPhone 15 với nhiều nâng cấp từ các thế hệ iPhone 12, 13, 14 trước đó. Vì vậy nếu bạn đang tìm một phiên bản mới nhất của dòng điện thoại Apple, tham khảo ngay <a href="https://cybermart.io.vn/" title="giá ' . $nameIP11 . '" target="_blank"><strong>giá ' . $nameIP11 . '</strong></a> tại cybermart cùng nhiều ưu đãi hấp dẫn. Đặc biệt ' . $nameIP11 . ' còn được trợ giá lên đời tối đa 4 triệu đồng. Xem ngay!</p></blockquote><p style="text-align: justify;">Năm nay, công nghệ màn hình trên ' . $nameIP11 . ' cũng được đổi mới và trang bị tốt hơn cùng kích thước lên đến 6.7 inch, lớn hơn so với <a href="https://cybermart.io.vn/">điện thoại iPhone 12</a> thường. Với công nghệ màn hình OLED cho khả năng hiển thị hình ảnh lên đến 2778 x 1284&nbsp;pixels. Bên cạnh đó, màn hình này còn cho độ sáng tối đa cao nhất lên đến 800 nits, luôn đảm bảo cho bạn một độ sáng cao và dễ nhìn nhất ngoài nắng.</p><p style="text-align: justify;"><img src="https://www.bigw.com.au/medias/sys_master/images/images/hd0/h91/17559628939294.jpg" alt="Màn hình 6.7 inches Super Retina XDR" loading="lazy"></p><p style="text-align: justify;">Một điểm đổi mới nữa trên màn hình của chiếc&nbsp;điện thoại Apple iPhone 12 năm nay là việc chúng được thiết kế với khung viền vuông vức, viền thép không gỉ mang đến vẻ đẹp sang trọng cho điện thoại. Máy cũng được trang bị nhiều phiên bản màu sắc đặc biệt cho người dùng lựa chọn.</p><h3 style="text-align: justify;"><strong>RAM 6GB đa nhiệm thoải mái, bộ nhớ trong dung lượng lớn</strong></h3><p style="text-align: justify;">Về trang bị phần cứng bên trong thì ' . $nameIP11 . ' có một thanh RAM lên đến 6GB. Điều này cho thấy rằng Apple ngày đang lắng nghe người dùng nhiều hơn khi trang bị một dung lượng RAM lớn hơn để việc đa nhiệm ngày càng được cải thiện hơn. Việc thanh ram lớn giúp cho bạn trải nghiệm các tựa game và đa nhiệm mượt mà hơn.</p><p style="text-align: justify;"><img src="https://www.trustedreviews.com/wp-content/uploads/sites/54/2020/11/iphone12promax-2-scaled.jpg" alt="RAM 6GB đa nhiệm thoải mái, bộ nhớ trong dung lượng lớn" loading="lazy"></p><p style="text-align: justify;">Năm nay, ' . $nameIP11 . ' cũng sẽ có ba phiên bản bộ nhớ trong khác nhau, với bộ nhớ trong nhỏ nhất bắt đầu từ 128GB, 256GB và cao nhất sẽ là 512GB. Một chiếc điện thoại mà có một bộ nhớ trong lớn ngang ngửa một chiếc laptop là điều mà Apple muốn mang lại cho người dùng để có thể san sẻ bớt bộ nhớ cho các thiết bị khác.</p></div>
                ',
                    'specifications' => '
               <table id="tskt" class="table table-striped">
<tbody>
<tr>
	<td>Hãng sản xuất</td>
	<td>Oppo</td>
</tr>
<tr>
	<td>Kích thước màn hình</td>
	<td>6.7&nbsp;inches</td>
</tr>
<tr>
	<td>Độ phân giải màn hình</td>
	<td>2796&nbsp;x 1290&nbsp;pixels</td>
</tr>
<tr>
	<td>Loại màn hình</td>
	<td>OLED LPTS</td>
</tr>
<tr>
	<td>Bộ nhớ trong</td>
	<td>1TB</td>
</tr>
<tr>
	<td>Chipset</td>
	<td>Oppo A16 Bionic</td>
</tr>
<tr>
	<td>CPU</td>
	<td>Oppo A16 Bionic&nbsp;120Hz</td>
</tr>
<tr>
	<td>GPU</td>
	<td>Oppo GPU (5 lõi)</td>
</tr>
<tr>
	<td>Kích thước</td>
	<td>160.7 x 77.6 x 7.9 mm</td>
</tr>
<tr>
	<td>Trọng lượng</td>
	<td>240 g</td>
</tr>
<tr>
	<td>Camera sau</td>
	<td>Camera chính: 48MP<br>
	Camera góc siêu rộng: 12MP<br>
	Camera tele: 12MP</td>
</tr>
<tr>
	<td>Camera trước</td>
	<td>12 MP</td>
</tr>
<tr>
	<td>Quay video</td>
	<td>4K @24 fps, 25 fps, 30 fps, 60 fps<br>
	1080p @25 fps, 30 fps, 60 fps<br>
	720p @30 fps<br>
	4K HDR @30 fps<br>
	2.8K @ 60 fps<br>
	HDR với Dolby Vision @60 fps<br>
	ProRes 4K @30fps<br>
	Chuyển động chậm 1080p @ 120fps, 240 fps</td>
</tr>
<tr>
	<td>Pin</td>
	<td>Li - Ion, Không thể thay thế</td>
</tr>
<tr>
	<td>Cổng sạc</td>
	<td>Lightning</td>
</tr>
<tr>
	<td>Loại SIM</td>
	<td>Nano SIM, eSIM</td>
</tr>
<tr>
	<td>Hệ điều hành</td>
	<td>iOS</td>
</tr>
<tr>
	<td>Phiên bản hệ điều hành</td>
	<td>iOS 16.2</td>
</tr>
<tr>
	<td>Khe cắm thẻ nhớ</td>
	<td>Không</td>
</tr>
<tr>
	<td>3G</td>
	<td>HSPA 42.2/5.76 Mbps, EV-DO Rev.A 3.1 Mbps</td>
</tr>
<tr>
	<td>4G</td>
	<td>LTE-A (4CA) Cat16 1024/150 Mbps</td>
</tr>
<tr>
	<td>5G</td>
	<td>mmWave, Sub-6 GHz</td>
</tr>
<tr>
	<td>WLAN</td>
	<td>Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot</td>
</tr>
<tr>
	<td>Bluetooth</td>
	<td>Bluetooth 5.3</td>
</tr>
<tr>
	<td>GPS</td>
	<td>A-GPS, GLONASS, GALILEO, QZSS</td>
</tr>
<tr>
	<td>NFC</td>
	<td>Yes</td>
</tr>
<tr>
	<td>Cảm biến</td>
	<td>Cảm biến gia tốc, Cảm biến tiệm cận, Cảm biến ánh sáng, La bàn, Con quay hồi chuyển, Cảm biến áp kế</td>
</tr>
</tbody></table>
                ',
                    'product_type' => 'new',
                    'seo_title' => '' . $nameIP15 . ' - Màn Hình OLED 6.7 inches | Cybermart',
                    'promotion' => $pro,
                    'seo_description' => 'Khám phá ' . $nameIP15 . ' với màn hình OLED 6.7 inches, chip A14 mạnh mẽ, RAM 6GB và bộ nhớ lên đến 512GB. Đặc biệt, sản phẩm hỗ trợ mạng 5G, chống nước IP68 và được trang bị camera LiDar để chụp ảnh siêu đỉnh. Nhận ưu đãi và giảm giá hấp dẫn tại Cybermart. Mua ngay hôm nay để trải nghiệm công nghệ mới nhất từ Apple!',
                    'category_id' => 1,
                    'weight' => 0.5,
                    'sub_category_id' => 1,
                    'child_category_id' => 1,
                    'created_at' => now(),
                ], [
                    'name' => $nameIP13,
                    'slug' => Str::slug($nameIP13 . rand(0, 990), '-'),
                    'image' => 'iphone_' . rand(1, 30) . '.webp',
                    'qty' => 200,
                    'price' => round(rand(29000000, 33900000) / 100000) * 100000,
                    'offer_price' => round(rand(10900000, 25900000) / 100000) * 100000,
                    'offer_start_date' => now(),
                     'offer_end_date' => '2025-07-31',
                    'sku' => 'SPIP' . rand(100, 1020). rand(100, 1020),
                    'video_link' => 'https://youtube.com',
                    'short_description' => '
                <p>✔️Máy mới Fullbox 100% - Chưa Active - Chính Hãng Apple<br>
                ✔️Được hỗ trợ 1 đổi 1 trong 30 ngày nếu có lỗi từ nhà sản xuất<br>
                ✔️Bảo hành chính hãng Apple 12 tháng</p>',
                    'long_description' => '
                <div class="ksp-content p-2 mb-2"><h2 class="ksp-title has-text-centered">ĐẶC ĐIỂM NỔI BẬT</h2> <div><ul><li> Mạnh mẽ, siêu nhanh với chip A14, RAM 6GB, mạng 5G tốc độ cao</li><li> Rực rỡ, sắc nét, độ sáng cao - Màn hình OLED cao cấp, Super Retina XDR hỗ trợ HDR10, Dolby Vision</li><li> Chụp ảnh siêu đỉnh - Night Mode , thuật toán Deep Fusion, Smart HDR 3, camera LiDar</li><li> Bền bỉ vượt trội - Kháng nước, kháng bụi IP68, mặt lưng Ceramic Shield</li></ul></div></div>
                <div><p style="text-align: justify;"><strong>Sản phẩm ' . $nameIP13 . ' sắp hết hàng, bạn có thể tham khảo thêm <a href="https://cybermart.io.vn/" target="_blank">' . $nameIP13 . '</a> với nhiều nâng cấp về cấu hình, camera, màn hình đang có mức giá cực hấp dẫn tại hệ thống cybermart.</strong></p><h2 style="text-align: justify;"><strong>Điện thoại ' . $nameIP13 . ': Nâng tầm đẳng cấp sử dụng</strong></h2><p style="text-align: justify;">Cứ mỗi năm, đến dạo cuối tháng 8 và gần đầu tháng 9 thì mọi thông tin sôi sục mới về chiếc iPhone mới lại xuất hiện. Apple năm nay lại ra thêm một chiếc iPhone mới với tên gọi mới là <strong>' . $nameIP13 . '</strong>, đây là một dòng điện thoại mới và mạnh mẽ nhất của nhà Apple năm nay. Mời bạn tham khảo thêm một số mô tả sản phẩm bên dưới để bạn có thể ra quyết định mua sắm.</p><blockquote><p style="text-align: justify;">Năm 2023, Apple vừa cho ra mắt series iPhone 15 với nhiều nâng cấp từ các thế hệ iPhone 12, 13, 14 trước đó. Vì vậy nếu bạn đang tìm một phiên bản mới nhất của dòng điện thoại Apple, tham khảo ngay <a href="https://cybermart.io.vn/" title="giá ' . $nameIP13 . '" target="_blank"><strong>giá ' . $nameIP13 . '</strong></a> tại cybermart cùng nhiều ưu đãi hấp dẫn. Đặc biệt ' . $nameIP13 . ' còn được trợ giá lên đời tối đa 4 triệu đồng. Xem ngay!</p></blockquote><p style="text-align: justify;">Năm nay, công nghệ màn hình trên ' . $nameIP13 . ' cũng được đổi mới và trang bị tốt hơn cùng kích thước lên đến 6.7 inch, lớn hơn so với <a href="https://cybermart.io.vn/">điện thoại iPhone 12</a> thường. Với công nghệ màn hình OLED cho khả năng hiển thị hình ảnh lên đến 2778 x 1284&nbsp;pixels. Bên cạnh đó, màn hình này còn cho độ sáng tối đa cao nhất lên đến 800 nits, luôn đảm bảo cho bạn một độ sáng cao và dễ nhìn nhất ngoài nắng.</p><p style="text-align: justify;"><img src="https://www.bigw.com.au/medias/sys_master/images/images/hd0/h91/17559628939294.jpg" alt="Màn hình 6.7 inches Super Retina XDR" loading="lazy"></p><p style="text-align: justify;">Một điểm đổi mới nữa trên màn hình của chiếc&nbsp;điện thoại Apple iPhone 12 năm nay là việc chúng được thiết kế với khung viền vuông vức, viền thép không gỉ mang đến vẻ đẹp sang trọng cho điện thoại. Máy cũng được trang bị nhiều phiên bản màu sắc đặc biệt cho người dùng lựa chọn.</p><h3 style="text-align: justify;"><strong>RAM 6GB đa nhiệm thoải mái, bộ nhớ trong dung lượng lớn</strong></h3><p style="text-align: justify;">Về trang bị phần cứng bên trong thì ' . $nameIP13 . ' có một thanh RAM lên đến 6GB. Điều này cho thấy rằng Apple ngày đang lắng nghe người dùng nhiều hơn khi trang bị một dung lượng RAM lớn hơn để việc đa nhiệm ngày càng được cải thiện hơn. Việc thanh ram lớn giúp cho bạn trải nghiệm các tựa game và đa nhiệm mượt mà hơn.</p><p style="text-align: justify;"><img src="https://www.trustedreviews.com/wp-content/uploads/sites/54/2020/11/iphone12promax-2-scaled.jpg" alt="RAM 6GB đa nhiệm thoải mái, bộ nhớ trong dung lượng lớn" loading="lazy"></p><p style="text-align: justify;">Năm nay, ' . $nameIP13 . ' cũng sẽ có ba phiên bản bộ nhớ trong khác nhau, với bộ nhớ trong nhỏ nhất bắt đầu từ 128GB, 256GB và cao nhất sẽ là 512GB. Một chiếc điện thoại mà có một bộ nhớ trong lớn ngang ngửa một chiếc laptop là điều mà Apple muốn mang lại cho người dùng để có thể san sẻ bớt bộ nhớ cho các thiết bị khác.</p></div>
                ',
                    'specifications' => '
               <table id="tskt" class="table table-striped">
<tbody>
<tr>
	<td>Hãng sản xuất</td>
	<td>Oppo</td>
</tr>
<tr>
	<td>Kích thước màn hình</td>
	<td>6.7&nbsp;inches</td>
</tr>
<tr>
	<td>Độ phân giải màn hình</td>
	<td>2796&nbsp;x 1290&nbsp;pixels</td>
</tr>
<tr>
	<td>Loại màn hình</td>
	<td>OLED LPTS</td>
</tr>
<tr>
	<td>Bộ nhớ trong</td>
	<td>1TB</td>
</tr>
<tr>
	<td>Chipset</td>
	<td>Oppo A16 Bionic</td>
</tr>
<tr>
	<td>CPU</td>
	<td>Oppo A16 Bionic&nbsp;120Hz</td>
</tr>
<tr>
	<td>GPU</td>
	<td>Oppo GPU (5 lõi)</td>
</tr>
<tr>
	<td>Kích thước</td>
	<td>160.7 x 77.6 x 7.9 mm</td>
</tr>
<tr>
	<td>Trọng lượng</td>
	<td>240 g</td>
</tr>
<tr>
	<td>Camera sau</td>
	<td>Camera chính: 48MP<br>
	Camera góc siêu rộng: 12MP<br>
	Camera tele: 12MP</td>
</tr>
<tr>
	<td>Camera trước</td>
	<td>12 MP</td>
</tr>
<tr>
	<td>Quay video</td>
	<td>4K @24 fps, 25 fps, 30 fps, 60 fps<br>
	1080p @25 fps, 30 fps, 60 fps<br>
	720p @30 fps<br>
	4K HDR @30 fps<br>
	2.8K @ 60 fps<br>
	HDR với Dolby Vision @60 fps<br>
	ProRes 4K @30fps<br>
	Chuyển động chậm 1080p @ 120fps, 240 fps</td>
</tr>
<tr>
	<td>Pin</td>
	<td>Li - Ion, Không thể thay thế</td>
</tr>
<tr>
	<td>Cổng sạc</td>
	<td>Lightning</td>
</tr>
<tr>
	<td>Loại SIM</td>
	<td>Nano SIM, eSIM</td>
</tr>
<tr>
	<td>Hệ điều hành</td>
	<td>iOS</td>
</tr>
<tr>
	<td>Phiên bản hệ điều hành</td>
	<td>iOS 16.2</td>
</tr>
<tr>
	<td>Khe cắm thẻ nhớ</td>
	<td>Không</td>
</tr>
<tr>
	<td>3G</td>
	<td>HSPA 42.2/5.76 Mbps, EV-DO Rev.A 3.1 Mbps</td>
</tr>
<tr>
	<td>4G</td>
	<td>LTE-A (4CA) Cat16 1024/150 Mbps</td>
</tr>
<tr>
	<td>5G</td>
	<td>mmWave, Sub-6 GHz</td>
</tr>
<tr>
	<td>WLAN</td>
	<td>Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot</td>
</tr>
<tr>
	<td>Bluetooth</td>
	<td>Bluetooth 5.3</td>
</tr>
<tr>
	<td>GPS</td>
	<td>A-GPS, GLONASS, GALILEO, QZSS</td>
</tr>
<tr>
	<td>NFC</td>
	<td>Yes</td>
</tr>
<tr>
	<td>Cảm biến</td>
	<td>Cảm biến gia tốc, Cảm biến tiệm cận, Cảm biến ánh sáng, La bàn, Con quay hồi chuyển, Cảm biến áp kế</td>
</tr>
</tbody></table>
                ',
                    'product_type' => 'new',
                    'seo_title' => '' . $nameIP13 . ' - Màn Hình OLED 6.7 inches | Cybermart',
                    'promotion' => $pro,
                    'seo_description' => 'Khám phá ' . $nameIP13 . ' với màn hình OLED 6.7 inches, chip A14 mạnh mẽ, RAM 6GB và bộ nhớ lên đến 512GB. Đặc biệt, sản phẩm hỗ trợ mạng 5G, chống nước IP68 và được trang bị camera LiDar để chụp ảnh siêu đỉnh. Nhận ưu đãi và giảm giá hấp dẫn tại Cybermart. Mua ngay hôm nay để trải nghiệm công nghệ mới nhất từ Apple!',
                    'category_id' => 1,
                    'weight' => 0.5,
                    'sub_category_id' => 1,
                    'child_category_id' => 3,
                    'created_at' => now(),
                ], [
                    'name' => $nameIP14,
                    'slug' => Str::slug($nameIP14 . rand(0, 990), '-'),
                    'image' => 'iphone_' . rand(1, 30) . '.webp',
                    'qty' => 200,
                    'price' => round(rand(29000000, 33900000) / 100000) * 100000,
                    'offer_price' => round(rand(10900000, 25900000) / 100000) * 100000,
                    'offer_start_date' => now(),
                     'offer_end_date' => '2025-07-31',
                    'sku' => 'SPIP' . rand(100, 1020). rand(100, 1020),
                    'video_link' => 'https://youtube.com',
                    'short_description' => '
                <p>✔️Máy mới Fullbox 100% - Chưa Active - Chính Hãng Apple<br>
                ✔️Được hỗ trợ 1 đổi 1 trong 30 ngày nếu có lỗi từ nhà sản xuất<br>
                ✔️Bảo hành chính hãng Apple 12 tháng</p>',
                    'long_description' => '
                <div class="ksp-content p-2 mb-2"><h2 class="ksp-title has-text-centered">ĐẶC ĐIỂM NỔI BẬT</h2> <div><ul><li> Mạnh mẽ, siêu nhanh với chip A14, RAM 6GB, mạng 5G tốc độ cao</li><li> Rực rỡ, sắc nét, độ sáng cao - Màn hình OLED cao cấp, Super Retina XDR hỗ trợ HDR10, Dolby Vision</li><li> Chụp ảnh siêu đỉnh - Night Mode , thuật toán Deep Fusion, Smart HDR 3, camera LiDar</li><li> Bền bỉ vượt trội - Kháng nước, kháng bụi IP68, mặt lưng Ceramic Shield</li></ul></div></div>
                <div><p style="text-align: justify;"><strong>Sản phẩm ' . $nameIP14 . ' sắp hết hàng, bạn có thể tham khảo thêm <a href="https://cybermart.io.vn/" target="_blank">' . $nameIP14 . '</a> với nhiều nâng cấp về cấu hình, camera, màn hình đang có mức giá cực hấp dẫn tại hệ thống cybermart.</strong></p><h2 style="text-align: justify;"><strong>Điện thoại ' . $nameIP14 . ': Nâng tầm đẳng cấp sử dụng</strong></h2><p style="text-align: justify;">Cứ mỗi năm, đến dạo cuối tháng 8 và gần đầu tháng 9 thì mọi thông tin sôi sục mới về chiếc iPhone mới lại xuất hiện. Apple năm nay lại ra thêm một chiếc iPhone mới với tên gọi mới là <strong>' . $nameIP14 . '</strong>, đây là một dòng điện thoại mới và mạnh mẽ nhất của nhà Apple năm nay. Mời bạn tham khảo thêm một số mô tả sản phẩm bên dưới để bạn có thể ra quyết định mua sắm.</p><blockquote><p style="text-align: justify;">Năm 2023, Apple vừa cho ra mắt series iPhone 15 với nhiều nâng cấp từ các thế hệ iPhone 12, 13, 14 trước đó. Vì vậy nếu bạn đang tìm một phiên bản mới nhất của dòng điện thoại Apple, tham khảo ngay <a href="https://cybermart.io.vn/" title="giá ' . $nameIP14 . '" target="_blank"><strong>giá ' . $nameIP14 . '</strong></a> tại cybermart cùng nhiều ưu đãi hấp dẫn. Đặc biệt ' . $nameIP14 . ' còn được trợ giá lên đời tối đa 4 triệu đồng. Xem ngay!</p></blockquote><p style="text-align: justify;">Năm nay, công nghệ màn hình trên ' . $nameIP14 . ' cũng được đổi mới và trang bị tốt hơn cùng kích thước lên đến 6.7 inch, lớn hơn so với <a href="https://cybermart.io.vn/">điện thoại iPhone 12</a> thường. Với công nghệ màn hình OLED cho khả năng hiển thị hình ảnh lên đến 2778 x 1284&nbsp;pixels. Bên cạnh đó, màn hình này còn cho độ sáng tối đa cao nhất lên đến 800 nits, luôn đảm bảo cho bạn một độ sáng cao và dễ nhìn nhất ngoài nắng.</p><p style="text-align: justify;"><img src="https://www.bigw.com.au/medias/sys_master/images/images/hd0/h91/17559628939294.jpg" alt="Màn hình 6.7 inches Super Retina XDR" loading="lazy"></p><p style="text-align: justify;">Một điểm đổi mới nữa trên màn hình của chiếc&nbsp;điện thoại Apple iPhone 12 năm nay là việc chúng được thiết kế với khung viền vuông vức, viền thép không gỉ mang đến vẻ đẹp sang trọng cho điện thoại. Máy cũng được trang bị nhiều phiên bản màu sắc đặc biệt cho người dùng lựa chọn.</p><h3 style="text-align: justify;"><strong>RAM 6GB đa nhiệm thoải mái, bộ nhớ trong dung lượng lớn</strong></h3><p style="text-align: justify;">Về trang bị phần cứng bên trong thì ' . $nameIP14 . ' có một thanh RAM lên đến 6GB. Điều này cho thấy rằng Apple ngày đang lắng nghe người dùng nhiều hơn khi trang bị một dung lượng RAM lớn hơn để việc đa nhiệm ngày càng được cải thiện hơn. Việc thanh ram lớn giúp cho bạn trải nghiệm các tựa game và đa nhiệm mượt mà hơn.</p><p style="text-align: justify;"><img src="https://www.trustedreviews.com/wp-content/uploads/sites/54/2020/11/iphone12promax-2-scaled.jpg" alt="RAM 6GB đa nhiệm thoải mái, bộ nhớ trong dung lượng lớn" loading="lazy"></p><p style="text-align: justify;">Năm nay, ' . $nameIP14 . ' cũng sẽ có ba phiên bản bộ nhớ trong khác nhau, với bộ nhớ trong nhỏ nhất bắt đầu từ 128GB, 256GB và cao nhất sẽ là 512GB. Một chiếc điện thoại mà có một bộ nhớ trong lớn ngang ngửa một chiếc laptop là điều mà Apple muốn mang lại cho người dùng để có thể san sẻ bớt bộ nhớ cho các thiết bị khác.</p></div>
                ',
                    'specifications' => '
               <table id="tskt" class="table table-striped">
<tbody>
<tr>
	<td>Hãng sản xuất</td>
	<td>Oppo</td>
</tr>
<tr>
	<td>Kích thước màn hình</td>
	<td>6.7&nbsp;inches</td>
</tr>
<tr>
	<td>Độ phân giải màn hình</td>
	<td>2796&nbsp;x 1290&nbsp;pixels</td>
</tr>
<tr>
	<td>Loại màn hình</td>
	<td>OLED LPTS</td>
</tr>
<tr>
	<td>Bộ nhớ trong</td>
	<td>1TB</td>
</tr>
<tr>
	<td>Chipset</td>
	<td>Oppo A16 Bionic</td>
</tr>
<tr>
	<td>CPU</td>
	<td>Oppo A16 Bionic&nbsp;120Hz</td>
</tr>
<tr>
	<td>GPU</td>
	<td>Oppo GPU (5 lõi)</td>
</tr>
<tr>
	<td>Kích thước</td>
	<td>160.7 x 77.6 x 7.9 mm</td>
</tr>
<tr>
	<td>Trọng lượng</td>
	<td>240 g</td>
</tr>
<tr>
	<td>Camera sau</td>
	<td>Camera chính: 48MP<br>
	Camera góc siêu rộng: 12MP<br>
	Camera tele: 12MP</td>
</tr>
<tr>
	<td>Camera trước</td>
	<td>12 MP</td>
</tr>
<tr>
	<td>Quay video</td>
	<td>4K @24 fps, 25 fps, 30 fps, 60 fps<br>
	1080p @25 fps, 30 fps, 60 fps<br>
	720p @30 fps<br>
	4K HDR @30 fps<br>
	2.8K @ 60 fps<br>
	HDR với Dolby Vision @60 fps<br>
	ProRes 4K @30fps<br>
	Chuyển động chậm 1080p @ 120fps, 240 fps</td>
</tr>
<tr>
	<td>Pin</td>
	<td>Li - Ion, Không thể thay thế</td>
</tr>
<tr>
	<td>Cổng sạc</td>
	<td>Lightning</td>
</tr>
<tr>
	<td>Loại SIM</td>
	<td>Nano SIM, eSIM</td>
</tr>
<tr>
	<td>Hệ điều hành</td>
	<td>iOS</td>
</tr>
<tr>
	<td>Phiên bản hệ điều hành</td>
	<td>iOS 16.2</td>
</tr>
<tr>
	<td>Khe cắm thẻ nhớ</td>
	<td>Không</td>
</tr>
<tr>
	<td>3G</td>
	<td>HSPA 42.2/5.76 Mbps, EV-DO Rev.A 3.1 Mbps</td>
</tr>
<tr>
	<td>4G</td>
	<td>LTE-A (4CA) Cat16 1024/150 Mbps</td>
</tr>
<tr>
	<td>5G</td>
	<td>mmWave, Sub-6 GHz</td>
</tr>
<tr>
	<td>WLAN</td>
	<td>Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot</td>
</tr>
<tr>
	<td>Bluetooth</td>
	<td>Bluetooth 5.3</td>
</tr>
<tr>
	<td>GPS</td>
	<td>A-GPS, GLONASS, GALILEO, QZSS</td>
</tr>
<tr>
	<td>NFC</td>
	<td>Yes</td>
</tr>
<tr>
	<td>Cảm biến</td>
	<td>Cảm biến gia tốc, Cảm biến tiệm cận, Cảm biến ánh sáng, La bàn, Con quay hồi chuyển, Cảm biến áp kế</td>
</tr>
</tbody></table>
                ',
                    'product_type' => 'new',
                    'seo_title' => '' . $nameIP14 . ' - Màn Hình OLED 6.7 inches | Cybermart',
                    'promotion' => $pro,
                    'seo_description' => 'Khám phá ' . $nameIP14 . ' với màn hình OLED 6.7 inches, chip A14 mạnh mẽ, RAM 6GB và bộ nhớ lên đến 512GB. Đặc biệt, sản phẩm hỗ trợ mạng 5G, chống nước IP68 và được trang bị camera LiDar để chụp ảnh siêu đỉnh. Nhận ưu đãi và giảm giá hấp dẫn tại Cybermart. Mua ngay hôm nay để trải nghiệm công nghệ mới nhất từ Apple!',
                    'category_id' => 1,
                    'weight' => 0.5,
                    'sub_category_id' => 1,
                    'child_category_id' => 2,
                    'created_at' => now(),
                ],
            ]);
            // Thêm tên sản phẩm vào mảng Mac
            DB::table('products')->insert([
                'name' => $nameMac,
                'slug' => Str::slug($nameMac . rand(0, 990), '-'),
                'image' => 'mac_' . rand(1, 12) . '.webp',
                'qty' => 200,
                'price' => round(rand(29000000, 33900000) / 10000) * 10000,
                'offer_price' => round(rand(15900000, 2900000) / 10000) * 10000,
                'offer_start_date' => now(),
                 'offer_end_date' => '2025-07-31',
                'sku' => 'SPMCB' . rand(120, 140). rand(100, 1020), 
                'video_link' => 'https://youtube.com',
                'long_description' => '<div class="ksp-content p-2 mb-2" style="-webkit-text-stroke-width:0px;background-color:rgb(242, 242, 242);border-radius:0.5rem;box-sizing:inherit;color:rgb(74, 74, 74);font-family:Roboto, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:auto;orphans:2;padding:0.5rem !important;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;width:800px;word-spacing:0px;">
    <h2 class="ksp-title has-text-centered" style="box-sizing:inherit;color:rgb(215, 0, 24);font-size:18px;margin:0px;padding:0px;text-align:center !important;">
        <strong>ĐẶC ĐIỂM NỔI BẬT</strong>
    </h2>
    <div style="box-sizing:inherit;">
        <ul style="box-sizing:inherit;list-style:none;margin-bottom:0px;margin-right:0px;margin-top:0px;overflow-y:auto;padding:0px;scrollbar-width:none;">
            <li style="box-sizing:inherit;display:flex;font-size:14px;line-height:1.45;margin-bottom:5px;margin-right:0px;margin-top:0px;padding:0px;text-align:left;">
                <p style="margin-left:0px;">
                    Hiệu năng hàng đầu với chip M2 - mạnh mẽ hơn 1.4 lần so với thế hệ trước giúp nâng cao hiệu suất làm việc
                </p>
            </li>
            <li style="box-sizing:inherit;display:flex;font-size:14px;line-height:1.45;margin-bottom:5px;margin-right:0px;margin-top:0px;padding:0px;text-align:left;">
                <p style="margin-left:0px;">
                    Mở ra không gian giải trí chân thật với màn hình Retina sắc nét
                </p>
            </li>
            <li style="box-sizing:inherit;display:flex;font-size:14px;line-height:1.45;margin-bottom:5px;margin-right:0px;margin-top:0px;padding:0px;text-align:left;">
                <p style="margin-left:0px;">
                    Trải nghiệm gõ thoải mái với bàn phím Apple Magic, mở khoá 1 chạm bằng Touch ID
                </p>
            </li>
            <li style="box-sizing:inherit;display:flex;font-size:14px;line-height:1.45;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px;text-align:left;">
                <p style="margin-left:0px;">
                    Trang bị cổng thunderbolt thế hệ mới cho phép bạn truyền dữ liệu nhanh hơn bao giờ hết
                </p>
            </li>
        </ul>
    </div>
</div>
<div style="-webkit-text-stroke-width:0px;box-sizing:inherit;color:rgb(74, 74, 74);font-family:Roboto, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;">
    <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
        <strong style="box-sizing:inherit;color:rgb(54, 54, 54);"><img style="box-sizing:inherit;height:auto;max-width:100%;" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:810:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/laptop/macbook/Air/M2-2023/MacBook-Air-15-inch-M2-14.jpg" alt="Đánh giá ' . $nameMac . '" width="810" loading="lazy"></strong>
    </p>
    <h2 style="box-sizing:inherit;font-size:21px;font-weight:400;margin:0px;padding:0px;text-align:justify;">
        <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">' . $nameMac . ' - Màn hình cỡ lớn, cấu hình cực khủng</strong>
    </h2>
    <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
        <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">Macbook Air 15 M2 inch 2023 </strong>thể hiện sự đột phá trên thị trường laptop khi sở hữu hiệu năng vượt trội tới từ chipset Apple M2 cùng màn hình cỡ lớn 15 inch. Máy được tích hợp viên pin Lithium-Polymer 66.5Wh kết hợp với công nghệ sạc công suất lên tới 70W, đem lại thời lượng sử dụng suốt ngày dài chỉ sau 1 lần sạc. Với nhiều cải tiến vượt trội so với các thế hệ tiền nhiệm, đây sẽ là sản phẩm <a style="box-sizing:inherit;color:rgb(215, 0, 24);cursor:pointer;text-decoration:none;" href="https://cybermart.io.vn/" title="Macbook Air chính hãng" target="_blank"><strong style="box-sizing:inherit;color:currentcolor;">Macbook Air</strong></a> hiện đại mà bạn rất nên trải nghiệm.
    </p>
    <h3 style="box-sizing:inherit;font-size:16px;margin:0px;padding:8px 0px;text-align:justify;">
        <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">Thiết kế thân thiện với môi trường, đa dạng phiên bản màu sắc</strong>
    </h3>
    <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
        ' . $nameMac . ' nổi bật với tạo hình siêu mỏng nhẹ cùng độ bền bỉ tuyệt vời. Sở hữu độ dày thân máy chỉ khoảng nửa inch, Macbook Air 2023 15 inch có thể dễ dàng được bạn cất gọn và mang theo tới mọi nơi.&nbsp;
    </p>
    <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
        <img style="box-sizing:inherit;height:auto;max-width:100%;" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/laptop/macbook/Air/M2-2023/mac-studio-m2-max-2023-8.jpg" alt="Thiết kế ' . $nameMac . '" loading="lazy" width="810" height="456">
    </p>
    <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
        Thế hệ <a style="box-sizing:inherit;color:rgb(215, 0, 24);cursor:pointer;text-decoration:none;" href="https://cybermart.io.vn/" target="_blank"><strong style="box-sizing:inherit;color:rgb(54, 54, 54);">Mac Air 15 inch</strong></a> mới trong năm 2023 này của Apple sẽ có sự góp mặt của 4 phiên bản màu sắc đặc biệt là Silver, Starlight, Space Gray, Midnight. Đây đều là những tuỳ chọn màu sắc hết sức đều hết sức rực rỡ. Nó không chỉ tôn lên vẻ đẹp của chiếc laptop mà còn mang tới cho bạn cảm giác sang trọng, chuyên nghiệp mỗi khi sử dụng.
    </p>
    <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
        <img style="box-sizing:inherit;height:auto;max-width:100%;" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/laptop/macbook/Air/M2-2023/mac-studio-m2-max-2023-4.png" alt="Thiết kế ' . $nameMac . '" loading="lazy" width="810" height="456">
    </p>
    <h3 style="box-sizing:inherit;font-size:16px;margin:0px;padding:8px 0px;text-align:justify;">
        <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">Chip Apple M2 mạnh mẽ, cho hiệu năng vượt trội và tiết kiệm năng lượng</strong>
    </h3>
    <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
        ' . $nameMac . ' mang lại cho người dùng hiệu suất xử lý đỉnh cao khi được tích hợp chipset Apple M2 siêu mạnh mẽ. Nhờ đó mà các tác vụ chỉnh sửa video, lướt web thậm chí là chơi game đồ hoạ cũng có thể được xử lý hết sức mượt mà trên Macbook Air 2023 mới.
    </p>
    <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
        <img style="box-sizing:inherit;height:auto;max-width:100%;" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/laptop/macbook/Air/M2-2023/mac-studio-m2-max-2023-2.jpg" alt="Hiệu năng ' . $nameMac . '" loading="lazy" width="810" height="456">
    </p>
    <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
        Bên cạnh đó, so với các dòng PC sở hữu chip Intel Core i7 thì thế hệ Macbook Air 2023 này thậm chí có thể đem lại hiệu suất nhanh hơn gấp 2 lần với khả năng duyệt web tốc độ cao nhanh hơn 50% cùng thời lượng sử dụng lên tới hơn 18 giờ đồng hồ.
    </p>
    <h3 style="box-sizing:inherit;font-size:16px;margin:0px;padding:8px 0px;text-align:justify;">
        <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">Màn hình hiển thị sắc nét cùng hệ thống âm thanh và camera cao cấp</strong>
    </h3>
    <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
        Điểm nhấn đáng chú ý trên <a style="box-sizing:inherit;color:rgb(215, 0, 24);cursor:pointer;text-decoration:none;" href="https://cybermart.io.vn/" target="_blank"><strong style="box-sizing:inherit;color:rgb(54, 54, 54);">Mac Air M2</strong></a> là màn hình hiển thị Liquid Retina siêu sống động với khả năng hiển thị trên 1 tỷ màu. So với các dòng laptop và PC khác thì Macbook Air 2023 có khả năng thể hiện hình ảnh với độ phân giải cao gấp 2 lần. Nhờ đó mà các tác vụ về hình ảnh, video trên máy luôn nổi bật với độ tương phản cực kỳ phong phú và chi tiết về màu sắc.
    </p>
    <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
        <img style="box-sizing:inherit;height:auto;max-width:100%;" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/laptop/macbook/Air/M2-2023/mac-studio-m2-max-2023-6.jpg" alt="Màn hình ' . $nameMac . '" loading="lazy" width="810" height="456">
    </p>
    <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
        Ngoài ra, thế hệ Macbook Air 2023 mới này còn sở hữu máy ảnh với độ phân giải lên tới 1080p. Ưu điểm này của máy giúp bạn luôn đẹp tự nhiên trong các cuộc gọi FaceTime HD với bạn bè, người thân của mình.
    </p>
    <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
        <img style="box-sizing:inherit;height:auto;max-width:100%;" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/laptop/macbook/Air/M2-2023/mac-studio-m2-max-2023-9.png" alt="Màn hình ' . $nameMac . '" loading="lazy" width="810" height="456">
    </p>
    <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
        Chưa hết, hệ thống âm thanh trên Macbook Air 2023 này còn được đánh giá rất cao về độ sống động, chân thực. Với công nghệ Spatial Audio kết hợp với Dolby Atmos, bạn có thể thoải mái tận hưởng âm thanh 3 chiều trong quá trình xem phim, nghe nhạc của mình nhé!
    </p>
    <h3 style="box-sizing:inherit;font-size:16px;margin:0px;padding:8px 0px;text-align:justify;">
        <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">Bàn phím Magic siêu êm ái cùng tính năng bảo mật Touch ID hiện đại</strong>
    </h3>
    <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
        Một điểm cộng khác của ' . $nameMac . ' tới từ bàn phím Magic thế hệ mới với cơ chế gõ vô cùng linh hoạt và khả năng thích nghi bất kỳ kiểu gõ nào. Đồng thời, hệ thống gõ nhập trên dòng Mac Air mới này còn được trang bị đèn nền thông minh, giúp cho việc trải nghiệm của người dùng trong môi trường ánh sáng yếu trở nên cực kỳ dễ dàng.&nbsp;
    </p>
    <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
        <img style="box-sizing:inherit;height:auto;max-width:100%;" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/laptop/macbook/Air/M2-2023/mac-studio-m2-max-2023-5.png" alt="Bàn phím ' . $nameMac . '" loading="lazy" width="810" height="456">
    </p>
    <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
        Ngoài ra, máy cũng đặc biệt được chú ý tới tính năng bảo mật Touch ID thế hệ mới. Nó không chỉ giúp nâng cao khả năng bảo mật mà còn hỗ trợ người dùng mở khoá, đăng nhập chỉ với 1 chạm đơn giản.
    </p>
    <h3 style="box-sizing:inherit;font-size:16px;margin:0px;padding:8px 0px;text-align:justify;">
        <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">Đa dạng cổng kết nối, hỗ trợ truyền dữ liệu tốc độ cao</strong>
    </h3>
    <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
        ' . $nameMac . ' cũng sẽ sở hữu 1 cổng sạc Magsafe, 2 cổng Thunderbolt, 1 jack 3.5 để cắm tai nghe tương tự như thế hệ Mac Air 2022 trước đó nhưng được cải tiến về mặt thông số và tốc độ truyền.&nbsp;
    </p>
    <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
        <img style="box-sizing:inherit;height:auto;max-width:100%;" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/laptop/macbook/Air/M2-2023/mac-studio-m2-max-2023-3.png" alt="Cổng kết nối trên ' . $nameMac . '" loading="lazy" width="810" height="456">
    </p>
    <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
        Cụ thể, 2 cổng Thunderbolt cho phép bạn sạc máy với công suất 70W hoặc dễ dàng kết nối với màn hình 6K. Đồng thời, giắc cắm tai nghe 3.5mm của Mac Air 15 inch năm 2023 cũng được nâng cấp với độ trở kháng tốt hơn, nâng cao trải nghiệm nghe nhạc người dùng.&nbsp;
    </p>
    <h2 style="box-sizing:inherit;font-size:21px;font-weight:400;margin:0px;padding:0px;text-align:justify;">
        <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">Mua Macbook Air M2 15 inch 2023 chính hãng tại Cybermart</strong>
    </h2>
    <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
        Cybermart hiện đang cung cấp ' . $nameMac . ' chính hãng với mức giá hợp lý cùng nhiều chương trình khuyến mãi siêu hấp dẫn. Với hệ thống cửa hàng trải dài toàn quốc, Cybermart là một thương hiệu phân phối đồ công nghệ uy tín và hoàn toàn xứng đáng để bạn tin tưởng và đặt mua Macbook Air 15" chính hãng.&nbsp;Hãy nhanh tay gọi điện tới hotline 1800 2097 để đặt hàng sản phẩm với giá ưu đãi bạn nhé!
    </p>
</div>',
                'short_description' => '
                    <p>✔️Máy mới Fullbox 100% - Chưa Active - Chính Hãng Apple<br>
                    ✔️Được hỗ trợ 1 đổi 1 trong 30 ngày nếu có lỗi từ nhà sản xuất<br>
                    ✔️Bảo hành chính hãng Apple 12 tháng</p>',
                'product_type' => 'new',
                'seo_title' => '' . $nameMac . '- Chip M2, Màn hình Retina, Hiệu Năng Vượt Trội',
                'promotion' => $pro,
                'seo_description' => 'Khám phá ' . $nameMac . ' với chip M2 mạnh mẽ, màn hình Retina sắc nét và thiết kế siêu mỏng. Hiệu năng vượt trội cho công việc và giải trí.',
                'category_id' => 2,
                'weight' => 0.8,
                'sub_category_id' => 16,
                'child_category_id' => rand(21, 25),
                'created_at' => now(),
            ]);
            // Thêm tên sản phẩm OPPO 
            DB::table('products')->insert([

                "name" => $nameOP,
                "slug" => Str::slug($nameOP . rand(0, 990), '-'),
                "image" =>  'oppo_' . rand(1, 18) . '.webp',
                'qty' => 200,
                'price' => round(rand(29000000, 33900000) / 10000) * 10000,
                'offer_price' => round(rand(15900000, 2900000) / 10000) * 10000,
                'offer_start_date' => now(),
                 'offer_end_date' => '2025-07-31',
                'sku' => 'SPOP' . rand(120, 140). rand(100, 1020),
                'video_link' => 'https://youtube.com',
                'long_description' => '
                       <div class="ksp-content p-2 mb-2" style="-webkit-text-stroke-width:0px;background-color:rgb(242, 242, 242);border-radius:0.5rem;box-sizing:inherit;color:rgb(74, 74, 74);font-size:16px;font-style:normal;font-weight:400;letter-spacing:normal;margin:auto;orphans:2;padding:0.5rem !important;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;width:800px;word-spacing:0px;">
        <h2 class="ksp-title has-text-centered" style="color:rgb(215, 0, 24);font-size:18px;margin:0px;padding:0px;text-align:center !important;">
            <strong>ĐẶC ĐIỂM NỔI BẬT</strong>
        </h2>
        <div style="box-sizing:inherit;">
            <ul style="box-sizing:inherit;list-style:none;margin-bottom:0px;margin-right:0px;margin-top:0px;overflow-y:auto;padding:0px;scrollbar-width:none;">
                <li style="box-sizing:inherit;display:flex;font-size:14px;line-height:1.45;margin-bottom:5px;margin-right:0px;margin-top:0px;padding:0px;text-align:left;">
                    <p style="margin-left:0px;">
                        Trải nghiệm hình ảnh mượt mà và sống động với màn hình 90Hz, cho bạn những thao tác vuốt chạm và chơi game mượt mà hơn.
                    </p>
                </li>
                <li style="box-sizing:inherit;display:flex;font-size:14px;line-height:1.45;margin-bottom:5px;margin-right:0px;margin-top:0px;padding:0px;text-align:left;">
                    <p style="margin-left:0px;">
                        Tận hưởng tốc độ internet siêu nhanh và ổn định với kết nối 5G, cho bạn tải xuống, xem video và chơi game online mượt mà hơn.
                    </p>
                </li>
                <li style="box-sizing:inherit;display:flex;font-size:14px;line-height:1.45;margin-bottom:5px;margin-right:0px;margin-top:0px;padding:0px;text-align:left;">
                    <p style="margin-left:0px;">
                        Lưu trữ thoải mái với bộ nhớ lớn 8GB RAM + 128GB ROM, cho bạn đa nhiệm mượt mà và lưu trữ nhiều ứng dụng, hình ảnh và video.
                    </p>
                </li>
                <li style="box-sizing:inherit;display:flex;font-size:14px;line-height:1.45;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px;text-align:left;">
                    <p style="margin-left:0px;">
                        Sử dụng thoải mái cả ngày dài với pin 5000mAh và sạc nhanh 33W, cho bạn sạc đầy pin nhanh chóng để tiếp tục sử dụng.
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <div style="-webkit-text-stroke-width:0px;box-sizing:inherit;color:rgb(74, 74, 74);font-family:Roboto, sans-serif;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:justify;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;">
        <blockquote style="box-sizing:inherit;color:rgb(100, 100, 100);margin:0px;padding:0px 0px 0px 20px;position:relative;">
            <p style="box-sizing:inherit;color:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
                <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">' . $nameOP . '</strong> <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">5G</strong> cung cấp trải nghiệm hình ảnh sắc nét tới từng chi tiết nhờ sở hữu<strong style="box-sizing:inherit;color:rgb(54, 54, 54);"> màn hình hiển thị LCD 6.72 inch Full HD+</strong> cùng tần số quét<strong style="box-sizing:inherit;color:rgb(54, 54, 54);"> 90Hz</strong> hiện đại. Sức mạnh bên trong của máy đến từ chipset<strong style="box-sizing:inherit;color:rgb(54, 54, 54);"> Dimensity 6020</strong>, <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">8GB RAM </strong>và bộ nhớ <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">256GB</strong>, hỗ trợ đáp ứng được mượt mà hầu hết các yêu cầu sử dụng hàng ngày. Ngoài ra, thế hệ OPPO smartphone này còn đi kèm với <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">cảm biến camera 50MP</strong> hiện đại cùng viên <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">pin 5,000 mAh</strong> và hỗ trợ <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">sạc nhanh 33W</strong>, đảm bảo nâng cấp vượt trội trải nghiệm quay chụp và thời lượng sử dụng.
            </p>
        </blockquote>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
            <img style="box-sizing:inherit;height:auto;max-width:100%;" src="https://i0.wp.com/hapigo.vn/wp-content/uploads/2022/04/Optimized-dien-thoai-oppo-moi-nhat-5.jpg?w=1864&ssl=1" alt="màn hình ' . $nameOP . ' hiển thị lớn với màn hình LCD 6.72 inch " loading="lazy" title="Đánh giá chi tiết điện thoại ' . $nameOP . '" width="810" height="372">
        </p>
        <h2 style="box-sizing:inherit;font-size:21px;font-weight:400;margin:0px;padding:0px;">
            <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">Vì sao nên mua điện thoại ' . $nameOP . '?</strong>
        </h2>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
            ' . $nameOP . ' là lựa chọn tuyệt vời cho người dùng tìm kiếm một chiếc điện thoại hiện đại, mạnh mẽ và thời trang. Với thiết kế lông vũ tỏa sáng, máy không chỉ thu hút ánh nhìn mà còn mang đến cảm giác sang trọng, tinh tế. Dưới đây là những điểm nổi bật nhất của ' . $nameOP . ':
        </p>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
            <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">- Màn hình FHD+ siêu sáng 6.72 inch</strong>: Đem lại trải nghiệm hình ảnh sắc nét và sống động, ngay cả dưới ánh nắng mạnh với độ sáng tối đa lên đến 680 nits.<br>
            &nbsp;
        </p>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
            <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">- Sạc nhanh SUPERVOOC 33W</strong>: Giúp nạp đầy pin một cách nhanh chóng, đảm bảo thiết bị luôn sẵn sàng sử dụng mọi lúc, mọi nơi.<br>
            &nbsp;
        </p>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
            <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">- Camera AI 50MP</strong>: Ghi lại mọi khoảnh khắc với độ phân giải cao và chi tiết sắc nét, đồng thời chế độ chân dung giúp nâng tầm nhiếp ảnh của bạn.<br>
            &nbsp;
        </p>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
            <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">- Pin 5000mAh</strong>: Dung lượng pin lớn cùng các chế độ tiết kiệm năng lượng giúp bạn sử dụng cả ngày dài mà không cần lo lắng về việc sạc pin.
        </p>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
            Những điểm nổi bật này không chỉ nâng cao trải nghiệm người dùng mà còn làm cho ' . $nameOP . ' trở thành sự lựa chọn hoàn hảo trong tầm giá.
        </p>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
            <img style="box-sizing:inherit;height:auto;max-width:100%;" src="https://i.ytimg.com/vi/3JY-28gldwk/maxresdefault.jpg" alt="Vì sao nên mua điện thoại ' . $nameOP . '?" loading="lazy" width="810" height="456">
        </p>
        <h2 style="box-sizing:inherit;font-size:21px;font-weight:400;margin:0px;padding:0px;text-align:justify;">
            <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">So sánh điện thoại ' . $nameOP . ' với Oppo A58</strong>
        </h2>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
            Khi chọn mua một chiếc smartphone, người dùng thường cân nhắc giữa nhiều dòng sản phẩm để tìm ra thiết bị phù hợp nhất với nhu cầu của mình. OPPO với nhiều dòng sản phẩm đa dạng, luôn là một trong những lựa chọn hàng đầu của người tiêu dùng. Hai sản phẩm nổi bật trong dòng A series là ' . $nameOP . ' và OPPO A58 đều sở hữu những đặc điểm riêng biệt về thiết kế, hiệu năng và tính năng. Xem ngay bảng so sánh sau đây để xem A79 có điểm gì nổi trội hơn so với A58 nhé!
        </p>
        <figure class="table" style="width:800px;">
            <table class="table table-bordered" style="background-color:rgb(255, 255, 255);border-collapse:collapse;border-spacing:0px;border:1px solid rgb(211, 211, 211);box-sizing:inherit;color:rgb(54, 54, 54);margin-bottom:1.5rem;">
                <tbody style="background-color:transparent;box-sizing:inherit;">
                    <tr class="success" style="background-color:rgb(223, 240, 216);box-sizing:inherit;color:rgb(61, 102, 17);font-size:12px;">
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">Thông số</strong>
                            </p>
                        </td>
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">OPPO&nbsp;A79 5G</strong>
                            </p>
                        </td>
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">OPPO A58</strong>
                            </p>
                        </td>
                    </tr>
                    <tr style="box-sizing:inherit;">
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                Màn hình&nbsp;
                            </p>
                        </td>
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                6.72 inch&nbsp;&nbsp;LCD (LTPS)
                            </p>
                        </td>
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                6.72 inch LCD (LTPS)
                            </p>
                        </td>
                    </tr>
                    <tr style="box-sizing:inherit;">
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                Độ phân giải
                            </p>
                        </td>
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                FHD+ (2400x1080)
                            </p>
                        </td>
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                FHD+ (2400×1080)
                            </p>
                        </td>
                    </tr>
                    <tr style="box-sizing:inherit;">
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                Màu sắc
                            </p>
                        </td>
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                Đen, Tím
                            </p>
                        </td>
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                Đen, Xanh
                            </p>
                        </td>
                    </tr>
                    <tr style="box-sizing:inherit;">
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                Chip
                            </p>
                        </td>
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                MediaTek Dimensity 6020
                            </p>
                        </td>
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                MediaTek Helio G85
                            </p>
                        </td>
                    </tr>
                    <tr style="box-sizing:inherit;">
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                RAM
                            </p>
                        </td>
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                8GB
                            </p>
                        </td>
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                6GB
                            </p>
                        </td>
                    </tr>
                    <tr style="box-sizing:inherit;">
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                Bộ nhớ trong
                            </p>
                        </td>
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                256GB
                            </p>
                        </td>
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                128GB
                            </p>
                        </td>
                    </tr>
                    <tr style="box-sizing:inherit;">
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                Camera sau
                            </p>
                        </td>
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                50MP + 2MP
                            </p>
                        </td>
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                50MP + 2MP
                            </p>
                        </td>
                    </tr>
                    <tr style="box-sizing:inherit;">
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                Camera trước
                            </p>
                        </td>
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                8MP
                            </p>
                        </td>
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                8MP
                            </p>
                        </td>
                    </tr>
                    <tr style="box-sizing:inherit;">
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                Dung lượng pin
                            </p>
                        </td>
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                5000mAh
                            </p>
                        </td>
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                5000mAh
                            </p>
                        </td>
                    </tr>
                    <tr style="box-sizing:inherit;">
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                Cổng sạc
                            </p>
                        </td>
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                USB Type-C
                            </p>
                        </td>
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:1px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                USB Type-C
                            </p>
                        </td>
                    </tr>
                    <tr style="box-sizing:inherit;">
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:0px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                Trọng lượng
                            </p>
                        </td>
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:0px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                khoảng&nbsp;193g
                            </p>
                        </td>
                        <td style="border-bottom-color:rgb(219, 219, 219);border-bottom-width:0px;border-image:initial;border-left-color:rgb(211, 211, 211);border-left-width:1px;border-right-color:rgb(211, 211, 211);border-right-width:1px;border-style:solid;border-top-color:rgb(219, 219, 219);border-top-width:0px;box-sizing:inherit;padding:0.5em 0.75em 0.5em 5px;text-align:center;vertical-align:top;">
                            <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;">
                                Khoảng 192g
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </figure>
        <h2 style="box-sizing:inherit;font-size:21px;font-weight:400;margin:0px;padding:0px;text-align:justify;">
            <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">Điện thoại ' . $nameOP . ' có gì mới so với thế hệ trước</strong>
        </h2>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
            Tháng 10 vừa rồi, thị trường smartphone lại chứng kiến thêm một sự ra mắt đầy ấn tượng của một ấn phẩm điện thoại mới mang tên <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">' . $nameOP . '</strong> <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">5G</strong>. Nổi bật với thiết kế mỏng nhẹ, tinh tế cùng màn hình lớn, chipset Dimensity mạnh mẽ, máy hứa hẹn cung cấp trải nghiệm siêu mượt mà, đa nhiệm ổn định trong các tác vụ hàng ngày. Dưới đây là một vài điểm nhấn trên thông số kỹ thuật của điện thoại OPPO phiên bản A79 mà bạn có thể tìm hiểu thêm nhé!
        </p>
        <h3 style="box-sizing:inherit;font-size:16px;margin:0px;padding:8px 0px;text-align:justify;">
            <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">A79 OPPO sở hữu chipset Dimensity thế hệ mới</strong>
        </h3>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
            Ưu điểm nổi bật nhận được nhiều sự quan tâm của người dùng trên ' . $nameOP . ' là sức mạnh xử lý mạnh mẽ với cấu hình đỉnh cao. Cụ thể, máy sẽ được trang bị bộ vi xử lý <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">MediaTek Dimensity 6020</strong>, <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">RAM 8 GB</strong> và bộ nhớ trong lên đến<strong style="box-sizing:inherit;color:rgb(54, 54, 54);"> 256 GB</strong>. Thông qua ưu điểm ấn tượng này, máy dễ dàng đem lại những trải nghiệm mượt mà và nhanh chóng cho người dùng trong những tác vụ thông thường.&nbsp;
        </p>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
            <img style="box-sizing:inherit;height:auto;max-width:100%;" src="https://specificationsplus.com/wp-content/uploads/2022/08/Oppo-A18-Specifications-Plus.jpg" alt="A79 OPPO sở hữu hiệu năng vượt trội MediaTek Dimensity 602" loading="lazy" title="Điện thoại ' . $nameOP . ' sở hữu hiệu năng vượt trội với chipset Dimensity thế hệ mới" width="810" height="456">
        </p>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
            Bên cạnh đó, điện thoại ' . $nameOP . ' còn được ưu ái vận hành trên <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">nền hệ điều hành ColorOS</strong>&nbsp;dựa trên nền tảng <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">Android</strong>. Qua đó, nó mang đến trải nghiệm sử dụng cực kỳ thú vị và mượt mà cho người dùng, cũng như sẵn sàng đối mặt với nhiều tác vụ đòi hỏi hiệu suất cao.
        </p>
        <h3 style="box-sizing:inherit;font-size:16px;margin:0px;padding:8px 0px;text-align:justify;">
            <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">Cụm camera ' . $nameOP . ' sở hữu độ phẩn giải 50MP</strong>
        </h3>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
            Về khả năng chụp ảnh, ghi hình, A79 5G cũng được đánh giá là không hề thua kém bất kỳ dòng máy nào cùng tầm giá hiện nay. Theo đó, máy sẽ được đi kèm với cụm camera sau kép sử dụng cảm biến chính <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">50MP</strong> và camera chân dung<strong style="box-sizing:inherit;color:rgb(54, 54, 54);"> 2MP</strong>, cung cấp chất lượng hình ảnh cực đỉnh.&nbsp;
        </p>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
            <img style="box-sizing:inherit;height:auto;max-width:100%;" src="https://www.oppo.com/content/dam/oppo/product-asset-library/a/a98-5g/v1/assets/images-kv-mo-phones-1-100.png.webp" alt="Camera điện thoại ' . $nameOP . ' trang bị nhiều tính năng tiện ích" loading="lazy" title="Camera điện thoại ' . $nameOP . ' trang bị nhiều tính năng tiện ích" width="810" height="456">
        </p>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
            Ở phía mặt trước, ' . $nameOP . ' sẽ được trang bị<strong style="box-sizing:inherit;color:rgb(54, 54, 54);"> camera selfie đơn 8MP</strong> và được tích hợp kèm các tính năng chụp ảnh hiện đại. Nhờ đó mà mọi bức hình selfie hay là cuộc gọi video trên dòng máy OPPO A này cũng đều sẽ được thể hiện với chất lượng cao, mang lại trải nghiệm nhiếp ảnh trên cả tuyệt vời.
        </p>
        <h3 style="box-sizing:inherit;font-size:16px;margin:0px;padding:8px 0px;text-align:justify;">
            <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">Thoải mái xử lý công việc, giải trí suốt ngày dài với dung lượng pin lớn</strong>
        </h3>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
            So với nhiều dòng máy OPPO A Series khác thì A79 OPPO dường như có sự nâng cấp về thời lượng sử dụng nhờ được trang bị viên<strong style="box-sizing:inherit;color:rgb(54, 54, 54);"> pin 5.000 mAh </strong>cùng chip xử lý tiết kiệm năng lượng. Nhờ đó, nó cung cấp khả năng sử dụng lâu dài, hỗ trợ mọi hoạt động hàng ngày cho người dùng mà không cần lo lắng về việc sạc pin thường xuyên.&nbsp;
        </p>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
            <img style="box-sizing:inherit;height:auto;max-width:100%;" src="https://cf.shopee.co.th/file/67095c6c07eb80e11cae1d5310d603b1" alt="Điện thoại ' . $nameOP . ' có dung lượng pin lớn" loading="lazy" title="Điện thoại ' . $nameOP . ' có dung lượng pin lớn" width="810" height="456">
        </p>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
            Chưa hết, máy còn sở hữu khả năng<strong style="box-sizing:inherit;color:rgb(54, 54, 54);"> sạc nhanh 33W</strong>, hỗ trợ nạp đầy pin chỉ trong thời gian ngắn. Qua đó, bạn sẽ có thể thoải mái làm việc, chơi game giải trí trên ' . $nameOP . ' mà không lo bị gián đoạn trải nghiệm nữa rồi nhé!&nbsp;
        </p>
        <h3 style="box-sizing:inherit;font-size:16px;margin:0px;padding:8px 0px;text-align:justify;">
            <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">Chất lượng hình ảnh rõ nét và chân thực hơn trên tấm nền LCD hiện đại</strong>
        </h3>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
            Bên cạnh những điểm nhấn ấn tượng về hiệu năng, camera và pin trên thì khả năng hiển thị của ' . $nameOP . ' cũng được đánh giá cực kỳ cao. Cụ thể, máy sẽ sở hữu <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">màn hình LCD 6.72 inch</strong> với độ phân giải <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">Full HD+</strong>. Tấm nền này sẽ đi kèm với tốc độ lấy mẫu cảm ứng <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">180Hz</strong> và tốc độ làm mới <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">90Hz</strong>, cung cấp một trải nghiệm mượt mà và hiển thị rõ ràng ở mọi tiêu chí sử dụng.
        </p>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
            <img style="box-sizing:inherit;height:auto;max-width:100%;" src="https://i.ytimg.com/vi/Gn3bNZajf2c/maxresdefault.jpg" alt="Màn hình điện thoại ' . $nameOP . ' có chất lượng rõ nét" loading="lazy" title="Màn hình điện thoại ' . $nameOP . ' có chất lượng rõ nét" width="810" height="456">
        </p>
        <h2 style="box-sizing:inherit;font-size:21px;font-weight:400;margin:0px;padding:0px;text-align:justify;">
            <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">Điện thoại ' . $nameOP . ' khi nào ra mắt?</strong>
        </h2>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
            <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">Trong cuối tháng 10 năm 2023</strong>, điện thoại ' . $nameOP . ' đã chính thức được ra mắt, tạo ra sự chú ý lớn trong ngành công nghiệp di động. Sự kiện này được đánh giá là một bước tiến quan trọng của OPPO, đưa sản phẩm hãng đến với người dùng với những cải tiến và tính năng mới đáng chú ý.&nbsp;
        </p>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
            <img style="box-sizing:inherit;height:auto;max-width:100%;" src="https://www.techyloud.com/wp-content/uploads/2022/09/Oppo-A17-1024x640.jpg" alt="Điện thoại ' . $nameOP . ' khi nào ra mắt" loading="lazy" title="Điện thoại ' . $nameOP . ' khi nào ra mắt?" width="810" height="456">
        </p>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
            Với việc cung cấp các thông số kỹ thuật mạnh mẽ, ' . $nameOP . ' hứa hẹn mang đến trải nghiệm hoàn hảo với màn hình lớn, camera tiên tiến và nhiều tính năng hấp dẫn khác. Sự ra mắt của ' . $nameOP . ' đã thu hút sự quan tâm lớn từ người tiêu dùng và chắc chắn là một trong những sản phẩm được mong đợi trong thị trường di động thời gian tới đây.&nbsp;
        </p>
        <h2 style="box-sizing:inherit;font-size:21px;font-weight:400;margin:0px;padding:0px;text-align:justify;">
            <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">Điện thoại ' . $nameOP . ' giá bao nhiêu?</strong>
        </h2>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
            Điện thoại ' . $nameOP . ' đã chính thức ra mắt tại thị trường Ấn Độ với hai tùy chọn màu sắc rất hấp dẫn, bao gồm Xanh phát sáng và Đen huyền bí. Máy hiện đang nằm trong tầm giá chỉ từ<strong style="box-sizing:inherit;color:rgb(54, 54, 54);"> 19,999 INR</strong>, tương đương với <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">khoảng 5.9 triệu đồng</strong> Việt Nam.&nbsp;
        </p>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
            <img style="box-sizing:inherit;height:auto;max-width:100%;" src="https://cf.shopee.co.th/file/55a8d9a18de642e547899425d5a4bbeb" alt="Điện thoại ' . $nameOP . ' giá bao nhiêu" loading="lazy" title="Điện thoại ' . $nameOP . ' giá bao nhiêu" width="810" height="456">
        </p>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
            Mức giá này của ' . $nameOP . ' được đánh giá là khá hợp lý so với các tính năng mạnh mẽ và thiết kế thu hút của sản phẩm. Nó không chỉ đáp ứng được nhu cầu về hiệu suất mà còn mang đến sự lựa chọn về màu sắc phù hợp với sở thích cá nhân của người tiêu dùng.
        </p>
        <h2 style="box-sizing:inherit;font-size:21px;font-weight:400;margin:0px;padding:0px;text-align:justify;">
            <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">Mua ' . $nameOP . ' chính hãng, giá hấp dẫn tại Cybermart</strong>
        </h2>
        <p style="box-sizing:inherit;font-size:15px;font-weight:500;line-height:1.5;margin:0px 0px 10px;padding:0px;text-align:justify;">
            Để mua sắm <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">điện thoại ' . $nameOP . '</strong> chính hãng với mức giá thành hấp dẫn thì <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">Cybermart</strong>là một trong những địa điểm đáng tin cậy mà bạn có thể xem xét. Với uy tín đã được thị trường công nhận, Cybermart cung cấp các sản phẩm chất lượng và dịch vụ hậu mãi tốt. Nơi đây cung cấp một loạt các sản phẩm điện thoại di động từ các nhãn hiệu hàng đầu, đảm bảo rằng bạn sẽ có cơ hội sở hữu chiếc điện thoại ' . $nameOP . ' với giá cạnh tranh và chất lượng đảm bảo.&nbsp;Kết nối tới<strong style="box-sizing:inherit;color:rgb(54, 54, 54);"> hotline 1800 2097</strong> của <strong style="box-sizing:inherit;color:rgb(54, 54, 54);">Cybermart </strong>để nhận ngay báo giá tốt và được hỗ trợ đặt mua dòng điện thoại OPPO mới này ngay bạn nhé!&nbsp;
        </p>
    </div>
                        ',
                'short_description' => '
                        <p>✔️Máy mới Fullbox 100% - Chưa Active - Chính Hãng Oppo<br>
                        ✔️Được hỗ trợ 1 đổi 1 trong 30 ngày nếu có lỗi từ nhà sản xuất<br>
                        ✔️Bảo hành chính hãng Oppo 12 tháng</p>',
                'specifications' => '
            <table id="tskt" class="table table-striped">
    <tbody>
    <tr>
        <td>Hãng sản xuất</td>
        <td>Oppo</td>
    </tr>
    <tr>
        <td>Kích thước màn hình</td>
        <td>6.7&nbsp;inches</td>
    </tr>
    <tr>
        <td>Độ phân giải màn hình</td>
        <td>2796&nbsp;x 1290&nbsp;pixels</td>
    </tr>
    <tr>
        <td>Loại màn hình</td>
        <td>OLED LPTS</td>
    </tr>
    <tr>
        <td>Bộ nhớ trong</td>
        <td>1TB</td>
    </tr>
    <tr>
        <td>Chipset</td>
        <td>Oppo A16 Bionic</td>
    </tr>
    <tr>
        <td>CPU</td>
        <td>Oppo A16 Bionic&nbsp;120Hz</td>
    </tr>
    <tr>
        <td>GPU</td>
        <td>Oppo GPU (5 lõi)</td>
    </tr>
    <tr>
        <td>Kích thước</td>
        <td>160.7 x 77.6 x 7.9 mm</td>
    </tr>
    <tr>
        <td>Trọng lượng</td>
        <td>240 g</td>
    </tr>
    <tr>
        <td>Camera sau</td>
        <td>Camera chính: 48MP<br>
        Camera góc siêu rộng: 12MP<br>
        Camera tele: 12MP</td>
    </tr>
    <tr>
        <td>Camera trước</td>
        <td>12 MP</td>
    </tr>
    <tr>
        <td>Quay video</td>
        <td>4K @24 fps, 25 fps, 30 fps, 60 fps<br>
        1080p @25 fps, 30 fps, 60 fps<br>
        720p @30 fps<br>
        4K HDR @30 fps<br>
        2.8K @ 60 fps<br>
        HDR với Dolby Vision @60 fps<br>
        ProRes 4K @30fps<br>
        Chuyển động chậm 1080p @ 120fps, 240 fps</td>
    </tr>
    <tr>
        <td>Pin</td>
        <td>Li - Ion, Không thể thay thế</td>
    </tr>
    <tr>
        <td>Cổng sạc</td>
        <td>Lightning</td>
    </tr>
    <tr>
        <td>Loại SIM</td>
        <td>Nano SIM, eSIM</td>
    </tr>
    <tr>
        <td>Hệ điều hành</td>
        <td>iOS</td>
    </tr>
    <tr>
        <td>Phiên bản hệ điều hành</td>
        <td>iOS 16.2</td>
    </tr>
    <tr>
        <td>Khe cắm thẻ nhớ</td>
        <td>Không</td>
    </tr>
    <tr>
        <td>3G</td>
        <td>HSPA 42.2/5.76 Mbps, EV-DO Rev.A 3.1 Mbps</td>
    </tr>
    <tr>
        <td>4G</td>
        <td>LTE-A (4CA) Cat16 1024/150 Mbps</td>
    </tr>
    <tr>
        <td>5G</td>
        <td>mmWave, Sub-6 GHz</td>
    </tr>
    <tr>
        <td>WLAN</td>
        <td>Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot</td>
    </tr>
    <tr>
        <td>Bluetooth</td>
        <td>Bluetooth 5.3</td>
    </tr>
    <tr>
        <td>GPS</td>
        <td>A-GPS, GLONASS, GALILEO, QZSS</td>
    </tr>
    <tr>
        <td>NFC</td>
        <td>Yes</td>
    </tr>
    <tr>
        <td>Cảm biến</td>
        <td>Cảm biến gia tốc, Cảm biến tiệm cận, Cảm biến ánh sáng, La bàn, Con quay hồi chuyển, Cảm biến áp kế</td>
    </tr>
    </tbody></table>
                       ',
                'product_type' => 'new',
                'seo_title' => 'Đánh giá chi tiết điện thoại ' . $nameOP . ': Thiết kế, hiệu năng, camera, pin',
                'promotion' => $pro,
                'seo_description' => 'Điện thoại ' . $nameOP . ' là sản phẩm mới với màn hình lớn 6.72 inch, chip Dimensity 6020, RAM 8GB, camera sau 50MP, pin 5000mAh và hỗ trợ sạc nhanh 33W. Xem ngay đánh giá chi tiết về thiết kế, hiệu năng, camera và pin để chọn mua điện thoại phù hợp nhất với nhu cầu của bạn.',
                'category_id' => 1,
                'weight' => 0.5,
                'sub_category_id' => 4,
                'child_category_id' => rand(18, 20),
                'created_at' => now(),
                "status" => 1

            ]);
            // Thêm tên sản phẩm Laptop MSi
            DB::table('products')->insert([
                "name" => $nameMSI,
                "slug" => Str::slug($nameMSI . rand(0, 990), '-'),
                "image" =>  'msi_' . rand(1, 17) . '.webp',
                'qty' => 200,
                'price' => round(rand(29000000, 33900000) / 10000) * 10000,
                'offer_price' => round(rand(15900000, 2900000) / 10000) * 10000,
                'offer_start_date' => now(),
                 'offer_end_date' => '2025-07-31',
                'sku' => 'SPMSI' . rand(120, 140). rand(100, 1020),
                'video_link' => 'https://youtube.com',
                'long_description' => '
                    <div id="cpsContent" class="cps-block-content"><div class="ksp-content p-2 mb-2"><h2 class="ksp-title has-text-centered">ĐẶC ĐIỂM NỔI BẬT</h2> <div><ul><li>Mang vẻ ngoài vô cùng tân tiến với đường nét đều mạnh mẽ, cá tính</li><li>CPU Intel Core i5-12450H đảm bảo tốc độ xử lý nhanh gọn</li><li>GPU RTX 4050 tân tiến&nbsp;cho ra khả năng xử lý đa tác vụ, từ chơi game đến làm việc</li><li>Không gian lưu trữ rộng rãi với 512GB SSD, lưu trữ mọi tài liệu, game và phần mềm</li><li>Màn hình 15.6 inch Full HD cùng tần số quét 144Hz, đảm bảo thao tác mượt mà, bắt kịp mọi chuyển động</li></ul></div></div> <div><h2 style="text-align: justify;"><strong>' . $nameMSI . ' – Cân mọi tựa game </strong></h2> <p style="text-align: justify;">' . $nameMSI . ' thuộc dòng <a href="https://cybermart.io.vn/" title="' . $nameMSI . ' chính hãng" target="_blank"><strong>' . $nameMSI . '</strong></a> cao cấp với hiệu năng xuất sắc. Với công nghệ xử lý hàng đầu kết hợp cùng những linh kiện chất lượng cao, phiên bản rất xứng đáng để các game thủ trang bị cho nhu cầu sử dụng của bản thân.</p> <h3 style="text-align: justify;"><strong> CPU mạnh mẽ, card đồ họa tân tiến </strong></h3> <p style="text-align: justify;">' . $nameMSI . ' được thiết kế với bộ chip i5-12450H thế hệ thứ 12 của Intel có khả năng đảm nhiệm xử lý những ứng dụng nặng một cách hiệu quả. Bên cạnh đó, chiếc laptop gaming này còn gây ấn tượng với card đồ họa RTX 4050&nbsp;thuộc thế hệ RTX 40 Series. Nhờ sự kết hợp hoàn hảo giữa hai thông số này mà laptop có thể hoàn tất nhanh chóng mọi tác vụ đa nhiệm mà không lo gián đoạn.</p> <p style="text-align: justify;"><img src="https://cdn.shopify.com/s/files/1/0192/2088/9664/products/img2447_1800x1800.jpg?v=1603981323" alt="Hiệu năng ' . $nameMSI . '" loading="lazy"></p> <h3 style="text-align: justify;"><strong> RAM DDR5 8GB, ổ cứng 512GB SSD </strong></h3> <p style="text-align: justify;">Dòng <a href="https://cybermart.io.vn/" title="' . $nameMSI . '" target="_blank"><strong>' . $nameMSI . '</strong></a> được đầu tư ổ cứng SSD NVMe PCIe Gen 4 có dung lượng đến 512GB. Từ đó, máy có thể dễ dàng lưu trữ tất cả những dữ liệu trong bộ nhớ, cũng như tiết kiệm thời gian truy xuất đáng kể. Ngoài ra, laptop còn ẩn chứa bộ RAM 8GB có tốc độ truyền tải 5200MHz giúp người dùng nâng cao trải nghiệm giải trí khi chạy những phần mềm đòi hỏi yêu cầu cao.&nbsp;</p> <p style="text-align: justify;"><img src="https://phukienmaytinh.com.vn/wp-content/uploads/2020/02/MSI-GF63-3.jpg" alt="Cấu hình ' . $nameMSI . '" loading="lazy"></p> <h2 style="text-align: justify;"><strong> Mua ngay ' . $nameMSI . ' chính hãng tại Cybermart </strong></h2> <p style="text-align: justify;">' . $nameMSI . ' được đánh giá tích cực trong quá trình sử dụng với hiệu suất xử lý vượt trội. Đừng chần chừ đến Cybermart ngay từ bây giờ để sở hữu sản phẩm chất lượng với dịch vụ hỗ trợ tư vấn và giao hàng chuyên nghiệp, nhanh chóng.</p></div> </div> 
                  ',
                'short_description' => '
                        <p>✔️Máy mới Fullbox 100% - Chưa Active - Chính Hãng ' . $nameMSI . '<br>
                        ✔️Được hỗ trợ 1 đổi 1 trong 30 ngày nếu có lỗi từ nhà sản xuất<br>
                        ✔️Bảo hành chính hãng ' . $nameMSI . ' 12 tháng</p>',
                'specifications' => '
            <table id="tskt" class="table table-striped">
    <tbody>
    <tr>
        <td>Hãng sản xuất</td>
        <td>Laptop</td>
    </tr>
    <tr>
        <td>Loại card đồ họa</td>
        <td>NVIDIA GeForce RTX 4050 6GB 40W</td>
    </tr>
    <tr>
        <td>Độ phân giải màn hình</td>
        <td>2796&nbsp;x 1290&nbsp;pixels</td>
    </tr>
    <tr>
        <td>Loại màn hình</td>
        <td>OLED LPTS</td>
    </tr>
    <tr>
        <td>Bộ nhớ trong</td>
        <td>1TB</td>
    </tr>
    <tr>
        <td>Chipset</td>
        <td>' . $nameMSI . ' A16 Bionic</td>
    </tr>
    <tr>
        <td>CPU</td>
        <td>' . $nameMSI . ' A16 Bionic&nbsp;120Hz</td>
    </tr>
    <tr>
        <td>GPU</td>
        <td>' . $nameMSI . ' GPU (5 lõi)</td>
    </tr>
    <tr>
        <td>Kích thước</td>
        <td>160.7 x 77.6 x 7.9 mm</td>
    </tr>
    <tr>
        <td>Trọng lượng</td>
        <td>240 g</td>
    </tr>
    <tr>
        <td>Camera sau</td>
        <td>Camera chính: 48MP<br>
        Camera góc siêu rộng: 12MP<br>
        Camera tele: 12MP</td>
    </tr>
    <tr>
        <td>Camera trước</td>
        <td>12 MP</td>
    </tr>
    <tr>
        <td>Quay video</td>
        <td>4K @24 fps, 25 fps, 30 fps, 60 fps<br>
        1080p @25 fps, 30 fps, 60 fps<br>
        720p @30 fps<br>
        4K HDR @30 fps<br>
        2.8K @ 60 fps<br>
        HDR với Dolby Vision @60 fps<br>
        ProRes 4K @30fps<br>
        Chuyển động chậm 1080p @ 120fps, 240 fps</td>
    </tr>
    <tr>
        <td>Pin</td>
        <td>Li - Ion, Không thể thay thế</td>
    </tr>
    <tr>
        <td>Cổng sạc</td>
        <td>Lightning</td>
    </tr>
    <tr>
        <td>Loại SIM</td>
        <td>Nano SIM, eSIM</td>
    </tr>
    <tr>
        <td>Hệ điều hành</td>
        <td>iOS</td>
    </tr>
    <tr>
        <td>Phiên bản hệ điều hành</td>
        <td>iOS 16.2</td>
    </tr>
    <tr>
        <td>Khe cắm thẻ nhớ</td>
        <td>Không</td>
    </tr>
    <tr>
        <td>3G</td>
        <td>HSPA 42.2/5.76 Mbps, EV-DO Rev.A 3.1 Mbps</td>
    </tr>
    <tr>
        <td>4G</td>
        <td>LTE-A (4CA) Cat16 1024/150 Mbps</td>
    </tr>
    <tr>
        <td>5G</td>
        <td>mmWave, Sub-6 GHz</td>
    </tr>
    <tr>
        <td>WLAN</td>
        <td>Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot</td>
    </tr>
    <tr>
        <td>Bluetooth</td>
        <td>Bluetooth 5.3</td>
    </tr>
    <tr>
        <td>GPS</td>
        <td>A-GPS, GLONASS, GALILEO, QZSS</td>
    </tr>
    <tr>
        <td>NFC</td>
        <td>Yes</td>
    </tr>
    <tr>
        <td>Cảm biến</td>
        <td>Cảm biến gia tốc, Cảm biến tiệm cận, Cảm biến ánh sáng, La bàn, Con quay hồi chuyển, Cảm biến áp kế</td>
    </tr>
    </tbody></table>
                       ',
                'product_type' => 'new',
                'seo_title' => '' . $nameMSI . ' - Gaming Cao Cấp, Hiệu Năng Mạnh Mẽ, Giá Tốt',
                'promotion' => $pro,
                'seo_description' => 'Khám phá ' . $nameMSI . ' với CPU Intel Core i5-12450H, GPU RTX 4050 và màn hình 15.6 inch Full HD 144Hz. Hiệu năng vượt trội cho game thủ, lưu trữ rộng rãi với 512GB SSD và RAM DDR5 8GB. Mua ngay tại Cybermart với giá ưu đãi và dịch vụ tốt nhất.',
                'category_id' => 2,
                'weight' => 0.5,
                'sub_category_id' => 24,
                'child_category_id' => rand(43, 45),
                'created_at' => now(),
                "status" => 1

            ]);
            // thêm sản phẩm vào mảng âm thanh
            DB::table('products')->insert([
                'name' => $nameSounds,
                'slug' => Str::slug($nameSounds . rand(0, 990), '-'),
                'image' => 'sound_' . rand(1, 20) . '.webp',
                'qty' => 200,
                'price' => round(rand(29000000, 33900000) / 100000) * 100000,
                'offer_price' => round(rand(3000000, 10000000) / 100000) * 100000,
                'offer_start_date' => now(),
                'offer_end_date' => '2025-07-31',
                'sku' => 'SPS' . rand(100, 1020). rand(100, 1020),
                'video_link' => 'https://youtube.com',
                'short_description' => '
                <p>✔️Máy mới Fullbox 100% - Chưa Active - Chính Hãng ' . $nameSounds . '<br>
                ✔️Được hỗ trợ 1 đổi 1 trong 30 ngày nếu có lỗi từ nhà sản xuất<br>
                ✔️Bảo hành chính hãng ' . $nameSounds . ' 12 tháng</p>',
                'long_description' => '
                <div id="cpsContent" class="cps-block-content"><div class="ksp-content p-2 mb-2"><h2 class="ksp-title has-text-centered">ĐẶC ĐIỂM NỔI BẬT</h2> <div><ul><li>Tích hợp chip Apple H2 mang đến chất âm sống động cùng khả năng tái tạo âm thanh 3 chiều vượt trội</li><li>Công nghệ Bluetooth 5.3 kết nối ổn định, mượt mà, tiêu thụ năng lượng thấp, giúp tiết kiệm pin đáng kể</li><li>Chống ồn chủ động loại bỏ tiếng ồn hiệu quả gấp đôi thế hệ trước, giúp nâng cao trải nghiệm nghe nhạc</li><li>Chống nước chuẩn IPX4 trên tai nghe và hộp sạc, giúp bạn thỏa sức tập luyện không cần lo thấm mồ hôi</li></ul></div></div> <div><p style="text-align: justify;">Tại sự kiện ra mắt iPhone 14 series, Apple đã giới thiệu nhiều sản phẩm trong đó có tai nghe&nbsp;AirPods Pro thế hệ mới. Vậy&nbsp;Apple AirPods Pro 2 có gì nổi bật về thiết kế, chất âm ra sao? Có nên mua tai nghe AirPod Pro 2022 không?</p> <h2><strong><span><span><span>So sánh chi tiết&nbsp;<span>' . $nameSounds . ' với&nbsp;<span>' . $nameSounds . '</span></span></span></span></span></strong></h2> <p>So với thế hệ&nbsp;<span>' . $nameSounds . ' Magsafe được ra mắt trước đó thì&nbsp;<span>' . $nameSounds . ' có gì nâng cấp. cùng tìm hiểu chi tiết qua bảng so sánh sau.</span></span></p> <table class="table table-bordered"><tbody><tr class="success"><td></td> <td style="text-align: center;"><strong>' . $nameSounds . '</strong></td> <td style="text-align: center;"><strong>' . $nameSounds . '</strong></td></tr> <tr><td><p>Màu sắc</p></td> <td style="text-align: center;"><p>Trắng</p></td> <td style="text-align: center;"><p>Trắng</p></td></tr> <tr><td><p><span>Chống nước</span></p></td> <td style="text-align: center;"><p><span>Chống mồ hôi và nước (IPX4)</span></p></td> <td style="text-align: center;"><p><span>IPX4</span></p></td></tr> <tr><td><p><span>Phương thức điều khiển</span></p></td> <td style="text-align: center;"><p style="text-align: center;"><span>Chạm, cảm ứng</span></p></td> <td style="text-align: center;"><p style="text-align: center;"><span>Cảm ứng chạm</span></p></td></tr> <tr><td><p><span>Bluetooth</span></p></td> <td style="text-align: center;"><p style="text-align: center;"><span>Bluetooth 5.3</span></p></td> <td style="text-align: center;"><p style="text-align: center;"><span><span>Bluetooth&nbsp;</span>5.0</span></p></td></tr> <tr><td><p><span>Công nghệ âm thanh</span></p></td> <td style="text-align: center;"><p style="text-align: center;"><span>Chống ồn chủ động 2X</span><br><span>Spatial Audio</span></p></td> <td style="text-align: center;"><p style="text-align: center;"><span>Chống ồn chủ động</span><br><span>Xuyên âm</span></p></td></tr> <tr><td><p><span>Số thiết bị kết nối cùng lúc</span></p></td> <td style="text-align: center;"><p style="text-align: center;"><span>2</span></p></td> <td style="text-align: center;"><p style="text-align: center;">1</p></td></tr> <tr><td><p><span>Thơi lượng pin</span></p></td> <td style="text-align: center;"><p style="text-align: center;"><span>6 giờ</span></p> <p style="text-align: center;"><span>30 giờ kèm hộp sạc</span></p></td> <td style="text-align: center;"><p style="text-align: center;"><span>Tai nghe : 4.5 giờ</span></p> <p style="text-align: center;"><span>Hộp sạc : 24 giờ</span></p></td></tr> <tr><td><p>Chip</p></td> <td style="text-align: center;"><p style="text-align: center;"><span>Apple H2</span></p> <p style="text-align: center;"><span><span>Apple U1</span></span></p></td> <td style="text-align: center;"><p style="text-align: center;"><span>Apple H1</span></p></td></tr> <tr><td><p>Cổng kết nối</p></td> <td style="text-align: center;"><p style="text-align: center;"><span>Lightning</span></p></td> <td style="text-align: center;"><p style="text-align: center;"><span>Lightning</span></p></td></tr></tbody></table> <h2 style="text-align: justify;"><strong>Tai nghe Apple AirPods Pro 2 - Thiết kế không đổi, pin cải thiện</strong></h2> <p style="text-align: justify;">Sau thế hệ&nbsp;AirPods Pro được ra mắt năm 2021, Apple tiếp tục cho ra mắt phiên bản <strong><a href="https://cybermart.io.vn/product/am-thanh" target="_blank">tai nghe</a></strong> mới trong sự kiện ra mắt iPhone 14 series mang tên&nbsp;Apple AirPods Pro thế hệ thứ 2. Tuy&nbsp;Apple AirPods Pro 2 không có quá nhiều đổi mới trong thiết kế nhưng cấu hình cùng chất âm trên thiết bị sẽ được cải thiện đáng kể.</p> <h3 style="text-align: justify;"><strong>Thiết kế không đổi, sử dụng vật liệu tái chế thân thiện môi trường</strong></h3> <p style="text-align: justify;">Tương tự như trên các dòng iPhone, Apple cũng sử dụng chung thiết kế cho nhiều dòng AirPods của mình. Thế hệ AirPods mới này sẽ tiếp tục sở hữu thiết kế của người tiền nhiệm khi ngoại hình thiết bị không có quá nhiều thay đổi. Tai nghe vẫn sở hữu màu trắng quen thuộc và sẽ không có phiên bản màu khác cho người dùng lựa chọn.</p> <p style="text-align: justify;"><img src="https://dareu.com.vn/wp-content/uploads/2021/04/tai-nghe-gaming-dareu-eh416-rgb-01.png" alt="Đánh giá thiết kế ' . $nameSounds . '" loading="lazy"></p> <p style="text-align: justify;">Về thiết kế hộp sạc, Apple sử dụng 100% nguyên vật liệu tái chế cho hộp sạc, với mục đích bảo vệ môi trường. Có một thay đổi nhỏ trong thiết kế AirPods Pro 2 đó chính là Apple trang bị thêm loa ở cạnh dưới để người dùng có thể dễ dàng tìm kiếm thiết bị, định vị vị trí thông qua tính năng Find My.</p> <p style="text-align: justify;">Tai nghe AirPods Pro 2 vẫn được trang bị đuôi nhắn cùng housing nghiêng góc. Người dùng sẽ có bốn đầu tips để sử dụng cho từng kích thước tai.</p> <p style="text-align: justify;"><img src="https://hanoicomputercdn.com/media/lib/45444_tai-nghe-dareu-eh925s-rgb-black-red.jpg" alt="Đánh giá thiết kế ' . $nameSounds . '" loading="lazy"></p> <p style="text-align: justify;">Ngoài ra, cả tai nghe và hộp sạc AirPods Pro 2022 đều được Apple trang bị chuẩn kháng nước và bụi bẩn IPX4</p> <p style="text-align: justify;">Xem thêm mẫu tai nghe <strong><a href="https://cybermart.io.vn/product/am-thanh" target="_blank">Airpods Pro 2</a></strong> USB-C mới đang có giá cực tốt.</p> <h3 style="text-align: justify;"><strong>Chip H2 mạnh mẽ, khả năng chống ồn gấp đôi</strong></h3> <p style="text-align: justify;">AirPod Pro 2 được trang bị chip H2, con chip mới được nghiên cứu và phát triển giúp cải thiện chất lượng âm thanh trên thiết bị, cho phép giảm thiểu tình trạng méo tiếng mang lại âm trầm sâu cùng âm cao rõ nét.</p> <p style="text-align: justify;"><img src="https://ben.com.vn/tin-tuc/wp-content/uploads/2020/06/phan_loai_tai_nghe_co_ban___bencomputer1.jpg" alt="Đánh giá cấu hình ' . $nameSounds . '" loading="lazy"></p> <p style="text-align: justify;">Khả năng chống ồn chủ động trên AirPods Pro 2 cũng được cải thiện đáng kể. Cụ thể khả năng chống ồn chủ động ANC với thuật toán cùng phần cứng mới đã được cải thiện gấp 2 lần so với AirPods Pro đời đầu.</p> <p style="text-align: justify;">Ngoài ra, thiết bị còn được trang bị chế độ thích ứng thông minh cho phép loại bỏ âm thanh từ môi trường khi người dùng đi qua khu vực âm thanh lớn, bảo vệ đôi tai người dùng.</p> <p style="text-align: justify;"><img src="https://phukiengiare.com/images/detailed/63/tai-nghe-bluetooth-baseus-w04-pro-1.jpg" alt="Đánh giá khả năng chống ồn" loading="lazy"></p> <p style="text-align: justify;">Tai nghe AirPods Pro 2 được trang bị micro với thiết kế hướng vào trong kết hợp với các thuật toán nâng cao giúp thiết bị có thể nhận dạng giọn nói của người dùng giúp đem lại chất lượng các cuộc gọi rõ nét hơn.</p> <h3 style="text-align: justify;"><strong>Điều khiển cảm ứng tiện lợi, dung lượng pin được cải thiện</strong></h3> <p style="text-align: justify;">Trên đuôi tai nghe, tính năng cảm ứng lực và cảm ứng điện dung cũng được Apple nâng cấp cho phép người dùng có thể điều hướng một cách dễ dàng.</p> <p style="text-align: justify;">Cụ thể, người dùng thực hiện:</p> <ul style="text-align: justify;"><li>-&nbsp; &nbsp; &nbsp;Vuốt lên hoặc xuống: điều chỉnh âm lượng</li> <li><span>-&nbsp; &nbsp; &nbsp;</span>Nhấn: Phát – tạm dừng phát nhạc, trả lời hoặc kết thúc cuộc gọi</li> <li><span>-&nbsp; &nbsp; &nbsp;</span>Giữ: Chuyển đổi tính năng chống ồn chủ động hoặc thích ứng</li></ul> <p style="text-align: justify;"><img src="https://cf.shopee.vn/file/d1d8b2b17d753059452f1e8ffcfcdd08" alt="Điều khiển cảm ứng tiện lợi" loading="lazy"></p> <p style="text-align: justify;">Về thời lượng sử dụng, AirPods Pro 2 này cho thời gian sử dụng tới 6 giờ khi sử dụng kèm tính năng chống ồn, và tắt ANC thì thời gian có thể lên tới 30 giờ. Người dùng có thể sử dụng bộ sạc MagSafe&nbsp;hoặc đầu nối Lightning để bổ sung năng lượng cho thiết bị nhanh chóng.</p> <p style="text-align: justify;"><img src="https://fptshop.com.vn/Uploads/Originals/2022/8/8/637955569082653401_HASP-TAINGHE-SOUNDMAX-AH335-AVT.jpg" alt="dung lượng pin được cải thiện" loading="lazy"></p> <h2 style="text-align: justify;"><strong>Giá AirPods Pro 2 bao nhiêu tiền? Ra mắt khi nào?</strong></h2> <p style="text-align: justify;">Tai nghe không dây AirPods Pro 2022 đã chính thức được Apple giới thiệu trong sự kiện ra mắt iPhone 14 Series, diễn ra vào khuya 7/9 theo giờ Mỹ.</p> <p style="text-align: justify;">Về giá bán, tai nghe có có giá khởi điểm là 249 USD – tương đương 5.9 triệu đồng. Khi về chính hãng tại Việt Nam, tai nghe có giá bán dự kiến trong đợt mở bán đầu tiên khoảng 6.99 triệu đồng.</p> <p style="text-align: justify;"><img src="https://cdn.tgdd.vn/Files/2022/01/30/1413644/cac-thuong-hieu-tai-nghe-tot-va-duoc-ua-chuong-nha.jpg" alt=" Giá bán và ngày ra mắt của tai nghe ' . $nameSounds . '" loading="lazy"></p> <h2 style="text-align: justify;"><strong>Đặt trước AirPod Pro 2 giá tốt, ưu đãi hấp dẫn tại Cybermart</strong></h2> <p style="text-align: justify;">Hệ thống Cybermart cập nhật các sản phẩm mới từ Apple và phân phối đến cho các tín đồ công nghệ Việt trong đó có cả tai nghe AirPods Pro 2022. Sản phẩm được bán chính hãng tại hệ thống Cybermart với giá bán ưu đãi. Cùng với đó, hệ thống cũng hỗ trợ khách hàng mua trả góp tai nghe&nbsp;AirPods với lãi suất từ 0%. Trong suốt thời gian 12 tháng kể từ ngày mua hàng, sản phẩm sẽ được bảo hành theo chính sách từ hãng nếu có phát sinh lỗi từ nhà sản xuất tại trung tâm bảo hành ủy quyền Cybermart.</p></div></div> 
                ',
                'specifications' => '
               <table id="tskt" class="table table-striped">
<tbody>
<tr>
	<td>Hãng sản xuất</td>
	<td>Sounds</td>
</tr>
<tr>
	<td>Kích thước màn hình</td>
	<td>6.7&nbsp;inches</td>
</tr>
<tr>
	<td>Độ phân giải màn hình</td>
	<td>2796&nbsp;x 1290&nbsp;pixels</td>
</tr>
<tr>
	<td>Loại màn hình</td>
	<td>OLED LPTS</td>
</tr>
<tr>
	<td>Bộ nhớ trong</td>
	<td>1TB</td>
</tr>
<tr>
	<td>Chipset</td>
	<td>Oppo A16 Bionic</td>
</tr>
<tr>
	<td>CPU</td>
	<td>Oppo A16 Bionic&nbsp;120Hz</td>
</tr>
<tr>
	<td>GPU</td>
	<td>Oppo GPU (5 lõi)</td>
</tr>
<tr>
	<td>Kích thước</td>
	<td>160.7 x 77.6 x 7.9 mm</td>
</tr>
<tr>
	<td>Trọng lượng</td>
	<td>240 g</td>
</tr>
<tr>
	<td>Camera sau</td>
	<td>Camera chính: 48MP<br>
	Camera góc siêu rộng: 12MP<br>
	Camera tele: 12MP</td>
</tr>
<tr>
	<td>Camera trước</td>
	<td>12 MP</td>
</tr>
<tr>
	<td>Quay video</td>
	<td>4K @24 fps, 25 fps, 30 fps, 60 fps<br>
	1080p @25 fps, 30 fps, 60 fps<br>
	720p @30 fps<br>
	4K HDR @30 fps<br>
	2.8K @ 60 fps<br>
	HDR với Dolby Vision @60 fps<br>
	ProRes 4K @30fps<br>
	Chuyển động chậm 1080p @ 120fps, 240 fps</td>
</tr>
<tr>
	<td>Pin</td>
	<td>Li - Ion, Không thể thay thế</td>
</tr>
<tr>
	<td>Cổng sạc</td>
	<td>Lightning</td>
</tr>
<tr>
	<td>Loại SIM</td>
	<td>Nano SIM, eSIM</td>
</tr>
<tr>
	<td>Hệ điều hành</td>
	<td>iOS</td>
</tr>
<tr>
	<td>Phiên bản hệ điều hành</td>
	<td>iOS 16.2</td>
</tr>
<tr>
	<td>Khe cắm thẻ nhớ</td>
	<td>Không</td>
</tr>
<tr>
	<td>3G</td>
	<td>HSPA 42.2/5.76 Mbps, EV-DO Rev.A 3.1 Mbps</td>
</tr>
<tr>
	<td>4G</td>
	<td>LTE-A (4CA) Cat16 1024/150 Mbps</td>
</tr>
<tr>
	<td>5G</td>
	<td>mmWave, Sub-6 GHz</td>
</tr>
<tr>
	<td>WLAN</td>
	<td>Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot</td>
</tr>
<tr>
	<td>Bluetooth</td>
	<td>Bluetooth 5.3</td>
</tr>
<tr>
	<td>GPS</td>
	<td>A-GPS, GLONASS, GALILEO, QZSS</td>
</tr>
<tr>
	<td>NFC</td>
	<td>Yes</td>
</tr>
<tr>
	<td>Cảm biến</td>
	<td>Cảm biến gia tốc, Cảm biến tiệm cận, Cảm biến ánh sáng, La bàn, Con quay hồi chuyển, Cảm biến áp kế</td>
</tr>
</tbody></table>
                ',
                'product_type' => 'new',
                'seo_title' => '' . $nameSounds . ': Chống ồn, Âm Thanh Vượt Trội & Thiết Kế Bền Bỉ',
                'promotion' => $pro,
                'seo_description' => '' . $nameSounds . ' mang đến âm thanh 3D sống động với chip H2, công nghệ chống ồn hiệu quả gấp đôi thế hệ trước, và kết nối Bluetooth 5.3. Được thiết kế chống nước IPX4, tai nghe lý tưởng cho mọi hoạt động. Khám phá giá và đặt hàng ngay hôm nay!',
                'category_id' => 3,
                'weight' => 0.5,
                'sub_category_id' => rand(28, 33),
                'child_category_id' => rand(46, 50),
                'created_at' => now(),
            ]);
            DB::table('products')->insert([
                'name' => $nameLoa,
                'slug' => Str::slug($nameLoa . rand(0, 990), '-'),
                'image' => 'loa_' . rand(1, 27) . '.webp',
                'qty' => 200,
                'price' => round(rand(29000000, 33900000) / 100000) * 100000,
                'offer_price' => round(rand(3000000, 10000000) / 100000) * 100000,
                'offer_start_date' => now(),
                'offer_end_date' => '2025-07-31',
                'sku' => 'SPL' . rand(100, 1020). rand(100, 1020),
                'video_link' => 'https://youtube.com',
                'short_description' => '
                <p>✔️Máy mới Fullbox 100% - Chưa Active - Chính Hãng ' . $nameLoa . '<br>
                ✔️Được hỗ trợ 1 đổi 1 trong 30 ngày nếu có lỗi từ nhà sản xuất<br>
                ✔️Bảo hành chính hãng ' . $nameLoa . ' 12 tháng</p>',
                'long_description' => '
                <div id="cpsContent" class="cps-block-content"><div class="ksp-content p-2 mb-2"><h2 class="ksp-title has-text-centered">ĐẶC ĐIỂM NỔI BẬT</h2> <div><ul><li>Tích hợp chip Apple H2 mang đến chất âm sống động cùng khả năng tái tạo âm thanh 3 chiều vượt trội</li><li>Công nghệ Bluetooth 5.3 kết nối ổn định, mượt mà, tiêu thụ năng lượng thấp, giúp tiết kiệm pin đáng kể</li><li>Chống ồn chủ động loại bỏ tiếng ồn hiệu quả gấp đôi thế hệ trước, giúp nâng cao trải nghiệm nghe nhạc</li><li>Chống nước chuẩn IPX4 trên tai nghe và hộp sạc, giúp bạn thỏa sức tập luyện không cần lo thấm mồ hôi</li></ul></div></div> <div><p style="text-align: justify;">Tại sự kiện ra mắt iPhone 14 series, Apple đã giới thiệu nhiều sản phẩm trong đó có tai nghe&nbsp;AirPods Pro thế hệ mới. Vậy&nbsp;Apple AirPods Pro 2 có gì nổi bật về thiết kế, chất âm ra sao? Có nên mua tai nghe AirPod Pro 2022 không?</p> <h2><strong><span><span><span>So sánh chi tiết&nbsp;<span>' . $nameLoa  . ' với&nbsp;<span>' . $nameLoa  . '</span></span></span></span></span></strong></h2> <p>So với thế hệ&nbsp;<span>' . $nameLoa  . ' Magsafe được ra mắt trước đó thì&nbsp;<span>' . $nameLoa  . ' có gì nâng cấp. cùng tìm hiểu chi tiết qua bảng so sánh sau.</span></span></p> <table class="table table-bordered"><tbody><tr class="success"><td></td> <td style="text-align: center;"><strong>' . $nameLoa  . '</strong></td> <td style="text-align: center;"><strong>' . $nameLoa  . '</strong></td></tr> <tr><td><p>Màu sắc</p></td> <td style="text-align: center;"><p>Trắng</p></td> <td style="text-align: center;"><p>Trắng</p></td></tr> <tr><td><p><span>Chống nước</span></p></td> <td style="text-align: center;"><p><span>Chống mồ hôi và nước (IPX4)</span></p></td> <td style="text-align: center;"><p><span>IPX4</span></p></td></tr> <tr><td><p><span>Phương thức điều khiển</span></p></td> <td style="text-align: center;"><p style="text-align: center;"><span>Chạm, cảm ứng</span></p></td> <td style="text-align: center;"><p style="text-align: center;"><span>Cảm ứng chạm</span></p></td></tr> <tr><td><p><span>Bluetooth</span></p></td> <td style="text-align: center;"><p style="text-align: center;"><span>Bluetooth 5.3</span></p></td> <td style="text-align: center;"><p style="text-align: center;"><span><span>Bluetooth&nbsp;</span>5.0</span></p></td></tr> <tr><td><p><span>Công nghệ âm thanh</span></p></td> <td style="text-align: center;"><p style="text-align: center;"><span>Chống ồn chủ động 2X</span><br><span>Spatial Audio</span></p></td> <td style="text-align: center;"><p style="text-align: center;"><span>Chống ồn chủ động</span><br><span>Xuyên âm</span></p></td></tr> <tr><td><p><span>Số thiết bị kết nối cùng lúc</span></p></td> <td style="text-align: center;"><p style="text-align: center;"><span>2</span></p></td> <td style="text-align: center;"><p style="text-align: center;">1</p></td></tr> <tr><td><p><span>Thơi lượng pin</span></p></td> <td style="text-align: center;"><p style="text-align: center;"><span>6 giờ</span></p> <p style="text-align: center;"><span>30 giờ kèm hộp sạc</span></p></td> <td style="text-align: center;"><p style="text-align: center;"><span>Tai nghe : 4.5 giờ</span></p> <p style="text-align: center;"><span>Hộp sạc : 24 giờ</span></p></td></tr> <tr><td><p>Chip</p></td> <td style="text-align: center;"><p style="text-align: center;"><span>Apple H2</span></p> <p style="text-align: center;"><span><span>Apple U1</span></span></p></td> <td style="text-align: center;"><p style="text-align: center;"><span>Apple H1</span></p></td></tr> <tr><td><p>Cổng kết nối</p></td> <td style="text-align: center;"><p style="text-align: center;"><span>Lightning</span></p></td> <td style="text-align: center;"><p style="text-align: center;"><span>Lightning</span></p></td></tr></tbody></table> <h2 style="text-align: justify;"><strong>Tai nghe Apple AirPods Pro 2 - Thiết kế không đổi, pin cải thiện</strong></h2> <p style="text-align: justify;">Sau thế hệ&nbsp;AirPods Pro được ra mắt năm 2021, Apple tiếp tục cho ra mắt phiên bản <strong><a href="https://cybermart.io.vn/product/am-thanh" target="_blank">tai nghe</a></strong> mới trong sự kiện ra mắt iPhone 14 series mang tên&nbsp;Apple AirPods Pro thế hệ thứ 2. Tuy&nbsp;Apple AirPods Pro 2 không có quá nhiều đổi mới trong thiết kế nhưng cấu hình cùng chất âm trên thiết bị sẽ được cải thiện đáng kể.</p> <h3 style="text-align: justify;"><strong>Thiết kế không đổi, sử dụng vật liệu tái chế thân thiện môi trường</strong></h3> <p style="text-align: justify;">Tương tự như trên các dòng iPhone, Apple cũng sử dụng chung thiết kế cho nhiều dòng AirPods của mình. Thế hệ AirPods mới này sẽ tiếp tục sở hữu thiết kế của người tiền nhiệm khi ngoại hình thiết bị không có quá nhiều thay đổi. Tai nghe vẫn sở hữu màu trắng quen thuộc và sẽ không có phiên bản màu khác cho người dùng lựa chọn.</p> <p style="text-align: justify;"><img src="https://dareu.com.vn/wp-content/uploads/2021/04/tai-nghe-gaming-dareu-eh416-rgb-01.png" alt="Đánh giá thiết kế ' . $nameLoa  . '" loading="lazy"></p> <p style="text-align: justify;">Về thiết kế hộp sạc, Apple sử dụng 100% nguyên vật liệu tái chế cho hộp sạc, với mục đích bảo vệ môi trường. Có một thay đổi nhỏ trong thiết kế AirPods Pro 2 đó chính là Apple trang bị thêm loa ở cạnh dưới để người dùng có thể dễ dàng tìm kiếm thiết bị, định vị vị trí thông qua tính năng Find My.</p> <p style="text-align: justify;">Tai nghe AirPods Pro 2 vẫn được trang bị đuôi nhắn cùng housing nghiêng góc. Người dùng sẽ có bốn đầu tips để sử dụng cho từng kích thước tai.</p> <p style="text-align: justify;"><img src="https://hanoicomputercdn.com/media/lib/45444_tai-nghe-dareu-eh925s-rgb-black-red.jpg" alt="Đánh giá thiết kế ' . $nameLoa  . '" loading="lazy"></p> <p style="text-align: justify;">Ngoài ra, cả tai nghe và hộp sạc AirPods Pro 2022 đều được Apple trang bị chuẩn kháng nước và bụi bẩn IPX4</p> <p style="text-align: justify;">Xem thêm mẫu tai nghe <strong><a href="https://cybermart.io.vn/product/am-thanh" target="_blank">Airpods Pro 2</a></strong> USB-C mới đang có giá cực tốt.</p> <h3 style="text-align: justify;"><strong>Chip H2 mạnh mẽ, khả năng chống ồn gấp đôi</strong></h3> <p style="text-align: justify;">AirPod Pro 2 được trang bị chip H2, con chip mới được nghiên cứu và phát triển giúp cải thiện chất lượng âm thanh trên thiết bị, cho phép giảm thiểu tình trạng méo tiếng mang lại âm trầm sâu cùng âm cao rõ nét.</p> <p style="text-align: justify;"><img src="https://ben.com.vn/tin-tuc/wp-content/uploads/2020/06/phan_loai_tai_nghe_co_ban___bencomputer1.jpg" alt="Đánh giá cấu hình ' . $nameLoa  . '" loading="lazy"></p> <p style="text-align: justify;">Khả năng chống ồn chủ động trên AirPods Pro 2 cũng được cải thiện đáng kể. Cụ thể khả năng chống ồn chủ động ANC với thuật toán cùng phần cứng mới đã được cải thiện gấp 2 lần so với AirPods Pro đời đầu.</p> <p style="text-align: justify;">Ngoài ra, thiết bị còn được trang bị chế độ thích ứng thông minh cho phép loại bỏ âm thanh từ môi trường khi người dùng đi qua khu vực âm thanh lớn, bảo vệ đôi tai người dùng.</p> <p style="text-align: justify;"><img src="https://phukiengiare.com/images/detailed/63/tai-nghe-bluetooth-baseus-w04-pro-1.jpg" alt="Đánh giá khả năng chống ồn" loading="lazy"></p> <p style="text-align: justify;">Tai nghe AirPods Pro 2 được trang bị micro với thiết kế hướng vào trong kết hợp với các thuật toán nâng cao giúp thiết bị có thể nhận dạng giọn nói của người dùng giúp đem lại chất lượng các cuộc gọi rõ nét hơn.</p> <h3 style="text-align: justify;"><strong>Điều khiển cảm ứng tiện lợi, dung lượng pin được cải thiện</strong></h3> <p style="text-align: justify;">Trên đuôi tai nghe, tính năng cảm ứng lực và cảm ứng điện dung cũng được Apple nâng cấp cho phép người dùng có thể điều hướng một cách dễ dàng.</p> <p style="text-align: justify;">Cụ thể, người dùng thực hiện:</p> <ul style="text-align: justify;"><li>-&nbsp; &nbsp; &nbsp;Vuốt lên hoặc xuống: điều chỉnh âm lượng</li> <li><span>-&nbsp; &nbsp; &nbsp;</span>Nhấn: Phát – tạm dừng phát nhạc, trả lời hoặc kết thúc cuộc gọi</li> <li><span>-&nbsp; &nbsp; &nbsp;</span>Giữ: Chuyển đổi tính năng chống ồn chủ động hoặc thích ứng</li></ul> <p style="text-align: justify;"><img src="https://cf.shopee.vn/file/d1d8b2b17d753059452f1e8ffcfcdd08" alt="Điều khiển cảm ứng tiện lợi" loading="lazy"></p> <p style="text-align: justify;">Về thời lượng sử dụng, AirPods Pro 2 này cho thời gian sử dụng tới 6 giờ khi sử dụng kèm tính năng chống ồn, và tắt ANC thì thời gian có thể lên tới 30 giờ. Người dùng có thể sử dụng bộ sạc MagSafe&nbsp;hoặc đầu nối Lightning để bổ sung năng lượng cho thiết bị nhanh chóng.</p> <p style="text-align: justify;"><img src="https://fptshop.com.vn/Uploads/Originals/2022/8/8/637955569082653401_HASP-TAINGHE-SOUNDMAX-AH335-AVT.jpg" alt="dung lượng pin được cải thiện" loading="lazy"></p> <h2 style="text-align: justify;"><strong>Giá AirPods Pro 2 bao nhiêu tiền? Ra mắt khi nào?</strong></h2> <p style="text-align: justify;">Tai nghe không dây AirPods Pro 2022 đã chính thức được Apple giới thiệu trong sự kiện ra mắt iPhone 14 Series, diễn ra vào khuya 7/9 theo giờ Mỹ.</p> <p style="text-align: justify;">Về giá bán, tai nghe có có giá khởi điểm là 249 USD – tương đương 5.9 triệu đồng. Khi về chính hãng tại Việt Nam, tai nghe có giá bán dự kiến trong đợt mở bán đầu tiên khoảng 6.99 triệu đồng.</p> <p style="text-align: justify;"><img src="https://cdn.tgdd.vn/Files/2022/01/30/1413644/cac-thuong-hieu-tai-nghe-tot-va-duoc-ua-chuong-nha.jpg" alt=" Giá bán và ngày ra mắt của tai nghe ' . $nameLoa  . '" loading="lazy"></p> <h2 style="text-align: justify;"><strong>Đặt trước AirPod Pro 2 giá tốt, ưu đãi hấp dẫn tại Cybermart</strong></h2> <p style="text-align: justify;">Hệ thống Cybermart cập nhật các sản phẩm mới từ Apple và phân phối đến cho các tín đồ công nghệ Việt trong đó có cả tai nghe AirPods Pro 2022. Sản phẩm được bán chính hãng tại hệ thống Cybermart với giá bán ưu đãi. Cùng với đó, hệ thống cũng hỗ trợ khách hàng mua trả góp tai nghe&nbsp;AirPods với lãi suất từ 0%. Trong suốt thời gian 12 tháng kể từ ngày mua hàng, sản phẩm sẽ được bảo hành theo chính sách từ hãng nếu có phát sinh lỗi từ nhà sản xuất tại trung tâm bảo hành ủy quyền Cybermart.</p></div> </div> 
                ',
                'specifications' => '
               <table id="tskt" class="table table-striped">
<tbody>
<tr>
	<td>Hãng sản xuất</td>
	<td>Sounds</td>
</tr>
<tr>
	<td>Kích thước màn hình</td>
	<td>6.7&nbsp;inches</td>
</tr>
<tr>
	<td>Độ phân giải màn hình</td>
	<td>2796&nbsp;x 1290&nbsp;pixels</td>
</tr>
<tr>
	<td>Loại màn hình</td>
	<td>OLED LPTS</td>
</tr>
<tr>
	<td>Bộ nhớ trong</td>
	<td>1TB</td>
</tr>
<tr>
	<td>Chipset</td>
	<td>Oppo A16 Bionic</td>
</tr>
<tr>
	<td>CPU</td>
	<td>Oppo A16 Bionic&nbsp;120Hz</td>
</tr>
<tr>
	<td>GPU</td>
	<td>Oppo GPU (5 lõi)</td>
</tr>
<tr>
	<td>Kích thước</td>
	<td>160.7 x 77.6 x 7.9 mm</td>
</tr>
<tr>
	<td>Trọng lượng</td>
	<td>240 g</td>
</tr>
<tr>
	<td>Camera sau</td>
	<td>Camera chính: 48MP<br>
	Camera góc siêu rộng: 12MP<br>
	Camera tele: 12MP</td>
</tr>
<tr>
	<td>Camera trước</td>
	<td>12 MP</td>
</tr>
<tr>
	<td>Quay video</td>
	<td>4K @24 fps, 25 fps, 30 fps, 60 fps<br>
	1080p @25 fps, 30 fps, 60 fps<br>
	720p @30 fps<br>
	4K HDR @30 fps<br>
	2.8K @ 60 fps<br>
	HDR với Dolby Vision @60 fps<br>
	ProRes 4K @30fps<br>
	Chuyển động chậm 1080p @ 120fps, 240 fps</td>
</tr>
<tr>
	<td>Pin</td>
	<td>Li - Ion, Không thể thay thế</td>
</tr>
<tr>
	<td>Cổng sạc</td>
	<td>Lightning</td>
</tr>
<tr>
	<td>Loại SIM</td>
	<td>Nano SIM, eSIM</td>
</tr>
<tr>
	<td>Hệ điều hành</td>
	<td>iOS</td>
</tr>
<tr>
	<td>Phiên bản hệ điều hành</td>
	<td>iOS 16.2</td>
</tr>
<tr>
	<td>Khe cắm thẻ nhớ</td>
	<td>Không</td>
</tr>
<tr>
	<td>3G</td>
	<td>HSPA 42.2/5.76 Mbps, EV-DO Rev.A 3.1 Mbps</td>
</tr>
<tr>
	<td>4G</td>
	<td>LTE-A (4CA) Cat16 1024/150 Mbps</td>
</tr>
<tr>
	<td>5G</td>
	<td>mmWave, Sub-6 GHz</td>
</tr>
<tr>
	<td>WLAN</td>
	<td>Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot</td>
</tr>
<tr>
	<td>Bluetooth</td>
	<td>Bluetooth 5.3</td>
</tr>
<tr>
	<td>GPS</td>
	<td>A-GPS, GLONASS, GALILEO, QZSS</td>
</tr>
<tr>
	<td>NFC</td>
	<td>Yes</td>
</tr>
<tr>
	<td>Cảm biến</td>
	<td>Cảm biến gia tốc, Cảm biến tiệm cận, Cảm biến ánh sáng, La bàn, Con quay hồi chuyển, Cảm biến áp kế</td>
</tr>
</tbody></table>
                ',
                'product_type' => 'new',
                'seo_title' => '' . $nameLoa  . ': Chống ồn, Âm Thanh Vượt Trội & Thiết Kế Bền Bỉ',
                'promotion' => $pro,
                'seo_description' => '' . $nameLoa  . ' mang đến âm thanh 3D sống động với chip H2, công nghệ chống ồn hiệu quả gấp đôi thế hệ trước, và kết nối Bluetooth 5.3. Được thiết kế chống nước IPX4, tai nghe lý tưởng cho mọi hoạt động. Khám phá giá và đặt hàng ngay hôm nay!',
                'category_id' => 3,
                'weight' => 0.5,
                'sub_category_id' => rand(28, 33),
                'child_category_id' => rand(46, 50),
                'created_at' => now(),
            ]);
            // Thêm tên sản phẩm đồng hồ thông minh
            DB::table('products')->insert([
                [
                    "name" => $nameSmartPhone,
                    "slug" => Str::slug($nameSmartPhone . rand(0, 990), '-'),
                    "image" =>  'dongho_' . rand(1, 17) . '.webp',
                    'qty' => 200,
                    'price' => round(rand(29000000, 33900000) / 10000) * 10000,
                    'offer_price' => round(rand(15900000, 2900000) / 10000) * 10000,
                    'offer_start_date' => now(),
                    'offer_end_date' => '2025-07-31',
                    'sku' => 'SPMSI' . rand(120, 140). rand(100, 1020),
                    'video_link' => 'https://youtube.com',
                    'long_description' => '
                    <div id="cpsContent" class="cps-block-content"><div class="ksp-content p-2 mb-2"><h2 class="ksp-title has-text-centered">ĐẶC ĐIỂM NỔI BẬT</h2> <div><ul><li>Thực hiện cuộc thông thường hay video call với sim 4G</li><li>Nút liên lạc khẩn cấp tự động gửi vị trí cùng một bản ghi âm 30 giây tới các số được lưu sẵn</li><li>Ghi lại lịch sử di chuyển với định vị GPS</li><li>Thao tác thuận tiện với màng hình 1.3 inch</li><li>Không ngại mưa rơi hay nước bắn với kháng nước chuẩn IP67</li></ul></div></div> <div><h2><strong>Vì sao nên mua ' . $nameSmartPhone . '</strong></h2> <p>Chiếc đồng hồ này có trọng lượng rất nhẹ, chỉ khoảng 53 gam, kết hợp với dây đeo cao cấp, đem lại cảm giác đeo thoải mái cả ngày dài. Đặc biệt, sản phẩm đạt tiêu chuẩn kháng nước và bụi bẩn IP67, giúp bảo vệ thiết bị trong những trường hợp bé đi dưới mưa hoặc bị bắn nước trong lúc rửa tay.&nbsp;Ngoài ra, Myalo KidsPhone K84 cho phép người dùng liên lạc hai chiều, hỗ trợ phụ huynh gọi video cho bé trong lúc đi xa rất dễ dàng.&nbsp;</p> <p><img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/Watch/Myalo/dong-ho-thong-minh-tre-em-k84-6.jpg" alt="Vì sao nên mua ' . $nameSmartPhone . '" loading="lazy"></p> <h2 style="text-align: justify;"><strong>Myalo KidsPhone K84 - Đồng hồ chứa đựng đầy đủ tiện ích cần thiết cho bé</strong></h2> <p style="text-align: justify;">Các bậc phụ huynh đang tìm kiếm món phụ kiện cho con em mình hãy tham khảo ngay&nbsp;<strong>đồng hồ trẻ em myAlo KidsPhone K84</strong>. Đây là chiếc đồng hồ không chỉ xinh xắn bên ngoài, mà còn chứa đựng nhiều tiện ích hữu dụng cho bé khi cần thiết.</p> <h3 style="text-align: justify;"><strong>Kiểu dáng xinh xắn, dây đeo êm ái, kháng nước chuẩn IP67</strong></h3> <p style="text-align: justify;">Đồng hồ myAlo KidsPhone K84 mang kiểu dáng xinh xắn, thiết kế năng động với màu xanh biển sẽ phù hợp với cả bé trai lẫn bé gái.&nbsp;Dây đeo được làm từ chất liệu đàn hồi, cùng với trọng lượng nhẹ nhàng của đồng hồ giúp đảm bảo êm ái và thoải mái trên da tay bé khi đeo dài lâu.</p> <p style="text-align: justify;"><img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/Watch/Myalo/dong-ho-thong-minh-tre-em-k84-5.jpg" alt="Kiểu dáng xinh xắn, dây đeo êm ái, kháng nước chuẩn IP67" loading="lazy"></p> <p style="text-align: justify;">MyAlo KidsPhone K84 còn đảm bảo kháng thấm nước với tiêu chuẩn IP67, giúp bé tha hồ tham gia các hoạt động bơi lội hoặc đi biển mà không lo đồng hồ bị hỏng.&nbsp;Ngoài ra, đồng hồ thông minh trẻ em myAlo KidsPhone K84 còn cho phép bé chụp ảnh và chia sẻ ảnh với bố mẹ về những khoảnh khắc đáng nhớ của bé trong chuyến đi chơi.</p> <h3 style="text-align: justify;"><strong>Tính năng liên lạc khẩn cấp, thiết lập vùng an toàn giúp giám sát bé hiệu quả</strong></h3> <p style="text-align: justify;">Các bậc phụ huynh thường hay lo lắng khi con em mình tham gia khu vui chơi, giờ đây sẽ không phải lo lắng với đồng hồ thông minh myAlo KidsPhone K84.</p> <p style="text-align: justify;">Chiếc đồng hồ được trang bị tính năng liên lạc khẩn cấp SOS, cho phép bé lưu lại số điện thoại của bố mẹ hoặc người thân và thực hiện cuộc gọi SOS ngay khi có tai nạn hoặc sự cố nguy hiểm xảy ra.</p> <p style="text-align: justify;"><img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/Watch/Myalo/dong-ho-thong-minh-tre-em-k84-1.jpg" alt="Tính năng liên lạc khẩn cấp, thiết lập vùng an toàn giúp giám sát bé hiệu quả" loading="lazy"></p> <p style="text-align: justify;">Ngoài ra, bố mẹ còn có thể thiết lập vùng an toàn cho bé trên <a href="https://cellphones.com.vn/do-choi-cong-nghe/dong-ho-dinh-vi-tre-em.html" target="_blank">đồng hồ trẻ em</a> myAlo KidsPhone K84. Bé sẽ an tâm chơi đùa trong khu vực phạm vi đã được thiết lập sẵn, và đồng hồ sẽ báo hiệu chuông lớn mỗi khi có ai đưa bé ra ngoài phạm vi ấy.</p> <p style="text-align: justify;">Những tiện ích khác trên đồng hồ myAlo KidsPhone K84 gồm có: máy ghi âm, theo dõi vận động, đồng hồ bấm giờ, máy tính, dự báo thời tiết, nghe nhạc MP3, và cảm biến phát hiện đòng hồ rơi khỏi cổ tay bé.</p> <h2><strong>Hướng dẫn sử dụng đồng hồ thông minh trẻ em Myalo KidsPhone K84 chi tiết</strong></h2> <p>Sau đây, CellphoneS sẽ hướng dẫn sử dụng chiếc đồng hồ thông minh trẻ em Myalo KidsPhone K84 một cách chi tiết nhất, giúp mọi người làm quen thiết bị nhanh chóng.&nbsp;</p> <h3><strong>Hướng dẫn kích hoạt đồng hồ thông minh trẻ em Myalo KidsPhone K84&nbsp;</strong></h3> <p>Đây là dòng đồng hồ thông minh trẻ em, nên việc kích hoạt sản phẩm này chỉ cần vài thao tác đơn giản như sau.</p> <p>Bước 1: Sạc đầy thiết bị khoảng 2 - 3 tiếng, và đang ở trong tình trạng tắt nguồn.&nbsp;</p> <p>Bước 2: Lắp thẻ SIM đã được kích hoạt GPRS vào sản phẩm.</p> <p>Bước 3: Ấn và nhấn giữ 3 giây để bật nguồn đồng hồ.&nbsp;</p> <p><img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/Watch/Myalo/dong-ho-thong-minh-tre-em-k84-2.jpg" alt="Hướng dẫn kích hoạt đồng hồ thông minh trẻ em Myalo KidsPhone K84 " loading="lazy"></p> <h3><strong>Hướng dẫn ghép nối ' . $nameSmartPhone . ' với điện thoại</strong></h3> <p>Các bước kích hoạt chiếc đồng hồ này khá đơn giản, các bạn hãy làm theo các bước phía dưới đây.</p> <p>Bước 1: Tải ứng dụng myAlo myKids vào trên điện thoại → Mở app và nhấn Đăng ký</p> <p>Bước 2: Khai báo thông tin cá nhân, rồi tiếp tục nhấn Đăng ký. Sau đó, đồng ý với Điều khoản sử dụng và Chính sách quyền riêng tư của myAlo myKids.</p> <p>Bước 3: Vào Cài đặt → Nhấn Thêm thiết bị và đợi bắt đầu ghép nối&nbsp;</p> <p>Bước 4: Mở đồng hồ và vào mục Mã ràng buộc → Dùng điện thoại để quét mã QR Code → Nhập thông tin cá nhân cho bé.</p> <p><img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/Watch/Myalo/dong-ho-thong-minh-tre-em-k84-4.jpg" alt="Hướng dẫn ghép nối ' . $nameSmartPhone . ' với điện thoại" loading="lazy"></p> <p>Bước 5: Khi đã nhập xong thông tin, nhấn Hoàn thành để kết thúc quá trình ghép nối.&nbsp;</p> <h2 style="text-align: left;"><strong>Sở hữu đồng hồ trẻ em myAlo KidsPhone K84 giá rẻ, chất lượng tại&nbsp;</strong><strong>CellphoneS</strong></h2> <p align="center" style="text-align: justify;">Các bậc phụ huynh giờ đây có thể sắm cho con mình chiếc đồng hồ <strong>myAlo KidsPhone K84 chính hãng</strong> với giá tốt tại hệ thống CellphoneS. Với chuỗi cửa hàng có mặt ở Hà Nội và TP. HCM.&nbsp;</p></div></div> 
                  ',
                    'short_description' => '
                        <p>✔️Máy mới Fullbox 100% - Chưa Active - Chính Hãng ' . $nameSmartPhone . '<br>
                        ✔️Được hỗ trợ 1 đổi 1 trong 30 ngày nếu có lỗi từ nhà sản xuất<br>
                        ✔️Bảo hành chính hãng ' . $nameSmartPhone . ' 12 tháng</p>',
                    'specifications' => '
            <table id="tskt" class="table table-striped">
    <tbody>
    <tr>
        <td>Hãng sản xuất</td>
        <td>Laptop</td>
    </tr>
    <tr>
        <td>Loại card đồ họa</td>
        <td>NVIDIA GeForce RTX 4050 6GB 40W</td>
    </tr>
    <tr>
        <td>Độ phân giải màn hình</td>
        <td>2796&nbsp;x 1290&nbsp;pixels</td>
    </tr>
    <tr>
        <td>Loại màn hình</td>
        <td>OLED LPTS</td>
    </tr>
    <tr>
        <td>Bộ nhớ trong</td>
        <td>1TB</td>
    </tr>
    <tr>
        <td>Chipset</td>
        <td>' . $nameSmartPhone . ' A16 Bionic</td>
    </tr>
    <tr>
        <td>CPU</td>
        <td>' . $nameSmartPhone . ' A16 Bionic&nbsp;120Hz</td>
    </tr>
    <tr>
        <td>GPU</td>
        <td>' . $nameSmartPhone . ' GPU (5 lõi)</td>
    </tr>
    <tr>
        <td>Kích thước</td>
        <td>160.7 x 77.6 x 7.9 mm</td>
    </tr>
    <tr>
        <td>Trọng lượng</td>
        <td>240 g</td>
    </tr>
    <tr>
        <td>Camera sau</td>
        <td>Camera chính: 48MP<br>
        Camera góc siêu rộng: 12MP<br>
        Camera tele: 12MP</td>
    </tr>
    <tr>
        <td>Camera trước</td>
        <td>12 MP</td>
    </tr>
    <tr>
        <td>Quay video</td>
        <td>4K @24 fps, 25 fps, 30 fps, 60 fps<br>
        1080p @25 fps, 30 fps, 60 fps<br>
        720p @30 fps<br>
        4K HDR @30 fps<br>
        2.8K @ 60 fps<br>
        HDR với Dolby Vision @60 fps<br>
        ProRes 4K @30fps<br>
        Chuyển động chậm 1080p @ 120fps, 240 fps</td>
    </tr>
    <tr>
        <td>Pin</td>
        <td>Li - Ion, Không thể thay thế</td>
    </tr>
    <tr>
        <td>Cổng sạc</td>
        <td>Lightning</td>
    </tr>
    <tr>
        <td>Loại SIM</td>
        <td>Nano SIM, eSIM</td>
    </tr>
    <tr>
        <td>Hệ điều hành</td>
        <td>iOS</td>
    </tr>
    <tr>
        <td>Phiên bản hệ điều hành</td>
        <td>iOS 16.2</td>
    </tr>
    <tr>
        <td>Khe cắm thẻ nhớ</td>
        <td>Không</td>
    </tr>
    <tr>
        <td>3G</td>
        <td>HSPA 42.2/5.76 Mbps, EV-DO Rev.A 3.1 Mbps</td>
    </tr>
    <tr>
        <td>4G</td>
        <td>LTE-A (4CA) Cat16 1024/150 Mbps</td>
    </tr>
    <tr>
        <td>5G</td>
        <td>mmWave, Sub-6 GHz</td>
    </tr>
    <tr>
        <td>WLAN</td>
        <td>Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot</td>
    </tr>
    <tr>
        <td>Bluetooth</td>
        <td>Bluetooth 5.3</td>
    </tr>
    <tr>
        <td>GPS</td>
        <td>A-GPS, GLONASS, GALILEO, QZSS</td>
    </tr>
    <tr>
        <td>NFC</td>
        <td>Yes</td>
    </tr>
    <tr>
        <td>Cảm biến</td>
        <td>Cảm biến gia tốc, Cảm biến tiệm cận, Cảm biến ánh sáng, La bàn, Con quay hồi chuyển, Cảm biến áp kế</td>
    </tr>
    </tbody></table>
                       ',
                    'product_type' => 'new',
                    'seo_title' => '' . $nameSmartPhone . ' - Gaming Cao Cấp, Hiệu Năng Mạnh Mẽ, Giá Tốt',
                    'promotion' => $pro,
                    'seo_description' => 'Khám phá ' . $nameSmartPhone . ' với CPU Intel Core i5-12450H, GPU RTX 4050 và màn hình 15.6 inch Full HD 144Hz. Hiệu năng vượt trội cho game thủ, lưu trữ rộng rãi với 512GB SSD và RAM DDR5 8GB. Mua ngay tại Cybermart với giá ưu đãi và dịch vụ tốt nhất.',
                    'category_id' => 4,
                    'weight' => 3,
                    'sub_category_id' => rand(34, 37),
                    'child_category_id' => rand(51, 53),
                    'created_at' => now(),
                    "status" => 1
                ],
            ]);
            // Thêm tên sản phẩm nồi chiên không dầu
            DB::table('products')->insert([
                [
                    "name" => $nameNoiChien,
                    "slug" => Str::slug($nameNoiChien . rand(0, 990), '-'),
                    "image" =>  'noichien_' . rand(1, 30) . '.webp',
                    'qty' => 200,
                    'price' => round(rand(29000000, 33900000) / 10000) * 10000,
                    'offer_price' => round(rand(15900000, 3900000) / 10000) * 10000,
                    'offer_start_date' => now(),
                    'offer_end_date' => '2025-07-31',
                    'sku' => 'SPNC' . rand(120, 140). rand(100, 1020), 
                    'video_link' => 'https://youtube.com',
                    'long_description' => '
                             <div id="cpsContent" class="cps-block-content" style="max-height: 100000px;"><div class="ksp-content p-2 mb-2"><h2 class="ksp-title has-text-centered">ĐẶC ĐIỂM NỔI BẬT</h2> <div><ul><li>Tiết kiệm điện năng, thời gian chế biến với công suất 1700W</li><li>Dung tích lớn lên đến&nbsp;6.5L yên tâm nướng gà nguyên con</li><li>Tích hợp rất nhiều chức năng chiên nấu trên một sản phẩm</li><li>Thiết kế trong suốt dễ dàng quan sát tình trạng thức ăn</li></ul></div></div> <div><p style="text-align: justify;">' . $nameNoiChien . ' sở hữu công suất 1700W kết hợp công nghệ chiên đối lưu không khí, giúp nấu ăn nhanh chóng và lành mạnh hơn. Dung tích lớn 6.5 lít và nhiều chế độ chiên, nấu cho phép nồi đáp ứng nhu cầu ẩm thực phong phú của gia đình. Bên cạnh đó, sản phẩm <a href="https://cybermart.io.vn/product/gia-dung-smarthome/noi-chien-khong-dau" title="Nồi chiên không dầu Sunhouse"><strong>nồi chiên không dầu Sunhouse</strong></a> có thiết kế tối giản với cửa sổ khoang chiên ốp kính trong suốt dễ dàng quan sát.</p> <h2 style="text-align: justify;"><strong>Vì sao nên mua ' . $nameNoiChien . '?</strong></h2> <p style="text-align: justify;">' . $nameNoiChien . ' hứa hẹn sẽ là giải pháp nấu nướng tốt nhờ vào:</p> <p><span style="text-align: justify;">- Công suất 1700W: Chiên, nấu nhanh chóng và hiệu quả.</span><br><span style="text-align: justify;"></span></p> <p><span style="text-align: justify;">- Công nghệ tiên tiến Rapid Air: Tiết kiệm dầu, làm thức ăn trở nên dinh dưỡng hơn.</span><br><span style="text-align: justify;"></span></p> <p><span style="text-align: justify;">- Dung tích 6.5 lít: Chế biến một lượng lớn thực phẩm trong mỗi lần sử dụng, phù hợp cho cả gia đình.</span></p> <p style="text-align: justify;"><img src="https://cdn.tgdd.vn/Products/Images/9418/240313/ava-kdf-593d-0-600x600-1.jpg" alt="Vì sao nên mua ' . $nameNoiChien . '?" loading="lazy"></p> <p><span style="text-align: justify;">- Hỗ trợ nhiều chế độ nấu khác nhau: Đáp ứng nhu cầu ẩm thực đa dạng.</span><br><span style="text-align: justify;"></span></p> <p><span style="text-align: justify;">- Cửa sổ khoang chiên ốp kính trong suốt: Dễ dàng theo dõi quá trình chiên nấu.</span></p> <h2 style="text-align: justify;"><strong>' . $nameNoiChien . ' - Thiết kế thời thượng, dung tích lớn</strong></h2> <p style="text-align: justify;">' . $nameNoiChien . ' đáp ứng tốt nhu cầu chiên nấu thực phẩm của nhiều gia đình với công suất mạnh mẽ và dung tích lớn. Thiết bị có kết cấu cao cấp, vẻ ngoài sang trọng đảm bảo bền đẹp theo thời gian.</p> <p style="text-align: justify;">Bên cạnh đó nếu bạn đang có nhu cầu chọn nồi chiên Sunhouse có dung tích lớn hơn thì có thể khám phá mẫu&nbsp;<a href="https://cybermart.io.vn/product/gia-dung-smarthome/noi-chien-khong-dau" title="SHD4037" target="_blank"><strong>SHD4037</strong></a> được bán tại CellphoneS với đầy đủ ưu điểm vượt trội được bán chính hãng, giao hàng hỏa tốc nhanh. Khám phá ngay nhé!</p> <h3 style="text-align: justify;"><strong>Công suất mạnh mẽ 1700W&nbsp;</strong></h3> <p style="text-align: justify;">' . $nameNoiChien . ' có công suất mạnh mẽ 1700W, giúp nấu chín thực phẩm nhanh chóng và đều hơn. Công suất cao kết hợp với khả năng gia nhiệt vượt trội giúp nồi chiên Sunhouse SHD4030 hoạt động hiệu quả, tiết kiệm thời gian nấu nướng mà vẫn đảm bảo chất lượng món ăn.</p> <p style="text-align: justify;"><img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fkingshop.vn%2Fsan-pham%2Fnoi-chien-khong-dau-nineshield-kb-5005m-24444.html&psig=AOvVaw3zaimhvOrXKEHqKCJxF1BR&ust=1722133190097000&source=images&cd=vfe&opi=89978449&ved=0CA8QjRxqFwoTCLCaoZ2UxocDFQAAAAAdAAAAABAJ" alt="' . $nameNoiChien . ' - Thiết kế thời thượng, dung tích lớn" loading="lazy"></p> <p style="text-align: justify;">Sunhouse SHD4030 6.5L sử dụng công nghệ chiên không dầu Rapid Air sử dụng luồng khí nóng lưu thông nhanh để làm chín thực phẩm thay vì dầu mỡ truyền thống. Nhờ vậy, món ăn không chỉ giữ được hương vị tự nhiên mà còn giảm lượng chất béo đáng kể, tốt cho sức khỏe.</p> <h3 style="text-align: justify;"><strong>Dung tích 6.5L đủ không gian nấu nướng cho gà nguyên con&nbsp;</strong></h3> <p style="text-align: justify;">' . $nameNoiChien . ' với dung tích lớn 6.5 lít. Đây lựa chọn lý tưởng cho các gia đình đông thành viên hoặc khi cần nấu lượng thực phẩm lớn.&nbsp;</p> <p style="text-align: justify;"><img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:0:0/q:90/plain/https://cellphones.com.vn/media/wysiwyg/Do-gia-dung/Noi-chien-khong-dau/Sunhouse/noi-chien-khong-dau-sunhouse-shd4030-6-5l-3.jpg" alt="' . $nameNoiChien . ' - Thiết kế thời thượng, dung tích lớn" loading="lazy"></p> <p style="text-align: justify;">Dung tích này cho phép bạn dễ dàng chế biến một con gà nguyên con, một lượng lớn khoai tây chiên, hoặc nhiều loại thực phẩm khác trong một lần nấu. Với khả năng phục vụ từ 4-6 người, nồi chiên này đáp ứng tốt các bữa ăn gia đình hoặc các buổi tụ họp nhỏ. Dung tích lớn giúp tiết kiệm thời gian nấu nướng và đảm bảo tất cả mọi người đều có phần ăn nóng hổi, ngon miệng.&nbsp;</p> <p style="text-align: justify;">Đặc biệt, ' . $nameNoiChien . ' được trang bị nhiều chức năng chiên nướng đa dạng, bao gồm các chế độ dành riêng cho khoai tây, tôm, thịt bò, cánh gà, pizza…</p> <h3 style="text-align: justify;"><strong>Kiểu dáng hiện đại&nbsp;</strong></h3> <p style="text-align: justify;">' . $nameNoiChien . ' sở hữu thiết kế hiện đại với gam màu trung tính, dễ dàng hòa hợp với mọi không gian bếp. Vỏ nồi được làm từ chất liệu nhựa cao cấp, giúp nồi chịu nhiệt tốt và dễ dàng vệ sinh sau khi sử dụng.&nbsp;</p> <p style="text-align: justify;"><img src="https://bizweb.dktcdn.net/100/435/504/products/nichienkhongdudachcnang10lrole.jpg?v=1667787763040" alt="' . $nameNoiChien . ' - Thiết kế thời thượng, dung tích lớn" loading="lazy"></p> <p style="text-align: justify;">Đặc biệt, cửa sổ khoang chiên ốp kính trong suốt, cho phép bạn quan sát quá trình nấu nướng mà không cần mở nắp. Thiết kế tối giản nhưng tinh tế của nồi chiên Sunhouse SHD4030 vừa nâng cao tính thẩm mỹ, vừa mang lại sự tiện lợi và hiệu quả trong quá trình sử dụng.</p> <h3 style="text-align: justify;"><strong>Điều khiển núm xoay, tích hợp hẹn giờ 60 phút</strong></h3> <p style="text-align: justify;">' . $nameNoiChien . ' được trang bị bảng điều khiển núm xoay đơn giản và dễ sử dụng. Nhờ đó, người dùng có thể cài nhiệt độ, cũng như các chương trình nấu trong tíc tắc.&nbsp;</p> <p style="text-align: justify;"><img src="https://s.meta.com.vn/Data/image/2019/10/26/noi-chien-khong-dau-rapido-raf4-0mh-1.jpg" alt="Điều khiển núm xoay, tích hợp hẹn giờ 60 phút" loading="lazy"></p> <p style="text-align: justify;">Trên bảng điều khiển sẽ có tính năng hẹn giờ thông minh cho phép bạn cài đặt thời gian nấu lên đến 60 phút.&nbsp;</p> <h2 style="text-align: justify;"><strong>Mua ' . $nameNoiChien . ' chính hãng, giá tốt tại Cybermart</strong></h2> <p style="text-align: justify;">Nếu bạn đang tìm kiếm sản phẩm ' . $nameNoiChien . ' chính hãng với giá tốt, thì Cybermart là điểm đến lý tưởng. Tại của hàng, bạn sẽ được đảm bảo với bảo hành từ nhà sản xuất Sunhouse.</p> <p style="text-align: justify;">Ngoài ra, bạn sẽ có cơ hội nhận được các ưu đãi khi sắm ' . $nameNoiChien . ' trong các dịp lễ 8/3, 20/10, Black Friday… Hãy ghé thăm Cybermart ngay hôm nay để sở hữu ngay Sunhouse SHD4030 6.5L với giá ưu đãi nhất!</p></div> </div>
                          ',
                    'short_description' => '
                                <p>✔️Máy mới Fullbox 100% - Chưa Active - Chính Hãng ' . $nameNoiChien . '<br>
                                ✔️Được hỗ trợ 1 đổi 1 trong 30 ngày nếu có lỗi từ nhà sản xuất<br>
                                ✔️Bảo hành chính hãng ' . $nameNoiChien . ' 12 tháng</p>',
                    'specifications' => '
                    <table id="tskt" class="table table-striped">
            <tbody>
            <tr>
                <td>Chất liệu nồi</td>
                <td>Vỏ ngoài: Nhựa PP cao cấp
        Khay chiên: Thép sơn phủ chống dính</td>
            </tr>
            <tr>
                <td>Công suất</td>
                <td>1700W</td>
            </tr>
            <tr>
                <td>Điện áp</td>
                <td>220V - 50Hz</td>
            </tr>
            <tr>
                <td>Hẹn giờ</td>
                <td>0 - 60 phút</td>
            </tr>
            <tr>
                <td>Bảng điều khiển</td>
                <td>Núm vặn</td>
            </tr>
            <tr>
                <td>Công nghệ</td>
                <td>Rapid Air</td>
            </tr>
            <tr>
                <td>Chế độ</td>
                <td>Nướng, Chiên</td>
            </tr>
            <tr>
                <td>Tiện ích</td>
                <td>Tay cầm cách nhiệt, Tự động ngắt khi quá nhiệt</td>
            </tr>
            <tr>
                <td>Loại gia dụng</td>
                <td>Nồi chiên không dầu</td>
            </tr>
            </tbody></table>
                               ',
                    'product_type' => 'new',
                    'seo_title' => '' . $nameNoiChien . ' - Công Suất 1700W, Tiết Kiệm Dầu, Thiết Kế Hiện Đại',
                    'promotion' => $pro,
                    'seo_description' => 'Khám phá ' . $nameNoiChien . ' với công suất 1700W, giúp nấu ăn nhanh chóng và lành mạnh. Dung tích lớn 6.5L phù hợp cho cả gia đình, tích hợp nhiều chức năng chiên nấu và thiết kế cửa sổ kính trong suốt. Mua chính hãng tại Cybermart với giá ưu đãi!',
                    'category_id' => 5,
                    'weight' => 0.5,
                    'sub_category_id' => 38,
                    'child_category_id' => rand(54, 59),
                    'created_at' => now(),
                    "status" => 1
                ],
            ]);
            // Thêm tên sản phẩm ốp lưng
            DB::table('products')->insert([
                [
                    "name" => $nameOplung,
                    "slug" => Str::slug($nameOplung . rand(0, 990), '-'),
                    "image" =>  'oplung_' . rand(1, 19) . '.webp',
                    'qty' => 200,
                    'offer_price' => round(rand(3000000, 7000000) / 10000) * 10000,
                    'price' => round(rand(9000000, 15000000) / 10000) * 10000,
                    'offer_start_date' => now(),
                    'offer_end_date' => '2025-07-31',
                    'sku' => 'SPNC' . rand(120, 140). rand(100, 1020),
                    'video_link' => 'https://youtube.com',
                    'long_description' => '
                             <div id="cpsContent" class="cps-block-content" style="max-height: 100000px;"><!----> <div><h2 style="text-align: justify;"><strong>' . $nameOplung . ' - Giải pháp bảo vệ tối ưu cho series iPhone 14</strong></h2> <p style="text-align: justify;">' . $nameOplung . ' thuộc bộ sưu tập phụ kiện cao cấp do chính Apple sản xuất dành cho series iPhone 14 mới được ra mắt gần đây. Sản phẩm <a href="https://cybermart.io.vn/product/phu-kien/op-lung-bao-da" title="' . $nameOplung . '" target="_blank"><strong>' . $nameOplung . '</strong></a> gây ấn tượng bởi mặt lưng mềm mại và gam màu rực rỡ, cùng với đó là hiệu quả bảo vệ tối ưu.</p> <h3 style="text-align: justify;"><strong>Thiết kế bắt mắt, mềm mại cùng khả năng sạc không dây hữu ích</strong></h3> <p style="text-align: justify;">Ốp lưng mang gam màu sắc trẻ trung, hiện đại và đặc biệt phù hợp với thiết kế của bộ sưu tập iPhone 14. Ngoài ra ốp còn được chế tác từ chất liệu silicone mềm mại mang đến trải nghiệm cầm nắm thoải mái, cũng như tháo lắp dễ dàng cho người dùng.</p> <p style="text-align: justify;">Đặc biệt hơn, sản phẩm cũng tương thích với hai tiêu chuẩn sạc không dây hiện nay của iPhone là MagSafe và Qi. Nhờ đó trong mỗi lần sạc thiết bị bạn sẽ không phải tốn công tháo ốp lưng khỏi máy.</p> <p style="text-align: justify;"><img src="https://phukienre.com.vn/wp-content/uploads/2021/01/cach-lam-op-lung-dien-thoai-bang-vai-ni-sieu-xinh-2.jpg" alt="Đánh giá thiết kế ' . $nameOplung . '" loading="lazy"></p> <h3 style="text-align: justify;"><strong>Cấu trúc hai lớp cho khả năng bảo vệ toàn diện</strong></h3> <p style="text-align: justify;">Ở mặt ngoài ốp lưng được trang bị lớp silicone mềm mịn, có khả năng chống trầy xước, bụi bẩn và dấu vân tay rất tốt. Mặt trong của sản phẩm có thêm một lớp đệm, mang đến khả năng chống sốc hiệu quả khi không may xảy ra va đập giúp thiết bị của bạn được bảo vệ toàn diện.</p> <p style="text-align: justify;"><img src="https://bloganchoi.com/wp-content/uploads/2020/04/op-lung-dep-1.jpg" alt="Cấu trúc hai lớp cho khả năng bảo vệ toàn diện" loading="lazy"></p> <h2 style="text-align: justify;"><strong>Mua ngay </strong><strong></strong><strong>' . $nameOplung . ' chính hãng tại Cybermart</strong></h2> <p style="text-align: justify;">Nếu bạn muốn mang đến cho chiếc iPhone 14 của mình một ngoại hình bắt mắt, cũng như khả năng chống chịu tốt trước những nguy cơ hư hỏng thì hãy sở hữu ngay ' . $nameOplung . '. Để được mua ốp lưng chính hãng của Apple với giá hấp dẫn, đừng quên ghé đến Hệ thống bán lẻ công nghệ Cybermart bạn nhé. Tại đây, khách hàng có thể mua ốp lưng chính hãng Apple với lãi suất cực thấp cùng với đó là nhiều ưu đãi khác dành cho khách hàng thành viên. Đặc biệt, ốp lưng chính hãng còn được bảo hành khi gặp lỗi về&nbsp;<span>MagSafe do dỗi nhà sản xuất trong thời gian 12 tháng tại trung tâm bảo hành ủy quyền chính hãng Cybermart.</span></p></div> </div>
                          ',
                    'short_description' => '
                                <p>✔️Máy mới Fullbox 100% - Chưa Active - Chính Hãng ' . $nameOplung . '<br>
                                ✔️Được hỗ trợ 1 đổi 1 trong 30 ngày nếu có lỗi từ nhà sản xuất<br>
                                ✔️Bảo hành chính hãng ' . $nameOplung . ' 12 tháng</p>',
                    'specifications' => '
                    <table id="tskt" class="table table-striped">
            <tbody>
            <tr>
                <td>Chất liệu nồi</td>
                <td>Vỏ ngoài: Nhựa PP cao cấp
        Khay chiên: Thép sơn phủ chống dính</td>
            </tr>
            <tr>
                <td>Công suất</td>
                <td>1700W</td>
            </tr>
            <tr>
                <td>Điện áp</td>
                <td>220V - 50Hz</td>
            </tr>
            <tr>
                <td>Hẹn giờ</td>
                <td>0 - 60 phút</td>
            </tr>
            <tr>
                <td>Bảng điều khiển</td>
                <td>Núm vặn</td>
            </tr>
            <tr>
                <td>Công nghệ</td>
                <td>Rapid Air</td>
            </tr>
            <tr>
                <td>Chế độ</td>
                <td>Nướng, Chiên</td>
            </tr>
            <tr>
                <td>Tiện ích</td>
                <td>Tay cầm cách nhiệt, Tự động ngắt khi quá nhiệt</td>
            </tr>
            <tr>
                <td>Loại gia dụng</td>
                <td>Nồi chiên không dầu</td>
            </tr>
            </tbody></table>
                               ',
                    'product_type' => 'new',
                    'seo_title' => '' . $nameOplung . ' - Bảo Vệ Tối Ưu, Thiết Kế Đẳng Cấp',
                    'promotion' => $pro,
                    'seo_description' => 'Khám phá ' . $nameOplung . ' - giải pháp bảo vệ tối ưu với thiết kế mềm mại, màu sắc bắt mắt và khả năng sạc không dây tiện lợi. Được chế tác từ chất liệu silicone cao cấp, ốp lưng này không chỉ bảo vệ iPhone 14 khỏi trầy xước và va đập mà còn tương thích với tiêu chuẩn sạc MagSafe và Qi. Mua ngay chính hãng tại Cybermart với giá hấp dẫn và nhiều ưu đãi!',
                    'category_id' => 6,
                    'weight' => 0.5,
                    'sub_category_id' => 50,
                    'child_category_id' => 61,
                    'created_at' => now(),
                    "status" => 1
                ],
            ]);
            // Thêm tên sản phẩm màn hình msi
            DB::table('products')->insert([
                [
                    "name" => $nameManHinhMsi,
                    "slug" => Str::slug($nameManHinhMsi . rand(0, 990), '-'),
                    "image" =>  'manhinhmsi_' . rand(1, 15) . '.webp',
                    'qty' => 200,
                    'offer_price' => round(rand(3000000, 7000000) / 10000) * 10000,
                    'price' => round(rand(9000000, 15000000) / 10000) * 10000,
                    'offer_start_date' => now(),
                    'offer_end_date' => '2025-07-31',
                    'sku' => 'SPMHMSI' . rand(120, 140). rand(100, 1020),
                    'video_link' => 'https://youtube.com',
                    'long_description' => '
                             <div id="cpsContent" class="cps-block-content"><div class="ksp-content p-2 mb-2"><h2 class="ksp-title has-text-centered">ĐẶC ĐIỂM NỔI BẬT</h2> <div><ul><li>Tận hưởng trải nghiệm mượt mà với tần số quét cao lên đến 100Hz và thời gian phản hồi siêu nhanh chỉ 1ms, giúp giảm hiện tượng nhòe hình và giảm độ trễ</li> <li>Thưởng thức hình ảnh sắc nét và màu sắc chân thực với độ phân giải Full HD 1920 x 1080 và tấm nền IPS cung cấp góc nhìn rộng lên đến 178°</li> <li>Đảm bảo màu sắc chính xác với không gian màu sRGB 99%, mang lại trải nghiệm xem hình ảnh và video chân thực nhất</li></ul></div></div> <div><p style="text-align: justify;"><strong>' . $nameManHinhMsi . '</strong> với tần số quét màn hình <strong>100Hz</strong> mượt mà cùng tấm nền IPS cho góc nhìn rộng 178 độ. Màn hình với <strong>công nghệ EyesErgo</strong> hỗ trợ nâng cao chất lượng hình ảnh, hỗ trợ bảo vệ mắt người dùng. Màn hình máy tính này còn sở hữu tốc độ phản hồi 1ms cùng thiết kế công thái học.</p> <h2 style="text-align: justify;">' . $nameManHinhMsi . ' – Hiển thị chất lượng, thiết kế sang trọng</h2> <p style="text-align: justify;">' . $nameManHinhMsi . ' là <a href="https://cybermart.io.vn/product/pc-man-hinh/msi" title="Màn hình MSI chính hãng" target="_blank"><strong>màn hình MSI</strong></a> chất lượng với thiết kế viền siêu mỏng cùng khả năng hiển thị sống động. Cùng với đó, màn hình còn được trang bị nhiều công nghệ hỗ trợ bảo vệ đôi mắt người dùng.</p> <h3 style="text-align: justify;"><strong> Màn hình FHD hiển thị vượt trội cùng tần số quét 1ms </strong></h3> <p style="text-align: justify;">' . $nameManHinhMsi . ' với tấm nền IPS cùng với độ phân giải FHD nhờ đó mang lại khả năng hiển thị vượt trội. Màn hình với độ phân giải 1920x1080 cùng với dải màu rộng tới 16,7 triệu màu mang lại khả năng hiển thị hình ảnh sống động.</p> <p style="text-align: justify;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTnK057B2kD-lB4Gv8XbnaujMJho09D74u1g&s" alt="Chất lượng ' . $nameManHinhMsi . '" loading="lazy"></p> <p style="text-align: justify;">Cùng với đó, <a href="https://cybermart.io.vn/product/pc-man-hinh/msi" title="' . $nameManHinhMsi . '" target="_blank"><strong>' . $nameManHinhMsi . '</strong></a> này còn sở hữu tần số quét 100Hz mang lại các trải nghiệm hình ảnh mượt mà. Cùng với đó màn hình với tốc độ đáp ứng 1ms mang lại khả năng phản hồi nhanh. Màn hình còn sở hữu độ sáng cao lên đến 300 nits hỗ trợ khả năng hiển thị rõ nét trong nhiều điều kiện ánh sáng.</p> <h3 style="text-align: justify;"><strong> Thiết kế công thái học, điều chỉnh độ nghiêng dễ dàng </strong></h3> <p style="text-align: justify;"><strong>' . $nameManHinhMsi . '</strong> được trang bị một thiết kế công thái học mang lại cho người dùng những trải nghiệm sử dụng thoải mái. Với thiết kế này, người dùng có thể thoải mái điều chỉnh độ nghiêng theo dáng ngồi của từng người dùng.</p> <p style="text-align: justify;"><img src="https://product.hstatic.net/200000722513/product/1024_8bf3c33a323543328886f8e0c5209f5b_1024x1024.png" alt="Thiết kế ' . $nameManHinhMsi . '" loading="lazy"></p> <p style="text-align: justify;">Ngoài ra, <a href="https://cybermart.io.vn/product/pc-man-hinh/msi" title="màn hình 100hz" target="_blank"><strong>màn hình 100hz</strong></a> MSI này với tấm nền IPS nhờ đó hỗ trợ mang lại góc nhìn rộng đến 178 độ. Với góc nhìn rộng, người dùng có thể thoải mái sử dụng cũng như trao đổi thông tin. Màn hình IPS còn mang lại khả năng hiển thị màu sắc sống động, phù hợp với nhiều nhu cầu công việc.</p> <p style="text-align: justify;"><img src="https://i0.wp.com/it.networkhub.vn/wp-content/uploads/2024/02/Man-Hinh-Cong-MSI-Optix-G32CQ4-E2-170Hz-songphuong.vn-01.jpg" alt="Thiết kế ' . $nameManHinhMsi . '" loading="lazy"></p> <p style="text-align: justify;"><a href="https://cybermart.io.vn/product/pc-man-hinh/msi" title="màn hình văn phòng" target="_blank">Màn hình văn phòng</a> này với thiết kế khung viền siêu mỏng nhờ đó mang lại một không gian hiển thị vượt trội. Cùng với đó là hệ thống khe phụ kiện đa dạng, cổng kết nối tiện dụng từ HDMI đến D-Sub(VGA).</p> <h3 style="text-align: justify;"><strong> Công nghệ MSI EyesErgo hỗ trợ bảo vệ đôi mắt người dùng </strong></h3> <p style="text-align: justify;">MSI Pro MP275 27 inch được trang bị công nghệ MSI EyesErgo và công nghệ chống chớp nhờ đó hỗ trợ giảm thiểu được các tình trạng mỏi mắt khi sử dụng trong thời gian dài. Đặc biệt, màn hình còn được trang bị MSI Eye-Q Check giúp người dùng có thể tự kiểm tra mắt tiện lợi.</p> <p style="text-align: justify;"><img src="https://maytinhgiaphat.vn/wp-content/uploads/2022/03/6.png" alt="Công nghệ  ' . $nameManHinhMsi . '" loading="lazy"></p> <h2 style="text-align: justify;"><strong> Mua ngay ' . $nameManHinhMsi . ' chính hãng tại Cybermart </strong></h2> <p style="text-align: justify;">' . $nameManHinhMsi . ' với thiết kế tiện dụng phù hợp cho nhiều đối tượng người dùng. Hiện mẫu màn hình máy tính chất lượng này được bán chính hãng tại Cybermart với giá bán ưu đãi cùng nhiều khuyến mãi hấp dẫn. Tại đây, khách mua hàng sẽ nhận được nhiều ưu đãi hấp dẫn, đặc biệt là khách hàng thành viên cũng như học sinh – sinh viên. Tại đây hệ thống còn hỗ trợ người dùng mua trả góp ' . $nameManHinhMsi . ' với mức lãi suất thấp.</p></div> </div>
                          ',
                    'short_description' => '
                                <p>✔️Máy mới Fullbox 100% - Chưa Active - Chính Hãng ' . $nameManHinhMsi . '<br>
                                ✔️Được hỗ trợ 1 đổi 1 trong 30 ngày nếu có lỗi từ nhà sản xuất<br>
                                ✔️Bảo hành chính hãng ' . $nameManHinhMsi . ' 12 tháng</p>',
                    'specifications' => '
                    <table id="tskt" class="table table-striped">
            <tbody>
            <tr>
                <td>Tần số quét</td>
                <td>100 Hz</td>
            </tr>
            <tr>
                <td>Thời gian phản hồi</td>
                <td>1ms</td>
            </tr>
            <tr>
                <td>Góc nhìn</td>
                <td>16.7 triệu</td>
            </tr>
            <tr>
                <td>Độ sáng</td>
                <td>300 nits</td>
            </tr>
            <tr>
                <td>Độ tương phản động</td>
                <td>100000000:1</td>
            </tr>
            <tr>
                <td>Độ tương phản tĩnh</td>
                <td>1000:1</td>
            </tr>
            <tr>
                <td>Độ phân giải màn hình</td>
                <td>1920×1080 pixels</td>
            </tr>
            <tr>
                <td>Tấm nền</td>
                <td>IPS</td>
            </tr>
            <tr>
                <td>Số lượng màu</td>
                <td>16.7 triệu</td>
            </tr>
            </tbody></table>
                               ',
                    'product_type' => 'new',
                    'seo_title' => '' . $nameManHinhMsi . ' - Tần Số Quét 100Hz, Tấm Nền IPS, Công Nghệ EyesErgo',
                    'promotion' => $pro,
                    'seo_description' => 'Khám phá ' . $nameManHinhMsi . ' với tần số quét 100Hz và tấm nền IPS cho hình ảnh sắc nét. Công nghệ EyesErgo bảo vệ mắt, cùng thiết kế công thái học và độ phân giải Full HD 1920x1080. Mua ngay tại CellphoneS để nhận ưu đãi hấp dẫn!',
                    'category_id' => 7,
                    'weight' => 0.5,
                    'sub_category_id' => 64,
                    'child_category_id' => 65,
                    'created_at' => now(),
                    "status" => 1
                ],
            ]);
            // Thêm tên sản phẩm tivi category 8
            DB::table('products')->insert([
                [
                    "name" => $nameTiVi32,
                    "slug" => Str::slug($nameTiVi32 . rand(0, 990), '-'),
                    "image" =>  'tivi_' . rand(1, 30) . '.webp',
                    'qty' => 200,
                    'offer_price' => round(rand(10000000, 29000000) / 10000) * 10000,
                    'price' => round(rand(9000000, 29000000) / 10000) * 10000,
                    'offer_start_date' => now(),
                     'offer_end_date' => '2025-07-31',
                    'sku' => 'SPTV' . rand(120, 140). rand(100, 1020), 
                    'video_link' => 'https://youtube.com',
                    'long_description' => '<div id="cpsContent" class="cps-block-content" style="max-height: 100000px;"><div class="ksp-content p-2 mb-2"><h2 class="ksp-title has-text-centered">ĐẶC ĐIỂM NỔI BẬT</h2> <div><ul><li>Thiết kế tinh giản với màn hình phẳng viền mỏng 3 cạnh nâng cao thẩm mỹ của không gian</li><li>Kích thước 55 inch và dộ phân giải 4K tạo nên không gian rõ nét với màu sắc chân thực</li><li>Tổng công suất loa 20W cùng công nghệ Q-Symphony cho trải nghiệm âm thanh sống động</li><li>Hệ điều hành Tizen trực quan, dễ hiểu, dễ thao tác, tích hợp kho ứng dụng phong phú</li><li>Ứng dụng SmartThings cho phép sử dụng điện thoại để điều khiển tivi từ xa tiện lợi</li></ul></div></div> <div><p style="text-align: justify;"><strong>' . $nameTiVi32 . '</strong> là chiếc tivi thông minh truyền tải hình ảnh chân thực với khung hình rộng lớn. Người dùng sẽ có cảm nhận sâu sắc khi xem nội dung qua màn ảnh <a href="https://cybermart.io.vn/product/tivi/samsung/32-inch.html" title="Tivi 55 inch chính hãng" target="_blank"><strong>tivi 55 inch</strong></a> chất lượng này. Hãy xem đoạn mô tả dưới đây để biết ưu điểm của chiếc TV Samsung UA55AU7002 này.</p> <h2><strong>' . $nameTiVi32 . ' - Hình ảnh đẹp chuẩn 4K</strong></h2> <h3 style="text-align: justify;"><strong>Hiển thị màu sắc choáng ngợp, nội dung chuẩn 4K</strong></h3> <p style="text-align: justify;">Tivi 55AU7002 được tích hợp công nghệ PurColor mang đến dải màu sắc rộng lớn. Bạn có thể đắm chìm trong từng chi tiết của khung hình bởi sự sống động y như thật của hình ảnh.</p> <p style="text-align: justify;">Tivi Samsung mới này có khả năng cung cấp hình ảnh chuẩn 4K, nâng cấp mọi nội dung bạn yêu thích lên tầm cao mới. Công nghệ Color Mapping mang đến màu sắc khác biệt cho bạn chiêm ngưỡng thỏa thích.</p> <p style="text-align: justify;"><img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fmediamart.vn%2Ftivi%2Fsmart-tivi-samsung-4k-65-inch-65bu8000-crystal-uhd&psig=AOvVaw2GmTe3uKuffADjsXV4AR9_&ust=1722390372309000&source=images&cd=vfe&opi=89978449&ved=0CA8QjRxqFwoTCMC-kajSzYcDFQAAAAAdAAAAABAE" alt="Đánh giá màn hình Smart tivi Samsung 4K 55 inch UA55AU7002" loading="lazy"></p> <p style="text-align: justify;">&gt;&gt;&gt; Xem thêm <strong><a href="https://cybermart.io.vn/product/tivi/samsung/32-inch.html" target="_blank">Tivi Samsung 43AU7002</a></strong> mới giá cực tốt tại Cybermart.</p> <h3 style="text-align: justify;"><strong>Khung hình mượt mà, kết nối đa thiết bị</strong></h3> <p style="text-align: justify;">' . $nameTiVi32 . ' được trang bị công nghệ Motion Xcelerator xóa bỏ hiện tượng bóng ma trên màn hình. Công nghệ này giúp hình ảnh rõ nét từng chi tiết, chuyển cảnh không bị ảnh hưởng mờ nhòe.</p> <p style="text-align: justify;">Tivi có thể kết nối từ xa với PC, laptop, thiết bị di động giúp bạn tận hưởng tiện ích của thiết bị. Bạn có thể xem các chương trình yêu thích trên tivi, kết nối dễ dàng với các thiết bị thông minh chỉ cần có kết nối Internet trên tivi UA55AU7002.</p> <p style="text-align: justify;"><img src="https://dienmaycongthanh.vn/Upload/Products/smart-tivi-samsung-4k-50-inch-50au7700kxxv/50AU7700KXXV_2.jpg" alt="Đánh giá khả năng hiển thị" loading="lazy"></p> <h2 style="text-align: justify;"><strong>Mua ' . $nameTiVi32 . ' giá rẻ, chất lượng tại Cybermart</strong></h2> <p style="text-align: justify;"><strong>Smart ' . $nameTiVi32 . ' chính hãng</strong> có giá bán cực tốt tại cửa hàng Cybermart, được bảo hành đầy đủ. Gọi ngay cho chúng tôi nếu bạn muốn trang bị chiếc tivi này cho phòng khách nhà mình.</p></div> </div>         
                          ',
                    'short_description' => '
                                <p>✔️Máy mới Fullbox 100% - Chưa Active - Chính Hãng ' . $nameTiVi32 . '<br>
                                ✔️Được hỗ trợ 1 đổi 1 trong 30 ngày nếu có lỗi từ nhà sản xuất<br>
                                ✔️Bảo hành chính hãng ' . $nameTiVi32 . ' 12 tháng</p>',
                    'specifications' => '
                    <table id="tskt" class="table table-striped">
            <tbody>
            <tr>
                <td>Tần số quét</td>
                <td>100 Hz</td>
            </tr>
            <tr>
                <td>Thời gian phản hồi</td>
                <td>1ms</td>
            </tr>
            <tr>
                <td>Góc nhìn</td>
                <td>16.7 triệu</td>
            </tr>
            <tr>
                <td>Độ sáng</td>
                <td>300 nits</td>
            </tr>
            <tr>
                <td>Độ tương phản động</td>
                <td>100000000:1</td>
            </tr>
            <tr>
                <td>Độ tương phản tĩnh</td>
                <td>1000:1</td>
            </tr>
            <tr>
                <td>Độ phân giải màn hình</td>
                <td>1920×1080 pixels</td>
            </tr>
            <tr>
                <td>Tấm nền</td>
                <td>IPS</td>
            </tr>
            <tr>
                <td>Số lượng màu</td>
                <td>16.7 triệu</td>
            </tr>
            </tbody></table>
                               ',
                    'product_type' => 'new',
                    'seo_title' => ' ' . $nameTiVi32 . ' - Hình ảnh đẹp chuẩn 4K, giá rẻ tại Cybermart',
                    'promotion' => $pro,
                    'seo_description' => '' . $nameTiVi32 . ' là lựa chọn lý tưởng với kích thước 55 inch và độ phân giải 4K, mang đến không gian rõ nét với màu sắc chân thực. Với công nghệ PurColor và Color Mapping, bạn sẽ được trải nghiệm hình ảnh sống động, chi tiết tuyệt vời. Hãy khám phá khả năng kết nối đa thiết bị và khung hình mượt mà của chiếc tivi này. Mua ngay tại Cybermart với giá ưu đãi hôm nay!',
                    'category_id' => 8,
                    'weight' => 0.5,
                    'sub_category_id' => 70,
                    'child_category_id' => 66,
                    'created_at' => now(),
                    "status" => 1
                ],
            ]);
        }
    }
}
