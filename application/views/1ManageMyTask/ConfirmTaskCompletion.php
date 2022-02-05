<!DOCTYPE html>
<html lang="en">
<head>
<title>Task is Completed!</title>
<!-- pls ini jangan diapa-apain
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
header {
    width:100%;
    height:100px;
    background-color: #6A404E  ;
}
.logo {
    width: 110px;
    height:auto;
    margin-top: 5px;
    margin-left: 10px;
    float: left;
    color: aliceblue;
    font-family: Helvetica;
    font-size: 25px;
    text-align: justify;
}

.desc {
    text-align: center;
}

.text {
    text-align: center;
}
.back {
    text-align: center;
}
input {
    text-align: center;
} 

.contact-form {
    text-align: left;
}

.btn-back {
  margin: 20px 0;
}

.back {
  background-color: #CC90A3 ;
  margin-right: 10px;
  ;
}
-->
</style>
  <body>
    <header>
        <!--
        <div class="navbar">
        <img class="logo" src="http://localhost/ereview/pictures/Book2.png">    
        <h1 class="logo">E-review</h1>
        </div>
`       -->
    </header>
    <h1><center><img src="http://localhost/ereview/img/ereviewer.jpeg"></center></h1>
        <h2 class="desc" style="text-align:center">Task sudah diselesaikan.</h2>
        <div class="text" style="text-align:center">Silahkan mengecek hasil review kembali. </div>
        <div class="file" style="text-align:center">
            <a href="#" style="text-align:center"> File hasil review </a>
        </div>
        <div class="btn-wrapper" style="text-align:center">
        <a href="#" class="review-done" > Submit Review </a>
    </div>
        <div class="contact-form" style="text-align:center">
        <h3 class="Suggestions"> Kritik dan Saran </h3>
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
            <label for="other">Tidak ingin menyebutkan</label>
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
        <input class="contact-submit" type="submit" value="Kirim" style="text-align:center">
        </form>
    </div>
    <div class="btn-wrapper">
        <a href="#" class="btn back"> Kembali </a>
    </div>