<?php
	/* ▂ ▅ ▆ █ Information █ ▆ ▅ ▂ */
		/* Fichier entities database: api_chichoune - table: loginaccount via constructor_Array_DataBase_SQL.php VERSION: 3.0.0*/ 
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
	class Loginaccount{
		/* ▂ ▅ Attributs ▅ ▂ */
			protected $idLoginAccount_;
			protected $identifiant_;
			protected $password_;
			protected $idUserAccount_;
		/* ▂▂▂▂▂▂▂▂▂▂▂ */

		/* ▂ ▅  copy and paste in the code  ▅ ▂ */
			# $objLoginaccountModel = new LoginaccountModel();
			# $objLoginaccount = new Loginaccount();
			# -  $objLoginaccount -> setIdLoginAccount($_POST['IdLoginAccount']);
			# -  $objLoginaccount -> setIdentifiant($_POST['Identifiant']);
			# -  $objLoginaccount -> setPassword($_POST['Password']);
			# -  $objLoginaccount -> setIdUserAccount($_POST['IdUserAccount']);

			# -  $objLoginaccount -> getIdLoginAccount();
			# -  $objLoginaccount -> getIdentifiant();
			# -  $objLoginaccount -> getPassword();
			# -  $objLoginaccount -> getIdUserAccount();

		/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */

		/* ▂ ▅  construct  ▅ ▂ */
			/* @ $objLoginaccount( $idLoginAccount='', $identifiant='', $password='', $idUserAccount='',  ) */
			public function __construct( $idLoginAccount='', $identifiant='', $password='', $idUserAccount='',  ){
				$this -> idLoginAccount_ = $idLoginAccount;
				$this -> identifiant_ = $identifiant;
				$this -> password_ = $password;
				$this -> idUserAccount_ = $idUserAccount;

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
			public function setIdLoginAccount($modifIdLoginAccount){ $this -> idLoginAccount_ = htmlspecialchars(trim($modifIdLoginAccount), ENT_QUOTES); return $this; }
			public function setIdentifiant($modifIdentifiant){ $this -> identifiant_ = htmlspecialchars(trim($modifIdentifiant), ENT_QUOTES); return $this; }
			public function setPassword($modifPassword){ $this -> password_ = htmlspecialchars(trim($modifPassword), ENT_QUOTES); return $this; }
			public function setIdUserAccount($modifIdUserAccount){ $this -> idUserAccount_ = htmlspecialchars(trim($modifIdUserAccount), ENT_QUOTES); return $this; }
		/* ▂▂▂▂▂▂▂▂▂▂▂ */

		/* ▂ ▅  Getters  ▅ ▂ */
			/* Traitement lecture htmlspecialchars_decode() 'Convertir des entités HTML spéciales en caractères'  */
			/* ENT_COMPAT => Je vais convertir les guillemets doubles et laisser les guillemets simples intacts. */
			public function getIdLoginAccount(){ return htmlspecialchars_decode($this -> idLoginAccount_, ENT_COMPAT); }
			public function getIdentifiant(){ return htmlspecialchars_decode($this -> identifiant_, ENT_COMPAT); }
			public function getPassword(){ return htmlspecialchars_decode($this -> password_, ENT_COMPAT); }
			public function getIdUserAccount(){ return htmlspecialchars_decode($this -> idUserAccount_, ENT_COMPAT); }
		/* ▂▂▂▂▂▂▂▂▂▂▂ */

	};
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */
?>