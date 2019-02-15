-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 01:14 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsonar`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_or_business_area`
--

CREATE TABLE `client_or_business_area` (
  `clientBusiness_id` int(11) NOT NULL,
  `clientBusiness_name` varchar(255) NOT NULL,
  `clientBusiness_contactName` varchar(255) NOT NULL,
  `clientBusiness_email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_or_business_area`
--

INSERT INTO `client_or_business_area` (`clientBusiness_id`, `clientBusiness_name`, `clientBusiness_contactName`, `clientBusiness_email`) VALUES
(4, 'Software House', 'Bilal Mota', 'mota@soft.com'),
(5, 'Pharmaceutical Company', 'Tallal', 'tallal@pharma.com'),
(6, 'Sports Goods', 'Muhammad Uzair', 'uz@az.com');

-- --------------------------------------------------------

--
-- Table structure for table `hiring_manager`
--

CREATE TABLE `hiring_manager` (
  `hiringManager_id` int(11) NOT NULL,
  `hiringManager_name` varchar(255) NOT NULL,
  `hiringManager_email` varchar(150) NOT NULL,
  `hiringManager_jobTitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hiring_manager`
--

INSERT INTO `hiring_manager` (`hiringManager_id`, `hiringManager_name`, `hiringManager_email`, `hiringManager_jobTitle`) VALUES
(1, 'Bilal Akram', 'bilalakram@leadconcept.com', 'Designer');

-- --------------------------------------------------------

--
-- Table structure for table `talent_requests`
--

CREATE TABLE `talent_requests` (
  `talentRequest_id` int(11) NOT NULL,
  `jobField` varchar(255) NOT NULL,
  `jobTitle` varchar(255) NOT NULL,
  `jobLocation` varchar(255) NOT NULL,
  `jobLevel` varchar(255) NOT NULL,
  `teamDirectReport` varchar(150) NOT NULL,
  `TeamTotalfunctions` varchar(150) NOT NULL,
  `contractType` varchar(150) NOT NULL,
  `contractMonths` int(11) NOT NULL,
  `payAmount` int(11) NOT NULL,
  `flexiblePay` tinyint(1) NOT NULL DEFAULT '0',
  `Bonus` varchar(100) NOT NULL,
  `workType` varchar(100) NOT NULL,
  `workHours` int(11) NOT NULL,
  `objective_1` varchar(255) NOT NULL,
  `objective_2` varchar(255) NOT NULL,
  `objective_3` varchar(255) NOT NULL,
  `levelCapability` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `successorReady` varchar(100) NOT NULL,
  `qualifications` varchar(100) NOT NULL,
  `specificSkill_1` varchar(255) NOT NULL,
  `specificSkill_2` varchar(255) NOT NULL,
  `specificSkill_3` varchar(255) NOT NULL,
  `bonusBuyOut` varchar(100) NOT NULL,
  `relocationAssistance` varchar(100) NOT NULL,
  `flexibleWorking` varchar(100) NOT NULL,
  `targetCandidate_1` varchar(255) NOT NULL,
  `targetCandidate_2` varchar(255) NOT NULL,
  `targetCandidate_3` varchar(255) NOT NULL,
  `additionalRequirements` varchar(255) NOT NULL,
  `videoLink` text NOT NULL,
  `attachments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ts_countries`
--

CREATE TABLE `ts_countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ts_countries`
--

INSERT INTO `ts_countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People\'s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People\'s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'ES', 'Spain'),
(203, 'LK', 'Sri Lanka'),
(204, 'SH', 'St. Helena'),
(205, 'PM', 'St. Pierre and Miquelon'),
(206, 'SD', 'Sudan'),
(207, 'SR', 'Suriname'),
(208, 'SJ', 'Svalbard and Jan Mayen Islands'),
(209, 'SZ', 'Swaziland'),
(210, 'SE', 'Sweden'),
(211, 'CH', 'Switzerland'),
(212, 'SY', 'Syrian Arab Republic'),
(213, 'TW', 'Taiwan'),
(214, 'TJ', 'Tajikistan'),
(215, 'TZ', 'Tanzania, United Republic of'),
(216, 'TH', 'Thailand'),
(217, 'TG', 'Togo'),
(218, 'TK', 'Tokelau'),
(219, 'TO', 'Tonga'),
(220, 'TT', 'Trinidad and Tobago'),
(221, 'TN', 'Tunisia'),
(222, 'TR', 'Turkey'),
(223, 'TM', 'Turkmenistan'),
(224, 'TC', 'Turks and Caicos Islands'),
(225, 'TV', 'Tuvalu'),
(226, 'UG', 'Uganda'),
(227, 'UA', 'Ukraine'),
(228, 'AE', 'United Arab Emirates'),
(229, 'GB', 'United Kingdom'),
(230, 'US', 'United States'),
(231, 'UM', 'United States minor outlying islands'),
(232, 'UY', 'Uruguay'),
(233, 'UZ', 'Uzbekistan'),
(234, 'VU', 'Vanuatu'),
(235, 'VA', 'Vatican City State'),
(236, 'VE', 'Venezuela'),
(237, 'VN', 'Vietnam'),
(238, 'VG', 'Virgin Islands (British)'),
(239, 'VI', 'Virgin Islands (U.S.)'),
(240, 'WF', 'Wallis and Futuna Islands'),
(241, 'EH', 'Western Sahara'),
(242, 'YE', 'Yemen'),
(243, 'ZR', 'Zaire'),
(244, 'ZM', 'Zambia'),
(245, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `ts_users`
--

CREATE TABLE `ts_users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zipcode` varchar(20) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `avatar` text NOT NULL,
  `password` varchar(200) NOT NULL,
  `reset_password` varchar(250) DEFAULT NULL,
  `activation_token` varchar(255) NOT NULL,
  `activation_time` datetime(6) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `oauth_uid` varchar(255) NOT NULL,
  `formattedName` varchar(255) NOT NULL,
  `companyLoc` varchar(255) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `companyWebsite` varchar(255) NOT NULL,
  `companyId` int(100) NOT NULL,
  `startMonth` int(50) NOT NULL,
  `startYear` int(50) NOT NULL,
  `jobTitle` varchar(255) NOT NULL,
  `isCurrent` int(11) NOT NULL,
  `locale` varchar(255) NOT NULL,
  `numConnections` int(50) NOT NULL,
  `profile_url` varchar(255) NOT NULL,
  `user_type` varchar(100) NOT NULL DEFAULT 'tsonar',
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ts_users`
--

INSERT INTO `ts_users` (`id`, `firstname`, `lastname`, `email`, `gender`, `state`, `zipcode`, `city`, `country`, `phone`, `avatar`, `password`, `reset_password`, `activation_token`, `activation_time`, `status`, `oauth_uid`, `formattedName`, `companyLoc`, `industry`, `headline`, `companyName`, `companyWebsite`, `companyId`, `startMonth`, `startYear`, `jobTitle`, `isCurrent`, `locale`, `numConnections`, `profile_url`, `user_type`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 'nouman.arshad69@gmail.com', NULL, NULL, NULL, NULL, 'PK', '03456789234', 'data:image/jpeg;base64,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', 'e10adc3949ba59abbe56e057f20f883e', NULL, '', NULL, 1, '', '', '', '', '', 'Leadconcept', 'leadconcept.com', 0, 0, 0, 'Admin', 0, '', 0, '', 'tsonar', 1, '2018-12-03 11:47:42', NULL),
(2, 'nomi', 'nomi', 'nomi@nomi.com', NULL, NULL, NULL, NULL, 'PK', '', '', 'e10adc3949ba59abbe56e057f20f883e', NULL, 'b6046bd5bfdeeeb6ac84e851543838390', NULL, 1, '', '', '', '', '', '', '', 0, 0, 0, '', 0, '', 0, '', 'tsonar', 2, '2018-12-03 11:59:50', NULL),
(3, 'Noman', 'Arshad', 'nouman.arshad69@gmail.com', '', NULL, NULL, NULL, 'PK', '', 'https://media.licdn.com/dms/image/C4D03AQHLllATNvP1Uw/profile-displayphoto-shrink_100_100/0?e=1549497600&v=beta&t=Sa6ELQux1ZTVSD5i_HSEVE_VwEeAM3E4xKRNFrIfhq0', '', NULL, 'AQX0yCCf6h5uIOBhx4nC6uUD8TtQoTUhmvEy0gg06rKvHT9b2r-Jj67rC6SWvYZ7txZ4wg71dftAQy767LWucTCzegqA52efLe_m8tsRaqmw5jbVLIrMle6uGBQK-nCgg5IFYzFwYmDDl9CpW3qYu2zAOdalGZdZ5DfoMSGSrcw0fgApC9EVKQLAaDe22U4FTyIQTrzzg76yib1CKWDxf4CGGkexNbFaXPu1n3e52C_0l8j_Dcb_hrnH1QSPqvy', '2018-12-03 17:44:36.000000', 1, '6be_I4vRaW', 'Noman Arshad', 'Lahore', 'Computer Software', 'Software Engineer at Leadconcept the solution leaders', 'Leadconcept the solution leaders', '', 1200106876, 10, 2017, 'Software Engineer', 1, 'Lahore, Pakistan', 309, 'http://www.linkedin.com/in/noman-arshad-20275b6a', 'linkedin', 2, '2018-12-03 16:44:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ts_user_roles`
--

CREATE TABLE `ts_user_roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ts_user_roles`
--

INSERT INTO `ts_user_roles` (`id`, `role_name`, `created_at`) VALUES
(1, 'Admin', '2018-12-03 10:58:13'),
(2, 'Agency', '2018-12-03 10:58:13'),
(3, 'Rpo', '2018-12-03 10:58:13'),
(4, 'In-house', '2018-12-03 10:58:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_or_business_area`
--
ALTER TABLE `client_or_business_area`
  ADD PRIMARY KEY (`clientBusiness_id`);

--
-- Indexes for table `hiring_manager`
--
ALTER TABLE `hiring_manager`
  ADD PRIMARY KEY (`hiringManager_id`);

--
-- Indexes for table `talent_requests`
--
ALTER TABLE `talent_requests`
  ADD PRIMARY KEY (`talentRequest_id`);

--
-- Indexes for table `ts_countries`
--
ALTER TABLE `ts_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ts_users`
--
ALTER TABLE `ts_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `ts_user_roles`
--
ALTER TABLE `ts_user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_or_business_area`
--
ALTER TABLE `client_or_business_area`
  MODIFY `clientBusiness_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hiring_manager`
--
ALTER TABLE `hiring_manager`
  MODIFY `hiringManager_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `talent_requests`
--
ALTER TABLE `talent_requests`
  MODIFY `talentRequest_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ts_countries`
--
ALTER TABLE `ts_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `ts_users`
--
ALTER TABLE `ts_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ts_user_roles`
--
ALTER TABLE `ts_user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
