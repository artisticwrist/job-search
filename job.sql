-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 06:29 PM
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
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE `admin_log` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `employer_status` varchar(200) NOT NULL,
  `subscribe_status` varchar(200) NOT NULL,
  `super_admin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_log`
--

INSERT INTO `admin_log` (`id`, `username`, `email`, `password`, `employer_status`, `subscribe_status`, `super_admin`) VALUES
(1, 'Super Admin', 'super-admin@gmail.com', '$2y$10$VpwU9lMPfB9iodW/Z3C6xuUzGJDFAzeBwVOY6AmoL9VWw.16FK5AW', '1', '1', '1'),
(5, 'New Admin', 'no-admin@gmail.com', '$2y$10$lLkC8B/ArY5RflKkyhgRru2lP/Mog36UMEkRPEeq7mNFoSb.w6H/G', '1', '1', '1'),
(6, 'New Admin', 'new-admin@gmail.com', '$2y$10$j2b8W87NLgQ5GgmsbN3KeekV9Q2GhfkhQI4DVO6EFN9bL4SvyX8oy', '1', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(200) NOT NULL,
  `blog_category` varchar(200) NOT NULL,
  `blog_link` varchar(200) NOT NULL,
  `blog_thumbnail` varchar(200) NOT NULL,
  `status` varchar(11) NOT NULL,
  `uploaded_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_category`, `blog_link`, `blog_thumbnail`, `status`, `uploaded_date`) VALUES
