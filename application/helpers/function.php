<?php 
/**
 * 
 */
function skorNilai($nilai)
{
	if ($nilai=='A') $skor >= 85;
		elseif ($nilai == 'B') $skor >=70<85;
			elseif($nilai == 'C') $skor >=50<70;
				elseif ($nilai == 'D') $skor > 0 < 50
				 else $skor = 0;

			return $skor; 
}
