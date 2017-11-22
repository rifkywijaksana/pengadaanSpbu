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
  
      $query = " SELECT * FROM t_premiumTrx where shift='$shift' AND tanggal='".date_format($date,"Y-m-d")."' ";
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
        <label for="tanggal">Teller Awal Nozzle B1 </label>
        <input type="text" name="B1Awal" required="required" class="form-control" value="<?=$row[B1Akhir]?>"  style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle B1 </label>
        <input type="text" name="B1Akhir" required="required" class="form-control" onkeypress="return numberInput(event)" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle B1 </label>
        <input type="text" name="B1Tera" required="required" class="form-control" onkeypress="return numberInput(event)" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle B2 </label>
      <input type="text" name="B2Awal" required="required" class="form-control" value="<?=$row[B2Akhir]?>"  style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle B2 </label>
        <input type="text" name="B2Akhir" required="required" class="form-control" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle B2 </label>
        <input type="text" name="B2Tera" required="required" class="form-control" onkeypress="return numberInput(event)" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle B3 </label>
      <input type="text" name="B3Awal" required="required" class="form-control" value="<?=$row[B3Akhir]?>"  style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle B3 </label>
        <input type="text" name="B3Akhir" required="required" class="form-control" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle B3 </label>
        <input type="text" name="B3Tera" required="required" class="form-control" onkeypress="return numberInput(event)" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle B4 </label>
      <input type="text" name="B4Awal" required="required" class="form-control" value="<?=$row[B4Akhir]?>" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle B4 </label>
        <input type="text" name="B4Akhir" required="required" class="form-control" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle B4 </label>
        <input type="text" name="B4Tera" required="required" class="form-control" onkeypress="return numberInput(event)" style="text-align:right">
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

    $totalB1 = $_POST[B1Akhir] - $_POST[B1Awal] - $_POST[B1Tera];
    $totalB2 = $_POST[B2Akhir] - $_POST[B2Awal] - $_POST[B2Tera];
    $totalB3 = $_POST[B3Akhir] - $_POST[B3Awal] - $_POST[B3Tera];
    $totalB4 = $_POST[B4Akhir] - $_POST[B4Awal] - $_POST[B4Tera];

    $sisa = $_POST[awal]+$_POST[bbmMasuk]-$totalB4-$totalB3-$totalB2-$totalB1;
    $query = "  INSERT INTO t_premiumTrx (B1Awal,B1Akhir,B2Awal,B2Akhir,B3Awal,B3Akhir,B4Awal,B4Akhir,B1Tera,B2Tera,B3Tera,B4Tera,stokAwal,bbmMasuk,sisa,stokAkhir,shift,tanggal)
               VALUES($_POST[B1Awal],$_POST[B1Akhir],$_POST[B2Awal],$_POST[B2Akhir],$_POST[B3Awal],$_POST[B3Akhir],$_POST[B4Awal],$_POST[B4Akhir],$_POST[B1Tera],$_POST[B2Tera],$_POST[B3Tera],$_POST[B4Tera],$_POST[stokAwal],$_POST[bbmMasuk],$sisa,$_POST[stokAkhir],'$_POST[shift]','$_POST[tanggal]')
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