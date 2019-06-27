<?php

    class GoogleAuth{
        protected $client;
        public function __construct(Google_Client $googleClient = null){
            $this->client=$googleClient;
            if($this->client){
                $this->client->setClientId('120811633062-ukden5kiaui9l5rki9o6k4vfcstfpnbr.apps.googleusercontent.com');
                $this->client->setClientSecret('Vs97Gu2fIHtPAaYKgMhgxpu5');
                $this->client->setRedirectUri('http://localhost/sena/LoginRedesSociales1/');
                $this->client->setScopes('email');
            }
        }
        public function isLoggeIn(){
            return isset($_SESSION['access_token']);
        }
        public function getAuthUrl(){
            return $this->client->createAuthUrl();
        }
        public function checkRedirectCode(){
            if(isset($_GET['code'])){
                $this->client->authenticate($_GET['code']);
                $this->setToken($this->client->getAccessToken());
                // if($this->client->getAccessToken()){ 
                //     $payload = $this->client->verifyIdToken(); 
                //     echo "<pre>",print_r($payload),"</pre>";
                // }
                $payload=$this->getPayload();
                    echo "<pre>",print_r($payload),"</pre>";
                return true;
            }
            return false;
        }
        public function setToken($token){
            $_SESSION['access_token']=$token;
            $this->client->setAccessToken($token);
        }
        public function logout(){
            unset($_SESSION['access_token']);
        }
        public function getPayload(){
            // $payload=$this->client->verifyIdToken()->getAtributes();
            if($this->client->getAccessToken()){ 
                $payload = $this->client->verifyIdToken(); 
                return $payload;
            }
            
        }
    }

?>