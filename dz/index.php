<?php
include "bootsrap.php";
include "catalog/index.php";
$elemnt = Layout::getInstance();
$elemnt->styles('main.js');
$elemnt->styles('bootstrap.css');
$elemnt->static_scripts();
$elemnt->static_styles();
$elemnt->fonts('Roboto');
?>
<h1>Магазин</h1>
<div id="grid">
  <?php
    foreach ($movies as $value) {
      ?><div class="">
        <div><? echo $value['title']?></div>
        <div>
          <div class="">
            <? echo $value['director']?>
          </div>
          <div class="">
            <? echo $value['year']?>
          </div>
        </div>
      </div>
      <?php
    }
   ?>
</div>
