<?php include 'header.php';
?>

<form class="cmxform" action = "submit_model.php" id="modelform" method = "post">
    <table class= "formz">
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
            <td></td>
            <td>
                <div class="buttons">
                     <input type = "submit" name = "submit" value = "submit"> 
                </div>
            </td>
        </tr>
    </table>

</form> 
<?php  include 'footer.php';
?>
