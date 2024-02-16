<section class="avtopark container">
        <div class="textov">
            <h1>Наш автопарк</h1>
            <button class="smtr">Смотреть все</button>
        </div>
        <div class="tri container">
            <ul class="catalog">
                <li class="dark">
                    <img src="templates\img/Group 47.png" alt="">
                    Внедорожники
                </li>
                <li class="svet s1">
                    <img src="templates\img/Group 47 (1).png" alt="">
                    Бизнес
                </li>
                <li class="svet s2">
                    <img src="templates\img/Group 48 (1).png" alt="">
                    Спорткар
                </li>
                <li class="svet s3">
                    <img src="templates\img/Group 47 (2).png" alt="">
                   <p>Премиум</p>
                </li>
                <li class="svet s4">
                    <img src="templates\img/Group 47 (3).png" alt="">
                    <p>Комфорт</p>
                </li>
            </ul>
        </div>
<?php 
    require_once ("controllers/connect.php");
    
    $query = "SELECT * FROM catalogg";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    
    echo '<div class = "katalog container">
    <ul class="katal">';
    foreach ($data as $elem){
        $result = '';
        $result .= '
        <li class="vis">
        <div class="img-kat">
        <img src="templates/img/photos/'.$elem['id'].'-'.$elem['nazvan']  .'/main.jpg" alt="">
        </div>';
        $result .= ' <h4>'. $elem['fullname'] . ', '. $elem['god'] . '</h4>';
        $result .= '<div class="text-s2">
            <p> <img src="templates/img/Vector (8).png" alt="">'. $elem['volume'] . ',' . $elem['Dvigatel'] . '</p>
            <p class="pa"> <img src="templates/img/Vector (9).png" alt="">'. $elem['loshadki'] .'</p>
        </div>';
        $result .= '<hr size="1px">';
        $result .= '<div class="cen">
            <button>Забронировать</button><p>от <span>'.$elem['mid'].'</span>руб/сут.</p>
        </div>';
        $result .= '</li>';

        echo $result;
    }
    echo '</ul></div>';

?>
</section>