<?php require_once './linkk/htmlcode.php'?>

<?php
require_once 'database.php';

// if (isset($_GET['id'])){
//     $id=(int)$_GET['id'];
//     $query = "select * from uy where id=$id";
//     $result = mysqli_query($link, $query) or die("So'rov ishlamadi : " . mysqli_error($link));
//     print "<table class='jadval' border=1><tr><th>Sarlavha</th><th>Turi</th>
//     <th>Honalar</th><th>Uy qavati</th><th>Uy holati</th><th>Odamlar soni</th><th></th><th></th></tr>\n";
//     while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
//         print "<tr>";
//         print "<td>{$line['headline']}</td>";
//         print "<td>{$line['type']}</td>";
//         print "<td>{$line['rooms']}</td>";
//         print "<td>{$line['floors']}</td>";
//         print "<td>{$line['status']}</td>";
//         print "<td>{$line['human']}</td>";
//         print "<td>{$line['price']}</td>";
//         print "<td>{$line['photo']}</td>";
//         print "</tr>";
//     }
//
//     print "</table>\n";
//
//
//
//     mysqli_close($link);
// }

//if (isset($_GET['id'])){
//    $id=(int)$_GET['id'];
//    $query = "select * from uy where id=$id";
//    $result = mysqli_query($link, $query) or die("So'rov ishlamadi : " . mysqli_error($link));
//    while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
//        print "<input name='headline' placeholder='{$line['headline']}'><br>";
//        print "<input name='type' placeholder='{$line['type']}'><br>";
//        print "<input name='rooms' placeholder='{$line['rooms']}'><br>";
//        print "<input name='floors' placeholder='{$line['floors']}'><br>";
//        print "<input name='status' placeholder='{$line['status']}'><br>";
//        print "<input name='human' placeholder='{$line['human']}'><br>";
//        print "<input name='price' placeholder='{$line['price']}'><br>";
//        print "
//            <div>
//                <label class='choosephoto2' onclick='click' >
//                    <input type='file' id='input-1' name='photo' accept='image/*'>
//                    edit photo
//                </label>
//            </div>";
//    }
//    mysqli_close($link);
//}?>
<?php
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $headline = $_POST['headline'];
    $type = $_POST['type'];
    $rooms = $_POST['rooms'];
    $floor = $_POST['floor'];
    $status = $_POST['status'];
    $humans = $_POST['humans'];
    $price = $_POST['price'];
    $fulladress = $_POST['fulladress'];
    $upload = '/filess/';
    print_r($_FILES);
    $uploadfile = __DIR__ . $upload . basename($_FILES['photo']['name']);
    $uploadfilebazaga = $upload . basename($_FILES['photo']['name']);
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
        echo "File yuklandi.\n";
    } else {
        echo "File yuklanmadi!!!\n";
    }
    print_r($_FILES);

$result = mysqli_query($link, "UPDATE uy SET headline='$headline',type='$type',rooms=$rooms,floors=$floor,
              status='$status',human=$humans,price=$price,fulladress='$fulladress',photo='$uploadfilebazaga' WHERE id=$id");
header("location: qidirish.php");
}
?>
<?php
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $result = mysqli_query($link, "SELECT * FROM uy WHERE id=$id");

    while ($request = mysqli_fetch_array($result)) {
        $headline = $request['headline'];
        $type = $request['type'];
        $rooms = $request['rooms'];
        $floor = $request['floors'];
        $status = $request['status'];
        $humans = $request['human'];
        $price = $request['price'];
        $fulladress = $request['fulladress'];
        $uploadfilebazaga = $request['photo'];
    }
}
?>

        <form name="update_user" method="post" action="edit.php" enctype="multipart/form-data">
            <table class="table table-success table-striped">
                <tr>
                    <td>Sarlavha</td>
                    <td><input class="p-2 rounded" type="text" name="headline" value=<?php echo $headline;?>></td>
                </tr>
                <tr>
                    <td>Turi</td>
                    <td><input class="p-2 rounded" type="text" name="type" value=<?php echo $type;?>></td>
                </tr>
                <tr>
                    <td>Hona soni</td>
                    <td><input class="p-2 rounded" type="number" name="rooms" value=<?php echo $rooms;?>></td>
                </tr>
                <tr>
                    <td>Qavatlar soni</td>
                    <td><input class="p-2 rounded" type="number" name="floor" value=<?php echo $floor;?>></td>
                </tr>
                <tr>
                    <td>Uy holati</td>
                    <td><input class="p-2 rounded" type="text" name="status" value=<?php echo $status;?>></td>
                </tr>
                <tr>
                    <td>Odam soni</td>
                    <td><input class="p-2 rounded" type="number" name="humans" value=<?php echo $humans;?>></td>
                </tr>
                <tr>
                    <td>Narxi</td>
                    <td><input class="p-2 rounded" type="number" name="price" value=<?php echo $price;?>></td>
                </tr>
                <tr>
                    <td>To'liq manzil</td>
                    <td><input class="p-2 rounded" type="text" name="fulladress" value=<?php echo $fulladress;?>></td>
                </tr>
                <tr>
                    <div>
                           <label class='choosephoto2' onclick='click' >
                                   <input type='file' id='input-1' name='photo' accept='image/*'>
                                   edit photo
                           </label>
                    </div>
                </tr>
                <tr>
                    <td><input class="p-2 rounded" type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
<?php require_once './linkk/footer.php'?>

