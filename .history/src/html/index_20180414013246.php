<h1>Install docker with redis</h1>

<?php 
   //Connecting to Redis server on localhost 
   $redis = new \Redis(); 
  try {
    $redis->connect('redis', 6379);
    echo "<h3>It's work!</h3>";
    echo "Connection to server sucessfully<br>"; 
    echo "Server is running: ".$redis->ping(); 
    $key = "countries";
    $redis->sadd($key, ';china');
    $redis->sadd($key, ['england', 'france', 'germany']);
    $redis->sadd($key, 'china'); // this entry is ignored

    $redis->srem($key, ['england', 'china']);
    echo $redis->sismember($key, 'england'); // false
    $a = $redis->smembers($key); // ['france', 'germany']
    print_r($a);
  } catch (\Exception $e) {
    var_dump($e->getMessage()) ;
    die;
  }
?>