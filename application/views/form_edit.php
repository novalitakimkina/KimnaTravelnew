<!DOCTYPE html>
<html>
<head>
	<title>Data User</title>
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
                background : url(../../assets/image/rrr.jpg) no-repeat center center;
                background-size : cover;
                opacity : 0.8;
             }
 
	  		h2{
	  			color : white;
	  		}
	  		.container {
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
		<form method="POST" action="<?php echo base_url()."index.php/crud/do_update"; ?>">
		<div class="container">
			 <center><h2>Edit Data</h2></center>
		<form method="POST" action="<?php echo base_url()."index.php/crud/do_insert"; ?>">
		<div class="form-group">
		<label for="id">id</label><br>
      <input type="id" class="form-control" id="id" placeholder="Enter Your Id" name="id">
    </div>
			<div class="form-group">
		<label for="username">Username</label><br>
      <input type="username" class="form-control" id="username" placeholder="Enter Username" name="username" >
    </div>
    	<div class="form-group">
		<label for="password">Password</label><br>
      <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" >
    </div>
    	<div class="form-group">
		<label for="fullname">Fullname</label><br>
      <input type="fullname" class="form-control" id="fullname" placeholder="Enter Fullname" name="fullname" >
    </div>
		<div>
				<div class="form-group">
		<label for="level">Level</label><br>
				  <input type="level" class="form-control" id="level" placeholder="Enter Level" name="level" >
		</div>
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
		</div>
		</div>
		</form>
	</body>
	</div>
	</ul>
	</div>
	</div>
</html>