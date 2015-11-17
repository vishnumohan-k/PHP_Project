<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
        <link rel="stylesheet" type='text/css' href="style/stylesheet.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">
                Web Scraper
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">Login</a></li>
                    <li><a href="index.php">About</a></li>
                    <li><a href="index.php">Contact us</a></li>
           
                </ul>
            </nav>
            <div id="content_area">
                <?php echo $content ?>
            </div>
            <div id="sidebar">
            </div>
            <footer>
                <p>All rights reserved</p>
            </footer>
                
        </div>
    </body>
</html>
