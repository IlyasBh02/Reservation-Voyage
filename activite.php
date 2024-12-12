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
<div class="flex justify-center items-center">
    <form action="" method="post" class="bg-red-500 p-2">
        <div >
            <label for="titre">titre :</label>
            <input type="text" name="titre" id="titre" class="m-2 border-solid rounded-lg">
        </div>
        <div>
            <label for="description">description :</label>
            <input type="text" name="description" id="description" class="m-2 border-solid rounded-lg">
        </div>
        <div>
            <label for="destination">destination :</label>
            <input type="text" name="destination" id="destination" class="m-2 border-solid rounded-lg">
        </div>
        <div>
            <label for="prix">prix :</label>
            <input type="number" name="prix" id="prix" class="m-2 border-solid rounded-lg">
        </div>
        <div>
            <label for="date_debut">date debut :</label>
            <input type="date" name="date_debut" id="date_debut" class="m-2 border-solid rounded-lg">
        </div>
        <div>
            <label for="date_fin">date fin :</label>
            <input type="date" name="date_fin" id="date_fin" class="m-2 border-solid rounded-lg">
        </div>
        <div>
            <label for="places_disponibles">places disponibles :</label>
            <input type="number" name="places_disponibles" id="places_disponibles" class="m-2 border-solid rounded-lg">
        </div>
        <input  value="submit" name="submit" type="submit" class="bg-blue-500 p-2 rounded-lg">                    
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
<table class="border p-2">
    <thead>
        <tr>
            <th>Id activite</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Destination</th>
            <th>Prix</th>
            <th>Date de debut</th>
            <th>Date de fin</th>
            <th>Places disponible</th>
        </tr>
    </thead>
    <tbody>
        <?php  while($row = $result->fetch_assoc()): ?> 
        <tr>
            <td><?php echo $row["id_activite"]; ?></td>
            <td><?php echo $row["titre"]; ?></td>
            <td><?php echo $row["description"]; ?></td>
            <td><?php echo $row["destination"]; ?></td>
            <td><?php echo $row["prix"]; ?></td>
            <td><?php echo $row["date_debut"]; ?></td>
            <td><?php echo $row["date_fin"]; ?></td>
            <td><?php echo $row["places_disponibles"]; ?></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

</body>
</html>