<?php
/* ▂ ▅ ▆ █ Information █ ▆ ▅ ▂ */
    /* Fichier controller database: api_chichoune - table: useraccount via constructor_Array_DataBase_SQL.php VERSION: 3.0.0*/ 
/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

/* ▂ ▅ ▆ █ NameSpace █ ▆ ▅ ▂ */
    namespace App\Controllers\User;
/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

/* ▂ ▅ ▆ █ Inclusion █ ▆ ▅ ▂ */
    # Class Controller
    use App\Controllers\Controller;

    # Class Form
    use App\Core\Form\Form;
    use App\Core\Form\Regex;
    use App\Core\Form\Token;
    use App\Core\Form\SecurityForm;

    # Class Entity & Models UserAccount
    use App\Entities\User\UserAccount;
    use App\Models\User\UserAccountModel;

    # Class Entity & Models CookiesRemember
    use App\Entities\User\CookiesRemember;
    use App\Models\User\CookiesRememberModel;

    #  Class RenderData & ResponseJson & CreateDivInformation
    use App\Core\RenderData\RenderData;
    use App\Core\RenderData\ResponseJson;
    use App\Core\RenderData\CreateDivInformation;

    # Class other
    use App\Core\Other\HeadData;
    use App\Core\Other\FooterData;

    # Class Crypto & Key
    use \Defuse\Crypto\Crypto;
    use \Defuse\Crypto\Key;
    require '../vendor/autoload.php';
    
/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

/* ▂ ▅  Writing Setters via toolbox  ▅ ▂ */
    # $objUserAccount = new UserAccountController();
    # $objUserAccountModel = new UserAccountModel();
/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */

/* ▂ ▅ ▆ █ Class █ ▆ ▅ ▂ */
class UserAccountController extends Controller{

/* ▂ ▅ ▆ █    Attributs    █ ▆ ▅ ▂ */

/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

/* ▂ ▅ ▆ █    Methodes    █ ▆ ▅ ▂ */

