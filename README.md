## Blood Pressure Manager

A simple patients and blood pressure records manager.

### Setup for local development
This project uses docker. To build the containers, you need to run, once, the following command in the project's root directory:

```
docker-compose build
```

Then, to start them and deploy the project locally, run:

```
docker-compose up -d
```

To stop the container:

```
docker-compose stop
```

And to remove them:

```
docker-compose down
```

Finally, install dependencies and run migrations and seeders:
```
docker exec -it <name_of_php_container> composer install && php artisan migrate --seed
```

(To find the name of the container, you can run "docker ps")

With or without seeders, there will be an admin user available to login into the site:

Email: example@example.com
Password: secret

Note: Due to the nature of the project, the MYSQL connection and credentials environment variables are already set in the .env.example file.

###Frontend assets
To build assets, Node 12+ must be installed.

```
npm run dev/prod
```
