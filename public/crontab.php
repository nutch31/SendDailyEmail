<?php

    
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://message.heroleads.co.th/SendDailyEmail/public/index.php/api/sendEmail");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);

$data = array(
    'fileUrl' => 'https://docs.google.com/spreadsheets/d/1PediIgoD_LKppgwm4jF5srgQN_SqTHilKazkS_AYmaQ/edit?pli=1#gid=152349423',
    'mimeType' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    'email' => 'nut_ch31@hotmail.com'
);

curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$output = curl_exec($ch);
$info = curl_getinfo($ch);
curl_close($ch);

echo '===> '.$output;

/*
    
    // Get cURL resource
    $curl = curl_init();
    // Set some options - we are passing in a useragent too here
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'http://message.heroleads.co.th/SendDailyEmail/public/index.php/api/index',
        CURLOPT_USERAGENT => 'Codular Sample cURL Request'
    ));
    // Send the request & save response to $resp
    $resp = curl_exec($curl);
    // Close request to clear up some resources
    curl_close($curl);

    echo '====> '.$resp;
  */  

    /*
    // Get cURL resource
    $curl = curl_init();
    // Set some options - we are passing in a useragent too here
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'http://message.heroleads.co.th/SendDailyEmail/public/index.php/api/sendEmail',
        CURLOPT_USERAGENT => 'Codular Sample cURL Request',
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => array(
            'fileUrl' => 'https://docs.google.com/spreadsheets/d/1PediIgoD_LKppgwm4jF5srgQN_SqTHilKazkS_AYmaQ/edit?pli=1#gid=152349423',
            'mimeType' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'email' => 'nut_ch31@hotmail.com'
        )
    ));
    // Send the request & save response to $resp
    $resp = curl_exec($curl);
    // Close request to clear up some resources
    curl_close($curl);

    //echo '===>'.$resp;
    */
?>