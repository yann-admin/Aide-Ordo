<?php
	/* ▂ ▅ ▆ █ Information █ ▆ ▅ ▂ */
		/* Fichier controller database: api_chichoune - table: useraccount via constructor_Array_DataBase_SQL.php VERSION: 3.0.0*/ 
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅ ▆ █ NameSpace █ ▆ ▅ ▂ */
		namespace App\Controllers\User;
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅ ▆ █ Inclusion █ ▆ ▅ ▂ */
		# Class Form
		use App\Core\Form\Form;
		use App\Core\Form\Regex;
		use App\Core\Form\Token;
		use App\Core\Form\SecurityForm;

		# Class Entity & Models UserAccount
		use App\Entities\User\UserAccount;
		use App\Models\User\UserAccountModel;
		use App\Entities\User\LoginAccount;
		use App\Models\User\LoginAccountModel;
		#  Class RenderData & ResponseJson & CreateDivInformation
		use App\Core\RenderData\RenderData;
		use App\Core\RenderData\ResponseJson;
		use App\Core\RenderData\CreateDivInformation;
		
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅  Writing Setters via toolbox  ▅ ▂ */
		# $objUserAccount = new UserAccountController();
		# $objUserAccountModel = new UserAccountModel();
		/*Comment:  */
		# $userAccount -> setIdUserAccount($_POST['IdUserAccount']);
		/*Comment:  */
		# $userAccount -> setUserName($_POST['UserName']);
		/*Comment:  */
		# $userAccount -> setUserFirstName($_POST['UserFirstName']);
		/*Comment:  */
		# $userAccount -> setUserEmail($_POST['UserEmail']);
		/*Comment:  */
		# $userAccount -> setUserRecoveryCode($_POST['UserRecoveryCode']);
		/*Comment:  */
		# $userAccount -> setUserAccess($_POST['UserAccess']);
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */

	/* ▂ ▅ ▆ █ Class █ ▆ ▅ ▂ */
		class UserAccountController {
			/* ▂ ▅ ▆ █    Attributs    █ ▆ ▅ ▂ */
			/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

			/* ▂ ▅ ▆ █    Methodes    █ ▆ ▅ ▂ */

			/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

			/* ▂ ▅ ▆ █ constructFormAddAccount( ) █ ▆ ▅ ▂ */
				# @ param string $mode : 'create' or 'update' to adapt the form to the context
				public static function constructFormAddAccount( string $mode ){
					/* ▂ ▅ ▆ █ Information █ ▆ ▅ ▂ */
						/* Files form : useraccount via constructor_Forms.php VERSION: 3.0.0*/ 
					/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

					/* ▂ ▅ ▆ █ Formulaire pour la table: - useraccount - █ ▆ ▅ ▂ */
						/* ▂   Regex   ▂ */
							$objRegex = new Regex();
							$regex = $objRegex -> readRegex() -> getReadRegex();
						/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ */	
						/* ▂   Tooltip   ▂ */
							$tooltip = $objRegex -> readTooltip() -> getReadTooltip();
						/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ */
						/* ▂   Pattern   ▂ */
							$pattern = $objRegex -> readPattern() -> getReadPattern();
						/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ */
					/* ▂   Variables   ▂ */
					# Declaration of variables
						$action = 'App/Public/index.php?controller=home&action=addAccount';
						$method = 'POST';
						$idForm = 'formAddAccount';
						$textBtn1 = 'Créer le compte';
						$textBtn2 = 'Effacer';
						$idUserAccountValue = "";
						$userNameValue = "zzzzz";
						$userFirstNameValue = "zzzzzzzzzzz";
						$userEmailValue = "yann17100@gmail.com";
						$userRecoveryCodeValue = "zzzzzzzzzzzzzzzz";
						$userAccessValue = "";
						$idLoginAccountValue = "";
						$identifiantValue = "Yannoch17";
						$passwordValue = "4550191Ym@";
						$passwordVerifyValue = "4550191Ym@";
						$idUserAccountValue = "";
					/* ----------------------------*/
					# Declaration of array input
						$arrayInputuserName=['minLength'=>'2', 'maxLength'=>'50', 'required'=>'required', 'tooltip'=>$tooltip['text'], 'pattern'=>$pattern['text'], 'regex'=>$regex['text'], 'label'=>'Votre nom', 'value'=>$userNameValue ];
						$arrayInputuserFirstName=['minLength'=>'2', 'maxLength'=>'50', 'required'=>'required', 'tooltip'=>$tooltip['text'], 'pattern'=>$pattern['text'], 'regex'=>$regex['text'], 'label'=>'Votre Prénom', 'value'=>$userFirstNameValue ];
						$arrayInputuserEmail=['minLength'=>'2', 'maxLength'=>'50', 'required'=>'required', 'tooltip'=>$tooltip['email'], 'pattern'=>$pattern['email'], 'regex'=>$regex['email'], 'label'=>'Votre adresse email', 'value'=>$userEmailValue ];
						$arrayInputuserRecoveryCode=['minLength'=>'1', 'maxLength'=>'50', 'required'=>'required', 'tooltip'=>$tooltip['text'], 'pattern'=>$pattern['text'], 'regex'=>$regex['text'], 'label'=>'Votre code de récupération', 'value'=>$userRecoveryCodeValue ];
						$arrayInputidentifiant=['minLength'=>'8', 'maxLength'=>'10', 'required'=>'required', 'tooltip'=>$tooltip['identifiant'], 'pattern'=>$pattern['identifiant'], 'regex'=>$regex['identifiant'], 'label'=>'Votre identifiant', 'value'=>$identifiantValue ];
						$arrayInputpassword=['minLength'=>'10', 'maxLength'=>'11', 'required'=>'required', 'tooltip'=>$tooltip['password'], 'pattern'=>$pattern['password'], 'regex'=>$regex['password'], 'label'=>'Votre mot de passe', 'value'=>$passwordValue ];
						$arrayInputpasswordVerify=['minLength'=>'10', 'maxLength'=>'11', 'required'=>'required', 'tooltip'=>$tooltip['password'], 'pattern'=>$pattern['password'], 'regex'=>$regex['password'], 'label'=>'Vérification mot de passe', 'value'=>$passwordVerifyValue ];

					/* ---------------------------- */
							# # A Form is instantiated 'onsubmit="return confirm()"'=>''
							$form = new Form();
							# We build the form
							$form -> addDivContainerFormOpen( [ 'name'=>'divForm-LoginaccountForm', 'id'=>'divForm-LoginaccountForm', 'class'=>'col-10 col-sm-5 col-lg-3 mb-3 py-3 text-center container-form-login' ] );
							/* @startForm( 'comment', [list of attributs] ) */
							$form -> startForm( 'startForm', [ 'name'=>'LoginaccountForm', 'id'=>$idForm, 'action'=>$action, 'method'=>$method, 'enctype'=>'multipart/form-data', 'class'=>'justify-content-center row validate', ] );

							/* ▂ ▅ ▆ █  Header form  █ ▆ ▅ ▂ */
								/* @addDivOpen( 'comment', [ list of attributs ] ) */
								$form -> addDivOpen( '',  ['class'=>''] );
									/* @addImageForm('comment', 'balise', 'text title, [list of attributs]) */
									$form -> addImageForm( '', '', [ 'name'=>'', 'id'=>'', 'src'=>'App/Images/LogoChichoune.png','class'=>'imageForm' ] );
								/* @addTitleForm('comment', 'balise', 'text title, [list of attributs]) */
								$form -> addTitleForm( 'Title Form', 'h4', '- Créer un compte -', [ 'name'=>'', 'id'=>'', 'class'=>'titleForm fst-italic my-4' ] );
								/* @addDivClose( 'comment' ) */
								$form -> addDivClose( '' );
							/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂*/

							/* ▂ ▅ ▆ █  Div information user  █ ▆ ▅ ▂ */
								/* @addDivOpen( 'comment', [ list of attributs ] ) */
								$form -> addDivOpen( '',  ['id'=>'userMessage', 'class'=>''] );

								/* @addDivClose( 'comment' ) */
								$form -> addDivClose( '' );
							/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ */ 

							/* ▂ ▅ ▆ █  Input group : - userName -  █ ▆ ▅ ▂ */
								/* @addDivOpen( 'comment', [ list of attributs ] ) */
								$form -> addDivOpen( '',  ['class'=>'d-flex flex-nowrap gap-2 align-items-center col-10 col-sm-10 col-lg-10 mb-2'] );
									/* @addDivInputGroupFormFloatingOpen( 'comment', [ list of attributs ] ) */
									$form -> addDivInputGroupFormFloatingOpen( '',  ['class'=>'input-group align-content-center has-validation'] );
										///*-------- Picto input ----------- */
										///* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
										//$form -> addSpan( '', '', [ 'id'=>'pictoInput-userName', 'href'=>'#', 'class'=>'input-group-text' ]);
										///*---------------------------- */
										/*-------- input ----------- */
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['class'=>'form-floating is-invalid'] );
											/* @addInput( 'comment', [ list of attributs ] ) */
											$form -> addInput('', [ 'type'=>'text', 'name'=>'userName', 'id'=>'userName', 'placeholder'=>'', 'minLength'=>$arrayInputuserName['minLength'], 'maxLength'=>$arrayInputuserName['maxLength'], 'required'=>$arrayInputuserName['required'], 'pattern'=>$arrayInputuserName['pattern'], 'regex'=>$arrayInputuserName['regex'], 'value'=>$arrayInputuserName['value'], 'class'=>'form-control']);
											/* @addLabel( 'comment', 'text', [ list of attributs ] ) */
											$form -> addLabel( '', $arrayInputuserName['label'], [ 'id'=>'inputLabel-userName', 'for'=>'userName', 'class'=>'' ]);
										/* @addDivClose( 'comment' ) */
										$form -> addDivClose( '' );
										/*---------------------------- */
										/*-------- FeedBack ----------- */
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['id'=>'feedback-userName', 'class'=>'invalid-feedback'] );
										/* @addDivClose( 'comment' ) */
										$form -> addDivClose( '' );
										/*---------------------------- */
									/* @addDivInputGroupFormFloatingClose( 'comment' ) */
									$form -> addDivInputGroupFormFloatingClose( '' );
									/*-------- Tooltip ----------- */
									/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
									$form -> addSpan( '', '<i class="fa-solid fa-circle-info"></i>', [ 'id'=>'addon-userName', 'href'=>'#', 'class'=>'pictoInfo', 'data-bs-toggle'=>'tooltip', 'data-bs-placement'=>'left', 'data-bs-html'=>'true', 'data-bs-custom-class'=>'custom-tooltip', 'data-bs-title'=>$arrayInputuserName['tooltip'] ]);
									/*---------------------------- */
								/* @addDivClose( 'comment' ) */
								$form -> addDivClose( '' );
							/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂*/

							/* ▂ ▅ ▆ █  Input group : - userFirstName -  █ ▆ ▅ ▂ */
								/* @addDivOpen( 'comment', [ list of attributs ] ) */
								$form -> addDivOpen( '',  ['class'=>'d-flex flex-nowrap gap-2 align-items-center col-10 col-sm-10 col-lg-10 mb-2'] );
									/* @addDivInputGroupFormFloatingOpen( 'comment', [ list of attributs ] ) */
									$form -> addDivInputGroupFormFloatingOpen( '',  ['class'=>'input-group align-content-center has-validation'] );
										///*-------- Picto input ----------- */
										///* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
										//$form -> addSpan( '', '', [ 'id'=>'pictoInput-userFirstName', 'href'=>'#', 'class'=>'input-group-text' ]);
										///*---------------------------- */
										/*-------- input ----------- */
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['class'=>'form-floating is-invalid'] );
											/* @addInput( 'comment', [ list of attributs ] ) */
											$form -> addInput('', [ 'type'=>'text', 'name'=>'userFirstName', 'id'=>'userFirstName', 'placeholder'=>'', 'minLength'=>$arrayInputuserFirstName['minLength'], 'maxLength'=>$arrayInputuserFirstName['maxLength'], 'required'=>$arrayInputuserFirstName['required'], 'pattern'=>$arrayInputuserFirstName['pattern'], 'regex'=>$arrayInputuserFirstName['regex'], 'value'=>$arrayInputuserFirstName['value'], 'class'=>'form-control']);
											/* @addLabel( 'comment', 'text', [ list of attributs ] ) */
											$form -> addLabel( '', $arrayInputuserFirstName['label'], [ 'id'=>'inputLabel-userFirstName', 'for'=>'userFirstName', 'class'=>'' ]);
										/* @addDivClose( 'comment' ) */
										$form -> addDivClose( '' );
										/*---------------------------- */
										/*-------- FeedBack ----------- */
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['id'=>'feedback-userFirstName', 'class'=>'invalid-feedback'] );
										/* @addDivClose( 'comment' ) */
										$form -> addDivClose( '' );
										/*---------------------------- */
									/* @addDivInputGroupFormFloatingClose( 'comment' ) */
									$form -> addDivInputGroupFormFloatingClose( '' );
									/*-------- Tooltip ----------- */
									/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
									$form -> addSpan( '', '<i class="fa-solid fa-circle-info"></i>', [ 'id'=>'addon-userFirstName', 'href'=>'#', 'class'=>'pictoInfo', 'data-bs-toggle'=>'tooltip', 'data-bs-placement'=>'left', 'data-bs-html'=>'true', 'data-bs-custom-class'=>'custom-tooltip', 'data-bs-title'=>$arrayInputuserFirstName['tooltip'] ]);
									/*---------------------------- */
								/* @addDivClose( 'comment' ) */
								$form -> addDivClose( '' );
							/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂*/

							/* ▂ ▅ ▆ █  Input group : - userEmail -  █ ▆ ▅ ▂ */
								/* @addDivOpen( 'comment', [ list of attributs ] ) */
								$form -> addDivOpen( '',  ['class'=>'d-flex flex-nowrap gap-2 align-items-center col-10 col-sm-10 col-lg-10 mb-2'] );
									/* @addDivInputGroupFormFloatingOpen( 'comment', [ list of attributs ] ) */
									$form -> addDivInputGroupFormFloatingOpen( '',  ['class'=>'input-group align-content-center has-validation'] );
										///*-------- Picto input ----------- */
										///* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
										//$form -> addSpan( '', '', [ 'id'=>'pictoInput-userEmail', 'href'=>'#', 'class'=>'input-group-text' ]);
										///*---------------------------- */
										/*-------- input ----------- */
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['class'=>'form-floating is-invalid'] );
											/* @addInput( 'comment', [ list of attributs ] ) */
											$form -> addInput('', [ 'type'=>'text', 'name'=>'userEmail', 'id'=>'userEmail', 'placeholder'=>'', 'minLength'=>$arrayInputuserEmail['minLength'], 'maxLength'=>$arrayInputuserEmail['maxLength'], 'required'=>$arrayInputuserEmail['required'], 'pattern'=>$arrayInputuserEmail['pattern'], 'regex'=>$arrayInputuserEmail['regex'], 'value'=>$arrayInputuserEmail['value'], 'class'=>'form-control']);
											/* @addLabel( 'comment', 'text', [ list of attributs ] ) */
											$form -> addLabel( '', $arrayInputuserEmail['label'], [ 'id'=>'inputLabel-userEmail', 'for'=>'userEmail', 'class'=>'' ]);
										/* @addDivClose( 'comment' ) */
										$form -> addDivClose( '' );
										/*---------------------------- */
										/*-------- FeedBack ----------- */
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['id'=>'feedback-userEmail', 'class'=>'invalid-feedback'] );
										/* @addDivClose( 'comment' ) */
										$form -> addDivClose( '' );
										/*---------------------------- */
									/* @addDivInputGroupFormFloatingClose( 'comment' ) */
									$form -> addDivInputGroupFormFloatingClose( '' );
									/*-------- Tooltip ----------- */
									/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
									$form -> addSpan( '', '<i class="fa-solid fa-circle-info"></i>', [ 'id'=>'addon-userEmail', 'href'=>'#', 'class'=>'pictoInfo', 'data-bs-toggle'=>'tooltip', 'data-bs-placement'=>'left', 'data-bs-html'=>'true', 'data-bs-custom-class'=>'custom-tooltip', 'data-bs-title'=>$arrayInputuserEmail['tooltip'] ]);
									/*---------------------------- */
								/* @addDivClose( 'comment' ) */
								$form -> addDivClose( '' );
							/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂*/

							// /* ▂ ▅ ▆ █  Input group : - userRecoveryCode -  █ ▆ ▅ ▂ */
							// 	/* @addDivOpen( 'comment', [ list of attributs ] ) */
							// 	$form -> addDivOpen( '',  ['class'=>'d-flex flex-nowrap gap-2 align-items-center col-10 col-sm-10 col-lg-10 mb-2'] );
							// 		/* @addDivInputGroupFormFloatingOpen( 'comment', [ list of attributs ] ) */
							// 		$form -> addDivInputGroupFormFloatingOpen( '',  ['class'=>'input-group align-content-center has-validation'] );
							// 			///*-------- Picto input ----------- */
							// 			///* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
							// 			//$form -> addSpan( '', '', [ 'id'=>'pictoInput-userRecoveryCode', 'href'=>'#', 'class'=>'input-group-text' ]);
							// 			///*---------------------------- */
							// 			/*-------- input ----------- */
							// 			/* @addDivOpen( 'comment', [ list of attributs ] ) */
							// 			$form -> addDivOpen( '',  ['class'=>'form-floating is-invalid'] );
							// 				/* @addInput( 'comment', [ list of attributs ] ) */
							// 				$form -> addInput('', [ 'type'=>'text', 'name'=>'userRecoveryCode', 'id'=>'userRecoveryCode', 'placeholder'=>'', 'minLength'=>$arrayInputuserRecoveryCode['minLength'], 'maxLength'=>$arrayInputuserRecoveryCode['maxLength'], 'required'=>$arrayInputuserRecoveryCode['required'], 'pattern'=>$arrayInputuserRecoveryCode['pattern'], 'regex'=>$arrayInputuserRecoveryCode['regex'], 'value'=>$arrayInputuserRecoveryCode['value'], 'class'=>'form-control']);
							// 				/* @addLabel( 'comment', 'text', [ list of attributs ] ) */
							// 				$form -> addLabel( '', $arrayInputuserRecoveryCode['label'], [ 'id'=>'inputLabel-userRecoveryCode', 'for'=>'userRecoveryCode', 'class'=>'' ]);
							// 			/* @addDivClose( 'comment' ) */
							// 			$form -> addDivClose( '' );
							// 			/*---------------------------- */
							// 			/*-------- FeedBack ----------- */
							// 			/* @addDivOpen( 'comment', [ list of attributs ] ) */
							// 			$form -> addDivOpen( '',  ['id'=>'feedback-userRecoveryCode', 'class'=>'invalid-feedback'] );
							// 			/* @addDivClose( 'comment' ) */
							// 			$form -> addDivClose( '' );
							// 			/*---------------------------- */
							// 		/* @addDivInputGroupFormFloatingClose( 'comment' ) */
							// 		$form -> addDivInputGroupFormFloatingClose( '' );
							// 		/*-------- Tooltip ----------- */
							// 		/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
							// 		$form -> addSpan( '', '<i class="fa-solid fa-circle-info"></i>', [ 'id'=>'addon-userRecoveryCode', 'href'=>'#', 'class'=>'pictoInfo', 'data-bs-toggle'=>'tooltip', 'data-bs-placement'=>'left', 'data-bs-html'=>'true', 'data-bs-custom-class'=>'custom-tooltip', 'data-bs-title'=>$arrayInputuserRecoveryCode['tooltip'] ]);
							// 		/*---------------------------- */
							// 	/* @addDivClose( 'comment' ) */
							// 	$form -> addDivClose( '' );
							// /* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂*/

							/* ▂ ▅ ▆ █  Input group : - identifiant -  █ ▆ ▅ ▂ */
								/* @addDivOpen( 'comment', [ list of attributs ] ) */
								$form -> addDivOpen( '',  ['class'=>'d-flex flex-nowrap gap-2 align-items-center col-10 col-sm-10 col-lg-10 mb-2'] );
									/* @addDivInputGroupFormFloatingOpen( 'comment', [ list of attributs ] ) */
									$form -> addDivInputGroupFormFloatingOpen( '',  ['class'=>'input-group align-content-center has-validation'] );
										/*-------- Picto input ----------- */
										/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
										# $form -> addSpan( '', '', [ 'id'=>'pictoInput-identifiant', 'href'=>'#', 'class'=>'input-group-text' ]);
										/*---------------------------- */
										/*-------- input ----------- */
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['class'=>'form-floating is-invalid'] );
											/* @addInput( 'comment', [ list of attributs ] ) */
											$form -> addInput('', [ 'type'=>'text', 'name'=>'identifiant', 'id'=>'identifiant', 'placeholder'=>'', 'minLength'=>$arrayInputidentifiant['minLength'], 'maxLength'=>$arrayInputidentifiant['maxLength'], 'required'=>$arrayInputidentifiant['required'], 'pattern'=>$arrayInputidentifiant['pattern'], 'regex'=>$arrayInputidentifiant['regex'], 'value'=>$arrayInputidentifiant['value'], 'class'=>'form-control']);
											/* @addLabel( 'comment', 'text', [ list of attributs ] ) */
											$form -> addLabel( '', $arrayInputidentifiant['label'], [ 'id'=>'inputLabel-identifiant', 'for'=>'identifiant', 'class'=>'' ]);
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
									/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
									$form -> addSpan( '', '<i class="fa-solid fa-circle-info"></i>', [ 'id'=>'addon-identifiant', 'href'=>'#', 'class'=>'pictoInfo', 'data-bs-toggle'=>'tooltip', 'data-bs-placement'=>'left', 'data-bs-html'=>'true', 'data-bs-custom-class'=>'custom-tooltip', 'data-bs-title'=>$arrayInputidentifiant['tooltip'] ]);
									/*---------------------------- */
								/* @addDivClose( 'comment' ) */
								$form -> addDivClose( '' );
							/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂*/

							/* ▂ ▅ ▆ █  Input group : - password -  █ ▆ ▅ ▂ */
								/* @addDivOpen( 'comment', [ list of attributs ] ) */
								$form -> addDivOpen( '',  ['class'=>'d-flex flex-nowrap gap-2 align-items-center col-10 col-sm-10 col-lg-10 mb-2'] );
									/* @addDivInputGroupFormFloatingOpen( 'comment', [ list of attributs ] ) */
									$form -> addDivInputGroupFormFloatingOpen( '',  ['class'=>'input-group align-content-center has-validation'] );
										///*-------- Picto input ----------- */
										///* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
										//$form -> addSpan( '', '', [ 'id'=>'pictoInput-password', 'href'=>'#', 'class'=>'input-group-text' ]);
										///*---------------------------- */
										/*-------- input ----------- */
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['class'=>'form-floating is-invalid'] );
											/* @addInput( 'comment', [ list of attributs ] ) */
											$form -> addInput('', [ 'type'=>'text', 'name'=>'password', 'id'=>'password', 'placeholder'=>'', 'minLength'=>$arrayInputpassword['minLength'], 'maxLength'=>$arrayInputpassword['maxLength'], 'required'=>$arrayInputpassword['required'], 'pattern'=>$arrayInputpassword['pattern'], 'regex'=>$arrayInputpassword['regex'], 'value'=>$arrayInputpassword['value'], 'class'=>'form-control' ]);
											/* @addLabel( 'comment', 'text', [ list of attributs ] ) */
											$form -> addLabel( '', $arrayInputpassword['label'], [ 'id'=>'inputLabel-password', 'for'=>'password', 'class'=>'' ]);
										/* @addDivClose( 'comment' ) */
										$form -> addDivClose( '' );
										/*---------------------------- */
										/*-------- Picto eye -----------*/
										/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) </i> */
										$form -> addSpan( '', '<i class="fa-solid fa-eye"></i>', [ 'id'=>'password-eye', 'href'=>'#', 'class'=>'input-group-text pictoEye' ]);
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
									/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
									$form -> addSpan( '', '<i class="fa-solid fa-circle-info"></i>', [ 'id'=>'addon-password', 'href'=>'#', 'class'=>'pictoInfo', 'data-bs-toggle'=>'tooltip', 'data-bs-placement'=>'left', 'data-bs-html'=>'true', 'data-bs-custom-class'=>'custom-tooltip', 'data-bs-title'=>$arrayInputpassword['tooltip'] ]);
									/*---------------------------- */
								/* @addDivClose( 'comment' ) */
								$form -> addDivClose( '' );
							/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂*/

							/* ▂ ▅ ▆ █  Input group : - password vérification -  █ ▆ ▅ ▂ */
								/* @addDivOpen( 'comment', [ list of attributs ] ) */
								$form -> addDivOpen( '',  ['class'=>'d-flex flex-nowrap gap-2 align-items-center col-10 col-sm-10 col-lg-10 mb-2'] );
									/* @addDivInputGroupFormFloatingOpen( 'comment', [ list of attributs ] ) */
									$form -> addDivInputGroupFormFloatingOpen( '',  ['class'=>'input-group align-content-center has-validation'] );
										// /*-------- Picto input ----------- */
										// /* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
										// $form -> addSpan( '', '<i class="fa-solid fa-lock"></i>', [ 'id'=>'pictoInput-password-verification', 'href'=>'#', 'class'=>'input-group-text ' ]);
										// /*---------------------------- */
										/*-------- input ----------- */
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['class'=>'form-floating is-invalid'] );
											/* @addInput( 'comment', [ list of attributs ] ) */
											$form -> addInput('', [ 'type'=>'password', 'name'=>'password-verification', 'id'=>'password-verification', 'placeholder'=>'', 'minLength'=>$arrayInputpasswordVerify['minLength'], 'maxLength'=>$arrayInputpasswordVerify['maxLength'], 'required'=>'required', 'pattern'=>$arrayInputpasswordVerify['pattern'], 'regex'=>$arrayInputpasswordVerify['regex'], 'value'=>$arrayInputpasswordVerify['value'], 'class'=>'form-control ']);
											/* @addLabel( 'comment', 'text', [ list of attributs ] ) */
											$form -> addLabel( '', 'Votre mot de passe', [ 'id'=>'inputLabel-password-verification', 'for'=>'password-verification', 'class'=>'' ]);
										/* @addDivClose( 'comment' ) */
										$form -> addDivClose( '' );
										/*---------------------------- */
										/*-------- Picto eye -----------*/
										/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) </i> */
										$form -> addSpan( '', '<i class="fa-solid fa-eye"></i>', [ 'id'=>'password-verification-eye', 'href'=>'#', 'class'=>'input-group-text pictoEye' ]);
										/*---------------------------- */
										/*-------- FeedBack ----------- */
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['id'=>'feedback-password-verification', 'class'=>'invalid-feedback'] );
										/* @addDivClose( 'comment' ) */
										$form -> addDivClose( '' );
										/*---------------------------- */
									/* @addDivInputGroupFormFloatingClose( 'comment' ) */ 
									$form -> addDivInputGroupFormFloatingClose( '' );
									/*-------- Tooltip ----------- */
									/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
									$form -> addSpan( '', '<i class="fa-solid fa-circle-info"></i>', [ 'id'=>'addon-password', 'href'=>'#', 'class'=>'pictoInfo', 'data-bs-toggle'=>'tooltip', 'data-bs-placement'=>'left', 'data-bs-html'=>'true', 'data-bs-custom-class'=>'custom-tooltip', 'data-bs-title'=>$arrayInputpassword['tooltip'] ]);
									/*---------------------------- */
								/* @addDivClose( 'comment' ) */
								$form -> addDivClose( '' );
							/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂*/

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

					/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

				}
			/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */

			/* ▂ ▅ ▆ █ index █ ▆ ▅ ▂ */
				public function indexUseraccount(){
	
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 


			/* ▂ ▅ ▆ █ add █ ▆ ▅ ▂ */
				public function addUseraccount(){
					# Step 1.0 We define variables
					$otherMsgError = false;
					# Step 2.0 Instantiate object
					$objSecurityForm = new SecurityForm();
					$objRegex = new Regex();
					$pregMatch = $objRegex -> readPregMatch() -> getReadPregMatch();
					# Step 3.0 We retrieve the $POST values ​​from the request
					$post=json_decode(file_get_contents('php://input'), true);
					# Step 4.0 SecurityForm()
					# Step 4.1 We encode XSS & Trim	$post Cleanup
					$postEncode = $objSecurityForm -> encode_XssTrim( $post );					
					# Step 4.2 created regex pattern list
					$regexFieldRequired=['userName'=>$pregMatch['text'], 'userFirstName'=>$pregMatch['text'], 'userEmail'=>$pregMatch['email'], 'identifiant'=>$pregMatch['identifiant'], 'password'=>$pregMatch['password'] ];  
					# Step 4.3 created setting array                         
					$setting = ['method'=>'POST', 'post'=>$postEncode, 'regexFieldRequired'=> $regexFieldRequired ]; 
					# Step 4.4 We call the function SecurityForm( $setting )
					$responseSecurityForm = $objSecurityForm -> SecurityForm( $setting ); 
					# Step 5.0 We verify $responseSecurityForm::array  
					# Step 5.1 If ! $responseSecurityForm['error']
					if( ! $responseSecurityForm['error'] ){
					
					# Step 5.1 We cretate code recovery 
					$postEncode['userRecoveryCode'] = '';
					for ($i=0; $i < 5 ; $i++) { 
						$postEncode['userRecoveryCode'] .= rand(0,9);
					};
					$postEncode['userAccess'] = 1;
					$postEncode['password'] = password_hash($postEncode['password'], PASSWORD_BCRYPT);	

						/* ▂ ▅  Code   ▅ ▂ */
							# Step 5.2 We instantiate new object
							$objUserAccountModel = new UserAccountModel();
							$objUserAccount = new UserAccount();
							$objLoginAccount = new LoginAccount();
							# Step 5.3 We verify if the email exist in database with the function getUserAccountByEmail( $email )
							# @ duplicateCheck( $ColumnName, $Value )
							$responseDuplicateCheck = $objUserAccountModel -> duplicateCheck( 'userEmail', $postEncode['userEmail'] );
							if( $responseDuplicateCheck ){
									$otherMsgError = true;
									# @ objUserInformation($type='', $textInfo='')
									$objCreateDivInformation = new CreateDivInformation('', 'Cette adresse email est déjà utilisée' );
							}else{
									# Step 5.4 We write $postEncode['']
									# Step 5.5 We hydrate the object $objUserAccount with the function hydrate( $arrayData )
									$objUserAccount -> hydrate( $postEncode );
									$objLoginAccount -> hydrate( $postEncode );
									# Step 5.6 We create a new user account in database with the function createUserAccount( $objUserAccount )
									$error = $objUserAccountModel -> createJoint( $objUserAccount, $objLoginAccount );
									if( $error ){
										$otherMsgError = true;
										# @ objUserInformation($type='', $textInfo='')
										$objCreateDivInformation = new CreateDivInformation('', 'Une erreur est survenue lors de la création de votre compte' );
									}else{

									};
							};


						/* ▂▂▂▂▂▂▂▂▂▂▂ */
					};
			# $objUserAccountModel = new UserAccountModel();
			# $objUserAccount = new UserAccount();
					/* ▂ ▅  Bloc Response Fetch ▅ ▂ */
						# Step 20 We construct the variable $response
						if( $responseSecurityForm['error'] ){
								# We construct the variable $response
								# @ objUserInformation($type='', $textInfo='')
								$objCreateDivInformation = new CreateDivInformation('', $responseSecurityForm['Msg'] );
								# We construct the variable $response
								# @ objResponseJson($status='', $divtInfo='', $data='', $redirect='')
								$objResponseJson = new ResponseJson(false, $objCreateDivInformation -> getDanger(),'','');   

						}elseif( $otherMsgError ){

								# We construct the variable $response
								# @ objResponseJson($status='', $divtInfo='', $data='', $redirect='')
								$objResponseJson = new ResponseJson(false, $objCreateDivInformation -> getDanger(),'',''); 

						}else{
								# We construct the variable $response
								# @ objUserInformation($type='', $textInfo='')
								$objCreateDivInformation = new CreateDivInformation('', 'Votre compte a été créé avec succès' );
								# @ objResponseJson($status='', $divtInfo='', $data='', $redirect='')
								$objResponseJson = new ResponseJson(true, $objCreateDivInformation -> getSuccess(), '' , '' );                                              
						};


						$response = $objResponseJson -> getResponse();
						echo(($response));
						// return ;
					/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂  */ 









	
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

			/* ▂ ▅ ▆ █ update █ ▆ ▅ ▂ */
				public function updateUseraccount($id){
	
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

			/* ▂ ▅ ▆ █ show █ ▆ ▅ ▂ */
				public function showUseraccount($id){
	
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

			/* ▂ ▅ ▆ █ delete █ ▆ ▅ ▂ */
				public function deleteUseraccount($id){
	
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

		};
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */
?>