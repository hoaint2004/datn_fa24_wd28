-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 28, 2024 at 08:11 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datn_fa24_wd28`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(1, 'Adidas – “ông trùm” thống thị trên thế giới '),
(2, 'Nike'),
(3, 'Giày Supreme – thương hiệu giày Sneaker xa xỉ '),
(4, 'Jordan 1'),
(5, 'Puma'),
(6, 'Balenciaga'),
(7, 'New Balance '),
(8, 'Converse'),
(9, 'Vans '),
(10, 'Christian Louboutin – thương hiệu giày nổi tiếng đẳng cấp');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'giày thể thao', 'https://travelgear.vn/blog/wp-content/uploads/2020/01/giay-adidas.jpg', NULL, NULL),
(2, 'giày thời trang ', 'https://travelgear.vn/blog/wp-content/uploads/2020/01/thuong-hieu-giay-sneaker-noi-tieng.jpg', NULL, NULL),
(3, ' giày công sở ', 'https://th.bing.com/th/id/OIP.uE4jI5TnzbQXWqDlFFzcOQHaHa?w=176&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7', NULL, NULL),
(4, 'giày đi bộ ', 'https://travelgear.vn/blog/wp-content/uploads/2020/01/black-friday-jordan-retro-shoes-clothing-2019.jpg', NULL, NULL),
(5, 'giày sandal', 'https://th.bing.com/th/id/OIP.X7ED30dq-Pu-aGf26YhtaQHaHa?w=208&h=208&c=7&r=0&o=5&dpr=1.3&pid=1.7', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` bigint NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Màu Trắng', '2024-10-28 06:59:11', '2024-10-28 06:59:11'),
(2, 'Màu Đen', '2024-10-28 06:59:11', '2024-10-28 06:59:11');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `product_id`, `user_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Chất Lượng Chất liệu: ⭐⭐⭐⭐⭐\r\n\r\nTính đầu tiên khiến tôi ấn tượng là chất liệu. Da cao cấp của đôi giày XYZ khiến chúng trở nên bền bỉ và thoải mái. Đôi chân tôi luôn được ôm sát nhưng không bị chật, mang lại cảm giác thoải mái từng bước đi.', NULL, NULL),
(2, 2, 2, 'Thiết Kế và Phong Cách: ⭐⭐⭐⭐⭐\r\n\r\nVới thiết kế hiện đại và tinh tế, đôi giày XYZ không chỉ đẹp mắt mà còn phản ánh được cái tôi cá nhân của tôi. Mỗi chi tiết, từ đường may tinh tế đến gam màu hài hòa, đều làm nổi bật sự chăm sóc của nhà sản xuất đối với từng đôi giày.', NULL, NULL),
(3, 7, 3, 'Độ Bền và Sự Thoải Mái: ⭐⭐⭐⭐⭐\r\n\r\nSự thoải mái không chỉ là yếu tố quan trọng mà còn là lý do khiến tôi chọn đôi giày XYZ. Đế giày êm ái, linh hoạt, và đặc biệt là khả năng chống trơn tốt. Tôi đã thử nghiệm chúng trong mọi điều kiện thời tiết và mọi loại địa hình – từ đường phố đến đồng cỏ, và chúng vẫn giữ vững.', NULL, NULL),
(4, 5, 4, 'Giá Trị và Đáng Đồng Tiền: ⭐⭐⭐⭐⭐\r\n\r\nVới chất lượng và thoải mái mà đôi giày XYZ mang lại, giá trị của chúng vượt xa so với giá bán. Đây là một đầu tư hợp lý cho sự thoải mái và phong cách.', NULL, NULL),
(5, 3, 5, 'Đánh Giá Sản Phẩm: ⭐⭐⭐⭐⭐\r\n\r\nTôi đã mua một đôi giày da nam tại cửa hàng Bata, và tôi không thể hạnh phúc hơn về chất lượng. Da mềm mại, thoải mái từ lần đầu tiên đi, và kiểu dáng thời thượng. Chúng tôi thường xuyên nhận được lời khen về đôi giày này mỗi khi đi ra ngoài. Đó thực sự là một ấn tượng tuyệt vời!', NULL, NULL),
(6, 8, 6, 'Dịch Vụ Tận Tâm: ⭐⭐⭐⭐⭐\r\n\r\nTôi cũng muốn chia sẻ về trải nghiệm mua sắm tại cửa hàng Bata. Nhân viên rất nhiệt tình và tận tâm. Họ không chỉ giúp tôi chọn được đôi giày phù hợp, mà còn tư vấn về cách bảo quản và chăm sóc giày. Dịch vụ khách hàng tại đây thực sự xuất sắc!', NULL, NULL),
(7, 6, 7, 'Sự Thoải Mái Vượt Trội: ⭐⭐⭐⭐⭐\r\n\r\nMỗi bước chân đều thoải mái và nhẹ nhàng. Tôi có công việc phải di chuyển nhiều, và đôi giày Bata thực sự giúp tôi cảm thấy thoải mái và không mệt mỏi dù mỗi ngày tôi phải di chuyển khá nhiều.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id` bigint NOT NULL,
  `discount_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id`, `discount_code`, `description`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, '1', '⚠️Cứ 5 phút: lại có 1 Bạn hỏi ” Sneaker ZARA ” ‼️‼️\r\n\r\nBán cả #1000_Đôi rồi mà vẫn không đủ trả khách ❤️\r\n\r\n=> Ai bỉu ” CHẤT ” hơn cả hàng Auth lun Giá IU IU lắm?\r\n\r\n==============\r\n\r\n➡️ Inbox :Tên + Số điện thoại + mã sản phẩm(Bạn sẽ được giảm 10%)\r\n\r\nShip toàn quốc (COD) .Nhận hàng – thanh toán\r\n\r\n✍️ Hãy nhanh tay đặt hàng, ALENA sẽ giúp bạn có được đôi giày bạn ưng ý nhất 😉\r\n\r\n☎️Liên Hệ SĐT để được hỗ trợ:\r\n\r\n#ĐẶTHÀNG ngay để sở hữu Siêu phẩm NHẸ như bay này nhaa?\r\n\r\nALENA – Giày Nữ Cao Cấp –\r\n\r\nHotline:\r\n\r\nBuôn sỉ:', '2024-10-15 03:30:42', '2024-10-15 03:30:42', NULL, NULL),
