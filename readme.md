Nette Web Project TwitterMetrics
=================

This is a simple application using the [Nette](https://nette.org) and some packages. 


Requirements
------------

- Web Project for Nette 3.1 requires PHP 7.2


Installation
------------

The best way to install this Web Project is using GIT and Composer. 
If you don't have GIT yet, download it from [the instructions](https://git-scm.com/downloads). 
Then in Git terminal use commands : 

	git clone https://github.com/Star1620/twitterMetrics.git

It will clone application to directory "twitterMetrics". Inside this directory make directories `temp/` and `log/` writable.

If you don't have Composer yet,download it following [the instructions](https://getcomposer.org/). 
Then inside twittermetrics folder run command:

	composer update

Installation - localhost (on your computer)
------------

The same as Instalation above, only you need also PHP server on your local computer. One of the common used app is [XAMPP](https://www.apachefriends.org/index.html)
Download it from official site https://www.apachefriends.org/index.html and install.

Web Server Setup
----------------

The simplest way to get started is to start the built-in PHP server in the root directory of your project:

	php -S localhost:8000 -t www

Then visit `http://localhost:8000` in your browser to see the welcome page.

For Apache or Nginx, setup a virtual host to point to the `www/` directory of the project and you
should be ready to go.

**It is CRITICAL that whole `app/`, `config/`, `log/` and `temp/` directories are not accessible directly
via a web browser. See [security warning](https://nette.org/security-warning).**
