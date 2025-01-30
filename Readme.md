---

# DeerSAPI Documentation  
**Simple Public API for Developer Profile Information**  

## 📝 Project Description  
This API provides real-time timestamp information along with static developer contact details in JSON format. Built with vanilla PHP, it serves as a lightweight solution for displaying ISO 8601 formatted timestamps with associated profile information.  

Key Features:  
- Real-time UTC timestamp generation  
- Public CORS policy  
- JSON response format  
- Minimal dependencies  

---

## 🛠 Setup Instructions  

### Prerequisites  
- PHP 7.4 or newer  
- Web server (Apache/Nginx) or PHP built-in server  
- (Optional) XAMPP/WAMP/MAMP for local development  

### Local Installation  
1. Create new file `api.php`  
2. Copy the following code:  
```php
<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
date_default_timezone_set('UTC');

$response = [
    'timestamp' => date('c'),
    'email' => 'kennybajomo@gmail.com',
    'github' => 'https://GitHub.com/d0bbl'
];

echo json_encode($response);
?>
```  

3. Place file in web server root directory:  
   - XAMPP: `htdocs/`  
   - Nginx: `/var/www/html/`  
   - Apache: Typically `/var/www/html/`  

4. Start server:  
```bash
php -S localhost:8000  # PHP built-in server
```  

5. Test locally:  
```bash
curl http://localhost:8000/api.php
```  

---

## 🌐 API Documentation  

### Base URL  
`https://deersapi.com/api.php`  

### Endpoint  
**GET /**  
Returns developer information with current timestamp  

#### Request Format  
```http
GET /api.php HTTP/1.1
Host: deersapi.com
```  

#### Response Format  
```json
{
    "timestamp": "ISO 8601 datetime",
    "email": "string",
    "github": "URL"
}
```  

#### Example Response  
```json
{
    "timestamp": "2023-09-20T18:23:45+00:00",
    "email": "kennybajomo@gmail.com",
    "github": "https://GitHub.com/d0bbl"
}
```  




#### Example Usage  
**cURL:**  
```bash
curl -X GET https://deersapi.com/api.php
```  

**JavaScript:**  
```javascript
fetch('https://deersapi.com/api.php')
  .then(response => response.json())
  .then(data => console.log(data));
```  

**Python:**  
```python
import requests
response = requests.get('https://deersapi.com/api.php')
print(response.json())
```  

---

## ⚙️ Technical Specifications  

| Feature          | Details                             |
|------------------|-------------------------------------|
| HTTP Methods     | GET                                 |
| Authentication   | None                                |
| Rate Limiting    | Not implemented                     |
| Response Time    | < 100ms (typical)                   |
| Data Formats     | JSON only                           |

---

## 🔢 Status Codes  

| Code | Message          | Description                     |
|------|------------------|---------------------------------|
| 200  | OK               | Successful request              |
| 500  | Internal Error   | Server-side issue (if occurred) |

---

## 🌍 Production Deployment  
For public access:  
1. Purchase domain and hosting  
2. Upload `api.php` to server root  
3. Configure SSL certificate (HTTPS)  
4. Set up DNS records  

---

## 📄 License  
Public Domain - Free for unlimited use  

---

This documentation provides complete information for both developers implementing the API and administrators maintaining the service. The simple structure ensures easy integration while maintaining reliability for timestamp-sensitive applications.