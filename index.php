<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'flying';

$db = mysqli_connect($host, $user, $pass, $dbname);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body >
    
<header class="bg">
    <div class="flex justify-around h-14 items-center w-screen bg-black opacity-70">
        <div class= " h-full ">
            
            <img class="h-full " src="logo.png" alt="logo">
        </div>
        <div>
            <ul class="flex text-white space-x-4">
                <li>Activities</li>
                <li>Reservations</li>
            </ul>
        </div>
    </div>
</header>
<section class="flex justif">
            <div class="bg-gray-500 h-screen w-[15%]">Activities </div>
            <div class="bg-gray-300 h-screen w-screen">Reservations</div>
</section>

    
</body>
</html>