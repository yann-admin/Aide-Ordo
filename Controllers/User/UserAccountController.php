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
		// use App\Entities\UserAccount;
		// use App\Models\UserAccountModel;

		#  Class RenderData & ResponseJson & CreateDivInformation
		use App\Core\RenderData\RenderData;
		use App\Core\RenderData\ResponseJson;
		use App\Core\RenderData\CreateDivInformation;
		
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅  Writing Setters via toolbox  ▅ ▂ */
		# $objUserAccount = new UserAccountController();
		# $objUserAccountModel = new UserAccountModel();
		/*Comment:  */
		# $useraccount -> setIdUserAccount($_POST['IdUserAccount']);
		/*Comment:  */
		# $useraccount -> setUserName($_POST['UserName']);
		/*Comment:  */
		# $useraccount -> setUserFirstName($_POST['UserFirstName']);
		/*Comment:  */
		# $useraccount -> setUserEmail($_POST['UserEmail']);
		/*Comment:  */
		# $useraccount -> setUserRecoveryCode($_POST['UserRecoveryCode']);
		/*Comment:  */
		# $useraccount -> setUserAccess($_POST['UserAccess']);
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
						/* Files form : loginaccount via constructor_Forms.php VERSION: 3.0.0*/ 
					/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

					/* ▂ ▅ ▆ █ Formulaire pour la table: - loginaccount - █ ▆ ▅ ▂ */
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

						// /* ▂   Variables   ▂ */
						// # Declaration of variables
						// 	$action = 'App/Public/index.php?controller=home&action=addLoginAccount'; 
						// 	$method = 'POST';
						// 	$idForm = 'formLogin';
						// 	$textBtn1 = 'Connection';
						// 	$textBtn2 = 'Reset';
						// 	$userNameValue = '';
						// 	$userFirstNameValue = '';
						// 	$userEmailValue = '';
						// 	$userRecoveryCodeValue = '';
						// 	$userAccessValue = '';

						// 	$identifiantValue = "YannocH17";
						// 	$passwordValue = "4550191Ym@";
						// 	//$x= password_hash($passwordValue, PASSWORD_BCRYPT);
						// /* ▂ ▂ ▂ ▂ ▂ ▂ ▂ */
		/* ▂   Variables   ▂ */
			# Declaration of variables
				$action = 'App/Public/index.php?controller=home&action=addLoginAccount';
				$method = 'POST';
				$idForm = 'formAddAccount';
				$textBtn1 = 'Créer le compte';
				$textBtn2 = 'Effacer';
				$idUserAccountValue = "";
				$userNameValue = "";
				$userFirstNameValue = "";
				$userEmailValue = "";
				$userRecoveryCodeValue = "";
				$userAccessValue = "";
				$idLoginAccountValue = "";
				$identifiantValue = "";
				$passwordValue = "";
				$idUserAccountValue = "";
			/* ----------------------------*/
			# Declaration of variables regex
				$regex_idUserAccount = $regex["number"]; 
				$regex_userName = $regex["text"];
				$regex_userFirstName = $regex["text"];
				$regex_userEmail = $regex["email"];
				$regex_userRecoveryCode = $regex["text"];
				$regex_userAccess = $regex["number"];
				$regex_idLoginAccount = $regex["number"];
				$regex_identifiant = $regex["identifiant"];
				$regex_password = $regex["password"];
				$regex_idUserAccount = $regex["number"];
			/* ---------------------------- */
			# Declaration of variables tooltip
				$tooltip_idUserAccount = $tooltip["number"];
				$tooltip_userName = $tooltip["text"];
				$tooltip_userFirstName = $tooltip["text"];
				$tooltip_userEmail = $tooltip["email"];
				$tooltip_userRecoveryCode = $tooltip["text"];
				$tooltip_userAccess = $tooltip["number"];
				$tooltip_idLoginAccount = $tooltip["number"];
				$tooltip_identifiant = $tooltip["identifiant"];
				$tooltip_password = $tooltip["password"];
				$tooltip_idUserAccount = $tooltip["number"];
			/* ---------------------------- */
			# Declaration of variables pattern
				$pattern_idUserAccount = $pattern["number"];
				$pattern_userName = $pattern["text"];
				$pattern_userFirstName = $pattern["text"];
				$pattern_userEmail = $pattern["email"];
				$pattern_userRecoveryCode = $pattern["text"];
				$pattern_userAccess = $pattern["number"];
				$pattern_idLoginAccount = $pattern["number"];
				$pattern_identifiant = $pattern["identifiant"];
				$pattern_password = $pattern["password"];
				$pattern_idUserAccount = $pattern["number"];
			/* ---------------------------- */
		/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ */
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
								$form -> addTitleForm( 'Title Form', 'h4', '- Créer un compte -', [ 'name'=>'', 'id'=>'', 'class'=>'titleForm fst-italic my-4' ] );
								/* @addDivClose( 'comment' ) */
								$form -> addDivClose( '' );
							/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂*/

							/* ▂ ▅ ▆ █  Div information user  █ ▆ ▅ ▂ */
								/* @addDivOpen( 'comment', [ list of attributs ] ) */
								$form -> addDivOpen( '',  ['id'=>'userMessage', 'class'=>''] );

								/* @addDivClose( 'comment' ) */
								$form -> addDivClose();
							/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ */ 

							/* ▂ ▅ ▆ █  Input group : - userName -  █ ▆ ▅ ▂ */
								/* @addDivOpen( 'comment', [ list of attributs ] ) */
								$form -> addDivOpen( '',  ['class'=>'d-flex flex-nowrap gap-2 align-items-center col-10 col-sm-10 col-lg-10 mb-2'] );
									/* @addDivInputGroupFormFloatingOpen( 'comment', [ list of attributs ] ) */
									$form -> addDivInputGroupFormFloatingOpen( '',  ['class'=>'input-group align-content-center has-validation'] );
										/*-------- Picto input ----------- */
										/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
										$form -> addSpan( '', '<i class="fa-solid fa-user"></i>', [ 'id'=>'pictoInput-userName', 'href'=>'#', 'class'=>'input-group-text ' ]);
										/*---------------------------- */
										/*-------- input ----------- */
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['class'=>'form-floating is-invalid'] );
											/* @addInput( 'comment', [ list of attributs ] ) */
											$form -> addInput('', [ 'type'=>'text', 'name'=>'userName', 'id'=>'userName', 'placeholder'=>'', 'minLength'=>'1', 'maxLength'=>'50', 'required'=>'required', 'pattern'=>$pattern_userName, 'regex'=>$regex_userName, 'value'=>$userNameValue, 'autofocus'=>'', 'class'=>'form-control ']);
											/* @addLabel( 'comment', 'text', [ list of attributs ] ) */
											$form -> addLabel( '', 'Votre nom', [ 'id'=>'inputLabel-userName', 'for'=>'userName', 'class'=>'' ]);
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
									$form -> addSpan( '', '<i class="fa-solid fa-circle-info"></i>', [ 'id'=>'addon-userName', 'href'=>'#', 'class'=>'pictoInfo ', 'data-bs-toggle'=>'tooltip', 'data-bs-placement'=>'left', 'data-bs-html'=>'true', 'data-bs-custom-class'=>'custom-tooltip', 'data-bs-title'=>$tooltip_userName ]);
									/*---------------------------- */
								/* @addDivClose( 'comment' ) */
								$form -> addDivClose( '' );
							/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂*/

							/* ▂ ▅ ▆ █  Input group : - userFirstName -  █ ▆ ▅ ▂ */
								/* @addDivOpen( 'comment', [ list of attributs ] ) */
								$form -> addDivOpen( '',  ['class'=>'d-flex flex-nowrap gap-2 align-items-center col-10 col-sm-10 col-lg-10 mb-2'] );
									/* @addDivInputGroupFormFloatingOpen( 'comment', [ list of attributs ] ) */
									$form -> addDivInputGroupFormFloatingOpen( '',  ['class'=>'input-group align-content-center has-validation'] );
										/*-------- Picto input ----------- */
										/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
										$form -> addSpan( '', '<i class="fa-regular fa-user"></i>', [ 'id'=>'pictoInput-userFirstName', 'href'=>'#', 'class'=>'input-group-text ' ]);
										/*---------------------------- */
										/*-------- input ----------- */
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['class'=>'form-floating is-invalid'] );
											/* @addInput( 'comment', [ list of attributs ] ) */
											$form -> addInput('', [ 'type'=>'text', 'name'=>'userFirstName', 'id'=>'userFirstName', 'placeholder'=>'', 'minLength'=>'1', 'maxLength'=>'50', 'required'=>'required', 'pattern'=>$pattern_userFirstName, 'regex'=>$regex_userFirstName, 'value'=>$userFirstNameValue, 'class'=>'form-control ']);
											/* @addLabel( 'comment', 'text', [ list of attributs ] ) */
											$form -> addLabel( '', 'Votre Prénom', [ 'id'=>'inputLabel-userFirstName', 'for'=>'userFirstName', 'class'=>'' ]);
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
									$form -> addSpan( '', '<i class="fa-solid fa-circle-info"></i>', [ 'id'=>'addon-userFirstName', 'href'=>'#', 'class'=>'pictoInfo ', 'data-bs-toggle'=>'tooltip', 'data-bs-placement'=>'left', 'data-bs-html'=>'true', 'data-bs-custom-class'=>'custom-tooltip', 'data-bs-title'=>$tooltip_userFirstName ]);
									/*---------------------------- */
								/* @addDivClose( 'comment' ) */
								$form -> addDivClose( '' );
							/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂*/

							/* ▂ ▅ ▆ █  Input group : - userEmail -  █ ▆ ▅ ▂ */
								/* @addDivOpen( 'comment', [ list of attributs ] ) */
								$form -> addDivOpen( '',  ['class'=>'d-flex flex-nowrap gap-2 align-items-center col-10 col-sm-10 col-lg-10 mb-2'] );
									/* @addDivInputGroupFormFloatingOpen( 'comment', [ list of attributs ] ) */
									$form -> addDivInputGroupFormFloatingOpen( '',  ['class'=>'input-group align-content-center has-validation'] );
										/*-------- Picto input ----------- */
										/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
										$form -> addSpan( '', '<i class="fa-solid fa-at"></i>', [ 'id'=>'pictoInput-userEmail', 'href'=>'#', 'class'=>'input-group-text ' ]);
										/*---------------------------- */
										/*-------- input ----------- */
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['class'=>'form-floating is-invalid'] );
											/* @addInput( 'comment', [ list of attributs ] ) */
											$form -> addInput('', [ 'type'=>'email', 'name'=>'userEmail', 'id'=>'userEmail', 'placeholder'=>'', 'minLength'=>'1', 'maxLength'=>'50', 'required'=>'required', 'pattern'=>$pattern_userEmail, 'regex'=>$regex_userEmail, 'value'=>$userEmailValue, 'class'=>'form-control ']);
											/* @addLabel( 'comment', 'text', [ list of attributs ] ) */
											$form -> addLabel( '', 'Votre email', [ 'id'=>'inputLabel-userEmail', 'for'=>'userEmail', 'class'=>'' ]);
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
									$form -> addSpan( '', '<i class="fa-solid fa-circle-info"></i>', [ 'id'=>'addon-userEmail', 'href'=>'#', 'class'=>'pictoInfo ', 'data-bs-toggle'=>'tooltip', 'data-bs-placement'=>'left', 'data-bs-html'=>'true', 'data-bs-custom-class'=>'custom-tooltip', 'data-bs-title'=>$tooltip_userEmail ]);
									/*---------------------------- */
								/* @addDivClose( 'comment' ) */
								$form -> addDivClose( '' );
							/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂*/

							/* ▂ ▅ ▆ █  Input group : - userRecoveryCode -  █ ▆ ▅ ▂ */
								/* @addDivOpen( 'comment', [ list of attributs ] ) */
								$form -> addDivOpen( '',  ['class'=>'d-flex flex-nowrap gap-2 align-items-center col-10 col-sm-10 col-lg-10 mb-2'] );
									/* @addDivInputGroupFormFloatingOpen( 'comment', [ list of attributs ] ) */
									$form -> addDivInputGroupFormFloatingOpen( '',  ['class'=>'input-group align-content-center has-validation'] );
										/*-------- Picto input ----------- */
										/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
										$form -> addSpan( '', '<i class="fa-solid fa-key"></i>', [ 'id'=>'pictoInput-userRecoveryCode', 'href'=>'#', 'class'=>'input-group-text ' ]);
										/*---------------------------- */
										/*-------- input ----------- */
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['class'=>'form-floating is-invalid'] );
											/* @addInput( 'comment', [ list of attributs ] ) */
											$form -> addInput('', [ 'type'=>'text', 'name'=>'userRecoveryCode', 'id'=>'userRecoveryCode', 'placeholder'=>'', 'minLength'=>'1', 'maxLength'=>'65535', 'required'=>'required', 'pattern'=>$pattern_userRecoveryCode, 'regex'=>$regex_userRecoveryCode, 'value'=>$userRecoveryCodeValue, 'class'=>'form-control ']);
											/* @addLabel( 'comment', 'text', [ list of attributs ] ) */
											$form -> addLabel( '', 'Votre code de récupération', [ 'id'=>'inputLabel-userRecoveryCode', 'for'=>'userRecoveryCode', 'class'=>'' ]);
										/* @addDivClose( 'comment' ) */
										$form -> addDivClose( '' );
										/*---------------------------- */
										/*-------- FeedBack ----------- */
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['id'=>'feedback-userRecoveryCode', 'class'=>'invalid-feedback'] );
										/* @addDivClose( 'comment' ) */
										$form -> addDivClose( '' );
										/*---------------------------- */
									/* @addDivInputGroupFormFloatingClose( 'comment' ) */
									$form -> addDivInputGroupFormFloatingClose( '' );
									/*-------- Tooltip ----------- */
									/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
									$form -> addSpan( '', '<i class="fa-solid fa-circle-info"></i>', [ 'id'=>'addon-userRecoveryCode', 'href'=>'#', 'class'=>'pictoInfo ', 'data-bs-toggle'=>'tooltip', 'data-bs-placement'=>'left', 'data-bs-html'=>'true', 'data-bs-custom-class'=>'custom-tooltip', 'data-bs-title'=>$tooltip_userRecoveryCode ]);
									/*---------------------------- */
								/* @addDivClose( 'comment' ) */
								$form -> addDivClose( '' );
							/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂*/

							/* ▂ ▅ ▆ █  Input group : - identifiant -  █ ▆ ▅ ▂ */
								/* @addDivOpen( 'comment', [ list of attributs ] ) */
								$form -> addDivOpen( '',  ['class'=>'d-flex flex-nowrap gap-2 align-items-center col-10 col-sm-10 col-lg-10 mb-2'] );
									/* @addDivInputGroupFormFloatingOpen( 'comment', [ list of attributs ] ) */
									$form -> addDivInputGroupFormFloatingOpen( '',  ['class'=>'input-group align-content-center has-validation'] );
										/*-------- Picto input ----------- */
										/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
										$form -> addSpan( '', '<i class="fa-solid fa-fingerprint"></i>', [ 'id'=>'pictoInput-identifiant', 'href'=>'#', 'class'=>'input-group-text ' ]);
										/*---------------------------- */
										/*-------- input ----------- */
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['class'=>'form-floating is-invalid'] );
											/* @addInput( 'comment', [ list of attributs ] ) */
											$form -> addInput('', [ 'type'=>'text', 'name'=>'identifiant', 'id'=>'identifiant', 'placeholder'=>'', 'minLength'=>'1', 'maxLength'=>'65535', 'required'=>'required', 'pattern'=>$pattern_identifiant, 'regex'=>$regex_identifiant, 'value'=>$identifiantValue, 'class'=>'form-control ']);
											/* @addLabel( 'comment', 'text', [ list of attributs ] ) */
											$form -> addLabel( '', 'Votre identifiant', [ 'id'=>'inputLabel-identifiant', 'for'=>'identifiant', 'class'=>'' ]);
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
									$form -> addSpan( '', '<i class="fa-solid fa-circle-info"></i>', [ 'id'=>'addon-identifiant', 'href'=>'#', 'class'=>'pictoInfo ', 'data-bs-toggle'=>'tooltip', 'data-bs-placement'=>'left', 'data-bs-html'=>'true', 'data-bs-custom-class'=>'custom-tooltip', 'data-bs-title'=>$tooltip_identifiant ]);
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
											$form -> addInput('', [ 'type'=>'password', 'name'=>'password', 'id'=>'password', 'placeholder'=>'', 'minLength'=>'1', 'maxLength'=>'65535', 'required'=>'required', 'pattern'=>$pattern_password, 'regex'=>$regex_password, 'value'=>$passwordValue, 'class'=>'form-control ']);
											/* @addLabel( 'comment', 'text', [ list of attributs ] ) */
											$form -> addLabel( '', 'Votre mot de passe', [ 'id'=>'inputLabel-password', 'for'=>'password', 'class'=>'' ]);
										/* @addDivClose( 'comment' ) */
										$form -> addDivClose( '' );
										/*---------------------------- */
										/*-------- Picto eye -----------*/
										/* @addSpan( 'comment', 'i or img', [ list of attributs ] )  */
										$form -> addSpan( '', '<i class="fa-solid fa-eye"></i>', [ 'id'=>'password-eye', 'href'=>'#', 'class'=>'input-group-text picto-eye' ]);
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
									$form -> addSpan( '', '<i class="fa-solid fa-circle-info"></i>', [ 'id'=>'addon-password', 'href'=>'#', 'class'=>'pictoInfo ', 'data-bs-toggle'=>'tooltip', 'data-bs-placement'=>'left', 'data-bs-html'=>'true', 'data-bs-custom-class'=>'custom-tooltip', 'data-bs-title'=>$tooltip_password ]);
									/*---------------------------- */
								/* @addDivClose( 'comment' ) */
								$form -> addDivClose( '' );
							/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂*/

							/* ▂ ▅ ▆ █  Input group : - password vérification -  █ ▆ ▅ ▂ */
								/* @addDivOpen( 'comment', [ list of attributs ] ) */
								$form -> addDivOpen( '',  ['class'=>'d-flex flex-nowrap gap-2 align-items-center col-10 col-sm-10 col-lg-10 mb-2'] );
									/* @addDivInputGroupFormFloatingOpen( 'comment', [ list of attributs ] ) */
									$form -> addDivInputGroupFormFloatingOpen( '',  ['class'=>'input-group align-content-center has-validation'] );
										/*-------- Picto input ----------- */
										/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
										$form -> addSpan( '', '<i class="fa-solid fa-lock"></i>', [ 'id'=>'pictoInput-password-verification', 'href'=>'#', 'class'=>'input-group-text ' ]);
										/*---------------------------- */
										/*-------- input ----------- */
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['class'=>'form-floating is-invalid'] );
											/* @addInput( 'comment', [ list of attributs ] ) */
											$form -> addInput('', [ 'type'=>'password', 'name'=>'password-verification', 'id'=>'password-verification', 'placeholder'=>'', 'minLength'=>'1', 'maxLength'=>'65535', 'required'=>'required', 'pattern'=>$pattern_password, 'regex'=>$regex_password, 'value'=>$passwordValue, 'class'=>'form-control ']);
											/* @addLabel( 'comment', 'text', [ list of attributs ] ) */
											$form -> addLabel( '', 'Votre mot de passe', [ 'id'=>'inputLabel-password-verification', 'for'=>'password-verification', 'class'=>'' ]);
										/* @addDivClose( 'comment' ) */
										$form -> addDivClose( '' );
										/*---------------------------- */
										/*-------- Picto eye -----------*/
										/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) </i> */
										$form -> addSpan( '', '<i class="fa-solid fa-eye"></i>', [ 'id'=>'password-verification-eye', 'href'=>'#', 'class'=>'input-group-text picto-eye ' ]);
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
									$form -> addSpan( '', '<i class="fa-solid fa-circle-info"></i>', [ 'id'=>'addon-password', 'href'=>'#', 'class'=>'pictoInfo ', 'data-bs-toggle'=>'tooltip', 'data-bs-placement'=>'left', 'data-bs-html'=>'true', 'data-bs-custom-class'=>'custom-tooltip', 'data-bs-title'=>$tooltip_password ]);
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