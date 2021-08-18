<?php
function logIn($userName, $password ){
    if ($userName == "admin" && $password == "admin"){
        return "Xin chào $userName" ;
    }else{
        return "Bạn đã nhập sai";
    }
};
?>