<?php
      $query = " SELECT * FROM t_dexliteTrx WHERE tanggal='$_POST[tanggal]' AND shift='1'";
      $getData = mysqli_query($connection,$query) or die(mysqli_error($connection));
      $row = mysqli_fetch_array($getData);

       $query2 = " SELECT * FROM t_dexliteTrx WHERE tanggal='$_POST[tanggal]' AND shift='2'";
      $getData2 = mysqli_query($connection,$query2) or die(mysqli_error($connection));
      $row2 = mysqli_fetch_array($getData2);

       $query3 = " SELECT * FROM t_dexliteTrx WHERE tanggal='$_POST[tanggal]' AND shift='3'";
      $getData3 = mysqli_query($connection,$query3) or die(mysqli_error($connection));
      $row3 = mysqli_fetch_array($getData3);

      $queryDexlite = "SELECT * FROM t_produk where idProduk='Dex'";
      $getDataDexlite = mysqli_query($connection,$queryDexlite) or die(mysqli_error($connection));
      $rowDexlite = mysqli_fetch_array($getDataDexlite);


       $query4 = " SELECT * FROM t_petraliteTrx WHERE tanggal='$_POST[tanggal]' AND shift='1'";
      $getData4 = mysqli_query($connection,$query4) or die(mysqli_error($connection));
      $row4 = mysqli_fetch_array($getData4);

       $query5 = " SELECT * FROM t_petraliteTrx WHERE tanggal='$_POST[tanggal]' AND shift='2'";
      $getData5 = mysqli_query($connection,$query5) or die(mysqli_error($connection));
      $row5 = mysqli_fetch_array($getData5);

       $query6 = " SELECT * FROM t_petraliteTrx WHERE tanggal='$_POST[tanggal]' AND shift='3'";
      $getData6 = mysqli_query($connection,$query6) or die(mysqli_error($connection));
      $row6 = mysqli_fetch_array($getData6);

      $queryPetralite = "SELECT * FROM t_produk where idProduk='Pet'";
      $getDataPetralite = mysqli_query($connection,$queryPetralite) or die(mysqli_error($connection));
      $rowPetralite = mysqli_fetch_array($getDataPetralite);


      $query7 = " SELECT * FROM t_pertamaxTrx WHERE tanggal='$_POST[tanggal]' AND shift='1'";
      $getData7 = mysqli_query($connection,$query7) or die(mysqli_error($connection));
      $row7 = mysqli_fetch_array($getData7);

       $query8 = " SELECT * FROM t_pertamaxTrx WHERE tanggal='$_POST[tanggal]' AND shift='2'";
      $getData8 = mysqli_query($connection,$query8) or die(mysqli_error($connection));
      $row8 = mysqli_fetch_array($getData8);

       $query9 = " SELECT * FROM t_pertamaxTrx WHERE tanggal='$_POST[tanggal]' AND shift='3'";
      $getData9 = mysqli_query($connection,$query9) or die(mysqli_error($connection));
      $row9 = mysqli_fetch_array($getData9);

      


      $queryPertamax = "SELECT * FROM t_produk where idProduk='Per'";
      $getDataPertamax = mysqli_query($connection,$queryPertamax) or die(mysqli_error($connection));
      $rowPertamax = mysqli_fetch_array($getDataPertamax);



      

      $query10 = " SELECT * FROM t_premiumTrx WHERE tanggal='$_POST[tanggal]' AND shift='1'";
      $getData10 = mysqli_query($connection,$query10) or die(mysqli_error($connection));
      $row10 = mysqli_fetch_array($getData10);

       $query11 = " SELECT * FROM t_premiumTrx WHERE tanggal='$_POST[tanggal]' AND shift='2'";
      $getData11 = mysqli_query($connection,$query11) or die(mysqli_error($connection));
      $row11= mysqli_fetch_array($getData11);

       $query12 = " SELECT * FROM t_premiumTrx WHERE tanggal='$_POST[tanggal]' AND shift='3'";
      $getData12 = mysqli_query($connection,$query12) or die(mysqli_error($connection));
      $row12 = mysqli_fetch_array($getData12);

      $queryPremium = "SELECT * FROM t_produk where idProduk='Pre'";
      $getDataPremium = mysqli_query($connection,$queryPremium) or die(mysqli_error($connection));
      $rowPremium = mysqli_fetch_array($getDataPremium);
?>

<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Laporan Harian Supervisor</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
             <label for="tanggal">Dexlite</label>
<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Shift 1</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body">
      
      

