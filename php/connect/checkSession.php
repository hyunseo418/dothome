<?php
    if( !isset($_SEIION['memberID']) ){
        Header("Location:../main/error.html");
        exit;
    }
?>