<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "recipe";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$title = $_POST["title"];
$ingredients = $_POST["ingredients"];
$preparation = $_POST["preparation"]; 

$querySQL = "INSERT INTO recipe_repository (title, ingredients, preparation) VALUES ('$title', '$ingredients', '$preparation')";

if($conn->query($querySQL) === TRUE){
    echo "Recipe added successfully.";
} else {
    echo "Error: ". $conn->error;
}

/*
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
    $title = $_POST["tittle"];
    $ingredients = $_POST["ingredients"];
    $preparation = $_POST["preparation"];

    $stmt = $conn->prepare("INSERT INTO recipe_repository (title, ingredients, preparation) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $ingredients, $preparation);

    if($stmt->execute()){
        echo '<script>
            alert("Recipe added sucessfully.");
            window.location.href = "index.html";
            </script>';
    }
    $stmt->close();
}
*/

$conn->close();
?>