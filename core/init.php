<?php
session_start();

$GLOBALS['config'] = array (
    'mysql' => array(
        'host' => '127.0.0.1', //ip ipv localhost omdat met localhost een dns lookup gedaan moet worden met PDO, laadt sneller op deze manier
        'username' => 'root',
        'password' => '',
        'db' => 'oop_marketplace'
    ),
    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_expiry' => 604800
    ),
    'session' => array(
        'session_name' => 'user'
    ),
);

spl_autoload_register(function ($class){ //spl = standard php library
    require_once 'classes/' . $class . '.php';
}); // hierdoor is het niet nodig elke file apart te requiren maar wordt het aangeroepen op het moment dat het nodig is

require_once 'functions/sanitize.php'; //elke andere file gaat init.php aanroepen, hierdoor wordt ook bij elke aanroep de sanitize functie aangeroepen

?>