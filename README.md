# **LiTE-BOX**

![GitHub contributors](https://img.shields.io/github/contributors/TheRealSageKing/litebox)
![GitHub last commit](https://img.shields.io/github/last-commit/TheRealSageKing/litebox)
![GitHub](https://img.shields.io/github/license/TheRealSageKing/litebox)

![GitHub forks](https://img.shields.io/github/forks/TheRealSageKing/litebox?style=social)
![GitHub Repo stars](https://img.shields.io/github/stars/TheRealSageKing/litebox?style=social)
![GitHub watchers](https://img.shields.io/github/watchers/TheRealSageKing/litebox?style=social)
![GitHub followers](https://img.shields.io/github/followers/TheRealSageKing?style=social)
## **About LiteBox**

Litebox is an electronic document management system for start-ups who intend digitize their physical document and have a digital environment to create, store, retrieve and manage access to these electronic document records.

## **Features**
Currently work is in progress and these features will be added or updated.

- User Authentication
- User & Group Management
- Document Storage & Retrieval

Updates will be communicated here and also on [discord](#)

----------

# Getting started

## **Installation**

- Clone the repository
- Install all the dependencies using composer. 
    
    ```composer install```
- Copy the example env file and make the required configuration changes in the .env file
- Generate a new application key.

    ```php artisan key:generate```

- Run the database migrations (**Set the database connection in .env before migrating**)

    ```php artisan migrate```

-  Run ```npm install``` to install dependencies.
-  Run ```php artisan serve```. You can now access the server at http://localhost:8000


## **Contributing**

Thank you for considering contributing to the LiteBox. Litebox is still in its infancy and documentation is ongoing at the moment However, you can reach out to me via [email](mailto:insanedude.developer@gmail.com). I will definitely reach back to you.

## **License**

The LiteBox is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
