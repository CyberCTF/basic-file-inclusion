# Basic File Inclusion Lab

A security laboratory for learning how to exploit malicious file upload vulnerabilities.

## 🎯 Objective

Find the admin panel password

## 🚀 Getting Started

```bash
cd deploy
docker-compose up -d
```

Access: http://localhost:8080

## 🛡️ Vulnerabilities

- File upload without validation
- Direct access to uploaded files
- Malicious code execution

## 🎯 Exploitation

1. **Upload** a malicious PHP file via http://localhost:8080/apply.php
2. **Access** the uploaded file via http://localhost:8080/uploads
3. **Find** the admin panel password

## 📁 Structure

```
basic_file_inclusion/
├── build/                    # Vulnerable web pages
│   ├── apply.php            # CV upload page (vulnerable)
│   ├── index.php            # Home page
│   └── job-offers.php       # Job offers page
├── deploy/                   # Docker configuration
│   ├── docker-compose.yml   # Container orchestration
│   ├── Dockerfile           # Docker image
│   └── start.sh             # Startup script
├── docs/                     # Documentation
│   └── WRITEUP.md           # Exploitation guide
├── .github/                  # GitHub Actions
│   └── workflows/
│       └── docker-publish.yml # Docker CI/CD
├── .gitignore               # Git protection
└── .dockerignore            # Docker optimization
```

## ⚠️ Warning

This application is designed for security education. Do not use in production. 