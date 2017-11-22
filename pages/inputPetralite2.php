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
          <h3 class="box-title">Input Petralite</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">

<?php
  
      $query = " SELECT * FROM t_petraliteTrx where shift='$shift' AND tanggal='".date_format($date,"Y-m-d")."' ";
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
      <label for="tanggal">Teller Awal Nozzle C3 </label>
      <input type="text" name="C3Awal" required="required" class="form-control" value="<?=$row[C3Akhir]?>"  style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle C3 </label>
        <input type="text" name="C3Akhir" required="required" class="form-control" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle C3 </label>
        <input type="text" name="C3Tera" required="required" class="form-control" onkeypress="return numberInput(event)" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle C4 </label>
      <input type="text" name="C4Awal" required="required" class="form-control" value="<?=$row[C4Akhir]?>" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle C4 </label>
        <input type="text" name="C4Akhir" required="required" class="form-control" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle C4 </label>
        <input type="text" name="C4Tera" required="required" class="form-control" onkeypress="return numberInput(event)" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Awal</label>
        <input type="text" name="stokAwal" required="required" class="form-control"  value="<?=$row[stokAkhir]?>"  style="text-align:right">
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

    $totalC3 = $_POST[C3Akhir] - $_POST[C3Awal] - $_POST[C3Tera];
    $totalC4 = $_POST[C4Akhir] - $_POST[C4Awal] - $_POST[C4Tera];

    $sisa = $_POST[awal]+$_POST[bbmMasuk]-$totalC4-$totalC3-$totalA2-$totalA1;
    $query = "  INSERT INTO t_petraliterx ( C3Awal,C3Akhir,C4Awal,C4Akhir,C3Tera,C4Tera,stokAwal,bbmMasuk,sisa,stokAkhir,shift,tanggal)
               VALUES($_POST[C3Awal],$_POST[C3Akhir],$_POST[C4Awal],$_POST[C4Akhir],$_POST[C3Tera],$_POST[C4Tera],$_POST[stokAwal],$_POST[bbmMasuk],$sisa,$_POST[stokAkhir],'$_POST[shift]','$_POST[tanggal]')
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