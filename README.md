# Generic Instagram Clone

A straightforward photo sharing web app made with Laravel 5, Redis, and Bootstrap 4.

### Installation
* git clone https://github.com/alexbary/cs319-portfolio2.git cs319-portfolio2
* cd cs319-portfolio2
* composer install
* php artisan key:generate to regenerate secure key
* create new database and edit .env file for DB settings
* php artisan migrate —seed
* php artisan serve

### Setting Up Redis
* composer require predis/predis


### Include
* Laravel 5.4 (https://laravel.com/docs/5.4)
* Bootstrap (http://getbootstrap.com)
* SerializeJSON (https://github.com/marioizquierdo/jquery.serializeJSON)
* Select2 (https://github.com/select2/select2)


### Features
* Create a profile with a username, profile picture, and short bio
* Share images with captions
* Make comments on images
* Find and follow your friends and send direct message to them
* Like images
* Images are posted with no filters what so ever

### Pages

* Home view - live feed view with buttons to create a new post (also includes links to account management)
* Profile view - view user posts, followers, who this user is following, and number of posts  
* Individual post view - see all comments for an image, as well as a larger view of that image

### Packages Included
* barryvdh/laravel-debugbar
* barryvdh/laravel-ide-helper
* nesbot/carbon

### Requirements
* PHP 5.6.4
* Redis


### Authors
**Alex B**
- https://github.com/alexbary

**Sydney E**
- https://github.com/sydehlinger
