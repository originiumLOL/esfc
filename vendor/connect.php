<?php
    $connect = mysqli_connect( 'localhost', 'root' , '', 'esfc');

    if(!$connect){
        die ('error connect database');
    }
?>