<?php
	/* ▂ ▅ ▆ █ Information █ ▆ ▅ ▂ */
		/* Fichier controller database: api_chichoune - table: loginaccount via constructor_Array_DataBase_SQL.php VERSION: 3.0.0*/ 
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

		# Class Entity & Models CookiesRemember
		use App\Entities\User\CookiesRemember;
		use App\Models\User\CookiesRememberModel;

		# Class Entity & Models UserAccount
		use App\Entities\User\LoginAccount;
		use App\Models\User\LoginAccountModel;

		#  Class RenderData & ResponseJson & CreateDivInformation
		use App\Core\RenderData\RenderData;
		use App\Core\RenderData\ResponseJson;
		use App\Core\RenderData\CreateDivInformation;

		# Class Crypto & Key
		use \Defuse\Crypto\Crypto;
        use \Defuse\Crypto\Key;
        require '../vendor/autoload.php';
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅  Writing Setters via toolbox  ▅ ▂ */
		# $objLoginAccount = new LoginAccountController();
		# $objLoginAccountModel = new LoginAccountModel();
		/*Comment:  */
		# $loginAccount -> setIdLoginAccount($_POST['IdLoginAccount']);
		/*Comment:  */
		# $loginAccount -> setIdentifiant($_POST['Identifiant']);
		/*Comment:  */
		# $loginAccount -> setPassword($_POST['Password']);
		/*Comment:  */
		# $loginAccount -> setIdUserAccount($_POST['IdUserAccount']);
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */

	/* ▂ ▅ ▆ █ Class █ ▆ ▅ ▂ */
	class LoginAccountController {
		/* ▂ ▅ ▆ █    Attributs    █ ▆ ▅ ▂ */
		/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

		/* ▂ ▅ ▆ █ Grafcet █ ▆ ▅ ▂ */
			/*
				# function constructFormLoginAccount( )
					╚ Step 1.0 We instantiate new object
					╚ return $form;

				# function verifyLoginAccount( $identifiant, $password )
					╚ Step 1.0 We instantiate new object
					╚ Step 2.0 We call the model to search for the identifiant
					╚ Step 3.0 We verify the password
					╚ Step 4.0 We return the result ( true or false )
						╚ # Step 4.1 We encode XSS & Trim	$post Cleanup
						╚ # Step 4.2 We verify if the password is correct
						╚ # Step 4.3 created setting array
						╚ # Step 4.4 We return true or false
					╚ Step 5.0 We We verify $responseSecurityForm::array 
						╚ # Step 5.1 If ! $responseSecurityForm['error']
							╚ We create the session 
						╚ # Step 5.2 We instantiate new object
							╚ # Step 5.2 else return the div information error
							╚ # Step 5.3 We call $objLoginAccountModel->findJointIdentifiant( string $identifiant ) useraccount & loginaccount
							╚ # Step 5.4 We verify if $loginAccountData exists
								╚ # Step 5.4 else identifiant not found
									╚ We return the div information error
							╚ # Step 5.5 We verify the password	
								╚ If the password is correct
									╚ We create the session variables
								╚ # Step 5.5 else password not correct
									╚ We return the div information error
						╚ # Step 5.6 We regenerate the session ID to prevent session fixation attacks
						╚ # Step 5.7 We store user information in the session
						╚ # Step 5.8 We check if the "Remember Me" checkbox is checked
							╚ # Step 5.8.1 We instantiate the CookiesRememberModel() & CookiesRemember() class
							╚ # Step 5.8.2 We generate a unique key for the user
							╚ # Step 5.8.3 write the cookie in the database with the user ID and the generated key
							╚ # Step 5.8.4 We encrypt the cookie data using the generated key
							╚ # Step 5.8.5 We store the generated key in the database associated with the user ID
							╚ # Step 5.8.6 We hydrate the Cookies object
							╚ # Step 5.8.7 We insert the cookie in the database


					# function verifyCookieRememberMe()
						╚ Step 1.0 We instantiate new object
						╚ Step 2.0 We call the model to search for the cookie
						╚ Step 3.0 We verify if the cookie exists in database
							╚ # Step 3.1 If cookie exist in database
								╚ We decrypt the cookie data using the key stored in the database
								╚ We verify if the decrypted data matches the user's IP address
									╚ If the IP address matches, we return true and we can auto connect the user
									╚ # Step 4.0 else IP address not match
										╚ We delete the cookie from the database and from the user's browser
										╚ We return false
							╚ # Step 3.2 else cookie not exist in database
								╚ We delete the cookie from the user's browser if it exists
								╚ We return false
					
			*/
		/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */


		/* ▂ ▅ ▆ █    Methodes    █ ▆ ▅ ▂ */

			/* ▂ ▅ ▆ █ constructLoginForm( ) █ ▆ ▅ ▂ */
				public static function constructFormLoginAccount( ){
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

						/* ▂   Variables   ▂ */
						# Declaration of variables
							$action = 'App/Public/index.php?controller=home&action=loginAccount'; 
							$method = 'POST';
							$idForm = 'formLogin';
							$textBtn1 = 'Connection';
							$textBtn2 = 'Reset';
							$identifiantValue = "YannocH17";
							$passwordValue = "4550191Ym@";
							//$x= password_hash($passwordValue, PASSWORD_BCRYPT);
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
								$form -> addTitleForm( 'Title Form', 'h4', '- Connection/Créer un compte -', [ 'name'=>'', 'id'=>'', 'class'=>'titleForm fst-italic my-4' ] );
								/* @addDivClose( 'comment' ) */
								$form -> addDivClose( '' );
							/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂*/

							/* ▂ ▅ ▆ █  Div information user  █ ▆ ▅ ▂ */
								/* @addDivOpen( 'comment', [ list of attributs ] ) */
								$form -> addDivOpen( '',  ['id'=>'userMessage', 'class'=>''] );

								/* @addDivClose( 'comment' ) */
								$form -> addDivClose( '' );
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
											$form -> addInput('', [ 'type'=>'text', 'name'=>'identifiant', 'id'=>'identifiant', 'placeholder'=>'', 'minLength'=>'6', 'maxLength'=>'10', 'required'=>'required', 'pattern'=>$regex["identifiant"], 'regex'=>$regex["identifiant"], 'value'=>$identifiantValue, 'autofocus'=>'', 'class'=>'form-control ']);
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
									$form -> addSpan( '', '<i class="fa-solid fa-circle-info"></i>', [ 'id'=>'addon-identifiant', 'href'=>'#', 'class'=>'pictoInfo ', 'data-bs-toggle'=>'tooltip', 'data-bs-placement'=>'left', 'data-bs-html'=>'true', 'data-bs-custom-class'=>'custom-tooltip', 'data-bs-title'=>$tooltip["identifiant"] ]);
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
											$form -> addInput('', [ 'type'=>'text', 'name'=>'password', 'id'=>'password', 'placeholder'=>'', 'minLength'=>'10', 'maxLength'=>'10', 'required'=>'required', 'pattern'=>$regex["password"], 'regex'=>$regex["password"], 'value'=>$passwordValue, 'autofocus'=>'', 'class'=>'form-control ']);
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
									$form -> addSpan( '', '<i class="fa-solid fa-circle-info"></i>', [ 'id'=>'addon-password', 'href'=>'#', 'class'=>'pictoInfo ', 'data-bs-toggle'=>'tooltip', 'data-bs-placement'=>'left', 'data-bs-html'=>'true', 'data-bs-custom-class'=>'custom-tooltip', 'data-bs-title'=>$tooltip['password'] ]);
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

							/* ▂ ▅ ▆ █  Ancre :  create-account █ ▆ ▅ ▂ */
								/* @addDivOpen( 'comment', [ list of attributs ] ) */
								$form -> addDivOpen( '',  ['class'=>'d-flex flex-nowrap gap-2 align-items-center col-10 col-sm-10 col-lg-10 mb-4'] );
									/* @addAncre( 'comment', 'text de l'ancre',  [ list of attributs ] ) */
									$form -> addAncre('', 'Créer un compte', ['href'=>'create-account', 'class'=>'link-secondary  link-offset-2 link-offset-5-hover link-opacity-80 link-opacity-100-hover link-underline-danger link-underline-opacity-0 link-underline-opacity-100-hover fst-italic'] ); 
								/* @addDivClose( 'comment' ) */
								$form -> addDivClose();
							/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ */ 

							/* ▂ ▅ ▆ █  Ancre : Politique de confidentialité  █ ▆ ▅ ▂ */
								/* @addDivOpen( 'comment', [ list of attributs ] ) */
								$form -> addDivOpen( '',  ['class'=>'d-flex flex-nowrap gap-2 align-items-center col-10 col-sm-10 col-lg-10 mb-4'] );
									/* @addAncre( 'comment', 'text de l'ancre',  [ list of attributs ] ) */
									$form -> addAncre('', 'Politique de confidentialité', ['href'=>'#', 'class'=>'link-secondary  link-offset-2 link-offset-5-hover link-opacity-50 link-opacity-100-hover link-underline-danger link-underline-opacity-0 link-underline-opacity-100-hover fst-italic'] ); 
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


					/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */


			/* ▂ ▅ ▆ █ constructLoginForm( ) █ ▆ ▅ ▂ */
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
							$objRegex = new Regex();
							$tooltip = $objRegex -> readTooltip() -> getReadTooltip();
						/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ */

						/* ▂   Variables   ▂ */
						# Declaration of variables
							$action = 'App/Public/index.php?controller=home&action=addLoginAccount'; 
							$method = 'POST';
							$idForm = 'formLogin';
							$textBtn1 = 'Connection';
							$textBtn2 = 'Reset';
							$userNameValue = '';
							$userFirstNameValue = '';
							$userEmailValue = '';
							$userRecoveryCodeValue = '';
							$userAccessValue = '';

							$identifiantValue = "YannocH17";
							$passwordValue = "4550191Ym@";
							//$x= password_hash($passwordValue, PASSWORD_BCRYPT);
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
										$form -> addSpan( '', '', [ 'id'=>'pictoInput-userName', 'href'=>'#', 'class'=>'input-group-text ' ]);
										/*---------------------------- */
										/*-------- input ----------- */
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['class'=>'form-floating is-invalid'] );
											/* @addInput( 'comment', [ list of attributs ] ) */
											$form -> addInput('', [ 'type'=>'text', 'name'=>'userName', 'id'=>'userName', 'placeholder'=>'', 'minLength'=>'1', 'maxLength'=>'65535', 'required'=>'required', 'pattern'=>'???', 'value'=>$userNameValue, 'autofocus'=>'', 'class'=>'form-control ']);
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
									$textTooltip ='';
									$textTooltip ='<p class="text-center lh-1 fw-bold fst-italic text-decoration-underline"> - Doit Contenir - </p>';
									$textTooltip .='<p class="text-start mb-1 text-warning">-Nombre de caractères: mini 6, maxi 10 </p>';
									$textTooltip .='<p class="text-center mb-0 "> avec </p>';
									$textTooltip .='<p class="text-start mb-0 ps-2 text-warning"> -Mini une majuscule </p> ';
									$textTooltip .='<p class="text-start mb-0 ps-2 text-warning"> -Mini un chiffre </p> ';
									$textTooltip .='<p class="text-center mb-0 ps-2 "> Modèle: Chichoune69 </p>';
									/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
									$form -> addSpan( '', '<i class="fa-solid fa-circle-info"></i>', [ 'id'=>'addon-userName', 'href'=>'#', 'class'=>'pictoInfo ', 'data-bs-toggle'=>'tooltip', 'data-bs-placement'=>'left', 'data-bs-html'=>'true', 'data-bs-custom-class'=>'custom-tooltip', 'data-bs-title'=>$textTooltip ]);
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
										$form -> addSpan( '', '', [ 'id'=>'pictoInput-userFirstName', 'href'=>'#', 'class'=>'input-group-text ' ]);
										/*---------------------------- */
										/*-------- input ----------- */
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['class'=>'form-floating is-invalid'] );
											/* @addInput( 'comment', [ list of attributs ] ) */
											$form -> addInput('', [ 'type'=>'text', 'name'=>'userFirstName', 'id'=>'userFirstName', 'placeholder'=>'?????', 'minLength'=>'1', 'maxLength'=>'65535', 'required'=>'required', 'pattern'=>'???', 'value'=>$userFirstNameValue, 'autofocus'=>'', 'class'=>'form-control ']);
											/* @addLabel( 'comment', 'text', [ list of attributs ] ) */
											$form -> addLabel( '', '', [ 'id'=>'inputLabel-userFirstName', 'for'=>'userFirstName', 'class'=>'' ]);
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
									$textTooltip ='';
									$textTooltip ='<p class="text-center lh-1 fw-bold fst-italic text-decoration-underline"> - Doit Contenir - </p>';
									$textTooltip .='<p class="text-start mb-1 text-warning">-Nombre de caractères: mini 6, maxi 10 </p>';
									$textTooltip .='<p class="text-center mb-0 "> avec </p>';
									$textTooltip .='<p class="text-start mb-0 ps-2 text-warning"> -Mini une majuscule </p> ';
									$textTooltip .='<p class="text-start mb-0 ps-2 text-warning"> -Mini un chiffre </p> ';
									$textTooltip .='<p class="text-center mb-0 ps-2 "> Modèle: Chichoune69 </p>';
									/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
									$form -> addSpan( '', '<i class="fa-solid fa-circle-info"></i>', [ 'id'=>'addon-userFirstName', 'href'=>'#', 'class'=>'pictoInfo ', 'data-bs-toggle'=>'tooltip', 'data-bs-placement'=>'left', 'data-bs-html'=>'true', 'data-bs-custom-class'=>'custom-tooltip', 'data-bs-title'=>$textTooltip ]);
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
										$form -> addSpan( '', '', [ 'id'=>'pictoInput-userEmail', 'href'=>'#', 'class'=>'input-group-text ' ]);
										/*---------------------------- */
										/*-------- input ----------- */
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['class'=>'form-floating is-invalid'] );
											/* @addInput( 'comment', [ list of attributs ] ) */
											$form -> addInput('', [ 'type'=>'text', 'name'=>'userEmail', 'id'=>'userEmail', 'placeholder'=>'?????', 'minLength'=>'1', 'maxLength'=>'65535', 'required'=>'required', 'pattern'=>'???', 'value'=>$userEmailValue, 'autofocus'=>'', 'class'=>'form-control ']);
											/* @addLabel( 'comment', 'text', [ list of attributs ] ) */
											$form -> addLabel( '', '', [ 'id'=>'inputLabel-userEmail', 'for'=>'userEmail', 'class'=>'' ]);
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
									$textTooltip ='';
									$textTooltip ='<p class="text-center lh-1 fw-bold fst-italic text-decoration-underline"> - Doit Contenir - </p>';
									$textTooltip .='<p class="text-start mb-1 text-warning">-Nombre de caractères: mini 6, maxi 10 </p>';
									$textTooltip .='<p class="text-center mb-0 "> avec </p>';
									$textTooltip .='<p class="text-start mb-0 ps-2 text-warning"> -Mini une majuscule </p> ';
									$textTooltip .='<p class="text-start mb-0 ps-2 text-warning"> -Mini un chiffre </p> ';
									$textTooltip .='<p class="text-center mb-0 ps-2 "> Modèle: Chichoune69 </p>';
									/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
									$form -> addSpan( '', '<i class="fa-solid fa-circle-info"></i>', [ 'id'=>'addon-userEmail', 'href'=>'#', 'class'=>'pictoInfo ', 'data-bs-toggle'=>'tooltip', 'data-bs-placement'=>'left', 'data-bs-html'=>'true', 'data-bs-custom-class'=>'custom-tooltip', 'data-bs-title'=>$textTooltip ]);
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
										$form -> addSpan( '', '', [ 'id'=>'pictoInput-userRecoveryCode', 'href'=>'#', 'class'=>'input-group-text ' ]);
										/*---------------------------- */
										/*-------- input ----------- */
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['class'=>'form-floating is-invalid'] );
											/* @addInput( 'comment', [ list of attributs ] ) */
											$form -> addInput('', [ 'type'=>'text', 'name'=>'userRecoveryCode', 'id'=>'userRecoveryCode', 'placeholder'=>'?????', 'minLength'=>'1', 'maxLength'=>'65535', 'required'=>'required', 'pattern'=>'???', 'value'=>$userRecoveryCodeValue, 'autofocus'=>'', 'class'=>'form-control ']);
											/* @addLabel( 'comment', 'text', [ list of attributs ] ) */
											$form -> addLabel( '', '', [ 'id'=>'inputLabel-userRecoveryCode', 'for'=>'userRecoveryCode', 'class'=>'' ]);
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
									$textTooltip ='';
									$textTooltip ='<p class="text-center lh-1 fw-bold fst-italic text-decoration-underline"> - Doit Contenir - </p>';
									$textTooltip .='<p class="text-start mb-1 text-warning">-Nombre de caractères: mini 6, maxi 10 </p>';
									$textTooltip .='<p class="text-center mb-0 "> avec </p>';
									$textTooltip .='<p class="text-start mb-0 ps-2 text-warning"> -Mini une majuscule </p> ';
									$textTooltip .='<p class="text-start mb-0 ps-2 text-warning"> -Mini un chiffre </p> ';
									$textTooltip .='<p class="text-center mb-0 ps-2 "> Modèle: Chichoune69 </p>';
									/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
									$form -> addSpan( '', '<i class="fa-solid fa-circle-info"></i>', [ 'id'=>'addon-userRecoveryCode', 'href'=>'#', 'class'=>'pictoInfo ', 'data-bs-toggle'=>'tooltip', 'data-bs-placement'=>'left', 'data-bs-html'=>'true', 'data-bs-custom-class'=>'custom-tooltip', 'data-bs-title'=>$textTooltip ]);
									/*---------------------------- */
								/* @addDivClose( 'comment' ) */
								$form -> addDivClose( '' );
							/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂*/

							/* ▂ ▅ ▆ █  Input group : - userAccess -  █ ▆ ▅ ▂ */
								/* @addDivOpen( 'comment', [ list of attributs ] ) */
								$form -> addDivOpen( '',  ['class'=>'d-flex flex-nowrap gap-2 align-items-center col-10 col-sm-10 col-lg-10 mb-2'] );
									/* @addDivInputGroupFormFloatingOpen( 'comment', [ list of attributs ] ) */
									$form -> addDivInputGroupFormFloatingOpen( '',  ['class'=>'input-group align-content-center has-validation'] );
										/*-------- Picto input ----------- */
										/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
										$form -> addSpan( '', '', [ 'id'=>'pictoInput-userAccess', 'href'=>'#', 'class'=>'input-group-text ' ]);
										/*---------------------------- */
										/*-------- input ----------- */
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['class'=>'form-floating is-invalid'] );
											/* @addInput( 'comment', [ list of attributs ] ) */
											$form -> addInput('', [ 'type'=>'int', 'name'=>'userAccess', 'id'=>'userAccess', 'placeholder'=>'?????', 'minLength'=>'1', 'maxLength'=>'', 'required'=>'required', 'pattern'=>'???', 'value'=>$userAccessValue, 'autofocus'=>'', 'class'=>'form-control ']);
											/* @addLabel( 'comment', 'text', [ list of attributs ] ) */
											$form -> addLabel( '', '', [ 'id'=>'inputLabel-userAccess', 'for'=>'userAccess', 'class'=>'' ]);
										/* @addDivClose( 'comment' ) */
										$form -> addDivClose( '' );
										/*---------------------------- */
										/*-------- FeedBack ----------- */
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['id'=>'feedback-userAccess', 'class'=>'invalid-feedback'] );
										/* @addDivClose( 'comment' ) */
										$form -> addDivClose( '' );
										/*---------------------------- */
									/* @addDivInputGroupFormFloatingClose( 'comment' ) */
									$form -> addDivInputGroupFormFloatingClose( '' );
									/*-------- Tooltip ----------- */
									$textTooltip ='';
									$textTooltip ='<p class="text-center lh-1 fw-bold fst-italic text-decoration-underline"> - Doit Contenir - </p>';
									$textTooltip .='<p class="text-start mb-1 text-warning">-Nombre de caractères: mini 6, maxi 10 </p>';
									$textTooltip .='<p class="text-center mb-0 "> avec </p>';
									$textTooltip .='<p class="text-start mb-0 ps-2 text-warning"> -Mini une majuscule </p> ';
									$textTooltip .='<p class="text-start mb-0 ps-2 text-warning"> -Mini un chiffre </p> ';
									$textTooltip .='<p class="text-center mb-0 ps-2 "> Modèle: Chichoune69 </p>';
									/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
									$form -> addSpan( '', '<i class="fa-solid fa-circle-info"></i>', [ 'id'=>'addon-userAccess', 'href'=>'#', 'class'=>'pictoInfo ', 'data-bs-toggle'=>'tooltip', 'data-bs-placement'=>'left', 'data-bs-html'=>'true', 'data-bs-custom-class'=>'custom-tooltip', 'data-bs-title'=>$textTooltip ]);
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

							/* ▂ ▅ ▆ █  Input group : - password compare-  █ ▆ ▅ ▂ */
								/* @addDivOpen( 'comment', [ list of attributs ] ) */
								$form -> addDivOpen( '',  ['class'=>'d-flex flex-nowrap gap-2 align-items-center col-10 col-sm-10 col-lg-10 mb-2'] );
									/* @addDivInputGroupFormFloatingOpen( 'comment', [ list of attributs ] ) */
									$form -> addDivInputGroupFormFloatingOpen( '',  ['class'=>'input-group align-content-center has-validation'] );
										/*-------- Picto input ----------- */
										/* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
										$form -> addSpan( '', '<i class="fa-solid fa-lock"></i>', [ 'id'=>'pictoInput-password-compare', 'href'=>'#', 'class'=>'input-group-text ' ]);
										/*---------------------------- */
										/*-------- input ----------- */
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['class'=>'form-floating is-invalid'] );
											/* @addInput( 'comment', [ list of attributs ] ) */
											$form -> addInput('', [ 'type'=>'text', 'name'=>'password-compare', 'id'=>'password-compare', 'placeholder'=>'', 'minLength'=>'10', 'maxLength'=>'10', 'required'=>'required', 'pattern'=>"^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\/@$!%*?&#])[A-Za-z\d\/@$!%*?&#]{10,11}$", 'regex'=>'password', 'value'=>$passwordValue, 'autofocus'=>'', 'class'=>'form-control ']);
											/* @addLabel( 'comment', 'text', [ list of attributs ] ) */
											$form -> addLabel( '', '', [ 'id'=>'inputLabel-password-compare', 'for'=>'password-compare', 'class'=>'' ]);
										/* @addDivClose( 'comment' ) */
										$form -> addDivClose( '' );
										/*---------------------------- */
										/*-------- FeedBack ----------- */
										/* @addDivOpen( 'comment', [ list of attributs ] ) */
										$form -> addDivOpen( '',  ['id'=>'feedback-password-compare', 'class'=>'invalid-feedback'] );
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
									$form -> addSpan( '', '<i class="fa-solid fa-circle-info"></i>', [ 'id'=>'addon-password-compare', 'href'=>'#', 'class'=>'pictoInfo ', 'data-bs-toggle'=>'tooltip', 'data-bs-placement'=>'left', 'data-bs-html'=>'true', 'data-bs-custom-class'=>'custom-tooltip', 'data-bs-title'=>$textTooltip ]);
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





			/* ▂ ▅ ▆ █ verifyLoginAccount( ) █ ▆ ▅ ▂ */
				public function verifyLoginAccount(){
					# Step 1.0 We define variables
					$otherMsgError = false;
					$endDateCookie = 60*60*24; // 1 day
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
					$regexFieldRequired=['identifiant'=>$pregMatch['identifiant'], 'password'=>$pregMatch['password'] ];  
					# Step 4.3 created setting array                         
					$setting = ['method'=>'POST', 'post'=>$postEncode, 'regexFieldRequired'=> $regexFieldRequired ]; 
					# Step 4.4 We call the function SecurityForm( $setting )
					$responseSecurityForm = $objSecurityForm -> SecurityForm( $setting ); 
					# Step 5.0 We verify $responseSecurityForm::array  
					# Step 5.1 If ! $responseSecurityForm['error']
					if( ! $responseSecurityForm['error'] ){

						/* ▂ ▅  Code   ▅ ▂ */
							# Step 5.2 We instantiate new object
							$objLoginAccountModel = new LoginAccountModel();
							# Step 5.3 We call $objLoginAccountModel->findJointIdentifiant( string $identifiant ) useraccount & loginaccount
							$loginAccountData = $objLoginAccountModel -> findJointByIdentifiant( $postEncode['identifiant'] );
							# Step 5.4 We verify if $loginAccountData exists
							if( $loginAccountData ){
								# Step 5.5 We verify the password
								if( password_verify( $postEncode['password'], $loginAccountData -> password ) ){
									# Step 5.6 We regenerate the session ID to prevent session fixation attacks
									session_regenerate_id(false);
									# Step 5.7 We store user information in the session
									$_SESSION['connected'] = "true";
									$_SESSION['UserInformation'] = array( 
										'idLoginAccount' => $loginAccountData -> idLoginAccount,
										'idUserAccount' => $loginAccountData -> idUserAccount,
										'userName' => $loginAccountData -> userName,
										'userFirstName' => $loginAccountData -> userFirstName,
										'userEmail' => $loginAccountData -> userEmail,
										'userAccess' => $loginAccountData -> userAccess
									);
									# Step 5.8 We check if the "Remember Me" checkbox is checked
									if (! isset($_COOKIE['rememberMe'])){
										if( isset( $postEncode['check-RememberMe'] ) && $postEncode['check-RememberMe'] === 'true' ){
											# Step 5.8.1 We instantiate the CookiesRememberModel() & CookiesRemember() class
											$objCookiesRememberModel = new CookiesRememberModel();
											$objCookiesRemember = new CookiesRemember();
											# Step 5.8.2 We generate a unique key for the user
											$randomKey = Key::createNewRandomKey();
											# Step 5.8.3 write the cookie in the database with the user ID and the generated key
											$cookie = array('ip' => $_SERVER['REMOTE_ADDR'],'idUserAccount' => $loginAccountData -> idUserAccount, 'idLoginAccount' => $loginAccountData -> idLoginAccount, 'endDate' => time() + ($endDateCookie) );
											# Step 5.8.4 We encrypt the cookie data using the generated key
											$cookieCrypted = Crypto::encrypt(json_encode($cookie), $randomKey);
											# Step 5.8.5 We store the generated key in the database associated with the user ID
											setcookie("rememberMe", $cookieCrypted, time() + ($endDateCookie), "/", $_ENV['DOMAINE'], true, true); // 1 day
											# Step 5.8.6 We hydrate the Cookies object
											$objCookiesRemember	-> hydrate( array( 
												'adressIp' => $_SERVER['REMOTE_ADDR'],
												'idUserAccount' => $loginAccountData -> idUserAccount ,
												'cookies' => $cookieCrypted,
												'randomKey' => $randomKey->saveToAsciiSafeString()
											) );
											# Step 5.8.7 We insert the cookie in the database
											$error = $objCookiesRememberModel -> create( $objCookiesRemember );
											if(!empty($error->errorText)){
												# Step 5.8.7 else password not correct
												$otherMsgError = true;     
												# We construct the variable $response
												# @ objUserInformation($type='', $textInfo='')
												$objCreateDivInformation = new CreateDivInformation('', "Error PDO: ".$error->errorText);
											};
										};
									};
								}else{
									# Step 5.5 else password not correct
									$otherMsgError = true;     
									# We construct the variable $response
									# @ objUserInformation($type='', $textInfo='')
									$objCreateDivInformation = new CreateDivInformation('', "Le mot de passe saisi n'est pas correct. Veuillez vérifier le password saisi s'il vous plaît." );
								};
		
							}else{
								# Step 5.4 else identifiant not found
								$otherMsgError = true;
								# We construct the variable $response
								# @ objUserInformation($type='', $textInfo='')
								$objCreateDivInformation = new CreateDivInformation('',"Nous ne trouvons pas cet utilisateur. Veuillez vérifier l'identifiant saisi s'il vous plaît." );
							};
						/* ▂▂▂▂▂▂▂▂▂▂▂ */
					};

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
								# @ objResponseJson($status='', $divtInfo='', $data='', $redirect='')
								$objResponseJson = new ResponseJson(true, '', '', 'home' );                                              
						};


						$response = $objResponseJson -> getResponse();
						echo(($response));
						// return ;
					/* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂  */ 



				}
			/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */


			/* ▂ ▅ ▆ █ verifyCookieRememberMe( ) █ ▆ ▅ ▂ */
				public function verifyCookieRememberMe(){
						# Step 1.0 We retrieve the cookie value
						if( isset($_COOKIE['rememberMe']) ){
							$cookieCrypted = $_COOKIE['rememberMe'];
							# Step 2.0 We call the model to search for the cookie value in the database
							$objCookiesRememberModel = new CookiesRememberModel();
							$cookieData = $objCookiesRememberModel -> findByCookie( $cookieCrypted );
							# Step 3.0 We verify if the cookie value exists in the database
							if( $cookieData ){
								# Step 4.0 We decrypt the cookie data using the generated key
								$data = Crypto::decrypt($cookieData->cookies, Key::loadFromAsciiSafeString( $cookieData->randomKey ));
								$dataArray = json_decode($data);
								# Step 5.0 We verify if the cookie has expired
								if( $dataArray -> endDate >= (time() ) ){
									# Step 6.0 We verify ip address cookie equals ip address user
									if($dataArray->ip == $_SERVER['REMOTE_ADDR']){
										# Step 7.0 We instantiate new object
										$objLoginAccountModel = new LoginAccountModel();
										# Step 7.1 We call $objLoginAccountModel->findJointIdentifiant( string $identifiant ) useraccount & loginaccount
										$loginAccountData = $objLoginAccountModel -> findJoinById( $dataArray -> idLoginAccount );
										if ( $loginAccountData ){
											session_regenerate_id(false);
											$_SESSION['connected'] = "true";
											$_SESSION['UserInformation'] = array( 
												'idLoginAccount' => $loginAccountData -> idLoginAccount,
												'idUserAccount' => $loginAccountData -> idUserAccount,
												'userName' => $loginAccountData -> userName,
												'userFirstName' => $loginAccountData -> userFirstName,
												'userEmail' => $loginAccountData -> userEmail,
												'userAccess' => $loginAccountData -> userAccess
											);
											return true;
										}else{
											# Step 7.1 else user not found
											$objCookiesRememberModel -> deleteByCookie( $cookieData -> idCookieRemember );
											setcookie("rememberMe", "", time() - 3600, "/", $_ENV['DOMAINE'], true, true); // delete cookie
											return false;
										};
									}else{
										# Step 6.0 else ip address cookie not equals ip address user
										$objCookiesRememberModel -> deleteByCookie( $cookieData -> idCookieRemember );
										setcookie("rememberMe", "", time() - 3600, "/", $_ENV['DOMAINE'], true, true); // delete cookie
										return false;
									}
								}else{
									# Step 5.0 else cookie expired
									$objCookiesRememberModel -> deleteByCookie( $cookieData -> idCookieRemember );
									setcookie("rememberMe", "", time() - 3600, "/", $_ENV['DOMAINE'], true, true); // delete cookie
									return false;
								};
							}else{
								# Step 3.0 else cookie not found in database
								setcookie("rememberMe", "", time() - 3600, "/", $_ENV['DOMAINE'], true, true); // delete cookie
								return false;
							};
						}else{
							# Step 2.0 else cookie not found
							return false;
						};
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 


			// /* ▂ ▅ ▆ █ createAccount ( ) █ ▆ ▅ ▂ */
			// 	public function createAccount(){


			// 	}
			// /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 


			/* ▂ ▅ ▆ █ addLoginAccount( ) █ ▆ ▅ ▂ */
				public function addLoginAccount(){

	
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

			/* ▂ ▅ ▆ █ update █ ▆ ▅ ▂ */
				public function updateLoginAccount($id){
	
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

			/* ▂ ▅ ▆ █ show █ ▆ ▅ ▂ */
				public function showLoginAccount($id){
	
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

			/* ▂ ▅ ▆ █ delete █ ▆ ▅ ▂ */
				public function deleteLoginAccount($id){
	
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

		/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */
	};
?>