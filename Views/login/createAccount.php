<?php
    # Declaration and incrementing of variables 
    $form = (isset($RenderData) ? $RenderData->getForms() : "Forms En Dev");
?>
<div class="d-flex justify-content-center" > </div>
<!-- Add form -->
<?= $form; ?>
<br>
	