<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scandiweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
    $ids = $_POST["delete"];
    $id_list = implode(",", array_map('intval', $ids));

    $sql = "DELETE FROM products WHERE id IN ($id_list)";

    if ($conn->query($sql) === TRUE) {
        echo "Records deleted successfully";
    } else {
        echo "Error deleting records: " . $conn->error;
    }
}

$conn->close();

header("Location: product_list.php");
exit();
?>
