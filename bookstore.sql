-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2019 年 03 月 27 日 02:46
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `bookstore`
--

-- --------------------------------------------------------

--
-- 表的结构 `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `addid` int(11) NOT NULL AUTO_INCREMENT,
  `openid` varchar(255) DEFAULT NULL,
  `recuser` varchar(255) DEFAULT NULL COMMENT '收货人姓名',
  `telnum` varchar(255) DEFAULT NULL COMMENT '手机号码',
  `area` varchar(255) DEFAULT NULL COMMENT '地区',
  `address` varchar(255) DEFAULT NULL COMMENT '详细地址',
  `adcode` varchar(255) DEFAULT NULL COMMENT '邮政编码',
  PRIMARY KEY (`addid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- 转存表中的数据 `address`
--

INSERT INTO `address` (`addid`, `openid`, `recuser`, `telnum`, `area`, `address`, `adcode`) VALUES
(21, 'oVNCG5PgoOmeG_J9eiF_0m0UxXlA', '蓝铿', '13538415750', '河南省-郑州市-市辖区', '门口', '523111'),
(22, 'oVNCG5PgoOmeG_J9eiF_0m0UxXlA', '蓝铿', '15876864499', '广东省-潮州市-湘桥区', '新桥路', '523000'),
(23, 'undefined', '蓝铿', '13553733399', '河北省-邯郸市-丛台区', '考虑考虑', '123456'),
(24, 'undefined', '456456', '12345678910', '北京市-西城区', '23132', '23123123'),
(25, 'undefined', '蓝铿', '12345678910', '天津市-河西区', '1·2123123', '123123213'),
(27, 'oVNCG5ABAkl6dYMd6onayhbr18Rc', '蓝铿', '13553733399', '广东省-潮州市-湘桥区', '哦哦哦哦哦', '521000');

-- --------------------------------------------------------

--
-- 表的结构 `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `account` varchar(255) DEFAULT NULL COMMENT '管理员账号',
  `password` varchar(255) DEFAULT NULL COMMENT '管理员密码',
  `name` varchar(255) DEFAULT NULL,
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`adminid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `administrator`
--

INSERT INTO `administrator` (`account`, `password`, `name`, `adminid`) VALUES
('admin', '123456', 'Lk', 1);

-- --------------------------------------------------------

--
-- 表的结构 `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `bookid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `claid` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `value` int(11) DEFAULT '1',
  `image` varchar(255) DEFAULT NULL COMMENT '商品图',
  `Imgone` varchar(255) DEFAULT NULL COMMENT '商品详情轮播图1',
  `Imgtwo` varchar(255) DEFAULT NULL COMMENT '商品详情轮播图2',
  `selected` tinyint(1) DEFAULT '0',
  `author` varchar(255) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `pubTime` varchar(255) DEFAULT NULL,
  `currentprice` double DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount` float DEFAULT NULL,
  PRIMARY KEY (`bookid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=75 ;

--
-- 转存表中的数据 `book`
--

