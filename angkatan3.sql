-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2024 at 09:15 AM
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
-- Database: `angkatan3`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `publisher` varchar(16) NOT NULL,
  `year_of_publication` int(10) NOT NULL,
  `author` varchar(255) NOT NULL,
  `created at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `id_category`, `title`, `publisher`, `year_of_publication`, `author`, `created at`, `updated at`) VALUES
(1, 1, 'The Great Adventure', 'Adventure Press', 2019, 'John Smith', '2024-10-15 07:22:58', '2024-10-15 07:22:58'),
(2, 2, 'Belajar Python', 'Tech Publishing', 2021, 'Alice Johnson', '2024-10-15 07:22:58', '2024-10-15 07:22:58'),
(3, 1, 'Dunia Fantasi', 'Fantasy House', 2018, 'Lucas Martin', '2024-10-15 07:22:58', '2024-10-15 07:22:58'),
(4, 2, 'Matematika Dasar', 'Edukasi Cerdas', 2020, 'Siti Rahmawati', '2024-10-15 07:22:58', '2024-10-15 07:22:58'),
(5, 5, 'Teknologi Masa Depan', 'Future Tech', 2023, 'Elon Musk', '2024-10-15 07:22:58', '2024-10-15 07:22:58'),
(6, 3, 'Komik Petualangan', 'Manga World', 2022, 'Taro Suzuki', '2024-10-15 07:22:58', '2024-10-15 07:22:58'),
(7, 2, 'Sejarah Dunia', 'Knowledge Media', 2017, 'Robert Lang', '2024-10-15 07:22:58', '2024-10-15 07:22:58'),
(8, 5, 'Mengenal Komputer', 'Techno Books', 2020, 'Bill Gates', '2024-10-15 07:22:58', '2024-10-15 07:22:58'),
(9, 4, 'Biografi Steve Jobs', 'Inspiring Life', 2015, 'Walter Isaacson', '2024-10-15 07:22:58', '2024-10-15 07:22:58'),
(10, 2, 'Fisika untuk SMA', 'Edukasi Cerdas', 2022, 'Anton Prasetyo', '2024-10-15 07:22:58', '2024-10-15 07:22:58'),
(11, 3, 'Komik Superhero', 'Comic Universe', 2023, 'Clark Kent', '2024-10-15 07:22:58', '2024-10-15 07:22:58'),
(12, 5, 'Menjadi Programmer Hebat', 'Techno Books', 2021, 'Linus Torvalds', '2024-10-15 07:22:58', '2024-10-15 07:22:58'),
(13, 1, 'Novel Romantis', 'Romance Publishi', 2019, 'Jane Austen', '2024-10-15 07:22:58', '2024-10-15 07:22:58'),
(14, 4, 'Biografi Albert Einstein', 'Scientific Minds', 2016, 'Abraham Pais', '2024-10-15 07:22:58', '2024-10-15 07:22:58'),
(15, 1, 'Journey to the West', 'Adventure World', 2020, 'Sun Wukong', '2024-10-17 01:58:02', '2024-10-17 01:58:02'),
(16, 2, 'Belajar Matematika untuk SMP', 'Edukasi Indonesi', 2021, 'Dr. Agus Wibowo', '2024-10-17 01:58:02', '2024-10-17 01:58:02'),
(17, 3, 'Komik Si Juki', 'Komik Indo', 2022, 'Faza Meonk', '2024-10-17 01:58:02', '2024-10-17 01:58:02'),
(18, 4, 'Biografi B.J. Habibie', 'Pustaka Nasional', 2019, 'Ilham Akbar Habibie', '2024-10-17 01:58:02', '2024-10-17 01:58:02'),
(19, 5, 'Teknologi Blockchain', 'Tech Future', 2023, 'Satoshi Nakamoto', '2024-10-17 01:58:02', '2024-10-17 01:58:02'),
(20, 1, 'The Mystery Island', 'Mystery Books', 2016, 'Ellen James', '2024-10-15 07:22:58', '2024-10-15 07:22:58'),
(21, 1, 'The Silent Sea', 'Oceanic Tales', 2018, 'Arthur Gold', '2024-10-17 02:14:09', '2024-10-17 02:14:09'),
(22, 2, 'Kimia Dasar untuk SMA', 'Edukasi Cendikia', 2021, 'Prof. Andi Syahputra', '2024-10-17 02:14:09', '2024-10-17 02:14:09'),
(23, 3, 'Komik Naruto', 'Shonen Jump', 2015, 'Masashi Kishimoto', '2024-10-17 02:14:09', '2024-10-17 02:14:09'),
(24, 4, 'Biografi Soekarno', 'Indonesia Merdek', 2020, 'Cindy Adams', '2024-10-17 02:14:09', '2024-10-17 02:14:09'),
(25, 5, 'Revolusi Industri 4.0', 'Tekno Modern', 2022, 'Dr. Fitriani Putra', '2024-10-17 02:14:09', '2024-10-17 02:14:09'),
(26, 1, 'Love in Paris', 'Romance Books', 2019, 'Marie Claire', '2024-10-17 02:14:09', '2024-10-17 02:14:09'),
(27, 2, 'Fisika Modern', 'Pustaka Pelajar', 2020, 'Dr. Arif Hidayat', '2024-10-17 02:14:09', '2024-10-17 02:14:09'),
(28, 3, 'Komik One Piece', 'Shueisha', 2018, 'Eiichiro Oda', '2024-10-17 02:14:09', '2024-10-17 02:14:09'),
(29, 4, 'Biografi Elon Musk', 'Future Vision', 2021, 'Ashlee Vance', '2024-10-17 02:14:09', '2024-10-17 02:14:09'),
(30, 5, 'Artificial Intelligence for Beginners', 'Tech Insight', 2023, 'John McCarthy', '2024-10-17 02:14:09', '2024-10-17 02:14:09'),
(31, 1, 'The Lost Symbol', 'Mystery Press', 2010, 'Dan Brown', '2024-10-17 02:22:11', '2024-10-17 02:22:11'),
(32, 2, 'Fisika untuk Universitas', 'Academic Publish', 2019, 'Halliday & Resnick', '2024-10-17 02:22:11', '2024-10-17 02:22:11'),
(33, 3, 'Komik Dragon Ball', 'Shueisha', 1995, 'Akira Toriyama', '2024-10-17 02:22:11', '2024-10-17 02:22:11'),
(34, 4, 'Biografi Nelson Mandela', 'Inspiration Hous', 2013, 'Richard Stengel', '2024-10-17 02:22:11', '2024-10-17 02:22:11'),
(35, 5, 'Cybersecurity Basics', 'TechWorld', 2020, 'Kevin Mitnick', '2024-10-17 02:22:11', '2024-10-17 02:22:11'),
(36, 1, 'The Alchemist', 'HarperCollins', 2006, 'Paulo Coelho', '2024-10-17 02:22:11', '2024-10-17 02:22:11'),
(37, 2, 'Kimia Organik Lanjutan', 'Science Publishe', 2018, 'John McMurry', '2024-10-17 02:22:11', '2024-10-17 02:22:11'),
(38, 3, 'Komik Detective Conan', 'Shogakukan', 1994, 'Gosho Aoyama', '2024-10-17 02:22:11', '2024-10-17 02:22:11'),
(39, 4, 'Biografi Mahatma Gandhi', 'Freedom Publishe', 2001, 'Louis Fischer', '2024-10-17 02:22:11', '2024-10-17 02:22:11'),
(40, 5, 'Introduction to Machine Learning', 'MIT Press', 2022, 'Ethem Alpaydin', '2024-10-17 02:22:11', '2024-10-17 02:22:11'),
(41, 1, 'Harry Potter and the Sorcerer\'s Stone', 'Bloomsbury', 1997, 'J.K. Rowling', '2024-10-17 02:22:11', '2024-10-17 02:22:11'),
(42, 2, 'Matematika untuk SMA Kelas 12', 'Edukasi Nusantar', 2021, 'Dr. Irwan Hadi', '2024-10-17 02:22:11', '2024-10-17 02:22:11'),
(43, 3, 'Komik Bleach', 'Shueisha', 2001, 'Tite Kubo', '2024-10-17 02:22:11', '2024-10-17 02:22:11'),
(44, 4, 'Biografi Abraham Lincoln', 'Patriot Press', 2010, 'Doris Kearns Goodwin', '2024-10-17 02:22:11', '2024-10-17 02:22:11'),
(45, 5, 'Quantum Computing Explained', 'FutureTech', 2023, 'David McMahon', '2024-10-17 02:22:11', '2024-10-17 02:22:11'),
(46, 1, 'Pride and Prejudice', 'Penguin Classics', 2003, 'Jane Austen', '2024-10-17 02:22:11', '2024-10-17 02:22:11'),
(47, 2, 'Biologi Dasar untuk SMA', 'Pustaka Pelajar', 2020, 'Neil Campbell', '2024-10-17 02:22:11', '2024-10-17 02:22:11'),
(48, 3, 'Komik Attack on Titan', 'Kodansha', 2009, 'Hajime Isayama', '2024-10-17 02:22:11', '2024-10-17 02:22:11'),
(49, 4, 'Biografi Marie Curie', 'Nobel Publishers', 2006, 'Eve Curie', '2024-10-17 02:22:11', '2024-10-17 02:22:11'),
(50, 5, 'Artificial Intelligence: A Modern Approach', 'Pearson', 2020, 'Stuart Russell & Peter Norvig', '2024-10-17 02:22:11', '2024-10-17 02:22:11'),
(51, 1, 'The Hobbit', 'George Allen & U', 1937, 'J.R.R. Tolkien', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(52, 2, 'Physics for Scientists and Engineers', 'Cengage Learning', 2015, 'Raymond A. Serway', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(53, 3, 'Komik Spiderman', 'Marvel Comics', 1962, 'Stan Lee', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(54, 4, 'Biografi Albert Einstein', 'Oxford Universit', 1996, 'Walter Isaacson', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(55, 5, 'Deep Learning', 'MIT Press', 2016, 'Ian Goodfellow', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(56, 1, 'Moby Dick', 'Harper & Brother', 1851, 'Herman Melville', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(57, 2, 'Fundamentals of Organic Chemistry', 'Brooks/Cole', 2006, 'John E. McMurry', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(58, 3, 'Komik Naruto Shippuden', 'Shueisha', 2007, 'Masashi Kishimoto', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(59, 4, 'Biografi Winston Churchill', 'Penguin Books', 2012, 'Martin Gilbert', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(60, 5, 'Computer Networks', 'Prentice Hall', 2010, 'Andrew S. Tanenbaum', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(61, 1, 'War and Peace', 'The Russian Mess', 1869, 'Leo Tolstoy', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(62, 2, 'Calculus: Early Transcendentals', 'Pearson', 2018, 'James Stewart', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(63, 3, 'Komik One Punch Man', 'Shueisha', 2012, 'Yusuke Murata', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(64, 4, 'Biografi Steve Jobs', 'Simon & Schuster', 2011, 'Walter Isaacson', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(65, 5, 'Introduction to Algorithms', 'MIT Press', 2009, 'Thomas H. Cormen', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(66, 1, '1984', 'Secker & Warburg', 1949, 'George Orwell', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(67, 2, 'Kimia Dasar untuk SMA', 'Erlangga', 2017, 'Raymond Chang', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(68, 3, 'Komik Fairy Tail', 'Kodansha', 2006, 'Hiro Mashima', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(69, 4, 'Biografi Thomas Edison', 'Crown Publishing', 2005, 'Edmund Morris', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(70, 5, 'The Art of Computer Programming', 'Addison-Wesley', 1968, 'Donald E. Knuth', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(71, 1, 'The Catcher in the Rye', 'Little, Brown an', 1951, 'J.D. Salinger', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(72, 2, 'Biologi untuk SMA', 'Erlangga', 2019, 'Neil A. Campbell', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(73, 3, 'Komik Tokyo Ghoul', 'Shueisha', 2011, 'Sui Ishida', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(74, 4, 'Biografi Malcolm X', 'Grove Press', 1965, 'Alex Haley', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(75, 5, 'Clean Code', 'Prentice Hall', 2008, 'Robert C. Martin', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(76, 1, 'To Kill a Mockingbird', 'J.B. Lippincott ', 1960, 'Harper Lee', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(77, 2, 'Fisika Modern', 'Pustaka Pelajar', 2015, 'Paul A. Tipler', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(78, 3, 'Komik Black Clover', 'Shueisha', 2015, 'Yūki Tabata', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(79, 4, 'Biografi Barack Obama', 'Crown Publishing', 2020, 'Barack Obama', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(80, 5, 'Design Patterns: Elements of Reusable Object-Oriented Software', 'Addison-Wesley', 1994, 'Erich Gamma', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(81, 1, 'Great Expectations', 'Chapman & Hall', 1861, 'Charles Dickens', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(82, 2, 'Matematika untuk Universitas', 'Springer', 2019, 'Howard Anton', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(83, 3, 'Komik Death Note', 'Shueisha', 2003, 'Tsugumi Ohba', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(84, 4, 'Biografi Nikola Tesla', 'Penguin Books', 2016, 'W. Bernard Carlson', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(85, 5, 'Artificial Intelligence: Foundations of Computational Agents', 'Cambridge Univer', 2017, 'David L. Poole', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(86, 1, 'Crime and Punishment', 'The Russian Mess', 1866, 'Fyodor Dostoevsky', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(87, 2, 'Introduction to Quantum Mechanics', 'Pearson', 2014, 'David J. Griffiths', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(88, 3, 'Komik My Hero Academia', 'Shueisha', 2014, 'Kohei Horikoshi', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(89, 4, 'Biografi Muhammad Ali', 'Simon & Schuster', 2016, 'David Remnick', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(90, 5, 'Structure and Interpretation of Computer Programs', 'MIT Press', 1996, 'Harold Abelson', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(91, 1, 'Les Misérables', 'A. Lacroix, Verb', 1862, 'Victor Hugo', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(92, 2, 'Statistics for Business and Economics', 'Cengage Learning', 2019, 'Paul Newbold', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(93, 3, 'Komik Attack on Titan', 'Kodansha', 2009, 'Hajime Isayama', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(94, 4, 'Biografi Mahatma Gandhi', 'Penguin Books', 2013, 'Ramachandra Guha', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(95, 5, 'Python Crash Course', 'No Starch Press', 2019, 'Eric Matthes', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(96, 1, 'Brave New World', 'Chatto & Windus', 1932, 'Aldous Huxley', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(97, 2, 'Basic Economics', 'Basic Books', 2014, 'Thomas Sowell', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(98, 3, 'Komik Bleach', 'Shueisha', 2001, 'Tite Kubo', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(99, 4, 'Biografi Marie Curie', 'Doubleday', 1937, 'Eve Curie', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(100, 5, 'The Pragmatic Programmer', 'Addison-Wesley', 1999, 'Andrew Hunt', '2024-10-17 02:29:07', '2024-10-17 02:29:07'),
(101, 1, 'The Shining', 'Doubleday', 1977, 'Stephen King', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(102, 2, 'Advanced Engineering Mathematics', 'Wiley', 2018, 'Erwin Kreyszig', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(103, 3, 'Komik Sailor Moon', 'Kodansha', 1991, 'Naoko Takeuchi', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(104, 4, 'Biografi Leonardo da Vinci', 'Simon & Schuster', 2017, 'Walter Isaacson', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(105, 5, 'The Algorithm Design Manual', 'Springer', 2020, 'Steven S. Skiena', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(106, 1, 'Gone with the Wind', 'Macmillan', 1936, 'Margaret Mitchell', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(107, 2, 'Principles of Microeconomics', 'Cengage Learning', 2017, 'N. Gregory Mankiw', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(108, 3, 'Komik Doraemon', 'Shogakukan', 1969, 'Fujiko F. Fujio', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(109, 4, 'Biografi Bill Gates', 'Penguin Random H', 2015, 'James Wallace', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(110, 5, 'Data Science from Scratch', 'O\'Reilly Media', 2019, 'Joel Grus', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(111, 1, 'The Great Gatsby', 'Charles Scribner', 1925, 'F. Scott Fitzgerald', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(112, 2, 'Fundamentals of Physics', 'Wiley', 2014, 'David Halliday', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(113, 3, 'Komik Dragon Quest', 'Square Enix', 1989, 'Koji Inada', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(114, 4, 'Biografi Elon Musk', 'HarperCollins', 2015, 'Ashlee Vance', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(115, 5, 'Hands-On Machine Learning with Scikit-Learn and TensorFlow', 'O\'Reilly Media', 2018, 'Aurélien Géron', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(116, 1, 'Anna Karenina', 'The Russian Mess', 1878, 'Leo Tolstoy', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(117, 2, 'Biologi SMA Kelas 11', 'Erlangga', 2021, 'Irwan Susanto', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(118, 3, 'Komik One Piece', 'Shueisha', 1997, 'Eiichiro Oda', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(119, 4, 'Biografi Oprah Winfrey', 'Little, Brown an', 2019, 'Kitty Kelley', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(120, 5, 'Introduction to Data Mining', 'Addison-Wesley', 2019, 'Pang-Ning Tan', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(121, 1, 'Wuthering Heights', 'Thomas Cautley N', 1847, 'Emily Brontë', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(122, 2, 'Matematika Dasar untuk SD', 'Grasindo', 2017, 'Murni Suhardi', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(123, 3, 'Komik Hunter x Hunter', 'Shueisha', 1998, 'Yoshihiro Togashi', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(124, 4, 'Biografi Walt Disney', 'Disney Editions', 2001, 'Bob Thomas', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(125, 5, 'Deep Reinforcement Learning Hands-On', 'Packt Publishing', 2020, 'Maxim Lapan', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(126, 1, 'Don Quixote', 'Francisco de Rob', 1605, 'Miguel de Cervantes', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(127, 2, 'Kimia Organik untuk SMA', 'Bumi Aksara', 2019, 'Ahmad Yusuf', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(128, 3, 'Komik Black Butler', 'Square Enix', 2006, 'Yana Toboso', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(129, 4, 'Biografi Franklin D. Roosevelt', 'Random House', 2013, 'Jean Edward Smith', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(130, 5, 'Python for Data Analysis', 'O\'Reilly Media', 2020, 'Wes McKinney', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(131, 1, 'Frankenstein', 'Lackington, Hugh', 1818, 'Mary Shelley', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(132, 2, 'Fisika Kelas 10', 'Erlangga', 2021, 'Teguh Wibowo', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(133, 3, 'Komik Fullmetal Alchemist', 'Square Enix', 2001, 'Hiromu Arakawa', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(134, 4, 'Biografi Steve Wozniak', 'Norton', 2007, 'Steve Wozniak', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(135, 5, 'Learning Python', 'O\'Reilly Media', 2018, 'Mark Lutz', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(136, 1, 'The Catcher in the Rye', 'Little, Brown an', 1951, 'J.D. Salinger', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(137, 2, 'Pelajaran Bahasa Inggris SMP', 'Tiga Serangkai', 2018, 'Rani Pratiwi', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(138, 3, 'Komik Fairy Tail', 'Kodansha', 2006, 'Hiro Mashima', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(139, 4, 'Biografi Marie Curie', 'Doubleday', 1937, 'Eve Curie', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(140, 5, 'The Pragmatic Programmer', 'Addison-Wesley', 1999, 'Andrew Hunt', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(141, 1, 'Brave New World', 'Chatto & Windus', 1932, 'Aldous Huxley', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(142, 2, 'Matematika untuk SMA Kelas 12', 'Erlangga', 2020, 'Nurul Hidayah', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(143, 3, 'Komik Tokyo Ghoul', 'Shueisha', 2011, 'Sui Ishida', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(144, 4, 'Biografi Isaac Newton', 'Penguin Books', 2003, 'James Gleick', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(145, 5, 'Programming Rust', 'O\'Reilly Media', 2021, 'Jim Blandy', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(146, 1, 'Sense and Sensibility', 'Thomas Egerton', 1811, 'Jane Austen', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(147, 2, 'Buku Pelajaran Ekonomi', 'Pustaka Pelajar', 2020, 'Dewi Indrawati', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(148, 3, 'Komik Attack on Titan', 'Kodansha', 2009, 'Hajime Isayama', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(149, 4, 'Biografi John F. Kennedy', 'HarperCollins', 1991, 'Robert Dallek', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(150, 5, 'Kubernetes: Up & Running', 'O\'Reilly Media', 2021, 'Kelsey Hightower', '2024-10-21 04:30:13', '2024-10-21 04:30:13'),
(151, 1, 'The Lord of the Rings', 'Allen & Unwin', 1954, 'J.R.R. Tolkien', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(152, 2, 'Introduction to Algorithms', 'MIT Press', 2009, 'Thomas H. Cormen', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(153, 3, 'Komik Detective Conan', 'Shogakukan', 1994, 'Gosho Aoyama', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(154, 4, 'Biografi Nelson Mandela', 'Little, Brown an', 1995, 'Anthony Sampson', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(155, 5, 'Clean Code', 'Prentice Hall', 2008, 'Robert C. Martin', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(156, 1, 'To Kill a Mockingbird', 'J.B. Lippincott ', 1960, 'Harper Lee', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(157, 2, 'Calculus: Early Transcendentals', 'Cengage Learning', 2015, 'James Stewart', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(158, 3, 'Komik Naruto', 'Shueisha', 1999, 'Masashi Kishimoto', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(159, 4, 'Biografi Winston Churchill', 'Penguin Books', 2002, 'Roy Jenkins', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(160, 5, 'Artificial Intelligence: A Modern Approach', 'Pearson', 2020, 'Stuart Russell', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(161, 1, '1984', 'Secker & Warburg', 1949, 'George Orwell', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(162, 2, 'Physics for Scientists and Engineers', 'Pearson', 2019, 'Douglas C. Giancoli', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(163, 3, 'Komik Bleach', 'Shueisha', 2001, 'Tite Kubo', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(164, 4, 'Biografi Abraham Lincoln', 'Simon & Schuster', 2018, 'David Herbert Donald', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(165, 5, 'Design Patterns: Elements of Reusable Object-Oriented Software', 'Addison-Wesley', 1994, 'Erich Gamma', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(166, 1, 'Pride and Prejudice', 'T. Egerton', 1813, 'Jane Austen', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(167, 2, 'Discrete Mathematics and Its Applications', 'McGraw-Hill Educ', 2018, 'Kenneth H. Rosen', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(168, 3, 'Komik Fairy Tail 2', 'Kodansha', 2006, 'Hiro Mashima', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(169, 4, 'Biografi Mahatma Gandhi', 'Penguin Books', 1998, 'Louis Fischer', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(170, 5, 'Computer Networking: A Top-Down Approach', 'Pearson', 2021, 'James F. Kurose', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(171, 1, 'The Hobbit', 'Allen & Unwin', 1937, 'J.R.R. Tolkien', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(172, 2, 'Linear Algebra and Its Applications', 'Pearson', 2015, 'David C. Lay', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(173, 3, 'Komik Attack on Titan 2', 'Kodansha', 2009, 'Hajime Isayama', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(174, 4, 'Biografi Thomas Jefferson', 'Penguin Random H', 1993, 'R.B. Bernstein', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(175, 5, 'The Art of Computer Programming', 'Addison-Wesley', 2011, 'Donald Knuth', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(176, 1, 'Moby Dick', 'Harper & Brother', 1851, 'Herman Melville', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(177, 2, 'Principles of Quantum Mechanics', 'Springer', 2019, 'R. Shankar', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(178, 3, 'Komik One Punch Man', 'Shueisha', 2012, 'Yusuke Murata', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(179, 4, 'Biografi Albert Einstein', 'Simon & Schuster', 2007, 'Walter Isaacson', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(180, 5, 'Introduction to Machine Learning with Python', 'O\'Reilly Media', 2016, 'Andreas C. Müller', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(181, 1, 'Jane Eyre', 'Smith, Elder & C', 1847, 'Charlotte Brontë', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(182, 2, 'Advanced Mechanics of Materials', 'Wiley', 2012, 'Arthur P. Boresi', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(183, 3, 'Komik Sword Art Online', 'ASCII Media Work', 2009, 'Reki Kawahara', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(184, 4, 'Biografi Theodore Roosevelt', 'HarperCollins', 2010, 'Edmund Morris', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(185, 5, 'You Don\'t Know JS', 'O\'Reilly Media', 2020, 'Kyle Simpson', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(186, 1, 'War and Peace', 'The Russian Mess', 1869, 'Leo Tolstoy', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(187, 2, 'Organic Chemistry', 'Pearson', 2019, 'Paula Yurkanis Bruice', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(188, 3, 'Komik Vinland Saga', 'Kodansha', 2005, 'Makoto Yukimura', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(189, 4, 'Biografi Charles Darwin', 'Penguin Books', 2009, 'Janet Browne', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(190, 5, 'JavaScript: The Good Parts', 'O\'Reilly Media', 2008, 'Douglas Crockford', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(191, 1, 'The Picture of Dorian Gray', 'Lippincott\'s Mon', 1890, 'Oscar Wilde', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(192, 2, 'Mathematical Methods for Physics and Engineering', 'Cambridge Univer', 2020, 'K.F. Riley', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(193, 3, 'Komik My Hero Academia', 'Shueisha', 2014, 'Kohei Horikoshi', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(194, 4, 'Biografi Alexander Hamilton', 'Penguin Books', 2005, 'Ron Chernow', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(195, 5, 'Python Crash Course', 'No Starch Press', 2019, 'Eric Matthes', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(196, 1, 'The Odyssey', 'Ancient Greece', -800, 'Homer', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(197, 2, 'Classical Mechanics', 'Cambridge Univer', 2017, 'Herbert Goldstein', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(198, 3, 'Komik Death Note', 'Shueisha', 2003, 'Tsugumi Ohba', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(199, 4, 'Biografi Sigmund Freud', 'Norton & Company', 2011, 'Peter Gay', '2024-10-21 04:32:41', '2024-10-21 04:32:41'),
(200, 5, 'Fluent Python', 'O\'Reilly Media', 2021, 'Luciano Ramalho', '2024-10-21 04:32:41', '2024-10-21 04:32:41');

-- --------------------------------------------------------

--
-- Table structure for table `borrowing`
--

CREATE TABLE `borrowing` (
  `id` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `borrowing_number` varchar(50) NOT NULL,
  `borrowing_date` date NOT NULL,
  `return_date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `borrowing`
