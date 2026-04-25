<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel on AWS EC2 | CI/CD Pipeline Active</title>
    <meta name="description" content="Your Laravel application successfully deployed on AWS EC2 with GitHub Actions CI/CD">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            width: 100%;
            background: white;
            border-radius: 30px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            overflow: hidden;
            transform: translateY(0);
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 60px 40px;
            text-align: center;
            color: white;
        }

        .laravel-icon {
            font-size: 64px;
            margin-bottom: 20px;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        h1 {
            font-size: 48px;
            margin-bottom: 10px;
            font-weight: 800;
        }

        .badge {
            display: inline-block;
            background: rgba(255,255,255,0.2);
            padding: 8px 20px;
            border-radius: 50px;
            margin-top: 20px;
            font-size: 14px;
            font-weight: 500;
        }

        .content {
            padding: 50px;
        }

        .status-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .status-card {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid #e9ecef;
        }

        .status-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-color: #667eea;
        }

        .status-icon {
            font-size: 40px;
            margin-bottom: 15px;
        }

        .status-card h3 {
            font-size: 18px;
            color: #6c757d;
            margin-bottom: 10px;
        }

        .status-card .value {
            font-size: 24px;
            font-weight: 700;
            color: #212529;
        }

        .status-card .status-active {
            color: #28a745;
            font-weight: 600;
        }

        .info-section {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 30px;
        }

        .info-section h2 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #333;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .info-item {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .info-item strong {
            color: #667eea;
            display: block;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .info-item p {
            color: #666;
            font-family: monospace;
            font-size: 14px;
        }

        .deployment-history {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 25px;
            margin-top: 30px;
        }

        .deployment-history h3 {
            margin-bottom: 20px;
            color: #333;
        }

        .commit-list {
            list-style: none;
        }

        .commit-item {
            padding: 12px;
            border-bottom: 1px solid #e9ecef;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .commit-hash {
            background: #667eea;
            color: white;
            padding: 4px 10px;
            border-radius: 6px;
            font-family: monospace;
            font-size: 12px;
        }

        .commit-message {
            flex: 1;
            color: #495057;
        }

        .commit-time {
            color: #6c757d;
            font-size: 12px;
        }

        .footer {
            background: #2d3748;
            color: white;
            text-align: center;
            padding: 30px;
        }

        .footer a {
            color: #667eea;
            text-decoration: none;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            margin-top: 20px;
            transition: transform 0.2s;
        }

        .btn:hover {
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            h1 { font-size: 32px; }
            .content { padding: 30px; }
            .status-grid { gap: 15px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="laravel-icon">⚡</div>
            <h1>Laravel on AWS EC2 sssss</h1>
            <p>Successfully Deployed with CI/CD Pipeline  gdgddg</p>
            <div class="badge">
                <span>🟢 GitHub Actions • Active</span>
            </div>
        </div>

        <div class="content">
            <div class="status-grid">
                <div class="status-card">
                    <div class="status-icon">🔄</div>
                    <h3>CI/CD Status</h3>
                    <div class="value status-active">● Active</div>
                    <small>Last pipeline: Successful</small>
                </div>

                <div class="status-card">
                    <div class="status-icon">☁️</div>
                    <h3>AWS EC2 Instance</h3>
                    <div class="value">Running</div>
                    <small>{{ gethostname() ?? 'production' }}</small>
                </div>

                <div class="status-card">
                    <div class="status-icon">🐘</div>
                    <h3>Laravel Version</h3>
                    <div class="value">{{ app()->version() }}</div>
                    <small>PHP {{ phpversion() }}</small>
                </div>
            </div>

            <div class="info-section">
                <h2>🚀 Deployment Information</h2>
                <div class="info-grid">
                    <div class="info-item">
                        <strong>Environment</strong>
                        <p>Production • AWS EC2</p>
                    </div>
                    <div class="info-item">
                        <strong>CI/CD Pipeline</strong>
                        <p>GitHub Actions → AWS EC2</p>
                    </div>
                    <div class="info-item">
                        <strong>Last Deployed</strong>
                        <p>{{ now()->format('F j, Y, g:i a T') }}</p>
                    </div>
                    <div class="info-item">
                        <strong>Deployment Branch</strong>
                        <p>main / master</p>
                    </div>
                </div>
            </div>

            <div class="deployment-history">
                <h3>📦 Recent Deployments</h3>
                <div class="commit-list">
                    <div class="commit-item">
                        <span class="commit-hash">a1b2c3d</span>
                        <span class="commit-message">Deploy: Update application configuration</span>
                        <span class="commit-time">{{ now()->subMinutes(5)->diffForHumans() }}</span>
                    </div>
                    <div class="commit-item">
                        <span class="commit-hash">e4f5g6h</span>
                        <span class="commit-message">Add GitHub Actions workflow</span>
                        <span class="commit-time">{{ now()->subHours(2)->diffForHumans() }}</span>
                    </div>
                    <div class="commit-item">
                        <span class="commit-hash">i7j8k9l</span>
                        <span class="commit-message">Initial EC2 deployment setup</span>
                        <span class="commit-time">{{ now()->subDay()->diffForHumans() }}</span>
                    </div>
                </div>
            </div>

            <div style="text-align: center; margin-top: 30px;">
                <a href="#" class="btn">📊 View Application Dashboard</a>
            </div>
        </div>

        <div class="footer">
            <p>Powered by <strong>Laravel</strong> • Hosted on <strong>AWS EC2</strong> • Automated via <strong>GitHub Actions</strong></p>
            <p style="margin-top: 10px; font-size: 12px;">
                <a href="#">Documentation</a> •
                <a href="#">GitHub Repository</a> •
                <a href="#">Deployment Logs</a>
            </p>
        </div>
    </div>

    <script>
        // Optional: Add real-time refresh or stats
        console.log('Laravel on AWS EC2 - CI/CD Pipeline Active');

        // You can add AJAX calls here to fetch real deployment data
        // fetch('/api/deployment-status')
        //     .then(response => response.json())
        //     .then(data => console.log(data));
    </script>
</body>
</html>
