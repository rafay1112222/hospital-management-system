-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2023 at 10:24 PM
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
-- Database: `bee`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `H_id` int(11) NOT NULL,
  `V_id` int(11) NOT NULL,
  `P_id` int(11) NOT NULL,
  `A_id` int(11) NOT NULL,
  `contact` int(50) NOT NULL,
  `Time` time NOT NULL,
  `Date` date NOT NULL,
  `Statuss` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`H_id`, `V_id`, `P_id`, `A_id`, `contact`, `Time`, `Date`, `Statuss`) VALUES
(1, 2, 1, 1, 358448858, '02:34:21', '2023-09-01', 'accepted'),
(1, 1, 1, 5, 3458885, '21:10:00', '2023-09-17', 'accepted'),
(2, 2, 4, 6, 34587748, '19:37:20', '2023-09-30', 'accepted'),
(3, 1, 8, 7, 397845123, '16:09:00', '2023-10-21', 'accepted'),
(2, 2, 7, 8, 1272113154, '19:14:00', '2023-10-19', 'pending'),
(1, 1, 7, 9, 345878415, '01:43:00', '2023-11-15', 'accepted'),
(1, 1, 1, 10, 397823645, '12:57:00', '2023-11-01', 'declined'),
(1, 4, 1, 11, 38756242, '12:59:00', '2023-11-30', 'accepted'),
(3, 7, 1, 12, 348784165, '00:00:00', '2023-11-30', 'accepted'),
(3, 1, 1, 13, 0, '00:11:00', '2003-11-11', 'pending'),
(1, 7, 10, 14, 0, '00:10:00', '1111-01-11', 'accepted'),
(1, 1, 10, 15, 3122, '07:51:00', '2023-11-01', 'pending'),
(2, 3, 1, 16, 4575678, '00:39:00', '2023-11-01', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `appoinments`
--

CREATE TABLE `appoinments` (
  `A_id` int(11) NOT NULL,
  `T_id` int(11) NOT NULL,
  `H_id` int(11) NOT NULL,
  `P_id` int(11) NOT NULL,
  `contact` int(50) NOT NULL,
  `Date` date NOT NULL,
  `Time` text NOT NULL,
  `Statuss` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appoinments`
--

INSERT INTO `appoinments` (`A_id`, `T_id`, `H_id`, `P_id`, `contact`, `Date`, `Time`, `Statuss`) VALUES
(1, 2, 1, 1, 31228515, '2023-10-04', '20:12', 'accepted'),
(2, 1, 2, 4, 312781814, '2023-10-01', '05:00 PM', 'accepted'),
(3, 2, 3, 8, 378474781, '2023-10-16', '18:04', 'declined'),
(4, 2, 3, 8, 2147483647, '2023-10-17', '20:05', 'declined'),
(13, 5, 1, 10, 3122, '2023-11-30', '08:02', 'pending'),
(14, 6, 3, 10, 1222, '2023-11-01', '11:55', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `H_id` int(11) NOT NULL,
  `U_id` int(11) NOT NULL,
  `H_name` varchar(300) NOT NULL,
  `h_img` varchar(1000) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `Details` varchar(1000) NOT NULL,
  `location` varchar(500) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`H_id`, `U_id`, `H_name`, `h_img`, `Contact`, `Details`, `location`, `status`) VALUES
(1, 2, 'Civil hospital', 'img/Civil hospital.jfif', 864684, 'A civil hospital is a type of public healthcare institution or medical facility that provides medical services and treatment to the general public.', 'Civil Hospital Karachi is located at Mission Road Cear Civil Hospital Masjid New Labour Colony, Nanak Wara, Karachi, Sindh, Pakistan.', 0),
(2, 6, 'Liaquat National Hospital', 'img/Liaquat National Hospital.jfif', 331025432, 'Liaquat National Hospital was conceived 60 years ago as a not-for-profit organization with a vision to provide quality healthcare at an affordable cost to all socioeconomic classes. Over the years, the hospital has evolved to become the largest tertiry of Pakistan.', 'Liaquat National Hospital is located at National Stadium Road, Bahadurabad, Karachi, Sindh, Pakistan..', 0),
(3, 5, 'Agha Khan', 'img/Agha Khan.jfif', 331025432, 'Aga Khan University Hospitals in Karachi, Pakistan and Nairobi, Kenya are private, not-for-profit institutions providing high quality health care.', 'The Aga Khan University Hospital is the biggest healthcare hospital in Pakistan located at Stadium Rd at Aga Khan University Hospital, Karachi, Karachi City, Sindh, Pakistan.', 0),
(9, 3, 'Saifee', '.../eproject/ADMIN/img/', 2136789400, 'Saifee Hospital is one of the general hospital managed by Saifee Hospital Trust established by His Holiness Late Dr. Syedna Mohammad Burhanuddin (RA) to cater the essential healthcare needs of a common man and dedicated to the memory of his revered father, His Holiness Late Dr. Syedna Taher Saifuddin (RA).  Saifee Hospital is located in the heart of residential area of Barkat-e-Haidry, North Nazimabad (Karachi) to look after the population of District Central Karachi. Saifee Hospital is presently being upgraded under the vision of His Holiness Syedna Mufaddal Saifuddin (TUS).  It is one of the complete dedicated healthcare services based hospital and provides compassionate, accessible & high quality care to the patients which comprises of (193 Beds) which includes;', 'ST-1, Block-F, North Nazimabad, Karachi-74700 (Pakistan).', 1),
(10, 12, 'Jinnah', 'img/jinnah.jfif', 3122889668, 'The Jinnah Postgraduate Medical Centre is located at Rafiqui Shaheed Road in Karachi Cantonment area of Karachi, Sindh, Pakistan. In 2015,', 'Rafiqui, Sarwar Shaheed Rd, Karachi Cantonment, Karachi, Karachi City, Sindh 75510', 0),
(11, 13, 'Life LIne', 'img/Life LIne.jfif', 318726031226, 'Lifeline Hospital is the Leading hospital in Karachi, offering world-class medical care and services with a team of highly experienced and qualified medical .', ' D-14 Shahrah-e-Sher Shah Suri North, Nazimabad, Karachi', 0),
(12, 14, 'Mamji Hospital', 'img/mamji.jfif', 21111166177, ' Mamji Hospital Karachi is a state-of-the-art private hospital located in the heart of the city of Karachi. The hospital offers various facilities for both In-patient and out-patient and is well-equipped with advanced medical instruments. Mamji Hospital Karachi has specialized departments of Orthopedics, Gynae, Paeds, General Surgery, Nephrology, Cardiology, and Neuro Surgery functional under the care and supervision of the top doctors and consultants of Karachi.', 'C-19 Near Water Pump Chowrangi, Gulberg Town, Karachi, Sindh, Pakistan', 0),
(15, 3, 'Indus', 'img/indus.jfif', 2135112709, 'Pakistan’s healthcare is plagued by a critical healthcare worker shortage, including only 0.5 nurses and midwives for every 1,000 people; 6 specialist surgeons for every 100,000 people, and 1 physician for every 1,000 people. IHHN is executing a large-scale expansion of its health facilities to ensure accessibility to high-quality care for all, by planning inter-connected owned hospitals and a network of secondary-care facilities by leveraging public-private partnerships.', 'Plot C-76, Sector 31/5, Opposite Darussalam Society, Korangi Crossing, Karachi, Pakistan · ', 0),
(17, 3, 'Dr.Ziauddin Hospital', 'img/ziauddin.jpg', 321, 'Operating under the Ziauddin Trust, Dr. Ziauddin Group of Hospitals is one of the largest private groups in the country. Its mission has been to reach out to the masses and cater to their needs for quality health care facilities at affordable rates in the country. It began with a small maternity home and has grown exponentially over the years to include five hospitals, including three tertiary-care facilities, responding to the healthcare needs of the people.', 'Head Office: Block-B, North Nazimabad, Karachi 74700, Pakistan. Clifton: ST-4/B, Shahrah-e-Ghalib, Block-6, Scheme 5, Clifton, Karachi 75600, Pakistan. Keamari: Plot No. 33, Behind KPT Hospital, Keamari, Karachi 75620, Pakistan. Boat Basin: F-6, Block-5, Khayaban-e-Saadi, Clifton, Karachi 75600, Pakistan.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `P_id` int(11) NOT NULL,
  `U_id` int(100) NOT NULL,
  `Blood_G` varchar(300) NOT NULL,
  `Gender` varchar(200) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`P_id`, `U_id`, `Blood_G`, `Gender`, `Name`, `status`) VALUES
(1, 4, 'B+', 'female', 'Bakhtawar', 1),
(2, 4, 'B+', 'female', 'Bakhtawar', 1),
(3, 4, 'A+', 'female', 'Bakhtawar', 1),
(4, 7, 'A+', 'female', 'abc', 0),
(5, 7, 'A+', 'female', 'someone', 0),
(15, 1, 'A+', 'male', 'abdur rafay', 0),
(16, 7, 'A+', 'male', 'Student1511046', 0),
(17, 1, 'B+', 'Male', 'ray', 0),
(18, 10, 'A+', 'male', 'abdur rafay', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `R_id` int(11) NOT NULL,
  `T_id` int(11) NOT NULL,
  `Results` varchar(200) NOT NULL,
  `A_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`R_id`, `T_id`, `Results`, `A_id`) VALUES
(5, 2, 'positive', 1),
(6, 2, 'pos', 1),
(7, 2, 'pos', 1),
(10, 5, 'positive', 1),
(11, 5, 'positive', 1),
(12, 6, 'positive', 14);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `r_id` int(11) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`r_id`, `user_role`, `status`) VALUES
(1, 'Admin', 0),
(2, 'Patient', 0),
(3, 'Hospital', 0),
(4, 'abc', 1),
(5, 'abc', 1),
(6, 'hello', 1),
(7, 'hello15', 1),
(8, 'hello1', 1),
(9, 'abc', 1);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `T_id` int(11) NOT NULL,
  `Test_Name` varchar(250) NOT NULL,
  `T_img` int(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`T_id`, `Test_Name`, `T_img`, `status`) VALUES
