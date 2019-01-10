<?php

$curl = curl_init(); //$curl is going to be data type curl resource
curl_setopt($curl, CURLOPT_URL, 'http://www.google.com');
curl_exec($curl);