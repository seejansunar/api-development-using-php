<?php

    $url = "http://localhost/api-development-using-php/server/index.php?key=alhdfj09189475803";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    $result = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($result, true);

    

    if(isset($result['status']))
    {
        if($result['status'] == 'true')
        {
            echo '<pre>';
            print_r($result['data']);
        }else{
            echo '<pre>';
            print_r($result['data']);
        }
    }

?>