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
<body class="relative" style="background-image: url('img/voyag.jpg'); background-size: cover; background-position: center;">    
<header class="bg">
    <div class="flex justify-around h-14 items-center w-screen bg-blue-700 opacity-90">
        <div class= "h-full text-white text-2xl">
            <p>Where would you like to do with us ?</p>
        </div>
        
    </div>
</header>
<section class="flex justif">
    <div class="h-screen w-[15%] relative">
        <div class="absolute inset-0 bg-blue-500 opacity-20"></div>
        <div class="relative">
            <ul class="text-black text-lg p-4">
                <li class="p-2"><a href="index.php">Home</a></li>
                <li class="p-2"><a href="client.php">client</a></li>
                <li class="p-2"><a href="activite.php">activite</a></li>
                <li class="p-2"><a href="reservation.php">Reservations</a></li>
            </ul>
        </div>
    </div>
    <div class=" h-screen w-screen p-6">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl font-bold text-blue-800 mb-8 text-center">Destinations de Voyage</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 ease-in-out hover:scale-105">
                    <img src="img/img1.jpg" alt="Destination 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                    <h2 class="text-lg font-semibold text-blue-800">Safari au Kenya</h2>
                    <p class="text-blue-600 text-sm">Explorez les merveilles de la savane africaine.</p>
                    <p class="mt-2 text-green-600 font-bold">1200€</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 ease-in-out hover:scale-105">
                    <img src="img/img2.jpg" alt="Destination 2" class="w-full h-48 object-cover">
                    <div class="p-4">
                    <h2 class="text-lg font-semibold text-blue-800">Croisière Méditerranéenne</h2>
                    <p class="text-blue-600 text-sm">Profitez du luxe sur les eaux claires.</p>
                    <p class="mt-2 text-green-600 font-bold">800€</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 ease-in-out hover:scale-105">
                    <img src="img/img3.jpg" alt="Destination 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                    <h2 class="text-lg font-semibold text-blue-800">Plages des Maldives</h2>
                    <p class="text-blue-600 text-sm">Détendez-vous sur des plages paradisiaques.</p>
                    <p class="mt-2 text-green-600 font-bold">1500€</p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 ease-in-out hover:scale-105">
                    <img src="img/img4.jpg" alt="Destination 4" class="w-full h-48 object-cover">
                    <div class="p-4">
                    <h2 class="text-lg font-semibold text-blue-800">Circuit en Toscane</h2>
                    <p class="text-blue-600 text-sm">Découvrez les paysages italiens.</p>
                    <p class="mt-2 text-green-600 font-bold">900€</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 ease-in-out hover:scale-105">
                    <img src="img/img5.jpg" alt="Destination 5" class="w-full h-48 object-cover">
                    <div class="p-4">
                    <h2 class="text-lg font-semibold text-blue-800">Aventure au Pérou</h2>
                    <p class="text-blue-600 text-sm">Explorez le Machu Picchu.</p>
                    <p class="mt-2 text-green-600 font-bold">1400€</p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 ease-in-out hover:scale-105">
                    <img src="img/img6.jpg" alt="Destination 6" class="w-full h-48 object-cover">
                    <div class="p-4">
                    <h2 class="text-lg font-semibold text-blue-800">Tokyo Moderne</h2>
                    <p class="text-blue-600 text-sm">Découvrez la culture japonaise.</p>
                    <p class="mt-2 text-green-600 font-bold">2000€</p>
                    </div>
                </div>
                <!-- Card 7 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 ease-in-out hover:scale-105">
                    <img src="img/img7.jpg" alt="Destination 7" class="w-full h-48 object-cover">
                    <div class="p-4">
                    <h2 class="text-lg font-semibold text-blue-800">New York City</h2>
                    <p class="text-blue-600 text-sm">La ville qui ne dort jamais.</p>
                    <p class="mt-2 text-green-600 font-bold">1100€</p>
                    </div>
                </div>

                <!-- Card 8 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 ease-in-out hover:scale-105">
                    <img src="img/img8.jpg" alt="Destination 8" class="w-full h-48 object-cover">
                    <div class="p-4">
                    <h2 class="text-lg font-semibold text-blue-800">Route 66</h2>
                    <p class="text-blue-600 text-sm">Parcourez l'Amérique en voiture.</p>
                    <p class="mt-2 text-green-600 font-bold">1800€</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    
</body>
</html>