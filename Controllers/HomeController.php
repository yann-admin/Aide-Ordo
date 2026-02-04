<?php
    /* ▂ ▅ ▆ █ Information █ ▆ ▅ ▂ */
    
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

    /* ▂ ▅ ▆ █ NameSpace █ ▆ ▅ ▂ */
	    namespace App\Controllers;
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅ ▆ █ Inclusion █ ▆ ▅ ▂ */
        use App\Core\RenderData\RenderData;
        use App\Controllers\LoginaccountController;

        # Class other
        use App\Core\Other\Session;
        use App\Core\Other\HeadData;

	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 


/* ▂ ▅ ▆ █ Grafcet █ ▆ ▅ ▂ */
    /*
        # function index()
        # │  ╚ Step 1.0 We instantiate new object
        # │     ╬═ $objHeadData( $author='', $keywords='', $description='',  )
        # │     ╬═ $objArrayRenderData($titrePage='', $ongletPage='', $forms='', $scriptJs='', $sheetCss='', $responce='')    
        # │     ╬═ $objLoginaccount()
        # │  ╠═ ( if $_SESSION['connected'] == true )
        # │  ║   ╚═ Step 2.1 set RenderData
        # │  ║       ╚═ Step 2.2 We render the view
        # │  ║  ╚═ ( else )
        # │  ║       ╚═ Step 2.3 We root  
        # │  ║           ╚═ Step 2.4 We set RenderData
        # │  ║               ╚═ Step 2.5 We render the view


        # function disconnect()
        # │      ╚ Step 1.0 We destroy the session

        # function rootHome()
        # │      ╚ Step 1.0 We instantiate new object
        # │         ╚ Step 2.0 call $objLoginaccount->constructLoginaccountForm()
        # │             ╚ return $form;   





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


                        # Step 2.0 We test $_SESSION['connected']
                        // $_SESSION['connected'] = true;
                        if(isset($_SESSION['connected']) && $_SESSION['connected'] == true){
                            # Step 2.1 set RenderData
                            $objRenderData -> setOngletText("API-Chichoune/Home");
                            # Step 2.2 We render the view
                            $this->render('home/index', ['HeadData' => $objHeadData, 'RenderData' => $objRenderData] );

                        } else {
                            # Step 2.3 We root  
                            $form = $this->rootHome();
                            # Step 2.4 We set RenderData
                            $objRenderData -> setForms($form);
                            $objRenderData -> setOngletText("API-Chichoune/Login");
                            $objRenderData -> setSheetCss("App/Css/formLoginAccount.css");
                            $objRenderData -> setScriptJs("App/Js/scriptPage/formLoginAccount.js"); 
                            # Step 2.5 We render the view
                            $this-> render('login/login', ['HeadData' => $objHeadData, 'RenderData' => $objRenderData] );
                            exit();                            
                        };
                    }
                /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */

                /* ▂ ▅  disconnect()  ▅ ▂ */
                    Public function disconnect(){

                    }
                /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

                /* ▂ ▅  rootHome()  ▅ ▂ */
                    private function rootHome(){
                        # Step 1.0 We instantiate new object
                        # @ $objLoginaccount() 
						$objLoginaccount = new LoginaccountController();
                        # Step 2.0 call $objLoginaccount->constructLoginaccountForm()
                        $form = $objLoginaccount->constructLoginaccountForm( );

                        return $form;

                    }
                /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

            /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 
        };
    /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */  
?>
