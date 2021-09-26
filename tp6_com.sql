-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2021-09-26 15:53:26
-- 服务器版本： 5.7.34-log
-- PHP 版本： 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `tp6_com`
--

-- --------------------------------------------------------

--
-- 表的结构 `access_token`
--

CREATE TABLE `access_token` (
  `id` int(6) NOT NULL,
  `access_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `access_token`
--

INSERT INTO `access_token` (`id`, `access_token`) VALUES
(1, 'c262e61cd13ad99fc650e6908c7e5e65b63d2f32185ecfed6b801ee3fbdd5c0b');

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(2, '苏苏'),
(3, 'xinwen'),
(4, '新闻'),
(5, '资讯'),
(6, '阿萨德'),
(7, '335'),
(8, '45');

-- --------------------------------------------------------

--
-- 表的结构 `music_gedan`
--

CREATE TABLE `music_gedan` (
  `id` int(6) NOT NULL,
  `music` varchar(255) NOT NULL,
  `moren_uid` int(6) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL COMMENT '备注'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `music_gedan`
--

INSERT INTO `music_gedan` (`id`, `music`, `moren_uid`, `remarks`) VALUES
(1, 'https://music.163.com/outchain/player?type=0&id=5088694682&auto=0&height=430', 2, '只需要设置一段链接即可 [ https://music.163.com/outchain/player?type=0&id=5088694682&auto=0&height=430 ]'),
(5, 'https://music.163.com/outchain/player?type=0&id=5088694682&auto=0&height=430', 2, '默认轻音乐'),
(8, '//music.163.com/outchain/player?type=0&id=5442224496&auto=0&height=430', 2, 'https://music.163.com/#/outchain/0/5442224496/'),
(10, '//music.163.com/outchain/player?type=0&id=3778678&auto=0&height=430', 1, '热歌  '),
(11, 'https://www.cnblogs.com/yuan2333/p/7244380.html', 4, '(获取网易云外链教程链接 )https://www.cnblogs.com/yuan2333/p/7244380.html');

-- --------------------------------------------------------

--
-- 表的结构 `ss_links`
--

CREATE TABLE `ss_links` (
  `id` int(6) NOT NULL,
  `links` varchar(255) NOT NULL,
  `xlinksico` varchar(255) NOT NULL,
  `linkname` varchar(255) NOT NULL,
  `uid` int(6) NOT NULL,
  `class_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='id';

--
-- 转存表中的数据 `ss_links`
--

INSERT INTO `ss_links` (`id`, `links`, `xlinksico`, `linkname`, `uid`, `class_name`) VALUES
(9, 'http://blog.vwlin.cn', '#icon-bolezaixian', '站主博客', 10, 'Page'),
(10, 'https://blog.vwlin.cn/tools/', '#icon-ai-tool', '在线工具站', 10, 'Page'),
(11, 'http://blog.vwlin.cn', '#icon-bolezaixian', '站主博客', 10, 'Page'),
(13, 'https://blog.vwlin.cn/ss/', '#icon-sousuo', '简单搜搜', 10, 'Page'),
(15, 'http://tools.vwlin.cn/', '#icon-daohang', '工具站2.0', 10, 'Page'),
(16, 'http://tcu.vwlin.cn/', '#icon-instagram', '小小图床', 10, 'Page'),
(19, 'http://blog.vwlin.cn/tools/one/', '#icon-youhuiquan', '合成收款码', 10, 'Page'),
(21, 'http://vwlin.cn/', '#icon-wangluo1', '短网址API', 10, 'Page'),
(22, 'http://ti.vwlin.cn/', '#icon-jiaocheng', '爱刷题', 10, 'Page'),
(24, 'https://www.youtube.com/', '#icon-youtube', 'Youtube', 1, '视频媒体'),
(25, 'https://v.qq.com/', '#icon-tengxunshipin', '腾讯视频', 1, '视频媒体'),
(26, 'https://www.youku.com/', '#icon-youku', '优酷', 1, '视频媒体'),
(27, 'https://www.iqiyi.com/', '#icon-aiqiyi', '爱奇艺', 1, '视频媒体'),
(28, 'http://www.acfun.cn/index.html', '#icon-acfun', 'ACFUN', 1, '视频媒体'),
(29, 'https://www.bilibili.com/', '#icon-bili', '哔哩哔哩', 1, '视频媒体'),
(30, 'https://www.nfmovies.com/', '#icon-netflix', '奈非影视', 1, '视频媒体'),
(31, 'https://k1080.net/', '#icon-yingshi', 'K1080', 1, '视频媒体'),
(32, 'https://www.yunbtv.com/', '#icon-yunbo', '云播TV', 1, '视频媒体'),
(33, 'https://mail.google.com/mail/u/0/#inbox', '#icon-gmail', 'Gmail', 2, '邮箱'),
(34, 'https://outlook.live.com/mail/', '#icon-windows', 'Hotmail', 2, '邮箱'),
(35, 'https://mail.163.com/', '#icon-wangyi', '网易邮箱', 2, '邮箱'),
(36, 'https://mail.sina.com.cn/', '#icon-xinlangwang', '新浪邮箱', 2, '邮箱'),
(37, 'https://mail.qq.com/', '#icon-QQ', 'QQ邮箱', 2, '邮箱'),
(38, 'https://qiye.aliyun.com/', '#icon-yunyouxiang', '阿里邮箱', 2, '邮箱'),
(39, 'https://www.weibo.com', '#icon-weibo', '微博', 3, '社交资讯'),
(40, 'https://www.zhihu.com/', '#icon-zhihu', '知乎', 3, '社交资讯'),
(41, 'https://www.douban.com/', '#icon-douban', '豆瓣', 3, '社交资讯'),
(42, 'https://www.jianshu.com/', '#icon-jianshu', '简书', 3, '社交资讯'),
(43, 'https://www.v2ex.com/', '#icon-v2ex', 'V2EX', 3, '社交资讯'),
(44, 'https://www.instagram.com', '#icon-instagram', 'Instagram', 3, '社交资讯'),
(45, 'https://www.twitter.com', '#icon-twitter', 'Twitter', 3, '社交资讯'),
(46, 'https://www.facebook.com', '#icon-facebook', 'Facebook', 3, '社交资讯'),
(47, 'https://www.taobao.com', '#icon-taobao', '淘宝网', 4, '购物'),
(49, 'https://dyartstyle.com/juhuasuan/', '#icon-juhuasuan', '聚划算', 4, '购物'),
(50, 'https://dyartstyle.com/temai/', '#icon-temai', '淘宝特卖', 4, '购物'),
(51, 'https://mobile.yangkeduo.com/duo_cms_mall.html', '#icon-99', '拼多多', 4, '购物'),
(52, 'https://mobile.yangkeduo.com/duo_cms_mall.html', '#icon-99', '拼多多', 4, '购物'),
(53, 'https://mobile.yangkeduo.com/duo_cms_mall.html', '#icon-99', '拼多多', 4, '购物'),
(54, 'https://www.jd.com', '#icon-jingdong', '京东', 4, '购物'),
(55, 'https://www.suning.com/', '#icon-suning', '苏宁易购', 4, '购物'),
(56, 'http://you.163.com/', '#icon-yanxuan', '网易严选', 4, '购物'),
(57, 'https://www.amazon.cn/', '#icon-amazon', '亚马逊', 4, '购物'),
(58, 'http://www.dangdang.com/', '#icon-dangdang', '当当', 4, '购物'),
(59, 'https://wat.dyartstyle.com/', '#icon-wat', '吾爱淘', 4, '购物'),
(60, 'https://hao.5iux.cn/', '#icon-daohang1', '设计导航', 5, '设计视觉'),
(61, 'https://www.pinterest.com/', '#icon-pinterest', 'Pinterest', 5, '设计视觉'),
(62, 'https://www.behance.net/', '#icon-behance', 'Behance', 5, '设计视觉'),
(63, 'https://www.dribbble.com/', '#icon-dribbble', 'Dribbble', 5, '设计视觉'),
(64, 'https://huaban.com/', '#icon-huaban', '花瓣', 5, '设计视觉'),
(65, 'https://huaban.com/', '#icon-huaban', '花瓣', 5, '设计视觉'),
(66, 'https://www.zcool.com.cn/', '#icon-zhanku', '站酷', 5, '设计视觉'),
(67, 'https://www.iconfont.cn/', '#icon-iconfont', '阿里图标', 5, '设计视觉'),
(68, 'https://www.iconfinder.com/', '#icon-eye', 'IconFinder', 5, '设计视觉'),
(69, 'https://uiiiuiii.com/', '#icon-jiaocheng', '优设教程', 5, '设计视觉'),
(70, 'https://www.google.com/', '#icon-google', 'Google', 6, '搜索引擎'),
(71, 'https://duckduckgo.com/', '#icon-duck', 'DuckGo', 6, '搜索引擎'),
(72, 'https://www.bing.com/', '#icon-bing', 'Bing', 6, '搜索引擎'),
(73, 'https:/m.baidu.com/?pu=sz%401321_480&wpo=btmfast', '#icon-icon_baidulogo', '百度', 6, '搜索引擎'),
(74, 'https://hk.yahoo.com/', '#icon-yahoo', '雅虎', 6, '搜索引擎'),
(75, 'https://www.sogou.com/', '#icon-sougou', '搜狗', 6, '搜索引擎'),
(76, 'https://www.naver.com/', '#icon-icon-test', 'NAVER', 6, '搜索引擎'),
(77, 'https://mijisou.com/', '#icon-miji', '秘迹', 6, '搜索引擎'),
(78, 'https://www.dogedoge.com/', '#icon-gougou', '多吉', 6, '搜索引擎'),
(79, 'https://seeres.com/', '#icon-sousuo', 'seeres', 6, '搜索引擎'),
(80, 'https://tools.miku.ac/', '#icon-ai-tool', 'Miku工具', 7, '工具'),
(81, 'https://jiema.wwei.cn/', '#icon-wode', '二维码解码', 7, '工具'),
(82, 'https://ip.cn/', '#icon-wangluo', 'IP查询', 7, '工具'),
(83, 'https://translate.google.cn/?hl=zh-CN', '#icon-fanyi', '谷歌翻译', 7, '工具'),
(84, 'http://www.slimego.cn/', '#icon-shilaimu', '史莱姆', 7, '工具'),
(85, 'https://feedly.com', '#icon-feedly', 'Feedly', 7, '工具'),
(86, 'https://pan.baidu.com', '#icon-baiduyun', '百度网盘', 7, '工具'),
(87, 'http://www.mdeditor.com/', '#icon-md', 'MD编辑器', 7, '工具'),
(88, 'http://cubic-bezier.com', '#icon-quxian', '贝赛尔曲线', 7, '工具'),
(89, 'http://tool.chinaz.com/tools/base64.aspx', '#icon-base64', 'Base64', 7, '工具'),
(90, 'https://javascriptobfuscator.com/Javascript-Obfuscator.aspx', '#icon-jshunxiao', 'JS混淆器', 7, '工具'),
(91, 'https://ping.pe', '#icon-wangluo1', 'Ping.pe', 7, '工具'),
(92, 'https://ping.chinaz.com/', '#icon-pingup', '站长Ping', 7, '工具'),
(93, 'https://apkdl.in/', '#icon-anzhuo', 'APK下载', 7, '工具'),
(94, 'http://www.w3school.com.cn/', '#icon-h5', 'W3school', 8, '开发'),
(95, 'https://github.com/', '#icon-github', 'Github', 8, '开发'),
(96, 'https://codepen.io/', '#icon-theater-masks', 'Codepen', 8, '开发'),
(97, 'https://www.52pojie.cn/', '#icon-bolezaixian', '吾爱破解', 8, '开发'),
(98, 'https://bbs.binmt.cc/', '#icon-bolezaixian', 'MT论坛', 8, '开发'),
(99, 'http://www.cnhonkerarmy.com', '#icon-bolezaixian', '红客联盟', 8, '开发'),
(100, 'https://blog.csdn.net/', '#icon-bolezaixian', 'CSDN', 8, '开发'),
(101, 'https://segmentfault.com/', '#icon-msg', 'SF思否', 8, '开发'),
(102, 'https://cdnjs.com/', '#icon-cdnjs', 'CdnJs', 8, '开发'),
(103, 'https://fontawesome.com/icons?d=gallery&m=free', '#icon-font-awesome', 'Font A.', 8, '开发'),
(104, 'https://msdn.itellyou.cn/', '#icon-windows', 'MSDN下载', 8, '开发'),
(105, 'https://dash.cloudflare.com/', '#icon-cloudflare', 'C. flare', 8, '开发'),
(106, 'https://www.swiper.com.cn/', '#icon-S', 'Swiper', 8, '开发'),
(107, 'https://letsview.com/zh/?apptype=plopco', '#icon-pinterest', '幕享投屏', 9, '效率'),
(108, 'http://dict.youdao.com/', '#icon-wangyi', '有道词典', 9, '效率'),
(109, 'https://www.yinxiang.com', '#icon-wode', '印象笔记', 9, '效率'),
(110, 'http://note.youdao.com', '#icon-wangyi', '有道云笔记', 9, '效率'),
(111, 'https://naotu.baidu.com', '#icon-wode', '百度脑图', 9, '效率'),
(112, 'https://docs.qq.com/', '#icon-wode', '腾讯文档', 9, '效率'),
(113, 'https://new.qq.com/ch/ent/', '#icon-wode', '腾讯娱乐', 9, '效率'),
(114, 'https://ent.163.com/', '#icon-wangyi', '网易娱乐', 9, '效率'),
(115, 'https://ent.sina.com.cn/', '#icon-wode', '新浪娱乐', 9, '效率'),
(116, 'https://ent.huanqiu.com', '#icon-wode', '环球娱乐', 9, '效率'),
(117, 'https://github.com/', '#icon-github', 'github', 8, '开发'),
(118, 'https://github.com/', '#icon-github', 'git', 8, '开发'),
(119, 'http:\\/\\/blog.vwlin.cn', '#icon-bolezaixian', '站主博客', 10, 'Page'),
(120, 'http:\\/\\/blog.vwlin.cn', '#icon-bolezaixian', '站主博客', 10, 'Page'),
(121, 'http:\\/\\/blog.vwlin.cn', '#icon-bolezaixian', '站主博客', 10, 'Page'),
(122, 'https:\\/\\/github.com\\/', '#icon-github', 'git', 8, '开发'),
(123, 'https:\\/\\/github.com\\/', '#icon-github', 'github', 8, '开发'),
(124, 'https:\\/\\/github.com\\/', '#icon-github', 'github', 8, '开发'),
(125, 'http:\\/\\/blog.vwlin.cn', '#icon-bolezaixian', 'bk', 10, 'Page'),
(126, 'http:\\/\\/blog.vwlin.cn', '#icon-bolezaixian', 'bbk', 10, 'Page'),
(127, 'http:\\/\\/blog.vwlin.cn', '#icon-bolezaixian', 'bbnk', 4, '购物'),
(128, 'http://192.168.133.131:809/admin/start/#/home/homepage3', '#', 'home', 10, 'Page');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `last_ip` varchar(255) DEFAULT NULL,
  `is_admin` tinyint(4) DEFAULT '0',
  `lastlogin_time` int(11) NOT NULL,
  `login_count` int(11) NOT NULL,
  `nickname` varchar(255) NOT NULL COMMENT 'nicheng',
  `sex` enum('男','女','未知') DEFAULT NULL COMMENT 'xingbie',
  `avatar` varchar(255) NOT NULL COMMENT 'touxiang',
  `email` varchar(50) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `last_ip`, `is_admin`, `lastlogin_time`, `login_count`, `nickname`, `sex`, `avatar`, `email`, `remarks`) VALUES
(1, 'admin', 'ef744145bbc6f8ecdf5e27cfdbaed823', '11', 0, 11, 11, '小桃', '女', 'http://cdn.layui.com/avatar/168.jpg', 'susu@163.com', '22222222222222222222222222222');

--
-- 转储表的索引
--

--
-- 表的索引 `access_token`
--
ALTER TABLE `access_token`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `music_gedan`
--
ALTER TABLE `music_gedan`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `ss_links`
--
ALTER TABLE `ss_links`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `access_token`
--
ALTER TABLE `access_token`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用表AUTO_INCREMENT `music_gedan`
--
ALTER TABLE `music_gedan`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用表AUTO_INCREMENT `ss_links`
--
ALTER TABLE `ss_links`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
