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
            <div class="col-md-6">
            <form name="laporanHarian" method="POST" action=?id=<?php echo urlencode(base64_encode(13)); ?>>
  <label for="tanggal">Bulan </label>
  <input type="text" name="bulan" required="required" class="form-control" placeholder="ex : 01" >
  <label for="tanggal">Tahun </label>
  <input type="text" name="tahun" required="required" class="form-control" placeholder="ex : 2017" >
<input type="submit" name="submit" class="form-control button button-info">
</form>
            </div>
            </div>
            </div>
            </div>
