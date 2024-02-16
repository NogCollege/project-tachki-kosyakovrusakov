<?php 
    require_once('connect.php');

    if ($link->connect_error) {
        die("Ошибка подключения к базе данных: " . $link->connect_error);
    }

    $sql = "SELECT id, nazvan FROM catalogg";
    $result = $link->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $name = $row["nazvan"];
            $folderName = $id . "-" . preg_replace("/[^A-Za-z0-9]/", "", $name);

            $folderPath = "../templates/img/photos/" . $folderName;
            if (!is_dir($folderPath)) {
                mkdir($folderPath);
                echo "Папка " . $folderName . " успешно создана.<br>";
            }
        }
    } else {
        echo "Нет данных об автомобилях в базе.";
    }

    $link->close();

?>