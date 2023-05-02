<?php require_once 'database.php'?>
<?php require_once './linkk/htmlcode.php';?>
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="topphoto">

            <!-- dev code -->

            <!-- dev code end -->

                <?php if (empty($_POST)): ?>
                <!--Qo'lda postga malumot yuklash-->
                    <form method="post" enctype="multipart/form-data">
                        <div class="sentr1">
                            <?php

                            echo "
                            <div >
                                <label class='choosephoto' onclick='click' >
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
                            <a href="qidirish.php">Back</a>
                            <input class="btn inpt" type="submit" value="Qo'shish" name="submit"><br><br>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <?php

                endif;
                // postga malumot kiritish
                if (isset($_POST['submit'])) {
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
                    VALUES ('$uploadfilebazaga','$headline','$type',$rooms,$floor,'$status',$humans,$price,'$fulladress')";
                    echo $query;

                    $result = $link->query($query);
                    if ($result)
                        header("location: qidirish.php");
                }
                ?>

<?php require_once './linkk/footer.php'?>
