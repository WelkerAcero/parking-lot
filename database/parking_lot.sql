-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-02-2023 a las 02:19:53
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parking_lot`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authorizations`
--

CREATE TABLE `authorizations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `authorized_by` bigint(20) UNSIGNED NOT NULL,
  `authorization_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `authorizations`
--

INSERT INTO `authorizations` (`id`, `vehicle_id`, `authorized_by`, `authorization_type`, `created_at`, `updated_at`) VALUES
(18, 1, 1, 'Entrance', '2023-02-06 19:51:56', '2023-02-06 19:51:56'),
(20, 1, 1, 'Exit', '2023-02-14 03:33:31', '2023-02-14 03:33:31'),
(21, 3, 1, 'Entrance', '2023-02-14 03:37:13', '2023-02-14 03:37:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `charges`
--

CREATE TABLE `charges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `charges`
--

INSERT INTO `charges` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'PeMeLMoRzL', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(2, '2VaTDwp41g', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(3, '7bouY1zhC3', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(4, 'Thl34rNuie', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(5, '8JT8NcQJtc', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(6, 'PwL4hNuee2', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(7, 'uvs4SvQBWw', '2023-01-31 17:40:55', '2023-01-31 17:40:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctype_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ci` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charge_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`id`, `doctype_id`, `ci`, `name`, `lastname`, `email`, `url`, `charge_id`, `created_by`, `created_at`, `updated_at`) VALUES
(5, 1, '1232589088', 'Walter', 'DWalt', 'welkerperez97@gmail.com', 'http://127.0.0.1:8000/authorization/1232589088', 1, 1, '2023-01-31 18:31:03', '2023-01-31 18:31:03'),
(6, 1, '1102384212', 'Anggie', 'Camacho', 'anggiel.c.c@hotmail.com', 'http://127.0.0.1:8000/authorization/1102384212', 3, 1, '2023-02-14 03:34:13', '2023-02-14 03:34:13'),
(9, 3, '1232589077', 'Jose', 'Pérez', 'joseacero007s@gmail.com', 'http://127.0.0.1:8000/authorization/1232589077', 5, 1, '2023-02-15 23:13:39', '2023-02-15 23:13:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doc_types`
--

CREATE TABLE `doc_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `doc_types`
--

INSERT INTO `doc_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'hlhUwuyhNt', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(2, 'Ar73Dw8wj9', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(3, 'PGGOlkWab3', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(4, '1EBnpZzd7y', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(5, 'PFoREGumGg', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(6, 'VgV7MKX30s', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(7, 'oJpSXhoMx3', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(8, 'BVyg5QClSS', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(9, 'JFjbLXnq7D', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(10, 'qMToPaYe1h', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(11, 'AOR4rQSISe', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(12, 'EDjKcLMrcO', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(13, 'jzD25HK8CJ', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(14, 'G8QGP3CXNV', '2023-01-31 17:40:55', '2023-01-31 17:40:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_09_12_000000_create_doc_types_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_01_24_221947_create_charges_table', 1),
(7, '2023_01_24_222048_create_type_engines_table', 1),
(8, '2023_01_24_222226_create_customers_table', 1),
(9, '2023_01_24_232416_create_vehicles_table', 1),
(10, '2023_01_24_233317_create_authorizations_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_engines`
--

CREATE TABLE `type_engines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `type_engines`
--

INSERT INTO `type_engines` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'l7loYFGegv', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(2, '92WYi7YQps', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(3, 'OZCGbeB3tN', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(4, 'wqjKRK7YxR', '2023-01-31 17:40:55', '2023-01-31 17:40:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctype_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ci` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `doctype_id`, `ci`, `name`, `lastname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 4, '8307176751', 'Sarah Trantow', 'Mason Friesen', 'schmitt.ayana@example.net', '2023-01-31 17:40:55', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6OrRXoHo2SQkze2dl0b6LlAIikXouIcX9tZdh9B9hmVg03d9hf47g32bhQEK', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(2, 5, '1055077954', 'Therese Swaniawski', 'Soledad Swift', 'greichert@example.net', '2023-01-31 17:40:55', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KPGsaFj5En', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(3, 6, '0698316927', 'Nasir Gusikowski', 'Brionna Ullrich', 'jonathon80@example.net', '2023-01-31 17:40:55', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7pPt9GQMzo', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(4, 8, '3282333754', 'Oral Bauch', 'Miss Alisha Beier', 'tanner87@example.com', '2023-01-31 17:40:55', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'smcY17dqC7', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(5, 10, '9263488271', 'Ozella Kuphal', 'Miss Meaghan Murray DDS', 'amann@example.com', '2023-01-31 17:40:55', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'toWwJsW1uM', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(6, 12, '5579305947', 'Mr. Fredy Borer Sr.', 'Manley Terry', 'freeman.rogahn@example.org', '2023-01-31 17:40:55', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pvsACKjapM', '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(7, 14, '7195680370', 'Pauline Tremblay', 'Stone Buckridge', 'sophia80@example.org', '2023-01-31 17:40:55', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0TfhUQWv3Z', '2023-01-31 17:40:55', '2023-01-31 17:40:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `l_plate` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` year(4) NOT NULL,
  `brand` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `engine_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vehicles`
--

INSERT INTO `vehicles` (`id`, `l_plate`, `color`, `model`, `brand`, `customer_id`, `engine_id`, `created_at`, `updated_at`) VALUES
(1, 'hro010', 'Blanco', 2015, 'Hyundai', 5, 4, '2023-01-31 17:40:55', '2023-01-31 17:40:55'),
(3, 'hrp012', 'Rojo', 2017, 'Mazda', 6, 3, '2023-02-14 03:36:58', '2023-02-14 03:36:58');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `authorizations`
--
ALTER TABLE `authorizations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `authorizations_vehicle_id_foreign` (`vehicle_id`),
  ADD KEY `authorizations_authorized_by_foreign` (`authorized_by`);

--
-- Indices de la tabla `charges`
--
ALTER TABLE `charges`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_ci_unique` (`ci`),
  ADD UNIQUE KEY `customers_url_unique` (`url`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD KEY `customers_doctype_id_foreign` (`doctype_id`),
  ADD KEY `customers_charge_id_foreign` (`charge_id`),
  ADD KEY `customers_created_by_foreign` (`created_by`);

--
-- Indices de la tabla `doc_types`
--
ALTER TABLE `doc_types`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `type_engines`
--
ALTER TABLE `type_engines`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_doctype_id_foreign` (`doctype_id`);

--
-- Indices de la tabla `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicles_customer_id_foreign` (`customer_id`),
  ADD KEY `vehicles_engine_id_foreign` (`engine_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `authorizations`
--
ALTER TABLE `authorizations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `charges`
--
ALTER TABLE `charges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `doc_types`
--
ALTER TABLE `doc_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `type_engines`
--
ALTER TABLE `type_engines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `authorizations`
--
ALTER TABLE `authorizations`
  ADD CONSTRAINT `authorizations_authorized_by_foreign` FOREIGN KEY (`authorized_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `authorizations_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_charge_id_foreign` FOREIGN KEY (`charge_id`) REFERENCES `charges` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `customers_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customers_doctype_id_foreign` FOREIGN KEY (`doctype_id`) REFERENCES `doc_types` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_doctype_id_foreign` FOREIGN KEY (`doctype_id`) REFERENCES `doc_types` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vehicles_engine_id_foreign` FOREIGN KEY (`engine_id`) REFERENCES `type_engines` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