<table class='table table-border'>
      <tr>
        <td>
        <label for="tanggal">Teller Awal Nozzle A1 </label>
        <input  readonly="readonly"  type="text" name="A1Awal" required="required" class="form-control" value="<?=$row[A1Awal]?>" readonly="readonly" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle A1 </label>
        <input  readonly="readonly"  type="text" name="A1Akhir" required="required" class="form-control" value="<?=$row[A1Akhir]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle A1 </label>
        <input  readonly="readonly"  type="text" name="A1Tera" required="required" class="form-control" value="<?=$row[A1Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualA1 =  $row[A1Akhir]-$row[A1Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA1?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA1*$rowDexlite['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle A2 </label>
      <input  readonly="readonly"  type="text" name="A2Awal" required="required" class="form-control" value="<?=$row[A2Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle A2 </label>
        <input  readonly="readonly"  type="text" name="A2Akhir" required="required" class="form-control"  value="<?=$row[A2Akhir]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle A2 </label>
        <input  readonly="readonly"  type="text" name="A2Tera" required="required" class="form-control"  value="<?=$row[A2Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualA2 =  $row[A2Akhir]-$row[A2Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA2?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA2*$rowDexlite['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle A3 </label>
      <input  readonly="readonly"  type="text" name="A3Awal" required="required" class="form-control" value="<?=$row[A3Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle A3 </label>
        <input  readonly="readonly"  type="text" name="A3Akhir" required="required" class="form-control" value="<?=$row[A3Akhir]?>"style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle A3 </label>
        <input  readonly="readonly"  type="text" name="A3Tera" required="required" class="form-control" value="<?=$row[A3Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualA3 =  $row[A3Akhir]-$row[A3Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA3?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA3*$rowDexlite['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle A4 </label>
      <input  readonly="readonly"  type="text" name="A4Awal" required="required" class="form-control" value="<?=$row[A4Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle A4 </label>
        <input  readonly="readonly"  type="text" name="A4Akhir" required="required" class="form-control" value="<?=$row[A4Akhir]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle A4 </label>
        <input  readonly="readonly"  type="text" name="A4Tera" required="required" class="form-control"  value="<?=$row[A4Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualA4 =  $row[A4Akhir]-$row[A4Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA4?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA4*$rowDexlite['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3" align="center"><strong>Jumlah Dexlite</strong></td>
        <td><input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA4+$jualA2+$jualA3+$jualA1?>" style="text-align:right"></td>
        <td><input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA4*$rowDexlite['hargaJual']+$jualA2*$rowDexlite['hargaJual']+$jualA3*$rowDexlite['hargaJual']+$jualA1*$rowDexlite['hargaJual']?>" style="text-align:right"></td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Awal</label>
        <input  readonly="readonly"  type="text" name="stokAwal" required="required" class="form-control"  value="<?=$row[stokAwal]?>"  readonly="readonly" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">BBM Masuk</label>
        <input  readonly="readonly"  type="text" name="bbmMasuk" required="required" class="form-control"   value="<?=$row[bbmMasuk]?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Jual</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA1+$jualA2+$jualA3+$jualA4?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Sisa</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control" value="<?=$row['sisa']?>"   style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Akhir</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control"  value="<?=$row['stokAkhir']?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Selisih</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control"  value="<?=$row['sisa']-$row['stokAkhir']?>"  style="text-align:right">
        </td>
      </tr>
   
      </table>


            </div>
           </div>
           </div>



<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Shift 2</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
      
      

<table class='table table-border'>
      <tr>
        <td>
        <label for="tanggal">Teller Awal Nozzle A1 </label>
        <input  readonly="readonly"  type="text" name="A1Awal" required="required" class="form-control" value="<?=$row2[A1Awal]?>" readonly="readonly" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle A1 </label>
        <input  readonly="readonly"  type="text" name="A1Akhir" required="required" class="form-control" value="<?=$row2[A1Akhir]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle A1 </label>
        <input  readonly="readonly"  type="text" name="A1Tera" required="required" class="form-control" value="<?=$row2[A1Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualA1 =  $row2[A1Akhir]-$row2[A1Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA1?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA1*$rowDexlite['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle A2 </label>
      <input  readonly="readonly"  type="text" name="A2Awal" required="required" class="form-control" value="<?=$row2[A2Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle A2 </label>
        <input  readonly="readonly"  type="text" name="A2Akhir" required="required" class="form-control"  value="<?=$row2[A2Akhir]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle A2 </label>
        <input  readonly="readonly"  type="text" name="A2Tera" required="required" class="form-control"  value="<?=$row2[A2Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualA2 =  $row2[A2Akhir]-$row2[A2Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA2?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA2*$rowDexlite['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle A3 </label>
      <input  readonly="readonly"  type="text" name="A3Awal" required="required" class="form-control" value="<?=$row2[A3Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle A3 </label>
        <input  readonly="readonly"  type="text" name="A3Akhir" required="required" class="form-control" value="<?=$row2[A3Akhir]?>"style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle A3 </label>
        <input  readonly="readonly"  type="text" name="A3Tera" required="required" class="form-control" value="<?=$row2[A3Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualA3 =  $row2[A3Akhir]-$row2[A3Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA3?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA3*$rowDexlite['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle A4 </label>
      <input  readonly="readonly"  type="text" name="A4Awal" required="required" class="form-control" value="<?=$row2[A4Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle A4 </label>
        <input  readonly="readonly"  type="text" name="A4Akhir" required="required" class="form-control" value="<?=$row2[A4Akhir]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle A4 </label>
        <input  readonly="readonly"  type="text" name="A4Tera" required="required" class="form-control"  value="<?=$row2[A4Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualA4 =  $row2[A4Akhir]-$row2[A4Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA4?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA4*$rowDexlite['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3" align="center"><strong>Jumlah Dexlite</strong></td>
        <td><input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA4+$jualA2+$jualA3+$jualA1?>" style="text-align:right"></td>
        <td><input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA4*$rowDexlite['hargaJual']+$jualA2*$rowDexlite['hargaJual']+$jualA3*$rowDexlite['hargaJual']+$jualA1*$rowDexlite['hargaJual']?>" style="text-align:right"></td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Awal</label>
        <input  readonly="readonly"  type="text" name="stokAwal" required="required" class="form-control"  value="<?=$row2[stokAwal]?>"  readonly="readonly" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">BBM Masuk</label>
        <input  readonly="readonly"  type="text" name="bbmMasuk" required="required" class="form-control"   value="<?=$row2[bbmMasuk]?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Jual</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA1+$jualA2+$jualA3+$jualA4?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Sisa</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control" value="<?=$row2['sisa']?>"   style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Akhir</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control"  value="<?=$row2['stokAkhir']?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Selisih</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control"  value="<?=$row2['sisa']-$row2['stokAkhir']?>"  style="text-align:right">
        </td>
      </tr>
   
      </table>


            </div>
           </div>
           </div>


