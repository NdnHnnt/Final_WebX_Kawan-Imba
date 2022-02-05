<style>

</style>
  <div id="services" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h6>Task Accepted</h6>
            <h2>Please Click the <span>Download Button</span> Below to Download the <em>Paper</em></h2>
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
                  <td class="table1" style="text-align: center;"> Task ID </td>
                  <td class="table1" style="text-align: center;"> Editor </td>
                  <td class="table1" style="text-align: center;"> Title </td>
                  <td class="table1" style="text-align: center;"> Keywords </td>
                  <td class="table1" style="text-align: center;"> File </td>
                <tr class="table1" >
                  <?php $i=0;
                  if (sizeof($all)>0){
                    foreach ($all as $item) {
                    $i++; ?>
                <tr class="table1">
                  <td class="table1"></td>
                  <td class="table1" style="text-align: center;"> <?php echo " ",$item['id_penugasan']." " ?> </td>
                  <td class="table1" style="text-align: center;"> <?php echo $this->CI->viewEditor($item['id_editor']); ?> </td>
                  <td class="table1" style="text-align: center;"> <?php echo $item['judul'] ?> </td>
                  <td class="table1" style="text-align: center;"> <?php echo $item['kata_kunci'] ?> </td>
                  <td class="table1"><a href="<?php echo base_url().'index.php/reviewerctl/downloadFile/',$item['file_penugasan']; ?>" target="_blank">
                 Download </a>
                </td>
                <tr class="table1">
                  <?php } 
                  }
                  else { ?>
                <tr>
                  <td colspan="5"> <?php echo " Data isn't found " ?> </td>
                <tr>
                <?php } ?> 
              </table>
            </div>
            <div class="row">
            <div class="main-green-button scroll-to-section"><center>
            <br> <br> <a href="#">Complete a task</a>
            </div>
            </div>
        </div>
    </div>
    </div> 