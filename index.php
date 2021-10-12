<?php $stringa = '<h1>'.'Tu non sai le colline'.'</h1>'.'<br>'.
'Tu non sai le colline'.'</br>'.
'dove si è sparso il sangue'.'</br>'.
'Tutti quanti fuggimmo'.'</br>'.
'tutti quanti gettammo'.'</br>'.
'l’arma e il nome. Una donna'.'</br>'.
'ci guardava fuggire.'.'</br>'.
'Uno solo di noi'.'</br>'.
'si fermò a pugno chiuso,'.'</br>'.
'vide il cielo vuoto,'.'</br>'.
'chinò il capo e morì'.'</br>'.
'sotto il muro, tacendo.'.'</br>'.
'Ora è un cencio di sangue'.'</br>'.
'il suo nome. Una donna'.'</br>'.
'ci aspetta alle colline.'.'</br>'.
'-Cesare Pavese'.'<hr>';
echo $stringa;
$stringa=str_replace($_GET["badword"], "***", $stringa);
echo $stringa;
?>
