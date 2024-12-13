<?php
require('connection.php');
$sql = "SELECT * FROM `client`";
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

<body class="" style="background-image: url('img/voyag.jpg'); background-size: cover; background-position: center;">
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
    <div class="w-screen">
        <div class="flex justify-center items-center opacity-90 my-4 p-2">
                <!--================ start form =================-->
        <form action="" method="post" class="bg-blue-500 w-[50%] p-6 rounded-3xl shadow-lg space-y-2">
            <div class="transition-all duration-300 ease-in-out hover:scale-105">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" class="px-2 py-1 w-full border-solid rounded-lg">
            </div>
            <div class="transition-all duration-300 ease-in-out hover:scale-105">
                <label for="prenom">Prenom :</label>
                <input type="text" name="prenom" id="prenom" class="px-2 py-1 w-full border-solid rounded-lg">
            </div>
            <div class="transition-all duration-300 ease-in-out hover:scale-105">
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" class="px-2 py-1 w-full border-solid rounded-lg">
            </div>
            <div class="transition-all duration-300 ease-in-out hover:scale-105">
                <label for="telephone">Telephone :</label>
                <input type="number" name="telephone" id="telephone" class="px-2 py-1 w-full border-solid rounded-lg">
            </div>
            <div class="transition-all duration-300 ease-in-out hover:scale-105">
                <label for="adrress">Adrress :</label>
                <input type="text" name="adrress" id="adrress" class="px-2 py-1 w-full border-solid rounded-lg">
            </div>
            <div class="transition-all duration-300 ease-in-out hover:scale-105">
                <label for="date_naissance">Date de naissance :</label>
                <input type="date" name="date_naissance" id="date_naissance" class="px-2 py-1 w-full border-solid rounded-lg">
            </div>
            <div class="flex justify-center">
                <input value="Submit" name="submit" type="submit" class="bg-green-500 text-white p-2 rounded-2xl text-lg font-semibold w-[60%] hover:bg-green-600 transform transition-all duration-300 hover:scale-105">
            </div>
        </form>
    </div>

    <?php  
    if(isset($_POST['submit'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $adrress = $_POST['adrress'];
        $date_naissance = $_POST['date_naissance'];

        $query = "INSERT INTO `client`(`nom`, `prenom`,`email`,`telephone`,`adrress`,`date_naissance`)  
                VALUE ('$nom', '$prenom','$email','$telephone','$adrress','$date_naissance')";
        $res = $db->query($query);
    }

    ?>
    <div class="flex justify-center items-center text-left">
        <table class="bg-blue-500 opacity-90 border-collapse border border-blue-500 ">
            <thead class="bg-blue-700 ">
                <tr class="p-2 text-white text-left">
                    <th class="p-2 border border-blue-400">Id client</th>
                    <th class="p-2 border border-blue-400">Nom</th>
                    <th class="p-2 border border-blue-400">Prenom</th>
                    <th class="p-2 border border-blue-400">Email</th>
                    <th class="p-2 border border-blue-400">Telephone</th>
                    <th class="p-2 border border-blue-400">Adrress</th>
                    <th class="p-2 border border-blue-400">Date de naissance</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr class="border-b border-blue-200 hover:bg-blue-200">
                    <td class="px-3 py-1 border border-blue-400"><?php echo $row["id_client"]; ?></td>
                    <td class="px-3 py-1 border border-blue-400"><?php echo $row["nom"]; ?></td>
                    <td class="px-3 py-1 border border-blue-400"><?php echo $row["prenom"]; ?></td>
                    <td class="px-3 py-1 border border-blue-400"><?php echo $row["email"]; ?></td>
                    <td class="px-3 py-1 border border-blue-400"><?php echo $row["telephone"]; ?></td>
                    <td class="px-3 py-1 border border-blue-400"><?php echo $row["adrress"]; ?></td>
                    <td class="px-3 py-1 border border-blue-400"><?php echo $row["date_naissance"]; ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    </div>
</section>

</body>
<!-- Footer -->
<footer class="bg-blue-800 h-[10%] text-white py-4 mt-8">
    <div class="max-w-7xl mx-auto text-center">
      <p>&copy; 2024 Voyage Inc. Tous droits réservés.</p>
      <p class="mt-2">Suivez-nous sur 
        <a href="#" class="text-blue-400 hover:underline">Facebook</a>, 
        <a href="#" class="text-blue-400 hover:underline">Twitter</a>, et 
        <a href="#" class="text-blue-400 hover:underline">Instagram</a>
      </p>
    </div>
</footer>
</html>