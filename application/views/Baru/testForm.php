<!DOCTYPE html>
<html lang="en">
<head>
    <title> Contact us! </title>
</head>
<body>
    <div class="contact-form">
        <h3 class="section-title"> Contact us </h3>
        <form>
        <p> Nama lengkap </p>
            <input>
        <p> Alamat </p>
            <textarea></textarea>
        <p> Gender </p>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Laki-laki</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Perempuan</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Lain-lain</label>
        <p> Untuk siapa pesan ini disampaikan? </p>
            <input id="Admin" name="tujuan-pesan" type="checkbox" value="Admin">
            <label id="Admin">Admin/Makelaar</label>
            <input id="Reviewer" name="tujuan-pesan" type="checkbox" value="Reviewer">
            <label for="Reviewer">Reviewer</label>
            <input id="Customer" name="tujuan-pesan" type="checkbox" value="Customer">
            <label for="Customer">Customer</label>
        <p> Pesan atau Saran </P>
            <textarea></textarea>
        <p>Wajib diisi!</p>
        <input class="contact-submit" type="submit" value="Kirim">
        </form>
    </div>
</body>