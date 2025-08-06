<?php
// Configuration and dynamic data
$currentYear = date('Y');
$visitorCount = rand(1500, 2500); // Simulation of visitor counter
$lastUpdate = date('d/m/Y H:i');

// Testimonial data (could come from a database)
$testimonials = [
    [
        'name' => 'Sarah Johnson',
        'position' => 'Full-Stack Developer',
        'initial' => 'S',
        'gradient' => 'from-primary to-accent',
        'testimonial' => 'TalentHub helped me find my Full-Stack developer position in just 2 weeks! The team is very professional and supported me at every step.',
        'metric' => '+35%',
        'metric_text' => 'salary increase in 6 months'
    ],
    [
        'name' => 'Ahmed Benali',
        'position' => 'Data Scientist',
        'initial' => 'A',
        'gradient' => 'from-purple-500 to-pink-500',
        'testimonial' => 'After 3 months of unsuccessful job search, TalentHub connected me with an innovative startup. I am now a Data Scientist in an exciting team!',
        'metric' => 'Permanent Contract',
        'metric_text' => 'obtained in 1 month'
    ],
    [
        'name' => 'Yuki Tanaka',
        'position' => 'UX/UI Designer',
        'initial' => 'Y',
        'gradient' => 'from-green-500 to-teal-500',
        'testimonial' => 'Thanks to TalentHub, I was able to make my career transition to design. The personalized support gave me confidence in my skills.',
        'metric' => 'Career Change',
        'metric_text' => 'successful in 8 months'
    ],
    [
        'name' => 'Marcus Williams',
        'position' => 'Digital Marketing',
        'initial' => 'M',
        'gradient' => 'from-orange-500 to-red-500',
        'testimonial' => 'TalentHub revolutionized my job search. In 10 days, I found a digital marketing position that perfectly matches my expectations.',
        'metric' => '+40%',
        'metric_text' => 'more responsibilities'
    ],
    [
        'name' => 'Fatima Al-Zahra',
        'position' => 'Frontend Developer',
        'initial' => 'F',
        'gradient' => 'from-indigo-500 to-purple-600',
        'testimonial' => 'After my internship, TalentHub helped me land my first permanent contract. The team guided me through salary negotiation and benefits.',
        'metric' => 'Internship → Permanent',
        'metric_text' => 'in 3 months'
    ],
    [
        'name' => 'Pierre Dubois',
        'position' => 'Financial Analyst',
        'initial' => 'P',
        'gradient' => 'from-pink-500 to-rose-500',
        'testimonial' => 'TalentHub allowed me to change sectors and double my salary. The process was smooth and professional from start to finish.',
        'metric' => '+100%',
        'metric_text' => 'salary increase'
    ]
];

// Dynamic statistics
$stats = [
    ['value' => '2,500+', 'label' => 'Placed Candidates', 'color' => 'primary'],
    ['value' => '150+', 'label' => 'Partner Companies', 'color' => 'accent'],
    ['value' => '95%', 'label' => 'Satisfaction Rate', 'color' => 'purple-500'],
    ['value' => '24h', 'label' => 'Average Response Time', 'color' => 'yellow-500']
];
?>
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TalentHub - Recruitment Platform</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#1F2937',
                        accent: '#10B981'
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.6s ease-out',
                        'bounce-slow': 'bounce 2s infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .glassmorphism {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }
        
        .text-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .hover-lift {
            transition: all 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }
        
        .glow {
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.3);
        }
        
        .glow:hover {
            box-shadow: 0 0 30px rgba(59, 130, 246, 0.5);
        }
        
        .file-upload-area {
            border: 2px dashed rgba(59, 130, 246, 0.5);
            transition: all 0.3s ease;
        }
        
        .file-upload-area:hover {
            border-color: #3B82F6;
            background: rgba(59, 130, 246, 0.1);
        }
        
        .file-upload-area.dragover {
            border-color: #3B82F6;
            background: rgba(59, 130, 246, 0.2);
            transform: scale(1.02);
        }

        .stats-card {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1) 0%, rgba(16, 185, 129, 0.1) 100%);
            border: 1px solid rgba(59, 130, 246, 0.2);
        }
    </style>
