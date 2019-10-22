<?php
$array = (json_decode(file_get_contents("data/data.json"), true)["personal"]);;
// var_dump($array);
?>

<div class="card-columns">  
  <?php foreach ($array as $dato => $img) { ?>
  <div class="card">
  	<div class="info-hover">
        <div class="info-trabajo">
            <p><?php echo $img["titulo"]; ?></p>
            <p class="cliente"><?php echo $img["cliente"]; ?></p>
            <a href=""></a>
        </div>
    </div>
    <img src="<?php echo $img["url"]; ?>" class="card-img-top" alt="">
  </div>
  <?php  } ; ?>
</div>