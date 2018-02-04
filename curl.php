<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://localhost/pad-delivery/");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "nome=mauiricio&idade=40&sexo=masculino");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resposta = curl_exec($ch);

curl_close($ch);

print_r($resposta);