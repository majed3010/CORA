<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Redfined Path&nbsp;For&nbsp;Malware Security, Benefits of CORA&nbsp;&nbsp;For Malware analyst &amp;amp; Threat Intel analyst, Fast &amp;amp; Efficient Scanning, CIA Traid, Stress relief, CORA Built with variety of tools​​​, Have any Concerns ?, contact form, follow us">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Ubuntu:300,300i,400,400i,500,500i,700,700i">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/CORA-LOGO.png"
}</script>
<meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Home.html" data-home-page-title="Home" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-c68e"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="./login.php" class="u-image u-logo u-image-1" data-image-width="158" data-image-height="183">
          <img src="images/CORA-LOGO.png" class="u-logo-image u-logo-image-1">
        </a>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <!-- Select2 -->
  <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
   <!-- SweetAlert2 -->
  <link rel="stylesheet" href="assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="assets/plugins/dropzone/min/dropzone.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/dist/css/styles.css">
	<script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
 <!-- summernote -->
  <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">
  </head>
  <h1>Register </h1>
<form action="./register.php" method="post" enctype="multipart/form-data" >
				<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
				<div class="row">
					<div class="col-md-6 border-right">
						<b class="text-muted">Personal Information</b>
						<div class="form-group">
							<label for="" class="control-label">First Name</label>
							<input type="text" name="firstname" class="form-control form-control-sm" required value="<?php echo isset($firstname) ? $firstname : '' ?>">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Middle Name</label>
							<input type="text" name="middlename" class="form-control form-control-sm"  value="<?php echo isset($middlename) ? $middlename : '' ?>">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Last Name</label>
							<input type="text" name="lastname" class="form-control form-control-sm" required value="<?php echo isset($lastname) ? $lastname : '' ?>">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Contact No.</label>
							<input type="text" name="contact" class="form-control form-control-sm" required value="<?php echo isset($contact) ? $contact : '' ?>">
						</div>
						<div class="form-group">
							<label class="control-label">Address</label>
							<textarea name="address" id="" cols="30" rows="4" class="form-control" required><?php echo isset($address) ? $address : '' ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						<b class="text-muted">System Credentials</b>
                        <br>
							<label class="control-label">Email</label>
							<input id="email" type="email" class="form-control form-control-sm" name="email" onkeyup="return EmailChange();" required value="<?php echo isset($email) ? $email : '' ?>">
							<span id="strength-email"></span>

						</div>
						<div class="form-group">
							<label class="control-label">Password</label>
							<input type="password" id="password" class="form-control form-control-sm" name="password" onkeyup="return passwordChanged();" 
							<?php 							
							echo isset($id) ? "":'required'
							?>
							>
							<span id="strength"></span>
							<small><i><?php echo isset($id) ? "Leave this blank if you dont want to change you password":'' ?></i></small>
						</div>
						<div class="form-group">
							<label class="label control-label">Confirm Password</label>
							<input type="password" class="form-control form-control-sm" name="cpass" <?php echo isset($id) ? 'required' : '' ?>>
							<small id="pass_match" data-status=''></small>
                            <a href="login.php" class="ca">Already have an account?</a>
						</div>
							<div class="custom-file">
		                    </div>
						</div>
						<div class="form-group d-flex justify-content-center">
							<img src="<?php echo isset($avatar) ? 'assets/uploads/'.$avatar :'' ?>" alt="" id="cimg" class="img-fluid img-thumbnail">
						</div>
						<?php if(false): ?>
						<div class="form-group">
							<label for="" class="control-label">User Role</label>
							<select name="type" id="type" class="custom-select custom-select-sm">
								<option value="2" <?php echo isset($type) && $type == 2 ? 'selected' : '' ?>>User</option>
								<option value="1" <?php echo isset($type) && $type == 1 ? 'selected' : '' ?>>Admin</option>
							</select>
						</div>
						<?php else: ?>
							<input type="hidden" name="type" value="3">
						<?php endif; ?>
						
					</div>
				</div>
				<hr>
				<div class="col-lg-12 text-right justify-content-center d-flex">
					<button class="btn btn-primary mr-2" name="submit" type="submit">Save</button>
					<button class="btn btn-secondary" type="button" onclick="location.href = 'index.html'">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>

            
<?php

