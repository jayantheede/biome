<?php

namespace Controllers\Api;

class AiController
{
    public function generateContent()
    {
        header('Content-Type: application/json');
        
        $data = json_decode(file_get_contents('php://input'), true);
        $prompt = $data['prompt'] ?? 'Optimize SEO text';
        $type = $data['type'] ?? 'rewrite'; // rewrite, seo_meta, expand
        
        // Mock AI integration (In reality, this would call OpenAI/Anthropic API)
        
        $mockResponses = [
            'rewrite' => "Renu Biome pioneers next-generation microbial ecosystems designed to maximize yield and restore planetary soil health.",
            'seo_meta' => "Boost your agricultural yield with Renu Biome's climate-positive biological fertilizers and microbial intelligence systems.",
            'expand' => "Our proprietary microbial consortia act as intelligent agents in the soil microbiome. By sequencing specific DNA traits from resilient strains, we have engineered a system that adapts to environmental stressors—such as drought or nutrient deficiency—and provides the exact biological compounds the plant needs at precisely the right time."
        ];
        
        $result = $mockResponses[$type] ?? $mockResponses['rewrite'];
        
        echo json_encode([
            'status' => 'success',
            'data' => [
                'generated_text' => $result,
                'tokens_used' => 45,
                'model' => 'gpt-4-enterprise'
            ]
        ]);
        http_response_code(200);
    }

    public function analyzeSeo()
    {
        header('Content-Type: application/json');
        
        // Mock SEO Auto-Deduction Engine Response
        echo json_encode([
            'status' => 'success',
            'data' => [
                'overall_score' => 92,
                'performance_score' => 98,
                'accessibility_score' => 100,
                'seo_score' => 88,
                'content_health_score' => 95,
                'issues' => [
                    [
                        'type' => 'warning',
                        'message' => 'Missing canonical URL on /technology/microbes',
                        'ai_suggestion' => 'Set canonical to https://renu-biome.com/technology'
                    ],
                    [
                        'type' => 'error',
                        'message' => 'Duplicate H1 tag detected on Product Page',
                        'ai_suggestion' => 'Change second H1 to H2'
                    ]
                ]
            ]
        ]);
        http_response_code(200);
    }
}
