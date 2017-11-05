    <?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Question extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Ques_model');
        is_protected();
    }

    public function index() {

        redirect('');
    }

    public function add() {

        if ($this->form_validation->run('question/add') == TRUE) {
            
            if ($this->Ques_model->register()) {

                set_flashdata('success', 'Successfully Added');
               
                redirect('/sets/listing');
            } else {

                
                set_flashdata('error', 'Not Added');
            }
        }        
        $data['title'] = 'Litmus Zone : Sets';
        $data['page_title'] = 'Dashboard';
        $data['page_name'] = 'Add Sets';
        $data['page'] = 'add';
        $data['total_result'] = $this->Ques_model->total_user_result();
        $data['total_user'] = $this->Ques_model->total_user();
        _layoutss($data);
        
        
    }

    public function update($ids) {

        $id = ID_decode($ids);
//        echo $id;
//        pr($_POST); die;

        if ($this->Ques_model->update($id)) {

             set_flashdata('success', 'Updated successfully');
            redirect("sets/listing");
        } else {


            set_flashdata('error', 'Not Updated With Us');
            redirect('sets/view_listing/$ids');
        }
    }

    public function delete($listid = null) {
        $encode = ID_decode($listid);
        if (isset($encode)) {
            $status = $this->Ques_model->valid_user($encode);
            if ($status) {

                $status = $this->Ques_model->deleteuser($encode);
                
                set_flashdata('success', 'Sets has been deleted successfully');
                redirect('sets/listing');
            } else {

                set_flashdata('error', 'Sorry, Sets cannot deleted Some Dependencies are left at Sub-Sets');
                redirect('sets/listing');
            }
        } else {

            //it means value is not set!!!
            set_flashdata('error', 'Sorry Sets is not avaliable');
            redirect('sets/listing');
        }
    }

    public function listing() {

        
        $data['title'] = 'Litmus Zone : Sets';
        $data['page_title'] = 'Dashboard';
        $data['page_name'] = 'List Sets';
        $data['page'] = 'list';
        $data['total_result'] = $this->Ques_model->total_user_result();
//        $data['total_user'] = $this->Ques_model->total_user();
        _layoutss($data);
    }

    public function view_listing($id = null) {
        $view_id = ID_decode($id);

        $data['user'] = $this->Ques_model->view_user($view_id);
        $data['title'] = 'Litmus Zone : Sets';
        $data['page_title'] = 'Dashboard';
        $data['page_name'] = 'View Sets';
        $data['page'] = 'view';

        _layoutss($data);
    }

}
