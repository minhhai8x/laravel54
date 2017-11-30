<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function getList($title = 'list item')
    {
      return 'Demo page ' . $title;
    }

    public function postData($id = 1)
    {
      return 'Demo POST page with ID: ' . $id;
    }
}
