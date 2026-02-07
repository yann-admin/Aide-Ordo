<?php
	/* ▂ ▅ ▆ █ Information █ ▆ ▅ ▂ */
		/* Fichier entities database: api_chichoune - table: useraccount via constructor_Array_DataBase_SQL.php VERSION: 3.0.0*/ 
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅ ▆ █ NameSpace █ ▆ ▅ ▂ */
		namespace App\Entities\User;
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅ ▆ █ Inclusion █ ▆ ▅ ▂ */
		use PDO;
		use Exception;
		# Class other
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅ ▆ █ Class █ ▆ ▅ ▂ */
	class UserAccount{
		/* ▂ ▅ Attributs ▅ ▂ */
			protected $idUserAccount_;
			protected $userName_;
			protected $userFirstName_;
			protected $userEmail_;
			protected $userRecoveryCode_;
			protected $userAccess_;
		/* ▂▂▂▂▂▂▂▂▂▂▂ */

		/* ▂ ▅  copy and paste in the code  ▅ ▂ */
			# $objUserAccountModel = new UserAccountModel();
			# $objUserAccount = new UserAccount();
			# -  $objUserAccount -> setIdUserAccount($_POST['IdUserAccount']);
			# -  $objUserAccount -> setUserName($_POST['UserName']);
			# -  $objUserAccount -> setUserFirstName($_POST['UserFirstName']);
			# -  $objUserAccount -> setUserEmail($_POST['UserEmail']);
			# -  $objUserAccount -> setUserRecoveryCode($_POST['UserRecoveryCode']);
			# -  $objUserAccount -> setUserAccess($_POST['UserAccess']);

			# -  $objUserAccount -> getIdUserAccount();
			# -  $objUserAccount -> getUserName();
			# -  $objUserAccount -> getUserFirstName();
			# -  $objUserAccount -> getUserEmail();
			# -  $objUserAccount -> getUserRecoveryCode();
			# -  $objUserAccount -> getUserAccess();

		/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */

		/* ▂ ▅  construct  ▅ ▂ */
			/* @ $objUserAccount( $idUserAccount='', $userName='', $userFirstName='', $userEmail='', $userRecoveryCode='', $userAccess='',  ) */
			public function __construct( $idUserAccount='', $userName='', $userFirstName='', $userEmail='', $userRecoveryCode='', $userAccess='',  ){
				$this -> idUserAccount_ = $idUserAccount;
				$this -> userName_ = $userName;
				$this -> userFirstName_ = $userFirstName;
				$this -> userEmail_ = $userEmail;
				$this -> userRecoveryCode_ = $userRecoveryCode;
				$this -> userAccess_ = $userAccess;

			}
		/* ▂▂▂▂▂▂▂▂▂▂▂ */

		/* ▂ ▅  hydrate()  ▅ ▂ */
			/* @ hydrate($donnees) */
			public function hydrate($donnees){
				foreach ($donnees as $attribut => $valeur){
					$methode = 'set'.str_replace(' ', '', ucwords(str_replace('_', ' ', $attribut)));
					if (is_callable(array($this, $methode))){
						$this->$methode($valeur);
					};
				}
			}
		/* ▂▂▂▂▂▂▂▂▂▂▂ */

		/* ▂ ▅  Setters  ▅ ▂ */
			/* Traitement faille XSS htmlspecialchars() 'Cette fonction retourne une chaîne avec ces Conversions réalisées.' */
			/* ENT_QUOTES => Convertira les deux citations doubles et simples. */
			public function setIdUserAccount($modifIdUserAccount){ $this -> idUserAccount_ = htmlspecialchars(trim($modifIdUserAccount), ENT_QUOTES); return $this; }
			public function setUserName($modifUserName){ $this -> userName_ = htmlspecialchars(trim($modifUserName), ENT_QUOTES); return $this; }
			public function setUserFirstName($modifUserFirstName){ $this -> userFirstName_ = htmlspecialchars(trim($modifUserFirstName), ENT_QUOTES); return $this; }
			public function setUserEmail($modifUserEmail){ $this -> userEmail_ = htmlspecialchars(trim($modifUserEmail), ENT_QUOTES); return $this; }
			public function setUserRecoveryCode($modifUserRecoveryCode){ $this -> userRecoveryCode_ = htmlspecialchars(trim($modifUserRecoveryCode), ENT_QUOTES); return $this; }
			public function setUserAccess($modifUserAccess){ $this -> userAccess_ = htmlspecialchars(trim($modifUserAccess), ENT_QUOTES); return $this; }
		/* ▂▂▂▂▂▂▂▂▂▂▂ */

		/* ▂ ▅  Getters  ▅ ▂ */
			/* Traitement lecture htmlspecialchars_decode() 'Convertir des entités HTML spéciales en caractères'  */
			/* ENT_COMPAT => Je vais convertir les guillemets doubles et laisser les guillemets simples intacts. */
			public function getIdUserAccount(){ return htmlspecialchars_decode($this -> idUserAccount_, ENT_COMPAT); }
			public function getUserName(){ return htmlspecialchars_decode($this -> userName_, ENT_COMPAT); }
			public function getUserFirstName(){ return htmlspecialchars_decode($this -> userFirstName_, ENT_COMPAT); }
			public function getUserEmail(){ return htmlspecialchars_decode($this -> userEmail_, ENT_COMPAT); }
			public function getUserRecoveryCode(){ return htmlspecialchars_decode($this -> userRecoveryCode_, ENT_COMPAT); }
			public function getUserAccess(){ return htmlspecialchars_decode($this -> userAccess_, ENT_COMPAT); }
		/* ▂▂▂▂▂▂▂▂▂▂▂ */

	};
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */
?>