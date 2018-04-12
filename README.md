## Installing project

To install the project please follow this steps

  1. Using Docker
     - If you have docker and docker-compose please run "docker-compose build" command from terminal in the project directory. This command will build your container
     - Run "docker-compose up -d" to run container created in previously step
     - You can access to project by typing "localhost:8080"
  2. If you use another environment such as WAMP, MAMP, XAMP etc., just point your domain to the "web" folder of the project
  3. Run "composer install" command to install all required dependencies
  4. To run unit tests just execute this command "vendor/bin/phpunit tests"

## Information

- All interaction process between units, landscapes and bases is depicted in index.php file
- I didn't develop neither real unit fighting algorythm, neither units moving functionality
- The purpose was to show how objects are interacting according to the task requirements and it's restrictions