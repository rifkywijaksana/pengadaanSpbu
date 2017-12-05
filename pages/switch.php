<?php
 $link = $_GET['id'];
 
 switch($link) 
 {
 	case 1 :
	include "pages/inputDexlite.php";
	break;
 	case 2 :
	include "pages/inputPertamax.php";
	break;
	case 3 :
	include "pages/inputPetralite.php";
	break;
	case 4 :
	include "pages/inputPremium.php";
	break;
	case 5 :
	include "pages/manajemenProduk.php";
	break;
	case 6 :
	include "pages/manajemenNoozle.php";
	break;
	case 7 :
	include "pages/inputDexlite2.php";
	break;

	case 8 :
	include "pages/laporanHarianSupervisor.php";
	break;

	case 9 :
	include "pages/laporanStokBuku.php";
	break;

	case 10 :
	include "pages/laporanPenjualan.php";
	break;

	case 11 :
	include "pages/laporanHarianSupervisor2.php";
	break;
	case 12 :
	include "pages/laporanStokBuku2.php";
	break;
	case 13 :
	include "pages/laporanPenjualan2.php";
	break;

	case 14 :
	include "pages/inputPetralite2.php";
	break;
	case 15 :
	include "pages/inputPertamax2.php";
	break;
	case 16 :
	include "pages/inputPremium2.php";
	break;
	case 17 :
	include "pages/inputStokAwal.php";
	break;
}
?>