if(isset($_POST['submit'])){
    $conn= new mysqli('localhost','root','','odss_db')or die("Could not connect to mysql".mysqli_error($conn));
    //if($_FILES['img']['tmp_name'] != ''){
       // $fname = strtotime(date('y-m-d H:i')).'_'.$_FILES['img']['name'];
     //   $move = move_uploaded_file($_FILES['img']['tmp_name'],'assets/uploads/'. $fname);
   // }
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $email = $_POST['email'];
	$password = $_POST['password'];
    if(strlen($_POST["password"]) <= 8) {
		print 
		"<script>
			alert('At least 8 characters');
		</script>";
	}elseif(!preg_match("#[0-9]+#",$password)) {
		print 
		"<script>
			alert('Your Password Must Contain At Least 1 Number!');
		</script>";
	}elseif(!preg_match("#[A-Z]+#",$password)){
		print 
		"<script>
			alert('Your Password Must Contain At Least 1 Capital Letter!');
		</script>";
	}elseif(!preg_match("#[a-z]+#",$password)){
		print 
		"<script>
			alert('Your Password Must Contain At Least 1 Lowercase Letter!');
		</script>";
	}else {
		$password = md5($_POST['password']);
		if($conn->query("INSERT INTO users VALUES (null, ' $firstname', '$lastname', '$middlename', '$contact', '$address', '$email', '$password', '2', '', current_timestamp())")){
		print 
		"<script>
			alert('Account created successfully');
			location.replace('login.php')
		</script>";
	
		} else {
			   echo 'Error :(';
	 }
	}
}




?>

<script language="javascript">
	$('[name="password"],[name="cpass"]').keyup(function(){
		var pass = $('[name="password"]').val()
		var cpass = $('[name="cpass"]').val()
		if(cpass == '' ||pass == ''){
			$('#pass_match').attr('data-status','')
		}else{
			if(cpass == pass){
				$('#pass_match').attr('data-status','1').html('<i class="text-success">Password Matched.</i>')
			}else{
				$('#pass_match').attr('data-status','2').html('<i class="text-danger">Password does not match.</i>')
			}
		}
	})
	///^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

	function EmailChange(){
		var strength = document.getElementById('strength-email');
        var Regex = new RegExp(/^[A-Za-z0-9_!#$%&'*+\/=?`{|}~^.-]+@[A-Za-z0-9.-]+$/, "gm");

		var email = document.getElementById("email");
		if(email.value.length == 0){
			strength.innerHTML = '<span style"color:gray"><b>Please Enter Your Email !</b></span>';
		}else if(Regex.test(email.value)) {
			strength.innerHTML = '<span style = "color:green"> <b>Valid Email !</b></span>'

		}else{
			strength.innerHTML = '<span style = "color:orange"> <b>Not A valid Email !</b></span>'

		}

	}
	function passwordChanged() {
        var strength = document.getElementById('strength');
        var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
        var mediumRegex = new RegExp("^(?=.{8,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
        var enoughRegex = new RegExp("(?=.{8,}).*", "g");
        var pwd = document.getElementById("password");
        if (pwd.value.length == 0) {
            strength.innerHTML = '';
        } else if (false == enoughRegex.test(pwd.value)) {
            strength.innerHTML = '<span style"color:gray"><b>Atleast 8 Character</b></span>';
        } else if (strongRegex.test(pwd.value)) {
            strength.innerHTML = '<span style="color:green">Strong!</span>';
        } else if (mediumRegex.test(pwd.value)) {
            strength.innerHTML = '<span style="color:orange">Medium! <b>You Need At Least A Captial Letter, & a Special Case (@,$,...)</b></span>';
        } else {
            strength.innerHTML = '<span style="color:red">Weak! <b>You Need At Least One Number</b></span>';
        }
    }
	function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
	$('#manage_user').submit(function(e){
		e.preventDefault()
		$('input').removeClass("border-danger")
		start_load()
		$('#msg').html('')
		if($('#pass_match').attr('data-status') != 1){
			if($("[name='password']").val() !=''){
				$('[name="password"],[name="cpass"]').addClass("border-danger")
				end_load()
				return false;
			}
		}
        
		$.ajax({
			url:'ajax.php?action=save_user',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp == 1){
					alert_toast('Data successfully saved.',"success");
					setTimeout(function(){
						location.replace('login.php')
					},750)
				}else if(resp == 2){
					$('#msg').html("<div class='alert alert-danger'>Email already exist.</div>");
					$('[name="email"]').addClass("border-danger")
					end_load()
				}
			}
		})
	})
</script>