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
        body{
        	
        	padding : 75px 50px 75px ;
        }
        #customers {
	    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	    border-collapse: collapse;
	    width: 100%;
		}

		#customers td, #customers th {
   		border: 3px solid #ccff90;
    	padding: 8px;
		}

		#customers tr:nth-child(even){background-color: #f2f2f2;}

		#customers tr:hover {background-color: #ddd;}

		#customers th {
   		padding-top: 12px;
    	padding-bottom: 12px;
    	text-align: left;
    	background-color: #4CAF50;
    	color: white;
		}
		</style>
</head>
	<body>
	<div class ="container">
		<center><h2>DATA User </h2></center>
	 <?php echo  "<h2>".$this->session->flashdata('pesan')."</h2>"?>
		<table id="customers">
      <tr>
       	<th> No. </th>
		<th>id</th>
		<th>Username</th>
		<th>Password</th>
    <th>Fullname</th>
    <th>Level</th>
		<th>Action</th>
      </tr>
  		<?php $nomor=1; ?>
      <?php foreach($data as $d) { ?>
      <tr>
     	<td><?php echo $nomor++; ?></td>
      <td><?php echo $d['id']; ?></td>
      <td><?php echo $d['username']; ?></td>
      <td><?php echo $d['password']; ?></td>
      <td><?php echo $d['fullname']; ?></td>
      <td><?php echo $d['level']; ?></td>
		<td>  
			<a href="<?php echo base_url()."index.php/crud/edit_data/" .$d['id']; ?>"> <button type="button" class="btn btn-danger">Edit</button></a> || 
			<a href="<?php echo base_url()."index.php/crud/do_delete/" .$d['id']; ?>"><button type="button" class="btn btn-info">Delete</button></a></td>
      </tr>
      <?php } ?>
  </table><br>
  <div class = "container">
 <div class ="row">
 	<div class ="col-sm-6">
  <a href ="<?php echo base_url()."index.php/crud/add_data"; ?>"><button type="button pull-left" class="btn btn-primary">Tambah Data</button></a>
  </div>
  </div>
  </div>

  <br/>
  <div class ="col-sm-6">
	<?php 
	echo $this->pagination->create_links();
	?>
	</div>
	</div>

</body>
</html>