<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Shift 3</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
      
      

<table class='table table-border'>
      <tr>
        <td>
        <label for="tanggal">Teller Awal Nozzle A1 </label>
        <input  readonly="readonly"  type="text" name="A1Awal" required="required" class="form-control" value="<?=$row3[A1Awal]?>" readonly="readonly" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle A1 </label>
        <input  readonly="readonly"  type="text" name="A1Akhir" required="required" class="form-control" value="<?=$row3[A1Akhir]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle A1 </label>
        <input  readonly="readonly"  type="text" name="A1Tera" required="required" class="form-control" value="<?=$row3[A1Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualA1 =  $row3[A1Akhir]-$row3[A1Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA1?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA1*$rowDexlite['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle A2 </label>
      <input  readonly="readonly"  type="text" name="A2Awal" required="required" class="form-control" value="<?=$row3[A2Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle A2 </label>
        <input  readonly="readonly"  type="text" name="A2Akhir" required="required" class="form-control"  value="<?=$row3[A2Akhir]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle A2 </label>
        <input  readonly="readonly"  type="text" name="A2Tera" required="required" class="form-control"  value="<?=$row3[A2Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualA2 =  $row3[A2Akhir]-$row3[A2Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA2?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA2*$rowDexlite['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle A3 </label>
      <input  readonly="readonly"  type="text" name="A3Awal" required="required" class="form-control" value="<?=$row3[A3Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle A3 </label>
        <input  readonly="readonly"  type="text" name="A3Akhir" required="required" class="form-control" value="<?=$row3[A3Akhir]?>"style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle A3 </label>
        <input  readonly="readonly"  type="text" name="A3Tera" required="required" class="form-control" value="<?=$row3[A3Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualA3 =  $row3[A3Akhir]-$row3[A3Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA3?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA3*$rowDexlite['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle A4 </label>
      <input  readonly="readonly"  type="text" name="A4Awal" required="required" class="form-control" value="<?=$row3[A4Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle A4 </label>
        <input  readonly="readonly"  type="text" name="A4Akhir" required="required" class="form-control" value="<?=$row3[A4Akhir]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle A4 </label>
        <input  readonly="readonly"  type="text" name="A4Tera" required="required" class="form-control"  value="<?=$row3[A4Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualA4 =  $row3[A4Akhir]-$row3[A4Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA4?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA4*$rowDexlite['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3" align="center"><strong>Jumlah Dexlite</strong></td>
        <td><input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA4+$jualA2+$jualA3+$jualA1?>" style="text-align:right"></td>
        <td><input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA4*$rowDexlite['hargaJual']+$jualA2*$rowDexlite['hargaJual']+$jualA3*$rowDexlite['hargaJual']+$jualA1*$rowDexlite['hargaJual']?>" style="text-align:right"></td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Awal</label>
        <input  readonly="readonly"  type="text" name="stokAwal" required="required" class="form-control"  value="<?=$row3[stokAwal]?>"  readonly="readonly" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">BBM Masuk</label>
        <input  readonly="readonly"  type="text" name="bbmMasuk" required="required" class="form-control"   value="<?=$row3[bbmMasuk]?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Jual</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA1+$jualA2+$jualA3+$jualA4?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Sisa</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control" value="<?=$row3['sisa']?>"   style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Akhir</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control"  value="<?=$row3['stokAkhir']?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Selisih</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control"  value="<?=$row3['sisa']-$row3['stokAkhir']?>"  style="text-align:right">
        </td>
      </tr>
   
      </table>


            </div>
           </div>
           </div>

<!--akhirdexlite-->

<label for="tanggal">Petralite</label>
<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
        Shift 1</a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
      <div class="panel-body">
      
      

