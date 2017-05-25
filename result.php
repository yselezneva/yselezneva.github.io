<?php
  //подключаемся к базе данных
//имя пользователя БД
$dbuser = "root";
//пароль пользователя БД
$dbpassword = "";
//имя БД
$dbname = "selezneva";
//поключаемся к БД
$connect = mysqli_connect ("localhost", $dbuser,$dbpassword, $dbname);
$doquery = mysqli_query ($connect, "SELECT * FROM forma");
?>
  <html>
  <body>
       <link rel="stylesheet" href="style.css">
     

	<div class="logo">
	<img src="логотип банка.png" width="500" height="150" alt="Логотип банка">
    </div>
    
      <div class="menu">
		<a href="o banke.html">О банке</a>
		<a href="kontakt inform.html">Контактная информация</a>
    <a href="for life.html">Для жизни</a>
    <a href="for business.html">Для бизнеса</a>
      
	</div>
      
  
   <div id = "table">
<table border="1">
  <thead>
 <tr>
  <th>Ф.И.О.</th>
  <th>Контактный телефон</th>
  <th>E-mail</th>
  <th>Город</th>
  <th>Тема</th>
 
  </thead>
  <tbody>
     
      <?php
while ($data = mysqli_fetch_array($doquery))
 {
     echo '<tr>';
     echo '<td>' . $data['fio'] . '</td>';
      echo '<td>' . $data['telefon'] . '</td>';
       echo '<td>' . $data['email'] . '</td>';
       echo '<td>' . $data['city'] . '</td>';
        echo '<td>' . $data['topic'] . '</td>';
        
         
 echo '</tr>';
     
 }
   
     
 ?>