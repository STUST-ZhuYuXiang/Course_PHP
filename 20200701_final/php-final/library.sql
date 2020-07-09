-- phpMyAdmin SQL Dump
-- version 2.9.0.2
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Dec 25, 2007, 06:41 AM
-- 伺服器版本: 5.0.24
-- PHP 版本: 5.1.6
-- 
-- 資料庫: `library`
-- 

-- --------------------------------------------------------

-- 
-- 資料表格式： `book`
-- 

CREATE TABLE `book` (
  `id` int(10) NOT NULL auto_increment,
  `book_name` varchar(50) NOT NULL,
  `publisher` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `price` int(10) NOT NULL default '0',
  `ISBN` varchar(16) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

-- 
-- 列出以下資料庫的數據： `book`
-- 

INSERT INTO `book` VALUES (1, '3ds max擬真特效選集', '網奕', '陳偉介', 650, '986-748-592-0');
INSERT INTO `book` VALUES (26, '實業PHP5程式設計', '碁峰', '林學文', 580, '986-421-830-1');
INSERT INTO `book` VALUES (23, 'CorelDraw 12 CIS 企業識別設計', '文魁', '蔡哲明', 680, '986-125-485-4');
INSERT INTO `book` VALUES (4, 'PhotoShop & CorelDraw創意包裝設計', '文魁', '蔡哲明', 650, '986-125-563-X');
INSERT INTO `book` VALUES (6, 'Adobe Acrobat 6撇步100招', '碁峰', '公爵研究室', 390, '986-421-524-8');
INSERT INTO `book` VALUES (7, 'ADSL BT瘋狂下載全攻略', '松崗', '陳世宗', 199, '986-125-539-7');
INSERT INTO `book` VALUES (8, 'PhotoImpact 11範例應用實例 213個Good Ideas', '松崗', '蕭文卿', 450, '986-125-742-X');
INSERT INTO `book` VALUES (9, 'PhotoShop CS魔力設計專集', '學貫', '鮑博彥', 590, '986-769-373-6');
INSERT INTO `book` VALUES (10, 'PHP 5網頁設計範例教本', '學貫', '陳會安', 600, '986-811-581-7');
INSERT INTO `book` VALUES (12, '精彩PhotoShop 7.0中文版', '知城', '吳珮瑩', 490, '986-784-545-5');
INSERT INTO `book` VALUES (14, '正確學會PhotoShop CS2的16堂課', '旗標', '施威銘', 580, '957-442-283-6');
INSERT INTO `book` VALUES (15, 'PHP 5動態網頁入門實務', '文魁', '位元文', 620, '986-125-391-2');
INSERT INTO `book` VALUES (16, 'MySQL 5資料庫實務', '網奕', '梁仁楷', 480, '986-748-588-2');
INSERT INTO `book` VALUES (17, 'PhotoShop CS2特效講藝', '金禾', '吳迪', 580, '986-149-196-1');
INSERT INTO `book` VALUES (18, 'CorelDraw PhotoShop超完美結合輕鬆搞定專業設計', '松崗', '大麥牙工作坊', 550, '986-125-038-7');
INSERT INTO `book` VALUES (20, 'PHP 5 & MySQL程式設計', '學貫', '陳惠貞', 580, '986-769-375-2');
INSERT INTO `book` VALUES (22, 'Adobe PhotoShop CS2影像玩味-玩後製', '文魁', '張靜怡', 600, '986-125-699-7');
INSERT INTO `book` VALUES (24, 'PhotoShop插畫大師', '上奇', '張雅涵', 860, '986-719-953-7');
INSERT INTO `book` VALUES (25, '碼上就會Flash 8 專業版ActionScript進階應用', '上奇', '趙英傑', 620, '986-816-4702');
INSERT INTO `book` VALUES (27, 'PHP & MySQL建立動態資料庫網站', '碁峰', '林日森', 400, '986-421-722-4');
INSERT INTO `book` VALUES (28, 'Flash 8 ActionScript創意精修', '學貫', '劉宇陽', 520, '986-719-8425');
INSERT INTO `book` VALUES (29, 'Flash 遊戲殿堂', '學貫', '劉宇陽', 490, '986-719-8839');
INSERT INTO `book` VALUES (30, 'PHP5 & MySQL徹底研究', '旗標', '陳俊宏', 620, '957-442-0639');
INSERT INTO `book` VALUES (31, 'P2P下載高手出招', '松崗', '熊波波', 290, '986-125-6008');
INSERT INTO `book` VALUES (32, 'InDesign CS排版實務', '網奕', '吳威權', 520, '986-723-6017');
