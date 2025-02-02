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
        'current_datetime' => $currentDateTime,
        'email' => 'kennybajomo@gmail.com',
        'github_url' => 'https://github.com/d0bbl/hng_stage_zero_task'
    ];

} catch (Exception $e) {
    // Set error status
    $statusCode = 500;
    $response = [
        'status' => $statusCode,
        'current_datetime' => null,
        'email' => null,
        'github_url' => null,
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
