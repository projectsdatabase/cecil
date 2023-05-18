
<?php
include_once 'include/db.inc.php';
include_once 'include/header.php';

?> 


<body>
<?php
include_once 'include/body.php';
?>
<table>
        <tr>
          <th>Car Name</th>
          <th>Number Plate</th>
          <th>Car Owner</th>
          <th>Car Type</th>
        </tr>
      <tbody>  

      
        <?php
     $sql = "SELECT * FROM car;";
     $result = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["car_name"] ?></td>
            <td><?php echo $row["num_plate"] ?></td>
            <td><?php echo $row["car_own"] ?></td>
            <td><?php echo $row["car_type"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    
    <center>
    <button onclick="window.location.href='insert.php';">
    Insert Detail
    </button>
      </center>

</body>
</html>
