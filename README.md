# Welcome to Inventory Management System

## Requirements

-   PHP >= 8.0.2
    -   For installation and maintenance, you’ll need to be able to run php from the command line.
    -   Required Extensions: Ctype, cURL, DOM, Fileinfo, Filter, Hash, Mbstring, OpenSSL, PCRE, PDO, Session, Tokenizer, XML
-   MySQL >= 5.7
    -   Single Database (All permissions advised since application manages schema)
-   Git Version Control
    -   For application of updates when following our standard process.
-   Composer >= v2.0
    -   For installation and management of our PHP dependencies.
-   A PHP Compatible WebServer
    -   For usage with PHP and for serving static files.

## Deployment Instruction

-   Clone the project from GIT
-   Goto the project file
-   `composer install`
-   `cp .env.example .env`
-   Update database information in `.env`
-   `php artisan key:generate`
-   `php artisan migrate`
-   `php artisan db:seed --class=ProductsTableSeeder`
-   `npm install`
-   `npm run build`
-   `php artisan serve`