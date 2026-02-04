<?php
	/* ▂ ▅ ▆ █ Information █ ▆ ▅ ▂ */
		/* Fichier controller database: api_chichoune - table: loginaccount via constructor_Array_DataBase_SQL.php VERSION: 3.0.0*/ 
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅ ▆ █ NameSpace █ ▆ ▅ ▂ */
		namespace App\Models\User;
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅ ▆ █ Inclusion █ ▆ ▅ ▂ */
		use PDO;
		use Exception;
		use App\Core\Database\DbConnectSql;
		use App\Entities\User\LoginAccount;
		# Class other
		use App\Core\Form\PdoDbException;
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅ ▆ █ Class █ ▆ ▅ ▂ */
	class LoginaccountModel extends DbConnectSql{
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
					$this -> request = $this -> connexion -> prepare( "SELECT loginaccount.* FROM loginaccount" );
					$this -> request -> execute();
					$results = $this -> request -> fetchAll(PDO::FETCH_OBJ);
					return $results;
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂ */

			/* ▂ ▅  findId( int $id )  ▅ ▂ */
				public function findId( int $id ) { 
					$this -> request = $this -> connexion -> prepare( "SELECT loginaccount.* FROM loginaccount WHERE loginaccount.idLoginAccount=:idLoginAccount" );
					$this -> request -> bindParam(":idLoginAccount", $id , PDO::PARAM_STR);
					$this -> request -> execute();
					$results = $this -> request -> fetch();
					return $results;
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂ */

			/* ▂ ▅  findJointIdentifiant( string $identifiant )  ▅ ▂ */
				public function findJointIdentifiant( string $identifiant ) { 
					$this -> request = $this -> connexion -> prepare( "SELECT loginaccount.*, useraccount.*  FROM loginaccount, useraccount  WHERE loginaccount.identifiant=:identifiant AND loginaccount.idUserAccount = useraccount.idUserAccount" );
					$this -> request -> bindParam(":identifiant", $identifiant , PDO::PARAM_STR);
					$this -> request -> execute();
					$results = $this -> request -> fetch(PDO::FETCH_OBJ);
					return $results;
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂ */



			/* ▂ ▅  create( Loginaccount $Loginaccount )  ▅ ▂ */
				public function create( Loginaccount $Loginaccount ) { 
					$this -> request = $this -> connexion -> prepare( "INSERT INTO loginaccount
					SET loginaccount.identifiant=:identifiant, loginaccount.password=:password, loginaccount.idUserAccount=:idUserAccount");
					$this -> request -> bindValue(":identifiant", $Loginaccount -> getIdentifiant(), PDO::PARAM_STR);
					$this -> request -> bindValue(":password", $Loginaccount -> getPassword(), PDO::PARAM_STR);
					$this -> request -> bindValue(":idUserAccount", $Loginaccount -> getIdUserAccount(), PDO::PARAM_INT);
					$pdoDbException = $this -> executeTryCatch(); 
					return $pdoDbException; 
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂ */

			/* ▂ ▅  update( int $id, Loginaccount $Loginaccount )  ▅ ▂ */
				public function update( int $id, Loginaccount $Loginaccount ) { 
					$this -> request = $this -> connexion -> prepare( "UPDATE loginaccount
					SET loginaccount.identifiant=:identifiant, loginaccount.password=:password, loginaccount.idUserAccount=:idUserAccount
					WHERE loginaccount.idLoginAccount = :idLoginAccount");
					$this -> request -> bindValue(":identifiant", $Loginaccount -> getIdentifiant(), PDO::PARAM_STR);
					$this -> request -> bindValue(":password", $Loginaccount -> getPassword(), PDO::PARAM_STR);
					$this -> request -> bindValue(":idUserAccount", $Loginaccount -> getIdUserAccount(), PDO::PARAM_INT);
					$pdoDbException = $this -> executeTryCatch(); 
					return $pdoDbException; 
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂ */

			/*▂ ▅  delete( int $id )  ▅ ▂ */
				public function delete( int $id ) {
					$this -> request = $this -> connexion -> prepare("DELETE FROM loginaccount WHERE loginaccount.idLoginAccount = :idLoginAccount");
					$this -> request -> bindParam(":idLoginAccount", $id , PDO::PARAM_INT);
					$pdoDbException = $this -> executeTryCatch(); 
					return $pdoDbException; 
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂ */

	};
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */
?>