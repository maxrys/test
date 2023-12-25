<?php

########################################
### Copyright © 2024 Maxim Rysevets. ###
########################################

namespace my_test;

require_once('init.php');

$all_uid = User::get_all_uid();

if (is_array($all_uid) && count($all_uid) === 0) print 'No users!';
if (is_array($all_uid) && count($all_uid)  >  0) {
    print '<h2>Balance of users</h2>';
    print '<ul>';
    foreach ($all_uid as $c_row) {
        print '<li>';
        print     '<a ';
        print         'href="/get_balance.php?uid='     .$c_row['uid'].'" ';
        print         'target="page_'                   .$c_row['uid'].'">';
        print         'Show balance of user with UID = '.$c_row['uid'];
        print     '</a>';
        print '</li>'; }
    print '</ul>';
}