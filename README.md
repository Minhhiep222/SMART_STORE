# Smart Store

## Description

This is a Smart Store project that provides a client-side response. The project includes features such as:

-   Register as a buyer or seller
-   Payment through various.
-   Search functionality
-   User management
-   Products management
-   Orders management
-   Reviews and comments
-   Detail product

---

## SPACE FOR USERS / CUSTOMERS

### Home Page

![Home Page 1](./public/readme/user/homePage1.png)
![Home Page 2](./public/readme/user/homePage2.png)

### Login

-   Login
    ![Search Page](./public/readme/user/login.png)

### Register

-   Register
    ![Search Page](./public/readme/user/register.png)

### Search Page

-   Search
    ![Search Page](./public/readme/user/search.png)

-   Search Result
    ![Search Page](./public/readme/user/searchResutl.png)

### Product Detail Page

-   Detail
    ![Search Page](./public/readme/user/detailProduct.png)

### Add To Cart

-   Add to cart
    ![Search Page](./public/readme/user/addToCart.png)

-   Cart Result
    ![Search Page](./public/readme/user/cart.png)

### Shop Detail Page

![Shop Detail](./public/images/detail.png)

### Payment

-   Payment
    ![Search Page](./public/readme/user/payment.png)

-   Payment Success
    ![Search Page](./public/readme/user/success.png)

## SPACE FOR VENDORS

### Manage Products

![Search Page](./public/readme/vendor/products.png)

### Create Product

-   Create Product
    ![Search Page](./public/readme/vendor/create.png)
-   Create Success
    ![Search Page](./public/readme/vendor/createSuccess.png)

### Update Product

-   Update
    ![Search Page](./public/readme/vendor/update.png)

-   Update Success
    ![Search Page](./public/readme/vendor/profile.png)

### Delete Product

![Search Page](./public/readme/vendor/products.png)

## Installation:

1. **Install Composer**:  
   Download Composer from [here](https://getcomposer.org/download).

2. **Install XAMPP**:  
   Download XAMPP from [here](https://www.apachefriends.org/download.html).

## Usage Server Repository:

1. **Clone the server repository**:

```bash
  git clone https://github.com/Minhhiep222/SMART_STORE.git
```

2. **run "composer install" in terminal or cmd, git bash**

```bash
composer install
```

3. **run "php artisan key:generate" in terminal or cmd, git bash**

```bash
php artisan key:generate
```

4. **Phpmyadmin create a table database**

5. **In file .env look for line 14: DB_DATABASE="your-name-database"**

6. **run "php artisan migrate --seed" in terminal or cmd, git bash for database and data**

```bash
php artisan migrate --seed
```

7. **run "php artisan serve" for run sever**

```bash
php artisan serve
```
