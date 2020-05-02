<?php 
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$servername = $cleardb_url["host"];
$username = $cleardb_url["user"];
$password = $cleardb_url["pass"];
$dbname = substr($cleardb_url["path"], 1);

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "omititun";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    // echo "Conneted";
}

// Create database
// $sql = "CREATE DATABASE myDB";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }
$name = strip_tags(htmlspecialchars($_POST['name']));;


$date = new DateTime(date("Y-m-d"));
$week = $date->format("W");
$month = date("m");
$year = substr(date("Y"), 2);
$ticket_number = 'OY01'.$week.''.$month.''.$year;
// echo $ticket_number;
// return
// $sql = "INSERT INTO ticket (name, ticket_number) VALUES ('Mr. johnson', 'OY')";
$sql1 = "INSERT INTO `ticket` (`name`, `ticket_number`) VALUES ('".$name."', '".$ticket_number."')";

if($conn->query($sql1)) {
    $id = $conn->insert_id;
    $getId = $id;
    $len = strlen($id);
    if($len == 1) {
        $id = "000".$id;
    } else if($len == 2) {
        $id = "00".$id;
    } else if($len == 3) {
        $id = "0".$id;
    }
    $ticket_number = $ticket_number."".$id;
    $sql2 = "UPDATE `ticket` SET `ticket_number`='".$ticket_number."' WHERE `id`='".$getId."'";
    if($conn->query($sql2)) {
        echo "Dear <strong>".$name."</strong>, you've successfully apply for the raffle draw. Your ticket number is: <strong>".$ticket_number."</strong>";
    } else {
        echo "Error 1";
    }
    
} else {
    echo "Error " .$conn->error."";
}



?>