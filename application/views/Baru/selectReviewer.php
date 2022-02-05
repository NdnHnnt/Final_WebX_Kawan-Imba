<!DOCTYPE html>
<html lang="en">
<head>
    <title> Select Reviewer </title>
</head>
<body>
<content>
    <div class="reviewer-form">
        <h3 class="section-title"> Select your reviewer! </h3>
        <table border="1">
            <tr>
                <td> ID Reviewer </td>
                <td> Nama </td>
            <tr>
                <?php $i=0;
                if (sizeof($reviewers)>0){
                    foreach ($reviewers as $item) {
                    $i++; ?>
            <tr>
                <td> </td>
                <td> <?php echo $item['id_reviewer'] ?> </td>
                <td> <?php echo $item['nama'] ?> </td>
            <tr>
                <?php } 
                }
                else { ?>
            <tr>
                <td colspan="5"> <?php echo "Tidak ditemukan data" ?> </td>
            <tr>
            <?php } ?> 
        </table>
        <br>
        <br> <button> Submit </button> <br>
        <br> <button> Cancel </button>
       <!-- <input class="contact-submit" type="submit" value="Kirim"> -->
            
        
    </div>
</content>
</body>