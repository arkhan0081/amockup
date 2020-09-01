-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 01, 2020 at 12:22 PM
-- Server version: 10.3.23-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hitstdyc_mockup`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_08_31_204929_create_settings_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `meta_description` varchar(150) DEFAULT NULL,
  `index_allowed` tinyint(1) NOT NULL,
  `image` varchar(256) DEFAULT NULL,
  `slider_text` varchar(100) DEFAULT NULL,
  `content` longtext NOT NULL,
  `other_js` longtext DEFAULT NULL,
  `other_css` longtext DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `meta_description`, `index_allowed`, `image`, `slider_text`, `content`, `other_js`, `other_css`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'FREE Ultimate Guide to CDA Interviews: Tips & Proven Strategies to Help You Prepare & Ace Your CDA Structured Interview.', 0, 'cda-interview-guide-1598902794.jpg', 'CDA Interview Guide', '<p>Ultimate Guide to CDA Structured Interview: Tips &amp; Proven Strategies to Help You Prepare &amp; Ace Your CDA Interview<br />\r\n<br />\r\nOverview:<br />\r\n<br />\r\nThe purpose of the dental school interview<br />\r\nHistory and rationale of the CDA interview<br />\r\nTypes of Questions<br />\r\nThe Seven Competencies<br />\r\nStructure of the CDA interview<br />\r\n<a href=\"https://cdainterview.com/how-to-prepare-for-cda-interview.html\">How to prepare for your CDA Interview</a><br />\r\n<a href=\"https://cdainterview.com/sample-cda-interview-questions.html\">Sample CDA interview questions</a><br />\r\n<a href=\"http://bemoacademicconsulting.com/Dental-School-Interview-Preparation.html\" target=\"_blank\">BeMo CDA-structured interview prep program</a><br />\r\n<a href=\"https://cdainterview.com/contact-us.php\">Contact us</a><br />\r\n<br />\r\nWhat is the purpose of the dental school interview?<br />\r\n<br />\r\nRegardless of the format of dental school interview (e.g. CDA structured interview, MMI, or Panel interview), the purpose of the interview is rather straightforward and remains constant across the board: to assess the personality and Non-Cognitive Skills (NCSs) of the candidate.<br />\r\n<br />\r\nWhat are NCSs? By these we mean the following: Communication skills, interpersonal skills, ethical and moral decision making capacity, maturity, professionalism, sense of social responsibility, service to community, leadership, initiative, scholarship, ability to collaborate with others, conflict resolution skills, etc.<br />\r\n<br />\r\nResearch has shown that, although academic performance (i.e. GPA and DAT scores) is a great indicator of didactic abilities in the first and second years of dental school, it provides, however, a very poor predictive value when it comes to future clinical performance. In fact, research shows that, an effective interview process is the best indicator of future clinical performance in the upper years, as it gives insight into the characteristics of the candidate and whether or not there will be a likelihood of future behavioural problems (an issue that dental schools constantly encounter and struggle to overcome). For example, it has been shown that those candidates who are &quot;conscientious&quot; and &quot;open to new experiences&quot; perform more effectively in the third and fourth years of dental school studies, where the education takes place in a clinical setting for the most part.<br />\r\n<br />\r\nThus, dental schools, much like other professional schools, have over the past decade spent a lot of resources to devise the most effective interview process that will give them insight into the NCSs of their future candidates. And of course, for Canadian dental schools the answer has been the Canadian Dental Association&#39;s structured interview or CDA structured interviews.<br />\r\n<br />\r\n<br />\r\nHistory, rationale, and the structure of the CDA interview<br />\r\n<br />\r\nRecall from our discussion above that we said an effective interview process is the most reliable way to select candidates who perform well clinically. Well in an attempt to test this theory, in 2004, Smithers et al. conducted a study, which produced results that were so shocking, that it unequivocally reinforced the Canadian Dental Association&#39;s earlier decision to commission a &quot;new structured interview based on state-of-the-art contemporary interview techniques&quot; (i.e. CDA structured interview)<br />\r\n<br />\r\nWhat were these shocking results you may ask? The evidence gathered by Smithers et al. (2004) simply reinforced earlier suspicions about the ineffectiveness of traditional interview processes. They showed that, &quot;a typical [traditional] admissions interview was in fact worse than neutral in that it was negatively associated with students&#39; performance in the first year of dental training, did not predict academic performance, and may have led to poor selection decisions.&quot; Thus, it should come as no surprise that the traditional panel interview has been replaced by most dental school with the CDA structured interview, which is a more reliable and valid future predictor of clinical performance.<br />\r\n<br />\r\nThe CDA interview was not only re-structured in its format of delivery, but it was also restructured in terms of the type of questions that would be ask, and how they would be rated or scored by the interviewers. Let us first talk about the type of questions that you may encounter on your CDA structured interview.<br />\r\n<br />\r\n<br />\r\nTypes of Questions<br />\r\n<br />\r\nThe types of questions that you may be asked during your dental school interview can be divided into two categories: (1) Situational Interview (SI) questions and (2) Patterned Behaviour Descriptive Interview (PBDI) questions. SI questions are those in which the candidates is placed in a hypothetical situations (i.e. vignette) and is asked what they would react in that given situation. For example,<br />\r\n<br />\r\n&quot;You are babysitting your sister&rsquo;s young child, who is nervous and upset about his mother being away. You are trying to calm him down and offer him some ice cream. As you are dishing out the ice cream, the child bites down hard on your hand. How would you react?&quot;<br />\r\n<br />\r\nConversely, PBDI type questions, ask the candidates &quot;about past behaviour with the assumption that past behaviour is the best predictor of future behaviour.&quot; An example of a PBDI type questions is:<br />\r\n<br />\r\n<br />\r\nMany of us have had to deal with juggling busy schedules. Think of a time in the past when an important but unscheduled situation arose that required your attention, but you had a number of prior commitments on your agenda. What did you do? What was the outcome?<br />\r\n<br />\r\nNotice how SI questions are typically future-oriented, as opposed to PBDI questions, which are past-oriented. The specific and actual SI and PBDI questions are devised according to seven competencies, that the CDA has found to be reliable and valid indicators of future performance. In other words, every question that is asked during a dental school interview, regardless of being a SI or PBDI question, will address one or more than one of the seven competencies.<br />\r\n<br />\r\nThe Seven Competencies<br />\r\n<br />\r\n1. Communication: does the applicant have excellent communication skills?<br />\r\n2. Conscientiousness: is the applicant thorough, careful to do tasks well?<br />\r\n3. Integrity : is the applicant honest with themselves and others?<br />\r\n4. Judgment and analysis: does the applicant have the capability to make sound judgments? Do they gather all the facts before making a decision?<br />\r\n5. self-control : Does the applicant remain calm and in control in difficult situations?<br />\r\n6. sensitivity to others : Does the applicant show empathy towards others? Do they take the feelings of others into consideration?<br />\r\n7. Tact and diplomacy : Does the applicant show sensitivity in dealing with difficult issues? Does the applicant possess the necessary skills to deal with others without causing negative feelings?<br />\r\n<br />\r\nNotice in the above examples that the SI sample question is addressing the competencies of self-control, sensitivity to others, communication, while the PBDI question addresses the competencies of conscientiousness, Integrity, and judgement and analysis. In all of the questions that will be asked of you during your interview, the competency of communication is a constant that is continuously tested and retested. In order to be successful, however, you will have to be able to know which other competencies also apply to the question so that you can formulate an appropriate response, which touches on the key factors essential for the interviewers.<br />\r\n<br />\r\n<br />\r\nStructure of the CDA interview<br />\r\n<br />\r\nThe CDA structured interview is comprised of seven questions, one for each of the seven competencies described above. Each question, which can either be a SI or a PBDI type, is scored on a 5-point scale for a total and a maximum of 35 points by two interviewers who are either a pair of dentists, or senior dental students. The interview usually takes about 20-30 minutes to be completed.<br />\r\n<br />\r\nClick&nbsp;<a href=\"https://cdainterview.com/how-to-prepare-for-cda-interview.html\">here</a>&nbsp;to learn how to prepare for your CDA interview<br />\r\n<br />\r\nClick&nbsp;<a href=\"https://cdainterview.com/sample-cda-interview-questions.html\">here</a>&nbsp;to practice with our sample CDA interview questions<br />\r\n<br />\r\nClick&nbsp;<a href=\"http://bemoacademicconsulting.com/Dental-School-Interview-Preparation.html\" target=\"_blank\">here</a>&nbsp;to learn more about our money-back guarantee CDA interview preparation programs.<br />\r\n<br />\r\nReference:<br />\r\n<br />\r\nPoole A., Catano, VM., and Cunningham, DP. Predicting performance in Canadian dental schools: the new CDA structured interview, a new personality assessment, and the DAT. Journal of Dental Education. 2007; 71: 664 - 676.</p>', NULL, NULL, '2020-08-31 19:04:26', '2020-08-31 19:39:54'),
(3, 'Contact', NULL, 0, 'contact-us-1598903157.png', NULL, '<h1>BeMo Academic Consulting Inc.</h1>\r\n\r\n<p><br />\r\n<strong><ins>Toll Free:</ins>&nbsp;1-855-900-BeMo (2366)</strong><br />\r\n<strong><ins>Email:</ins>&nbsp;info@bemoacademicconsulting.com</strong></p>', NULL, NULL, '2020-08-31 19:45:57', '2020-08-31 19:45:57');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`) VALUES
(8, 'SEND_MAIL_TO', 'abdulrehmankhan0072@gmail.com'),
(9, 'SCRIPT_FB', 'UA-176920385-1'),
(10, 'SCRIPT_FB_EVENT', 'UA-176920385-1'),
(11, 'SCRIPT_GOOGLE', 'UA-176920385-1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `is_admin`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1, 'admin@admin.com', '2020-08-31 18:18:50', '$2y$10$ijNTOQOSDf29/cl3vCXmruHPK3nt21rGwJphFE3Ijenj5TGMHtPqC', '27lnDaTmWvWtRwlp18KOtTHP9pRnIDSI5t5C5ZlrGWwRRRbuL4m6mmURzzhs', NULL, NULL),
(2, 'view', 0, 'view@view.com', NULL, '$2y$10$XrujGemSMxXHh9YMqBu7ueP38qokFU8x6cmSiyc7oOQNnKDC/O1NS', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_key_index` (`key`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
