## Getting Started
Enter the following command to start the container
```
./vendor/bin/sail up
```
If the products don't show, paste the following code while the container is running
```
./vendor/bin/sail shell
php artisan db::seed --class=ProductSeeder
```
