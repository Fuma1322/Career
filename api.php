<?php
header("Content-Type: application/json");

// Database connection parameters
$host = 'localhost';
$dbname = 'mycareer_platform.com'; // Replace with your database name
$username = 'root';     // Replace with your database username
$password = ' ';     // Replace with your database password

// Create a connection
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Return error message as JSON
    echo json_encode([
        "error" => true,
        "message" => "Database connection failed: " . $e->getMessage()
    ]);
    exit(); // Stop further execution
}

// Function to fetch all institutions
function fetchInstitutions($conn) {
    $stmt = $conn->prepare("SELECT * FROM institutions");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Function to insert a new institution
function addInstitution($conn, $data) {
    $stmt = $conn->prepare("INSERT INTO institutions (name, address, email, phone, admin_id) VALUES (:name, :address, :email, :phone, :admin_id)");
    $stmt->execute([
        ':name' => $data['name'],
        ':address' => $data['address'],
        ':email' => $data['email'],
        ':phone' => $data['phone'],
        ':admin_id' => $data['admin_id']
    ]);
    return ["success" => true];
}

// Function to update an existing institution
function updateInstitution($conn, $data) {
    $stmt = $conn->prepare("UPDATE institutions SET name = :name, address = :address, email = :email, phone = :phone WHERE id = :id");
    $stmt->execute([
        ':name' => $data['name'],
        ':address' => $data['address'],
        ':email' => $data['email'],
        ':phone' => $data['phone'],
        ':id' => $data['id']
    ]);
    return ["success" => true];
}

// Function to delete an institution
function deleteInstitution($conn, $id) {
    $stmt = $conn->prepare("DELETE FROM institutions WHERE id = :id");
    $stmt->execute([':id' => $id]);
    return ["success" => true];
}

// Handle incoming requests
$request_method = $_SERVER['REQUEST_METHOD'];

switch ($request_method) {
    case 'GET':
        $institutions = fetchInstitutions($conn);
        echo json_encode($institutions);
        break;

    case 'POST':
        $data = json_decode(file_get_contents("php://input"), true);
        $result = addInstitutions($conn, $data);
        echo json_encode($result);
        break;

    case 'PUT':
        $data = json_decode(file_get_contents("php://input"), true);
        $result = updateInstitutions($conn, $data);
        echo json_encode($result);
        break;

    case 'DELETE':
        parse_str(file_get_contents("php://input"), $_DELETE);
        $result = deleteInstitutions($conn, $_DELETE['id']);
        echo json_encode($result);
        break;

    default:
        echo json_encode([
            "error" => true,
            "message" => "Invalid request method"
        ]);
        break;
}

$conn = null; // Close the connection
