-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 27 déc. 2024 à 17:39
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `laravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
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
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `about` varchar(255) DEFAULT NULL,
  `ip_user` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `about`, `ip_user`, `created_at`, `updated_at`) VALUES
(1, 'mohamed', 'm@gmail.com', 'suuuj', 'dfdf', NULL, '127.0.0.1', '2024-12-25 23:59:16', '2024-12-25 23:59:16'),
(2, 'admin', 'a@gmail.com', 'ssss', 'mmm', 'Web Site', '127.0.0.1', '2024-12-26 00:00:41', '2024-12-26 00:00:41');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(6, '2024_12_15_174640_create_sessions_table', 2),
(16, '2014_10_12_000000_create_users_table', 3),
(17, '2014_10_12_100000_create_password_reset_tokens_table', 3),
(18, '2019_08_19_000000_create_failed_jobs_table', 3),
(19, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(20, '2024_12_22_122956_create_projects_table', 3),
(21, '2024_12_22_123006_create_products_table', 3),
(22, '2024_12_23_154037_create_project_user_comment_table', 4),
(25, '2024_12_25_151442_create_messages_table', 5);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
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
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_details` text NOT NULL,
  `price` double(7,2) NOT NULL,
  `product_photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_details`, `price`, `product_photo`, `created_at`, `updated_at`) VALUES
(5, 'Web Application', 'A web application tailored to your needs, allowing you to manage your company, whether it is for-profit or non-profit.\r\nContact us to learn more!', 500.00, 'images/products/70keubajx3b0mT8cyfAAd71OSA95CtcG4gI9ruY6.png', '2024-12-25 22:20:06', '2024-12-25 22:20:06'),
(6, 'Web Site', 'A static website is the perfect solution for businesses seeking a fast, reliable, and cost-effective online presence. Designed for simplicity and efficiency, it provides essential information about the company, including an overview, services offered, and contact details. With a clean, professional design and a responsive layout, the site ensures a seamless user experience on all devices. Static websites are ideal for showcasing a business\'s mission and services while maintaining a secure and low-maintenance platform. Whether for a startup or an established enterprise, a static website is a powerful tool to establish credibility and connect with clients.', 100.00, 'images/products/LU5mfC4FFQqTNfHogEARxOxRHJrbTStYvwsLiYuV.jpg', '2024-12-25 22:21:24', '2024-12-25 22:21:24'),
(7, 'mobile application', 'A mobile application offers businesses the opportunity to engage directly with their customers through a personalized and convenient platform. Designed for seamless interaction, it enables users to access services, products, or information with ease, anytime and anywhere. The app can include features such as push notifications, in-app purchases, and real-time updates, enhancing customer satisfaction and loyalty. Whether it\'s for retail, services, or entertainment, a mobile app helps businesses stay connected to their audience while providing a more immersive and accessible experience. With its user-friendly interface and functionality, a mobile application is a valuable asset for companies looking to expand their reach and improve customer engagement.', 300.00, 'images/products/CMkdeBro3tELRDeZjzIJhdsHvZmwxpItTZWmjGsW.png', '2024-12-25 22:22:39', '2024-12-25 22:22:39');

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_details` text NOT NULL,
  `project_photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `project_details`, `project_photo`, `created_at`, `updated_at`) VALUES
