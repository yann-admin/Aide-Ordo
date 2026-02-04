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


        */
    /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */


    /* ▂ ▅ ▆ █ Class █ ▆ ▅ ▂ */
        class HomeController extends Controller{
            /* ▂ ▅ ▆ █ Methodes █ ▆ ▅ ▂ */

                /* ▂ ▅  index()  ▅ ▂ */
                    Public function index(){
                        //$_SESSION['connected'] = true;
                        # Step 2.0 We test $_SESSION['connected']
                        if(isset($_SESSION['connected']) && $_SESSION['connected'] == true){
                            # Step 1.0 We instantiate new object
                            # @ $objHeadData( $author='', $keywords='', $description='',  )
                            $objHeadData = new HeadData();
                            # @ $objArrayRenderData($titrePage='', $ongletPage='', $forms='', $scriptJs='', $sheetCss='', $responce='')    
                            $objRenderData = new RenderData(); 
                            # Step 2.0 set RenderData
                            $objRenderData -> setOngletText("API-Chichoune/Home");
                            # Step 3.0 We render the view
                            $this->render('home/index', ['HeadData' => $objHeadData, 'RenderData' => $objRenderData] );
                        } else {
                           header('location:login');                   
                        };
                    }
                /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */


                /* ▂ ▅  loginForm()  ▅ ▂ */
                    Public function loginForm(){
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
                        $verify = $objLoginAccount -> verifyLoginAccount( );
                        # Step 3.0 We test the return value
                        if($verify === true){

                        };



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

            /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 
        };
    /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */  
?>
