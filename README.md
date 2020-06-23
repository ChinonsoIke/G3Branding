## Gizzabre

#### Requirements
* php >=7.2
* mysql >= 5.6
* Apache/Nginx
* composer


## Step to run application
* clone/pull the application from the repo
* cd into project into project folder
* run ```
      composer install
      ``` to install the dependencies
* duplicate the .env.example file and name it .env
* update the necessary value
- __[such as ]()__
    + run ``` php artisan generate:key ``` to generate an application key
    + update the [APP_URL=](). e.g http://127.0.0.1
    + [DB_DATABASE=]() database name
    + [DB_USERNAME=]() database user
    + [DB_PASSWORD=]() database password
    + You can updated the Mail credentials as well if you have (you can use Mailtrap), but
    if you don't, ask Razaq.   
 
### You might want to check the following packages that used in the application to achieve certain functions
- [Laravel Spatie Permission](https://github.com/spatie/laravel-permission) : Roles and Permission Management
- [Image Intervention](http://image.intervention.io/): Image manipulation
- [Renatomarinho Laravel Page Speed](http://image.intervention.io/): Minify Html before rendering it to the browser (view source code on browser to see it effect)