INSERT INTO `book` (`bookid`, `id`, `claid`, `title`, `value`, `image`, `Imgone`, `Imgtwo`, `selected`, `author`, `publisher`, `pubTime`, `currentprice`, `price`, `discount`) VALUES
(61, 0, 26, '有话说', 1, './Public/Uploads/2018-12-30/5c288632ca360.jpg', './Public/Uploads/2018-12-30/5c288632cbeb9.jpg', './Public/Uploads/2018-12-30/5c288632cda11.jpg', 0, 'lk', '北京出版社', '2018-12-12', 45, 90, 5),
(62, 1, 26, '爱情保卫战', 1, './Public/Uploads/2018-12-30/5c2886f9edf37.jpg', './Public/Uploads/2018-12-30/5c2886f9eeed7.jpg', './Public/Uploads/2018-12-30/5c2886f9efe77.jpg', 0, 'lk', '北京出版社', '2018-12-12', 48, 80, 6),
(63, 0, 27, '三国演义', 1, './Public/Uploads/2018-12-30/5c2887a911fbe.jpg', './Public/Uploads/2018-12-30/5c2887a913346.jpg', './Public/Uploads/2018-12-30/5c2887a913efe.jpg', 0, 'lk', '北京出版社', '2018-12-12', 72, 90, 8),
(64, 0, 22, '小王子', 1, './Public/Uploads/2018-12-30/5c28882eed621.jpg', './Public/Uploads/2018-12-30/5c28882eee5c1.jpg', './Public/Uploads/2018-12-30/5c28882eef949.jpg', 0, 'lk', '北京出版社', '2018-12-12', 69.3, 99, 7),
(65, 1, 22, '英语名著', 1, './Public/Uploads/2018-12-30/5c288894b6e56.jpg', './Public/Uploads/2018-12-30/5c288894b81de.jpg', './Public/Uploads/2018-12-30/5c288894b9566.jpg', 0, 'lk', '北京出版社', '2018-12-29', 49.5, 99, 5),
(66, 2, 22, '巴黎圣母院', 1, './Public/Uploads/2018-12-30/5c288912e16df.jpg', './Public/Uploads/2018-12-30/5c288912e267f.jpg', './Public/Uploads/2018-12-30/5c288912e3237.jpg', 0, 'lk', '北京出版社', '2018-06-05', 46.8, 78, 6),
(67, 0, 23, '听什么歌', 1, './Public/Uploads/2018-12-30/5c2889d615db2.jpg', './Public/Uploads/2018-12-30/5c2889d616d52.jpg', './Public/Uploads/2018-12-30/5c2889d7e372b.jpg', 0, 'lk', '北京出版社', '2018-12-13', 34, 85, 4),
(68, 1, 23, '目客004', 1, './Public/Uploads/2018-12-30/5c288a5578cd9.jpg', './Public/Uploads/2018-12-30/5c288a5579c79.jpg', './Public/Uploads/2018-12-30/5c288a573189a.jpg', 0, 'lk', '北京出版社', '2018-12-20', 38.5, 77, 5),
(69, 0, 24, '人间有味，自在从容', 1, './Public/Uploads/2018-12-30/5c288b20af660.jpg', './Public/Uploads/2018-12-30/5c288b20b0601.jpg', './Public/Uploads/2018-12-30/5c288b21bdd15.jpg', 0, 'lk', '北京出版社', '2018-12-28', 28, 56, 5),
(59, 2, 25, '乌合之众', 1, './Public/Uploads/2018-12-30/5c287e69c68ce.jpg', './Public/Uploads/2018-12-30/5c287e6aaf5ea.jpg', './Public/Uploads/2018-12-30/5c287e6ab24cb.jpg', 0, 'lk', '北京出版社', '2018-12-12', 14, 70, 2),
(60, 3, 25, '拖延症', 1, './Public/Uploads/2018-12-30/5c287e8b213e8.jpg', './Public/Uploads/2018-12-30/5c287e8b22771.jpg', './Public/Uploads/2018-12-30/5c287e8b2bbe3.jpg', 0, 'lk', '北京出版社', '2018-12-12', 16, 80, 2),
(58, 1, 25, '犯罪心理学', 1, './Public/Uploads/2018-12-30/5c287e3ccd00a.jpg', './Public/Uploads/2018-12-30/5c287e3cce392.jpg', './Public/Uploads/2018-12-30/5c287e3ccf333.jpg', 0, 'lk', '北京出版社', '2018-12-12', 12, 60, 2),
(57, 0, 25, '墨菲定律', 1, './Public/Uploads/2018-12-30/5c287c6493620.jpg', './Public/Uploads/2018-12-30/5c287c64941d8.jpg', './Public/Uploads/2018-12-30/5c287c6495178.jpg', 0, '廖春红', '北京出版社', '2018-12-12', 10, 50, 2),
(70, 3, 22, '为人三会', 1, './Public/Uploads/2019-03-27/5c9ad706dab3f.jpg', './Public/Uploads/2019-03-27/5c9ad706e2785.jpg', './Public/Uploads/2019-03-27/5c9ad706e4843.jpg', 0, 'lk', 'lklk', '2019-3-27', 40, 50, 8),
(71, 4, 22, '大清十二帝', 1, './Public/Uploads/2019-03-27/5c9ad7ace8427.jpg', './Public/Uploads/2019-03-27/5c9ad7ace98e8.jpg', './Public/Uploads/2019-03-27/5c9ad7acf133b.jpg', 0, 'lk', 'lklkl', '2019-3-28', 70, 100, 7),
(72, 2, 23, '你有你的计划，世界另有计划', 1, './Public/Uploads/2019-03-27/5c9ad84f40232.jpg', './Public/Uploads/2019-03-27/5c9ad84f4176b.jpg', './Public/Uploads/2019-03-27/5c9ad84f48cbf.jpg', 0, 'lk', 'lklklk', '2019-2-20', 24, 40, 6),
(73, 1, 24, '解忧杂货店', 1, './Public/Uploads/2019-03-27/5c9ad8ee9ae3b.jpg', './Public/Uploads/2019-03-27/5c9ad8ee9c23b.jpg', './Public/Uploads/2019-03-27/5c9ad8eea39f8.jpg', 0, 'lk', 'jieyou', '2019-3-29', 33, 66, 5),
(74, 2, 24, '九型人格', 1, './Public/Uploads/2019-03-27/5c9ad977d2e5e.jpg', './Public/Uploads/2019-03-27/5c9ad977d44bb.jpg', './Public/Uploads/2019-03-27/5c9ad977dd482.jpg', 0, 'lk', 'jiuxing', '2019-3-30', 102, 120, 8.5);

