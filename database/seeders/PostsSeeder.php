<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'category_id' => 1,
                 'type' => 0,
                'user_id' => 1,
                'image' => 'post.jpg',
                'title' => "'Thò thụt': iPhone đã đúng khi không đụng đến tính năng này suốt những năm qua - Đình đám một thời nay đã chết yểu",
                'content' => "Lý do chọn mua iPhone 15 Pro Max tại Thế Giới Di Động iPhone 15 Pro Max là một chiếc điện thoại thông minh cao cấp được mong đợi nhất năm 2023. Với nhiều tính năng mới và cải tiến, iPhone 15 Pro Max chắc chắn sẽ là một lựa chọn tuyệt vời cho những người dùng đang tìm kiếm một chiếc điện thoại có hiệu năng mạnh mẽ, camera chất lượng và thiết kế sang trọng.  • Sản phẩm chính hãng, đảm bảo chất lượng: Thế Giới Di Động là nhà bán lẻ điện thoại di động lớn nhất Việt Nam, cam kết cung cấp sản phẩm chính hãng, đảm bảo chất lượng. Bạn có thể yên tâm về xuất xứ sản phẩm và có thể tận hưởng trải nghiệm sử dụng tốt nhất.  • Ưu đãi và khuyến mãi hấp dẫn: Thế Giới Di Động thường xuyên có các chương trình khuyến mãi, giảm giá và tặng quà kèm, giúp bạn tiết kiệm được một khoản tiền khi mua iPhone 15 Pro Max.  • Hệ thống cửa hàng rộng khắp: Thế Giới Di Động có mạng lưới cửa hàng rộng khắp trên toàn quốc, giúp bạn dễ dàng tìm được một cửa hàng gần nhà để mua sắm. Bạn cũng có thể trực tiếp kiểm tra sản phẩm và nhận sự hỗ trợ từ nhân viên tại cửa hàng.  • Dịch vụ hậu mãi chuyên nghiệp: Thế Giới Di Động cung cấp dịch vụ hậu mãi chuyên nghiệp, bao gồm bảo hành, sửa chữa và hỗ trợ kỹ thuật. Điều này giúp bạn yên tâm về việc sử dụng trong thời gian dài.  • Trả góp linh hoạt: Thế Giới Di Động cung cấp các lựa chọn trả góp phù hợp với ngân sách của bạn, giúp bạn mua được sản phẩm mong muốn mà không cần thanh toán toàn bộ số tiền một lúc.  • Uy tín và kinh nghiệm lâu năm: Với hơn 15 năm hoạt động trên thị trường, Thế Giới Di Động đã xây dựng được một uy tín mạnh mẽ trong ngành công nghiệp điện thoại di động. Điều này giúp bạn yên tâm về việc mua sắm tại Thế Giới Di Động.  So sánh iPhone 15 Pro Max 256 GB và các sản phẩm iPhone 15 Series khác?",
                'slug' => 'tho-thut-iphone-da-dung-khi-khong-dung-den-tinh-nang-nay-suot-nhung-nam-qua-dinh-dam-mot-thoi-nay-da-chet-yeu',
                'description' => 'iPhone vẫn kiên định với thiết kế tai thỏ suốt nhiều năm dù bị nhiều người dùng chỉ trích. Thế nhưng, có vẻ như Apple một lần nữa đã sáng suốt.
