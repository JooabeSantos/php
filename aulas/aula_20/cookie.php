<?php

setcookie('user', 'Joabe Santos', time()+3600);
setcookie('email', 'teste@gmail.com', time()+3600);
setcookie('ultima_pesquisa', 'tenis nike', time()+3600);

var_dump($_COOKIE);