<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "simpleCMS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// SQL query ----------------------
$sql = "SELECT * FROM article"; // read

// -------------------------------- Other SQL 
//INSERT INTO article (title, time, content, categoy_ID )
//VALUES ('CMS', '2017-01-19 03:14:07, 'This is a story about CMS', 1 )";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID_Article"]. " - Title: " . $row["Title"]. " <br>Content: <p> " . $row["Content"]. "</p><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
