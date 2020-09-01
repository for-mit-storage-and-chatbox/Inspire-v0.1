-- Run this or use this file only incase the databaseCreator.php fails to do the intended work. Running this together will only result in a catastrophic situation. 
-- Lol. Just it causes the duplicate tables. Can be corrected back with phpmyadmin or the respective database management software or website
-- Table structure for table `chat_users`
--

CREATE TABLE `chat_users` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `current_session` int(11) NOT NULL,
  `online` int(11) NOT NULL
) ENGINE=mySQL DEFAULT CHARSET=utf8 COLLATE utf8_unicode_ci; 

-- Engine line not required if mySQL is default

--
-- Dumping data for table `chat_users`
--

INSERT INTO `chat_users` (`userid`, `username`, `password`, `avatar`, `current_session`, `online`) VALUES
(1, '2019506001', '2019506001', 'user1.jpg', 3, 0),
(2, '2019506002', '2019506002', 'user2.jpg', 1, 0),
(3, '2019506003', '2019506003', 'user3.jpg', 1, 0),
(4, '2019506004', '2019506004', 'user4.jpg', 0, 0),
(5, '2019506005', '2019506004', 'user5.jpg', 0, 0),
(6, '2019506006', '2019506006', 'user6.jpg', 0, 0);

--
-- Indexes for table `chat_users`
--
ALTER TABLE `chat_users`
  ADD PRIMARY KEY (`userid`);
  
 

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chatid` int(11) NOT NULL,
  `sender_userid` int(11) NOT NULL,
  `reciever_userid` int(11) NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=mySQL DEFAULT CHARSET=utf8 COLLATE utf8_unicode_ci; 

-- Engine line not required if mySQL is default

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chatid`);
  
  

--
-- Table structure for table `chat_login_details`
--

CREATE TABLE `chat_login_details` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_typing` enum('no','yes') NOT NULL
) ENGINE=mySQL DEFAULT CHARSET=utf8 COLLATE utf8_unicode_ci; 

-- Engine line not required if mySQL is default


--
-- Indexes for table `chat_login_details`
--

-- Primary ID field for the table. Can be added in the top. Leave this if you dont mind. LOL
ALTER TABLE `chat_login_details`
  ADD PRIMARY KEY (`id`);
  
  
