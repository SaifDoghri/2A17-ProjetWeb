<?php

    class Config{
        private static  $db=null;
        public static function getConnexion(){
            try{
                self::$db=new PDO('mysql:host=localhost;dbname=ProjetWeb','root','',
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                    ]);

            }catch (PDOException $e){
                die("Error : ".$e->getMessage());
            }
            return self::$db;
        }
        public static function endConnexion(){
            self::$db=null;
        }
    }