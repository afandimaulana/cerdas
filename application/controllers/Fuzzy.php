<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fuzzy extends CI_Controller
{
	public function index()
	{
		$this->load->view('fuzzy');
	}

	public function proses()
	{
		// Gaji
		$kurang = $this->kurang($this->input->post('gaji'));
		$cukup = $this->cukup($this->input->post('gaji'));
		$lebih = $this->lebih($this->input->post('gaji'));

		// Asset
		$sedikit = $this->sedikit($this->input->post('asset'));
		$lumayan = $this->lumayan($this->input->post('asset'));
		$banyak = $this->banyak($this->input->post('asset'));

		$gaji='Gaji ';
		$asset=' Asset';

		if($kurang != 0)
		{
			if($sedikit != 0)
			{
				$fuzifikasi= $gaji.": Kurang: ".$kurang."".$asset." : Sedikit: ".$sedikit." -Result Fuzifikasi- ".min($kurang, $sedikit)." - TIDAK DISETUJUI";
			}
			if($lumayan != 0)
			{
				$fuzifikasi= $gaji.": Kurang: ".$kurang."".$asset." : Lumayan: ".$lumayan." -Result Fuzifikasi- ".min($kurang, $lumayan)." - TIDAK DISETUJUI";
			}
			if($banyak != 0)
			{
				$fuzifikasi= $gaji.": Kurang: ".$kurang."".$asset." : Banyak: ".$banyak." -Result Fuzifikasi- ".min($kurang, $banyak)." - SETUJU";
			}
		}
		if($cukup != 0)
		{
			if($sedikit != 0)
			{
				$fuzifikasi= $gaji.": Cukup: ".$cukup."".$asset." : Sedikit: ".$sedikit." -Result Fuzifikasi- ".min($cukup, $sedikit)." - TIDAK DISETUJUI";
			}
			if($lumayan != 0)
			{
				$fuzifikasi= $gaji.": Cukup: ".$cukup."".$asset." : Lumayan: ".$lumayan." -Result Fuzifikasi- ".min($cukup, $lumayan)." - SETUJU";
			}
			if($banyak != 0)
			{
				$fuzifikasi= $gaji.": Cukup: ".$cukup."".$asset." : Banyak: ".$banyak." -Result Fuzifikasi- ".min($cukup, $banyak)." - SETUJU";
			}
		}
		if($lebih != 0)
		{
			if($sedikit != 0)
			{
				$fuzifikasi= $gaji.": Lebih: ".$lebih."".$asset." : Sedikit: ".$sedikit." -Result Fuzifikasi- ". min($lebih, $sedikit)." - "."SETUJU";
			}
			if($lumayan != 0)
			{
				$fuzifikasi= $gaji.": Lebih: ".$lebih."".$asset." : Lumayan: ".$lumayan." -Result Fuzifikasi- ". min($lebih, $lumayan)." - "."SETUJU";
			}
			if($banyak != 0)
			{
				$fuzifikasi= $gaji.": Lebih: ".$lebih."".$asset." : Banyak: ".$banyak." -Result Fuzifikasi- ". min($lebih, $banyak)." - "."SETUJU";
			}
		}

		$a = min($kurang, $sedikit);
		$b = min($kurang, $lumayan);
		$c = min($kurang, $banyak);
		$d = min($cukup, $sedikit);
		$e = min($cukup, $lumayan);
		$f = min($cukup, $banyak);
		$g = min($lebih, $sedikit);
		$h = min($lebih, $lumayan);
		$i = min($lebih, $banyak);
		// echo $a."<br>";
		// echo $b."<br>";
		// echo $c."<br>";
		// echo $d."<br>";
		// echo $e."<br>";
		// echo $f."<br>";
		// echo $g."<br>";
		// echo $h."<br>";
		// echo $i."<br>";
		$ts = max($a, $b, $d);
		//echo $ts." TIDAK SETUJU<br>";
		$setuju	= max($c, $e, $f, $g, $h, $i);
		//echo $setuju." SETUJU<br>";
		//Defuzifikasi
		$hasil = (($ts*30)+($ts*40)+($ts*50)+($setuju*70)+($setuju*80)+($setuju*90))/($ts*3+$setuju*3);
		//echo $hasil;

		if($hasil <= 60)
		{
			$defuzifikasi= $hasil." --KESIMPULAN TIDAK DISETUJUI";
		}
		if($hasil > 60 && $hasil < 80)
		{
			$defuzifikasi= $hasil." --KESIMPULAN MUNGKIN";
		}
		if($hasil >= 80)
		{
			$defuzifikasi= $hasil." --KESIMPULAN SETUJU";
		}

		$data=array(
			'fuzifikasi'=>$fuzifikasi,
			'defuzifikasi'=>$defuzifikasi
		);

		echo json_encode($data);
	}

	// Gaji
	private function kurang($gaji)
	{
		if($gaji>5)
		{
			return 0;
		}
		else if($gaji>=0 && $gaji<=3)
		{
			return 1;
		}
		else if($gaji>3 && $gaji<5)
		{
			return (5-$gaji)/(5-3);
		}
	}

	private function cukup($gaji)
	{
		if($gaji<=3 || $gaji>=8)
		{
			return 0;
		}
		else if($gaji==5)
		{
			return 1;
		}
		else if($gaji>3 && $gaji<5)
		{
			return ($gaji-3)/(5-3);
		}
		else if($gaji>5 && $gaji<8)
		{
			return (8-$gaji)/(8-5);
		}
	}

	private function lebih($gaji)
	{
		if($gaji<=5)
		{
			return 0;
		}
		else if($gaji>=8)
		{
			return 1;
		}
		else if($gaji>5 && $gaji<8)
		{
			return ($gaji-5)/(8-5);
		}
	}

	// Asset
	private function sedikit($aset)
	{
		if($aset>=5)
		{
			return 0;
		}
		else if($aset>=0 && $aset<=2)
		{
			return 1;
		}
		else if($aset>2 && $aset<5)
		{
			return (5-$aset)/(5-2);
		}
	}

	private function lumayan($aset)
	{
		if($aset<=2 || $aset>=7)
		{
			return 0;
		}
		else if($aset==5)
		{
			return 1;
		}
		else if($aset>2 && $aset<5)
		{
			return ($aset-2)/(5-2);
		}
		else if($aset>5 && $aset<7)
		{
			return (7-$aset)/(7-5);
		}
	}

	private function banyak($aset)
	{
		if($aset<=4)
		{
			return 0;
		}
		else if($aset>=7)
		{
			return 1;
		}
		else if($aset>5 && $aset<7)
		{
			return ($aset-5)/(7-5);
		}
	}

}
