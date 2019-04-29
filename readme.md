This is the Laravel Project that forms part of a final year project
by Daniel Connolly U1457227 University of Huddersfield.
This project was developed and tested locally with Xampp to execute this project on
Xampp this project will have to be placed into the htdocs folder in Xampp. There is an SQL dump contained in this project
it can be found in the _SQL directory this will be needed to run this project.

#If downloaded from GitHub run the following commands.
  $ composer install
#Then copy the .env.example execute the command
  $ cp .env.example .env
  within the .env file the various database credentials will need adding 
#Will need to generate an app encryption key
 $ php artisan key:generate
#Import the SQL dump into a MySQL database then run the migrate command below
  $ php artisan migrate    