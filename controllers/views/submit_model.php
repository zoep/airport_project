<?php include 'header.php';
?>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script src="js/custom.js" type="text/javascript"></script>


<form class="cmxform" action = "submit_model.php" id="modelform" method = "post">
    <table>
        <tr> 
            <td> Model Code </td> <td > <input type = "text" id = "model_code" name = "model_code"> </td>
        </tr>
        <tr> 
            <td> Model Name </td> <td > <input type = "text" id = "model_name" name = "model_name"> </td>
        </tr>
        <tr> 
            <td> Manufacturer </td> <td > <input type = "text" id = "manufacturer" name = "manufacturer"> </td>
        </tr>
        <tr> 
            <td> Capacity </td> <td > <input type = "text" id  = "capacity" name = "capacity"> </td>
        </tr>
        <tr> 
            <td> Weight </td> <td > <input type = "text" id = "weight" name = "weight"> </td>
        </tr>
        <tr>
            <td> <input type = "submit" name = "submit" value = "submit"> </td>
        </tr>
    </table>

</form> 
<?php  include 'footer.php';
?>
