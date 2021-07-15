<?php

'type'=>Env::get('database.type','mysql'),
'hostname'=>Env::get('database.hostname','127.0.0.1'),
'database'=>Env::get('database.database','grade'),
'username'=>Env::get('database.username','root'),
'password'=>Env::get('database.password','123456'),
'hostport'=>Env::get('database.hostport','3306'),
'charset'=>Env::get('database.charset','utf8'),
'prefix'=>Env::get('database.prefix','tp_'),