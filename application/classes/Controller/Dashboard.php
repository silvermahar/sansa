<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dashboard extends Controller_Template
{

    public function action_index()
    {
        $tweet = $this->request->post('tweet');

    }

} // End Welcome
