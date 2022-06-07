# .htaccess
- htaccess file is located in the root directory of our WordPress site
- it is a configuration file used by apache server that provides instructions for 
  different directories of a website

- it allows to override default configuration of Apache server on run time.
- Using .htaccess we can easily enable or disable any functionality at the run time.

   ## Uses of .htaccess

   1. Redirect or Rewrite URLs
   2. Enable Password Protection
   3. Define Custom Error Pages
   4. Change URLs
   5.  Allow or Deny specific IP based users

   ## What is Rewritecond in htaccess?

   - Rewritecond is use to Redirect the Request URL.
   -  Let suppose you want to route all http traffic to https only.This can be achieve using same.

   ## What is the rewrite rule in htaccess?

   - Rewrite rule in .htaccess allows a website developer to create redirects to certain    destination urls. 
   - The destination urls could be within the same website or to an external one.

   ```
    RewriteEngine on 
    RewriteCond %{HTTP_HOST} ^example.com$ 
    RewriteRule ^(.*) http://www.example.com/$1 [QSA,L,R=301
   ```

   ## Rewriting a URL

    ```
    Options +FollowSymLinks
    RewriteEngine On
    RewriteRule ^([0-9]+).html /abc.php?id=$1 [QSA,L]


    ([0-9]+)
        allows any digit, and only any digit, 1 or more times.
    ([a-z-]*)
        allows any lowercase letter, plus “-” for word separation, 0 or more times. If you want it to support uppercase too, use “([a-zA-Z-]*). For example:
        RewriteRule ^place/([a-zA-Z-]*).html /place/abc.php?id=$1 [QSA,L]
    [QSA,L]
        appends this to your internal scripting query string, and makes it the Last rewrite rule executed.
        
    ```
