<?php
require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email format.']);
        exit;
    }

    // Check domain exists
    $domain = substr(strrchr($email, "@"), 1);
    if (!checkdnsrr($domain, "MX")) {
        echo json_encode(['status' => 'error', 'message' => 'Email domain does not exist.']);
        exit;
    }

    // Check document exists
    $version = $_POST['version'] ?? '';

    $docsMap = [
        'blog_6_11' => __DIR__ . '/docs/doc_6_11.pdf',
        'blog_7_11' => __DIR__ . '/docs/doc_7_11.pdf',
        'blog_8_11' => __DIR__ . '/docs/doc_8_11.pdf',
        'blog_9_11' => __DIR__ . '/docs/doc_9_11.pdf',
        'blog_10_11' => __DIR__ . '/docs/doc_10_11.pdf',
    ];

    $titlesMap = [
        'blog_6_11' => 'Laravel 6 to 11 Upgrade Document',
        'blog_7_11' => 'Laravel 7 to 11 Upgrade Document',
        'blog_8_11' => 'Laravel 8 to 11 Upgrade Document',
        'blog_9_11' => 'Laravel 9 to 11 Upgrade Document',
        'blog_10_11' => 'Laravel 10 to 11 Upgrade Document',
    ];
    
    // Validate version and path
    if (!isset($docsMap[$version]) || !file_exists($docsMap[$version])) {
        echo json_encode(['status' => 'error', 'message' => 'Document not found for this version.']);
        exit;
    }
    
    $documentPath = $docsMap[$version];
    $emailTitle   = $titlesMap[$version] ?? 'Laravel Upgrade Document';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = $_ENV['SMTP_HOST'];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['SMTP_USERNAME'];
        $mail->Password = $_ENV['SMTP_PASSWORD'];
        $mail->SMTPSecure = "tls";
        $mail->Port = $_ENV['SMTP_PORT'];

        $mail->setFrom($_ENV['SMTP_FROM_EMAIL'], $_ENV['SMTP_FROM_NAME']);
        $mail->addAddress($email);
        $mail->Subject = $emailTitle;
        $mail->isHTML(true);
        $mail->Body = '
            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="padding:20px; background-color:#f8f9fa;">
                <tr>
                    <td align="center">
                        <table width="600" cellpadding="0" cellspacing="0" border="0" style="background-color:#ffffff;border-radius:8px;overflow:hidden;font-family:Arial,sans-serif;">
                            <tr>
                                <td style="background-color:#193b68;color:#ffffff;padding:15px 20px;font-size:18px;font-weight:bold;">
                                    ' . htmlspecialchars($emailTitle) . '
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:20px;color:#333;font-size:14px;line-height:1.6;">
                                    <p>Hello,</p>
                                    <p>
                                        Please find the version upgrade document attached to this email.
                                        If you need further assistance, contact us at 
                                        <a href="mailto:enquiry@itpathsolutions.com" style="color:#09274e;">enquiry@itpathsolutions.com</a>.
                                    </p>
                                    <p style="margin-top:20px;">Best regards,<br>
                                    <strong style="color:#09274e;">Laravel App Team</strong><br>
                                    <span style="font-size:12px;color:#777;">no-reply@yourdomain.com</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background-color:#e9ecef;padding:10px;text-align:center;font-size:12px;color:#777;">
                                    &copy; ' . date('Y') . ' Laravel App. All rights reserved.
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        ';    

        $mail->addAttachment($documentPath);

        $mail->send();
        echo json_encode(['status' => 'success', 'message' => 'Document sent successfully!']);
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'Error sending document: ' . $mail->ErrorInfo]);
    }
}
