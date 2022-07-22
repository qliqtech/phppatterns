<?php

class Facebook{

    public function post($msg){

        echo "Posting message...";
    }



}


interface SocialMediaAdapter{


    function post($message);

}

class FacebookAdapter implements SocialMediaAdapter {

    private $_facebook;

    public function __construct(Facebook $facebook){

        $this->_facebook = $facebook;

    }

    public function post($msg){

        $this->_facebook->post($msg);

    }

}



$facebookadapter = new FacebookAdapter(new Facebook());

$message = "blah blah";

$facebookadapter->post($message);





