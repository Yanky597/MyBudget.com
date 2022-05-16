<?php

require('config/db.php');

$query = 'SELECT * FROM userAndPass';

$result = mysqli_query($link ,$query);

//fetch data

$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

var_dump($posts);

mysqli_free_result($result);

mysqli_close($link);



?>