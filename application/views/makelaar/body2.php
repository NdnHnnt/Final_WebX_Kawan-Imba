<div id="tasks" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h6>Tasks</h6>
            <h2>Here are the <span>Tasks</span> That Have been <em>Requested</em> in E-Review</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="row">
            <table class="table1">
                <th class="table1">
                  <td class="table1"> Task ID </td>
                  <td class="table1"> Reviewer ID </td>
                  <td class="table1"> Editor ID </td>
                  <td class="table1"> Title </td>
                  <td class="table1"> Keywords </td>
                  <td class="table1"> File</td>
                  <td class="table1"> Proof of Transaction</td>
                <tr>
                  <?php $i=0;
                  if (sizeof($tasked)>0){
                    foreach ($tasked as $item) {
                    $i++; ?>
                <tr>
                  <td></td>
                  <td class="table1"> <?php echo $item['id_penugasan'] ?> </td>
                  <td class="table1"> <?php echo $item['id_reviewer'] ?> </td>
                  <td class="table1"> <?php echo $item['id_editor'] ?> </td>
                  <td class="table1"> <?php echo $item['judul'] ?> </td>
                  <td class="table1"> <?php echo $item['kata_kunci'] ?> </td>
                  <td class="table1"><a href="<?php echo base_url().'index.php/makelaarctl/downloadFile/',$item['file_penugasan']; ?>" target="_blank">
                Download</a></td>
                  <td class="table1"> <?php echo $item['bukti_transaksi'] ?> </td>
                <tr>
                  <?php } 
                  }
                  else { ?>
                <tr>
                  <td class="table1" colspan="5"> <?php echo "Data isn't found" ?> </td>
                <tr>
                <?php } ?> 
              </table>
              </div>
            <div class="row">
            <div class="main-green-button scroll-to-section"><center>
            <br> <br> <a href="makelaarctl/getDataTask">Detailed Info</a>
            </div>
            </div>
        </div>
    </div>
    </div> 
