-- phpMyAdmin SQL Dump
-- version 2.9.0.2
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Sep 11, 2007, 08:29 AM
-- 伺服器版本: 5.0.24
-- PHP 版本: 5.1.6
-- 
-- 資料庫: `class`
-- 

-- --------------------------------------------------------

-- 
-- 資料表格式： `classmates`
-- 

CREATE TABLE `classmates` (
  `classID` tinyint(4) NOT NULL auto_increment,
  `className` varchar(40) NOT NULL,
  `classSex` varchar(2) NOT NULL,
  `classBirthday` date NOT NULL,
  `classEmail` varchar(100) default NULL,
  `classPhone` varchar(100) default NULL,
  `classAddress` varchar(100) default NULL,
  PRIMARY KEY  (`classID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- 
-- 列出以下資料庫的數據： `classmates`
-- 

INSERT INTO `classmates` VALUES (1, '宋少允', '女', '1989-06-13', 'songyung@seet.com.tw', '049-123456', '南投縣埔里鎮南門路24號');
INSERT INTO `classmates` VALUES (2, '陳惠琴', '女', '1965-05-01', 'hungchin@ms80.pchome.com.tw', '02-20981231', '台北市忠孝東路520號6樓');
INSERT INTO `classmates` VALUES (3, '吳弦育', '男', '1964-05-13', 'jackwu@mail.disc.com.tw', '0934-234842', '高雄市三民區建國路23號4樓');
INSERT INTO `classmates` VALUES (4, '孫耀郎', '男', '1965-01-18', 'sunelan@mail.ksts.edu.tw', '0928-245842', '高雄市前鎮區二聖二路35號');
INSERT INTO `classmates` VALUES (5, '宋文慧', '女', '1970-10-28', 'wenhui@mail.dsd.com.tw', '0922-983452', '屏東市中正路32號');
INSERT INTO `classmates` VALUES (6, '邱宏經', '男', '1965-08-30', 'gene@evy.com', '0939-762847', '台中市西屯區文心路二段26號8樓');
INSERT INTO `classmates` VALUES (7, '黃偉蘋', '女', '1964-12-20', 'apple@mail.ysil.com.tw', '0953-173297', '花蓮縣長濱鄉中山路12號');
INSERT INTO `classmates` VALUES (8, '周國忠', '男', '1963-03-23', 'chungjo@seed.net.tw', '0937-734823', '台北市長安西路54巷3號12樓之2');
INSERT INTO `classmates` VALUES (9, '蔡一淋', '男', '1972-08-04', 'elin@mail.yahoo.com', '0927-768439', '高雄市左營區大順一路36號');
INSERT INTO `classmates` VALUES (10, '陳筱愛', '女', '1982-06-20', 'xiao@mail.ytit.gov.tw', '0912-234853', '台南市東門路42巷3弄24號');
