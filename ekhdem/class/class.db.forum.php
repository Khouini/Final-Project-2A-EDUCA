<?php 
include 'class.db.php';
global $conn;

class DB_dove extends DB 
{
    function __construct()
    {
        parent::__construct():
    }
    //select
    public function get_user($id = -1){
        $query = "select * from system";
        if ($id != -1)
        {
            $query .="where id_user=$id"
        }
        $result = $this->db_query($query);
        $user = array();
        $i = 0;
        while($row = $this->db_fetch($result))
        {
            $user[$i++]= $row ;
        }
        return $user;
    }
}
?>