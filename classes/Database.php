<?php

########################################
### Copyright © 2024 Maxim Rysevets. ###
########################################

namespace my_test;

use Exception;
use PDO;
use PDOStatement;

abstract class Database {

    private static $connection;

    static function init($credentials) {
        try {
            if ($credentials['driver'] === 'mysql') {
                static::$connection = new PDO(
                    $credentials['driver'  ].':host='.
                    $credentials['host'    ].';port='.
                    $credentials['port'    ].';dbname='.
                    $credentials['database'].';charset=utf8',
                    $credentials['login'   ],
                    $credentials['password']
                );
            }
            if ($credentials['driver'] === 'sqlite') {
                static::$connection = new PDO(
                    $credentials['driver'].':'.
                    $credentials['file'  ]
                );
            }
            return true;
        } catch (Exception $e) {
            Output::print_json_and_exit(
                $e->getMessage().' | '.$e->getCode(), Output::EXIT_STATE_ERROR
            );
        }
    }

    static function is_init() {
        return static::$connection instanceof PDO;
    }

    static function get_query_result($query, $args = [], $col_num = null) {
        try {
            $statement = static::$connection->prepare($query);
            if ($statement instanceof PDOStatement) {
                $statement->execute($args);
                if ($statement->errorInfo()[0] === PDO::ERR_NONE) {
                    if ($col_num !== null) return $statement->fetchColumn($col_num);
                    if ($col_num === null) return $statement->fetchAll();
                } else throw new Exception('pdo execute error');
            }     else throw new Exception('pdo prepare error');
        } catch (Exception $e) {
            Output::print_json_and_exit(
                $e->getMessage().' | '.$e->getCode(), Output::EXIT_STATE_ERROR
            );
        }
    }

}