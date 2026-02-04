<?php
	/* ▂ ▅ ▆ █ Information █ ▆ ▅ ▂ */
		/* Fichier entities database: api_chichoune - table: cookiesremember via constructor_Array_DataBase_SQL.php VERSION: 3.0.0*/ 
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
	class CookiesRemember{
		/* ▂ ▅ Attributs ▅ ▂ */
			protected $idCookieRemember_;
			protected $cookies_;
			protected $adressIp_;
			protected $randomKey_;
			protected $idUserAccount_;
		/* ▂▂▂▂▂▂▂▂▂▂▂ */

		/* ▂ ▅  copy and paste in the code  ▅ ▂ */
			# $objCookiesRememberModel = new CookiesRememberModel();
			# $objCookiesRemember = new CookiesRemember();
			# -  $objCookiesRemember -> setIdCookieRemember($_POST['IdCookieRemember']);
			# -  $objCookiesRemember -> setCookies($_POST['Cookies']);
			# -  $objCookiesRemember -> setAdressIp($_POST['AdressIp']);
			# -  $objCookiesRemember -> setRandomKey($_POST['RandomKey']);
			# -  $objCookiesRemember -> setIdUserAccount($_POST['IdUserAccount']);
			# -  $objCookiesRemember -> getIdCookieRemember();
			# -  $objCookiesRemember -> getCookies();
			# -  $objCookiesRemember -> getAdressIp();
			# -  $objCookiesRemember -> getRandomKey();
			# -  $objCookiesRemember -> getIdUserAccount();

		/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */

		/* ▂ ▅  construct  ▅ ▂ */
			/* @ $objCookiesRemember( $idCookieRemember='', $cookies='', $adressIp='', $randomKey='', $idUserAccount='',  ) */
			public function __construct( $idCookieRemember='', $cookies='', $adressIp='', $randomKey='', $idUserAccount='',  ){
				$this -> idCookieRemember_ = $idCookieRemember;
				$this -> cookies_ = $cookies;
				$this -> adressIp_ = $adressIp;
				$this -> randomKey_ = $randomKey;
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
			public function setIdCookieRemember($modifIdCookieRemember){ $this -> idCookieRemember_ = htmlspecialchars(trim($modifIdCookieRemember), ENT_QUOTES); return $this; }
			public function setCookies($modifCookies){ $this -> cookies_ = htmlspecialchars(trim($modifCookies), ENT_QUOTES); return $this; }
			public function setAdressIp($modifAdressIp){ $this -> adressIp_ = htmlspecialchars(trim($modifAdressIp), ENT_QUOTES); return $this; }
			public function setRandomKey($modifRandomKey){ $this -> randomKey_ = htmlspecialchars(trim($modifRandomKey), ENT_QUOTES); return $this; }
			public function setIdUserAccount($modifIdUserAccount){ $this -> idUserAccount_ = htmlspecialchars(trim($modifIdUserAccount), ENT_QUOTES); return $this; }
		/* ▂▂▂▂▂▂▂▂▂▂▂ */

		/* ▂ ▅  Getters  ▅ ▂ */
			/* Traitement lecture htmlspecialchars_decode() 'Convertir des entités HTML spéciales en caractères'  */
			/* ENT_COMPAT => Je vais convertir les guillemets doubles et laisser les guillemets simples intacts. */
			public function getIdCookieRemember(){ return htmlspecialchars_decode($this -> idCookieRemember_, ENT_COMPAT); }
			public function getCookies(){ return htmlspecialchars_decode($this -> cookies_, ENT_COMPAT); }
			public function getAdressIp(){ return htmlspecialchars_decode($this -> adressIp_, ENT_COMPAT); }
			public function getRandomKey(){ return htmlspecialchars_decode($this -> randomKey_, ENT_COMPAT); }
			public function getIdUserAccount(){ return htmlspecialchars_decode($this -> idUserAccount_, ENT_COMPAT); }
		/* ▂▂▂▂▂▂▂▂▂▂▂ */

	};
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */
?>