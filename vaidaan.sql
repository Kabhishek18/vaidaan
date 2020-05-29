-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 25, 2020 at 11:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaidaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id` int(11) NOT NULL,
  `cat_name` text NOT NULL,
  `cat_status` enum('0','1') NOT NULL DEFAULT '0',
  `cat_delete` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `cat_name`, `cat_status`, `cat_delete`) VALUES
(1, 'jewellery', '0', '0'),
(2, 'clothing', '0', '0'),
(3, 'bags', '0', '0'),
(4, 'footwear', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `coupon_name` text NOT NULL,
  `coupon_type` enum('0','1') NOT NULL DEFAULT '0',
  `coupon_value` text NOT NULL,
  `coupon_description` text NOT NULL,
  `coupon_status` enum('0','1') NOT NULL DEFAULT '0',
  `coupon_delete` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `coupon_name`, `coupon_type`, `coupon_value`, `coupon_description`, `coupon_status`, `coupon_delete`) VALUES
(1, 'sum10', '1', '10', 'asda', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `page_name` text NOT NULL,
  `page_description` text NOT NULL,
  `page_parent` text NOT NULL,
  `page_status` enum('0','1') NOT NULL DEFAULT '0',
  `page_delete` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `page_name`, `page_description`, `page_parent`, `page_status`, `page_delete`) VALUES
(1, 'designer', '<p style=\"text-align:center\"><a href=\"http://hy.lipsum.com/\">Հայերեն</a>&nbsp;<a href=\"http://sq.lipsum.com/\">Shqip</a>&nbsp;<a href=\"http://ar.lipsum.com/\"><img alt=\"‫العربية\" src=\"https://www.lipsum.com/images/ar.gif\" style=\"height:12px; width:18px\" /></a><a href=\"http://ar.lipsum.com/\">‫العربية</a>&nbsp;&nbsp;&nbsp;<a href=\"http://bg.lipsum.com/\">Български</a>&nbsp;<a href=\"http://ca.lipsum.com/\">Catal&agrave;</a>&nbsp;<a href=\"http://cn.lipsum.com/\">中文简体</a>&nbsp;<a href=\"http://hr.lipsum.com/\">Hrvatski</a>&nbsp;<a href=\"http://cs.lipsum.com/\">Česky</a>&nbsp;<a href=\"http://da.lipsum.com/\">Dansk</a>&nbsp;<a href=\"http://nl.lipsum.com/\">Nederlands</a>&nbsp;<a href=\"http://www.lipsum.com/\">English</a>&nbsp;<a href=\"http://et.lipsum.com/\">Eesti</a>&nbsp;<a href=\"http://ph.lipsum.com/\">Filipino</a>&nbsp;<a href=\"http://fi.lipsum.com/\">Suomi</a>&nbsp;<a href=\"http://fr.lipsum.com/\">Fran&ccedil;ais</a>&nbsp;<a href=\"http://ka.lipsum.com/\">ქართული</a>&nbsp;<a href=\"http://de.lipsum.com/\">Deutsch</a>&nbsp;<a href=\"http://el.lipsum.com/\">&Epsilon;&lambda;&lambda;&eta;&nu;&iota;&kappa;ά</a>&nbsp;<a href=\"http://he.lipsum.com/\"><img alt=\"‫עברית\" src=\"https://www.lipsum.com/images/he.gif\" style=\"height:12px; width:18px\" /></a><a href=\"http://he.lipsum.com/\">‫עברית</a>&nbsp;&nbsp;&nbsp;<a href=\"http://hi.lipsum.com/\">हिन्दी</a>&nbsp;<a href=\"http://hu.lipsum.com/\">Magyar</a>&nbsp;<a href=\"http://id.lipsum.com/\">Indonesia</a>&nbsp;<a href=\"http://it.lipsum.com/\">Italiano</a>&nbsp;<a href=\"http://lv.lipsum.com/\">Latviski</a>&nbsp;<a href=\"http://lt.lipsum.com/\">Lietuvi&scaron;kai</a>&nbsp;<a href=\"http://mk.lipsum.com/\">македонски</a>&nbsp;<a href=\"http://ms.lipsum.com/\">Melayu</a>&nbsp;<a href=\"http://no.lipsum.com/\">Norsk</a>&nbsp;<a href=\"http://pl.lipsum.com/\">Polski</a>&nbsp;<a href=\"http://pt.lipsum.com/\">Portugu&ecirc;s</a>&nbsp;<a href=\"http://ro.lipsum.com/\">Rom&acirc;na</a>&nbsp;<a href=\"http://ru.lipsum.com/\">Pyccкий</a>&nbsp;<a href=\"http://sr.lipsum.com/\">Српски</a>&nbsp;<a href=\"http://sk.lipsum.com/\">Slovenčina</a>&nbsp;<a href=\"http://sl.lipsum.com/\">Sloven&scaron;čina</a>&nbsp;<a href=\"http://es.lipsum.com/\">Espa&ntilde;ol</a>&nbsp;<a href=\"http://sv.lipsum.com/\">Svenska</a>&nbsp;<a href=\"http://th.lipsum.com/\">ไทย</a>&nbsp;<a href=\"http://tr.lipsum.com/\">T&uuml;rk&ccedil;e</a>&nbsp;<a href=\"http://uk.lipsum.com/\">Українська</a>&nbsp;<a href=\"http://vi.lipsum.com/\">Tiếng Việt</a></p>\r\n\r\n<h1 style=\"text-align:center\">Lorem Ipsum</h1>\r\n\r\n<h4 style=\"text-align:center\">&quot;Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...&quot;</h4>\r\n\r\n<h5 style=\"text-align:center\">&quot;There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...&quot;</h5>\r\n\r\n<hr />\r\n<h2 style=\"text-align:center\">What is Lorem Ipsum?</h2>\r\n\r\n<p style=\"text-align:center\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2 style=\"text-align:center\">Why do we use it?</h2>\r\n\r\n<p style=\"text-align:center\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:center\">Where does it come from?</h2>\r\n\r\n<p style=\"text-align:center\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p style=\"text-align:center\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<h2 style=\"text-align:center\">Where can I get some?</h2>\r\n\r\n<p style=\"text-align:center\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<form action=\"https://www.lipsum.com/feed/html\" method=\"post\">\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan=\"2\" style=\"text-align:center\"><input name=\"amount\" size=\"3\" type=\"text\" value=\"5\" /></td>\r\n			<td rowspan=\"2\">\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td style=\"text-align:center\"><input checked=\"checked\" name=\"what\" type=\"radio\" value=\"paras\" /></td>\r\n						<td style=\"text-align:center\">paragraphs</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"text-align:center\"><input name=\"what\" type=\"radio\" value=\"words\" /></td>\r\n						<td style=\"text-align:center\">words</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"text-align:center\"><input name=\"what\" type=\"radio\" value=\"bytes\" /></td>\r\n						<td style=\"text-align:center\">bytes</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"text-align:center\"><input name=\"what\" type=\"radio\" value=\"lists\" /></td>\r\n						<td style=\"text-align:center\">lists</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td style=\"text-align:center\"><input checked=\"checked\" name=\"start\" type=\"checkbox\" value=\"yes\" /></td>\r\n			<td style=\"text-align:center\">Start with &#39;Lorem<br />\r\n			ipsum dolor sit amet...&#39;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">&nbsp;</td>\r\n			<td style=\"text-align:center\"><input name=\"generate\" type=\"submit\" value=\"Generate Lorem Ipsum\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</form>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<hr />\r\n<p style=\"text-align:center\"><strong>Translations:</strong>&nbsp;Can you help translate this site into a foreign language ? Please email us with details if you can help.</p>\r\n\r\n<hr />\r\n<p style=\"text-align:center\">There are now a set of mock banners available&nbsp;<a href=\"https://www.lipsum.com/banners\">here</a>&nbsp;in three colours and in a range of standard banner sizes:<br />\r\n<a href=\"https://www.lipsum.com/banners\"><img alt=\"Banners\" src=\"https://www.lipsum.com/images/banners/black_234x60.gif\" style=\"height:60px; width:234px\" /></a><a href=\"https://www.lipsum.com/banners\"><img alt=\"Banners\" src=\"https://www.lipsum.com/images/banners/grey_234x60.gif\" style=\"height:60px; width:234px\" /></a><a href=\"https://www.lipsum.com/banners\"><img alt=\"Banners\" src=\"https://www.lipsum.com/images/banners/white_234x60.gif\" style=\"height:60px; width:234px\" /></a></p>\r\n\r\n<hr />\r\n<p style=\"text-align:center\"><strong>Donate:</strong>&nbsp;If you use this site regularly and would like to help keep the site on the Internet, please consider donating a small sum to help pay for the hosting and bandwidth bill. There is no minimum donation, any sum is appreciated - click&nbsp;<a href=\"https://www.lipsum.com/donate\" target=\"_blank\">here</a>&nbsp;to donate using PayPal. Thank you for your support.</p>\r\n\r\n<hr />\r\n<p style=\"text-align:center\"><a href=\"https://addons.mozilla.org/en-US/firefox/addon/dummy-lipsum/\" rel=\"nofollow\" target=\"_blank\">Firefox Add-on</a>&nbsp;<a href=\"https://github.com/traviskaufman/node-lipsum\" rel=\"nofollow\" target=\"_blank\">NodeJS</a>&nbsp;<a href=\"http://ftp.ktug.or.kr/tex-archive/help/Catalogue/entries/lipsum.html\" rel=\"nofollow\" target=\"_blank\">TeX Package</a>&nbsp;<a href=\"http://code.google.com/p/pypsum/\" rel=\"nofollow\" target=\"_blank\">Python Interface</a>&nbsp;<a href=\"http://gtklipsum.sourceforge.net/\" rel=\"nofollow\" target=\"_blank\">GTK Lipsum</a>&nbsp;<a href=\"http://github.com/gsavage/lorem_ipsum/tree/master\" rel=\"nofollow\" target=\"_blank\">Rails</a>&nbsp;<a href=\"https://github.com/cerkit/LoremIpsum/\" rel=\"nofollow\" target=\"_blank\">.NET</a>&nbsp;<a href=\"http://groovyconsole.appspot.com/script/64002\" rel=\"nofollow\" target=\"_blank\">Groovy</a>&nbsp;<a href=\"http://www.layerhero.com/lorem-ipsum-generator/\" rel=\"nofollow\" target=\"_blank\">Adobe Plugin</a></p>\r\n\r\n<hr />\r\n<hr />\r\n<h3 style=\"text-align:center\">The standard Lorem Ipsum passage, used since the 1500s</h3>\r\n\r\n<p style=\"text-align:center\">&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</p>\r\n\r\n<h3 style=\"text-align:center\">Section 1.10.32 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC</h3>\r\n\r\n<p style=\"text-align:center\">&quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;</p>\r\n\r\n<h3 style=\"text-align:center\">1914 translation by H. Rackham</h3>\r\n\r\n<p style=\"text-align:center\">&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;</p>\r\n\r\n<h3 style=\"text-align:center\">Section 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC</h3>\r\n\r\n<p style=\"text-align:center\">&quot;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.&quot;</p>\r\n\r\n<h3 style=\"text-align:center\">1914 translation by H. Rackham</h3>\r\n\r\n<p style=\"text-align:center\">&quot;On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.&quot;</p>\r\n\r\n<hr />\r\n<p style=\"text-align:center\"><a href=\"mailto:help@lipsum.com\">help@lipsum.com</a><br />\r\n<a href=\"https://www.lipsum.com/privacy.pdf\" target=\"_blank\">Privacy Policy</a></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'About Us', '0', '0'),
(2, 'craftsmanship', '<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><span style=\"font-family:DauphinPlain\"><span style=\"font-size:x-large\">What is Lorem Ipsum?</span></span></h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2><span style=\"font-family:DauphinPlain\"><span style=\"font-size:x-large\">Why do we use it?</span></span></h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><span style=\"font-family:DauphinPlain\"><span style=\"font-size:x-large\">Where does it come from?</span></span></h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<h2><span style=\"font-family:DauphinPlain\"><span style=\"font-size:x-large\">Where can I get some?</span></span></h2>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<form action=\"https://www.lipsum.com/feed/html\" method=\"post\">\r\n<table cellpadding=\"0\" cellspacing=\"0\" dir=\"ltr\" style=\"width:331px\">\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n			<p><input name=\"amount\" type=\"text\" value=\"5\" /></p>\r\n\r\n			<table cellpadding=\"0\" cellspacing=\"0\" dir=\"ltr\" style=\"width:42px\">\r\n				<tbody>\r\n					<tr>\r\n						<td>\r\n						<p><input checked=\"checked\" name=\"what\" type=\"radio\" value=\"paras\" /></p>\r\n						</td>\r\n						<td>&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p><input name=\"what\" type=\"radio\" value=\"words\" /></p>\r\n						</td>\r\n						<td>&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p><input name=\"what\" type=\"radio\" value=\"bytes\" /></p>\r\n						</td>\r\n						<td>&nbsp;</td>\r\n					</tr>\r\n					<tr>\r\n						<td>\r\n						<p><input name=\"what\" type=\"radio\" value=\"lists\" /></p>\r\n						</td>\r\n						<td>&nbsp;</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td rowspan=\"2\">&nbsp;</td>\r\n			<td>\r\n			<p><input checked=\"checked\" name=\"start\" type=\"checkbox\" value=\"yes\" /></p>\r\n			</td>\r\n			<td>\r\n			<p><br />\r\n			ipsum dolor sit amet...&#39;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<p><input name=\"generate\" type=\"submit\" value=\"Generate Lorem Ipsum\" /></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</form>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<hr />\r\n<p><span style=\"font-family:Open Sans,Arial,sans-serif\"><span style=\"font-size:small\"><strong>Translations:</strong></span></span><span style=\"font-family:Open Sans,Arial,sans-serif\"><span style=\"font-size:small\">&nbsp;Can you help translate this site into a foreign language ? Please email us with details if you can help.</span></span></p>\r\n\r\n<hr />\r\n<p><span style=\"color:#000000\"><span style=\"font-family:Open Sans,Arial,sans-serif\"><span style=\"font-size:small\">There are now a set of mock banners available&nbsp;</span></span></span><span style=\"color:#ff0000\"><span style=\"font-family:Open Sans,Arial,sans-serif\"><span style=\"font-size:small\"><strong><a href=\"https://www.lipsum.com/banners\">here</a></strong></span></span></span><span style=\"color:#000000\"><span style=\"font-family:Open Sans,Arial,sans-serif\"><span style=\"font-size:small\">&nbsp;in three colours and in a range of standard banner sizes:<br />\r\n<a href=\"https://www.lipsum.com/banners\"><img alt=\"Banners\" src=\"file:///tmp/lu22320jjsmkd.tmp/lu22320jjsmkr_tmp_21709ceb03c96f2d.gif\" style=\"height:62px; width:236px\" /> </a> <a href=\"https://www.lipsum.com/banners\"> <img alt=\"Banners\" src=\"file:///tmp/lu22320jjsmkd.tmp/lu22320jjsmkr_tmp_d638192137040fa4.gif\" style=\"height:62px; width:236px\" /> </a> <a href=\"https://www.lipsum.com/banners\"> <img alt=\"Banners\" src=\"file:///tmp/lu22320jjsmkd.tmp/lu22320jjsmkr_tmp_26c10351a46e817.gif\" style=\"height:62px; width:236px\" /> </a> </span></span></span></p>\r\n\r\n<hr />\r\n<p><span style=\"color:#000000\"><span style=\"font-family:Open Sans,Arial,sans-serif\"><span style=\"font-size:small\"><strong>Donate:</strong></span></span></span><span style=\"color:#000000\"><span style=\"font-family:Open Sans,Arial,sans-serif\"><span style=\"font-size:small\">&nbsp;If you use this site regularly and would like to help keep the site on the Internet, please consider donating a small sum to help pay for the hosting and bandwidth bill. There is no minimum donation, any sum is appreciated - click&nbsp;</span></span></span><span style=\"color:#ff0000\"><span style=\"font-family:Open Sans,Arial,sans-serif\"><span style=\"font-size:small\"><strong><a href=\"https://www.lipsum.com/donate\" target=\"_blank\">here</a></strong></span></span></span><span style=\"color:#000000\"><span style=\"font-family:Open Sans,Arial,sans-serif\"><span style=\"font-size:small\">&nbsp;to donate using PayPal. Thank you for your support.</span></span></span></p>\r\n\r\n<hr />\r\n<p><span style=\"color:#000000\"><span style=\"font-family:Open Sans,Arial,sans-serif\"><span style=\"font-size:small\"><a href=\"https://addons.mozilla.org/en-US/firefox/addon/dummy-lipsum/\" target=\"_blank\">Firefox Add-on</a>&nbsp;<a href=\"https://github.com/traviskaufman/node-lipsum\" target=\"_blank\">NodeJS</a>&nbsp;<a href=\"http://ftp.ktug.or.kr/tex-archive/help/Catalogue/entries/lipsum.html\" target=\"_blank\">TeX Package</a>&nbsp;<a href=\"http://code.google.com/p/pypsum/\" target=\"_blank\">Python Interface</a>&nbsp;<a href=\"http://gtklipsum.sourceforge.net/\" target=\"_blank\">GTK Lipsum</a>&nbsp;<a href=\"http://github.com/gsavage/lorem_ipsum/tree/master\" target=\"_blank\">Rails</a>&nbsp;<a href=\"https://github.com/cerkit/LoremIpsum/\" target=\"_blank\">.NET</a>&nbsp;<a href=\"http://groovyconsole.appspot.com/script/64002\" target=\"_blank\">Groovy</a>&nbsp;<a href=\"http://www.layerhero.com/lorem-ipsum-generator/\" target=\"_blank\">Adobe Plugin</a></span></span></span></p>\r\n\r\n<hr />\r\n<p><br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'About Us', '0', '0'),
(3, 'packaging', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text\r\n', 'About Us', '0', '0'),
(4, 'store locator', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text\r\n', 'About Us', '0', '0'),
(5, 'collections', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text\r\n', 'LookBook', '0', '0'),
(6, 'press & media', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text\r\n', 'LookBook', '0', '0'),
(7, 'celebrity closet', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text\r\n', 'LookBook', '0', '0'),
(8, 'blogger favourite', '<h1 style=\"text-align:center\">Lorem Ipsum</h1>\r\n\r\n<h4 style=\"text-align:center\">&quot;Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...&quot;</h4>\r\n\r\n<h5 style=\"text-align:center\">&quot;There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...&quot;</h5>\r\n\r\n<hr />\r\n<h2 style=\"text-align:center\">What is Lorem Ipsum?</h2>\r\n\r\n<p style=\"text-align:center\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2 style=\"text-align:center\">Why do we use it?</h2>\r\n\r\n<p style=\"text-align:center\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:center\">Where does it come from?</h2>\r\n\r\n<p style=\"text-align:center\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p style=\"text-align:center\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<h2 style=\"text-align:center\">Where can I get some?</h2>\r\n\r\n<p style=\"text-align:center\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<form action=\"https://www.lipsum.com/feed/html\" method=\"post\">\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan=\"2\" style=\"text-align:center\"><input name=\"amount\" size=\"3\" type=\"text\" value=\"5\" /></td>\r\n			<td rowspan=\"2\">\r\n			<table>\r\n				<tbody>\r\n					<tr>\r\n						<td style=\"text-align:center\"><input checked=\"checked\" name=\"what\" type=\"radio\" value=\"paras\" /></td>\r\n						<td style=\"text-align:center\">paragraphs</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"text-align:center\"><input name=\"what\" type=\"radio\" value=\"words\" /></td>\r\n						<td style=\"text-align:center\">words</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"text-align:center\"><input name=\"what\" type=\"radio\" value=\"bytes\" /></td>\r\n						<td style=\"text-align:center\">bytes</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"text-align:center\"><input name=\"what\" type=\"radio\" value=\"lists\" /></td>\r\n						<td style=\"text-align:center\">lists</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n			<td style=\"text-align:center\"><input checked=\"checked\" name=\"start\" type=\"checkbox\" value=\"yes\" /></td>\r\n			<td style=\"text-align:center\">Start with &#39;Lorem<br />\r\n			ipsum dolor sit amet...&#39;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"text-align:center\">&nbsp;</td>\r\n			<td style=\"text-align:center\"><input name=\"generate\" type=\"submit\" value=\"Generate Lorem Ipsum\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</form>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<hr />\r\n<p style=\"text-align:center\"><strong>Translations:</strong>&nbsp;Can you help translate this site into a foreign language ? Please email us with details if you can help.</p>\r\n\r\n<hr />\r\n<p style=\"text-align:center\">There are now a set of mock banners available&nbsp;<a href=\"https://www.lipsum.com/banners\">here</a>&nbsp;in three colours and in a range of standard banner sizes:<br />\r\n<a href=\"https://www.lipsum.com/banners\"><img alt=\"Banners\" src=\"https://www.lipsum.com/images/banners/black_234x60.gif\" style=\"height:60px; width:234px\" /></a><a href=\"https://www.lipsum.com/banners\"><img alt=\"Banners\" src=\"https://www.lipsum.com/images/banners/grey_234x60.gif\" style=\"height:60px; width:234px\" /></a><a href=\"https://www.lipsum.com/banners\"><img alt=\"Banners\" src=\"https://www.lipsum.com/images/banners/white_234x60.gif\" style=\"height:60px; width:234px\" /></a></p>\r\n\r\n<hr />\r\n<p style=\"text-align:center\"><strong>Donate:</strong>&nbsp;If you use this site regularly and would like to help keep the site on the Internet, please consider donating a small sum to help pay for the hosting and bandwidth bill. There is no minimum donation, any sum is appreciated - click&nbsp;<a href=\"https://www.lipsum.com/donate\" target=\"_blank\">here</a>&nbsp;to donate using PayPal. Thank you for your support.</p>\r\n\r\n<hr />\r\n<p style=\"text-align:center\"><a href=\"https://addons.mozilla.org/en-US/firefox/addon/dummy-lipsum/\" rel=\"nofollow\" target=\"_blank\">Firefox Add-on</a>&nbsp;<a href=\"https://github.com/traviskaufman/node-lipsum\" rel=\"nofollow\" target=\"_blank\">NodeJS</a>&nbsp;<a href=\"http://ftp.ktug.or.kr/tex-archive/help/Catalogue/entries/lipsum.html\" rel=\"nofollow\" target=\"_blank\">TeX Package</a>&nbsp;<a href=\"http://code.google.com/p/pypsum/\" rel=\"nofollow\" target=\"_blank\">Python Interface</a>&nbsp;<a href=\"http://gtklipsum.sourceforge.net/\" rel=\"nofollow\" target=\"_blank\">GTK Lipsum</a>&nbsp;<a href=\"http://github.com/gsavage/lorem_ipsum/tree/master\" rel=\"nofollow\" target=\"_blank\">Rails</a>&nbsp;<a href=\"https://github.com/cerkit/LoremIpsum/\" rel=\"nofollow\" target=\"_blank\">.NET</a>&nbsp;<a href=\"http://groovyconsole.appspot.com/script/64002\" rel=\"nofollow\" target=\"_blank\">Groovy</a>&nbsp;<a href=\"http://www.layerhero.com/lorem-ipsum-generator/\" rel=\"nofollow\" target=\"_blank\">Adobe Plugin</a></p>\r\n\r\n<hr />\r\n<hr />\r\n<h3 style=\"text-align:center\">The standard Lorem Ipsum passage, used since the 1500s</h3>\r\n\r\n<p style=\"text-align:center\">&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</p>\r\n\r\n<h3 style=\"text-align:center\">Section 1.10.32 of &quot;de Finibus Bonorum et Malorum&quot;, written by Cicero in 45 BC</h3>\r\n', 'LookBook', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_image` text NOT NULL,
  `product_regularprice` int(15) NOT NULL,
  `product_color` text NOT NULL,
  `product_size` text NOT NULL,
  `product_salesprice` int(15) NOT NULL,
  `product_description` text NOT NULL,
  `product_info` text NOT NULL,
  `product_customise` text NOT NULL,
  `product_status` enum('0','1') NOT NULL DEFAULT '0',
  `product_delete` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `cat_id`, `subcat_id`, `product_name`, `product_image`, `product_regularprice`, `product_color`, `product_size`, `product_salesprice`, `product_description`, `product_info`, `product_customise`, `product_status`, `product_delete`) VALUES
