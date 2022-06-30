<?php

require_once 'functions.php';

$root_dir = $_SERVER['DOCUMENT_ROOT'].'/gulp-sass-boilerplate/';
$path_domain = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$GLOBALS["app"] = array(
	'root_dir'	=> $root_dir,
	'path' 		=> $path_domain,
	'static'	=> $path_domain.'static'
);


if(!@include( urlRoutes()['page-file'] ) )
{
	include 'pages/404.php';
}