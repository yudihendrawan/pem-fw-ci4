<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
 public function index()
 {
  $header['title'] = 'Dashboard';
  echo view('admin/header', $header);
  echo view('admin/top_menu');
  echo view('admin/side_menu');
  echo view('admin/dashboard');
  echo view('admin/footer');
 }
}
