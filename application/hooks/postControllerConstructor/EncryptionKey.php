<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EncryptionKey {
  public function __construct() {}
  
  public function change() {
    $CI =& get_instance();
  
    $CI->load->library('encryption');
    $key = bin2hex($CI->encryption->create_key(16));
    $CI->config->set_item('encryption_key', hex2bin($key));
  }
}