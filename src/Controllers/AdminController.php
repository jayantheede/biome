<?php

namespace Controllers;

use Core\Controller;

class AdminController extends Controller
{
    public function login()
    {
        // Simple View renderer for admin login
        $data = [
            'title' => 'Admin Login - Renu Biome CMS',
        ];
        
        $this->viewAdmin('login', $data);
    }

    public function dashboard()
    {
        session_start();
        
        // Session Security Check
        if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'super_admin') {
            header('Location: /login');
            exit;
        }
        
        // Anti-hijacking check
        if ($_SESSION['user_ip'] !== $_SERVER['REMOTE_ADDR']) {
            session_destroy();
            header('Location: /login');
            exit;
        }

        $data = [
            'title' => 'Enterprise CMS Dashboard',
        ];
        
        $this->viewAdmin('dashboard', $data);
    }
    
    public function products()
    {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }

        // Simulating DB fetch for MVP without needing active PDO connection
        // In full production, this would be: 
        // $stmt = $db->query("SELECT * FROM products WHERE tenant_id = 1");
        $products = [
            ['name' => 'Green Nitrogen', 'slug' => 'green-nitrogen', 'status' => 'published', 'desc' => 'Sustainable nitrogen fixation to significantly reduce the need for synthetic N applications.'],
            ['name' => 'Peptide Nutrition', 'slug' => 'peptide-nutrition', 'status' => 'published', 'desc' => 'Targeted peptide formulas designed to enhance plant health and stress tolerance.'],
            ['name' => 'Bee Bloom', 'slug' => 'bee-bloom', 'status' => 'published', 'desc' => 'Natural pheromones and attractants to drastically improve pollination rates.']
        ];

        $this->viewAdmin('products', ['title' => 'Manage Products', 'products' => $products]);
    }

    protected function viewAdmin($view, $data = [])
    {
        extract($data);
        $viewFile = BASE_PATH . '/src/Views/pages/admin/' . $view . '.php';
        
        if (file_exists($viewFile)) {
            require BASE_PATH . '/src/Views/layouts/admin.php';
        } else {
            die("Admin View does not exist: " . $viewFile);
        }
    }
}
