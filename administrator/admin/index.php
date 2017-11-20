<?php
	include '../koneksi.php';
	include 'header.php';
?>
			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Data Pemilih</h1>
					</div>
				</div>
            
				<div class="row">
					<div class="panel panel-default">
						<div class="panel-body">
							<button data-toggle="modal" data-target="#myModal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Pemilih</button>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<div class="panel-body">
										<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
											<thead>
												<tr>
													<th>No.</th>
													<th>NIM</th>
													<th>NAMA LENGKAP</th>
													<th>FAKULTAS</th>
													<th>PARTAI</th>
												</tr>
											</thead>
											
											<tbody>
												<?php
													$no = 1;
													$query = mysql_query('SELECT * FROM pemilih');
													while ($row = mysql_fetch_array($query)) {
												?>
												
												<tr>
													<td align="center"><?php echo $no++; ?></td>
													<td><?php echo $row['nim']; ?></td>
													<td><?php echo $row['nama']; ?></td>
													<td><?php echo $row['fakultas']; ?></td>
													<td><?php echo $row['partai'];?></td>
												</tr>
												
												<?php
													}
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Modal Pemilih -->
				<div id="myModal" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Tambah Pemilih Baru</h4>
							</div>
							<div class="modal-body">
								<form action="pemilih_act.php" method="post">
									<div class="form-group">
										<label>NIM</label>
										<input name="nim" type="text" class="form-control" placeholder="NIM" maxlength="10" onkeyup="validAngka(this)" required>
									</div>
									<div class="form-group">
										<label>Nama Lengkap</label>
										<input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" maxlength="50">
									</div>
									<div class="form-group">
										<label>Fakultas</label>
										<select class="form-control" name="fakultas">
											<option>Fakultas Teknologi Informasi</option>
											<option>Fakultas Ekonomi</option>
											<option>Fakultas Ilmu Ekonomi</option>
											<option>Fakultas Ilmu Sosial & Politik</option>
											<option>Fakultas Teknik</option>
											<option>International Program</option>
											<option>D3 - Unggulan</option>
											<option>Akademi Sekretari</option>
											<option>Pascasarjana</option>
										</select>
									</div>
									<div class="form-group">
										<label>Partai</label>
										<select class="form-control" name="partai">
											<option>Partai Apel</option>
											<option>Partai Bawang</option>
											<option>Partai Cabai</option>
										</select>
									</div>
							</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
									<input type="submit" class="btn btn-primary" value="Simpan">
								</div>
								</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="vendor/jquery/jquery.js"></script>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery/jquery-ui.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/metisMenu/metisMenu.min.js"></script>
		<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
		<script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
		<script src="vendor/datatables-responsive/dataTables.responsive.js"></script>
		<script src="vendor/raphael/raphael.min.js"></script>
		<script src="vendor/morrisjs/morris.min.js"></script>
		<script src="data/morris-data.js"></script>
		<script src="dist/js/sb-admin-2.js"></script>
		
		<script>
			//validasi angka
			function validAngka(a)
			{
				if(!/^[0-9.]+$/.test(a.value))
				{
					a.value = a.value.substring(0,a.value.length-1000);
				}
			}
			
			$(document).ready(function() {
				$('#dataTables-example').DataTable({
					responsive: true
				});
			});
		</script>
	</body>
</html>