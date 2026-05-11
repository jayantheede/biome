<?php

namespace Controllers;

use Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home - Renu Biome | Futuristic Agriculture Biotech',
            'meta_description' => 'Engineering the Future of Regenerative Agriculture through microbial intelligence and sustainable innovation.',
            'og_image' => '/assets/images/og-home.jpg'
        ];
        
        $this->view('home', $data);
    }
}
