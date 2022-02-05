<style>
.hide {
  display: none;
}

.myDIV:hover + .hide {
  display: block;
  color: red;
}
</style>

<div id="services" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h6>Reviewed Paper</h6>
            <h2>Here are the <span>Reviewed</span> Paper and Please <em>Proceed</em> to Make a Transaction as Soon as Possible</h2>
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
                  <td class="table1"> Reviewer ID </td>
                  <td class="table1"> Title </td>
                  <td class="table1"> File </td>
                  <td class="table1"> Price </td>
                  <td class="table1"> Status </td>
                <tr>
                  <?php $i=0;
                  if (sizeof($paper)>0){
                    foreach ($paper as $item) {
                    $i++; ?>
                <tr>
                  <td></td>
                  <td class="table1" > <?php echo $item['id_penugasan'] ?> </td>
                  <td class="table1" >
                    <div class="myDIV"><?php echo $item['id_reviewer'] ?></div>
                    <div class="hide">Account number: <?php echo $this->CI->viewReviewerAcc($item['id_reviewer']); ?></div>
                  </td>
                  <td class="table1" > <?php echo $item['judul'] ?> </td>
                  <td class="table1" > <a href="<?php echo base_url().'index.php/makelaarctl/downloadFile/',$item['filereview']; ?>" target="_blank">
                Download</a> </td>
                  <td class="table1"> <?php echo $item['biaya_review'] ?> </td>
                  <td class="table1">
                    <?php
                      $temp = $item['penugasan_status'];
                      if ($temp == 3){
                        echo "Waiting for Payment";
                      }
                      elseif ($temp == 4){
                        echo "Waiting for Reviewer's Confirmation";
                      }
                      ?>
                  </td>
                <tr>
                  <?php } 
                  }
                  else { ?>
                <tr>
                  <td class="table1" colspan="6"> <?php echo "Data isn't found" ?> </td>
                <tr>
                <?php } ?> 
              </table>
            </div>
        </div>
    </div>
    </div> 


