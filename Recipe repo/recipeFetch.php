<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "recipe";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

//Query to fetch all the data in the database 
$querySQL = "SELECT * FROM recipe_repository";
$result = $conn->query($querySQL);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<div class='data-list'>
            <div class='recipe_content grid'>
                <article class='recipe_card mix tesla'>
                    <div class='shape shape_smaller'></div>
                    <a href='recipe1.php'> 
                        <h1 class='recipe_title'>" . $row['title'] . 
                        "<h4 class='recipe_price'>" .$row['ingredients'] .
                    "</a>
                </article>
            </div>
            </div>";
    }
} else {
    echo "No Recipe added yet.";
}

$conn->close();