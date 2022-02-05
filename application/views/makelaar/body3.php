<div id="reviewed" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h6>Reviewed Paper</h6>
            <h2>Here are the <span>Reviewed</span> Paper Along with the <em>Review Fee</em></h2>
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
                  <td class="table1"> Reviewed Paper ID </td>
                  <td class="table1"> Task ID </td>
                  <td class="table1"> Price </td>
                  <td class="table1"> Reviewed Paper </td>
                <tr>
                  <?php $i=0;
                  if (sizeof($reviewed)>0){
                    foreach ($reviewed as $item) {
                    $i++; ?>
                <tr>
                  <td></td>
                  <td class="table1"> <?php echo $item['id_hasilreview'] ?> </td>
                  <td class="table1"> <?php echo $item['id_penugasan'] ?> </td>
                  <td class="table1"> <?php echo $item['biaya_review'] ?> </td>
                  <td class="table1""><a href="<?php echo base_url().'index.php/makelaarctl/downloadFile/',$item['filereview']; ?>" target="_blank">
                Download</a>
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
        </div>
    </div>
    </div> 


