<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars(trim($_POST['name']));
    $email   = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Thank You - Jeanessa</title>
        <link rel="stylesheet" href="style.css">
        <style>
            /* Specific styles for the thank you page - override or extend main style.css as needed */
            body {
                background: #f3f9ff;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh; /* Use min-height to ensure it works on short content */
                margin: 0;
                padding: 20px; /* Add some padding for mobile */
                box-sizing: border-box;
            }
            .thankyou-container {
                background: #fff;
                padding: 48px 36px;
                border-radius: 12px;
                box-shadow: 0 8px 32px rgba(28,58,112,0.18); /* Stronger, softer shadow */
                text-align: center;
                max-width: 480px; /* Slightly wider */
                width: 100%; /* Ensure it's responsive */
            }
            .thankyou-container h2 {
                color: #0d2a58; /* Deeper blue */
                margin-bottom: 24px; /* More space */
                font-size: 2.2em; /* Larger heading */
            }
            .thankyou-container p {
                color: #4e4e4e; /* Softer text color */
                margin-bottom: 12px;
                font-size: 1.1em; /* Slightly larger text */
                line-height: 1.6;
            }
            .thankyou-container strong {
                color: #0d2a58; /* Highlight strong text */
            }
            .thankyou-container p strong {
                display: block; /* Ensure message title is on new line */
                margin-top: 20px;
                margin-bottom: 8px;
            }
            .thankyou-container .back-link {
                display: inline-block;
                margin-top: 30px; /* More space */
                padding: 10px 25px; /* Add padding for button-like feel */
                background-color: #1a427a; /* Blue background */
                color: #fff;
                text-decoration: none;
                font-weight: 500;
                font-size: 1.05em;
                border-radius: 6px;
                transition: background-color 0.3s ease, transform 0.2s ease;
            }
            .thankyou-container .back-link:hover {
                background-color: #ffc107; /* Gold on hover */
                color: #0d2a58; /* Dark text on gold */
                transform: translateY(-2px);
            }
        </style>
    </head>
    <body>
        <div class="thankyou-container">
            <h2>Thank you, ' . $name . '!</h2>
            <p>We have received your message and will get back to you at <b>' . $email . '</b>.</p>
            <p><strong>Your Message:</strong></p>
            <p style="font-style:italic; color:#1a427a; padding: 0 15px;">' . nl2br($message) . '</p>
            <a class="back-link" href="index.html">&larr; Back to Jeanessa</a>
        </div>
    </body>
    </html>';
} else {
    echo "<p>Invalid request.</p>";
}
?>
