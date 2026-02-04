<?php
	/* ▂ ▅ ▆ █ Information █ ▆ ▅ ▂ */

?>
<!-- HTML -->
 <div class="d-flex justify-content-center" > 
<div id="userMessage"> </div>
    <?= (isset($rrRenderData) ? $RenderData->getMessagePage() : "" ); ?>
    <h1> bonjour vous êtes sur la page d'accueil </h1>
    <p>Contenu ici !</p>
</div>    
