<?php

    // There is a warning I haven't had time to debug
    error_reporting(E_ERROR | E_PARSE);

    // Using the API Flash API
    $apiflash = 'https://api.apiflash.com/v1/urltoimage';
    $key = 'YOUR KEY';


    $root = 'https://www.YOURWEBSITE.com';
    $pages = ['/',
              '/PAGE/',
              '/ANOTHERPAGE/',
              '/YOUGETTHEIDEA/'];


    foreach ($pages as $page) {
      $image = $apiflash . '?access_key=' . $key . '&url=' . $root . $page;
      $imageData = base64_encode(file_get_contents($image));
      $src = 'data: '. mime_content_type($image) . ';base64,' . $imageData;
      echo '<img src="' . $src . '" width="400">';
    }
