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
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/mystyle.css">

</head>

<body>
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="topphoto">

            <!-- dev code -->

            <!-- dev code end -->

                <?php if (empty($_POST)): ?>
                    <form method="post" enctype="multipart/form-data">
                        <div class="sentr1">
                            <?php
                            echo "
                            <br>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-sm-2 imgUp'>
                                        <div class='imagePreview'></div>
                                        <label class='btn btn-primary'>
                                            Upload<input type='file' class='uploadFile img' value='Upload Photo'
                                                style='width: 0px;height: 0px;overflow: hidden;'>
                                        </label>
                                    </div><!-- col-2 -->
                                    <i class='fa fa-plus imgAdd'></i>
                                </div><!-- row -->
                            </div><!-- container -->";
                            echo "
                            <div >
                                <label class='choosephoto' onclick='click' >
                                    <div>
                                        <img id='img-1' src='' height='500' alt=''>
                                    </div>
                                    <input type='file' id='input-1' name='photo' accept='image/*'>
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
                            <input class="btn inpt" type="submit" value="Qo'shish" name="submit"><br><br>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <?php

                endif;

                if (isset($_POST['submit'])) {
                    $photo = $_POST['photo'];
                    $headline = $_POST['headline'];
                    $type = $_POST['type'];
                    $rooms = $_POST['rooms'];
                    $floor = $_POST['floors'];
                    $status = $_POST['status'];
                    $humans = $_POST['human'];
                    $price = $_POST['price'];
                    $fulladress = $_POST['fulladres'];
                    $upload = '/filess/';
                    $uploadfile = __DIR__ . $upload . basename($_FILES['photo']['name']);
                    $uploadfilebazaga = $upload . basename($_FILES['photo']['name']);
                    if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
                        echo "File yuklandi.\n";
                    } else {
                        echo "File yuklanmadi!!!\n";
                    }
                    print_r($_FILES);
                    $query = "INSERT INTO uy(photo,headline, type,rooms,floors,status,human,price,fulladress)
                    VALUES ('$uploadfilebazaga','$headline',$type,$rooms,$floor,'$status',$humans,$price,'$fulladress')";
                    echo $query;

                    $result = $link->query($query);
                    if ($result)
                        echo "qo'shildi";
                }
                ?>
    <script>
        $(".imgAdd").click(function () {
            $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-2 imgUp"><div class="imagePreview"></div><label class="btn btn-primary">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del"></i></div>');
        });
        $(document).on("click", "i.del", function () {
            // 	to remove card
            $(this).parent().remove();
            // to clear image
            // $(this).parent().find('.imagePreview').css("background-image","url('')");
        });
        $(function () {
            $(document).on("change", ".uploadFile", function () {
                var uploadFile = $(this);
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

                if (/^image/.test(files[0].type)) { // only image file
                    var reader = new FileReader(); // instance of the FileReader
                    reader.readAsDataURL(files[0]); // read the local file

                    reader.onloadend = function () { // set image data as background of div
                        //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                        uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url(" + this.result + ")");
                    }
                }

            });
        });
    </script>

</body>

</html>