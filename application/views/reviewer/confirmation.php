
<br>
<br>
<br>
<br>
<br>
<br>
<div id="services" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h6>Confirm</h6>
            <h2>Please Confirm the <span>Payment</span> here</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="row">
            </div>
            <div class="row">
                <p><center> please input the correct Task ID to confirm the payment
                </p>
                <?php echo form_open_multipart(base_url() . 'index.php/reviewerctl/confirming');?>
            <table>
              <tr>
                <td>Task ID </td>
                <td><input type="text" id="idpenugasan" name="idpenugasan" width="100" required/></td>
              </tr>
              <tr>
                <td>Check</td>
                <td> <input type="checkbox" required/> </td>
              </tr>
            </table>
          <input type="submit" value="Confirm"><br/><br/>
         </div>
      </div>
    </div>
  </div>