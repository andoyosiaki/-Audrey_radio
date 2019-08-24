-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: 2019 年 8 月 22 日 11:42
-- サーバのバージョン： 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE `test`;
USE `TEST`;
--
-- Database: `test`
--
-- --------------------------------------------------------
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `created`) VALUES
(1, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2019-08-22 20:49:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;




--
-- テーブルの構造 `youtube`
--

CREATE TABLE `youtube` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `youtube`
--

INSERT INTO `youtube` (`id`, `name`, `url`) VALUES
(1, '東大受験に向けセンター試験を終えたオードリー春日だったが...', 'IAA1_9b1Mi8'),
(2, '春日が引くスターのラインについて若林が反論！！！', 'sOZu-KyNCmg'),
(3, '若林があの熱愛相手について春日に初公表！！', 'qEetCuhgxws'),
(4, '春日が入国審査で疑われ大ピンチ! その時身を守ってくれた［ある動画］とは...', 'DAA4ZRvo3cA'),
(5, '若林が重度の偏頭痛を治すため怪しいマッサージに行くが...', 'o19HbJ1J4Gg'),
(6, '今まで１度だけ、オードリー若林が結婚しようと思った元カノの話', '_onRmnYonTQ'),
(7, '芸人だらけの結婚式に参加してひたすら恥ずかしい思いをするオードリーwww', '8I5ttPn1Ab4'),
(8, '縮んだTシャツを元に戻すために奮闘する若林だが...', '94iPzMUtC8o'),
(9, '君の名は。を観てRADWIMPSのあの曲を知った春日だったが...', 'hg0fD6SpLTY'),
(10, '【ひらがな推し】ゲストにひらがなけやきが登場！井口の暴走を乗りこなすオードリーwww', 'c1WeLzg-Y_8'),
(11, 'くりぃむしちゅ〜上田の声マネでお祝いコメントを読む若林www', 'DFfX67Vbao0'),
(12, '若林が破局報道直後のラジオで明かした本音とは...', 'lJPXjiQKUWI'),
(13, 'NHKニュース番組で暴走するも不発に終わる春日w', 'FBG4AEO3w0Y'),
(14, '高校時代の旧友の豹変ぶりに当時イジり倒してた春日は...', 'O3309yzvrGg'),
(15, '露天風呂に乱入してきた大学生に春日が怒りのクレーム!!!', 'ViSkGi1f63U'),
(16, 'ケチすぎる春日に番組ディレクターから苦情!!! ', 'm0WeOkNKx9E'),
(17, '春日のお泊まり旅行での会話があのCMとシンクロwww', '5o39WmijIj4'),
(18, '【ひらがな推し】スナック眞緒伝説のラジオ版　春日の恋愛お悩み相談!!!', 'fX2ABwnj_sU'),
(19, '若林が惚れ込んだキャバ嬢の夢がベタすぎるwww', 'ZymzdlfnM_0'),
(20, '実際に録音した春日の寝言がヤバすぎるwww', 'M6aMUMWqWW8'),
(21, '若林が惚れ込んだキャバ嬢とデートへ！！！', 'KCGw2BGCgRM'),
(22, '春日への強烈なdisラップをかます若林&ENSHU！！！', 'e3CVfhyLB6A'),
(23, '春日の初キスはプリクラで...///', 'D1s-WP6XZZE'),
(24, '泥酔した春日と中川パラダイスがディズニーへ行った話', 'YQAxVXgOIMc'),
(25, '激ダサだと思っていた春日は実はイケメンだったのかもしれない', 'oEP0v0Pyq-k'),
(26, '春日はモテすぎてひらがなけやきが集まってくる', 'HeXs7aXahyI'),
(27, '【放送事故】アイツがビタースイートサンバにノって登場！', 'Y6IJLAsk6Us'),
(28, '【動画あり】春日が一番笑った若林のSASUKE不幸話www', 'ppZcSU-9a_A'),
(29, '春日がドッキリに嵌められて精神崩壊するまで', '20orQCfSYfo'),
(30, '目の前で春日にMVS獲られて発狂する若林www', '5p0_IMv9Qb4'),
(31, '朝起きたらむつみ荘のドアがどこでもドアになってた話', 'obP6FN32gGA'),
(32, 'キン肉マンを習得した日向坂の頭を撫でる方法を知りたい若林', 'JrwhJDT_nbA'),
(33, '春日は「表デルヤ」に改名します', 'rUX0YB0UT9s'),
(34, '電車で頭ポンポン撫でてるカップルやってんなぁおぃ!!!', 'hmzs0cpqr-4'),
(35, '病みすぎて仕事前に車中泊してる若林www', 'IdkuYJRvfCo'),
(36, '春日が子供達のヒーローになった日', 'sTv8MBJ55KU'),
(37, '少しでも明るく笑って欲しかったオードリーの漫才', 'ssH--vAQ0c0'),
(38, '25年借りたものを絶対に返して欲しくない春日', 'hMceAQTl1wI'),
(39, '子供がいるから日向坂46最年少上村ひなので泣いてしまう佐藤満春', 'KnNktgaN_CI'),
(40, '泣くほど怖いB面のオードリー春日www', '1B24rGbdrLo'),
(41, '春日語にブチ切れる若林www', 'j8lGGNfi7FI'),
(42, '若林が素人リスナーと絶対に負けられない大喜利対決をするが...', 'RS9VUvM6CdY'),
(43, '【祝結婚】春日を愛し、若林を忌み嫌う女の恐怖のメール', 'd-jF7OsV-fk'),
(44, 'カスミン公開プロポーズ裏話とオードリーの今後について', 'r2FJoHyVHco'),
(45, 'フライデーを撮られた春日に激怒し鉄拳制裁する若林！！！', 'ajy64Mg3veA'),
(46, 'たった1人でラジオをすることになった春日www', 'rnuR9xd48qI'),
(47, '若林のトイレが壊れてウ◯コ泥棒になった話', 'mbz_52F7NFc'),
(48, '下積み時代に春日が死ぬほど落ち込んだ話', 'wvdd2tICrfM'),
(49, '騒ぎの中、春日を励ましてくれたのは共に汗を流す同志だった', 'XbuC6rrn4Jk'),
(50, '若林のイタすぎるモンゴル旅行www', 'BW82LWVMPa4'),
(51, '乳首だけ切り抜かれたTシャツを守り抜きながら説教される春日www', '0mzXeAPsLjY'),
(52, 'ドS若林の正論ツッコミで春日の心が折れたフィンスイミング大会の話', 'm1Mmk_lBjFM'),
(53, 'ラジオ史上最もありえない噛み方をした春日www', 'FiD216weGv8'),
(54, '春日の相槌が不快すぎる若林執筆「ナナメの夕暮れ」の話', 'D7dchDYsOiE'),
(55, 'スマホの機種変がうまくできなくて超不機嫌な若林www', '4Tnr152myrQ'),
(56, '本気でセンター試験に挑んだ芸人 春日俊彰', 'OdYuZSExTSE'),
(57, '春日が昔盗まれた50万円をテレビの力で取り返したい', 'deXTlILlUIM'),
(58, '外国人が持つ「漫談チーム オドリ」の印象のお話', 'd8F5owhT-XA'),
(59, '2018年度オードリーのオールナイトニッポン個人的No.1 綺麗なオチトーク', '6Z77-YW1VQ8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`);
