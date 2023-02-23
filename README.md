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
$ mkdir storage/app/public/images/ForPosts

$ php artisan storage:link
</pre>

---

### License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
