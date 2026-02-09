<?php
    /* ▂ ▅ ▆ █ Information █ ▆ ▅ ▂ */
    
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

    /* ▂ ▅ ▆ █ NameSpace █ ▆ ▅ ▂ */
	    namespace App\Core\RenderData;
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

	/* ▂ ▅ ▆ █ Inclusion █ ▆ ▅ ▂ */

	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

    /* ▂ ▅ ▆ █ Class █ ▆ ▅ ▂ */
        class ResponseJson {
            /* ▂ ▅ Attributs ▅ ▂ */
				private $status_;
                private $divInfo_ ;
				private $data_;
				private $redirect_;
                private $responseJson_;
            /* ▂▂▂▂▂▂▂▂▂▂▂ */

            /* ▂ ▅ ▆ █ Methodes █ ▆ ▅ ▂ */

			    /*▂ ▅ ▆ █ construct █ ▆ ▅ ▂ */
				    # @ objResponseJson($status='', $divtInfo='', $data='', $redirect='')
					public function __construct($status='', $divInfo='', $data='', $redirect=''){
						$this -> status_ = $status;
						$this -> divInfo_ = $divInfo;
						$this -> data_ =  $data;
						$this -> redirect_ = $redirect;
					}

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

                /* ▂ ▅  Setters  ▅ ▂ */
                    private function setStatus($status){ $this -> status_ = $status; }
                    private function setDivInfo($divInfo){ $this -> divInfo_ = $divInfo; }
                    private function setData($data){ $this -> data_ = $data; }
                    private function setRedirect($redirect){ $this -> redirect_ = $redirect; }


                /* ▂ ▅ ▆ █ Getters █ ▆ ▅ ▂ */
                    public function getResponse(){ 
                        $responseJson = [ "status"=>$this->status_, "divInfo"=>$this -> divInfo_, "data"=>$this -> data_, "redirect"=>$this -> redirect_ ];
                        return json_encode($responseJson, JSON_UNESCAPED_SLASHES);
                    }

                

        };

?>
