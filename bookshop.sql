-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3333
-- Thời gian đã tạo: Th8 02, 2024 lúc 10:33 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bookshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Tiểu thuyết', NULL, NULL),
(2, 'Thiếu nhi', NULL, NULL),
(3, 'Tình cảm', NULL, NULL),
(4, 'Kinh dị', NULL, NULL),
(5, 'Tôn giáo', NULL, NULL),
(9, 'Văn học viễn tưởng', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2024_06_03_152640_create_categories_table', 1),
(3, '2024_06_03_152722_create_products_table', 1),
(4, '2024_06_03_163936_create_users_table', 1),
(5, '2024_06_03_163947_create_orders_table', 1),
(6, '2024_06_03_164005_create_order_details_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL DEFAULT 'Tiền mặt',
  `buy_date` date NOT NULL,
  `status` int(11) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `address`, `payment_method`, `buy_date`, `status`, `token`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'Lai Thanh Hoa', '0354951127', 'HoChiMinh CiTy', 'Tiền mặt', '2024-08-02', 1, NULL, 1, '2024-08-02 10:20:37', '2024-08-02 10:22:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `product_id`, `price`, `quantity`, `order_id`, `created_at`, `updated_at`) VALUES
(1, 1, 100, 5, 1, '2024-08-02 10:10:54', '2024-08-02 10:10:54'),
(2, 1, 100, 1, 3, '2024-08-02 10:20:37', '2024-08-02 10:20:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` decimal(8,3) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `description`, `price`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Ông Già Và Biển Cả ', 'ong-gia-va-bien-ca.jpg', 'Ông Già Và Biển Cả hay còn có tên tiếng Anh là The Old Man and the Sea, đây là một cuốn tiểu thuyết hay và vô cùng nổi tiếng được viết dưới ngòi bút của nhà văn người Mỹ - Ernest Hemingway. Tác phẩm được nhà văn sáng tác vào năm 1951 tại Cuba, đã mang về ', 100.000, 1, NULL, NULL),
(2, 'Âm Thanh Và Cuồng Nộ', 'am-thanh-va-cuong-no.jpg', 'Âm Thanh Và Cuồng Nộ là một trong những cuốn tiểu thuyết hay mà bạn không thể bỏ qua, được viết bởi hào văn William Faulkner. Tiểu thuyết được ấn hành lần đầu tiên vào ngày 7.10.1929, chính là tác phẩm đã giúp William Faulkner đạt đến đỉnh cao của sự thàn', 200.000, 1, NULL, NULL),
(3, 'Thép Đã Tôi Thế Đấy ', 'thep-da-toi-the-day.jpg', 'Đối với những ai đam mê văn học lịch sử thì có lẽ sẽ biết đến Thép Đã Tôi Thế Đấy của nhà văn Nikolai Ostrovsky. Tác phẩm là một cuốn nhật ký ghi chép lại cả quá trình tôi thép, những bước đường gian khổ trưởng thành của thế hệ thanh niên Xô Viết đời đầu.', 200.000, 1, NULL, NULL),
(5, 'Nhà Giả Kim ', 'nha-gia-kim.jpg', 'Nhà Giả Kim luôn nằm trong top những cuốn sách bán chạy nhất thế giới, được viết bởi nhà văn Paulo Coelho. Quyển sách sẽ rất phù hợp cho những ai đang cần một sự định hướng đúng đắn cho cuộc đời của mình. ', 250.000, 1, NULL, NULL),
(6, ' Lược Sử Thời Gian ', 'luot-su-thoi-gian.jpg', 'Lược Sử Thời Gian là một kiệt tác kinh điển của nhà vật lý thiên tài Stephen Hawking. Cuốn tiểu thuyết thuộc phạm trù khoa học vũ trụ là một trong những cuốn sách tiểu thuyết hay và đáng đọc nhất. ', 150.000, 1, NULL, NULL),
(7, 'Hoàng Tử Bé', 'hoang-tu-be.jpg', 'Antoine De Saint-Exupéry là một nhà văn, nhà báo và phi công người Pháp. Cuộc đời ông đã trải qua vô vàn trải nghiệm đặc biệt, từ chuyến bay trên sa mạc cho đến tham gia các cuộc chiến tranh. Với tài năng vượt trội, ông đã cho ra đời nhiều tác phẩm văn họ', 115.000, 2, NULL, NULL),
(8, 'Charlie và nhà máy Sô-cô-la', 'Charlie-va-nha-may-socola.jpg', '\"Charlie và nhà máy Sô-cô-la\" của Roald Dahl là một tác phẩm văn học thiếu nhi tuyệt vời, kể về hành trình đầy phiêu lưu của cậu bé nghèo Charlie Bucket trong nhà máy Sô-cô-la kỳ diệu của Willy Wonka - một người đàn ông kỳ quặc và tài hoa. Tuy sống trong ', 115.000, 2, NULL, NULL),
(9, 'Alice ở xứ sở diệu kỳ ', 'alice-o-su-so-dieu-ki.jpg', 'Lewis Carroll là bút danh của Charles Lutwidge Dodgson, một nhà văn, nhà toán học và nhà giáo dục người Anh. Với tài năng viết văn đặc biệt và sự sáng tạo phi thường, ông đã tạo ra một trong những tác phẩm kinh điển nhất của thế giới - \"Alice ở xứ sở diệu', 115.000, 2, NULL, NULL),
(10, 'Không gia đình ', 'khong-gia-dinh.jpg', '\"Không gia đình\" (tiếng Pháp là \"Sans Famille\") của Hector Malot là một trong những tác phẩm văn học kinh điển được yêu thích nhất của Pháp, đã được dịch và xuất bản tại nhiều quốc gia trên thế giới. Cuốn sách kể về cuộc đời của Rémi, một cậu bé mồ côi và', 115.000, 2, NULL, NULL),
(11, 'Những tấm lòng cao cả ', 'nhung-tam-long-cao-ca.jpg', 'Edmondo De Amicis (1846 - 1908) là một nhà văn người Ý, được biết đến với tác phẩm \"Những tấm lòng cao cả\".  Đây là một trong những tác phẩm văn học thiếu nhi nổi tiếng nhất của Ý, được dịch và xuất bản tại nhiều quốc gia trên thế giới. Cuốn sách gồm các ', 115.000, 2, NULL, NULL),
(12, 'Tấm Vải Đỏ', 'tam-vai-do.jpg', 'Bộ truyện kinh dị hay nhất được nhiều khán giả đón đọc chính là truyện Tấm vải đỏ. Dù nhiều năm qua đi nhưng sức hút của tác phẩm này vẫn không hề giảm, nó vẫn để lại ấn tượng sâu sắc bởi độ kinh dị đến hãi hùng của các tình tiết trong truyện.', 130.000, 4, NULL, NULL),
(13, 'Người tìm xác', 'nguoi-tim-xac.jpg', 'Đây cũng là một bộ truyện kinh dị quen thuộc với nhiều độc giả đam mê truyện kinh dị. Truyện gây ám ảnh với người đọc bởi những câu chuyện tâm linh đầy ly kỳ bí ẩn. Những chi tiết ma quỷ đầy ghê rợn miêu tả trong truyện bằng giọng văn âm lãnh khiến ai cũn', 130.000, 4, NULL, NULL),
(14, 'Địa Ngục Tầng Thứ 19', 'dia-nguc-tang-19.jpg', 'Nằm trong top những truyện kinh dị hay nhất, Địa ngục tầng thứ 19 do tác giả nổi tiếng về thể loại kinh dị – Sái Tuấn chắp bút. Truyện kể về nhóm bạn tình cờ mở tin nhắn trên điện thoại và vô vàn những sự việc tang thương kéo theo sau.', 130.000, 4, NULL, NULL),
(15, 'Hồ Sơ Bí Ẩn', 'ho-so-bi-an.jpg', 'Hồ sơ bí ẩn cũng là một tên truyện đáng tham khảo cho những bạn yêu thích thể loại truyện ly kì. Truyện có nhiều tình tiết huyền bí kinh dị cùng nội dung mới mẻ hấp dẫn đã thu hút lượng lớn người đọc tìm đọc.', 130.000, 4, NULL, NULL),
(16, 'Tơ Đồng Rỏ Máu', 'to-dong-ro-mau.jpg', 'Tác giả Quỷ Cổ Nữ có khá nhiều tác phẩm nằm trong danh sách truyện kinh dị hay nhất và Tơ Đồng Rỏ Máu là một trong số đó. Bộ truyện kể về những vụ án mạng vào thời nhà Minh, các cô gái lần lượt mất tích và khi thấy xác đều mất một ngón tay.', 130.000, 4, NULL, NULL),
(17, 'Trốn lên mái nhà để khóc', 'tron-len-mai-nha-de-khoc.jpg', 'Đến một thời điểm nào đó, chúng ta sẽ đột nhiên nhớ đến những chuyện đã từng quên, nhớ đến những người đã tạm biệt; sau đó bình tĩnh nói với bản thân, cũng tốt, chính bởi những sự kiện đó, ta mới dần trở thành ta của bây giờ. Và cũng chính bởi vậy, tất th', 100.000, 3, NULL, NULL),
(18, 'Hãy về với cha', 'hay-ve-voi-cha.jpg', 'Với giọng văn nhẹ nhàng, thủ thỉ kể chuyện đan xen những suy nghĩ, cảm xúc của các thành viên trong gia đình, Shin Kyung Sook đã phác họa lên hình ảnh người cha thân yêu của gia đình mình. Mất cha mẹ, bất đắc dĩ trở thành con trưởng khi các anh mất đi, ôn', 100.000, 3, NULL, NULL),
(19, 'TLà gia đình nhưng cũng là người lạ', 'la-gia-dinh-nhung-cung-la-nguoi-la.jpg', '“Là gia đình cũng là người lạ” - Khởi đầu của sự tự chữa lành. Cuốn sách thay bạn gửi gắm yêu thương đến đứa trẻ nội tâm từng bị tổn thương của chính mình. “Con chưa bao giờ ôm những hoài bão lớn lao trong đời. Ước mơ duy nhất của con chỉ là có một gia đì', 100.000, 3, NULL, NULL),
(20, 'Hiên nhà chắn hết mưa giông', 'hien-nha-chan-het-mua-giong.jpg', 'Sách “Hiên nhà chắn hết mưa giông” là cuốn sách tô màu dành cho người lớn kết hợp với những dòng thơ nhẹ nhàng và đáng yêu. Cuốn sách với những câu từ nhẹ nhàng, những mảnh chuyện nhỏ vụn vặt hằng ngày và những bức tranh đáng yêu sẽ là mái hiên chắn mưa g', 100.000, 3, NULL, NULL),
(21, 'Thư cho Em', 'thu-cho-em.jpg', '\"Thư cho Em\" là một cuốn sách đặc biệt, mang đến cho độc giả một hành trình xuyên qua lịch sử đầy sóng gió của Việt Nam. Qua hơn 400 bức thư mà \"Anh\" Hoàng Đan đã gửi cho \"Em\" An Vinh, tác phẩm này không chỉ là lời tâm sự của một người chồng với người vợ ', 100.000, 3, NULL, NULL),
(22, ' Tìm bình yên trong gia đình', 'tim-binh-yen-trong-gia-dinh.png', '“Khổ đau hay hạnh phúc đều mang tính hữu cơ, nghĩa là có thể chuyển đổi được”. Đây là cuốn sách sẽ giúp bạn chuyển đổi những khổ đau trong gia đình thành hạnh phúc và giúp bạn giữ gìn niềm hạnh phúc đang có sẵn trong gia đình mình.', 200.000, 5, NULL, NULL),
(23, ' Muốn an được an', 'muon-an-duoc-an.png', 'Thiền sư Thích Nhất Hạnh là người lãnh đạo tôn giáo lớn thứ hai ở phương Tây, chỉ sau Đạt Lai Lạt Ma. Thiền sư đã viết hơn 100 cuốn sách, trong đó có hơn 40 cuốn bằng tiếng Anh. Muốn an được an cũng là một cuốn sách được viết bằng tiếng Anh vào năm 1987, ', 250.000, 5, NULL, NULL),
(24, ' Hạnh phúc cầm tay', 'hanh-phuc-cam-tay.png', 'Thầy Thích Nhất Hạnh viết trong cuốn sách này “Nhiều người trong xã hội không có hạnh phúc, cho dù những điều kiện hạnh phúc luôn có đó”. Đi qua từng phần của cuốn sách bạn sẽ dần hiểu rằng hạnh phúc luôn ở trong tay chúng ta, chỉ là chúng ta chưa biết cá', 200.000, 5, NULL, NULL),
(25, ' Tâm từ tâm', 'tam-tu-tam.png', 'Tâm Từ Tâm là một cuốn sách mang đến cho người nghe niềm vui sống, triết lý sống giản dị, trong sáng, yêu đời và thương người của giáo lý nhà Phật. Với hi vọng lan toả tinh thần an lạc của cuốn sách tới nhiều người hơn nữa, Fonos tặng bạn sách nói miễn ph', 50.000, 5, NULL, NULL),
(26, '  Phật học tinh hoa', 'phat-hoc-tinh-hoa.png', 'Tác giả Nguyễn Duy Cần viết trong lời nói đầu của cuốn sách này: “...để người mới bước chân vào con đường Phật học khỏi phải ngỡ ngàng, cần phải có một quyển tạm gọi là tinh hoa trong đó được trình bày một cách đơn giản và dễ hiểu với những danh từ thông ', 200.000, 5, NULL, NULL),
(27, 'Ubik ', 'ubik.jpg', 'Nếu bạn là người mới thử tìm hiểu về thể loại này, lựa chọn tốt nhất là bắt đầu từ các tác phẩm của nhà văn Philip K. Dick. Đây là cố nhà văn viết về thể loại khoa học viễn tưởng với nhiều tựa sách danh tiếng đã được chuyển thể thành phim như: Blade Runne', 130.000, 9, NULL, NULL),
(28, 'Dune  ', 'dune.jpg', 'Dune có thể xem là một tác phẩm kinh điển trong thể loại khoa học viễn tưởng. Cuốn sách này lấy cảm hứng từ thế giới thần thoại và sự giao thoa giữa tôn giáo, chính trị và quyền lực. Bên cạnh đó, quyển sách cũng được tôn vinh là tiểu thuyết khoa học viễn ', 130.000, 9, NULL, NULL),
(29, 'Labyrinths  ', 'Labyrinths.jpg', 'Trong các tác phẩm tiêu biểu của nhà văn Jorge Luis Borges, Labyrinths là tuyển tập truyện ngắn đặc biệt sẽ kích thích và mở mang trí tưởng tượng của bất kỳ bạn đọc nào.', 130.000, 9, NULL, NULL),
(30, '1984  ', '1984.jpg', '1984 là một tác phẩm kinh điển trong thể loại khoa học giả tưởng chịu sự ảnh hưởng sâu sắc bởi các hệ tư tưởng chính trị. Bên cạnh đó, đây cũng là tựa sách làm nguồn cảm hứng cho nhiều tác phẩm khoa học viễn tưởng sau này về thể loại “dystopian”. Không ng', 130.000, 9, NULL, NULL),
(31, 'Neuromancer  ', 'Neuromancer.jpg', 'Neuromancer là một cuốn sách khoa học viễn tưởng thiên về thể loại cyberpunk. Nội dung tác phẩm nói vềnhững tên hacker máy tính chống lại thế giới ngầm và trí tuệ nhân tạo đang phát triển vượt bậc. Hơn thế nữa, đây được xem là quyển sách đi trước thời đại', 130.000, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `username`, `password`, `email`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Lai Thanh Hoa', '0354951127', 'laithanhhoa', '$2y$12$4m7bPpk7FmvyQYunf0pvMOqy89Pwszd0erR54yJT0/jNoENzeGBeq', 'laithanhhoa16092004@gmail.com', 'admin', '2024-08-02 10:06:14', '2024-08-02 10:06:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_reset_tokens`
--

CREATE TABLE `user_reset_tokens` (
  `email` varchar(100) NOT NULL,
  `token` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_reset_tokens`
--
ALTER TABLE `user_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
