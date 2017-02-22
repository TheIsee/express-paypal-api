<?php

namespace App\Controllers;

use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class HomeController {

  public function index(Request $req, Response $res) {
    return 'world';
  }

}
