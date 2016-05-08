# HomePage

# About
A home page for your browser.<< Minimum screen width 630 px>>

# Requirements
  
  -php<br> 
  -mysql-server<br>
  -mysql-client<br>
  -apache2(or any server supporting php)

#Installation 
    
  1.Install the requirements first
  <p>
    ```
       sudo apt-get install apache2 php mysql-server mysql-client
    ```</p>
  
  2.Download the zip file from the latest release.<br>
  
  3.Managing Databases<br>
  &nbsp;&nbsp;(If you are not comfortable with these commands you can use phpMyadmin and do as below in gui.)<br> 
   &nbsp;&nbsp;-Create a database named ```homepage```.
  <br> 
      ```
       mysql> CREATE DATABASE homepage;
       ```
  <br>
      ```
       mysql> USE homepage;
      ```<br>  
   &nbsp;&nbsp;-Now create tables named ```properties``` with two columns ``` type VARCHAR(10)``` and ```value VARCHAR(20)``` 
  <br> 
      ``` mysql> CREATE TABLE properties (type VARCHAR(10) , value VARCHAR(20));```
  <br>
    
  &nbsp;&nbsp;-Also another table named ```images``` with two columns  ```type VARCHAR(10)``` and ``` number NUM ```
  <br>
      ```mysql> CREATE TABLE images (type VARCHAR(10) , number NUM;```
    <br>
  
  &nbsp;&nbsp;-Now insert some data into these tables:<br>
      ```
        mysql> INSERT INTO properties
              (type , value)
              VALUES 
              ('background','images/image1.jpg');
      ```
  <br>
      ```
        mysql> INSERT INTO images
              (type , number)
              VALUES 
              ('image',15);
      ```
      
  4.Now extract the files in ```/var/www/html``` and rename the folder name to ```homepage```
  
  5.Lastly, You need to edit some files so that they can read your database.
    &nbsp; In files ```index.php``` ,```upload.php``` and  ``` changebackground/index.php```<br>
    replace ```db_user``` by your username and ```db_password``` by your password.
    ```
       $conn = mysql_connect('localhost','db_user','db_password') or die("CONNECTION PROBLEM");
    ```
  
  
 
