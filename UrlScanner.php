<?php
include 'db_connect.php';

?>
<div class="col-lg-12">
      <?php if(isset($_SESSION['login_id'])): ?>
	
	</div>
    <?php endif; ?>
	<div class="row">
		<div class="col-md-7">
			<div class="card card-outline card-info">
				<div class="card-header">
					<div class="card-tools">
						<small class="text-muted">
						</small>
					</div>
				</div>
				<div class="card-body">
                <form action="ind.php?page=UrlScanner" method="post" onsubmit="showHide()">
  <input type="text" value="" name="URL"/>
  <input type="submit" value="Submit" class="btn btn-primary"/>
</form>




                <span class="colortext">
               
                     <dd></dd>
						</dl>
					</div>
					
				</div>
			</div>
            <div class="col-md-7" id="hidden_div" >
			<div class="card card-outline card-info">
				<div class="card-header">
				<img src="images/VirusTotal_logo.svg.png" alt="VT" style="width:150px;height:50px;">

					<div class="card-tools">
						<small class="text-muted">
						</small>
					</div>
				</div>
				<div class="card-body">
                <?php
                    require_once('VirusTotalApiV2.php');

                    /* Initialize the VirusTotalApi class. */
                    $api = new VirusTotalAPIV2('a44c29d8e8db25e72a9680d1dc88e42b79d39b92bffb9a46a0cb013e8f5975ab');

                    if(isset($_POST['URL'])){
                        $URL = $_POST['URL'];

                    $report = $api->scanURL($URL);
                    $report = $api->getURLReport($URL);
                    $api -> displayResult($report);
                    }
                    ?>
		</div>
        
		