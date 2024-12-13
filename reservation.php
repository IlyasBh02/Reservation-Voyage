<?php

require('connection.php');

$sql = "SELECT * FROM `reservation`";
// echo "test";
$result=$db->query($sql);

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
            <form action="" method="post" class="bg-blue-500 p-10 w-[50%] rounded-3xl space-y-2">
                <div class="flex justify-between ">
                    <select name="client"  id="" class="p-2 w-[48%] rounded-3xl space-y-2 transition-all duration-300 ease-in-out hover:scale-105">
                        <option >Select client</option>
                        <?php 
                        $sql="SELECT * FROM client";
                        $result=$db->query($sql);
                            if($result){
                            while($row=$result->fetch_assoc()){
                                echo '<option value="' . $row['id_client'] . '">' . $row['nom'] . '</option>';
                            }
                            }
                        ?>
                    </select>
                    <select name="activite" id="" class="p-2 w-[48%] rounded-3xl space-y-2 transition-all duration-300 ease-in-out hover:scale-105">
                        <option>Select activite</option>
                        <?php 
                        $sql="SELECT * FROM activite";
                        $result=$db->query($sql);
        
                        if($result){
                            while($row=$result->fetch_assoc()){
                                echo '<option value="'. $row['id_activite'] . '">' . $row['titre']. '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="rounded-3xl transition-all duration-300 ease-in-out hover:scale-105">
                        <label for="date_resrvation" class="text-white">Date resrvation :</label>
                        <input type="date" name="date_reservation" id="date_resrvation" class="px-2 py-1 w-full border-solid border-2 rounded-lg transition-all duration-300">
                </div>
                <div class="flex justify-between">
                    <p style="text-white">Select statut :</p>
                    <div>
                        <label for="">En attente</label>
                        <input type="radio" id="En_attente" name="statut" value="En attente">
                    </div>
                    <div>
                        <label for="">Confirmee</label>
                        <input type="radio" id="Confirmee" name="statut" value="Confirmée"> 
                    </div>
                    <div>
                        <label for="">Annulee</label>
                        <input type="radio" id="Annulee" name="statut" value="Annulée">
                    </div>
                </div>
                <div class="flex justify-center">
                    <input type="submit" value="Submit" name="submit" class="bg-green-500 text-white p-2 rounded-2xl text-lg font-semibold w-[60%] hover:bg-green-600 transform transition-all duration-300 hover:scale-105">
                </div>
            </form>
        </div>

    <?php 
    if (isset($_POST['submit'])){
        $id_client = $_POST['client'];
        $id_activite = $_POST['activite'];
        $date_reservation = $_POST['date_reservation'];
        $statut =$_POST['statut'];

        $query = "INSERT INTO reservation(id_client,id_activite,date_reservation,statut)
                VALUES('$id_client','$id_activite','$date_reservation','$statut')";
            $res = $db->query($query);

    }

    ?>
    <div class="flex justify-center ">
        <table class="bg-blue-500 opacity-90 border-collapse border border-gray-300 w-[80%] ">
            <thead class="bg-blue-700">
                <tr class="text-white">
                    <th class="p-2 border border-blue-400">Id reservation</th>
                    <th class="p-2 border border-blue-400">Id client</th>
                    <th class="p-2 border border-blue-400">Id activite</th>
                    <th class="p-2 border border-blue-400">Date reservation</th>
                    <th class="p-2 border border-blue-400">Statut</th>
                </tr>
            </thead>
            <tbody>
            <?php  
            $query = "SELECT * FROM reservation";
            $result = $db->query($query);
            // $query = "
            // SELECT reservation.id_reservation,reservation.date_reservation, reservation.status, client.nom, activite.titre 
            // FROM reservation 
            // JOIN client ON reservation.id_client = client.id_client
            // JOIN activite ON reservation.id_activite = activite.id_activite"; 
            // $result = mysqli_query($db_connect,$query);
            while($row = $result->fetch_assoc()): ?> 
            <tr class="border-blue-200 hover:bg-blue-200">
                <td class="px-3 py-1 border border-blue-400"><?php echo $row["id_reservation"]; ?></td>
                <td class="px-3 py-1 border border-blue-400"><?php echo $row["id_client"]; ?></td>
                <td class="px-3 py-1 border border-blue-400"><?php echo $row["id_activite"]; ?></td>
                <td class="px-3 py-1 border border-blue-400"><?php echo$row["date_reservation"]; ?></td>
                <td class="px-3 py-1 border border-blue-400"><?php echo$row["statut"]; ?></td>
            </tr>
            <br>
            <?php endwhile; ?>
            </tbody>
        </table> 
    </div>
    </div>
</section>




</body>
</html>