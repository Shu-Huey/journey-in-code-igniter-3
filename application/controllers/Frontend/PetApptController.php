<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PetApptController extends CI_Controller{
    public function index(){
        $this->load->model('PetApptModel');
        $data['petappt'] = $this->PetApptModel->getPetAppt();
        $this->load->view('petapptFrontend/petappt', $data);
    }

    public function create(){
        $this->load->view('petapptFrontend/create');
    }

    public function store(){
        
        $this->form_validation->set_rules('appointment_date','Appointment Date','required');
        $this->form_validation->set_rules('selected_service','Select Service','required');
        $this->form_validation->set_rules('name','Name','required|min_length[2]');
        $this->form_validation->set_rules('phone','Phone Number','required|integer');
        $this->form_validation->set_rules('email','Email Address','required|valid_email');
        $this->form_validation->set_rules('pet_number','Number of Pet(s)','required');

        if($this->form_validation->run()){
            $data = [
                'appointment_date' => $this->input->post('appointment_date'),
                'selected_service' => $this->input->post('selected_service'),
                'name' => $this->input->post('name'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'pet_number' => $this->input->post('pet_number'),
                // post('something') is the name from the form
            ];

            // var_dump($data);
            $this->load->model('PetApptModel');
            $this->PetApptModel->insertPetAppt($data);
            redirect(base_url('petappt'));
        } else {
            $this->create();
            // redirect(base_url('petappt/add'));
        }    
    }

    public function edit($id){
        $this->load->model('PetApptModel');
        $data['petappt'] = $this->PetApptModel->editPetAppt($id);
        $this->load->view('petapptFrontend/edit', $data);
    }

    public function update($id){
        
        $this->form_validation->set_rules('appointment_date','Appointment Date','required');
        $this->form_validation->set_rules('selected_service','Select Service','required');
        $this->form_validation->set_rules('name','Name','required|min_length[2]');
        $this->form_validation->set_rules('phone','Phone Number','required|integer');
        $this->form_validation->set_rules('email','Email Address','required|valid_email');
        $this->form_validation->set_rules('pet_number','Number of Pet(s)','required|integer');

        if($this->form_validation->run()){
            $data = [
                'appointment_date' => $this->input->post('appointment_date'),
                'selected_service' => $this->input->post('selected_service'),
                'name' => $this->input->post('name'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'pet_number' => $this->input->post('pet_number'),
                // post('something') is the name from the form
            ];

            // var_dump($data);
            $this->load->model('PetApptModel');
            $this->PetApptModel->updatePetAppt($data, $id);
            redirect(base_url('petappt'));
        } else {
            $this->edit($id);
        }    
    }

    public function delete($id){
        $this->load->model('PetApptModel');
        $this->PetApptModel->deletePetAppt($id);
        redirect(base_url('petappt'));
    }
}
?>
