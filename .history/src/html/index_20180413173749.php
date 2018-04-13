<h1>Install docker with redis</h1>
<h3><?= "It's work!!" ?></h3>
<div><?= "HEY!! HOW ARE YOU DOING?" ?></div>

<?php 
   //Connecting to Redis server on localhost 
   $redis = new Redis(); 
   $redis->connect('127.0.0.1', 6379); 
   echo "Connection to server sucessfully"; 
   //check whether server is running or not 
   echo "Server is running: ".$redis->ping(); 
?>

<?php
// TEST SCRIPT REDIS
define('TEST_KEY', 'are_we_glued');
$redis = new Redis();
try {
    $redis->connect('localhost', 6379);
    $redis->set(TEST_KEY, 'yes');
    $glueStatus = $redis->get(TEST_KEY);
    if ($glueStatus) {
        $testKey = TEST_KEY;
        echo "Glued with the Redis key value store:" . PHP_EOL;
        echo "1. Got value '{$glueStatus}' for key '{$testKey}'." . PHP_EOL;
        if ($redis->delete(TEST_KEY)) {
            echo "2. And already removed the key/value pair again." . PHP_EOL;
        }
    } else {
        echo "Not glued with the Redis key value store." . PHP_EOL;
    }
} catch (RedisException $e) {
    $exceptionMessage = $e->getMessage();
    echo "Error !! {$exceptionMessage}. Not glued with the Redis key value store." . PHP_EOL;
}