<table class='table table-border'>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle C3 </label>
      <input  readonly="readonly"  type="text" name="C3Awal" required="required" class="form-control" value="<?=$row4[C3Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle C3 </label>
        <input  readonly="readonly"  type="text" name="C3Akhir" required="required" class="form-control" value="<?=$row4[C3Akhir]?>"style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle C3 </label>
        <input  readonly="readonly"  type="text" name="C3Tera" required="required" class="form-control" value="<?=$row4[C3Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualC3 =  $row4[C3Akhir]-$row4[C3Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC3?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC3*$row4Dexlite['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle C4 </label>
      <input  readonly="readonly"  type="text" name="C4Awal" required="required" class="form-control" value="<?=$row4[C4Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle C4 </label>
        <input  readonly="readonly"  type="text" name="C4Akhir" required="required" class="form-control" value="<?=$row4[C4Akhir]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle C4 </label>
        <input  readonly="readonly"  type="text" name="C4Tera" required="required" class="form-control"  value="<?=$row4[C4Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualC4 =  $row4[C4Akhir]-$row4[C4Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC4?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC4*$row4Dexlite['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3" align="center"><strong>Jumlah Petralite</strong></td>
        <td><input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC4+$jualC3?>" style="text-align:right"></td>
        <td><input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC4*$row4Dexlite['hargaJual']+$jualC3*$row4Dexlite['hargaJual']?>" style="text-align:right"></td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Awal</label>
        <input  readonly="readonly"  type="text" name="stokAwal" required="required" class="form-control"  value="<?=$row4[stokAwal]?>"  readonly="readonly" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">BBM Masuk</label>
        <input  readonly="readonly"  type="text" name="bbmMasuk" required="required" class="form-control"   value="<?=$row4[bbmMasuk]?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Jual</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA1+$jualA2+$jualC3+$jualC4?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Sisa</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control" value="<?=$row4['sisa']?>"   style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Akhir</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control"  value="<?=$row4['stokAkhir']?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Selisih</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control"  value="<?=$row4['sisa']-$row4['stokAkhir']?>"  style="text-align:right">
        </td>
      </tr>
   
      </table>


            </div>
           </div>
           </div>

<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
        Shift 2</a>
      </h4>
    </div>
    <div id="collapse5" class="panel-collapse collapse">
      <div class="panel-body">
      
      

<table class='table table-border'>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle C3 </label>
      <input  readonly="readonly"  type="text" name="C3Awal" required="required" class="form-control" value="<?=$row5[C3Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle C3 </label>
        <input  readonly="readonly"  type="text" name="C3Akhir" required="required" class="form-control" value="<?=$row5[C3Akhir]?>"style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle C3 </label>
        <input  readonly="readonly"  type="text" name="C3Tera" required="required" class="form-control" value="<?=$row5[C3Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualC3 =  $row5[C3Akhir]-$row5[C3Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC3?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC3*$row5Dexlite['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle C4 </label>
      <input  readonly="readonly"  type="text" name="C4Awal" required="required" class="form-control" value="<?=$row5[C4Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle C4 </label>
        <input  readonly="readonly"  type="text" name="C4Akhir" required="required" class="form-control" value="<?=$row5[C4Akhir]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle C4 </label>
        <input  readonly="readonly"  type="text" name="C4Tera" required="required" class="form-control"  value="<?=$row5[C4Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualC4 =  $row5[C4Akhir]-$row5[C4Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC4?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC4*$row5Dexlite['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3" align="center"><strong>Jumlah Petralite</strong></td>
        <td><input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC4+$jualC3?>" style="text-align:right"></td>
        <td><input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC4*$row5Dexlite['hargaJual']+$jualC3*$row5Dexlite['hargaJual']?>" style="text-align:right"></td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Awal</label>
        <input  readonly="readonly"  type="text" name="stokAwal" required="required" class="form-control"  value="<?=$row5[stokAwal]?>"  readonly="readonly" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">BBM Masuk</label>
        <input  readonly="readonly"  type="text" name="bbmMasuk" required="required" class="form-control"   value="<?=$row5[bbmMasuk]?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Jual</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA1+$jualA2+$jualC3+$jualC4?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Sisa</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control" value="<?=$row5['sisa']?>"   style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Akhir</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control"  value="<?=$row5['stokAkhir']?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Selisih</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control"  value="<?=$row5['sisa']-$row5['stokAkhir']?>"  style="text-align:right">
        </td>
      </tr>
   
      </table>


            </div>
           </div>
           </div>


<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
        Shift 3</a>
      </h4>
    </div>
    <div id="collapse6" class="panel-collapse collapse">
      <div class="panel-body">
      
      

