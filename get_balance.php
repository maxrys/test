<?php

########################################
### Copyright © 2024 Maxim Rysevets. ###
########################################

namespace my_test;

require_once('init.php');

$uid = $_GET['uid'] ?? '';

if ((string)$uid !== (string)(int)$uid || (int)$uid < 1) {
    Output::print_json_and_exit('uid error', Output::EXIT_STATE_ERROR);
}

if (User::get_transactions_count($uid) === 0) {
    Output::print_json_and_exit('no transactions for this uid', Output::EXIT_STATE_ERROR);
}

Output::print_json_and_exit(
    User::get_balance($uid)
);