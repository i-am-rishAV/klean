-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 01:41 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klean`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `image`, `content`) VALUES
(11, 'Car Wax and Polish', 'blog01.jpg', 'A proper wax and polish does more than just return the shine to your car’s exteriors, it can also protect your car’s paintwork from future wear and tear.After your car is thoroughly cleaned, the polishing process will help remove minor imperfections from your car’s exterior including swirl marks, water spots, and small scratches. Next, a quality wax applied by hand will add extra shine to your car and protect its new sparkle for a long time to come.'),
(12, 'SAFETY TIPS FOR DRIVERS', 'blog02.jpg', 'There are an average of six million car accidents in the India each year. Drivers are required to complete a driving course and pass an exam before being able to legally drive. This course educates drivers on basic safety tips like fastening seat belts, adjusting mirrors, using turn signals and defense driving. Here are some additional safety tips.  1. Don’t drive distracted.  2. Clean your headlights.  3. Make sure your tires are properly inflated.  4. Check fluid levels.  5. Keep windows and windshield clean.'),
(13, 'YOUR CAR IS A BIG INVESTMENT SO TREAT IT WELL', 'post-1.jpg', 'December is the best time of the year for car specials, and therefore, one of the most popular months to buy a car. Now that you’ve scored that new ride, it’s time to take care of it. Our cars are usually the second most expensive asset we own after our house, making it worth protecting. Here are our tips on how to take care of your car this year so it retains its value longer.\r\n\r\nWash Your Car Frequently\r\n\r\nRoutine Maintenance\r\n\r\nClean Out Your Car'),
(14, 'HAVING A CLEAN CAR IS GOOD FOR YOUR MENTAL HEALTH', 'blog04.jpg', 'A proper wax and polish does more than just return the shine to your car’s exteriors, it can also protect your car’s paintwork from future wear and tear.After your car is thoroughly cleaned, the polishing process will help remove minor imperfections from your car’s exterior including swirl marks, water spots, and small scratches. Next, a quality wax applied by hand will add extra shine to your car and protect its new sparkle for a long time to come.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(2, 'rishav ', 'rr@gmail.com', 'cleaning', 'how to get my car clean');

-- --------------------------------------------------------

--
-- Table structure for table `managementteam`
--

CREATE TABLE `managementteam` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `managementteam`
--

INSERT INTO `managementteam` (`id`, `name`, `image`, `post`) VALUES
(19, 'Krishnkant Iyer', 'team1.jpg', 'Owner'),
(20, 'Karthik Reddy', 'team2.png', 'Manager'),
(21, 'Sunita Jain', 'team3.png', 'Worker'),
(22, 'Gorakh Naidu', 'team4.png', 'Worker');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `name`) VALUES
(3, 'kolo@gmail.com', 'rishav ');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `icon` text NOT NULL,
  `name` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `icon`, `name`, `content`) VALUES
(12, 'flaticon-car-wash-1', 'Exterior Washing', ' It is a glowing finish, chrome trim, window, wheels and tires as well as other visible components on the outer part of a vehicle.'),
(13, 'flaticon-car-wash', 'Interior Washing', 'The detailing interior detailing services team will look into your car from inside out of spotlessness. Such as tires, windows and wheels.'),
(14, 'flaticon-vacuum-cleaner', 'Vacuum Cleaning', 'Internal cleaning with suction vacuum using a special car tool. It cleans Fabric seat and floor of your car'),
(15, 'flaticon-seat', 'Seats Washing', 'Fabric seat protection is done a by a proprietary chemical. It removes dirt, dust & grime including very tough stains.'),
(16, 'flaticon-car-service', 'Window Wiping', 'This is for cleansing and protection of windshield of cars. With this treatment, hard water marks and oxidation are removed'),
(17, 'flaticon-car-service-2', 'Paint Protaction', 'It cleans paint , repair mirror scratches , enhances the paint & gives it a protective coating'),
(18, 'flaticon-car-wash', 'Oil Changing', 'A Klean Services oil change takes about 30 minutes and includes oil and filter change and can access the oil drain plug and filter on your vehicle '),
(19, 'flaticon-brush-1', 'Wheels Cleaning', 'This treatment is designed for cleaning and protection of the alloy wheels. It protects alloy wheels from brake dust and grime');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `washbooking`
--

CREATE TABLE `washbooking` (
  `id` int(11) NOT NULL,
  `package_type` text NOT NULL,
  `name` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `wash_date` date NOT NULL,
  `wash_time` time NOT NULL,
  `vechile_model` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `washbooking`
--

INSERT INTO `washbooking` (`id`, `package_type`, `name`, `contact`, `wash_date`, `wash_time`, `vechile_model`) VALUES
(4, 'COMPLEX CLEANING(1299 Rs/-)', 'rahul', '7319645021', '2023-01-12', '08:09:00', 'alto'),
(5, 'COMPLEX CLEANING(1299 Rs/-)', 'ravi', '8765432135', '2023-02-07', '19:00:00', 'activa');

-- --------------------------------------------------------

--
-- Table structure for table `washpoint`
--

CREATE TABLE `washpoint` (
  `id` int(11) NOT NULL,
  `point_name` text NOT NULL,
  `point_address` text NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `washpoint`
--

INSERT INTO `washpoint` (`id`, `point_name`, `point_address`, `contact`) VALUES
(5, 'Car Washing Point', '165, Rose Garden Rd  Panduranga Nagar  Banglore ,karnataka 560076', 2147483645),
(6, 'Car Washing Point', '3156, 12th Main Rd  Indira Nagar  Banglore ,karnataka 560076', 2147483647),
(7, 'Car Washing Point', '121, Vivekananda Rd  Kuvempu Nagar  Mysuru ,karnataka 560023', 2147483647),
(8, 'Car Washing Point', '684, Lingsugar Rd  Basaveshwara Nagar  Raichur ,karnataka 584101', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managementteam`
--
ALTER TABLE `managementteam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `washbooking`
--
ALTER TABLE `washbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `washpoint`
--
ALTER TABLE `washpoint`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `managementteam`
--
ALTER TABLE `managementteam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `washbooking`
--
ALTER TABLE `washbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `washpoint`
--
ALTER TABLE `washpoint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
