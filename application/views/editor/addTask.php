
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
            <h6>Add Task</h6>
            <h2>Please Upload the <span>Paper</span> That You Want to be <em>Reviewed</em> Below</h2>
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
                <p><center> is required <span style="color:red">*</span>
                  </br><span style="color:red"> </span>
                </p>
                <?php echo form_open_multipart(base_url() . 'index.php/editorctl/assigningTask');?>
                <table>
                  <tr>
                    <td> Reviewer's ID </td>
                    <td><input type="text" id="idreviewer" name="idreviewer" width="100" required/></td>
                  </tr>
                  <tr>
                    <td> Title </td>
                    <td><input type="text" id="judul" name="judul" width="100" required/></td>
                  </tr>
                  <tr>
                    <td> Keywords </td>
                    <td><input type="text" id="katakunci" name="katakunci" width="100" required/></td>
                  </tr>
                  <tr>
                    <td> File Review: </td>
                    <td>
                    <input type="file" id="userfile" name="userfile" width="20" required/>
                    </td>
                  </tr>
                </table>
                <input type="submit" value="Upload"><br/><br/>
            </div>
          </div>
        </div>
      </div>