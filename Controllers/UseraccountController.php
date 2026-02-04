<?php
	/* ▂ ▅ ▆ █ Information █ ▆ ▅ ▂ */
		/* Fichier controller database: api_chichoune - table: useraccount via constructor_Array_DataBase_SQL.php VERSION: 3.0.0*/ 
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅ ▆ █ NameSpace █ ▆ ▅ ▂ */
		namespace App\Controllers;
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅ ▆ █ Inclusion █ ▆ ▅ ▂ */
		use App\Core\Form\Form;
		use App\Core\Form\Token;
		use App\Entities\Useraccount;
		use App\Models\UseraccountModel;
		# Class other
		use App\Core\RenderData\RenderData;
		use App\Core\RenderData\ResponseJson;
		use App\Core\RenderData\CreateDivInformation;
		use App\Core\Form\SecurityForm;
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅ ▆ █ Class █ ▆ ▅ ▂ */
	class UseraccountController extends Controller{
		/* ▂ ▅ ▆ █    Attributs    █ ▆ ▅ ▂ */
		/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

		/* ▂ ▅ ▆ █    Methodes    █ ▆ ▅ ▂ */
			/* # lexicon 
				grafcet
				╬═ ( if ... )
				║   ╚═ Step 1 ...
				║
			*/
		/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

		/* ▂ ▅ ▆ █ index █ ▆ ▅ ▂ */
			public function indexUseraccount(){
 
 			}
 		/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

			/* ▂ ▅  Writing Setters via toolbox  ▅ ▂ */
				# $objUseraccount = new UseraccountController();
				# $objUseraccountModel = new UseraccountModel();
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

		/* ▂ ▅ ▆ █ autre █ ▆ ▅ ▂ */
			/*
 			public function AUTREUseraccount(){
 
 			}
 			*/
 		/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	};
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */
?>