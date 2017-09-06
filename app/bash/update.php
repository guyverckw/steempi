<?php

/**
 *   __ _                        ___ _
 *  / _\ |_ ___  ___ _ __ ___   / _ (_)
 *  \ \| __/ _ \/ _ \ '_ ` _ \ / /_)/ |
 *  _\ \ ||  __/  __/ | | | | / ___/| |
 *  \__/\__\___|\___|_| |_| |_\/    |_|
 *
 *
 * This script installs steempi
 *
 */

$dir = dirname(dirname(dirname(__FILE__)));

echo "Starting SteemPi Update...".PHP_EOL;

system('sudo git fetch');

// if dev
system('sudo git reset --hard origin/dev');

include dirname(__FILE__).'/composer.php';
include dirname(__FILE__).'/chown.php';