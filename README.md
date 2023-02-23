# Website for the FreshCraft project on Laravel 9
## About project

The project acts as a real site on Laravel 9 for the FreshCraft project. FreshCraft is a modification assembly project for minecraft. 

In this project, I will present the real knowledge that I will be able to gain while studying this wonderful framework.

[YouTube channel of the author of the FreshCraft project](https://www.youtube.com/channel/UCvbAKuWO0fOGxQ1mCBFAhzg).

---

## Requirements

- PHP 8.0 or later
- composer
- nodeJS

---

## Installation

### On Linux:

1. First, let's clone the repository:

<pre>$ git clone https://github.com/vladimir-kuzn/FreshCraft.git</pre>

2. Next, you need to go to the project folder:

<pre>$ cd FreshCraft/</pre>
3. Install the necessary components via composer:

<pre>$ composer install</pre>

4. Install the necessary components via npm:

<pre>$ npm install</pre>

5. After creating the ".env" file, don't forget to create the application key

<pre>$ php artisan key:generate</pre>

6. Next, you need to create a 'public' folder in 'storage' and create the symbolic link

<pre>
$ mkdir storage/app/public/images
$ mkdir storage/app/public/images/ForPosts

$ php artisan storage:link
</pre>

### How to launch seeds to get started:

1. From the very beginning, you need to create roles:

<pre> $ php artizan db:seed --class=RolesSeeder </pre>

2. Next, you need to appoint an administrator for the site to use the admin panel. 
To do this, the administrator needs to register on the site and assign to the ".env" file in the "EMAIL_ADMIN" parameter is mail, with which he registered earlier.
And then start seed:

<pre> php artisan db:seed --class=AdminSeeder </pre>

---

### License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
