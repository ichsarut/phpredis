<h1>Install docker with redis</h1>

<?php 
   //Connecting to Redis server on localhost 
   $redis = new \Redis(); 
  try {
    $redis->connect('redis', 6379);
    echo "<h3>It's work</h3>"
    echo "Connection to server sucessfully"; 
    echo "Server is running: ".$redis->ping(); 
  } catch (\Exception $e) {
    var_dump($e->getMessage()) ;
    die;
  }
?>