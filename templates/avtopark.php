<section class="avtopark container">
        <div class="textov">
            <h1>Наш автопарк</h1>
            <button class="smtr">Смотреть все</button>
        </div>
        <div class="tri container">
            <ul class="catalog">
                <li>
                    <button class="button-cat dark" data-category="suv">
                    <img src="templates\img/Group 47.png" alt=""> 
                    <p>Внедорожники</p> 
                    </button>
                </li>
                <li >
                    <button class="button-cat svet s1" data-category="business">
                    <img src="templates\img/Group 47 (1).png" alt="">
                    <p>Бизнес</p> 
                    </button>
                </li>
                <li>
                    <button class="button-cat svet s1" data-category="sport">
                    <img src="templates\img/Group 48 (1).png" alt="">
                    <p>Спорткар</p> 
                    </button>
                </li>
                <li>
                    <button class="button-cat svet s1" data-category="premium">
                    <img src="templates\img/Group 47 (2).png" alt="">
                    <p>Премиум</p>
                   </button>
                </li>
                <li>
                    <button class="button-cat svet s1" data-category="comfort">
                    <img src="templates\img/Group 47 (3).png" alt="">
                    <p>Комфорт</p>
                    </button>
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
        <li class="vis-biba '.$elem['categoria'] .'">
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

<script>
    let buttons = document.querySelectorAll('.button-cat')

    let category = new Map([
        ['suv', document.querySelectorAll('.Внедорожник')],
        ['business', document.querySelectorAll('.Бизнес')],
        ['sport', document.querySelectorAll('.Спорткар')],
        ['premium', document.querySelectorAll('.Премиум')],
        ['comfort', document.querySelectorAll('.Комфорт')]
    ]); 
    let allCards = document.querySelectorAll('.vis-biba')
    function DisplayCards(cat) {
            allCards.forEach((card) => {
            card.style.display = 'none'
        })
        category.get(cat).forEach((card) => {
            card.style.display = 'block'
        })
    }
    for (let button of buttons) {
        button.addEventListener("click", function() {
            if (!button.classList.contains("butact")) {
                console.log("Нажатие на неактивную кнопку")
                buttons.forEach((button) => {
                    button.classList.remove("butact") // убираем класс у всех кнопок
                    this.classList.add("butact") // добавляем класс к нажатой кнопке
                })
            DisplayCards(this.dataset.category)
            } else {
            console.log("Нажатие на активную кнопку")
        }
    })
    }

    document.querySelector('.textov button').addEventListener('click', function(evt) {
        evt.preventDefault();
        allCards.forEach((card) => {
            card.style.display = 'block';
        })
        buttons.forEach((button) => {
            button.classList.remove("button-active")
        })
    })
</script>