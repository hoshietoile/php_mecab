<?php
require_once('app/Mecab.php');
require_once('app/FormController.php');
require_once('app/escape.php');


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
  <body id="template">

    <div class="container-fluid">
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
        <section class="bg-light">
          <form action="result.php" id="form-open" class="form-group" method="post">

            <div class="row pb-4 px-2">

              <div class="box col-md-4">
                <label for="input_1">keyword</label>
                <input type="text" name="keyword" class="form-control" id="input_1">
              </div>
              <div class="box col-md-4">
                <label for="input_2">regulation</label>
                <select type="text" name="regulation" class="form-control" id="input_2">
                  <option value="0">regulation0</option>
                  <option value="1">regulation1</option>
                  <option value="2">regulation2</option>
                  <option value="3">regulation3</option>
                </select>
              </div>
              <div class="box col-md-4">
                <label for="input_2">search-type</label>
                <input type="text" name="search-type" class="form-control" id="input_3">
              </div>
              <div class="w-100"></div>
              <div class="box col-md-12">
                <label for="input_4">check-text</label>
                <textarea name="text" class="form-control" id="input_4" col="40" rows="10" ></textarea>
              </div>
              <div class="button-group col-md-12 my-2">
                <ul class="row">
                  <li class="col-md-6"><input type="submit" name="reset" class="btn btn-default btn-block" value="リセット"></li>
                  <li class="col-md-6"><input type="submit" name="reset" class="btn btn-primary btn-block" value="分析開始"></li>
                </ul>
              </div>
            </div>

          </form>
        </section>
    </div>
    <!-- ajaxで画面遷移無しで、選択したレギュレーションの内容を出力する。 -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <!-- Bootstrap 4 requires Popper.js -->
    <script src="https://unpkg.com/popper.js@1.14.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="http://vjs.zencdn.net/6.6.3/video.js"></script>
    <script src="dist/scripts/flat-ui.js"></script>
    <script src="../js/script.js"></script>
  </body>
</html>
