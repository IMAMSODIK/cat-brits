<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yanks and Brits - Master Your English Speaking Skills</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4274ba;
            --primary-dark: #2c5a9a;
            --primary-light: #e8f0fe;
            --secondary: #10b981;
            --dark: #1e293b;
            --light: #f8fafc;
            --gray: #64748b;
            --light-gray: #e2e8f0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: #ffffff;
            color: var(--dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Navigation */
        .navbar {
            background: white;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            padding: 15px 0;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            font-weight: bold;
        }

        .logo-text {
            font-size: 22px;
            font-weight: 700;
            color: var(--primary);
            letter-spacing: -0.5px;
        }

        .logo-text span {
            color: var(--secondary);
        }

        .nav-links {
            display: flex;
            gap: 35px;
            align-items: center;
        }

        .nav-links a {
            color: var(--dark);
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-buttons {
            display: flex;
            gap: 15px;
        }

        .btn {
            padding: 12px 28px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 15px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            box-shadow: 0 4px 15px rgba(66, 116, 186, 0.2);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(66, 116, 186, 0.3);
        }

        .btn-outline {
            background: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }

        .btn-outline:hover {
            background: var(--primary-light);
            transform: translateY(-2px);
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            color: var(--primary);
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            padding: 160px 0 100px;
            background: linear-gradient(135deg, #f8fafc 0%, #e8f0fe 100%);
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 40%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 800"><path fill="%234274ba" fill-opacity="0.05" d="M400 0C179 0 0 179 0 400s179 400 400 400 400-179 400-400S621 0 400 0zm0 50c193 0 350 157 350 350S593 750 400 750 50 593 50 400 207 50 400 50z"/></svg>');
            background-size: cover;
            opacity: 0.1;
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .hero-text h1 {
            font-size: 48px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            color: var(--dark);
        }

        .hero-text h1 span {
            color: var(--primary);
            position: relative;
        }

        .hero-text h1 span::after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 0;
            width: 100%;
            height: 8px;
            background: rgba(66, 116, 186, 0.2);
            z-index: -1;
        }

        .hero-text p {
            font-size: 18px;
            color: var(--gray);
            margin-bottom: 35px;
            line-height: 1.7;
        }

        .hero-stats {
            display: flex;
            gap: 40px;
            margin-top: 40px;
        }

        .stat-item h3 {
            font-size: 32px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 5px;
        }

        .stat-item p {
            font-size: 14px;
            color: var(--gray);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 0;
        }

        .hero-image {
            position: relative;
        }

        .dashboard-preview {
            background: white;
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            transform: perspective(1000px) rotateY(-10deg);
            border: 1px solid var(--light-gray);
        }

        .dashboard-header {
            background: var(--primary);
            color: white;
            padding: 15px 20px;
            border-radius: 12px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .dashboard-item {
            background: var(--light);
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 15px;
            border-left: 4px solid var(--secondary);
        }

        /* Features Section */
        .features {
            padding: 100px 0;
            background: white;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 36px;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .section-title p {
            font-size: 18px;
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background: white;
            border-radius: 16px;
            padding: 35px 30px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--light-gray);
            transition: all 0.3s ease;
            text-align: center;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
            border-color: var(--primary);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary-light), white);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            color: var(--primary);
            font-size: 28px;
            border: 2px solid var(--light-gray);
        }

        .feature-card h3 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--dark);
        }

        .feature-card p {
            color: var(--gray);
            font-size: 16px;
            line-height: 1.6;
        }

        /* How It Works */
        .how-it-works {
            padding: 100px 0;
            background: var(--light);
        }

        .steps-container {
            display: flex;
            justify-content: center;
            gap: 40px;
            position: relative;
            margin-top: 60px;
        }

        .steps-container::before {
            content: '';
            position: absolute;
            top: 40px;
            left: 10%;
            right: 10%;
            height: 2px;
            background: var(--light-gray);
            z-index: 1;
        }

        .step {
            position: relative;
            z-index: 2;
            text-align: center;
            flex: 1;
            max-width: 250px;
        }

        .step-number {
            width: 80px;
            height: 80px;
            background: white;
            border: 3px solid var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            font-weight: 700;
            color: var(--primary);
            margin: 0 auto 25px;
            box-shadow: 0 10px 30px rgba(66, 116, 186, 0.15);
        }

        .step h3 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--dark);
        }

        .step p {
            color: var(--gray);
            font-size: 15px;
        }

        /* Testimonials */
        .testimonials {
            padding: 100px 0;
            background: white;
        }

        .testimonial-slider {
            max-width: 800px;
            margin: 0 auto;
        }

        .testimonial-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--light-gray);
            margin: 20px;
        }

        .testimonial-content {
            font-size: 18px;
            color: var(--dark);
            line-height: 1.7;
            margin-bottom: 30px;
            font-style: italic;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .author-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--primary-light);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: var(--primary);
            font-weight: 600;
        }

        .author-info h4 {
            font-size: 18px;
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 5px;
        }

        .author-info p {
            color: var(--gray);
            font-size: 14px;
        }

        /* CTA Section */
        .cta {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 800"><path fill="white" fill-opacity="0.05" d="M400 0C179 0 0 179 0 400s179 400 400 400 400-179 400-400S621 0 400 0zm0 50c193 0 350 157 350 350S593 750 400 750 50 593 50 400 207 50 400 50z"/></svg>');
            background-size: cover;
        }

        .cta-content {
            position: relative;
            z-index: 2;
            max-width: 700px;
            margin: 0 auto;
        }

        .cta h2 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .cta p {
            font-size: 18px;
            opacity: 0.9;
            margin-bottom: 40px;
        }

        .cta .btn {
            background: white;
            color: var(--primary);
            font-size: 16px;
            padding: 16px 40px;
        }

        .cta .btn:hover {
            background: var(--light);
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(255, 255, 255, 0.2);
        }

        /* Footer */
        .footer {
            background: var(--dark);
            color: white;
            padding: 70px 0 30px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 50px;
            margin-bottom: 50px;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
        }

        .footer-logo .logo-icon {
            width: 36px;
            height: 36px;
            font-size: 18px;
        }

        .footer-logo .logo-text {
            color: white;
            font-size: 20px;
        }

        .footer-about p {
            color: #94a3b8;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .footer-links h3,
        .footer-contact h3 {
            color: white;
            font-size: 18px;
            margin-bottom: 25px;
            font-weight: 600;
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #94a3b8;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: white;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #94a3b8;
        }

        .contact-item i {
            color: var(--primary);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #334155;
            color: #94a3b8;
            font-size: 14px;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 40px;
            }

            .hero-text h1 {
                font-size: 40px;
            }

            .hero-stats {
                justify-content: center;
            }

            .dashboard-preview {
                transform: none;
                max-width: 600px;
                margin: 0 auto;
            }
        }

        @media (max-width: 768px) {
            .mobile-menu-btn {
                display: block;
            }

            .nav-links {
                position: fixed;
                top: 70px;
                left: 0;
                right: 0;
                background: white;
                flex-direction: column;
                padding: 30px;
                gap: 25px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                transform: translateY(-100%);
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
                z-index: 999;
            }

            .nav-links.active {
                transform: translateY(0);
                opacity: 1;
                visibility: visible;
            }

            .nav-buttons {
                flex-direction: column;
                width: 100%;
            }

            .hero {
                padding: 140px 0 80px;
            }

            .hero-text h1 {
                font-size: 32px;
            }

            .hero-text p {
                font-size: 16px;
            }

            .section-title h2 {
                font-size: 30px;
            }

            .steps-container {
                flex-direction: column;
                align-items: center;
                gap: 50px;
            }

            .steps-container::before {
                display: none;
            }

            .step {
                max-width: 100%;
            }

            .features,
            .how-it-works,
            .testimonials,
            .cta {
                padding: 70px 0;
            }
        }

        @media (max-width: 576px) {
            .hero-text h1 {
                font-size: 28px;
            }

            .hero-stats {
                flex-direction: column;
                gap: 30px;
            }

            .btn {
                padding: 10px 24px;
                font-size: 14px;
            }

            .cta h2 {
                font-size: 32px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container nav-container">
            <a href="#" class="logo">
                <div class="">
                    <img src="{{asset('own_assets/logo/logo.png')}}" width="60%" alt="">
                </div>
            </a>
            
            <div class="nav-links" id="navLinks">
                <a href="#features">Features</a>
                <a href="#how-it-works">How It Works</a>
                <a href="#testimonials">Testimonials</a>
                <a href="#pricing">Pricing</a>
                <div class="nav-buttons">
                    @if (Route::has('login'))
                        <nav class="flex items-center justify-end gap-4">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="btn btn-outline text-white">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-outline">Sign In</a>
                                <a href="{{ route('login') }}" class="btn btn-primary" style="color: white">Get Started</a>
                            @endauth
                        </nav>
                    @endif
                </div>
            </div>
            
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Master Your <span>English Speaking</span> Skills with Expert Feedback</h1>
                    <p>Get personalized assessment, mock test sessions, and live corrections from certified English teachers. Improve your fluency, pronunciation, and confidence.</p>
                    <div class="hero-buttons">
                        <a href="{{ route('login') }}" class="btn btn-primary">
                            <i class="fas fa-rocket"></i> Start Free Trial
                        </a>
                        <a href="#features" class="btn btn-outline">
                            <i class="fas fa-play-circle"></i> Watch Demo
                        </a>
                    </div>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <h3>500+</h3>
                            <p>Students</p>
                        </div>
                        <div class="stat-item">
                            <h3>50+</h3>
                            <p>Certified Teachers</p>
                        </div>
                        <div class="stat-item">
                            <h3>98%</h3>
                            <p>Satisfaction Rate</p>
                        </div>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="dashboard-preview">
                        <div class="dashboard-header">
                            <span><i class="fas fa-video"></i> Live Session Dashboard</span>
                            <span class="badge bg-success">Online</span>
                        </div>
                        <div class="dashboard-item">
                            <strong>IELTS Speaking Test</strong>
                            <p>Session with Teacher Sarah</p>
                            <small><i class="fas fa-clock"></i> Starting in 15 min</small>
                        </div>
                        <div class="dashboard-item">
                            <strong>Writing Assessment Ready</strong>
                            <p>Feedback from Teacher Mike</p>
                            <small><i class="fas fa-check-circle"></i> Completed</small>
                        </div>
                        <div class="dashboard-item">
                            <strong>Mock Test Requested</strong>
                            <p>Waiting for teacher confirmation</p>
                            <small><i class="fas fa-hourglass-half"></i> Pending</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <div class="section-title">
                <h2>Powerful Features for Effective Learning</h2>
                <p>Everything you need to improve your English speaking skills in one platform</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>Live Video Sessions</h3>
                    <p>Real-time speaking practice with certified teachers via high-quality video calls with screen sharing and interactive whiteboard.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-file-audio"></i>
                    </div>
                    <h3>Speaking Assessment</h3>
                    <p>Detailed feedback on fluency, pronunciation, grammar, and vocabulary with personalized improvement recommendations.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-edit"></i>
                    </div>
                    <h3>Writing Correction</h3>
                    <p>Comprehensive essay evaluation with grammar checking, vocabulary enhancement, and band score prediction.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3>Mock Test Scheduling</h3>
                    <p>Schedule practice tests at your convenience with flexible timing and teacher selection options.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Progress Tracking</h3>
                    <p>Monitor your improvement with detailed analytics, performance charts, and personalized learning paths.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Teacher Feedback</h3>
                    <p>Receive constructive feedback and corrections from experienced teachers after each session.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works" id="how-it-works">
        <div class="container">
            <div class="section-title">
                <h2>How Yanks and Brits Works</h2>
                <p>Start improving your English speaking skills in just 4 simple steps</p>
            </div>
            
            <div class="steps-container">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Sign Up & Profile</h3>
                    <p>Create your account and set your learning goals, proficiency level, and availability.</p>
                </div>
                
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Request Sessions</h3>
                    <p>Book mock test sessions or submit speaking/writing assignments for assessment.</p>
                </div>
                
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Get Feedback</h3>
                    <p>Receive detailed corrections and personalized feedback from certified teachers.</p>
                </div>
                
                <div class="step">
                    <div class="step-number">4</div>
                    <h3>Track Progress</h3>
                    <p>Monitor your improvement with analytics and continue practicing regularly.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials" id="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>What Our Students Say</h2>
                <p>Join thousands of students who improved their English speaking skills with Yanks and Brits</p>
            </div>
            
            <div class="testimonial-slider">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        "Yanks and Brits helped me improve my IELTS speaking score from 6.0 to 7.5 in just 2 months! The personalized feedback and mock tests were incredibly helpful."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">S</div>
                        <div class="author-info">
                            <h4>Sarah Johnson</h4>
                            <p>IELTS Student, Band 7.5</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Improve Your English Speaking?</h2>
                <p>Join thousands of successful students and start your journey to fluency today</p>
                <a href="{{ route('login') }}" class="btn">
                    <i class="fas fa-user-plus"></i> Start Your Free Trial
                </a>
                <p style="margin-top: 20px; font-size: 14px; opacity: 0.8;">No credit card required • 7-day free trial</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-about">
                    <div class="footer-logo">
                        <div class="logo-icon">ES</div>
                        <div class="logo-text">Yanks and Brits</div>
                    </div>
                    <p>Master your English speaking skills with personalized assessment, mock test sessions, and expert feedback from certified teachers.</p>
                    <div class="social-links">
                        <a href="#" style="color: #94a3b8; margin-right: 15px;"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" style="color: #94a3b8; margin-right: 15px;"><i class="fab fa-twitter"></i></a>
                        <a href="#" style="color: #94a3b8; margin-right: 15px;"><i class="fab fa-instagram"></i></a>
                        <a href="#" style="color: #94a3b8;"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#how-it-works">How It Works</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li>
                            @if (Route::has('login'))
                                <nav class="flex items-center justify-end gap-4">
                                    @auth
                                        <a
                                            href="{{ url('/dashboard') }}"
                                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                                        >
                                            Dashboard
                                        </a>
                                    @else
                                        <a
                                            href="{{ route('login') }}"
                                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                                        >
                                            Log in
                                        </a>

                                        @if (Route::has('register'))
                                            <a
                                                href="{{ route('register') }}"
                                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                                Register
                                            </a>
                                        @endif
                                    @endauth
                                </nav>
                            @endif
                        </li>
                    </ul>
                </div>
                
                <div class="footer-contact">
                    <h3>Contact Us</h3>
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>support@Yanks and Brits.com</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span>+1 (555) 123-4567</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>123 Education St, Language City</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2023 Yanks and Brits. All rights reserved. | <a href="#" style="color: #94a3b8;">Privacy Policy</a> | <a href="#" style="color: #94a3b8;">Terms of Service</a></p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const navLinks = document.getElementById('navLinks');

        mobileMenuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            mobileMenuBtn.innerHTML = navLinks.classList.contains('active') 
                ? '<i class="fas fa-times"></i>' 
                : '<i class="fas fa-bars"></i>';
        });

        // Close mobile menu when clicking a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Sticky navbar on scroll
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if(window.scrollY > 100) {
                navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
            } else {
                navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.05)';
            }
        });
    </script>
</body>
</html>