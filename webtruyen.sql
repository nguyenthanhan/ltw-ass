-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 14, 2019 at 03:47 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtruyen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `id_taikhoan`) VALUES
(1, 1),
(2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id_thanhvien` int(11) NOT NULL,
  `id_truyen` int(11) NOT NULL,
  `noidung` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `thoigian` datetime NOT NULL DEFAULT current_timestamp(),
  `id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id_thanhvien`, `id_truyen`, `noidung`, `thoigian`, `id`) VALUES
(1, 5, 'Truyện hay quá trời', '2019-12-18 00:00:00', 1),
(1, 5, 'Quá đỉnh ad ơi', '2019-12-18 00:00:00', 2),
(2, 5, 'truyện rất hay!', '2019-12-09 00:00:00', 3),
(4, 5, 'Một đời Đan Đế bị tình cảm chân thành phản bội bất hạnh ngã xuống', '2019-12-13 07:41:12', 4),
(4, 8, 'good', '2019-12-13 08:02:05', 5),
(4, 8, 'Truyện quá hay', '2019-12-13 10:52:12', 6),
(6, 1, 'Truyện hay', '2019-12-13 16:48:04', 7),
(4, 6, 'truyện hay', '2019-12-13 17:14:10', 8);

-- --------------------------------------------------------

--
-- Table structure for table `chuong`
--

CREATE TABLE `chuong` (
  `id` int(11) NOT NULL,
  `thoigian` datetime NOT NULL DEFAULT current_timestamp(),
  `noidung` varchar(20000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_truyen` int(11) NOT NULL,
  `so` int(11) DEFAULT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chuong`
--

INSERT INTO `chuong` (`id`, `thoigian`, `noidung`, `id_truyen`, `so`, `ten`) VALUES
(1, '2019-12-10 00:00:00', 'Chương 1580: Băng Phong Kim Long chiến trận\r\n\r\n	Khổng Tước hót vang xâm nhập tinh thần, trận bên trong vô số não người biển hiển hiện một cái thất thải Thần Điểu, mổ bọn hắn thần hồn, không ít người sắc mặt trắng bệch, khóe miệng ra bên ngoài chảy máu, ý chí bị suy yếu. Trong lúc mơ hồ, màu vàng thần long chiến trận, có bất ổn hiện ra.\r\n\r\n	\"Quy tắc đạo ý trấn áp.\" Hiên Viên Vô Anh khống chế chiến trận, Kim Long lợi trảo buông ra Khổng Tước, hướng phía trên vút không mà lên, quay đầu truyền ra một đạo long hống.\r\n\r\n	Long hống chấn động thiên địa, hình thành một cỗ đại đạo phong bạo, che phủ Khổng Tước Thần Điểu trên thân, đem hót vang âm thanh hoàn toàn nuốt hết. Lúc này hư không lại không tước minh, chỉ còn long hống kịch liệt gào thét. Vô cùng quy tắc chi lực hội tụ ở phong bạo bên trong, nghiền ép Khổng Tước thân thể, một đường tiếp tục hướng xuống oanh kích.\r\n\r\n	\"Biến trận.\"\r\n\r\n	Bốn năm mươi tên Dao Quang phong đệ tử, hiển nhiên không cách nào cùng mấy trăm tên Nhân Hoàng chống lại, Hiên Viên gia tộc đích hệ huyết mạch tập hợp một chỗ, hợp lực thi triển quy tắc trọng lực, xác thực không thể coi thường, Tần Hạo quyết định thật nhanh, biến trận!\r\n\r\n	Ông!\r\n\r\n	Vô tận quang huy đến Khổng Tước thân thể bộc phát, khổng lồ Thần Điểu hư ảnh càng co càng nhỏ lại, dần dần ngưng tụ thành một viên mũi tên, mũi tên phía trên quấn quanh lấy huyết sắc Ma Diễm, lăng lệ đến cực điểm.\r\n\r\n	Lúc này, Tần Hạo lấy ra Thái Hư Thần Kiếm, song chưởng nắm chặt, chống đỡ hướng đỉnh đầu, lấy thân thể làm cung, thể nội Lạc Nhật Tâm Pháp chảy nhanh, chư Thần cung đồng môn hồn lực toàn bộ hướng hắn dũng mãnh lao tới, một thời gian, ngoại bộ mũi tên bộc phát ra cực kỳ doạ người quang huy, giống như có thể bắn rơi cửu thiên nhật nguyệt.\r\n\r\n	Một vòng huyết sắc quang mang đâm xuyên ra ngoài , mặc cho phong bạo niễn áp chi lực mạnh hơn, mũi tên dòm ngó chuẩn một chút, toàn lực đột tiến, lại từ trong gió lốc lao vùn vụt mà ra, dừng lại hư không, tiễn quang tản ra, lại lần nữa hiển hiện Khổng Tước Thần Vương hư ảnh.\r\n\r\n	\"Lão đại, ta cùng Uyển Thấm tỷ có thể thi triển quy tắc dung hợp kỹ.\" Diệp Thủy Hàn nói, băng cùng nước hỗ trợ lẫn nhau, bọn hắn tại Đạo Tàng phong thử qua.\r\n\r\n	Hảo\" Tần Hạo đối với hai người tuyệt đối tin tưởng, một cái băng linh thánh thể, một cái Thủy Thần đạo thể, đều lĩnh ngộ quy tắc hình thức ban đầu, đem hồn lực dung hợp, uy lực có thể nghĩ.\r\n\r\n	Ánh mắt quét về phía Đạo Tàng phong chư đệ tử, Tần Hạo lớn tiếng hỏi: \"Đạo Tàng đế pháp, đế Oa Thánh Linh Quyết, có mấy người tu thành?\"\r\n\r\n	\"Cái này. . .\"\r\n\r\n	Không ít đệ tử cúi đầu, đế Oa Thánh Linh Quyết bèn nói phong cửa trấn đế pháp, không phải thân truyền đệ tử không có tư cách tu luyện.\r\n\r\n	\"Ta.\"\r\n\r\n	\"Ta.\" Lúc này, hai âm thanh truyền ra, Trịnh Thanh Trì cùng Thiên Ngưng tiên tử, hai người đứng hàng thân truyền, tự nhiên có tư cách tiếp xúc Đạo Tàng phong chí cao đế pháp.\r\n\r\n	Đế Oa Thánh Linh Quyết uy lực cực mạnh, có thể trèo Võ giả nguyên khí, để cho thuật pháp lực sát thương tăng lần, nhưng tu luyện độ khó cũng rất gian khổ. Cho dù đến nay không có nắm giữ tinh túy, nhưng cũng có thể thi triển.\r\n\r\n	\"Lôi Giao, Hải Sa. . . Cùng ta mở ra Cửu Cung Chiến Đế Lực, các vị sư đệ sư muội, đem hồn lực hội hướng chúng ta năm người.\" Tần Hạo song quyền nắm chặt, lòng bàn tay bên trong, một chùm sáng chói Kim Quang động xuyên mà ra. Hai chân, hai đầu gối, sau lưng, trái tim, đều có chùm sáng màu vàng óng xuyên thủng ra, thao Thiên Chiến ý tràn ngập tại trận trong, tựa như hóa thành Chiến Thần thân thể.\r\n\r\n	\"Tám cung, ngươi cái quái vật.\" Lôi Giao thấy nội tâm điên cuồng rung động, Cửu Cung Chiến Đế Lực, bị Tần Hạo mở ra tám cung, lại mở một đạo thiên linh huyệt chính là cửu cung viên mãn, tự mình tám thành không ít để cho Khai Dương phong tôn thiên vị.\r\n\r\n	Hải Sa cùng Lôi Giao đối mặt, từng chùm chói mắt kim quang liên tiếp đến thân thể bộc phát ra, cùng lúc mở ra thất cung, so Tần Hạo thiếu một đạo Tâm Cung chi lực. Nhưng mà, cái kia cỗ chiến ý chi cuồng mãnh, một dạng hung hãn vô song.\r\n\r\n	\"Uyển Thấm tỷ.\" Diệp Thủy Hàn quát, Trần Uyển Thấm gật đầu, vô tận băng chi đạo ý quét sạch, thân thể tinh quang lập loè, hình như trong suốt băng điêu, cho người ta một cỗ băng tuyết Nữ Đế cảm giác thiêng liêng thần thánh.\r\n\r\n	Diệp Thủy Hàn hồn lực phun trào, thân thể bị một bộ ngân sắc nước giáp che phủ, thân hình tại nước giáp phụ trợ dưới trở nên thon dài cân xứng, quanh thân tản mát ra một cỗ nhàn nhạt thần uy, như là Thủy Thần lâm thế.\r\n\r\n	Diệp Thủy Hàn nhìn chăm chú Kim Long chiến trận, một tiếng quát lớn hò hét mà lên: \"Nước đá đồng lưu.\"\r\n\r\n	\"Thế nào lên cái này quái danh tự?\" Tần Hạo có chút im lặng, tốt xấu bá khí điểm, để người ta nghe xong liền rất lợi hại bộ dáng, đường đường Lạc Thủy Thái Tử, học thức tu dưỡng đâu? Thật mất mặt.\r\n\r\n	Ông!\r\n\r\n	Diệp Thủy Hàn cầm trong tay Tam Xoa Kích huy động, kích quang chỗ qua, hình thành bao la đại dương mênh mông, ngập trời dòng lũ như sóng cuồng bộc phát, nuốt hết chư thiên hoàn vũ.\r\n\r\n	Trần Uyển Thấm đôi mắt đẹp khép kín, giống như là một vị Băng Tuyết nữ thần yên tĩnh ngâm xướng, trong miệng nói lẩm bẩm, vô tận băng tuyết đến nàng thân thể tràn ngập ra, hướng phía hư không điên cuồng che phủ.\r\n\r\n	Mà tại ngoại giới!\r\n\r\n	Mọi người xem cuộc chiến chấn kinh nhìn thấy, Khổng Tước Thần Điểu mới từ gió lốc nội bộ tránh ra, chính là hai cánh cùng lúc phát động, cánh trái vỗ vào mà xuống, kinh khủng dòng nước oanh triệt mà ra, như đại dương mênh mông tràn lan muốn nuốt bầu trời. Cánh phải phía dưới, tắc băng tuyết tàn phá bừa bãi, hình thành kinh khủng bão tuyết.\r\n\r\n	Băng cùng tuyết, hai cỗ đại đạo dòng lũ xông về phía trước đi, tại nửa đường giao hòa, ngưng tụ thành một đầu kinh khủng băng trụ. Giờ khắc này, bao la không gian đều nước đá đạo ý chiếm hết, băng trụ một đường hướng màu vàng thần long kéo dài, những nơi đi qua, không gian toàn bộ đều cho Băng Phong.\r\n\r\n	\"Vô Anh, không thể ngạnh kháng.\" Thiên khung đỉnh chóp, Hiên Viên Cao Nhan gương mặt trở nên thất sắc. Băng cùng nước đồng lưu, hai cỗ đạo ý tương dung, chính là quy tắc dung hợp kỹ. Mà lại, chèo chống cỗ này đạo ý lực lượng phi thường đáng sợ, hầu như vượt qua người Hoàng Cực hạn, vô luận nguyên khí cùng ý chí chiến đấu, đều không có thể bắt bẻ.\r\n\r\n	Chớ nói Nhân Hoàng, dù cho hạ vị Nguyên Đế, sợ cũng đánh không ra như thế cực hạn lực lượng.\r\n\r\n	Đế cảnh phía dưới, ngăn người dữ nhiều lành ít.\r\n\r\n	Hống!\r\n\r\n	Màu vàng thần long tự nhiên phát giác một kích này đáng sợ, trận bên trong tất cả mọi người, bao quát Hiên Viên Vô Anh, sinh ra một cỗ mãnh liệt nguy cơ, trăm trượng long thân điên cuồng uốn lượn, vào hư không bên trong ra sức xuyên thẳng qua, hướng về phía trước điên cuồng bắn vọt, muốn chạy ra nước đá đạo ý che phủ lĩnh vực.\r\n\r\n	Nhưng mà, Kim Long tốc độ lại nhanh, há có thể nhanh hơn được đại đạo chi lực.\r\n\r\n	Chư Thần cung đệ tử mượn trận pháp ngưng là chỉnh thể, ý niệm chỗ đến, Vô Hạn Không Gian đều bị quy tắc Băng Phong.\r\n\r\n	Răng rắc một tiếng!\r\n\r\n	Chư thiên phảng phất đứng im, Hoàng Thành không trung chỗ, toàn bộ biến thành băng tinh thế giới, tinh quang lập loè, cực kỳ tráng lệ, có thể xưng thánh cảnh hàng lâm.\r\n\r\n	Nhưng mà, nhất chú mục chính là không trung một cái hình rồng, nguyên bản đầu kia kim lân sáng chói thần long, lúc này hoàn toàn luân hãm tầng băng bên trong, toàn thân kim lân kết thành băng tinh, biến thành một đầu mỹ lệ Băng Long, mười phần loá mắt, không nhúc nhích kẹt tại tại chỗ, duy trì bơi lội tư thế.\r\n\r\n	Từ tư thế đó có thể thấy được, nó giống như đang liều mạng trốn. Nhưng kết quả, lại bị băng chi đại đạo nuốt hết. ', 2, 1, 'Băng Phong Kim Long chiến trận'),
(2, '2019-12-11 00:00:00', 'Đông Viện chánh đường!\r\n\r\n	Với tư cách từng là Tần gia tộc trưởng viện tử, chuyện xưa người ở đây thanh âm ồn ào, người hầu thân ảnh bận rộn không dứt.\r\n\r\n	Bây giờ, một mảnh hoang vắng, cùng luân lạc tới bị ngoại nhân tùy ý khi dễ phân thượng.\r\n\r\n	Lúc này, Trang Kỵ Bát dẫn theo đông nghịt một bọn người tới, giữ cửa hoàn toàn phá hỏng.\r\n\r\n	\"Nói. . . Tần Hạo tạp chủng kia đến cùng giấu đi nơi nào? Nếu không, các ngươi môn muốn sống không được, muốn chết cũng không thể!\"\r\n\r\n	Một tên thân thể hùng rộng rãi, nhìn ra một thước tám thanh niên ngăn ở thềm đá gầm lên.\r\n\r\n	Hắn cái kia mặt chữ quốc trên, ba đạo nếp nhăn trên trán thật cao nhăn lại, phối hợp một bộ lớn giọng, sống thoát một cái hung ác mãnh hổ.\r\n\r\n	Người này chính là Trang gia đại thiếu gia, Tống Chung chủ tử, Trang Kỵ Bát.\r\n\r\n	Bên trong phòng!\r\n\r\n	Tiêu Hàm sợ hãi dáng dấp, trong mắt tràn ngập sợ hãi, thân thể đều đang phát run.\r\n\r\n	Có thể nàng ánh mắt kiên định, mặc dù hại nữa sợ cũng chưa từng cúi đầu.\r\n\r\n	Lưu Việt càng là mang theo thương thế, cầm trong tay một cây côn gỗ hộ tại Tiêu Hàm bên cạnh.\r\n\r\n	Hắn đề phòng ánh mắt vững vàng chằm chằm Trang Kỵ Bát phía sau đám người kia.', 5, 12, 'Đông Viện chánh đường!'),
(3, '2019-12-12 00:00:00', ' Ở trong bóng tối cất bước, là cần dũng khí.\r\n\r\n	Ở vừa vặn tao ngộ một trận nguy cơ sau, trong bóng tối tất cả mọi người trong lòng đều dồi dào khủng hoảng, mẫn cảm cùng sợ hãi.\r\n\r\n	Ở này hai đầu bị đóng chặt hoàn toàn đường hầm bên trong, ánh mặt trời ấm áp không cách nào chạm đến nơi này, nơi này là hắc ám đang khống chế tất cả.\r\n\r\n	Nhưng Merlin nhưng đi lại ở trong bóng tối, cái kia tế thể bóng tối ở hắn bên ngoài thân lưu động, thậm chí so với ánh mặt trời biến đổi có thể mang đến cho hắn một loại an tâm, lại như là trở lại nhà của chính mình bên trong.\r\n\r\n	Trước mắt hắn không có cái gì trở ngại, mặc dù là đang không có ánh đèn chiếu sáng tình huống dưới, hắn vẫn như cũ có thể thấy rõ ràng này trong bóng tối quang cảnh.\r\n\r\n	Đại khái là ở trong bóng tối thị giác bị áp chế, Merlin cảm giác được chính mình thính giác cùng nhận biết, trở nên biến đổi nhạy cảm một chút.\r\n\r\n	Hắn có thể nghe được trong đám người các nữ nhân xì xào bàn tán, những hài tử kia nhóm ngột ngạt gào khóc, ở tối tăm trong bóng tối bận rộn tìm kiếm lối thoát các nam nhân hô hấp, thậm chí làm ngón tay của hắn tiếp xúc được lạnh lẽo đường hầm mặt ngoài, những kia phát sinh ở nham thạch bên trong nhỏ bé phân liệt, những kia đã bởi vì va chạm mà trở nên không lại ổn định nham thạch kết cấu.\r\n\r\n	Hắn ở trong đám người như bóng như thế đi tới, không tiếp xúc đến bất kỳ người, hắn cẩn thận từng li từng tí một không bộc lộ ra chính mình dị thường.\r\n\r\n	Nhưng trên thực tế, hắn chính đang tại bằng tốc độ kinh người thích ứng hắc ám.\r\n\r\n	Hắn lẫn trong đám người, ở không người chú ý tình huống dưới, Merlin cầm lấy nghiêng lật thùng xe biên giới, nhảy vào càng dày đặc hơn trong bóng tối, hắn dọc theo che kín tạp vật ray một đường về phía trước, rất nhanh, hắn liền thoát ly đoàn người tụ tập vị trí.\r\n\r\n	\"Ầm, ầm, ầm.\"\r\n\r\n	Mà ngay tại hắn thâm nhập hắc ám thời khắc, hắn nghe được từ phía trước bị đè ép biến hình trong buồng xe vang lên âm thanh.\r\n\r\n	Đó là rất có nhịp điệu gõ âm thanh, nhưng cũng rất yếu ớt.\r\n\r\n	Vậy hẳn là là bị vây ở trong buồng xe hành khách, ở bất lực cầu cứu.\r\n\r\n	Merlin nhìn chung quanh một chút, đem đỉnh đầu nghé con mũ vành nón hướng phía dưới lần thứ hai lôi kéo, rồi cùng lúc trước Phantom Stranger như thế, dùng vành nón chặn lại rồi hơn nửa khuôn mặt, hơn nữa kính râm che chắn.\r\n\r\n	Ở này trong bóng tối, hầu như không ai có thể nhìn thấy hắn, biến đổi không ai có thể nhận ra hắn.\r\n\r\n	Dựa vào nhạy cảm cảm quan, Merlin rất nhanh liền đã xác định cái kia gõ âm thanh truyền đến vị trí, hắn lùn hạ thân, theo hai đoạn thùng xe va chạm khoảng cách, bò vào cái kia bị đọng lại ở trên vách đá góc. Hắn đưa tay kề sát ở thùng xe lên, quyền lên ngón tay, ở xe trên vách nhẹ nhàng cạy nhúc nhích một chút, lại như là ở đáp lại cái kia gõ vang âm thanh như thế.\r\n\r\n	Này một tiếng gõ vang âm thanh rất trầm thấp, nhưng đối với những kia bị nhốt lại hành khách tới nói, không khác nào Thiên Đường giống như hô hoán.\r\n\r\n	Một giây sau, cái kia gõ vang thanh liền trở nên gấp gáp lên, còn có một cái rất non nớt, đầy, thuộc về đứa nhỏ âm thanh, ở này trong bóng tối vang lên.\r\n\r\n	Cứ việc cật lực áp chế, nhưng Merlin vẫn có thể từ thanh âm kia bên trong nghe được một tia không che giấu nổi kinh hoảng cùng bất lực.\r\n\r\n	\"Có ai không? Có người ở bên ngoài sao? Cứu lấy chúng ta! Mẹ ta té xỉu, ta bị kẹp lấy, van cầu ngươi, cứu lấy chúng ta!\"\r\n\r\n	\"Ta đến rồi, đừng sợ.\"\r\n\r\n	Merlin cố ý thô tiếng nói trả lời một tiếng, hai tay hắn hai chân hoạt động, để cho mình ở cái kia kẽ hở bên trong về phía trước hành động vài bước, sau đó ngẩng đầu lên, liền từ phá nát trong cửa sổ nhìn thấy một người có mái tóc loạn xạ, trên mặt còn có một chút đen xám bé gái.\r\n\r\n	Nàng đang ngồi ở thùng xe dưới đáy, ở nơi đó hết nhìn đông tới nhìn tây.\r\n\r\n	Cánh tay của nàng bị kẹp ở sụp đổ trong rương, nhưng dựa vào nét mặt của nàng đến xem, nàng hẳn là cũng không có bị thương. Ở tiểu cô nương kia bên chân, có một vị ngất đi phu nhân. Vậy hẳn là chính là nàng mụ mụ.\r\n\r\n	So với nàng may mắn con gái, vị phu nhân này vận may liền không thế nào được rồi, nàng khả năng là bị ngã xuống cái rương đập trúng thân thể, dẫn đến hôn mê, nhưng trên mặt đất cũng không có quá nhiều vết máu.\r\n\r\n	Điều này cũng làm cho Merlin thoáng yên tâm một chút.\r\n\r\n	\"Hài tử.\"\r\n\r\n	Merlin kế tục thô cổ họng gọi đến:\r\n\r\n	\"Liền chờ ở nơi đó, đừng nhúc nhích, ta đi tìm công cụ.\"\r\n\r\n	Merlin lại vang lên âm thanh, nhường tiểu cô nương kia bỗng nhiên ngẩng đầu. Nhưng nàng cũng không có Merlin hắc ám thị giác, nàng chỉ có thể nhìn thấy trước mắt một vùng tăm tối, lại như là ở cùng U Linh đối thoại như thế, điều này thực nhường bé gái cảm giác được sợ sệt.\r\n\r\n	\"Tiên sinh? Ngươi ở đâu? Ta không nhìn thấy ngươi.\"\r\n\r\n	Nàng cố ý nói như vậy, sau đó đem thân thể về phía sau hơi co lại.\r\n\r\n	Động tác này nhường bên người nàng xây rương hành lý lay động một cái, nhường bé gái phát sinh một tiếng thét kinh hãi, cũng đem Merlin sợ hết hồn. Nếu như những kia trầm trọng cái rương cũng sụp xuống, cô bé này nhất định sẽ bị đập trúng.\r\n\r\n	\"Đừng nhúc nhích!\"\r\n\r\n	Merlin ngữ khí trở nên biến đổi ôn hòa một ít:\r\n\r\n	\"Ta có thể nhìn thấy ngươi, liền duy trì động tác này, đừng nhúc nhích. . . Ta rất nhanh sẽ trở lại cứu ngươi, còn có ngươi mụ mụ. Tiểu cô nương, tin tưởng ta, được không?\"\r\n\r\n	Nói xong, Merlin lùi lại mấy bước, lần thứ hai lùn hạ thân thể, bò ra thùng xe vặn vẹo ao hãm thông đạo.\r\n\r\n	Merlin cố ý phát sinh một chút âm thanh, làm cho cái kia mẫn cảm tiểu nha đầu an tâm một ít.\r\n\r\n	Bất quá ở Merlin sau khi rời đi, cái kia bị vây ở góc tiểu nha đầu lại có chút sợ sệt hơi co lại đầu, nàng cúi đầu nhìn hôn mê mụ mụ, nàng giật giật mũi, dùng mang theo thanh âm nức nở, đối mụ mụ, thật giống cũng là ở tự nhủ:\r\n\r\n	\"Đừng sợ, mụ mụ, có người tới cứu chúng ta.\"\r\n\r\n	\"Nghe tới như cái Đại ca ca, hắn nhất định sẽ trở về, đúng không?\"\r\n\r\n	\"Chúng ta nhất định sẽ được cứu trợ.\"\r\n\r\n	Nhưng hôn mê mụ mụ đi không có thể trở về ứng nàng, điều này làm cho bé gái trong mắt nước mắt lại không nhịn được muốn chảy xuống, nhưng nàng nỗ lực nhịn xuống.\r\n\r\n	Nàng không ngừng hít sâu, nỗ lực để cho mình tỉnh táo lại.\r\n\r\n	Ở trong bóng tối, này 7 tuổi nữ hài duy trì bắt tay cánh tay bị xếp lên thế cái rương ràng buộc tư thế, nàng rất mệt, nhưng nàng biết, mình không thể lộn xộn.\r\n\r\n	Nguy hiểm còn không qua đi đây.\r\n\r\n	Nhìn thấy hi vọng sau, lại tiếp tục chờ thời gian là rất khó nhịn. Tiểu cô nương bình quân 10 giây một lần ngẩng đầu lên, lại như là con thỏ nhỏ như thế vểnh tai lên, nàng nỗ lực ở trong bóng tối nghe được dù cho một tia tiếng vang, nhưng Merlin lại như là hoàn toàn biến mất như thế.\r\n\r\n	1 phút đồng hồ, 2 phút, rất nhanh, 5 phút qua đi.\r\n\r\n	Đầy cõi lòng chờ mong tiểu cô nương tâm từng điểm từng điểm chìm xuống dưới, đủ loại không ly đầu suy đoán bắt đầu ở trong đầu của nàng vang vọng lên.\r\n\r\n	Nàng cùng cái khác phần lớn bị nhốt ở trong bóng tối người như thế, bắt đầu rồi tự mình não bù, bắt đầu chính mình hù dọa chính mình.\r\n\r\n	Tiểu cô nương sợ hãi của nội tâm càng ngày càng mạnh mẽ, nhưng ngay tại nàng bị chính mình ảo tưởng ép vỡ trước, đột nhiên vang lên, sắt thép va chạm âm thanh, đưa nàng từ chính mình trong ảo tưởng bỗng nhiên thức tỉnh.\r\n\r\n	Tiểu cô nương sợ hết hồn, nàng ngẩng đầu lên, liền nhìn thấy một cái vặn vẹo thép côn, bị cắm ở hai đoạn thùng xe va chạm vặn vẹo địa phương. Merlin một tay nắm gậy, sử dụng toàn bộ sức lực.\r\n\r\n	Hắn hoàn toàn không có cách nào lay động hai đoạn nhét chung một chỗ thùng xe, cũng không cách nào như manga bên trong anh hùng như thế ung dung tách ra chúng nó, nhưng hắn có thể dùng đơn giản nhất đòn bẩy nguyên lý, đem đã đóng chặt hoàn toàn cửa xe từng điểm từng điểm cạy ra.\r\n\r\n	\"Ầm \"\r\n\r\n	Bị cạy lái xe cửa đập ở trong bóng tối, phát sinh một tiếng to lớn vang động, Merlin thấp người đi vào thùng xe, bước nhanh đi tới tiểu cô nương kia cùng nàng bên cạnh mẫu thân, hắn đưa tay ra, đem đè lên tiểu cô nương cánh tay cái rương cái này tiếp theo cái kia đẩy ra.\r\n\r\n	Ở trong bóng tối, hắn đối tựa hồ bị dọa sợ tiểu cô nương ôn hòa nói đến:\r\n\r\n	\"Đừng sợ, ta liền ở ngay đây.\"\r\n\r\n	Merlin đưa tay xoa xoa mồ hôi trán, hắn đem cái cuối cùng cái rương đẩy ra, nhường bị nhốt lại tiểu cô nương được tự do, mà sau một khắc, cái kia trầm mặc tiểu cô nương liền mở ra hai tay, đột nhiên ôm lấy Merlin chân.\r\n\r\n	Merlin sửng sốt một chút.\r\n\r\n	Hắn có thể cảm giác được, tiểu cô nương thân thể đang run rẩy, nàng khẳng định bị dọa sợ.\r\n\r\n	Nàng vốn không nên trải qua tất cả những thứ này, mà hết thảy này đầu nguồn, đều là hắn.\r\n\r\n	Merlin thở phào một cái, hắn nỗ lực đem những này mặt trái tâm tình sắp xếp ra đi, hắn đưa tay ra, sờ sờ tiểu cô nương loạn xạ tóc, hắn đối tiểu nha đầu nói:\r\n\r\n	\"Trước tiên thả ra ta, ta muốn đem mẹ ngươi ôm đi ra ngoài. . . Ngươi theo ta, cẩn thận một chút, được không?\"\r\n\r\n	Tiểu nha đầu nghe lời buông tay ra, nàng nhìn Merlin cúi người, đem hôn mê mụ mụ ôm lấy. Nàng liền đưa tay ra, cầm lấy Merlin góc áo, ở này bị vặn vẹo, bị hắc ám bao trùm địa phương cất bước.\r\n\r\n	Đang bị cứu vớt sau khi, cô nương này rốt cục cảm giác được một tia an tâm.\r\n\r\n	Nàng không cần lại sợ hãi.', 5, 5, 'Ác mộng. Lần đầu bạo phát'),
(4, '2019-12-11 05:33:30', '\"Oanh long long long \"\r\n\r\n	Máy bay trực thăng cánh quạt điên cuồng chuyển động, này bôi thành màu đen quân cơ, chính trực mang theo một đội người ở trong bóng tối bay về phía Auckland nội thành.\r\n\r\n	Ở này máy bay trực thăng hậu phương, còn có đồng dạng 5 bàn quân cơ, bên trong ngồi đầy mấy tên lính võ trang đầy đủ cùng đặc công, cùng lần trước ở Manhattan không giống, lần này, trong tay bọn họ nắm, nhưng là nguy hiểm đồ thật.\r\n\r\n	Mà ở cabin bên trong, Nick. Fury đang dùng mã hóa qua tần số truyền tin, hướng về cách xa ở New York Pierce báo cáo nhiệm vụ tiến độ.\r\n\r\n	\"Pierce, thật bất hạnh, ngươi suy đoán là đúng. Có một nhánh xa lạ sức mạnh chính đang tại ven đường truy sát Merlin, từ Nevada đến Auckland, chúng ta đo lường đến ít nhất 3 lần ma lực nổ tung năng lượng lưu lại, này chứng minh Merlin đã cùng bọn họ giao chiến.\"\r\n\r\n	\"Vậy hắn tình cảnh bây giờ liền rất nguy hiểm, Fury.\"\r\n\r\n	Pierce có chút sai lệch âm thanh, từ trong máy truyền tin truyền ra, hắn ngữ khí nghiêm nghị nói:\r\n\r\n	\"Khóa chặt vị trí của hắn sao?\"\r\n\r\n	\"Hừm, đã khóa chặt, hắn ở Auckland thành phố người da đen quảng trường bên trong, có một tên cảnh sát thấy hắn, đồng thời hướng về chúng ta cung cấp manh mối.\"\r\n\r\n	\"Rất tốt, vậy thì cản ở tên sát thủ kia tổ chức động thủ trước, đem hắn mang về New York.\"\r\n\r\n	Pierce nói đến:\r\n\r\n	\"Chúng ta một số \'Đồng sự\', đối với Merlin tạo thành phiền phức, đã nhẫn nại đến cực hạn, ở cục điều tra Liên Bang, Bộ quốc phòng cùng an ninh quốc gia cục nhúng tay trước, nhất định phải kết thúc chuyện này.\"\r\n\r\n	\"Ân, ta biết rồi, giao cho ta đi.\"\r\n\r\n	Fury cắt đứt thông tin, hắn đối phi công làm thủ hiệu, này bàn máy bay trực thăng tốc độ lần thứ hai tăng nhanh.\r\n\r\n	Gần sau mười phút, liền ở tại bọn hắn sắp đến Merlin ẩn thân nơi thời điểm, một đoàn nổ tung hỏa diễm, ở phía dưới quảng trường bên trong đột ngột xuất hiện, cái kia nổ tung âm thanh ở này trên bầu trời thậm chí đều có thể nghe được.\r\n\r\n	\"Là Merlin!\"\r\n\r\n	Fury so sánh một phát vị trí, hắn chau mày, ngón tay theo bản năng phất ở bên hông cái chuôi súng lên.\r\n\r\n	Sau một khắc, Fury mệnh lệnh liền truyền đạt đến trong máy truyền tin.\r\n\r\n	\"Giảm xuống! Tiến vào tác chiến khu! Thanh lý những kia phát điên sát thủ! Đội 1, Đội 2, đi theo ta! Chúng ta đi đem đáng thương tiểu tử mang về!\"\r\n\r\n	————————————————————\r\n\r\n	\"Ông \"\r\n\r\n	Đạn hỏa tiễn tinh chuẩn đâm trúng Merlin vị trí gian phòng, ở nó nổ tung trước một khắc, Merlin liền đánh vỡ pha lê, từ trong phòng một nhảy ra.\r\n\r\n	Nóng rực khủng bố nổ tung hỏa diễm hầu như liền ở trên đỉnh đầu hắn phun tuôn ra, cái kia cỗ lực trùng kích đập cho Merlin trên không trung mất đi cân bằng, đánh toàn ngã tại trên mặt đất. Ở tiếp xúc được trên mặt đất một khắc, hắn hóa thân làm khói đen tránh thoát trí mạng rơi rụng, ở giây tiếp theo lại trở về nhân loại thân thể.\r\n\r\n	Merlin sắc mặt biến đổi trắng xám một chút, nhưng hắn không lo được trong thân thể rục rà rục rịch bóng tối ma lực, hắn khập khễnh nhằm phía quảng trường góc tối, nỗ lực trước tiên né ra những kia lao ra đoàn người phát điên sát thủ tập kích.\r\n\r\n	Sau lưng hắn, đột nhiên xuất hiện nổ tung, đem chính đang tại đầu đường cũ nát sân bóng rổ bên trong chơi bóng rổ bọn nhỏ sợ hết hồn. Rất nhiều hài tử rít gào lên thoát đi, nhưng có một đứa bé nhưng gào thét nỗ lực xông về cái kia chính trực đang thiêu đốt nhà trọ.\r\n\r\n	Hắn khả năng có người thân bị vây ở cái kia nhà trọ.\r\n\r\n	\"Đừng đi! Đừng đi!\"\r\n\r\n	Merlin một phát bắt được cái kia kích động hài tử, hắn hầu như là kéo hắn một đường chạy nhanh.\r\n\r\n	Ở Merlin bóng tối nhận biết bên trong, đang nổ phát sinh sau khi, mấy chiếc xe đấu đá lung tung nhảy vào này quảng trường, có ít nhất hơn 40 tên sát thủ từ trong xe nhảy xuống, lướt qua dòng người, hướng về nổ tung phát sinh địa phương đuổi tới.\r\n\r\n	Những kia bước chân trầm trọng gia hỏa khẳng định nắm giữ vũ khí, hơn nữa bọn họ đại thể đo lường tính toán ra Merlin bóng tối nhận biết phạm vi, những này giảo hoạt khốn nạn hầu như đều trốn ở gần nghìn mét ở ngoài địa phương.\r\n\r\n	\"Là ta sơ sẩy.\"\r\n\r\n	Merlin một bên ôm giãy dụa hài tử, hướng trong bóng tối lui lại, một bên tự trách nghĩ lại.\r\n\r\n	Hắn đối với bí mật hiếu kỳ, khiến cho hắn thả lỏng đối chu vi cảnh giác, đem chính mình rơi vào loại này nguy cấp tình cảnh. Chỗ chết người nhất chính là, Merlin ở trong bóng tối quay đầu nhìn lại, cái kia đống ở rất nhiều người nhà trọ đã bắt đầu từ tầng bốn hướng lên trên thiêu đốt, cuồn cuộn khói đen từ tầng gác bên trong tuôn ra.\r\n\r\n	Cái viên này chỉ đang giết chết hắn đạn hỏa tiễn, khẳng định nhen lửa những vật khác, gợi ra đại hỏa.\r\n\r\n	Hơn nữa từ cái này thẳng thắn dứt khoát đạn hỏa tiễn liền có thể nhìn ra, cái kia vẫn đang đuổi giết hắn tổ chức, đã không để ý hắn đeo trên người siêu cấp binh sĩ huyết thanh.\r\n\r\n	Khẳng định là đột nhiên chuyện gì xảy ra, dẫn đến Merlin ở trong mắt bọn họ uy hiếp tăng lên rất nhiều, cho tới cái tổ chức kia làm ra phải giết quyết định, dù cho là lấy siêu cấp binh sĩ huyết thanh triệt để tiêu vong làm để đánh đổi, bọn họ cũng phải đem Merlin ở đây biến mất.\r\n\r\n	\"Nghe ta nói! Yên tĩnh một chút! Nghe ta nói!\"\r\n\r\n	Merlin trong lòng hài tử điên cuồng gào thét, điều này làm cho Merlin không thể không đem hắn để dưới đất, hắn nhấn đứa nhỏ này vai, nhìn thẳng con mắt của hắn, hắn la lớn:\r\n\r\n	\"Câm miệng! Nghe ta nói!\"\r\n\r\n	Này gầm lên giận dữ đem đứa bé kia sợ hết hồn, hắn nhìn Merlin, người sau chỉ vào cái kia bắt đầu thiêu đốt nhà trọ, đối hài tử nói:\r\n\r\n	\"Ngươi có người thân ở nơi đó, đúng không?\"\r\n\r\n	Hài tử gật gật đầu, lại sờ sờ nước mắt:\r\n\r\n	\"Ba ba ta cùng thúc thúc ở nơi đó.\"\r\n\r\n	\"Ngươi vọt vào không giúp được, nghe ta nói, hài tử, ngươi muốn cứu bọn họ, đúng không?\"\r\n\r\n	Merlin nhìn chung quanh một chút, hắn nhận biết được những kia nguy hiểm sát thủ đang đến gần. Hắn chỉ có thể nói tóm tắt, hắn ngữ khí gấp gáp đối hài tử nói:\r\n\r\n	\"Đi tìm cảnh sát cùng phòng cháy viên, nói cho bọn họ biết nơi này có người bị thương, có người sắp chết rồi, để cho bọn họ tới cứu người! Lại đi gọi số điện thoại này!\"\r\n\r\n	Merlin đem một chuỗi dãy số nói cho đứa bé kia, nhường hắn thuật lại một lần, xác nhận hắn nhớ kỹ sau khi, hắn nói:\r\n\r\n	\"Nói cho điện thoại người bên kia, liền nói bạn của Bruce gặp nguy hiểm, nhường bọn họ mau mau đến giúp đỡ! Nếu như ngươi muốn cứu ba ba ngươi cùng thúc thúc, nhất định muốn làm như thế, nhớ kỹ sao?\"\r\n\r\n	Cái kia bé trai dùng sức gật gật đầu, Merlin vỗ vỗ bờ vai của hắn, nói đến:\r\n\r\n	\"Vậy thì đi thôi! Nhanh đi!\"\r\n\r\n	Nói xong, hắn quay đầu nhảy vào trong bóng tối, lại như là biến mất không còn tăm hơi như thế.\r\n\r\n	Tình cảnh này đem cái kia bé trai dọa sợ, hắn thất kinh khoảng chừng lắc đầu, nỗ lực tìm được Merlin tồn tại vết tích, nhưng làm sao cũng không tìm được.\r\n\r\n	Bé trai quay đầu lại nhìn sau lưng bắt đầu thiêu đốt nhà trọ, hắn chạy đi liền chạy, chỉ chốc lát sau, Merlin cho hắn cú điện thoại kia dãy số bị bấm, một cái ôn hòa, thuộc về lão nhân âm thanh ở trong loa vang lên.\r\n\r\n	\"Chào ngài, nơi này là Wayne trang viên, ta là Wayne gia tộc quản gia Alfred, xin hỏi ngài có. . .\"\r\n\r\n	\"Bạn của Bruce gặp nguy hiểm, nhanh đến giúp đỡ!\"\r\n\r\n	Bé trai đem Merlin thuật lại một lần, điện thoại bên kia âm thanh trầm mặc lại. Mấy giây sau khi, kia lão nhân âm thanh trở nên nghiêm túc một chút, hắn ngắn gọn mạnh mẽ hỏi:\r\n\r\n	\"Các ngươi vị trí ở đâu?\"\r\n\r\n	————————————————\r\n\r\n	\"Ông \"\r\n\r\n	Đang nổ phát sinh sau 5 phút, lơ lửng ở như chiến trường như thế quảng trường bầu trời quái lạ trên phi thuyền, Wakanda vương quốc quốc vương T\'Chaka chính trực nhìn màn ảnh trước mắt hình chiếu.\r\n\r\n	Ở cái kia hình chiếu lên, cái kia tổ chức thần bí bọn sát thủ chính đang tại toàn bộ quảng trường trong phạm vi sưu tầm cái gì.\r\n\r\n	Bọn họ cầm trong tay đủ loại vũ khí, bom tiếng nổ mạnh liên tiếp, nhường trên mặt đất quảng trường nhìn qua căn bản là không giống như là một cái văn minh thành thị, trái lại như là chiến trường chân chính như thế.\r\n\r\n	Ở khí tức lạnh lẽo quốc vương phía sau, trước cùng hắn trò chuyện N\'Jobu vương tử đang nằm ở đặc thù trị liệu máy lên, ở vừa nãy nổ tung bên trong, hắn bất hạnh bị thương, hơn nữa nhìn đi tới đã rất khó lại cứu trị.\r\n\r\n	\"Bệ hạ, N\'Jobu hắn. . .\"\r\n\r\n	Một tên cầm trong tay chiến mâu nữ hầu vệ thấp giọng nói:\r\n\r\n	\"Hắn có thể có thể không tiếp tục kiên trì được.\"\r\n\r\n	\"Ầm \"\r\n\r\n	Quốc vương trong tay thưởng thức báo đen pho tượng vào đúng lúc này bị nắm nát tan, hắn nhìn hình chiếu hai mắt trở nên lãnh khốc, hắn nói:\r\n\r\n	\"N\'Jobu là ta đệ đệ, là vương thất thành viên, là Wakanda tôn quý nhất huyết mạch một trong.\"\r\n\r\n	\"Hắn xác thực phạm lỗi lầm, nhưng lỗi của hắn ngộ, chỉ có thể do hội nghị trưởng lão đến quyết định, ai cho những người ngoài kia quyền lực, đến thương tổn Wakanda vương tử?\"\r\n\r\n	\"Okna!\"\r\n\r\n	\"Ở \"\r\n\r\n	Quốc vương bên người cường tráng hung hãn người da đen nữ hầu vệ đem chiến mâu điểm trên mặt đất, nàng hướng về quốc vương cúi đầu, chờ mệnh lệnh.\r\n\r\n	\"Mặc vào ngươi chiến giáp, cầm vũ khí của ngươi! Lấy báo đen danh nghĩa, ta dành cho ngươi báo thù quyền lực. Đi bắt đến người tập kích kia, giết chết những kia ác đồ! Hôm nay, Wakanda chảy máu rồi! Hôm nay, chúng ta muốn. . . Lấy sinh mệnh, đổi sinh mệnh!\"\r\n\r\n	\"Tuân mệnh! Ta bệ hạ.\"\r\n\r\n	Cái kia hung hãn như mẫu sư như thế thị vệ lùi về sau một bước, ở tại hắn thị vệ dưới sự giúp đỡ, nàng mặc vào một bộ hiện ra ánh kim loại màu đen khôi giáp, có hoàn chỉnh chiến ngoa cùng hộ cổ, nhưng không mang mũ giáp, mà là ở trên mặt bôi lên đặc thù vệt sáng.\r\n\r\n	Một tên đồng bạn đem mấy viên dùng quái lạ kim loại chế tác hạt châu đặt ở trong tay nàng, nữ hầu vệ Okna đem chứa ở trong túi tiền của chính mình.\r\n\r\n	Ở quốc vương T\'Chaka nhìn kỹ bên trong, này hung hãn nữ hầu vệ hai tay đan xen, để ở trước ngực, lại như là giết chóc trước cầu khẩn như thế.\r\n\r\n	\"Bá \"\r\n\r\n	Nàng dưới chân boong tàu đột nhiên mở ra, đem cô gái này thị vệ cả người từ trời cao tập trung vào mặt đất chiến trường.\r\n\r\n	Nàng trên không trung cấp tốc rơi rụng, nàng phất lên chiến mâu, đem sắc bén mũi mâu đâm vào bên người nhà trọ nhà lớn tầng ngoài vách tường. Ở một trận chói tai xé rách thanh cùng tia lửa văng gắp nơi bên trong, cô gái này thị vệ thuộc hạ tốc độ đột nhiên chậm lại, ở cách xa mặt đất 3 mét vị trí, hai chân của nàng đạp ở trên vách tường, cả người lại như là săn mồi báo săn như thế, đánh về phía khoảng cách nàng gần nhất sát thủ.\r\n', 5, 13, 'Nổ tung không hề có một tiếng động'),
(5, '2019-12-11 13:11:12', 'Bị mắng cao gầy cái nhún vai một cái, chu vi mấy cái trang phục cổ quái kỳ lạ gia hỏa còn cạc cạc cười, một mặt cười trên sự đau khổ của người khác.\r\n\r\n	Mấy người này nhìn qua cũng không giống như là chuyên nghiệp cướp đoạt giả, bọn họ thậm chí không có một khẩu súng giới hộ thân, liền chứng minh những người này dù cho là ở địa ngục nhà bếp, cũng là đẳng cấp rất thấp loại kia tên côn đồ cắc ké.\r\n\r\n	Ở triệt để mất đi Merlin tung tích sau, mấy tên khốn kiếp liền hùng hùng hổ hổ chuẩn bị rời đi, nhưng liền ở người da đen kia tráng hán xoay người một khắc đó, một cái xoay tròn bóng chày côn liền gào thét từ trong bóng tối né hiện ra, mạnh mẽ nện ở sau gáy của hắn lên.\r\n\r\n	Cái này gia hỏa đều không hàng một tiếng, ngay tại máu tươi tung toé bên trong bò ở trên mặt đất, máu tươi ở hắn trên y phục chảy xuôi, hãy cùng chết rồi như thế. . .\r\n\r\n	Cái này quỷ dị động tĩnh đem chu vi 4 người triệt để dọa sợ, lá gan đó ít nhất cao gầy cái quay đầu liền chạy, nhưng này nhuốm máu bóng chày côn rồi lại từ trước mắt của hắn gào thét bay ra, một gậy nện ở hắn ngực.\r\n\r\n	Áo Khoác Bóng Tối bên trong Merlin đòn đánh này dốc hết sức, kết quả là là cái kia cao gầy cái cả người đều bị này trước mặt một đòn đánh về phía sau bay lên, hắn gào thét ngã trên mặt đất, thống khổ lăn mình. Cái này gia hỏa so với lão đại của hắn may mắn một ít, nhưng phỏng chừng cũng đoạn mấy chiếc xương sườn.\r\n\r\n	Còn lại ba người hoàn toàn bị kinh ngạc sững sờ, bọn họ cảm giác thật giống như là có cái thủ đoạn ác độc U Linh ở này trong hẻm nhỏ bồi hồi, loại kia không nhìn thấy người, chỉ có thể bị đánh sợ hãi, nhường còn lại ba người động cũng không dám động.\r\n\r\n	Trong bóng tối Merlin cười gằn một tiếng, hắn tay trái ném đi, cái kia nhuốm máu bóng chày côn bị ném xuống đất.\r\n\r\n	\"Ầm \"\r\n\r\n	Cái kia vang động đem ba người sợ hết hồn, bọn họ hầu như không tự chủ được chạy đi liền chạy.\r\n\r\n	Còn coi như bọn họ thông minh, là tách ra hướng về ba phương hướng chạy.\r\n', 5, 14, 'Kinh Thiên Sự Kiện'),
(6, '2019-12-11 13:11:12', 'Bị mắng cao gầy cái nhún vai một cái, chu vi mấy cái trang phục cổ quái kỳ lạ gia hỏa còn cạc cạc cười, một mặt cười trên sự đau khổ của người khác.\r\n\r\n	Mấy người này nhìn qua cũng không giống như là chuyên nghiệp cướp đoạt giả, bọn họ thậm chí không có một khẩu súng giới hộ thân, liền chứng minh những người này dù cho là ở địa ngục nhà bếp, cũng là đẳng cấp rất thấp loại kia tên côn đồ cắc ké.\r\n\r\n	Ở triệt để mất đi Merlin tung tích sau, mấy tên khốn kiếp liền hùng hùng hổ hổ chuẩn bị rời đi, nhưng liền ở người da đen kia tráng hán xoay người một khắc đó, một cái xoay tròn bóng chày côn liền gào thét từ trong bóng tối né hiện ra, mạnh mẽ nện ở sau gáy của hắn lên.\r\n\r\n	Cái này gia hỏa đều không hàng một tiếng, ngay tại máu tươi tung toé bên trong bò ở trên mặt đất, máu tươi ở hắn trên y phục chảy xuôi, hãy cùng chết rồi như thế. . .\r\n\r\n	Cái này quỷ dị động tĩnh đem chu vi 4 người triệt để dọa sợ, lá gan đó ít nhất cao gầy cái quay đầu liền chạy, nhưng này nhuốm máu bóng chày côn rồi lại từ trước mắt của hắn gào thét bay ra, một gậy nện ở hắn ngực.\r\n\r\n	Áo Khoác Bóng Tối bên trong Merlin đòn đánh này dốc hết sức, kết quả là là cái kia cao gầy cái cả người đều bị này trước mặt một đòn đánh về phía sau bay lên, hắn gào thét ngã trên mặt đất, thống khổ lăn mình. Cái này gia hỏa so với lão đại của hắn may mắn một ít, nhưng phỏng chừng cũng đoạn mấy chiếc xương sườn.\r\n\r\n	Còn lại ba người hoàn toàn bị kinh ngạc sững sờ, bọn họ cảm giác thật giống như là có cái thủ đoạn ác độc U Linh ở này trong hẻm nhỏ bồi hồi, loại kia không nhìn thấy người, chỉ có thể bị đánh sợ hãi, nhường còn lại ba người động cũng không dám động.\r\n\r\n	Trong bóng tối Merlin cười gằn một tiếng, hắn tay trái ném đi, cái kia nhuốm máu bóng chày côn bị ném xuống đất.\r\n\r\n	\"Ầm \"\r\n\r\n	Cái kia vang động đem ba người sợ hết hồn, bọn họ hầu như không tự chủ được chạy đi liền chạy.\r\n\r\n	Còn coi như bọn họ thông minh, là tách ra hướng về ba phương hướng chạy.\r\n', 5, 15, 'Lạc Huyền Thanh tiểu truyện'),
(7, '2019-12-11 13:11:12', 'Bị mắng cao gầy cái nhún vai một cái, chu vi mấy cái trang phục cổ quái kỳ lạ gia hỏa còn cạc cạc cười, một mặt cười trên sự đau khổ của người khác.\r\n\r\n	Mấy người này nhìn qua cũng không giống như là chuyên nghiệp cướp đoạt giả, bọn họ thậm chí không có một khẩu súng giới hộ thân, liền chứng minh những người này dù cho là ở địa ngục nhà bếp, cũng là đẳng cấp rất thấp loại kia tên côn đồ cắc ké.\r\n\r\n	Ở triệt để mất đi Merlin tung tích sau, mấy tên khốn kiếp liền hùng hùng hổ hổ chuẩn bị rời đi, nhưng liền ở người da đen kia tráng hán xoay người một khắc đó, một cái xoay tròn bóng chày côn liền gào thét từ trong bóng tối né hiện ra, mạnh mẽ nện ở sau gáy của hắn lên.\r\n\r\n	Cái này gia hỏa đều không hàng một tiếng, ngay tại máu tươi tung toé bên trong bò ở trên mặt đất, máu tươi ở hắn trên y phục chảy xuôi, hãy cùng chết rồi như thế. . .\r\n\r\n	Cái này quỷ dị động tĩnh đem chu vi 4 người triệt để dọa sợ, lá gan đó ít nhất cao gầy cái quay đầu liền chạy, nhưng này nhuốm máu bóng chày côn rồi lại từ trước mắt của hắn gào thét bay ra, một gậy nện ở hắn ngực.\r\n\r\n	Áo Khoác Bóng Tối bên trong Merlin đòn đánh này dốc hết sức, kết quả là là cái kia cao gầy cái cả người đều bị này trước mặt một đòn đánh về phía sau bay lên, hắn gào thét ngã trên mặt đất, thống khổ lăn mình. Cái này gia hỏa so với lão đại của hắn may mắn một ít, nhưng phỏng chừng cũng đoạn mấy chiếc xương sườn.\r\n\r\n	Còn lại ba người hoàn toàn bị kinh ngạc sững sờ, bọn họ cảm giác thật giống như là có cái thủ đoạn ác độc U Linh ở này trong hẻm nhỏ bồi hồi, loại kia không nhìn thấy người, chỉ có thể bị đánh sợ hãi, nhường còn lại ba người động cũng không dám động.\r\n\r\n	Trong bóng tối Merlin cười gằn một tiếng, hắn tay trái ném đi, cái kia nhuốm máu bóng chày côn bị ném xuống đất.\r\n\r\n	\"Ầm \"\r\n\r\n	Cái kia vang động đem ba người sợ hết hồn, bọn họ hầu như không tự chủ được chạy đi liền chạy.\r\n\r\n	Còn coi như bọn họ thông minh, là tách ra hướng về ba phương hướng chạy.\r\n', 5, 16, 'Lạc Huyền Thanh tiểu truyện'),
(8, '2019-12-11 13:11:12', 'Bị mắng cao gầy cái nhún vai một cái, chu vi mấy cái trang phục cổ quái kỳ lạ gia hỏa còn cạc cạc cười, một mặt cười trên sự đau khổ của người khác.\r\n\r\n	Mấy người này nhìn qua cũng không giống như là chuyên nghiệp cướp đoạt giả, bọn họ thậm chí không có một khẩu súng giới hộ thân, liền chứng minh những người này dù cho là ở địa ngục nhà bếp, cũng là đẳng cấp rất thấp loại kia tên côn đồ cắc ké.\r\n\r\n	Ở triệt để mất đi Merlin tung tích sau, mấy tên khốn kiếp liền hùng hùng hổ hổ chuẩn bị rời đi, nhưng liền ở người da đen kia tráng hán xoay người một khắc đó, một cái xoay tròn bóng chày côn liền gào thét từ trong bóng tối né hiện ra, mạnh mẽ nện ở sau gáy của hắn lên.\r\n\r\n	Cái này gia hỏa đều không hàng một tiếng, ngay tại máu tươi tung toé bên trong bò ở trên mặt đất, máu tươi ở hắn trên y phục chảy xuôi, hãy cùng chết rồi như thế. . .\r\n\r\n	Cái này quỷ dị động tĩnh đem chu vi 4 người triệt để dọa sợ, lá gan đó ít nhất cao gầy cái quay đầu liền chạy, nhưng này nhuốm máu bóng chày côn rồi lại từ trước mắt của hắn gào thét bay ra, một gậy nện ở hắn ngực.\r\n\r\n	Áo Khoác Bóng Tối bên trong Merlin đòn đánh này dốc hết sức, kết quả là là cái kia cao gầy cái cả người đều bị này trước mặt một đòn đánh về phía sau bay lên, hắn gào thét ngã trên mặt đất, thống khổ lăn mình. Cái này gia hỏa so với lão đại của hắn may mắn một ít, nhưng phỏng chừng cũng đoạn mấy chiếc xương sườn.\r\n\r\n	Còn lại ba người hoàn toàn bị kinh ngạc sững sờ, bọn họ cảm giác thật giống như là có cái thủ đoạn ác độc U Linh ở này trong hẻm nhỏ bồi hồi, loại kia không nhìn thấy người, chỉ có thể bị đánh sợ hãi, nhường còn lại ba người động cũng không dám động.\r\n\r\n	Trong bóng tối Merlin cười gằn một tiếng, hắn tay trái ném đi, cái kia nhuốm máu bóng chày côn bị ném xuống đất.\r\n\r\n	\"Ầm \"\r\n\r\n	Cái kia vang động đem ba người sợ hết hồn, bọn họ hầu như không tự chủ được chạy đi liền chạy.\r\n\r\n	Còn coi như bọn họ thông minh, là tách ra hướng về ba phương hướng chạy.\r\n', 5, 17, 'Lạc Huyền Thanh tiểu truyện'),
(9, '2019-12-11 13:11:12', 'Bị mắng cao gầy cái nhún vai một cái, chu vi mấy cái trang phục cổ quái kỳ lạ gia hỏa còn cạc cạc cười, một mặt cười trên sự đau khổ của người khác.\r\n\r\n	Mấy người này nhìn qua cũng không giống như là chuyên nghiệp cướp đoạt giả, bọn họ thậm chí không có một khẩu súng giới hộ thân, liền chứng minh những người này dù cho là ở địa ngục nhà bếp, cũng là đẳng cấp rất thấp loại kia tên côn đồ cắc ké.\r\n\r\n	Ở triệt để mất đi Merlin tung tích sau, mấy tên khốn kiếp liền hùng hùng hổ hổ chuẩn bị rời đi, nhưng liền ở người da đen kia tráng hán xoay người một khắc đó, một cái xoay tròn bóng chày côn liền gào thét từ trong bóng tối né hiện ra, mạnh mẽ nện ở sau gáy của hắn lên.\r\n\r\n	Cái này gia hỏa đều không hàng một tiếng, ngay tại máu tươi tung toé bên trong bò ở trên mặt đất, máu tươi ở hắn trên y phục chảy xuôi, hãy cùng chết rồi như thế. . .\r\n\r\n	Cái này quỷ dị động tĩnh đem chu vi 4 người triệt để dọa sợ, lá gan đó ít nhất cao gầy cái quay đầu liền chạy, nhưng này nhuốm máu bóng chày côn rồi lại từ trước mắt của hắn gào thét bay ra, một gậy nện ở hắn ngực.\r\n\r\n	Áo Khoác Bóng Tối bên trong Merlin đòn đánh này dốc hết sức, kết quả là là cái kia cao gầy cái cả người đều bị này trước mặt một đòn đánh về phía sau bay lên, hắn gào thét ngã trên mặt đất, thống khổ lăn mình. Cái này gia hỏa so với lão đại của hắn may mắn một ít, nhưng phỏng chừng cũng đoạn mấy chiếc xương sườn.\r\n\r\n	Còn lại ba người hoàn toàn bị kinh ngạc sững sờ, bọn họ cảm giác thật giống như là có cái thủ đoạn ác độc U Linh ở này trong hẻm nhỏ bồi hồi, loại kia không nhìn thấy người, chỉ có thể bị đánh sợ hãi, nhường còn lại ba người động cũng không dám động.\r\n\r\n	Trong bóng tối Merlin cười gằn một tiếng, hắn tay trái ném đi, cái kia nhuốm máu bóng chày côn bị ném xuống đất.\r\n\r\n	\"Ầm \"\r\n\r\n	Cái kia vang động đem ba người sợ hết hồn, bọn họ hầu như không tự chủ được chạy đi liền chạy.\r\n\r\n	Còn coi như bọn họ thông minh, là tách ra hướng về ba phương hướng chạy.\r\n', 5, 18, 'Lạc Huyền Thanh tiểu truyện'),
(10, '2019-12-11 13:11:12', 'Bị mắng cao gầy cái nhún vai một cái, chu vi mấy cái trang phục cổ quái kỳ lạ gia hỏa còn cạc cạc cười, một mặt cười trên sự đau khổ của người khác.\r\n\r\n	Mấy người này nhìn qua cũng không giống như là chuyên nghiệp cướp đoạt giả, bọn họ thậm chí không có một khẩu súng giới hộ thân, liền chứng minh những người này dù cho là ở địa ngục nhà bếp, cũng là đẳng cấp rất thấp loại kia tên côn đồ cắc ké.\r\n\r\n	Ở triệt để mất đi Merlin tung tích sau, mấy tên khốn kiếp liền hùng hùng hổ hổ chuẩn bị rời đi, nhưng liền ở người da đen kia tráng hán xoay người một khắc đó, một cái xoay tròn bóng chày côn liền gào thét từ trong bóng tối né hiện ra, mạnh mẽ nện ở sau gáy của hắn lên.\r\n\r\n	Cái này gia hỏa đều không hàng một tiếng, ngay tại máu tươi tung toé bên trong bò ở trên mặt đất, máu tươi ở hắn trên y phục chảy xuôi, hãy cùng chết rồi như thế. . .\r\n\r\n	Cái này quỷ dị động tĩnh đem chu vi 4 người triệt để dọa sợ, lá gan đó ít nhất cao gầy cái quay đầu liền chạy, nhưng này nhuốm máu bóng chày côn rồi lại từ trước mắt của hắn gào thét bay ra, một gậy nện ở hắn ngực.\r\n\r\n	Áo Khoác Bóng Tối bên trong Merlin đòn đánh này dốc hết sức, kết quả là là cái kia cao gầy cái cả người đều bị này trước mặt một đòn đánh về phía sau bay lên, hắn gào thét ngã trên mặt đất, thống khổ lăn mình. Cái này gia hỏa so với lão đại của hắn may mắn một ít, nhưng phỏng chừng cũng đoạn mấy chiếc xương sườn.\r\n\r\n	Còn lại ba người hoàn toàn bị kinh ngạc sững sờ, bọn họ cảm giác thật giống như là có cái thủ đoạn ác độc U Linh ở này trong hẻm nhỏ bồi hồi, loại kia không nhìn thấy người, chỉ có thể bị đánh sợ hãi, nhường còn lại ba người động cũng không dám động.\r\n\r\n	Trong bóng tối Merlin cười gằn một tiếng, hắn tay trái ném đi, cái kia nhuốm máu bóng chày côn bị ném xuống đất.\r\n\r\n	\"Ầm \"\r\n\r\n	Cái kia vang động đem ba người sợ hết hồn, bọn họ hầu như không tự chủ được chạy đi liền chạy.\r\n\r\n	Còn coi như bọn họ thông minh, là tách ra hướng về ba phương hướng chạy.\r\n', 5, 19, 'Lạc Huyền Thanh tiểu truyện'),
(11, '2019-12-11 13:11:12', 'Bị mắng cao gầy cái nhún vai một cái, chu vi mấy cái trang phục cổ quái kỳ lạ gia hỏa còn cạc cạc cười, một mặt cười trên sự đau khổ của người khác.\r\n\r\n	Mấy người này nhìn qua cũng không giống như là chuyên nghiệp cướp đoạt giả, bọn họ thậm chí không có một khẩu súng giới hộ thân, liền chứng minh những người này dù cho là ở địa ngục nhà bếp, cũng là đẳng cấp rất thấp loại kia tên côn đồ cắc ké.\r\n\r\n	Ở triệt để mất đi Merlin tung tích sau, mấy tên khốn kiếp liền hùng hùng hổ hổ chuẩn bị rời đi, nhưng liền ở người da đen kia tráng hán xoay người một khắc đó, một cái xoay tròn bóng chày côn liền gào thét từ trong bóng tối né hiện ra, mạnh mẽ nện ở sau gáy của hắn lên.\r\n\r\n	Cái này gia hỏa đều không hàng một tiếng, ngay tại máu tươi tung toé bên trong bò ở trên mặt đất, máu tươi ở hắn trên y phục chảy xuôi, hãy cùng chết rồi như thế. . .\r\n\r\n	Cái này quỷ dị động tĩnh đem chu vi 4 người triệt để dọa sợ, lá gan đó ít nhất cao gầy cái quay đầu liền chạy, nhưng này nhuốm máu bóng chày côn rồi lại từ trước mắt của hắn gào thét bay ra, một gậy nện ở hắn ngực.\r\n\r\n	Áo Khoác Bóng Tối bên trong Merlin đòn đánh này dốc hết sức, kết quả là là cái kia cao gầy cái cả người đều bị này trước mặt một đòn đánh về phía sau bay lên, hắn gào thét ngã trên mặt đất, thống khổ lăn mình. Cái này gia hỏa so với lão đại của hắn may mắn một ít, nhưng phỏng chừng cũng đoạn mấy chiếc xương sườn.\r\n\r\n	Còn lại ba người hoàn toàn bị kinh ngạc sững sờ, bọn họ cảm giác thật giống như là có cái thủ đoạn ác độc U Linh ở này trong hẻm nhỏ bồi hồi, loại kia không nhìn thấy người, chỉ có thể bị đánh sợ hãi, nhường còn lại ba người động cũng không dám động.\r\n\r\n	Trong bóng tối Merlin cười gằn một tiếng, hắn tay trái ném đi, cái kia nhuốm máu bóng chày côn bị ném xuống đất.\r\n\r\n	\"Ầm \"\r\n\r\n	Cái kia vang động đem ba người sợ hết hồn, bọn họ hầu như không tự chủ được chạy đi liền chạy.\r\n\r\n	Còn coi như bọn họ thông minh, là tách ra hướng về ba phương hướng chạy.\r\n', 5, 20, 'Lạc Huyền Thanh tiểu truyện'),
(12, '2019-12-11 13:11:12', 'Bị mắng cao gầy cái nhún vai một cái, chu vi mấy cái trang phục cổ quái kỳ lạ gia hỏa còn cạc cạc cười, một mặt cười trên sự đau khổ của người khác.\r\n\r\n	Mấy người này nhìn qua cũng không giống như là chuyên nghiệp cướp đoạt giả, bọn họ thậm chí không có một khẩu súng giới hộ thân, liền chứng minh những người này dù cho là ở địa ngục nhà bếp, cũng là đẳng cấp rất thấp loại kia tên côn đồ cắc ké.\r\n\r\n	Ở triệt để mất đi Merlin tung tích sau, mấy tên khốn kiếp liền hùng hùng hổ hổ chuẩn bị rời đi, nhưng liền ở người da đen kia tráng hán xoay người một khắc đó, một cái xoay tròn bóng chày côn liền gào thét từ trong bóng tối né hiện ra, mạnh mẽ nện ở sau gáy của hắn lên.\r\n\r\n	Cái này gia hỏa đều không hàng một tiếng, ngay tại máu tươi tung toé bên trong bò ở trên mặt đất, máu tươi ở hắn trên y phục chảy xuôi, hãy cùng chết rồi như thế. . .\r\n\r\n	Cái này quỷ dị động tĩnh đem chu vi 4 người triệt để dọa sợ, lá gan đó ít nhất cao gầy cái quay đầu liền chạy, nhưng này nhuốm máu bóng chày côn rồi lại từ trước mắt của hắn gào thét bay ra, một gậy nện ở hắn ngực.\r\n\r\n	Áo Khoác Bóng Tối bên trong Merlin đòn đánh này dốc hết sức, kết quả là là cái kia cao gầy cái cả người đều bị này trước mặt một đòn đánh về phía sau bay lên, hắn gào thét ngã trên mặt đất, thống khổ lăn mình. Cái này gia hỏa so với lão đại của hắn may mắn một ít, nhưng phỏng chừng cũng đoạn mấy chiếc xương sườn.\r\n\r\n	Còn lại ba người hoàn toàn bị kinh ngạc sững sờ, bọn họ cảm giác thật giống như là có cái thủ đoạn ác độc U Linh ở này trong hẻm nhỏ bồi hồi, loại kia không nhìn thấy người, chỉ có thể bị đánh sợ hãi, nhường còn lại ba người động cũng không dám động.\r\n\r\n	Trong bóng tối Merlin cười gằn một tiếng, hắn tay trái ném đi, cái kia nhuốm máu bóng chày côn bị ném xuống đất.\r\n\r\n	\"Ầm \"\r\n\r\n	Cái kia vang động đem ba người sợ hết hồn, bọn họ hầu như không tự chủ được chạy đi liền chạy.\r\n\r\n	Còn coi như bọn họ thông minh, là tách ra hướng về ba phương hướng chạy.\r\n', 5, 21, 'Lạc Huyền Thanh tiểu truyện'),
(13, '2019-12-11 13:11:12', 'Bị mắng cao gầy cái nhún vai một cái, chu vi mấy cái trang phục cổ quái kỳ lạ gia hỏa còn cạc cạc cười, một mặt cười trên sự đau khổ của người khác.\r\n\r\n	Mấy người này nhìn qua cũng không giống như là chuyên nghiệp cướp đoạt giả, bọn họ thậm chí không có một khẩu súng giới hộ thân, liền chứng minh những người này dù cho là ở địa ngục nhà bếp, cũng là đẳng cấp rất thấp loại kia tên côn đồ cắc ké.\r\n\r\n	Ở triệt để mất đi Merlin tung tích sau, mấy tên khốn kiếp liền hùng hùng hổ hổ chuẩn bị rời đi, nhưng liền ở người da đen kia tráng hán xoay người một khắc đó, một cái xoay tròn bóng chày côn liền gào thét từ trong bóng tối né hiện ra, mạnh mẽ nện ở sau gáy của hắn lên.\r\n\r\n	Cái này gia hỏa đều không hàng một tiếng, ngay tại máu tươi tung toé bên trong bò ở trên mặt đất, máu tươi ở hắn trên y phục chảy xuôi, hãy cùng chết rồi như thế. . .\r\n\r\n	Cái này quỷ dị động tĩnh đem chu vi 4 người triệt để dọa sợ, lá gan đó ít nhất cao gầy cái quay đầu liền chạy, nhưng này nhuốm máu bóng chày côn rồi lại từ trước mắt của hắn gào thét bay ra, một gậy nện ở hắn ngực.\r\n\r\n	Áo Khoác Bóng Tối bên trong Merlin đòn đánh này dốc hết sức, kết quả là là cái kia cao gầy cái cả người đều bị này trước mặt một đòn đánh về phía sau bay lên, hắn gào thét ngã trên mặt đất, thống khổ lăn mình. Cái này gia hỏa so với lão đại của hắn may mắn một ít, nhưng phỏng chừng cũng đoạn mấy chiếc xương sườn.\r\n\r\n	Còn lại ba người hoàn toàn bị kinh ngạc sững sờ, bọn họ cảm giác thật giống như là có cái thủ đoạn ác độc U Linh ở này trong hẻm nhỏ bồi hồi, loại kia không nhìn thấy người, chỉ có thể bị đánh sợ hãi, nhường còn lại ba người động cũng không dám động.\r\n\r\n	Trong bóng tối Merlin cười gằn một tiếng, hắn tay trái ném đi, cái kia nhuốm máu bóng chày côn bị ném xuống đất.\r\n\r\n	\"Ầm \"\r\n\r\n	Cái kia vang động đem ba người sợ hết hồn, bọn họ hầu như không tự chủ được chạy đi liền chạy.\r\n\r\n	Còn coi như bọn họ thông minh, là tách ra hướng về ba phương hướng chạy.\r\n', 5, 22, 'Lạc Huyền Thanh tiểu truyện'),
(14, '2019-12-11 13:11:12', 'Bị mắng cao gầy cái nhún vai một cái, chu vi mấy cái trang phục cổ quái kỳ lạ gia hỏa còn cạc cạc cười, một mặt cười trên sự đau khổ của người khác.\r\n\r\n	Mấy người này nhìn qua cũng không giống như là chuyên nghiệp cướp đoạt giả, bọn họ thậm chí không có một khẩu súng giới hộ thân, liền chứng minh những người này dù cho là ở địa ngục nhà bếp, cũng là đẳng cấp rất thấp loại kia tên côn đồ cắc ké.\r\n\r\n	Ở triệt để mất đi Merlin tung tích sau, mấy tên khốn kiếp liền hùng hùng hổ hổ chuẩn bị rời đi, nhưng liền ở người da đen kia tráng hán xoay người một khắc đó, một cái xoay tròn bóng chày côn liền gào thét từ trong bóng tối né hiện ra, mạnh mẽ nện ở sau gáy của hắn lên.\r\n\r\n	Cái này gia hỏa đều không hàng một tiếng, ngay tại máu tươi tung toé bên trong bò ở trên mặt đất, máu tươi ở hắn trên y phục chảy xuôi, hãy cùng chết rồi như thế. . .\r\n\r\n	Cái này quỷ dị động tĩnh đem chu vi 4 người triệt để dọa sợ, lá gan đó ít nhất cao gầy cái quay đầu liền chạy, nhưng này nhuốm máu bóng chày côn rồi lại từ trước mắt của hắn gào thét bay ra, một gậy nện ở hắn ngực.\r\n\r\n	Áo Khoác Bóng Tối bên trong Merlin đòn đánh này dốc hết sức, kết quả là là cái kia cao gầy cái cả người đều bị này trước mặt một đòn đánh về phía sau bay lên, hắn gào thét ngã trên mặt đất, thống khổ lăn mình. Cái này gia hỏa so với lão đại của hắn may mắn một ít, nhưng phỏng chừng cũng đoạn mấy chiếc xương sườn.\r\n\r\n	Còn lại ba người hoàn toàn bị kinh ngạc sững sờ, bọn họ cảm giác thật giống như là có cái thủ đoạn ác độc U Linh ở này trong hẻm nhỏ bồi hồi, loại kia không nhìn thấy người, chỉ có thể bị đánh sợ hãi, nhường còn lại ba người động cũng không dám động.\r\n\r\n	Trong bóng tối Merlin cười gằn một tiếng, hắn tay trái ném đi, cái kia nhuốm máu bóng chày côn bị ném xuống đất.\r\n\r\n	\"Ầm \"\r\n\r\n	Cái kia vang động đem ba người sợ hết hồn, bọn họ hầu như không tự chủ được chạy đi liền chạy.\r\n\r\n	Còn coi như bọn họ thông minh, là tách ra hướng về ba phương hướng chạy.\r\n', 5, 23, 'Lạc Huyền Thanh tiểu truyện');
INSERT INTO `chuong` (`id`, `thoigian`, `noidung`, `id_truyen`, `so`, `ten`) VALUES
(15, '2019-12-11 13:11:12', 'Bị mắng cao gầy cái nhún vai một cái, chu vi mấy cái trang phục cổ quái kỳ lạ gia hỏa còn cạc cạc cười, một mặt cười trên sự đau khổ của người khác.\r\n\r\n	Mấy người này nhìn qua cũng không giống như là chuyên nghiệp cướp đoạt giả, bọn họ thậm chí không có một khẩu súng giới hộ thân, liền chứng minh những người này dù cho là ở địa ngục nhà bếp, cũng là đẳng cấp rất thấp loại kia tên côn đồ cắc ké.\r\n\r\n	Ở triệt để mất đi Merlin tung tích sau, mấy tên khốn kiếp liền hùng hùng hổ hổ chuẩn bị rời đi, nhưng liền ở người da đen kia tráng hán xoay người một khắc đó, một cái xoay tròn bóng chày côn liền gào thét từ trong bóng tối né hiện ra, mạnh mẽ nện ở sau gáy của hắn lên.\r\n\r\n	Cái này gia hỏa đều không hàng một tiếng, ngay tại máu tươi tung toé bên trong bò ở trên mặt đất, máu tươi ở hắn trên y phục chảy xuôi, hãy cùng chết rồi như thế. . .\r\n\r\n	Cái này quỷ dị động tĩnh đem chu vi 4 người triệt để dọa sợ, lá gan đó ít nhất cao gầy cái quay đầu liền chạy, nhưng này nhuốm máu bóng chày côn rồi lại từ trước mắt của hắn gào thét bay ra, một gậy nện ở hắn ngực.\r\n\r\n	Áo Khoác Bóng Tối bên trong Merlin đòn đánh này dốc hết sức, kết quả là là cái kia cao gầy cái cả người đều bị này trước mặt một đòn đánh về phía sau bay lên, hắn gào thét ngã trên mặt đất, thống khổ lăn mình. Cái này gia hỏa so với lão đại của hắn may mắn một ít, nhưng phỏng chừng cũng đoạn mấy chiếc xương sườn.\r\n\r\n	Còn lại ba người hoàn toàn bị kinh ngạc sững sờ, bọn họ cảm giác thật giống như là có cái thủ đoạn ác độc U Linh ở này trong hẻm nhỏ bồi hồi, loại kia không nhìn thấy người, chỉ có thể bị đánh sợ hãi, nhường còn lại ba người động cũng không dám động.\r\n\r\n	Trong bóng tối Merlin cười gằn một tiếng, hắn tay trái ném đi, cái kia nhuốm máu bóng chày côn bị ném xuống đất.\r\n\r\n	\"Ầm \"\r\n\r\n	Cái kia vang động đem ba người sợ hết hồn, bọn họ hầu như không tự chủ được chạy đi liền chạy.\r\n\r\n	Còn coi như bọn họ thông minh, là tách ra hướng về ba phương hướng chạy.\r\n', 5, 24, 'Lạc Huyền Thanh tiểu truyện'),
(16, '2019-12-11 13:11:12', 'Bị mắng cao gầy cái nhún vai một cái, chu vi mấy cái trang phục cổ quái kỳ lạ gia hỏa còn cạc cạc cười, một mặt cười trên sự đau khổ của người khác.\r\n\r\n	Mấy người này nhìn qua cũng không giống như là chuyên nghiệp cướp đoạt giả, bọn họ thậm chí không có một khẩu súng giới hộ thân, liền chứng minh những người này dù cho là ở địa ngục nhà bếp, cũng là đẳng cấp rất thấp loại kia tên côn đồ cắc ké.\r\n\r\n	Ở triệt để mất đi Merlin tung tích sau, mấy tên khốn kiếp liền hùng hùng hổ hổ chuẩn bị rời đi, nhưng liền ở người da đen kia tráng hán xoay người một khắc đó, một cái xoay tròn bóng chày côn liền gào thét từ trong bóng tối né hiện ra, mạnh mẽ nện ở sau gáy của hắn lên.\r\n\r\n	Cái này gia hỏa đều không hàng một tiếng, ngay tại máu tươi tung toé bên trong bò ở trên mặt đất, máu tươi ở hắn trên y phục chảy xuôi, hãy cùng chết rồi như thế. . .\r\n\r\n	Cái này quỷ dị động tĩnh đem chu vi 4 người triệt để dọa sợ, lá gan đó ít nhất cao gầy cái quay đầu liền chạy, nhưng này nhuốm máu bóng chày côn rồi lại từ trước mắt của hắn gào thét bay ra, một gậy nện ở hắn ngực.\r\n\r\n	Áo Khoác Bóng Tối bên trong Merlin đòn đánh này dốc hết sức, kết quả là là cái kia cao gầy cái cả người đều bị này trước mặt một đòn đánh về phía sau bay lên, hắn gào thét ngã trên mặt đất, thống khổ lăn mình. Cái này gia hỏa so với lão đại của hắn may mắn một ít, nhưng phỏng chừng cũng đoạn mấy chiếc xương sườn.\r\n\r\n	Còn lại ba người hoàn toàn bị kinh ngạc sững sờ, bọn họ cảm giác thật giống như là có cái thủ đoạn ác độc U Linh ở này trong hẻm nhỏ bồi hồi, loại kia không nhìn thấy người, chỉ có thể bị đánh sợ hãi, nhường còn lại ba người động cũng không dám động.\r\n\r\n	Trong bóng tối Merlin cười gằn một tiếng, hắn tay trái ném đi, cái kia nhuốm máu bóng chày côn bị ném xuống đất.\r\n\r\n	\"Ầm \"\r\n\r\n	Cái kia vang động đem ba người sợ hết hồn, bọn họ hầu như không tự chủ được chạy đi liền chạy.\r\n\r\n	Còn coi như bọn họ thông minh, là tách ra hướng về ba phương hướng chạy.\r\n', 5, 25, 'Lạc Huyền Thanh tiểu truyện'),
(18, '2019-12-11 13:11:12', 'Bị mắng cao gầy cái nhún vai một cái, chu vi mấy cái trang phục cổ quái kỳ lạ gia hỏa còn cạc cạc cười, một mặt cười trên sự đau khổ của người khác.\r\n\r\n	Mấy người này nhìn qua cũng không giống như là chuyên nghiệp cướp đoạt giả, bọn họ thậm chí không có một khẩu súng giới hộ thân, liền chứng minh những người này dù cho là ở địa ngục nhà bếp, cũng là đẳng cấp rất thấp loại kia tên côn đồ cắc ké.\r\n\r\n	Ở triệt để mất đi Merlin tung tích sau, mấy tên khốn kiếp liền hùng hùng hổ hổ chuẩn bị rời đi, nhưng liền ở người da đen kia tráng hán xoay người một khắc đó, một cái xoay tròn bóng chày côn liền gào thét từ trong bóng tối né hiện ra, mạnh mẽ nện ở sau gáy của hắn lên.\r\n\r\n	Cái này gia hỏa đều không hàng một tiếng, ngay tại máu tươi tung toé bên trong bò ở trên mặt đất, máu tươi ở hắn trên y phục chảy xuôi, hãy cùng chết rồi như thế. . .\r\n\r\n	Cái này quỷ dị động tĩnh đem chu vi 4 người triệt để dọa sợ, lá gan đó ít nhất cao gầy cái quay đầu liền chạy, nhưng này nhuốm máu bóng chày côn rồi lại từ trước mắt của hắn gào thét bay ra, một gậy nện ở hắn ngực.\r\n\r\n	Áo Khoác Bóng Tối bên trong Merlin đòn đánh này dốc hết sức, kết quả là là cái kia cao gầy cái cả người đều bị này trước mặt một đòn đánh về phía sau bay lên, hắn gào thét ngã trên mặt đất, thống khổ lăn mình. Cái này gia hỏa so với lão đại của hắn may mắn một ít, nhưng phỏng chừng cũng đoạn mấy chiếc xương sườn.\r\n\r\n	Còn lại ba người hoàn toàn bị kinh ngạc sững sờ, bọn họ cảm giác thật giống như là có cái thủ đoạn ác độc U Linh ở này trong hẻm nhỏ bồi hồi, loại kia không nhìn thấy người, chỉ có thể bị đánh sợ hãi, nhường còn lại ba người động cũng không dám động.\r\n\r\n	Trong bóng tối Merlin cười gằn một tiếng, hắn tay trái ném đi, cái kia nhuốm máu bóng chày côn bị ném xuống đất.\r\n\r\n	\"Ầm \"\r\n\r\n	Cái kia vang động đem ba người sợ hết hồn, bọn họ hầu như không tự chủ được chạy đi liền chạy.\r\n\r\n	Còn coi như bọn họ thông minh, là tách ra hướng về ba phương hướng chạy.\r\n', 5, 27, 'Lạc Huyền Thanh tiểu truyện'),
(20, '2019-12-11 13:11:12', 'Bị mắng cao gầy cái nhún vai một cái, chu vi mấy cái trang phục cổ quái kỳ lạ gia hỏa còn cạc cạc cười, một mặt cười trên sự đau khổ của người khác.\r\n\r\n	Mấy người này nhìn qua cũng không giống như là chuyên nghiệp cướp đoạt giả, bọn họ thậm chí không có một khẩu súng giới hộ thân, liền chứng minh những người này dù cho là ở địa ngục nhà bếp, cũng là đẳng cấp rất thấp loại kia tên côn đồ cắc ké.\r\n\r\n	Ở triệt để mất đi Merlin tung tích sau, mấy tên khốn kiếp liền hùng hùng hổ hổ chuẩn bị rời đi, nhưng liền ở người da đen kia tráng hán xoay người một khắc đó, một cái xoay tròn bóng chày côn liền gào thét từ trong bóng tối né hiện ra, mạnh mẽ nện ở sau gáy của hắn lên.\r\n\r\n	Cái này gia hỏa đều không hàng một tiếng, ngay tại máu tươi tung toé bên trong bò ở trên mặt đất, máu tươi ở hắn trên y phục chảy xuôi, hãy cùng chết rồi như thế. . .\r\n\r\n	Cái này quỷ dị động tĩnh đem chu vi 4 người triệt để dọa sợ, lá gan đó ít nhất cao gầy cái quay đầu liền chạy, nhưng này nhuốm máu bóng chày côn rồi lại từ trước mắt của hắn gào thét bay ra, một gậy nện ở hắn ngực.\r\n\r\n	Áo Khoác Bóng Tối bên trong Merlin đòn đánh này dốc hết sức, kết quả là là cái kia cao gầy cái cả người đều bị này trước mặt một đòn đánh về phía sau bay lên, hắn gào thét ngã trên mặt đất, thống khổ lăn mình. Cái này gia hỏa so với lão đại của hắn may mắn một ít, nhưng phỏng chừng cũng đoạn mấy chiếc xương sườn.\r\n\r\n	Còn lại ba người hoàn toàn bị kinh ngạc sững sờ, bọn họ cảm giác thật giống như là có cái thủ đoạn ác độc U Linh ở này trong hẻm nhỏ bồi hồi, loại kia không nhìn thấy người, chỉ có thể bị đánh sợ hãi, nhường còn lại ba người động cũng không dám động.\r\n\r\n	Trong bóng tối Merlin cười gằn một tiếng, hắn tay trái ném đi, cái kia nhuốm máu bóng chày côn bị ném xuống đất.\r\n\r\n	\"Ầm \"\r\n\r\n	Cái kia vang động đem ba người sợ hết hồn, bọn họ hầu như không tự chủ được chạy đi liền chạy.\r\n\r\n	Còn coi như bọn họ thông minh, là tách ra hướng về ba phương hướng chạy.\r\n', 5, 29, 'Lạc Huyền Thanh tiểu truyện'),
(21, '2019-12-13 09:40:24', 'Trầm Đường giản.\r\n\r\n	Trong suốt khe suối chậm rãi chảy xuôi, xanh nhạt bèo rong dưới đáy nước lung la lung lay, bèo rong ở giữa có thể thấy được ba bốn cân cá lớn bơi.\r\n\r\n	Ầm ầm ~!\r\n\r\n	Bọt nước văng khắp nơi, một đầu thật dài đuôi rắn đập ầm ầm bên dưới đánh ngất cá lớn, tiếp lấy đuôi rắn nhọn một cuốn đem cái kia cá lớn cuốn lên mang về, Bạch Vũ Quân dùng chiêu này ngày ngày có thể ăn vào mới mẻ cá lớn.\r\n\r\n	Bạch Vũ Quân ngồi tại cửa động bờ nước, hai chân hóa thành thân rắn nửa người nửa rắn.\r\n\r\n	Dùng tay nắm lấy cá lớn thuần thục bỏ mang cá móc nội tạng, cuối cùng tại khe suối bên trong rửa sạch sẽ vết máu xoay người trở lại trong động, một bàn tay rải phẳng, lòng bàn tay hội tụ yêu linh chuyển hóa làm hỏa diễm, một cái tay khác bắt lại cá lớn tại trên lửa trở mình nướng, tại học được làm ra ngọn lửa trước đó Bạch Vũ Quân ngày ngày ăn cá sống, có thể ăn no nhưng mà mùi vị không tốt.\r\n\r\n	Thịt cá khô vàng bốc lên hơi nóng, phát ra nồng đậm mùi thơm tràn ngập nho nhỏ sơn động.\r\n\r\n	Không phải là không muốn dùng củi lửa nướng cá, nơi này khắp nơi giọt nước châu giống như màn nước lỗ nào có củi khô, vì thoải mái dễ chịu đều biến thành nửa người nửa rắn trạng thái, có câu nói thế nào nói ấy nhỉ, không thể để cho hoàn cảnh thích ứng rắn mà là rắn đi thích ứng hoàn cảnh.\r\n\r\n	Ăn xong cá lại ngồi tại bờ nước trên tảng đá, đuôi rắn trong nước vung qua vung lại nhấc lên bọt nước chơi.\r\n\r\n	Ngẩng đầu lên nhìn về phía đỉnh đầu một đường bầu trời.\r\n\r\n	\"Bên ngoài. . . Hẳn là tuyết rơi a?\"\r\n\r\n	Tính ra thời gian cũng nhanh muốn ăn tết, bên ngoài sơn cốc gió lạnh lạnh thấu xương tuyết trắng mênh mang trong cốc lại bốn mùa như mùa xuân, sâu dưới lòng đất quả nhiên là đông ấm hè mát, rêu xanh vẫn như cũ xanh lục, trong đó mấy cái hình dáng giống nhện rêu nấm so đầu còn lớn hơn, ấm áp địa khí còn có không đông suối để muốn ngủ đông Bạch Vũ Quân không thể làm gì.\r\n\r\n	Sơn cốc chính là sơn cốc, sơn động chính là sơn động, không có mật thất cũng sẽ không có cao nhân tiền bối tọa hóa di bảo.\r\n\r\n	Trước đó cũng hoài nghi tới có phải hay không có động thiên khác, tại dùng hòn đá đập mười ngày sau triệt để từ bỏ, chuyện tốt là không thể nào, trừ phi ngủ ngon đi nằm mơ.\r\n\r\n	Đương nhiên, đáy cốc cũng là sẽ tuyết rơi, tiểu bông tuyết rơi vào giữa không trung liền sẽ tan đi, rơi xuống đều là tuyết đoàn.\r\n\r\n	Sơn cốc trên đỉnh, một nhánh cây nhỏ treo đầy bông vải giống như tuyết cầu.\r\n\r\n	Gió nhẹ thổi qua cành cây lay động, hướng phía dưới khom bên dưới tan mất tuyết cầu khôi phục thẳng tắp, mà đoàn kia tuyết cầu thẳng tắp rơi vào đáy cốc, tại Bạch Vũ Quân trước mắt phù phù một tiếng rơi vào khe suối nhanh chóng tan chảy biến mất, biến thành một nắm khe suối.\r\n\r\n	Lại một đoàn tuyết cầu hạ xuống, Bạch Vũ Quân vội vàng xoay người hướng về phía trước muốn đưa tay đón ở tuyết trắng.\r\n\r\n	Rầm rầm ~\r\n\r\n	Dây sắt bị kéo thẳng, tuyết cầu tại đầu ngón tay trước xẹt qua, còn kém từng chút một liền có thể nhận được cái kia tuyết đoàn.', 5, 30, 'Giao thừa'),
(22, '2019-12-13 09:40:36', 'Trầm Đường giản.\r\n\r\n Trong suốt khe suối chậm rãi chảy xuôi, xanh nhạt bèo rong dưới đáy nước lung la lung lay, bèo rong ở giữa có thể thấy được ba bốn cân cá lớn bơi.\r\n\r\n Ầm ầm ~!\r\n\r\n Bọt nước văng khắp nơi, một đầu thật dài đuôi rắn đập ầm ầm bên dưới đánh ngất cá lớn, tiếp lấy đuôi rắn nhọn một cuốn đem cái kia cá lớn cuốn lên mang về, Bạch Vũ Quân dùng chiêu này ngày ngày có thể ăn vào mới mẻ cá lớn.\r\n\r\n Bạch Vũ Quân ngồi tại cửa động bờ nước, hai chân hóa thành thân rắn nửa người nửa rắn.\r\n\r\n Dùng tay nắm lấy cá lớn thuần thục bỏ mang cá móc nội tạng, cuối cùng tại khe suối bên trong rửa sạch sẽ vết máu xoay người trở lại trong động, một bàn tay rải phẳng, lòng bàn tay hội tụ yêu linh chuyển hóa làm hỏa diễm, một cái tay khác bắt lại cá lớn tại trên lửa trở mình nướng, tại học được làm ra ngọn lửa trước đó Bạch Vũ Quân ngày ngày ăn cá sống, có thể ăn no nhưng mà mùi vị không tốt.\r\n\r\n Thịt cá khô vàng bốc lên hơi nóng, phát ra nồng đậm mùi thơm tràn ngập nho nhỏ sơn động.\r\n\r\n Không phải là không muốn dùng củi lửa nướng cá, nơi này khắp nơi giọt nước châu giống như màn nước lỗ nào có củi khô, vì thoải mái dễ chịu đều biến thành nửa người nửa rắn trạng thái, có câu nói thế nào nói ấy nhỉ, không thể để cho hoàn cảnh thích ứng rắn mà là rắn đi thích ứng hoàn cảnh.\r\n\r\n Ăn xong cá lại ngồi tại bờ nước trên tảng đá, đuôi rắn trong nước vung qua vung lại nhấc lên bọt nước chơi.\r\n\r\n Ngẩng đầu lên nhìn về phía đỉnh đầu một đường bầu trời.\r\n\r\n \"Bên ngoài. . . Hẳn là tuyết rơi a?\"\r\n\r\n Tính ra thời gian cũng nhanh muốn ăn tết, bên ngoài sơn cốc gió lạnh lạnh thấu xương tuyết trắng mênh mang trong cốc lại bốn mùa như mùa xuân, sâu dưới lòng đất quả nhiên là đông ấm hè mát, rêu xanh vẫn như cũ xanh lục, trong đó mấy cái hình dáng giống nhện rêu nấm so đầu còn lớn hơn, ấm áp địa khí còn có không đông suối để muốn ngủ đông Bạch Vũ Quân không thể làm gì.\r\n\r\n Sơn cốc chính là sơn cốc, sơn động chính là sơn động, không có mật thất cũng sẽ không có cao nhân tiền bối tọa hóa di bảo.\r\n\r\n Trước đó cũng hoài nghi tới có phải hay không có động thiên khác, tại dùng hòn đá đập mười ngày sau triệt để từ bỏ, chuyện tốt là không thể nào, trừ phi ngủ ngon đi nằm mơ.\r\n\r\n Đương nhiên, đáy cốc cũng là sẽ tuyết rơi, tiểu bông tuyết rơi vào giữa không trung liền sẽ tan đi, rơi xuống đều là tuyết đoàn.\r\n\r\n Sơn cốc trên đỉnh, một nhánh cây nhỏ treo đầy bông vải giống như tuyết cầu.\r\n\r\n Gió nhẹ thổi qua cành cây lay động, hướng phía dưới khom bên dưới tan mất tuyết cầu khôi phục thẳng tắp, mà đoàn kia tuyết cầu thẳng tắp rơi vào đáy cốc, tại Bạch Vũ Quân trước mắt phù phù một tiếng rơi vào khe suối nhanh chóng tan chảy biến mất, biến thành một nắm khe suối.\r\n\r\n Lại một đoàn tuyết cầu hạ xuống, Bạch Vũ Quân vội vàng xoay người hướng về phía trước muốn đưa tay đón ở tuyết trắng.\r\n\r\n Rầm rầm ~\r\n\r\n Dây sắt bị kéo thẳng, tuyết cầu tại đầu ngón tay trước xẹt qua, còn kém từng chút một liền có thể nhận được cái kia tuyết đoàn.', 5, 41, 'Giao thừa'),
(23, '2019-12-13 09:45:19', 'ong Trạch huyện.\r\n\r\n	Trường An tới triều đình thánh chỉ thong dong đến muộn, Long Trạch huyện dân chúng không chỉ có tự phát đổi tên sau đó còn viết vạn dân thư tấu lên triều đình sắc phong Thần Long xây dựng Long nữ miếu, sốt ruột dân chúng chờ không nổi triều đình trả lời bản thân trước tiên đem miếu cho xây lên, cũng là bởi vì địa phương phú hộ quý tộc quan lại hoặc là được chém hoặc là chạy trốn mới có thể như vậy hiệu suất cao.\r\n\r\n	Vạn dân thư đưa đến triều đình, bách quan cãi lộn không ngừng.\r\n\r\n	Hoàng đế có ý tứ là không sao cả, Thần Long xuất hiện xua tan mưa gió trấn sông ngự hồng là chuyện tốt, càng là bản thân thuận theo Thiên đạo biểu hiện, là tường thụy, quản hắn thật giả trước đồng ý lại nói.\r\n\r\n	Đám quan chức chia làm mấy phái, có ủng hộ bệ hạ, có không sao cả, còn lại một nửa là người phản đối.\r\n\r\n	Người phản đối cho rằng người đọc sách không nói chuyện yêu ma quỷ quái, nạn dân không biết thực hư nhất định là được cái kia yêu tà chỗ lừa gạt hẳn là lời lẽ nghiêm khắc cảnh cáo, trên đời căn bản cũng không có Thần Long tồn tại, đó bất quá là nghe sai đồn bậy.\r\n\r\n	Đám này tranh cãi vẫn thật là đoán đúng, cái kia đúng là cái yêu quái.\r\n\r\n	Hoàng đế nghe xong lúc ấy liền không vui, có ý tứ gì? Không có Thần Long? Vậy lão tử tự xưng chân long thiên tử chẳng phải là thêu dệt vô cớ? Mục đích không thuần ah!\r\n\r\n	Xây miếu phong Thần Long chuyện này liền kéo dài vô kỳ hạn, đi đường nơm nớp lo sợ già nua kinh khủng quần thần lại là tiên hiền Thánh Ngôn lại là đức chính An Bang đem hoàng đế một hồi tổn hại, tập tục phương diện có can đảm chửi hoàng đế đều là trung thần, nếu là bị hoàng đế đánh một trận cái kia càng là sẽ danh dương thiên hạ trở thành người đọc sách mẫu mực, kẻ sĩ đều lấy chống đối hoàng đế làm vinh.\r\n\r\n	Thân là hoàng đế ai còn không có chút tính bướng bỉnh, đám này lão đầu càng là phản đối hắn liền càng phải kiên trì, cãi nhau mấy tháng đi qua.\r\n\r\n	Sau đó, triều đình chờ được Long Trạch huyện dân chúng tự phát sửa lại huyện tên lại xây xong miếu thờ báo tin, dân chúng ý tứ rất đơn giản, các ngươi quá vết mực chính chúng ta chơi.\r\n\r\n	Lần này các lão thần xấu hổ, mấy vạn dân chúng tự phát hoạt động làm sao ngăn cản?\r\n\r\n	Phát binh? Vừa mới yên ổn lại muốn phát binh vẫn là bởi vì dân chúng địa phương xây miếu bái Thần liền cho người ta chém? Tựa như cái kia gạo nấu thành cơm vẫn chưa thể sinh khí.\r\n\r\n	Hoàng đế vui như điên, nghĩ thầm cái này Long Trạch dân chúng còn rất thuận mắt, dứt khoát để cho bọn họ thoả mãn.\r\n\r\n	Mùa xuân, thánh chỉ rốt cục phát ra ngoài, vết mực một mùa đông.\r\n\r\n	Long Trạch huyện tân nhiệm huyện lệnh khua chiêng gõ trống hoan nghênh thiên sứ vào thành, sau đó triệu tập dân chúng tại lúc trước Thuần Dương trụ sở hiện tại Long nữ miếu trước hội nghị, một hồi vỗ mông ngựa truyền chỉ thái giám sung sướng đê mê, cười tủm tỉm lên đài tuyên đọc thánh chỉ.\r\n', 5, 33, 'Tự do'),
(24, '2019-12-13 15:24:56', 'Bị một con rắn độc ghi nhớ cũng không phải cái gì chuyện tốt.\r\n\r\n	Sáng sớm.\r\n\r\n	\"Gào. . . Gào khóc. . .\"\r\n\r\n	Trong vùng đầm lầy truyền ra thú rống, chim thú sợ quá chạy mất, tại trên cây ngủ Bạch Vũ Quân giật mình suýt nữa rơi xuống, ngẩng đầu lên mơ mơ màng màng lau sạch sẽ khóe miệng nước bọt.\r\n\r\n	\"Tên kia sẽ không phải thật ăn bữa cơm đêm qua trúng độc a?\"\r\n\r\n	Khí độc tràn ngập đầm lầy tiếng rống không ngừng, nghe thanh âm giống như là hổn hển, càng nhiều là khó chịu kêu thảm.\r\n\r\n	Bạch Vũ Quân đang suy nghĩ làm sao ăn.\r\n\r\n	Da cá sấu giáp quá cứng ăn đi có thể tiêu hóa không tốt, toàn bộ nuốt quá nguy hiểm còn không có cái gì dinh dưỡng, ngược lại là có thể cân nhắc ăn đi cá sấu trái tim, món đồ kia hẳn là rất bổ.\r\n\r\n	Bây giờ không phải là đi vào đánh nhau thời điểm, vừa mới trúng độc chưa khuếch tán sâu tận xương tủy cá sấu còn có sức đánh một trận.\r\n\r\n	Qua cái gần nửa ngày đợi độc dịch phát tác lại đi tiêu diệt nó, hiện nay vây xem còn tốt, rơi vào điên cuồng mãnh thú mới là đáng sợ nhất, tục ngữ nói ngang sợ liều mạng, điên cuồng cá sấu là thuộc về không muốn sống cái loại này, nó cái kia so hạch đào lớn hơn không được bao nhiêu đại não tạo ra linh trí rất dễ dàng làm chuyện điên rồ.\r\n\r\n	Duỗi người một cái, uyển chuyển đường cong liếc mắt một cái là rõ mồn một.\r\n\r\n	Thu hồi cây dù cùng chén đĩa, lại từ rương sách bên trong móc ra một cây cây sáo, không lớn rương sách có thể xưng bách bảo rương, rất thoả đáng du lịch thiết yếu đồ vật.\r\n\r\n	Dưới cây, một con thỏ hoang thỉnh thoảng vểnh tai, đợi phát giác cái kia gầm rú cách rất xa sau cúi đầu tiếp tục ăn cỏ.\r\n\r\n	Ba múi miệng nhai từng chút một ăn đi cây cỏ.\r\n\r\n	Đột nhiên, một hồi chói tai tạp âm đem thỏ rừng giật nảy mình, thanh âm kia cùng ma âm không khác khó nghe phải chết, thỏ tức giận cũng cắn người, thỏ rừng bị kích thích muốn tìm cái kia phát ra tạp âm gia hỏa quyết đấu!\r\n\r\n	Thống khổ thú rống, khó nghe tiếng địch, tại đây vắng vẻ sơn lâm tạo thành mười phần quái dị hòa âm.\r\n\r\n	Rốt cục, cái kia chói tai tạp âm dừng lại, tiếp lấy tạch tạch một tiếng. . .\r\n\r\n	Nửa đoạn cây sáo tại trên cành cây bắn hai lần hướng tức giận thỏ rừng rơi đi, băng một tiếng, đập ở thỏ rừng trên đầu bắn qua một bên, vừa mới còn khí thế hung hăng thỏ nhảy lên cao ba thước vèo một cái chui vào đất lỗ không thấy tăm hơi.\r\n\r\n	Trên cây, Bạch Vũ Quân thở dài.\r\n\r\n	Có chí ắt làm nên! Không có cái gì có thể làm khó rắn! Vừa mới suy sụp tinh thần quét sạch sành sanh lại lật ra một cây cây sáo tiếp tục thổi, hòa âm lần nữa vang lên. . .', 13, 1, 'Đầm lầy mãnh thú'),
(25, '2019-12-13 15:25:49', 'Địa Ngục Biên Cảnh trên mặt đất, bán ma cõng ánh chớp tung toé chiến chuy, chuyên chú nhìn chằm chằm phía sau cái kia phủ kín đại địa huyết nhục.\r\n\r\n	Đó là Ten Rings Thánh Giả, cầm trong tay mười nhẫn, còn nắm giữ đặc thù sức mạnh Mandarin huyết nhục, hắn lỗ mãng ở Địa Ngục Biên Cảnh khiêu chiến ba phần lực lượng dưới bán ma, kết quả rơi xuống hiện ở cái này lúng túng mức độ.\r\n\r\n	Địa Ngục Biên Cảnh, nơi này nhưng là Địa ngục đứa con nhóm cơ bản bàn, nơi đây nữ vương Illyana là Merlin bạn tốt, còn thiếu một chút trở thành thân mật hơn \"Bằng hữu\", bởi vậy hắn ở đây tương đương tự do, mà thân là bán ma, ở này Địa ngục cùng với những cái khác chiều không gian đan xen địa phương, ác ma lực sẽ phun trào càng thêm bàng bạc.\r\n\r\n	Ở đây chiến đấu, cảm giác được thư thích Merlin có thể phát huy ra 12 phần sức mạnh.\r\n\r\n	Nhưng ngược lại, sinh ở hiện thế, khéo hiện thế Mandarin ở đây thì lại sẽ bị hạn chế, hắn cùng Illyana lại không quen, Illyana sẽ không đối với hắn mở ra một con đường, Địa Ngục Biên Cảnh sức mạnh sẽ áp chế hắn, hắn ở đây có thể phát huy ra 8 phân sức mạnh đã là tương đối khá.\r\n\r\n	Vốn là không đến Merlin mạnh mẽ, còn ở cứ kéo dài tình huống như thế lần thứ hai bị suy yếu, một trận chiến đấu diễn biến thành hiện tại này cục diện lúng túng, cũng là chẳng có gì lạ.\r\n\r\n	Mà Merlin nhất định phải chiến tranh tràng thả ở Địa Ngục Biên Cảnh, cũng không phải sợ sệt chính mình đánh không lại Mandarin, hắn chỉ là không muốn để cho tam phân lộ ra ánh sáng, không muốn gợi ra lần trước Tà Thần Hive tương tự tình hình, chỉ đến thế mà thôi.\r\n\r\n	Nhưng cứ việc đã bị đạt thành vụn vặt huyết nhục tro cặn, lấy một loại chung quanh rải rác tư thái vắt ngang đặt hoang vu trên mặt đất, nhưng này chút tản ra huyết nhục nhưng vẫn như cũ có sức sống.\r\n\r\n	Merlin cùng Icarus cũng có thể cảm giác được, thuộc về Mandarin sức sống cũng không có liền như vậy tiêu vong, mà là bị lấy một loại quái lạ hình thức, \"Khóa\" ở mỗi một giọt máu, mỗi một miếng thịt bên trong.\r\n\r\n	Những máu thịt kia ở nối liền, lại như là có đặc thù nào đó sức mạnh ở đưa chúng nó một lần nữa tổ hợp lại với nhau.\r\n\r\n	Khung cảnh này lại như là Merlin vừa vặn một quyền phá hủy Mandarin thân thể hình ảnh lộn ngược, ở bán ma nhìn kỹ bên trong, những kia tản ra huyết nhục, chính trực từng điểm từng điểm một lần nữa hội tụ thành hoàn thành thân thể.\r\n\r\n	Tổ tiên thành khung xương, lại bao trùm huyết nhục cùng khí quan, cuối cùng là bề ngoài da dẻ cùng tứ chi.\r\n\r\n	Nói thật, khung cảnh này có chút buồn nôn.\r\n\r\n	\"Mười nhẫn ở ngoài sức mạnh, có thể nhường hắn khởi tử hoàn sinh?\"', 13, 2, 'Chém hồn giả'),
(26, '2019-12-13 15:28:39', 'Bị một con rắn độc ghi nhớ cũng không phải cái gì chuyện tốt.\r\n\r\n	Sáng sớm.\r\n\r\n	\"Gào. . . Gào khóc. . .\"\r\n\r\n	Trong vùng đầm lầy truyền ra thú rống, chim thú sợ quá chạy mất, tại trên cây ngủ Bạch Vũ Quân giật mình suýt nữa rơi xuống, ngẩng đầu lên mơ mơ màng màng lau sạch sẽ khóe miệng nước bọt.\r\n\r\n	\"Tên kia sẽ không phải thật ăn bữa cơm đêm qua trúng độc a?\"\r\n\r\n	Khí độc tràn ngập đầm lầy tiếng rống không ngừng, nghe thanh âm giống như là hổn hển, càng nhiều là khó chịu kêu thảm.\r\n\r\n	Bạch Vũ Quân đang suy nghĩ làm sao ăn.\r\n\r\n	Da cá sấu giáp quá cứng ăn đi có thể tiêu hóa không tốt, toàn bộ nuốt quá nguy hiểm còn không có cái gì dinh dưỡng, ngược lại là có thể cân nhắc ăn đi cá sấu trái tim, món đồ kia hẳn là rất bổ.\r\n\r\n	Bây giờ không phải là đi vào đánh nhau thời điểm, vừa mới trúng độc chưa khuếch tán sâu tận xương tủy cá sấu còn có sức đánh một trận.\r\n\r\n	Qua cái gần nửa ngày đợi độc dịch phát tác lại đi tiêu diệt nó, hiện nay vây xem còn tốt, rơi vào điên cuồng mãnh thú mới là đáng sợ nhất, tục ngữ nói ngang sợ liều mạng, điên cuồng cá sấu là thuộc về không muốn sống cái loại này, nó cái kia so hạch đào lớn hơn không được bao nhiêu đại não tạo ra linh trí rất dễ dàng làm chuyện điên rồ.\r\n\r\n	Duỗi người một cái, uyển chuyển đường cong liếc mắt một cái là rõ mồn một.\r\n\r\n	Thu hồi cây dù cùng chén đĩa, lại từ rương sách bên trong móc ra một cây cây sáo, không lớn rương sách có thể xưng bách bảo rương, rất thoả đáng du lịch thiết yếu đồ vật.\r\n\r\n	Dưới cây, một con thỏ hoang thỉnh thoảng vểnh tai, đợi phát giác cái kia gầm rú cách rất xa sau cúi đầu tiếp tục ăn cỏ.\r\n\r\n	Ba múi miệng nhai từng chút một ăn đi cây cỏ.\r\n\r\n	Đột nhiên, một hồi chói tai tạp âm đem thỏ rừng giật nảy mình, thanh âm kia cùng ma âm không khác khó nghe phải chết, thỏ tức giận cũng cắn người, thỏ rừng bị kích thích muốn tìm cái kia phát ra tạp âm gia hỏa quyết đấu!\r\n\r\n	Thống khổ thú rống, khó nghe tiếng địch, tại đây vắng vẻ sơn lâm tạo thành mười phần quái dị hòa âm.\r\n\r\n	Rốt cục, cái kia chói tai tạp âm dừng lại, tiếp lấy tạch tạch một tiếng. . .\r\n\r\n	Nửa đoạn cây sáo tại trên cành cây bắn hai lần hướng tức giận thỏ rừng rơi đi, băng một tiếng, đập ở thỏ rừng trên đầu bắn qua một bên, vừa mới còn khí thế hung hăng thỏ nhảy lên cao ba thước vèo một cái chui vào đất lỗ không thấy tăm hơi.\r\n\r\n	Trên cây, Bạch Vũ Quân thở dài.\r\n\r\n	Có chí ắt làm nên! Không có cái gì có thể làm khó rắn! Vừa mới suy sụp tinh thần quét sạch sành sanh lại lật ra một cây cây sáo tiếp tục thổi, hòa âm lần nữa vang lên. . .', 13, 3, 'Trước miếu thành hoàng'),
(28, '2019-12-13 17:16:14', 'abcde', 12, 1, 'Thái Khâu Chi Thượng'),
(29, '2019-12-13 17:19:45', 'abced', 16, 1, 'cde');

-- --------------------------------------------------------

--
-- Table structure for table `tacgia`
--

CREATE TABLE `tacgia` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tacgia`
--

INSERT INTO `tacgia` (`id`, `ten`, `anh`) VALUES
(1, 'Trạch Trư', 'authur_1'),
(3, 'Văn Sao Công', 'authur_2'),
(4, 'Dịch Thanh Phong', 'authur_2'),
(5, 'Cổ Chân Nhân', 'authur_4.png'),
(6, 'Vong Ngữ', 'authur_5'),
(7, 'Nhĩ Căn', 'authur_5'),
(8, 'Thụ Hạ Dã HỒ', 'authur_6');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_truyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `tag`, `id_truyen`) VALUES
(1, 'Cô Nhi', 5),
(2, 'Cô Nhi', 4),
(3, 'Đặc Công', 5),
(4, 'Dũng Mãnh', 5),
(5, 'Luyện Công Lưu', 5),
(6, 'Cơ Trí', 6),
(7, 'Commic', 6);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'NO NAME',
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.png',
  `createat` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `username`, `password`, `ten`, `avatar`, `createat`) VALUES
