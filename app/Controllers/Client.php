<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Client extends Controller{

  public function index(){

    return view('client/ajout.php');
  }
}
?>