<?php
   $host = 'localhost'; 
   $user = 'root'; 
   $password = ''; 
   $db_name = 'sait'; 
   $link = mysqli_connect($host, $user, $password, $db_name);
   
   $sql = "SELECT id, name FROM catalogg";
   $result = mysqli_query($link, $sql);
   
   if (mysqli_num_rows($result) > 0) {
       while ($row = mysqli_fetch_assoc($result)) {
           $folderName = $row['id'] . '-' . strtolower(str_replace(' ', '', $row['fullname']));
           $folderPath = 'templates/img/photos/' . $folderName;
   
           if (!is_dir($folderPath)) {
               mkdir($folderPath);
               echo "Папка $folderName успешно создана<br>";
           }
       }
   } else {
       echo "Нет доступных автомобилей";
   }
   
   mysqli_close($link);
?>