    /* ▂ ▅ ▆ █ show Login Form( ) █ ▆ ▅ ▂ */
    public function showLoginForm() {
        /* Files form : loginaccount via constructor_Forms.php VERSION: 3.0.0*/         
        # Step 1.0: We instantiate new object
        $objHeadData = new HeadData();
        $objFooterData = new FooterData();
        $objRenderData = new RenderData();
        $objRegex = new Regex();
        $form = new Form();

        /* ▂ ▅ ▆ █  Variables  █ ▆ ▅ ▂ */
        /* ▂   Regex   ▂ */
            $regex = $objRegex -> readRegex() -> getReadRegex();

        /* ▂   Tooltip   ▂ */
            $tooltip = $objRegex -> readTooltip() -> getReadTooltip();

        /* ▂   Pattern   ▂ */
            $pattern = $objRegex -> readPattern() -> getReadPattern();

        # Declaration of variables
        $action = 'App/Public/index.php?controller=User|UserAccount&action=testConnection';
        $method = 'POST';
        $idForm = 'formLogin';
        $textBtnSubmit = 'Connection <i class="fa-solid fa-paper-plane"></i>';
        $textBtnBack = 'Home <i class="fa-solid fa-house"></i>';
        $idLoginAccountValue = "";
        $identifiantValue = "yannocH17";
        $passwordValue = "455501991Ym@";
        //$x= password_hash($passwordValue, PASSWORD_BCRYPT);	
        $idUserAccountValue = "";
        /* ----------------------------*/
        # Declaration of array input
        //$arrayInputidLoginAccount=['minLength'=>'1', 'maxLength'=>'', 'required'=>'required', 'tooltip'=>$tooltip[' '], 'pattern'=>$pattern[' '], 'regex'=>$regex[' '], 'label'=>'', 'value'=>$idLoginAccountValue ];
        $arrayInputidentifiant=['minLength'=>'8', 'maxLength'=>'10', 'required'=>'required', 'tooltip'=>$tooltip['identifiant'], 'pattern'=>$pattern['identifiant'], 'regex'=>$regex['identifiant'], 'label'=>'Votre identifiant', 'value'=>$identifiantValue ];
        $arrayInputpassword=['minLength'=>'10', 'maxLength'=>'12', 'required'=>'required', 'tooltip'=>$tooltip['password'], 'pattern'=>$pattern['password'], 'regex'=>$regex['password'], 'label'=>'Votre mot de passe', 'value'=>$passwordValue ];
        //$arrayInputidUserAccount=['minLength'=>'1', 'maxLength'=>'', 'required'=>'required', 'tooltip'=>$tooltip[' '], 'pattern'=>$pattern[' '], 'regex'=>$regex[' '], 'label'=>'', 'value'=>$idUserAccountValue ];
        /* ---------------------------- */

        # Step 2.0: We build the form
        # We build the form
        $form -> addDivContainerFormOpen( [ 'name'=>'divForm-LoginaccountForm', 'id'=>'divForm-LoginaccountForm', 'class'=>'col-10 col-sm-5 col-lg-3 mb-3 py-3 text-center container-form-login' ] );
            /* @startForm( 'comment', [list of attributs] ) */
            $form -> startForm( 'startForm', [ 'name'=>'LoginaccountForm', 'id'=>$idForm, 'action'=>$action, 'method'=>$method, 'enctype'=>'multipart/form-data', 'class'=>'justify-content-center row validate',] );

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
                $form -> addDivOpen( '',  ['id'=>'Msg-form', 'class'=>''] );

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
                        $form -> addSpan( '', '<i class="fa-solid fa-user"></i>', [ 'id'=>'pictoInput-identifiant', 'href'=>'#', 'class'=>'input-group-text' ]);
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
                        /*-------- Picto input ----------- */
                        /* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
                        $form -> addSpan( '', '<i class="fa-solid fa-lock"></i>', [ 'id'=>'pictoInput-password', 'href'=>'#', 'class'=>'input-group-text' ]);
                        /*---------------------------- */
                        /*-------- input ----------- */
                        /* @addDivOpen( 'comment', [ list of attributs ] ) */
                        $form -> addDivOpen( '',  ['class'=>'form-floating is-invalid'] );
                            /* @addInput( 'comment', [ list of attributs ] ) */
                            $form -> addInput('', [ 'type'=>'password', 'name'=>'password', 'id'=>'password', 'placeholder'=>'', 'minLength'=>$arrayInputpassword['minLength'], 'maxLength'=>$arrayInputpassword['maxLength'], 'required'=>$arrayInputpassword['required'], 'pattern'=>$arrayInputpassword['pattern'], 'regex'=>$arrayInputpassword['regex'], 'value'=>$arrayInputpassword['value'], 'class'=>'form-control']);
                            /* @addLabel( 'comment', 'text', [ list of attributs ] ) */
                            $form -> addLabel( '', $arrayInputpassword['label'], [ 'id'=>'inputLabel-password', 'for'=>'password', 'class'=>'' ]);
                        /* @addDivClose( 'comment' ) */
                        $form -> addDivClose( '' );
                        /*---------------------------- */
                        
                        /*-------- Picto input ----------- */
                        /* @addSpan( 'comment', 'i or img', [ list of attributs ] ) */
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
                        $form -> addBtn( '', $textBtnSubmit, [ 'type'=>'submit', 'name'=>'submit', 'id'=>'submit','value'=>'submit', 'class'=>'btn btn-primary' ] );
                        /* @addBtn( 'comment', 'textBtn',[ list of attributs ] ) */
                        $form -> addBtn( '', $textBtnBack, [ 'type'=>'button', 'name'=>'back', 'id'=>'back', 'data-url'=>'home', 'value'=>'back', 'class'=>'btn btn-danger' ] );
                        /* @addBtn( 'comment', 'textBtn',[ list of attributs ] ) */
                        //$form -> addBtn( '', '<i class="fa-solid fa-broom"></i>', [ 'type'=>'button', 'name'=>'clear', 'id'=>'clear', 'value'=>'Reset', 'class'=>'btn btn-danger' ] );										
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
        // return $form;
        /* ▂ ▂ ▂ ▂ ▂ ▂ ▂ */

        # Step 3.0 We set RenderData
        $objRenderData->hydrate([
            'forms_' => $form,
            'ongletText_' => "Login - Chichoune Api",
            'sheetCss_' => "App/Css/formLoginAccount.css",
            'scriptJs_' => "App/Js/scriptPage/form-V3.js",
            'other_' => "Bienvenue sur la plateforme d'aide pour l'ordonnancement. \n Veuillez vous connecter pour accéder à votre espace personnalisé ou créer un compte si vous n'en avez pas encore.",
        ]);
        # Step 4.0 We render the view
        $this -> render('user/form', ['HeadData' => $objHeadData, 'RenderData' => $objRenderData, 'FooterData' => $objFooterData] ); 
        
    }

