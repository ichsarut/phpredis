<h1>Install docker with redis</h1>

<?php 
   //Connecting to Redis server on localhost 
   $redis = new \Redis(); 
  try {
    $redis->connect('redis', 6379);
    echo "<h3>It's work!</h3>";
    echo "Connection to server sucessfully<br>"; 
    echo "Server is running: ".$redis->ping() ."<br>";
    
    $key = 'linus torvalds';
    $redis->hset($key, 'age', 44);
    $redis->hset($key, 'country', 'finland');
    $redis->hset($key, 'occupation', 'software engineer');
    $redis->hset($key, 'reknown', 'linux kernel');
    $redis->hset($key, 'to delete', 'i will be deleted');

    $allKeys = $redis->keys('*');
    print_r($allKeys);

  } catch (\Exception $e) {
    var_dump($e->getMessage()) ;
    die;
  }

?>
