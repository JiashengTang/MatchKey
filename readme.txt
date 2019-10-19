Our prject was built using the laravel PHP framework

About Laravel
Laravel is a web application framework with expressive, elegant syntax. 
We believe development must be an enjoyable and creative experience to be truly fulfilling. 
Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:
-Simple, fast routing engine.
-Powerful dependency injection container.
-Multiple back-ends for session and cache storage.
-Expressive, intuitive database ORM.
-Database agnostic schema migrations.
-Robust background job processing.
-Real-time event broadcasting.
Laravel is accessible, yet powerful, providing tools needed for large, robust applications.
A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

Documentation for laravel -- https://laravel.com/docs/5.8

License
The Laravel framework is open-sourced software licensed under the MIT license.--(https://opensource.org/licenses/MIT)

MatchKey
MatchKey is a Job Matching website for job-seekers and recruiters for the Australian market - written in Laravel 5.8(https://laravel.com/docs/5.8/releases)).

Our Site - www.matchkey.com.au

Contributors
-Chenjie Yu s3557899
-Haoliang Lian s3509192
-Wenhan Shou s3571312
-Josephine Wong Siew Yee s3597422

Setup instructions
Setup your development environment following the official requirements.-- https://laravel.com/docs/5.8/releases

Clone the repository
- cd /var/www/
- sudo rm -rf /var/www/MatchKey/
- git clone https://github.com/WenhanS/MatchKey.git
- cd MatchKey/
- composer install
- chmod -R 777 storage/
- chmod -R 777 vendor/

Configure your environment
- cp .env.travis .env
- php artisan key:generate

Migrate, and (optionally) seed
- php artisan migrate