(2, '2', 'Những mẫu Boots tiểu thư chưa bao giờ hết hot đã về thêm cho nàng diện thu/đông rồi đây…\r\n\r\nCaocao chỉ 2xx 🌺\r\n\r\n🌸 Có ngay những em Boots siêu xinh 🌸\r\n\r\n– GOBE nhận ship & kiểm thanh toán khi nhận hàng trên toàn quốc.\r\n\r\n– chất liệu: da PU.', '2024-10-15 03:30:42', '2024-10-15 03:30:42', NULL, NULL),
(3, '3', 'PHOM DÁNG TỐI GIẢN CHƯA BAO GIỜ LỖI THỜI\r\n\r\nĐi làm thanh lịch, đi chơi êm chân\r\n\r\nƯu đãi 50% còn #550k\r\n\r\nthiết kế êm ái, gót cao vừa phải giúp việc di chuyển dễ dàng, tự tin hơn.\r\n\r\nKiểu dàng hiện tại, năng động những vẫn toát lên được vẻ kiêu kỳ thời thượng của phái nữ.\r\n\r\nDễ dàng phối với mọi trang phục, phụ kiện tôn lên sự cá tính của các nang.\r\n\r\n➡️ Nguyên tag hãng, hàng chuẩn, Fullbox\r\n\r\n✍️Được kiểm tra hàng khi mua\r\n\r\n✍️Được đổi size khi không vừa chân\r\n\r\n✍️Bảo hành 1 năm\r\n\r\n✍️Hàng có sẵn, đẹp như hình', '2024-10-15 03:32:48', '2024-10-15 03:32:48', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, '“Chinh phục Phong cách – Bước Chân Nam Thế Hệ Mới!”', 'Adidas – “ông trùm” thống thị trên thế giới', 'Nếu như để cái tên một hãng giày thể thao nổi tiếng trên thế giới thì chắc chắc có đến hơn 90% người nhắc đến cái tên Aididas. Sở dĩ được nhiều người biết đến như vậy là bởi giá thành của những đôi giày Adidas thường khá đa dạng, từ bình dân cho tới cao cấp giúp phù hợp với nhiều người khác nhau. Thậm chí có những đôi chỉ khoảng hơn 1 triệu đồng nhưng cũng có những dòng có giá trị lên tới cả chục triệu.\r\n\r\n', 'Bên cạnh việc thiết kế các sản phẩm mang phong cách riêng của mình, Adidas còn rất biết cách làm mới mình bằng việc liên tục kết hợp với những thương hiệu giày nổi tiếng hay những người nổi tiếng để tạo nên những tuyệt tác thu hút giới Sneaker. Có thể kể đến những cái tên như Rick Owen x Adidas, Kanye West với dòng giày Yeezy siêu phẩm…. Và chắc chắn không thể thiếu thương hiệu nhiều “chiêu trò” Supreme dòng giày Supreme Yeezy Boost 350 V2 tạo nên cơn sốt trong suốt một thời gian dài.', 'Ngoài ra, bên cạnh việc quan tâm đến tính thẩm mỹ, thương hiệu Adidas đã không ngừng cho ra đời những bộ sưu tập nhằm đáp ứng mọi nhu cầu sử dụng của khách hàng của mình. Ngoài những dòng giày có thể sử dụng hàng ngày, Adidas còn có thêm các dòng giày chuyên phục vụ cho các hoạt động thể thao như chạy, đá bóng…', '2024-10-02 09:50:03'),
(2, 'Nike ', 'Nếu như nhắc đến Adidas mà không kể tên Nike thì quả thực là một thiếu sót vô cùng lớn bởi 2 thương hiệu này thường cạnh tranh nhau rất mạnh. Thương hiệu này cùng với logo “Swoosh” và dòng chữ “Just do it” đã trở nên nổi tiếng trên toàn thế giới. Có thể nhiều người chưa biết nhưng điểm mà nhiều người yêu thích chính bởi đây là 1 trong 3 thương hiệu gây ấn tượng về tính thân thiện với môi trường khi có thể tái chế các sản phẩm cũ để sản xuất thành các mẫu mới.', 'Bên cạnh đó, thương hiệu Nike còn luôn không ngừng phát triển và cho ra đời những dòng sản phẩm đáp ứng được nhu cầu sử dụng của nhiều khách hàng khác nhau. Không chỉ đơn giản được biết đến là các hãng giày nổi tiếng thế giới, Nike còn khẳng định gu thời trang đẳng cấp của mình với những dòng giày nổi tiếng và gây tiếng vang trong thời gian vừa qua như dòng Air Max, Air Force 1. Đặc biệt, Nike còn vừa mới cho ra đời mẫu giày tự động buộc dây với tên gọi Marty McFly vô cùng hiện đại.', 'Nếu như nhắc đến Adidas mà không kể tên Nike thì quả thực là một thiếu sót vô cùng lớn bởi 2 thương hiệu này thường cạnh tranh nhau rất mạnh. Thương hiệu này cùng với logo “Swoosh” và dòng chữ “Just do it” đã trở nên nổi tiếng trên toàn thế giới. Có thể nhiều người chưa biết nhưng điểm mà nhiều người yêu thích chính bởi đây là 1 trong 3 thương hiệu gây ấn tượng về tính thân thiện với môi trường khi có thể tái chế các sản phẩm cũ để sản xuất thành các mẫu mới.\r\n\r\nBên cạnh đó, thương hiệu Nike còn luôn không ngừng phát triển và cho ra đời những dòng sản phẩm đáp ứng được nhu cầu sử dụng của nhiều khách hàng khác nhau. Không chỉ đơn giản được biết đến là các hãng giày nổi tiếng thế giới, Nike còn khẳng định gu thời trang đẳng cấp của mình với những dòng giày nổi tiếng và gây tiếng vang trong thời gian vừa qua như dòng Air Max, Air Force 1. Đặc biệt, Nike còn vừa mới cho ra đời mẫu giày tự động buộc dây với tên gọi Marty McFly vô cùng hiện đại.', 'Nike là một trong những thương hiệu thể thao nổi tiếng nhất trên thế giới. Từ học sinh tiểu học cho đến các vận động viên chuyên nghiệp, không ai có thể phủ nhận sức hấp dẫn của Nike. Nếu bạn khảo sát xem có bao nhiêu người đã hoặc đang sở hữu các sản phẩm của Nike, thì con số này sẽ khiến bạn bất ngờ.\r\nChất lượng của sản phẩm tạo nên uy tín của thương hiệu. Nhưng không thể phủ nhận vai trò của những chiến lược marketing vô cùng hiệu quả đã góp phần tạo nên thành công của Nike ngày hôm nay. Nike là nhà cung cấp giày và quần áo thể thao hàng đầu thế giới, đồng thời là nhà sản xuất quần áo thể thao lớn, với tổng doanh thu hơn 18,6 tỷ USD trong năm tài chính 2008. Tính đến năm 2008, công ty có hơn 30.000 nhân viên trên toàn thế giới.', '2024-10-02 09:50:03'),
(3, 'Giày Supreme – thương hiệu giày Sneaker xa xỉ ', 'Supreme được biết đến là một thương hiệu xa xỉ bậc nhất thế giới bởi giá của những món đồ này thường khá “trên trời”. Không những vậy, Supreme thường chỉ sản xuất có giới hạn tất cả các sản phẩm của mình, chính vì vậy mà mỗi khi tung ra thị trường ngay lập tức đã tạo thành một cơn sốt và bất kì ai cũng muốn được sở hữu.', 'Nếu như các trang phục của Supreme thường khá đơn giản thì ngược lại, giày Supreme lại được xem là một đỉnh cao. Các thiết kế của thương hiệu này thường khá hầm hố và cực kì thích hợp với những ai mang phong cách Hiphop.', 'Thời gian trở lại đây, Supreme “trở lại lợi hại gấp vạn lần” nhờ sự kết hợp với những hãng giày thể thao nổi tiếng như Adidas, Nike, Air Jordan… Không chỉ là một đôi giày Sneaker chất lượng mà việc sở hữu cho mình một sản phẩm của thương hiệu Supreme nổi tiếng còn khẳng định được đẳng cấp của người mang nó nữa đó!', 'Supreme là một thương hiệu thời trang của Mỹ khởi nguồn từ quần áo và ván trượt. Thương hiệu này được thành lập tại thành phố New York vào tháng 4 năm 1994. Sản phẩm chủ yếu của họ đa phần phục vụ cho giới trẻ với văn hóa skateboarding, hip hop hoặc rock.', '2024-10-03 09:54:53'),
(4, 'Jordan 1', 'Giày Jordan được ra đời như sự kết hợp giữa huyền thoại bóng rổ Michael Jordan và thương hiệu Nike nổi tiếng. ', ' Chính vì vậy mà dòng Jordan 1 còn được biết đến là một trong các hãng giày bóng rổ nổi tiếng nhất hiện nay. Các sản phẩm của Jordan không chỉ giúp bạn có thể dễ dàng chơi với trái bóng mà còn chiếm được cảm tình của người xem nữa ', 'Năm 1985, Air Jordan 1 chính thức được sản xuất và trở thành sản phẩm thương mại với mức giá retail là 65$, được biết đến là đôi giày bóng rổ đắt nhất từ trước đó tính đến năm 1985.', 'Về sau Air Jordan 1 còn cho ra các dòng phụ như Air Jordan 1 Mid, Air Jordan 1 Alpha, Air Jordan 1 Phat, … góp phần làm đa dạng thêm cho dòng sản phẩm kinh điển này. Tuy nhiên dòng sản phẩm Air Jordan 1 High và đặc biệt là High OG được đánh giá cao nhất cũng như giá tiền của chúng cũng thuộc hàng “top” ở các chợ mua bán sneakers.\r\n\r\nAir Jordan 1 sau đó được retro vào các năm 1994, 2001-2004, 2007-2014 và năm 2015 sắp tới. Mỗi phiên bản AJ retro thường có vài sự thay đổi về chất liệu hoặc thiết kế mà dễ thấy nhất là logo Jumpman thay thế cho Nike Air, đồng thời xuất hiện những phối màu mới, thiết kế mới, tất cả đều góp phần tạo thêm sức hút và mang lại làn gió mới cho shoesgame thế giới nói chung và Việt Nam nói riêng.', '2024-10-03 09:54:53'),
(5, 'Puma', 'Lịch sử ra đời của Puma\r\nTìm hiểu lịch sử ra đời và phát triển của thương hiệu Puma\r\n\r\nSau khi ngày càng có nhiều quan điểm khác nhau về cách điều hành công việc kinh doanh, hai anh em đã chia tách doanh nghiệp vào năm 1948. Rudolf chuyển đến bên kia sông Aurach để thành lập công ty riêng của mình. Adolf bắt đầu thành lập công ty của riêng mình bằng cách sử dụng cái tên mà ông thành lập bằng biệt hiệu của mình - Adi - và ba chữ cái đầu tiên trong họ của ông - Das - để thành lập Adidas . Rudolf đã thành lập một công ty mới mà ông gọi là \"Ruda\", từ \"Ru\" trong Rudolf và \"Da\" trong Dassler. Vài tháng sau, công ty của Rudolf đổi tên thành Puma Schuhfabrik Rudolf Dassler vào năm 1948. [30]\r\n\r\nThương hiệu Puma và Adidas bước vào một cuộc cạnh tranh gay gắt và gay gắt sau khi chia tay. Thị trấn Herzogenaurach đã bị chia rẽ về vấn đề này, dẫn đến biệt danh \"thị trấn của những cái cổ cong\" - mọi người nhìn xuống để xem những người lạ đi giày nào. [31]\r\n\r\nNăm 1948, trận đấu bóng đá đầu tiên sau Thế chiến thứ hai, một số thành viên của đội tuyển bóng đá quốc gia Tây Đức đã đi giày Puma, trong đó có người ghi bàn thắng đầu tiên cho Tây Đức sau chiến tranh, Herbert Burdenski.', 'Thời trang may mặc Puma\r\nPuma thiết kế các trang phục may sẵn mang hơi hướng thời trang thể thao, mang đến sự thoải mái, trẻ trung và hỗ trợ tăng hiệu quả vận động. Bên cạnh những trang phục dành cho các vận động viên và những người yêu thích thể thao thì thời trang Puma cao cấp cũng cải tiến để mang đến các mẫu thời thượng, phù hợp cho hàng ngày.', 'Các mốc thời gian phát triển quan trọng của Puma\r\nTìm hiểu lịch sử ra đời và phát triển của thương hiệu Puma\r\n\r\nNăm 1952\r\nRudolf đã phát triển một chiếc ủng bóng đá có đinh vít, được gọi là \"Super Atom\" với sự hợp tác của những người, chẳng hạn như huấn luyện viên đội tuyển quốc gia Tây Đức Sepp Herberger.\r\n\r\nTại Thế vận hội Mùa hè năm 1952, vận động viên chạy 1500 mét Josy Barthel của Luxembourg đã giành được huy chương vàng Olympic đầu tiên của Puma tại Helsinki, Phần Lan.\r\n\r\nNăm 1960\r\nTại Thế vận hội Mùa hè 1960, Puma đã trả tiền cho vận động viên chạy nước rút người Đức Armin Hary để mặc Pumas trong trận chung kết chạy nước rút 100 mét. Hary đã từng mặc Adidas trước đó và yêu cầu Adolf thanh toán, nhưng Adidas đã từ chối yêu cầu này. Cầu thủ người Đức đã giành huy chương vàng ở Pumas nhưng sau đó lại buộc dây Adidas cho lễ trao huy chương, trước sự sửng sốt của hai anh em nhà Dassler. Hary hy vọng kiếm được tiền từ cả hai, nhưng Adi quá tức giận nên đã cấm nhà vô địch Olympic.\r\n\r\nTrong Thế vận hội Black Power Salute năm 1968, Puma đã tài trợ cho các vận động viên người Mỹ gốc Phi Tommie Smith và John Carlos, sau khi lần lượt giành huy chương vàng và đồng trong 200 mét, đã bước lên bục với chiếc Puma Suedes trên tay và cúi đầu và giơ cao áo đen - nắm đấm trong im lặng phản đối trong khi chơi quốc ca, một hành động có nghĩa là bảo vệ nhân quyền và bảo vệ người Mỹ da đen.\r\n\r\nTìm hiểu lịch sử ra đời và phát triển của thương hiệu Puma\r\n\r\nNăm 1986\r\nPuma trở thành công ty đại chúng vào năm 1986 và sau đó được niêm yết trên sàn giao dịch chứng khoán Börse München và Frankfurt. Nó cũng giới thiệu giày Máy tính RS, với \"RS\" là viết tắt của \"hệ thống chạy\", một thiết bị tích hợp đo tốc độ, tốc độ và lượng calo sử dụng của người chạy. Nó bán kém.\r\n\r\nNăm 1989\r\nVào tháng 5 năm 1989, các con trai của Rudolf là Armin và Gerd Dassler đồng ý bán 72% cổ phần của họ tại Puma cho doanh nghiệp Thụy Sĩ Cosa Liebermann SA.\r\n\r\nNăm 2003\r\nTrong năm tài chính 2003, công ty đạt doanh thu 1,274 tỷ €. Puma là nhà tài trợ thương mại cho loạt phim hoạt hình năm 2002 Hungry Heart: Wild Striker, với áo đấu và quần áo thể thao của thương hiệu Puma. Puma được xếp hạng là một trong những thương hiệu giày hàng đầu cùng với Adidas và Nike.\r\n\r\nNăm 2007\r\nVào tháng 2 năm 2007, Puma báo cáo rằng lợi nhuận của họ đã giảm 26% xuống còn 32,8 triệu € (43 triệu đô la; 22 triệu bảng Anh) trong ba tháng cuối năm 2006. Phần lớn lợi nhuận giảm là do chi phí cao hơn liên quan đến việc mở rộng của nó; doanh số bán hàng tăng hơn một phần ba lên 480,6 triệu euro.\r\n\r\nVào đầu tháng 4 năm 2007, cổ phiếu của Puma đã tăng € 29,25 / cổ phiếu, tương đương khoảng 10,2%, lên € 315,24 / cổ phiếu.\r\n\r\nVào ngày 10 tháng 4 năm 2007, nhà bán lẻ Pháp và chủ sở hữu thương hiệu Gucci Pinault-Printemps-Redoute (PPR) thông báo rằng họ đã mua 27% cổ phần của Puma, dọn đường cho việc tiếp quản hoàn toàn. Thương vụ này trị giá 5,3 tỷ euro của Puma. PPR cho biết họ sẽ tung ra một thương vụ mua lại \"thân thiện\" đối với Puma, trị giá € 330 một cổ phiếu, sau khi việc mua lại cổ phần nhỏ hơn hoàn tất. Hội đồng quản trị của Puma hoan nghênh động thái này, nói rằng đó là công bằng và vì lợi ích tốt nhất của công ty.\r\n\r\nTính đến tháng 7 năm 2007, PPR sở hữu hơn 60% cổ phần của Puma.\r\n\r\nNăm 2011\r\nVào tháng 7 năm 2011, công ty đã hoàn tất việc chuyển đổi từ Aktiengesellschaft (công ty trách nhiệm hữu hạn đại chúng của Đức) thành Societas Europaea , công ty tương đương trên toàn Liên minh Châu Âu , đổi tên từ Puma AG Rudolf Dassler Sport thành Puma SE. Đồng thời, Franz Koch thay thế Jochen Zeitz lâu năm làm giám đốc điều hành của công ty, Zeitz trở thành chủ tịch.\r\n\r\nTìm hiểu lịch sử ra đời và phát triển của thương hiệu Puma\r\n\r\nTừ năm 2012 đến nay\r\nPuma nắm giữ 5% cổ phần của câu lạc bộ thể thao Đức Borussia Dortmund, nhà cung cấp là công ty từ năm 2012.\r\n\r\nCông ty được dẫn dắt bởi cựu chuyên gia bóng đá Bjørn Gulden (giám đốc điều hành) kể từ ngày 1 tháng 7 năm 2013.\r\n\r\nPuma là nhà sản xuất chính của giày lái xe và quần áo đua. Họ là nhà sản xuất chính cho quần áo Công thức Một và NASCAR. Họ đã giành được quyền tài trợ cho đội vô địch\r\n\r\nFIFA World Cup 2006, đội tuyển bóng đá quốc gia Ý, chế tạo và tài trợ trang phục của đội. Họ đã hợp tác với BMW, Ducati và Ferrari để sản xuất giày Puma-Ferrari, Puma-Ducati và Puma-BMW.\r\n\r\nRihanna được bổ nhiệm làm giám đốc sáng tạo của Puma giám sát chỉ đạo của dòng quần áo nữ vào tháng 12 năm 2014.\r\n\r\nNăm 2014, Puma và Câu lạc bộ bóng đá Arsenal đã ký hợp tác kinh doanh 5 năm. Quan hệ đối tác thương mại thể hiện thỏa thuận lớn nhất trong lịch sử của Puma và Arsenal. Quan hệ đối tác kết thúc vào năm 2019.\r\n\r\nVào tháng 3 năm 2018, Puma đã ra mắt liên doanh với đại sứ Selena Gomez mang tên \"Phenom Lux \'\'. Năm 2018, Puma tái gia nhập thị trường giày thể thao bóng rổ lần đầu tiên sau 20 năm và công bố Jay-Z sẽ là người sáng tạo. giám đốc Puma bóng rổ. Puma cuối cùng tài trợ Vince Carter vào năm 1998. Họ ký cầu thủ bóng rổ trẻ Marvin Bagley III và Deandre Ayton, cả hai người trong số họ đã trở thành chọn Top 2 của 2018 NBA Draft.\r\n\r\nVào tháng 12 năm 2018, Puma đã giới thiệu lại Máy tính RS, với \"RS\" là viết tắt của \"hệ thống đang chạy\". Giày có chứa các công nghệ như cảm biến gia tốc và Bluetooth.\r\n\r\nVào tháng 9 năm 2020, Puma ký hợp đồng với siêu sao bóng đá người Brazil, Neymar. Và Puma công bố hợp đồng dài hạn với câu lạc bộ bóng đá Ukraine FC Shakhtar Donetsk.', 'Giày Puma\r\nGiày Puma chính hãng đã trở nên quá nổi tiếng và được yêu thích trên toàn thế giới. Hãng sản xuất đa dạng các dòng giày dành cho nhiều bộ môn thể thao khác nhau như bóng đá, bóng rổ, bóng chày, điền kinh, golf…và các mẫu giày thời trang với kiểu dáng và họa tiết bắt mắt, được các tín đồ đam mê giày “săn đón”. Ngoài ra giày Puma còn áp dụng những công nghệ hiện đại mang đến những trải nghiệm tuyệt vời.\r\n\r\nPhụ kiện thời trang\r\nPuma cũng sản xuất các phụ kiện thời trang khác như túi xách, mũ nón, tất, găng tay…\r\n\r\nThiết bị và dụng cụ thể thao\r\nPuma là một trong những hãng chuyên sản xuất thiết bị và dụng cụ thể thao có chất lượng tốt nhất, được nhiều câu lạc bộ và các vận động viên nổi tiếng tin dùng lựa chọn.', '2024-10-03 09:57:09'),
(6, 'Balenciaga', 'Đôi nét về xu hướng giày Balenciaga năm 2024\r\nNăm 2024 đánh dấu sự bùng nổ của giày Balenciaga với những gam màu rực rỡ, chất liệu da cao cấp và thiết kế chunky cá tính. Nhãn hiệu thời trang đình đám Tây Ban Nha này không ngừng khẳng định vị thế dẫn đầu xu hướng, mang đến cho giới mộ điệu những trải nghiệm độc đáo và ấn tượng.\r\n\r\nBên cạnh những gam màu trung tính quen thuộc như đen, trắng, be,... Balenciaga mạnh tay sử dụng các gam màu rực rỡ như đỏ, cam, vàng, xanh lá,... cho các thiết kế giày của mình thêm nổi bật. ', 'Thiết kế tối giản, ôm sát với chất liệu co giãn tốt giúp Speed Trainers mang đến cảm giác thoải mái tối đa cho người sử dụng. Dù chàng đi dạo, tập luyện hay tham gia các hoạt động thể thao, Speed Trainers cũng sẽ luôn đồng hành, mang đến sự linh hoạt và thoải mái tối đa.', 'Chất liệu da cao cấp luôn được Balenciaga ưu tiên sử dụng, đảm bảo độ bền bỉ và mang đến cảm giác sang trọng. Mỗi đôi giày Balenciaga đều được chế tác tỉ mỉ từ những miếng da thượng hạng, trải qua quá trình kiểm tra chất lượng nghiêm ngặt để mang đến cho chàng sản phẩm hoàn hảo nhất. \r\n\r\nThiết kế chunky với phần đế dày dặn, hầm hố tiếp tục là tâm điểm của xu hướng thiết kế giày Balenciaga 2024. Những đôi giày chunky này mang đến sự cá tính, phá cách và giúp bạn tự tin thể hiện phong cách thời trang riêng biệt.\r\n\r\nPhân loại các kiểu giày Balenciaga phổ biến hiện nay\r\nBalenciaga không chỉ nổi tiếng với những thiết kế thời trang táo bạo mà còn chinh phục giới mộ điệu bởi những đôi giày độc đáo, dẫn đầu xu hướng. Dưới đây là một số kiểu giày Balenciaga phổ biến nhất hiện nay.\r\n\r\nMẫu giày Balenciaga Triple S\r\nNổi bật trong BST giày của Balenciaga, Triple S chính là biểu tượng cho sự cá tính và phá cách. Thiết kế hầm hố, độc đáo với phần đế dày dặn, nhiều lớp, kết hợp cùng các chi tiết ấn tượng như logo \"B\" cách điệu, dây giày oversized,... đã tạo nên sức hút không thể cưỡng lại cho những chàng trai yêu thích phong cách đường phố bụi bặm.', 'Kiểu giày nam X-Pander\r\nSự kết hợp độc đáo giữa giày thể thao và dép xỏ ngón mang đến cho X-Pander một thiết kế độc đáo và tiện lợi. Mũi giày mở giúp cánh mày râu dễ dàng mang vào/tháo ra, mang đến cảm giác thoải mái và an toàn khi di chuyển. \r\n\r\nChất liệu nhẹ nhàng, thoáng khí giúp X-Pander trở thành lựa chọn lý tưởng cho những ngày hè nóng bức. Chàng có thể thoải mái mang X-Pander mà không lo bị bí bách hay đổ mồ hôi chân.\r\n\r\nKiểu giày nam X-Pander\r\n\r\nKiểu giày nam X-Pander\r\n\r\nBalenciaga Track Trainers cho chàng trai cá tính\r\nLấy cảm hứng từ phong cách retro, Track Trainers sở hữu thiết kế hầm hố, cá tính với phần đế cao su dày dặn cùng các chi tiết kim loại cá tính. Chất liệu da cao cấp, bền bỉ theo thời gian, mang đến sự sang trọng và đẳng cấp cho người sử dụng. \r\n\r\nTrack Trainers không chỉ là một đôi giày, mà còn là biểu tượng cho phong cách cá tính, bụi bặm. Khi mang Track Trainers, chàng sẽ trở thành tâm điểm của mọi bữa tiệc, thu hút mọi sự chú ý bởi vẻ ngoài độc đáo và đầy ấn tượng. \r\n\r\nBalenciaga Track Trainers cho chàng trai cá tính\r\n\r\nBalenciaga Track Trainers cho chàng trai cá tính\r\n\r\nNhững tip phối đồ với giày Balenciaga cực chất cho chàng\r\nLà một \"item\" thời trang đình đám, giày Balenciaga không chỉ thu hút bởi thiết kế độc đáo mà còn bởi khả năng biến hóa đa dạng trong phong cách phối đồ. Dưới đây là một số bí kíp giúp bạn chinh phục mọi set đồ cùng Balenciaga.\r\n\r\nPhối theo phong cách đường phố năng động\r\nLà \"ông hoàng\" trong làng thời trang đường phố, Balenciaga thu hút bởi những thiết kế độc đáo, phá cách. Sự kết hợp giữa giày Balenciaga, quần jean rách, áo thun oversize hay buộc khăn Bandana chính là \"công thức hoàn hảo\" cho set đồ thể hiện cá tính riêng biệt của bạn.', '2024-10-15 09:59:50'),
(7, 'Converse', 'Giày Converse là một trong những thương hiệu giày lâu đời và nổi tiếng bậc nhất trên thế giới. Với thiết kế đẹp, chất lượng tuyệt vời cùng khả năng marketing tốt, thương hiệu giày “Converse” đã thu hút được một lượng fans khổng lồ trên thế giới, trở thành 1 trong 5 thương hiệu giày được yêu thích nhất hiện tại.\r\n\r\nVậy Converse là gì? Giày Converse có gì đặc biệt mà được đông đảo tín đồ yêu thích như vậy? Hãy cùng tripleR tìm hiểu về điều này ngay trong bài viết này nhé.', 'Năm 1908, Maquis M. Converse thành lập công ty giày cao su Converse tại Malden, Massachusetts, Mỹ. Đến năm 1915, Converse bắt đầu sản xuất giày thể thao cho vận động viên tennis, vào năm 1917, dòng giày bóng rổ Converse All Star được tung ra thị trường và trở thành loại giày được chỉ định dùng cho các cuộc thi đấu bóng rổ quốc tế của Mỹ.\r\nNăm 1921, cầu thủ bóng rổ tên là Charles H. Chuck Taylor bước vào than phiền với Converse rằng, chân ông ta bị đau khi sử dụng đôi giày của Converse, sau đó, giày đã được cải tiến tốt hơn, êm ái hơn. Ông Charles H. Chuck Taylor cũng trở thành đại sứ, quảng bá thương hiệu những đôi giày mới này trên toàn nước Mỹ, năm 1932 chữ ký của Taylor đã được thêm vào mẫu giày All Star cổ điển, hình thành thương hiệu giày Converse Chuck Taylor.', 'Converse là gì? Giày Converse là gì?\r\nConverse được biết đến rất nhiều trong đời sống, nó mang nhiều ý nghĩa khác nhau, trong giao tiếp, mô tả hay nhận diện thương hiệu,… Nhưng nổi tiếng nhất là trong lĩnh vực thời trang, chúng ta sẽ tìm hiểu kỹ hơn ngay dưới đây.\r\n\r\nConverse là gì? Tìm hiểu về giày converse: Kiểu giày được các bạn trẻ yêu thích\r\n\r\nGiày converse: Kiểu giày được các bạn trẻ yêu thích\r\n\r\nConverse là gì?\r\nConverse dịch ra tiếng Việt có nghĩa là “sự chuyện trò” trong giao tiếp nói chuyện hay sự tương phản, sự trái ngược về nghĩa.\r\n\r\nCòn xét về mặt thương hiệu, Converse là một công ty giày thể thao của Mỹ, có lịch sử hình thành hơn 100 năm, Converse chuyên sản xuất giày thể thao, giày trượt ván, giày dép thông thường và quần áo phụ kiện.\r\n\r\n\r\nĐược thành lập vào năm 1908, hiện tại Converse đã trở thành một công ty con của tập đoàn Nike, giày Converse cực kì nổi tiếng, ví dụ như một đôi giày Converse All Star có thể được xem như là một biểu tượng của văn hóa và tinh thần của nước Mỹ, các thế hệ trẻ ở đây trải qua bao nhiêu năm vẫn say mê đôi giày Converse như một món đồ gần gũi và trân quý nhất.\r\n\r\nGiày Converse là gì?\r\nGiày Converse là một thương hiệu giày thể thao sneakers nổi tiếng hàng đầu thế giới, logo của Converse là hình ngôi sao năm cánh, hình tượng logo năm cánh trên chiếc giày thể thao cũng trở thành một hình ảnh kinh điển khắc sâu vào tâm trí các tín đồ giày trên toàn thế giới.\r\n\r\nConverse là gì? Tìm hiểu về giày Converse\r\n\r\nGiày Converse All Star có thể được xem như là một biểu tượng của văn hóa và tinh thần của nước Mỹ\r\n\r\nNhắc đến Converse, người ta thường nhắc đến rất nhiều sản phẩm nổi tiếng và gánh liền với giới trẻ như giày Converse One Star, giày Converse All Star, giày Converse Chuck Taylor,…\r\n\r\n\r\nConverse cũng là sự lựa chọn một đôi giày thời trang của nhiều người nổi tiếng trong đó có David Beckham, Justin Bieber, Drew Barrymore, Kristen Stewart, Demi Lovato,…', 'Có những loại giày Converse nào?\r\nRất ít ai có thể kể tên một cách chính xác và đầy đủ các sản phẩm hot hit của hãng, nhưng bạn không phải lo vì kiến thức này sẽ được bật mí ngay phía dưới đây.\r\n\r\nConverse là gì? Tìm hiểu về giày Converse\r\n\r\nBạn đã từng biết đến những dòng giày Converse nào?\r\n\r\nMột số dòng giày Converse có thể kể đến như mẫu giày Converse Classic, Chuck Classic, Chuck 70s, Converse 1970s, Converse Jack Purcell, Converse One Star, Converse Chuck Taylor All Star, giày cao su Converse, Converse D, Converse Rubber, Converse Dainty,…\r\n\r\nÝ nghĩa của logo thương hiệu giày thể thao Converse\r\nLogo thương hiệu thương hiệu Converse là một trong những logo phổ biến và dễ nhận biết nhất, logo gồm chữ V với một ngôi sao bên trái. Sau này, logo thương hiệu Converse được thay đổi bằng một ngôi sao được đặt bên trong một hình tròn.\r\n\r\nLogo thương hiệu Converse sử dụng 2 màu chủ đạo là trắng và đen, màu trắng thể hiện sự tinh khiết, quyến rũ và tinh tế, trong khi màu đen cho thấy sự xuất sắc, uy tín và sang trọng của thương hiệu.', '2024-10-15 10:02:54'),
(8, 'Vans', 'Paul Van Doren; anh trai của ông, James; và Gordon C. Lee đã mở cửa hàng Vans đầu tiên với tên gọi \"The Van Doren Rubber Company\" vào ngày 16 tháng 3 năm 1966, tại 704 East Broadway ở Anaheim, California.[4] Doanh nghiệp sản xuất giày và bán chúng trực tiếp cho công chúng. Khi mở cửa, mười hai khách hàng đã mua giày Vans (bây giờ được gọi là \"Authentic\"), tương tự như giày do Keds sản xuất nhưng có đế dày hơn. Cửa hàng có trưng bày các mẫu giày của ba kiểu giày, có giá từ 2,49 đô la Mỹ đến 4,99 đô la Mỹ, nhưng không có bất kỳ hàng tồn kho nào sẵn sàng để bán và Paul Van Doren không có tiền lẻ để trả cho khách hàng; khách hàng mang giày về nhà và quay lại vào ngày hôm sau để thanh toán.[5]', 'Logo ván trượt ban đầu của Vans được thiết kế tại Costa Mesa, California, vào những năm 1970 bởi Mark Van Doren, con trai của Chủ tịch và đồng sở hữu lúc bấy giờ là James Van Doren, ở tuổi 13; Thiết kế của Mark là một khuôn tô, cho phép phun sơn logo lên ván trượt của anh ấy. Thiết kế này được tích hợp vào mấu gót trên Kiểu 95, một đôi giày trượt ván đời đầu của Vans. Sở thích trượt ván của Mark là điều đã khiến Vans sản xuất giày trượt ván.[6]\r\n\r\nNăm 1976, Vans bắt đầu sử dụng phương châm \"Off The Wall\", một cụm từ tiếng lóng được sử dụng bởi những người trượt ván khi thực hiện các thủ thuật trong các bể trống. Khoảng thời gian này, Vans đã phát hành Vans Side-stripe và Vans #36, còn được gọi là thiết kế \"Old Skool\".[6][7]\r\n\r\nNăm 1984, đối mặt với sự cạnh tranh gay gắt và thị trường tràn ngập hàng giả của Vans, Vans đã hạ giá và cuối cùng nộp đơn xin bảo hộ phá sản.[6] Năm 1988, Van Doren và Lee bán công ty cho công ty ngân hàng McCown De Leeuw & Co. với giá 74,4 triệu USD. Năm 1989, nhiều kẻ làm giả Vans đã bị chính phủ Hoa Kỳ và Mexico bắt giữ và ra lệnh ngừng sản xuất.[5', 'Vans #36 hay được gọi là Old Skool ra đời với đường viền nổi tiếng. Phiên bản Old Skool là những đôi giày Vans đầu tiên sử dụng chất liệu da để tăng độ bền của giày. Đường viền thân giày lấy cảm hứng từ một họa tiết được vẽ ngẫu nhiên của Paul Van Doren ban đầu được đặt tên là sọc Jazz và dần trở thành một dấu hiệu không thể nhầm lẫn của thương hiệu VANS.\r\n\r\nVans #98 cũng được giới thiệu nhờ sự giúp đỡ của dân trượt ván và những tay đua BMX, Vans Classic Slip-on trở nên nổi tiếng ở nam California và là tiền để cho Vans Slip On hiện giờ, dần trở thành phiên bản không thể thiếu biểu tượng cho VANS.\r\n\r\nCuối những năm thập niên 70 VANS có 70 cửa hàng tại California và được bán thông qua các đại lý trong nước lẫn quốc tế.', 'Các loại giày Vans kinh điển có thể bạn chưa biết\r\nKể từ khi ra đời, Vans đã cho ra đời các loại giày Vans khác nhau. Trong đó phải kể đến 5 loại Vans kinh điển dưới đây:\r\n\r\nVans Classics Authentic\r\n\r\n*\r\nVans Classics Authentic ra mắt năm 1966\r\n\r\nVans Classics Authentic được tích hợp giữa Vans Classic Authentic và Sneaker. Loại giày này được ra mắt năm 1966, được trang bị đế cao su với độ bám tốt cho những môn thể thao mạo hiểm như trượt ván, BMX… Thân giày là vải canvas cao cấp, phong cách cổ điển cho cả nam và nữ.\r\n\r\nĐôi giày có 2 phần rõ ràng, thân trên làm từ vải, nửa dưới được làm bằng cao su. Form đế cứng cáp phối 1 màu đậm chất cổ điển, pha chút hiện đại. Thiết kế mang đậm nét tối giản, chất liệu Canvas khác nhau ở màu sắc, đường chỉ may, độ mỏng dày, độ thô ráp. Nó chỉ đơn giản là một đôi giày cổ thấp cùng hàng dây buộc quen thuộc với lỗ xâu kim loại, logo cờ hiệu Vans phía sau đế giày kết hợp phần đế cao su siêu âm và đàn hồi tốt. Đây cũng là mẫu giày bán chạy nhất hiện nay và là đôi Vans Authentic có đến 19 màu sắc khác nhau.\r\n\r\nGiày Vans Old Skool\r\n\r\n*\r\nVans old skool là biểu tượng của giày trượt ván thế giới\r\n\r\nVans old skool ra đời năm 1977, được coi là biểu tượng giày trượt ván thế giới, có vẻ ngoài đặc trưng từ đường sóng trắng dọc 2 bên thân giày trên nền da lộn bền bỉ đến phần cổ giày có đệm mút vải êm ái, tối ưu hoá mọi chuyển động. Mũi giày được làm từ vải Canvas kết hợp cùng lớp giày đệm đem lại độ đàn hồi tốt.\r\n\r\nĐế giày làm bằng cao su bánh tổ ong (Waffle Outsole) có khả năng bám bề mặt tốt, hạn chế trơn trượt. Hiện tại, có 2 loại màu Vans Old Skool được lựa chọn nhiều nhất, đó chính là màu đen và màu trắng.\r\n\r\nVans Slip-On\r\n\r\n*\r\nVans Slip-on là mẫu giày lười có thiên hướng thời trang nhiều hơn\r\n\r\nNăm 1979, Vans Slip-on thực sự tạo nên một cơn sốt lớn, tạo ấn tượng mạnh và gây được sự chú ý của đông đảo công chúng. Vans Slip-on thực chất là đôi giày lười thiên về thời trang nhiều hơn, tuy vậy, nó vẫn phù hợp với các môn thể thao.\r\n\r\nSản phẩm này có lớp đệm mút cổ chân êm ái, chất liệu canvas dày hơn các sản phẩm khác nhưng có độ co giãn. Logo có nền đỏ và đế cao su tổ ong êm áo. Mẫu Vans Slip-on phổ biến nhất chính là mẫu sọc caro trắng đen mang đậm cá tính, sự năng động và bạn có thể dễ dàng bắt gặp nó tại khắp mọi nơi\r\n\r\nVans Era\r\n\r\n*\r\nVans Era mang hơi hướng hiện đại\r\n\r\nVans Era là dòng giày mang hơi hướng hiện đại nhất. Sản phẩm được thiết kế với các chi tiết từ vải đến đường chỉ hoàn toàn khác biệt so với các đôi giày khác. Vans Era dành cho những ai chau chuốt bởi chất liệu vải sử dụng là chất liệu vải khác, đường dệt cũng khác, bắt mắt hơn, mịn hơn. Vẫn giữ lại phần cổ giày có đệm mút và đế cao su tổ ong, Vans Era tại điểm nhấn ở màu sắc dây cột cùng cách phối màu giữa đế giày và màu vải.\r\n\r\nVans SK8 Hi\r\n\r\n*\r\nVans SK8 Hi cổ cao bảo vệ mắt cá chân\r\n\r\nĐây là mẫu giày có độ hot không kém Old Skool. Vans SK8 Hi xuất hiện lần đầu năm 1978 với tên gọi “Style 38” với thiết kế cao qua mắt cá chân, bảo vệ phần quan trọng nhất, nơi mà các vận động viên trượt ván thường lạm dụng nhiều. SK8 cũng mang lại phong cách thời trang đặc biệt tại thời điểm bây giờ với nét cá tính mạnh mẽ và đậm chất đường phố.\r\n\r\nKiểu dáng của SK8 Hi vẫn là chú trọng sự đơn giản, thoải mái như các mẫu Vans khác. Phần cổ giày được đệm một cách đặc biệt khiến chúng êm ái hơn, thiết kế đến cao su có độ bám tốt, chất liệu Canvas bền bỉ phù hợp cho các môn thể thao mạo hiểm.', '2024-10-11 10:00:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2024_10_09_085413_create_products_table', 2),
(10, '2024_10_09_094138_create_categories_table', 2),
(12, '2014_10_12_000000_create_users_table', 3),
(13, '2024_10_09_101030_create_orderstatus_table', 4),
(14, '2024_10_09_101254_create_orders_table', 5),
(15, '2024_10_09_101854_create_reviews_table', 6),
(16, '2024_10_09_102229_create_comments_table', 7),
(17, '2024_10_09_102337_create_discount_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `discount` decimal(10,0) DEFAULT NULL,
  `total_amount` decimal(10,0) NOT NULL,
  `money_ship` decimal(10,0) NOT NULL,
  `discount_id` bigint NOT NULL,
  `orderstatus_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `discount`, `total_amount`, `money_ship`, `discount_id`, `orderstatus_id`, `created_at`, `updated_at`) VALUES
(1, 8, 1, '1', '23223', '30', 1, 1, NULL, NULL),
(2, 4, 2, '3', '32423', '0', 2, 2, NULL, NULL),
(3, 8, 3, '1', '3342', '30', 3, 4, NULL, NULL),
(4, 6, 2, '2', '32423', '2', 1, 2, NULL, NULL),
(5, 4, 5, '3', '23223', '0', 2, 3, NULL, NULL),
(6, 1, 2, '2', '32423', '30', 3, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orderstatus`
--

CREATE TABLE `orderstatus` (
  `id` bigint NOT NULL,
  `status_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderstatus`
--

INSERT INTO `orderstatus` (`id`, `status_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Đã đặt hàng', 'Trạng thái khách hàng đã đặt hàng thành công.', NULL, NULL),
(2, 'Đã đóng gói', 'Trạng thái đã hoàn tất đóng gói sản phẩm.', NULL, NULL),
(3, 'Đang vận chuyển', 'Trạng thái đơn hàng đã giao cho đơn vị vận chuyển.', NULL, NULL),
(4, 'Đã giao hàng', 'Trạng thái đơn hàng đã được giao thành công.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` bigint NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `order_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `name`, `phone`, `email`, `address`, `order_id`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Hoài', '0985466135', 'hoainguyen07122004@gmail.com', 'Đan Phượng, Hà Nội', 1, NULL, NULL),
(2, 'Hoài NT', '0374899876', 'hoainguyen07122004@gmail.com', 'Đan Phượng, Hà Nội', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_histories`
--

CREATE TABLE `order_histories` (
  `id` bigint NOT NULL,
  `order_id` bigint NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `order_status` bigint NOT NULL,
  `form_status` varchar(255) NOT NULL,
  `to_status` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('anhnvph37309@fpt.edu.vn', 'anhnvph37309', '2024-10-05 04:15:08'),
('anhptph41958@fpt.edu.vn', 'anhptph41958', '2024-10-08 04:16:19'),
('datntph40630@fpt.edu.vn', 'datntph40630', '2024-10-02 04:15:44'),
('hieunmph35831@fpt.edu.vn', 'hieunmph35831', '2024-10-09 04:15:44'),
('hoaintphs36134@fpt.edu.vn', 'hoaintphs36134', '2024-10-10 04:11:29'),
('khoaddph31731@fpt.edu.vn', 'khoaddph31731', '2024-10-02 04:11:29'),
('quannkph36950@fpt.edu.vn', 'quannkph36950', '2024-10-04 04:15:08');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'Em đi trên đôi giày của mình, như cô công chúa trên đường đi mình em.', 11, 'Giày Jordan', 'khoaddph31731', 'Chính vì vậy mà dòng Jordan 1 còn được biết đến là một trong các hãng giày bóng rổ nổi tiếng nhất hiện nay', '2024-10-01 04:25:37', '2024-10-03 04:25:37', '2024-10-04 04:25:37', '2024-10-25 04:25:37'),
(2, ' Em chỉ là cô gái bán giày, khách chốt thì vui, khách boom thì khóc.', 2, 'Aididas.', 'hoaintphs36134', 'Sở dĩ được nhiều người biết đến như vậy là bởi giá thành của những đôi giày Adidas thường khá đa dạng, từ bình dân cho tới cao cấp giúp phù hợp với nhiều người khác nhau.', '2024-10-10 04:25:37', '2024-10-14 04:25:37', '2024-10-17 04:25:37', '2024-10-02 04:25:37'),
(3, 'Tình yêu có thể như một đôi giày, chỉ đẹp khi bạn tìm thấy đôi phù hợp với bạn.', 3, 'Supreme', 'quannkph36950', 'Supreme được biết đến là một thương hiệu xa xỉ bậc nhất thế giới bởi giá của những món đồ này thường khá “trên trời”. Không những vậy, Supreme thường chỉ sản xuất có giới hạn tất cả các sản phẩm của mình, chính vì vậy mà mỗi khi tung ra thị trường ngay lập tức đã tạo thành một cơn sốt và bất kì ai cũng muốn được sở hữu.', '2024-10-02 04:32:46', '2024-10-24 04:32:46', '2024-10-08 04:32:46', '2024-10-03 04:32:46'),
(4, 'Đối với tôi, tình yêu giống như một đôi giày ưa thích – không bao giờ lỗi mốt và luôn thoải mái.', 4, 'Nike ', 'anhnvph37309', 'Nếu như nhắc đến Adidas mà không kể tên Nike thì quả thực là một thiếu sót vô cùng lớn bởi 2 thương hiệu này thường cạnh tranh nhau rất mạnh. Thương hiệu này cùng với logo “Swoosh” và dòng chữ “Just do it” đã trở nên nổi tiếng trên toàn thế giới. Có thể nhiều người chưa biết nhưng điểm mà nhiều người yêu thích chính bởi đây là 1 trong 3 thương hiệu gây ấn tượng về tính thân thiện với môi trường khi có thể tái chế các sản phẩm cũ để sản xuất thành các mẫu mớ', '2024-10-01 04:32:46', '2024-10-02 04:32:46', '2024-10-18 04:32:46', '2024-10-09 04:32:46'),
(5, 'Đôi giày có thể rút ngắn một ngày dài, trong khi tình yêu có thể biến một cuộc đời ngắn thành vĩnh cửu.', 5, 'Puma', 'datntph40630', 'Nằm trong danh sách các hãng giày thể thao nổi tiếng chắc chắn không thể không nhắc đến cái tên Puma. Điểm cộng của thương hiệu này chính là luôn biết cách tiếp cận xu hướng thời trang để bạn đến cho người dùng những sản phẩm vừa chất lượng lại vừa đẳng cấp, bắt mắt và nhanh chóng nhận được sự tiếp nhận nhiệt tình của nhiều tín đồ đam mê giày hàng hiệu.', '2024-10-01 04:35:20', '2024-10-17 04:35:20', '2024-10-03 04:35:20', '2024-10-16 04:35:20'),
(6, 'Trứng rán cần mỡ, bắp cần bơ, em chẳng cần gì cả, chỉ cần giày đẹp thôi!', 6, 'Balenciaga ', 'anhptph41958', 'Mặc dù không phải xuất phát điểm là một hãng giày Sneaker nổi tiếng thế nhưng trong vài năm trở lại đây Balenciaga đã mang đến cho làng thời trang một bộ sưu tập giày với kiểu dáng Chunky Sneaker đình đám, ngay lập tức tạo nên một cơn sốt đáp ứng đúng tiêu chí “đẹp – độc – lạ”. Không chỉ được nam giới yêu thích, Balenciga còn là một trong các hãng giày thể thao nữ nổi tiếng.', '2024-10-02 04:35:20', '2024-10-11 04:35:20', '2024-10-02 04:35:20', '2024-10-18 04:35:20'),
(7, 'Giày của em như ngôi sao, dẫn anh đi trong đêm tối.', 7, 'New Balance', 'hieunmph35831', 'New Balance là một trong các hãng giày nổi tiếng trên thế giới được nhiều người yêu thích và ngay tại Việt Nam thì thương hiệu này cũng tạo được một dấu ấn đặc biệt. Nếu như những hãng giày Sneaker thường chú trọng đến tính thẩm mỹ và kiểu dáng thời trang thì New Balance lại mang đến những sản phẩm được thiết kế với những tính năng vượt trội và chuyên dụng cho các bộ môn thể thao.', '2024-10-01 04:37:11', '2024-10-10 04:37:11', '2024-10-03 04:37:11', '2024-10-17 04:37:11');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_image_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `price_sale` decimal(10,0) NOT NULL,
  `quantity` int NOT NULL,
  `cate_id` bigint NOT NULL,
  `brand_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `primary_image_url`, `content`, `price`, `price_sale`, `quantity`, `cate_id`, `brand_id`, `created_at`, `updated_at`) VALUES
(1, 'Giới thiệu thương hiệu Adidas', 'Adidas là tập đoàn đa quốc gia đến từ nước Đức, chuyên sản xuất các mặt hàng giầy dép, quần áo, phụ kiện. Tiền thân của hãng là công ty Gebruder Dassler Schuhfabrik được ra đời vào năm 1924 bởi hai anh em nhà Dassler là Adi Dassler và Rudolf.', 'https://th.bing.com/th/id/OIP.Hz0oARLOpoJJrPUvv_xrwAHaFj?w=285&h=214&c=7&r=0&o=5&dpr=1.3&pid=1.7', 'Sản phẩm giày dép của hãng Adidas\r\nMột trong những sản phẩm truyền thống nổi bật của nó là giày dép. Người dùng biết rằng giày Adidas được thiết kế tinh xảo, nhẹ, bền, thoải mái vận động mà không lo bị kẹt, đau chân, phù hợp với mọi đối tượng khách hàng: nam, nữ, trẻ em. Điều này là do sản phẩm áp dụng các công nghệ sau:\r\n\r\nCông ty đã đưa ra công nghệ BOOST vào năm 2003. Trọng tâm của công nghệ này là áp dụng công nghệ nén nhựa dẻo mới dựa trên giá để giày. Loại nhựa mới này có ưu điểm là chịu nhiệt tốt, nhẹ, bền và có độ đàn hồi cao. Do đó, công nghệ này là một bước đột phá trong quá trình sản xuất giày thể thao của Adidas.\r\nCông nghệ Springblade: Được áp dụng bằng cách lắp đặt 16 lưỡi cắt polyme đàn hồi trên đế. Từ đó, chúng tạo ra một lực đẩy để đẩy chiếc giày về phía trước. Chất liệu polyester có ưu điểm là mềm mại, tránh tình trạng giòn gãy, mang lại cảm giác thoải mái trong thời gian dài.\r\nCông nghệ Primeknit: Khi sử dụng công nghệ Primeknit, các sản phẩm giày dép của Adidas có cấu trúc thân giày liền khối, tính thẩm mỹ cao và độ bền tốt nhất. Công nghệ được phát triển dựa trên nguyên lý đan len đặc biệt. Đây được coi là công nghệ cạnh tranh của Hãng giày Nike.', '8000', '6000', 1000, 1, 4, '2024-10-03 10:03:12', '2024-10-03 10:03:12'),
(2, 'Tổng quan về thương hiệu giày Nike', 'Khi nhắc đến Nike là người ta nghĩ đến thương hiệu thể thao nổi tiếng trên khắp toàn cầu và không ai có thể phủ nhận sức hấp dẫn của Nike. Nếu như bạn khảo sát có bao nhiêu người đang sở hữu thương hiệu này thì sẽ cho bạn 1 con số đáng kinh ngạc.', 'https://th.bing.com/th/id/OIP.J1oXnZbvCQUDyrENSvdNpwHaHa?w=159&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7', 'Vào những năm 1960, khi người sáng lập Nike – Knight đã viết về cách công nhân Nhật Bản sản xuất giày chạy bộ giá rẻ.  sau đó anh đến Nhật Bản và nhận thấy côg ty Tiger chuyên sản xuất giày chạy bộ chất lượng cao. Vào năm 1964, Knight và người bạn của mình là William đã trả 500 đô la để nhập khẩu giày Tiger về Mỹ. Đến năm 1972, công ty bắt đầu thiết kế những đôi giày mang thương hiệu Nike và ký hợp đồng gia công với các nhà máy ở Châu Á.\r\n\r\nlịch sử giày nike\r\n\r\n2. Những thăng trầm chốn thương trường\r\nVào những năm 1980, công ty gặp phải thử thách khó khăn đầu tiên. Nguyên nhân là do thay đổi về nhân khẩu học. Những người khi về già, họ cảm thấy ít phải chạy bộ hơn. Ngày càng ít người thích rèn luyện cơ thể bằng cách chạy bộ và ngày càng có nhiều người chạy bộ với tốc độ chậm hơn. Ngoài ra, thị trường giày chạy bộ ngày càng trở nên phân hóa (được coi là dấu hiệu của sự bão hòa), và cái bóng của nhu cầu tiêu dùng cũng khác nhau. Năm 1984, doanh số bán hàng của Nike giảm 17% và thị phần của công ty giảm từ 31% xuống còn 26%. Sự sụt giảm thị phần này tiếp tục giảm xuống 18,6% vào năm 1986.\r\n\r\nTrong những năm 1980, Nike đã tạo ra những loại giày mới với các chức năng khác nhau, ví dụ như Pegasus (1988), Air Max(1987), và sau đó là Nike Air Jordan-Michael Jordan. Công ty Nike cũng nỗ lực thiết lập mối quan hệ lâu dài với môn bóng đá bằng cách tài trợ cho các cầu thủ nổi tiếng như World Championship Tour và Brazil của Ronaldo. Ngân sách tiếp thị hàng tỷ đô la của Nike được sử dụng để tài trợ cho các vận động viên nổi tiếng. Rõ ràng việc kết hợp một thương hiệu thể thao với những ngôi sao hàng đầu thế giới là ý nghĩa nhưng nó cũng có những mặt trái.\r\n\r\n\r\n3. Sự thành công của thương hiệu hàng đầu\r\nĐến ngày hôm nay, Nike đã có đầy đủ các bài học mà các nhà tiếp thị đã đề cập trước đây. Nike đã mời các phóng viên truyền hình đến các cơ sở sản xuất của mình và chứng minh rằng điều kiện làm việc của Nike đã được cải thiện hoàn toàn. Hình ảnh của Nike gần với một tổ chức có tinh thàn trách nhiệm xã hội hơn là một tổ chức bóc lột, chỉ nghĩ đến lợi nhuận như trước đây. Hiện tại Nike chi khoảng 100 triệu đô la mỗi năm để ký kết hợp đồng với các vận động viên nổi tiếng để sử dụng và quảng bá cho sản phẩm của mình.', '7000', '6000', 1000, 2, 2, '2024-10-03 10:03:12', '2024-10-03 10:03:12'),
(3, 'Giày Supreme – thương hiệu giày Sneaker xa xỉ ', 'Sự thành công của Supreme và sự chú ý mà nó đang nhận được ngày nay không phải là điều diễn ra ngay trong một đêm. ', 'https://th.bing.com/th/id/OIP.mClaI5mlNri-y0m2EB2_DgAAAA?w=230&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7', 'Hơn một tài trợ năm sau đó, Supreme đã trở thành biểu tượng thời trang đường phố, khiến cho mọi sản phẩm chỉ cần đặt logo Supreme lên đều trở thành “phải có”. Điều này đã tạo ra một ảnh hưởng mạnh mẽ, khiến người ta mua sắm ngay cả những vật dụng không cần thiết chỉ vì chúng có thương hiệu đã làm nổi tiếng chiếc áo thun cơ bản với logo hộp.\r\n\r\nVề giày sneaker, sức hút cũng không khác gì. Các sự hợp tác giữa Supreme và các thương hiệu đường phố hàng đầu luôn được mong đợi, từ Nike SB Dunks đến Air Max. Người hâm mộ giày sneaker và người sưu tập luôn đua nhau để sở hữu những đôi giày này.', '7000', '6000', 1000, 2, 9, '2024-10-03 10:03:12', '2024-10-03 10:03:12'),
(4, 'Văn hóa sneaker hiện đại có nguồn gốc từ đế “Air”; đó là Air Jordan 1 ban đầu được phát hành vào năm 1985. Nike, và sau đó là Jordan Brand, đã vinh danh hình bóng mang tính biểu tượng này nhiều lần kể từ khi phát hành phiên bản Retro 1.\r\n\r\n', 'Nhắc đến dòng giày Jordan thì không thể không nhắc đến thiết kế giày khởi điểm Air Jordan 1 với năng lực hút tiền cho công ty mẹ mỗi khi được đưa lên kệ. ', 'https://th.bing.com/th/id/OIP.FQPmFTjnFiN7FyG7eM-XMQHaGx?w=188&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7', 'Năm 1985, Air Jordan 1 chính thức được sản xuất và trở thành sản phẩm thương mại với mức giá retail là 65$, được biết đến là đôi giày bóng rổ đắt nhất từ trước đó tính đến năm 1985. AJ1 được thiết kế dựa trên những sản phẩm của Nike thời kì đó với dấu “swoosh” đặc trưng ở bên hông, logo Nike Air ở lưỡi gà (ở những bản Retro thay thế bằng logo Jumpman) và đặc biệt là logo Air Jordan “Winged Basketball”. AJ1 sở hữu bộ đệm “Air” ở gót, bộ đệm cổ chân để hạn chế chấn thương khi chơi bóng. Có ba phiên bản AJ1: high top, low top và K.O với tất cả 17 thiết kế được sản xuất trong khoảng thời gian này (1985-1986) với những thiết kế tiêu biểu nhiều người biết như “Bred”, “Royal”, “Chicago”, “Shadow” , các phối màu Metallic, …v.v…', '9000', '7000', 1000, 4, 3, '2024-10-10 10:26:56', '2024-10-02 10:26:56'),
(5, 'Thương Hiệu Puma Việt Nam', 'Trong lịch sử hơn 75 năm phát triển và sáng tạo không ngừng, PUMA đã trở thành một trong những thương hiệu thể thao hàng đầu thế giới, nổi tiếng với những sản phẩm giày dép, quần áo và phụ kiện thể thao độc đáo.', 'https://th.bing.com/th/id/OIP.rBYfyXgOhX7zs-mIderLGAHaHa?w=172&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7', 'Lịch Sử và Sự Phát Triển của PUMA\r\nTừ khi thành lập tại Herzogenaurach, Đức, PUMA đã trải qua một hành trình dài hơn 75 năm, không ngừng thúc đẩy giới hạn của thời trang thể thao. Tập trung vào thiết kế và phát triển, PUMA đã tạo ra những sản phẩm chất lượng cao, phù hợp với xu hướng thời trang và nhu cầu của người tiêu dùng. Các bộ sưu tập của PUMA lấy cảm hứng từ nhiều môn thể thao như bóng đá, bóng rổ, golf, đua xe, chạy bộ và tập gym, phản ánh sự đa dạng trong phong cách và lối sống.', '7000', '6000', 1000, 2, 7, '2024-10-03 10:03:12', '2024-10-03 10:03:12'),
(6, 'Balenciaga Thu – Đông 2023: Trở về với bản ngã', 'Không quá lời khi nói buổi diễn của Balenciaga là sự kiện được trông ngóng nhất tháng thời trang Thu – Đông 2023. Sau hàng loạt scandal liên quan đến thương hiệu, cũng như những hé lộ về định hướng mới của Demna Gvasalia.\r\n\r\n', 'https://th.bing.com/th/id/OIP.b4z-nIPJrCQIBrODPLWagAHaHa?w=284&h=213&c=7&r=0&o=5&dpr=1.3&pid=1.7', 'Đúng như những gì Demna thông báo vào đầu tháng 2, sân khấu chỉ còn là một khoảng không gian trắng muốt, tương phản với hàng ghế đen để mọi sự tập trung đổ dồn về trang phục. Bộ sưu tập được trình làng cũng có sự cam kết đầu tư về kĩ thuật và phom dáng. Chỉ bấy nhiêu cũng đủ làm giới mộ điệu chờ đợi một sự quay lại bùng nổ của các thiết kế vốn đã biến mất trên sàn diễn của Balenciaga trong vài năm gần đây.', '9000', '7000', 1000, 4, 8, '2024-10-10 10:26:56', '2024-10-02 10:26:56'),
(7, 'Converse Jack Purcell', 'Converse đã đi vào lịch sử thời trang và văn hóa như một biểu tượng vượt thời gian. Các dòng sản phẩm của thương hiệu không chỉ mang lại sự thoải mái mà còn thể hiện phong cách và cá tính riêng biệt. ', 'https://th.bing.com/th/id/OIP.oW2GArOVmCsVD6suv5bEwAHaHa?w=184&h=184&c=7&r=0&o=5&dpr=1.3&pid=1.7', 'Mang trong mình một \"di sản\" đặc biệt của thương hiệu giày bóng rổ nổi tiếng đến từ Hoa Kỳ. Được ra mắt vào những năm 1970, đôi giày Converse Jack Purcell ban đầu được thiết kế dành riêng cho môn thể thao cầu lông. Điều đặc biệt là chúng được tạo ra từ dòng giày Chuck Taylor All Star cổ thấp với chi tiết đường cong hõm sâu được bố trí phía trước mũi giày có dạng lưỡi liềm hay còn gọi nôm na là “mặt cười”.\r\n\r\nTất tần tật kiến thức về giày Converse từ A- Z cho người mới bắt đầu\r\n\r\nĐiều này cho thấy sự linh hoạt và sáng tạo của thương hiệu Converse, khi họ không ngừng tạo ra các sản phẩm độc đáo và thích hợp cho nhiều môn thể thao và phong cách khác nhau.\r\n\r\nConverse Danity for women\r\n\r\nConverse Danity for Women được thiết kế đặc biệt dành cho phái nữ. Đây là một phần trong nỗ lực của Converse để mang đến các lựa chọn phù hợp với phong cách và sở thích của nữ giới. Converse Danity mang trong mình sự nữ tính và tinh tế, với các chi tiết và màu sắc được thiết kế để phù hợp với sở thích của phụ nữ hiện đại. Những đôi giày trong dòng Danity thường có thiết kế cẩn thận và chất liệu cao cấp, mang lại sự thoải mái và phong cách cho người mang.', '7000', '6000', 1000, 5, 2, '2024-10-10 10:36:27', '2024-10-25 10:36:27'),
(8, 'Lịch Sử Của VANS Từ Năm 1996 Tới Nay', 'Vào ngày 16 tháng 3 năm 1966, hai anh em Pauld Van Doren và Jim Van Doren cùng với những người đồng nghiệp là Gordon Lee và Serge Delia đã bắt đầu sự nghiệp tại căn nhà địa chỉ 704 E Broadway tại Anaheim, thành phố Califonia. ', 'https://th.bing.com/th/id/OIP.zBubzO3wbG1v_UL1UNGFBQHaHa?w=220&h=220&c=7&r=0&o=5&dpr=1.3&pid=1.7', 'Vans #36 hay được gọi là Old Skool ra đời với đường viền nổi tiếng. Phiên bản Old Skool là những đôi giày Vans đầu tiên sử dụng chất liệu da để tăng độ bền của giày. Đường viền thân giày lấy cảm hứng từ một họa tiết được vẽ ngẫu nhiên của Paul Van Doren ban đầu được đặt tên là sọc Jazz và dần trở thành một dấu hiệu không thể nhầm lẫn của thương hiệu VANS.\r\n\r\nVans #98 cũng được giới thiệu nhờ sự giúp đỡ của dân trượt ván và những tay đua BMX, Vans Classic Slip-on trở nên nổi tiếng ở nam California và là tiền để cho Vans Slip On hiện giờ, dần trở thành phiên bản không thể thiếu biểu tượng cho VANS.\r\n\r\nCuối những năm thập niên 70 VANS có 70 cửa hàng tại California và được bán thông qua các đại lý trong nước lẫn quốc tế.', '9000', '7000', 1000, 2, 6, '2024-10-10 10:26:56', '2024-10-03 09:25:04');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `image_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image_url`, `image_order`, `created_at`, `updated_at`) VALUES
(1, 1, 'https://th.bing.com/th/id/OIP.Hz0oARLOpoJJrPUvv_xrwAHaFj?w=285&h=214&c=7&r=0&o=5&dpr=1.3&pid=1.7', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `id` int UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `size_id` bigint NOT NULL,
  `color_id` bigint NOT NULL,
  `quanlity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `size_id`, `color_id`, `quanlity`) VALUES
(1, 1, 1, 1, 10),
(2, 2, 2, 2, 20),
(3, 5, 2, 1, 15),
(4, 1, 1, 2, 25),
(5, 1, 2, 2, 15),
(6, 1, 1, 2, 25);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `user_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 'Giày Jordan được ra đời như sự kết hợp giữa huyền thoại bóng rổ Michael Jordan và thương hiệu Nike nổi tiếng. Chính vì vậy mà dòng Jordan 1 còn được biết đến là một trong các hãng giày bóng rổ nổi tiếng nhất hiện nay. Các sản phẩm của Jordan không chỉ giúp bạn có thể dễ dàng chơi với trái bóng mà còn chiếm được cảm tình của người xem nữa đó!', '2024-10-01 04:19:27', '2024-10-11 04:19:27'),
(2, 3, 6, 'Nếu như để cái tên một hãng giày thể thao nổi tiếng trên thế giới thì chắc chắc có đến hơn 90% người nhắc đến cái tên Aididas. Sở dĩ được nhiều người biết đến như vậy là bởi giá thành của những đôi giày Adidas thường khá đa dạng, từ bình dân cho tới cao cấp giúp phù hợp với nhiều người khác nhau. Thậm chí có những đôi chỉ khoảng hơn 1 triệu đồng nhưng cũng có những dòng có giá trị lên tới cả chục triệu.', NULL, NULL),
(3, 4, 4, 'Supreme được biết đến là một thương hiệu xa xỉ bậc nhất thế giới bởi giá của những món đồ này thường khá “trên trời”. Không những vậy, Supreme thường chỉ sản xuất có giới hạn tất cả các sản phẩm của mình, chính vì vậy mà mỗi khi tung ra thị trường ngay lập tức đã tạo thành một cơn sốt và bất kì ai cũng muốn được sở hữu.', '2024-10-01 04:19:27', '2024-10-11 04:19:27'),
(4, 5, 8, 'Nếu như nhắc đến Adidas mà không kể tên Nike thì quả thực là một thiếu sót vô cùng lớn bởi 2 thương hiệu này thường cạnh tranh nhau rất mạnh. Thương hiệu này cùng với logo “Swoosh” và dòng chữ “Just do it” đã trở nên nổi tiếng trên toàn thế giới. Có thể nhiều người chưa biết nhưng điểm mà nhiều người yêu thích chính bởi đây là 1 trong 3 thương hiệu gây ấn tượng về tính thân thiện với môi trường khi có thể tái chế các sản phẩm cũ để sản xuất thành các mẫu mới.', NULL, NULL),
(5, 3, 4, 'Nằm trong danh sách các hãng giày thể thao nổi tiếng chắc chắn không thể không nhắc đến cái tên Puma. Điểm cộng của thương hiệu này chính là luôn biết cách tiếp cận xu hướng thời trang để bạn đến cho người dùng những sản phẩm vừa chất lượng lại vừa đẳng cấp, bắt mắt và nhanh chóng nhận được sự tiếp nhận nhiệt tình của nhiều tín đồ đam mê giày hàng hiệu.', '2024-10-01 04:19:27', '2024-10-11 04:19:27'),
(6, 6, 6, 'Mặc dù không phải xuất phát điểm là một hãng giày Sneaker nổi tiếng thế nhưng trong vài năm trở lại đây Balenciaga đã mang đến cho làng thời trang một bộ sưu tập giày với kiểu dáng Chunky Sneaker đình đám, ngay lập tức tạo nên một cơn sốt đáp ứng đúng tiêu chí “đẹp – độc – lạ”. Không chỉ được nam giới yêu thích, Balenciga còn là một trong các hãng giày thể thao nữ nổi tiếng.', NULL, NULL),
(7, 4, 8, 'New Balance là một trong các hãng giày nổi tiếng trên thế giới được nhiều người yêu thích và ngay tại Việt Nam thì thương hiệu này cũng tạo được một dấu ấn đặc biệt. ', '2024-10-01 04:19:27', '2024-10-11 04:19:27'),
(8, 7, 4, 'Nếu như những hãng giày Sneaker thường chú trọng đến tính thẩm mỹ và kiểu dáng thời trang thì New Balance lại mang đến những sản phẩm được thiết kế với những tính năng vượt trội và chuyên dụng cho các bộ môn thể thao.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` bigint NOT NULL,
  `name` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 35, '2024-10-28 06:55:16', '2024-10-28 06:55:16'),
(2, 36, '2024-10-28 06:55:16', '2024-10-28 06:55:16'),
(3, 37, '2024-10-28 06:55:19', '2024-10-28 06:55:19'),
(4, 38, '2024-10-28 06:55:19', '2024-10-28 06:55:19'),
(5, 39, '2024-10-28 06:56:11', '2024-10-28 06:56:11'),
(6, 40, '2024-10-28 06:56:11', '2024-10-28 06:56:11'),
(7, 41, '2024-10-28 06:56:37', '2024-10-28 06:56:37'),
(8, 42, '2024-10-28 06:56:37', '2024-10-28 06:56:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Đỗ Đăng Khoa', 'khoadd', 'khoaddph31731@fpt.edu.vn', '2024-10-03 09:42:36', 'khoaddph31731', 'admin', 'khoaddph31731', '2024-10-01 09:42:36', '2024-10-03 09:42:36'),
(2, 'Nguyễn Thị Hoài', 'hoaint', 'hoaintphs36134@fpt.edu.vn', '2024-10-02 09:42:36', 'hoaintphs', 'admin', 'hoaintph36134', '2024-10-03 09:42:36', '2024-10-16 09:42:36'),
(3, 'Nguyễn Khắc Quân ', 'quannk', 'quannkph36950@fpt.edu.vn', '2024-10-10 09:45:00', 'quannkph36950', 'admin', 'quannkph36950', '2024-10-02 09:45:00', '2024-10-16 09:45:00'),
(4, 'Nguyễn Văn Ánh', 'anhnv', 'anhnvph37309@fpt.edu.vn', '2024-10-25 09:45:00', 'anhnvph37309', 'user', 'anhnvph37309', '2024-10-02 09:45:00', '2024-10-02 06:45:00'),
(5, 'Nguyễn Thành Đạt', 'datnt', 'datntph40630@fpt.edu.vn', '2024-10-04 09:46:39', 'datntph40630', 'admin', 'datntph40630', '2024-10-04 09:46:39', '2024-10-05 09:46:39'),
(6, 'Nguyễn Minh Hiếu', 'hieunm', 'hieunmph35831@fpt.edu.vn', '2024-10-04 09:46:39', 'hieunmph35831', 'user', 'hieunmph35831', '2024-10-03 09:46:39', '2024-10-01 09:46:39'),
(7, 'Phạm Thị Ánh', 'anhpt', 'anhptph41958@fpt.edu.vn', '2024-10-03 09:48:01', 'anhptph41958', 'admin', 'anhptph41958', '2024-10-03 09:48:01', '2024-10-12 05:48:01'),
(8, 'Nguyễn Văn A', 'anv', 'ahOIAUaklA@gmailcom', '2024-10-04 09:48:01', 'ahOIAUaklA', 'user', 'ahOIAUaklA', '2024-10-08 09:48:01', '2024-10-10 09:48:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_product_id_comment` (`product_id`),
  ADD KEY `lk_user_id_comment` (`user_id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`product_id`,`discount_id`,`orderstatus_id`),
  ADD KEY `fk_product_id` (`product_id`),
  ADD KEY `fk_discount_id` (`discount_id`),
  ADD KEY `fk_orderstatus_id` (`orderstatus_id`);

--
-- Indexes for table `orderstatus`
--
ALTER TABLE `orderstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_order_id` (`order_id`);

--
-- Indexes for table `order_histories`
--
ALTER TABLE `order_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_order_id_histrories` (`order_id`),
  ADD KEY `lk_user_id_histrories` (`user_id`),
  ADD KEY `lk_order_status_histrories` (`order_status`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cate_id` (`cate_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD KEY `lk_img_product_id` (`product_id`);

--
-- Indexes for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `lk_color_id` (`color_id`),
  ADD KEY `lk_size_id` (`size_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_product_id_reviews` (`product_id`),
  ADD KEY `lk_user_id_reviews` (`user_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orderstatus`
--
ALTER TABLE `orderstatus`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_histories`
--
ALTER TABLE `order_histories`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `lk_product_id_comment` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_user_id_comment` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_discount_id` FOREIGN KEY (`discount_id`) REFERENCES `discount` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_orderstatus_id` FOREIGN KEY (`orderstatus_id`) REFERENCES `orderstatus` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `lk_order_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `order_histories`
--
ALTER TABLE `order_histories`
  ADD CONSTRAINT `lk_order_id_histrories` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_order_status_histrories` FOREIGN KEY (`order_status`) REFERENCES `orderstatus` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_user_id_histrories` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_brand_id` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_cate_id` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `lk_img_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD CONSTRAINT `lk_color_id` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_size_id` FOREIGN KEY (`size_id`) REFERENCES `size` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_variants_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `lk_product_id_reviews` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_user_id_reviews` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
