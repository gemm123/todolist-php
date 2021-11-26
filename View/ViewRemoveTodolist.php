<?php

require_once __DIR__ . "/../BusinessLogic/RemoveTodolist.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewRemoveTodolist(){
    echo "MENGHAPUS LIST".PHP_EOL;

    $pilihan = input("Nomor (x untuk keluar)");

    if($pilihan == "x"){
        echo "Batal menghapus list".PHP_EOL;
    }else{
        $success = removeTodolist($pilihan);

        if($success){
            echo "Sukses menghapus list nomor $pilihan".PHP_EOL;
        }else{
            echo "Gagal menghapus list nomor $pilihan".PHP_EOL;
        }
    }
}