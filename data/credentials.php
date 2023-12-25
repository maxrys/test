<?php

########################################
### Copyright © 2024 Maxim Rysevets. ###
########################################

namespace my_test;

const DB_PDO_CREDENTIALS_MYSQL = [
    'driver'   => 'mysql',
    'host'     => '127.0.0.1',
    'port'     => '3306',
    'database' => 'test',
    'login'    => 'root',
    'password' => '123',
];

const DB_PDO_CREDENTIALS_SQLITE = [
    'driver' => 'sqlite',
    'file'   => 'data/db.sqlite',
];
