<?php
require_once('escape.php');
require_once('Mecab.php');

class FormController {

  private $text = "";
  private $text_length = "";
  private $lines = "";
  private $paragraphs = "";

  public function __construct($request) {
      $this->text        = $request;
      $this->text_length = strlen($request);
      $this->lines       = explode("。", $request);
      $this->paragraphs  = explode("\r\n", $request);
  }



  public function getText() {
    return $this->text;
  }

  public function getTextLen() {
    return $this->text_length;
  }

  public function getLines() {
    return $this->lines;
  }

  public function getParagraphs() {
    return $this->paragraphs;
  }

  public function getElements() {
    return $this->elements;
  }
}


//https://conocode.com/howto/mecab-php/
//https://qiita.com/kojirock5260/items/1787d70b9cfca3e43d12
//http://tech-blog.rakus.co.jp/entry/2018/03/27/124418
?>
