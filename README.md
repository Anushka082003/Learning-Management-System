<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        h2 {
            color: #1a73e8;
            border-bottom: 2px solid #1a73e8;
            padding-bottom: 5px;
        }
        ul, ol {
            margin: 20px 0;
            padding-left: 20px;
        }
        ul li, ol li {
            margin-bottom: 10px;
            line-height: 1.6;
        }
        .badge {
            display: inline-block;
            padding: 5px 10px;
            background-color: #1a73e8;
            color: white;
            border-radius: 5px;
            font-size: 14px;
            margin: 0 auto;
            text-align: center;
        }
        .center {
            text-align: center;
        }
        .code {
            background-color: #f4f4f4;
            border-left: 5px solid #1a73e8;
            padding: 10px;
            margin: 20px 0;
            font-family: 'Courier New', Courier, monospace;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #1a73e8;
            color: white;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Learning Management System</h1>

        <div class="center">
            <span class="badge">Version 1.0</span>
        </div>

        <p class="center">
            This Learning Management System (LMS) is a comprehensive web-based platform built using PHP and MySQLi, designed to facilitate online learning and course management.
        </p>

        <h2>✨ Features</h2>
        <ul>
            <li>Interactive dashboard for students, faculty, and administrators.</li>
            <li>Course creation, management, and content delivery.</li>
            <li>Assignment submission, grading, and feedback system.</li>
            <li>Student performance tracking and analytics.</li>
            <li>Responsive design for use across devices.</li>
        </ul>

        <h2>🚀 Installation Instructions</h2>
        <ol>
            <li>Download and install XAMPP.</li>
            <li>Run the XAMPP control panel and start MySQL and Apache.</li>
            <li>Download the LMS zip file and extract it into <code>htdocs</code> inside the XAMPP folder.</li>
            <li>Open a browser and navigate to <code>http://localhost/phpmyadmin/</code>.</li>
            <li>Create a new database named <strong>elearning</strong>.</li>
            <li>Click on <strong>Import</strong> and choose the SQL file from the LMS folder.</li>
            <li>Click <strong>Go</strong> to import the database.</li>
            <li>Open the LMS by visiting <code>http://localhost/Learning-Management-System</code> in the browser.</li>
        </ol>

        <h2>💻 Usage</h2>
        <p>Use the following credentials to log in:</p>
        <ul>
            <li><strong>Admin:</strong> Username: <code>admin</code>, Password: <code>admin123</code></li>
            <li><strong>Faculty:</strong> Faculty ID: <code>12345</code>, Password: <code>12345</code></li>
        </ul>

        <h2>🛠 Technologies Used</h2>
        <ul>
            <li><strong>Backend:</strong> PHP, MySQLi</li>
            <li><strong>Frontend:</strong> HTML, CSS, JavaScript</li>
            <li><strong>Database:</strong> MySQL</li>
        </ul>

        <h2>🤝 Contributing</h2>
        <p>We welcome contributions! To contribute, follow these steps:</p>
        <ol>
            <li>Fork the repository.</li>
            <li>Create a new branch: <code>git checkout -b feature-branch</code></li>
            <li>Make your changes and commit them: <code>git commit -m 'Add new feature'</code></li>
            <li>Push to the branch: <code>git push origin feature-branch</code></li>
            <li>Create a Pull Request.</li>
        </ol>

        <footer>
            <p>© 2024 Anushka082003</p>
        </footer>
    </div>

</body>
</html>
