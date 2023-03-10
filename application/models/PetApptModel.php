<?php

class PetApptModel extends CI_Model{

    public function getPetAppt(){
        $query = $this->db->get('petappt');
        return $query->result();
    }
    
    public function insertPetAppt($data){
        return $this->db->insert('petappt',$data);
        // insert ('table_name','data')
    }

    public function editPetAppt($id){
        $query = $this->db->get_where('petappt', ['id' => $id]);
        return $query->row(); // only single row will be returned
    }

    public function updatePetAppt($data, $id){
        return $this->db->update('petappt', $data, ['id' => $id]);
    }

    public function deletePetAppt($id){
        return $this->db->delete('petappt', ['id' => $id]);
    }
}
?>