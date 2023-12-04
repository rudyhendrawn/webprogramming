<?php
    $url = 'data.json';
    $jsonObj = file_get_contents($url);
    $data = json_decode($jsonObj);
    print( $data[0]->nama);