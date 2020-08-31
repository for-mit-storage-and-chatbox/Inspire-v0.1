<?php
//If needed reference, [include "assets/"intended_location"/"destination_file";]
//Don't like the lines 5 to 8 in this php file which was included? Copy the lines 5 to 8 to a file such as config.php and link it using the include or required php prototype

ob_start(); //Turns on output buffering - avoids user irritation - lol 
session_start();
$timezone = date_default_timezone_set('Asia/Kolkata');
$con = mysqli_connect("localhost", "root", "", "chat_box"); //Connection variable - Connects PHP script file to our database
//Feel free to change the username "root" or the password or the database name. In this case, "chat_box" is the database name. Create a dabase before you run this page.

CREATE TABLE `chat_users` (
`userid` int(11) NOT NULL, `username` varchar(255) NOT NULL, `password` varchar(255) NOT NULL, `avatar` varchar(255) NOT NULL, `current_session` int(11) NOT NULL,
`online` int(11) NOT NULL ) ENGINE=mySQL DEFAULT CHARSET=utf8 COLLATE utf8_unicode_ci; //Engine line not required if mySQL is default

// Insert few users record
INSERT INTO `chat_users` (`userid`, `username`, `password`, `avatar`, `current_session`, `online`) VALUES
(1, '2019506001', '2019506001', 'user1.jpg', 3, 0),
(2, '2019506002', '2019506002', 'user2.jpg', 1, 0),
(3, '2019506003', '2019506003', 'user3.jpg', 1, 0),
(4, '2019506004', '2019506004', 'user4.jpg', 0, 0),
(5, '2019506005', '2019506004', 'user5.jpg', 0, 0),
(6, '2019506006', '2019506006', 'user6.jpg', 0, 0); 

//Make a while loop if we're gonna use multiple accounts with ease. 
//A random function to allocate a default avatar within some six to ten default images
//Contact for random function or while loop if required.

// Create chat table to store chat details.

CREATE TABLE `chat` (
`chatid` int(11) NOT NULL,
`sender_userid` int(11) NOT NULL,
`reciever_userid` int(11) NOT NULL,
`message` text NOT NULL,
`timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`status` int(1) NOT NULL
) ENGINE=mySQL DEFAULT CHARSET=utf8 COLLATE utf8_unicode_ci; //Engine line not required if mySQL is default

// Create chat_login_details table to store logged in chat activity

CREATE TABLE `chat_login_details` (
`id` int(11) NOT NULL,
`userid` int(11) NOT NULL,
`last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`is_typing` enum('no','yes') NOT NULL
) ENGINE=mySQL DEFAULT CHARSET=utf8 COLLATE utf8_unicode_ci; //Engine line not required if mySQL is default


//To make sure, the database was created successsfully and to check whether the PHP connection variable is able to connect to the database and its table
if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}
else{
  echo "Appropriate tables was created inside the intented database and the connection was established successfully. You don't require this file anymore!" ;
}

?>
