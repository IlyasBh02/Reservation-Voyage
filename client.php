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
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" class="m-2 border-solid rounded-lg">
        </div>
        <div>
            <label for="prenom">Prenom :</label>
            <input type="text" name="prenom" id="prenom" class="m-2 border-solid rounded-lg">
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" class="m-2 border-solid rounded-lg">
        </div>
        <div>
            <label for="telephone">Telephone :</label>
            <input type="number" name="telephone" id="telephone" class="m-2 border-solid rounded-lg">
        </div>
        <div>
            <label for="adrress">Adrress :</label>
            <input type="text" name="adrress" id="adrress" class="m-2 border-solid rounded-lg">
        </div>
        <div>
            <label for="date_naissance">Date de naissance :</label>
            <input type="date" name="date_naissance" id="date_naissance" class="m-2 border-solid rounded-lg">
        </div>
        <input  value="submit" name="submit"  type="submit" class="bg-blue-500 p-2 rounded-lg">                    
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
<table>
    <thead>
        
        <tr>
            <th>Id client</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Adrress</th>
            <th>Date de naissance</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row["id_client"]; ?></td>
            <td><?php echo $row["nom"]; ?></td>
            <td><?php echo $row["prenom"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["telephone"]; ?></td>
            <td><?php echo $row["adrress"]; ?></td>
            <td><?php echo $row["date_naissance"]; ?></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

</body>
</html>