(1, 'skylie', '123', 'Hạ Vũ', 'ava2.jpg', '2019-12-12 13:23:42'),
(2, 'abc', '456', 'Nguyễn Văn Minh', 'ava3.jpg\r\n', '2019-12-12 13:23:42'),
(3, 'Nấm rơm', '111', 'Điêu Thuyền', 'ava4.jpg\r\n', '2019-12-12 13:23:42'),
(9, 'thanhan', '$2y$10$DW5G2ufVOengGY07BnD1fOjrSQ0il528xFbWXL8cm1jTmZzlykfYK', 'NO NAME', 'default.png', '2019-12-12 14:54:07'),
(10, 'abcd', '$2y$10$Dy9j4S1OnA.JiubXDVF5Q.eiL9KV4YgtOaiYLwWDVedX8tRVoicx.', 'Hello', 'default.png', '2019-12-12 21:11:27'),
(11, 'abcde', '$2y$10$zucfJ.BQ3bRg0Z.C2AdjgOqwl5CCURMA9fpLQuVjdL8YR/Q6uPLme', 'NO NAME', 'default.png', '2019-12-13 16:34:52');

--
-- Triggers `taikhoan`
--
DELIMITER $$
CREATE TRIGGER `add_id_to_thanh_vien` AFTER INSERT ON `taikhoan` FOR EACH ROW INSERT INTO thanhvien (id_taikhoan)
    VALUES (NEW.id)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `id` int(11) NOT NULL,
  `id_taikhoan` int(11) NOT NULL,
  `level` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`id`, `id_taikhoan`, `level`) VALUES
