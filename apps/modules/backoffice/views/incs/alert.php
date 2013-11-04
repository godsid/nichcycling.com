<?php
if(isset($alerts)){
	foreach($alerts as $alert){
?>
<div class="alert alert-<?php echo $alert['type']?>"><!-- alert-block, alert-error, alert-success, alert-info-->
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Warning!</strong> <?php echo $alert['message']?>
</div>
<?php
	}
}
?>