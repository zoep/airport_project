<?php include 'header.php';
?>

<script src="js/jquery.validate.js" type="text/javascript"></script>
<script src="js/custom.js" type="text/javascript"></script>

<form class="cmxform" id="aircraftform" action = "submit_aircraft.php" method = "post">
    <table>
        <tr> 
            <td> Registration Number </td> <td > <input type = "text" id = "regnum" name = "regnum"> </td>
        </tr>
        <tr> 
            <td> Air Carrier </td> <td > <input type = "text" id = "carrier" name = "carrier"> </td>
        </tr>
        <tr> 
            <td> Construction Date </td> <td > <input type = "text" name = "condate" id="datepicker"> </td>
        </tr>
        <tr> 
            <td> Model Name </td>
        <td>    
            <select name ="mname">
                <?php 
                foreach ( $models as $model ) {
                ?>                
                <option value="<?php echo $model[ 0 ] ?>"><?php echo $model[ 1 ]; ?> </option>
                <?php 
                } 
                ?>

            </select>
        </td>
        </tr>
        <tr>
            <td> <input type = "submit" name = "submit" value = "submit"> </td>
        </tr>
    </table>

</form> 
<?php  include 'footer.php';
?>
