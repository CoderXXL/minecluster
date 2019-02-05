<?php
include("../php/config.php");
header("Content-type: text/css; charset: UTF-8");
?>
@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i');
@import url('https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i');


body{
	margin: 0;
	background-color: <?php echo $bg_color; ?>;
	font-family: <?php echo $fontType ?>
	font-weight: 300;
}

.container{
	width: 80%;
	margin: 0 auto;
}

header{
	background: <?php echo $navbar_color; ?>;
	box-shadow: 0px 6px 1px <?php echo $Shadow_color; ?>;
}

header::after {
	content: '';
	display: table;
	clear: both;
}

.logo{
	float: left;
	padding: 10px 0;
}

nav{
	float: right;
}

nav ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

nav li {
	display: inline-block;
	margin-left: 70px;
	padding-top: 30px;
	
	position: relative;
}

nav a {
	color: <?php echo $Schrift_color; ?>;
	text-decoration: none;
	text-transform: uppercase;
	font-size: 22px;
    font-weight: bold;
}

nav a:hover{
	color: <?php echo $SchriftHover_color; ?>;
}

nav a::before{
	content: '';
	display: block;
	height: 5px;
	background-color: <?php echo $SchriftHover_color; ?>;
	
	position: absolute;
	top: 0;
	width: 0%;
	
	transition: all ease-in-out 250ms;
}

nav a:hover::before{
	width: 100%;
}

.Schrift1{
    font-family: <?php echo $fontType ?>;
    font-weight: bold;
    font-size: 25px;
    color: <?php echo $Uberschrift_color; ?>;
}
.Schrift2{
    color: <?php echo $Uberschrift_color; ?>;
    font-family: <?php echo $fontType ?>;
}

.Schrift3 {
    color: <?php echo $copyright; ?>;
    font-family: <?php echo $fontType ?>;
    text-align: center;
}
.Schrift3 a{
    text-decoration: none;
	text-transform: uppercase;
    color: <?php echo $copyright; ?>;
    font-size: 12px;
}

.buttonm{
   background-color: <?php echo $ModButton_color; ?>;
   border: none;
   color: <?php echo $ModButtonSchrift_color; ?>;
   padding: 20px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   margin: 4px 2px;
   cursor: pointer;
   width: 100%;
   box-shadow: 0px 4px 1px <?php echo $ModButtonShadow_color; ?>;
   font-family: <?php echo $fontType ?>;
   font-weight: bold;
}

.buttonk{
   background-color: #8E8E8E;
   border: none;
   color: <?php echo $DevButtonSchrift_color; ?>;
   padding: 20px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   margin: 4px 2px;
   cursor: pointer;
   width: 100%;
   box-shadow: 0px 4px 1px #666666;
   font-family: 'Open Sans', sans-serif;
   font-weight: bold;
}

.button1{border-radius: 4px;}

.buttonm:hover{
    transition: all ease-in-out 550ms;
    background-color: <?php echo $ModButtonShadow_color; ?>;
    box-shadow: 0px 4px 1px <?php echo $ModButtonShadow_color; ?>;
}

.buttonb{
   background-color: <?php echo $BuilderButton_color; ?>;
   border: none;
   color: <?php echo $BuilderButtonSchrift_color; ?>;
   padding: 20px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   margin: 4px 2px;
   cursor: pointer;
   width: 100%;
   box-shadow: 0px 4px 1px <?php echo $BuilderButtonShadow_color; ?>;
   font-family: <?php echo $fontType ?>;
   font-weight: bold;
}

.buttonb:hover{
    transition: all ease-in-out 550ms;
    background-color: <?php echo $BuilderButtonShadow_color; ?>;
   box-shadow: 0px 4px 1px <?php echo $BuilderButtonShadow_color; ?>;
}

.buttond{
   background-color: <?php echo $DevButton_color; ?>;
   border: none;
   color: <?php echo $DevButtonSchrift_color; ?>;
   padding: 20px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   margin: 4px 2px;
   cursor: pointer;
   width: 100%;
   box-shadow: 0px 4px 1px <?php echo $DevButtonShadow_color; ?>;
   font-family: <?php echo $fontType ?>;
   font-weight: bold;
}

.buttond:hover{
    transition: all ease-in-out 550ms;
    background-color: <?php echo $DevButtonShadow_color; ?>;
    box-shadow: 0px 4px 1px <?php echo $DevButtonShadow_color; ?>;
}

label{
    font-family: <?php echo $fontType ?>;
    font-weight: bold;
    font-size: 18px;
    color: <?php echo $Uberschrift_color; ?>;
}

input[type=text] {
    font-family: <?php echo $fontType ?>;
    font-weight: bold;
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
    border-radius: 2px;
	background-color: <?php echo $formular; ?>;
	color: <?php echo $formularfont_color; ?>;
}

input[type=text]:focus {
    border: 3px solid <?php echo $formularborder_color; ?>;
}

input[type=email] {
    font-family: <?php echo $fontType ?>;
    font-weight: bold;
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
    border-radius: 2px;
	background-color: <?php echo $formular; ?>;
	color: <?php echo $formularfont_color; ?>;
}

input[type=email]:focus {
    border: 3px solid <?php echo $formularborder_color; ?>;
}

select[type=pickup_place]{
    font-family: <?php echo $fontType ?>;
    font-weight: bold;
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
    border-radius: 2px;
	background-color: <?php echo $formular; ?>;
	color: <?php echo $formularfont_color; ?>;
}

select[type=pickup_place]:focus {
    border: 3px solid <?php echo $formularborder_color; ?>;
}

textarea{
    font-family: <?php echo $fontType ?>;
    font-weight: bold;
    width: 100%;
    padding: 12px 20px;
    margin: 5px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
    border-radius: 2px;
	background-color: <?php echo $formular; ?>;
	color: <?php echo $formularfont_color; ?>;
}

textarea:focus {
    border: 3px solid <?php echo $formularborder_color; ?>;
}

input[type=submit] {
	float: right;
	background-color: <?php echo $ModButton_color; ?>;
	border: none;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	margin: 4px 2px;
	cursor: pointer;
	font-size: 20px;
    font-family: <?php echo $fontType ?>;
    font-weight: bold;
    width: 100%;
    border-radius: 6px;
    box-shadow: 0px 4px 1px <?php echo $ModButtonShadow_color; ?>;
}
