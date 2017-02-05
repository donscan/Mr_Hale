<?php

  $link = mysql_connect('localhost','root','root');

  if(!link)
  {
    echo mysql_error();
  }else {
    echo "Successful ! <br>";
  }


 ?>
