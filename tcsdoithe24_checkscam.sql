-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th1 30, 2025 lúc 12:32 AM
-- Phiên bản máy phục vụ: 10.5.26-MariaDB
-- Phiên bản PHP: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tcsdoithe24_checkscam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangchung`
--

CREATE TABLE `bangchung` (
  `id` int(11) NOT NULL,
  `code` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `code` varchar(32) DEFAULT NULL,
  `username` text NOT NULL,
  `sdt` text DEFAULT NULL,
  `id_fb` text DEFAULT NULL,
  `website` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `dich_vu` text DEFAULT NULL,
  `mo_ta` text DEFAULT NULL,
  `money` text DEFAULT NULL,
  `gmail` text DEFAULT NULL,
  `ngan_hang` text DEFAULT NULL,
  `gdtg` text DEFAULT NULL,
  `dv` text DEFAULT NULL,
  `avatar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `cards`
--

INSERT INTO `cards` (`id`, `code`, `username`, `sdt`, `id_fb`, `website`, `dich_vu`, `mo_ta`, `money`, `gmail`, `ngan_hang`, `gdtg`, `dv`, `avatar`) VALUES
(16, 'pham-duy-quang', 'Phạm Duy Quang', '0969349646', 'quangdev05', 'quangdev05.link|thesieuviet.net|cs.doithe24.net', 'Founder/CEO/Owner/Admin', '<p>Xin chào! Mình là Quang, admin của hệ thống CS.DoiThe24.net, đồng thời cũng là Owner/Manager/CEO Tencer Software Co., Ltd.</p', '10.000.000đ', 'duyquang6991@gmail.com', 'VCB: QUANG28|MB: 5595595595|MoMo: 0969349646|TSV: 0876787651', '30k - 500k (10k)|500k - 1tr (50k)|1tr - 10tr (100k)', 'Gạch thẻ cào|Mua bán acc game|Trung gian|VPS|Reg Domain', 'https://i.imgur.com/umeVv5r.jpeg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `code` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `code`) VALUES
(1, 'Founder/CEO/Owner/Admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `site_domain` text DEFAULT NULL,
  `site_logo` text DEFAULT NULL,
  `site_tenweb` text DEFAULT NULL,
  `site_mota` text DEFAULT NULL,
  `facebook` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `sdt_admin` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `modal` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `setting`
--

INSERT INTO `setting` (`id`, `site_domain`, `site_logo`, `site_tenweb`, `site_mota`, `facebook`, `sdt_admin`, `modal`) VALUES
(1, '/', 'https://doithe24.net/images/tencer-cs/logo.png', 'cs.doithe24.net', 'Website chống lừa đảo TencerCS kiểm tra, lưu trữ, tố cáo thông tin lừa đảo trên mxh. CS.DoiThe24.net giúp bạn an toàn trong mọi giao dịch online, tránh khỏi những rủi do mất tiền không đáng có', 'https://www.facebook.com/quangdev05', '0969349646', '<p style=\"text-align: center;\"><span style=\"-webkit-tap-highlight-color: transparent; text-size-adjust: 100%; font-size: 14px; text-align: left; color: rgb(51, 51, 51); font-family: Roboto, Arial, Helvetica, sans-serif; font-weight: 700;\">► Liên hệ hỗ trợ, đăng ký quỹ bảo hiểm </span><span style=\"-webkit-tap-highlight-color: transparent; text-size-adjust: 100%; font-size: 14px; text-align: left; color: rgb(51, 51, 51); font-family: Roboto, Arial, Helvetica, sans-serif;\">tại </span><a href=\"https://www.facebook.com/quangdev05\" target=\"_blank\">Facebook</a><span style=\"-webkit-tap-highlight-color: transparent; text-size-adjust: 100%; font-size: 14px; text-align: left; color: rgb(51, 51, 51); font-family: Roboto, Arial, Helvetica, sans-serif;\">, <a href=\"https://t.me/tencersoftware\" target=\"_blank\">Telegram</a>, </span><a href=\"https://zalo.me/0969349646\" target=\"_blank\">Zalo</a>&nbsp;<span style=\"-webkit-tap-highlight-color: transparent; text-size-adjust: 100%; font-size: 14px; text-align: left; color: rgb(51, 51, 51); font-family: Roboto, Arial, Helvetica, sans-serif;\">hoặc <a href=\"https://discord.com/invite/5tcGqEwMFt\" target=\"_blank\">Discord</a></span></p><p style=\"text-align: center;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%; font-size: 14px; text-align: left; color: rgb(51, 51, 51); font-family: Roboto, Arial, Helvetica, sans-serif; font-weight: 700;\">► Gạch thẻ, đổi thẻ cào tại </span><a href=\"https://thesieuviet.net/\" target=\"_blank\">Thesieuviet.net</a></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 14px; text-align: left; color: rgb(51, 51, 51); font-family: Roboto, Arial, Helvetica, sans-serif; font-weight: 700;\">► MỌI CHI TIẾT VỀ QUỸ BẢO HIỂM LIÊN HỆ&nbsp;</span><a href=\"https://zalo.me/0969349646\" target=\"_blank\">0969349646</a><span style=\"color: rgb(35, 35, 35); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" left;\"=\"\">&nbsp;(</span><span style=\"\" open=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" left;\"=\"\"><font color=\"#ff0000\"><b>Phạm Duy Quang</b></font></span><span style=\"color: rgb(35, 35, 35); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" left;\"=\"\">)</span><br></p>\r\n<p style=\"text-align: center;\">\r\n    <span style=\"font-size: 16px;\">\r\n        Lưu ý<strong>&nbsp;<span style=\"color: #e74c3c;\">“Nội Dung Chuyển Khoản”</span>&nbsp;</strong>để tránh bị rửa tiền</span><span style=\"font-size: 1rem;\">&nbsp; &nbsp; &nbsp;</span></p>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `ly_do` text DEFAULT NULL,
  `status` varchar(32) NOT NULL,
  `sdt` text DEFAULT NULL,
  `ngan_hang` text DEFAULT NULL,
  `stk` text DEFAULT NULL,
  `link_fb` text DEFAULT NULL,
  `hoten_np` text DEFAULT NULL,
  `sdt_np` text DEFAULT NULL,
  `code` text DEFAULT NULL,
  `view` varchar(225) DEFAULT NULL,
  `ngay` text DEFAULT NULL,
  `ngayduyet` text DEFAULT NULL,
  `ngayupdate` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `code` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `level` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `code`, `username`, `password`, `level`) VALUES
(1, 'GNAUQ', 'quangdev05', 'PhamQuang78264', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bangchung`
--
ALTER TABLE `bangchung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bangchung`
--
ALTER TABLE `bangchung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000;

--
-- AUTO_INCREMENT cho bảng `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
