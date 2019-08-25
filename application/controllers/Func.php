<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Func extends CI_Controller {
  public function set_menu() {
    $status = $this->input->post('status', TRUE);
    if ($status !== NULL) {
      $this->session->set_userdata('is_open', $status);

      $result = array(
        'status'  =>  $status,
        'success' =>  $this->session->userdata('is_open') === $status ? true : false,
        'result'  =>  $this->session->userdata('is_open')
      );
      
      echo json_encode($result);
    } else {
      show_404();
    }
  }
}