	/* ▂ ▅ ▆ █ test Connection( ) █ ▆ ▅ ▂ */
    public function testConnection() {
        # Step 1.0 We define variables
        $errorProcess = 0;
        $messageProcess = "";
        # Step 2.0 We instantiate new object
        $objSecurityForm = new SecurityForm();
        $objRegex = new Regex();
        $pregMatch = $objRegex -> readPregMatch() -> getReadPregMatch();

        # Step 3.0 We retrieve the $POST values ​​from the request
        $post=json_decode(file_get_contents('php://input'), true);
        # Step 4.0 SecurityForm()
        # Step 4.1 We encode XSS & Trim	$post Cleanup
        $postEncode = $objSecurityForm -> encode_XssTrim( $post );
        # Step 4.2 We create regex pattern list
        $regexFieldRequired=['identifiant'=>$pregMatch['identifiant'], 'password'=>$pregMatch['password'] ];  
        # Step 4.3 We create setting array                         
        $setting = ['method'=>'POST', 'post'=>$postEncode, 'regexFieldRequired'=> $regexFieldRequired ]; 
        # Step 4.4 We call the function SecurityForm( $setting )
        $responseSecurityForm = $objSecurityForm -> SecurityForm( $setting ); 
        # Step 5.0 We verify $responseSecurityForm::array  
            # Step 5.1 If ! $responseSecurityForm['errorSecurity']
			if( ! $responseSecurityForm['errorSecurity'] ){
                /* ▂ ▅ ▆ █ Code following function █ ▆ ▅ ▂ */
                    # Step code 1.0: We instantiate new object
                    $objUserAccountModel = new UseraccountModel(); 
                    # Step code 2.0: We call $objUserAccountModel->findJointIdentifiant( string $identifiant ) useraccount & loginaccount
                    $resultFind = $objUserAccountModel->findJointByIdentifiant( $postEncode['identifiant'] );
                    # Step code 3.0: We verify if $resultFind is not empty 
                    if( ! empty($resultFind) ){
                        # Step 4.0 We verify if the identifiant from the database match with the identifiant from the form
                        if($postEncode['identifiant'] === $resultFind -> identifiant ){
                            # Step code 5.0: We verify the password with password_verify( string $password, string $hash )  455501991Ym@
                            if( password_verify( $postEncode['password'], $resultFind -> password ) ){
                                # Step code 6.0: We set the session $_SESSION["UserInformation"] with the user information except the password
                                $_SESSION['connected'] = true;
                                $_SESSION['UserInformation'] = ['idLoginAccount' => $resultFind -> idLoginAccount,
                                                                'idUserAccount' => $resultFind -> idUserAccount,
                                                                'userName' => $resultFind -> userName,
                                                                'userFirstName' => $resultFind -> userFirstName,
                                                                'userEmail' => $resultFind -> userEmail,
                                                                'userAccess' => $resultFind -> userAccess ];
                                # Step code 7.0: We check if the "Remember Me" checkbox is checked
                                if (! isset($_COOKIE['rememberMe'])){
                                    # Step code 7.1 if "Remember Me" checkbox is checked we create a remember me cookie with a token and we save the token in the database with the idUserAccount
                                    if( isset($postEncode['check-RememberMe']) && $postEncode['check-RememberMe'] === 'on' ){
                                        $errorPdo = $this -> createRememberMe( $resultFind );
                                        # Step code 7.2 if not errorPdo during the creation of the remember me cookie
                                        if( ! $errorPdo){
                                            $errorProcess = 0;
                                            $messageProcess = "Vous êtes connecté avec succès. Vous allez être redirigé vers votre espace personnalisé." ;
                                        }else{
                                        # Step code 7.2 else errorPdo during the creation of the remember me cookie
                                            $errorProcess = 1;
                                            $messageProcess = "Une erreur est survenue lors de la création du cookie de connexion persistante. Veuillez réessayer s'il vous plaît." ;
                                            goto endProcess;                                            
                                        };
                                    };
                                };

                            }else{
                                # Step code 5.0: else password not match
                                $errorProcess = 1;
                                $messageProcess = "Le mot de passe saisi est incorrect. Veuillez vérifier le mot de passe saisi s'il vous plaît." ;
                                goto endProcess;
                            };
                        }else{
                          # Step code 4.0: else identifiant not match
                            $errorProcess = 1;
                            $messageProcess = "Nous ne trouvons pas cet utilisateur. Veuillez vérifier l'identifiant saisi s'il vous plaît." ;
                            goto endProcess;
                        };

                    }else{
                        # Step code 3.0: else identifiant not found
                        $errorProcess = 1;
                        $messageProcess = "Nous ne trouvons pas cet utilisateur. Veuillez vérifier l'identifiant saisi s'il vous plaît." ;
                        goto endProcess;
                    };
                /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */
            }else{
                # Step 5.1 else $responseSecurityForm['errorSecurity']
                $errorProcess = 1;
                $messageProcess = $responseSecurityForm['msgErrorSecurity'];
            };
        /* ▂ ▅ ▆ █  Bloc Response Fetch  █ ▆ ▅ ▂ */
            endProcess:
            $objResponseJson = new ResponseJson();
            $objCreateDivInformation = new CreateDivInformation();
            $objCreateDivInformation->setTextInfo( $messageProcess );
            /* Step 6.0 We set the response according to the error */
            switch($errorProcess){
                case 0: 
                # no error form security and no error in process
                    # We hydrate the object $objResponseJson
                    $objResponseJson->hydrate( array('status'=>true,
                                                    'div'=> '',
                                                    'msg'=>'', 
                                                    'data'=>'', 
                                                    'redirect'=>'home' ) );
                break;
                case 1:
                # error form security or error in process
                    # We hydrate the object $objResponseJson
                    $objResponseJson->hydrate( array('status'=>false, 
                                                    'div'=> 'Msg-form',
                                                    'msg'=>$objCreateDivInformation->getDanger(), 
                                                    'data'=>'', 
                                                    'redirect'=>'') );
                break;
                case 2:

                break;
            };
            echo(($objResponseJson -> getResponse()));
        /* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂  */ 

    }