<table class='table table-border'>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle C3 </label>
      <input  readonly="readonly"  type="text" name="C3Awal" required="required" class="form-control" value="<?=$row6[C3Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle C3 </label>
        <input  readonly="readonly"  type="text" name="C3Akhir" required="required" class="form-control" value="<?=$row6[C3Akhir]?>"style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle C3 </label>
        <input  readonly="readonly"  type="text" name="C3Tera" required="required" class="form-control" value="<?=$row6[C3Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualC3 =  $row6[C3Akhir]-$row6[C3Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC3?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC3*$row6Dexlite['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle C4 </label>
      <input  readonly="readonly"  type="text" name="C4Awal" required="required" class="form-control" value="<?=$row6[C4Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle C4 </label>
        <input  readonly="readonly"  type="text" name="C4Akhir" required="required" class="form-control" value="<?=$row6[C4Akhir]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle C4 </label>
        <input  readonly="readonly"  type="text" name="C4Tera" required="required" class="form-control"  value="<?=$row6[C4Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualC4 =  $row6[C4Akhir]-$row6[C4Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC4?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC4*$row6Dexlite['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3" align="center"><strong>Jumlah Petralite</strong></td>
        <td><input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC4+$jualC3?>" style="text-align:right"></td>
        <td><input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC4*$row6Dexlite['hargaJual']+$jualC3*$row6Dexlite['hargaJual']?>" style="text-align:right"></td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Awal</label>
        <input  readonly="readonly"  type="text" name="stokAwal" required="required" class="form-control"  value="<?=$row6[stokAwal]?>"  readonly="readonly" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">BBM Masuk</label>
        <input  readonly="readonly"  type="text" name="bbmMasuk" required="required" class="form-control"   value="<?=$row6[bbmMasuk]?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Jual</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA1+$jualA2+$jualC3+$jualC4?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Sisa</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control" value="<?=$row6['sisa']?>"   style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Akhir</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control"  value="<?=$row6['stokAkhir']?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Selisih</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control"  value="<?=$row6['sisa']-$row6['stokAkhir']?>"  style="text-align:right">
        </td>
      </tr>
   
      </table>


            </div>
           </div>
           </div>

  <!--AKhir Petralite-->


<label for="tanggal">Pertamax</label>
<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
        Shift 1</a>
      </h4>
    </div>
    <div id="collapse7" class="panel-collapse collapse">
      <div class="panel-body">
      
      

<table class='table table-border'>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle C1 </label>
      <input  readonly="readonly"  type="text" name="C1Awal" required="required" class="form-control" value="<?=$row7[C1Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle C1 </label>
        <input  readonly="readonly"  type="text" name="C1Akhir" required="required" class="form-control" value="<?=$row7[C1Akhir]?>"style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle C1 </label>
        <input  readonly="readonly"  type="text" name="C1Tera" required="required" class="form-control" value="<?=$row7[C1Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualC1 =  $row7[C1Akhir]-$row7[C1Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC1?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC1*$rowDexlite['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle C2 </label>
      <input  readonly="readonly"  type="text" name="C2Awal" required="required" class="form-control" value="<?=$row7[C2Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle C2 </label>
        <input  readonly="readonly"  type="text" name="C2Akhir" required="required" class="form-control" value="<?=$row7[C2Akhir]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle C2 </label>
        <input  readonly="readonly"  type="text" name="C2Tera" required="required" class="form-control"  value="<?=$row7[C2Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualC2 =  $row7[C2Akhir]-$row7[C2Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC2?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC2*$rowDexlite['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3" align="center"><strong>Jumlah Petralite</strong></td>
        <td><input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC2+$jualC1?>" style="text-align:right"></td>
        <td><input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC2*$rowDexlite['hargaJual']+$jualC1*$row7Dexlite['hargaJual']?>" style="text-align:right"></td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Awal</label>
        <input  readonly="readonly"  type="text" name="stokAwal" required="required" class="form-control"  value="<?=$row7[stokAwal]?>"  readonly="readonly" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">BBM Masuk</label>
        <input  readonly="readonly"  type="text" name="bbmMasuk" required="required" class="form-control"   value="<?=$row7[bbmMasuk]?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Jual</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA1+$jualA2+$jualC1+$jualC2?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Sisa</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control" value="<?=$row7['sisa']?>"   style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Akhir</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control"  value="<?=$row7['stokAkhir']?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Selisih</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control"  value="<?=$row7['sisa']-$row7['stokAkhir']?>"  style="text-align:right">
        </td>
      </tr>
   
      </table>


            </div>
           </div>
           </div>


<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
        Shift 2</a>
      </h4>
    </div>
    <div id="collapse8" class="panel-collapse collapse">
      <div class="panel-body">
      
      

