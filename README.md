# moderator
PHP code: add a comments section with a moderation page


What The moderator does:

- Add a comments section to a web page, pull out the comments corresponding to the page.
- Users can add new comments, it goes to the database as "unverified comment", an email is sent to the administrator to warn him.
- The admin goes to the moderator_login page and enter the password
- Once the moderator page is displayed, the admin can delete or validate the comments.

To make it work: 
- Change the data surrounded by ********  in the files
- Add the following code at the end of the <body> section:  <?php include("commentaires.php"); ?>



21/11/2016
Damien LENOIR
