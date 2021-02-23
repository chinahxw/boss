-- 2014-12-17 by yangfuyou

--
-- 表的结构 `button_icon`
--

CREATE TABLE IF NOT EXISTS `button_icon` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '图标id',
  `name` varchar(40) NOT NULL COMMENT '图标名',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='按钮图标表' AUTO_INCREMENT=456 ;

--
-- 转存表中的数据 `button_icon`
--

INSERT INTO `button_icon` (`id`, `name`) VALUES
(1, 'fa-plus'),
(2, 'fa-edit'),
(3, 'fa-trash-o'),
(4, 'fa-random'),
(5, 'fa-refresh'),
(6, 'fa-angle-double-left'),
(7, 'fa-search'),
(8, 'fa-arrow-circle-o-right'),
(9, 'fa-arrow-circle-o-left'),
(10, 'fa-asterisk'),
(11, 'fa-bar-chart-o'),
(12, 'fa-cloud-download'),
(13, 'fa-cloud-upload'),
(14, 'fa-download'),
(15, 'fa-female'),
(16, 'fa-exchange'),
(17, 'fa-eye'),
(18, 'fa-gear'),
(19, 'fa-gears'),
(20, 'fa-glass'),
(21, 'fa-group'),
(22, 'fa-heart'),
(23, 'fa-info'),
(24, 'fa-info-circle'),
(25, 'fa-key'),
(26, 'fa-male'),
(27, 'fa-money'),
(28, 'fa-tag'),
(29, 'fa-tags'),
(30, 'fa-unlock'),
(31, 'fa-user'),
(32, 'fa-wrench'),
(33, 'fa-chain'),
(34, 'fa-angle-double-up'),
(35, 'fa-save'),
(36, 'fa-undo'),
(37, 'fa-angle-double-right'),
(38, 'fa-arrow-left'),
(39, 'fa-arrow-right'),
(40, 'fa-arrow-up'),
(41, 'fa-arrow-down'),
(42, 'fa-rub'),
(43, 'fa-ruble'),
(44, 'fa-rouble'),
(45, 'fa-pagelines'),
(46, 'fa-stack-exchange'),
(47, 'fa-caret-square-o-left'),
(48, 'fa-toggle-left'),
(49, 'fa-dot-circle-o'),
(50, 'fa-wheelchair'),
(51, 'fa-vimeo-square'),
(52, 'fa-try'),
(53, 'fa-turkish-lira'),
(54, 'fa-plus-square-o'),
(55, 'fa-adjust'),
(56, 'fa-anchor'),
(57, 'fa-archive'),
(58, 'fa-arrows'),
(59, 'fa-arrows-h'),
(60, 'fa-arrows-v'),
(61, 'fa-ban'),
(62, 'fa-barcode'),
(63, 'fa-bars'),
(64, 'fa-beer'),
(65, 'fa-bell'),
(66, 'fa-bell-o'),
(67, 'fa-bolt'),
(68, 'fa-book'),
(69, 'fa-bookmark'),
(70, 'fa-bookmark-o'),
(71, 'fa-briefcase'),
(72, 'fa-bug'),
(73, 'fa-building-o'),
(74, 'fa-bullhorn'),
(75, 'fa-bullseye'),
(76, 'fa-calendar'),
(77, 'fa-calendar-o'),
(78, 'fa-camera'),
(79, 'fa-camera-retro'),
(80, 'fa-caret-square-o-down'),
(81, 'fa-caret-square-o-left'),
(82, 'fa-caret-square-o-right'),
(83, 'fa-caret-square-o-up'),
(84, 'fa-certificate'),
(85, 'fa-check'),
(86, 'fa-check-circle'),
(87, 'fa-check-circle-o'),
(88, 'fa-check-square'),
(89, 'fa-check-square-o'),
(90, 'fa-circle'),
(91, 'fa-circle-o'),
(92, 'fa-clock-o'),
(93, 'fa-cloud'),
(94, 'fa-code'),
(95, 'fa-code-fork'),
(96, 'fa-coffee'),
(97, 'fa-cog'),
(98, 'fa-cogs'),
(99, 'fa-comment'),
(100, 'fa-comment-o'),
(101, 'fa-comments'),
(102, 'fa-comments-o'),
(103, 'fa-compass'),
(104, 'fa-credit-card'),
(105, 'fa-crop'),
(106, 'fa-crosshairs'),
(107, 'fa-cutlery'),
(108, 'fa-dashboard'),
(109, 'fa-desktop'),
(110, 'fa-dot-circle-o'),
(111, 'fa-ellipsis-h'),
(112, 'fa-ellipsis-v'),
(113, 'fa-envelope'),
(114, 'fa-envelope-o'),
(115, 'fa-eraser'),
(116, 'fa-exclamation'),
(117, 'fa-exclamation-circle'),
(118, 'fa-exclamation-triangle'),
(119, 'fa-external-link'),
(120, 'fa-external-link-square'),
(121, 'fa-eye-slash'),
(122, 'fa-fighter-jet'),
(123, 'fa-film'),
(124, 'fa-filter'),
(125, 'fa-fire'),
(126, 'fa-fire-extinguisher'),
(127, 'fa-flag'),
(128, 'fa-flag-checkered'),
(129, 'fa-flag-o'),
(130, 'fa-flash'),
(131, 'fa-flask'),
(132, 'fa-folder'),
(133, 'fa-folder-o'),
(134, 'fa-folder-open'),
(135, 'fa-folder-open-o'),
(136, 'fa-frown-o'),
(137, 'fa-gamepad'),
(138, 'fa-gavel'),
(139, 'fa-gift'),
(140, 'fa-globe'),
(141, 'fa-hdd-o'),
(142, 'fa-headphones'),
(143, 'fa-heart-o'),
(144, 'fa-home'),
(145, 'fa-inbox'),
(146, 'fa-keyboard-o'),
(147, 'fa-laptop'),
(148, 'fa-leaf'),
(149, 'fa-legal'),
(150, 'fa-lemon-o'),
(151, 'fa-level-down'),
(152, 'fa-level-up'),
(153, 'fa-lightbulb-o'),
(154, 'fa-location-arrow'),
(155, 'fa-lock'),
(156, 'fa-magic'),
(157, 'fa-magnet'),
(158, 'fa-mail-forward'),
(159, 'fa-mail-reply'),
(160, 'fa-mail-reply-all'),
(161, 'fa-map-marker'),
(162, 'fa-meh-o'),
(163, 'fa-microphone'),
(164, 'fa-microphone-slash'),
(165, 'fa-minus'),
(166, 'fa-minus-circle'),
(167, 'fa-minus-square'),
(168, 'fa-minus-square-o'),
(169, 'fa-mobile'),
(170, 'fa-mobile-phone'),
(171, 'fa-moon-o'),
(172, 'fa-music'),
(173, 'fa-pencil'),
(174, 'fa-pencil-square'),
(175, 'fa-pencil-square-o'),
(176, 'fa-phone'),
(177, 'fa-phone-square'),
(178, 'fa-picture-o'),
(179, 'fa-plane'),
(180, 'fa-plus-circle'),
(181, 'fa-plus-square'),
(182, 'fa-plus-square-o'),
(183, 'fa-power-off'),
(184, 'fa-print'),
(185, 'fa-puzzle-piece'),
(186, 'fa-qrcode'),
(187, 'fa-question'),
(188, 'fa-question-circle'),
(189, 'fa-quote-left'),
(190, 'fa-quote-right'),
(191, 'fa-reply'),
(192, 'fa-reply-all'),
(193, 'fa-retweet'),
(194, 'fa-road'),
(195, 'fa-rocket'),
(196, 'fa-rss'),
(197, 'fa-rss-square'),
(198, 'fa-search-minus'),
(199, 'fa-search-plus'),
(200, 'fa-share'),
(201, 'fa-share-square'),
(202, 'fa-share-square-o'),
(203, 'fa-shield'),
(204, 'fa-shopping-cart'),
(205, 'fa-sign-in'),
(206, 'fa-sign-out'),
(207, 'fa-signal'),
(208, 'fa-sitemap'),
(209, 'fa-smile-o'),
(210, 'fa-sort'),
(211, 'fa-sort-alpha-asc'),
(212, 'fa-sort-alpha-desc'),
(213, 'fa-sort-amount-asc'),
(214, 'fa-sort-amount-desc'),
(215, 'fa-sort-asc'),
(216, 'fa-sort-desc'),
(217, 'fa-sort-down'),
(218, 'fa-sort-numeric-asc'),
(219, 'fa-sort-numeric-desc'),
(220, 'fa-sort-up'),
(221, 'fa-spinner'),
(222, 'fa-square'),
(223, 'fa-square-o'),
(224, 'fa-star'),
(225, 'fa-star-half'),
(226, 'fa-star-half-empty'),
(227, 'fa-star-half-full'),
(228, 'fa-star-half-o'),
(229, 'fa-star-o'),
(230, 'fa-subscript'),
(231, 'fa-suitcase'),
(232, 'fa-sun-o'),
(233, 'fa-superscript'),
(234, 'fa-tablet'),
(235, 'fa-tachometer'),
(236, 'fa-tasks'),
(237, 'fa-terminal'),
(238, 'fa-thumb-tack'),
(239, 'fa-thumbs-down'),
(240, 'fa-thumbs-o-down'),
(241, 'fa-thumbs-o-up'),
(242, 'fa-thumbs-up'),
(243, 'fa-ticket'),
(244, 'fa-times'),
(245, 'fa-times-circle'),
(246, 'fa-times-circle-o'),
(247, 'fa-tint'),
(248, 'fa-toggle-down'),
(249, 'fa-toggle-left'),
(250, 'fa-toggle-right'),
(251, 'fa-toggle-up'),
(252, 'fa-trophy'),
(253, 'fa-truck'),
(254, 'fa-umbrella'),
(255, 'fa-unlock-alt'),
(256, 'fa-unsorted'),
(257, 'fa-upload'),
(258, 'fa-users'),
(259, 'fa-video-camera'),
(260, 'fa-volume-down'),
(261, 'fa-volume-off'),
(262, 'fa-volume-up'),
(263, 'fa-warning'),
(264, 'fa-wheelchair'),
(265, 'fa-wrench'),
(266, 'fa-check-square'),
(267, 'fa-check-square-o'),
(268, 'fa-circle'),
(269, 'fa-circle-o'),
(270, 'fa-dot-circle-o'),
(271, 'fa-minus-square'),
(272, 'fa-minus-square-o'),
(273, 'fa-plus-square'),
(274, 'fa-plus-square-o'),
(275, 'fa-square'),
(276, 'fa-square-o'),
(277, 'fa-bitcoin'),
(278, 'fa-btc'),
(279, 'fa-cny'),
(280, 'fa-dollar'),
(281, 'fa-eur'),
(282, 'fa-euro'),
(283, 'fa-gbp'),
(284, 'fa-inr'),
(285, 'fa-jpy'),
(286, 'fa-krw'),
(287, 'fa-rmb'),
(288, 'fa-rouble'),
(289, 'fa-rub'),
(290, 'fa-ruble'),
(291, 'fa-rupee'),
(292, 'fa-try'),
(293, 'fa-turkish-lira'),
(294, 'fa-usd'),
(295, 'fa-won'),
(296, 'fa-yen'),
(297, 'fa-stethoscope'),
(298, 'fa-align-center'),
(299, 'fa-align-justify'),
(300, 'fa-align-left'),
(301, 'fa-align-right'),
(302, 'fa-bold'),
(303, 'fa-chain-broken'),
(304, 'fa-clipboard'),
(305, 'fa-columns'),
(306, 'fa-copy'),
(307, 'fa-cut'),
(308, 'fa-dedent'),
(309, 'fa-eraser'),
(310, 'fa-file'),
(311, 'fa-file-o'),
(312, 'fa-file-text'),
(313, 'fa-file-text-o'),
(314, 'fa-files-o'),
(315, 'fa-floppy-o'),
(316, 'fa-font'),
(317, 'fa-indent'),
(318, 'fa-italic'),
(319, 'fa-link'),
(320, 'fa-list'),
(321, 'fa-list-alt'),
(322, 'fa-list-ol'),
(323, 'fa-list-ul'),
(324, 'fa-outdent'),
(325, 'fa-paperclip'),
(326, 'fa-paste'),
(327, 'fa-repeat'),
(328, 'fa-rotate-left'),
(329, 'fa-rotate-right'),
(330, 'fa-scissors'),
(331, 'fa-strikethrough'),
(332, 'fa-table'),
(333, 'fa-text-height'),
(334, 'fa-text-width'),
(335, 'fa-th'),
(336, 'fa-th-large'),
(337, 'fa-th-list'),
(338, 'fa-underline'),
(339, 'fa-unlink'),
(340, 'fa-user-md'),
(341, 'fa-angle-double-down'),
(342, 'fa-angle-down'),
(343, 'fa-angle-left'),
(344, 'fa-angle-right'),
(345, 'fa-angle-up'),
(346, 'fa-arrow-circle-down'),
(347, 'fa-arrow-circle-left'),
(348, 'fa-arrow-circle-o-down'),
(349, 'fa-arrow-circle-o-up'),
(350, 'fa-arrow-circle-right'),
(351, 'fa-arrow-circle-up'),
(352, 'fa-arrows'),
(353, 'fa-arrows-alt'),
(354, 'fa-arrows-h'),
(355, 'fa-arrows-v'),
(356, 'fa-caret-down'),
(357, 'fa-caret-left'),
(358, 'fa-caret-right'),
(359, 'fa-caret-square-o-down'),
(360, 'fa-caret-square-o-left'),
(361, 'fa-caret-square-o-right'),
(362, 'fa-caret-square-o-up'),
(363, 'fa-caret-up'),
(364, 'fa-chevron-circle-down'),
(365, 'fa-chevron-circle-left'),
(366, 'fa-chevron-circle-right'),
(367, 'fa-chevron-circle-up'),
(368, 'fa-chevron-down'),
(369, 'fa-chevron-left'),
(370, 'fa-chevron-right'),
(371, 'fa-chevron-up'),
(372, 'fa-hand-o-down'),
(373, 'fa-hand-o-left'),
(374, 'fa-hand-o-right'),
(375, 'fa-hand-o-up'),
(376, 'fa-long-arrow-down'),
(377, 'fa-long-arrow-left'),
(378, 'fa-long-arrow-right'),
(379, 'fa-long-arrow-up'),
(380, 'fa-toggle-down'),
(381, 'fa-toggle-left'),
(382, 'fa-toggle-right'),
(383, 'fa-toggle-up'),
(384, 'fa-wheelchair'),
(385, 'fa-arrows-alt'),
(386, 'fa-backward'),
(387, 'fa-compress'),
(388, 'fa-eject'),
(389, 'fa-expand'),
(390, 'fa-fast-backward'),
(391, 'fa-fast-forward'),
(392, 'fa-forward'),
(393, 'fa-pause'),
(394, 'fa-play'),
(395, 'fa-play-circle'),
(396, 'fa-play-circle-o'),
(397, 'fa-step-backward'),
(398, 'fa-step-forward'),
(399, 'fa-stop'),
(400, 'fa-youtube-play'),
(401, 'fa-adn'),
(402, 'fa-android'),
(403, 'fa-apple'),
(404, 'fa-bitbucket'),
(405, 'fa-bitbucket-square'),
(406, 'fa-bitcoin'),
(407, 'fa-btc'),
(408, 'fa-css3'),
(409, 'fa-dribbble'),
(410, 'fa-dropbox'),
(411, 'fa-facebook'),
(412, 'fa-facebook-square'),
(413, 'fa-flickr'),
(414, 'fa-foursquare'),
(415, 'fa-github'),
(416, 'fa-github-alt'),
(417, 'fa-github-square'),
(418, 'fa-gittip'),
(419, 'fa-google-plus'),
(420, 'fa-google-plus-square'),
(421, 'fa-html5'),
(422, 'fa-instagram'),
(423, 'fa-linkedin'),
(424, 'fa-linkedin-square'),
(425, 'fa-linux'),
(426, 'fa-maxcdn'),
(427, 'fa-pagelines'),
(428, 'fa-pinterest'),
(429, 'fa-pinterest-square'),
(430, 'fa-renren'),
(431, 'fa-skype'),
(432, 'fa-stack-exchange'),
(433, 'fa-stack-overflow'),
(434, 'fa-trello'),
(435, 'fa-tumblr'),
(436, 'fa-tumblr-square'),
(437, 'fa-twitter'),
(438, 'fa-twitter-square'),
(439, 'fa-vimeo-square'),
(440, 'fa-vk'),
(441, 'fa-weibo'),
(442, 'fa-windows'),
(443, 'fa-xing'),
(444, 'fa-xing-square'),
(445, 'fa-youtube'),
(446, 'fa-youtube-play'),
(447, 'fa-youtube-square'),
(448, 'fa-ambulance'),
(449, 'fa-h-square'),
(450, 'fa-hospital-o'),
(451, 'fa-medkit'),
(452, 'fa-plus-square');
