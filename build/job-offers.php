<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Offers - TalentHub</title>
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

        .job-card {
            transition: all 0.3s ease;
        }

        .job-card.hidden {
            display: none;
        }

        .job-card.visible {
            animation: fadeIn 0.5s ease-in-out;
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
                        <a href="/" class="text-gray-300 hover:text-primary px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:bg-gray-800/50">Home</a>
                        <a href="/apply.php" class="text-gray-300 hover:text-primary px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:bg-gray-800/50">Apply</a>
                        <a href="/job-offers.php" class="text-white hover:text-primary px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:bg-gray-800/50">Job Offers</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <div class="bg-gray-800/50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center animate-fade-in">
                <h1 class="text-5xl font-bold text-white mb-6">Job Offers</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">Discover our professional opportunities and find your next challenge.</p>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="glassmorphism rounded-2xl p-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-semibold text-gray-300 mb-2">Location</label>
                    <select id="locationFilter" class="w-full px-3 py-2 bg-gray-700/50 border border-gray-600/50 rounded-lg text-white">
                        <option value="">All cities</option>
                        <option value="Paris">Paris</option>
                        <option value="Lyon">Lyon</option>
                        <option value="Marseille">Marseille</option>
                        <option value="Bordeaux">Bordeaux</option>
                        <option value="Toulouse">Toulouse</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-300 mb-2">Contract Type</label>
                    <select id="contractFilter" class="w-full px-3 py-2 bg-gray-700/50 border border-gray-600/50 rounded-lg text-white">
                        <option value="">All contracts</option>
                        <option value="Permanent">Permanent</option>
                        <option value="Fixed-term">Fixed-term</option>
                        <option value="Internship">Internship</option>
                        <option value="Apprenticeship">Apprenticeship</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-300 mb-2">Sector</label>
                    <select id="sectorFilter" class="w-full px-3 py-2 bg-gray-700/50 border border-gray-600/50 rounded-lg text-white">
                        <option value="">All sectors</option>
                        <option value="Development">Development</option>
                        <option value="Design">Design</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Finance">Finance</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-300 mb-2">Search</label>
                    <input type="text" id="searchFilter" placeholder="Title, company..." class="w-full px-3 py-2 bg-gray-700/50 border border-gray-600/50 rounded-lg text-white placeholder-gray-400">
                </div>
            </div>
            <div class="mt-4 flex justify-between items-center">
                <div id="resultsCount" class="text-gray-300 text-sm">
                    <span id="visibleCount">6</span> offers found
                </div>
                <button id="clearFilters" class="px-4 py-2 text-gray-400 hover:text-white text-sm transition-colors">
                    Clear filters
                </button>
            </div>
        </div>
    </div>

    <!-- Job Offers -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div id="jobOffersContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Offer 1 -->
            <div class="job-card glassmorphism rounded-2xl p-6 hover-lift" data-location="Paris" data-contract="Permanent" data-sector="Development" data-title="Full-Stack Developer" data-company="TechCorp">
                <div class="flex items-center justify-between mb-4">
                    <span class="px-3 py-1 bg-primary/20 text-primary text-sm rounded-full">Permanent</span>
                    <span class="text-gray-400 text-sm">Paris</span>
                </div>
                <h3 class="text-xl font-semibold text-white mb-2">Full-Stack Developer</h3>
                <p class="text-gray-400 mb-4">We are looking for an experienced Full-Stack developer to join our team...</p>
                <div class="flex items-center justify-between">
                    <span class="text-primary font-semibold">45,000€ - 65,000€</span>
                    <a href="/apply.php" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-blue-600 transition-colors">
                        Apply
                    </a>
                </div>
            </div>

            <!-- Offer 2 -->
            <div class="job-card glassmorphism rounded-2xl p-6 hover-lift" data-location="Lyon" data-contract="Fixed-term" data-sector="Development" data-title="Data Scientist" data-company="DataTech">
                <div class="flex items-center justify-between mb-4">
                    <span class="px-3 py-1 bg-accent/20 text-accent text-sm rounded-full">Fixed-term</span>
                    <span class="text-gray-400 text-sm">Lyon</span>
                </div>
                <h3 class="text-xl font-semibold text-white mb-2">Data Scientist</h3>
                <p class="text-gray-400 mb-4">Join our data science team to develop innovative solutions...</p>
                <div class="flex items-center justify-between">
                    <span class="text-primary font-semibold">55,000€ - 75,000€</span>
                    <a href="/apply.php" class="px-4 py-2 bg-accent text-white rounded-lg hover:bg-green-600 transition-colors">
                        Apply
                    </a>
                </div>
            </div>

            <!-- Offer 3 -->
            <div class="job-card glassmorphism rounded-2xl p-6 hover-lift" data-location="Marseille" data-contract="Internship" data-sector="Development" data-title="Frontend Developer" data-company="WebStudio">
                <div class="flex items-center justify-between mb-4">
                    <span class="px-3 py-1 bg-purple-500/20 text-purple-400 text-sm rounded-full">Internship</span>
                    <span class="text-gray-400 text-sm">Marseille</span>
                </div>
                <h3 class="text-xl font-semibold text-white mb-2">Frontend Developer</h3>
                <p class="text-gray-400 mb-4">6-month internship for a Frontend developer passionate about new technologies...</p>
                <div class="flex items-center justify-between">
                    <span class="text-primary font-semibold">1,200€/month</span>
                    <a href="/apply.php" class="px-4 py-2 bg-purple-500 text-white rounded-lg hover:bg-purple-600 transition-colors">
                        Apply
                    </a>
                </div>
            </div>

            <!-- Offer 4 -->
            <div class="job-card glassmorphism rounded-2xl p-6 hover-lift" data-location="Bordeaux" data-contract="Permanent" data-sector="Design" data-title="UX/UI Designer" data-company="DesignLab">
                <div class="flex items-center justify-between mb-4">
                    <span class="px-3 py-1 bg-primary/20 text-primary text-sm rounded-full">Permanent</span>
                    <span class="text-gray-400 text-sm">Bordeaux</span>
                </div>
                <h3 class="text-xl font-semibold text-white mb-2">UX/UI Designer</h3>
                <p class="text-gray-400 mb-4">Create exceptional user experiences for our digital products...</p>
                <div class="flex items-center justify-between">
                    <span class="text-primary font-semibold">40,000€ - 60,000€</span>
                    <a href="/apply.php" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-blue-600 transition-colors">
                        Apply
                    </a>
                </div>
            </div>

            <!-- Offer 5 -->
            <div class="job-card glassmorphism rounded-2xl p-6 hover-lift" data-location="Toulouse" data-contract="Apprenticeship" data-sector="Marketing" data-title="Digital Marketing" data-company="MarketingPro">
                <div class="flex items-center justify-between mb-4">
                    <span class="px-3 py-1 bg-yellow-500/20 text-yellow-400 text-sm rounded-full">Apprenticeship</span>
                    <span class="text-gray-400 text-sm">Toulouse</span>
                </div>
                <h3 class="text-xl font-semibold text-white mb-2">Digital Marketing</h3>
                <p class="text-gray-400 mb-4">Apprenticeship in digital marketing to develop our communication strategies...</p>
                <div class="flex items-center justify-between">
                    <span class="text-primary font-semibold">1,800€/month</span>
                    <a href="/apply.php" class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition-colors">
                        Apply
                    </a>
                </div>
            </div>

            <!-- Offer 6 -->
            <div class="job-card glassmorphism rounded-2xl p-6 hover-lift" data-location="Paris" data-contract="Permanent" data-sector="Finance" data-title="Financial Analyst" data-company="FinanceCorp">
                <div class="flex items-center justify-between mb-4">
                    <span class="px-3 py-1 bg-primary/20 text-primary text-sm rounded-full">Permanent</span>
                    <span class="text-gray-400 text-sm">Paris</span>
                </div>
                <h3 class="text-xl font-semibold text-white mb-2">Financial Analyst</h3>
                <p class="text-gray-400 mb-4">Analyze financial data and contribute to strategic decisions...</p>
                <div class="flex items-center justify-between">
                    <span class="text-primary font-semibold">50,000€ - 70,000€</span>
                    <a href="/apply.php" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-blue-600 transition-colors">
                        Apply
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 border-t border-gray-700/50 mt-12">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h3 class="text-2xl font-bold text-gradient mb-4">TalentHub</h3>
                <p class="text-lg text-gray-400 mb-8">
                    Modern and secure recruitment platform
                </p>
                <div class="flex justify-center space-x-8">
                    <a href="/apply.php" class="text-gray-400 hover:text-primary transition-colors font-medium">Apply</a>
                    <a href="/job-offers.php" class="text-gray-400 hover:text-primary transition-colors font-medium">Job Offers</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Job offers data
        const jobOffers = [
            {
                location: 'Paris',
                contract: 'Permanent',
                sector: 'Development',
                title: 'Full-Stack Developer',
                company: 'TechCorp',
                salary: '45,000€ - 65,000€',
                description: 'We are looking for an experienced Full-Stack developer to join our team...'
            },
            {
                location: 'Lyon',
                contract: 'Fixed-term',
                sector: 'Development',
                title: 'Data Scientist',
                company: 'DataTech',
                salary: '55,000€ - 75,000€',
                description: 'Join our data science team to develop innovative solutions...'
            },
            {
                location: 'Marseille',
                contract: 'Internship',
                sector: 'Development',
                title: 'Frontend Developer',
                company: 'WebStudio',
                salary: '1,200€/month',
                description: '6-month internship for a Frontend developer passionate about new technologies...'
            },
            {
                location: 'Bordeaux',
                contract: 'Permanent',
                sector: 'Design',
                title: 'UX/UI Designer',
                company: 'DesignLab',
                salary: '40,000€ - 60,000€',
                description: 'Create exceptional user experiences for our digital products...'
            },
            {
                location: 'Toulouse',
                contract: 'Apprenticeship',
                sector: 'Marketing',
                title: 'Digital Marketing',
                company: 'MarketingPro',
                salary: '1,800€/month',
                description: 'Apprenticeship in digital marketing to develop our communication strategies...'
            },
            {
                location: 'Paris',
                contract: 'Permanent',
                sector: 'Finance',
                title: 'Financial Analyst',
                company: 'FinanceCorp',
                salary: '50,000€ - 70,000€',
                description: 'Analyze financial data and contribute to strategic decisions...'
            }
        ];

        // DOM elements
        const locationFilter = document.getElementById('locationFilter');
        const contractFilter = document.getElementById('contractFilter');
        const sectorFilter = document.getElementById('sectorFilter');
        const searchFilter = document.getElementById('searchFilter');
        const clearFiltersBtn = document.getElementById('clearFilters');
        const jobCards = document.querySelectorAll('.job-card');
        const visibleCountSpan = document.getElementById('visibleCount');

        // Filtering function
        function filterJobs() {
            const locationValue = locationFilter.value.toLowerCase();
            const contractValue = contractFilter.value.toLowerCase();
            const sectorValue = sectorFilter.value.toLowerCase();
            const searchValue = searchFilter.value.toLowerCase();

            let visibleCount = 0;

            jobCards.forEach(card => {
                const location = card.dataset.location.toLowerCase();
                const contract = card.dataset.contract.toLowerCase();
                const sector = card.dataset.sector.toLowerCase();
                const title = card.dataset.title.toLowerCase();
                const company = card.dataset.company.toLowerCase();

                const locationMatch = !locationValue || location.includes(locationValue);
                const contractMatch = !contractValue || contract.includes(contractValue);
                const sectorMatch = !sectorValue || sector.includes(sectorValue);
                const searchMatch = !searchValue || 
                    title.includes(searchValue) || 
                    company.includes(searchValue) || 
                    location.includes(searchValue) ||
                    contract.includes(searchValue) ||
                    sector.includes(searchValue);

                if (locationMatch && contractMatch && sectorMatch && searchMatch) {
                    card.classList.remove('hidden');
                    card.classList.add('visible');
                    visibleCount++;
                } else {
                    card.classList.add('hidden');
                    card.classList.remove('visible');
                }
            });

            // Update counter
            visibleCountSpan.textContent = visibleCount;

            // Animation for visible cards
            const visibleCards = document.querySelectorAll('.job-card.visible');
            visibleCards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
            });
        }

        // Filter events
        locationFilter.addEventListener('change', filterJobs);
        contractFilter.addEventListener('change', filterJobs);
        sectorFilter.addEventListener('change', filterJobs);
        searchFilter.addEventListener('input', filterJobs);

        // Clear filters button
        clearFiltersBtn.addEventListener('click', () => {
            locationFilter.value = '';
            contractFilter.value = '';
            sectorFilter.value = '';
            searchFilter.value = '';
            filterJobs();
        });

        // Initialization
        document.addEventListener('DOMContentLoaded', () => {
            filterJobs();
        });
    </script>
</body>
</html> 