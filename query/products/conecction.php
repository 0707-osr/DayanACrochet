<?php
 $user = 'up0veyhjjocrcfrz';
 $pass = 'xydY6hA5kZmnt0pFBK4c';
 $server = 'bqnrc0fpk7ahuuzgenga-mysql.services.clever-cloud.com';
 $db='bqnrc0fpk7ahuuzgenga';
 
 $conection = mysqli_connect($server,$user,$pass,$db,'3306');
 $conection -> set_charset("utf8");



    // class database{
    //     public $conexion=null;
    //     public static function getConnection(){
    //         if(self::$conexion==null){
    //             self::$conexion=mysqlDB::getConexion();
    //         }
    //         return self::$conexion;
    //     }
    // }


    // class mysqlDB{
    //     static private $host="bqnrc0fpk7ahuuzgenga-mysql.services.clever-cloud.com";
    //     static private $db='bqnrc0fpk7ahuuzgenga';
    //     static private $user='up0veyhjjocrcfrz';
	// 	static private $pass='xydY6hA5kZmnt0pFBK4c';

    //     public static function getConexion(){

    //         $conectar = mysqli_connect(self::$host,self::$user,self::$pass,self::$db);
    //         $conectar -> set_charset("utf8");
    //        return $conectar;
    //     }

    // }
?>