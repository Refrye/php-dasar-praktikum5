<?php
$nilai = 7;
$predikat = $nilai > 9 
	? 'Sangat Baik' 
	  : ( $nilai >= 7 && $nilai <= 8 
		? 'Baik' 
	  : ( $nilai <= 7 && $nilai > 6 
		? 'Sedang' : 'Kurang'
	 ) 
    );
echo $predikat;