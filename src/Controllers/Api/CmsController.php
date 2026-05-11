<?php

namespace Controllers\Api;

class CmsController
{
    public function getPages()
    {
        header('Content-Type: application/json');
        
        // Mock returning pages from the DB for the Page Builder
        echo json_encode([
            'status' => 'success',
            'data' => [
                ['id' => 1, 'title' => 'Home', 'slug' => '/', 'status' => 'published'],
                ['id' => 2, 'title' => 'About Us', 'slug' => '/about', 'status' => 'published'],
                ['id' => 3, 'title' => 'Technology', 'slug' => '/technology', 'status' => 'draft']
            ]
        ]);
        http_response_code(200);
    }

    public function savePage()
    {
        header('Content-Type: application/json');
        
        $data = json_decode(file_get_contents('php://input'), true);
        
        // Mock save logic
        // $db = \Config\Database::getConnection();
        // Insert into pages table...
        
        echo json_encode([
            'status' => 'success',
            'message' => 'Page layout saved successfully via drag and drop builder.',
            'timestamp' => time()
        ]);
        http_response_code(200);
    }
}
