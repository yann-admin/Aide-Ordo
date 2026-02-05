<?php
	/* ▂ ▅ ▆ █ Information █ ▆ ▅ ▂ */
		/* Fichier controller database: api_chichoune - table: cookiesremember via constructor_Array_DataBase_SQL.php VERSION: 3.0.0*/ 
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅ ▆ █ NameSpace █ ▆ ▅ ▂ */
		namespace App\Models\User;
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅ ▆ █ Inclusion █ ▆ ▅ ▂ */
		use PDO;
		use Exception;
		use App\Core\Database\DbConnectSql;
		use App\Entities\User\CookiesRemember;
		# Class other
		use App\Core\Form\PdoDbException;
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅ ▆ █ Class █ ▆ ▅ ▂ */
	class CookiesRememberModel extends DbConnectSql{
		/* ▂ ▅ Methodes ▅ ▂ */
			/* ▂ ▅  executeTryCatch()  ▅ ▂ */
				public function executeTryCatch() { 
					try {
						$this -> request -> execute();
						$pdoDbException = '';
					}catch ( Exception $e ){
						$pdoDbException =  new PdoDbException( $e );
					}
					/* Ferme le curseur, permettant à la requete d'être de nouveau executée */
					$this -> request -> closeCursor();
					return  $pdoDbException;
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂ */

			/* ▂ ▅  findAll()  ▅ ▂ */
				public function findAll() { 
					$this -> request = $this -> connexion -> prepare( "SELECT cookiesremember.* FROM cookiesremember" );
					$this -> request -> execute();
					$results = $this -> request -> fetchAll(PDO::FETCH_OBJ);
					return $results;
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂ */

			/* ▂ ▅  findId( int $id )  ▅ ▂ */
				public function findId( int $id ) { 
					$this -> request = $this -> connexion -> prepare( "SELECT cookiesremember.* FROM cookiesremember WHERE cookiesremember.idCookieRemember=:idCookieRemember" );
					$this -> request -> bindParam(":idCookieRemember", $id , PDO::PARAM_STR);
					$this -> request -> execute();
					$results = $this -> request -> fetch();
					return $results;
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂ */

			/* ▂ ▅  findKey( string $key )  ▅ ▂ */
				public function findByCookie( string $Cookies ) { 
					$this -> request = $this -> connexion -> prepare( "SELECT cookiesremember.* FROM cookiesremember WHERE cookiesremember.cookies=:cookies" );
					$this -> request -> bindParam(":cookies", $Cookies , PDO::PARAM_STR);
					$this -> request -> execute();
					$results = $this -> request -> fetch(PDO::FETCH_OBJ);
					return $results;
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂ */

			/* ▂ ▅  create( Cookiesremember $Cookiesremember )  ▅ ▂ */
				public function create( Cookiesremember $Cookiesremember ) { 
					$this -> request = $this -> connexion -> prepare( "INSERT INTO cookiesremember
					SET cookiesremember.cookies=:cookies, cookiesremember.adressIp=:adressIp, cookiesremember.randomKey=:randomKey, cookiesremember.idUserAccount=:idUserAccount  ");
					$this -> request -> bindValue(":cookies", $Cookiesremember -> getCookies(), PDO::PARAM_STR);
					$this -> request -> bindValue(":adressIp", $Cookiesremember -> getAdressIp(), PDO::PARAM_STR);
					$this -> request -> bindValue(":randomKey", $Cookiesremember -> getRandomKey(), PDO::PARAM_STR);
					$this -> request -> bindValue(":idUserAccount", $Cookiesremember -> getIdUserAccount(), PDO::PARAM_INT);
					$pdoDbException = $this -> executeTryCatch(); 
					return $pdoDbException; 
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂ */

			/* ▂ ▅  update( int $id, Cookiesremember $Cookiesremember )  ▅ ▂ */
				public function update( int $id, Cookiesremember $Cookiesremember ) { 
					$this -> request = $this -> connexion -> prepare( "UPDATE cookiesremember
					SET cookiesremember.cookies=:cookies, cookiesremember.adressIp=:adressIp, cookiesremember.randomKey=:randomKey, cookiesremember.idUserAccount=:idUserAccount
					WHERE cookiesremember.idCookieRemember = :idCookieRemember");
					$this -> request -> bindValue(":cookies", $Cookiesremember -> getCookies(), PDO::PARAM_STR);
					$this -> request -> bindValue(":adressIp", $Cookiesremember -> getAdressIp(), PDO::PARAM_STR);
					$this -> request -> bindValue(":randomKey", $Cookiesremember -> getRandomKey(), PDO::PARAM_STR);
					$this -> request -> bindValue(":idUserAccount", $Cookiesremember -> getIdUserAccount(), PDO::PARAM_INT);
					$pdoDbException = $this -> executeTryCatch(); 
					return $pdoDbException; 
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂ */

			/*▂ ▅  delete( int $id )  ▅ ▂ */
				public function deleteByCookie( int $id ) {
					$this -> request = $this -> connexion -> prepare("DELETE FROM cookiesremember WHERE cookiesremember.idCookieRemember = :idCookieRemember");
					$this -> request -> bindParam(":idCookieRemember", $id , PDO::PARAM_INT);
					$pdoDbException = $this -> executeTryCatch(); 
					return $pdoDbException; 
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂ */

	};
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */
?>