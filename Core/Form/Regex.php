<?php
	/* ▂ ▅ ▆ █ Information █ ▆ ▅ ▂ */
		/* Toolbox VERSION: 3.0 */ 
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

    /* ▂ ▅ ▆ █  NameSpace  █ ▆ ▅ ▂ */
        namespace App\Core\Form;
	/* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

    /* ▂ ▅ ▆ █ Class █ ▆ ▅ ▂ */
        class Regex{
            /* ▂ ▅ ▆ █ Attributs █ ▆ ▅ ▂ */
                private $regex;
                private $tooltip;
                private $pregMatch;
                private $pattern;
            /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 

            /* ▂ ▅ ▆ █ Methodes █ ▆ ▅ ▂ */

                /*▂ ▅ ▆ █ construct █ ▆ ▅ ▂ */
                /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */

                /* ▂ ▅ ▆ █ Getters █ ▆ ▅ ▂ */
                    public function getReadRegex( ){ return $this -> regex; }
                    public function getReadTooltip( ){ return $this -> tooltip; }
                    public function getReadPregMatch( ){ return $this -> pregMatch; }
                    public function getReadPattern( ){ return $this -> pattern; }
                /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */       

                /* ▂ ▅ ▅ ▅ ▆ ▆ ▆ █ █ █ Pattern / Regex █ █ █ ▆ ▆ ▆ ▅ ▅ ▅ ▂ */
                    public function readRegex( ):self{
                        $this -> regex = [
                            'identifiant' => "^[A-Za-z0-9_-]{3,16}$",
                            'password' => "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\/@$!%*?&#])[A-Za-z\d\/@$!%*?&#]{10,11}$",
                            'email' => "^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$",
                            'text' => "^[A-Za-zÀ-ÖØ-öø-ÿ\s'-]$",
                            'textarea' => "^[A-Za-zÀ-ÖØ-öø-ÿ0-9\s.,;:!?()\"'-]+$",
                            'date' => "^\d{4}-\d{2}-\d{2}$",
                            'datetime-local' => "^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}$",
                            'time' => "^\d{2}:\d{2}$",
                            'number' => "^\d+$",
                            'adress' => "^[A-Za-zÀ-ÖØ-öø-ÿ0-9\s.,'-]+$",
                            'postal-code' => "^\d{5}$",
                            'phone' => "^\+?[0-9\s\-()]+$",
                        ];
                        return $this;
                    }
                /* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ */   

                /* ▂ ▅ ▅ ▅ ▆ ▆ ▆ █ █ █ Tooltip █ █ █ ▆ ▆ ▆ ▅ ▅ ▅ ▂ */
                public function readTooltip( ):self{
                    $this -> tooltip = [
                        'identifiant' => 'Votre identifiant doit comporter entre 3 et 16 caractères et peut inclure des lettres, des chiffres, des tirets bas (_) et des tirets (-).',
                        'password' => 'Votre mot de passe doit comporter entre 10 et 11 caractères, inclure au moins une lettre majuscule, une lettre minuscule, un chiffre et un caractère spécial parmi / @ $ ! % * ? & #.',
                        'email' => 'Veuillez entrer une adresse e-mail valide au format exemple : user@example.com',
                        'text' => 'Ce champ ne peut contenir que des lettres, des espaces, des tirets et des apostrophes.',
                        'textarea' => 'Ce champ peut contenir des lettres, des chiffres, des espaces et les signes de ponctuation suivants : . , ; : ! ? ( ) " \' -',
                        'date' => 'Veuillez entrer une date au format AAAA-MM-JJ.',
                        'datetime-local' => 'Veuillez entrer une date et une heure au format AAAA-MM-JJThh:mm.',
                        'time' => 'Veuillez entrer une heure au format hh:mm.',
                        'number' => 'Veuillez entrer un nombre valide.',
                        'adress' => 'Ce champ peut contenir des lettres, des chiffres, des espaces et les signes de ponctuation suivants : . , \' -',
                        'postal-code' => 'Veuillez entrer un code postal à 5 chiffres.',
                        'phone' => 'Veuillez entrer un numéro de téléphone valide, qui peut inclure des chiffres, des espaces, des tirets, des parenthèses et un signe plus.',
                    ];
                    return $this;
                }
                /* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ */



                /* ▂ ▅ ▅ ▅ ▆ ▆ ▆ █ █ █ pregMatch █ █ █ ▆ ▆ ▆ ▅ ▅ ▅ ▂ */
                    public function readPregMatch( ):self{
                        $this -> pregMatch = [
                            'identifiant' => "/^[A-Za-z0-9_-]{3,16}$/",
                            'password' => "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\/@$!%*?&#])[A-Za-z\d\/@$!%*?&#]{10,11}$/",
                            'email' => "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/",
                            'text' => "/^[A-Za-zÀ-ÖØ-öø-ÿ\s'-]+$/",
                            'textarea' => "/^[A-Za-zÀ-ÖØ-öø-ÿ0-9\s.,;:!?()\"'- ]+$/",
                            'date' => "/^\d{4}-\d{2}-\d{2}$/",
                            'datetime-local' => "/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}$/",
                            'time' => "/^\d{2}:\d{2}$/",
                            'number' => "/^\d+$/",
                            'adress' => "/^[A-Za-zÀ-ÖØ-öø-ÿ0-9\s.,'-]+$/",
                            'postal-code' => "/^\d{5}$/",
                            'phone' => "/^\+?[0-9\s\-()]+$/",
                        ];
                        return $this;
                    }
                /* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ */       
                
                

                /* ▂ ▅ ▅ ▅ ▆ ▆ ▆ █ █ █ Pattern █ █ █ ▆ ▆ ▆ ▅ ▅ ▅ ▂ */
                    public function readPattern( ):self{
                        $this->pattern=[
                            'identifiant' => '[A-Za-z0-9_\-]{3,16}',
                            'password' => "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\/@$!%*?&#])[A-Za-z\d\/@$!%*?&#]{10,11}",
                            'email' => "[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$",
                            'text' => "^[A-Za-z_\s\-]{2,}$",
                            'textarea' => "^[A-Za-zÀ-ÖØ-öø-ÿ0-9\s.,;:!?()\"'-]+$",
                            'date' => "^\d{4}-\d{2}-\d{2}$",
                            'datetime-local' => "^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}$", 
                            'time' => "^\d{2}:\d{2}$",
                            'number' => "^\d+$",
                            'adress' => "^[A-Za-zÀ-ÖØ-öø-ÿ0-9\s.,'-]+$",
                            'postal-code' => "^\d{5}$",
                            'phone' => "^\+?[0-9\s\-()]+$",
                        ];
                        return $this;
                    }
                /* ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ ▂ */                

            /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 
        }
    /* ▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂▂ */ 
?> 