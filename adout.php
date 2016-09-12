<!DOCTYPE>
<html lang="ru">
<?php
$name ='Big Man'; 
$age ='33'; 
$email ='naidem-klientov@ya.ru'; 
$city ='Moscow'; 
$aboutme ='20 centimeters'; ?>
    <head>
        <title>Homework</title>
        <meta charset="utf-8">
        <style>
            body {
                font-family: sans-serif;  
            }
            
            dl {
                display: table-row;
            }
            
            dt, dd {
                display: table-cell;
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h1>Shortly about myself</h1>
        <dl>
            <dt>Name</dt>
            <dd><?php echo $name;?></dd>
        </dl>
        <dl>
            <dt>Age</dt>
            <dd><?php echo $age;?></dd>
        </dl>
        <dl>
            <dt>E-mail</dt>
            <dd><?php echo $email;?></a></dd>
        </dl>
        <dl>
            <dt>City</dt>
            <dd><?php echo $city;?></dd>
        </dl>
        <dl>
            <dt>About me</dt>
            <dd><?php echo $aboutme;?></dd>
        </dl>
    </body>
</html>
