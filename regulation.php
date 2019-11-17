<?php
require_once('app/Mecab.php');
require_once('app/FormController.php');
require_once('app/escape.php');
require_once('db/database.php');

if (!empty($_POST)) {
  var_dump($_POST);
  setRegulations($_POST);
}


 ?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>MeCabで形態素分析</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Flat UI Kit Free is a Twitter Bootstrap Framework design and Theme, this responsive framework includes a PSD and HTML version."/>
    <!-- Loading Bootstrap -->
    <link href="dist/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI Pro -->
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <!-- Loading myStylesheet -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
  </head>
  <body id="regulation" class="container-fluid">

        <div class="container">
          <nav class="navbar navbar-expand-lg bg-silver">
            <a class="navbar-brand" href="template.php">Navbar</a>
            <button type="btn" class="navbar-toggler" data-toggle="collapse" data-target="#menu"></button>
            <div class="collapse navbar-collapse" id="menu">
              <ul class="navbar-nav">
                <li class="nav-item"><a href="regulation.php">myregulation</a></li>
                <li class="nav-item"><a href="#">item</a></li>
                <li class="nav-item"><a href="#">item</a></li>
                <li class="nav-item"><a href="#">item</a></li>
              </ul>
            </div>
          </nav>
        </div>
        <form action="#" id="form-open" class="form-group" method="post">
        <section class="bg-light row">
          <div class="col-10 container">
              <table>
                <thead>
                  <tr>
                    <th>チェック対象</th>
                    <th>品詞</th>
                    <th>活用</th>
                    <th>基本形</th>
                    <th>読み</th>
                  </tr>
                </thead>
                <tbody id="tableBody">
                  <tr>
                    <td><input type="text" name="check_surface[]"></td>
                    <td><input type="text" name="check_hinshi[]"></td>
                    <td>
                      <select type="text" name="check_conjugation[]">
                        <option></option>
                        <option>未然形</option>
                        <option>連用形</option>
                        <option>終止形</option>
                        <option>連体形</option>
                        <option>仮定形</option>
                        <option>命令形</option>
                      </select>
                    </td>
                    <td><input type="text" name="check_normal[]"></td>
                    <td><input type="text" name="check_yomi[]"></td>
                  </tr>
                </tbody>
              </table>
              </form>
              <div class="btn btn-primary" id="button-add" onclick="elementAdd()">一行追加する</div>
              <div class="btn btn-default" id="button-remove" onclick="elementRemove()">一行削除する</div>
              <button class="btn btn-warning">登録する</button>
            </div>

            <aside id="trash" class="palette palette-silver col-2" style="heigt: 30px;">

            </aside>
        </section>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <!-- Bootstrap 4 requires Popper.js -->
    <script src="https://unpkg.com/popper.js@1.14.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="http://vjs.zencdn.net/6.6.3/video.js"></script>
    <script src="dist/scripts/flat-ui.js"></script>
    <script src="../js/script.js"></script>
  </body>
</html>
