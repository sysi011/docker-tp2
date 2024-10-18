<?php
$servername = "db";
$username = "testuser";
$password = "testpassword";
$dbname = "testdb";

try {
    // Connexion à la base de données
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Création d'une table si elle n'existe pas
    $conn->exec("CREATE TABLE IF NOT EXISTS users (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255) NOT NULL)");

    // Insertion de données
    $stmt = $conn->prepare("INSERT INTO users (name) VALUES (:name)");
    $stmt->bindParam(':name', $name);
    $name = "John Doe";
    $stmt->execute();
    
    // Lecture des données
    $stmt = $conn->prepare("SELECT * FROM users");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<h1>Données dans la base de données :</h1>";
    foreach ($result as $row) {
        echo "ID: " . $row['id'] . " - Name: " . $row['name'] . "<br>";
    }
    
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
