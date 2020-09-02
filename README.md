# MarvelHeroes


### How entities are thinked:

As the television series as formed, the comics structs were thinked.
A television series (an story) has some seasons and each season has its episodes. Each episode has its characters and events. Knowing that, i made the parallel:

- Comic are the physical or digital products that end-users read; Each Comic has its Characters and Events.
- Comics belong to a Series (**called serie, just to have a plural form on Laravel**);
- A Story has a lot of Series.

So, the DB diagram can be seen on the figure below:

![Database Schema](docs/diagram.png)


### 1. Setup

- Clone repository:

	```cmd
	git clone https://github.com/carlosgcarneiro/MarvelHeroes.git
	```
	
- Download libraries:
	```cmd
	composer install
	``` 	
	
- Copy ``.env.example`` to ``.env``;

- Configure ``.env``;

- Install libraries:

	```cmd
	composer install
	``` 
	
- Generate and seed the database:

	```cmd
	php artisan migrate:fresh --seed
	``` 
