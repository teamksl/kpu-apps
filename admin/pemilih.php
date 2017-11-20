<?php
	include '../koneksi.php';
	include 'header.php';
?>

			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Cetak Data Pemilih</h1>
					</div>
				</div>
            
				<div class="row">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="timeline-panel">
								<div class="timeline-heading">
									<div class="panel-body">
										<form action="cetak.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
											<div class="form-group row">
												<label class="col-md-2 form-control-label" for="text-input">Pilih Partai</label>
												<div class="col-md-2">
													<select id="partai" name="partai" class="form-control">
														<option>Pilih Partai</option>
														<?php
															$get = mysql_query("SELECT DISTINCT partai FROM pemilih ORDER BY partai");
															if(mysql_num_rows($get) != 0){
																while($data = mysql_fetch_assoc($get)){
																	echo '<option>'.$data['partai'].'</option>';
																}
															}
														?>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-2 form-control-label" for="text-input"></label>
												<div class="col-md-5">
													<button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-print"></span> CETAK</button>
												</div>
											</div>
										</form>
									</div>
								</div>
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
			
			function print_d(){
				window.open("cetak.php","_blank");
			}
		</script>
	</body>
</html>