<table class='table table-border'>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle C1 </label>
      <input  readonly="readonly"  type="text" name="C1Awal" required="required" class="form-control" value="<?=$row8[C1Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle C1 </label>
        <input  readonly="readonly"  type="text" name="C1Akhir" required="required" class="form-control" value="<?=$row8[C1Akhir]?>"style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle C1 </label>
        <input  readonly="readonly"  type="text" name="C1Tera" required="required" class="form-control" value="<?=$row8[C1Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualC1 =  $row8[C1Akhir]-$row8[C1Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC1?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC1*$rowDexlite['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle C2 </label>
      <input  readonly="readonly"  type="text" name="C2Awal" required="required" class="form-control" value="<?=$row8[C2Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle C2 </label>
        <input  readonly="readonly"  type="text" name="C2Akhir" required="required" class="form-control" value="<?=$row8[C2Akhir]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle C2 </label>
        <input  readonly="readonly"  type="text" name="C2Tera" required="required" class="form-control"  value="<?=$row8[C2Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualC2 =  $row8[C2Akhir]-$row8[C2Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC2?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC2*$rowDexlite['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3" align="center"><strong>Jumlah Petralite</strong></td>
        <td><input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC2+$jualC1?>" style="text-align:right"></td>
        <td><input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC2*$rowDexlite['hargaJual']+$jualC1*$row8Dexlite['hargaJual']?>" style="text-align:right"></td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Awal</label>
        <input  readonly="readonly"  type="text" name="stokAwal" required="required" class="form-control"  value="<?=$row8[stokAwal]?>"  readonly="readonly" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">BBM Masuk</label>
        <input  readonly="readonly"  type="text" name="bbmMasuk" required="required" class="form-control"   value="<?=$row8[bbmMasuk]?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Jual</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA1+$jualA2+$jualC1+$jualC2?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Sisa</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control" value="<?=$row8['sisa']?>"   style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Akhir</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control"  value="<?=$row8['stokAkhir']?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Selisih</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control"  value="<?=$row8['sisa']-$row8['stokAkhir']?>"  style="text-align:right">
        </td>
      </tr>
   
      </table>


            </div>
           </div>
           </div>


<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
        Shift 3</a>
      </h4>
    </div>
    <div id="collapse9" class="panel-collapse collapse">
      <div class="panel-body">
      
      

<table class='table table-border'>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle C1 </label>
      <input  readonly="readonly"  type="text" name="C1Awal" required="required" class="form-control" value="<?=$row9[C1Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle C1 </label>
        <input  readonly="readonly"  type="text" name="C1Akhir" required="required" class="form-control" value="<?=$row9[C1Akhir]?>"style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle C1 </label>
        <input  readonly="readonly"  type="text" name="C1Tera" required="required" class="form-control" value="<?=$row9[C1Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualC1 =  $row9[C1Akhir]-$row9[C1Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC1?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC1*$rowDexlite['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle C2 </label>
      <input  readonly="readonly"  type="text" name="C2Awal" required="required" class="form-control" value="<?=$row9[C2Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle C2 </label>
        <input  readonly="readonly"  type="text" name="C2Akhir" required="required" class="form-control" value="<?=$row9[C2Akhir]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle C2 </label>
        <input  readonly="readonly"  type="text" name="C2Tera" required="required" class="form-control"  value="<?=$row9[C2Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualC2 =  $row9[C2Akhir]-$row9[C2Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC2?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC2*$rowDexlite['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3" align="center"><strong>Jumlah Petralite</strong></td>
        <td><input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC2+$jualC1?>" style="text-align:right"></td>
        <td><input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualC2*$rowDexlite['hargaJual']+$jualC1*$row9Dexlite['hargaJual']?>" style="text-align:right"></td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Awal</label>
        <input  readonly="readonly"  type="text" name="stokAwal" required="required" class="form-control"  value="<?=$row9[stokAwal]?>"  readonly="readonly" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">BBM Masuk</label>
        <input  readonly="readonly"  type="text" name="bbmMasuk" required="required" class="form-control"   value="<?=$row9[bbmMasuk]?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Jual</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualA1+$jualA2+$jualC1+$jualC2?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Sisa</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control" value="<?=$row9['sisa']?>"   style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Akhir</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control"  value="<?=$row9['stokAkhir']?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Selisih</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control"  value="<?=$row9['sisa']-$row9['stokAkhir']?>"  style="text-align:right">
        </td>
      </tr>
   
      </table>


            </div>
           </div>
           </div>


           <!--Akhir Pertamax-->


<label for="tanggal">Premium</label>
<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
        Shift 1</a>
      </h4>
    </div>
    <div id="collapse10" class="panel-collapse collapse">
      <div class="panel-body">
      
      

