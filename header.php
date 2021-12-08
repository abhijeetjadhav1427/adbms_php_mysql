<?php
    include 'db/dbconnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="./admin/images/rnxglogo_white.png" type="image/x-icon" />
    
    <style type="text/css">
		*{
			padding: 0;
			margin: 0;
			text-decoration: none;
			list-style: none;
			box-sizing: border-box;

		}
		nav{
			background-color: #404040;
			height: 60px;
			width: 100%;
		}
		
		a.ab.active, a.ab:hover{
			border-bottom: 2px solid blue;
		}
		.mycheckbutton{
			color: white;
			font-size: 26px;
			float: left;
			line-height: 60px;
			margin-left: 22px;
			cursor: pointer;
			display: block;
		}
		@media (max-width: 1200px){
			ul{
				position: fixed;
				width: 100%;
				height: 0;
				opacity: 1;
				background-color: #000;
				top: 60px;
				left: -100%;
				text-align: center;
				transition: height, width 0.6s, 0.7s ease-in-out;
				opacity: 0.93;
                z-index: 50;
			}
			a.ab.active,a.ab:hover{
				background: none;
				border-bottom: 2px solid blue;
				color: blue;
			}
		}
	</style>
    <link href="css/prism.css" rel="stylesheet" />
</head>
<body>
    
<nav>
    <label class="mycheckbutton">
        Blogs
    </label>
</nav>