</head>
<body class="bg-gray-900 text-white min-h-screen font-inter">
    <!-- Navigation -->
    <nav class="glassmorphism border-b border-gray-700/50 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <h1 class="text-3xl font-bold text-gradient">TalentHub</h1>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-6">
                        <a href="/" class="text-white hover:text-primary px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:bg-gray-800/50">Home</a>
                        <a href="/apply.php" class="text-gray-300 hover:text-primary px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:bg-gray-800/50">Apply</a>
                        <a href="/job-offers.php" class="text-gray-300 hover:text-primary px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:bg-gray-800/50">Job Offers</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-gray-800/50 via-gray-900 to-blue-900/20 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center animate-fade-in">
                <h1 class="text-6xl font-bold text-white mb-6">
                    Find your 
                    <span class="text-gradient">Dream Job</span>
                </h1>
                <p class="text-xl text-gray-300 max-w-4xl mx-auto leading-relaxed mb-8">
                    TalentHub revolutionizes recruitment with a modern platform that connects talent to the best opportunities. 
                    Join thousands of professionals who have found their path thanks to our innovative approach.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/apply.php" class="inline-block px-8 py-4 bg-primary text-white rounded-xl hover:bg-blue-600 transition-all duration-300 font-semibold text-lg glow hover-lift">
                        Apply now
                    </a>
                    <a href="#testimonials" class="inline-block px-8 py-4 bg-transparent border-2 border-primary text-primary rounded-xl hover:bg-primary hover:text-white transition-all duration-300 font-semibold text-lg">
                        View testimonials
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="py-16 bg-gray-800/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <?php foreach ($stats as $stat): ?>
                <div class="stats-card rounded-2xl p-6 text-center animate-slide-up">
                    <div class="text-3xl font-bold text-<?php echo $stat['color']; ?> mb-2"><?php echo $stat['value']; ?></div>
                    <div class="text-gray-400"><?php echo $stat['label']; ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div id="testimonials" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-white mb-4">
                They found their <span class="text-gradient">Dream Job</span>
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Discover testimonials from our candidates who transformed their careers thanks to TalentHub
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($testimonials as $testimonial): ?>
            <div class="glassmorphism rounded-2xl p-6 hover-lift">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gradient-to-r <?php echo $testimonial['gradient']; ?> rounded-full flex items-center justify-center text-white font-bold text-lg mr-4">
                        <?php echo $testimonial['initial']; ?>
                    </div>
                    <div>
                        <h4 class="text-white font-semibold"><?php echo $testimonial['name']; ?></h4>
                        <p class="text-accent text-sm"><?php echo $testimonial['position']; ?></p>
                    </div>
                </div>
                <div class="flex mb-4">
                    <span class="text-yellow-400">★★★★★</span>
                </div>
                <p class="text-gray-300 mb-4">
                    "<?php echo $testimonial['testimonial']; ?>"
                </p>
                <div class="text-sm text-gray-400">
                    <span class="text-primary font-semibold"><?php echo $testimonial['metric']; ?></span> <?php echo $testimonial['metric_text']; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-16 bg-gradient-to-r from-primary/20 to-accent/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">
                Ready to transform your career?
            </h2>
            <p class="text-xl text-gray-300 mb-8 max-w-3xl mx-auto">
                Join thousands of professionals who have found their path thanks to TalentHub. 
                Your next opportunity awaits.
            </p>
            <a href="/apply.php" class="inline-block px-8 py-4 bg-primary text-white rounded-xl hover:bg-blue-600 transition-all duration-300 font-semibold text-lg glow hover-lift animate-bounce-slow">
                Start now
            </a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 border-t border-gray-700/50">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-2xl font-bold text-gradient mb-4">TalentHub</h3>
                    <p class="text-gray-400 mb-4">
                        Modern and secure recruitment platform that connects talent to the best opportunities.
                    </p>
                    <div class="flex space-x-4">
                        <!-- Twitter -->
                        <a href="https://x.com/cyberctf_fr" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-primary transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <!-- TikTok -->
                        <a href="https://www.tiktok.com/@cyberctf?_t=ZN-8yUizn82zZP&_r=1" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-purple-500 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-.88-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/>
                            </svg>
                        </a>
                        <!-- YouTube -->
                        <a href="https://www.youtube.com/@cyberctf_fr" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-red-500 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold text-white mb-4">Services</h4>
                    <ul class="space-y-2">
                        <li><a href="/apply.php" class="text-gray-400 hover:text-primary transition-colors">Apply</a></li>
                        <li><a href="/job-offers.php" class="text-gray-400 hover:text-primary transition-colors">Job Offers</a></li>
                        <li><a href="/candidates.php" class="text-gray-400 hover:text-primary transition-colors">Application Tracking</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary transition-colors">Career Advice</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold text-white mb-4">Companies</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-primary transition-colors">Hire</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary transition-colors">Partnerships</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary transition-colors">Pricing</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary transition-colors">Support</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold text-white mb-4">Contact</h4>
                    <ul class="space-y-2">
                        <li class="text-gray-400">contact@talenthub.com</li>
                        <li class="text-gray-400">+33 1 23 45 67 89</li>
                        <li class="text-gray-400">Paris, France</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-700/50 mt-8 pt-8 text-center">
                <p class="text-gray-400">
                    © <?php echo $currentYear; ?> TalentHub. All rights reserved. | 
                    <a href="#" class="text-gray-400 hover:text-primary transition-colors">Legal Notice</a> | 
                    <a href="#" class="text-gray-400 hover:text-primary transition-colors">Privacy Policy</a>
                </p>
                <p class="text-gray-500 text-sm mt-2">
                    Last updated: <?php echo $lastUpdate; ?> | 
                    Visitors today: <?php echo $visitorCount; ?>
                </p>
            </div>
        </div>
    </footer>
</body>
</html> 