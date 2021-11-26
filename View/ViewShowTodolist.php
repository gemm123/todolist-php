<?php

require_once __DIR__ . "/../Model/Todolist.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodolist.php";
require_once __DIR__ . "/../View/ViewAddTodolist.php";
require_once __DIR__ . "/../View/ViewRemoveTodolist.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewShowTodolist(){
    while (true){
        showTodolist();

        echo "MENU". PHP_EOL;
        echo "1. Tambah List". PHP_EOL;
        echo "2. Hapus List". PHP_EOL;
        echo "x. Keluar Program". PHP_EOL;

        $pilihan = input("Pilih");

        if($pilihan == "1"){
            viewAddTodolist();
        }else if($pilihan == "2"){
            viewRemoveTodolist();
        }else if($pilihan == "x"){
            break;
        }else{
            echo "Pilihan tidak ada".PHP_EOL;
        }
    }

    echo "Terima Kasih ^_^". PHP_EOL;
}