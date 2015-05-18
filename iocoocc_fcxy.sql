/*
Navicat MySQL Data Transfer

Source Server         : demo
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : iocoocc_fcxy

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-05-18 13:45:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `articleid` int(8) NOT NULL AUTO_INCREMENT COMMENT '代码id，自增，唯一。',
  `addtime` datetime NOT NULL COMMENT '上传时间',
  `theme` varchar(100) NOT NULL COMMENT '主题（标题）',
  `type` varchar(40) NOT NULL COMMENT '代码分类（0：html）',
  `link` varchar(100) NOT NULL COMMENT '链接',
  `market` varchar(100) NOT NULL COMMENT '标签',
  `content` text NOT NULL COMMENT '内容',
  `checkstatu` int(5) NOT NULL COMMENT '审核状态',
  `username` varchar(100) NOT NULL,
  PRIMARY KEY (`articleid`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('57', '2015-04-15 21:29:27', '1111', '校园新闻', 'http://www.iocoo.cc', '大学生', '你好', '1', '');
INSERT INTO `article` VALUES ('60', '2015-04-15 21:32:13', '照片上传测试', '校园新闻', 'http://www.iocoo.cc', '教务办/社团/计算机/湖工大/大学生', '<img src=\"/fcxy/upload/image/20150415/20150415213156_58133.png\" alt=\"\" />', '1', '');
INSERT INTO `article` VALUES ('61', '2015-04-15 22:12:13', '金正恩看球赛，李雪主今年首现身', '校园新闻', 'http://www.iocoo.cc', '李雪主/金正恩', '<h1 id=\"h1title\" class=\"ep-h1\">\r\n	金正恩看球赛，李雪主今年首现身(图)\r\n</h1>\r\n<div class=\"clearfix\">\r\n	<div class=\"ep-time-soure cDGray\">\r\n		<br />\r\n	</div>\r\n	<div class=\"ep-tie-share\">\r\n		<br />\r\n	</div>\r\n</div>\r\n<div id=\"endText\" class=\"end-text\">\r\n	<div align=\"center\">\r\n		<div align=\"center\">\r\n			<img src=\"http://img1.cache.netease.com/catchpic/B/B9/B99416DB8D1E0246F5A54FF4F985478A.jpg\" alt=\"朝鲜领导人金正恩近日观看足球赛，庆祝“太阳节”，妻子李雪主陪同观看比赛。\" />\r\n		</div>\r\n<br />\r\n朝鲜领导人金正恩近日观看足球赛，庆祝“太阳节”，妻子李雪主陪同观看比赛。\r\n	</div>\r\n<br />\r\n晨报记者　徐惠芬　综合报道\r\n	<p>\r\n		据朝鲜《劳动新闻》14日报道，朝鲜领导人金正恩近日观看足球赛，庆祝“太阳节”（金日成诞辰日），金正恩的妻子李雪主陪同观看比赛。\r\n	</p>\r\n	<p>\r\n		这也是李雪主今年首次在公开场合露面。去年12月17日，李雪主曾参加悼念金正日逝世3周年活动，陪同金正恩一起参拜锦绣山太阳宫，至此次现身近4个月。\r\n	</p>\r\n	<p>\r\n		就像英国凯特王妃一样，李雪主是朝鲜女性时尚潮流的引领者。李雪主每次公开露面，都会引起狂热的潮流模仿，包括高跟鞋、首饰和着装。此次李雪主的发型以及所着的套装是否再会掀起模仿热潮，值得关注。\r\n	</p>\r\n	<p>\r\n		李雪主此次与金正恩在金日成体育场观看了足球赛。据《劳动新闻》报道，比赛双方为朝鲜的先锋队和火炬队，分别组建于2011年和2013年。最后，先锋队以3比1取得胜利。\r\n	</p>\r\n	<p>\r\n		<br />\r\n	</p>\r\n	<div class=\"gg200x300\">\r\n		<iframe src=\"http://g.163.com/r?site=netease&amp;affiliate=news&amp;cat=article&amp;type=logo300x250&amp;location=12\" frameborder=\"no\" height=\"250\" width=\"300\">\r\n		</iframe>\r\n	</div>\r\n	<p>\r\n		朝鲜劳动党高层领导崔龙海、金养建和体育部门的相关人士陪同观看了比赛。\r\n	</p>\r\n	<p>\r\n		报道还称，在中场休息时，平壤航空俱乐部展示了模型飞机的飞行表演，各种模型飞机变换着飞行姿势、高度和方向，展示了垂直飞行等高难度动作，还撒下礼炮，引起观众阵阵欢呼。\r\n	</p>\r\n	<p>\r\n		今年4月15日是朝鲜已故前领导人金日成诞辰103周年纪念日，为迎接“太阳节”的到来，朝鲜举行了一系列纪念活动，包括13日在平壤开幕的第17届金日成花节。据悉，此次花展的主题为《永不凋谢的金日成花—在伟大太阳的祝福下怒放》。\r\n	</p>\r\n	<p>\r\n		作者：徐惠芬　综合 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;\r\n	</p>\r\n</div>', '1', '');
INSERT INTO `article` VALUES ('62', '2015-04-16 08:54:20', '发表的文章', '社团资讯', 'http://www.iocoo.cc', '计算机/株洲/湖工大', '&lt;embed src=\"http://www.tudou.com/a/92J2xqpSxWY/&amp;bid=05&amp;iid=132404162&amp;resourceId=0_05_05_99/v.swf\" type=\"application/x-shockwave-flash\" allowscriptaccess=\"always\" allowfullscreen=\"true\" wmode=\"opaque\" width=\"480\" height=\"400\"&gt;&lt;/embed&gt;', '1', '');
INSERT INTO `article` VALUES ('63', '2015-04-16 08:55:02', 'ffff', '校园新闻', 'http://www.iocoo.cc', '湖工大', '<embed src=\"http://www.tudou.com/a/92J2xqpSxWY/&bid=05&iid=132404162&resourceId=0_05_05_99/v.swf\" type=\"application/x-shockwave-flash\" allowscriptaccess=\"always\" allowfullscreen=\"true\" wmode=\"opaque\" width=\"480\" height=\"400\"></embed>', '1', '');
INSERT INTO `article` VALUES ('64', '2015-05-14 10:57:19', '新闻看看看', '校园新闻', 'http://www.iocoo.cc', '计算机/株洲/湖工大/大学生', '这里是爱上i阿什顿撒谎的会受到会撒谎说实话 撒谎', '1', '');
INSERT INTO `article` VALUES ('65', '2015-05-14 12:30:54', '11111111111111111', '校园新闻', 'http://www.iocoo.cc', '计算机/湖工大/株洲', '111111111111111111111111111111111111111111111111', '1', '');
INSERT INTO `article` VALUES ('66', '2015-05-14 12:31:42', '社团资讯', '社团资讯', 'http://www.iocoo.cc', '社团', '这就萨肯定会安徽省空间的ask打卡上的 哈的', '1', '');
INSERT INTO `article` VALUES ('67', '2015-05-14 12:32:07', '招聘1', '校园招聘', 'http://www.iocoo.cc', '高大上', '招聘招聘', '1', '');
INSERT INTO `article` VALUES ('68', '2015-05-14 12:32:34', '校园广告', '校园广告', 'http://www.iocoo.cc', '株洲/湖工大', '阿斯顿撒打开 卡萨丁', '1', '');
INSERT INTO `article` VALUES ('69', '2015-05-14 12:32:50', '阿斯顿发生', '社团资讯', 'http://www.iocoo.cc', '湖工大', '啊是打撒烦死哒个', '1', '');
INSERT INTO `article` VALUES ('70', '2015-05-14 12:33:03', '社团111', '校园新闻', 'http://www.iocoo.cc', '社团', '111111', '1', '');
INSERT INTO `article` VALUES ('71', '2015-05-14 12:33:32', '为倒萨', '校园新闻', 'http://www.iocoo.cc', '湖工大/大学生/好人啊', '我的娃 方式大概', '1', '');
INSERT INTO `article` VALUES ('72', '2015-05-14 12:33:56', '看看新闻', '校园新闻', 'http://www.iocoo.cc', '湖工大', '收到货阿克苏读后感拉阿斯顿', '1', '');
INSERT INTO `article` VALUES ('73', '2015-05-14 12:35:15', '看看新闻', '校园新闻', 'http://www.iocoo.cc', '湖工大', '收到货阿克苏读后感拉阿斯顿', '1', '');
INSERT INTO `article` VALUES ('74', '2015-05-14 12:36:37', 'niha', '校园新闻', 'http://www.iocoo.cc', '大学生/湖工大', 'ni aiush iah ksahd ashd&nbsp;', '1', '');
INSERT INTO `article` VALUES ('75', '2015-05-14 14:42:51', '12121', '校园招聘', 'http://www.iocoo.cc', '株洲', '111111111111111111111111111111111', '1', '');
INSERT INTO `article` VALUES ('76', '2015-05-14 14:43:04', '212121', '社团资讯', 'http://www.iocoo.cc', '计算机', '12233333333333333333334', '1', '');
INSERT INTO `article` VALUES ('78', '2015-05-14 14:43:24', 'weqweqw', '校园新闻', 'http://www.iocoo.cc', '湖工大', 'wwwwwwwwwwwwwwwwwwww', '1', '');
INSERT INTO `article` VALUES ('79', '2015-05-14 14:43:35', 'wewqeqw', '校园新闻', 'http://www.iocoo.cc', '教务办/社团', 'wqqqqqqeeeeeeeeeeeeeqeqw', '1', '');
INSERT INTO `article` VALUES ('80', '2015-05-14 14:44:09', '那撒谎', '校园招聘', 'http://www.iocoo.cc', '株洲/湖工大', '四大大放送阿方索 爱上', '1', '');
INSERT INTO `article` VALUES ('82', '2015-05-14 14:44:29', '求稳定求稳定', '校园新闻', 'http://www.iocoo.cc', '计算机/株洲/湖工大', '求稳定求稳定求稳定求稳定求稳定求稳定求稳定求稳定求稳定求稳定求稳定求稳定求稳定求稳定', '1', '');

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `simpletalkid` varchar(100) NOT NULL COMMENT '说说id',
  `username` varchar(100) NOT NULL COMMENT '评论人',
  `contentname` varchar(100) NOT NULL COMMENT '文章作者',
  `addtime` datetime NOT NULL COMMENT '添加时间',
  `comment` varchar(1000) NOT NULL COMMENT '评论内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('1', '1430189088570', 'wenwen', 'ali', '0000-00-00 00:00:00', '这里是iping论内容');
INSERT INTO `comment` VALUES ('2', '1430188931868', 'ali', 'ali', '0000-00-00 00:00:00', '看淡赛过寒假打工叫阿三哥的叫阿三公开的阿帅');
INSERT INTO `comment` VALUES ('3', '1430188931868', 'ali', 'ali', '0000-00-00 00:00:00', 'askdh kasgdkjgas kjdgask ');
INSERT INTO `comment` VALUES ('4', '1430271319747', 'wwww', '', '0000-00-00 00:00:00', '我也说一句');
INSERT INTO `comment` VALUES ('5', '1430271319747', 'wwww', '', '0000-00-00 00:00:00', '12121213');
INSERT INTO `comment` VALUES ('6', '1430271319747', 'wwww', '', '2015-05-15 00:53:46', '你哈珀');
INSERT INTO `comment` VALUES ('7', '1430189088570', 'wwww', '', '2015-05-15 00:54:21', '我也说一句');
INSERT INTO `comment` VALUES ('8', '1430271319747', 'wwww', '', '2015-05-15 00:55:13', '111111111111111111');
INSERT INTO `comment` VALUES ('9', '1430271319747', 'wwww', '', '2015-05-15 00:58:03', '扫SD卡和阿斯顿');
INSERT INTO `comment` VALUES ('10', '1430271319747', 'wwww', '', '2015-05-15 00:59:14', '你好');
INSERT INTO `comment` VALUES ('11', '1430271319747', 'wwww', '', '2015-05-15 01:00:05', '我也说一句');
INSERT INTO `comment` VALUES ('12', '1430271319747', 'wwww', '', '2015-05-15 01:00:47', '我也说一句QWQ WQ ');
INSERT INTO `comment` VALUES ('13', '1430270984290', 'wwww', '', '2015-05-15 01:01:40', '我也说一句1');
INSERT INTO `comment` VALUES ('14', '1430270984290', 'wwww', '', '2015-05-15 01:02:45', '我也说一句11111');
INSERT INTO `comment` VALUES ('15', '1430271319747', 'wwww', 'wwww', '2015-05-15 01:03:37', 'NIHAO');
INSERT INTO `comment` VALUES ('16', '1430271319747', 'wwww', 'wwww', '2015-05-15 01:09:44', '我也说一句');
INSERT INTO `comment` VALUES ('17', '1430271319747', 'wwww', 'wwww', '2015-05-15 01:09:59', '王企鹅完全 ');
INSERT INTO `comment` VALUES ('18', '1430270984290', 'wwww', 'wwww', '2015-05-15 01:13:58', '我也说一句');
INSERT INTO `comment` VALUES ('19', '1430270984290', 'wwww', 'wwww', '2015-05-15 01:14:17', '萨达');
INSERT INTO `comment` VALUES ('20', '1431614486976', 'wwww', 'wwww', '2015-05-16 15:57:02', '我也说一句');
INSERT INTO `comment` VALUES ('21', '1431763027351', 'wwww', 'wwww', '2015-05-16 15:59:44', '湖南工业大学');
INSERT INTO `comment` VALUES ('22', '1431614486976', 'wwww', 'wwww', '2015-05-16 23:20:17', '我也说一句');
INSERT INTO `comment` VALUES ('23', 'new Date().getTime()', 'wwww', 'wwww', '2015-05-16 23:32:51', '我也说一句');
INSERT INTO `comment` VALUES ('24', '1431763027351', 'wwww', 'wwww', '2015-05-16 23:33:06', '我也说一句');
INSERT INTO `comment` VALUES ('25', '1431763027351', 'wwww', 'wwww', '2015-05-16 23:35:28', '你好');
INSERT INTO `comment` VALUES ('26', '1431763027351', 'wwww', 'wwww', '2015-05-16 23:35:55', '我也说一句');
INSERT INTO `comment` VALUES ('27', '1431763027351', 'wwww', 'wwww', '2015-05-16 23:36:17', '我也说一句');
INSERT INTO `comment` VALUES ('28', '1431763027351', 'wwww', 'wwww', '2015-05-16 23:37:52', '我也说一句');
INSERT INTO `comment` VALUES ('29', '1431763027351', 'wwww', 'wwww', '2015-05-16 23:38:32', '我也说一句');
INSERT INTO `comment` VALUES ('30', '1431763027351', 'wwww', 'wwww', '2015-05-16 23:38:46', '你说什么');
INSERT INTO `comment` VALUES ('31', '1431763027351', 'wwww', 'wwww', '2015-05-16 23:40:45', '');
INSERT INTO `comment` VALUES ('32', '1431763027351', 'wwww', 'wwww', '2015-05-16 23:42:51', '你好爱好撒谎');
INSERT INTO `comment` VALUES ('33', '1431614486976', 'wwww', 'wwww', '2015-05-17 17:03:06', '你好啊');
INSERT INTO `comment` VALUES ('34', '1431921663317', 'wwww', 'hhh', '2015-05-18 12:14:03', 'nihao ');
INSERT INTO `comment` VALUES ('35', '1431921663317', 'wwww', 'hhh', '2015-05-18 12:19:27', '爱你');
INSERT INTO `comment` VALUES ('36', '1431921663317', 'hhh', 'hhh', '2015-05-18 12:21:47', '我来试试');
INSERT INTO `comment` VALUES ('37', '1431853405951', 'hhh', 'wwww', '2015-05-18 12:22:02', '你这里没有东西啊');
INSERT INTO `comment` VALUES ('38', '1431922924280', 'hhh', 'hhh', '2015-05-18 12:22:55', '好霸气');

-- ----------------------------
-- Table structure for discuss
-- ----------------------------
DROP TABLE IF EXISTS `discuss`;
CREATE TABLE `discuss` (
  `discussid` int(10) NOT NULL AUTO_INCREMENT COMMENT '评论ID',
  `articleid` int(10) NOT NULL COMMENT '文章ID',
  `discusscontent` text COMMENT '评论内容',
  `discussaddtime` datetime NOT NULL COMMENT '评论时间',
  `discussauthor` varchar(100) NOT NULL COMMENT '评论人',
  PRIMARY KEY (`discussid`),
  KEY `codeid` (`articleid`),
  CONSTRAINT `codeid` FOREIGN KEY (`articleid`) REFERENCES `article` (`articleid`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of discuss
-- ----------------------------
INSERT INTO `discuss` VALUES ('6', '60', '秒懂！我实在是太聪明了！', '2015-04-15 22:06:40', 'admin');
INSERT INTO `discuss` VALUES ('7', '60', '说的什么啊，完全看不懂', '2015-04-15 22:07:20', 'admin');
INSERT INTO `discuss` VALUES ('8', '60', '<img src=\"../images/facegif/18.gif\"><img src=\"../images/facegif/10.gif\"><img src=\"../images/facegif/3.gif\">', '2015-04-15 22:07:30', 'admin');
INSERT INTO `discuss` VALUES ('9', '60', '涨姿势了，威武霸气', '2015-04-15 22:08:49', 'admin');
INSERT INTO `discuss` VALUES ('10', '60', '博大精深啊，学习学习', '2015-04-15 22:08:54', 'admin');
INSERT INTO `discuss` VALUES ('11', '60', '<img src=\"../images/facegif/112.gif\">', '2015-04-15 22:09:00', 'admin');
INSERT INTO `discuss` VALUES ('12', '60', '<img src=\"../images/facegif/21.gif\">', '2015-04-15 22:09:07', 'admin');
INSERT INTO `discuss` VALUES ('13', '61', '<img src=\"../images/facegif/17.gif\">', '2015-04-15 22:12:31', 'admin');
INSERT INTO `discuss` VALUES ('14', '63', '博大精深啊，学习学习', '2015-04-16 08:55:51', 'admin');
INSERT INTO `discuss` VALUES ('15', '61', '<img src=\"../images/facegif/17.gif\"><img src=\"../images/facegif/19.gif\">', '2015-04-17 16:10:09', 'admin');
INSERT INTO `discuss` VALUES ('16', '61', '博大精深啊，学习学习', '2015-04-17 16:10:17', 'admin');
INSERT INTO `discuss` VALUES ('17', '57', '博大精深啊，学习学习', '2015-05-13 21:12:40', 'admin');
INSERT INTO `discuss` VALUES ('18', '57', '<img src=\"../images/facegif/16.gif\"><img src=\"../images/facegif/20.gif\"><img src=\"../images/facegif/19.gif\">', '2015-05-13 21:12:50', 'admin');
INSERT INTO `discuss` VALUES ('19', '57', '说的什么啊，完全看不懂', '2015-05-13 21:13:10', 'admin');
INSERT INTO `discuss` VALUES ('20', '57', '博大精深啊，学习学习', '2015-05-13 21:13:16', 'admin');
INSERT INTO `discuss` VALUES ('21', '57', '瞬间感到高大上', '2015-05-13 21:13:20', 'admin');
INSERT INTO `discuss` VALUES ('22', '57', '说的什么啊，完全看不懂', '2015-05-13 21:13:25', 'admin');

-- ----------------------------
-- Table structure for gonggao
-- ----------------------------
DROP TABLE IF EXISTS `gonggao`;
CREATE TABLE `gonggao` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `addtime` datetime NOT NULL,
  `statu` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gonggao
-- ----------------------------
INSERT INTO `gonggao` VALUES ('1', '我校喜迎百年庆典，由教务办，校办公室以及各学院联合举办“2015-欢庆百年校庆”大型晚会，活动地点新篮球场，时间2015年10月1日。', '2015-05-17 00:00:00', '1');
INSERT INTO `gonggao` VALUES ('8', '\n					我校喜迎百年庆典，由教务办，校办公室以及各学院联合举办“2015-欢庆百年校庆”大型晚会，活动地点新篮球场，时间2015年10月1日。\n				', '2015-05-17 04:05:15', '1');
INSERT INTO `gonggao` VALUES ('9', '\n					我校喜迎百年庆典，由教务办，校办公室以及各学院联合举办“2015-欢庆百年校庆”大型晚会，活动地点新篮球场，时间2015年10月1日。\n				', '2015-05-17 04:06:08', '1');
INSERT INTO `gonggao` VALUES ('11', '我校喜迎百年庆典，由教务办，校办公室以及各学院联合举办“2015-欢庆百年校庆”大型晚会，活动地点新篮球场，时间2015年10月1日。', '2015-05-17 05:50:21', '1');

-- ----------------------------
-- Table structure for images
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `imgname` varchar(100) NOT NULL,
  `imgid` varchar(100) NOT NULL COMMENT '照片唯一ID',
  `username` varchar(100) NOT NULL COMMENT '用户名',
  `simpletalkid` varchar(100) NOT NULL COMMENT '说说id',
  `addtime` datetime NOT NULL COMMENT '添加时间',
  `imgsrc` varchar(100) NOT NULL COMMENT '照片路径',
  `imgtype` varchar(100) NOT NULL COMMENT '照片类型',
  `imgsize` double(100,0) NOT NULL COMMENT '照片大小',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=155 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of images
-- ----------------------------
INSERT INTO `images` VALUES ('30', 'HUT-143005631912851.jpg', '143005631912851', 'wwww', '1430056291673', '2015-04-26 09:51:59', '../upload/sipimage/HUT-143005631912851.jpg', 'image/jpeg', '98827');
INSERT INTO `images` VALUES ('31', 'HUT-143005631911059.jpg', '143005631911059', 'wwww', '1430056291673', '2015-04-26 09:51:59', '../upload/sipimage/HUT-143005631911059.jpg', 'image/jpeg', '103442');
INSERT INTO `images` VALUES ('32', 'HUT-143005632027423.jpg', '143005632027423', 'wwww', '1430056291673', '2015-04-26 09:52:00', '../upload/sipimage/HUT-143005632027423.jpg', 'image/jpeg', '79308');
INSERT INTO `images` VALUES ('33', 'HUT-14300563666640.jpg', '14300563666640', 'wwww', '1430056355365', '2015-04-26 09:52:46', '../upload/sipimage/HUT-14300563666640.jpg', 'image/jpeg', '91290');
INSERT INTO `images` VALUES ('34', 'HUT-143005636615980.jpg', '143005636615980', 'wwww', '1430056355365', '2015-04-26 09:52:46', '../upload/sipimage/HUT-143005636615980.jpg', 'image/jpeg', '106364');
INSERT INTO `images` VALUES ('35', 'HUT-143005636713853.jpg', '143005636713853', 'wwww', '1430056355365', '2015-04-26 09:52:47', '../upload/sipimage/HUT-143005636713853.jpg', 'image/jpeg', '78885');
INSERT INTO `images` VALUES ('36', 'HUT-14300565119933.jpg', '14300565119933', 'wwww', '1430056505022', '2015-04-26 09:55:11', '../upload/sipimage/HUT-14300565119933.jpg', 'image/jpeg', '78636');
INSERT INTO `images` VALUES ('37', 'HUT-14300565117920.jpg', '14300565117920', 'wwww', '1430056505022', '2015-04-26 09:55:11', '../upload/sipimage/HUT-14300565117920.jpg', 'image/jpeg', '60778');
INSERT INTO `images` VALUES ('38', 'HUT-143005651113878.jpg', '143005651113878', 'wwww', '1430056505022', '2015-04-26 09:55:11', '../upload/sipimage/HUT-143005651113878.jpg', 'image/jpeg', '78636');
INSERT INTO `images` VALUES ('39', 'HUT-143005685011138.jpg', '143005685011138', 'wwww', '1430056845319', '2015-04-26 10:00:50', '../upload/sipimage/HUT-143005685011138.jpg', 'image/jpeg', '79308');
INSERT INTO `images` VALUES ('40', 'HUT-14301023773841.jpg', '14301023773841', 'wwww', '1430102310898', '2015-04-27 10:39:37', '../upload/sipimage/HUT-14301023773841.jpg', 'image/jpeg', '103442');
INSERT INTO `images` VALUES ('41', 'HUT-143010237727797.jpg', '143010237727797', 'wwww', '1430102310898', '2015-04-27 10:39:37', '../upload/sipimage/HUT-143010237727797.jpg', 'image/jpeg', '79308');
INSERT INTO `images` VALUES ('42', 'HUT-1430102377694.jpg', '1430102377694', 'wwww', '1430102310898', '2015-04-27 10:39:37', '../upload/sipimage/HUT-1430102377694.jpg', 'image/jpeg', '105086');
INSERT INTO `images` VALUES ('43', 'HUT-143010237724998.jpg', '143010237724998', 'wwww', '1430102310898', '2015-04-27 10:39:37', '../upload/sipimage/HUT-143010237724998.jpg', 'image/jpeg', '91290');
INSERT INTO `images` VALUES ('44', 'HUT-143010237720906.jpg', '143010237720906', 'wwww', '1430102310898', '2015-04-27 10:39:37', '../upload/sipimage/HUT-143010237720906.jpg', 'image/jpeg', '106364');
INSERT INTO `images` VALUES ('45', 'HUT-143010262416795.jpg', '143010262416795', 'wwww', '1430102572597', '2015-04-27 10:43:44', '../upload/sipimage/HUT-143010262416795.jpg', 'image/jpeg', '101533');
INSERT INTO `images` VALUES ('46', 'HUT-143010262422840.jpg', '143010262422840', 'wwww', '1430102572597', '2015-04-27 10:43:44', '../upload/sipimage/HUT-143010262422840.jpg', 'image/jpeg', '100940');
INSERT INTO `images` VALUES ('47', 'HUT-143010262416483.jpg', '143010262416483', 'wwww', '1430102572597', '2015-04-27 10:43:44', '../upload/sipimage/HUT-143010262416483.jpg', 'image/jpeg', '78636');
INSERT INTO `images` VALUES ('48', 'HUT-143010262422503.jpg', '143010262422503', 'wwww', '1430102572597', '2015-04-27 10:43:44', '../upload/sipimage/HUT-143010262422503.jpg', 'image/jpeg', '98827');
INSERT INTO `images` VALUES ('49', 'HUT-143010262417504.jpg', '143010262417504', 'wwww', '1430102572597', '2015-04-27 10:43:44', '../upload/sipimage/HUT-143010262417504.jpg', 'image/jpeg', '60778');
INSERT INTO `images` VALUES ('50', 'HUT-143010262432660.jpg', '143010262432660', 'wwww', '1430102572597', '2015-04-27 10:43:44', '../upload/sipimage/HUT-143010262432660.jpg', 'image/jpeg', '93507');
INSERT INTO `images` VALUES ('51', 'HUT-143010266826642.jpg', '143010266826642', 'wwww', '1430102632484', '2015-04-27 10:44:28', '../upload/sipimage/HUT-143010266826642.jpg', 'image/jpeg', '79308');
INSERT INTO `images` VALUES ('52', 'HUT-14301028633353.jpg', '14301028633353', 'wwww', '1430102671844', '2015-04-27 10:47:43', '../upload/sipimage/HUT-14301028633353.jpg', 'image/jpeg', '101533');
INSERT INTO `images` VALUES ('53', 'HUT-143010286331715.jpg', '143010286331715', 'wwww', '1430102671844', '2015-04-27 10:47:43', '../upload/sipimage/HUT-143010286331715.jpg', 'image/jpeg', '100940');
INSERT INTO `images` VALUES ('54', 'HUT-143010286325054.jpg', '143010286325054', 'wwww', '1430102671844', '2015-04-27 10:47:43', '../upload/sipimage/HUT-143010286325054.jpg', 'image/jpeg', '98827');
INSERT INTO `images` VALUES ('55', 'HUT-14301028636624.jpg', '14301028636624', 'wwww', '1430102671844', '2015-04-27 10:47:43', '../upload/sipimage/HUT-14301028636624.jpg', 'image/jpeg', '79308');
INSERT INTO `images` VALUES ('56', 'HUT-143010286332703.jpg', '143010286332703', 'wwww', '1430102671844', '2015-04-27 10:47:43', '../upload/sipimage/HUT-143010286332703.jpg', 'image/jpeg', '106364');
INSERT INTO `images` VALUES ('57', 'HUT-143010286329849.jpg', '143010286329849', 'wwww', '1430102671844', '2015-04-27 10:47:43', '../upload/sipimage/HUT-143010286329849.jpg', 'image/jpeg', '93507');
INSERT INTO `images` VALUES ('58', 'HUT-14301050956383.jpg', '14301050956383', 'wwww', '1430104966629', '2015-04-27 11:24:55', '../upload/sipimage/HUT-14301050956383.jpg', 'image/jpeg', '420718');
INSERT INTO `images` VALUES ('59', 'HUT-143010509518060.jpg', '143010509518060', 'wwww', '1430104966629', '2015-04-27 11:24:55', '../upload/sipimage/HUT-143010509518060.jpg', 'image/jpeg', '289887');
INSERT INTO `images` VALUES ('60', 'HUT-14301050958188.jpg', '14301050958188', 'wwww', '1430104966629', '2015-04-27 11:24:55', '../upload/sipimage/HUT-14301050958188.jpg', 'image/jpeg', '310281');
INSERT INTO `images` VALUES ('61', 'HUT-14301050965765.jpg', '14301050965765', 'wwww', '1430104966629', '2015-04-27 11:24:56', '../upload/sipimage/HUT-14301050965765.jpg', 'image/jpeg', '369563');
INSERT INTO `images` VALUES ('62', 'HUT-143014327715633.jpg', '143014327715633', 'wwww', '1430143264947', '2015-04-27 10:01:17', '../upload/sipimage/HUT-143014327715633.jpg', 'image/jpeg', '92928');
INSERT INTO `images` VALUES ('63', 'HUT-143014327729534.jpg', '143014327729534', 'wwww', '1430143264947', '2015-04-27 10:01:17', '../upload/sipimage/HUT-143014327729534.jpg', 'image/jpeg', '113683');
INSERT INTO `images` VALUES ('64', 'HUT-143014327719674.jpg', '143014327719674', 'wwww', '1430143264947', '2015-04-27 10:01:17', '../upload/sipimage/HUT-143014327719674.jpg', 'image/jpeg', '125473');
INSERT INTO `images` VALUES ('65', 'HUT-143014327829503.jpg', '143014327829503', 'wwww', '1430143264947', '2015-04-27 10:01:18', '../upload/sipimage/HUT-143014327829503.jpg', 'image/jpeg', '117688');
INSERT INTO `images` VALUES ('66', 'HUT-143014327824182.jpg', '143014327824182', 'wwww', '1430143264947', '2015-04-27 10:01:18', '../upload/sipimage/HUT-143014327824182.jpg', 'image/jpeg', '93507');
INSERT INTO `images` VALUES ('67', 'HUT-143014327923671.jpg', '143014327923671', 'wwww', '1430143264947', '2015-04-27 10:01:19', '../upload/sipimage/HUT-143014327923671.jpg', 'image/jpeg', '105490');
INSERT INTO `images` VALUES ('68', 'HUT-143014327929708.jpg', '143014327929708', 'wwww', '1430143264947', '2015-04-27 10:01:19', '../upload/sipimage/HUT-143014327929708.jpg', 'image/jpeg', '63151');
INSERT INTO `images` VALUES ('69', 'HUT-143014327921771.jpg', '143014327921771', 'wwww', '1430143264947', '2015-04-27 10:01:19', '../upload/sipimage/HUT-143014327921771.jpg', 'image/jpeg', '133021');
INSERT INTO `images` VALUES ('70', 'HUT-143014433920708.jpg', '143014433920708', 'wwww', '1430144299211', '2015-04-27 10:18:59', '../upload/sipimage/HUT-143014433920708.jpg', 'image/jpeg', '93507');
INSERT INTO `images` VALUES ('71', 'HUT-14301443396477.jpg', '14301443396477', 'wwww', '1430144299211', '2015-04-27 10:18:59', '../upload/sipimage/HUT-14301443396477.jpg', 'image/jpeg', '63151');
INSERT INTO `images` VALUES ('72', 'HUT-143014433925045.jpg', '143014433925045', 'wwww', '1430144299211', '2015-04-27 10:18:59', '../upload/sipimage/HUT-143014433925045.jpg', 'image/jpeg', '105490');
INSERT INTO `images` VALUES ('73', 'HUT-143014433916360.jpg', '143014433916360', 'wwww', '1430144299211', '2015-04-27 10:18:59', '../upload/sipimage/HUT-143014433916360.jpg', 'image/jpeg', '133021');
INSERT INTO `images` VALUES ('74', 'HUT-143018587015850.jpg', '143018587015850', 'wwww', '1430185839353', '2015-04-28 09:51:10', '../upload/sipimage/HUT-143018587015850.jpg', 'image/jpeg', '113683');
INSERT INTO `images` VALUES ('75', 'HUT-14301858718131.jpg', '14301858718131', 'wwww', '1430185839353', '2015-04-28 09:51:11', '../upload/sipimage/HUT-14301858718131.jpg', 'image/jpeg', '117688');
INSERT INTO `images` VALUES ('76', 'HUT-143018587128325.jpg', '143018587128325', 'wwww', '1430185839353', '2015-04-28 09:51:11', '../upload/sipimage/HUT-143018587128325.jpg', 'image/jpeg', '93507');
INSERT INTO `images` VALUES ('77', 'HUT-143018891522747.jpg', '143018891522747', 'wwww', '1430188879052', '2015-04-28 10:41:55', '../upload/sipimage/HUT-143018891522747.jpg', 'image/jpeg', '92928');
INSERT INTO `images` VALUES ('78', 'HUT-14301889154730.jpg', '14301889154730', 'wwww', '1430188879052', '2015-04-28 10:41:55', '../upload/sipimage/HUT-14301889154730.jpg', 'image/jpeg', '125473');
INSERT INTO `images` VALUES ('79', 'HUT-143018891616248.jpg', '143018891616248', 'wwww', '1430188879052', '2015-04-28 10:41:56', '../upload/sipimage/HUT-143018891616248.jpg', 'image/jpeg', '113683');
INSERT INTO `images` VALUES ('80', 'HUT-143018891621997.jpg', '143018891621997', 'wwww', '1430188879052', '2015-04-28 10:41:56', '../upload/sipimage/HUT-143018891621997.jpg', 'image/jpeg', '117688');
INSERT INTO `images` VALUES ('81', 'HUT-143018891614891.jpg', '143018891614891', 'wwww', '1430188879052', '2015-04-28 10:41:56', '../upload/sipimage/HUT-143018891614891.jpg', 'image/jpeg', '93507');
INSERT INTO `images` VALUES ('82', 'HUT-143018891618001.jpg', '143018891618001', 'wwww', '1430188879052', '2015-04-28 10:41:56', '../upload/sipimage/HUT-143018891618001.jpg', 'image/jpeg', '105490');
INSERT INTO `images` VALUES ('83', 'HUT-143018891731778.jpg', '143018891731778', 'wwww', '1430188879052', '2015-04-28 10:41:57', '../upload/sipimage/HUT-143018891731778.jpg', 'image/jpeg', '63151');
INSERT INTO `images` VALUES ('84', 'HUT-14301889173720.jpg', '14301889173720', 'wwww', '1430188879052', '2015-04-28 10:41:57', '../upload/sipimage/HUT-14301889173720.jpg', 'image/jpeg', '133021');
INSERT INTO `images` VALUES ('85', 'HUT-143018895826291.jpg', '143018895826291', 'wwww', '1430188931868', '2015-04-28 10:42:38', '../upload/sipimage/HUT-143018895826291.jpg', 'image/jpeg', '101533');
INSERT INTO `images` VALUES ('86', 'HUT-143018895820150.jpg', '143018895820150', 'wwww', '1430188931868', '2015-04-28 10:42:38', '../upload/sipimage/HUT-143018895820150.jpg', 'image/jpeg', '100940');
INSERT INTO `images` VALUES ('87', 'HUT-14301889595633.jpg', '14301889595633', 'wwww', '1430188931868', '2015-04-28 10:42:39', '../upload/sipimage/HUT-14301889595633.jpg', 'image/jpeg', '98827');
INSERT INTO `images` VALUES ('88', 'HUT-143018895929808.jpg', '143018895929808', 'wwww', '1430188931868', '2015-04-28 10:42:39', '../upload/sipimage/HUT-143018895929808.jpg', 'image/jpeg', '103442');
INSERT INTO `images` VALUES ('89', 'HUT-143018895910167.jpg', '143018895910167', 'wwww', '1430188931868', '2015-04-28 10:42:39', '../upload/sipimage/HUT-143018895910167.jpg', 'image/jpeg', '79308');
INSERT INTO `images` VALUES ('90', 'HUT-143018895925577.jpg', '143018895925577', 'wwww', '1430188931868', '2015-04-28 10:42:39', '../upload/sipimage/HUT-143018895925577.jpg', 'image/jpeg', '91290');
INSERT INTO `images` VALUES ('91', 'HUT-143018895923718.jpg', '143018895923718', 'wwww', '1430188931868', '2015-04-28 10:42:39', '../upload/sipimage/HUT-143018895923718.jpg', 'image/jpeg', '105086');
INSERT INTO `images` VALUES ('92', 'HUT-143018895923332.jpg', '143018895923332', 'wwww', '1430188931868', '2015-04-28 10:42:39', '../upload/sipimage/HUT-143018895923332.jpg', 'image/jpeg', '106364');
INSERT INTO `images` VALUES ('93', 'HUT-143018895914446.jpg', '143018895914446', 'wwww', '1430188931868', '2015-04-28 10:42:39', '../upload/sipimage/HUT-143018895914446.jpg', 'image/jpeg', '78885');
INSERT INTO `images` VALUES ('94', 'HUT-143018896014055.jpg', '143018896014055', 'wwww', '1430188931868', '2015-04-28 10:42:40', '../upload/sipimage/HUT-143018896014055.jpg', 'image/jpeg', '78636');
INSERT INTO `images` VALUES ('95', 'HUT-143018896030349.jpg', '143018896030349', 'wwww', '1430188931868', '2015-04-28 10:42:40', '../upload/sipimage/HUT-143018896030349.jpg', 'image/jpeg', '78636');
INSERT INTO `images` VALUES ('96', 'HUT-14301889608258.jpg', '14301889608258', 'wwww', '1430188931868', '2015-04-28 10:42:40', '../upload/sipimage/HUT-14301889608258.jpg', 'image/jpeg', '60778');
INSERT INTO `images` VALUES ('97', 'HUT-143018911120767.jpg', '143018911120767', 'ali', '1430189088570', '2015-04-28 10:45:11', '../upload/sipimage/HUT-143018911120767.jpg', 'image/jpeg', '171310');
INSERT INTO `images` VALUES ('98', 'HUT-143018911229332.jpg', '143018911229332', 'ali', '1430189088570', '2015-04-28 10:45:12', '../upload/sipimage/HUT-143018911229332.jpg', 'image/jpeg', '310281');
INSERT INTO `images` VALUES ('99', 'HUT-14301891124413.jpg', '14301891124413', 'ali', '1430189088570', '2015-04-28 10:45:12', '../upload/sipimage/HUT-14301891124413.jpg', 'image/jpeg', '369563');
INSERT INTO `images` VALUES ('100', 'HUT-143018911211372.jpg', '143018911211372', 'ali', '1430189088570', '2015-04-28 10:45:12', '../upload/sipimage/HUT-143018911211372.jpg', 'image/jpeg', '278671');
INSERT INTO `images` VALUES ('101', 'HUT-1430189112565.jpg', '1430189112565', 'ali', '1430189088570', '2015-04-28 10:45:12', '../upload/sipimage/HUT-1430189112565.jpg', 'image/jpeg', '223679');
INSERT INTO `images` VALUES ('102', 'HUT-143018911318122.jpg', '143018911318122', 'ali', '1430189088570', '2015-04-28 10:45:13', '../upload/sipimage/HUT-143018911318122.jpg', 'image/jpeg', '181388');
INSERT INTO `images` VALUES ('103', 'HUT-14301891137474.jpg', '14301891137474', 'ali', '1430189088570', '2015-04-28 10:45:13', '../upload/sipimage/HUT-14301891137474.jpg', 'image/jpeg', '330229');
INSERT INTO `images` VALUES ('104', 'HUT-14302281224756.jpg', '14302281224756', 'wwww', '1430228096999', '2015-04-28 09:35:22', '../upload/sipimage/HUT-14302281224756.jpg', 'image/jpeg', '278671');
INSERT INTO `images` VALUES ('105', 'HUT-143027130332061.jpg', '143027130332061', 'wwww', '1430270984290', '2015-04-29 09:35:03', '../upload/sipimage/HUT-143027130332061.jpg', 'image/jpeg', '186285');
INSERT INTO `images` VALUES ('106', 'HUT-143027130313743.jpg', '143027130313743', 'wwww', '1430270984290', '2015-04-29 09:35:03', '../upload/sipimage/HUT-143027130313743.jpg', 'image/jpeg', '174767');
INSERT INTO `images` VALUES ('107', 'HUT-14302713036450.jpg', '14302713036450', 'wwww', '1430270984290', '2015-04-29 09:35:03', '../upload/sipimage/HUT-14302713036450.jpg', 'image/jpeg', '89936');
INSERT INTO `images` VALUES ('108', 'HUT-14302713039859.jpg', '14302713039859', 'wwww', '1430270984290', '2015-04-29 09:35:03', '../upload/sipimage/HUT-14302713039859.jpg', 'image/jpeg', '101295');
INSERT INTO `images` VALUES ('109', 'HUT-14302713040.jpg', '14302713040', 'wwww', '1430270984290', '2015-04-29 09:35:04', '../upload/sipimage/HUT-14302713040.jpg', 'image/jpeg', '227409');
INSERT INTO `images` VALUES ('110', 'HUT-143027130423996.png', '143027130423996', 'wwww', '1430270984290', '2015-04-29 09:35:04', '../upload/sipimage/HUT-143027130423996.png', 'image/png', '922999');
INSERT INTO `images` VALUES ('111', 'HUT-143027130412345.jpg', '143027130412345', 'wwww', '1430270984290', '2015-04-29 09:35:04', '../upload/sipimage/HUT-143027130412345.jpg', 'image/jpeg', '61912');
INSERT INTO `images` VALUES ('112', 'HUT-14302713045758.jpg', '14302713045758', 'wwww', '1430270984290', '2015-04-29 09:35:04', '../upload/sipimage/HUT-14302713045758.jpg', 'image/jpeg', '346026');
INSERT INTO `images` VALUES ('113', 'HUT-143027130410207.jpg', '143027130410207', 'wwww', '1430270984290', '2015-04-29 09:35:04', '../upload/sipimage/HUT-143027130410207.jpg', 'image/jpeg', '475280');
INSERT INTO `images` VALUES ('114', 'HUT-14302714357212.jpg', '14302714357212', 'wwww', '1430271319747', '2015-04-29 09:37:15', '../upload/sipimage/HUT-14302714357212.jpg', 'image/jpeg', '128054');
INSERT INTO `images` VALUES ('115', 'HUT-14302714354354.jpg', '14302714354354', 'wwww', '1430271319747', '2015-04-29 09:37:15', '../upload/sipimage/HUT-14302714354354.jpg', 'image/jpeg', '112453');
INSERT INTO `images` VALUES ('116', 'HUT-14302714355877.jpg', '14302714355877', 'wwww', '1430271319747', '2015-04-29 09:37:15', '../upload/sipimage/HUT-14302714355877.jpg', 'image/jpeg', '72098');
INSERT INTO `images` VALUES ('117', 'HUT-143027143524901.jpg', '143027143524901', 'wwww', '1430271319747', '2015-04-29 09:37:15', '../upload/sipimage/HUT-143027143524901.jpg', 'image/jpeg', '174767');
INSERT INTO `images` VALUES ('118', 'HUT-14302714358346.jpg', '14302714358346', 'wwww', '1430271319747', '2015-04-29 09:37:15', '../upload/sipimage/HUT-14302714358346.jpg', 'image/jpeg', '152920');
INSERT INTO `images` VALUES ('119', 'HUT-143027143532203.jpg', '143027143532203', 'wwww', '1430271319747', '2015-04-29 09:37:15', '../upload/sipimage/HUT-143027143532203.jpg', 'image/jpeg', '133943');
INSERT INTO `images` VALUES ('120', 'HUT-14302714356568.jpg', '14302714356568', 'wwww', '1430271319747', '2015-04-29 09:37:15', '../upload/sipimage/HUT-14302714356568.jpg', 'image/jpeg', '254307');
INSERT INTO `images` VALUES ('121', 'HUT-14302714367306.jpg', '14302714367306', 'wwww', '1430271319747', '2015-04-29 09:37:16', '../upload/sipimage/HUT-14302714367306.jpg', 'image/jpeg', '231754');
INSERT INTO `images` VALUES ('122', 'HUT-14302714362579.jpg', '14302714362579', 'wwww', '1430271319747', '2015-04-29 09:37:16', '../upload/sipimage/HUT-14302714362579.jpg', 'image/jpeg', '56674');
INSERT INTO `images` VALUES ('123', 'HUT-143027143625339.jpg', '143027143625339', 'wwww', '1430271319747', '2015-04-29 09:37:16', '../upload/sipimage/HUT-143027143625339.jpg', 'image/jpeg', '92707');
INSERT INTO `images` VALUES ('124', 'HUT-143027143617488.jpg', '143027143617488', 'wwww', '1430271319747', '2015-04-29 09:37:16', '../upload/sipimage/HUT-143027143617488.jpg', 'image/jpeg', '107196');
INSERT INTO `images` VALUES ('125', 'HUT-14302714369801.jpg', '14302714369801', 'wwww', '1430271319747', '2015-04-29 09:37:16', '../upload/sipimage/HUT-14302714369801.jpg', 'image/jpeg', '203925');
INSERT INTO `images` VALUES ('126', 'HUT-143027143715182.jpg', '143027143715182', 'wwww', '1430271319747', '2015-04-29 09:37:17', '../upload/sipimage/HUT-143027143715182.jpg', 'image/jpeg', '274063');
INSERT INTO `images` VALUES ('127', 'HUT-143027143713423.jpg', '143027143713423', 'wwww', '1430271319747', '2015-04-29 09:37:17', '../upload/sipimage/HUT-143027143713423.jpg', 'image/jpeg', '263688');
INSERT INTO `images` VALUES ('128', 'HUT-143027143720248.jpg', '143027143720248', 'wwww', '1430271319747', '2015-04-29 09:37:17', '../upload/sipimage/HUT-143027143720248.jpg', 'image/jpeg', '59490');
INSERT INTO `images` VALUES ('129', 'HUT-143027143721884.jpg', '143027143721884', 'wwww', '1430271319747', '2015-04-29 09:37:17', '../upload/sipimage/HUT-143027143721884.jpg', 'image/jpeg', '61310');
INSERT INTO `images` VALUES ('130', 'HUT-143152290012601.jpg', '143152290012601', 'wwww', '1431522875897', '2015-05-13 09:15:00', '../upload/sipimage/HUT-143152290012601.jpg', 'image/jpeg', '89436');
INSERT INTO `images` VALUES ('131', 'HUT-143152290024259.jpg', '143152290024259', 'wwww', '1431522875897', '2015-05-13 09:15:00', '../upload/sipimage/HUT-143152290024259.jpg', 'image/jpeg', '63569');
INSERT INTO `images` VALUES ('132', 'HUT-143152290030832.jpg', '143152290030832', 'wwww', '1431522875897', '2015-05-13 09:15:00', '../upload/sipimage/HUT-143152290030832.jpg', 'image/jpeg', '71509');
INSERT INTO `images` VALUES ('133', 'HUT-1431522900894.jpg', '1431522900894', 'wwww', '1431522875897', '2015-05-13 09:15:00', '../upload/sipimage/HUT-1431522900894.jpg', 'image/jpeg', '40224');
INSERT INTO `images` VALUES ('134', 'HUT-143176305828094.jpg', '143176305828094', 'wwww', '1431763027351', '2015-05-16 03:57:38', '../upload/sipimage/HUT-143176305828094.jpg', 'image/jpeg', '64240');
INSERT INTO `images` VALUES ('139', 'HUT-143192295626792.jpg', '143192295626792', 'hhh', '1431922924280', '2015-05-18 12:22:36', '../upload/sipimage/HUT-143192295626792.jpg', 'image/jpeg', '13429');
INSERT INTO `images` VALUES ('140', 'HUT-143192645132108.jpg', '143192645132108', 'hhh', '1431926373219', '2015-05-18 01:20:51', '../upload/sipimage/HUT-143192645132108.jpg', 'image/jpeg', '68471');
INSERT INTO `images` VALUES ('141', 'HUT-143192645221663.jpg', '143192645221663', 'hhh', '1431926373219', '2015-05-18 01:20:52', '../upload/sipimage/HUT-143192645221663.jpg', 'image/jpeg', '113318');
INSERT INTO `images` VALUES ('142', 'HUT-143192645216611.jpg', '143192645216611', 'hhh', '1431926373219', '2015-05-18 01:20:52', '../upload/sipimage/HUT-143192645216611.jpg', 'image/jpeg', '42416');
INSERT INTO `images` VALUES ('143', 'HUT-143192645232565.jpg', '143192645232565', 'hhh', '1431926373219', '2015-05-18 01:20:52', '../upload/sipimage/HUT-143192645232565.jpg', 'image/jpeg', '38830');
INSERT INTO `images` VALUES ('144', 'HUT-143192645210732.jpg', '143192645210732', 'hhh', '1431926373219', '2015-05-18 01:20:52', '../upload/sipimage/HUT-143192645210732.jpg', 'image/jpeg', '131212');
INSERT INTO `images` VALUES ('145', 'HUT-143192645229109.jpg', '143192645229109', 'hhh', '1431926373219', '2015-05-18 01:20:52', '../upload/sipimage/HUT-143192645229109.jpg', 'image/jpeg', '209045');
INSERT INTO `images` VALUES ('146', 'HUT-143192645232714.jpg', '143192645232714', 'hhh', '1431926373219', '2015-05-18 01:20:52', '../upload/sipimage/HUT-143192645232714.jpg', 'image/jpeg', '47744');
INSERT INTO `images` VALUES ('147', 'HUT-143192645316458.jpg', '143192645316458', 'hhh', '1431926373219', '2015-05-18 01:20:53', '../upload/sipimage/HUT-143192645316458.jpg', 'image/jpeg', '356306');
INSERT INTO `images` VALUES ('148', 'HUT-14319264539531.jpg', '14319264539531', 'hhh', '1431926373219', '2015-05-18 01:20:53', '../upload/sipimage/HUT-14319264539531.jpg', 'image/jpeg', '63204');
INSERT INTO `images` VALUES ('149', 'HUT-143192645331456.jpg', '143192645331456', 'hhh', '1431926373219', '2015-05-18 01:20:53', '../upload/sipimage/HUT-143192645331456.jpg', 'image/jpeg', '107806');
INSERT INTO `images` VALUES ('150', 'HUT-14319264537099.jpg', '14319264537099', 'hhh', '1431926373219', '2015-05-18 01:20:53', '../upload/sipimage/HUT-14319264537099.jpg', 'image/jpeg', '49650');
INSERT INTO `images` VALUES ('151', 'HUT-143192645316793.jpg', '143192645316793', 'hhh', '1431926373219', '2015-05-18 01:20:53', '../upload/sipimage/HUT-143192645316793.jpg', 'image/jpeg', '90677');
INSERT INTO `images` VALUES ('152', 'HUT-143192645330936.jpg', '143192645330936', 'hhh', '1431926373219', '2015-05-18 01:20:53', '../upload/sipimage/HUT-143192645330936.jpg', 'image/jpeg', '206276');
INSERT INTO `images` VALUES ('153', 'HUT-14319264531112.jpg', '14319264531112', 'hhh', '1431926373219', '2015-05-18 01:20:53', '../upload/sipimage/HUT-14319264531112.jpg', 'image/jpeg', '97974');
INSERT INTO `images` VALUES ('154', 'HUT-143192645315454.jpg', '143192645315454', 'hhh', '1431926373219', '2015-05-18 01:20:53', '../upload/sipimage/HUT-143192645315454.jpg', 'image/jpeg', '44480');

-- ----------------------------
-- Table structure for mark
-- ----------------------------
DROP TABLE IF EXISTS `mark`;
CREATE TABLE `mark` (
  `mark_id` int(5) NOT NULL AUTO_INCREMENT,
  `mark_title` varchar(50) NOT NULL,
  PRIMARY KEY (`mark_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mark
-- ----------------------------
INSERT INTO `mark` VALUES ('1', '大学生');
INSERT INTO `mark` VALUES ('2', '湖工大');
INSERT INTO `mark` VALUES ('3', '株洲');
INSERT INTO `mark` VALUES ('4', '计算机');
INSERT INTO `mark` VALUES ('5', '社团');
INSERT INTO `mark` VALUES ('6', '教务办');
INSERT INTO `mark` VALUES ('7', '高大上');

-- ----------------------------
-- Table structure for simpletalk
-- ----------------------------
DROP TABLE IF EXISTS `simpletalk`;
CREATE TABLE `simpletalk` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL COMMENT '用户名',
  `simpletalk` text NOT NULL COMMENT '评论内容',
  `goodnum` int(10) NOT NULL COMMENT '赞数',
  `addtime` datetime NOT NULL COMMENT '添加时间',
  `simpletalkid` varchar(100) NOT NULL COMMENT '评论id',
  `seaarea` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of simpletalk
-- ----------------------------
INSERT INTO `simpletalk` VALUES ('4', 'wwww', '121212', '0', '2015-04-26 09:52:04', '1430056291673', '所有人');
INSERT INTO `simpletalk` VALUES ('5', 'wwww', 'jsakdh ksahd k', '0', '2015-04-26 09:52:51', '1430056355365', '所有人');
INSERT INTO `simpletalk` VALUES ('7', 'wwww', 'qewa ', '0', '2015-04-26 09:57:40', '0', '所有人');
INSERT INTO `simpletalk` VALUES ('8', 'wwww', 'sar sdgd fgs dg sd', '0', '2015-04-26 09:58:33', '00000000', '所有人');
INSERT INTO `simpletalk` VALUES ('9', 'wwww', '121212', '0', '2015-04-26 10:02:24', '00000000', '所有人');
INSERT INTO `simpletalk` VALUES ('10', 'wwww', '21321', '0', '2015-04-26 10:03:36', '00000000', '所有人');
INSERT INTO `simpletalk` VALUES ('11', 'wwww', '1231 23 12', '0', '2015-04-26 10:03:58', '00000000', '所有人');
INSERT INTO `simpletalk` VALUES ('12', 'wwww', 'nihao', '0', '2015-04-27 10:39:41', '1430102310898', '所有人');
INSERT INTO `simpletalk` VALUES ('13', 'wwww', 'erfs fds g', '0', '2015-04-27 10:43:50', '1430102572597', '所有人');
INSERT INTO `simpletalk` VALUES ('14', 'wwww', '1212', '0', '2015-04-27 10:44:30', '1430102632484', '所有人');
INSERT INTO `simpletalk` VALUES ('15', 'wwww', 'dakshd ag kd', '0', '2015-04-27 10:47:48', '1430102671844', '所有人');
INSERT INTO `simpletalk` VALUES ('16', 'wwww', '', '0', '2015-04-27 11:07:39', '00000000', '所有人');
INSERT INTO `simpletalk` VALUES ('17', 'wwww', '今天天气不错，适合出去逛街<img src=\"../images/facegif/14.gif\"><img src=\"../images/facegif/13.gif\"><img src=\"../images/facegif/27.gif\">', '0', '2015-04-27 11:24:58', '1430104966629', '所有人');
INSERT INTO `simpletalk` VALUES ('18', 'wwww', '卡看这住撒搞定撒搞定开公司达到就是个阿姐鼓快嗦嘎分快速的咖啡馆空手道嘎反馈给看过撒开<img src=\"../images/facegif/16.gif\"><img src=\"../images/facegif/28.gif\"><img src=\"../images/facegif/27.gif\">无情请问请问我D<img src=\"../images/facegif/20.gif\"><img src=\"../images/facegif/43.gif\"><img src=\"../images/facegif/42.gif\">', '0', '2015-04-27 10:00:37', '00000000', '所有人');
INSERT INTO `simpletalk` VALUES ('19', 'wwww', 'ASHD AKJSDH LSJAH H KSAGDK K SD卡和啊山厉河带了撒谎烧开后', '0', '2015-04-27 10:01:28', '1430143264947', '所有人');
INSERT INTO `simpletalk` VALUES ('20', 'wwww', '12123123123123', '0', '2015-04-27 10:04:25', '00000000', '所有人');
INSERT INTO `simpletalk` VALUES ('21', 'wwww', '你好，这里是照片预览墙', '0', '2015-04-27 10:19:17', '1430144299211', '所有人');
INSERT INTO `simpletalk` VALUES ('22', 'wwww', '<img src=\"../images/facegif/14.gif\">', '0', '2015-04-27 10:22:11', '00000000', '所有人');
INSERT INTO `simpletalk` VALUES ('23', 'wwww', '', '0', '2015-04-27 10:25:09', '00000000', '所有人');
INSERT INTO `simpletalk` VALUES ('24', 'wwww', 'qwe wqew', '0', '2015-04-27 10:25:16', '00000000', '所有人');
INSERT INTO `simpletalk` VALUES ('25', 'wwww', 'wqre ar', '0', '2015-04-27 10:25:58', '00000000', '所有人');
INSERT INTO `simpletalk` VALUES ('26', 'ali', 'asd ashkdg aksgd ksa', '0', '2015-04-27 10:26:26', '00000000', '所有人');
INSERT INTO `simpletalk` VALUES ('27', 'ali', '', '0', '2015-04-27 10:29:48', '00000000', '所有人');
INSERT INTO `simpletalk` VALUES ('28', 'ali', '1', '0', '2015-04-27 10:31:42', '00000000', '所有人');
INSERT INTO `simpletalk` VALUES ('29', 'wwww', 'wewewewxzv vzxcv safdsa fdsfsdfadfvcxzvafa fasfsadfasdf', '0', '2015-04-28 09:51:13', '1430185839353', '所有人');
INSERT INTO `simpletalk` VALUES ('30', 'wwww', '看看照片的小伙真奥斯卡聚合弹可好', '0', '2015-04-28 10:42:09', '1430188879052', '所有人');
INSERT INTO `simpletalk` VALUES ('31', 'wwww', '瓜瓜', '0', '2015-04-28 10:42:47', '1430188931868', '所有人');
INSERT INTO `simpletalk` VALUES ('32', 'ali', 'ali的测试照片', '0', '2015-04-28 10:45:28', '1430189088570', '所有人');
INSERT INTO `simpletalk` VALUES ('33', 'wwww', 'safasf saf fdsaf afdsafsf asf sa', '0', '2015-04-29 09:35:17', '1430270984290', '所有人');
INSERT INTO `simpletalk` VALUES ('34', 'wwww', 'efsdf sfas fa fsfsdfsadffs', '0', '2015-04-29 09:37:28', '1430271319747', '所有人');
INSERT INTO `simpletalk` VALUES ('35', 'wwww', '<img src=\"../images/facegif/4.gif\"><img src=\"../images/facegif/16.gif\"><img src=\"../images/facegif/15.gif\"><img src=\"../images/facegif/41.gif\"><img src=\"../images/facegif/41.gif\"><img src=\"../images/facegif/53.gif\">你阿訇安徽省', '0', '2015-05-13 09:14:34', '00000000', '所有人');
INSERT INTO `simpletalk` VALUES ('36', 'wwww', '大傻瓜阿斯顿奥斯卡的阿斯钢顾客家阿哥SD卡阿斯钢', '0', '2015-05-13 09:15:14', '1431522875897', '所有人');
INSERT INTO `simpletalk` VALUES ('37', 'wwww', '<img src=\"../images/facegif/4.gif\">', '0', '2015-05-14 12:24:33', '00000000', '所有人');
INSERT INTO `simpletalk` VALUES ('38', 'wwww', '121212', '0', '2015-05-14 10:36:04', '00000000', '所有人');
INSERT INTO `simpletalk` VALUES ('39', 'wwww', '111', '0', '2015-05-14 10:40:57', 'new Date().getTime()', '所有人');
INSERT INTO `simpletalk` VALUES ('40', 'wwww', '121212', '0', '2015-05-14 10:41:27', '1431614486976', '所有人');
INSERT INTO `simpletalk` VALUES ('41', 'wwww', '测试<img src=\"../images/facegif/41.gif\"><img src=\"../images/facegif/42.gif\">', '0', '2015-05-16 03:57:58', '1431763027351', '仅自己');
INSERT INTO `simpletalk` VALUES ('42', 'wwww', '<img src=\"../images/facegif/16.gif\"><img src=\"../images/facegif/17.gif\"><img src=\"../images/facegif/18.gif\">', '0', '2015-05-17 05:03:25', '1431853405951', '仅自己');
INSERT INTO `simpletalk` VALUES ('44', 'hhh', '<img src=\"../images/facegif/3.gif\">', '0', '2015-05-18 12:01:03', '1431921663317', '所有人');
INSERT INTO `simpletalk` VALUES ('45', 'hhh', '图书馆', '0', '2015-05-18 12:22:46', '1431922924280', '所有人');
INSERT INTO `simpletalk` VALUES ('46', 'hhh', '工大美图', '0', '2015-05-18 01:21:17', '1431926373219', '所有人');

-- ----------------------------
-- Table structure for type_per
-- ----------------------------
DROP TABLE IF EXISTS `type_per`;
CREATE TABLE `type_per` (
  `id` int(5) NOT NULL AUTO_INCREMENT COMMENT '类型ID',
  `typeid` int(5) NOT NULL,
  `type_name` varchar(20) NOT NULL COMMENT '类型名',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of type_per
-- ----------------------------

-- ----------------------------
-- Table structure for type_son
-- ----------------------------
DROP TABLE IF EXISTS `type_son`;
CREATE TABLE `type_son` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `per_name` varchar(100) NOT NULL COMMENT '父元素名称',
  `typeid` int(5) NOT NULL,
  `type_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of type_son
-- ----------------------------
INSERT INTO `type_son` VALUES ('1', '全部', '1', '校园新闻');
INSERT INTO `type_son` VALUES ('2', '全部', '2', '社团资讯');
INSERT INTO `type_son` VALUES ('3', '全部', '3', '校园招聘');
INSERT INTO `type_son` VALUES ('4', '全部', '4', '校园求助');
INSERT INTO `type_son` VALUES ('5', '全部', '5', '校园广告');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `userid` int(10) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `username` varchar(100) NOT NULL,
  `userpsd` varchar(100) NOT NULL,
  `usersex` varchar(20) NOT NULL DEFAULT '' COMMENT '性别',
  `userage` int(5) NOT NULL DEFAULT '18' COMMENT '年龄',
  `useremail` varchar(100) NOT NULL,
  `userqq` varchar(100) NOT NULL COMMENT 'QQ',
  `userphone` varchar(50) NOT NULL COMMENT '电话',
  `usertype` varchar(20) NOT NULL DEFAULT '0' COMMENT '用户类型（普通0/管理员1）',
  `userscore` int(10) NOT NULL DEFAULT '0' COMMENT '会员升级经验',
  `registertime` datetime NOT NULL COMMENT '注册时间',
  `lastlogintime` datetime NOT NULL COMMENT '最后登录时间',
  `logincount` int(8) NOT NULL DEFAULT '0' COMMENT '登陆次数',
  `userlogo` varchar(100) NOT NULL DEFAULT '' COMMENT '用户头像',
  `loginip` varchar(100) NOT NULL COMMENT '最后登录ip',
  `registerip` varchar(100) NOT NULL COMMENT '注册ip',
  `truename` varchar(100) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('9', 'ovenslove', 'd1dca782eaf655585bda1508f22aef9c6367675e', '', '18', '1905997838@qq.com', '', '18673363141', '学生', '0', '2015-04-17 05:57:18', '0000-00-00 00:00:00', '0', '', '', '', '');
INSERT INTO `user` VALUES ('53', 'wwww', 'c6cb3a20044247c04947a307a8cd74b4', '男', '18', '19057@qq.com', '1905997838', '18673363145', '学生', '0', '2015-04-17 09:49:34', '0000-00-00 00:00:00', '0', '../images/logo.jpg', '', ' ::1', 'nihao');
INSERT INTO `user` VALUES ('56', 'ali', '827a0cbb9eecc6c02e556c704368a481', '', '18', 'aliali@ali.ali', '', '13522222223', '学生', '0', '2015-04-27 10:24:26', '0000-00-00 00:00:00', '0', '../images/logo.jpg', '', ' ::1', '');
INSERT INTO `user` VALUES ('58', '111', '', '', '18', '', '', '', '学生', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '', '', '', '');
INSERT INTO `user` VALUES ('59', '1212', '', '', '18', '', '', '', '学生', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '', '', '', '');
INSERT INTO `user` VALUES ('63', '12121', '', '', '18', '', '', '', '学生', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '', '', '', '');
INSERT INTO `user` VALUES ('64', '232323', '', '', '18', '', '', '', '学生', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '', '', '', '');
INSERT INTO `user` VALUES ('79', 'liuwenwen', '646e583f36fb0a7b415f9d012adc876f', '', '18', '19059978318@qq.com', '', '18673363146', '学生', '0', '2015-05-18 11:53:35', '0000-00-00 00:00:00', '0', '../images/logo.jpg', '', ' ::1', '');
INSERT INTO `user` VALUES ('80', 'kkk', '952998ff2abccb2c77fceed1a2439791', '', '18', 'kkkkkkk@kk.com', '', '15811111111', '学生', '0', '2015-05-18 11:58:09', '0000-00-00 00:00:00', '0', '../images/logo.jpg', '', ' ::1', '');
INSERT INTO `user` VALUES ('81', 'hhh', '0da9fdfb4234963e151ba43ee7f7305f', '男', '18', 'hhhh@111.com', '88888888', '18766666666', '学生', '0', '2015-05-18 11:59:43', '0000-00-00 00:00:00', '0', '../images/logo.jpg', '', ' ::1', '工大');

-- ----------------------------
-- Table structure for vedio
-- ----------------------------
DROP TABLE IF EXISTS `vedio`;
CREATE TABLE `vedio` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `link` text NOT NULL,
  `addtime` datetime NOT NULL,
  `title` varchar(100) NOT NULL,
  `statu` int(5) unsigned NOT NULL,
  `laiyuan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vedio
-- ----------------------------
INSERT INTO `vedio` VALUES ('1', '<embed src=\"http://player.youku.com/player.php/sid/XNTk3NTMxNjgw/v.swf\" allowFullScreen=\"true\" quality=\"high\" width=\"480\" height=\"400\" align=\"middle\" allowScriptAccess=\"always\" type=\"application/x-shockwave-flash\"></embed>', '0000-00-00 00:00:00', '致大学-湖南工业大学', '1', '优酷');
INSERT INTO `vedio` VALUES ('3', '<embed src=\"http://player.youku.com/player.php/sid/XNzI5MjQ5NDI0/v.swf\" allowFullScreen=\"true\" quality=\"high\" width=\"480\" height=\"400\" align=\"middle\" allowScriptAccess=\"always\" type=\"application/x-shockwave-flash\"></embed>', '0000-00-00 00:00:00', '工大等你来-湖南工业大学', '1', '优酷');
