-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 15, 2022 lúc 01:52 PM
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
(40, 18, ' Để sử dụng ContentProvider truy cập danh sách cuộc gọi gần đây bạn phải bổ sung thêm quyền gì vào Android Manifest?', ' C', ' android.permission.READ_CALLS', ' android.permission.READ_CALL', ' android.permission.READ_CALL_LOG', ' android.permission.READ_HISTORY');

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
(24, 'Thiết kế layout', ' LAYO.jpg'),
(25, '', ' '),
(26, 'Thiết kế web cho điện thoại di động', ' MOWE.png'),
(27, 'Lập trình PHP', ' PHPP.png'),
(28, 'Quản lý dự án với Agile', ' PMAG.jpg'),
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
(2, 'longlongdoan1998@gmail.com', '123', 'Long Đoàn', 'images (1).jpg', '2004-02-13', 0, 0, 1),
(3, '12@gmail.com', '123', ' Abc', ' images (1).jpg', '2022-04-22', 1, 374011198, 0),
(4, '12', '123', ' 2', ' ', '0000-00-00', 0, 0, 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
