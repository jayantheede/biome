<?php

namespace Controllers;

use Core\Controller;

class PageController extends Controller
{
    public function __call($name, $arguments)
    {
        // Simple fallback to render pages based on method name
        $pageTitles = [
            'about' => 'About Us - Renu Biome',
            'rd' => 'Research & Development - Renu Biome',
            'sustainability' => 'Sustainability - Renu Biome',
            'technology' => 'Technology - Renu Biome',
            'innovationLab' => 'Innovation Lab - Renu Biome',
            'climateSolutions' => 'Climate Solutions - Renu Biome',
            'investors' => 'Investor Relations - Renu Biome',
            'careers' => 'Careers - Renu Biome',
            'globalPresence' => 'Global Presence - Renu Biome',
        ];

        $title = isset($pageTitles[$name]) ? $pageTitles[$name] : ucfirst($name) . ' - Renu Biome';

        $data = [
            'title' => $title,
            'meta_description' => 'Learn more about ' . $title . ' at Renu Biome.',
        ];
        
        // Map camelCase to kebab-case for view files
        $viewName = strtolower(preg_replace('/(?<!^)[A-Z]/', '-$0', $name));
        
        $this->view($viewName, $data);
    }
}
