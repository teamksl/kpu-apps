<?php
	include '../koneksi.php';
	include 'header.php';
?>

			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
						<div id="area-1">
							<div>
								<div align="center">
									<h1>LOGO</h1>
									<!-- <img src="gambar.png" alt="Logo"/><br> -->
								</div>
								<hr>
							</div>
							<br />
							<div>
								<?php
									$partai = $_POST['partai'];
									$get = mysql_query("SELECT * FROM pemilih WHERE partai='$partai'");
									$row = mysql_fetch_array($get)
								?>
								<span style="margin-left: 120px"><b>Nama Partai : <?php echo $row['partai']; ?></b></span>
								<br />
								<br />
								<table width="700px" border="1" cellspacing="0" align="center">
									<tr>
										<td align="center"><b>No.</b></td>
										<td align="center"><b>NIM</b></td>
										<td align="center"><b>Nama lengkap</b></td>
										<td align="center"><b>Fakultas</b></td>
									</tr>
									<tr>
										<?php
											$no = 1;
											$partai = $_POST['partai'];
											$get = mysql_query("SELECT * FROM pemilih WHERE partai='$partai'");
											while ($row=mysql_fetch_array($get)) {
										?>
										<td align="center"><?php echo $no++; ?></td>
										<td><?php echo $row['nim']; ?></td>
										<td><?php echo $row['nama']; ?></td>
										<td><?php echo $row['fakultas']; ?></td>
									</tr>
									<?php } ?>
								</table>
							</div>
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
		
		<script language='javascript'>
			$(document).ready(function() {
				$('#dataTables-example').DataTable({
					responsive: true
				});
			});
			
			window.load = print_d();
			function print_d(){
				window.print();
			}
		</script>
	</body>
</html>