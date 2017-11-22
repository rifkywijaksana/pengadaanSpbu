<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Laporan Penjualan</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">

            <table class="table table-border">
  <tr>
    <th rowspan="2">Tgl</th>
    <th colspan="9">Penjualan</th>
  </tr>
  <tr>
    <th>Dexlite</th>
    <th>Total</th>
    <th>Premium</th>
    <th>Total</th>
    <th>Pertamax</th>
    <th>Total</th>
    <th>Petralite</th>
    <th>Total</th>
  </tr>
  <?php    
$bulan=$_POST['bulan'];
$tahun=$_POST['tahun'];
$queryDexlite = "SELECT * FROM t_produk where idProduk='Dex'";
      $getDataDexlite = mysqli_query($connection,$queryDexlite) or die(mysqli_error($connection));
      $rowDexlite = mysqli_fetch_array($getDataDexlite);
$query = "SELECT  SUM(A1Awal) sumA1Awal, SUM(A1AKHIR) sumA1Awal,
  SUM(A2Awal) sumA2Awal, SUM(A2AKHIR) sumA2Akhir,
  SUM(A3Awal) sumA3Awal, SUM(A3AKHIR) sumA2Akhir,
  SUM(A4Awal) sumA4Awal, SUM(A4AKHIR) sumA2Akhir,
  SUM(A1Tera) sumA1Tera, SUM(A2Tera) sumA2Tera,SUM(A3Tera) sumA3Tera,SUM(A4Tera) sumA4Tera,
  SUM(stokAwal) sumStokAwal,SUM(bbmMasuk) sumBbmMasuk, SUM(sisa) sumSisa, SUM(stokAkhir) sumstokAkhir,tanggal
  
  FROM t_dexliteTrx WHERE tanggal BETWEEN '".$tahun."-".$bulan."-01' AND '".$tahun."-".$bulan."-31'
GROUP BY tanggal";
$getData = mysqli_query($connection,$query) or die(mysqli_error($connection));


$queryPetralite = "SELECT * FROM t_produk where idProduk='Pre'";
      $getDataPetralite = mysqli_query($connection,$queryPetralite) or die(mysqli_error($connection));
      $rowPetralite = mysqli_fetch_array($getDataPetralite);

 $query2 = "SELECT  
                    SUM(C3Awal) sumC3Awal, SUM(C3AKHIR) sumC3Akhir,
                    SUM(C4Awal) sumC4Awal, SUM(C4AKHIR) sumC4Akhir,
                    SUM(C3Tera) sumC3Tera,SUM(C4Tera) sumC4Tera,
                    SUM(stokAwal) sumStokAwal,SUM(bbmMasuk) sumBbmMasuk, SUM(sisa) sumSisa, SUM(stokAkhir) sumstokAkhir,tanggal
                    
                    FROM t_petraliteTrx WHERE tanggal BETWEEN '".$tahun."-".$bulan."-01' AND '".$tahun."-".$bulan."-31'
                  GROUP BY tanggal";
$getData2 = mysqli_query($connection,$query2) or die(mysqli_error($connection));





$queryPertamax = "SELECT * FROM t_produk where idProduk='Per'";
      $getDataPertamax = mysqli_query($connection,$queryPertamax) or die(mysqli_error($connection));
      $rowPertamax = mysqli_fetch_array($getDataPertamax);

 $query3 = "SELECT  
                    SUM(C1Awal) sumC1Awal, SUM(C1AKHIR) sumC1Akhir,
                    SUM(C2Awal) sumC2Awal, SUM(C2AKHIR) sumC2Akhir,
                    SUM(C1Tera) sumC1Tera,SUM(C2Tera) sumC2Tera,
                    SUM(stokAwal) sumStokAwal,SUM(bbmMasuk) sumBbmMasuk, SUM(sisa) sumSisa, SUM(stokAkhir) sumstokAkhir,tanggal
                    
                    FROM t_pertamaxTrx WHERE tanggal BETWEEN '".$tahun."-".$bulan."-01' AND '".$tahun."-".$bulan."-31'
                  GROUP BY tanggal";
$getData3 = mysqli_query($connection,$query3) or die(mysqli_error($connection));


$queryPremium = "SELECT * FROM t_produk where idProduk='Pre'";
      $getDataPremium = mysqli_query($connection,$queryPremium) or die(mysqli_error($connection));
      $rowPremium = mysqli_fetch_array($getDataPremium);

 $query4 = "SELECT  SUM(B1Awal) sumB1Awal, SUM(B1AKHIR) sumB1Awal,
  SUM(B2Awal) sumB2Awal, SUM(B2AKHIR) sumB2Akhir,
  SUM(B3Awal) sumB3Awal, SUM(B3AKHIR) sumB2Akhir,
  SUM(B4Awal) sumB4Awal, SUM(B4AKHIR) sumB2Akhir,
  SUM(B1Tera) sumB1Tera, SUM(B2Tera) sumB2Tera,SUM(B3Tera) sumB3Tera,SUM(B4Tera) sumB4Tera,
  SUM(stokAwal) sumStokAwal,SUM(bbmMasuk) sumBbmMasuk, SUM(sisa) sumSisa, SUM(stokAkhir) sumstokAkhir,tanggal
  
  FROM t_premiumTrx WHERE tanggal BETWEEN '".$tahun."-".$bulan."-01' AND '".$tahun."-".$bulan."-31'
GROUP BY tanggal";
$getData4 = mysqli_query($connection,$query4) or die(mysqli_error($connection));


while ($row = mysqli_fetch_array($getData) AND $row2=mysqli_fetch_array($getData2)AND $row3=mysqli_fetch_array($getData3)AND $row4=mysqli_fetch_array($getData4))
      {

        $jual = $row[sumA1Akhir] - $row[sumA1Awal] + $row[sumA2Akhir] - $row[sumA2Awal] + $row[sumA3Akhir] - $row[sumA3Awal] + $row[sumA4Akhir] - $row[sumA4Awal];
        $jual2 = $row2[sumC3Akhir] - $row2[sumC3Awal] + $row2[sumC4Akhir] - $row2[sumC4Awal];
        $jual3 = $row3[sumC1Akhir] - $row3[sumC1Awal] + $row3[sumC2Akhir] - $row3[sumC2Awal];
        $jual4 = $row4[sumB1Akhir] - $row4[sumB1Awal] + $row4[sumB2Akhir] - $row4[sumB2Awal] + $row4[sumB3Akhir] - $row4[sumB3Awal] + $row4[sumB4Akhir] - $row4[sumB4Awal];
        ?>
          <tr>
            <td><?=$row['tanggal']?></td>
            <td align="right"><?=number_format($jual, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)?></td>
            <td align="right">Rp<?=number_format($jual*$rowDexlite['hargaJual'], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)?></td>
             <td align="right"><?=number_format($jual4, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)?></td>
            <td align="right">Rp<?=number_format($jual4*$rowPremium['hargaJual'], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)?></td>
             <td align="right"><?=number_format($jual3, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)?></td>
             <td align="right">Rp<?=number_format($jual3*$rowPertamax['hargaJual'], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)?></td>
             <td align="right"><?=number_format($jual2, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)?></td>
            <td align="right">Rp<?=number_format($jual2*$rowPetralite['hargaJual'], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)?></td>
          </tr>
        <?php
      }

?>

</table>
</div>
</div></div></div>