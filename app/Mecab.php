<?php
require_once('escape.php');



// function setElements($data) {
//   // global $options;
//   // var_dump($data);
//   // $array_data = explode("。", $data);
//     $array = [];
//
//   // foreach ($array_data as $key=>$value) {
//     $mecab = new \MeCab\Tagger($options);
//     $nodes = $mecab->parseToNode($data);
//     // $nodes = explode(",", $node);
//     var_dump($nodes);
//     foreach ($nodes as $key=>$n) {
//       $surface = $n->getSurface();
//       $feature = $n->getFeature();
//       $element = ['surface' => $surface, 'features' => explode(",", $feature)];
//
//       $array[] = $element;
//       var_dump($array);
//       return $array;
//     }
//   }
// }

// class Mecab {
//
//   private $text = "";
//
//   public function __construct($text) {
//     $this->text = e($_POST);
//   }
// }

//
// $text = "企業経営拡大の好機に。子育てのための巣です。";
// $options = array('-d', '/usr/local/lib/mecab/dic/mecab-ipadic-neologd');
//
// $mecab = new \MeCab\Tagger($options);
// $nodes = $mecab->parseToNode($text);
//
// foreach ($nodes as $n) {
//   echo $n->getSurface() . "<br>";
//   echo $n->getFeature() . "<br>";
// }

?>