(1, 'abcd', 0, 1),
(2, 'molecular', 0, 1),
(3, 'abcd', 0, 1),
(4, 'abc', 0, 1),
(5, ' Molecular (RT-PCR) Tests', 0, 0),
(6, 'COVID-19 Antigen Tests', 0, 0),
(7, 'COVID-19 Antibody Tests ', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `U_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `address` varchar(300) NOT NULL,
  `dob` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`U_id`, `r_id`, `name`, `email`, `pass`, `address`, `dob`, `status`) VALUES
(1, 2, 'cavin', 'cavin@gmail.com', 'cavin123', 'fadasf', '2000-05-07', 0),
(2, 3, ' Civil hospital', 'Civil@gmail.com', 'abc123', 'gaghfhsfhg\r\n', '2004-04-14', 0),
(3, 1, 'ibad', 'ibad@gmail.com', 'ibad786', 'agfsghaf', '1997-04-24', 0),
(4, 3, 'Saifee', 'saifee@gmail.com', 's123', 'Karachi', '2000-11-24', 0),
(5, 3, 'Agha', 'Agha@gmail.com', 'abc', 'Karachi', '2023-09-01', 0),
(6, 3, 'Liaquat National Hospital', 'liaquat@gmail.com', 'l123', 'Karachi', '2003-04-07', 0),
(7, 1, 'sami', 'Sami@gmail.com', 'sami', 'Karachi', '1999-05-07', 0),
(8, 1, 'Abdur Rafay', 'mrperfect03122889668@gmail.com', 'ar123', 'Karachi', '2000-11-01', 0),
(10, 2, 'ray', 'ray@gmail.com', '123', 'karachi', '2001-06-11', 0),
(11, 3, 'Saifee', 'saifee@gmail.com', 's123', ',sfjsd wefjkgbgsjn', '2023-11-23', 0),
(12, 3, 'Jinnah', 'jinnah@hos123gmail.com', 'jinn786', 'Rafiqui, Sarwar Shaheed Rd, Karachi Cantonment, Karachi, Karachi City, Sindh 75510', '2023-11-23', 0),
(13, 3, 'LIfe Line', 'lifeline@gmail.com', 'lifeline123', ' D-14 Shahrah-e-Sher Shah Suri North, Nazimabad, Karachi', '2023-11-23', 0),
(14, 3, 'Mamji Hospital', 'mamji123@gmail.com', 'mamji321', 'C-19 Near Water Pump Chowrangi, Gulberg Town, Karachi, Sindh, Pakistan', '0000-00-00', 0),
(15, 3, 'indus', 'indus@gmail.com', 'indus', 'karachi', '2023-11-30', 0),
(16, 2, 'tobba', 'tooba123@gmail.com', 'to123', 'sdfgsfy', '2023-11-13', 1),
(17, 2, '', 'ray@gmail.com', '123', '', '0000-00-00', 1),
(18, 2, '', 'ray@gmail.com', '123', '', '0000-00-00', 1),
(19, 2, '', 'ray@gmail.com', '123', '', '0000-00-00', 1),
(20, 2, '', 'ray@gmail.com', '123', '', '0000-00-00', 1),
(21, 2, '', 'ray@gmail.com', '123', '', '0000-00-00', 1),
(22, 3, 'ziauddin', 'zia@gmail.com', 'zia123', 'karachi', '2000-01-01', 0),
(23, 2, '', 'ray@gmail.com', '123', '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vaccination`
--

CREATE TABLE `vaccination` (
  `V_id` int(11) NOT NULL,
  `V_name` varchar(250) NOT NULL,
  `V_img` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccination`
--

INSERT INTO `vaccination` (`V_id`, `V_name`, `V_img`, `status`) VALUES
(1, '       PfizerBioNTech COVID-19 vaccine.', 'img/PfizerBioNTech COVID-19 vaccine..jfif', 0),
(2, '         Moderna(mRNA-1273) COVID-19 vaccine.', 'img/Moderna (mRNA-1273) COVID-19 vaccine..jfif', 0),
(3, '           OxfordAstraZeneca COVID-19 vaccine.', 'img/Oxford AstraZeneca COVID-19 vaccine..jfif', 0),
(4, 'J&J COVID-19 vaccine.', 'img/J&J COVID-19 vaccine..jfif', 0),
(5, 'Sinopharm COVID-19 vaccine.', 'img/Sinopharm COVID-19 vaccine..jfif', 0),
(6, 'Sinovac COVID-19 vaccine.', 'img/Sinovac COVID-19 vaccine..jfif', 0),
(7, 'COVAXIN.', 'img/COVAXIN..jfif', 0),
(8, 'Novovax.', 'img/novovax.jfif', 0),
(9, 'ibbi', 'image/', 1),
(10, 'ibbi', 'img/', 1),
(11, 'fdgvdfv', 'img/user.jpg', 1),
(12, 'fdgvdfv', 'img/', 1),
(13, 'fdgvdfv', 'img/', 1),
(14, 'fdgvdfv', 'img/', 1),
(15, 'fdgvdfv', 'img/bootstrap-5-admin-template.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_available`
--

CREATE TABLE `vaccine_available` (
  `id` int(11) NOT NULL,
  `V_idd` int(11) NOT NULL,
  `H_id` int(11) NOT NULL,
  `U_id` int(11) NOT NULL,
  `Statuss` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccine_available`
--

INSERT INTO `vaccine_available` (`id`, `V_idd`, `H_id`, `U_id`, `Statuss`) VALUES
(1, 1, 1, 1, 'Available'),
(2, 2, 1, 1, 'Not Available'),
(3, 3, 3, 5, 'Available'),
(4, 4, 3, 5, 'Not Available'),
(5, 5, 3, 5, 'Available'),
(6, 6, 3, 5, 'Available'),
(7, 7, 3, 5, 'Available'),
(8, 8, 3, 5, 'Not Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`A_id`),
  ADD KEY `H_id` (`H_id`),
  ADD KEY `V_id` (`V_id`),
  ADD KEY `P_id` (`P_id`);

--
-- Indexes for table `appoinments`
--
ALTER TABLE `appoinments`
  ADD PRIMARY KEY (`A_id`),
  ADD KEY `abc` (`H_id`),
  ADD KEY `abc2` (`P_id`),
  ADD KEY `abc3` (`T_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`H_id`),
  ADD KEY `U_id` (`U_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`P_id`),
  ADD KEY `U_id` (`U_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`R_id`),
  ADD KEY `T_id` (`T_id`),
  ADD KEY `A_id` (`A_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`T_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`U_id`),
  ADD KEY `r_id` (`r_id`);

--
-- Indexes for table `vaccination`
--
ALTER TABLE `vaccination`
  ADD PRIMARY KEY (`V_id`);

--
-- Indexes for table `vaccine_available`
--
ALTER TABLE `vaccine_available`
  ADD PRIMARY KEY (`id`),
  ADD KEY `V_id` (`V_idd`),
  ADD KEY `H_id` (`H_id`),
  ADD KEY `U_id` (`U_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `A_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `appoinments`
--
ALTER TABLE `appoinments`
  MODIFY `A_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `H_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `P_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `R_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `T_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `U_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `vaccination`
--
ALTER TABLE `vaccination`
  MODIFY `V_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `vaccine_available`
--
ALTER TABLE `vaccine_available`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD CONSTRAINT `appoinment_ibfk_1` FOREIGN KEY (`H_id`) REFERENCES `hospital` (`H_id`),
  ADD CONSTRAINT `appoinment_ibfk_2` FOREIGN KEY (`V_id`) REFERENCES `vaccination` (`V_id`),
  ADD CONSTRAINT `appoinment_ibfk_4` FOREIGN KEY (`P_id`) REFERENCES `users` (`U_id`);

--
-- Constraints for table `appoinments`
--
ALTER TABLE `appoinments`
  ADD CONSTRAINT `abc` FOREIGN KEY (`H_id`) REFERENCES `hospital` (`H_id`),
  ADD CONSTRAINT `abc2` FOREIGN KEY (`P_id`) REFERENCES `users` (`U_id`),
  ADD CONSTRAINT `abc3` FOREIGN KEY (`T_id`) REFERENCES `test` (`T_id`);

--
-- Constraints for table `hospital`
--
ALTER TABLE `hospital`
  ADD CONSTRAINT `hospital_ibfk_1` FOREIGN KEY (`U_id`) REFERENCES `users` (`U_id`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`U_id`) REFERENCES `users` (`U_id`);

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`T_id`) REFERENCES `test` (`T_id`),
  ADD CONSTRAINT `reports_ibfk_3` FOREIGN KEY (`A_id`) REFERENCES `appoinments` (`A_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`r_id`) REFERENCES `role` (`r_id`);

--
-- Constraints for table `vaccine_available`
--
ALTER TABLE `vaccine_available`
  ADD CONSTRAINT `vaccine_available_ibfk_1` FOREIGN KEY (`V_idd`) REFERENCES `vaccination` (`V_id`),
  ADD CONSTRAINT `vaccine_available_ibfk_2` FOREIGN KEY (`H_id`) REFERENCES `hospital` (`H_id`),
  ADD CONSTRAINT `vaccine_available_ibfk_3` FOREIGN KEY (`U_id`) REFERENCES `users` (`U_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
