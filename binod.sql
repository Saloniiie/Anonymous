-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 03:52 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `binod`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `sdesc` text NOT NULL,
  `ldesc` text NOT NULL,
  `wname` varchar(50) NOT NULL,
  `views` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `topic`, `sdesc`, `ldesc`, `wname`, `views`) VALUES
(1, 'assets/images/home/blog.jfif', 'German', 'Lorem, ipsum dolor sit amet consectetur <br>adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!', 'Lorem, ipsum dolor sit amet consectetur<br> adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus\r\n\r\n nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, \r\n\r\nvoluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam \r\n\r\naperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!\r\notam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam\r\n\r\notam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam\r\notam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam', 'Harshita Kamra', 45),
(2, 'assets/images/home/blog.jfif', 'Spanish', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!', 'Yashi Sharma', 3),
(3, 'assets/images/home/blog.jfif', 'German', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus\r\n\r\n nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, \r\n\r\nvoluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam \r\n\r\naperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!\r\notam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam\r\n\r\notam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam\r\notam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam', 'Harshita Kamra', 1),
(4, 'assets/images/home/blog.jfif', 'German', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus\r\n\r\n nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, \r\n\r\nvoluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam \r\n\r\naperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!\r\notam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam\r\n\r\notam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam\r\notam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam', 'Harshita Kamra', 1),
(5, 'assets/images/home/blog.jfif', 'German', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus\r\n\r\n nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, \r\n\r\nvoluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam \r\n\r\naperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam!\r\notam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam\r\n\r\notam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam\r\notam voluptas laboriosam aperiam!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae perspiciatis ut fuga voluptatem doloribus? Delectus repellat mollitia, voluptas corporis amet quisquam nemo minus nihil, eveniet ex laborum quos consequatur ullam iusto! Veniam perferendis voluptates quae suscipit ipsam voluptatibus voluptatum dicta dolores, error neque eaque quas vero totam voluptas laboriosam aperiam', 'Harshita Kamra', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `video` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cname`, `video`) VALUES
(1, 'German', ''),
(2, 'Spanish', ''),
(3, 'French', ''),
(4, 'Italian', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
