<?php

$mysqli = new Mysqli("localhost","root","","db_nouuti");

if (!$mysqli) {
    echo "Koneksi bermasalah!";
}