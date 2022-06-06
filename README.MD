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

# What is Rewritecond in htaccess?

   - Rewritecond is use to Redirect the Request URL.
   -  Let suppose you want to route all http traffic to https only.This can be achieve using same.

# What is the rewrite rule in htaccess?

   - Rewrite rule in .htaccess allows a website developer to create redirects to certain    destination urls. 
   - The destination urls could be within the same website or to an external one.

   ```
    RewriteEngine on 
    RewriteCond %{HTTP_HOST} ^example.com$ 
    RewriteRule ^(.*) http://www.example.com/$1 [QSA,L,R=301
   ```

# Rewriting a URL

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