(1, 2, 0),
(2, 3, 0),
(3, 9, 0),
(4, 10, 0),
(6, 11, 0);

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`id`, `ten`) VALUES
(1, 'Tiên Hiệp'),
(2, 'Huyền Huyễn'),
(3, 'Khoa Huyễn'),
(4, 'Đô Thi'),
(5, 'Kỳ Huyễn'),
(6, 'Võ Hiệp'),
(7, 'Lịch Sử');

-- --------------------------------------------------------

--
-- Table structure for table `truyen`
--

CREATE TABLE `truyen` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_tacgia` int(11) NOT NULL,
  `id_theloai` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `trangthai` int(1) NOT NULL,
  `anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.png',
  `namxb` year(4) NOT NULL,
  `mota` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `truyen`
--

INSERT INTO `truyen` (`id`, `ten`, `id_tacgia`, `id_theloai`, `id_admin`, `trangthai`, `anh`, `namxb`, `mota`, `luotxem`) VALUES
(1, 'Mục Thần Ký', 1, 5, 1, 0, '1.png', 2015, 'Đại khư tổ huấn nói, trời tối, đừng đi ra ngoài.  Đại khư tàn lão thôn già yếu tàn tật bọn họ từ bờ sông nhặt được một đứa bé, lấy tên Tần Mục, ngậm đắng nuốt cay đem hắn nuôi lớn. Một ngày này màn đêm buông xuống, bóng tối bao trùm đại khư, Tần Mục đi ra cửa chính. . .  Làm gió xuân bên trong nhộn nhạo nhân vật phản diện đi!  Người mù nói với hắn.  Tần Mục nhân vật phản diện chi lộ, ngay tại quật khởi!', 284),
(2, 'Cửu Thiên', 7, 5, 1, 0, '2.png', 2014, '', 4767),
(3, 'Hán Thiên Đế', 5, 5, 1, 0, '3.png', 1997, '', 587),
(4, 'Nhất Niệm Vĩnh Hằng', 3, 2, 1, 0, '4.png', 1998, '', 5915),
(5, 'Chấp Ma', 5, 5, 1, 0, 'default.png', 2009, 'Một đời Đan Đế bị tình cảm chân thành phản bội bất hạnh ngã xuống. . . Trăm năm sau, trùng sinh ở tại Thần Hoang đại lục cùng tên trên người thiếu niên! Nghìn năm đế công, người mang Thần huyết, lại cháy đấu thần chi lộ. Chém cừu địch, đoạt Thần Vị, vạn cổ chư thiên, duy ngã bất diệt! . . . Chính là ta, toàn bộ cầm lại! Nợ ta, chuẩn bị cho tốt trả sao. . .', 260),
(6, 'Lược Thiên Ký', 1, 4, 1, 0, '5.png', 2020, '', 5011),
(7, 'Hàn Môn Quý Tử', 4, 1, 1, 0, '6.png', 2013, '', 11481),
(8, 'Hàn Môn Quý Tử', 5, 5, 1, 0, '7.png', 2001, '', 2999),
(9, 'Siêu Duy Thuật Sĩ', 4, 7, 1, 0, 'default.png', 2016, 'Vu sư địa vị, tại các đại lục cùng hiện vị diện bên trong, siêu nhiên vô thượng.\r\n\r\nThần bí, trí tuệ, tàn nhẫn, huyết tinh, nghiễm nhiên là Vu sư đại danh từ.\r\n', 7),
(11, 'Tân Bạch Xà Vấn Tiên', 7, 4, 1, 0, 'morebook8.jpg', 2014, 'Quay đầu trong nháy mắt, mây trôi trong chốc lát.\r\n\r\nTử vong là kết thúc cũng là khởi đầu mới, hoa nở hoa tàn vòng đi vòng lại luân hồi không ngừng, chúng sinh có thể làm chỉ có thả xuống chấp niệm thuận theo tự nhiên.\r\n\r\nNhân sinh không được như ý bệnh nan y bỏ mình, mang theo ký ức chuyển thế trùng sinh làm bạch xà, tuế nguyệt trôi qua, thuộc về nhân loại cái kia bộ phận ký ức dần dần bị thú tính áp chế, rắn chính là rắn, mãi mãi cũng không phải chân chính nhân loại.\r\n\r\nBiến thân nữ xà yêu tìm kiếm Tiên đạo.', 3),
(12, 'Thái Khâu Chi Thượng', 3, 6, 2, 0, 'pic11.jpg', 2015, 'Đây là một cái truyền kỳ gia tộc tại tàn khốc trong Tu Chân giới quật khởi mạnh mẽ cố sự.\r\nGia tộc, huyết mạch, truyền thừa. Mỗi một vị từ tộc từ ở bên trong lấy được chữ lót tộc nhân đều phải nhận lãnh một phần của mình trách nhiệm. Đem Thái Khâu trở thành một loại tín ngưỡng, đem huyết mạch trở thành một loại ràng buộc. Tất cả Lý thị tộc nhân đều biết rõ: Thái Khâu sơn chung quy là chúng ta Lý gia Thái Khâu sơn!\r\nYêu thú cấp bặc\r\nNhất giai Yêu thú đối ứng Luyện Khí sơ kỳ cùng Luyện Khí trung kỳ\r\n\r\nNhị giai Yêu thú đối ứng Luyện Khí hậu kỳ\r\n\r\nTam giai Yêu thú đối ứng Trúc Cơ kỳ\r\n\r\nTứ giai Yêu thú đối ứng Kim Đan kỳ', 2),
(13, 'Thái Khâu Chi Thượng ', 3, 3, 2, 0, 'pic11.jpg', 2013, 'Đây là một cái truyền kỳ gia tộc tại tàn khốc trong Tu Chân giới quật khởi mạnh mẽ cố sự.\r\nGia tộc, huyết mạch, truyền thừa. Mỗi một vị từ tộc từ ở bên trong lấy được chữ lót tộc nhân đều phải nhận lãnh một phần của mình trách nhiệm. Đem Thái Khâu trở thành một loại tín ngưỡng, đem huyết mạch trở thành một loại ràng buộc. Tất cả Lý thị tộc nhân đều biết rõ: Thái Khâu sơn chung quy là chúng ta Lý gia Thái Khâu sơn!\r\nYêu thú cấp bặc\r\nNhất giai Yêu thú đối ứng Luyện Khí sơ kỳ cùng Luyện Khí trung kỳ\r\n\r\nNhị giai Yêu thú đối ứng Luyện Khí hậu kỳ\r\n\r\nTam giai Yêu thú đối ứng Trúc Cơ kỳ\r\n\r\nTứ giai Yêu thú đối ứng Kim Đan kỳ', 10),
(15, 'Tân Bạch Xà Vấn Tiên', 5, 3, 2, 0, 'Screen Shot 2019-12-13 at 4.00.46 PM.png', 2014, 'abcd', 0),
(16, 'abcd', 5, 3, 2, 0, 'Screen Shot 2019-12-13 at 4.00.05 PM.png', 2012, 'cdef', 8);

