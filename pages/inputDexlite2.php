<?php
$shift = $_POST['shift'];
  $tanggal=date_create($_POST['tanggal']);

  if ($shift==1)
  {
     $date = date_sub($tanggal,date_interval_create_from_date_string("1 days"));

     $shift = 3;
  }
  else
  {
    $shift = $shift - 1 ;
    $date = $tanggal;
  }
  
?>
<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Input Dexlite</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">

<?php
  
      $query = " SELECT * FROM t_dexliteTrx where shift='$shift' AND tanggal='".date_format($date,"Y-m-d")."' ";
      $getData = mysqli_query($connection,$query) or die(mysqli_error($connection));

      $row = mysqli_fetch_array($getData);
?>  
    <table class='table table-border'>
              <tr><td>Tanggal</td><td> :</td><td> <?=$_POST['tanggal'];?></td></tr>
              <tr><td>Shift </td><td>: </td><td><?=$_POST['shift'];?></td></tr>
            </table>
    <form name="inputEvm" method="POST">
    <input type="hidden" name="tanggal" value="<?=$_POST['tanggal']?>">
    <input type="hidden" name="shift" value="<?=$_POST['shift']?>">
      <table class='table table-border'>
      <tr>
        <td>
        <label for="tanggal">Teller Awal Nozzle A1 </label>
        <input type="text" name="A1Awal" required="required" class="form-control" value="<?=$row[A1Akhir]?>"  style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle A1 </label>
        <input type="text" name="A1Akhir" required="required" class="form-control" onkeypress="return numberInput(event)" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle A1 </label>
        <input type="text" name="A1Tera" required="required" class="form-control" onkeypress="return numberInput(event)" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle A2 </label>
      <input type="text" name="A2Awal" required="required" class="form-control" value="<?=$row[A2Akhir]?>"  style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle A2 </label>
        <input type="text" name="A2Akhir" required="required" class="form-control" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle A2 </label>
        <input type="text" name="A2Tera" required="required" class="form-control" onkeypress="return numberInput(event)" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle A3 </label>
      <input type="text" name="A3Awal" required="required" class="form-control" value="<?=$row[A3Akhir]?>"  style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle A3 </label>
        <input type="text" name="A3Akhir" required="required" class="form-control" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle A3 </label>
        <input type="text" name="A3Tera" required="required" class="form-control" onkeypress="return numberInput(event)" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle A4 </label>
      <input type="text" name="A4Awal" required="required" class="form-control" value="<?=$row[A4Akhir]?>" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle A4 </label>
        <input type="text" name="A4Akhir" required="required" class="form-control" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle A4 </label>
        <input type="text" name="A4Tera" required="required" class="form-control" onkeypress="return numberInput(event)" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Awal</label>
        <input type="text" name="stokAwal" required="required" class="form-control"  value="<?=$row[stokAkhir]?>"   style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">BBM Masuk</label>
        <input type="text" name="bbmMasuk" required="required" class="form-control"  onkeypress="return numberInput(event)" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Akhir</label>
        <input type="text" name="stokAkhir" required="required" class="form-control"  onkeypress="return numberInput(event)" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <input type="submit" name="submit" class="form-control">
        </td>
      </tr>
      </table>
    </form>
</div>
</div>
</div>
</div>

<?php
  if(isset($_POST['submit']))
  {

    $totalA1 = $_POST[A1Akhir] - $_POST[A1Awal] - $_POST[A1Tera];
    $totalA2 = $_POST[A2Akhir] - $_POST[A2Awal] - $_POST[A2Tera];
    $totalA3 = $_POST[A3Akhir] - $_POST[A3Awal] - $_POST[A3Tera];
    $totalA4 = $_POST[A4Akhir] - $_POST[A4Awal] - $_POST[A4Tera];

    $sisa = $_POST[awal]+$_POST[bbmMasuk]-$totalA4-$totalA3-$totalA2-$totalA1;
    $query = "  INSERT INTO t_dexliteTrx (A1Awal,A1Akhir,A2Awal,A2Akhir,A3Awal,A3Akhir,A4Awal,A4Akhir,A1Tera,A2Tera,A3Tera,A4Tera,stokAwal,bbmMasuk,sisa,stokAkhir,shift,tanggal)
               VALUES($_POST[A1Awal],$_POST[A1Akhir],$_POST[A2Awal],$_POST[A2Akhir],$_POST[A3Awal],$_POST[A3Akhir],$_POST[A4Awal],$_POST[A4Akhir],$_POST[A1Tera],$_POST[A2Tera],$_POST[A3Tera],$_POST[A4Tera],$_POST[stokAwal],$_POST[bbmMasuk],$sisa,$_POST[stokAkhir],'$_POST[shift]','$_POST[tanggal]')
       ";
    $insert = mysqli_query($connection,$query) or die(mysqli_error($connection));
    if($insert)
    {
      echo "<tr><td colspan=5>Data telah disimpan</td>";
    }
    else
    {
      "gagal";
    }

  }
?>