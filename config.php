<?php
define('DB_SERVER', 'mysql.railway.internal');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'BRrdJlfyiwKSzRLwgAfBXRMbSwncBfWI');
define('DB_NAME', 'hrailway');

try {
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>
