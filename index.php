<?php
  include 'koneksi.php';
    if (isset($_POST['submit'])) {
      $partai   = $_POST['pilih_partai'];  
      $nim      = $_POST['nim'];
      $nama     = $_POST['nama'];
      $fakultas = $_POST['fakultas'];
      $input = "INSERT INTO pemilih VALUES('$nim', '$nama', '$fakultas','$partai')";
      $query_input =mysql_query($input);
      if($query_input){
        header("location: index.php");
        }
        else {
        echo "<script>alert('NIM Anda sudah terdaftar.');window.location='index.php';</script>";
        }
      }  

  $sqltampil = mysql_query("SELECT * FROM partai");
?> 

 <!DOCTYPE html>
  <html>
    <head>
      <title>E-Voting KPU - UBL 2017</title>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <script language="javascript" src="js/jquery.js"></script>
      <script language="javascript">

      function lihat() {
        var nilai_nim = document.tbl_mhs.nim.value;
        var nilai_nim = nilai_nim.substring(2, 4);

      switch (nilai_nim)
           {
              case '11':
              case '12':
              case '13':
              var jur = "Fakultas Teknologi Informasi";
              document.tbl_mhs.fakultas.value=jur;
              break;

              case '31':
              case '32':
              var jur = "Fakultas Ekonomi dan Bisnis";
              document.tbl_mhs.fakultas.value=jur;
              break;

              case '42':
              case '43':
              var jur = "Fakultas Ilmu Sosial dan Ilmu Politik";
              document.tbl_mhs.fakultas.value=jur;
              break;

              case '51':
              case '52':
              var jur = "Fakultas Teknik";
              document.tbl_mhs.fakultas.value=jur;
              break;

              case '71':
              var jur = "Fakultas Ilmu Komunikasi";
              document.tbl_mhs.fakultas.value=jur;
              break;

              default:
              var jur = "";
              document.tbl_mhs.fakultas.value=jur;
           }
      }

      function isNumberKey(evt)
      {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))

      return false;
      return true;

      }

      </script>

    </head>

    <body>
      <?php include 'header.php'; ?>

      <div style="height:100%;">
        <div>
          <h5 class="center-align">Tambah Data Mahasiswa</h5>
          <a href="administrator/index.php"><button class="btn waves-effect waves-light">GO TO ADMIN</button></a>
        </div>

        <div class="container">
          <div class="section">
            <div class="row">

            <form class="col s12" action="index.php" method="POST" enctype="multipart/form-data" name="cek_mhs">
              <div class="row">
                  <div class="input-field col s8 m6">
                    <input id="nim" type="text" name="mimin" class="validate" onkeypress="return isNumberKey(event)" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" autocomplete=off required>
                    <tr>
                      <td>
                      <?php
                          if (isset($_POST['simpan'])) {
                             $nim = $_POST['mimin'];
                             $homepage = file_get_contents("https://student.budiluhur.ac.id/kpu.php?nim=$nim");
                             echo $homepage; 
                              }  
                            ?>
                      </td>
                    </tr>
                    <label for="nim">NIM</label>
                    <br>
                    <button class="btn waves-effect waves-light" type="submit" name="simpan">CEK</button>
                  </div>
                </div>
            </form>

              <form class="col s12" action="index.php" method="POST" enctype="multipart/form-data" name="tbl_mhs">
                <div class="row">
                  <div class="col s8">
                  <select name="pilih_partai" id="pilih_partai">
                    <option disabled selected>Pilih Partai</option>
                    <?php if (mysql_num_rows($sqltampil) > 0 ) { ?>
                      <?php while($row = mysql_fetch_array($sqltampil)) {?>
                        <option value="<?php echo $row['id_partai'] ?>"><?php echo $row['nama_partai'] ?></option>
                        <?php } ?>
                      <?php } ?>
                  </select>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6 m6">
                    <input id="nim" type="text" name="nim" class="validate" onkeyup="lihat()" onkeypress="return isNumberKey(event)" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" autocomplete=off required>
                    <label for="nim">NIM</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s8 ">
                    <input id="nama" type="text" name="nama" class="validate" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" autocomplete=off required>
                    <label for="nama">Nama Mahasiswa</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s9 m6">
                    <input id="fakultas" type="text" name="fakultas" placeholder="Fakultas" class="validate" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" autocomplete=off readonly required>
                  </div>
                </div>
                </div>

        <!-- <input type="file" name="file"> -->
        <div class="row">
          <div class="col s12">
            <a href="index.php" class="btn waves-effect waves-light" name="batal">Batal</a>
      	    <button class="btn waves-effect waves-light" type="submit" name="submit">Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div style="height:30px" class="card-panel1 teal lighten-2">
  <div class="center">
    <h6 style="padding-top:8px; color:#FFFFFF">Kelompok Studi Linux © 2017. All right reserved.</h5>
  </div>
</div>

		<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="jquery/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
    $('.carousel.carousel-slider').carousel({full_width: true});
    $(document).ready(function() {
    $('select').material_select();
    });

    function getval(sel) {
       alert(sel.value);
    }
    </script>

	</body>
  </html>

