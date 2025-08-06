#!/bin/bash

# Clear uploads folder (except confidential folder)
rm -rf /var/www/html/uploads/*
mkdir -p /var/www/html/uploads/confidential

# Recreate secret file
echo "=== CONFIDENTIAL DATA - TALENTHUB ===" > /var/www/html/uploads/confidential/secret_data.txt
echo "" >> /var/www/html/uploads/confidential/secret_data.txt
echo "SALARY INFORMATION 2024:" >> /var/www/html/uploads/confidential/secret_data.txt
echo "- Junior Developer: 35,000€ - 45,000€" >> /var/www/html/uploads/confidential/secret_data.txt
echo "- Senior Developer: 55,000€ - 75,000€" >> /var/www/html/uploads/confidential/secret_data.txt
echo "- DevOps Engineer: 60,000€ - 85,000€" >> /var/www/html/uploads/confidential/secret_data.txt
echo "- UX/UI Designer: 40,000€ - 60,000€" >> /var/www/html/uploads/confidential/secret_data.txt
echo "" >> /var/www/html/uploads/confidential/secret_data.txt
echo "RECRUITMENT BUDGET Q1 2024:" >> /var/www/html/uploads/confidential/secret_data.txt
echo "- Total allocated: 2,500,000€" >> /var/www/html/uploads/confidential/secret_data.txt
echo "- Already spent: 1,200,000€" >> /var/www/html/uploads/confidential/secret_data.txt
echo "- Remaining: 1,300,000€" >> /var/www/html/uploads/confidential/secret_data.txt
echo "" >> /var/www/html/uploads/confidential/secret_data.txt
echo "PRIORITY CANDIDATES:" >> /var/www/html/uploads/confidential/secret_data.txt
echo "- Marie Dubois (ID: 1) - Requested salary: 65,000€" >> /var/www/html/uploads/confidential/secret_data.txt
echo "- Thomas Martin (ID: 2) - Requested salary: 72,000€" >> /var/www/html/uploads/confidential/secret_data.txt
echo "- Sophie Bernard (ID: 3) - Requested salary: 58,000€" >> /var/www/html/uploads/confidential/secret_data.txt
echo "" >> /var/www/html/uploads/confidential/secret_data.txt
echo "NEGOTIATION STRATEGY:" >> /var/www/html/uploads/confidential/secret_data.txt
echo "- Offer 10% below request" >> /var/www/html/uploads/confidential/secret_data.txt
echo "- Benefits: 25 vacation days + remote work" >> /var/www/html/uploads/confidential/secret_data.txt
echo "- Performance bonus: 15% of annual salary" >> /var/www/html/uploads/confidential/secret_data.txt
echo "" >> /var/www/html/uploads/confidential/secret_data.txt
echo "ADMIN PASSWORDS:" >> /var/www/html/uploads/confidential/secret_data.txt
echo "- admin_panel: TalentHub2024!" >> /var/www/html/uploads/confidential/secret_data.txt
echo "- database: RH_secure_2024" >> /var/www/html/uploads/confidential/secret_data.txt
echo "- backup_server: Backup@TalentHub#2024" >> /var/www/html/uploads/confidential/secret_data.txt
echo "" >> /var/www/html/uploads/confidential/secret_data.txt
echo "=== END OF CONFIDENTIAL DATA ===" >> /var/www/html/uploads/confidential/secret_data.txt

# Restart Apache
apache2ctl -D FOREGROUND 