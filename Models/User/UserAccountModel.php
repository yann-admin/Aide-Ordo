<?php
	/* ▂ ▅ ▆ █ Information █ ▆ ▅ ▂ */
		/* Fichier controller database: api_chichoune - table: useraccount via constructor_Array_DataBase_SQL.php VERSION: 3.0.0*/ 
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅ ▆ █ NameSpace █ ▆ ▅ ▂ */
		namespace App\Models\User;
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅ ▆ █ Inclusion █ ▆ ▅ ▂ */
		use PDO;
		use Exception;
		use App\Core\Database\DbConnectSql;
		use App\Entities\User\Useraccount;
		use App\Entities\User\LoginAccount;
		# Class other
		use App\Core\Form\PdoDbException;
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅ ▆ █ Class █ ▆ ▅ ▂ */
	class UserAccountModel extends DbConnectSql{
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
					$this -> request = $this -> connexion -> prepare( "SELECT useraccount.* FROM useraccount" );
					$this -> request -> execute();
					$results = $this -> request -> fetchAll(PDO::FETCH_OBJ);
					return $results;
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂ */

			/* ▂ ▅  findId( int $id )  ▅ ▂ */
				public function findId( int $id ) { 
					$this -> request = $this -> connexion -> prepare( "SELECT useraccount.* FROM useraccount WHERE useraccount.idUserAccount=:idUserAccount" );
					$this -> request -> bindParam(":idUserAccount", $id , PDO::PARAM_STR);
					$this -> request -> execute();
					$results = $this -> request -> fetch(PDO::FETCH_OBJ);
					return $results;
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂ */

			/* ▂ ▅  duplicate check( int $id )  ▅ ▂ */
				public function duplicateCheck( $ColumnName, $Value ) { 
					$this -> request = $this -> connexion -> prepare( "SELECT useraccount.$ColumnName FROM useraccount WHERE useraccount.$ColumnName=:columnValue" );
					$this -> request -> bindParam(":columnValue", $Value , PDO::PARAM_STR);
					$this -> request -> execute();
					$results = $this -> request -> fetch(PDO::FETCH_OBJ);
					return $results;
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂ */



			/* ▂ ▅  create( Useraccount $Useraccount )  ▅ ▂ */
				public function create( Useraccount $Useraccount ) { 
					$this -> request = $this -> connexion -> prepare( "INSERT INTO useraccount
					SET useraccount.userName=:userName, useraccount.userFirstName=:userFirstName, useraccount.userEmail=:userEmail, useraccount.userRecoveryCode=:userRecoveryCode, useraccount.userAccess=:userAccess");
					$this -> request -> bindValue(":userName", $Useraccount -> getUserName(), PDO::PARAM_STR);
					$this -> request -> bindValue(":userFirstName", $Useraccount -> getUserFirstName(), PDO::PARAM_STR);
					$this -> request -> bindValue(":userEmail", $Useraccount -> getUserEmail(), PDO::PARAM_STR);
					$this -> request -> bindValue(":userRecoveryCode", $Useraccount -> getUserRecoveryCode(), PDO::PARAM_STR);
					$this -> request -> bindValue(":userAccess", $Useraccount -> getUserAccess(), PDO::PARAM_INT);
					$pdoDbException = $this -> executeTryCatch(); 
					return $pdoDbException; 
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂ */


			/* ▂ ▅  create( Useraccount $Useraccount )  ▅ ▂ */
				public function createJoint( Useraccount $Useraccount, LoginAccount $LoginAccount ) { 
					$this -> request = $this -> connexion -> prepare( "INSERT INTO useraccount
					SET useraccount.userName=:userName, useraccount.userFirstName=:userFirstName, useraccount.userEmail=:userEmail, useraccount.userRecoveryCode=:userRecoveryCode, useraccount.userAccess=:userAccess; INSERT INTO loginaccount SET loginaccount.identifiant=:identifiant, loginaccount.password=:password, loginaccount.idUserAccount=LAST_INSERT_ID() "); 
					/* Set values for useraccount */
					$this -> request -> bindValue(":userName", $Useraccount -> getUserName(), PDO::PARAM_STR);
					$this -> request -> bindValue(":userFirstName", $Useraccount -> getUserFirstName(), PDO::PARAM_STR);
					$this -> request -> bindValue(":userEmail", $Useraccount -> getUserEmail(), PDO::PARAM_STR);
					$this -> request -> bindValue(":userRecoveryCode", $Useraccount -> getUserRecoveryCode(), PDO::PARAM_STR);
					$this -> request -> bindValue(":userAccess", $Useraccount -> getUserAccess(), PDO::PARAM_INT);
					/* Set values for loginaccount */ 
					// $idUserAccount = $this -> connexion -> lastInsertId();
					// $this -> request -> bindValue(":idUserAccount", $idUserAccount, PDO::PARAM_INT);
					$this -> request -> bindValue(":identifiant", $LoginAccount -> getIdentifiant(), PDO::PARAM_STR);
					$this -> request -> bindValue(":password", $LoginAccount -> getPassword(), PDO::PARAM_STR);

					$pdoDbException = $this -> executeTryCatch(); 
					return $pdoDbException; 
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂ */







			/* ▂ ▅  update( int $id, Useraccount $Useraccount )  ▅ ▂ */
				public function update( int $id, Useraccount $Useraccount ) { 
					$this -> request = $this -> connexion -> prepare( "UPDATE useraccount
					SET useraccount.userName=:userName, useraccount.userFirstName=:userFirstName, useraccount.userEmail=:userEmail, useraccount.userRecoveryCode=:userRecoveryCode, useraccount.userAccess=:userAccess
					WHERE useraccount.idUserAccount = :idUserAccount");
					$this -> request -> bindValue(":userName", $Useraccount -> getUserName(), PDO::PARAM_STR);
					$this -> request -> bindValue(":userFirstName", $Useraccount -> getUserFirstName(), PDO::PARAM_STR);
					$this -> request -> bindValue(":userEmail", $Useraccount -> getUserEmail(), PDO::PARAM_STR);
					$this -> request -> bindValue(":userRecoveryCode", $Useraccount -> getUserRecoveryCode(), PDO::PARAM_STR);
					$this -> request -> bindValue(":userAccess", $Useraccount -> getUserAccess(), PDO::PARAM_INT);
					$pdoDbException = $this -> executeTryCatch(); 
					return $pdoDbException; 
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂ */

			/*▂ ▅  delete( int $id )  ▅ ▂ */
				public function delete( int $id ) {
					$this -> request = $this -> connexion -> prepare("DELETE FROM useraccount WHERE useraccount.idUserAccount = :idUserAccount");
					$this -> request -> bindParam(":idUserAccount", $id , PDO::PARAM_INT);
					$pdoDbException = $this -> executeTryCatch(); 
					return $pdoDbException; 
				}
			/* ▂▂▂▂▂▂▂▂▂▂▂ */

	};
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */
?>