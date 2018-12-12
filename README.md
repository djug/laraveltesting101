## Laravel Testing 101 Demo application
This is the Laravel Testing 101 demo application. for more information please visit https://laraveltesting101.com.

You can also read the free articles I publish regarding this ebook at https://youghourta.com/blog/


## How to install
-   Clone this repo: `git clone https://github.com/djug/laraveltesting101.git`
-   `cd laraveltesting101/`
-   Install the dependencies: `composer install`
-   Create a new database and create/update your `.env` file accordingly. You can copy the `.env.example` file (`cp .env.example .env`)
-   run the migrations `php artisan migrate` and the seeders `php artisan db:seed`
-   generate an encryption key `php artisan key:generate`
-   Lunch the built-in PHP webserver `php artisan serve`
-   Visit [http://127.0.0.1:8000/](http://127.0.0.1:8000/) to see the demo homepage

### Directory Permissions

Directories within the `storage` and the `bootstrap/cache` directories should be writable by your web server or the application might not run correctly.
