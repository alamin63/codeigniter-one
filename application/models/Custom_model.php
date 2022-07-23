<?php
class Custom_model extends CI_Model {

        public function save_category(){
                $data = array();
                $data['category_name'] = $this->input->post('name', TRUE);
                $data['category_description'] = $this->input->post('description', TRUE);
                $this->db->insert('category', $data);
        }

        public function manage_category_info(){
                $this->db->select('*');
                $this->db->from('category');
                $all_category = $this->db->get();
                $all_info = $all_category->result();
                return $all_info;
        }

        public function edit_category_by_id($category_id){
                $this->db->select('*');
                $this->db->from('category');
                $this->db->where('category_id', $category_id);
                $all_data = $this->db->get();
                $single_data = $all_data->row();
                return $single_data;
        }

        public function update_category_by_id(){
                $data = array();
                $single_id = $this->input->post('category_id', TRUE);
                $data['category_name'] = $this->input->post('name', TRUE);
                $data['category_description'] = $this->input->post('description', TRUE);
                $this->db->where('category_id', $single_id);
                $this->db->update('category', $data);
        }
}