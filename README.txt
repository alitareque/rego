How to setup the project:

1. Please download the file from the git repo here .....
2. The folder rego contains all the files to run this project
3. This project is built in PHP with MySQL database
3. Please create a website with the rego folder as the root directory
4. Please name the loal host server as rego
4. For the databse, please create a database named registrations in MySQL server
5. Import the data into the registrations database from the registrations.sql file
6. The command to take a import is 
	mysql -uroot -p[password] registrations < [path to the registations.sql file]/registrations.sql
7. Please replace the text within the square brackets
8. Once the website and the database are set, go to the website's root directory
9. So, basically if the server name is set to rego, then the path to the locally hosted server will be http://rego
10. Please change the database connection information on file located at rego/src/database.php
10. Finally, type the address http://rego on a browser's address bar