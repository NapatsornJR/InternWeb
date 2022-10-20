<?php
    if(isset($_GET['controller']) && isset($_GET['action'])){
        $controller = $_GET['controller'];
        $action = $_GET['action'];

    }
    else{   $controller= 'announce'; 
        $action = 'index';

    }

?>

<html>
<head>
    <script src="https://kit.fontawesome.com/52356c6bf9.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
</head>

<body>
<!--[<a href="?controller=pages&action=home">Home </a>]
    [<a href="?controller=quotation&action=index">Quotation</a>]
-->

    <div class="top_nav">
        <div class="project_name">
            ระบบบริหารจัดการการฝึกงานแบบออนไลน์
        </div> 

        <div class="login_botton">
            <a href="?controller=login&action=index">
                <div class="login_text">
                    Login KU
                    <i class="fa-solid fa-right-to-bracket" style="font-size:12px; margin-left:3px"></i>
                </div>
            </a>
        </div>  
        
    </div>

    <div class="nav">
        <div class="logoKU">
            <img src="img/Logo KU.png" style="width: 45px; height: 60px;">
        </div>
        <a href="?controller=announce&action=index">
            <div class="nav_menu">
                <i class="fa-solid fa-bullhorn" style="margin-left:20px; margin-right:13px; margin-top:10px; font-size:21px; color:white;"></i>
                <div class="text_menu">
                    ประกาศ
                </div>
            </div>
        </a>

        <a href="?controller=document&action=index">
            <div class="nav_menu">
                <i class="fa-regular fa-file" style="margin-left:20px; margin-right:15px; margin-top:10px; font-size:23px; color:white;"></i>
                <div class="text_menu">
                    เอกสาร
                </div>
            </div>
        </a>

        <div class="nav_menu">
            <i class="fa-regular fa-building" style="margin-left:20px; margin-right:15px; margin-top:10px; font-size:23px; color:white;"></i>
            <div class="text_menu">
                สถานประกอบการ
            </div>
        </div>

    </div>
        
    <?php require_once("./routes.php"); ?>
</body>

<style>
*,*::after {
    
}

body {
    text-align: center;
    font-family: 'Noto Sans Thai', sans-serif;
}

a {
    text-decoration: none;
}

.logoKU {
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 25px;
}

.project_name {
    font-size: 32px;
    font-weight: bold;
    color: #04AA6D;
    display: flex;
    margin-left: 205px;
    margin-top: 12px;
    text-shadow: -0.5px -0.5px 0 #585D66,  
                  0.5px -0.5px 0 #585D66,
                 -0.5px 0.5px 0 #585D66,
                  0.5px 0.5px 0 #585D66;
    display: flex;
    margin-left: 205px;
    margin-top: 12px;
}

.nav { 
    width: 100%;
    height: 100%;
    position: fixed;
    background-color: #1C6758;
    margin-right: 45px;
    top: 0;
    left: 0;
    padding-top: 12px;
    min-width: 120px;
    max-width: 160px;
}

.top_nav {
    width: 100%;
    height: 70px;
    position: fixed;
    background-color: white;
    top: 0;
    box-shadow: 0px 2px 20px #cccccc;
}

.top_menu {
    width: fit-content;
    height: fit-content;
    position: relative;
    left: calc(100% - 100px);
    margin-top: 20px;
}

.login_botton {
    width: 90px;
    height: 30px;
    background-color: white;
    border-radius: 10px;
    text-align: center;
    cursor: pointer;
    left: calc(100% - 120px);
    position: relative;
    top: -40px;
}

.login_botton:hover {
    background-color: #5DBE93;
    transition: 0.5s ease;
    cursor: pointer;
}

.login_text {
    width: 90px;
    height: 30px;
    font-size: 12px;
    font-weight: bold;
    text-align: center;
    color: #5DBE93;
    padding-top: 6px;
    margin: auto;
    text-decoration: none;
}

.login_text:hover {
    color: white;
    transition: 0.5s ease;
}

.nav_menu {
    width: 100%;
    height: 50px;
    position: relative;
    display: flex;
    align-content: center;
    margin-bottom: 15px;
    cursor: pointer;
}

.nav_menu:active {
    border-style: none none none solid;
    border-color: white;
    border-width: 4px;
}

.nav_menu:hover {
    background-color: #568986;
    transition: 0.5s ease;
}

.text_menu {
    font-size: 14px;
    color: white;
    margin-top: 13px;
}

.overlay {
  background-color: #000;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 99;
  pointer-events: none;
  opacity: 0;
}
.modal_login {
  background-color: #fff;
  border-radius: 15px;
  width: 100%;
  max-width: 540px;
  padding-bottom: 20px;
  position: fixed;
  top: 50%;
  left: 50%;
  z-index: 100;
  pointer-events: none;
  opacity: 0;
}

input[type="checkbox"]:checked ~ .modal_login {
  pointer-events: auto;
  opacity: 1;
}
input[type="checkbox"]:checked ~ .overlay {
  pointer-events: auto;
  opacity: 0.75;
}

</style>
</html>