<table class='table table-border'>
      <tr>
        <td>
        <label for="tanggal">Teller Awal Nozzle B1 </label>
        <input  readonly="readonly"  type="text" name="B1Awal" required="required" class="form-control" value="<?=$row10[B1Awal]?>" readonly="readonly" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle B1 </label>
        <input  readonly="readonly"  type="text" name="B1Akhir" required="required" class="form-control" value="<?=$row10[B1Akhir]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle B1 </label>
        <input  readonly="readonly"  type="text" name="B1Tera" required="required" class="form-control" value="<?=$row10[B1Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualB1 =  $row10[B1Akhir]-$row10[B1Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB1?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB1*$rowPremium['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle B2 </label>
      <input  readonly="readonly"  type="text" name="B2Awal" required="required" class="form-control" value="<?=$row10[B2Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle B2 </label>
        <input  readonly="readonly"  type="text" name="B2Akhir" required="required" class="form-control"  value="<?=$row10[B2Akhir]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle B2 </label>
        <input  readonly="readonly"  type="text" name="B2Tera" required="required" class="form-control"  value="<?=$row10[B2Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualB2 =  $row10[B2Akhir]-$row10[B2Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB2?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB2*$rowPremium['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle B3 </label>
      <input  readonly="readonly"  type="text" name="B3Awal" required="required" class="form-control" value="<?=$row10[B3Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle B3 </label>
        <input  readonly="readonly"  type="text" name="B3Akhir" required="required" class="form-control" value="<?=$row10[B3Akhir]?>"style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle B3 </label>
        <input  readonly="readonly"  type="text" name="B3Tera" required="required" class="form-control" value="<?=$row10[B3Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualB3 =  $row10[B3Akhir]-$row10[B3Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB3?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB3*$rowPremium['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle B4 </label>
      <input  readonly="readonly"  type="text" name="B4Awal" required="required" class="form-control" value="<?=$row10[B4Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle B4 </label>
        <input  readonly="readonly"  type="text" name="B4Akhir" required="required" class="form-control" value="<?=$row10[B4Akhir]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle B4 </label>
        <input  readonly="readonly"  type="text" name="B4Tera" required="required" class="form-control"  value="<?=$row10[B4Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualB4 =  $row10[B4Akhir]-$row10[B4Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB4?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB4*$rowPremium['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3" align="center"><strong>Jumlah Dexlite</strong></td>
        <td><input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB4+$jualB2+$jualB3+$jualB1?>" style="text-align:right"></td>
        <td><input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB4*$rowPremium['hargaJual']+$jualB2*$rowPremium['hargaJual']+$jualB3*$rowPremium['hargaJual']+$jualB1*$rowPremium['hargaJual']?>" style="text-align:right"></td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Awal</label>
        <input  readonly="readonly"  type="text" name="stokAwal" required="required" class="form-control"  value="<?=$row10[stokAwal]?>"  readonly="readonly" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">BBM Masuk</label>
        <input  readonly="readonly"  type="text" name="bbmMasuk" required="required" class="form-control"   value="<?=$row10[bbmMasuk]?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Jual</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB1+$jualB2+$jualB3+$jualB4?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Sisa</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control" value="<?=$row10['sisa']?>"   style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Akhir</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control"  value="<?=$row10['stokAkhir']?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Selisih</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control"  value="<?=$row10['sisa']-$row10['stokAkhir']?>"  style="text-align:right">
        </td>
      </tr>
   
      </table>


            </div>
           </div>
           </div>


<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse11">
        Shift 2</a>
      </h4>
    </div>
    <div id="collapse11" class="panel-collapse collapse">
      <div class="panel-body">
      
      

<table class='table table-border'>
      <tr>
        <td>
        <label for="tanggal">Teller Awal Nozzle B1 </label>
        <input  readonly="readonly"  type="text" name="B1Awal" required="required" class="form-control" value="<?=$row11[B1Awal]?>" readonly="readonly" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle B1 </label>
        <input  readonly="readonly"  type="text" name="B1Akhir" required="required" class="form-control" value="<?=$row11[B1Akhir]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle B1 </label>
        <input  readonly="readonly"  type="text" name="B1Tera" required="required" class="form-control" value="<?=$row11[B1Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualB1 =  $row11[B1Akhir]-$row11[B1Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB1?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB1*$rowPremium['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle B2 </label>
      <input  readonly="readonly"  type="text" name="B2Awal" required="required" class="form-control" value="<?=$row11[B2Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle B2 </label>
        <input  readonly="readonly"  type="text" name="B2Akhir" required="required" class="form-control"  value="<?=$row11[B2Akhir]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle B2 </label>
        <input  readonly="readonly"  type="text" name="B2Tera" required="required" class="form-control"  value="<?=$row11[B2Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualB2 =  $row11[B2Akhir]-$row11[B2Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB2?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB2*$rowPremium['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle B3 </label>
      <input  readonly="readonly"  type="text" name="B3Awal" required="required" class="form-control" value="<?=$row11[B3Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle B3 </label>
        <input  readonly="readonly"  type="text" name="B3Akhir" required="required" class="form-control" value="<?=$row11[B3Akhir]?>"style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle B3 </label>
        <input  readonly="readonly"  type="text" name="B3Tera" required="required" class="form-control" value="<?=$row11[B3Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualB3 =  $row11[B3Akhir]-$row11[B3Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB3?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB3*$rowPremium['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle B4 </label>
      <input  readonly="readonly"  type="text" name="B4Awal" required="required" class="form-control" value="<?=$row11[B4Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle B4 </label>
        <input  readonly="readonly"  type="text" name="B4Akhir" required="required" class="form-control" value="<?=$row11[B4Akhir]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle B4 </label>
        <input  readonly="readonly"  type="text" name="B4Tera" required="required" class="form-control"  value="<?=$row11[B4Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualB4 =  $row11[B4Akhir]-$row11[B4Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB4?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB4*$rowPremium['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3" align="center"><strong>Jumlah Dexlite</strong></td>
        <td><input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB4+$jualB2+$jualB3+$jualB1?>" style="text-align:right"></td>
        <td><input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB4*$rowPremium['hargaJual']+$jualB2*$rowPremium['hargaJual']+$jualB3*$rowPremium['hargaJual']+$jualB1*$rowPremium['hargaJual']?>" style="text-align:right"></td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Awal</label>
        <input  readonly="readonly"  type="text" name="stokAwal" required="required" class="form-control"  value="<?=$row11[stokAwal]?>"  readonly="readonly" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">BBM Masuk</label>
        <input  readonly="readonly"  type="text" name="bbmMasuk" required="required" class="form-control"   value="<?=$row11[bbmMasuk]?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Jual</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB1+$jualB2+$jualB3+$jualB4?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Sisa</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control" value="<?=$row11['sisa']?>"   style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Akhir</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control"  value="<?=$row11['stokAkhir']?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Selisih</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control"  value="<?=$row11['sisa']-$row11['stokAkhir']?>"  style="text-align:right">
        </td>
      </tr>
   
      </table>


            </div>
           </div>
           </div>


