# autoloaderForPhpClass
the easy way for including classes

For Ex.

require_once 'autoload.php';

$connection = new Class_Db_Connection();

$connection->setİp('127.0.0.1');

echo $connection->getİp();



$db = new Class_Payment_Base_Bank();

$db->setBankId('g5F19-97bsm');

echo $db->getBankId();


$account = new Class_Account();

$account->setPlayerName('Github');

$account->setPlayerSsn('12340987');

echo $account->getPlayerName();

echo $account->getPlayerSsn();
