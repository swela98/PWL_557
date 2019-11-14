<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

	<div class="container" style="margin-top: 80px">
		<?php echo $this->session->flashdata('notif') ?>
		<a href="<?php echo base_url() ?>buku/tambah/" class="btn btn-md btn-success">Tambah</a>
		<a href="<?php echo base_url() ?>buku/riwayat/" class="btn btn-md btn-success">Lihat Riwayat</a>
		<hr>
		<!-- table -->
		<div class="table-responsive">
			<table id="table" class="table table-striped table-bordered table-hover">
			    <thead>
			      <tr>
			        <th>No.</th>
			        <th>NIM</th>
			        <th>Nama Mahasiswa</th>
			        <th>Jenis Kelamin</th>
			        <th>Alamat</th>
			        <th>No. HP</th>
			        <th>Options</th>
			      </tr>
			    </thead>
			    <tbody>

			    <?php
			    	$no = 1; 
			    	foreach($data_buku as $hasil){ 
			    ?>
			      
			      <tr>
			        <td><?php echo $no++ ?></td>
			        <td><?php echo $hasil->nim ?></td>
			        <td><?php echo $hasil->nama_mahasiswa ?></td>
			        <td><?php echo $hasil->jk ?></td>
			        <td><?php echo $hasil->alamat ?></td>
			        <td><?php echo $hasil->no_hp ?></td>
			        <td>
			        	<a href="<?php echo base_url() ?>buku/edit/<?php echo $hasil->id ?>" class="btn btn-sm btn-success">Edit</a>
			        	<a href="<?php echo base_url() ?>buku/hapus/<?php echo $hasil->id ?>" class="btn btn-sm btn-danger">Hapus</a>
			        </td>
			      </tr>

			    <?php } ?>

			    </tbody>
			  </table>
		</div>

	</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
	$('#table').DataTable( {
    autoFill: true
} );
</script>
</body>
</html>