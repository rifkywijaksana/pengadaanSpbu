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
<form name="inputEvm" method="POST">
	<label for="tanggal">Tanggal </label>
	<input type="text" name="tanggal" required="required" class="form-control" >
  <label for="produk">Jenis Produk </label>
  <select class="form-control" name="produk">
      <option value="Dex">Dexlite</option>
      <option value="Pre">Premium</option>
      <option value="Pet">Petralite</option>
      <option value="Per">Pertamax</option>
    </select>
  <label for="tanggal">BBM Masuk/Stok Awal</label>
  <input type="text" name="bbmMasuk" required="required" class="form-control"  onkeypress="return numberInput(event)" style="text-align:right">
	<input type="submit" name="submit" class="form-control button button-info">
</form>
</div>
</div>
</div>
</div>
<?php
if (isset($_POST['submit']))
{


$tanggal = $_POST['tanggal'];
$bbmMasuk = $_POST['bbmMasuk'];
$produk = $_POST['produk'];

if ($produk=="Dex") {
  $table = "t_dexliteTrx";
}
else if ($produk=="Pre") {
  $table = "t_premiumTrx";
}
else if ($produk=="Pet") {
  $table = "t_petraliteTrx";
}
else{
  $table = "t_pertamaxTrx";
}

 $query = "  INSERT INTO $table (bbmMasuk,stokAkhir,shift,tanggal)
               VALUES($bbmMasuk,$bbmMasuk,'3','$tanggal')
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
