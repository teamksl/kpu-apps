<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sandbox</title>

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
                var jur = "Fakultas Ilmu Politik dan Ilmu Sosial";
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
    <form class="col s12" action="test.php" method="POST" enctype="multipart/form-data" name="tbl_mhs">
            <div class="row">
                <div class="input-field col s8 m6">
                <input id="nim" type="text" name="nim" class="validate" onkeyup="lihat()" onkeypress="return isNumberKey(event)" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" autocomplete=off required>
                <label for="nim">NIM</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m12">
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
            </div>

    <!-- <input type="file" name="file"> -->
    <div class="row">
        <div class="col s12">
        <a href="mhs.php" class="btn waves-effect waves-light" name="batal">Batal</a>
        <button class="btn waves-effect waves-light" type="submit" name="submit">Simpan</button>
        </div>
    </div>
      </form>    
</body>
</html>