<table>
    <tr>
        <th>id </th>
        <th>nazvan</th>
        <th>gorod</th>
        <th>categoria</th>
        <th>fullname</th>
        <th>god</th>
        <th>Dvigatel</th>
        <th>volume</th>
        <th>loshadki</th>
        <th>max</th>
        <th>mid</th>
        <th>min</th>
        <th>opisanie</th>
        <th>delete</th>
    </tr>


<? 
    require_once('controllers/connect.php');
    
   if(isset($_GET['delet'])){
    $delet = $_GET['delet'];
    $query= "INSERT INTO `deleted` SELECT * FROM `catalog` WHERE `id` = 4
    DELETE FROM `catalog` WHERE `id` = 4";
    mysqli_query($link,$query) or die (mysqli_error($link));
   }

    $query = "SELECT * FROM catalogg";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

    echo '<table>';
    foreach($data as $elem);{
        $result = '';
        $result .='<tr>';
        $result .='<td>' .$elem['nazvan']. '</td>';
        $result .='<td>' . $elem['gorod']. '</td>';
        $result .='<td>' .$elem['categoria']. '</td>';
        $result .='<td>' .$elem['fullname']. '</td>';
        $result .='<td>' .$elem['god']. '</td>';
        $result .='<td>' .$elem['Dvigatel']. '</td>';
        $result .='<td>' .$elem['volume']. '</td>';
        $result .='<td>' .$elem['loshadki']. '</td>';
        $result .='<td>' .$elem['max']. '</td';
        $result .='<td>' .$elem['mid']. '</td';
        $result .='<td>' .$elem['min']. '</td';
        $result .='<td>' .$elem['opisanie']. '</td';
        $result .= '<td><a href="">удалить</a></td>';

        $result .='</tr>';
    }
    echo '</tr>'
?>
</table>
