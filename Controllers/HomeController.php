<?php
    /* ▂ ▅ ▆ █ Information █ ▆ ▅ ▂ */
    
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

    /* ▂ ▅ ▆ █ NameSpace █ ▆ ▅ ▂ */
	    namespace App\Controllers;
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅ ▆ █ Inclusion █ ▆ ▅ ▂ */
		# Class Form
		// use App\Core\Form\Form;
		// use App\Core\Form\Token;
		// use App\Core\Form\SecurityForm;

		# Class Controller & Entity & Models UserAccount
        use App\Controllers\User\LoginAccountController;
        use App\Controllers\User\UserAccountController;
		use App\Entities\LoginAccount;
		use App\Models\LoginAccountModel;


		#  Class RenderData & ResponseJson & CreateDivInformation
		use App\Core\RenderData\RenderData;
		use App\Core\RenderData\ResponseJson;
		use App\Core\RenderData\CreateDivInformation;

        # Class other
        use App\Core\Other\Session;
        use App\Core\Other\HeadData;
        use App\Core\Other\FooterData;

	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

        /* ▂ ▅ ▆ █ Grafcet █ ▆ ▅ ▂ */
        /*
            # Class HomeController
                ╚ function index()
                ╚ function testRememenberMe()
                ╚ function loginForm()
                ╚ function loginAccount()
                ╚ function disconnect()
                ╚ function rootHome()
                ╚ function createAccount()

            # function index()
                ╚ Step 1.0 We instantiate new object
                ╚ Step 2.0 We test $cookieMatch
                ╚ Step 3.0 We test $_SESSION['connected']
                    ╚ Step 3.1 set RenderData
                    ╚ Step 3.2 We render the view
                ╚ Step 3.0 else user not connected
                ╚ Step 4.0 else cookie exist and match, we set the session and render the view

            # function testRememenberMe()
                ╚ Step 1.0 We instantiate new object
                ╚ Step 2.0 call $objLoginaccount->verifyCookieRememberMe( string $cookieCrypted )
                ╚ Step 3.0 else cookie not exist or empty

            # function loginForm()
                ╚ Step 1.0 We instantiate new object
                ╚ Step 2.0 We root  
                ╚ Step 3.0 We set RenderData
                ╚ Step 4.0 We render the view

            # function loginAccount()
                ╚ Step 1.0 We instantiate new object
                ╚ Step 2.0 call $objLoginaccount->verifyLoginAccount()
                
            # function disconnect()
                ╚ Step 1.0 We start the session management
                ╚ Step 2.0 we redirect to login page

            # function rootHome()
                ╚ Step 1.0 We instantiate new object
                ╚ Step 2.0 call $objLoginaccount->constructLoginForm()
                ╚ return $form;

            # function createAccount()



    /* ▂ ▅ ▆ █ Class █ ▆ ▅ ▂ */
        class HomeController extends Controller{
            /* ▂ ▅ ▆ █ Methodes █ ▆ ▅ ▂ */

            /* ▂ ▅  index()  ▅ ▂ */
            Public function index(){
                # Step 1.0 We instantiate new object
                $objHeadData = new HeadData();
                $objFooterData = new FooterData();
                $objRenderData = new RenderData(); 
                # Step 2.0 We test $cookieMatch
                $cookieMatch = $this->testRememenberMe();
                # Step 3.0 We test $_SESSION['connected']
                if (! $cookieMatch ) {
                    # Step 3.1 set RenderData
                    if(isset($_SESSION['connected']) && $_SESSION['connected'] == true){
                        $objRenderData->hydrate([
                            'ongletText_' => "Accueil - Chichoune Api",
                            'other_' => "Bonjour et Bienvenue " . $_SESSION["UserInformation"]["userFirstName"] . " ",
                        ]);
                        # Step 3.2 We render the view
                        $this->render('home/index', ['HeadData' => $objHeadData, 'RenderData' => $objRenderData, 'FooterData' => $objFooterData] );
                    }else{
                        # Step 3.0 else user not connected
                        header('location:login');
                        exit(); 
                    };
                }else{
                    # Step 2.1 else cookie exist and match, we set the session and render the view
                    $objRenderData->hydrate([
                        'ongletText_' => "Accueil - Chichoune Api",
                        'other_' => "Bonjour et Bienvenue " . $_SESSION["UserInformation"]["userFirstName"] . " ",
                    ]);
                    # Step 3.2 We render the view
                    $this->render('home/index', ['HeadData' => $objHeadData, 'RenderData' => $objRenderData, 'FooterData' => $objFooterData] );
                };
            }

            /* ▂ ▅  testRememenberMe()  ▅ ▂ */
            private function testRememenberMe(){
                $cookieMatch =false;
                if((isset($_COOKIE['rememberMe'])) && (!empty($_COOKIE['rememberMe'])) ){
                # Step 1.0 We instantiate new object
                $objLoginAccount = new LoginAccountController();
                # Step 2.0 call $objLoginaccount->verifyCookieRememberMe( string $cookieCrypted )
                $cookieMatch = $objLoginAccount -> verifyCookieRememberMe( $_COOKIE['rememberMe'] );
                return $cookieMatch;
                }else{
                    # Step 3.0 else cookie not exist or empty 
                    $cookieMatch = false;    
                    return $cookieMatch;
                };
            }

            /* ▂ ▅  loginForm()  ▅ ▂ */
            public function loginForm(){
                # Step 1.0 We instantiate new object
                $objHeadData = new HeadData();    
                $objFooterData = new FooterData();
                $objRenderData = new RenderData();
                $objLoginAccount = new LoginAccountController();
                # Step 2.0 We root  
                $form = $objLoginAccount -> constructFormLoginAccount( );
                # Step 3.0 We set RenderData
                $objRenderData->hydrate([
                    'forms_' => $form,
                    'ongletText_' => "Login - Chichoune Api",
                    'sheetCss_' => "App/Css/formLoginAccount.css",
                    'scriptJs_' => "App/Js/scriptPage/form-V3.js",
                    'other_' => "Bienvenue sur la plateforme d'assistance et de support de l'ordonnancement. \n Veuillez vous connecter pour accéder à votre espace personnalisé ou créer un compte si vous n'en avez pas encore.",
                ]);
                # Step 4.0 We render the view
                $this-> render('login/login', ['HeadData' => $objHeadData, 'RenderData' => $objRenderData, 'FooterData' => $objFooterData] ); 
            }

            /* ▂ ▅ ▆ █ loginAccount █ ▆ ▅ ▂ */
            public function loginAccount(){
                # Step 1.0 We instantiate new object
                $objLoginAccount = new LoginAccountController();
                # Step 2.0 call $objLoginaccount->verifyLoginAccount()
                $objLoginAccount -> verifyLoginAccount( );
            }

            /* ▂ ▅  disconnect()  ▅ ▂ */
            Public function disconnect(){
                # Step 1.0 We start the session management
                $objSession = new Session();
                $objSession -> sessionDestroy();        
                # Step 2.0 we redirect to login page
                header('location:login');
                exit();
            }

            /* ▂ ▅  createAccount()  ▅ ▂ */
            function createAccount(){
                # Step 1.0 We instantiate new object
                $objHeadData = new HeadData();
                $objFooterData = new FooterData();
                $objRenderData = new RenderData();
                $objUserAccount = new UserAccountController();
                $form = $objUserAccount -> constructFormAddAccount( 'create' );
                # Step 3.0 We set RenderData
                $objRenderData->hydrate([
                    'forms_' => $form,
                    'ongletText_' => "API-Chichoune/Create Account",
                    'sheetCss_' => "App/Css/formCreateAccount.css",
                    'scriptJs_' => "App/Js/scriptPage/form-V3.js",
                ]);
                # Step 4.0 We render the view
                $this-> render('login/login', ['HeadData' => $objHeadData, 'RenderData' => $objRenderData, 'FooterData' => $objFooterData] ); 

            }

            /* ▂ ▅  addAccount()  ▅ ▂ */
            function addAccount(){
                # Step 1.0 We instantiate new object
                $objUserAccount = new UserAccountController();
                $objUserAccount -> addUseraccount();
            }
        };

?>