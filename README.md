Installation

Clone the repo git clone https://github.com/emusvibe/mds-assessment.git
cd to project folder.
Run composer install
Save as the .env.example to .env and set your database information
Run php artisan key:generate to generate the app key
Run php artisan migrate
Run php artisan fetch:data to fetch data from API and store in database.
Done !!! Enjoy 