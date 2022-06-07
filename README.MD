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
# clone
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

        ```
        ssh -i /home/ubuntu/keypair ubuntu@43.204.224.234 
        ```

  ## 2. Install Apache Web Server on Ubuntu

    - Step 1: update and upgrade the software package list and then install the Apache webserver
         ```
          sudo apt-get update
          sudo apt-get upgrade
          sudo apt-get install apache2 apache2-utils 
         ```

    - Step 2: Enable apache2 web server
         ```
          sudo systemctl enable apache2
          sudo systemctl start apache2
          sudo systemctl status apache2
         ```

    - Step 3: To test the apache server 
         http://server_address

















# How to enable wordpress multisite network

  