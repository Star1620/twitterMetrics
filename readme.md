Nette Web Project TwitterMetrics
=================

This is a simple application using the [Nette](https://nette.org) and some packages. 


Requirements
------------

- Web Project for Nette 3.1, requires PHP 8.0, Git, Composer, Twitter Bearer token


Installation
------------

The best way to install this Web Project is using GIT and Composer. 

1. PHP : To run Application, you need PHP server. If you don't have PHP installed, one of the common tool for localhost (running on your computer) is [XAMPP](https://www.apachefriends.org/index.html)
   Download it from official site https://www.apachefriends.org/index.html and install.
   
2. After installation, you can run Apache and PHP by XAMPP or by NETTE build-in server. 
If you want to run Appache and PHP by XAMPP, default www.localhost folder for your applications is xampp/htdocs/.  Then run XAMPP Control. 
If you want to use NETTE build-in PHP server follow Web Server Setup bellow.


3. Git: If you don't have GIT yet, download it from [the instructions](https://git-scm.com/downloads). 
In Git Bash terminal (if you will use XAMPP PHP server do it in folder xampp/htdocs/) run Git command : 

	git clone https://github.com/Star1620/twitterMetrics.git

It will clone application to directory "twitterMetrics". 
Inside this directory make directories `temp/` and `log/` writable.

2. Make a development account on [Twitter development portal](https://developer.twitter.com/)
   On this website you need to create account and new project. Then generate your project Bearer Token. Insert generated token to configuration file 'Common.neon'.

3. 
4. Install Composer - if you don't have Composer yet,download it following [the instructions](https://getcomposer.org/).
Then inside application folder (twittermetrics) run command:

	composer update



Web Server Setup
----------------

The simplest way to get started is to start the built-in PHP server in the root directory of your project:

	php -S localhost:8000 -t www

Then visit `http://localhost:8000` in your browser to see the welcome page.

For Apache or Nginx, setup a virtual host to point to the `www/` directory of the project and you
should be ready to go.

**It is CRITICAL that whole `app/`, `config/`, `log/` and `temp/` directories are not accessible directly
via a web browser. See [security warning](https://nette.org/security-warning).**