-- --------------------------------------------------------

--
-- 表的结构 `figure`
--

CREATE TABLE IF NOT EXISTS `figure` (
  `figureid` int(11) NOT NULL AUTO_INCREMENT,
  `figureone` varchar(255) DEFAULT NULL,
  `figuretwo` varchar(255) DEFAULT NULL,
  `figurethree` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`figureid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `figure`
--

INSERT INTO `figure` (`figureid`, `figureone`, `figuretwo`, `figurethree`) VALUES
(1, './Public/Uploads/2018-12-30/5c2877a0ad8fa.jpg', './Public/Uploads/2018-12-30/5c2877a0b000a.jpg', './Public/Uploads/2018-12-30/5c2877a0b177b.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `imageid` int(11) NOT NULL AUTO_INCREMENT,
  `claid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `mode` varchar(255) NOT NULL DEFAULT 'widthFix',
  PRIMARY KEY (`imageid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

--
-- 转存表中的数据 `image`
--

INSERT INTO `image` (`imageid`, `claid`, `id`, `image`, `mode`) VALUES
(42, 24, 0, './Public/Uploads/2018-12-30/5c288b3927c0f.jpg', 'widthFix'),
(40, 23, 0, './Public/Uploads/2018-12-30/5c2889eb79c3a.jpg', 'widthFix'),
(41, 23, 1, './Public/Uploads/2018-12-30/5c288a6e08d74.jpg', 'widthFix'),
(39, 22, 2, './Public/Uploads/2018-12-30/5c28892482b46.jpg', 'widthFix'),
(31, 25, 3, './Public/Uploads/2018-12-30/5c2885321cb45.jpg', 'widthFix'),
(32, 25, 1, './Public/Uploads/2018-12-30/5c288566ce32d.jpg', 'widthFix'),
(33, 25, 0, './Public/Uploads/2018-12-30/5c288572901b5.jpg', 'widthFix'),
(34, 26, 0, './Public/Uploads/2018-12-30/5c288647aa082.jpg', 'widthFix'),
(35, 26, 1, './Public/Uploads/2018-12-30/5c28871a67e1f.png', 'widthFix'),
(36, 27, 0, './Public/Uploads/2018-12-30/5c2887bf2baee.jpg', 'widthFix'),
(37, 22, 0, './Public/Uploads/2018-12-30/5c288842099f3.jpg', 'widthFix'),
(38, 22, 1, './Public/Uploads/2018-12-30/5c2888a879e48.jpg', 'widthFix'),
(30, 25, 2, './Public/Uploads/2018-12-30/5c288523dc668.jpg', 'widthFix'),
(43, 22, 3, './Public/Uploads/2019-03-27/5c9ad72cd7c13.jpg', 'widthFix'),
(44, 22, 3, './Public/Uploads/2019-03-27/5c9ad739ec1db.jpg', 'widthFix'),
(45, 22, 3, './Public/Uploads/2019-03-27/5c9ad7456a4b1.jpg', 'widthFix'),
(46, 22, 4, './Public/Uploads/2019-03-27/5c9ad7bc7760a.jpg', 'widthFix'),
(47, 22, 4, './Public/Uploads/2019-03-27/5c9ad7cca6c6e.jpg', 'widthFix'),
(48, 22, 4, './Public/Uploads/2019-03-27/5c9ad7d99fbe1.jpg', 'widthFix'),
(49, 23, 2, './Public/Uploads/2019-03-27/5c9ad861a668b.jpg', 'widthFix'),
(50, 23, 2, './Public/Uploads/2019-03-27/5c9ad873a4de4.jpg', 'widthFix'),
(51, 23, 2, './Public/Uploads/2019-03-27/5c9ad8867c3c8.jpg', 'widthFix'),
(52, 24, 1, './Public/Uploads/2019-03-27/5c9ad90ac4d81.jpg', 'widthFix'),
(53, 24, 1, './Public/Uploads/2019-03-27/5c9ad9196411d.jpg', 'widthFix'),
(54, 24, 1, './Public/Uploads/2019-03-27/5c9ad92aa5035.jpg', 'widthFix'),
(55, 24, 2, './Public/Uploads/2019-03-27/5c9ad989a72e9.jpg', 'widthFix'),
(56, 24, 2, './Public/Uploads/2019-03-27/5c9ad996e5bbb.jpg', 'widthFix'),
(57, 24, 2, './Public/Uploads/2019-03-27/5c9ad9a512e2b.jpg', 'widthFix');

-- --------------------------------------------------------

--
-- 表的结构 `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `bookname` varchar(255) DEFAULT NULL COMMENT '书名',
  `booknum` varchar(255) DEFAULT NULL COMMENT '书数量',
  `countprice` varchar(255) DEFAULT NULL COMMENT '折扣价',
  `pay` double DEFAULT NULL COMMENT '付款金额',
  `recuser` varchar(255) DEFAULT NULL COMMENT '收货人',
  `telnum` varchar(255) DEFAULT NULL COMMENT '手机号码',
  `area` varchar(255) DEFAULT NULL COMMENT '地区',
  `address` varchar(255) DEFAULT NULL COMMENT '详细地址',
  `deliverytime` varchar(255) DEFAULT '不限时送货时间' COMMENT '送货时间',
  `lmessage` varchar(255) DEFAULT NULL COMMENT '留言',
  `openid` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT '待发货',
  PRIMARY KEY (`orderid`),
  KEY `orderid` (`orderid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- 转存表中的数据 `order`
--

INSERT INTO `order` (`orderid`, `bookname`, `booknum`, `countprice`, `pay`, `recuser`, `telnum`, `area`, `address`, `deliverytime`, `lmessage`, `openid`, `state`) VALUES
(32, '听什么歌', '1', '34', 34, '蓝铿', '15876864499', '广东省-潮州市-湘桥区', '新桥路', '不限时送货时间', '', 'oVNCG5PgoOmeG_J9eiF_0m0UxXlA', '已发货'),
(31, '人间有味，自在从容', '1', '28', 28, '蓝铿', '13538415750', '河南省-郑州市-市辖区', '门口', '不限时送货时间', '', 'oVNCG5PgoOmeG_J9eiF_0m0UxXlA', '待发货'),
(30, '小王子,英语名著', '1,4', '69.3,49.5', 267.3, '蓝铿', '15876864499', '广东省-潮州市-湘桥区', '新桥路', '不限时送货时间', '', 'oVNCG5PgoOmeG_J9eiF_0m0UxXlA', '包裹等待收揽'),
(33, '小王子,听什么歌,人间有味，自在从容', '1,1,1', '69.3,34,28', 131.3, '456456', '12345678910', '北京市-西城区', '23132', '双休日、假日送货', '1', 'oVNCG5ABAkl6dYMd6onayhbr18Rc', '待发货'),
(34, '巴黎圣母院', '1', '46.8', 46.8, '456456', '12345678910', '北京市-西城区', '23132', '双休日、假日送货', '', 'oVNCG5ABAkl6dYMd6onayhbr18Rc', '已发货'),
(35, '三国演义,你有你的计划，世界另有计划', '1,1', '72,24', 96, 'klk', '1234568910', '河北省-邯郸市-市辖区', '123', '不限时送货时间', '', 'oVNCG5ABAkl6dYMd6onayhbr18Rc', '包裹等待收揽'),
(36, '大清十二帝', '1', '70', 70, 'klk', '1234568910', '河北省-邯郸市-市辖区', '123', '不限时送货时间', '45656456', 'oVNCG5ABAkl6dYMd6onayhbr18Rc', '待发货');

-- --------------------------------------------------------

--
-- 表的结构 `sort`
--

CREATE TABLE IF NOT EXISTS `sort` (
  `claid` int(11) NOT NULL AUTO_INCREMENT,
  `ishaveChild` tinyint(1) NOT NULL DEFAULT '1',
  `cate_name` varchar(255) NOT NULL,
  PRIMARY KEY (`claid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- 转存表中的数据 `sort`
--

INSERT INTO `sort` (`claid`, `ishaveChild`, `cate_name`) VALUES
(27, 1, '世界名著'),
(26, 1, '青春小说'),
(25, 1, '心理学'),
(24, 1, '畅销版'),
(23, 1, '新书版'),
(22, 1, '热门推荐');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `nickName` varchar(255) NOT NULL,
  `avatarUrl` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL COMMENT '性别0女1男',
  `language` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `openid` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `nickName`, `avatarUrl`, `city`, `country`, `gender`, `language`, `province`, `code`, `openid`) VALUES
(6, '蓝铿', 'https://wx.qlogo.cn/mmopen/vi_32/rAy63xOK0TjCOIteBf7fkvZvtL2Nx9xgp44lsLqwAbBClDcXZS9aiboWW8kZWicTQDcQCqO8C0KmtrgQeUMn2YHQ/132', 'Chaozhou', 'China', 1, 'zh_CN', 'Guangdong', '023l0URD1fDwP50EX4RD1cMZRD1l0URS', 'oVNCG5ABAkl6dYMd6onayhbr18Rc');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
