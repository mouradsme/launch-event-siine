<?php 


class DB extends SQLite3 {
    function __construct($dbfile) {
       $this->open($dbfile);
    }
 }

 $db = new DB('database.sqlite');
 if(!$db)
   die( $db->lastErrorMsg());
   

 ?>