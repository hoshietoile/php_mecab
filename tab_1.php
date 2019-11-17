<div id="tab_1" class="tab-pane active">
  <div class="container" id="result_1">
    <p>チェック対象文字列(<?php echo "{$text_length}文字" ?>)</p>
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
