<?php
class D_compteur extends CI_Model{
    public function get_compteur(){
        $req = $this->db->get('compteur');
        return $req->result();
    }

    public function insert_compteur_db($data){
        $this->db->insert('compteur',$data);
    }

    public function delete_compteur_db($id){
        $this->db->delete('compteur', array('id_compteur' => $id));
    }

    public function edit_compteur_db($id){
        $req = $this->db->get_where('compteur', array('id_compteur' => $id));
        return $req->row();
    }

    public function update_compteur_db($id,$data){
        $this->db->where('id_compteur',$id);
        $this->db->update('compteur',$data);
    }
}
?>