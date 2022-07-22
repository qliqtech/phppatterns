<?php

class Database
{

    public static $instance;

    public static function getInstance(){


        if(!isset(Database::$instance))
            Database::$instance = new Database();

       return Database::$instance;

    }

      private function __construct()
      {



      }
      public function getQuery(){

        return "Select * FROM some_table";
      }



}

$db = Database::getInstance();

var_dump($db);
