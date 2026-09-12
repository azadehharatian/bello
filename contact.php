<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(strip_tags($_POST['name'] ?? ''));
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $quantity = filter_var($_POST['quantity'] ?? 1, FILTER_VALIDATE_INT);

    if (empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL) || $quantity < 1) {
        echo json_encode(['success' => false, 'message' => 'Invalid input provided.']);
        exit;
    }

    // Since this is a demo, we will pretend we sent an email and saved to DB
    // In a real scenario, you'd use mail() or PHPMailer and PDO for DB storage.
    
    $to = 'sales@bello-robotics.com';
    $subject = 'New Bello Order Request';
    $message = "Name: $name\nEmail: $email\nQuantity: $quantity";
    $headers = "From: webmaster@bello-robotics.com" . "\r\n" .
               "Reply-To: $email";

    // Uncomment to actually send mail if server is configured
    // mail($to, $subject, $message, $headers);

    // Simulated success
    echo json_encode(['success' => true, 'message' => 'Order request received successfully.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>
