
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
          <th>Pickup Location</th>
          <th>Drop Location</th>
          <th>Pickup Date</th>
          <th>Pickup Time</th>
        </tr>
      <tbody>  

      
        <?php
     $sql = "SELECT * FROM b_details;";
     $result = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["plocation"] ?></td>
            <td><?php echo $row["dlocation"] ?></td>
            <td><?php echo $row["pdate"] ?></td>
            <td><?php echo $row["ptime"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>

</body>
</html>