--

INSERT INTO `borrowing` (`id`, `id_member`, `borrowing_number`, `borrowing_date`, `return_date`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(20, 13, 'PJM/171024020', '2024-10-17', '2024-10-23', 'Di Pinjam', '2024-10-17 04:07:32', '2024-10-21 07:04:19', 1),
(21, 20, 'PJM/171024021', '2024-10-19', '2024-10-22', 'Di Pinjam', '2024-10-17 07:49:50', '2024-10-21 02:42:59', 0),
(22, 15, 'PJM/211024022', '2024-10-21', '2024-10-27', 'Di Pinjam', '2024-10-21 04:10:30', '2024-10-21 04:11:07', 0),
(23, 17, 'PJM/211024023', '2024-10-23', '2024-10-31', 'Di Pinjam', '2024-10-21 04:13:41', '2024-10-21 04:13:41', 0),
(24, 3, 'PJM/211024024', '2024-10-03', '2024-10-16', 'Di Pinjam', '2024-10-21 04:58:50', '2024-10-21 04:58:50', 0),
(26, 26, 'PJM/211024025', '2024-10-09', '2024-10-15', 'Di Pinjam', '2024-10-21 06:18:55', '2024-10-21 06:18:55', 0);

-- --------------------------------------------------------

--
-- Table structure for table `borrowing_details`
--

CREATE TABLE `borrowing_details` (
  `id` int(11) NOT NULL,
  `id_borrowing` int(11) NOT NULL,
  `id_book` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `borrowing_details`
--

INSERT INTO `borrowing_details` (`id`, `id_borrowing`, `id_book`) VALUES
(1, 19, 3),
(2, 19, 78),
(3, 19, 95),
(4, 19, 88),
(5, 20, 38),
(6, 20, 68),
(7, 21, 43),
(8, 21, 69),
(9, 21, 93),
(10, 21, 59),
(11, 21, 50),
(12, 21, 34),
(13, 22, 69),
(14, 22, 77),
(15, 22, 50),
(16, 22, 22),
(17, 22, 37),
(18, 22, 52),
(19, 22, 75),
(20, 22, 57),
(21, 23, 7),
(22, 23, 36),
(23, 23, 23),
(24, 23, 1),
(25, 23, 39),
(26, 23, 47),
(27, 23, 13),
(28, 23, 34),
(29, 23, 42),
(30, 23, 65),
(31, 23, 56),
(32, 23, 74),
(33, 23, 91),
(34, 23, 60),
(35, 24, 34),
(36, 25, 3),
(37, 25, 76),
(38, 25, 61),
(39, 25, 194),
(40, 25, 197),
(41, 25, 188),
(42, 26, 6),
(43, 26, 92),
(44, 26, 89),
(45, 26, 121),
(46, 26, 147),
(47, 26, 170),
(48, 26, 194),
(49, 26, 189),
(50, 26, 161),
(51, 26, 177);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Novel', '2024-10-15 07:19:46', '2024-10-15 07:19:46'),
(2, 'Pelajaran', '2024-10-15 07:19:46', '2024-10-15 07:19:46'),
(3, 'Komik', '2024-10-15 07:19:46', '2024-10-15 07:19:46'),
(4, 'Biografi', '2024-10-15 07:19:46', '2024-10-15 07:19:46'),
(5, 'Teknologi', '2024-10-15 07:19:46', '2024-10-15 07:19:46');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(16) NOT NULL,
  `level_name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `level_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2024-10-16 01:53:12', '2024-10-16 01:53:12'),
(2, 'Anggota', '2024-10-16 01:53:20', '2024-10-16 01:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `phone_number` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `member_name`, `phone_number`, `email`, `address`) VALUES
(1, 'John Doe', '081234567890', 'john@gmail.com', 'Jl. Sudirman No. 1, Jakarta'),
(2, 'Jane Smith', '081987654321', 'jane@gmail.com', 'Jl. Thamrin No. 5, Jakarta'),
(3, 'Michael Johnson', '081223344556', 'michael@gmail.com', 'Jl. Gatot Subroto No. 10, Jakarta'),
(4, 'Emily Davis', '081234443322', 'emily@gmail.com', 'Jl. Kuningan No. 8, Jakarta'),
(5, 'David Lee', '081234123456', 'david@gmail.com', 'Jl. Tebet No. 15, Jakarta'),
(6, 'Sophia Wilson', '081255566677', 'sophia@gmail.com', 'Jl. Senayan No. 7, Jakarta'),
(7, 'Daniel Martinez', '081266677788', 'daniel@gmail.com', 'Jl. Cipete No. 11, Jakarta'),
(8, 'Emma Taylor', '081277788899', 'emma@gmail.com', 'Jl. Prapanca No. 4, Jakarta'),
(9, 'James Anderson', '081288899900', 'james@gmail.com', 'Jl. Kemang Raya No. 2, Jakarta'),
(10, 'Olivia Thomas', '081299900011', 'olivia@gmail.com', 'Jl. Melawai No. 9, Jakarta'),
(11, 'Andi Pratama', '081234567890', 'andi.pratama@email.com', 'Jl. Merdeka No. 45, Jakarta'),
(12, 'Budi Santoso', '081234567891', 'budi.santoso@email.com', 'Jl. Sudirman No. 12, Bandung'),
(13, 'Citra Lestari', '081234567892', 'citra.lestari@email.com', 'Jl. Gajah Mada No. 10, Surabaya'),
(14, 'Dewi Wulandari', '081234567893', 'dewi.wulandari@email.com', 'Jl. Diponegoro No. 5, Yogyakarta'),
(15, 'Eko Nugroho', '081234567894', 'eko.nugroho@email.com', 'Jl. Slamet Riyadi No. 3, Solo'),
(16, 'Fajar Setiawan', '081234567895', 'fajar.setiawan@email.com', 'Jl. Ahmad Yani No. 22, Medan'),
(17, 'Gina Permata', '081234567896', 'gina.permata@email.com', 'Jl. K.H. Ahmad Dahlan No. 7, Makassar'),
(18, 'Hendra Wijaya', '081234567897', 'hendra.wijaya@email.com', 'Jl. Pahlawan No. 88, Semarang'),
(19, 'Indra Saputra', '081234567898', 'indra.saputra@email.com', 'Jl. Imam Bonjol No. 9, Bali'),
(20, 'Joko Prasetyo', '081234567899', 'joko.prasetyo@email.com', 'Jl. Jenderal Sudirman No. 14, Jakarta'),
(21, 'William Brown', '081234567001', 'william@gmail.com', 'Jl. Sudirman No. 10, Jakarta'),
(22, 'Elizabeth Johnson', '081234567002', 'elizabeth@gmail.com', 'Jl. Gatot Subroto No. 12, Jakarta'),
(23, 'James Williams', '081234567003', 'james@gmail.com', 'Jl. Thamrin No. 7, Jakarta'),
(24, 'Patricia Jones', '081234567004', 'patricia@gmail.com', 'Jl. Kuningan No. 14, Jakarta'),
(25, 'John Miller', '081234567005', 'john.miller@gmail.com', 'Jl. Senayan No. 3, Jakarta'),
(26, 'Barbara Davis', '081234567006', 'barbara@gmail.com', 'Jl. Prapanca No. 9, Jakarta'),
(27, 'Michael Wilson', '081234567007', 'michael.wilson@gmail.com', 'Jl. Kemang Raya No. 5, Jakarta'),
(28, 'Linda Martinez', '081234567008', 'linda.martinez@gmail.com', 'Jl. Tebet No. 6, Jakarta'),
(29, 'Robert Anderson', '081234567009', 'robert.anderson@gmail.com', 'Jl. Cipete No. 13, Jakarta'),
(30, 'Jennifer Taylor', '081234567010', 'jennifer.taylor@gmail.com', 'Jl. Melawai No. 4, Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `returning_books`
--

CREATE TABLE `returning_books` (
  `id` int(11) NOT NULL,
  `id_borrowing` int(16) NOT NULL,
  `charge` int(16) NOT NULL,
  `status` tinyint(16) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `level` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone_number` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `level`, `name`, `email`, `password`, `gender`, `phone_number`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 'Male', '08123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `borrowing`
--
ALTER TABLE `borrowing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrowing_details`
--
ALTER TABLE `borrowing_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `returning_books`
--
ALTER TABLE `returning_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `borrowing`
--
ALTER TABLE `borrowing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `borrowing_details`
--
ALTER TABLE `borrowing_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `returning_books`
--
ALTER TABLE `returning_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
