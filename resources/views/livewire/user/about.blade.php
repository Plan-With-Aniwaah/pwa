<div>
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
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

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .hero {
            position: relative;
            height: 65vh;
            min-height: 500px;
            max-height: 700px;
            overflow: hidden;
            border-radius: 1.5rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
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

        .hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg>');
            z-index: 1;
            opacity: 0.3;
        }

        .hero-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            animation: subtle-zoom 20s ease-in-out infinite;
        }

        @keyframes subtle-zoom {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
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
        }

        .hero-content h1 {
            font-size: clamp(2.5rem, 6vw, 5rem);
            font-weight: 900;
            margin-bottom: 1.5rem;
            text-shadow: 0 6px 30px rgba(0, 0, 0, 0.5);
            letter-spacing: -0.02em;
            line-height: 1.1;
            animation: fadeInUp 1s ease-out;
        }

        .hero-badge {
            display: inline-block;
            padding: 0.75rem 2rem;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 50px;
            font-weight: 700;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            border: 2px solid rgba(255, 255, 255, 0.3);
            animation: fadeInUp 1s ease-out 0.3s backwards;
            margin-top: 1rem;
        }

        .about-section {
            padding: 6rem 2rem;
            background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
            position: relative;
            overflow: hidden;
        }

        .about-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: -10%;
            width: 40%;
            height: 100%;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.05) 0%, rgba(118, 75, 162, 0.05) 100%);
            border-radius: 50%;
            filter: blur(100px);
        }

        .about-container {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .section-title {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title h2 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 900;
            background: linear-gradient(135deg, #667eea, #764ba2, #f093fb);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
            animation: slideInLeft 1s ease-out;
        }

        .section-title .underline {
            height: 6px;
            width: 120px;
            background: linear-gradient(90deg, #667eea, #764ba2, #f093fb);
            margin: 0 auto;
            border-radius: 3px;
            animation: slideInRight 1s ease-out;
        }

        .content-card {
            background: white;
            padding: 3rem;
            border-radius: 2rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            margin-bottom: 2.5rem;
            border: 2px solid transparent;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .content-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(102, 126, 234, 0.1), transparent);
            transition: left 0.6s ease;
        }

        .content-card:hover::before {
            left: 100%;
        }

        .content-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 60px rgba(102, 126, 234, 0.2);
            border-color: #667eea;
        }

        .content-card .icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 2rem;
            font-size: 2rem;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
            animation: float 3s ease-in-out infinite;
        }

        .content-card p {
            font-size: 1.125rem;
            line-height: 2;
            color: #4a5568;
            margin: 0;
            position: relative;
            z-index: 1;
        }

        .content-card.highlight p {
            font-weight: 600;
            color: #2d3748;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 4rem;
        }

        .value-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 2.5rem;
            border-radius: 1.5rem;
            color: white;
            text-align: center;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
            transition: all 0.3s ease;
        }

        .value-card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 20px 50px rgba(102, 126, 234, 0.4);
        }

        .value-card .value-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .value-card h3 {
            font-size: 1.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
        }

        .value-card p {
            font-size: 1rem;
            opacity: 0.95;
            line-height: 1.6;
        }

        .cta-section {
            margin-top: 5rem;
            padding: 4rem 2rem;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 2rem;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 8s ease-in-out infinite;
        }

        .cta-section h2 {
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 900;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
        }

        .cta-section p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            opacity: 0.95;
            position: relative;
            z-index: 1;
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
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 1;
        }

        .cta-button:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
            background: #f8f8f8;
        }

        @media (max-width: 768px) {
            .hero {
                height: 50vh;
                min-height: 400px;
            }

            .hero-content {
                padding: 1.5rem;
            }

            .about-section {
                padding: 4rem 1.5rem;
            }

            .content-card {
                padding: 2rem;
            }

            .values-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <div>
        <!-- Hero Section -->
        <div class="hero">
            <img class="hero-image" src="{{ asset('/images/29.jpg') }}" alt="About Plan With Aniwaah">
            <div class="hero-content">
                <h1>ABOUT PLAN WITH ANIWAAH</h1>
                <div class="hero-badge">Creating Unforgettable Moments</div>
            </div>
        </div>

        <!-- About Content Section -->
        <div class="about-section">
            <div class="about-container">
                <div class="section-title">
                    <h2>Our Story</h2>
                    <div class="underline"></div>
                </div>

                <!-- Welcome Card -->
                <div class="content-card highlight">
                    <div class="icon">🎉</div>
                    <p>Welcome to <strong>Plan With Aniwaah (PWA)</strong> – your trusted partner in creating unforgettable moments. We are an event planning, consultation, coordination, and management team proudly located in Kumasi, in the heart of the Ashanti Region, Ghana. Our passion is simple: helping people celebrate life's special moments in the most stress-free, beautiful, and memorable way possible.</p>
                </div>

                <!-- What We Do Card -->
                <div class="content-card">
                    <div class="icon">✨</div>
                    <p>From the joy of weddings, the dignity of funerals, the excitement of birthday parties, to corporate gatherings and cultural events – we handle every type of event with care, respect, and creativity. We know that every occasion is unique, so we take time to understand your vision, your preferences, and your story. With that, we bring together the right blend of tradition and modern trends to create an event that feels truly yours.</p>
                </div>

                <!-- Our Approach Card -->
                <div class="content-card">
                    <div class="icon">🤝</div>
                    <p>Our role goes beyond just planning; we become your partners, guiding you through every step of the journey. We manage the details—big and small—so that you can focus on enjoying the moment with your family, friends, or community. Whether you need full event management or just a bit of expert advice, our warm and dedicated team is always ready to make it happen.</p>
                </div>

                <!-- Our Belief Card -->
                <div class="content-card">
                    <div class="icon">💖</div>
                    <p>At PWA, we believe events are not just about the day itself but the lasting memories they create. With us, you can be assured of an event that is well-organized, stress-free, and filled with joy. Your happiness is at the center of everything we do, and we take pride in turning your special occasions into cherished memories.</p>
                </div>

                <!-- Mission Statement Card -->
                <div class="content-card highlight">
                    <div class="icon">🌟</div>
                    <p><strong>Because for us, it's more than planning events – it's about celebrating life with you.</strong></p>
                </div>

                <!-- Core Values Section -->
                <div class="section-title" style="margin-top: 5rem;">
                    <h2>Why Choose Us</h2>
                    <div class="underline"></div>
                </div>

                <div class="values-grid">
                    <div class="value-card">
                        <div class="value-icon">🎯</div>
                        <h3>Attention to Detail</h3>
                        <p>Every element matters. We ensure perfection in every aspect of your event.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">🌍</div>
                        <h3>Cultural Respect</h3>
                        <p>We honor traditions while embracing modern trends for the perfect blend.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">💼</div>
                        <h3>Professional Excellence</h3>
                        <p>Years of experience delivering stress-free, memorable events.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">❤️</div>
                        <h3>Personal Touch</h3>
                        <p>Your vision, your story – we make it uniquely yours.</p>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="cta-section">
                    <h2>Ready to Create Something Amazing?</h2>
                    <p>Let's turn your vision into reality. Get in touch with us today!</p>
                    <a href="/user/contact" class="cta-button">Contact Us Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
