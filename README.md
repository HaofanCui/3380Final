## CS-3380 FINAL PROJECT
***Team members*** 
 1. Song Shusheng, ID: 14304314
     Be responsible for the design of the website, include interface, fort, form and the connection between MySQL and php. 
 2. Cui Haofan, ID:14304746 
     Be responsible for the operate in the MySQL(CRUD), and the connection between MySQL and php.
     
 ***description of the website***  
 - This website is a simple basketball player manege system. People can use this website to add the information of players and teams and read the information in the web. If there is a mistake, people are able to update it at any time, the same as delete.  
 - When first use the website, people should register for it.
 
 ***schema of the database***
 There are 3 tables in total.
*userinfo* - this table is responsible for the login and register with 3 columns: userid, username and password. Once people register it, the information will be saved in the database and then they can use the id and password to log in.

*playerinfo*-this table records personal information of players with 5 columns: id(primary key), name, date of birth, team and number. People are able to manege the player information through this table.

*teaminfo*-this table records the information of the team with 5 columns: name, email, located, website and dial. You can view this page through a button under the player information form. 

**ERD**
http://xahhxls.epizy.com/ERD.png

**CRUD**
*C*- You can through a button "Add"  to achieve the features of CREATE. When you click add, a new page will pop up and you can enter player information and team information to create a new record. After enter the information, you can click "submit" to save the record or "reset" to re-enter.

*R* -When log in to the website, you will arrive a page named "showinfo" where you can read all the records. After C, U, D operate you will return to the showinfo page automatically so that you can see the latest form in the first time.

*U*- In the end of every record you will see two buttons, one of  them is "update". When click it, a new page will pop up and you can update the information. After enter the information, you can click "submit" to update or "reset" to re-enter the information.

*D*-In the end of every record you will see two buttons, another is "delete". When click it, you will delete the record. If delete successful, it will return to the form and display "delete successful".
 

 
  

  
     

  
