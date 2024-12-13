<?php
require('connection.php');

if (isset($_POST["submit"]))
{
    // insertion f base doness
    header("Location: reservation.php");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>flying</title>
</head>
<body >
    
<header class="bg">
    <div class="flex justify-around h-14 items-center w-screen bg-black ">
        <div class= " h-full ">
            
            <img class="h-full " src="logo.png" alt="logo">
        </div>
        <div>
            <ul class="flex text-white space-x-4">
                <li><a href="index.php">Home</a></li>
                <li><a href="client.php">client</a></li>
                <li><a href="activite.php">activite</a></li>
                <li><a href="reservation.php">Reservations</a></li>
            </ul>
        </div>
    </div>
</header>
<section class="flex justif">
            <div class="bg-gray-500 h-screen w-[15%]">
            <ul class="text-white space-x-4">
                <li><a href="index.php">Home</a></li>
                <li><a href="client.php">client</a></li>
                <li><a href="activite.php">activite</a></li>
                <li><a href="reservation.php">Reservations</a></li>
            </ul>
            </div>
            <div class="bg-gray-300 h-screen w-screen">Formul
                
            </div>
</section>

    
</body>
</html>