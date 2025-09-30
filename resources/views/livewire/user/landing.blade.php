<div>
    <style>
        .hero {
            position: relative;
            height: 100vh;
            min-height: 500px;
            max-height: 700px;
            overflow: hidden;
            border-radius: 1rem;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1;
        }

        .hero-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
        }

        .hero-content {
            position: absolute;
            inset: 0;
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 2rem;
            animation: fadeInUp 1s ease-out;
        }

        .hero-content h1 {
            font-size: clamp(2rem, 5vw, 4rem);
            font-weight: 800;
            margin-bottom: 1.5rem;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
            letter-spacing: -0.02em;
            line-height: 1.1;
        }

        .hero-content p {
            font-size: clamp(1rem, 2vw, 1.5rem);
            margin-bottom: 2.5rem;
            max-width: 700px;
            opacity: 0.95;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 1s ease-out 0.2s backwards;
            line-height: 1.5;
        }

        .cta-button {
            display: inline-block;
            padding: 1.2rem 3rem;
            background: white;
            color: #667eea;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            animation: fadeInUp 1s ease-out 0.4s backwards;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            border: none;
            cursor: pointer;
        }

        .cta-button:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
            background: #f8f8f8;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .features {
            padding: 6rem 2rem;
            background: linear-gradient(to bottom, #f8f9fa, #ffffff);
        }

        .features-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .features h2 {
            text-align: center;
            font-size: clamp(2rem, 4vw, 3rem);
            color: #1a1a1a;
            margin-bottom: 4rem;
            font-weight: 800;
        }

        .features h2 span {
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: white;
            padding: 2.5rem;
            border-radius: 20px;
            border: 1px solid #e5e7eb;
            transition: all 0.3s ease;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(102, 126, 234, 0.15);
            border-color: #667eea;
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 8px 16px rgba(102, 126, 234, 0.3);
        }

        .feature-card h3 {
            color: #1a1a1a;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .feature-card p {
            color: #6b7280;
            line-height: 1.7;
            font-size: 1rem;
        }

        .stats {
            padding: 6rem 2rem;
            background: linear-gradient(135deg, #667eea, #764ba2);
            position: relative;
            overflow: hidden;
        }

        .stats::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg>');
            opacity: 0.5;
        }

        .stats-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 3rem;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .stat-item h3 {
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            color: white;
            margin-bottom: 0.5rem;
            font-weight: 800;
        }

        .stat-item p {
            color: rgba(255, 255, 255, 0.95);
            font-size: 1.1rem;
            font-weight: 500;
        }

        @media (max-width: 768px) {
            .hero {
                height: 50vh;
                min-height: 400px;
            }

            .hero-content {
                padding: 1.5rem;
            }

            .cta-button {
                padding: 1rem 2rem;
                font-size: 1rem;
            }

            .features {
                padding: 4rem 1.5rem;
            }

            .stats {
                padding: 4rem 1.5rem;
            }
        }
    </style>

    <div>
        <div class="hero">
            <img class="hero-image" src="{{ asset('/images/14.jpeg') }}" alt="Welcome Image">
            <div class="hero-content">
                <h1>WELCOME TO PLAN WITH ANIWAAH</h1>
                <p>Transform your ideas into reality with intelligent planning tools designed for modern creators</p>
                <a href="#features" class="cta-button">Start Planning Today</a>
            </div>
        </div>

        <div class="features" id="features">
            <div class="features-container">
                <h2>Why Choose <span>Aniwaa</span>?</h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">🎯</div>
                        <h3>Smart Goals</h3>
                        <p>Set and track goals with AI-powered insights that adapt to your progress and help you stay on course.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">📊</div>
                        <h3>Visual Planning</h3>
                        <p>See your plans come to life with beautiful visualizations and interactive timelines that make planning intuitive.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🤝</div>
                        <h3>Team Collaboration</h3>
                        <p>Work seamlessly with your team in real-time. Share ideas, assign tasks, and achieve more together.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">⚡</div>
                        <h3>Lightning Fast</h3>
                        <p>Experience blazing speed with our optimized platform. No lag, no waiting—just pure productivity.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🔒</div>
                        <h3>Secure & Private</h3>
                        <p>Your data is encrypted and protected. We prioritize your privacy with enterprise-grade security.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🌍</div>
                        <h3>Anywhere Access</h3>
                        <p>Plan from anywhere on any device. Your workspace syncs seamlessly across all platforms.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="stats">
        <div class="stats-container">
            <div class="stat-item">
                <h3>50K+</h3>
                <p>Active Users</p>
            </div>
            <div class="stat-item">
                <h3>1M+</h3>
                <p>Plans Created</p>
            </div>
            <div class="stat-item">
                <h3>99.9%</h3>
                <p>Uptime</p>
            </div>
            <div class="stat-item">
                <h3>24/7</h3>
                <p>Support</p>
            </div>
        </div>
    </div>
