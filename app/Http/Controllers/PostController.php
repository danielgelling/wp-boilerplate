<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public function edit()
    {
        add_action('add_meta_boxes', function () {
            add_meta_box(
                'my-meta-box',
                __( 'My Meta Box ohe' ),
                function () { echo 'fp'; },
                ['post', 'page'],
                'normal',
                'default'
            );
        });
    }
}
