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
		use App\Entities\LoginAccount;
		use App\Models\LoginAccountModel;

		#  Class RenderData & ResponseJson & CreateDivInformation
		use App\Core\RenderData\RenderData;
		use App\Core\RenderData\ResponseJson;
		use App\Core\RenderData\CreateDivInformation;

        # Class other
        use App\Core\Other\Session;
        use App\Core\Other\HeadData;

	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 


    /* ▂ ▅ ▆ █ Grafcet █ ▆ ▅ ▂ */
        /*
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


        */
    /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */


    /* ▂ ▅ ▆ █ Class █ ▆ ▅ ▂ */
        class HomeController extends Controller{
            /* ▂ ▅ ▆ █ Methodes █ ▆ ▅ ▂ */

                /* ▂ ▅  index()  ▅ ▂ */
                    Public function index(){
                        # Step 1.0 We instantiate new object
                        # @ $objHeadData( $author='', $keywords='', $description='',  )
                        $objHeadData = new HeadData();
                        # @ $objArrayRenderData($titrePage='', $ongletPage='', $forms='', $scriptJs='', $sheetCss='', $responce='')    
                        $objRenderData = new RenderData();   
                        # Step 2.0 We test $cookieMatch
                        $cookieMatch =false;                   
                        $cookieMatch = $this -> testRememenberMe();                        
                        if (! $cookieMatch ) {
                            # Step 3.0 We test $_SESSION['connected']
                            if(isset($_SESSION['connected']) && $_SESSION['connected'] == true){
                                # Step 3.1 set RenderData
                                $objRenderData -> setOngletText("API-Chichoune/Home");
                                $objRenderData -> setOther( "Bonjour " . $_SESSION["UserInformation"]["userFirstName"] );
                                # Step 3.2 We render the view
                                $this->render('home/index', ['HeadData' => $objHeadData, 'RenderData' => $objRenderData] );
                            } else {
                                # Step 3.0 else user not connected
                                header('location:login');             
                            };
                        }else{
                            # Step 2.1 else cookie exist and match, we set the session and render the view
                            $objRenderData -> setOngletText("API-Chichoune/Home");
                            $objRenderData -> setOther( "Bonjour " . $_SESSION["UserInformation"]["userFirstName"] . ", ravie de vous revoir");    
                            # Step 2.2 We render the view
                            $this->render('home/index', ['HeadData' => $objHeadData, 'RenderData' => $objRenderData] ); 
                        };

                    }
                /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */

                /* ▂ ▅  loginForm()  ▅ ▂ */
                private function testRememenberMe(){
                    $cookieMatch =false;
                    if((isset($_COOKIE['rememberMe'])) && (!empty($_COOKIE['rememberMe'])) ){
                    # Step 1.0 We instantiate new object
                    # @ $objLoginAccount = new LoginAccountController();
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
                /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */

                /* ▂ ▅  loginForm()  ▅ ▂ */
                    Public function loginForm(){
                            // $cookieMatch = $this -> testRememenberMe();
                            // if ( ! $cookieMatch ) {};
                                # Step 1.0 We instantiate new object
                                # @ $objHeadData( $author='', $keywords='', $description='',  )
                                $objHeadData = new HeadData();
                                # @ $objArrayRenderData($titrePage='', $ongletPage='', $forms='', $scriptJs='', $sheetCss='', $responce='')    
                                $objRenderData = new RenderData();
                                # Step 2.0 We root  
                                $form = $this->rootHome();
                                # Step 3.0 We set RenderData
                                $objRenderData -> setForms($form);
                                $objRenderData -> setOngletText("API-Chichoune/Login");
                                $objRenderData -> setSheetCss("App/Css/formLoginAccount.css");
                                $objRenderData -> setScriptJs("App/Js/scriptPage/formLoginAccount.js"); 
                                # Step 4.0 We render the view
                                $this-> render('login/login', ['HeadData' => $objHeadData, 'RenderData' => $objRenderData] ); 
                    }
                /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */

                /* ▂ ▅ ▆ █ loginAccount █ ▆ ▅ ▂ */
                    public function loginAccount(){
                        # Step 1.0 We instantiate new object
                        # @ $LoginAccountController()
                        $objLoginAccount = new LoginAccountController();
                        # Step 2.0 call $objLoginaccount->verifyLoginAccount()
                        $objLoginAccount -> verifyLoginAccount( );
                    }
                /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

                /* ▂ ▅  disconnect()  ▅ ▂ */
                    Public function disconnect(){
                        # Step 1.0 We start the session management
                        $objSession = new Session();
                        $objSession -> sessionDestroy();        
                        # Step 2.0 we redirect to login page
                        header('location:login');
                        exit();
                    }
                /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

                /* ▂ ▅  rootHome()  ▅ ▂ */
                    private function rootHome(){
                        # Step 1.0 We instantiate new object
                        # @ $LoginAccountController() 
                        $objLoginAccount = new LoginAccountController();
                        # Step 2.0 call $objLoginaccount->constructLoginForm()
                        $form = $objLoginAccount -> constructFormLoginAccount( );
                        return $form;
                    }
                /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

                /* ▂ ▅  createAccount()  ▅ ▂ */
                    function createAccount(){
                        # Step 1.0 We instantiate new object
                        # @ $objHeadData( $author='', $keywords='', $description='',  )
                        $objHeadData = new HeadData();
                        # @ $objArrayRenderData($titrePage='', $ongletPage='', $forms='', $scriptJs='', $sheetCss='', $responce='')    
                        $objRenderData = new RenderData();
                        # @ $LoginAccountController()
                        $objLoginAccount = new LoginAccountController();
                        $form = $objLoginAccount -> constructFormAddAccount( 'create' );


                        # Step 3.0 We set RenderData
                        $objRenderData -> setForms($form);
                        $objRenderData -> setOngletText("API-Chichoune/Create Account");
                        $objRenderData -> setSheetCss("App/Css/formCreateAccount.css");
                        $objRenderData -> setScriptJs("App/Js/scriptPage/formCreateAccount.js"); 
                        # Step 4.0 We render the view
                        $this-> render('createAccount/createAccount', ['HeadData' => $objHeadData, 'RenderData' => $objRenderData] ); 

                    }
                /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 




            /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 
        };
    /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */  
?>
