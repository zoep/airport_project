<script type="text/javascript" src = "js/myscripts.js"></script>

<div class="tabsmenu">
    <a href = 'insert_checktypes.php'>add checktype</a> 
</div>

<table class = "listing">
    <tr>
        <th >Checktype ID</th>
        <th >Check Name</th>
        <th >Max Score</th>
        <th ></th>
        <th ></th>
    </tr>
<?php
foreach( $checktypes as $checktype ) {
    ?><tr>
        <td> <?php echo $checktype[0]; ?></td> 
        <td> <?php echo $checktype[1]; ?></td>
        <td> <?php echo $checktype[2]; ?></td>
        <td> 
            <form class ="buttons" action = "delete_checktypes.php" method = "post">
                <input name = "delchecktypeid" type = "hidden" value = "<?php echo $checktype[0]; ?>">
                <input type = "submit" value = "delete">
            </form>
        </td>
        <td> 
            <form class ="buttons" action = "update_checktypes.php" method = "post">
                <input name = "updchecktypeid" type = "hidden" value = "<?php echo $checktype[0]; ?>">
                <input type = "submit" value = "update">
            </form>
        </td>
      </tr>
    <?php } ?>
</table>


    