Cái chết của camera thò thụt
Nỗi ám ảnh về màn hình không viền trên điện thoại thông minh đã được thúc đẩy bởi Mi MIX của Xiaomi vào năm 2016 khi tỷ lệ màn hình trên thân máy của thiết bị này lên tới 91,3%, khiến công chúng trầm trồ.
Để đạt được thiết kế này, Xiaomi đã sử dụng một giải pháp độc đáo là đặt camera ở viền dưới của điện thoại.
Những hãng sản xuất khác như Samsung đã thực hiện các giải pháp tăng tỷ lệ màn hình ít phức tạp hơn bằng cách thu nhỏ viền trên Galaxy S8 và S9. iPhone X và OnePlus 6 của Apple thì có phần tai thỏ, nhưng vẫn bị đánh giá là thiếu tính thẩm mỹ.',
                'seo_title' => 'CyberMark - Apple \'in tiền\' đỉnh thế nào ...',
                'seo_description' => 'abc',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ],
            [
                'category_id' => 1,
                 'type' => 0,
                'user_id' => 1,
                'image' => 'post1.jpg',
                'title' => "Apple 'in tiền' đỉnh thế nào: Cá kiếm từ cả điện thoại cũ lẫn mới, đến iPhone 8 lỗi thời vẫn tạo doanh thu, 1 máy qua tay tới 3 chủ",
                'slug' => 'apple-in-tien-dinh-the-nao-ca-kiem-tu-ca-dien-thoai-cu-lan-moi-den-iphone-8-loi-thoi-van-tao-doanh-thu-1-may-qua-tay-toi-3-chu',
                'description' => 'Nhiều người nghĩ rằng việc bán các thiết bị cũ sẽ đe dọa doanh thu Apple song thực tế không phải vậy.
Vài năm qua, thị trường điện thoại thông minh ngày càng trở nên giống thị trường xe hơi cũ.
Bất chấp việc bị thay mới sau 2-3 năm và được coi như đồ dùng một lần, hơn bao giờ hết, những chiếc điện thoại này vẫn tồn tại, thậm chí tồn tại dài lâu. Điều này ảnh hưởng đến mọi thứ, từ việc thống trị cuộc chiến điện thoại thông minh đến cách các ông lớn tìm kiếm lợi nhuận.
Muốn mua cho đứa con lớn một chiếc điện thoại thông minh, bố mẹ chọn iPhone SE được tân trang lại có giá dưới 200 USD/chiếc. Muốn đứa con út có thiết bị để giải trí, họ lại đưa nó chiếc iPhone 8 cũ — thiết bị nghe có vẻ lỗi thời nhưng vẫn đang tạo ra doanh thu cho Apple thông qua đăng ký Apple Arcade 5 USD/tháng.
Thực tế, người Mỹ ngày càng có xu hướng sử dụng lại các thiết bị cũ. Điều này giúp iPhone có tuổi thọ cao hơn, trong khi các mẫu mới gần như không có nhiều sự khác biệt so với phiên bản cũ. Nói cách khác, điện thoại giống như một chiếc ô tô: đắt tiền, rất bền và có thể mua qua tay.',
                'seo_title' => 'CyberMark - Apple \'in tiền\' đỉnh thế nào ...',
                'content' => "Nhiều người nghĩ rằng việc bán các thiết bị cũ sẽ đe dọa doanh thu Apple song thực tế không phải vậy. Vài năm qua, thị trường điện thoại thông minh ngày càng trở nên giống thị trường xe hơi cũ. Bất chấp việc bị thay mới sau 2-3 năm và được coi như đồ dùng một lần, hơn bao giờ hết, những chiếc điện thoại này vẫn tồn tại, thậm chí tồn tại dài lâu. Điều này ảnh hưởng đến mọi thứ, từ việc thống trị cuộc chiến điện thoại thông minh đến cách các ông lớn tìm kiếm lợi nhuận. Muốn mua cho đứa con lớn một chiếc điện thoại thông minh, bố mẹ chọn iPhone SE được tân trang lại có giá dưới 200 USD/chiếc. Muốn đứa con út có thiết bị để giải trí, họ lại đưa nó chiếc iPhone 8 cũ — thiết bị nghe có vẻ lỗi thời nhưng vẫn đang tạo ra doanh thu cho Apple thông qua đăng ký Apple Arcade 5 USD/tháng. Thực tế, người Mỹ ngày càng có xu hướng sử dụng lại các thiết bị cũ. Điều này giúp iPhone có tuổi thọ cao hơn, trong khi các mẫu mới gần như không có nhiều sự khác biệt so với phiên bản cũ. Nói cách khác, điện thoại giống như một chiếc ô tô: đắt tiền, rất bền và có thể mua qua tay. Sức mạnh bền bỉ của iPhone một phần đến từ việc Apple hỗ trợ nâng cấp phần mềm cho các thiết bị ra mắt từ đầu năm 2017. Những chiếc điện thoại này theo đó có thể quay vòng qua chủ sở hữu thứ hai và thậm chí thứ ba trước khi bị loại bỏ. Thậm chí, Apple còn tung ưu đãi giảm giá điện thoại mới nếu người dùng đổi điện thoại cũ - một xu hướng thường xuyên được thấy ở thị trường xe hơi. Chiến lược này giúp Apple thống trị thị trường điện thoại di động. Có vẻ như phần lớn smartphone được sử dụng tại Mỹ cũng sẽ là iPhone – thành quả sau khi thị phần nhà Táo khuyết tăng đều đặn. Hết quý II/2022, Counterpoint Research cho biết lần đầu tiên thị phần điện thoại di động của Apple tại Mỹ vượt mốc 50%. Tính đến tháng 12, iPhone chiếm 52,5% tổng số điện thoại thông minh được sử dụng, theo Hanish Bhatia, nhà phân tích tại Counterpoint. Ông dự đoán tỷ lệ này sẽ tiếp tục tăng lên cho đến khi Android tìm ra được cách ngăn chặn sự “xói mòn” trong cơ sở người dùng.      Nhiều người nghĩ rằng việc bán các thiết bị cũ sẽ đe dọa doanh thu Apple song thực tế không phải vậy.   Việc Apple thống trị thị trường điện thoại thông minh Mỹ kéo dài trong nhiều năm. Thành quả này đến từ nhiều yếu tố, trong đó có việc hãng duy trì sự phổ biến của những chiếc iPhone với giới trẻ. Họ sợ cảm giác làm xáo trộn cuộc trò chuyện nhóm bởi những khung chat màu xanh lá cây - cách Apple hiển thị tin nhắn văn bản được gửi từ các thiết bị “ngoại lai”.  “Nếu không dùng iPhone, bạn rất dễ nằm ngoài các cuộc trò chuyện nhóm trên mạng xã hội của bạn bè. Nghe có vẻ xấu tính nhưng thật khó để nhắn tin với một người không dùng chung hãng điện thoại với mình”, Nicole Jimenez, sinh viên năm hai 20 tuổi tại Đại học Rutgers (New Jersey, Mỹ), giải thích. 		",
                'seo_description' => 'Nhiều người nghĩ rằng việc bán các thiết bị cũ sẽ đe dọa doanh thu Apple song thực tế không phải vậy...',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ],
            [
                'category_id' => 1,
                 'type' => 0,
                'user_id' => 1,
                'image' => 'post2.jpg',
                'title' => 'Đây là mẫu iPhone chính hãng \'phá giá\' chưa từng có tại Việt Nam, chỉ cần 10 triệu đồng có ngay máy mới!',
                'slug' => 'day-la-mau-iphone-chinh-hang-pha-gia-chua-tung-co-tai-viet-nam-chi-can-10-trieu-dong-co-ngay-may-moi',
                'content' => "Nhiều người nghĩ rằng việc bán các thiết bị cũ sẽ đe dọa doanh thu Apple song thực tế không phải vậy. Vài năm qua, thị trường điện thoại thông minh ngày càng trở nên giống thị trường xe hơi cũ. Bất chấp việc bị thay mới sau 2-3 năm và được coi như đồ dùng một lần, hơn bao giờ hết, những chiếc điện thoại này vẫn tồn tại, thậm chí tồn tại dài lâu. Điều này ảnh hưởng đến mọi thứ, từ việc thống trị cuộc chiến điện thoại thông minh đến cách các ông lớn tìm kiếm lợi nhuận. Muốn mua cho đứa con lớn một chiếc điện thoại thông minh, bố mẹ chọn iPhone SE được tân trang lại có giá dưới 200 USD/chiếc. Muốn đứa con út có thiết bị để giải trí, họ lại đưa nó chiếc iPhone 8 cũ — thiết bị nghe có vẻ lỗi thời nhưng vẫn đang tạo ra doanh thu cho Apple thông qua đăng ký Apple Arcade 5 USD/tháng. Thực tế, người Mỹ ngày càng có xu hướng sử dụng lại các thiết bị cũ. Điều này giúp iPhone có tuổi thọ cao hơn, trong khi các mẫu mới gần như không có nhiều sự khác biệt so với phiên bản cũ. Nói cách khác, điện thoại giống như một chiếc ô tô: đắt tiền, rất bền và có thể mua qua tay. Sức mạnh bền bỉ của iPhone một phần đến từ việc Apple hỗ trợ nâng cấp phần mềm cho các thiết bị ra mắt từ đầu năm 2017. Những chiếc điện thoại này theo đó có thể quay vòng qua chủ sở hữu thứ hai và thậm chí thứ ba trước khi bị loại bỏ. Thậm chí, Apple còn tung ưu đãi giảm giá điện thoại mới nếu người dùng đổi điện thoại cũ - một xu hướng thường xuyên được thấy ở thị trường xe hơi. Chiến lược này giúp Apple thống trị thị trường điện thoại di động. Có vẻ như phần lớn smartphone được sử dụng tại Mỹ cũng sẽ là iPhone – thành quả sau khi thị phần nhà Táo khuyết tăng đều đặn. Hết quý II/2022, Counterpoint Research cho biết lần đầu tiên thị phần điện thoại di động của Apple tại Mỹ vượt mốc 50%. Tính đến tháng 12, iPhone chiếm 52,5% tổng số điện thoại thông minh được sử dụng, theo Hanish Bhatia, nhà phân tích tại Counterpoint. Ông dự đoán tỷ lệ này sẽ tiếp tục tăng lên cho đến khi Android tìm ra được cách ngăn chặn sự “xói mòn” trong cơ sở người dùng.      Nhiều người nghĩ rằng việc bán các thiết bị cũ sẽ đe dọa doanh thu Apple song thực tế không phải vậy.   Việc Apple thống trị thị trường điện thoại thông minh Mỹ kéo dài trong nhiều năm. Thành quả này đến từ nhiều yếu tố, trong đó có việc hãng duy trì sự phổ biến của những chiếc iPhone với giới trẻ. Họ sợ cảm giác làm xáo trộn cuộc trò chuyện nhóm bởi những khung chat màu xanh lá cây - cách Apple hiển thị tin nhắn văn bản được gửi từ các thiết bị “ngoại lai”.  “Nếu không dùng iPhone, bạn rất dễ nằm ngoài các cuộc trò chuyện nhóm trên mạng xã hội của bạn bè. Nghe có vẻ xấu tính nhưng thật khó để nhắn tin với một người không dùng chung hãng điện thoại với mình”, Nicole Jimenez, sinh viên năm hai 20 tuổi tại Đại học Rutgers (New Jersey, Mỹ), giải thích. 		",
                'description' => 'Đây là mức giảm sâu nhất từ trước đến nay của mẫu iPhone luôn chễm chệ trên top những sản phẩm smartphone bán chạy nhất tại thị trường Việt Nam. iPhone 11 có thể được xem như một trong những chiếc điện thoại thành công nhất trong lịch sử các dòng iPhone. Đồng thời, đây cũng là một trong những chiếc flagship hiếm hoi của năm 2019 vẫn còn được kinh doanh chính hãng tại thị trường Việt Nam. Dù ra mắt đã lâu cùng với sự bùng nổ của các thiết bị di động trong phân khúc tầm trung, iPhone 11 vẫn có sức hút với người tiêu dùng Việt',
                'seo_title' => 'CyberMark - Apple \'in tiền\' đỉnh thế nào ...',
                'seo_description' => 'Dù ra mắt đã lâu cùng với sự bùng nổ của các thiết bị di động trong phân khúc tầm trung, iPhone 11 vẫn có sức hút với người tiêu dùng Việt...',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ],
            [
                'category_id' => 1,
                 'type' => 0,
                'user_id' => 1,
                'image' => 'post3.jpg',
                'title' => 'Người giàu cũng khóc: iPhone 15 lộ giá bán cao đến khó tin, phiên bản Pro Max gần 70 triệu đồng?',
                'content' => "Nhiều người nghĩ rằng việc bán các thiết bị cũ sẽ đe dọa doanh thu Apple song thực tế không phải vậy. Vài năm qua, thị trường điện thoại thông minh ngày càng trở nên giống thị trường xe hơi cũ. Bất chấp việc bị thay mới sau 2-3 năm và được coi như đồ dùng một lần, hơn bao giờ hết, những chiếc điện thoại này vẫn tồn tại, thậm chí tồn tại dài lâu. Điều này ảnh hưởng đến mọi thứ, từ việc thống trị cuộc chiến điện thoại thông minh đến cách các ông lớn tìm kiếm lợi nhuận. Muốn mua cho đứa con lớn một chiếc điện thoại thông minh, bố mẹ chọn iPhone SE được tân trang lại có giá dưới 200 USD/chiếc. Muốn đứa con út có thiết bị để giải trí, họ lại đưa nó chiếc iPhone 8 cũ — thiết bị nghe có vẻ lỗi thời nhưng vẫn đang tạo ra doanh thu cho Apple thông qua đăng ký Apple Arcade 5 USD/tháng. Thực tế, người Mỹ ngày càng có xu hướng sử dụng lại các thiết bị cũ. Điều này giúp iPhone có tuổi thọ cao hơn, trong khi các mẫu mới gần như không có nhiều sự khác biệt so với phiên bản cũ. Nói cách khác, điện thoại giống như một chiếc ô tô: đắt tiền, rất bền và có thể mua qua tay. Sức mạnh bền bỉ của iPhone một phần đến từ việc Apple hỗ trợ nâng cấp phần mềm cho các thiết bị ra mắt từ đầu năm 2017. Những chiếc điện thoại này theo đó có thể quay vòng qua chủ sở hữu thứ hai và thậm chí thứ ba trước khi bị loại bỏ. Thậm chí, Apple còn tung ưu đãi giảm giá điện thoại mới nếu người dùng đổi điện thoại cũ - một xu hướng thường xuyên được thấy ở thị trường xe hơi. Chiến lược này giúp Apple thống trị thị trường điện thoại di động. Có vẻ như phần lớn smartphone được sử dụng tại Mỹ cũng sẽ là iPhone – thành quả sau khi thị phần nhà Táo khuyết tăng đều đặn. Hết quý II/2022, Counterpoint Research cho biết lần đầu tiên thị phần điện thoại di động của Apple tại Mỹ vượt mốc 50%. Tính đến tháng 12, iPhone chiếm 52,5% tổng số điện thoại thông minh được sử dụng, theo Hanish Bhatia, nhà phân tích tại Counterpoint. Ông dự đoán tỷ lệ này sẽ tiếp tục tăng lên cho đến khi Android tìm ra được cách ngăn chặn sự “xói mòn” trong cơ sở người dùng.      Nhiều người nghĩ rằng việc bán các thiết bị cũ sẽ đe dọa doanh thu Apple song thực tế không phải vậy.   Việc Apple thống trị thị trường điện thoại thông minh Mỹ kéo dài trong nhiều năm. Thành quả này đến từ nhiều yếu tố, trong đó có việc hãng duy trì sự phổ biến của những chiếc iPhone với giới trẻ. Họ sợ cảm giác làm xáo trộn cuộc trò chuyện nhóm bởi những khung chat màu xanh lá cây - cách Apple hiển thị tin nhắn văn bản được gửi từ các thiết bị “ngoại lai”.  “Nếu không dùng iPhone, bạn rất dễ nằm ngoài các cuộc trò chuyện nhóm trên mạng xã hội của bạn bè. Nghe có vẻ xấu tính nhưng thật khó để nhắn tin với một người không dùng chung hãng điện thoại với mình”, Nicole Jimenez, sinh viên năm hai 20 tuổi tại Đại học Rutgers (New Jersey, Mỹ), giải thích. 		",
                'slug' => 'nguoi-giau-cung-khoc-iphone-15-lo-gia-ban-cao-den-kho-tin-phien-ban-pro-max-gan-70-trieu-dong',
                'description' => 'Theo một nguồn tin mới đây, giá iPhone 15 Pro Max có thể tăng lên đến mức hơn 50%, một con số chưa từng có. Điều này có thể khiến nhiều người phải đắn đo khi xuống tiền cho nhà Táo. Thời gian gần đây, những tin đồn về iPhone 15 series liên tục xuất hiện khiến người hâm mộ Apple thấp thỏm chờ đợi. Dòng iPhone mới năm nay được dự đoán sẽ sở hữu nhiều thay đổi, với đột phá từ thiết kế đến hiệu năng. Tuy nhiên, mức giá của sản phẩm cũng có thể khiến nhiều người ngỡ ngàng khi mang trên mình những cải tiến đắt giá. Dòng iPhone 15 năm nay được dự đoán sẽ sở hữu nhiều thay đổi, với đột phá từ thiết kế đến hiệu năng Cụ thể, theo một nguồn tin được chia sẻ trên Weibo, Apple có kế hoạch tăng dung lượng lưu trữ tối đa khả dụng trên iPhone 15 Pro Max (hoặc iPhone 15 Ultra) lên 2 TB. Biến thể này được cho là sẽ có giá 2.906 USD (khoảng 68,2 triệu đồng).',
                'seo_title' => 'CyberMark - Apple \'in tiền\' đỉnh thế nào ...',
                'seo_description' => 'Theo một nguồn tin mới đây, giá iPhone 15 Pro Max có thể tăng lên đến mức hơn 50%, một con số chưa từng có...',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ],
        ]);
    }
}
