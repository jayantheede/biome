<?php

namespace Controllers;

use Core\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $this->view('contact', [
            'title' => 'Contact Us | ReNu-Biome Dedicated Support',
            'meta_description' => 'Get in touch with ReNu-Biome. Fill out our contact form to learn more about our biologicals and sustainable farming solutions.'
        ], 'landing');
    }
}