-- --------------------------------------------------------

--
-- Table structure for table `truyen_thanhvien`
--

CREATE TABLE `truyen_thanhvien` (
  `id_truyen` int(11) NOT NULL,
  `id_thanhvien` int(11) NOT NULL,
  `yeuthich` int(1) DEFAULT 0,
  `theodoi` int(1) NOT NULL DEFAULT 0,
  `dexuat` int(1) NOT NULL DEFAULT 0,
  `rate` int(1) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `truyen_thanhvien`
--

INSERT INTO `truyen_thanhvien` (`id_truyen`, `id_thanhvien`, `yeuthich`, `theodoi`, `dexuat`, `rate`) VALUES
(5, 1, 1, 0, 1, 8),
(5, 2, 1, 1, 0, 3),
(7, 1, 0, 0, 0, 5),
(7, 1, 0, 0, 0, 5),
(5, 4, 1, 1, 1, 3),
(3, 4, 0, 0, 0, 3),
(8, 4, 0, 0, 0, 4),
(6, 4, 1, 1, 0, 3),
(7, 4, 1, 1, 0, 4),
(1, 4, 0, 1, 1, 3),
(1, 6, 1, 0, 0, 3),
(16, 4, 0, 0, 0, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_admin_account` (`id_taikhoan`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_thanhvien` (`id_thanhvien`),
  ADD KEY `id_truyen` (`id_truyen`);

--
-- Indexes for table `chuong`
--
ALTER TABLE `chuong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_truyen` (`id_truyen`);

--
-- Indexes for table `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tag_truyen` (`id_truyen`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_thanhvien_taikhoan` (`id_taikhoan`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `truyen`
--
ALTER TABLE `truyen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_truyen_admin` (`id_admin`),
  ADD KEY `fk_truyen_theloai` (`id_theloai`),
  ADD KEY `fk_truyen_tacgia` (`id_tacgia`);

--
-- Indexes for table `truyen_thanhvien`
--
ALTER TABLE `truyen_thanhvien`
  ADD KEY `id_thanhvien` (`id_thanhvien`),
  ADD KEY `id_truyen` (`id_truyen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `chuong`
--
ALTER TABLE `chuong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tacgia`
--
ALTER TABLE `tacgia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `truyen`
--
ALTER TABLE `truyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_admin_account` FOREIGN KEY (`id_taikhoan`) REFERENCES `taikhoan` (`id`);

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`id_thanhvien`) REFERENCES `thanhvien` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`id_truyen`) REFERENCES `truyen` (`id`);

--
-- Constraints for table `chuong`
--
ALTER TABLE `chuong`
  ADD CONSTRAINT `chuong_ibfk_1` FOREIGN KEY (`id_truyen`) REFERENCES `truyen` (`id`);

--
-- Constraints for table `tag`
--
ALTER TABLE `tag`
  ADD CONSTRAINT `fk_tag_truyen` FOREIGN KEY (`id_truyen`) REFERENCES `truyen` (`id`);

--
-- Constraints for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD CONSTRAINT `fk_thanhvien_taikhoan` FOREIGN KEY (`id_taikhoan`) REFERENCES `taikhoan` (`id`);

--
-- Constraints for table `truyen`
--
ALTER TABLE `truyen`
  ADD CONSTRAINT `fk_truyen_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `fk_truyen_tacgia` FOREIGN KEY (`id_tacgia`) REFERENCES `tacgia` (`id`),
  ADD CONSTRAINT `fk_truyen_theloai` FOREIGN KEY (`id_theloai`) REFERENCES `theloai` (`id`);

--
-- Constraints for table `truyen_thanhvien`
--
ALTER TABLE `truyen_thanhvien`
  ADD CONSTRAINT `truyen_thanhvien_ibfk_1` FOREIGN KEY (`id_thanhvien`) REFERENCES `thanhvien` (`id`),
  ADD CONSTRAINT `truyen_thanhvien_ibfk_2` FOREIGN KEY (`id_truyen`) REFERENCES `truyen` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
