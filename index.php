<?php



$psw= readline("Scrivi qui la tua password ");
// MINIMO 8 CARATTERI
function checkChars($password){
if(strlen($password)>=8){
    return true;
}else{
    return false;
}
}
checkChars($psw);
echo (checkChars($psw));

// ALMENO UN NUMERO
function checkNumber($password2){
    for($i=0 ; $i<strlen($password2); $i++){
        if(is_numeric($password2[$i])){
            return true;
        }
    }
    return false;
}

checkNumber($psw);
echo (checkNumber($psw));

// ALMENO UNA LETTERA MAIUSCOLA
function checkBig($password3){
    for($i=0 ; $i<strlen($password3); $i++){
        if(ctype_upper($password3[$i])){
            return true;
        }
    }
    return false;
}
checkBig($psw);
echo(checkBig($psw));

// ALMENO UN SIMBOLO SPECIALE

function checkSpecial($password4){
    $specialChars= ["$","&","@","#"];
    for($i=0; $i<strlen($password4); $i++){
        if(in_array($password4[$i],$specialChars)){
            return true;
        }
    }
    return false;
}
checkSpecial($psw);
echo(checkSpecial($psw));

// FUNZIONE DI COLLEGAMENTO
function linkfunction($password5){
    if(checkSpecial($password5) && checkNumber($password5) && checkBig($password5) && checkChars($password5)){
       return true;
    }else{
        return false ;
    }
}
linkfunction($psw);
echo linkfunction($psw);

// MASSIMO DI PROVE
$tentativi=0;
if(linkfunction($psw)== false){
    do{
        $psw=readline(" Hai sbagliato la password riprova ");
        $tentativi++;
    }while(!linkfunction($psw)&& $tentativi<5);

}
if($tentativi==5){
    echo "hai finito i tentativi";
}else{
    echo "password corretta";
}



// CONFERMA PASSWORD
// function confirmPassword($password, $passwordToConfirm){
//     if(checkSpecial($password) && checkNumber($password) && checkBig($password) && checkChars($password)){
//         echo "password valida \n";
//         $passwordConfirm = readline("conferma la tua password");
//     }
//     if($password==$passwordToConfirm){
//         echo "le password coincidono";
//     }else{
//         echo "le password non coincidono";
//     }
// }