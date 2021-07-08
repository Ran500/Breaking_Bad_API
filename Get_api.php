<?php


$ch = curl_init();

$url = "https://www.breakingbadapi.com/api/characters";

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


$resp = curl_exec($ch);

if ($e = curl_error($ch)) {
    echo $e;
} else {
    $decoded = json_decode($resp, true);
    
    // Varbles For array kay 
    $Num = 0;
    $id = $decoded[$Num]['char_id'];
    $nickName = $decoded[$Num]['nickname'];
    $Name = $decoded[$Num]['name'];
    $birthday = $decoded[$Num]['birthday'];
    $img = $decoded[$Num]['img'];


}

curl_close($ch);


include 'config.php';

$sql = "INSERT INTO characters (Num, char_id, nickname , name ,birthday ,img )
VALUES ('$Num', '$id', '$nickName' ,' $Name','$birthday',' $img')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


?>

