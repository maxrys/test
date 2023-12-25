<?php

########################################
### Copyright © 2024 Maxim Rysevets. ###
########################################

namespace my_test;

use const my_test\DB_PDO_CREDENTIALS_MYSQL;
use const my_test\DB_PDO_CREDENTIALS_SQLITE;

require_once('data/credentials.php');
require_once('classes/Database.php');
require_once('classes/User.php');

Database::init(
    DB_PDO_CREDENTIALS_SQLITE
);
