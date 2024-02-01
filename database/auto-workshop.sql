-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 01:35 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auto-workshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkout_details`
--

CREATE TABLE `checkout_details` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` int(11) NOT NULL,
  `make_c` varchar(100) NOT NULL,
  `model_c` varchar(100) NOT NULL,
  `variant_c` varchar(100) NOT NULL,
  `number_car` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout_details`
--

INSERT INTO `checkout_details` (`id`, `firstname`, `lastname`, `email`, `phone`, `make_c`, `model_c`, `variant_c`, `number_car`, `category`, `service`, `price`) VALUES
(6, 'shabbir', 'tiqi', 'srs@gmail.com', 374933, 'bmw', '2017', 'F80 M3', 8935, 'Engine Swap', 'Turbo V6 Swapp', 1300000),
(7, 'Corunes ', 'Bhatti', 'corunesbhatti19@gmail.com', 374933, 'toyota', '2022', 'carolla', 5673, 'Tune', 'Air Intake', 15000),
(8, 'Corunes ', 'Bhatti', 'corunesbhatti19@gmail.com', 374933, 'Honda', '2023', 'city', 829, 'Tune', 'aftermarket Brakes', 30000),
(9, 'Corunes ', 'Bhatti', 'corunesbhatti19@gmail.com', 374933, 'Honda', '2012', 'civic', 7291, 'Detailing', 'Dashboard Staring Washing', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `custumer_sign_up`
--

CREATE TABLE `custumer_sign_up` (
  `id` int(11) NOT NULL,
  `user_first_name` varchar(225) NOT NULL,
  `user_last_name` varchar(225) NOT NULL,
  `number` int(11) NOT NULL,
  `email` varchar(225) DEFAULT NULL,
  `gender` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(225) NOT NULL,
  `reset_token_hash` varchar(64) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `custumer_sign_up`
--

INSERT INTO `custumer_sign_up` (`id`, `user_first_name`, `user_last_name`, `number`, `email`, `gender`, `age`, `password`, `reset_token_hash`, `reset_token_expires_at`) VALUES
(12, 'shabbir', 'tiqi', 374933, 'srs@gmail.com', 'Male', 18, '$2y$10$w.XdsB4IW1FS3OLeTeQuyuobg69StCtAXGAIywbXu33sh/tej94yK', 'b4c2b95672e96fcb64cd998dbf2a9d2f9a5c8ae31041abd31293af70010fef66', '2024-01-27 00:03:03'),
(13, 'usman', 'ali', 374933, 'crip@gmail.com', 'Male', 21, '$2y$10$3D8P.RL0cz4.wZF5aiCo4eDP.qNZUYYlvKWs2FoA2caRVk15McsQG', NULL, NULL),
(15, 'Corunes ', 'Bhatti', 374933, 'corunesbhatti19@gmail.com', 'Male', 18, '$2y$10$z13kCjLvbpoFLayc7O/R.uiIYYq9xMfSNxIL.AW3bFEG3ACfSBeom', '6aab5b5e1688bb5aee94226e030e7d191cdc19f2a2369f81058dee7080fbd6db', '2024-01-27 15:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(225) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(10000) NOT NULL,
  `category` varchar(225) NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `price`, `img`, `category`, `description`) VALUES
(21, 'Brushing and Steam Cleaning', 8000, 'assets/upload/Brushing and steam cleaning.jpg', 'Detailing', 'Steam cleaning offers a range of advantages, including deep cleaning and sanitization through high-temperature steam, chemical-free cleaning suitable for individuals with sensitivities, versatility on various surfaces, effici'),
(22, 'Cleaning Internal Surfaces', 10000, 'assets/upload/Cleaning internal surfaces.jpg', 'Detailing', 'Cleaning internal surfaces provides numerous benefits, including improved hygiene, enhanced indoor air quality, prolonged material longevity, a more attractive appearance, prevention of mold and mildew, reduction of odors, po'),
(23, 'Compete Detailing', 35000, 'assets/upload/compete detailing.jpg', 'Detailing', 'Complete detailing provides a range of advantages, including enhanced appearance, protection for surfaces, improved safety, preservation of resale value, environmental damage protection, engine bay cleaning, upholstery care, '),
(24, 'Exterior Detailing', 15000, 'assets/upload/Exterior detailing.jpg', 'Detailing', 'Exterior detailing provides numerous advantages, including enhanced aesthetic appeal, paint protection, prevention of oxidation and fading, increased resale value, improved safety through visibility, protection against enviro'),
(25, 'Dashboard Staring Washing', 10000, 'assets/upload/Dashboard Staring Washing.jpg', 'Detailing', 'Cleaning the dashboard and steering wheel enhances the interior appearance, provides a better driving experience, prevents wear and tear, reduces bacteria and germs, preserves interior components, prevents discoloration, and '),
(26, 'aftermarket Brakes', 30000, 'assets/upload/pexels-photo-4022543.jpeg', 'Tune', 'In conclusion, upgrading to performance brake components can provide several benefits, including improved stopping power, increased durability, enhanced braking feel, better appearance, and increased resale value.\r\n'),
(27, 'Air Intake', 15000, 'assets/upload/842f264b9f74cbe477f7aa301403adcc.jpg', 'Tune', 'An aftermarket air intake can improve the performance of a vehicle by allowing for better airflow to the engine. This can result in increased horsepower and torque, as well as improved fuel efficiency. Additionally, aftermark'),
(28, 'ECU Remapping/Chip tuning', 40000, 'assets/upload/tune.jpg', 'Tune', 'ECU Remap or Chip tuning is a service that involves tweaking. In this service, our teams scan the complete electronics of a car. We adjust the parameters to achieve a gain in vehicle performance and fuel averages. We strictly'),
(29, 'Exhaust System', 39000, 'assets/upload/90ea1e2ddafabc1fc4dee8248619e826.jpg', 'Tune', 'Upgrading to an aftermarket exhaust system offers several benefits, such as improved engine performance, increased horsepower and torque, enhanced fuel efficiency, and a more aggressive exhaust note. These systems are usually'),
(30, 'Aftermarket Suspension', 150000, 'assets/upload/1000_F_375340609_oizwIOrcrjKCguBjHFI3JCflp45F74Wm.jpg', 'Tune', 'Upgrading to an aftermarket suspension system offers a range of benefits, including improved handling and stability through upgraded shocks, struts, and sway bars. Enhanced ride comfort is achieved with better shock absorbers'),
(31, 'Super Charger', 150000, 'assets/upload/786823660af4190b5a00a8cf01ddb8d1.jpg', 'Tune', 'Upgrading to an aftermarket supercharger can provide significant advantages, including increased horsepower and torque, improved acceleration, and enhanced overall performance of the vehicle. It can also provide a more aggres'),
(32, 'Turbo Charger', 180000, 'assets/upload/1015be613d71c17750c07578bc09caa4.jpg', 'Tune', 'Turbocharging offers a range of benefits to internal combustion engines, including increased power and torque by forcing more air into the combustion chamber. This results in improved fuel efficiency through downsizing and en'),
(34, '2jz Swapp', 1000000, 'assets/upload/2jz.jpg', 'Engine Swap', 'The 2JZ engine, notably the 2JZ-GTE variant, is a renowned inline-six-cylinder engine produced by Toyota, prominently featured in the Toyota Supra. With a 3.0-liter displacement, sequential twin-turbochargers, and capabilities for high power output, the 2JZ-GTE is celebrated for its smooth performance. Incorporating VVT-i technology, an aluminum block and head, and boasting reliability, it has become an icon in the automotive world. Known for its strong aftermarket support, the 2JZ engine is favored by enthusiasts for its durability and potential for high-performance tuning.'),
(35, '2JZ GTE swapp', 1500000, 'assets/upload/2jzgte.jpg', 'Engine Swap', 'The 2JZ-GTE is a highly acclaimed 3.0-liter inline-six engine known for its smooth performance and balance. Equipped with sequential twin-turbochargers, it produces approximately 320 horsepower and 315 lb-ft of torque in stock form. Featuring an aluminum block and cylinder head, as well as Variable Valve Timing with intelligence (VVT-i) in some versions, it offers a blend of power and efficiency. Its strong aftermarket support and reputation for durability make it a favorite among enthusiasts for high-performance tuning.'),
(36, 'D-16 swapp', 800000, 'assets/upload/d-16.jpg', 'Engine Swap', 'The D16 engine series by Honda encompasses four-cylinder inline engines with varied displacements, typically ranging from 1.5 to 1.6 liters. These engines, found in models like the Civic and CRX, feature options for both naturally aspirated and turbocharged variants. Depending on the specific D16 variant, they may utilize single or dual overhead camshafts and incorporate Honda\'s VTEC technology for optimized performance. Known for their compact design and versatility, the D16 engines offer a range of power outputs and have a strong presence in the aftermarket for enthusiasts seeking performance modifications.'),
(37, 'RB26DETT Swapp', 2500000, 'assets/upload/RB26DETT I6-skyline.jpg', 'Engine Swap', 'The RB26DETT is a renowned 2.6-liter inline-six engine from Nissan, featuring twin-turbocharging, dual overhead camshafts, and an individual throttle body system. Despite its stock rating of around 280 horsepower, it\'s widely known for being capable of much higher power levels through modifications. Often paired with an advanced all-wheel-drive system, the RB26DETT is celebrated for its performance capabilities and has achieved cultural significance, especially in association with the Nissan Skyline GT-R models.'),
(38, 'Turbo V6 Swapp', 1300000, 'assets/upload/Turbo V6.jpg', 'Engine Swap', 'The V6 turbo engine is a six-cylinder configuration with turbocharging, providing a balance of power and efficiency. With variable displacements and turbocharger setups, these engines deliver a wide range of power outputs. Commonly found in sports cars, luxury vehicles, and SUVs, V6 turbo engines offer strong low-end torque, precise fuel delivery, and a balance between performance and fuel efficiency. Their versatility makes them a popular choice in various automotive applications.'),
(39, 'BMW N63 V8 Swapp', 1600000, 'assets/upload/v8 bmw.jpg', 'Engine Swap', 'The BMW N63 V8 engine is a high-performance twin-turbocharged engine with a displacement of around 4.4 liters. It features advanced technologies such as direct fuel injection, Valvetronic, and Double-VANOS for improved efficiency and performance. Used in various BMW models, this V8 engine delivers strong power output, especially in high-performance applications, and is known for its combination of performance, torque, and advanced engineering.'),
(40, 'K-20 A Swapp', 1200000, 'assets/upload/k20.jpg', 'Engine Swap', 'The Honda K20 engine is a versatile and well-known inline-4 engine that combines performance with efficiency. With various versions used in Honda and Acura models, the K20 engine benefits from technologies like VTEC and i-VTEC, providing a broad power band and making it popular among enthusiasts. Its aluminum construction, compatibility with different transmissions, and robust aftermarket support contribute to its reputation in the automotive community.'),
(41, 'K 24 Swapp', 1150000, 'assets/upload/k24.jpg', 'Engine Swap', 'The Honda K24 engine is a widely used inline-4 engine known for its reliability, efficiency, and versatility. With features like i-VTEC technology, aluminum construction, and compatibility with different transmissions, the K24 engine is employed in various Honda and Acura models, making it a popular choice among drivers and enthusiasts alike. Its availability and strong aftermarket support further contribute to its widespread use and appeal.');

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` int(11) NOT NULL,
  `service_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `service_name`) VALUES
(1, 'Engine Swap'),
(2, 'Tune'),
(3, 'Detailing');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int(11) NOT NULL,
  `user_name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `pass` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `user_name`, `email`, `pass`) VALUES
(1, 'shabbir', 'srs@gmail.com', '1234'),
(2, 'corunes', 'corunesbhatti19@gmail.com', '1234'),
(3, 'corunes', 'corunesbhatti19@gmail.com', '1234'),
(4, 'will', 'will@gmail.com', '123'),
(5, 'abc', 'srs@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkout_details`
--
ALTER TABLE `checkout_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custumer_sign_up`
--
ALTER TABLE `custumer_sign_up`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reset_token_hash` (`reset_token_hash`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkout_details`
--
ALTER TABLE `checkout_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `custumer_sign_up`
--
ALTER TABLE `custumer_sign_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
