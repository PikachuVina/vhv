<?php 
error_reporting(0);
include("config.php");

//tài khoản mật khẩu truy cập file install
$config['user'] = 'bmn2312'; 
$config['pass'] = 'admin'; 

//thông tin khi cài user admin
$username = 'admin';
$password = 'admin';
$vnd = '100000000';
$limit = '10';

if ($_SERVER['PHP_AUTH_USER'] != $config['user'] || $_SERVER['PHP_AUTH_PW'] != $config['pass']){ 
header('WWW-Authenticate: Basic realm="Login Install"'); 
header('HTTP/1.0 401 Unauthorized'); 
echo "<meta http-equiv='refresh' content='0;url=/loi.html'>";
} 

@mysqli_query($GLOBALS["___BMN_2312"], "CREATE TABLE IF NOT EXISTS `token` ( 
  `id` int(11) NOT NULL AUTO_INCREMENT, 
  `idfb` varchar(32)  NOT NULL, 
  `ten` varchar(32)  NOT NULL, 
  `token` varchar(255)  NOT NULL, 
  PRIMARY KEY (`id`) 
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ; 
"); 
@mysqli_query($GLOBALS["___BMN_2312"], "CREATE TABLE IF NOT EXISTS `account` ( 
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `vnd` int(10) NOT NULL,
  `limit` int(10) NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
"); 
@mysqli_query($GLOBALS["___BMN_2312"], "CREATE TABLE IF NOT EXISTS `vip` ( 
  `id` int(11) NOT NULL AUTO_INCREMENT, 
  `idfb` varchar(32)  NOT NULL, 
  `name` varchar(32)  NOT NULL, 
  `user` varchar(32)  NOT NULL, 
  `goi` varchar(11) NOT NULL, 
  `time` varchar(11) NOT NULL, 
  PRIMARY KEY (`id`) 
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ; 
"); 
@mysqli_query($GLOBALS["___BMN_2312"], "CREATE TABLE IF NOT EXISTS `chat` ( 
  `id` int(11) NOT NULL AUTO_INCREMENT, 
  `idfb` varchar(32) NOT NULL, 
  `name` varchar(32) NOT NULL, 
  `text` varchar(255) NOT NULL, 
  `time` varchar(11) NOT NULL,  
  PRIMARY KEY (`id`) 
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ; 
"); 
@mysqli_query($GLOBALS["___BMN_2312"], "CREATE TABLE IF NOT EXISTS `block` ( 
  `id` int(11) NOT NULL AUTO_INCREMENT, 
  `idfb` varchar(32) NOT NULL, 
  `thoigian` varchar(32) NOT NULL, 
  PRIMARY KEY (`id`) 
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ; 
"); 
@mysqli_query($GLOBALS["___BMN_2312"], "INSERT INTO `ACCOUNT` SET 
  `username`='$username', 
  `password`='$password', 
  `vnd`='$vnd',
  `limit`='$limit'
"); 
?>