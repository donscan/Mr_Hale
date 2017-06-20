<?php

  $dirname = "./MarkDown";

  function directory($dirname)
  {
    $dir = opendir($dirname);

    readdir($dir);
    readdir($dir);

    while($file = readdir($dir))
    {
      $nfile = $dirname.'/'.$file;
      if(is_dir($nfile))
      {
        echo "目录: {$nfile} <br>";
        directory($nfile);
      }else
      {
        echo "文件: {$nfile} <br>";
      }
    }

    closedir($dir);
  }
  directory($dirname);

 ?>
