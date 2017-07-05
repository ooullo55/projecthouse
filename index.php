<?php/*
$servname = "ec2-54-221-220-82.compute-1.amazonaws.com";
$user = "nqsdfwmoqvfiei";
$port = "5432";
$pass = "6ae6ce765018d64b5b1278484931fab9c36bade9489ff376a68dee992905a202";
$db = "de5h8hg4vjs695";
$conn_string = "host=$servname port=$port dbname=$db user=$user password=$pass";
$dbconn = pg_connect($conn_string);
	if($conn_string->connect_error){
		die("Connecttion Failed".$conn->connect_error);
	}

$sql = "INSERT INTO test (test)
VALUES (0)";

if ($conn_string->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn_string->error;
}

$conn_string->close();*/
echo Hello World;
?>
