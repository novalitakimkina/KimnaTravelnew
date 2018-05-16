<!DOCTYPE html>
<html>
<head>
	<title>Data mahasiswa</title>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>
        <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet"></link>
        <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet"></link>
        <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap-fileupload.min.css"></link>

        <script src="<?= base_url() ?>assets/jquery/jquery-2.1.4.min.js"></script>
        <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
        <style>
            body {
                font: 400 15px/1.8 Lato, sans-serif;
                color: white;
                background : url(../../assets/image/sp.jpg) no-repeat center center;
                background-size : cover;
                opacity : 0.8;
             }
 
	  		h2{
	  			font-color : black;
	  		}
	  		.kotak {
	  		border-radius : 30px;
	  		background-color: #000000 ;   

	 		padding: 40px;
	 		max-width:450px;
	 		
	  		margin:100px auto;
	  		opacity : 0.8;
	  		
	  		}
	  		.tulis {
	  			padding : 180px;
	  			color : white ;
	  		}
	  		.social i{
	font-size: 340%;
	margin: 1%;
	padding : 5% 5% 5% 4%;
	color : #b0bec5;
}
.social i:hover{
	color : #F5F5F5;
}


         </style>
</head>

	<body>
		<div class ="row">
				<div class ="col-sm-6">
	<div class ="kotak">
			<center><h2>Daftarkan Diri Anda</h2></center>
		<form method="POST" action="<?php echo base_url()."index.php/crud/do_insert"; ?>">
		<div class="form-group">
		<label for="nomor">Id</label><br>
      <input type="id" class="form-control" id="id" placeholder="Enter Your Id" name="id">
    </div>
			<div class="form-group">
		<label for="Username">Username</label><br>
      <input type="Username" class="form-control" id="username" placeholder="Enter Your Username" name="username" >
    </div>
		<div>
				<div class="form-group">
		<label for="email">Password</label><br>
				  <input type="password" class="form-control" id="password" placeholder="Enter Your Password" name="password" >
		</div>
		</div>
		<div class="form-group">
		<label for="Fullname">Username</label><br>
      <input type="fullname" class="form-control" id="fullname" placeholder="Enter Your Fullname" name="fullname" >
    </div>
    <div class="form-group">
		<label for="level">level</label><br>
      <input type="level" class="form-control" id="level" placeholder="Enter Your Level" name="level" >
    </div>

		<button type="submit" class="btn btn-default">Submit</button>

		</div>
		</div>


		</form>
		<div class ="col-sm-6">
				<div class = "tulis">
		 <h2><b>daftarkan diri anda sekarang juga..!!</b></h2><br>
		<b>Ayo ayoo jangan lewatkan <br>
		untuk dapat membantu teman-teman kita..!!</b><br>
		<br><br>
		<div class="icon-text-text">
					<ul class="social">
		<a href="mailto:novalitakimkina@gmail.com"><i class=" fa fa-envelope"></i></a>
					<a href="https://www.facebook.com/Novalita Kimkina Livia"><i class=" fa fa-facebook"></i></a>
					<a href="https:plus.google.com"><i class=" fa fa-google-plus"></i></a>
		 		</div>
		</div>
		
	</body>
	
	</div>
	</div>
	</div>

</html>