<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function getList($title = 'list item')
    {
      $data = [
        'title' => $title,
        'content' =>  'The title is: ' . $title,
      ];
      return view('demo', $data);
    }

    public function postData($id = 1)
    {
      $data = [
        'title' => 'Post page',
        'content' =>  'Post ID is: ' . $id,
      ];
      return view('demo', $data);
    }
}
