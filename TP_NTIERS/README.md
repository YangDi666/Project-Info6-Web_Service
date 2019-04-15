TP_Ntires : Client-server Website development 

========

Author : YANG Di

Tools : Apache, PHP, Html5, MySQL, Webmin, Javascript, Google map API.

Objectif : Realise a simple and basic system to add, edit, delete and view the data in the web. 

========

Introduction : 

1. We can add, edit, delete the events described by date, description and location.
2. We can inscribe(add) edit and delete the users described by the name, age and e-mail address for each event. (The user with the same e-mail address can't inscribe 2 times)
3. We can locate each event with the Google map.

Code : 

1. You should run MySQL script first in **database.sql** file to create database and tables.
2. **configure.php** is for the connection of the database using PHP.
3. **style.css** design the style of the web.
4. **index.php** is the Homepage with all the events.
5. **add_event.html** and **add_event.php** are the page for adding the events.
6. **edit_event.php** is the page with an action of edit the event.
7. **delete_event.php** is for deleting an event.
8. **showusers.php** is the user inscription page with all the users who have already inscribed for the event selected.
9. We can add, edit and delete the users in the pages **add_user.php**, **edit_user.php** and **delet_user.php**.
10.**map.php** and **mapGoole.js** are for the page for locating using Google map API.