(6, 'E-commerce Website for Sneakers ', 'Launched in 2021, this e-commerce website is a go-to platform for sneaker enthusiasts. It offers a rich and diverse catalog of brands and models for men, women, and children. With an intuitive search engine and advanced filters (size, brand, color), it simplifies the shopping experience. Detailed product descriptions, high-resolution images, and customer reviews ensure visitors make informed decisions. A secure payment system and fast delivery build customer trust, while promotions and the \"new arrivals\" section encourage repeat visits.', 'images/projects/Quyw4wFgDFju8qldajQth9uUlBMwXGH6eFrrE8dC.png', '2021-12-25 20:06:25', '2024-12-25 20:06:25'),
(7, 'E-commerce Website for Phone Accessories ', 'Since 2022, this e-commerce website has been a comprehensive solution for purchasing phone accessories and products. It offers a wide range of items, from cases and screen protectors to chargers and wireless headphones. Visitors can browse detailed product pages, quickly place orders, and track their status in real-time. The user interface is optimized for both mobile and desktop, ensuring a smooth experience. An online support system is available to answer queries, and customers benefit from warranties on all purchases. This website is perfect for those seeking quality, reliability, and speed.', 'images/projects/3qvX23QCAlgS7nYd2gBkve6CxqrTaCPC2L3WLqGT.png', '2022-12-15 20:06:57', '2024-12-25 20:06:57'),
(8, 'Web Application for Electronic Document Management', 'Created in 2024, this modern web application streamlines electronic document management for businesses. It allows users to send, receive, search, and organize their files effortlessly. With an intuitive interface and advanced features like version tracking and access control, it ensures high efficiency. Documents can be shared securely through data encryption and customizable permissions. Tailored to the needs of teams of all sizes, this application enhances collaboration by centralizing data and offering powerful and fast search tools.', 'images/projects/zJZaAsIn5978rFofGgU4B7TCxiGSUWkzW6AdBoKl.jpg', '2024-12-25 20:07:48', '2024-12-25 20:07:48'),
(9, 'Landing Page', 'This static website serves as an online presence for a private company, offering a simple yet professional platform to showcase its services. The homepage features a concise introduction to the company, its mission, and values. A dedicated services section provides detailed descriptions of the company\'s offerings, highlighting its expertise and solutions tailored to client needs. The website also includes a contact form, enabling visitors to easily reach out with inquiries or requests for services. With its clean design and responsive layout, the site ensures an optimal browsing experience across all devices. This static website is an excellent choice for businesses looking to establish credibility and connect with their audience effectively.', 'images/projects/Kpsg8KT4PitHJTDHnozm7gD1tSF1TJlY2DE5Rzuf.jpg', '2024-06-19 20:08:04', '2024-12-25 20:08:04'),
(10, 'Website for an accountant', 'Created in 2020, this landing page is dedicated to professional accounting services. It highlights the accountant\'s skills and experience while offering a user-friendly and modern interface. The page features a clear presentation of services such as tax filing, bookkeeping, and financial consulting. Client testimonials and a quick contact form help build trust and convert visitors into clients. The minimalist design and calming color palette reflect the accountant\'s reliability and professionalism, with simple and efficient navigation for users.', 'images/projects/0hNRGr3Q5Fc3zESlRemtEiNCy7dHRbwLerQtj7oP.png', '2024-12-25 20:36:46', '2024-12-25 20:36:46');

-- --------------------------------------------------------

--
-- Structure de la table `project_user_comment`
--

CREATE TABLE `project_user_comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('cuE3BKNtaLwkRfNBvLBzTgZV0ZCHoVUI1xZAQsJw', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQUZMb3NVeHBDUFJUdTlmRGNGeVVxMko0YnZnYW95Z24xZ05VdmNwdyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1734285076),
('GbRa2sdWyM4WY3BCJNgo0xbZVDZlM5aa5zi1utYY', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiS0VoZ29lMzQ2OFpNOW9KMHpnWFBLcmhENThDS1R1MGxOTXpheXFpZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1734286306);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mohamed', 'user', 'u@gmail.com', NULL, '$2y$10$cQ8GISBXpUOriK4AdQXX..VkeRFXVdv/.L8bn7E7ppwZ72BGb8V9C', 'KcXrOJkNlytzdhSBSoYFm2jV94HiIRhCB7aho7gjP5ochAXZ27wY0rVhCngA', '2024-12-22 15:39:20', '2024-12-22 15:39:20'),
(2, 'admin', 'admin', 'a@gmail.com', NULL, '$2y$10$XnyrRslfAQsYuf3fQZ9Q6ul4zRbVLdtN9RtKB9RVsQ5eQuIhJkxn2', 'PxwMlAz52FzzN8PeP2XYONjtctyMUvTbx8NpQIQRNw3gwToDXCTR0uyzbJpk', '2024-12-22 15:39:36', '2024-12-22 15:39:36');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `project_user_comment`
--
ALTER TABLE `project_user_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_user_comment_user_id_foreign` (`user_id`),
  ADD KEY `project_user_comment_project_id_foreign` (`project_id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `project_user_comment`
--
ALTER TABLE `project_user_comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `project_user_comment`
--
ALTER TABLE `project_user_comment`
  ADD CONSTRAINT `project_user_comment_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `project_user_comment_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
