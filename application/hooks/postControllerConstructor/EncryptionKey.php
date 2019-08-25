<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EncryptionKey {
  protected $CI;

  public function __construct()
  {
    $this->CI =& get_instance();
  }
  
  public function change() {
    $this->CI->load->library('encryption');
    $key = bin2hex($this->CI->encryption->create_key(16));
    $this->CI->config->set_item('encryption_key', hex2bin($key));
  }
}