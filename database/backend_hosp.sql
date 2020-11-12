-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 01:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backend_hosp`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement_category`
--

CREATE TABLE `advertisement_category` (
  `adv_id` int(11) NOT NULL,
  `adv_photo` varchar(255) NOT NULL,
  `adv_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement_category`
--

INSERT INTO `advertisement_category` (`adv_id`, `adv_photo`, `adv_url`) VALUES
(1, 'adv-category-1.png', ''),
(2, 'adv-category-2.png', ''),
(3, 'adv-category-3.png', ''),
(4, 'adv-category-4.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement_home`
--

CREATE TABLE `advertisement_home` (
  `adv_id` int(11) NOT NULL,
  `adv_location` varchar(255) NOT NULL,
  `adv_photo` varchar(255) NOT NULL,
  `adv_url` varchar(255) NOT NULL,
  `adv_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement_home`
--

INSERT INTO `advertisement_home` (`adv_id`, `adv_location`, `adv_photo`, `adv_url`, `adv_status`) VALUES
(1, 'Header', 'adv-1.png', '', 'Show'),
(2, 'Under Featured News', 'adv-2.png', '#', 'Show');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement_sidebar`
--

CREATE TABLE `advertisement_sidebar` (
  `adv_id` int(11) NOT NULL,
  `adv_location` varchar(255) NOT NULL,
  `adv_photo` varchar(255) NOT NULL,
  `adv_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement_sidebar`
--

INSERT INTO `advertisement_sidebar` (`adv_id`, `adv_location`, `adv_photo`, `adv_url`) VALUES
(4, 'Sidebar Top', 'advertisement-sidebar-4.png', ''),
(5, 'Sidebar Top', 'advertisement-sidebar-5.png', ''),
(6, 'Sidebar Bottom', 'advertisement-sidebar-6.png', ''),
(7, 'Sidebar Bottom', 'advertisement-sidebar-7.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_slug`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'Blood / Hematology', 'blood-hematology', 'Category: Blood / Hematology', '', ''),
(2, 'Hypertension ', 'hypertension-', 'Category: Hypertension ', '', ''),
(3, 'Men\'s Health', 'men-s-health', 'Category: Men\'s Health', '', ''),
(4, 'Women\'s Health', 'women-s-health', 'Category: Women\'s Health', '', ''),
(5, 'Nutrition / Diet', 'nutrition-diet', 'Category: Nutrition / Diet', '', ''),
(6, 'Cardiology', 'cardio', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `category_photo`
--

CREATE TABLE `category_photo` (
  `p_category_id` int(11) NOT NULL,
  `p_category_name` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_photo`
--

INSERT INTO `category_photo` (`p_category_id`, `p_category_name`, `status`) VALUES
(1, 'CATH', 'Active'),
(2, 'CCU', 'Active'),
(3, 'CORONA', 'Active'),
(4, 'DIAYSIS', 'Active'),
(5, 'ECHO', 'Active'),
(6, 'ESWL', 'Active'),
(7, 'ICU', 'Active'),
(8, 'LAB', 'Active'),
(9, 'OPERATION THEATRE', 'Active'),
(10, 'CANTEEN', 'Active'),
(11, 'X-RAY', 'Active'),
(12, 'RECEPTION', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `category_video`
--

CREATE TABLE `category_video` (
  `v_category_id` int(11) NOT NULL,
  `v_category_name` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_video`
--

INSERT INTO `category_video` (`v_category_id`, `v_category_name`, `status`) VALUES
(1, 'Sports', 'Active'),
(2, 'World Tour', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `code_body` text NOT NULL,
  `code_main` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `code_body`, `code_main`) VALUES
(1, '<div id=\"fb-root\"></div>\r\n<script>(function(d, s, id) {\r\n  var js, fjs = d.getElementsByTagName(s)[0];\r\n  if (d.getElementById(id)) return;\r\n  js = d.createElement(s); js.id = id;\r\n  js.src = \"//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=323620764400430\";\r\n  fjs.parentNode.insertBefore(js, fjs);\r\n}(document, \'script\', \'facebook-jssdk\'));</script>', '<div class=\"fb-comments\" data-href=\"https://developers.facebook.com/docs/plugins/comments#configurator\" data-numposts=\"5\"></div>');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_id` int(11) NOT NULL,
  `dep_name` varchar(255) NOT NULL,
  `dep_slug` varchar(255) NOT NULL,
  `dept_tamil` text CHARACTER SET utf8 DEFAULT NULL COMMENT 'in tamil language',
  `dep_detail` text NOT NULL,
  `dep_address` text NOT NULL,
  `dep_phone` varchar(100) NOT NULL,
  `dep_fax` varchar(100) NOT NULL,
  `dep_email` varchar(100) NOT NULL,
  `dep_photo` varchar(255) NOT NULL,
  `dep_banner` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `dep_name`, `dep_slug`, `dept_tamil`, `dep_detail`, `dep_address`, `dep_phone`, `dep_fax`, `dep_email`, `dep_photo`, `dep_banner`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'Cardiology', 'cardiology', 'இருதய மருத்துவ சிகிச்சை', '<p>Cardiology is a medical specialty and a branch of internal medicine concerned with disorders of the heart. It deals with the diagnosis and treatment of such conditions as congenital heart defects, coronary artery disease, electrophysiology, heart failure&nbsp;and valvular heart disease. Subspecialties of the cardiology field include cardiac electrophysiology, echocardiography, interventional cardiology and nuclear cardiology.</p>\r\n\r\n<p>The basic functioning of the cardiovascular system includes the way the heart processes oxygen and nutrients in the blood, which is called coronary circulation. The circulation system consists of coronary arteries and coronary veins.There are a range of disorders of the cardiovascular system that are treated and studied under the field of cardiology. Among them are acute coronary syndrome, which encompasses the broad range of myocardial infarction symptoms. Angina pectoris,&nbsp;atherosclerosis, coronary heart disease and restenosis are other common disorders.</p>\r\n\r\n<p>Broader categories of disorders in the field of cardiology include cardiac arrest; disorders of the myocardium, or the muscle of the heart, which include varieties of cardiomyopathy; disorders of the pericardium, or the outer lining of the heart, which include types of pericarditis; disorders of the heart valves, including the aortic valve, the mitral valve, the pulmonary valve and the tricuspid valve; congenital heart defects, which range from atrial septal defect to ventricular septal defect; diseases of the blood vessels, or vascular diseases, which includes aneurysm,&nbsp;varicose veins, vasculitis and diseases of other blood vessels.</p>\r\n\r\n<p>Specialists in cardiology are called cardiologists. Some of the strategies used by cardiologists to combat cardiovascular diseases include coronary artery bypass surgery, percutaneous coronary intervention, percutaneous transluminal angioplasty and stenting. Cardiologists also may diagnose cardiovascular disorders using blood tests, cardiac stress tests, echocardiography&nbsp;or electrocardiography or computed tomography and magnetic resonance imaging techniques.</p>\r\n\r\n<p>The training required to become a cardiologist involves more than 10 years of studying internal medicine and specialized programs.</p>\r\n\r\n<p>Becoming a cardiologist requires:</p>\r\n\r\n<ul>\r\n	<li>&nbsp; &nbsp; &nbsp;- 4&nbsp; years of pre-medical study at an accredited college or university;</li>\r\n	<li>&nbsp; &nbsp; &nbsp;- 4&nbsp; years of medical school, earning an MD;</li>\r\n	<li>&nbsp; &nbsp; &nbsp;- 3&nbsp; years in an internal medicine residency program;</li>\r\n	<li>&nbsp; &nbsp; &nbsp;- 3&nbsp; or more years in a fellowship program for advanced training; and Board certification;</li>\r\n</ul>\r\n', '', '9047048344', '9047048344', 'vasanthamhealthcare@gmail.com', 'department-1.jpg', 'department-banner-2.jpg', 'Cardiology Department', 'Cardiology Department, Cardiology Doctor, Cardiology Care, Cardiology Consultant', ''),
(2, 'Urology', 'urology', 'சிறுநீரக மருத்துவ சிகிச்சை', '<p>Urology is a part of health care that deals with a lot of different body parts. This includes body parts that form the Urinary System and Male Reproductive System. If you have a problem with a body part in these two systems, you may need to see a urologist.Many of your body parts work with each other to form the Urinary System.&nbsp;</p>\r\n\r\n<p>Urine is taken out of the body if these parts work with each other in the right order. This allows normal urination to happen. For both men and women, the main parts of the system are Kidneys, Ureters, Bladder and Urethra. Urine is produced in the kidneys. It flows through tubes called ureters, and into the bladder. Urine leaves the body through the urethra.</p>\r\n\r\n<p>Urology is known as a surgical specialty. Besides surgery, a urologist is a doctor with wisdom of internal medicine, pediatrics, gynecology and other parts of health care. This is because a urologist encounters a wide range of clinical problems. The scope of urology is big and the American Urological Association has named seven subspecialty parts:</p>\r\n\r\n<ul>\r\n	<li>&nbsp; &nbsp;-&nbsp; &nbsp;Pediatric Urology (children&#39;s urology)</li>\r\n	<li>&nbsp; &nbsp;-&nbsp; &nbsp;Urologic Oncology (urologic cancers)</li>\r\n	<li>&nbsp; &nbsp;-&nbsp; &nbsp;Renal (kidney) Transplant</li>\r\n	<li>&nbsp; &nbsp;-&nbsp; &nbsp;Male Infertility</li>\r\n	<li>&nbsp; &nbsp;-&nbsp; &nbsp;Calculi (urinary tract stones)</li>\r\n	<li>&nbsp; &nbsp;-&nbsp; &nbsp;Female Urology</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The kidneys are fist-size organs that make urine. They are found on both sides of the spine behind the liver, stomach, pancreas and bowels. Healthy kidneys work like clockwork to turn extra water and waste into urine.Urine flows out of the kidneys and into the ureters. Ureters are thin tubes of muscle that connect the kidneys to the bladder. Ureters carry urine from the kidneys to the bladder.Urine leaves the body through a hollow tube connected to the bladder. This tube is called a urethra.</p>\r\n\r\n<p>Many body parts work with each other to form the Male Reproductive System. The purpose is for each part to work in the right order so a male can have sex. During sex, you may be able to fertilize a woman&#39;s ovum (egg) and make a baby. Not all men are able to have sex, even if their Male Reproductive System works right.</p>\r\n\r\n<p>The testicles (also known as testes) are two golf ball size glands held in a sac (scrotum) below the penis. The testicles have a firm, slightly spongy feel. At the top and outside edge is a rubbery, tube-like structure called the epididymis. The firmness of the teste should be the same throughout. The size of the testicles should be about the same.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', '', '', 'department-2.jpg', 'department-banner-2.jpg', 'Department', 'Department, Doctor, Care, Consultant', ''),
(3, 'Dermatology', 'dermatology', 'தோல் நோய் மருத்துவ சிகிச்சை', '<p>A dermatologist is the medical expert you should consult if you have any significant problem with your skin. Dermatology is the science that is concerned with the diagnosis and treatment of diseases of the skin, hair and nails.</p>\r\n\r\n<p>Dermatology involves but is not limited to study, research, and diagnosis of normal and disorders, diseases, cancers, cosmetic and ageing conditions of the skin, fat, hair, nails and oral and genital membranes, and the management of these by different investigations and therapies, including but not limited to dermatohistopathology, topical and systemic medications, dermatologic surgery and dermatologic cosmetic surgery, immunotherapy, phototherapy, laser therapy, radiotherapy and photodynamic therapy.</p>\r\n\r\n<p>The skin is the largest and most visible organ of the body. It reflects the health of the body and acts as a barrier against injury and&nbsp;bacteria. Unfortunately, at one time or another, nearly everyone has some type of skin disease - infants, children, teenagers, adults and the elderly. One in six (15%) of all visits to the family doctor (GP) involves a skin problem.</p>\r\n\r\n<p><br />\r\nCommon skin diseases include</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp;-&nbsp; &nbsp;Skin cancer<br />\r\n&nbsp; &nbsp; &nbsp;-&nbsp; &nbsp;Warts<br />\r\n&nbsp; &nbsp; &nbsp;-&nbsp; &nbsp;Fungal infections<br />\r\n&nbsp; &nbsp; &nbsp;-&nbsp; &nbsp;Dermatitis<br />\r\n&nbsp; &nbsp; &nbsp;-&nbsp; &nbsp;Psoriasis&nbsp;<br />\r\n&nbsp; &nbsp; &nbsp;-&nbsp; &nbsp;Acne affects every teenager to one degree or another.</p>\r\n\r\n<p>Dermatology is constantly adapting itself to meet the changing medical challenges of our society. New drugs may cause unusual side-effects; pesticides, industrial compounds and cosmetics continually pose new dermatological problems. More leisure time and outdoor work has increased the exposure to the sun and other hazards which can cause skin disease.</p>\r\n\r\n<p>Dermatologists must have expertise in basic sciences including microbiology, pathology, biochemistry, physics, physiology, and endocrinology. They must be familiar with all the other medical specialities because of their consultant work and because skin diseases are often associated with internal conditions.</p>\r\n\r\n<p>Dermatologists perform skin surgery in many situations:</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp;-&nbsp; &nbsp;To prevent or provide early control of disease, eg remove skin cancer.<br />\r\n&nbsp; &nbsp; &nbsp;-&nbsp; &nbsp;To improve the skin&#39;s appearance by removing growths, discolourations, or damage caused by ageing, sunlight or disease.<br />\r\n&nbsp; &nbsp; &nbsp;-&nbsp; &nbsp;To establish a definite diagnosis (biopsy).</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', '', '', 'department-3.jpg', 'department-banner-2.jpg', 'Department', 'Department, Doctor, Care, Consultant', ''),
(4, 'Paediatrics', 'paediatrics', 'குழந்தை மருத்துவ சிகிச்சை', '<p>It&#39;s one of the biggest decisions you make before your baby is born. Which pediatrician is the right one for your child? Before you start your search, take a few minutes to learn exactly what this kind of doctor does. It will help you make a better choice and know what to expect when your little one arrives.</p>\r\n\r\n<p>Pediatricians are doctors who manage the health of your child, including physical, behavior, and mental health issues. They&#39;re trained to diagnose and treat childhood illnesses, from minor health problems to serious diseases.Pediatricians have an education that gives them special skills to take care of your child&#39;s health.&nbsp;</p>\r\n\r\n<p>One thing to keep in mind: Family medicine doctors are also an option for your child. They look after the health of your whole family -- kids and grown-ups alike. It&#39;s a personal choice whether you use one or a pediatrician.</p>\r\n\r\n<p><strong>Some reasons to go with a pediatrician are:</strong></p>\r\n\r\n<p><em>&nbsp; &nbsp; &nbsp;-&nbsp; &nbsp;They have special training in children&#39;s health.</em></p>\r\n\r\n<p><em>&nbsp; &nbsp; &nbsp;-&nbsp; &nbsp;They only see children in their practice, so they have a lot of experience in recognizing and treating childhood illnesses.</em></p>\r\n\r\n<p><em>&nbsp; &nbsp; &nbsp;-&nbsp; &nbsp;If your child was born early or has a health condition that needs close monitoring, a pediatrician may offer more specialized care.</em></p>\r\n\r\n<p><strong>aediatrics&nbsp;can be&nbsp;divided into 4 main areas:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp;<em>-&nbsp; &nbsp; General paediatrics - a hospital role covering children from birth to the age of 16. Most paediatricians have this generalist role</em></p>\r\n\r\n<p><em>&nbsp; &nbsp; &nbsp;-&nbsp; &nbsp; Neonatology - this role specialises in looking after newly born babies. It is usually based in an intensive care&nbsp;unit looking after premature babies or those with problems at birth</em></p>\r\n\r\n<p><em>&nbsp; &nbsp; &nbsp;-&nbsp; &nbsp;Community paediatrics&nbsp;- these doctors are based in the community and look after children with developmental, social or behavioural problems and those with a physical disability</em></p>\r\n\r\n<p><em>&nbsp; &nbsp; &nbsp;-&nbsp; &nbsp;Paediatric cardiology&nbsp;- this is a small area which is a specialty in its own right. These doctors diagnose and treat children with cardiac (heart) conditions</em></p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', '', '', 'department-4.jpg', 'department-banner-2.jpg', 'Department', 'Department, Doctor, Care, Consultant', ''),
(5, 'Neonatology', 'neonatology', 'பச்சிளம் குழந்தை மருத்துவ சிகிச்சை', '<p>Neonatologists are physicians trained to handle the special health needs of newborns. Those doctors planning a carrier as neonatologist must obtain specialised training through residency and fellowship programme. &nbsp;If a newborn is premature or has a serious illness or injury or birth defect a neonatologist may assist at the time of delivery and in the subsequent care of newborn. If a problem is identified before the baby is born a neonatologist may become involved to consult with an obstetrician in your baby&rsquo;s care during your pregnancy.</p>\r\n\r\n<p>Neonatology&nbsp;is a rapidly changing specialty, and it is important for clinicians to remain up-to-date in the field. There are a number of ways to achieve this goal, including attending local, regional, and national conferences and reading journals and textbooks. An example of the changing recommendations for the practice of neonatology is seen in the postnatal use of steroids in ventilator-dependent babies.</p>\r\n\r\n<p>You might be wondering about the difference between a paediatrician and a neonatologist. While a paediatrician is qualified to handle most of your baby&rsquo;s medical care, a neonatologist specializes in providing care in complex and high-risk situations.The word &lsquo;neonatologist&rsquo; breaks down literally to mean &lsquo;the science of the newborn. They work mainly in the special care nurseries or newborn intensive care units of hospitals. In some cases, after a newborn has been discharged from the unit, a neonatologist may provide short-term follow-up care on an outpatient basis.</p>\r\n\r\n<p>Treatments given by neonatologist are:</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp;-&nbsp; <em>Care to the newborn at a caesarean or other delivery especially having medical problems in the mother or baby that may require medical intervention in the delivery room.</em></p>\r\n\r\n<p><em>&nbsp; &nbsp; &nbsp;-&nbsp; &nbsp;Comprehensive management of newborns born premature.</em></p>\r\n\r\n<p><em>&nbsp; &nbsp; &nbsp;-&nbsp; &nbsp;Manage newborns with any life-threatening medical problems.</em></p>\r\n\r\n<p><em>&nbsp; &nbsp; &nbsp;-&nbsp; &nbsp;Diagnose and manage respiratory distress.</em></p>\r\n\r\n<p><em>&nbsp; &nbsp; &nbsp;-&nbsp; &nbsp;Ensure developmental care and proper nutritional supplements for premature babies.</em></p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', '', '', 'department-5.jpg', 'department-banner-2.jpg', 'Department', 'Department, Doctor, Care, Consultant', ''),
(6, 'ENT Department', 'ent', 'காது,மூக்கு, தொண்டை மருத்துவ சிகிச்சை', '', '', '', '', '', 'department-6.jpg', 'department-banner-2.jpg', 'Department', 'Department, Doctor, Care, Consultant', ''),
(7, 'Gastroenterology', 'gastroenterology', 'இரைப்பை மற்றும் குடல் மருத்துவ சிகிச்சை', '', '', '', '', '', 'department-7.jpg', 'department-banner-2.jpg', 'Department', 'Department, Doctor, Care, Consultant', ''),
(8, 'Obstetrics & Gynaecology', 'obstetrics-gynaecology', 'மகப்பேறு மருத்துவ சிகிச்சை', '', '', '', '', '', 'department-8.png', 'department-banner-2.jpg', 'Department', 'Department, Doctor, Care, Consultant', ''),
(9, 'Radiology', 'radiology', 'கதிரியக்க மருத்துவ சிகிச்சை', '', '', '', '', '', 'department-9.jpg', 'department-banner-2.jpg', 'Department', 'Department, Doctor, Care, Consultant', ''),
(10, 'Neurology', '', 'நரம்பியல் மருத்துவ சிகிச்சை', '', '', '', '', '', 'department-1.jpg', 'department-banner-2.jpg', 'Department', 'Department, Doctor, Care, Consultant', ''),
(11, 'Oncology', 'oncology', 'புற்று நோய் மருத்துவ சிகிச்சை', '', '', '', '', '', 'department-11.png', 'department-banner-2.jpg', 'Department', 'Department, Doctor, Care, Consultant', ''),
(12, 'Pulmonology', 'pulmonolgy', 'நுரையீரல் மருத்துவ சிகிச்சை', '', '', '', '', '', 'department-12.jpg', 'department-banner-2.jpg', 'Department', 'Department, Doctor, Care, Consultant', ''),
(13, 'Ophthalmology', 'ophthalmology', 'கண் மருத்துவ சிகிச்சை', '', '', '', '', '', 'department-13.jpg', 'department-banner-2.jpg', 'Department', 'Department, Doctor, Care, Consultant', ''),
(14, 'Rheumatology', 'rheumatology', 'முடக்கு,வாத மருத்துவ சிகிச்சை', '', '', '', '', '', 'department-14.jpg', 'department-banner-2.jpg', 'Department', 'Department, Doctor, Care, Consultant', ''),
(15, 'Psychology', 'psychology', 'மனவியல் மருத்துவ சிகிச்சை', '', '', '', '', '', 'department-15.jpg', 'department-banner-2.jpg', 'Department', 'Department, Doctor, Care, Consultant', ''),
(16, 'Orthopaedics', 'orthopaedics', 'எலும்பு மருத்துவ சிகிச்சை', '', '', '', '', '', 'department-16.jpg', 'department-banner-2.jpg', 'Department', 'Department, Doctor, Care, Consultant', ''),
(17, 'Nephrology', 'nephrology', 'சிறுநீரக மருத்துவ சிகிச்சை', '', '', '', '', '', 'department-17.jpg', 'department-banner-2.jpg', 'Department', 'Department, Doctor, Care, Consultant', ''),
(18, 'General medicine', 'general', 'பொது மருத்துவ சிகிச்சை', '', '', '', '', '', 'department-18.jpg', 'department-banner-2.jpg', 'Department', 'Department, Doctor, Care, Consultant', ''),
(19, 'Diabetology', 'diabetology', 'நீரிழிவு மருத்துவ சிகிச்சை', '', '', '', '', '', 'department-19.jpg', 'department-banner-2.jpg', 'Department', 'Department, Doctor, Care, Consultant', ''),
(20, 'Dialysis laparoscopic surgery', 'dialysis', 'ஊடுபிரித்தல் அறுவை சிகிச்சை', '', '', '', '', '', 'department-20.jpg', 'department-banner-2.jpg', 'Department', 'Department, Doctor, Care, Consultant', ''),
(21, 'Plastic surgery', 'plastic-surgery', 'ஒட்டுறுப்பு அறுவை சிகிச்சை', '', '', '', '', '', 'department-21.jpg', 'department-banner-2.jpg', 'Department', 'Department, Doctor, Care, Consultant', ''),
(22, 'General surgery', 'generalsurgery', 'பொது அறுவை சிகிச்சை', '', '', '', '', '', 'department-22.jpg', 'department-banner-2.jpg', 'Department', 'Department, Doctor, Care, Consultant', ''),
(23, 'Vascular surgery', 'vascularsurgery', 'இரத்தநாள அறுவை சிகிச்சை', '', '', '', '', '', 'department-23.jpg', 'department-banner-2.jpg', 'Department', 'Department, Doctor, Care, Consultant', ''),
(24, 'Dental Care', 'dental-care', 'பல் மருத்துவ சிகிச்சை', '', '', '', '', '', 'department-24.jpg', 'department-banner-2.jpg', 'Department', 'Department, Doctor, Care, Consultant', ''),
(25, 'Cath lab', 'cath-lab', '\r\nகாத் ஆய்வகம்', '', '', '', '', '', 'department-25.jpg', 'department-banner-2.jpg', 'Department', 'Department, Doctor, Care, Consultant', ''),
(26, 'Emergency unit', 'emergency', 'அவசர மருத்துவ சிகிச்சை', '', '', '', '', '', 'department-26.jpg', 'department-banner-1.jpg', 'Department', 'Department, Doctor, Care, Consultant', '');

-- --------------------------------------------------------

--
-- Table structure for table `department_appointment`
--

CREATE TABLE `department_appointment` (
  `app_id` int(11) NOT NULL,
  `app_name` varchar(100) NOT NULL,
  `app_email` varchar(100) NOT NULL,
  `app_phone` varchar(100) NOT NULL,
  `app_content` text NOT NULL,
  `dep_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department_faq`
--

CREATE TABLE `department_faq` (
  `fq_id` int(11) NOT NULL,
  `fq_title` varchar(255) NOT NULL,
  `fq_content` text NOT NULL,
  `dep_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_faq`
--

INSERT INTO `department_faq` (`fq_id`, `fq_title`, `fq_content`, `dep_id`) VALUES
(1, 'Where will you get doctors?', 'Vadaseri, Nagercoil', 1),
(8, 'Will you need to come to us everyday?', 'No man. It is not needed. But if you want you can visit and come to our office.\r\n\r\nWe arrange some lunch for our visitors who can become a client of us in future.', 1),
(9, 'How do I book an appointment?', 'You can easily book an appointment going to appointment form in the department details page.', 1),
(10, 'How do I book an appointment?', 'You can easily book an appointment going to appointment form in the department details page.', 5),
(11, 'What is a health plan?', 'The group of doctors, hospitals, and other providers who work together to give you the healthcare you need.', 6);

-- --------------------------------------------------------

--
-- Table structure for table `department_openning_hour`
--

CREATE TABLE `department_openning_hour` (
  `oh_id` int(11) NOT NULL,
  `oh_day` varchar(255) NOT NULL,
  `oh_time` varchar(255) NOT NULL,
  `dep_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_openning_hour`
--

INSERT INTO `department_openning_hour` (`oh_id`, `oh_day`, `oh_time`, `dep_id`) VALUES
(9, 'Sat', '9:00 AM', 5),
(17, 'Monday', '8:00 AM - 10:00 PM', 1),
(18, 'Tuesday', '8:00 AM - 10:00 PM', 1),
(19, 'Wednesday', '8:00 AM - 10:00 PM', 1),
(20, 'Thursday', '8:00 AM - 10:00 PM', 1),
(21, 'Friday', '8:00 AM - 10:00 PM', 1),
(22, 'Saturday', '8:00 AM - 10:00 PM', 1),
(23, 'Sunday', 'Off', 1),
(24, 'Tuesday ', '8:00 AM - 10:00 PM', 5),
(25, 'Wednesday ', '8:00 AM - 10:00 PM', 5),
(26, 'Thursday ', '8:00 AM - 10:00 PM', 5),
(27, 'Friday ', '8:00 AM - 10:00 PM', 5),
(28, 'Saturday ', '8:00 AM - 10:00 PM', 5),
(29, 'Sunday ', 'Closed', 5),
(30, 'Monday', '8:00 AM - 10:00 PM', 6),
(31, 'Tuesday', '8:00 AM - 10:00 PM', 6),
(32, 'Wednesday', '8:00 AM - 10:00 PM', 6),
(33, 'Thursday', '8:00 AM - 10:00 PM', 6),
(34, 'Friday', '8:00 AM - 10:00 PM', 6),
(35, 'Saturday', '8:00 AM - 10:00 PM', 6),
(36, 'Sunday', 'Closed', 6),
(37, 'Monday', '8:00 AM - 10:00 PM', 7),
(38, 'Tuesday ', '8:00 AM - 10:00 PM', 7),
(39, 'Wednesday ', '8:00 AM - 10:00 PM', 7),
(40, 'Thursday ', '8:00 AM - 10:00 PM', 7),
(41, 'Friday ', '8:00 AM - 10:00 PM', 7),
(42, 'Saturday ', '8:00 AM - 10:00 PM', 7),
(43, 'Sunday', 'Closed', 7);

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designation_id` int(11) NOT NULL,
  `designation_name` varchar(100) NOT NULL,
  `department_tamil` text CHARACTER SET utf8 DEFAULT NULL,
  `designation_detail` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `designation_name`, `department_tamil`, `designation_detail`) VALUES
(1, 'Cardiology', 'இருதய மருத்துவ', '<p>Cardiology is the study heart conditions. The Consultant with whom you have an appointment is a specialist</p>'),
(2, 'Urology', '0', NULL),
(3, 'Dermatology', '0', NULL),
(4, 'Paediatrics', '0', NULL),
(5, 'Neonatology', '0', NULL),
(6, 'ENT Department', '0', NULL),
(7, 'Gastroenterology', '0', NULL),
(8, 'Obstetrics & Gynaecology', '0', NULL),
(9, 'Radiology', '0', NULL),
(10, 'Neurology', '0', NULL),
(11, 'Oncology', '0', NULL),
(12, 'Pulmonology', '0', NULL),
(13, 'Ophthalmology', '0', NULL),
(14, 'Rheumatology', '0', NULL),
(15, 'Psychology', '0', NULL),
(16, 'Orthopaedics', '0', NULL),
(17, 'Nephrology', '0', NULL),
(19, 'Diabetology', '0', NULL),
(20, 'Dental care', '0', NULL),
(21, 'Dialysis laparoscopic surgery', '0', NULL),
(22, 'Plastic surgery', '0', NULL),
(23, 'General Surgery', '0', NULL),
(24, 'Vascular surgery', '0', NULL),
(25, 'Emergency unit', '0', NULL),
(26, 'Cath lab', '0', NULL),
(28, 'Anaesthesiologist', NULL, NULL),
(29, 'Duty Doctor', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `google_plus` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `flickr` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `practice_location` text NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `slug`, `designation_id`, `photo`, `banner`, `degree`, `detail`, `facebook`, `twitter`, `linkedin`, `youtube`, `google_plus`, `instagram`, `flickr`, `address`, `practice_location`, `phone`, `email`, `website`, `status`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'Dr. Ajitha Sekar - MD', 'dr-ajitha-sekar', 8, 'doctor-8.jpg', 'doctor-banner-8.jpg', 'MD', '<p>After graduating from Vinayaka Mission Medical University, Salem Dr. Ajitha Sekar - MD(OBG) completed a two-year fellowship in sports medicine at Tanjore Children&rsquo;s Hospital. During his training at Tanjore, Dr. Ajitha Sekar - MD(OBG) and Dr. Alex Mathew was team physician for the University of Tanjore and Vinayaka Mission University</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', ' Suite 27, Medical Centre, Vasantham Healthcare Pvt., LTD, Nagercoil', 'Appolo Hospitals, Chennai', '', '', 'https://zeroappz.com', 'Active', '', '', ''),
(2, 'Dr. N.B.Venkataraman -  MD, DM', 'dr-venkataraman', 1, 'doctor-8.jpg', 'doctor-banner-8.jpg', ' MD, DM', '<p>After graduating from Vinayaka Mission Medical University, Salem Dr. Ajitha Sekar - MD(OBG) completed a two-year fellowship in sports medicine at Tanjore Children&rsquo;s Hospital. During his training at Tanjore, Dr. Ajitha Sekar - MD(OBG) and Dr. Alex Mathew was team physician for the University of Tanjore and Vinayaka Mission University</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', ' Suite 27, Medical Centre, Vasantham Healthcare Pvt., LTD, Nagercoil', '', '', '', 'https://zeroappz.com', 'Active', '', '', ''),
(3, 'Dr. Venkatesh - MD, DCH(CARDIO)', 'dr-venkatesh', 1, 'doctor-8.jpg', 'doctor-banner-8.jpg', 'MD, DCH(CARDIO)', '<p>After graduating from Vinayaka Mission Medical University, Salem Dr. Ajitha Sekar - MD(OBG) completed a two-year fellowship in sports medicine at Tanjore Children&rsquo;s Hospital. During his training at Tanjore, Dr. Ajitha Sekar - MD(OBG) and Dr. Alex Mathew was team physician for the University of Tanjore and Vinayaka Mission University</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', ' Suite 27, Medical Centre, Vasantham Healthcare Pvt., LTD, Nagercoil', '', '', '', 'https://zeroappz.com', 'Active', '', '', ''),
(4, 'Dr. B.V Selvan - MD', 'dr-selvan', 3, 'doctor-8.jpg', 'doctor-banner-8.jpg', 'MD', '<p>After graduating from Vinayaka Mission Medical University, Salem Dr. Ajitha Sekar - MD(OBG) completed a two-year fellowship in sports medicine at Tanjore Children&rsquo;s Hospital. During his training at Tanjore, Dr. Ajitha Sekar - MD(OBG) and Dr. Alex Mathew was team physician for the University of Tanjore and Vinayaka Mission University</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', ' Suite 27, Medical Centre, Vasantham Healthcare Pvt., LTD, Nagercoil', '', '', '', 'https://zeroappz.com', 'Active', '', '', ''),
(5, 'Dr. Vijayaraj - DLO', 'dr-vijayaraj-1', 6, 'doctor-8.jpg', 'doctor-banner-8.jpg', 'DLO', '<p>After graduating from Vinayaka Mission Medical University, Salem Dr. Ajitha Sekar - MD(OBG) completed a two-year fellowship in sports medicine at Tanjore Children&rsquo;s Hospital. During his training at Tanjore, Dr. Ajitha Sekar - MD(OBG) and Dr. Alex Mathew was team physician for the University of Tanjore and Vinayaka Mission University</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', ' Suite 27, Medical Centre, Vasantham Healthcare Pvt., LTD, Nagercoil', '', '', '', 'https://zeroappz.com', 'Active', '', '', ''),
(6, 'Dr. Sivarajan - MS, M.ch', 'dr-sivarajan', 4, 'doctor-8.jpg', 'doctor-banner-8.jpg', 'MS, M.ch', '<p>After graduating from Vinayaka Mission Medical University, Salem Dr. Ajitha Sekar - MD(OBG) completed a two-year fellowship in sports medicine at Tanjore Children&rsquo;s Hospital. During his training at Tanjore, Dr. Ajitha Sekar - MD(OBG) and Dr. Alex Mathew was team physician for the University of Tanjore and Vinayaka Mission University</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', ' Suite 27, Medical Centre, Vasantham Healthcare Pvt., LTD, Nagercoil', '', '', '', 'https://zeroappz.com', 'Active', '', '', ''),
(7, 'Dr. Sethuram - DM', 'dr-sethuram', 10, 'doctor-8.jpg', 'doctor-banner-8.jpg', 'DM', '<p>After graduating from Vinayaka Mission Medical University, Salem Dr. Ajitha Sekar - MD(OBG) completed a two-year fellowship in sports medicine at Tanjore Children&rsquo;s Hospital. During his training at Tanjore, Dr. Ajitha Sekar - MD(OBG) and Dr. Alex Mathew was team physician for the University of Tanjore and Vinayaka Mission University</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', ' Suite 27, Medical Centre, Vasantham Healthcare Pvt., LTD, Nagercoil', '', '', '', 'https://zeroappz.com', 'Active', '', '', ''),
(8, 'Dr. Abraham Muthurangam - MS,Mch', 'dr-abraham-muthurangam', 2, 'doctor-8.jpg', 'doctor-banner-8.jpg', 'MS,Mch', '<p>After graduating from Vinayaka Mission Medical University, Salem Dr. Ajitha Sekar - MD(OBG) completed a two-year fellowship in sports medicine at Tanjore Children&rsquo;s Hospital. During his training at Tanjore, Dr. Ajitha Sekar - MD(OBG) and Dr. Alex Mathew was team physician for the University of Tanjore and Vinayaka Mission University</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', ' Suite 27, Medical Centre, Vasantham Healthcare Pvt., LTD, Nagercoil', '', '', '', 'https://zeroappz.com', 'Active', '', '', ''),
(9, 'Dr. Valluvan - MBBS,MD', 'dr-valluvan', 16, 'doctor-8.jpg', 'doctor-banner-8.jpg', ' Doctor of Medicine, University of Madras, Chennai, IN (1990) Medical Orientation Program, St. Louis University (St. Louis, Missouri 1996)', '<p>After graduating from Vinayaka Mission Medical University, Salem Dr. Ajitha Sekar - MD(OBG) completed a two-year fellowship in sports medicine at Tanjore Children&rsquo;s Hospital. During his training at Tanjore, Dr. Ajitha Sekar - MD(OBG) and Dr. Alex Mathew was team physician for the University of Tanjore and Vinayaka Mission University</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', ' Suite 27, Medical Centre, Vasantham Healthcare Pvt., LTD, Nagercoil', '', '', '', 'https://zeroappz.com', 'Active', '', '', ''),
(10, 'Dr. B. Nagarajan - DNB', 'dr-nagarajan', 15, 'doctor-8.jpg', 'doctor-banner-8.jpg', 'DNB', '<p>After graduating from Vinayaka Mission Medical University, Salem Dr. Ajitha Sekar - MD(OBG) completed a two-year fellowship in sports medicine at Tanjore Children&rsquo;s Hospital. During his training at Tanjore, Dr. Ajitha Sekar - MD(OBG) and Dr. Alex Mathew was team physician for the University of Tanjore and Vinayaka Mission University</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', ' Suite 27, Medical Centre, Vasantham Healthcare Pvt., LTD, Nagercoil', '', '', '', 'https://zeroappz.com', 'Active', '', '', ''),
(11, 'Dr. T. Muthuretnam - M.ch', 'dr-muthuretnam', 10, 'doctor-8.jpg', 'doctor-banner-8.jpg', 'M.ch', '<p>After graduating from Vinayaka Mission Medical University, Salem Dr. Ajitha Sekar - MD(OBG) completed a two-year fellowship in sports medicine at Tanjore Children&rsquo;s Hospital. During his training at Tanjore, Dr. Ajitha Sekar - MD(OBG) and Dr. Alex Mathew was team physician for the University of Tanjore and Vinayaka Mission University</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', ' Suite 27, Medical Centre, Vasantham Healthcare Pvt., LTD, Nagercoil', '', '', '', 'https://zeroappz.com', 'Active', '', '', ''),
(12, 'Dr. Jerryl Maclean - DTCD,FCCP,DNB', 'dr-jerryl-macleanr', 12, 'doctor-8.jpg', 'doctor-banner-8.jpg', 'DTCD,FCCP,DNB', '<p>After graduating from Vinayaka Mission Medical University, Salem Dr. Ajitha Sekar - MD(OBG) completed a two-year fellowship in sports medicine at Tanjore Children&rsquo;s Hospital. During his training at Tanjore, Dr. Ajitha Sekar - MD(OBG) and Dr. Alex Mathew was team physician for the University of Tanjore and Vinayaka Mission University</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', ' Suite 27, Medical Centre, Vasantham Healthcare Pvt., LTD, Nagercoil', '', '', '', 'https://zeroappz.com', 'Active', '', '', ''),
(13, 'Dr. Vijayaraj - DLO MBBS,DMRD', 'dr-vijayaraj', 6, 'doctor-8.jpg', 'doctor-banner-8.jpg', 'DLO MBBS,DMRD', '<p>After graduating from Vinayaka Mission Medical University, Salem Dr. Ajitha Sekar - MD(OBG) completed a two-year fellowship in sports medicine at Tanjore Children&rsquo;s Hospital. During his training at Tanjore, Dr. Ajitha Sekar - MD(OBG) and Dr. Alex Mathew was team physician for the University of Tanjore and Vinayaka Mission University</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', ' Suite 27, Medical Centre, Vasantham Healthcare Pvt., LTD, Nagercoil', '', '', '', 'https://zeroappz.com', 'Active', '', '', ''),
(14, 'Dr. M.S. Kishore - MBBS,DMRD', 'dr-kishore-1-1', 9, 'doctor-8.jpg', 'doctor-banner-8.jpg', ' MBBS,DMRD', '<p>After graduating from Vinayaka Mission Medical University, Salem Dr. Ajitha Sekar - MD(OBG) completed a two-year fellowship in sports medicine at Tanjore Children&rsquo;s Hospital. During his training at Tanjore, Dr. Ajitha Sekar - MD(OBG) and Dr. Alex Mathew was team physician for the University of Tanjore and Vinayaka Mission University</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', ' Suite 27, Medical Centre, Vasantham Healthcare Pvt., LTD, Nagercoil', '', '', '', 'https://zeroappz.com', 'Active', '', '', ''),
(15, 'Dr. J. Antony Joe - ', 'dr-kishore-1-1', 7, 'doctor-8.jpg', 'doctor-banner-8.jpg', 'DM', '<p>After graduating from Vinayaka Mission Medical University, Salem Dr. Ajitha Sekar - MD(OBG) completed a two-year fellowship in sports medicine at Tanjore Children&rsquo;s Hospital. During his training at Tanjore, Dr. Ajitha Sekar - MD(OBG) and Dr. Alex Mathew was team physician for the University of Tanjore and Vinayaka Mission University</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', ' Suite 27, Medical Centre, Vasantham Healthcare Pvt., LTD, Nagercoil', '', '', '', 'https://zeroappz.com', 'Active', '', '', ''),
(16, 'Dr. Rajesh - MS,Mch', 'dr-kishore-1-1', 24, 'doctor-8.jpg', 'doctor-banner-8.jpg', 'MS,Mch', '<p>After graduating from Vinayaka Mission Medical University, Salem Dr. Ajitha Sekar - MD(OBG) completed a two-year fellowship in sports medicine at Tanjore Children&rsquo;s Hospital. During his training at Tanjore, Dr. Ajitha Sekar - MD(OBG) and Dr. Alex Mathew was team physician for the University of Tanjore and Vinayaka Mission University</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', ' Suite 27, Medical Centre, Vasantham Healthcare Pvt., LTD, Nagercoil', '', '', '', 'https://zeroappz.com', 'Active', '', '', ''),
(17, 'Dr. Siva Kumar - MD', 'dr-kishore-1-1', 28, 'doctor-8.jpg', 'doctor-banner-8.jpg', 'MD', '<p>After graduating from Vinayaka Mission Medical University, Salem Dr. Ajitha Sekar - MD(OBG) completed a two-year fellowship in sports medicine at Tanjore Children&rsquo;s Hospital. During his training at Tanjore, Dr. Ajitha Sekar - MD(OBG) and Dr. Alex Mathew was team physician for the University of Tanjore and Vinayaka Mission University</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', ' Suite 27, Medical Centre, Vasantham Healthcare Pvt., LTD, Nagercoil', '', '', '', 'https://zeroappz.com', 'Active', '', '', ''),
(18, 'Dr. Arun Vargese - MD,DNB,DM', 'dr-kishore-1-1', 17, 'doctor-8.jpg', 'doctor-banner-8.jpg', 'MD,DNB,DM', '<p>After graduating from Vinayaka Mission Medical University, Salem Dr. Ajitha Sekar - MD(OBG) completed a two-year fellowship in sports medicine at Tanjore Children&rsquo;s Hospital. During his training at Tanjore, Dr. Ajitha Sekar - MD(OBG) and Dr. Alex Mathew was team physician for the University of Tanjore and Vinayaka Mission University</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', ' Suite 27, Medical Centre, Vasantham Healthcare Pvt., LTD, Nagercoil', '', '', '', 'https://zeroappz.com', 'Active', '', '', ''),
(19, 'Dr. V.V. Sujith - MBBS', 'dr-kishore-1-1-1-1', 29, 'doctor-8.jpg', 'doctor-banner-8.jpg', 'MBBS', '<p>After graduating from Vinayaka Mission Medical University, Salem Dr. Ajitha Sekar - MD(OBG) completed a two-year fellowship in sports medicine at Tanjore Children&rsquo;s Hospital. During his training at Tanjore, Dr. Ajitha Sekar - MD(OBG) and Dr. Alex Mathew was team physician for the University of Tanjore and Vinayaka Mission University</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', ' Suite 27, Medical Centre, Vasantham Healthcare Pvt., LTD, Nagercoil', '', '', '', 'https://zeroappz.com', 'Active', '', '', ''),
(20, 'Dr. Sivakami  - MBBS', 'dr-kishore-1-1-1', 29, 'doctor-8.jpg', 'doctor-banner-8.jpg', 'MBBS', '<p>After graduating from Vinayaka Mission Medical University, Salem Dr. Ajitha Sekar - MD(OBG) completed a two-year fellowship in sports medicine at Tanjore Children&rsquo;s Hospital. During his training at Tanjore, Dr. Ajitha Sekar - MD(OBG) and Dr. Alex Mathew was team physician for the University of Tanjore and Vinayaka Mission University</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', ' Suite 27, Medical Centre, Vasantham Healthcare Pvt., LTD, Nagercoil', '', '', '', 'https://zeroappz.com', 'Active', '', '', ''),
(21, 'Dr. Subashini  -  MBBS', 'dr-kishore-1-1', 29, 'doctor-8.jpg', 'doctor-banner-8.jpg', ' MBBS', '<p>After graduating from Vinayaka Mission Medical University, Salem Dr. Ajitha Sekar - MD(OBG) completed a two-year fellowship in sports medicine at Tanjore Children&rsquo;s Hospital. During his training at Tanjore, Dr. Ajitha Sekar - MD(OBG) and Dr. Alex Mathew was team physician for the University of Tanjore and Vinayaka Mission University</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', ' Suite 27, Medical Centre, Vasantham Healthcare Pvt., LTD, Nagercoil', '', '', '', 'https://zeroappz.com', 'Active', '', '', ''),
(22, 'Dr. S. Ratheesh - MBBS', 'dr-kishore-1', 5, 'doctor-8.jpg', 'doctor-banner-8.jpg', ' Doctor of Medicine, University of Madras, Chennai, IN (1990) Medical Orientation Program, St. Louis University (St. Louis, Missouri 1996)', '<p>After graduating from Vinayaka Mission Medical University, Salem Dr. Ajitha Sekar - MD(OBG) completed a two-year fellowship in sports medicine at Tanjore Children&rsquo;s Hospital. During his training at Tanjore, Dr. Ajitha Sekar - MD(OBG) and Dr. Alex Mathew was team physician for the University of Tanjore and Vinayaka Mission University</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', ' Suite 27, Medical Centre, Vasantham Healthcare Pvt., LTD, Nagercoil', '', '', '', 'https://zeroappz.com', 'Inactive', '', '', ''),
(23, 'Dr. Fredilia - MBBS', 'dr-kishore', 5, 'doctor-8.jpg', 'doctor-banner-8.jpg', ' Doctor of Medicine, University of Madras, Chennai, IN (1990) Medical Orientation Program, St. Louis University (St. Louis, Missouri 1996)', '<p>After graduating from Vinayaka Mission Medical University, Salem Dr. Ajitha Sekar - MD(OBG) completed a two-year fellowship in sports medicine at Tanjore Children&rsquo;s Hospital. During his training at Tanjore, Dr. Ajitha Sekar - MD(OBG) and Dr. Alex Mathew was team physician for the University of Tanjore and Vinayaka Mission University</p>\r\n', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', '', '', '', '', ' Suite 27, Medical Centre, Vasantham Healthcare Pvt., LTD, Nagercoil', '', '', '', 'https://zeroappz.com', 'Inactive', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `faq_title` varchar(255) NOT NULL,
  `faq_content` text NOT NULL,
  `faq_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `faq_title`, `faq_content`, `faq_category_id`) VALUES
(1, 'How can I find the rules that apply to me?', '<ul>\r\n	<li>Most of the definitions are in OAR 333-008-0010.</li>\r\n	<li>Rules that apply to patients and caregivers can be found mainly in OAR 333-008-0020 to 333-008-0080.</li>\r\n	<li>Rules that apply to growers and grow sites can be found mainly in OAR 333-008-0033, 333-008-0037, â€‹333-008-0047, 333-008-0500 to 333-008-0640.</li>\r\n	<li>Rules that apply to dispensaries are OAR 333-008-1000 to 333-008-1248 and 333-008-2000 to 333-008-2200.</li>\r\n	<li>Rules that apply to processors are OAR 333-008-1600 to 333-008-2200.</li>\r\n	<li>Labeling rules can be found in OAR 333-007-0010 to 333-007-0100.</li>\r\n	<li>Concentration and serving size limits can be found in OAR 333-007-0200 to 333-007-0220.</li>\r\n	<li>Cannabis testing requirements can be found in OAR 333-007-0300 to 333-007-0490.</li>\r\n	<li>Accreditation of laboratories can be found in OAR 333-064-0100 to 333-064-0110.</li>\r\n</ul>\r\n', 1),
(2, 'How do I find out about rulemaking, rule changes and other updates regarding the medical marijuana program?', '<p>Individuals can subscribe&nbsp;to receive email updates related to medical marijuana.</p>\r\n', 1),
(3, 'Who can get a medical marijuana card?', '<p>Individuals with a qualifying medical condition and a recommendation for medical marijuana from an attending physician may apply for a medical marijuana card.</p>\r\n', 2),
(4, 'How do I apply for a card?', '<p>Visit our New Patients page to learn how to apply for a medical marijuana card.</p>\r\n', 2),
(5, 'How long does it take to get a card?', '<p>If, upon an initial review, it appears that a complete application has been received, the patient will be issued a receipt letter. This receipt has the same legal effect as a registry identification card for 30 days following the date printed on the letter. Once your application is finished being processed, a card will be mailed to you.</p>\r\n\r\n<p>If your application is NOT complete, OMMP staff will send you an &quot;Incomplete Letter&quot; to let you know what needs to be submitted to complete your application. You will have 14 days from the date of the letter to get the missing application materials to OMMP. If the missing application materials are not submitted within the 14 days, your application may be rejected.</p>\r\n', 2),
(6, 'What are the system requirements of the Medical Masterclass website?', '<p>The Medical Masterclass website is designed to function on Internet Explorer 9 and above. If you are using an older browser version, you will need to upgrade Internet Explorer to a newer version.</p>\r\n', 3),
(7, 'I cannot log in to my Medical Masterclass website subscription. Why?', '<p><strong>CHECK YOUR PASSWORD</strong></p>\r\n\r\n<p>Are you using the correct password? If you wish to reset your password, you can do so by clicking the &quot;Forgot password&quot; link on the login page. This will delete the old password and a new one will be sent by email.</p>\r\n\r\n<p>(If your browser has been set up to store login details, please make sure you clear any previously remembered passwords - i.e. if the username/password is already filled in on the login page, please delete these details and re-type).</p>\r\n\r\n<p>NB If you incorrectly type your password too many times consecutively the account will be locked. See &quot;This account is locked&quot; below.</p>\r\n\r\n<p>IF YOU ARE USING THE CORRECT PASSWORD</p>\r\n\r\n<p>Authentication requires a &lsquo;cookie&rsquo; to be sent to the user&rsquo;s web browser (These are small text files temporarily stored by your web browser which enable us to identify you when you are logged in.) If cookies are disallowed then the screen will return to the login page immediately after entering the username and password.</p>\r\n\r\n<p>Instructions for allowing these in Internet Explorer are provided below:</p>\r\n\r\n<ol>\r\n	<li>Click &#39;Tools&#39;, &#39;Internet Options&#39;, and click the &#39;Privacy&#39; tab.</li>\r\n	<li>Under &#39;Websites - to override cookie handling for individual websites...&#39; click &#39;Edit&#39;,</li>\r\n	<li>Under &#39;Add Address of website&#39; type &quot;medical-masterclass.com&quot; and click &#39;Allow&#39;</li>\r\n	<li>Click &#39;OK&#39; to close this window</li>\r\n	<li>Click &#39;OK&#39; to close the Internet Options window</li>\r\n</ol>\r\n\r\n<p>If you are not using Internet Explorer or are having difficulties, please check your browser&#39;s Help files or contact your IT department/vendor.</p>\r\n\r\n<p>If you are using a product that could block cookies, e.g. Norton Internet Security, or Norton Firewall, please follow any instructions for allowing them for &quot;medical-masterclass.com&quot;.</p>\r\n', 3),
(8, 'What is the average usersâ€™ score?', '<p>The system requires you to have Adobe Flash 8 (or greater) installed. If you do not have this installed, you will see a link offering to install it for you.</p>\r\n\r\n<p>Should you find the presentation plays but it stops and starts it may be because your internet connection speed is insufficient. We recommend a connection of at least 1Mb. Also, depending on your situation, you may find other factors such as time of day affect your experience.</p>\r\n\r\n<p>iPhone / iPad &ndash; at the present time the Apple iPhone / iPad does not support Flash and we are therefore unable to offer the PACES screencasts to iPhone / iPad users.</p>\r\n', 3);

-- --------------------------------------------------------

--
-- Table structure for table `faq_category`
--

CREATE TABLE `faq_category` (
  `faq_category_id` int(11) NOT NULL,
  `faq_category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq_category`
--

INSERT INTO `faq_category` (`faq_category_id`, `faq_category_name`) VALUES
(1, 'General Questions'),
(2, 'Patients Query'),
(3, 'Technical Questions');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `file_id` int(11) NOT NULL,
  `file_title` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home_category`
--

CREATE TABLE `home_category` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `category_order` varchar(10) NOT NULL,
  `category_layout` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_category`
--

INSERT INTO `home_category` (`id`, `category_id`, `category_order`, `category_layout`) VALUES
(14, 16, '2', '2 Columns (6 posts)'),
(15, 17, '', ''),
(16, 18, '', ''),
(17, 19, '1', '2 Columns (6 posts)'),
(18, 20, '4', '2 Columns (6 posts)'),
(19, 21, '3', '2 Columns (6 posts)'),
(20, 22, '', ''),
(21, 23, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_type` varchar(255) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `category_or_page_slug` varchar(255) NOT NULL,
  `menu_order` int(11) NOT NULL,
  `menu_parent` int(11) NOT NULL,
  `menu_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_type`, `menu_name`, `category_or_page_slug`, `menu_order`, `menu_parent`, `menu_url`) VALUES
(17, 'Other', 'Home', '', 1, 0, 'http://www.a3devs.com/xicia/codecanyon/yourdoctor/'),
(18, 'Other', 'Pages', '', 2, 0, '#'),
(19, 'Page', 'About Us', 'about-us', 3, 18, ''),
(20, 'Page', 'Contact Us', 'contact-us', 9, 0, ''),
(21, 'Page', 'FAQ', 'faq', 4, 18, ''),
(22, 'Other', 'Gallery', '', 3, 0, '#'),
(23, 'Page', 'Photo Gallery', 'photo-gallery', 80, 22, ''),
(24, 'Page', 'Video Gallery', 'video-gallery', 81, 22, ''),
(25, 'Page', 'Blog', 'blog', 8, 0, ''),
(26, 'Page', 'Doctors', 'doctors', 6, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_slug` varchar(255) NOT NULL,
  `news_content` text NOT NULL,
  `news_date` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `total_view` int(11) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_slug`, `news_content`, `news_date`, `photo`, `category_id`, `publisher`, `total_view`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'Donating plasma: What are the side effects and risks?', 'donating-plasma-what-are-the-side-effects-and-risks-', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-1.jpg', 1, 'John Doe', 11, 'Donating plasma: What are the side effects and risks?', '', ''),
(2, 'Fasting before a blood test: What you need to know', 'fasting-before-a-blood-test-what-you-need-to-know', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-2.jpg', 1, 'John Doe', 0, 'Fasting before a blood test: What you need to know', '', ''),
(3, 'Diabetes and hypertension: What is the relationship?', 'diabetes-and-hypertension-what-is-the-relationship-', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-3.jpg', 2, 'John Doe', 0, 'Diabetes and hypertension: What is the relationship?', '', ''),
(4, 'Seven Natural Diuretics to Eat and Drink', 'seven-natural-diuretics-to-eat-and-drink', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-4.jpg', 2, 'John Doe', 0, 'Seven Natural Diuretics to Eat and Drink', '', ''),
(5, 'Sperm morphology: Tests and results', 'sperm-morphology-tests-and-results', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-5.jpg', 3, 'John Doe', 20, 'Sperm morphology: Tests and results', '', ''),
(6, 'What causes testicle itch? Seven possible causes', 'what-causes-testicle-itch-seven-possible-causes', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-6.jpg', 3, 'John Doe', 0, 'What causes testicle itch? Seven possible causes', '', ''),
(7, 'Vulvitis: Causes, symptoms, and treatment', 'vulvitis-causes-symptoms-and-treatment', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-7.jpg', 4, 'John Doe', 0, 'Vulvitis: Causes, symptoms, and treatment', '', ''),
(8, 'Insomnia: Like mother, like child?', 'insomnia-like-mother-like-child-', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-8.jpg', 4, 'John Doe', 8, 'Insomnia: Like mother, like child?', '', ''),
(9, 'How Much Sugar Is In Your Food And Drink?', 'how-much-sugar-is-in-your-food-and-drink', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-9.jpg', 5, 'John Doe', 4, 'How Much Sugar Is In Your Food And Drink?', '', ''),
(10, 'Vitamin D: Health Benefits, Facts and Research', 'vitamin-d-health-benefits-facts-and-research', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-10.jpg', 5, 'John Doe', 3, 'Vitamin D: Health Benefits, Facts and Research', '', ''),
(11, 'Protein shake diet for weight loss', 'protein-shake-diet-for-weight-loss', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-11.jpg', 5, 'John Doe', 16, 'Protein shake diet for weight loss', '', ''),
(12, 'What is The Success rate of a root canel?', 'root-canel-success', '<p>Over the river and through the woods was more dangerous back when cars had crummy bias-ply tires, rear-wheel drive. Kevin tail capicola bresaola, prosciutto swine cupim trip boudin shoulder frankfurter. This process repeats many times per second until the vehicle stops or you lift your foot off the brake pedal ordinary brakes. Kevin tail capicola bresaola, prosciutto swine cupim tri-tip boudin shoulder frank furte.</p>\r\n', '07-11-2020', 'news-12.png', 6, 'Praveen Kumar', 4, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `page_slug` varchar(255) NOT NULL,
  `page_content` text NOT NULL,
  `page_layout` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `page_name`, `page_slug`, `page_content`, `page_layout`, `banner`, `status`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'About Us', 'about-us', '<p>Lorem ipsum dolor sit amet, at pro eleifend vulputate, vim movet regione ad. Has veritus adipisci aliquando eu, fugit eripuit dignissim per ea, sanctus omittam assueverit his ex. Nulla affert vix in, ei sea dolore dolores vivendum. Vix eros postea an, ius suas ubique habemus an, wisi nulla ex mel. Saepe postulant concludaturque at has. Exerci tincidunt interesset ne per, pro bonorum utroque appetere ad.</p>\r\n\r\n<p>Est ea corpora deserunt cotidieque, quo te vero melius assentior, pri ex velit altera iuvaret. Tibique hendrerit voluptaria ad quo. Ut appetere reprimique qui, aliquip suscipiantur ex eos. Nibh vero nusquam his eu, agam summo democritum mea ne. Ius in novum scripta, atqui appetere efficiantur an vel, ex probo modus temporibus nam.</p>\r\n\r\n<p>Ea feugiat nominavi quo, debet gubergren elaboraret at cum, mel timeam vivendo mentitum cu. Aeque civibus luptatum cu eos. Novum facilisi insolens his et, ex aliquip tibique laboramus vim. Vix brute appellantur ei.</p>\r\n\r\n<p>Nec eros viderer ne, mel ad suas offendit suavitate, te pri laoreet legendos hendrerit. Per ut paulo urbanitas mediocritatem, in sea facilisis imperdiet torquatos, ea vis soleat fierent pertinacia. Maiestatis reprimique no est, ut ius esse tation. Nam animal discere omnesque at. Evertitur adipiscing vis ei, his ut luptatum recteque, et idque mundi vim.</p>\r\n\r\n<p>Adhuc vocibus at mei, nulla altera eu vim. At sit quot ferri everti. Mea ea doming dictas possim. Te mea facete nominati constituam, no discere democritum has, ei nam eirmod vocent deserunt. Eu wisi voluptatibus mea, elit errem ad pro, vim quando denique id. Labitur accommodare eam at.</p>\r\n', 'Full Width Page Layout', 'page-banner-1.jpg', 'Active', 'About Us Page', '', ''),
(2, 'Contact Us', 'contact-us', '', 'Contact Us Page Layout', 'page-banner-2.jpg', 'Active', 'Contact Us Page', '', ''),
(5, 'Photo Gallery', 'photo-gallery', '', 'Photo Gallery Page Layout', 'page-banner-5.jpg', 'Active', 'Photo Gallery Page', '', ''),
(6, 'Video Gallery', 'video-gallery', '', 'Video Gallery Page Layout', 'page-banner-6.jpg', 'Active', 'Video Gallery Page', '', ''),
(7, 'FAQ', 'faq', '', 'FAQ Page Layout', 'page-banner-7.jpg', 'Active', 'FAQ Page', '', ''),
(8, 'Doctors', 'doctors', '', 'Doctor Page Layout', 'page-banner-8.jpg', 'Active', 'Doctors Page', '', ''),
(9, 'Blog', 'blog', '', 'Blog Page Layout', 'page-banner-9.jpg', 'Active', 'Blog Page', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `name`, `url`, `photo`) VALUES
(1, 'Chief Ministers Comprehensive Health Insurance Scheme', 'https://www.cmchistn.com', 'partner-1.png'),
(2, 'TNNHIS MidInida Health Service', 'http://www.tnnhis2016.com', 'partner-2.png'),
(3, 'Rashtriya Swasthya Bima Yojana', 'http://www.rsby.gov.in/how_works.html', 'partner-3.jpg'),
(4, 'Employee State Insurance Act', 'https://www.esic.nic.in', 'partner-4.png'),
(5, 'ESI Pension and Employees', 'https://www.esic.in/web/esic/esic-pensioner-s-medical-scheme', 'partner-5.png'),
(6, 'Nuclear power corporation of India LTD', 'http://www.npcil.nic.in/index.aspx', 'partner-6.png'),
(7, 'Indian Rare Earth Limited(IREL)', 'https://www.irel.co.in', 'partner-7.png'),
(8, 'Indian Space Research Organization(ISRO)', 'https://www.isro.gov.in', 'partner-8.jpg'),
(9, 'Vidal Health Insurance TPA', 'https://www.vidalhealthtpa.com', 'partner-9.png'),
(10, 'Dedicated Health Insurance Services Tpa', '', 'partner-10.jpg'),
(11, 'E-Meditek Soultion Limited', 'https://www.medindia.net/patients/insurance/health-insurance/tpa/e-meditek-insurance-tpa-limited-5.htm', 'partner-11.jpg'),
(12, 'Family Health Plan Limited', 'https://www.fhpl.net', 'partner-12.png'),
(13, 'ICICI Lombard General Insurance Co.LTD', 'https://www.icicilombard.com', 'partner-13.jpg'),
(14, 'Life Insurance Corporation of India', 'https://www.icicilombard.com', 'partner-14.png'),
(15, 'Max New York Life Insurance', 'https://www.maxlifeinsurance.com', 'partner-15.jpeg'),
(16, 'MEDI Assist India LTD', 'https://m.medibuddy.in', 'partner-16.png'),
(17, 'National Insurance Company', 'https://nationalinsurance.nic.co.in', 'partner-17.jpg'),
(18, 'Paramount Health Group', 'https://www.paramounttpa.com', 'partner-18.jpg'),
(19, 'Reliance Health Insurance Limited', 'https://www.reliancegeneral.co.in/Insurance/Health-Insurance/Health-Gain-Insurance.aspx', 'partner-19.png'),
(20, 'Star Health and Allied Insurance Limited', 'https://www.starhealth.in', 'partner-20.png'),
(21, 'United HealthCare', 'https://www.uhcprovider.com/', 'partner-21.png'),
(22, 'United India Insurance', 'https://uiic.co.in', 'partner-22.png'),
(23, 'Religare Health Insurance', 'https://www.careinsurance.com', 'partner-23.jpg'),
(24, 'Bajaj Allianz Health Insurance', 'https://www.bajajallianz.com/health-insurance-plans.html', 'partner-24.png'),
(25, 'Cignattk health Insurance', 'https://www.bajajallianz.com/health-insurance-plans.html', 'partner-25.png'),
(26, 'HDFC ERGO Health Insurance', 'https://www.hdfcergo.com/health-insurance', 'partner-26.png'),
(27, 'Chola MS Health Insurance', 'https://www.cholainsurance.com/health-insurance', 'partner-27.png'),
(28, 'Ericson TPA Serices PVT', 'https://www.ericsontpa.com', 'partner-28.png'),
(29, 'SBI General Insurance', 'https://www.sbigeneral.in/portal', 'partner-29.png'),
(30, 'MAX BUPA Health Insurance', 'https://www.maxbupa.com/', 'partner-30.png'),
(31, 'Health India Insurance', 'https://www.healthindiatpa.com', 'partner-31.png'),
(32, 'Medsava Health Care LTD', 'https://www.medsave.in', 'partner-32.jpg'),
(33, 'Apollo Munich Health Insurance', 'https://www.apollomunichinsurance.com', 'partner-33.png'),
(34, 'IFFCO-Tokio Health Insurance', 'https://www.iffcotokio.co.in/health-insurance', 'partner-34.jpg'),
(35, 'Vipul Medcorp TPA PVT LTD', 'https://www.vipulmedcorp.com', 'partner-35.gif'),
(36, 'Raksha TPA PVT LTD', 'https://www.rakshatpa.com', 'partner-36.png'),
(37, 'Universal Sampo General Insurance Co.LTD', 'https://www.universalsompo.com', 'partner-37.png'),
(38, 'Good Health Service TPA Services LTD', 'http://ghpltpa.com', 'partner-38.png'),
(39, 'Future General Insurance', 'https://general.futuregenerali.in', 'partner-39.png'),
(40, 'Medicare TPA Services PVT LTD', 'https://medicareinsurancetpa.com', 'partner-40.jpg'),
(41, 'Heritage', 'http://223.31.103.204/HeritageHealthTPA/HOME/Home.aspx', 'partner-41.png'),
(42, 'Aditya Birla Health Insurance', 'https://www.adityabirlacapital.com/healthinsurance', 'partner-42.png'),
(43, 'Liberty Health Insurance', 'https://www.libertyinsurance.in/health-insurance/', 'partner-43.jpg'),
(44, 'Ericson Insurance', 'https://www.ericsontpa.com', 'partner-44.png'),
(45, 'Safeway TPA', 'http://www.safewaytpa', 'partner-45.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `photo_id` int(11) NOT NULL,
  `photo_caption` varchar(255) NOT NULL,
  `photo_name` varchar(255) NOT NULL,
  `p_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`photo_id`, `photo_caption`, `photo_name`, `p_category_id`) VALUES
(8, 'Photo 1', 'photo-8.jpg', 1),
(9, 'Photo 2', 'photo-9.jpg', 1),
(10, 'Photo 3', 'photo-10.jpg', 1),
(11, 'Photo 4', 'photo-11.jpg', 2),
(12, 'Photo 5', 'photo-12.jpg', 2),
(13, 'Photo 6', 'photo-13.jpg', 2),
(14, 'Cardio Operation', 'photo-14.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pricing_item`
--

CREATE TABLE `pricing_item` (
  `pricing_item_id` int(11) NOT NULL,
  `pricing_item_name` text NOT NULL,
  `pricing_plan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricing_item`
--

INSERT INTO `pricing_item` (`pricing_item_id`, `pricing_item_name`, `pricing_plan_id`) VALUES
(1, '6 Specialties', 1),
(2, '30 Tests and Treatments', 1),
(3, '1 Medical Consultation', 1),
(4, '1 Home Visit', 1),
(5, 'No Pregnancy Care', 1),
(6, 'No Assistance', 1),
(7, '12 Specialties', 2),
(8, '24 Specialties', 3),
(9, '90 Tests and Treatments', 2),
(10, '160 Tests and Treatments', 3),
(11, '2 Medical Consultation', 2),
(12, '4 Medical Consultation', 3),
(13, '2 Home Visit', 2),
(14, '4 Home Visit', 3),
(15, 'Available Pregnancy Care', 2),
(16, 'Available Pregnancy Care', 3),
(17, '24 Hours Assistance', 2),
(18, '24 Hours Assistance', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pricing_plan`
--

CREATE TABLE `pricing_plan` (
  `pricing_plan_id` int(11) NOT NULL,
  `pricing_plan_name` varchar(255) NOT NULL,
  `pricing_plan_price` varchar(100) NOT NULL,
  `pricing_plan_button_text` varchar(255) NOT NULL,
  `pricing_plan_button_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricing_plan`
--

INSERT INTO `pricing_plan` (`pricing_plan_id`, `pricing_plan_name`, `pricing_plan_price`, `pricing_plan_button_text`, `pricing_plan_button_url`) VALUES
(1, 'Basic', '199', 'Select', '#'),
(2, 'Platinum', '299', 'Select', '#'),
(3, 'Gold', '399', 'Select', '#');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `short_description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `slug`, `description`, `short_description`, `photo`, `banner`) VALUES
(4, 'Mother Care', 'mother-care', '<p>Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.</p>\r\n', 'Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.', 'service-4.jpg', 'service-banner-4.jpg'),
(5, 'Hospital Service', 'hospital-service', '<p>Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.</p>\r\n', 'Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.Â ', 'service-5.jpg', 'service-banner-5.jpg'),
(6, 'Parent Care', 'parent-care', '<p>Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.</p>\r\n', 'Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.Â ', 'service-6.jpg', 'service-banner-6.jpg'),
(7, 'Critical Treatment', 'critical-treatment', '<p>Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.</p>\r\n', 'Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.Â ', 'service-7.jpg', 'service-banner-7.jpg'),
(8, 'All Major Tests', 'all-major-tests', '<p>Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.</p>\r\n', 'Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.', 'service-8.jpg', 'service-banner-8.jpg'),
(9, 'Modern Laboratory', 'modern-laboratory', '<p>Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.&nbsp;Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.</p>\r\n', 'Ad his diam eirmod persecuti. Eum health cube scriptorem eu, eu aperiri definiebas concludaturque eam.', 'service-9.jpg', 'service-banner-9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `footer_about` text NOT NULL,
  `footer_copyright` text NOT NULL,
  `contact_address` text NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `contact_fax` varchar(255) NOT NULL,
  `contact_map_iframe` text NOT NULL,
  `receive_email` varchar(255) NOT NULL,
  `receive_email_subject` varchar(255) NOT NULL,
  `receive_email_thank_you_message` text NOT NULL,
  `total_recent_news_footer` int(10) NOT NULL,
  `total_popular_news_footer` int(10) NOT NULL,
  `total_recent_news_sidebar` int(11) NOT NULL,
  `total_popular_news_sidebar` int(11) NOT NULL,
  `total_recent_news_home_page` int(11) NOT NULL,
  `meta_title_home` text NOT NULL,
  `meta_keyword_home` text NOT NULL,
  `meta_description_home` text NOT NULL,
  `home_title_service` varchar(255) NOT NULL,
  `home_subtitle_service` varchar(255) NOT NULL,
  `home_status_service` int(11) NOT NULL,
  `home_title_department` varchar(255) NOT NULL,
  `home_subtitle_department` varchar(255) NOT NULL,
  `home_status_department` int(11) NOT NULL,
  `home_title_doctor` varchar(255) NOT NULL,
  `home_subtitle_doctor` varchar(255) NOT NULL,
  `home_status_doctor` int(11) NOT NULL,
  `home_title_pricing` varchar(255) NOT NULL,
  `home_subtitle_pricing` varchar(255) NOT NULL,
  `home_status_pricing` int(11) NOT NULL,
  `home_title_testimonial` varchar(255) NOT NULL,
  `home_subtitle_testimonial` varchar(255) NOT NULL,
  `home_status_testimonial` int(11) NOT NULL,
  `home_title_news` varchar(255) NOT NULL,
  `home_subtitle_news` varchar(255) NOT NULL,
  `home_status_news` int(11) NOT NULL,
  `home_title_partner` varchar(255) NOT NULL,
  `home_subtitle_partner` varchar(255) NOT NULL,
  `home_status_partner` int(11) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `favicon`, `footer_about`, `footer_copyright`, `contact_address`, `contact_email`, `contact_phone`, `contact_fax`, `contact_map_iframe`, `receive_email`, `receive_email_subject`, `receive_email_thank_you_message`, `total_recent_news_footer`, `total_popular_news_footer`, `total_recent_news_sidebar`, `total_popular_news_sidebar`, `total_recent_news_home_page`, `meta_title_home`, `meta_keyword_home`, `meta_description_home`, `home_title_service`, `home_subtitle_service`, `home_status_service`, `home_title_department`, `home_subtitle_department`, `home_status_department`, `home_title_doctor`, `home_subtitle_doctor`, `home_status_doctor`, `home_title_pricing`, `home_subtitle_pricing`, `home_status_pricing`, `home_title_testimonial`, `home_subtitle_testimonial`, `home_status_testimonial`, `home_title_news`, `home_subtitle_news`, `home_status_news`, `home_title_partner`, `home_subtitle_partner`, `home_status_partner`, `color`) VALUES
(1, 'logo.png', 'favicon.png', '<p>Lorem ipsum dolor sit amet, omnis signiferumque in mei, mei ex enim concludaturque. Senserit salutandi euripidis no per, modus maiestatis scribentur est an.&nbsp;Ea suas pertinax has, solet officiis pericula cu pro, possit inermis qui ad. An mea tale perfecto sententiae, eos inani epicuri concludaturque ex.</p>\r\n', 'Copyright Â© 2017. All Rights Reserved.', 'ABC Steet, NewYork.', 'info@yourwebsite.com', '123-456-7878', '123-456-7890', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84040262736!2d-74.25819605476612!3d40.70583158628177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1485712851643\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'vasanthamhealthcare@gmail.com', 'Visitor Email Message', 'Thank you for sending email. We will contact you shortly.', 3, 3, 4, 4, 7, 'Vasantham Healthcare', 'doctor, department, health, fitness, medical, news, dental, neurologist, orthopedist, dental surgeon, medical equipment ', 'Vasantham Healthcare holds your reliable medical solution and provides best treatment in our area', 'Our Services', 'We Are Here to Provide You Awesome Service Always', 1, 'Our Departments', 'We have All Major Departments to Serve Patients', 1, 'Our Expert Doctors', 'Meet with All Our Qualified Doctors', 1, 'Pricing', 'We are Offering Special Discounts Now', 1, 'Testimonial', 'Our Happy Clients Tell About Us', 1, 'Latest News', 'See All Our Updated and Latest News', 1, 'Our Partners', 'All Our Company Partners are Listed Below', 1, '0E617D');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `subheading` text NOT NULL,
  `content` varchar(255) NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `button_url` varchar(255) NOT NULL,
  `position` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `photo`, `heading`, `subheading`, `content`, `button_text`, `button_url`, `position`, `status`) VALUES
(1, 'slider-1.jpg', 'Best Treatment', 'We provide best treatment in our area', 'Lorem ipsum dolor sit amet, ad vim indoctum maluisset. \r\nPosse philosophia id sed, qui ut saepe nonumes.', 'Read More', '#', 'Left', 'Active'),
(2, 'slider-2.jpg', 'HealthCare', 'Your reliable medical solution', 'Lorem ipsum dolor sit amet, ad vim indoctum maluisset. \r\nPosse philosophia id sed, qui ut saepe nonumes.', 'Read More', '#', 'Right', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `social_id` int(11) NOT NULL,
  `social_name` varchar(30) NOT NULL,
  `social_url` varchar(255) NOT NULL,
  `social_icon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`social_id`, `social_name`, `social_url`, `social_icon`) VALUES
(1, 'Facebook', '#', 'fa fa-facebook'),
(2, 'Twitter', '#', 'fa fa-twitter'),
(3, 'LinkedIn', '#', 'fa fa-linkedin'),
(4, 'Google Plus', '#', 'fa fa-google-plus'),
(5, 'Pinterest', '#', 'fa fa-pinterest'),
(6, 'YouTube', '#', 'fa fa-youtube'),
(7, 'Instagram', '#', 'fa fa-instagram'),
(8, 'Tumblr', '', 'fa fa-tumblr'),
(9, 'Flickr', '', 'fa fa-flickr'),
(10, 'Reddit', '', 'fa fa-reddit'),
(11, 'Snapchat', '', 'fa fa-snapchat'),
(12, 'WhatsApp', '', 'fa fa-whatsapp'),
(13, 'Quora', '', 'fa fa-quora'),
(14, 'StumbleUpon', '', 'fa fa-stumbleupon'),
(15, 'Delicious', '', 'fa fa-delicious'),
(16, 'Digg', '', 'fa fa-digg');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `subs_id` int(11) NOT NULL,
  `subs_email` varchar(255) NOT NULL,
  `subs_date` varchar(100) NOT NULL,
  `subs_date_time` varchar(100) NOT NULL,
  `subs_hash` varchar(255) NOT NULL,
  `subs_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`subs_id`, `subs_email`, `subs_date`, `subs_date_time`, `subs_hash`, `subs_active`) VALUES
(4, 'jbbr.1990@gmail.com', '2017-08-10', '2017-08-10 07:44:23', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `designation`, `company`, `photo`, `comment`) VALUES
(1, 'Praveen Kumar', 'Managing Director', 'ABC Inc.', 'testimonial-1.jpg', 'Nice and awesome service always. I wish their good and best luck always.'),
(2, 'Viswanathan', 'CEO', 'Typhon Multimedia', 'testimonial-2.jpg', 'We worked with a lot of other service providers in previous years. But this organization is an exceptional one. Their services are really fantastic. '),
(3, 'Michael Albert', 'Businessman', 'Zeroappz LLP', 'testimonial-3.jpg', 'I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!'),
(4, 'Jabas Samuel', 'Placement Officer', 'Rohini College of Engineering', 'testimonial-4.jpg', 'Vasantham Health Centre is a great place to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get for more serious issues. Thanks!'),
(5, 'Madhu Bala', 'Restaurant Owner', 'Sri Vector Hotel', 'testimonial-5.jpg', 'Cardiology is one of the speciality where vasantham health centre shine and also is a great to get all of your medical needs. I came in for a check up and did not wait more than 5 minutes before I was seen. I can only imagine the type of service you get');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `email`, `phone`, `password`, `photo`, `role`, `status`) VALUES
(1, 'Super Admin', 'superadmin@vasantham.com', '04592-222662', '0137d1004923c773ce3cddd2bc0c0267', 'user-1.jpg', 'Super Admin', 'Active'),
(13, 'Admin', 'admin@vasantham.com', '04592-222692', '0137d1004923c773ce3cddd2bc0c0267', 'user-13.png', 'Admin', 'Active'),
(14, 'Publisher', 'publisher@vasantham.com', '04592-222692', '0137d1004923c773ce3cddd2bc0c0267', 'user-1.jpg', 'Publisher', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `video_title` varchar(255) NOT NULL,
  `video_iframe` text NOT NULL,
  `v_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `video_title`, `video_iframe`, `v_category_id`) VALUES
(3, 'Video 1', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/RY2OEpAf5oY\" frameborder=\"0\" allowfullscreen></iframe>', 1),
(4, 'Video 2', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/F1CW0MjD1T0\" frameborder=\"0\" allowfullscreen></iframe>', 1),
(5, 'Video 3', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/LPF1MSkGgRM\" frameborder=\"0\" allowfullscreen></iframe>', 1),
(6, 'Video 4', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/RcmrbNRK-jY\" frameborder=\"0\" allowfullscreen></iframe>', 2),
(7, 'Video 5', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ka-ZgwCXKho\" frameborder=\"0\" allowfullscreen></iframe>', 2),
(8, 'Video 6', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/fP582Ro62hQ\" frameborder=\"0\" allowfullscreen></iframe>', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisement_category`
--
ALTER TABLE `advertisement_category`
  ADD PRIMARY KEY (`adv_id`);

--
-- Indexes for table `advertisement_home`
--
ALTER TABLE `advertisement_home`
  ADD PRIMARY KEY (`adv_id`);

--
-- Indexes for table `advertisement_sidebar`
--
ALTER TABLE `advertisement_sidebar`
  ADD PRIMARY KEY (`adv_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `category_photo`
--
ALTER TABLE `category_photo`
  ADD PRIMARY KEY (`p_category_id`);

--
-- Indexes for table `category_video`
--
ALTER TABLE `category_video`
  ADD PRIMARY KEY (`v_category_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `department_appointment`
--
ALTER TABLE `department_appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `department_faq`
--
ALTER TABLE `department_faq`
  ADD PRIMARY KEY (`fq_id`);

--
-- Indexes for table `department_openning_hour`
--
ALTER TABLE `department_openning_hour`
  ADD PRIMARY KEY (`oh_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `faq_category`
--
ALTER TABLE `faq_category`
  ADD PRIMARY KEY (`faq_category_id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `home_category`
--
ALTER TABLE `home_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `pricing_item`
--
ALTER TABLE `pricing_item`
  ADD PRIMARY KEY (`pricing_item_id`);

--
-- Indexes for table `pricing_plan`
--
ALTER TABLE `pricing_plan`
  ADD PRIMARY KEY (`pricing_plan_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`subs_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisement_category`
--
ALTER TABLE `advertisement_category`
  MODIFY `adv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `advertisement_home`
--
ALTER TABLE `advertisement_home`
  MODIFY `adv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `advertisement_sidebar`
--
ALTER TABLE `advertisement_sidebar`
  MODIFY `adv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category_photo`
--
ALTER TABLE `category_photo`
  MODIFY `p_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category_video`
--
ALTER TABLE `category_video`
  MODIFY `v_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `department_appointment`
--
ALTER TABLE `department_appointment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department_faq`
--
ALTER TABLE `department_faq`
  MODIFY `fq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `department_openning_hour`
--
ALTER TABLE `department_openning_hour`
  MODIFY `oh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faq_category`
--
ALTER TABLE `faq_category`
  MODIFY `faq_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_category`
--
ALTER TABLE `home_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pricing_item`
--
ALTER TABLE `pricing_item`
  MODIFY `pricing_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pricing_plan`
--
ALTER TABLE `pricing_plan`
  MODIFY `pricing_plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `subs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
