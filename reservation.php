<?php

require('connection.php');

$sql = "SELECT * FROM `reservation`";
// echo "test";
$result=$db->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//       echo "id: " . $row["id_reservation"]. " - id client : " . $row["id_client"]. " rezservation  " . $row["date_reservation"]. .$row["statut"]. "statut" . "<br>";
//     }
//   }
//   echo "test2";
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
    <div class="flex justify-center items-center opacity-90 my-4 p-2">
        <!--================ start form =================-->
        <form action="" method="post" class="bg-blue-500 p-10 w-[50%] rounded-3xl space-y-2">
            <div class="flex justify-between ">
                <select name=""  id="" class="p-2 w-[48%] rounded-3xl space-y-2 transition-all duration-300 ease-in-out hover:scale-105">
                    <option >Select client</option>
                    <?php 
                    $sql="SELECT nom FROM client";
                    $result=$db->query($sql);
    
                    // $result=mysqli_query($db,$sql);
                    if($result){
                        while($row=$result->fetch_assoc()){
                            echo '<option value="' . $row['nom'] . '">' . $row['nom'] . '</option>';
                        }
                    }
                    ?>
                </select>
                <select name="" id="" class="p-2 w-[48%] rounded-3xl space-y-2 transition-all duration-300 ease-in-out hover:scale-105">
                    <option>Select activite</option>
                    <?php 
                    $sql="SELECT titre FROM activite";
                    $result=$db->query($sql);
    
                    if($result){
                        while($row=$result->fetch_assoc()){
                            echo'<option value"'.$row['titre'].'">'.$row['titre'].'</option>';
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="rounded-3xl transition-all duration-300 ease-in-out hover:scale-105">
                    <label for="date_resrvation" class="text-white">Date resrvation :</label>
                    <input type="date" name="date_resrvation" id="date_resrvation" class="px-2 py-1 w-full border-solid border-2 rounded-lg transition-all duration-300">
            </div>
            <div class="flex justify-between">
                <p>Select statut :</p>
                <div>
                    <label for="">En attente</label>
                    <input type="radio">
                </div>
                <div>
                    <label for="">Confirmee</label>
                    <input type="radio"> 
                </div>
                <div>
                    <label for="">Annulee</label>
                    <input type="radio">
                </div>
            </div>
            <div class="flex justify-center">
                <input type="submit" value="Submit" name="submit" class="bg-green-500 text-white p-2 rounded-2xl text-lg font-semibold w-[60%] hover:bg-green-600 transform transition-all duration-300 hover:scale-105">
            </div>
        </form>
    </div>

<?php 
if (isset($_POST['submit'])){
    $id_reservation = $_POST['id_reservation'];
    $id_client = $_POST['id_client'];
    $id_activite = $_POST['id_activite'];
    $date_reservation = $_POST['date_reservation'];
    $statut =$_POST['statut'];

    $query = "INSERT INTO `reservation`(`id_reservation`,`id_client`,`id_activite`,`date_reservation`,`statut`)
            VALUE('$id_reservation','$id_client','$id_activite','$date_reservation','$statut')";
    $res = $db->query($query);
}

?>

<table class="border p-2">
    <thead >
        <tr>
            <th>Id reservation</th>
            <th>Id client</th>
            <th>Id activite</th>
            <th>Date reservation</th>
            <th>Statut</th>
        </tr>
    </thead>
    <tbody>
    <?php  while($row = $result->fetch_assoc()): ?> 
    <tr>
      <td><?php echo $row["id_reservation"]; ?></td>
      <td><?php echo $row["id_client"]; ?></td>
      <td><?php echo $row["id_activite"]; ?></td>
      <td><?php echo$row["date_reservation"]; ?></td>
      <td><?php echo$row["statut"]; ?></td>
    </tr>
    <br>
    <?php endwhile; ?>
    </tbody>
</table> 


</body>
</html>