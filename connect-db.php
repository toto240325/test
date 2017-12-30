<?php

if ($myhost = '192.168.0.147')
{

$dbhost = '192.168.0.147';
$dbuser = 'toto';
$dbpass = 'Toto!';
$mydb = 'test';
} 
elseif ($myhost = 'p702')
{
$dbhost = 'localhost';
$dbuser = 'toto';
$dbpass = 'Toto!';
$mydb = 'test';
} 
elseif ($myhost = 'aws ec2')
{
$dbhost = 'localhost';
$dbuser = 'toto';
$dbpass = 'Toto!';
$mydb = 'test';
} 
elseif ($myhost = 'local')
{
$dbhost = 'localhost:3036';
$dbuser = 'root';
$dbpass = 'Toto!';
$mydb = 'mysql';
}	

?>
