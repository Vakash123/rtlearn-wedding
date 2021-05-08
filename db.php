<?php

  $server = "	sql303.epizy.com";
  $username = "epiz_28571899";
  $password = "MuMuPYph4epgq";
  $dbname = "epiz_28571899_omrs";

  $conn= mysqli_connect ($server, $username, $password,$dbname);

  if(!$conn){
      die("connection failed :" .mysqli_connect_error());

  }

  ?>