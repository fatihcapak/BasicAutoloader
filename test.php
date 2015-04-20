<?php

require_once 'autoload.php';

$connection = new Class_Db_Connection();
$connection->setİp('127.0.0.1');

echo $connection->getİp(). '<br>';

$db = new Class_Payment_Base_Bank();
$db->setBankId('g5F19-97bsm');

echo $db->getBankId(). '<br>';

$account = new Class_Account();
$account->setPlayerName('Github');
$account->setPlayerSsn('12340987');

echo $account->getPlayerName(). '<br>';
echo $account->getPlayerSsn(). '<br>';
