-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 14, 2023 lúc 03:21 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1.2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cartdetail`
--

CREATE TABLE `cartdetail` (
  `Id` int(5) NOT NULL COMMENT 'Mã chi tiết giỏ hàng',
  `Quantity` int(10) NOT NULL COMMENT 'Số lượng',
  `Price` int(10) NOT NULL COMMENT 'Giá',
  `UserId` int(5) NOT NULL COMMENT 'Mã người dùng',
  `ProductId` int(5) NOT NULL COMMENT 'Mã sản phẩm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cartdetail`
--

INSERT INTO `cartdetail` (`Id`, `Quantity`, `Price`, `UserId`, `ProductId`) VALUES
(1, 2, 50000, 1, 1),
(2, 3, 75000, 2, 3),
(3, 1, 30000, 1, 2),
(4, 4, 120000, 3, 5),
(5, 2, 60000, 2, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `Id` int(5) NOT NULL COMMENT 'Mã danh mục',
  `Name` varchar(50) NOT NULL COMMENT 'Tên danh mục',
  `Image` varchar(50) NOT NULL COMMENT 'Tên file ảnh danh mục'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`Id`, `Name`, `Image`) VALUES
(1, 'Đồ ăn nhanh', 'category-fast-food.png'),
(2, 'Pizza', 'category-pizza.png'),
(3, 'Cơm', 'category-cooked-rice.png'),
(4, 'Bánh ngọt', 'category-dessert.png'),
(5, 'Mì', 'category-noodle.png'),
(6, 'Đồ uống', 'category-drink.png'),
(7, 'Trà sữa', 'category-milk-tea.png'),
(8, 'Đường phố', 'category-street.png'),
(9, 'Salad', 'category-salad.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `Id` int(5) NOT NULL COMMENT 'Mã bình luận',
  `Comment` text NOT NULL COMMENT 'Nội dung',
  `Rating` int(1) NOT NULL COMMENT 'Đánh giá (1-5)',
  `Time` datetime NOT NULL COMMENT 'Thời gian',
  `UserId` int(5) NOT NULL COMMENT 'Mã người dùng',
  `ProductId` int(5) NOT NULL COMMENT 'Mã sản phẩm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`Id`, `Comment`, `Rating`, `Time`, `UserId`, `ProductId`) VALUES
(1, 'Sản phẩm tốt', 4, '2023-10-13 08:00:00', 1, 1),
(2, 'Giao hàng nhanh chóng', 5, '2023-10-13 08:30:00', 2, 3),
(3, 'Hài lòng với dịch vụ', 4, '2023-10-13 09:15:00', 1, 2),
(4, 'Chất lượng sản phẩm đáng giá', 5, '2023-10-13 10:00:00', 3, 5),
(5, 'Giá hợp lý', 3, '2023-10-13 10:30:00', 2, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `Id` int(5) NOT NULL COMMENT 'Mã đơn hàng',
  `TotalPrice` int(10) NOT NULL COMMENT 'Tổng giá',
  `Note` text NOT NULL COMMENT 'Ghi chú',
  `Date` datetime NOT NULL COMMENT 'Ngày đặt',
  `Status` int(1) NOT NULL COMMENT 'Trạng thái\r\n(1 = Đang chờ, 2 = Đang chuẩn bị, 3 = Đang giao hàng, 4 = Đã giao hàng, 5 = Đã hủy)',
  `UserId` int(5) NOT NULL COMMENT 'Mã người dùng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`Id`, `TotalPrice`, `Note`, `Date`, `Status`, `UserId`) VALUES
(1, 150000, 'Giao hàng nhanh', '2023-10-13 11:00:00', 1, 1),
(2, 300000, 'Đặt gấp', '2023-10-13 12:00:00', 2, 2),
(3, 450000, 'Đặt lớn', '2023-10-13 13:00:00', 1, 3),
(4, 200000, 'Giao hàng sau 5 ngày', '2023-10-13 14:00:00', 3, 2),
(5, 100000, 'Khách hàng mới', '2023-10-13 15:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `Id` int(5) NOT NULL COMMENT 'Mã chi tiết đơn hàng',
  `Quantity` int(10) NOT NULL COMMENT 'Số lượng',
  `Price` int(10) NOT NULL COMMENT 'Giá',
  `OrderId` int(5) NOT NULL COMMENT 'Mã đơn hàng',
  `ProductId` int(5) NOT NULL COMMENT 'Mã sản phẩm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orderdetail`
--

INSERT INTO `orderdetail` (`Id`, `Quantity`, `Price`, `OrderId`, `ProductId`) VALUES
(1, 2, 50000, 1, 1),
(2, 3, 75000, 2, 3),
(3, 1, 30000, 3, 2),
(4, 4, 120000, 4, 5),
(5, 2, 60000, 5, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `Id` int(5) NOT NULL COMMENT 'Mã sản phẩm',
  `Name` varchar(50) NOT NULL COMMENT 'Tên sản phẩm',
  `Image` varchar(50) NOT NULL COMMENT 'Tên file ảnh sản phẩm',
  `Description` text NOT NULL DEFAULT current_timestamp() COMMENT 'Mô tả sản phẩm',
  `Price` int(10) NOT NULL COMMENT 'Giá sản phẩm',
  `Discount` int(3) NOT NULL COMMENT 'Giảm giá sản phẩm',
  `Views` int(5) NOT NULL COMMENT 'Số lượt xem',
  `IsSpecial` tinyint(1) NOT NULL COMMENT 'Đặc biệt (1 = có, 0 = không)',
  `CategoryId` int(5) NOT NULL COMMENT 'Mã danh mục'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`Id`, `Name`, `Image`, `Description`, `Price`, `Discount`, `Views`, `IsSpecial`, `CategoryId`) VALUES
(1, 'Thạch chanh mâm xôi', 'thach-chanh-mam-xoi.png', 'Món thạch chanh mâm xôi là một món tráng miệng truyền thống với hương vị tươi mát và bắt mắt. Thạch chanh mâm xôi bao gồm lớp thạch chanh mịn màng, được làm từ nước chanh tươi, đường và gelatin, được đặt trên mâm xôi trắng mềm mịn. Mâm xôi có mùi thơm của nếp gạo và được trang trí bằng những lát dừa tươi và hạt mè rang. Món này là sự kết hợp hoàn hảo giữa vị chua ngọt của thạch chanh và vị ngọt nhẹ của mâm xôi, mang lại cảm giác thú vị và sảng khoái cho người thưởng thức.', 31000, 10, 136, 1, 4),
(2, 'Cocktail táo', 'cocktail-tao.png', 'Món cocktail táo là một sự kết hợp tuyệt vời giữa vị chua ngọt của táo và hương thơm của các thành phần khác như rượu vodka, nước chanh và đường. Cocktail táo có màu sắc tươi sáng và hấp dẫn, mang lại cảm giác mát lạnh và sảng khoái khi thưởng thức. Món này thường được trang trí bằng lát táo tươi hoặc đá viên, tạo nên một thức uống hấp dẫn và hòa quyện với không gian vui tươi và năng động.', 60000, 0, 153, 0, 6),
(3, 'Cocktail xương rồng', 'cocktail-xuong-rong.png', 'Món cocktail xương rồng là một sự pha trộn độc đáo giữa hương vị trái cây tươi mát và hình dáng độc đáo của xương rồng. Cocktail này thường được làm từ nước ép hoa quả như dứa, cam, và dứa xanh, kết hợp với rượu hoặc nước ngọt. Món cocktail xương rồng có màu sắc rực rỡ và hấp dẫn, tạo nên một trải nghiệm thú vị và độc đáo cho thực khách.', 55000, 10, 90, 1, 6),
(4, 'Xúc xích nấm', 'xuc-xich-nam.png', 'Món xúc xích nấm là sự kết hợp ngon lành giữa xúc xích thịt và nấm tươi. Xúc xích được nướng hoặc chiên giòn, mang lại hương vị thơm ngon và đậm đà. Nấm tươi thêm độ mềm mịn và hương vị đặc trưng. Món xúc xích nấm thường được dùng làm món ăn nhẹ, hoặc kèm với bánh mì, mì Ý hoặc salad.', 20000, 0, 22, 0, 4),
(5, 'Xúc xích nấm', 'xuc-xich-nam.png', 'Món xúc xích nấm là sự kết hợp ngon lành giữa xúc xích thịt và nấm tươi. Xúc xích được nướng hoặc chiên giòn, mang lại hương vị thơm ngon và đậm đà. Nấm tươi thêm độ mềm mịn và hương vị đặc trưng. Có thể dùng làm món ăn nhẹ, hoặc kèm với bánh mì, mì Ý hoặc salad.', 35000, 15, 52, 0, 8),
(6, 'Nấm Portobello nhồi phô mai', 'nam-portobello-nhoi-pho-mai.png', 'Nấm Portobello nhồi phô mai là một món ăn tuyệt vời, với nấm Portobello to và mềm, được nhồi đầy với một hỗn hợp phô mai kem mịn, tỏi thái nhỏ và các loại gia vị thơm ngon khác. Khi nướng, nấm trở nên mềm mịn và phô mai tan chảy, tạo nên một sự kết hợp hương vị độc đáo và ngon lành. Món ăn này thường được trang trí với rau mùi tươi và hạt tiêu đen, tạo nên một món ăn hấp dẫn về cả mắt và khẩu vị. Bạn có thể thưởng thức nấm Portobello nhồi phô mai như một món khai vị ngon lành hoặc kèm với salad ', 35000, 0, 129, 1, 8),
(7, 'Cocktail kiwi', 'cocktail-kiwi.png', 'món cocktail kiwi là một sự kết hợp tuyệt vời giữa hương vị tươi mát của kiwi và hương thơm của các thành phần khác như rượu vodka, nước chanh và đường. Cocktail kiwi có màu xanh tươi sáng và hấp dẫn, mang lại cảm giác mát lạnh và sảng khoái khi thưởng thức. Món này thường được trang trí bằng lát kiwi tươi hoặc đá viên, tạo nên một thức uống hấp dẫn và hòa quyện với không gian vui tươi và năng động.\r\n', 50000, 5, 241, 1, 6),
(8, 'Caponata Ý cổ điển', 'caponata-y-co-dien.png', 'Món Caponata Ý cổ điển là một món ăn truyền thống của Ý, mang đậm hương vị địa phương và sự phong phú của các nguyên liệu tươi ngon. Caponata được làm từ các loại rau củ như cà tím, cà chua, cà rốt, hành tây, ớt và nhiều loại gia vị khác như cây quế, nghệ, hạt tiêu và giấm. Món này thường được nấu chín chầm chậm để các thành phần hòa quyện với nhau, tạo nên một hương vị độc đáo và phong phú. Caponata Ý cổ điển thường được dùng làm món khai vị hoặc kèm với bánh mì nướng, mang lại trải nghiệm ẩm t', 45000, 5, 214, 0, 8),
(9, 'Mỳ Ý sốt bí đỏ', 'my-y-sot-bi-do.png', 'Mì ý sốt bí đỏ là một món ăn Ý truyền thống, nơi mì ý được kết hợp với sốt bí đỏ. Sốt bí đỏ được làm từ bí đỏ tươi, nấu chín và xay nhuyễn kèm với các thành phần như hành tây, tỏi, gia vị và nước cốt dừa. Món này có hương vị độc đáo, hấp dẫn và màu sắc hấp dẫn từ bí đỏ. Mì ý sốt bí đỏ thường được thưởng thức kèm với phô mai Parmesan và rau mùi tươi, tạo nên một trải nghiệm ẩm thực đậm đà và ngon lành.', 35000, 5, 123, 1, 5),
(10, 'Bánh mì nướng phô mai cà chua', 'banh-mi-nuong-pho-mai-ca-chua.png', 'bánh mì nướng phô mai cà chua là một món ăn ngon với sự kết hợp giữa bánh mì nướng giòn, phô mai béo ngậy và cà chua tươi mọng.\r\n', 23000, 10, 280, 1, 8),
(11, 'Bánh trứng kẹp nấm', 'banh-trung-kep-nam.png', 'Bánh trứng kẹp nấm là một món ăn ngon và đơn giản, với trứng và nấm được kẹp giữa hai lát bánh mì. Trứng được chiên hoặc luộc tới độ chín vừa, tạo nên lớp lòng đỏ mềm mịn hoặc lòng trắng bồng bềnh. Nấm tươi được thái mỏng và chế biến sao cho giữ được độ giòn và hương vị tự nhiên. Khi kết hợp với bánh mì, món ăn trở nên hấp dẫn với sự kết hợp của các thành phần. Bánh trứng kẹp nấm thường được thưởng thức kèm với nước sốt tùy ý hoặc các loại gia vị như mayonnaise, hành tây, rau sống và ớt. Đây là ', 24000, 5, 213, 0, 8),
(12, 'Bánh trứng nướng tỏi', 'banh-trung-nuong-toi.png', 'Bánh trứng nướng tỏi là một món ăn đơn giản nhưng ngon miệng. Trứng được đập vào một chén, kết hợp với tỏi thái nhỏ và gia vị như muối, tiêu và rau mùi tươi. Hỗn hợp trứng và tỏi được đánh đều để tạo ra một hỗn hợp mịn và bọt nhẹ. Sau đó, hỗn hợp được đổ vào khuôn nướng và nướng trong lò nhiệt độ vừa khoảng 15-20 phút cho đến khi bánh trứng chín vàng và phồng lên. Khi nướng xong, món bánh trứng nướng tỏi có một hương vị thơm ngon của tỏi, cùng với vị béo của trứng và hương thơm của rau mùi tươi.', 25000, 0, 100, 0, 8),
(13, 'Salad đậu phụ', 'salad-dau-phu.png', 'Salad đậu phụ là một món ăn tươi mát và bổ dưỡng. Nó được làm từ đậu phụ tươi, được cắt thành từng miếng nhỏ và kết hợp với các loại rau tươi như rau xà lách, cà chua, dưa leo và hành tây. Đậu phụ có vị thịt mềm mịn và hấp dẫn, tạo nên một sự kết hợp hương vị độc đáo. Món salad này thường được trang trí với gia vị như mè rang, hành phi, và nước mắm chua ngọt. Salad đậu phụ là một món ăn nhẹ nhàng và giàu chất dinh dưỡng, phù hợp để thưởng thức trong bữa trưa hoặc bữa tối.', 20000, 10, 98, 1, 9),
(14, 'Salad mì ý', 'salad-mi-y.png', 'Món salad mì ý là một món ăn tươi mát và đa dạng, kết hợp giữa mì ý mềm mịn và các loại rau tươi như rau xà lách, cà chua, dưa leo và hành tây. Salad còn được trang trí với các thành phần khác như jambon, phô mai và trứng luộc. Mì ý tạo nên một cơ sở ngon và sự kết hợp của các loại rau và gia vị tạo nên một hương vị phong phú. Salad mì ý thường được kết hợp với nước sốt vinaigrette hoặc nước mắm chua ngọt, tạo nên một món ăn tươi mát và hấp dẫn.', 45000, 15, 109, 1, 9),
(15, 'Salad trộn cơm', 'com-tron-salad.png', 'Món salad trộn cơm là sự pha trộn hài hòa giữa cơm trắng và các loại rau tươi như rau xà lách, cà chua, dưa leo và hành tây.', 25000, 5, 224, 0, 9),
(16, 'Súp lơ nướng Tahini', 'sup-lo-nuong-tahini.png', 'Súp lơ nướng tahini là một món ăn ngon và đầy đặn, với lơ nướng thơm béo và hương vị đặc biệt từ tahini.', 15000, 5, 102, 1, 9),
(17, 'Bánh phô mai mâm xôi', 'banh-pho-mai-mam-xoi.png', 'Bánh phô mai mâm xôi là một món ăn ngọt thơm ngon, nơi bánh phô mai mềm mịn và mâm xôi ngọt ngào hòa quyện với nhau.', 25000, 5, 194, 1, 4),
(18, 'Sinh tố trứng', 'sinh-to-trung.png', 'Sinh tố trứng là một món đồ uống thơm ngon và bổ dưỡng, nơi trứng tươi được kết hợp với sữa tươi, đường và các loại trái cây tươi ngon như chuối, dứa, và dâu tây. Món này có hương vị ngọt ngào từ trái cây và độ béo mịn từ sữa và trứng, tạo nên một sự kết hợp hài hòa và thỏa mãn vị giác. Sinh tố trứng thường được thưởng thức trong những ngày nóng bức hoặc làm món tráng miệng sau bữa ăn.', 24000, 5, 252, 0, 6),
(19, 'Kem dừa vải', 'kem-dua-vai.png', 'Kem dừa vải là một món tráng miệng ngọt ngào và thơm mát, nơi kem dừa mềm mịn và vị ngọt của vải kết hợp tạo nên một hương vị độc đáo và thú vị.', 15000, 5, 92, 1, 4),
(20, 'Pudding socola hạt lựu', 'pudding-socola-hat-luu.png', 'Món Pudding socola hạt lựu là một món tráng miệng thơm ngon với hương vị socola đậm đà và hạt lựu giòn tan.\r\n', 20000, 0, 200, 0, 4),
(21, 'Mì xào cuộn trứng', 'mi-xao-cuon-trung.png', 'Mì xào cuộn trứng là một món ăn ngon với mì xào được cuộn trong trứng và nướng giòn.', 23000, 10, 102, 0, 5),
(22, 'Mì ramen miso', 'mi-ramen-miso.png', 'Mì ramen miso là một món ăn truyền thống của Nhật Bản, với mì mềm mịn và nước dùng miso đậm đà. Nước dùng miso được làm từ nấm miso, một loại gia vị truyền thống của Nhật Bản, kết hợp với các thành phần như xương heo, xương gà, rau củ và các loại gia vị khác để tạo ra một hương vị độc đáo và thơm ngon. Mì ramen thường được kèm theo các loại topping như thịt heo, trứng luộc, rau mùi, rong biển và hành tây. Món ăn này thường được thưởng thức trong những ngày lạnh hoặc khi bạn muốn một bữa ăn ngon ', 30000, 15, 89, 1, 5),
(23, 'Mì tsukemen', 'mi-tsukemen.png', 'Mì tsukemen là một món ăn đặc trưng của Nhật Bản, với mì dày và nước dùng đậm đà. Thay vì truyền thống là ngâm mì trong nước dùng như mì ramen, mì tsukemen được đặt riêng vào một tô riêng, và nước dùng được đặt trong một tô khác. Khi ăn, bạn sẽ lấy một miếng mì từ tô mì và ngâm vào tô nước dùng, sau đó ăn mì và nước dùng cùng lúc. Nước dùng thường được làm từ xương heo, xương gà hoặc hải sản, kết hợp với các loại gia vị như tương miso, tương đậu nành, tỏi, và gia vị khác để tạo ra hương vị độc đ', 35000, 5, 22, 0, 5),
(24, 'Sushi', 'sushi.png', 'Sushi là một món ăn truyền thống của Nhật Bản, với cơ sở là cơm trộn giấm được cuộn trong các loại hải sản như cá hồi, tôm, hoặc hải sản khác, cùng với rau sống và các loại gia vị như wasabi và gừng.', 45000, 15, 128, 1, 3),
(25, 'Cơm cà ri trứng', 'com-cari-trung.png', 'Cơm cà ri trứng là một món ăn ngon với cơm trắng mềm mịn được trộn với cà ri và trứng, tạo nên một hương vị đậm đà và thơm ngon.', 25000, 0, 225, 0, 3),
(26, 'Hamburger thịt bò', 'hamburger-bo.png', 'Hamburger bò là một món ăn ngon với bánh mì mềm mịn, thịt bò xay tươi ngon, và các loại gia vị và rau sống như cà chua, hành tây và rau xà lách.', 23000, 10, 111, 1, 1),
(27, 'Combo hamburger khoai tây chiên', 'combo-hamburger-khoai-tay-chien.png', 'Combo hamburger khoai tây chiên là một sự kết hợp tuyệt vời giữa món hamburger thơm ngon và khoai tây chiên giòn tan.', 30000, 10, 111, 1, 1),
(28, 'Combo hamburger khoai tây chiên gà rán', 'combo-hamburger-khoai-tay-chien-ga-ran.png', 'Combo hamburger khoai tây chiên gà rán là một sự kết hợp tuyệt vời giữa món hamburger thơm ngon và khoai tây chiên và gà rán giòn tan.', 40000, 5, 224, 1, 1),
(29, 'Bánh mì kẹp xúc xích', 'banh-mi-kep-xuc-xich.png', 'Bánh mì kẹp xúc xích là một món ăn vặt ngon lành với bánh mì mềm mịn và xúc xích thịt bò nướng giòn tan.\r\n', 25000, 0, 111, 1, 8),
(30, 'Trà sữa ô long', 'tra-sua-o-long.png', 'Trà sữa ô long là một đồ uống phổ biến với hương vị đặc trưng của trà ô long hòa quyện với sữa béo ngọt, tạo nên một hương vị thơm ngon và hấp dẫn.', 25000, 5, 108, 1, 6),
(31, 'Trà sữa thái xanh', 'tra-sua-thai-xanh.png', 'Trà sữa thái xanh là một đồ uống phổ biến và thú vị, kết hợp giữa hương vị đặc trưng của trà xanh và sữa thơm ngon. Trà xanh thái được chế biến từ lá trà tươi nhưng không qua quá trình lên men, giữ nguyên hương vị tự nhiên và màu xanh đặc trưng. Khi trộn với sữa, hương vị trà xanh thái trở nên nhẹ nhàng và bùi ngọt, tạo nên một sự kết hợp hài hòa và thỏa mãn vị giác. Đôi khi, trà sữa thái xanh còn được thêm đá hoặc bột trân châu để tăng thêm sự thú vị và độ ngon. Món này thường được thưởng thức ', 25000, 5, 101, 1, 6),
(32, 'Trà sữa khoai lang tím', 'sua-tuoi-tran-trau-duong-den-khoai-lang-tim.png', 'Trà sữa khoai lang tím là một đồ uống độc đáo với hương vị đặc biệt của khoai lang tím, kết hợp với trà đen thơm ngon và sữa béo mịn.', 25000, 5, 111, 1, 7),
(33, 'Trà sữa lài', 'tra-sua-lai.png', 'Trà sữa lài là một loại đồ uống phổ biến với hương vị đặc trưng của trà đen pha chút sữa và thêm một chút đường để tạo thành một hỗn hợp ngọt ngào và đậm đà. Hương vị của trà đen mang đến sự đậm đà và mạnh mẽ, trong khi sữa tạo ra lớp kem mịn và béo ngọt. Thêm vào đó, đường làm tăng thêm độ ngọt và cân bằng hương vị tổng thể của trà sữa lài. Đây là một món đồ uống thú vị và thỏa mãn vị giác, phù hợp để thưởng thức trong những ngày nóng hoặc khi bạn muốn một ly trà thơm ngon và ngọt ngào.', 25000, 5, 231, 0, 6),
(34, 'Sữa tươi trân trâu đường đen', 'sua-tuoi-tran-trau-duong-den.png', 'Sữa tươi trân châu đường đen là một món đồ uống phổ biến và thú vị, với hương vị đặc trưng của trà đen hòa quyện với sữa béo ngọt và trân châu giòn tan. Trà đen tạo nên một hương vị đậm đà và mạnh mẽ, cùng với sữa tạo nên một lớp kem mịn và béo ngọt. Trân châu, là những viên bột sắn nấu chín, có độ giòn và đàn hồi đặc biệt, tạo thêm sự thú vị và độ ngon cho món trà sữa này. Đường đen, với hương vị đặc trưng của mật đường, được thêm vào để tăng thêm độ ngọt và đậm đà cho món trà sữa này. Món trà ', 30000, 20, 111, 1, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `Id` int(5) NOT NULL COMMENT 'Mã người dùng',
  `Email` varchar(50) NOT NULL COMMENT 'Email',
  `Password` varchar(50) NOT NULL COMMENT 'Mật khẩu',
  `Avatar` varchar(50) NOT NULL COMMENT 'Tên file ảnh đại diện',
  `Name` varchar(50) NOT NULL COMMENT 'Tên người dùng',
  `PhoneNumber` int(10) NOT NULL COMMENT 'Số điện thoại',
  `Point` int(5) NOT NULL COMMENT 'Điểm mua hàng',
  `Role` tinyint(1) NOT NULL COMMENT 'Vai trò (0 = khách hàng, 1 = Quản trị)',
  `Address` text NOT NULL COMMENT 'Địa chỉ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`Id`, `Email`, `Password`, `Avatar`, `Name`, `PhoneNumber`, `Point`, `Role`, `Address`) VALUES
(1, 'user1@example.com', 'password1', 'avatar1.jpg', 'Người dùng 1', 1234567890, 50, 0, 'Địa chỉ 1'),
(2, 'user2@example.com', 'password2', 'avatar2.jpg', 'Người dùng 2', 2147483647, 30, 0, 'Địa chỉ 2'),
(3, 'user3@example.com', 'password3', 'avatar3.jpg', 'Người dùng 3', 2147483647, 70, 1, 'Địa chỉ 3'),
(4, 'user4@example.com', 'password4', 'avatar4.jpg', 'Người dùng 4', 2147483647, 20, 0, 'Địa chỉ 4'),
(5, 'user5@example.com', 'password5', 'avatar5.jpg', 'Người dùng 5', 2147483647, 90, 1, 'Địa chỉ 5');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `uservoucher`
--

CREATE TABLE `uservoucher` (
  `Id` int(5) NOT NULL,
  `UserId` int(5) NOT NULL,
  `VoucherId` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `uservoucher`
--

INSERT INTO `uservoucher` (`Id`, `UserId`, `VoucherId`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `voucher`
--

CREATE TABLE `voucher` (
  `Id` int(5) NOT NULL COMMENT 'Mã Voucher',
  `Code` varchar(20) NOT NULL COMMENT 'Mã chữ Voucher',
  `Description` text NOT NULL COMMENT 'Mô tả Voucher',
  `DiscountAmount` int(10) NOT NULL COMMENT 'Số tiền giảm (Chỉ nhập 1 trong 2 cột Số tiền giảm và Phần trăm giảm)',
  `DiscountPercentage` int(3) NOT NULL COMMENT 'Phần trăm giảm (Chỉ nhập 1 trong 2 cột Số tiền giảm và Phần trăm giảm)',
  `MinOrderValue` int(10) NOT NULL COMMENT 'Giá trị đơn hàng yêu cầu tối thiểu',
  `MaxDiscountValue` int(10) NOT NULL COMMENT 'Mức giảm giá tối đa',
  `ExpiryDate` date NOT NULL COMMENT 'Ngày hết hạn',
  `UsageLimit` int(5) NOT NULL COMMENT 'Lượt dùng tối đa',
  `Point` int(5) NOT NULL COMMENT 'Số điểm cần để đổi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `voucher`
--

INSERT INTO `voucher` (`Id`, `Code`, `Description`, `DiscountAmount`, `DiscountPercentage`, `MinOrderValue`, `MaxDiscountValue`, `ExpiryDate`, `UsageLimit`, `Point`) VALUES
(1, 'VOUCHER01', 'Mã giảm giá 1', 50000, 0, 100000, 0, '2023-12-31', 50, 20),
(2, 'VOUCHER02', 'Mã giảm giá 2', 0, 15, 200000, 30000, '2023-12-31', 30, 15),
(3, 'VOUCHER03', 'Mã giảm giá 3', 70000, 0, 150000, 0, '2023-12-31', 40, 25),
(4, 'VOUCHER04', 'Mã giảm giá 4', 0, 10, 100000, 20000, '2023-12-31', 20, 10),
(5, 'VOUCHER05', 'Mã giảm giá 5', 80000, 0, 200000, 0, '2023-12-31', 60, 30);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cartdetail`
--
ALTER TABLE `cartdetail`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ProductId` (`ProductId`),
  ADD KEY `UserId` (`UserId`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ProductId` (`ProductId`),
  ADD KEY `UserId` (`UserId`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserId` (`UserId`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `OrderId` (`OrderId`),
  ADD KEY `ProductId` (`ProductId`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `product_ibfk_1` (`CategoryId`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `uservoucher`
--
ALTER TABLE `uservoucher`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `VoucherId` (`VoucherId`);

--
-- Chỉ mục cho bảng `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cartdetail`
--
ALTER TABLE `cartdetail`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Mã chi tiết giỏ hàng', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Mã danh mục', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Mã bình luận', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Mã đơn hàng', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Mã chi tiết đơn hàng', AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Mã sản phẩm', AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Mã người dùng', AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT cho bảng `uservoucher`
--
ALTER TABLE `uservoucher`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `voucher`
--
ALTER TABLE `voucher`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Mã Voucher', AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cartdetail`
--
ALTER TABLE `cartdetail`
  ADD CONSTRAINT `cartdetail_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `product` (`Id`),
  ADD CONSTRAINT `cartdetail_ibfk_2` FOREIGN KEY (`UserId`) REFERENCES `user` (`Id`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `product` (`Id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`UserId`) REFERENCES `user` (`Id`);

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `user` (`Id`);

--
-- Các ràng buộc cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`OrderId`) REFERENCES `order` (`Id`),
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`ProductId`) REFERENCES `product` (`Id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`CategoryId`) REFERENCES `category` (`Id`);

--
-- Các ràng buộc cho bảng `uservoucher`
--
ALTER TABLE `uservoucher`
  ADD CONSTRAINT `uservoucher_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `user` (`Id`),
  ADD CONSTRAINT `uservoucher_ibfk_2` FOREIGN KEY (`VoucherId`) REFERENCES `voucher` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
