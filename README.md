# projet-web-dynamique
***Instructions***
1) Once you pull out the project from github, you will need to rename the folder that contains the project with "p" and put that folder in the "xampp/htdocs" folder if you are using XAMPP and "wamp/www" if you are using WAMP.

2) In order for this website to work properly you will need to create a new database in SQL named "bincodb" which contains 5 tables:
- Table "compte" contains: "email" (varchar 30) primary_key, "nom" (varchar 40), "prenom" (varchar 40), "mdp" (varchar 40), "genre" (varchar 1), "adresse" (varchar 50).
- Table "commandes" contains: "id" (int 11) primary_key and auto_increment, "email" (varchar 30) foreign_key of compte(email), "totalprix" (double), "totalnbr" (int 11).
- Table "articlehomme" contains: "img1" (mediumblob), "img2" (mediumblob), "nom" (varchar 20), "prix" (int 11).
- Table "articlefemme" contains: "img1" (mediumblob), "img2" (mediumblob), "nom" (varchar 20), "prix" (int 11).
- Table "articleenfants" contains: "img1" (mediumblob), "img2" (mediumblob), "nom" (varchar 20), "prix" (int 11).

3) Also, when you create these tables, the pages "Articles Homme", "Articles Femme" and "Articles Enfants" wont contain any articles ! You have to add articles in the database.
You can add articles in the "php/ajouterArticle.php" page.
NOTE: Normaly you will need to create a new account with the address "admin@admin.com" and connect with this address so that a bouton "Ajouter" will show up in the "Articles Homme", "Articles Femme" and "Articles Enfants" pages but you can just go the "php/ajouterArticle.php" page directly.
4) Make sure SQL and PHP services are running before testing the website.
5) The website should look similar to the screenshots provided in the "screenshots" folder.

**This Website was created by Houssem Sakli, Ramez Zormati, Youssef Jobrane and Zineddine Younsi.**
