<?php
$message = '';
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uploadDir = "/var/www/html/uploads/";
    $file = $_FILES["resume"];
    
    if ($file["error"] == 0) {
        $filename = $file["name"];
        // If the filename doesn't already contain /uploads/, we add it
        if (strpos($filename, '/uploads/') === false) {
            $filename = '/uploads/' . $filename;
        }
        $destination = $uploadDir . basename($file["name"]);
        
        if (move_uploaded_file($file["tmp_name"], $destination)) {
            $message = "File uploaded successfully: " . basename($file["name"]);
            $success = true;
        } else {
            $message = "Upload error";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply - TalentHub</title>
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
                        <a href="/apply.php" class="text-white hover:text-primary px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:bg-gray-800/50">Apply</a>
                        <a href="/job-offers.php" class="text-gray-300 hover:text-primary px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:bg-gray-800/50">Job Offers</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <div class="bg-gray-800/50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center animate-fade-in">
                <h1 class="text-5xl font-bold text-white mb-6">Apply</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">Send your application and join our team. Your next professional adventure starts here.</p>
            </div>
        </div>
    </div>

    <!-- Success/Error Message -->
    <?php if ($message): ?>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mb-8 animate-slide-up">
        <div class="glassmorphism rounded-2xl p-8 <?php echo $success ? 'border-green-500/50 bg-green-500/10' : 'border-red-500/50 bg-red-500/10'; ?> border-2">
            <div class="flex items-center justify-center">
                <?php if ($success): ?>
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-green-500/20 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="text-xl font-bold text-green-400 mb-1">Upload successful!</h3>
                        <p class="text-lg text-gray-300"><?php echo $message; ?></p>
                    </div>
                </div>
                <?php else: ?>
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 bg-red-500/20 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="text-xl font-bold text-red-400 mb-1">Upload error</h3>
                        <p class="text-lg text-gray-300"><?php echo $message; ?></p>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- Form Section -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="glassmorphism rounded-2xl p-8 animate-slide-up">
            <form method="post" enctype="multipart/form-data" class="space-y-8">
                <!-- Personal Information -->
                <div class="space-y-6">
                    <h2 class="text-2xl font-bold text-white mb-6">Personal Information</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-300 mb-3">Full Name *</label>
                            <input type="text" id="name" name="name" required
                                   class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600/50 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                                   placeholder="Your full name">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-300 mb-3">Email *</label>
                            <input type="email" id="email" name="email" required
                                   class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600/50 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                                   placeholder="your.email@example.com">
                        </div>
                    </div>
                    
                    <div>
                        <label for="position" class="block text-sm font-semibold text-gray-300 mb-3">Desired Position *</label>
                        <input type="text" id="position" name="position" required
                               class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600/50 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                               placeholder="Ex: Full-Stack Developer, Data Scientist...">
                    </div>
                </div>

                <!-- Resume Upload -->
                <div class="space-y-6">
                    <h2 class="text-2xl font-bold text-white mb-6">Resume and Documents</h2>
                    
                    <div class="file-upload-area rounded-2xl p-8 text-center cursor-pointer hover-lift">
                        <input id="resume" name="resume" type="file" class="sr-only" required>
                        
                        <div class="mb-4">
                            <svg class="mx-auto h-16 w-16 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                        </div>
                        
                        <h3 class="text-lg font-semibold text-white mb-2">Upload your resume</h3>
                        <p class="text-gray-400 mb-4">Drag and drop your file here or click to select</p>
                        <p class="text-sm text-gray-500">All formats accepted (max 10MB)</p>
                        
                        <div id="fileInfo" class="mt-4 hidden"></div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="pt-6">
                    <button type="submit" 
                            class="w-full px-8 py-4 bg-gradient-to-r from-primary to-blue-600 text-white rounded-xl hover:from-blue-600 hover:to-primary transition-all duration-300 font-semibold text-lg glow hover-lift">
                        Send my application
                    </button>
                </div>
            </form>
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
        // Drag and drop functionality
        const uploadArea = document.querySelector('.file-upload-area');
        const fileInput = document.getElementById('resume');
        const fileInfo = document.getElementById('fileInfo');

        uploadArea.addEventListener('click', () => fileInput.click());

        fileInput.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (file) {
                // Calculate size in appropriate unit
                let fileSize;
                if (file.size < 1024) {
                    fileSize = file.size + ' bytes';
                } else if (file.size < 1024 * 1024) {
                    fileSize = (file.size / 1024).toFixed(2) + ' KB';
                } else {
                    fileSize = (file.size / 1024 / 1024).toFixed(2) + ' MB';
                }
                
                fileInfo.innerHTML = `
                    <div class="flex items-center justify-center space-x-2 text-green-400">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="font-medium">File selected: ${file.name} (${fileSize})</span>
                    </div>
                `;
                fileInfo.classList.remove('hidden');
            }
        });

        uploadArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            uploadArea.classList.add('dragover');
        });

        uploadArea.addEventListener('dragleave', () => {
            uploadArea.classList.remove('dragover');
        });

        uploadArea.addEventListener('drop', (e) => {
            e.preventDefault();
            uploadArea.classList.remove('dragover');
            
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                fileInput.files = files;
                fileInput.dispatchEvent(new Event('change'));
            }
        });
    </script>
</body>
</html> 