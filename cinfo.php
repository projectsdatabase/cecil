
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
     $sql = "SELECT * FROM c_details;";
     $result = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["fname"] ?></td>
            <td><?php echo $row["lname"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["num"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    

</body>
</html>
