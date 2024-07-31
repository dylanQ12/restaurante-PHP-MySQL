<?php
$url_pagina = "https://restaurante-php-railway-production.up.railway.app/";

session_start();
session_unset();
session_destroy();

header('Location:' . $url_pagina);
exit;
