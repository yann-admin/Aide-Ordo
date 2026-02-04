<?php
	/* ▂ ▅ ▆ █ Information █ ▆ ▅ ▂ */
		/* Fichier controller database: api_chichoune - table: loginaccount via constructor_Array_DataBase_SQL.php VERSION: 3.0.0*/ 
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅ ▆ █ NameSpace █ ▆ ▅ ▂ */
		namespace App\Controllers;
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅ ▆ █ Inclusion █ ▆ ▅ ▂ */
		use App\Core\Form\Form;
		use App\Core\Form\Token;
		use App\Entities\Loginaccount;
		use App\Models\LoginaccountModel;
		use App\Core\RenderData\RenderData;
		use App\Core\RenderData\ResponseJson;
		use App\Core\RenderData\CreateDivInformation;
		use App\Core\Form\SecurityForm;		
		# Class other
        use App\Core\Other\Session;
        use App\Core\Other\HeadData;
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅ ▆ █ Class █ ▆ ▅ ▂ */
		class LoginaccountController extends Controller{
			/* ▂ ▅ ▆ █ Grafcet █ ▆ ▅ ▂ */
				/*
					# RewriteRule ^login$ App/Public/index.php?controller=home&action=index [L]



					# function constructLoginaccountForm( )
					# │  ╚ Step 1.0 We declare variables
					# │  ╚ Step 1.1 We build the form





				*/
			/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */

			/* ▂ ▅ ▆ █    Attributs    █ ▆ ▅ ▂ */
			/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

			/* ▂ ▅ ▆ █    Methodes    █ ▆ ▅ ▂ *
				/* ▂ ▅  Writing Setters via toolbox  ▅ ▂ */
					# $objLoginaccount = new LoginaccountController();
					# $objLoginaccountModel = new LoginaccountModel();
					/*Comment:  */
					# $loginaccount -> setIdLoginAccount($_POST['IdLoginAccount']);
					/*Comment:  */
					# $loginaccount -> setIdentifiant($_POST['Identifiant']);
					/*Comment:  */
					# $loginaccount -> setPassword($_POST['Password']);
					/*Comment:  */
					# $loginaccount -> setIdUserAccount($_POST['IdUserAccount']);
				/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */
				/* ▂ ▅ ▆ █ constructor form LoginaccountForm( ) █ ▆ ▅ ▂ */
					public static function constructLoginaccountForm( ){
						/* ▂ ▅ ▆ █ Information █ ▆ ▅ ▂ */
							/* Files form : loginaccount via constructor_Forms.php VERSION: 3.0.0*/ 
						/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 
						/* ▂   Variables   ▂ */
						# Declaration of variables
							$action = 'App/Public/index.php?controller=user&action=userlogin'; 
							$method = 'POST';
							$idForm = 'formLogin';
							$textBtn1 = 'Connection';
							$textBtn2 = 'Reset';
							$identifiantValue = "YannocH17";
							$passwordValue = "4550191Ym@";
						/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ */
						/* ▂ ▅ ▆ █ Formulaire pour la table: - loginaccount - █ ▆ ▅ ▂ */
							/* ▂ ▅ ▆ █ Form: - loginaccountForm - █ ▆ ▅ ▂ */
								# # A Form is instantiated 'onsubmit="return confirm()"'=>''
								$form = new Form();
								# We build the form
								$form -> addDivContainerFormOpen( [ 'name'=>'divForm-LoginaccountForm', 'id'=>'divForm-LoginaccountForm', 'class'=>'col-10 col-sm-5 col-lg-3 mb-3 py-3 text-center container-form-login' ] );
								/* @startForm( 'comment', [list of attributs] ) */
								$form -> startForm( 'startForm', [ 'name'=>'LoginaccountForm', 'id'=>$idForm, 'action'=>$action, 'method'=>$method, 'enctype'=>'multipart/form-data', 'class'=>'justify-content-center row needs-validation', 'novalidate'=>'' ] );

								/* ▂ ▅ ▆ █  Header form  █ ▆ ▅ ▂ */
									/* @addDivOpen( 'comment', [ list of attributs ] ) */
									$form -> addDivOpen( '',  ['class'=>''] );
										/* @addImageForm('comment', 'balise', 'text title, [list of attributs]) */
										$form -> addImageForm( '', '', [ 'name'=>'', 'id'=>'', 'src'=>'App/Images/LogoChichoune.png','class'=>'imageForm' ] );
									/* @addTitleForm('comment', 'balise', 'text title, [list of attributs]) */
									$form -> addTitleForm( 'Title Form', 'h4', '- Connection/Créer un compte -', [ 'name'=>'', 'id'=>'', 'class'=>'titleForm fst-italic my-4' ] );
									/* @addDivClose( 'comment' ) */
									$form -> addDivClose( '' );
								/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂*/

								/* ▂ ▅ ▆ █  Div information user  █ ▆ ▅ ▂ */
									/* @addDivOpen( 'comment', [ list of attributs ] ) */
									$form -> addDivOpen( '',  ['id'=>'userMessage', 'class'=>''] );

									/* @addDivClose( 'comment' ) */
									$form -> addDivClose();
								/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ */ 

								/* ▂ ▅ ▆ █  Input group : - identifiant -  █ ▆ ▅ ▂ */
									/* @addDivOpen( 'comment', [ list of attributs ] ) */
									$form -> addDivOpen( '',  ['class'=>'d-flex flex-nowrap gap-2 align-items-center col-10 col-sm-10 col-lg-10 mb-2'] );
										/* @addDivInputGroupFormFloatingOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivInputGroupFormFloatingOpen( '',  ['class'=>'input-group align-content-center has-validation'] );
											/*-------- Picto input ----------- */
											/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
											$form -> addSpan( '', '<i class="fa-solid fa-user"></i>', [ 'id'=>'pictoInput-identifiant', 'href'=>'#', 'class'=>'input-group-text ' ]);
											/*---------------------------- */
											/*-------- input ----------- */
											/* @addDivOpen( 'comment', [ list of attributs ] ) */
											$form -> addDivOpen( '',  ['class'=>'form-floating is-invalid'] );
												/* @addInput( 'comment', [ list of attributs ] ) */
												$form -> addInput('', [ 'type'=>'text', 'name'=>'identifiant', 'id'=>'identifiant', 'placeholder'=>'', 'minLength'=>'6', 'maxLength'=>'10', 'required'=>'required', 'pattern'=>"^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{6,10}$", 'regex'=>'text-1', 'value'=>$identifiantValue, 'autofocus'=>'', 'class'=>'form-control ']);
												/* @addLabel( 'comment', 'text', [ list of attributs ] ) */
												$form -> addLabel( '', 'Votre Identifiant', [ 'id'=>'inputLabel-identifiant', 'for'=>'identifiant', 'class'=>'' ]);
											/* @addDivClose( 'comment' ) */
											$form -> addDivClose( '' );
											/*---------------------------- */
											/*-------- FeedBack ----------- */
											/* @addDivOpen( 'comment', [ list of attributs ] ) */
											$form -> addDivOpen( '',  ['id'=>'feedback-identifiant', 'class'=>'invalid-feedback'] );
											/* @addDivClose( 'comment' ) */
											$form -> addDivClose( '' );
											/*---------------------------- */
										/* @addDivInputGroupFormFloatingClose( 'comment' ) */
										$form -> addDivInputGroupFormFloatingClose( '' );
										/*-------- Tooltip ----------- */
										$textTooltip ="";
										$textTooltip ='<p class="text-center lh-1 fw-bold fst-italic text-decoration-underline"> - Doit Contenir - </p>';
										$textTooltip .='<p class="text-start mb-1 text-warning">-Nombre de caractères: mini 6, maxi 10 </p>';
										$textTooltip .='<p class="text-center mb-0 "> avec </p>';
										$textTooltip .='<p class="text-start mb-0 ps-2 text-warning"> -Mini une minuscule </p> ';
										$textTooltip .='<p class="text-start mb-0 ps-2 text-warning"> -Mini une majuscule </p> ';
										$textTooltip .='<p class="text-start mb-0 ps-2 text-warning"> -Mini un chiffre </p> ';
										// $textTooltip .='<p class="text-start mb-1 ps-2 text-warning"> -Mini un caractère / @ $ ! % * ? & # </p>';
										$textTooltip .='<p class="text-center mb-0 ps-2 "> Modèle: Chichoune69 </p>';
										/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
										$form -> addSpan( '', '<i class="fa-solid fa-circle-info"></i>', [ 'id'=>'addon-identifiant', 'href'=>'#', 'class'=>'pictoInfo ', 'data-bs-toggle'=>'tooltip', 'data-bs-placement'=>'left', 'data-bs-html'=>'true', 'data-bs-custom-class'=>'custom-tooltip', 'data-bs-title'=>$textTooltip ]);
										/*---------------------------- */
									/* @addDivClose( 'comment' ) */
									$form -> addDivClose( '' );
								/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂*/

								/* ▂ ▅ ▆ █  Input group : - password -  █ ▆ ▅ ▂ */
									/* @addDivOpen( 'comment', [ list of attributs ] ) */
									$form -> addDivOpen( '',  ['class'=>'d-flex flex-nowrap gap-2 align-items-center col-10 col-sm-10 col-lg-10 mb-2'] );
										/* @addDivInputGroupFormFloatingOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivInputGroupFormFloatingOpen( '',  ['class'=>'input-group align-content-center has-validation'] );
											/*-------- Picto input ----------- */
											/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
											$form -> addSpan( '', '<i class="fa-solid fa-lock"></i>', [ 'id'=>'pictoInput-password', 'href'=>'#', 'class'=>'input-group-text ' ]);
											/*---------------------------- */
											/*-------- input ----------- */
											/* @addDivOpen( 'comment', [ list of attributs ] ) */
											$form -> addDivOpen( '',  ['class'=>'form-floating is-invalid'] );
												/* @addInput( 'comment', [ list of attributs ] ) */
												$form -> addInput('', [ 'type'=>'text', 'name'=>'password', 'id'=>'password', 'placeholder'=>'', 'minLength'=>'10', 'maxLength'=>'10', 'required'=>'required', 'pattern'=>"^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\/@$!%*?&#])[A-Za-z\d\/@$!%*?&#]{10,11}$", 'regex'=>'password', 'value'=>$passwordValue, 'autofocus'=>'', 'class'=>'form-control ']);
												/* @addLabel( 'comment', 'text', [ list of attributs ] ) */
												$form -> addLabel( '', '', [ 'id'=>'inputLabel-password', 'for'=>'password', 'class'=>'' ]);
											/* @addDivClose( 'comment' ) */
											$form -> addDivClose( '' );
											/*---------------------------- */
											/*-------- FeedBack ----------- */
											/* @addDivOpen( 'comment', [ list of attributs ] ) */
											$form -> addDivOpen( '',  ['id'=>'feedback-password', 'class'=>'invalid-feedback'] );
											/* @addDivClose( 'comment' ) */
											$form -> addDivClose( '' );
											/*---------------------------- */
										/* @addDivInputGroupFormFloatingClose( 'comment' ) */
										$form -> addDivInputGroupFormFloatingClose( '' );
										/*-------- Tooltip ----------- */
                                        $textTooltip ="";
                                        $textTooltip ='<p class="text-center lh-1 fw-bold fst-italic text-decoration-underline"> - Doit Contenir - </p>';
                                        $textTooltip .='<p class="text-start mb-1 text-warning">-Nombre de caractères: mini 10, maxi 10 </p>';
                                        $textTooltip .='<p class="text-center mb-0 "> avec </p>';
                                        $textTooltip .='<p class="text-start mb-0 ps-2 text-warning"> -Mini une minuscule </p> ';
                                        $textTooltip .='<p class="text-start mb-0 ps-2 text-warning"> -Mini une majuscule </p> ';
                                        $textTooltip .='<p class="text-start mb-0 ps-2 text-warning"> -Mini un chiffre </p> ';
                                        $textTooltip .='<p class="text-start mb-1 ps-2 text-warning"> -Mini un caractère / @ $ ! % * ? & # </p>';
                                        $textTooltip .='<p class="text-center mb-0 ps-2 "> Modèle: 12345678Mt@ </p>';
										/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
										$form -> addSpan( '', '<i class="fa-solid fa-circle-info"></i>', [ 'id'=>'addon-password', 'href'=>'#', 'class'=>'pictoInfo ', 'data-bs-toggle'=>'tooltip', 'data-bs-placement'=>'left', 'data-bs-html'=>'true', 'data-bs-custom-class'=>'custom-tooltip', 'data-bs-title'=>$textTooltip ]);
										/*---------------------------- */
									/* @addDivClose( 'comment' ) */
									$form -> addDivClose( '' );
								/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂*/

								/* ▂ ▅ ▆ █  checkbox-Consent :   █ ▆ ▅ ▂ */
									/* @addDivOpen( 'comment', [ list of attributs ] ) */
									$form -> addDivOpen( '',  ['class'=>'d-flex flex-nowrap gap-2 align-items-center col-10 col-sm-10 col-lg-10 mb-1'] );
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['class'=>'form-check'] );
													$form -> addCheckBox('', [ 'type'=>'checkbox', 'name'=>'check-RememberMe', 'id'=>'check-RememberMe', 'class'=>'form-check-input']);
													/* @addLabel( 'comment', 'text', [ list of attributs ] ) */
													$form -> addLabel( '', 'Rester Connecté', ['for'=>'check-RememberMe', 'class'=>'form-check-label fst-italic' ]);
										/* @addDivClose( 'comment' ) */
										$form -> addDivClose();  
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['id'=>'feedback-check-RememberMe', 'class'=>'invalid-feedback'] );
										/* @addDivClose( 'comment' ) */
										$form -> addDivClose();
									/* @addDivClose( 'comment' ) */
									$form -> addDivClose();
								/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ */          

								/* ▂ ▅ ▆ █  Ancre :   █ ▆ ▅ ▂ */
									/* @addDivOpen( 'comment', [ list of attributs ] ) */
									$form -> addDivOpen( '',  ['class'=>'d-flex flex-nowrap gap-2 align-items-center col-10 col-sm-10 col-lg-10 mb-4'] );
										/* @addAncre( 'comment', 'text de l'ancre',  [ list of attributs ] ) */
										$form -> addAncre('', 'Créer un compte', ['href'=>'Créer-compte', 'class'=>'link-secondary  link-offset-2 link-offset-5-hover link-opacity-80 link-opacity-100-hover link-underline-danger link-underline-opacity-0 link-underline-opacity-100-hover fst-italic'] ); 
									/* @addDivClose( 'comment' ) */
									$form -> addDivClose();
								/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ */ 

								/* ▂ ▅ ▆ █  Ancre :   █ ▆ ▅ ▂ */
									/* @addDivOpen( 'comment', [ list of attributs ] ) */
									$form -> addDivOpen( '',  ['class'=>'d-flex flex-nowrap gap-2 align-items-center col-10 col-sm-10 col-lg-10 mb-4'] );
										/* @addAncre( 'comment', 'text de l'ancre',  [ list of attributs ] ) */
										$form -> addAncre('', 'Politique de confidantialité', ['href'=>'#', 'class'=>'link-secondary  link-offset-2 link-offset-5-hover link-opacity-50 link-opacity-100-hover link-underline-danger link-underline-opacity-0 link-underline-opacity-100-hover fst-italic'] ); 
									/* @addDivClose( 'comment' ) */
									$form -> addDivClose();
								/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ */  


								/* ▂ ▅ ▆ █  Anti robot  █ ▆ ▅ ▂ */
								/* @addAntiRobot( 'value' ) */
								$form -> addAntiRobot( '' );
								/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ */

								/* ▂ ▅ ▆ █  Token  █ ▆ ▅ ▂ */
								$form -> addToken();
								# ├ Appel function Token::createdToken()
								/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ */

								/* ▂ ▅ ▆ █  Button  █ ▆ ▅ ▂ */
								/* @addDivOpen( 'comment', [ list of attributs ] ) */
								$form -> addDivOpen( '',  ['class'=>'container'] );
									/* @addDivOpen( 'comment', [ list of attributs ] ) */
									$form -> addDivOpen( '',  ['class'=>'col d-flex justify-content-evenly'] );
										/* @addBtn( 'comment', 'textBtn',[ list of attributs ] ) */
										$form -> addBtn( '', $textBtn1, [ 'type'=>'submit', 'name'=>'true', 'id'=>'true','value'=>'true', 'class'=>'btn btn-primary' ] );
										/* @addBtn( 'comment', 'textBtn',[ list of attributs ] ) */
										$form -> addBtn( '', $textBtn2, [ 'type'=>'button', 'name'=>'false', 'id'=>'false', 'value'=>'false', 'class'=>'btn btn-danger' ] );
									/* @addDivClose( 'comment' ) */
									$form -> addDivClose();
								/* @addDivClose( 'comment' ) */
								$form -> addDivClose();
								/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ */

								/* @endForm( 'comment' ) */
								$form -> endForm( 'endForm' );

							$form -> addDivContainerFormClose();
							
							/* ▂   getFormElements   ▂ */
							$form = $form -> getFormElements();
							return $form;
							/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ */



					}
				/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */


				/* ▂ ▅ ▆ █ add █ ▆ ▅ ▂ */
					public function addLoginaccount(){
		
		
					}
				/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

				/* ▂ ▅ ▆ █ update █ ▆ ▅ ▂ */
					public function updateLoginaccount($id){
		
					}
				/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

				/* ▂ ▅ ▆ █ show █ ▆ ▅ ▂ */
					public function showLoginaccount($id){
		
					}
				/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

				/* ▂ ▅ ▆ █ delete █ ▆ ▅ ▂ */
					public function deleteLoginaccount($id){
		
					}
				/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 



			/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */
	};
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */
?>