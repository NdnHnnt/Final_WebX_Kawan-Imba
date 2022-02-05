  <div id="services2" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h6>Payment Confirmation</h6>
            <h2>Please Click the <span>Button Below</span> to Confirm a <em>Payment</em></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="row">
            <table class=table1>
                <th class="table1">
                  <td class="table1"> Task ID </td>
                  <td class="table1"> Title </td>
                  <td class="table1"> Proof of Transaction </td>
                <tr class="table1">
                  <?php $i=0;
                  if (sizeof($pay)>0){
                    foreach ($pay as $item) {
                    $i++; ?>
                <tr class="table1">
                  <td></td>
                  <td class="table1" style="text-align: center;"> <?php echo $item['id_penugasan'] ?> </td>
                  <td class="table1" style="text-align: center;"> <?php echo $item['judul'] ?> </td>
                  <td class="table1"><a href="<?php echo base_url().'index.php/reviewerctl/downloadTransaction/',$item['bukti_transaksi']; ?>" target="_blank">
                  Check </a>
                </td>
                <tr class="table1">
                  <?php } 
                  }
                  else { ?>
                <tr class="table1">
                  <td class="table1" colspan="5"> <?php echo "Data isn't found" ?> </td>
                <tr class="table1">
                <?php } ?> 
              </table>
            </div>
            <div class="row">
            <div class="main-green-button scroll-to-section"><center>
            <br> <br> <a href="reviewerctl/confirm">Confirm a Payment</a>
            </div>
            </div>
        </div>
    </div>
    </div> 