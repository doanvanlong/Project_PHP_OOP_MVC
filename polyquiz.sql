-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 16, 2022 lúc 06:13 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `polyquiz`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `A` text COLLATE utf8_unicode_ci NOT NULL,
  `B` text COLLATE utf8_unicode_ci NOT NULL,
  `C` text COLLATE utf8_unicode_ci NOT NULL,
  `D` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `question`
--

INSERT INTO `question` (`id`, `subject_id`, `question`, `answer`, `A`, `B`, `C`, `D`) VALUES
(13, 17, ' Có mấy loại Service?', ' D', ' 3', ' 4', ' 1', ' 2'),
(15, 17, ' Khi nào phương thức ServiceConnection.onServiceConnected được gọi?', ' A', ' Sau khi một thành phần gọi Context.startService()', ' Sau khi một thành phần gọi Context.bindService()', ' Sau khi BroadcastReceiver nhận một Intent được gửi bởi Service', ' Khi một Service gọi Context.startActivity()'),
(16, 17, ' Câu nào là đúng khi đề cập đến Service?', ' D', ' Các ứng dụng khác nhau không thể truy cập đến các Service của chính nó', ' Tất cả phương án đều đúng', ' Lớp Service luôn luôn được truy cập bởi tất cả ứng dụng Android khác cài trên thiết bị', ' Service có thể chạy nền vô hạn kể cả khi thành phần khởi tạo Service đã bị hủy'),
(18, 17, ' Trong IntentService onBind mặc định trả lại giá trị nào?', ' B', ' -1', ' null', ' 0', ' \"\"'),
(19, 17, ' Phương thức stopSelf dùng để làm gì?', ' D', ' Dừng thông báo notification tới người dùng', ' Dừng chương trình', ' Dừng kết nối Service với Sqlite', ' Dừng Service'),
(20, 17, ' Bạn nên giải phóng tài nguyên mà Service sử dụng trong phương thức nào?', ' C', ' onPause', ' pauseService', ' onDestroy', ' startService'),
(21, 17, ' Để hủy Service dùng phương thức nào?', ' B', ' PauseService', ' StopService', ' PauseServices', ' StopServices'),
(22, 17, ' Làm thế nào để disable một Broadcast Receiver khi nó đã được đăng ký trong AndroidManifest.xml?', ' D', ' Sử dụng lớp PackageReceiverManager', ' Sử dụng lớp BroadcastReceiver', ' Sử dụng lớp BroadcastReceiverManger', ' Sử dụng lớp PackageManager'),
(23, 17, ' Có mấy cách phát  nhận broadcast receiver?', ' B', ' 1', ' 2', ' 4', ' 3'),
(24, 17, ' Khi sử dụng Intent.ACTION_BOOT_COMPLETED  hệ thống sẽ broadcast mấy lần?', ' B', ' 4', ' 1', ' 3', ' 2'),
(25, 17, ' Vòng đời của Broadcast Receiver bao gồm mấy phương thức?', ' A', ' 1', ' 2', ' 4', ' 3'),
(26, 17, ' Lệnh sau  dùng để làm gì? \\u003creceiver             android:name=\".MyCallReceiver\"             android:exported=\"false\" \\u003e  \\u003c/receiver\\u003e', ' D', ' Disable receiver MyCallReceiver', ' Khai báo MyCallReceiver là broadcast hệ thống', ' Cho phép ứng dụng Calendar của hệ thống gửi broadcast tới receiver MyCallReceiver', ' Cấm ứng dụng khác gửi broadcast tới receiver MyCallReceiver'),
(27, 17, ' Nếu ứng dụng của bạn ở trạng thái foreground  bạn chỉ muốn ứng dụng chỉ nhận broadcast nhất định khi nó active  bạn phải làm gì?', ' D', ' Load Intent thông qua menu hoặc Action Bar', ' Đăng ký BroadcastReceiver với mức độ ưu tiên thấp', ' Đăng ký động BroadcastReceiver với mức độ ưu tiếp thấp.Sử dụng abortBroadcast lúc runtime để ngăn cản gửi', ' Đăng ký động BroadcastReceiver trong onResume và hủy đăng ký trong onPause'),
(28, 18, ' Điều khiển được sử dụng để hiển thị nội dụng trang web trong ứng dụng Android?', ' B', ' Button', ' WebView', ' Spinner', ' EditText'),
(29, 18, ' Đối với URLConnection sử dụng phương thức nào để thiết lập timeout cho connection?', ' D', ' setURLTimeout()', ' setInternetTimeout()', ' setTimeout()', ' setConnectTimeout()'),
(30, 18, ' Cho đoạn mã lệnh sau:wv.setWebChromeClient(new WebChromeClient() { @Override public void onReceivedTitle(WebView view String title) { getWindow().setTitle(title); } });Hãy cho biết đoạn lệnh trên dùng để làm gì?', ' A', ' Thay đổi title của trang web', ' Đóng trang web', ' Thay đổi nội dung của trang web', ' Lấy thông tin title của trang web'),
(31, 18, ' Sử dụng lớp nào để truy cập và thay đổi thông tin trên trình duyệt mặc định của hệ điều hành Android?', ' D', ' WebClient', ' WebSafariClient', ' WebFirefoxClient', ' WebViewClient'),
(32, 18, ' Câu nào là sai đối với WebView?', ' B', ' Không có widget cho brownser activity', ' Không thể sử dụng tag trong XML layout', ' Click vào link sẽ gọi trình duyệt', ' Có thể sử dụng tag trong XML layout'),
(33, 18, ' Phương thức nào của WebSettings để cho phép WebView hỗ trợ JavaScript?', ' D', ' setJavaScriptEnabled(false)', ' setJavaScript(true)', ' setJavaScriptEnable(true)', ' setJavaScriptEnabled(true)'),
(34, 18, ' Khi thời gian kết nối đến một URL quá timeout phương thức getInputStream() sẽ đưa ra ngoại lệ nào?\"', ' C', ' java.net.TimeoutException', ' java.net.SocketException', ' java.net.SocketTimeoutException', ' java.net.SocketTimeout'),
(35, 18, ' Chương trình sử dụng WebView phải có quyền gì?', ' A', ' android.permission.AUTHENTICATE_ACCOUNTS', ' android.permission.BIND_APPWIDGET', ' android.permission.INTERNET', ' android.permission.BIND_INPUT_METHOD'),
(36, 18, ' Sử dụng phương thức nào để lấy thông tin tiêu đề trên trang web chạy trên trình duyệt?', ' C', ' onReceiveTitle', ' onReceivedHeader', ' onReceivedTitle', ' onReceiveHeader'),
(37, 18, ' Để tải thông tin qua HTTP chúng ta phải làm gì?', ' C', ' Sử dụng HttpGet', ' Không thể tải thông tin qua HTTP', ' Sử dụng thư viện chuẩn của Java', ' Sử dụng URLRequesting'),
(38, 18, ' URI nào được sử dụng để lấy bookmark của trình duyệt?', ' B', ' content://firefox/bookmarks', ' content://browser/bookmarks', ' content://chrome/bookmarks', ' content://safari/bookmarks'),
(39, 18, ' Để lưu trữ SQLite trên thẻ nhớ phải cung cấp quyền gì trong Android Manifest?', ' B', ' android.permission.ACCESS_CHECKIN_PROPERTIES', ' android.permission.WRITE_EXTERNAL_STORAGE', ' android.permission.ACCESS_CHECKIN_PROPERTIES', ' android.permission.WRITE_SETTINGS'),
(40, 18, ' Để sử dụng ContentProvider truy cập danh sách cuộc gọi gần đây bạn phải bổ sung thêm quyền gì vào Android Manifest?', ' C', ' android.permission.READ_CALLS', ' android.permission.READ_CALL', ' android.permission.READ_CALL_LOG', ' android.permission.READ_HISTORY'),
(41, 4, ' Kiểm thử nào không nằm trong kiểm thử hệ thống?', ' D', ' Installation tests', ' Performance tests', ' GUI tests', ' Unit test'),
(42, 4, ' Kiểm thử nào được sử dụng để kiểm thử hoạt động của các thành phần khi chúng làm việc chung với nhau?', ' B', ' Kiểm thử đơn vị', ' Kiểm thử tích hợp', ' Kiểm thử chấp nhận', ' Kiểm thử giao diện'),
(43, 4, ' Android sử dụng Framework nào để kiểm thử đơn vị?', ' A', ' JUnit', ' FUnit', ' NUnit', ' AUnit'),
(44, 4, ' Trong JUnit phương thức nào được sử dụng để kiểm tra một giá trị có phải Null hay không?', ' D', ' confirmNull', ' assertNulls', ' confirmNulls', ' assertNull'),
(45, 4, ' Trong JUnit test case  phương thức nào được sử dụng để tạo đối tượng và khởi tạo giá trị cho các đối tượng?', ' B', ' tearingDown()', ' setUp()', ' settingUp()', ' tearDown()'),
(46, 4, ' Kiểm tra việc lưu thông tin trạng thái của Activity trong phương thức nào?', ' B', ' onSearchRequested', ' onPause', ' onKeyUp', ' onNavigateUp'),
(47, 4, ' Lớp nào không nằm trong gói android.test.mock?', ' D', ' MockContext', ' MockContentResolver', ' MockCursor', ' MockResource'),
(48, 4, ' Trong JUnit  phương thức nào được sử dụng để so sánh hai giá trị có bằng nhau hay không?', ' B', ' assertEqual', ' assertEquals', ' confirmEqual', ' confirmEquals'),
(49, 4, ' Phương thức nào được chạy trước tất cả test case?', ' B', ' tearDown()', ' setUp()', ' settingUp()', ' tearingDown()'),
(50, 4, ' Kiểm thử đơn vị được thực hiện bởi ai trong nhóm phát triển?', ' C', ' Tester', ' QA', ' Lập trình viên', ' Product Owner'),
(51, 4, ' Đoạn code sau có ý nghĩa gì?SecondActivity startedActivity = (SecondActivity)monitor. waitForActivityWithTimeout(2000);', ' C', ' Khởi tạo SecondActivity. Nếu sau 2 milliseconds SecondActivity không được khởi tạo thì sẽ trả lại giá trị NULL', ' Khởi tạo SecondActivity. Nếu sau 2 giờ  SecondActivity không được khởi tạo thì sẽ trả lại giá trị NULL', ' Khởi tạo SecondActivity. Nếu sau 2 giây  SecondActivity không được khởi tạo thì sẽ trả lại giá trị NULL', ' Khởi tạo SecondActivity'),
(52, 30, ' Trong Dreamweaver CS4 muốn  liên kết bên ngoài website người dùng sử dụng loại liên kết nào?', ' B', ' Liên kết tương đối', ' Liên kết tuyệt đối', ' Liên kết tới Email', ' Cả 3 đáp án'),
(53, 30, ' Để xem và thay đổi định dạng hiện tại của một đối tượng (text/image) bạn nên sử dụng', ' C', ' Property Inspector', ' Insert bar', ' Tag Inspector', ' File panel'),
(54, 30, ' Chức năng nào sau đây không phải là một trong những chức năng chính của các công cụ hỗ trợ thiết kế web', ' A', ' Hỗ trợ chỉnh sửa ảnh', ' Hỗ trợ quản lý site và FTP', ' Cung cấp môi trường soạn thảo và code', ' Cung cấp tính năng thiết kế giao diện và định dạng trang web'),
(55, 30, ' Chương trình hoạt động bằng cách dịch mã HTML thành trang Web là', ' A', ' Trình duyệt', ' Hệ điều hành', ' Protocol', ' Phần mềm tiện ích'),
(56, 30, ' Để thêm các ký tự đặc biệt vào trang web  trên menu/thanh Insert bạn cần chọn mục nào', ' B', ' Conment', ' HTML/Special characters', ' HTML/Text Object', ' Image'),
(57, 30, ' Bước nào sau đây không phải là một bước chính trong quá trình thiết kế web', ' A', ' Thiết kế', ' Tìm template', ' Bảo trì', ' Kiểm thử'),
(58, 30, ' WYSIWYG là viết tắt của', ' D', ' Không gì cả', ' Tên của một chương trình', ' ways you see into Web yellow green', ' what you see is what you get'),
(59, 30, ' Mã mầu trong các trang HTML gồm 6 kí tự và đứng trước là dấu thăng (#) sử dụng hệ cơ số nào?', ' B', ' Hệ nhị phân', ' Hệ thập lục phân (Hecxa)', ' Hệ thập phân', ' Hệ BCD nén'),
(60, 30, ' Giao thức nào là giao thức truyền tải siêu văn bản được dùng giữa Web client và Web server', ' C', ' TCP/IP', ' WWW', ' HTTP', ' FTP'),
(61, 30, ' Thông thường tiêu chuẩn Internet cho việc đặt tên trang chủ  hay trang đầu tiên mà người dùng truy  cập vào website sẽ là', ' B', ' Bất kì tên nào', ' index.html', ' home.html', ' default.html'),
(62, 30, ' Cách đặt Css nào mà chỉ áp dụng được cho một thẻ một lần và không thể tái sử dụng  lại', ' C', ' internal style (style nội bộ trong file HTML)', ' external style (style lưu ở một file riêng)', ' inline style (Style nội tuyến trong thẻ HTML)', ' cả 3 '),
(63, 29, ' Thuộc tính nào để thay đổi màu nền của Form?', ' D', ' Color', ' BgColor', ' BackgroundColor', ' BackColor'),
(64, 29, ' Để kích thước của form mở rộng đầy màn hình khi chạy chương trình thì cần thiết lập giá trị nào cho thuộc tính WindowState?', ' A', ' Maximized', ' Normal', ' Minimized', ' MinMax'),
(65, 30, ' Để hiện cửa sổ Toolbox người dùng chọn thao tác nào?', ' D', ' Tools \\u003e Toolbox', ' Build \\u003e Toolbox', ' Project \\u003e Toolbox', ' View \\u003e Toolbox'),
(66, 29, ' Ngôn ngữ lập trình nào dưới đây là ngôn ngữ lập trình bậc thấp?', ' B', ' Pascal', ' Assembly', ' Visual Basic', ' C#'),
(67, 29, ' Ngôn ngữ lập trình nào tập trung vào đối tượng mỗi đối tượng đều có thuộc tính và phương thức của chính nó?', ' D', ' Ngôn ngữ máy', ' Ngôn ngữ lập trình cấu trúc', ' Ngôn ngữ Assembly', ' Ngôn ngữ lập trình hướng đối tượng'),
(68, 29, ' Thành phần nào trong máy tính chịu trách nhiệm thực hiện tính toán và đưa ra quyết định.', ' A', ' Khối số học và lôgicKhối xuất', ' Khối nhớ', ' Khối xử lý trung tâm', ' Khối xuất'),
(69, 29, ' Để thiết kế giao diện của ứng dụng người dùng chọn đối tượng nào?', ' C', ' Interface', ' Module', ' Windows Form', ' Class'),
(70, 29, ' Để máy tính hiểu các ngôn ngữ lập trình bậc cao thì cần phải có chương trình nào?', ' A', ' Chương trình dịch', ' Chương trình tự động hóa', ' Chương trình máy', ' Chương trình robot'),
(71, 29, ' Thuộc tính nào của đối tượng trên form không được đặt trùng nhau?', ' A', ' Name', ' Size', ' Text', ' \"Auto size'),
(72, 29, ' Cửa sổ nào trên IDE hiển thị danh sách các file trong một project và danh sách project', ' B', ' Toolbox', ' Solution Explorer', ' Properties', ' Object browser'),
(73, 29, ' Lời gọi hàm Val(“hello\") sẽ trả về kết quả nào?', ' A', ' 0', ' 10', ' 5', ' Báo lỗi'),
(74, 29, ' Để nội dung của Label được căn chỉnh ở giữa và đều trên dòng thì giá trị của TextAlign được thiết lập là:', ' C', ' BottomCenter', ' TopCenter', ' MiddleCenter', ' TopLeft'),
(75, 29, ' Lời gọi hàm Val(“194A Hàm Nghi\") sẽ trả về kết quả nào?', ' C', ' Báo lỗi', ' 0', ' 194', ' 3'),
(76, 29, ' Toán tử truy cập thành viên trong Visual Basic là?', ' C', ' Dấu phẩy ', ' Dấu hai chấm (:)', ' \"Dấu chấm (.)', ' Dấu chấm phẩy (;)'),
(77, 27, ' PHP là', ' B', ' Trình duyệt web của máy chủ', ' Tất cả đáp án đều sai', ' Cơ sở dữ liệu của máy chủ', ' Ngôn ngữ phía máy chủ'),
(78, 27, ' Cú pháp khai báo cho hằng số nào sau đây là đúng', ' B', ' define(MAX 30)', ' Tất cả đáp án đều sai', ' MAX = 30', ' constant(\\u0027max\\u0027  30)'),
(79, 27, ' Để viết chú thích nhiều dòng cho câu lệnh PHP cần sử dụng kí tự nào', ' B', ' /', ' /* */', ' //', ' # #'),
(80, 27, ' Để nhúng mã PHP vào mã HTML cần sử dụng cặp thẻ tag nào', ' B', ' \\u003c?\\u003e', ' \\u003c?php ?\\u003e', ' \\u003cphp\\u003e \\u003c/php\\u003e', ' \\u003c? ?\\u003e'),
(81, 27, ' Trường hợp nào dưới đây cần sử dụng phương thức POST thay vì GET', ' A', ' Cần truyền hơn 4MB dữ liệu', ' Muốn truyền tham số vào URL', ' Tất cả đáp án đều sai', ' Có yêu cầu xem trang viết dữ liệu lên máy chủ cơ sở dữ liệu'),
(82, 27, ' Cú pháp khai báo và gán giá trị cho biến nào sau đây là đúng', ' A', ' $a = 1', ' Tất cả đáp án đều sai', ' a = 1', ' $a == 1'),
(84, 27, ' Cấu trúc lấy dữ liệu sử dụng mảng $_GET nào sau đây là đúng', ' A', ' $b = $_GET[\\u0027a\\u0027]', ' $a = $_GET[a]', ' Tất cả đáp án đều sai', ' $a = $_GET(a)'),
(85, 27, ' $i = 1; while ($i \\u003c= 7) { $i++; } Sau khi thoát khỏi vòng lặp thì $i có giá trị bao nhiêu', ' D', ' 7', ' 1', ' 0', ' 8'),
(86, 27, ' Giao diện của XAMPP cho phép thực hiện thao tác nào dưới đây', ' C', ' Bật tắt MS SQL', ' Bật tắt SQL', ' Bật tắt Apache', ' Tất cả đáp án đều đúng'),
(87, 27, ' Trong phpMyAdmin  để xóa dữ liệu của một bảng thì nhấn nút nào dưới đây', ' B', ' Tất cả đáp án đều sai', ' Empty', ' Empty', ' Drop'),
(88, 26, ' Phát triển web di động bắt buộc phải sử dụng IDE Dreamweaver đúng hay sai?', ' B', ' Đúng', ' Sai', ' Cả 2 đều đúng', ' Cả 2 đều sai'),
(89, 26, ' Những giải pháp dành cho web trên máy tính như: độ phân giải kích thước hoàn toàn sử dụng được trên thiết bị di động. Đúng hay sai?', ' A', ' Sai', ' Đúng', ' Cả 2 đều đúng', ' Cả 2 đều sai'),
(90, 26, ' Danh sách kiểu MIME được hỗ trợ thông qua các giá trị nằm trong trường nào của HTTP Request?', ' C', ' Trường Degree', ' Trường Save', ' Trường Accept', ' Trường Agree'),
(91, 26, ' Thành phần nào mô tả kiểu file tài liệu truyền cho máy khách trong hồi đáp HTTP (HTTP Respone)?', ' B', ' MIMI', ' MIME', ' MIMO', ' MIMA'),
(92, 26, ' Tiêu chuẩn W3C được áp dụng chặt chẽ và rộng rãi trên trình duyệt của thiết bị nào?', ' A', ' Thiết bị máy tính', ' Thiết bị đi động', ' cả 2 đều sai', ' Cả 2 đều đúng'),
(93, 26, ' Các kiểu MIME phân biệt ngôn ngữ đánh dấu di động với HTML trên máy tính. ĐÚng hay sai?', ' A', ' Đúng', ' Sai ', '  Cả 2 đều đúng', ' cả 2 đều sai'),
(94, 26, ' Kiểu MIME liên kết với mỗi tài liệu web lưu trữ trong trường nào trong hồi đáp HTTP', ' A', ' Content-Type', ' Degree', ' Save', ' Accept'),
(95, 26, ' Đối với máy chủ Nginx để cấu hình kiểu MIME phải làm như thế nào?', ' A', ' Cấu hình trực tiếp trong file nginx.conf', ' Cấu hình trực tiếp trong file nginx.common', ' Cấu hình trực tiếp trong file conf.nginx', ' Cấu hình trực tiếp trong file common. Nginx'),
(97, 26, ' Người quản trị web phải thêm bằng tay các kiểu MIME di động còn thiếu điều này đúng hay sai?', ' A', ' Đúng', ' sai ', ' Cả 2 đều đúng ', ' cả 2 đều sai'),
(98, 26, ' Chức năng bộ nhớ đệm của HTML5 được ứng dụng nhiều trên các trình duyệt. Đúng hay sai?', ' A', ' Đúng', ' Sai ', ' cả 2 đều đúng', ' cả 2 đều sai'),
(99, 23, ' Thông thường cách thức alert() được sử dụng trong các trường hợp nào?', ' D', ' Khi dịch vụ chưa sẵn sàng để truy nhập dữ liệu', ' Đưa ra một thông điệp cảnh báo đến người dùng', ' Kết quả sau khi tính toán không hợp lệ', ' Tất cả các trường hợp đã nêu'),
(100, 23, ' Có bao nhiêu cách để nhúng file JavaScript vào một file HTML?', ' A', ' 4', ' 3', ' 2', ' 1'),
(101, 23, ' JavaScript có giống với Java không?', ' A', ' Không ', ' \'\'', ' \'\'', ' '),
(102, 23, ' Cặp thẻ nào được sử dụng để đưa JavaScript vào file HTML?', ' A', ' \\u003cscript\\u003e\\u003c/script\\u003e', ' \\u003cscripting\\u003e/\\u003cscripting\\u003e', ' \\u003cjs\\u003e\\u003c/js\\u003e', ' \\u003cJavaScript\\u003e\\u003c/JavaScript\\u003e'),
(103, 23, ' JavaScript có khả năng gì?', ' C', ' Xử lý file của người dùng', ' Hỗ trợ mạng', ' Điều khiển trình duyệt', ' Cả 3 đều đúng'),
(104, 23, ' Ban đầu JavaScript do hãng công nghệ nào phát triển?', ' A', ' Netscape', ' NEC', ' Microsoft', ' cả 3 đều đúng'),
(105, 23, ' JavaScript hồi đáp lại tương tác của người dùng khi nào', ' C', ' Các phương án đều sai', ' Khi người dùng nhấn vào menu', ' Các phương án đều đúng', ' Khi người dùng nhấn chuột'),
(106, 23, ' Tên file của các hàm JavaScript bên ngoài trang HTML cần có đuôi gì?', ' D', ' .jst', ' .jsc', ' .jsp', ' .js'),
(107, 23, ' Khi ngăn cách các từ trong JavaScript người ta dùng:', ' C', ' dấu chấm (.)', ' dấu hai chấm (:)', ' dấu cách (space)', ' dấu gạch dưới (_)'),
(108, 23, ' Làm thế nào để bạn xác định đúng 1 đoạn mã của JavaScript trong file HTML?', ' D', ' Sử dụng thẻ \\u003cJavaScript\\u003e mở với thuộc tính type=\"text/JavaScript\"', ' Sử dụng thẻ APPLET mở với thuộc tính type=\"text/JavaScript\"', ' Viết JavaScript bất cứ nơi nào và trình duyệt luôn luôn nhận ra nó', ' Sử dụng thẻ \\u003cSCRIPT\\u003e mở với thuộc tính type=\"text/JavaScript'),
(109, 23, ' \"Để phân biệt kiểu dấu phẩy động với kiểu số nguyên phải có ít nhất bao nhiêu chữ số theo sau dấu chấm hay E?', ' B', ' 3', ' 1', ' 2', ' 4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quizhistory`
--

CREATE TABLE `quizhistory` (
  `id` int(11) NOT NULL,
  `id_subject` int(11) NOT NULL,
  `subject_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `score` int(2) NOT NULL,
  `id_user` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quizhistory`
--

INSERT INTO `quizhistory` (`id`, `id_subject`, `subject_name`, `score`, `id_user`) VALUES
(4, 17, ' Lập trình Android nâng cao', 0, 2),
(5, 17, ' Lập trình Android nâng cao', 0, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `subject_img` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `subject`
--

INSERT INTO `subject` (`id`, `subject_name`, `subject_img`) VALUES
(4, 'Kiểm thử và triển khai ứng dụng Android', ' ADTE.jpg'),
(5, 'Thiết kế giao diện trên Android', ' ADUI.jpg'),
(6, 'Lập trình ASP.NET', ' ASNE.png'),
(7, 'Điện toán đám mây', ' CLCO.jpg'),
(8, 'SQL Server', ' DBAV.png'),
(9, 'Cơ sở dữ liệu', 'DBBS.png'),
(17, 'Lập trình Android nâng cao', ' ADAV.jpg'),
(18, 'Lập trình Android cơ bản', ' ADBS.jpg'),
(19, 'Lập trình game 2D', ' GAME.png'),
(20, 'HTML5 và CSS3', ' HTCS.jpg'),
(21, 'Internet Marketing', ' INMA.jpg'),
(22, 'Lập trình hướng đối tượng với Java', ' JABS.png'),
(23, 'Lập trình JavaScript', ' JSPR.png'),
(26, 'Thiết kế web cho điện thoại di động', ' MOWE.png'),
(27, 'Lập trình PHP', ' PHPP.png'),
(29, 'Lập trình VB.NET', ' VBPR.png'),
(30, 'Xây dựng trang web', ' WEBU.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `gender` int(11) NOT NULL DEFAULT 0 COMMENT '0 là nam',
  `phone` int(10) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`, `img`, `birthday`, `gender`, `phone`, `role`) VALUES
(2, 'longlongdoan1998@gmail.com', '123', 'Long Đoàn', 'Đoàn Văn LongPD05236.png', '2004-02-13', 0, 0, 1),
(3, '12@gmail.com', '123', ' Abc', ' images (1).jpg', '2022-04-22', 1, 374011198, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Chỉ mục cho bảng `quizhistory`
--
ALTER TABLE `quizhistory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_subject` (`id_subject`);

--
-- Chỉ mục cho bảng `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT cho bảng `quizhistory`
--
ALTER TABLE `quizhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `quizhistory`
--
ALTER TABLE `quizhistory`
  ADD CONSTRAINT `quizhistory_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `quizhistory_ibfk_2` FOREIGN KEY (`id_subject`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
