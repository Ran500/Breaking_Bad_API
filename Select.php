<?php 

include 'config.php';


$Number  = $_POST['Number'];

$select = $Number;


// $Num = 0;
//     $id = $decoded[$Num]['char_id'];
//     $nickName = $decoded[$Num]['nickname'];
//     $Name = $decoded[$Num]['name'];
//     $birthday = $decoded[$Num]['birthday'];
//     $img = $decoded[$Num]['img'];



$sql = "SELECT ID,Num,char_id,nickname,name,birthday,img FROM characters WHERE ID = $select";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table style=' border: 1px solid #dddddd;' >";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Num</th>";
                echo "<th>char_id</th>";
                echo "<th>nickname</th>";
                echo "<th>Name</th>";
                echo "<th>birthday</th>";
                echo "<th>img</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['Num'] . "</td>";
                echo "<td>" . $row['char_id'] . "</td>";
                echo "<td>" . $row['nickname'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['birthday'] . "</td>";
                echo "<td> <img src='" . $row['img'] . "'  width='50px ' height='50px'></td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($conn);

?>