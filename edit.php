<?php
require_once 'database.php';

 if (isset($_GET['id'])){
     $id=(int)$_GET['id'];
     $query = "select * from uy where id=$id";
     $result = mysqli_query($link, $query) or die("So'rov ishlamadi : " . mysqli_error($link));
     print "<table class='jadval' border=1><tr><th>Sarlavha</th><th>Turi</th>
     <th>Honalar</th><th>Uy qavati</th><th>Uy holati</th><th>Odamlar soni</th><th></th><th></th></tr>\n";
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
         print "</tr>";
     }

     print "</table>\n";



     mysqli_close($link);
 }