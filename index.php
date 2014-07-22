<?php 
header('Content-type: text/html; charset=utf-8');
echo ("<?xml version=\"1.0\" encoding=\"utf-8\"?>\n");
include_once 'assets/head.htm';

$lang = $_GET["lang"];
$page = $_GET["page"];
if($lang && is_dir('content/'.$lang) && file_exists('content/'.$lang.'/config.php'))
{
	include_once 'content/'.$lang.'/config.php';
	include_once 'assets/menu.php';
	if($page == "about" && file_exists('content/'.$lang."/".$content))
		include_once 'content/'.$lang."/".$content;
	if($page == "contacts" && file_exists('content/'.$lang."/".$contacts))
		include_once 'content/'.$lang."/".$contacts;
}
else
{
	include_once 'content/home.htm';
}
include_once 'assets/end.htm'; ?>