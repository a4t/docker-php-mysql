<?php
  $mysqli = new mysqli("mysql-server", "root", "hogehoge", "sample");
  $message = ($mysqli->ping()) ? 'Connect MySQL' : $mysqli->error;
  echo $message;