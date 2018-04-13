<h1>Install docker with redis</h1>
<h3><?= "It's work!!" ?></h3>
<div><?= "HEY!! HOW ARE YOU DOING?" ?></div>

<?php 
   //Connecting to Redis server on localhost 
   $redis = new Redis(); 
   $redis->connect('localhost', 6379); 
   echo "Connection to server sucessfully"; 
   //check whether server is running or not 
   echo "Server is running: ".$redis->ping(); 
?>