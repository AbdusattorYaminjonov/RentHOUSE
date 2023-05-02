<?php require_once './linkk/htmlcode.php';?>
<a href="addHouse.php">Add uy</a>
<form method="post">
<?php $xabar="";?>
    <select name='headline'>
        <option >Turini tanlang</option>
        <option value="hovli">Hovli</option>
        <option value="kvartira">Kvartira</option>
        <option value="dacha">Dacha</option>
        <option value="kottedj">Katedj</option>
    </select><br>
    <input type='number' name='room_min' placeholder='minimal hona soni' ><br>
    <?php echo $xabar ?>
    <input type='number' name='room_max' placeholder='maksimal hona soni' >
    <input class="btn inpt" type="submit" value="Qidirish" ><br><br>
</form>
<?php

$link = mysqli_connect("localhost", "root", "")
or die("Serverga bog'lanmadi : " . mysqli_error($link));
mysqli_select_db($link, "renthouse") or die("Bazaga bog'lanmadi");

//minimal honadan yuqori honalarga tekshirish
$xona_soni="";
if (isset($_POST['room_min']) && (int)($_POST['room_min'])>0){
        $xona_soni = " and rooms>={$_POST['room_min']} ";
}
if ( (int)($_POST['room_min'])<0){
    echo 'manfiy son kiritmang<br>';
}

//maxsimal honadan minimal honaga tekshirish
$xona_soni1="";
if(isset($_POST['room_max']) && (int)($_POST['room_max']>0)){
    echo "max          ";
    $xona_soni1=" and  rooms<={$_POST['room_max']} ";
}



$hovli="hovli";
$kvartira="kvartira";
$dacha="dacha";
$kottedj="kottedj";

//hona turiga qarab tekshirish
$turi="";
if(isset($_POST['headline'])){
    if($_POST['headline'] == $hovli){
        $turi="and type ='{$_POST['headline']}'";
    }
    if($_POST['headline'] == $kvartira){
        $turi="and type ='{$_POST['headline']}'";
    }
    if($_POST['headline'] == $dacha){
        $turi="and type ='{$_POST['headline']}'";
    }
    if($_POST['headline'] == $kottedj){
        $turi="and type ='{$_POST['headline']}'";
    }

}

//  MYSQlda ekranga qidirish oqrqali chiqarish
    $query = "SELECT * FROM uy WHERE 1=1 ".$xona_soni .$xona_soni1 .$turi;
/*echo $query;
echo 1;*/
    $result = mysqli_query($link, $query) or die("So'rov ishlamadi : " . mysqli_error($link));
/*echo 1;*/
    print "<table class='jadval' border=1><tr><th>Sarlavha</th><th>Turi</th>
<th>Honalar</th><th>Uy qavati</th><th>Uy holati</th><th>Odamlar soni</th><th>Narxi</th><th></th><th></th></tr>\n";
    while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        print "<tr>";
        print "<td>{$line['headline']}</td>";
        print "<td>{$line['type']}</td>";
        print "<td>{$line['rooms']}</td>";
        print "<td>{$line['floors']}</td>";
        print "<td>{$line['status']}</td>";
        print "<td>{$line['human']}</td>";
        print "<td>{$line['price']}</td>";
        print "<td>{$line['photo']}</td>";
        print "<td><a  href='edit.php?id={$line['id']}'> yangilash</a></td>";
        print "</tr>";
    }
    print "</table>\n";

    mysqli_free_result($result);
    mysqli_close($link);

    ?>




<?php require_once './linkk/footer.php'?>


