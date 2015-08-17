<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('news')->insert([
			'news_tittle' => 'Học thiết kế web cấp tốc',
			'news_category' => 1,
			'news_image' => 'Koala.jpg',
			'news_status' => 1,
			'news_detail' => '<p>Học thiết kế web cho người không biết lập trình” là khóa học được thiết kế đặc biệt dành cho những người không biết &nbsp;lập trình, kỹ thuật máy tính… sử dụng CMS</p><p>Học thiết kế web cho người không biết lập trình” là khóa học được thiết kế đặc biệt dành cho những người không biết &nbsp;lập trình, kỹ thuật máy tính… sử dụng CMS</p><p>Học thiết kế web cho người không biết lập trình” là khóa học được thiết kế đặc biệt dành cho những người không biết &nbsp;lập trình, kỹ thuật máy tính… sử dụng CMS</p><p>Học thiết kế web cho người không biết lập trình” là khóa học được thiết kế đặc biệt dành cho những người không biết &nbsp;lập trình, kỹ thuật máy tính… sử dụng CMS<br></p>',
			'news_url' => 'hoc-thiet-ke-web-cap-toc',
		]);

		DB::table('news')->insert([
			'news_tittle' => 'Học thiết kế website để làm gì?',
			'news_category' => 1,
			'news_image' => 'Penguins.jpg',
			'news_status' => 0,
			'news_detail' => '<p style="text-align: start; margin-bottom: 0px; padding: 5px 0px; outline: none; z-index: 1;"></p><p style="color: rgb(51, 51, 51);">Ngày nay, công nghệ thông tin và Internet đã tạo nên những thay đổi sâu sắc trong cách thức xử lý công việc của chúng ta. Trong doanh nghiệp, sự thay đổi lớn nhất, dễ nhận thấy nhất.</p><p style="color: rgb(51, 51, 51);">Ngày nay, công nghệ thông tin và Internet đã tạo nên những thay đổi sâu sắc trong cách thức xử lý công việc của chúng ta. Trong doanh nghiệp, sự thay đổi lớn nhất, dễ nhận thấy nhất.</p><p style="color: rgb(51, 51, 51);">Ngày nay, công nghệ thông tin và Internet đã tạo nên những thay đổi sâu sắc trong cách thức xử lý công việc của chúng ta. Trong doanh nghiệp, sự thay đổi lớn nhất, dễ nhận thấy nhất.</p><p></p>',
			'news_url' => 'hoc-thiet-ke-website-de-lam-gi',
		]);

		DB::table('news')->insert([
			'news_tittle' => 'Bootrap 3',
			'news_category' => 1,
			'news_image' => 'Desert.jpg',
			'news_status' => 1,
			'news_detail' => 'Bootstrap là Front-end framework, là một bộ sưu tập miễn phí các công cụ để tạo ra các trang web và các ứng dụng web. Nó chứa HTML và CSS dựa trên các mẫu thiết kế cho kiểu chữ, hình thức, các nút, chuyển hướng và các thành phần giao diện khác, cũng như mở rộng JavaScript tùy chọnBootstrap được phát triển bởi Mark Otto và Jacob Thornton tại Twitter như một framework, một công cụ để phục vụ công việc nội bộ của Twitter. Trước khi phát triển Bootstrap, có nhiều thư viện khác nhau đã được sử dụng để phát triển giao diện, dẫn đến mâu thuẫn, xung đột.Bootstrap ra đời để khắc phục những yếu tố này, cũng như giúp các nhà phát triển, lập trình tại Twitter có thể triển khai công việc nhanh hơn, tiện lợi và đồng bộ hơn',
			'news_url' => 'bootrap-3',
		]);

		DB::table('news')->insert([
			'news_tittle' => 'Học đồ họa như thế nào?',
			'news_category' => 1,
			'news_image' => 'Hydrangeas.jpg',
			'news_status' => 1,
			'news_detail' => '<p>Ngày nay, công nghệ thông tin và Internet đã tạo nên những thay đổi sâu sắc trong cách thức xử lý công việc của chúng ta. Trong doanh nghiệp, sự thay đổi lớn nhất, dễ nhận thấy nhất.</p><p>Ngày nay, công nghệ thông tin và Internet đã tạo nên những thay đổi sâu sắc trong cách thức xử lý công việc của chúng ta. Trong doanh nghiệp, sự thay đổi lớn nhất, dễ nhận thấy nhất.</p><p>Ngày nay, công nghệ thông tin và Internet đã tạo nên những thay đổi sâu sắc trong cách thức xử lý công việc của chúng ta. Trong doanh nghiệp, sự thay đổi lớn nhất, dễ nhận thấy nhất.<br></p>',
			'news_url' => 'hoc-do-hoa-nhu-the-nao',
		]);

		DB::table('news')->insert([
			'news_tittle' => 'Laravel là gì?',
			'news_category' => 1,
			'news_image' => 'Hydrangeas.jpg',
			'news_status' => 1,
			'news_detail' => '<p>Laravel được “sinh” ra vào tháng 04-2011 và “cha đẻ” của nó là Taylor Otwell. Nó là 1 framework khá mới mẻ nhưng bù lại nó có “hướng dẫn sử dụng” ( Document ) khá đầy đủ, rỏ ràng và dễ hiểu và nhiều ưu điểm hấp dẫn. Nếu bạn đã từng làm việc với các framework</p><p>Laravel được “sinh” ra vào tháng 04-2011 và “cha đẻ” của nó là Taylor Otwell. Nó là 1 framework khá mới mẻ nhưng bù lại nó có “hướng dẫn sử dụng” ( Document ) khá đầy đủ, rỏ ràng và dễ hiểu và nhiều ưu điểm hấp dẫn. Nếu bạn đã từng làm việc với các framework</p><p>Laravel được “sinh” ra vào tháng 04-2011 và “cha đẻ” của nó là Taylor Otwell. Nó là 1 framework khá mới mẻ nhưng bù lại nó có “hướng dẫn sử dụng” ( Document ) khá đầy đủ, rỏ ràng và dễ hiểu và nhiều ưu điểm hấp dẫn. Nếu bạn đã từng làm việc với các framework<br></p>',
			'news_url' => 'laravel-la-gi',
		]);

		DB::table('news')->insert([
			'news_tittle' => 'Hướng dẫn học Codeigniter',
			'news_category' => 1,
			'news_image' => 'Jellyfish.jpg',
			'news_status' => 1,
			'news_detail' => '<p>Codeigniter Framework được xem là một PHP framework phổ biến và dễ tiếp cận nhất so với các PHP framework hiện hành. Codeigniter được xây dựng và ra mắt vào ngày 28-02-2006. Trải qua nhiều lần cải biên và phát triển, hiện phiên bản mới nhất tính cho tới thời điểm này.</p><p>Codeigniter Framework được xem là một PHP framework phổ biến và dễ tiếp cận nhất so với các PHP framework hiện hành. Codeigniter được xây dựng và ra mắt vào ngày 28-02-2006. Trải qua nhiều lần cải biên và phát triển, hiện phiên bản mới nhất tính cho tới thời điểm này.</p><p>Codeigniter Framework được xem là một PHP framework phổ biến và dễ tiếp cận nhất so với các PHP framework hiện hành. Codeigniter được xây dựng và ra mắt vào ngày 28-02-2006. Trải qua nhiều lần cải biên và phát triển, hiện phiên bản mới nhất tính cho tới thời điểm này.<br></p>',
			'news_url' => 'huong-dan-hoc-codeigniter',
		]);

		DB::table('news')->insert([
			'news_tittle' => 'Lập trình PHP',
			'news_category' => 1,
			'news_image' => 'Tulips.jpg',
			'news_status' => 1,
			'news_detail' => 'PHP (viết tắt hồi quy "PHP: Hypertext Preprocessor") là một ngôn ngữ lập trình kịch bản hay một loại mã lệnh chủ yếu được dùng để phát triển các ứng dụng viết cho máy chủ, mã nguồn mở, dùng cho mục đích tổng quát. Nó rất thích hợp với web và có thể dễ dàng nhúng vào trang HTML. Do được tối ưu hóa cho các ứng dụng web, tốc độ nhanh, nhỏ gọn, cú pháp giống C và Java, dễ học và thời gian xây dựng sản phẩm tương đối ngắn hơn so với các ngôn ngữ khác nên PHP đã nhanh chóng trở thành một ngôn ngữ lập trình web phổ biến nhất thế giới',
			'news_url' => 'lap-trinh-php',
		]);

		DB::table('news')->insert([
			'news_tittle' => 'Yii Framework',
			'news_category' => 1,
			'news_image' => 'Koala.jpg',
			'news_status' => 1,
			'news_detail' => '<p>Yii là 1 PHP Framework mã nguồn mở và hoàn toàn miễn phí, có hiệu năng cao, giúp bạn phát triển tốt nhất các ứng dụng Web 2.0. Yii cho phép tái sử dụng tối đa các thành phần của ứng dụng để tăng tốc độ viết ứng dụng.</p><p>Yii là 1 PHP Framework mã nguồn mở và hoàn toàn miễn phí, có hiệu năng cao, giúp bạn phát triển tốt nhất các ứng dụng Web 2.0. Yii cho phép tái sử dụng tối đa các thành phần của ứng dụng để tăng tốc độ viết ứng dụng.</p><p>Yii là 1 PHP Framework mã nguồn mở và hoàn toàn miễn phí, có hiệu năng cao, giúp bạn phát triển tốt nhất các ứng dụng Web 2.0. Yii cho phép tái sử dụng tối đa các thành phần của ứng dụng để tăng tốc độ viết ứng dụng.<br></p><p>',
			'news_url' => 'yii-framework',
		]);

		DB::table('news')->insert([
			'news_tittle' => 'Mô Hình MVC',
			'news_category' => 1,
			'news_image' => 'Penguins.jpg',
			'news_status' => 1,
			'news_detail' => '<p><span style="color: rgb(68, 68, 68); font-family: arial; font-size: 13px; line-height: 24px;">Mô hình MVC (Model - View - Controller) là một kiến trúc phần mềm hay mô hình thiết kế được sử dụng trong kỹ thuật phần mềm. Nó giúp cho các developer tách ứng dụng của họ ra 3 thành phần khác nhau Model, View và Controller. Mỗi thành phần có một nhiệm vụ riêng biệt và độc lập với các thành phần khác.</span></p><p><span style="color: rgb(68, 68, 68); font-family: arial; font-size: 13px; line-height: 24px;">Mô hình MVC (Model - View - Controller) là một kiến trúc phần mềm hay mô hình thiết kế được sử dụng trong kỹ thuật phần mềm. Nó giúp cho các developer tách ứng dụng của họ ra 3 thành phần khác nhau Model, View và Controller. Mỗi thành phần có một nhiệm vụ riêng biệt và độc lập với các thành phần khác.</span><br></p>',
			'news_url' => 'mo-hinh-mvc',
		]);
	}
}