(1, 1, 1, 'Product 1', '', 7000, '', '', 2000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.\r\nStay comfortable and stay in the race no matter what the weather\'s up to. The Bruno Compete Hoodie\'s water-repellent exterior shields you from the elements, while advanced fabric technology inside wicks moisture to keep you dry.Stay comfortable and stay in the race no matter what the weather\'s up to. The Bruno Compete Hoodie\'s water-repellent exterior shields you from the elements, while advanced fabric technology inside wicks moisture to keep you dry.Stay comfortable and stay in the race no matter what the weather\'s up to. The Bruno Compete Hoodie\'s water-repellent exterior shields you from the elements, while advanced fabric technology inside wicks moisture to keep you dry.\r\n\r\nAdipisicing elitEnim, laborum.\r\nLorem ipsum dolor sit\r\nDolorem molestiae quod voluptatem! Sint.\r\nIure obcaecati odio pariatur quae saepe!\r\nStay comfortable and stay in the race no matter what the weather\'s up to. The Bruno Compete Hoodie\'s water-repellent exterior shields you from the elements, while advanced fabric technology inside wicks moisture to keep you dry.Stay comfortable and stay in the race no matter what the weather\'s up to.\r\n\r\nStay comfortable and stay in the race no matter what the weather\'s up to.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(2, 1, 1, 'Product 2', '', 7000, '', '', 2000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(3, 1, 1, 'Product 3', '', 8000, '', '', 1000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(4, 1, 1, 'Product 4', '', 7000, '', '', 4000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(5, 1, 2, 'Product 1', '', 8000, '', '', 5000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(6, 1, 2, 'Product 2', '', 7000, '', '', 6000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(7, 1, 2, 'Product 3', '', 8000, '', '', 3000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(8, 1, 2, 'Product 4', '', 7000, '', '', 2000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(9, 1, 3, 'Product 1', '', 8000, '', '', 1000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(10, 1, 3, 'Product 2', '', 7000, '', '', 4000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(11, 1, 3, 'Product 3', '', 8000, '', '', 5000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(12, 1, 3, 'Product 4', '', 9000, '', '', 6000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(13, 1, 4, 'Product 1', '', 10000, '', '', 3000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(14, 1, 4, 'Product 2', '', 7000, '', '', 2000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(15, 1, 4, 'Product 3', '', 8000, '', '', 1000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(16, 1, 4, 'Product 4', '', 7000, '', '', 4000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(17, 1, 5, 'Product 1', '', 8000, '', '', 5000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(18, 1, 5, 'Product 2', '', 7000, '', '', 6000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(19, 1, 5, 'Product 3', '', 8000, '', '', 3000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(20, 1, 6, 'Product 4', '', 7000, '', '', 2000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(21, 1, 6, 'Product 4', '', 8000, '', '', 1000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(22, 1, 7, 'Product 1', '', 7000, '', '', 4000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(23, 1, 8, 'Product 2', '', 8000, '', '', 5000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(24, 1, 8, 'Product 3', '', 9000, '', '', 6000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(25, 1, 8, 'Product 4', '', 10000, '', '', 3000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(26, 1, 9, 'Product 1', '', 7000, '', '', 2000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(27, 1, 9, 'Product 2', '', 8000, '', '', 1000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(28, 1, 10, 'Product 3', '', 7000, '', '', 4000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(29, 1, 10, 'Product 4', '', 8000, '', '', 5000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(30, 2, 14, 'Product 1', '', 7000, '', '', 6000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(31, 2, 14, 'Product 2', '', 8000, '', '', 3000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(32, 2, 14, 'Product 3', '', 7000, '', '', 2000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(33, 2, 15, 'Product 4', '', 8000, '', '', 1000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(34, 2, 15, 'Product 1', '', 7000, '', '', 4000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(35, 2, 15, 'Product 2', '', 8000, '', '', 5000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(36, 2, 16, 'Product 3', '', 9000, '', '', 6000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(37, 2, 16, 'Product 4', '', 10000, '', '', 3000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(38, 2, 16, 'Product 1', '', 7000, '', '', 2000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(39, 2, 16, 'Product 2', '', 8000, '', '', 1000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(40, 2, 16, 'Product 3', '', 7000, '', '', 4000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(41, 2, 16, 'Product 4', '', 8000, '', '', 5000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(42, 3, 17, 'Product 1', '', 7000, '', '', 6000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(43, 3, 17, 'Product 2', '', 8000, '', '', 3000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(44, 3, 17, 'Product 3', '', 7000, '', '', 2000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(45, 3, 17, 'Product 4', '', 8000, '', '', 1000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(46, 3, 17, 'Product 1', '', 7000, '', '', 3000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(47, 3, 17, 'Product 2', '', 8000, '', '', 2000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(48, 3, 17, 'Product 3', '', 9000, '', '', 1000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(49, 3, 17, 'Product 4', '', 10000, '', '', 4000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(50, 3, 18, 'Product 1', '', 7000, '', '', 5000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(51, 3, 18, 'Product 2', '', 8000, '', '', 6000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(52, 3, 18, 'Product 3', '', 7000, '', '', 3000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(53, 3, 18, 'Product 4', '', 8000, '', '', 2000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(54, 3, 18, 'Product 1', '', 7000, '', '', 1000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(55, 3, 18, 'Product 2', '', 8000, '', '', 4000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(56, 3, 18, 'Product 3', '', 7000, '', '', 5000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(57, 3, 18, 'Product 4', '', 8000, '', '', 6000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(58, 3, 19, 'Product 1', '', 7000, '', '', 3000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(59, 3, 19, 'Product 2', '', 8000, '', '', 2000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(60, 3, 19, 'Product 3', '', 9000, '', '', 1000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(61, 3, 19, 'Product 4', '', 10000, '', '', 4000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(62, 3, 20, 'Product 1', '', 7000, '', '', 5000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(63, 3, 20, 'Product 2', '', 8000, '', '', 6000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(64, 3, 20, 'Product 3', '', 7000, '', '', 3000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(65, 3, 20, 'Product 1', '', 8000, '', '', 2000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(66, 3, 20, 'Product 2', '', 7000, '', '', 1000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(67, 4, 21, 'Product 3', '', 8000, '', '', 4000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(68, 4, 21, 'Product 4', '', 7000, '', '', 5000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(69, 4, 22, 'Product 1', '', 8000, '', '', 6000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(70, 4, 22, 'Product 2', '', 7000, '', '', 3000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(71, 4, 22, 'Product 3', '', 8000, '', '', 2000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(72, 0, 0, 'product_name', '', 0, '', '', 0, 'product_description', 'product_info', 'product_customise', '', ''),
(73, 1, 1, 'Product 2', '', 7000, '', '', 2000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(74, 4, 23, 'Product 2', '', 8000, '', '', 5000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(75, 4, 23, 'Product 3', '', 7000, '', '', 6000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(76, 4, 23, 'Product 4', '', 8000, '', '', 3000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(77, 4, 24, 'Product 1', '', 7000, '', '', 2000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(78, 4, 24, 'Product 2', '', 8000, '', '', 1000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(79, 4, 24, 'Product 3', '', 7000, '', '', 4000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(80, 4, 24, 'Product 4', '', 8000, '', '', 5000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(81, 4, 24, 'Product 1', '', 7000, '', '', 6000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(82, 4, 24, 'Product 2', '', 8000, '', '', 3000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(83, 4, 24, 'Product 3', '', 9000, '', '', 2000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0'),
(84, 4, 24, 'Product 4', '', 10000, '', '', 1000, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `product_color`
--

CREATE TABLE `product_color` (
  `id` int(11) NOT NULL,
  `color_code` text NOT NULL,
  `color_name` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `review_name` text NOT NULL,
  `review_star` int(11) NOT NULL,
  `review_product_id` text NOT NULL,
  `review_status` enum('0','1') NOT NULL DEFAULT '1',
  `review_delete` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `review_name`, `review_star`, `review_product_id`, `review_status`, `review_delete`) VALUES
(1, 'John Cena', 5, '1', '0', '0'),
(2, 'Batista', 3, '1', '0', '0'),
(3, 'Brock lenser', 4, '1', '0', '0'),
(4, 'Goldberg', 5, '1', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

CREATE TABLE `subcat` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_name` text NOT NULL,
  `subcat_status` enum('0','1') NOT NULL DEFAULT '0',
  `subcat_delete` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcat`
--

INSERT INTO `subcat` (`id`, `cat_id`, `subcat_name`, `subcat_status`, `subcat_delete`) VALUES
(1, 1, 'earrings', '0', '0'),
(2, 1, 'hoops', '0', '0'),
(3, 1, 'studs', '0', '0'),
(4, 1, 'necklaces', '0', '0'),
(5, 1, 'bracelets', '0', '0'),
(6, 1, 'rings', '0', '0'),
(7, 1, 'head pieces', '0', '0'),
(8, 1, 'brooches', '0', '0'),
(9, 1, 'belts', '0', '0'),
(10, 1, 'anklets', '0', '0'),
(14, 2, 'western', '0', '0'),
(15, 2, 'indo-western', '0', '0'),
(16, 2, 'indian', '0', '0'),
(17, 3, 'sling', '0', '0'),
(18, 3, 'wallet', '0', '0'),
(19, 3, 'clucth', '0', '0'),
(20, 3, 'shoulder', '0', '0'),
(21, 4, 'wedges', '0', '0'),
(22, 4, 'flip-fop', '0', '0'),
(23, 4, 'still toes', '0', '0'),
(24, 4, 'heels', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_token` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_lastname` text NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_mobile` varchar(255) NOT NULL,
  `user_address` text DEFAULT NULL,
  `user_type` enum('0','1','2') NOT NULL DEFAULT '0',
  `user_status` enum('0','1') NOT NULL DEFAULT '0',
  `user_delete` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_token`, `user_name`, `user_lastname`, `user_password`, `user_email`, `user_image`, `user_mobile`, `user_address`, `user_type`, `user_status`, `user_delete`) VALUES
(1, '6b964c51-9bac-2ea2-62fd-ecdb9370a312', 'developer', 'June', '60896becdc575be18bae1c606845db31', 'kabhishek18@gmail.com', 'a:14:{s:9:\"file_name\";s:12:\"user-014.jpg\";s:9:\"file_type\";s:10:\"image/jpeg\";s:9:\"file_path\";s:41:\"/home/krab/sites/vaidaan/resource/upload/\";s:9:\"full_path\";s:53:\"/home/krab/sites/vaidaan/resource/upload/user-014.jpg\";s:8:\"raw_name\";s:8:\"user-014\";s:9:\"orig_name\";s:11:\"user-01.jpg\";s:11:\"client_name\";s:11:\"user-01.jpg\";s:8:\"file_ext\";s:4:\".jpg\";s:9:\"file_size\";d:24.1099999999999994315658113919198513031005859375;s:8:\"is_image\";b:1;s:11:\"image_width\";i:200;s:12:\"image_height\";i:200;s:10:\"image_type\";s:4:\"jpeg\";s:14:\"image_size_str\";s:24:\"width=\"200\" height=\"200\"\";}', '7053948103', 'दिल का दरिया बह ही गया\r\nराहों में यूँ जो तू मिल गया\r\nमुश्किल से मैं संभला था, हाँ\r\nटूट गया हूँ फिर एक दफ़ा', '0', '0', '0'),
(2, 'cc2556d5-9089-ddf9-21b4-fe58463febc0', 'tester', 'Doe', '60896becdc575be18bae1c606845db31', 'test@gmail.com', 'a:14:{s:9:\"file_name\";s:12:\"user-022.jpg\";s:9:\"file_type\";s:10:\"image/jpeg\";s:9:\"file_path\";s:41:\"/home/krab/sites/vaidaan/resource/upload/\";s:9:\"full_path\";s:53:\"/home/krab/sites/vaidaan/resource/upload/user-022.jpg\";s:8:\"raw_name\";s:8:\"user-022\";s:9:\"orig_name\";s:11:\"user-02.jpg\";s:11:\"client_name\";s:11:\"user-02.jpg\";s:8:\"file_ext\";s:4:\".jpg\";s:9:\"file_size\";d:28.030000000000001136868377216160297393798828125;s:8:\"is_image\";b:1;s:11:\"image_width\";i:300;s:12:\"image_height\";i:300;s:10:\"image_type\";s:4:\"jpeg\";s:14:\"image_size_str\";s:24:\"width=\"300\" height=\"300\"\";}', '', NULL, '1', '0', '0'),
(4, '461bf1fa-af5c-d20d-c4fd-f9da0ea4f492', 'Ana', 'Swami', 'developer@1234', 'Ana@gmail.com', 'a:14:{s:9:\"file_name\";s:12:\"user-041.jpg\";s:9:\"file_type\";s:10:\"image/jpeg\";s:9:\"file_path\";s:41:\"/home/krab/sites/vaidaan/resource/upload/\";s:9:\"full_path\";s:53:\"/home/krab/sites/vaidaan/resource/upload/user-041.jpg\";s:8:\"raw_name\";s:8:\"user-041\";s:9:\"orig_name\";s:11:\"user-04.jpg\";s:11:\"client_name\";s:11:\"user-04.jpg\";s:8:\"file_ext\";s:4:\".jpg\";s:9:\"file_size\";d:30.120000000000000994759830064140260219573974609375;s:8:\"is_image\";b:1;s:11:\"image_width\";i:300;s:12:\"image_height\";i:300;s:10:\"image_type\";s:4:\"jpeg\";s:14:\"image_size_str\";s:24:\"width=\"300\" height=\"300\"\";}', '', NULL, '2', '0', '0'),
(21, 'c7229c0c-68c9-f795-df00-1e8346efd6bd', 'asdasd', 'bashdjbhj', '113f9ab96040ea8ad7afbb80db9935bd', 'ADBH2@jknasd.asdjn', '', 'jjb', 'a:7:{s:12:\"bill_company\";s:5:\"asdbj\";s:12:\"bill_country\";s:7:\"bjasbdj\";s:12:\"bill_street1\";s:8:\"jkasbdjb\";s:12:\"bill_street2\";s:9:\"jbdaskjbj\";s:9:\"bill_town\";s:4:\"bjbj\";s:10:\"bill_state\";s:5:\"dbjbj\";s:8:\"bill_zip\";s:3:\"djb\";}', '0', '0', '0'),
(22, 'a8211daa-f99c-fe27-840f-34224fce19d6', 'asd', 'asd', '60896becdc575be18bae1c606845db31', 'asdasdasd@adsasd.aasd', '', 'knkdnk', 'a:7:{s:12:\"bill_company\";s:4:\"asdq\";s:12:\"bill_country\";s:5:\"n asd\";s:12:\"bill_street1\";s:7:\"nkadskn\";s:12:\"bill_street2\";s:8:\"knasdknk\";s:9:\"bill_town\";s:7:\"knasdkn\";s:10:\"bill_state\";s:6:\"nkdank\";s:8:\"bill_zip\";s:4:\"ndkn\";}', '0', '0', '0'),
(23, '2bd38973-1740-025f-c603-848d39327f90', 'asd', 'asd', 'a8f5f167f44f4964e6c998dee827110c', 'asdasdasdasdasd@adsasd.aasd', '', 'knkdnk', 'a:7:{s:12:\"bill_company\";s:4:\"asdq\";s:12:\"bill_country\";s:5:\"n asd\";s:12:\"bill_street1\";s:7:\"nkadskn\";s:12:\"bill_street2\";s:8:\"knasdknk\";s:9:\"bill_town\";s:7:\"knasdkn\";s:10:\"bill_state\";s:6:\"nkdank\";s:8:\"bill_zip\";s:4:\"ndkn\";}', '0', '0', '0'),
(24, 'e7decd8e-eb29-d28b-63bc-3baaaf2d17c6', 'asd', 'asd', '8ef8dcb30c52f4a5097a26c06197a0ae', 'asdasdasdasdASASDasd@adsasd.aasd', '', 'knkdnk', 'a:7:{s:12:\"bill_company\";s:4:\"asdq\";s:12:\"bill_country\";s:5:\"n asd\";s:12:\"bill_street1\";s:7:\"nkadskn\";s:12:\"bill_street2\";s:8:\"knasdknk\";s:9:\"bill_town\";s:7:\"knasdkn\";s:10:\"bill_state\";s:6:\"nkdank\";s:8:\"bill_zip\";s:4:\"ndkn\";}', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `userorder`
--

CREATE TABLE `userorder` (
  `id` int(11) NOT NULL,
  `order_userid` varchar(255) NOT NULL,
  `order_amount` text NOT NULL,
  `order_detail` text NOT NULL,
  `billing_address` text NOT NULL,
  `shipping_address` text DEFAULT NULL,
  `order_created` text NOT NULL,
  `order_modified` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_status` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `order_delete` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userorder`
--

INSERT INTO `userorder` (`id`, `order_userid`, `order_amount`, `order_detail`, `billing_address`, `shipping_address`, `order_created`, `order_modified`, `order_status`, `order_delete`) VALUES
(1, '17', '1100', '', 'a:7:{s:12:\"bill_company\";s:4:\"asdf\";s:12:\"bill_country\";s:3:\"asd\";s:12:\"bill_street1\";s:3:\"asd\";s:12:\"bill_street2\";s:3:\"asd\";s:9:\"bill_town\";s:3:\"asd\";s:10:\"bill_state\";s:3:\"asd\";s:8:\"bill_zip\";s:3:\"asd\";}', NULL, '0000-00-00', '2020-05-25 20:59:41', '0', '0'),
(2, '20', '9,070', '', 'a:7:{s:12:\"bill_company\";s:3:\"asd\";s:12:\"bill_country\";s:3:\"ads\";s:12:\"bill_street1\";s:3:\"asd\";s:12:\"bill_street2\";s:3:\"asd\";s:9:\"bill_town\";s:3:\"dsa\";s:10:\"bill_state\";s:3:\"asd\";s:8:\"bill_zip\";s:3:\"asd\";}', NULL, 'May 25 2020,11:05:51pm', '2020-05-25 21:05:51', '0', '0'),
(3, '21', '9,070', 'jb', 'a:7:{s:12:\"bill_company\";s:5:\"asdbj\";s:12:\"bill_country\";s:7:\"bjasbdj\";s:12:\"bill_street1\";s:8:\"jkasbdjb\";s:12:\"bill_street2\";s:9:\"jbdaskjbj\";s:9:\"bill_town\";s:4:\"bjbj\";s:10:\"bill_state\";s:5:\"dbjbj\";s:8:\"bill_zip\";s:3:\"djb\";}', 'a:10:{s:14:\"ship_firstname\";s:8:\"asdjkasj\";s:13:\"ship_lastname\";s:5:\"bjbdj\";s:10:\"ship_email\";s:16:\"bjkbdjkbj@ad.fsd\";s:12:\"ship_company\";s:3:\"bdj\";s:12:\"ship_country\";s:3:\"jbd\";s:12:\"ship_street1\";s:2:\"jd\";s:12:\"ship_street2\";s:5:\"bjjdj\";s:9:\"ship_town\";s:3:\"bdj\";s:10:\"ship_state\";s:1:\"b\";s:8:\"ship_zip\";s:3:\"bjd\";}', 'May 25 2020,11:07:52pm', '2020-05-25 21:07:52', '0', '0'),
(4, '22', '9,070', 'asd', 'a:7:{s:12:\"bill_company\";s:4:\"asdq\";s:12:\"bill_country\";s:5:\"n asd\";s:12:\"bill_street1\";s:7:\"nkadskn\";s:12:\"bill_street2\";s:8:\"knasdknk\";s:9:\"bill_town\";s:7:\"knasdkn\";s:10:\"bill_state\";s:6:\"nkdank\";s:8:\"bill_zip\";s:4:\"ndkn\";}', 'a:10:{s:14:\"ship_firstname\";s:3:\"asd\";s:13:\"ship_lastname\";s:3:\"asd\";s:10:\"ship_email\";s:11:\"asd@asd.ads\";s:12:\"ship_company\";s:3:\"asd\";s:12:\"ship_country\";s:3:\"asd\";s:12:\"ship_street1\";s:3:\"asd\";s:12:\"ship_street2\";s:3:\"asd\";s:9:\"ship_town\";s:3:\"asd\";s:10:\"ship_state\";s:3:\"asd\";s:8:\"ship_zip\";s:3:\"asd\";}', 'May 25 2020,11:24:20pm', '2020-05-25 21:24:20', '0', '0'),
(5, '23', '9,070', 'asd', 'a:7:{s:12:\"bill_company\";s:4:\"asdq\";s:12:\"bill_country\";s:5:\"n asd\";s:12:\"bill_street1\";s:7:\"nkadskn\";s:12:\"bill_street2\";s:8:\"knasdknk\";s:9:\"bill_town\";s:7:\"knasdkn\";s:10:\"bill_state\";s:6:\"nkdank\";s:8:\"bill_zip\";s:4:\"ndkn\";}', NULL, 'May 25 2020,11:27:55pm', '2020-05-25 21:27:55', '0', '0'),
(6, '24', '9,070', 'asd', 'a:7:{s:12:\"bill_company\";s:4:\"asdq\";s:12:\"bill_country\";s:5:\"n asd\";s:12:\"bill_street1\";s:7:\"nkadskn\";s:12:\"bill_street2\";s:8:\"knasdknk\";s:9:\"bill_town\";s:7:\"knasdkn\";s:10:\"bill_state\";s:6:\"nkdank\";s:8:\"bill_zip\";s:4:\"ndkn\";}', 'a:10:{s:14:\"ship_firstname\";s:3:\"asd\";s:13:\"ship_lastname\";s:3:\"asd\";s:10:\"ship_email\";s:11:\"asd@asd.ads\";s:12:\"ship_company\";s:3:\"asd\";s:12:\"ship_country\";s:3:\"asd\";s:12:\"ship_street1\";s:3:\"asd\";s:12:\"ship_street2\";s:3:\"asd\";s:9:\"ship_town\";s:3:\"asd\";s:10:\"ship_state\";s:3:\"asd\";s:8:\"ship_zip\";s:3:\"asd\";}', 'May 25 2020,11:28:59pm', '2020-05-25 21:28:59', '0', '0'),
(7, '1', '9,070', 'asd', 'a:7:{s:12:\"bill_company\";s:5:\"asdas\";s:12:\"bill_country\";s:3:\"123\";s:12:\"bill_street1\";s:6:\"213123\";s:12:\"bill_street2\";s:1:\"2\";s:9:\"bill_town\";s:6:\"213231\";s:10:\"bill_state\";s:3:\"231\";s:8:\"bill_zip\";s:6:\"321231\";}', NULL, 'May 25 2020,11:40:09pm', '2020-05-25 21:40:09', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_color`
--
ALTER TABLE `product_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcat`
--
ALTER TABLE `subcat`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `subcat` ADD FULLTEXT KEY `subcat_name` (`subcat_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_token` (`user_token`);

--
-- Indexes for table `userorder`
--
ALTER TABLE `userorder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `product_color`
--
ALTER TABLE `product_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subcat`
--
ALTER TABLE `subcat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `userorder`
--
ALTER TABLE `userorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