    /* ▂ ▅ ▆ █  create RememberMe( $resultFind )  █ ▆ ▅ ▂ */
    private function createRememberMe( $resultFind ){
        # Step code 1.0 : We instantiate new object
        $objCookiesRememberModel = new CookiesRememberModel();
        $objCookiesRemember = new CookiesRemember();
        # Step code 2.0 : We create a random key with Key::createNewRandomKey() from defuse/php-encryption
        $randomKey = Key::createNewRandomKey();
        # Step code 3.0 : write the cookie in the database with the user ID and the generated key
        $cookie = [ 'ip' => $_SERVER['REMOTE_ADDR'],
                    'idUserAccount' => $resultFind -> idUserAccount, 
                    'idLoginAccount' => $resultFind -> idLoginAccount, 
                    'endDate' => time() + ($_ENV['END_DATE_REMEMBER_ME']) ];
        # Step code 4.0 : We encrypt the cookie data using the generated key          
        $cookieCrypted = Crypto::encrypt(json_encode($cookie), $randomKey);
        # Step code 5.0 : We cretate cookie remember me with the encrypted data and the expiration date
        setcookie("rememberMe", $cookieCrypted, (time() + $_ENV['END_DATE_REMEMBER_ME']), "/", $_ENV['DOMAINE'], true, true);
        # Step code 6.0 : We hydrate the Cookies object
        $objCookiesRemember	-> hydrate(['adressIp' => $_SERVER['REMOTE_ADDR'],
                                        'cookies' => $cookieCrypted,
                                        'randomKey' => $randomKey->saveToAsciiSafeString(),]);
        # Step code 7.0 : We save the cookie in the database
        $errorPdo = $objCookiesRememberModel -> create( $objCookiesRemember );
        return $errorPdo;

    }



    /* ▂ ▅ ▆ █  create Account(  )  █ ▆ ▅ ▂ */
    public function createAccount() {
        # Step 1.0 We instantiate new object
        $objHeadData = new HeadData();
        $objFooterData = new FooterData();
        $objRenderData = new RenderData();
        # Step 2.0 We call the function constructFormUserAccount( $mode ) with the mode "create" to build the form
        $form = $this->constructFormUserAccount('development');
        # Step 3.0 We set RenderData
        $objRenderData->hydrate([
            'forms_' => $form,
            'ongletText_' => "Créer un compte - Chichoune Api",
            'sheetCss_' => "App/Css/formCreateAccount.css",
            'scriptJs_' => "App/Js/scriptPage/form-V3.js",
            'other_' => "",
        ]);
        # Step 3.0 We render the view
        $this -> render('user/form', ['HeadData' => $objHeadData, 'RenderData' => $objRenderData, 'FooterData' => $objFooterData] ); 
    }

