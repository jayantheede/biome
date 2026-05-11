-- SaaS Enterprise Database Schema

CREATE TABLE tenants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    company_name VARCHAR(255) NOT NULL,
    subdomain VARCHAR(100) UNIQUE NOT NULL,
    custom_domain VARCHAR(255) UNIQUE,
    status ENUM('active', 'suspended', 'trial') DEFAULT 'trial',
    trial_ends_at TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE subscriptions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tenant_id INT,
    stripe_customer_id VARCHAR(255),
    stripe_subscription_id VARCHAR(255),
    plan_tier ENUM('starter', 'professional', 'enterprise') DEFAULT 'starter',
    status ENUM('active', 'canceled', 'past_due') DEFAULT 'active',
    current_period_end TIMESTAMP NULL,
    FOREIGN KEY (tenant_id) REFERENCES tenants(id) ON DELETE CASCADE
);

CREATE TABLE roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) UNIQUE NOT NULL, 
    permissions JSON,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tenant_id INT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role_id INT,
    is_active BOOLEAN DEFAULT TRUE,
    last_login TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (tenant_id) REFERENCES tenants(id) ON DELETE CASCADE,
    FOREIGN KEY (role_id) REFERENCES roles(id) ON DELETE SET NULL
);

CREATE TABLE login_activity (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    ip_address VARCHAR(45),
    user_agent TEXT,
    login_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE pages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tenant_id INT,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    layout_data JSON, 
    status ENUM('draft', 'published') DEFAULT 'draft',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (tenant_id) REFERENCES tenants(id) ON DELETE CASCADE,
    UNIQUE KEY tenant_slug (tenant_id, slug)
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tenant_id INT,
    name VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    short_description TEXT,
    full_description LONGTEXT,
    status ENUM('draft', 'published') DEFAULT 'draft',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (tenant_id) REFERENCES tenants(id) ON DELETE CASCADE
);

-- Insert Default SaaS Admin
INSERT INTO tenants (id, company_name, subdomain, status) VALUES (1, 'ReNu-Biome', 'renu-biome', 'active');
INSERT INTO subscriptions (tenant_id, plan_tier, status) VALUES (1, 'enterprise', 'active');
INSERT INTO roles (id, name, permissions) VALUES (1, 'super_admin', '["all"]'), (2, 'tenant_admin', '["tenant_all"]');
INSERT INTO users (tenant_id, name, email, password, role_id) VALUES (1, 'SaaS Admin', 'admin@renu-biome.com', 'password', 1);

-- Seed Real Website Data for CMS
INSERT INTO products (tenant_id, name, slug, short_description, status) VALUES 
(1, 'Green Nitrogen', 'green-nitrogen', 'Sustainable nitrogen fixation to significantly reduce the need for synthetic N applications.', 'published'),
(1, 'Peptide Nutrition', 'peptide-nutrition', 'Targeted peptide formulas designed to enhance plant health and stress tolerance.', 'published'),
(1, 'Bee Bloom', 'bee-bloom', 'Natural pheromones and attractants to drastically improve pollination rates.', 'published');
