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
  
  3.Create a database named ```'homepage'```.<br> 
      ```
       mysql> CREATE DATABASE homepage;
      ```  
  4.Now create tables named ```'properties'``` with two columns ``` 'type' VARCHAR(10)``` and ```'value' VARCHAR(20)``` 
  