    /* ▂ ▅ ▆ █  construct Form User Account ( $mode )  █ ▆ ▅ ▂ */
    private function constructFormUserAccount( $mode ){
        # Step 1.0 We instantiate new object
        $objRegex = new Regex();
        $form = new Form();
        $objUserAccountModel = new UserAccountModel();

        /* ▂ ▅ ▆ █  Variables  █ ▆ ▅ ▂ */
        /* ▂   Regex   ▂ */
        $regex = $objRegex -> readRegex() -> getReadRegex();
        /* ▂   Tooltip   ▂ */
        $tooltip = $objRegex -> readTooltip() -> getReadTooltip();
        /* ▂   Pattern   ▂ */
        $pattern = $objRegex -> readPattern() -> getReadPattern();
        $method = 'POST';
        $idForm = 'formAccount';   
        $textBtnBack = 'Home <i class="fa-solid fa-house"></i>';
            
        # Step 2.0 We build the form
        switch($mode){
            case 'create':
                # code for create form
                $action = 'App/Public/index.php?controller=User|UserAccount&action=addAccount';
                $titleForm = 'Créer votre compte';
                $textBtnSubmit = 'Créer compte <i class="fa-solid fa-paper-plane"></i>';
            break;
            case 'update':
                # code for update form
                $action = 'App/Public/index.php?controller=User|UserAccount&action=updateAccount';
                $titleForm = 'Modifier votre compte';
                $textBtnSubmit = 'Modifier compte <i class="fa-solid fa-paper-plane"></i>';
                $userAccountData = $objUserAccountModel -> findById( $_SESSION['UserInformation']['idUserAccount'] ); 
            break;
            case 'development':
                # code for development form
                $action = 'App/Public/index.php?controller=User|UserAccount&action=addAccount';
                $titleForm = 'Créer votre compte';
                $textBtnSubmit = 'Créer compte <i class="fa-solid fa-paper-plane"></i>';
             break;
        };

        # We set the value of variables with the database if exist 
        if(isset($userAccountData)){
            $idLoginAccountValue = $userAccountData -> idLoginAccount;
            $idUserAccountValue = $userAccountData -> idUserAccount;
             $identifiantValue = $userAccountData -> identifiant;

            $userNameValue = $userAccountData -> userLastName;
            $userFirstNameValue = $userAccountData -> userFirstName;
            $userEmailValue = $userAccountData -> userEmail;
            $userRecoveryCodeValue = $userAccountData -> userRecoveryCode;
            $userAccessValue = $userAccountData -> userAccess;

            $passwordValue = $userAccountData -> password;
            
        }else{
            $idUserAccountValue = "";
            $userNameValue = "";
            $userFirstNameValue = "";
            $userEmailValue = "";
            $userRecoveryCodeValue = "";
            $userAccessValue = "";
            $idLoginAccountValue = "";
            $identifiantValue = "";
            $passwordValue = "";
            $passwordVerifyValue = "";
            $idUserAccountValue = "";
        };

        if($mode === 'development'){
            $idUserAccountValue = "";
            $userNameValue = "Martin";
            $userFirstNameValue = "Yann";
            $userEmailValue = "martin.yann@example.com";
            $userRecoveryCodeValue = "";
            $userAccessValue = "5";
            $idLoginAccountValue = "";
            $identifiantValue = "yannocH17";
            $passwordValue = "455501991Ym@";
            $passwordVerifyValue = "455501991Ym@";
            $idUserAccountValue = "";
        };


        # We Declaration of array input
            $arrayInputuserName=['minLength'=>'2', 'maxLength'=>'50', 'required'=>'required', 'tooltip'=>$tooltip['text'], 'pattern'=>$pattern['text'], 'regex'=>$regex['text'], 'label'=>'Votre nom', 'value'=>$userNameValue ];
            $arrayInputuserFirstName=['minLength'=>'2', 'maxLength'=>'50', 'required'=>'required', 'tooltip'=>$tooltip['text'], 'pattern'=>$pattern['text'], 'regex'=>$regex['text'], 'label'=>'Votre Prénom', 'value'=>$userFirstNameValue ];
            $arrayInputuserEmail=['minLength'=>'2', 'maxLength'=>'50', 'required'=>'required', 'tooltip'=>$tooltip['email'], 'pattern'=>$pattern['email'], 'regex'=>$regex['email'], 'label'=>'Votre adresse email', 'value'=>$userEmailValue ];
            $arrayInputuserRecoveryCode=['minLength'=>'1', 'maxLength'=>'50', 'required'=>'required', 'tooltip'=>$tooltip['text'], 'pattern'=>$pattern['text'], 'regex'=>$regex['text'], 'label'=>'Votre code de récupération', 'value'=>$userRecoveryCodeValue ];
            $arrayInputidentifiant=['minLength'=>'8', 'maxLength'=>'10', 'required'=>'required', 'tooltip'=>$tooltip['identifiant'], 'pattern'=>$pattern['identifiant'], 'regex'=>$regex['identifiant'], 'label'=>'Votre identifiant', 'value'=>$identifiantValue ];
            $arrayInputpassword=['minLength'=>'10', 'maxLength'=>'12', 'required'=>'required', 'tooltip'=>$tooltip['password'], 'pattern'=>$pattern['password'], 'regex'=>$regex['password'], 'label'=>'Votre mot de passe', 'value'=>$passwordValue ];
            $arrayInputpasswordVerify=['minLength'=>'10', 'maxLength'=>'12', 'required'=>'required', 'tooltip'=>$tooltip['password'], 'pattern'=>$pattern['password'], 'regex'=>$regex['password'], 'label'=>'Vérification mot de passe', 'value'=>$passwordVerifyValue ];

        # We build the form
        /* ▂ ▅ ▆ █  Header form  █ ▆ ▅ ▂ */
            $form -> addDivContainerFormOpen( [ 'name'=>'divForm-LoginaccountForm', 'id'=>'divForm-LoginaccountForm', 'class'=>'col-10 col-sm-5 col-lg-3 mb-3 py-3 text-center container-form-login' ] );
            /* @startForm( 'comment', [list of attributs] ) */
            $form -> startForm( 'startForm', [ 'name'=>'LoginaccountForm', 'id'=>$idForm, 'action'=>$action, 'method'=>$method, 'enctype'=>'multipart/form-data', 'class'=>'justify-content-center row validate', ] );        
            /* @addDivOpen( 'comment', [ list of attributs ] ) */
            $form -> addDivOpen( '',  ['class'=>''] );
                /* @addImageForm('comment', 'balise', 'text title, [list of attributs]) */
                $form -> addImageForm( '', '', [ 'name'=>'', 'id'=>'', 'src'=>'App/Images/LogoChichoune.png','class'=>'imageForm' ] );
            /* @addTitleForm('comment', 'balise', 'text title, [list of attributs]) */
            $form -> addTitleForm( 'Title Form', 'h4', $titleForm, [ 'name'=>'', 'id'=>'', 'class'=>'titleForm fst-italic my-4' ] );
            /* @addDivClose( 'comment' ) */
            $form -> addDivClose( '' );
        /* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂*/

        /* ▂ ▅ ▆ █  Div information user  █ ▆ ▅ ▂ */
            /* @addDivOpen( 'comment', [ list of attributs ] ) */
            $form -> addDivOpen( '',  ['id'=>'Msg-form', 'class'=>''] );

            /* @addDivClose( 'comment' ) */
            $form -> addDivClose( '' );
        /* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂*/ 

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

        /* ▂ ▂ ▂ ▂ ▂ Input HIdden in mode update ▂ ▂ ▂ ▂ ▂ ▂ ▂*/
            if( $mode != 'update' ){
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
                                $form -> addInput('', [ 'type'=>'password', 'name'=>'password', 'id'=>'password', 'placeholder'=>'', 'minLength'=>$arrayInputpassword['minLength'], 'maxLength'=>$arrayInputpassword['maxLength'], 'required'=>$arrayInputpassword['required'], 'pattern'=>$arrayInputpassword['pattern'], 'regex'=>$arrayInputpassword['regex'], 'value'=>$arrayInputpassword['value'], 'class'=>'form-control' ]);
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
                                $form -> addInput('', [ 'type'=>'password', 'name'=>'confirmPassword', 'id'=>'confirmPassword', 'placeholder'=>'', 'minLength'=>$arrayInputpasswordVerify['minLength'], 'maxLength'=>$arrayInputpasswordVerify['maxLength'], 'required'=>'required', 'pattern'=>$arrayInputpasswordVerify['pattern'], 'regex'=>$arrayInputpasswordVerify['regex'], 'value'=>$arrayInputpasswordVerify['value'], 'class'=>'form-control ']);
                                /* @addLabel( 'comment', 'text', [ list of attributs ] ) */
                                $form -> addLabel( '', $arrayInputpasswordVerify['label'], [ 'id'=>'inputLabel-confirmPassword', 'for'=>'confirmPassword', 'class'=>'' ]);
                            /* @addDivClose( 'comment' ) */
                            $form -> addDivClose( '' );
                            /*---------------------------- */
                            /*-------- Picto eye -----------*/
                            /* @addSpan( 'comment', 'i or img', [ list of attributs ] ) </i> */
                            $form -> addSpan( '', '<i class="fa-solid fa-eye"></i>', [ 'id'=>'confirmPassword-eye', 'href'=>'#', 'class'=>'input-group-text pictoEye' ]);
                            /*---------------------------- */
                            /*-------- FeedBack ----------- */
                            /* @addDivOpen( 'comment', [ list of attributs ] ) */
                            $form -> addDivOpen( '',  ['id'=>'feedback-confirmPassword', 'class'=>'invalid-feedback'] );
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
            };
        /* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂*/        

        /* ▂ ▅ ▆ █  Anti robot  █ ▆ ▅ ▂ */
            /* @addAntiRobot( 'value' ) */
            $form -> addAntiRobot( '' );
        /* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ */

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
                    $form -> addBtn( '', $textBtnSubmit, [ 'type'=>'submit', 'name'=>'submit', 'id'=>'submit','value'=>'submit', 'class'=>'btn btn-primary' ] );
                    /* @addBtn( 'comment', 'textBtn',[ list of attributs ] ) */
                    $form -> addBtn( '', $textBtnBack, [ 'type'=>'button', 'name'=>'back', 'id'=>'back', 'data-url'=>'home', 'value'=>'back', 'class'=>'btn btn-danger' ] );
                /* @addDivClose( 'comment' ) */
                $form -> addDivClose();
            /* @addDivClose( 'comment' ) */
            $form -> addDivClose();
        /* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ */

        /* ▂ ▅ ▆ █  Footer Form  █ ▆ ▅ ▂ */
            /* @endForm( 'comment' ) */
            $form -> endForm( 'endForm' );
            /* @addDivContainerFormClose( 'comment' ) */   
            $form -> addDivContainerFormClose();
        /* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ */       


        /* ▂ ▅ ▆ █  Bloc return form  █ ▆ ▅ ▂ */
            $form = $form -> getFormElements();
            return $form;
        /* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ */     

    }

