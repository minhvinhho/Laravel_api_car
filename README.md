# project setup
01. `composer install`
02. `cp .env.example .env`
03. `php artisan key:generate`
04. `php artisan migrate`
05. `php artisan db:seed`
06. `php artisan storage:link`
07. `php artisan serve`

# use passport
`php artisan passport:install`

# clear up
01. `php artisan config:cache`
02. `php artisan cache:clear`
03. `php artisan route:clear`
04. `php artisan view:clear`
05. `composer dump-autoload`

# check routes
`php artisan optimize`

# Cridentials
01. 
    Email: `admin@admin.com` 
    Password: `123456`
02. 
    Email: `agent@agent.com` 
    Password: `123456`
03. 
    Email: `user@user.com` 
    Password: `123456`