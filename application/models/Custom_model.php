<?php
class Custom_model extends CI_Model {
        
        public function save_category_info(){

                $data = array();
                $data['category_name'] = $this->input->post('name', TRUE);
                $data['category_description'] = $this->input->post('description', TRUE);

                  $config['upload_path'] = 'uploads/';
                  $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
                  $config['max_size'] = 2048000;
                  $config['max_width'] = 2024;
                  $config['max_height'] = 2024;

                  $this->upload->initialize($config);

                  if ( $this->upload->do_upload('category_image')) {
                        $form_data = $this->input->post();
                        $upload_file = $this->upload->data();
                        $img_name = $upload_file['file_name'];

                        $data['category_image'] = $config['upload_path'].$img_name;
                        //$data['error'] = $this->upload->display_errors();

                  } else {

                        echo "Error Upload File.";
                  }

                $this->db->insert('category', $data);
        }

        public function manage_category_info(){
                $this->db->select('*');
                $this->db->from('category');
                $category_data = $this->db->get();
                $result = $category_data->result();
                return $result;
        }

        public function edit_category_by_id($id){
                $this->db->select('*');
                $this->db->from('category');
                $this->db->where('category_id', $id);
                $category_data_by_id = $this->db->get();
                $category_row = $category_data_by_id->row();
                return $category_row;
        }

        public function update_category_by_id(){
                $data = array();
                $single_id = $this->input->post('category_id', TRUE);
                $data['category_name'] = $this->input->post('name', TRUE);
                $data['category_description'] = $this->input->post('description', TRUE);


                  $config['upload_path'] = 'uploads/';
                  $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
                  $config['max_size'] = 2048000;
                  $config['max_width'] = 2024;
                  $config['max_height'] = 2024;

                  $this->upload->initialize($config);

                  if ( $this->upload->do_upload('category_image')) {
                        //$form_data = $this->input->post();
                        $upload_file = $this->upload->data();
                        $img_name = $upload_file['file_name'];

                        $data['category_image'] = $config['upload_path'].$img_name;
                        
                        //$data['error'] = $this->upload->display_errors();

                  } else {

                        echo "Error Upload File.";
                  }



                $this->db->where('category_id', $single_id);
                $this->db->update('category', $data);
        }

        public function delete_category_by_id($id){
                $this->db->where('category_id', $id);
                $this->db->delete('category');
        }
}