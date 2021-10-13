<?php $stringa = '<h1>'.'Tu non sai le colline'.'</h1>'.
'<pre>'.'Tu non sai le colline
dove si è sparso il sangue
Tutti quanti fuggimmo
tutti quanti gettammo
l’arma e il nome. Una donna
ci guardava fuggire
Uno solo di noi
si fermò a pugno chiuso
vide il cielo vuoto,
chinò il capo e morì
sotto il muro, tacendo.
Ora è un cencio di sangue
il suo nome. Una donna
ci aspetta alle colline'.'</pre>'.
'<p>'.'-Cesare Pavese'.'</p>';
echo $stringa;
$stringa=str_replace($_GET["badword"], "***", $stringa);
echo $stringa;
?>