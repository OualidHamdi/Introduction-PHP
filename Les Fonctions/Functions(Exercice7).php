<?php
function exercice($age, $genre){
    if($genre=="Homme" && $age>=18){
        return "Vous êtes un homme et vous êtes majeur";
    }
else if($genre=="Homme" && $age<18){
    return "Vous êtes un homme et vous êtes mineur";
}else if($genre=="Femme" && $age<18){
    return "Vous êtes une femme et vous êtes mineur";
}else if($genre=="Femme" && $age>=18){
    return "Vous êtes une femme et vous êtes majeur";
}

}
echo exercice(20, "Homme");
?>