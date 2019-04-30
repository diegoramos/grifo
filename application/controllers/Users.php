<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		if($this->session->userdata('user_id') <= 0 )
        {
            redirect('login');
        }
		$this->load->model('User');
	}

	// List all your items
	public function index( $offset = 0 )
	{
		$data['title'] = 'Usuarios';
		$this->load->view('template/header', $data, FALSE);
		$this->load->view('template/menu', $data, FALSE);
		$this->load->view('users', $data, FALSE);
		$this->load->view('template/footer', $data, FALSE);
	}

	public function ajax_list()
	{
		$list = $this->User->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $user) {
			$no++;
			$row = array();
			$row[] = $user->first_name;
			$row[] = $user->last_name;
			$row[] = $user->email;
			$row[] = $user->username;
			$row[] = '<a class="btn btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_user('.$user->user_id.')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				<a class="btn btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_user('.$user->user_id.')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->User->count_all(),
						"recordsFiltered" => $this->User->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);

	}

	public function ajax_edit($id)
	{
		$data = $this->User->get_by_id($id);
		//$data->birth_date = ($data->birth_date == '0000-00-00') ? '' : $data->birth_date; // if 0000-00-00 set tu empty for datepicker compatibility
		echo json_encode($data);
	}

    public function ajax_add()
    {
        $this->_validate();
        $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'status' => $this->input->post('status'),
            );
        $insert = $this->User->save($data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_update()
    {
        $this->_validate(1);
        $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'status' => $this->input->post('status'),
            );
			if ($this->input->post('password') != '') {
				$data['password'] = md5($this->input->post('password'));
			}

        $this->User->update(array('user_id' => $this->input->post('user_id')), $data);
        echo json_encode(array("status" => TRUE));
    }
 
    public function ajax_delete($id)
    {
        $this->User->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
 
    private function _validate($estado = 0)
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;
 
        if($this->input->post('first_name') == '')
        {
            $data['inputerror'][] = 'first_name';
            $data['error_string'][] = 'Nombre es requerido';
            $data['status'] = FALSE;
        }
 
        if($this->input->post('last_name') == '')
        {
            $data['inputerror'][] = 'last_name';
            $data['error_string'][] = 'Apellido es requerido';
            $data['status'] = FALSE;
        }
 
        if($this->input->post('username') == '')
        {
            $data['inputerror'][] = 'username';
            $data['error_string'][] = 'Usuario es requerido';
            $data['status'] = FALSE;
        }
 		if ($estado!=1) {
 			if($this->input->post('password') == '')
	        {
	            $data['inputerror'][] = 'password';
	            $data['error_string'][] = 'Contraseña es requerido';
	            $data['status'] = FALSE;
	        }
 		}
        
 
        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }
}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */
