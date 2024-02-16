<section class="avtopark container">
        <div class="textov">
            <h1>Наш автопарк</h1>
            <button class="smtr">Смотреть все</button>
        </div>
        <div class="tri container">
            <ul class="catalog">
                <li>
                    <button class="button-cat dark" data-category="Внедорожники">
                    <img src="templates\img/Group 47.png" alt=""> 
                    Внедорожники
                    </button>
                </li>
                <li >
                    <button class="button-cat svet s1" data-category="Бизнес">
                    <img src="templates\img/Group 47 (1).png" alt="">
                    Бизнес
                    </button>
                </li>
                <li>
                    <button class="button-cat svet s1" data-category="Спорткар">
                    <img src="templates\img/Group 48 (1).png" alt="">
                    Спорткар
                    </button>
                </li>
                <li>
                    <button class="button-cat svet s1" data-category="Премиум">
                    <img src="templates\img/Group 47 (2).png" alt="">
                   <p>Премиум</p>
                   </button>
                </li>
                <li>
                    <button class="button-cat svet s1" data-category="Комфорт">
                    <img src="templates\img/Group 47 (3).png" alt="">
                    <p>Комфорт</p>
                    </button>
                </li>
            </ul>
        </div>
    <script>
        let buttons = document.querySelectorAll('.button-cat')

        let category = new Map([
        ['Внедорожники', document.querySelectorAll('.cat-Внедорожники')],
        ['Бизнес', document.querySelectorAll('.cat-Бизнес')],
        ['Спорткар', document.querySelectorAll('.cat-Спорткар')],
        ['Премиум', document.querySelectorAll('.cat-Премиум')],
        ['Комфорт', document.querySelectorAll('.cat-Комфорт')]
]); 
        let allCards = document.querySelectorAll('.catalog-list-item')
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
                if (!button.classList.contains("button-active")) {
                    console.log("Нажатие на неактивную кнопку")
                    buttons.forEach((button) => {
                        button.classList.remove("button-active") // убираем класс у всех кнопок
                        this.classList.add("button-active") // добавляем класс к нажатой кнопке
                    })
                DisplayCards(this.dataset.category)
                } else {
                console.log("Нажатие на активную кнопку")
            }
        })
    }

</script>
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