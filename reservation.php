<?php

require('connection.php');

$sql = "SELECT * FROM `reservation`";
echo "test";
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

<body>
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
    <div>
        <form action="">
            <select name="" id="">
                <option>Select client</option>
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
            <select name="" id="">
                <option>Select activite</option>
            </select>
        </form>
    </div>
<!-- <table class="border p-2">
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
</table>   -->


</body>
</html>