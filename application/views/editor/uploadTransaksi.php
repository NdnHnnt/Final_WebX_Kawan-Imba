<br><br><br><br><br>
<html>
    <head>
        <title>Add Transaction</title>
	    <meta charset="utf-8">
    <head>
    <body>
        <div align = "center">
            <h2> Add Transaction </h2><br>
            <h6>Please make sure to input the correct task ID, or else, your payment won't be confirmed by our reviewer</h6><br>
            <?php echo form_open_multipart(base_url() . 'index.php/editorctl/uploadTransaction')?>
            <table style="padding: 5px;">
                <tr>
                    <td style="padding: 5px;">Task ID </td>
                    <td style="padding: 5px;"><input type="id_penugasan" id="id_penugasan" name="id_penugasan" width="100"></td>
                </tr>
                <tr>
                    <td><label for="photo"> Proof of Transaction </label></td>
                    <td><input type="file" id="userfile" name="userfile" width="20"> </td>
                </tr>
            </table> <br>
	       <input type="submit" value="Upload">
        </div>
    </body>
</html>