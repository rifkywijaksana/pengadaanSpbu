<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Laporan Buku</h3>

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
    <th>Tanggal</th>
    <th>Stok Awal</th>
    <th>DO Masuk</th>
    <th>Total</th>
    <th>Jual</th>
    <th>Sisa</th>
    <th>Stok Akhir</th>
    <th>Selisih</th>
  </tr>
<?php
$bulan=$_POST['bulan'];
$tahun=$_POST['tahun'];
$idProduk = $_POST['produk'];

if($idProduk=="Dex")
{
  $query = "SELECT  SUM(A1Awal) sumA1Awal, SUM(A1AKHIR) sumA1Awal,
  SUM(A2Awal) sumA2Awal, SUM(A2AKHIR) sumA2Akhir,
  SUM(A3Awal) sumA3Awal, SUM(A3AKHIR) sumA2Akhir,
  SUM(A4Awal) sumA4Awal, SUM(A4AKHIR) sumA2Akhir,
  SUM(A1Tera) sumA1Tera, SUM(A2Tera) sumA2Tera,SUM(A3Tera) sumA3Tera,SUM(A4Tera) sumA4Tera,
  SUM(stokAwal) sumStokAwal,SUM(bbmMasuk) sumBbmMasuk, SUM(sisa) sumSisa, SUM(stokAkhir) sumstokAkhir,tanggal
  
  FROM t_dexliteTrx WHERE tanggal BETWEEN '".$tahun."-".$bulan."-01' AND '".$tahun."-".$bulan."-31'
GROUP BY tanggal";
} 
else if ($idProduk=="Pre")
  {
       $query = "SELECT  SUM(B1Awal) sumB1Awal, SUM(B1AKHIR) sumB1Awal,
  SUM(B2Awal) sumB2Awal, SUM(B2AKHIR) sumB2Akhir,
  SUM(B3Awal) sumB3Awal, SUM(B3AKHIR) sumB2Akhir,
  SUM(B4Awal) sumB4Awal, SUM(B4AKHIR) sumB2Akhir,
  SUM(B1Tera) sumB1Tera, SUM(B2Tera) sumB2Tera,SUM(B3Tera) sumB3Tera,SUM(B4Tera) sumB4Tera,
  SUM(stokAwal) sumStokAwal,SUM(bbmMasuk) sumBbmMasuk, SUM(sisa) sumSisa, SUM(stokAkhir) sumstokAkhir,tanggal
  
  FROM t_premiumTrx WHERE tanggal BETWEEN '".$tahun."-".$bulan."-01' AND '".$tahun."-".$bulan."-31'
GROUP BY tanggal";
  } 
  else if ($idProduk=="Pet")
  {
    $query = "SELECT  
                    SUM(C3Awal) sumC3Awal, SUM(C3AKHIR) sumC3Akhir,
                    SUM(C4Awal) sumC4Awal, SUM(C4AKHIR) sumC4Akhir,
                    SUM(C3Tera) sumC3Tera,SUM(C4Tera) sumC4Tera,
                    SUM(stokAwal) sumStokAwal,SUM(bbmMasuk) sumBbmMasuk, SUM(sisa) sumSisa, SUM(stokAkhir) sumstokAkhir,tanggal
                    
                    FROM t_petraliteTrx WHERE tanggal BETWEEN '".$tahun."-".$bulan."-01' AND '".$tahun."-".$bulan."-31'
                  GROUP BY tanggal";
  }
  else if ($idProduk=="Per")
  {
      $query = "SELECT  
                    SUM(C1Awal) sumC1Awal, SUM(C1AKHIR) sumC1Akhir,
                    SUM(C2Awal) sumC2Awal, SUM(C2AKHIR) sumC2Akhir,
                    SUM(C1Tera) sumC1Tera,SUM(C2Tera) sumC2Tera,
                    SUM(stokAwal) sumStokAwal,SUM(bbmMasuk) sumBbmMasuk, SUM(sisa) sumSisa, SUM(stokAkhir) sumstokAkhir,tanggal
                    
                    FROM t_pertamaxTrx WHERE tanggal BETWEEN '".$tahun."-".$bulan."-01' AND '".$tahun."-".$bulan."-31'
                  GROUP BY tanggal";
  }


$getData = mysqli_query($connection,$query) or die(mysqli_error($connection));
while ($row = mysqli_fetch_array($getData))
      {
        if($idProduk=="Dex")
{
  $jual = $row[sumA1Akhir] - $row[sumA1Awal] + $row[sumA2Akhir] - $row[sumA2Awal] + $row[sumA3Akhir] - $row[sumA3Awal] + $row[sumA4Akhir] - $row[sumA4Awal];
} 
else if ($idProduk=="Pre")
  {
     $jual = $row[sumB1Akhir] - $row[sumB1Awal] + $row[sumB2Akhir] - $row[sumB2Awal] + $row[sumB3Akhir] - $row[sumB3Awal] + $row[sumB4Akhir] - $row[sumB4Awal];
  } 
  else if ($idProduk=="Pet")
  {
    $jual = $row[sumC1Akhir] - $row[sumC1Awal] + $row[sumC2Akhir] - $row[sumC2Awal];
  }
  else if ($idProduk=="Per")
  {
     $jual = $row[sumC3Akhir] - $row[sumC3Awal] + $row[sumC4Akhir] - $row[sumC4Awal];
  }
        
          ?>
          <tr>
            
            <td align="right"><?=$row['tanggal']?></td>
            <td align="right"><?=number_format($row['sumStokAwal'], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)?></td>
            <td align="right"><?=number_format($row['sumBbmMasuk'], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)?></td>
            <td align="right"><?=number_format($row['sumBbmMasuk']+$row['sumStokAwal'], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)?></td>
            <td align="right"><?=number_format($jual, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)?></td>
            <td align="right"><?=number_format($row['sumSisa'], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)?></td>
            <td align="right"><?=number_format($row['sumstokAkhir'], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)?></td>
            <td align="right"><?=number_format($row['sumstokAkhir']-$row['sumSisa'], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)?></td>

          </tr>
          <?php
      }
?>


</table>


            </div>
            </div>
            </div>
            </div>