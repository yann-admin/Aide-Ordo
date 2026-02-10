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
                private $div_ ;
                private $msg_ ;
				private $data_;
				private $redirect_;
                private $responseJson_;
            /* ▂▂▂▂▂▂▂▂▂▂▂ */

            /* ▂ ▅ ▆ █ Methodes █ ▆ ▅ ▂ */

			    /*▂ ▅ ▆ █ construct █ ▆ ▅ ▂ */
				    # @ objResponseJson($status='', $divtInfo='', $data='', $redirect='')
					public function __construct($status='',$div= '', $msg='', $data='', $redirect=''){
						$this -> status_ = $status;
                        $this -> div_ = $div;
						$this -> msg_ = $msg;
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
                    private function setMsg($msg){ $this -> msg_ = $msg; }
                    private function setData($data){ $this -> data_ = $data; }
                    private function setRedirect($redirect){ $this -> redirect_ = $redirect; }
                    private function setDiv($div){ $this -> div_ = $div; }


                /* ▂ ▅ ▆ █ Getters █ ▆ ▅ ▂ */
                    public function getResponse(){ 
                        $responseJson = [ "status"=>$this->status_, "div"=>$this -> div_, "msg"=>$this -> msg_, "data"=>$this -> data_, "redirect"=>$this -> redirect_ ];
                        return json_encode($responseJson, JSON_UNESCAPED_SLASHES);
                    }

                

        };

?>
