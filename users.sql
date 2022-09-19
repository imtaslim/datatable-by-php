CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;