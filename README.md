<p align=center><h2>Dealer Inspire Code Challenge</h2>
</p>

## Dealer Inspire Contact Form Submission Code Challenge 

This is a Laravel implementation of a website, which displays a page containing a form which,
when submitted, emails the contents to an email address, and also stores the field values
in a database table.

Prerequisites:
- [Laravel](https://laravel.com/)
- [Composer]()
- []

## Setup

Please run the following commands

- cp .env.example .env
-- this sets up a number of environment variables which Laravel relies on
- EDIT the .env file (to set up any email, or database account info and passwords (see the config files referred to
HERE)
- composer update
-- this will install prerequisites for running this Laravel implementation
- php artisan key:generate
- php artisan migrate
- phpunit # this will run the tests, verifying that emailing, database insertion, and validation on form fields is working

## Verification

Next, run

- The initial configuration has it set up so that emails are written to the log. Run the following command:


- tail storage/logs/laravel.log

- To check that the form submission is working, run the following command:
- php -S 127.0.0.1:9999 -t public

- Click on the Contacts link at the upper right of the page to scroll to the submission form
- Fill out the form fields (Fullname, Email, and Message are required; if you leave them blank, you will be returned to the form and will be given a chance to re-enter)



- 
