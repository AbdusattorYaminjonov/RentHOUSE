<?php
require_once 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <!--        <input type="text" name="son">
            <input type="submit" value="Uzatish">-->
    <?php
        echo "<input type='text' name='headline' placeholder='uynomi'>";
        echo "<input type='text' name='turi' placeholder='turi'>";
        echo "<input type='number' name='xonalar' placeholder='xona soni'>";
        echo "<input type='number' name='qabvatlar_soni' placeholder='nechi etadj'>";
        echo "<input type='text' name='uy_holati' placeholder='uy holati'>";
        echo "<input type='number' name='odam_soni' placeholder='odamlar soni'>";
        echo "<input type='number' name='narxi' placeholder='Narxi'>";
        echo "<input type='text' name='fulladres' placeholder='toliq manzil'>";
    ?>

    <input type="hidden" name="soni" value="8">
    <input type="submit" value="Qo'shish" name="submit"><br><br>
    <?php
/*        echo "<input type='number' name='id' placeholder='id'>";
    */?><!--
    input type="submit" value="O'chiriash" name="delet"><br>
</form>*/
<?php


    if (isset($_POST['submit'])) {
        $headline = $_POST['headline'];
        $type = $_POST['turi'];
        $rooms = $_POST['xonalar'];
        $flor = $_POST['qavatlar_soni'];
        $uy_holati =$_POST['uy_holati'];
        $humans = $_POST['odam_soni'];
        $price = $_POST['narxi'];
        $fulladress = $_POST['fulladres'];

    $query = "INSERT INTO uy(headline, turi,xonalar,qavatlar_soni,uy_holati,odamlar_soni,narxi,fulladress)
    VALUES ('$headline',$type,$rooms,$flor,'$uy_holati',$humans,$price,'$fulladress')";


    $result = $link->query($query);
    }
?>

