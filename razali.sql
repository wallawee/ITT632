CREATE TABLE `razali` (
  `name` varchar(255) NOT NULL,
  `ic` varchar(255) NOT NULL,
  `studentid` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `razali` (`name`, `ic`, `studentid`, `address`, `phone`, `age`, `gender`, `email`, `images`) VALUES
('Mohammad Razali Bin Mohd Bajuri', '011018101285', '2022923973', 'Sabak Bernam, Selangor, Malaysia', '0126161285', 22, 'Men', 'sapentah40@gmail.com', 'razali.jpg');
