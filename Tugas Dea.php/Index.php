<?php 

include "Animal.php";

Class ayam{var $Bao;
function Bisa_bertelur(){//$Bao-> Bisa_bertelur;
}
function bersuara (){//$Bao-> Kukuruuyuk kukuruyuuk;
}
} 

$Bao=new ayam;
$Bao->jumlah_kaki=2;
echo "Bao adalah ayam <br>";
echo"punya kaki sebanyak:".$Bao-> jumlah_kaki."<br>";
echo " Bisa berlari dengan cepat". "<br>";
echo"Suaranya: Kukuruuyuk". $Bao-> bersuara ()."<br>";
echo "<hr>";

Class sapi {var $Zee;
function Bisa_beranak(){//$Zee->Bisa_beranak;
}
function bersuara (){//$Zee-> mouuukk mouukk;
}
} 
$Zee=new sapi;
$Zee->jumlah_kaki=4;
echo "Zee adalah sapi <br>";
echo"punya kaki sebanyak:".$Zee-> jumlah_kaki."<br>";
echo "Bisa berlari "."<br>";
echo"Suaranya: mouuukk mouukk". $Zee-> bersuara ()."<br>";
echo "<hr>";

Class burung {var $Perkutuk;
function Bisa_terbang(){//$Perkutuk->Bisa_terbang;
}
function bersuara (){//$Perkutuk->tekuukurrr;
}
} 
$Perkutuk=new burung;
$Perkutuk->jumlah_kaki=2;
echo "perkutuk adalah burung <br>";
echo"punya kaki sebanyak:".$Perkutuk-> jumlah_kaki."<br>";
echo "Bisa terbang"."<br>";
echo"Suaranya: tekuukurrr". $Perkutuk-> bersuara ()."<br>";
echo "<hr>";

Class kambing{var $Milo;
function Bisa_beranak(){//$Milo-> Bisa_berenang;
}
function bersuara (){//$Milo-> mbeek mbeek;
}
} 

$Milo=new kambing;
$Milo->jumlah_kaki=4;
echo "milo adalah kambing <br>";
echo "punya kaki sebanyak:".$Milo-> jumlah_kaki."<br>";
echo "Bisa beranak". "<br>";
echo "Suaranya: mbeek mbeek". $Milo-> bersuara ()."<br>";
echo "<hr>";
 ?>