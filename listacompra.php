<?php
if(isset($_POST['submit'])){
if(!empty($_POST['check_list'])){
$myfile = fopen ("pedidos.txt","w") or die ("No se ha podido abrir!");
foreach($_POST['check_list'] as $selected){
echo $selected."</br>";
$txt = "$selected </br>";
fwrite($myfile,$txt);
}
}
}
fclose($myfile);
?>
