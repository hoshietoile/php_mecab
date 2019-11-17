<?php

$dsn = 'mysql:dbname=mecab_db;host=localhost;charset=utf8mb4';
$user = 'mecab';
$password = 'Mec@bMysq1';

  function setMyregulation($request) {
    global $dsn, $user, $password;
    try {
      $pdo = new PDO($dsn, $user, $password, [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
      );

      $stmt->query('select * from myregulations');

      $pdo = null;

    } catch (PDOException $e) {
      header('Content-Type: text/plain; charset=UTF-8', true, 500);
      exit($e->getMessage());
    }
  }

  function setRegulations($request) {
    global $dsn, $user, $password;
    try {
      $pdo = new PDO($dsn, $user, $password, [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
      );
      $len = count($request);
      for ($i = 0; $i < $len; $i ++) {
        $stmt = $pdo->prepare('insert into regulations (check_surface, check_hinshi, check_conjugation, check_normal, check_yomi) value (?, ?, ?, ?, ?)');

        $stmt->execute([
          $request['check_surface'][$i],
          $request['check_hinshi'][$i],
          $request['check_conjugation'][$i],
          $request['check_normal'][$i],
          $request['check_yomi'][$i]
        ]);
        var_dump($stmt);
      }
            $pdo = null;

    } catch (PDOException $e) {
      header('Content-Type: text/plain; charset=UTF-8', true, 500);
      exit($e->getMessage());
    }
  }



 ?>
