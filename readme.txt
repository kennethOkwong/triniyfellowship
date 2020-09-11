Now that we have tested our database connection and querying the database, we add two new methods to our Database module which are "prepare" and "lastinsertId" before proceeding to code our User module.

You can check the User.php file to see the code.


We have previously added data to our database via phpmyadmin. now, let's try inserting data to the database by code.


first, we go back to our index.php and delete the old $db->query code. You will notice we now use our User module here to create a new user and even read out all users in the database. We no longer have to scatter our pages with SQL code.

Refresh the page, you'll notice a new user is added to the database each time.