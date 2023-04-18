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
    <link rel="stylesheet" href="/css/mystyle.css">
    
</head>
<body>
    <?php if (empty($_POST)): ?>
<form method="post" enctype="multipart/form-data">
    <!--        <input type="text" name="son">
            <input type="submit" value="Uzatish">-->
    <?php
       echo "
       <div >
         <label class='choosephoto' >
             <input type='file' name='photo' accept='image/*'>
             choose photo
         </label>
       </div><br>  
     "; 
        echo "<input type='text' name='headline' placeholder='uynomi'><br>";
        echo "<input type='text' name='type' placeholder='turi'><br>";
        echo "<input type='number' name='rooms' placeholder='xona soni'><br>";
        echo "<input type='number' name='floors' placeholder='nechi etadj'><br>";
        echo "<input type='text' name='status' placeholder='uy holati'><br>";
        echo "<input type='number' name='human' placeholder='odamlar soni'><br>";
        echo "<input type='number' name='price' placeholder='Narxi'><br>";
        echo "<input type='text' name='fulladres' placeholder='toliq manzil'><br";
        
    ?>

    <input type="hidden" name="soni" value="8">
    <input type="submit" value="Qo'shish" name="submit"><br><br>
    <?php
/*        echo "<input type='number' name='id' placeholder='id'>";
input type="submit" value="O'chiriash" name="delet"><br>
    */?>
</form>
<?php

    endif;

    if (isset($_POST['submit'])) {
        $photo=$_POST['photo'];
        $headline = $_POST['headline'];
        $type = $_POST['type'];
        $rooms = $_POST['rooms'];
        $floor = $_POST['floors'];
        $status =$_POST['status'];
        $humans = $_POST['human'];
        $price = $_POST['price'];
        $fulladress = $_POST['fulladres'];
        $upload='/filess/';
        $uploadfile=__DIR__.$upload .basename($_FILES['photo']['name']);
        $uploadfilebazaga=$upload .basename($_FILES['photo']['name']);
        if(move_uploaded_file($_FILES['photo']['tmp_name'],$uploadfile)){
            echo"File yuklandi.\n";
        }else{
            echo"File yuklanmadi!!!\n";
        }
        print_r($_FILES);
    $query = "INSERT INTO uy(photo,headline, type,rooms,floors,status,human,price,fulladress)
        VALUES ('$uploadfilebazaga','$headline',$type,$rooms,$floor,'$status',$humans,$price,'$fulladress')";
echo $query;
    
         $result = $link->query($query);
         if ($result) echo "qo'shildi";
    }
?>