# Clone a wordpress site to new ec2 machine
  ## 1. Create a new EC2 instance 

    - Step 1: Login to AWS Mangement Console and Open EC2
    - Step 2: Click on Launch Instance
    - Step 3 : Choose an Amazon Machine Image (AMI)   
        * AMI or Amazon Machine Image is nothing but a pre-configured template which contains software configurations for your instance for example operating system or the application server etc.)
    
    - Step 4:  Choose an Instance Type ( free tier for learning purpose)
        * Instance Type is basically selection of hardware configurations for your instance for example CPU, memory, storage, and networking capacity.)
    
    - Step 5: Configure Instance Details 
        * How many instance you want
        * VPC and subnet in which you want to launch an instance
        * Assign Public Ip to instance
        * Attach an IAM role to an instance etc.
    
    - Step 6: Add Storage
    - Step 7: Add Tags
    - Step 8: Configure Security Group     
        * open port 22 for SSH so that I can connect to my instance.
        * open 80 or 443 on your instance if you are planing to use your instance like web server
    
    - Step 9: Review and Launch
    - Step 10: Create/Select a Key Pair (Download keypair and click Launch Instances)

        
        ssh -i /home/ubuntu/keypair ubuntu@43.204.224.234 
        

  ## 2. Install Apache Web Server on Ubuntu
    - Step 1: update and upgrade the software package list and then install the Apache webserver
        sudo apt-get update
        sudo apt-get upgrade
        sudo apt-get install apache2 apache2-utils 
         
    - Step 2: Enable apache2 web server
        sudo systemctl enable apache2
        sudo systemctl start apache2
        sudo systemctl status apache2
         
    - Step 3: To test the apache server 
        http://43.204.224.234 


  ## 3. Install MySQL Database Server
        - sudo apt-get install mysql-client mysql-server
        - ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password by 'StrongPassword';
        - sudo mysql_secure_installation
        - you will be asked to install the ‘validate_password’ plugin, 
          so type in Y/Yes and press Enter and also choose the default password strength level
        - For the remaining questions, press Y and hit the ENTER key at each prompt.

  
  ## 4.Install PHP in Ubuntu
        - sudo apt-get install php libapache2-mod-php php-mysql php-curl php-gd php-mbstring php-xml php-xmlrpc php-soap php-intl php-zip 
        - sudo systemctl restart apache2
        - Step 6: To test if php is working, we need to create a info.php file inside /var/www/html.
        - sudo vi /var/www/html/info.php
            <?php 
               phpinfo();
             ?>
        - When that is done, open your web browser and type in the following URL in the address bar.
            http://43.204.224.234 /info.php
    
  
  ## 5.Install WordPress in Ubuntu
        - wget -c http://wordpress.org/latest.tar.gz
        - tar -xzvf latest.tar.gz
        - sudo mv wordpress/* /var/www/html/
        - sudo chown -R www-data:www-data /var/www/html/
        - sudo chmod -R 755 /var/www/html/

    - Step 1: Create WordPress Database
        - sudo mysql -u root -p 
        - CREATE DATABASE sampledb;
        - CREATE USER 'username'@'%' IDENTIFIED WITH mysql_native_password BY 'password';
        - GRANT ALL ON wp_myblog.* TO 'username'@'%';
        - FLUSH PRIVILEGES;
        - EXIT;
        - cd /var/www/html/
        - sudo mv wp-config-sample.php wp-config.php
        - sudo rm -rf index.html

    - Step 2: Update the wp-config file with the following details
        - sudo vi wp-config.php
        - 'DB_NAME' 'sampledb' ;
          'DB_USER' 'root';
          'DB_PASSWORD' '';
          'DB_HOST' 'localhost';
        - sudo systemctl restart apache2.service 
        - sudo systemctl restart mysql.service   

    - Step 3: Open your web browser,You will get the welcome page of wordpress add details and install wordpress

    - Step 4: Clone the project directory into /var/www/html and remove the default wordpress folders

  ## 6.Take the datadumb from production server and import it into new machine

    - Step 1: Login to production server
    - Step 2: Create a backup of present database and and the existing code in the server
    - Step 3: Create a datadumb from the server
              - mysqldump -u entomoUser -p entomo > entomo_db_staging_3105.sql
    - Step 4: Logout the server and from our local machine (copy the dumb from production server to local machine)
              - sudo scp -i  /home/entomo-server-key/website_prod.pem -r ubuntu@54.254.17.77:/home/entomo_db_staging_3105.sql /home/
    - Step 5: copy the file from local machine to new ec2 machine
              - sudo scp /home/nivya/entomo-test-server.pem /home/entomo_db_staging_3105.sql ubuntu@43.204.224.234:~/
    - Step 6: Update the content inside datadumb
              - sed -i -e 's/entomo.co/43.204.224.234/g' entomo_db_staging_3105.sql 
              Update the URL 
              - sed -i -e 's/http:\/\/entomo.co/https:\/\/43.204.224.234/g' entomo_db_staging_3105.sql 
    - Step 7: Validate everything is updated using grep
              - cat entomo_db_staging_3105.sql | grep 'https://43.204.224.234'
    - Step 8: Import the datadump to the server
              - mysql -u root -p sampledb < entomo_db_staging_3105.sql
    - Step 9: update the site url and home url in wp_options table database
              - update wp_options set option_value = 'http://43.204.224.234' where option_id=1;
              - update wp_options set option_value = 'http://43.204.224.234' where option_id=2;
    - Step 10: Check if everything is worked then restart the server

  ## 7.Enable Apache mod_rewrite Module In Ubuntu

    - Apache mod_rewrite module helps you to manipulate URLs.
    - For example in WordPress, instead of accessing a blog post by https://example.com/?p=1,
      you can use the mod_rewrite module to access that post with an SEO friendly pretty URL 
      such as https://example.com/my-first-post
    - mod_rewrite module can be used for complex conditional URL redirections.
    - sudo a2enmod rewrite
    - Still it will not work ,so we have to override the apache global configuration.
    - cd /etc/apache2
    - sudo vi apache.conf

        <Directory /var/www/>
            Options Indexes FollowSymLinks
            AllowOverride All 
            Require all granted
        </Directory>

    - sudo service apache2 restart
    - Now you can use a .htaccess file to mention the necessary rewrite instructions
    - Add .htaccess file in /var/www/html
    - sudo vi .htaccess
        ```
            RewriteEngine On
            RewriteCond %{HTTP:X-Forwarded-Proto} !https
            RewriteCond %{HTTPS} off
            RewriteRule ^ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
            RewriteBase /
            RewriteRule ^index\.php$ - [L]
            RewriteCond %{HTTP_HOST} ^www\.(.*)$ [NC]
            RewriteRule ^(.*)$ https://%1/$1 [R=301,L]

            #RewriteCond %{HTTP_HOST} ^43\.204\.224\.234$
            #RewriteRule (.*) https://43.204.224.234$1 [R=301,L]

            # add a trailing slash to /wp-admin
            RewriteRule ^([_0-9a-zA-Z-]+/)?wp-admin$ $1wp-admin/ [R=301,L]

            RewriteCond %{REQUEST_FILENAME} -f [OR]
            RewriteCond %{REQUEST_FILENAME} -d
            RewriteRule ^ - [L]
            RewriteRule ^([_0-9a-zA-Z-]+/)?(wp-(content|admin|includes).*) $2 [L]
            RewriteRule ^([_0-9a-zA-Z-]+/)?(.*\.php)$ $2 [L]
            RewriteRule . index.php [L]
            php_value upload_max_filesize 16M
            php_value post_max_size 16M
            php_value max_execution_time 300
            php_value max_input_time 300
            <IfModule mod_rewrite.c>
            RewriteEngine On
            RewriteBase /
            RewriteRule ^index\.php$ - [L]
            RewriteCond %{REQUEST_FILENAME} !-f
            RewriteCond %{REQUEST_FILENAME} !-d
            RewriteRule . /index.php [L]
            </IfModule>
        ```

  ## 8.Enable HTTPS protocol with Apache 2 on Ubuntu 20.04
    - Configuring the Apache SSL parameters
       - sudo vi /etc/apache2/conf-available/ssl-params.conf
          ```
              
            SSLProtocol All -SSLv2 -SSLv3 -TLSv1 -TLSv1.1
            
            SSLHonorCipherOrder On
            
            
            
            # Requires Apache >= 2.4
            
            SSLCompression off
            
            SSLUseStapling on
            
            SSLStaplingCache "shmcb:logs/stapling-cache(150000)"
            
            
            # Requires Apache >= 2.4.11
            
            SSLSessionTickets Off

          ```
    - configure the Firewall 
        - sudo ufw app list
        - To allow HTTP (Port 80) and HTTPS (Port 443) traffic, use the "Apache Full" profile. 
        - sudo ufw app info "Apache Full"
        - sudo ufw allow in "Apache Full"
    - configure Apache
        - Enable the mod_ssl and mod_headers modules:
          - sudo a2enmod ssl
          - sudo a2enmod headers
        - Enable reading of the SSL configuration created earlier:
          - sudo a2enconf ssl-params
        - Enable the default SSL Virtual Host:
          - sudo a2ensite default-ssl
        - Check that you have not made syntax errors in the Apache configuration files:
          - sudo apache2ctl configtest
        - If the message "Syntax OK" appears on the screen, proceed by restarting Apache:
          - sudo systemctl restart apache2
    - To check
        https://43.204.224.234


  