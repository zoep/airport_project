<?php include 'header.php';
?>
<form class="cmxform" id="checksform" action = "change_checks.php" method = "post">
    <table class = "formz">
        <tr> 
             <td> Registration Number </td> <td > <input type = "text" readonly = "readonly" value = " <?php echo $get[ 1 ];?> " name = "regnum" > </td>
        </tr>
        <tr> 
             <td> Check id </td> <td > <input type = "text" readonly = "readonly" name = "checkid" value = "<?php echo $get [ 0 ]; ?>" > </td>
        </tr>
        <tr> 
             <td> Check Name </td> <td > <input type = "text" readonly = "readonly" name = "checkname" value = "<?php echo $get[ 7 ]; ?>" > </td>
        </tr>
        <tr> 
             <td> Supervisor </td> <td > <input type = "text" readonly = "readonly" name = "supervisor" value = "<?php echo $get[ 18 ]; ?>" > </td>
        </tr>
        <tr> 
             <td> Duration </td> <td > <input type = "text" name = "duration" value = "<?php echo $get[ 4 ]; ?>" > </td>
        </tr>
        <tr> 
             <td> Score </td> <td > <input type = "text" name = "score" value = "<?php echo $get[ 5 ]; ?>" > </td>
        </tr>
        <tr>
             <td> Date </td> <td> <input type = "text" name = "date" id="datepicker" value="<?php echo $get[ 6 ]; ?>"></td>
        </tr>
        <tr>
            <td>
            </td>
            <td> 
                <div class = "buttons">
                    <input type = "submit" name = "submit" value = "submit"> </td>
                </div>
            </td>
        </tr>
    </table>

</form> 
<?php  include 'footer.php';
?>
