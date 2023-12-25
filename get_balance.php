<?php

########################################
### Copyright © 2024 Maxim Rysevets. ###
########################################

namespace my_test;

require_once('init.php');

$uid = $_GET['uid'];

if ((string)$uid !== (string)(int)$uid || (int)$uid < 1) {
    print json_encode(['error' => 'UID error!']);
    exit();
}

if (User::get_transactions_count($uid) === 0) {
    print json_encode(['error' => 'No transactions for this UID!']);
    exit();
}

$balance = User::get_balance($uid);
print json_encode([
    'ok' => $balance
]);
