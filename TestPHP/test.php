<?php
$name = "";
$age = 0;
$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["my_name"];
    if($name == "Petr"){
        $message = "CC";
    }
    else{
        $message = "kys";
    }
    $age = $_POST["age"];
    
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Test Formuláře</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime consequuntur nulla iure quia reprehenderit impedit asperiores fugit officiis placeat. Sit ratione omnis accusamus amet hic suscipit. Unde odit nisi perferendis.
    </p>
    <form method="post">
        <input type="text", name="my_name", placeholder="Zadejte Jméno">
        <input type="number", name="age", placeholder="Zadejte Váš Věk">
        <button type="submit">Odeslat</button>
    </form>
    <p>
        <?php 
        echo $message . " "; // Added space and semicolon
        echo "je Vám ";      // Added space and semicolon
        echo $age; 
    ?>
        
    </p>
</body>
</html>