   /* ▂ ▅ ▆ █  add Account ( )  █ ▆ ▅ ▂ */             
    public function addAccount() {
        # Step 1.0 We define variables
        $errorProcess = 0;
        $messageProcess = "";
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
                    # Step 5.0 We check the response of SecurityForm()
                    if( ! $responseSecurityForm['errorSecurityForm']){
                        /* ▂ ▅ ▆ █ Code following function █ ▆ ▅ ▂ */

                            # Step 5.1 We cretate code recovery 
                            $postEncode['userRecoveryCode'] = '';
                            for ($i=0; $i < 5 ; $i++) { 
                                $postEncode['userRecoveryCode'] .= rand(0,9);
                            };
                            $postEncode['userAccess'] = 1;
                            $postEncode['password'] = password_hash($postEncode['password'], PASSWORD_BCRYPT);
                            # Step 5.2 We instantiate new object
                            $objUserAccountModel = new UserAccountModel();
                            $objUserAccount = new UserAccount();
                            # Step 5.3 We verify if the email exist in database with the function getUserAccountByEmail( $email )
                            # @ duplicateCheck( $ColumnName, $Value )
                            $emailExist = $objUserAccountModel -> duplicateCheck('userEmail', $postEncode['userEmail'] );
                            if( ! $emailExist ){
                                # Step 5.5 We hydrate the object $objUserAccount with the function hydrate( $arrayData )
								$objUserAccount -> hydrate( $postEncode );
                                # Step 5.6 We create a new user account in database with the function createUserAccount( $objUserAccount )
                                $errorPdo = $objUserAccountModel -> createJoint( $objUserAccount );
                                # Step 5.7 We check if the function createUserAccount( $objUserAccount ) return an error
                                if( ! $errorPdo ){
                                    $errorProcess = 0;
                                    $messageProcess = 'Votre compte a été créé avec succès' ;
                                    goto endProcess;
                                }else{
                                    $errorProcess = 1;
                                    $messageProcess = 'Une erreur est survenue lors de la création de votre compte' ;
                                    goto endProcess;
                                };
                            }else{
                                $errorProcess = 1;
                                $messageProcess = 'Cette adresse email est déjà utilisée' ;
                                goto endProcess;
                            };
                        /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */
					}else{
						# Step 5.1 else $responseSecurityForm['error']
						$errorProcess = 1;
						$messageProcess = $responseSecurityForm['msgSecurityForm'];
					};

        /* ▂ ▅ ▆ █  Bloc Response Fetch  █ ▆ ▅ ▂ */
            endProcess:
            $objResponseJson = new ResponseJson();
            $objCreateDivInformation = new CreateDivInformation();
            $objCreateDivInformation->setTextInfo( $messageProcess );
            /* Step 6.0 We set the response according to the error */
            switch($errorProcess){
                case 0: 
                # no error form security and no error in process
                    # We hydrate the object $objResponseJson
                    $objResponseJson->hydrate( array('status_'=>true,
                                                    'div'=> 'Msg-form',
                                                    'msg'=>$objCreateDivInformation->getSuccess(), 
                                                    'data_'=>'', 
                                                    'redirect_'=>'' ) );
                break;
                case 1:
                # error form security or error in process
                    # We hydrate the object $objResponseJson
                    $objResponseJson->hydrate( array('status_'=>false, 
                                                    'div'=> 'Msg-form',
                                                    'msg'=>$objCreateDivInformation->getDanger(), 
                                                    'data'=>'', 
                                                    'redirect'=>'') );
                break;
                case 2:

                break;
            };
            echo(($objResponseJson -> getResponse()));
        /* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂  */ 


    }

