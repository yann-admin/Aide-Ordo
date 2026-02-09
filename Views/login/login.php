<?php
	/* ▂ ▅ ▆ █ Information █ ▆ ▅ ▂ */
if(isset($HeadData)){
  $dataHead = $HeadData->read(['author_','keywords_','description_']);
  $author = (isset($dataHead['author_']) ? $dataHead['author_'] : "Author En Dev");
  $keywords = (isset($dataHead['keywords_']) ? $dataHead['keywords_'] : "Keywords En Dev");
  $description = (isset($dataHead['description_']) ? $dataHead['description_'] : "Description En Dev");
};

if(isset($FooterData)){
  $dataFooter = $FooterData->read(['textFooter_','otherFooter_']);
  $footerText = (isset($dataFooter['textFooter_']) ? $dataFooter['textFooter_'] : "FooterText En Dev");
  $footerOther = (isset($dataFooter['otherFooter_']) ? $dataFooter['otherFooter_'] : "FooterOther En Dev");
};

if(isset($RenderData)){
  $dataRender = $RenderData->read(['forms_','other_','scriptJs_','sheetCss_']);
  $form = (isset($dataRender['forms_']) ? $dataRender['forms_'] : "Forms En Dev");
  $scriptJs = (isset($dataRender['scriptJs_']) ? $dataRender['scriptJs_'] : "ScriptJs En Dev");
  $sheetCss = (isset($dataRender['sheetCss_']) ? $dataRender['sheetCss_'] : "SheetCss En Dev");
  $data = (isset($dataRender['data_']) ? $dataRender['data_'] : "Data En Dev");
  $other = (isset($dataRender['other_']) ? $dataRender['other_'] : "");
};

/* ▂ ▅ ▆ █ HTML █ ▆ ▅ ▂ */
?>

<div class=" d-flex justify-content-center " > 
  <div id="userMessage" class="col-10 col-sm-5 col-lg-3 mt-3 mb-3"> <?= nl2br($other) ?> </div>
</div>   
    
<!-- Add form -->
<?= $form; ?>      


	