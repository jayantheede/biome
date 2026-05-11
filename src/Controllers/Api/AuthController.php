<?php

namespace Controllers\Api;

class AuthController
{
    public function login()
    {
        header('Content-Type: application/json');
        session_start();
        
        $data = json_decode(file_get_contents('php://input'), true);
        
        // In a real implementation, you would query the database here:
        // $db = \Config\Database::getConnection();
        // $stmt = $db->prepare("SELECT * FROM users WHERE email = :email");
        // $stmt->execute(['email' => $data['email']]);
        // $user = $stmt->fetch();
        // if ($user && password_verify($data['password'], $user['password'])) {
        
        // For MVP, checking against the default admin seeded in schema.sql
        if (isset($data['email']) && $data['email'] === 'admin@renu-biome.com' && isset($data['password']) && $data['password'] === 'password') {
            
            // Session Security Implementation
            session_regenerate_id(true); // Prevent Session Fixation
            $_SESSION['user_id'] = 1;
            $_SESSION['role'] = 'super_admin';
            $_SESSION['user_ip'] = $_SERVER['REMOTE_ADDR'];
            
            echo json_encode([
                'status' => 'success',
                'message' => 'Authenticated successfully',
                'redirect' => '/admin/dashboard'
            ]);
            http_response_code(200);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid email or password']);
            http_response_code(401);
        }
    }
}
