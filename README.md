# Laravel Shopping Cart APis


## Task Requiremnts:
  - Implement a shopping cart system API.
  - The user can create a cart with or without login
  - the user can list the producst categories
  - The user can list products (all, and as per category id).
  - The user can add products to the cart.
  - The user can checkout by submitting their: name, address, and payment details.
  - The order should be save with unique Id.
  - If the user is logged in, the order should be linked to them.
  - The user can list their previous orders.




## Language, Framework, and DB!
  - This System is implemented using php laravel framework
  - Mysql is used as a Database for this application



# API documentation:
The following is just a simple list of the api end points:

>POST /api/auth/signup

>POST /api/auth/login

>GET /api/auth/logout

>GET /api/categories/

>GET /api/productsbycategory/:catid

>GET /api/products/

>GET /api/products/:id

>POST /api/carts/

>GET /api/carts/:CartToken

>POST /api/carts/:CartToken

>POST /api/carts/:CartToken/checkout

>DEL /api/carts/:CartToken

>GET /api/orders

>GET /api/orders/:orderID


# Installation

Install the dependencies and start the server to test the Api.


$ Composer install
$ php artisan key:generate
$ php artisan migrate
$ php artisan passport:install
$ php artisan db:seed