<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse12">
        Shift 3</a>
      </h4>
    </div>
    <div id="collapse12" class="panel-collapse collapse">
      <div class="panel-body">
      
      

<table class='table table-border'>
      <tr>
        <td>
        <label for="tanggal">Teller Awal Nozzle B1 </label>
        <input  readonly="readonly"  type="text" name="B1Awal" required="required" class="form-control" value="<?=$row12[B1Awal]?>" readonly="readonly" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle B1 </label>
        <input  readonly="readonly"  type="text" name="B1Akhir" required="required" class="form-control" value="<?=$row12[B1Akhir]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle B1 </label>
        <input  readonly="readonly"  type="text" name="B1Tera" required="required" class="form-control" value="<?=$row12[B1Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualB1 =  $row12[B1Akhir]-$row12[B1Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB1?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB1*$rowPremium['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle B2 </label>
      <input  readonly="readonly"  type="text" name="B2Awal" required="required" class="form-control" value="<?=$row12[B2Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle B2 </label>
        <input  readonly="readonly"  type="text" name="B2Akhir" required="required" class="form-control"  value="<?=$row12[B2Akhir]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle B2 </label>
        <input  readonly="readonly"  type="text" name="B2Tera" required="required" class="form-control"  value="<?=$row12[B2Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualB2 =  $row12[B2Akhir]-$row12[B2Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB2?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB2*$rowPremium['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle B3 </label>
      <input  readonly="readonly"  type="text" name="B3Awal" required="required" class="form-control" value="<?=$row12[B3Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle B3 </label>
        <input  readonly="readonly"  type="text" name="B3Akhir" required="required" class="form-control" value="<?=$row12[B3Akhir]?>"style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle B3 </label>
        <input  readonly="readonly"  type="text" name="B3Tera" required="required" class="form-control" value="<?=$row12[B3Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualB3 =  $row12[B3Akhir]-$row12[B3Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB3?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB3*$rowPremium['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td>
      <label for="tanggal">Teller Awal Nozzle B4 </label>
      <input  readonly="readonly"  type="text" name="B4Awal" required="required" class="form-control" value="<?=$row12[B4Awal]?>" readonly="readonly" style="text-align:right">
      </td>
        <td>
         <label for="tanggal">Teller Akhir Nozzle B4 </label>
        <input  readonly="readonly"  type="text" name="B4Akhir" required="required" class="form-control" value="<?=$row12[B4Akhir]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Tera Nozzle B4 </label>
        <input  readonly="readonly"  type="text" name="B4Tera" required="required" class="form-control"  value="<?=$row12[B4Tera]?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jual</label>
         <?php $jualB4 =  $row12[B4Akhir]-$row12[B4Awal];?>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB4?>" style="text-align:right">
        </td>
        <td>
         <label for="tanggal">Jumlah (Rp)</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB4*$rowPremium['hargaJual']?>" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3" align="center"><strong>Jumlah Dexlite</strong></td>
        <td><input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB4+$jualB2+$jualB3+$jualB1?>" style="text-align:right"></td>
        <td><input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB4*$rowPremium['hargaJual']+$jualB2*$rowPremium['hargaJual']+$jualB3*$rowPremium['hargaJual']+$jualB1*$rowPremium['hargaJual']?>" style="text-align:right"></td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Awal</label>
        <input  readonly="readonly"  type="text" name="stokAwal" required="required" class="form-control"  value="<?=$row12[stokAwal]?>"  readonly="readonly" style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">BBM Masuk</label>
        <input  readonly="readonly"  type="text" name="bbmMasuk" required="required" class="form-control"   value="<?=$row12[bbmMasuk]?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Jual</label>
        <input  readonly="readonly"  type="text" name="jual" required="required" class="form-control" value="<?=$jualB1+$jualB2+$jualB3+$jualB4?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Sisa</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control" value="<?=$row12['sisa']?>"   style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Stok Akhir</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control"  value="<?=$row12['stokAkhir']?>"  style="text-align:right">
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <label for="tanggal">Selisih</label>
        <input  readonly="readonly"  type="text" name="stokAkhir" required="required" class="form-control"  value="<?=$row12['sisa']-$row12['stokAkhir']?>"  style="text-align:right">
        </td>
      </tr>
   
      </table>


            </div>
           </div>
           </div>



           </div></div>
      </div></div>