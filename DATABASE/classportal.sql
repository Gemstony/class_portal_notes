
CREATE TABLE `tasks` (
  `task_id` int(11) NOT NULL,
  `task_name` varchar(250) DEFAULT NULL,
  `module_name` varchar(250) DEFAULT NULL,
  `file` varchar(250) DEFAULT NULL,
  `fileDestination` varchar(250) DEFAULT NULL,
  `task_type` varchar(250) DEFAULT NULL,
  `date_aded` date DEFAULT current_timestamp(),
  `year` varchar(10) DEFAULT NULL,
  `semister` varchar(10) DEFAULT NULL,
  `uploader_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `course` varchar(10) DEFAULT NULL,
  `year` varchar(100) DEFAULT NULL,
  `profileimage` varchar(100) DEFAULT NULL,
  `phone_number` int(15) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `users` (`user_id`, `username`, `password`, `course`, `year`, `profileimage`, `phone_number`, `role`) VALUES
(1, 'james', 'james', 'BIT', 'SECOND', 'profiles/profile.png', 653709810, 'SUPER');


ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

ALTER TABLE `tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

