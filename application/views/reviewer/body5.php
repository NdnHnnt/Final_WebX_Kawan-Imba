<div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>All Task(s)</h6>
            <h2>These are the <em>tasks</em> that you've been <span>assigned</span> to</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
          <div class="loop owl-carousel">
            <div class="item">
              <table class="table1">
                <th class="table1">
                  <td class="table1">Title</td>
                  <td class="table1"> Keywords </td>
                  <td class="table1"> Status </td>
                <tr class="table1">
                  <?php $i=0;
                  if (sizeof($task)>0){
                    foreach ($task as $item) {
                    $i++; ?>
                <tr class="table1">
                  <td style="border: transparent;"></td>
                  <td class="table1"> <?php echo $item['judul'] ?> </td>
                  <td class="table1"> <?php echo $item['kata_kunci'] ?> </td>
                  <td class="table1">
                    <?php
                      $temp = $item['penugasan_status'];
                      if ($temp == 0){
                        echo "Requested";
                      }
                      elseif ($temp == 1){
                        echo "Accepted, on Progress";
                      }
                      elseif ($temp == 2){
                        echo "Rejected";
                      }
                      elseif ($temp == 3){
                        echo "Waiting for Payment";
                      }
                      elseif ($temp == 4){
                        echo "Waiting for confirmation";
                      }
                      elseif ($temp == 5){
                        echo "Done";
                      }
                      ?>
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
          </div>
        </div>
      </div>
    </div>