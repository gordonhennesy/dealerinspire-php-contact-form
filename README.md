## Dealer Inspire Contact Form Submission Code Challenge 

This is a Laravel implementation of a website, which displays a page containing a form which,
when submitted, emails the contents to an email address, and also stores the field values
in a database table.

Prerequisites:
- [Composer](https://getcomposer.org/download/)
- [Laravel](https://laravel.com/)

## Setup

Please run the following commands

- cp .env.example .env
-- this sets up a number of environment variables which Laravel relies on
- EDIT the .env file (to set up any email, or database account info and passwords (see the config files referred to
HERE)
1. composer update
    1. this will install prerequisites for running this Laravel implementation
1. php artisan key:generate
1. php artisan migrate
1. phpunit # this will run the tests, verifying that emailing, database insertion, and validation on form fields is working
1. If you don't want to reconfigure anything from the .env file, then you can run the file setup.sh
## Verification

Next, run

- The initial configuration has it set up so that emails are written to the log. Run the following command:


- tail storage/logs/laravel.logo 

- To check that the form submission is working, run the following command:
- php -S 127.0.0.1:9999 -t public
- open a browser and navigate to http://localhost:9999
- Click on the Contacts link at the upper right of the page to scroll to the submission form
- Fill out the form fields (Fullname, Email, and Message are required; if you leave them blank, you will be returned to the form and will be given a chance to re-enter)

## Email configuration

Use the following instructions for making the website actually send an email. (be advised, the email address smiley@example.com is NOT an actual address)

Edit the .env file, remote the lines that begin with MAIL_ and substitute the following (with your configuration details)

This example uses GMAIL as a host, you will need to add your username and password to the .env file (on your local machine, ONLY, of course)
NOTE: you will have to go into your google gmail settings to allow "Less secure apps" to access Gmail

    MAIL_DRIVER=smtp
    MAIL_HOST=smtp.googlemail.com
    MAIL_PORT=465
    MAIL_USERNAME=yourgoogleusername@gmail.com
    MAIL_PASSWORD=yourgooglepassword
    MAIL_ENCRYPTION=ssl

- Mailtrap.

For testing purposes, and to see how your email looks on different devices, you may wish to set up mailtrap. Signing up
is free at [Mailtrap](https://mailtrap.io), and you can log onto your account, and any emails you send (regardless of the TO: address) end up in your inbox folders,
so that you make sure that they were sent. The website allows you to see what the emails look like on different devices, as
well.

    MAIL_DRIVER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=USERNAME_FROM_YOUR_MAILTRAP_ACCOUNT
    MAIL_PASSWORD=PASSWORD_FROM_YOUR_MAILTRAP_ACCOUNT
    MAIL_ENCRYPTION=null
    MAIL_FROM_ADDRESS=null
    MAIL_FROM_NAME="${APP_NAME}"

## Database configuration

- If you want to actually store results in a database other than sqlite, configuration options in the .env file
are as follows:

- MySQL:

Again, in the .env file replace all lines beginning with DB_ with the following block of lines

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
