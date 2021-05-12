<?php
    class C_compteur extends CI_Controller{
        public function afficher_compteur(){
            $data['result'] = $this->D_compteur->get_compteur();
            $this->load->view('templates/header');
            $this->load->view('V_compteur',$data);
            $this->load->view('templates/footer');
        }

        public function insert_compteur(){
            $code = $this->input->post('code');
            $type = $this->input->post('type');

            if($code == "" || $type == ""){
                $this->session->set_flashdata('error', 'Error Message...');
                redirect(base_url().'C_compteur/afficher_compteur');
            }else{
                $data = array(
                    'code_compteur' => $code,
                    'type_compteur' => $type,
                );
                $this->D_compteur->insert_compteur_db($data);
                $this->session->set_flashdata('success', 'insert...');
                redirect(base_url('compteur'));
            }
            
        }

        public function delete_compteur($id){
            $this->D_compteur->delete_compteur_db($id);
            $this->session->set_flashdata('error', 'deleted...');
            redirect(base_url('compteur'));
        }

        public function edit_compteur($id){
            $data['result'] = $this->D_compteur->edit_compteur_db($id);
            $this->load->view('templates/header');
            $this->load->view('V_edit_compteur',$data);
            $this->load->view('templates/footer');
        }

        public function update_compteur($id){
            $code = $this->input->post('code');
            $type = $this->input->post('type');

            if ($code == "" || $type == "") {
                $this->session->set_flashdata('error', 'update');
                redirect(base_url('compteur'));
            }
            else{
                $data = array(
                    'code_compteur' => $code,
                    'type_compteur' => $type
                );
                $this->D_compteur->update_compteur_db($id, $data);
                redirect(base_url().'C_compteur/afficher_compteur');
            }
        }
    }
?>