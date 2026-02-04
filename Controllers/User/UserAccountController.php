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