<?php
require_once('escape.php');
require_once('Mecab.php');

class FormController extends Mecab {
  public function process($request) {
    $mecab = new \MeCab\Tagger(Mecab::$options);
    $nodes = $mecab->parseToNode($text);

    foreach ($nodes as $n) {
      echo $n->getSurface() . "<br>";
      echo $n->getFeature() . "<br>";
    }
  }

  // public function submit($request) {
  //
  // }
}


//https://conocode.com/howto/mecab-php/
//https://qiita.com/kojirock5260/items/1787d70b9cfca3e43d12
//http://tech-blog.rakus.co.jp/entry/2018/03/27/124418
?>
