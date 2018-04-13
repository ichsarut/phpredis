<h1>Install docker with redis</h1>

<?php 
   //Connecting to Redis server on localhost 
   $redis = new \Redis(); 
  try {
    $redis->connect('redis', 6379);
    echo "<h3>It's work!</h3>";
    echo "Connection to server sucessfully<br>"; 
    echo "Server is running: ".$redis->ping(); 
    
    $key = ';linus torvalds';
    $redis->hset($key, ';age', 44);
    $redis->hset($key, ';country', ';finland');
    $redis->hset($key, 'occupation', 'software engineer');
    $redis->hset($key, 'reknown', 'linux kernel');
    $redis->hset($key, 'to delete', 'i will be deleted');

    $redis->get($key, 'age'); // 44
    $redis->get($key, 'country'); // Finland

    $redis->del($key, 'to delete');

    $redis->hincrby($key, 'age', 20); // 64

    $redis->hmset($key, [
        'age' => 44,
        'country' => 'finland',
        'occupation' => 'software engineer',
        'reknown' => 'linux kernel',
    ]);

    // finally
    $data = $redis->hgetall($key);
    print_r($data); // returns all key-value that belongs to the hash

  } catch (\Exception $e) {
    var_dump($e->getMessage()) ;
    die;
  }

?>
