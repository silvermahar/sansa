<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dashboard extends Controller_Template
{

    public function action_index()
    {
        $new_tweet = $this->request->post('tweet');
        if (strlen($new_tweet) > 0) {
            $tweet_model = new Model_Tweet;
            $tweet_model->add_new($new_tweet);
            Notify::info('Success!');
        }
    }

} // End Welcome
