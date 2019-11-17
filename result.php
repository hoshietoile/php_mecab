<?php
require_once('app/Mecab.php');
require_once('app/FormController.php');

$control = new FormController($_POST['text']);

$options = $control->options;

$text = $control->getText();
$text_length = $control->getTextLen();
$lines = $control->getLines();
$paragraphs = $control->getParagraphs();
$elements = $control->getElements();

// keyword trying---

$keywords = preg_split("/[\s,、]+/", $_POST['keyword']);

$kw_positions = [];

foreach ($keywords as $key=>$keyword) {
  global $kw_positions, $text;
  $offset = 0;
  $result = array();
  while (true) {
    $pos = mb_strpos($text, $keyword, $offset);
    if ($pos === false) {
      break;
    } else {
      $result[] = $pos;
      $offset = $pos + 1;
    }
  }
  $kw_positions[] = [$keyword => $result];
}
// var_dump($kw_positions);
// var_dump($_POST['keyword']);
// var_dump($keywords);

// keyword trying---

$elements = [];
$options = array('-d', '/usr/local/lib/mecab/dic/mecab-ipadic-neologd');
foreach ($lines as $key=>$value) {
  $mecab = new \MeCab\Tagger($options);
  $nodes = $mecab->parseToNode($value);

  foreach ($nodes as $key=>$n) {
    $surface = $n->getSurface();
    $feature = $n->getFeature();
    $element = ['surface' => $surface, 'features' => explode(",", $feature)];

    $elements[] = $element;
  }
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
  <body id="result">

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
          <div class="container">
            <ul class="nav nav-tabs">
              <li class="nav-item"><a href="#tab_1" class="nav-link active" data-toggle="tab">tab_1</a></li>
              <li class="nav-item"><a href="#tab_2" class="nav-link" data-toggle="tab">tab_1</a></li>
              <li class="nav-item"><a href="#tab_3" class="nav-link" data-toggle="tab">tab_1</a></li>
            </ul>

            <div class="tab-content py-4">

              <div id="tab_1" class="tab-pane active">
                <div class="container" id="result_1">
                  <p class="palette palette-sun-flower text-white text-center">チェック対象文字列(<?php echo "{$text_length}文字" ?>)</p>
                  <div class="box">
                    <?php echo $text; ?>
                  </div>
                  <section class="box mt-4">
                    <table>
                      <thead>
                        <tr>
                          <th class="col_1">行数</th>
                          <th class="col_2">原文</th>
                          <th class="col_3">センテンス数</th>
                          <th class="col_4">文字数</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($paragraphs as $key=>$value): ?>
                          <tr>
                            <td class="col_1">
                              <?php echo $key + 1 ?>
                            </td>
                            <td class="col_2 text-left">
                              <?php echo $value ?>
                            </td>
                            <td class="col_3">
                              <?php echo strlen($value) ?>
                            </td>
                            <td class="col_4">
                              <?php echo strlen($value) ?>
                            </td>
                          </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                  </section>
                </div>
              </div>

              <div id="tab_2" class="tab-pane">
                <div class="box">
                  <?php foreach ($elements as $key=>$value): ?>
                    <?php echo $value['surface'] ?>
                  <?php endforeach ?>
                </div>
              </div>

              <div id="tab_3" class="tab-pane">
                <p class="palette palette-sun-flower text-white text-center">検索文字列形態素分析結果</p>
                <div class="container" id="result_3">
                  <table>
                    <thead>
                      <tr>
                        <th>データ</th>
                        <th>品詞</th>
                        <th>分類</th>
                        <th>？</th>
                        <th>活用</th>
                        <th>時制？</th>
                        <th>基本形</th>
                        <th>読み</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($elements as $key=>$value) : ?>
                        <tr>
                          <td><?php echo $value['surface']; ?></td>
                          <td><?php echo $value['features'][0]; ?></td>
                          <td><?php echo $value['features'][1]; ?></td>
                          <td><?php echo $value['features'][2]; ?></td>
                          <td><?php echo $value['features'][4]; ?></td>
                          <td><?php echo $value['features'][5]; ?></td>
                          <td><?php echo $value['features'][6]; ?></td>
                          <td><?php echo $value['features'][7]; ?></td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


        </section>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <!-- Bootstrap 4 requires Popper.js -->
    <script src="https://unpkg.com/popper.js@1.14.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="http://vjs.zencdn.net/6.6.3/video.js"></script>
    <script src="dist/scripts/flat-ui.js"></script>
    <script src="../js/script.js"></script>
  </body>
</html>