(1, 'No Gree for Unemployment in 2024: 5 Key Tips to Secure Your Ideal Job', 'Education', 'https://youtube.com', 'professional.jpg', '1', '2024-01-26 21:06:02'),
(2, 'The Benefits of Working in the Hospitality Industry', 'Education', 'https://youtube.com', 'professional2.jpg', '1', '2024-01-26 21:05:30'),
(3, 'The Top 10 Skills You Need to Succeed in Tech', 'Technology', 'https://youtube.com', 's1.jpg', '1', '2024-01-26 21:06:02'),
(4, 'How to Build Your Digital Presence and Attract Employers', 'Job Advice', 'https://youtube.com', 's2.jpg', '1', '2024-01-26 21:06:02'),
(5, 'How Our New Innovation Matches Candidates With Jobs Faster', 'Job Advice', 'https://youtube.com', 's3.jpg', '1', '2024-01-26 21:06:02'),
(6, 'Job Matching Just Got an Upgrade! Land your Dream Job Faster', 'Job Advice', 'https://youtube.com', 's4.jpg', '1', '2024-01-26 21:06:02'),
(8, 'Become a Part of the Lagos Labour Market Disruption', 'job-advice', 'https://youtube.com', 'bg.jpeg', '1', '2024-01-26 21:57:49'),
(9, 'Become a Part of the Lagos Labour Market Disruption', 'job-advice', 'https://youtube.com', 'bg.jpeg', '1', '2024-01-26 21:58:27'),
(10, '7 Tips to Fast track your Career after a Japa Move', 'News', 'https://youtube.com', 'api.png', '1', '2024-01-26 22:00:14'),
(11, 'Recruiters’ Hangout: Insider Secrets To Getting Hired', 'Job Advice', 'https://youtube.com', 'Screenshot from 2023-11-12 09-07-31.png', '1', '2024-01-26 22:02:36');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `job_name` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `job_type` varchar(200) NOT NULL,
  `job_location` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `summary` varchar(200) NOT NULL,
  `salary` varchar(200) NOT NULL,
  `specification` varchar(200) NOT NULL,
  `requirements` varchar(400) NOT NULL,
  `responsibility` varchar(400) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `exp_level` varchar(200) NOT NULL,
  `years_of_exp` varchar(200) NOT NULL,
  `company_logo` varchar(200) NOT NULL,
  `how_to_apply` varchar(200) NOT NULL,
  `status` int(200) NOT NULL,
  `date_uploaded` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_name`, `company`, `job_type`, `job_location`, `category`, `summary`, `salary`, `specification`, `requirements`, `responsibility`, `qualification`, `exp_level`, `years_of_exp`, `company_logo`, `how_to_apply`, `status`, `date_uploaded`) VALUES
(1, 'Software Engineer', 'Microsoft', 'premium', 'Lagos, Nigeria', 'information-technology', 'Lorem Ipsum redsinnn', '$1500 per/month', 'contract', 'Lorem Ipsum redsinnn', 'Lorem Ipsum redsinnn', 'HND', 'entry-level\n        ', '3 years ', 'profile.jpg', 'send email to george@gmail.com', 1, '2024-01-26 17:07:34'),
(2, 'Junior Software', 'Microsoft', 'free', 'cross-river', 'information-technology', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut a', '$1500 per/month', 'part-time', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui', 'HND', 'mid-level\n                ', '4years ', 'profile.jpg', 'send email to george@gmail.com', 1, '2024-01-27 00:17:45'),
(3, 'Junior Software Engineer', 'Microsoft', 'premium', 'cross-river', 'information-technology', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut a', '$1500 per/month', 'full-time', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui', 'HND', 'senior-level\n                ', '4years ', 'profile.jpg', 'send email to george@gmail.com', 1, '2024-01-27 00:19:48'),
(5, 'Juinor Devloper', 'Miicrosoft', 'free', 'akwa-ibom', 'information-technology', 'Response stopped\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices d', '$1500 per/month', 'Response stopped\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices d', 'Response stopped\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu ma', 'Response stopped\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu ma', 'HND/OND', 'senior-level\r\n                ', ' 5years', 'Picsart_23-08-05_15-09-12-810.jpg', 'send email to george@gmail.com', 1, '2024-01-27 01:32:19'),
(6, 'Frontend Developer', 'Miicrosoft', 'free', 'abuja', 'information-technology', 'Response stopped\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices d', '$1500 per/month', 'Response stopped\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices d', 'Response stopped\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu ma', 'Response stopped\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu ma', 'HND/OND', 'entry-level\r\n                ', ' 5years', 'bg.jpeg', 'send email to george@gmail.com', 1, '2024-01-27 01:32:51'),
(7, 'Frontend Developer', 'Miicrosoft', 'premium', 'akwa-ibom', 'information-technology', 'Response stopped\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices d', '$1500 per/month', 'part-time', 'Response stopped\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu ma', 'Response stopped\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu ma', 'Degree', 'entry-level\r\n                ', ' ', 'slack.png', 'send email to george@gmail.com', 1, '2024-01-27 01:33:31'),
(8, 'Senior Frontend Developer', 'Miicrosoft', 'free', 'akwa-ibom', 'information-technology', 'Response stopped\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices d', '$1500 per/month', 'remote', 'Response stopped\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu ma', 'Response stopped\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu ma', 'Degree', 'entry-level\r\n                ', ' ', 'api.png', 'send email to george@gmail.com', 1, '2024-01-27 01:33:48'),
(9, 'Junior Frontend Developer', 'Miicrosoft', 'free', 'akwa-ibom', 'information-technology', 'Response stopped\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices d', '$1500 per/month', 'part-time', 'Response stopped\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu ma', 'Response stopped\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu ma', 'Degree', 'entry-level\r\n                ', '3-5years ', '', 'send email to george@gmail.com', 1, '2024-01-27 01:34:13');

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

CREATE TABLE `referrals` (
  `id` int(11) NOT NULL,
  `referring_email` varchar(200) NOT NULL,
  `new_user_email` varchar(200) NOT NULL,
  `approved` varchar(200) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `referrals`
--

INSERT INTO `referrals` (`id`, `referring_email`, `new_user_email`, `approved`, `created_on`) VALUES
(1, 'contactdev.bigjoe@gmail.com', 'georgejoeemmanuel@gmail.com', '0', '2024-01-26 16:51:19');

-- --------------------------------------------------------

--
-- Table structure for table `sub_request`
--

CREATE TABLE `sub_request` (
  `id` int(11) NOT NULL,
  `employer_status` int(11) NOT NULL,
  `subscribe_status` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `employer_status` int(1) NOT NULL,
  `subscribe_status` int(1) NOT NULL,
  `referral_code` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `account_name` varchar(200) NOT NULL,
  `account_type` varchar(200) NOT NULL,
  `bank_name` varchar(200) NOT NULL,
  `account_number` varchar(200) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `employer_status`, `subscribe_status`, `referral_code`, `password`, `account_name`, `account_type`, `bank_name`, `account_number`, `date_created`) VALUES
(1, 'Joseph George', 'contactdev.bigjoe@gmail.com', 0, 1, 'f86d2dde65da214eb9624e05afda8bd3', '$2y$10$unXKO1pTGFxeDhCKxbYk2eamPpRR9MO1nibLHyNmcIElLGn5kBWD2', '0', '0', '0', '0', '2024-01-26 19:05:55'),
(2, 'Joseph George', 'georgejoeemmanuel@gmail.com', 1, 0, 'fb08cf1cb8ed194b265ab5ea47be9332', '$2y$10$nK0CE1aIwR6jUwGzFuFchOdVoJNVh8WNk36a/XvgxP4cIEaPzWDYW', '0', '0', '0', '0', '2024-01-26 16:53:28');

-- --------------------------------------------------------

--
-- Table structure for table `user_request`
--

CREATE TABLE `user_request` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `plan` varchar(200) NOT NULL,
  `slip` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_log`
--
ALTER TABLE `admin_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `referrals`
--
ALTER TABLE `referrals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_request`
--
ALTER TABLE `sub_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_request`
--
ALTER TABLE `user_request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_log`
--
ALTER TABLE `admin_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `referrals`
--
ALTER TABLE `referrals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_request`
--
ALTER TABLE `sub_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_request`
--
ALTER TABLE `user_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
