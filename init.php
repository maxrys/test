<?php

########################################
### Copyright © 2024 Maxim Rysevets. ###
########################################

namespace my_test;

use const my_test\DB_PDO_CREDENTIALS;

require_once('data/credentials.php');
require_once('classes/Database.php');
require_once('classes/User.php');

$db_init_result = Database::init(
    DB_PDO_CREDENTIALS
);

if (is_array($db_init_result) && isset($db_init_result['message'])) {
    print 'Cannot connect to database: ';
    print $db_init_result['message'];
    exit();
}