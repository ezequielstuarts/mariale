<?php
$array = (json_decode(file_get_contents("data/data.json"), true)["personal"]);;
// var_dump($array);
?>

<div class="card-columns animated fadeIn">  
  <?php foreach ($array as $dato => $img) { ?>
  <div class="card">
  	<div class="info-hover">
        <div class="info-trabajo animated fadeInRight delay-1s">
            <p><?php echo $img["titulo"]; ?></p>
            <p class="cliente"><?php echo $img["cliente"]; ?></p>
            
        </div>
    </div>
    <!-- <a href="<?php echo $img["url"]; ?>"> -->
      <img src="<?php echo $img["url"]; ?>" class="card-img-top">
    </a>
  </div>
  <?php  } ; ?>
</div>

