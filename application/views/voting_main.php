<?php 
//$committe = array("commitee1","committe2","committe3");
foreach ($commitees as $value){

?>
<div class="panel panel-danger">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo $value['COMMITEE_NAME'];?></h3>
  </div>
  <div class="panel-body">
    <?php 
    //var_dump($candidatesArr);
    foreach ($candidatesArr as $key => $val) {
    ?>
      <div class="well col-sm-4">
          <a href="index.php?/home/vote?id_candidate=<?php  echo $val['ID_CANDIDATE']."&commitee=".$val['COMMITEE'];?>"  title='Vote'> <img src="<?php echo $val["PHOTO"];?>" alt="<?php echo 'title';?>" class="img-rounded">
              <h4><?php echo $val["NAMES"];?> <div class = "well warning"><?php echo $val["COUNTRY"];?></div></h4>
          </a>        
      </div>
    <?php
        }
    ?>

  </div>
</div>
<?php

}
?>
