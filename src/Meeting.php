<?php
require "connection.php";
class Meeting {
    private $id;
    public function __construct($id){
        $this->id = $id;
    }

    public  function cancel()
    {
        $stmt = Database::getConnection()->prepare("DELETE FROM `lecture`
        WHERE `id`= ?
        ;
         ");
        $stmt->bind_param(
            's',
            $this->id
        ); // 's' specifies the variable type => 'string'

        $stmt->execute();
    }

  

}