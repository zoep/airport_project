<?php include 'header.php';
?>
<p>
    <a href = 'aircraft_model.php'>view models</a>
</p>
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
    </tr>
<?php
foreach( $employees as $employee ) {
    ?><tr>
        <td> <?php echo $employee[0]; ?></td> 
        <td> <?php echo $employee[1]; ?></td>
        <td> <?php echo $employee[2]; ?></td>
        <td> <?php echo $employee[3]; ?></td>
        <td> <?php echo $employee[4]; ?></td>
        <td> <?php echo $employee[5]; ?></td>
        <td> <?php echo $employee[6]; ?></td>
        <td> <?php echo $employee[7]; ?></td>
        <td> 
            <form action = "delete_employee.php" method = "post">
                <input name = "delssn" type = "hidden" value = "<?php echo $employee[0]; ?>">
                <input type = "submit" value = "delete">
            </form>
        </td>
        <td> 
            <form action = "update_employee.php" method = "post">
                <input name = "updssn" type = "hidden" value = "<?php echo $employee[0]; ?>">
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