    /* ▂ ▅ ▆ █ verifyCookieRememberMe( ) █ ▆ ▅ ▂ */
    public function verifyCookieRememberMe(){
						# Step 1.0 We retrieve the cookie value
						if( isset($_COOKIE['rememberMe']) ){
							$cookieCrypted = $_COOKIE['rememberMe'];
                            # Step 1.1 We instantiate new object
                            $objCookiesRememberModel = new CookiesRememberModel();
                            $cookieData = $objCookiesRememberModel -> findByCookie( $cookieCrypted );
                            # Step 2.0 We check if the function findByCookie( $cookieCrypted ) return data
                            if( $cookieData ){
                                # Step 2.1 We decrypt the cookie data using the generated key
                                $cookieDecryptJson = Crypto::decrypt($cookieData->cookies, Key::loadFromAsciiSafeString( $cookieData->randomKey ));
                                $cookieDecrypt = json_decode($cookieDecryptJson);
                                # Step 3.0 We verify if the cookie has expired
                                if( $cookieDecrypt -> endDate >= (time() ) ){
                                    # Step 4.0 We verify ip address cookie equals ip address user
                                    if($cookieDecrypt -> ip == $_SERVER['REMOTE_ADDR']){
                                        # Step 4.1 We instantiate new object
                                        $objUserAccountModel = new UserAccountModel();
                                        # Step 4.2 We call $objUserAccountModel->findJointById( int $id ) useraccount & loginaccount
                                        $userData = $objUserAccountModel -> findJointById( $cookieDecrypt -> idUserAccount );
                                        # Step 4.3 We check if the function findJointById( int $id ) return data
                                        if( $userData ){
                                            # Step 5.0 We regenerate session id
                                            session_regenerate_id(false);
                                            # Step 5.1 We set $_SESSION['connected']
                                            $_SESSION['connected'] = true;
                                            # Step 5.2 We set $_SESSION['UserInformation'] 
											$_SESSION['UserInformation'] = ['idLoginAccount' => $userData -> idLoginAccount,
                                                                            'idUserAccount' => $userData -> idUserAccount,
                                                                            'userName' => $userData -> userName,
                                                                            'userFirstName' => $userData -> userFirstName,
                                                                            'userEmail' => $userData -> userEmail,
                                                                            'userAccess' => $userData -> userAccess ];
											return true;
                                        }else{
                                            # Step 4.3 else function deleteByCookie( $cookieData -> idCookieRemember ) and return false
                                            $objCookiesRememberModel -> deleteByCookie( $cookieData -> idCookieRemember );
                                            return false;
                                        };

                                    }else{
                                        # Step 4.0 else function deleteByCookie( $cookieData -> idCookieRemember ) and return false
                                        $objCookiesRememberModel -> deleteByCookie( $cookieData -> idCookieRemember );
                                        return false;
                                    };

                                }else{
                                    # Step 3.0 else function deleteByCookie( $cookieData -> idCookieRemember ) and return false
                                    $objCookiesRememberModel -> deleteByCookie( $cookieData -> idCookieRemember );
                                    return false;
                                };

                            }else{
                                # Step 2.0 else function findByCookie( $cookieCrypted ) not return data
								setcookie("rememberMe", "", time() - 3600, "/", $_ENV['DOMAINE'], true, true); // delete cookie
								return false;
                            }

						}else{
							# Step 1.0 else cookie not found
							return false;
						};

    }



/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 
};

?>