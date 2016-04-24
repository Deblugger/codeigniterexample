<?php
class Model extends CI_Model {

    function __construct(){
        parent::__construct();
    }
    
    function select_query($campo){
        $res = $this->db->select($campo)
            ->from('YOUR_TABLE')
            ->where('YOUR', 'clauses')
            ->get();

        // Esta sentencia da como resultado ->   SELECT ($campo) FROM YOUR_TABLE WHERE YOUR=($clauses)

        return $res->result();
    }

}
?>
