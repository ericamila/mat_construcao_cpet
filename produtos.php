<?php
	include "cabecalho.php";
?>
    <h3>Material</h3>

<?php 

$p[0] = "Tijolos";
$p[1] = "Cimentos";
$p[2] = "Forros e gessos";
$p[3] = "Tubos e conexões";
$p[4] = "Madeiras";
$p[5] = "Telhas e calhas";
$valor = ["R$ 0,85", "R$ 48,00", "R$ 120,00", "R$ 40,00", "R$ 35,00", "R$ 55,00"];
for($i = 0; $i<6; $i++){ 
	echo "<div>
        <li>
            <h3>".$p[$i];
			echo "</h3>
            <p>".$valor[$i]."</p>
            <figure><img src='img/".$i;
			echo ".jpg'/></figure>
        </li>
    </div>";
}
?>

<h3>Ferramentas</h3>
<?php 
$p1[0] = "Martelo";
$p1[1] = "Alicate";
$p1[2] = "EPI";
$p1[3] = "Escada";
$p1[4] = "Furadeira";
$p1[5] = "Marreta";
$valor1 = ["R$ 40,85", "R$ 30,00", "R$ 82,00", "R$ 140,00", "R$ 200,00", "R$ 70,00"];
for($j = 0; $j<6; $j++){ 
	echo "<div>
        <li>
            <h3>".$p1[$j];
			echo "</h3>
            <p>".$valor1[$j]."</p>
            <figure><img src='img/a".$j;
			echo ".jpg'/></figure>
        </li>
    </div>";
}
?>

<h3>Casa e Decoração</h3>	
<?php 
$p2[0] = "Espelhos";
$p2[1] = "Poltronas";
$p2[2] = "Sofás";
$p2[3] = "Armários";
$p2[4] = "Cadeiras";
$p2[5] = "Luminárias";
$valor2 = ["R$ 200,50", "R$ 300,00", "R$ 2050,00", "R$ 700,00", "R$ 110,00", "R$ 90,00"];
for($l = 0; $l<6; $l++){ 
	echo "<div>
        <li>
            <h3>".$p2	[$l];
			echo "</h3>
            <p>".$valor2[$l]."</p>
            <figure><img src='img/b".$l;
			echo ".jpg'/></figure>
        </li>
    </div>";
}
?>

<?php
	include "rodape.php";
?>