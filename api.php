//php
// Set headers to allow public access and specify JSON content type
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');  // Enable CORS for cross-domain access

// Set default timezone (UTC is specified)
date_default_timezone_set('UTC');

// Get current datetime in ISO 8601 format
$currentDateTime = date('c');

// Create response array
$response = [
    'timestamp' => $currentDateTime,
    'email' => 'kennybajomo@gmail.com',
    'github' => 'https://github.com/d0bbl'
];

// Encode and output the JSON response
//echo json_encode($response);



<?php
try {
    // Initialize default status
    $statusCode = 200;
    
    // Configure environment
    if (!date_default_timezone_set('UTC')) {
        throw new Exception('Failed to set timezone');
    }

    // Generate timestamp
    $currentDateTime = date('c');
    if (!$currentDateTime) {
        throw new Exception('Failed to generate timestamp');
    }

    // Build response
    $response = [
        'timestamp' => $currentDateTime,
        'email' => 'kennybajomo@gmail.com',
        'github' => 'https://GitHub.com/d0bbl'
    ];

} catch (Exception $e) {
    // Set error status
    $statusCode = 500;
    $response = [
        'status' => $statusCode,
        'timestamp' => null,
        'email' => null,
        'github' => null,
        'error' => $e->getMessage()
    ];
}

// Set HTTP status code
http_response_code($statusCode);

// Send headers
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Output JSON
echo json_encode($response);
?>
