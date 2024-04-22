-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2024 at 03:06 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekar-portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `title`, `thumbnail`, `content`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Immersive Study Club Leader', 'd3o8nVNnaHj9675YXUJKL8hYkuEcBH-metaMS5wbmc=-.png', '<p><strong>Immersive Study Club Leader - 2024</strong>&nbsp;</p><p>As the Leader of the Immersive Study Club focusing on AR and VR technologies, I lead club activities, organize meetings, invite expert speakers, and develop learning content to deepen members\' understanding. I also foster an inclusive community where members collaborate and share knowledge to achieve learning goals. In this photo above, we are using Unity, a popular software development platform among game developers and virtual reality (VR) and augmented reality (AR) experiences.</p>', 'https://codewzaloe.com/', '2024-04-20 11:36:16', '2024-04-20 14:14:23'),
(2, 'Data Structure Full Teaching Lab', 'sR2p0LkbBspL0soLJIpxzTPfuwxjYV-metaMy5wbmc=-.png', '<p><strong>Data Structure TA - 2024</strong></p><p>As a Full Teaching Assistant for the Data Structure course laboratory, my responsibilities encompass guiding students, furnishing supplementary explanations, and facilitating problem-solving during instructional sessions. Additionally, I actively participate in the enhancement of educational resources through the creation of case examples and exercises tailored to fortify students\' comprehension.</p>', 'https://codewzaloe.com/', '2024-04-20 13:28:35', '2024-04-20 14:12:04'),
(3, 'HCI Teaching Lab Assistant', 'KzLorZsUa1dzQWFtjMkRI9Zbol2VZB-metaNC5wbmc=-.png', '<p><strong>Human-Computer Interaction Teaching Lab Assistant - 2024</strong></p><p>As a Teaching Laboratory Assistant for the Human-Computer Interaction (HCI) course, specifically focusing on Augmented Reality (AR), my role involves guiding students through practical exercises and projects related to AR technologies. I provide hands-on assistance, deliver targeted explanations, and facilitate problem-solving sessions to help students grasp the complexities of integrating AR into user interfaces effectively. Additionally, I contribute to the development of specialized learning materials, such as AR-based case studies and interactive exercises, to deepen students\' understanding of this emerging field.</p>', 'https://codewzaloe.com/', '2024-04-20 13:41:20', '2024-04-20 14:14:51'),
(4, 'Duta Binusian 2024', '4KuF6B9icgW8mdiDlEcObKjqHXLYxD-metaMi5wbmc=-.png', '<p><strong>Binusian Ambassador - 2024</strong></p><p>&nbsp;I proudly represent myself as a Bina Nusantara University Ambassador for Computer Science Faculty, dedicated to assisting fellow students facing challenges in their academic journey. My role involves offering support and guidance to peers navigating the complexities of university life, ensuring that no one feels alone or overwhelmed in their pursuit of education. As a Bina Nusantara University Ambassador, I am committed to fostering a nurturing and inclusive environment where every student can thrive and succeed.</p>', 'https://codewzaloe.com/', '2024-04-20 13:59:58', '2024-04-20 14:15:10'),
(5, 'ICIMTech 2023', 'lJ73Mc95s1dpnv120NiAix6TUanPDl-metaNS5wbmc=-.png', '<p><strong>ICIMtech 2023</strong></p><p>I participated in and successfully obtained a certificate as a speaker at the ICIMTech2023 conference. My presentation focused on the utilization of augmented reality for Tongkonan Toraja, highlighting innovative applications of AR technology in cultural preservation and heritage tourism.</p>', 'https://codewzaloe.com/', '2024-04-20 14:37:40', '2024-04-20 14:37:57'),
(7, 'Winning Competition', '6KLTFRi9tYPGLGKnIGScOWrh60vJT0-metaMi5wbmc=-.png', '<p>winning</p>', 'https://codewzaloe.com/', '2024-04-20 17:32:36', '2024-04-20 17:33:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footerrs`
--

CREATE TABLE `footerrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footerrs`
--

INSERT INTO `footerrs` (`id`, `key`, `label`, `value`, `type`, `created_at`, `updated_at`) VALUES
(1, '_site_name', 'Judul Situs', 'CodewZaloe', 'text', '2024-04-20 09:58:53', '2024-04-20 15:04:07'),
(2, 'location', 'Alamat', 'Malang, Indonesia', 'text', '2024-04-20 09:58:53', '2024-04-20 09:58:53'),
(3, '_youtube', 'Youtube', 'www.youtube.com/@sekarayu1071', 'text', '2024-04-20 09:58:53', '2024-04-20 09:58:53'),
(4, '_instagram', 'Instagram', 'https://www.instagram.com/zaloesan?igsh=bWJibGhmb2R0aDB5', 'text', '2024-04-20 09:58:53', '2024-04-20 09:58:53'),
(5, '_github', 'Github', 'https://github.com/codewzaloe', 'text', '2024-04-20 09:58:53', '2024-04-20 09:58:53'),
(6, '_site_description', 'Site Description', ' This website provide as my portfolio, showcasing my skills, projects', 'text', '2024-04-20 09:58:53', '2024-04-20 16:47:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_20_160354_create_sections_table', 2),
(6, '2024_04_20_164535_create_experiences_table', 3),
(7, '2024_04_20_165659_create_footerrs_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `post_as` enum('JUMBOTRON','ABOUT') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `title`, `thumbnail`, `content`, `post_as`, `created_at`, `updated_at`) VALUES
(3, 'Hi, Welcome to My Portofolio!', 'tgpoqar8v84O9QsgK3xRsGh2Rx0oFZ-metaVW50aXRsZWQgZGVzaWduICgyKS5wbmc=-.png', '<p>Book Enthusiast - Programmer - AR/VR Enthusiast- Binus Ambassador</p>', 'JUMBOTRON', '2024-04-20 09:42:40', '2024-04-20 17:35:35'),
(4, 'ABOUT ME', 'neFxsQRwsjHQtqbWxwHOxS2dZWn1H7-metaV2hhdHNBcHAgSW1hZ2UgMjAyNC0wNC0xOSBhdCAyMS4xNy41Mi5qcGVn-.jpg', '<h2>Sekar Ayu Nadita</h2><p>Computer Science Undergraduate - Binus University Malang</p><p>As a Computer Science student from the B26 cohort, I\'m known for my diligence, resilience, and eagerness to learn. I approach challenges with determination and a strong work ethic, always seeking opportunities to expand my knowledge and skills. My passion for innovation and exploration drives me to push boundaries and create meaningful solutions. Additionally, my love for literature fosters creativity and critical thinking, enhancing my problem-solving abilities in both academic and extracurricular endeavors.</p>', 'ABOUT', '2024-04-20 11:35:30', '2024-04-20 14:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sekar', 'sannaskr@gmail.com', NULL, '$2y$12$M01EKIWQ/ov7PwXzodh1X.gOnXc8JIDI4h7tTQ9gVCNLIpB3rEsWe', NULL, '2024-04-20 09:03:10', '2024-04-20 09:03:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footerrs`
--
ALTER TABLE `footerrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footerrs`
--
ALTER TABLE `footerrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
