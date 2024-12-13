<?php
include 'connection.php';

$sql = "SELECT * FROM `activite`";
$result = $db->query($sql);
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
<section class="flex">
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

    <div>
        <div class="flex justify-center items-center opacity-90 my-4 p-2">
                <!--================ start form =================-->
        <form action="" method="post" class="bg-blue-500 p-10 w-[50%] rounded-3xl space-y-2">
            <div class="transition-all duration-300 ease-in-out hover:scale-105">
                <label for="titre" class="text-white">Titre :</label>
                <input type="text" name="titre" id="titre" class=" px-2 py-1 w-full border-solid border-2 rounded-lg transition-all duration-300">
            </div>
            <div class="transition-all duration-300 ease-in-out hover:scale-105">
                <label for="description" class="text-white">Description :</label>
                <input type="text" name="description" id="description" class=" px-2 py-1 w-full border-solid border-2 rounded-lg transition-all duration-300">
            </div>
            <div class="transition-all duration-300 ease-in-out hover:scale-105">
                <label for="destination" class="text-white">Destination :</label>
                <input type="text" name="destination" id="destination" class="px-2 py-1 w-full border-solid border-2 rounded-lg transition-all duration-300">
            </div>
            <div class="transition-all duration-300 ease-in-out hover:scale-105">
                <label for="prix" class="text-white">Prix :</label>
                <input type="number" name="prix" id="prix" class="px-2 py-1 w-full border-solid border-2 rounded-lg transition-all duration-300">
            </div>
            <div class="transition-all duration-300 ease-in-out hover:scale-105">
                <label for="date_debut" class="text-white">Date début :</label>
                <input type="date" name="date_debut" id="date_debut" class="px-2 py-1 w-full border-solid border-2 rounded-lg transition-all duration-300">
            </div>
            <div class="transition-all duration-300 ease-in-out hover:scale-105">
                <label for="date_fin" class="text-white">Date fin :</label>
                <input type="date" name="date_fin" id="date_fin" class="px-2 py-1 w-full border-solid border-2 rounded-lg transition-all duration-300">
            </div>
            <div class="transition-all duration-300 ease-in-out hover:scale-105">
                <label for="places_disponibles" class="text-white">Places disponibles :</label>
                <input type="number" name="places_disponibles" id="places_disponibles" class="px-2 py-1 w-full border-solid border-2 rounded-lg transition-all duration-300">
            </div>
            <div class="flex justify-center">
                <input type="submit" value="Submit" name="submit" class="bg-green-500 text-white p-2 rounded-2xl text-lg font-semibold w-[60%] hover:bg-green-600 transform transition-all duration-300 hover:scale-105">
            </div>
        </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $titre = $_POST['titre'];
        $description = $_POST['description'];
        $destination = $_POST['destination'];
        $prix = $_POST['prix'];
        $date_debut = $_POST['date_debut'];
        $date_fin = $_POST['date_fin'];
        $places_disponibles = $_POST['places_disponibles'];
        
        $query = "INSERT INTO `activite` (`titre`, `description`, `prix`, `destination`, `date_debut`,`date_fin`, `places_disponibles`) 
                VALUES ('$titre', '$description', '$prix', '$destination', '$date_debut', '$date_fin', '$places_disponibles')";
        $res = $db->query($query);
    }   
    // if (mysqli_query($db, $query)) {
    //     echo "Activity added successfully!";
    // } else {
    //     echo "Error: " . mysqli_error($db);
    // }
    // }
    ?>
    <div class="flex justify-center ">
        <table class="bg-blue-500 opacity-90 border-collapse border border-gray-300 ">
            <thead class="bg-blue-700">
                <tr class="text-white">
                    <th class="p-2 border border-blue-400">Id activite</th>
                    <th class="p-2 border border-blue-400">Titre</th>
                    <th class="p-2 border border-blue-400">Description</th>
                    <th class="p-2 border border-blue-400">Destination</th>
                    <th class="p-2 border border-blue-400">Prix</th>
                    <th class="p-2 border border-blue-400">Date de debut</th>
                    <th class="p-2 border border-blue-400">Date de fin</th>
                    <th class="p-2 border border-blue-400">Places disponible</th>
                </tr>
            </thead>
            <tbody>
                <?php  while($row = $result->fetch_assoc()): ?> 
                <tr class="border-blue-200 hover:bg-blue-200">
                    <td class="px-3 py-1 border border-blue-400"><?php echo $row["id_activite"]; ?></td>
                    <td class="px-3 py-1 border border-blue-400"><?php echo $row["titre"]; ?></td>
                    <td class="px-3 py-1 border border-blue-400"><?php echo $row["description"]; ?></td>
                    <td class="px-3 py-1 border border-blue-400"><?php echo $row["destination"]; ?></td>
                    <td class="px-3 py-1 border border-blue-400"><?php echo $row["prix"]; ?></td>
                    <td class="px-3 py-1 border border-blue-400"><?php echo $row["date_debut"]; ?></td>
                    <td class="px-3 py-1 border border-blue-400"><?php echo $row["date_fin"]; ?></td>
                    <td class="px-3 py-1 border border-blue-400"><?php echo $row["places_disponibles"]; ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    </div>
</section>

</body>
</html>