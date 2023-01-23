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
	<form action="ind.php?page=hash_analyzer" method="post">
    <input type="text" value="" name="IOC"/>
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
$api = new VirusTotalAPIV2('e0e7385c28d6b70ed375e82dcf45a5c17fe544decfe3bd540ede911aae94e638');

if(isset($_POST['IOC'])){
    $IOC = $_POST['IOC'];

/* Get a file report. */
 $report = $api->getFileReport($IOC);
 $api->displayResult($report);
 print($api->getSubmissionDate($report) . '<br>');
 print($api->getReportPermalink($report, TRUE) . '<br>');

}
?>
                <dd></dd>
						</dl>
					</div>
					
				</div>
			</div>
		</div>
		