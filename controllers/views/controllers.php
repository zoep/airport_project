<?php include 'header.php';
?>
<table>
    <tr>
        <th >ssn</th>
        <th >umn</th>
        <th >Name</th>
        <th >Surrname</th>
        <th >Address</th>
        <th >Phone</th>
        <th >Year of Birth</th>
        <th >Salary</th>
        <th >Check Date </th>
        <th >Check Result </th>
    </tr>
<?php
foreach( $controllers as $controller ) {
    ?><tr>
        <td> <?php echo $controller[3]; ?></td> 
        <td> <?php echo $controller[4]; ?></td>
        <td> <?php echo $controller[5]; ?></td>
        <td> <?php echo $controller[6]; ?></td>
        <td> <?php echo $controller[7]; ?></td>
        <td> <?php echo $controller[8]; ?></td>
        <td> <?php echo $controller[9]; ?></td>
        <td> <?php echo $controller[10]; ?></td>
        <td> <?php echo $controller[1]; ?></td>
        <td> <?php echo $controller[2]; ?></td>
        <td> 
            <form action = "delete_controller.php" method = "post">
                <input name = "delssn" type = "hidden" value = "<?php echo $controller[3]; ?>">
                <input type = "submit" value = "delete">
            </form>
        </td>
        <td> 
            <form action = "update_controller.php" method = "post">
                <input name = "updssn" type = "hidden" value = "<?php echo $controller[3]; ?>">
                <input type = "submit" value = "update">
            </form>
        </td>
      </tr>
    <?php } ?>
</table>

<p>
    <a href = 'insert_employee.php'>add employee</a> 
</p>

    
<?php  include 'footer.php';
?>