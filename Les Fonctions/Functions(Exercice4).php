<?php
function exercice($num1, $num2){
if ($num1>$num2){
return "Le premier nombre est plus grand";
}else if ($num1<$num2){
return "Le premier nombre est plus petit";
}else{
return "Les deux nombres sont identiques";
}
}
echo exercice(50, 50);
?>