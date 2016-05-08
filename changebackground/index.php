<?php 
 
$conn = mysql_connect('localhost','db_user','db_password') or die("CONNECTION PROBLEM");
mysql_select_db('homepage');
$sql= "SELECT * FROM images WHERE type='image'";
$query = mysql_query($sql,$conn) or die(mysql_error());
$imgs = mysql_fetch_assoc($query)['number'];

$sql = "SELECT type,value
        FROM properties
        WHERE type = 'background'";
$query = mysql_query($sql,$conn) or die(mysql_error());
$background = mysql_fetch_assoc($query)['value'];
    
    
mysql_close($conn);

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Change Background</title>
    <script src="../scripts/dropzone.js"></script>
    <link rel="stylesheet" href="../styles/dropzone.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
    <link rel="stylesheet" href="../styles/w3.css">
    <link rel="stylesheet" href="../styles/font-awesome-4.5.0/css/font-awesome.min.css">
    <style>
        body
        {
            background-image: url("../<?php echo $background; ?>");
            background-attachment: fixed;
            background-size: contain;
        }
        
        .container
        {
            margin-top: 0.5em;
            margin-bottom: 0.5em;
            margin-left: 1.6%;
            margin-right: 1.6%;
            width:30%;
            height:20em;
        }
       
        
    </style>  
    <script>
        
        function update(n)
        {
            window.location="../?bk=images/image"+n+".jpg";
        }
        
        function onKeypress(event)//function for any key pressed
        {
            
            if ( document.getElementById('id01').style.display != 'none')  //if the image viewer is displayed
            {
                
               if (event.keyCode == 27) //foe esc key press
                {
                    
                    document.getElementById('id01').style.display = 'none';
                }
                
                else if (event.keyCode == 37)// for left arrow
                {
                    plusDivs(-1); //changing image
                }
                
                else if (event.keyCode == 39)//for right arrow
                {
                    plusDivs(1); //changing image
                }
                
                else if (event.keyCode == 13)//for enter
                {
                    
                    update(slideIndex);
                    
                }
            }
        }
      
    
        var slideIndex;
        
        function show(n)
        {
            slideIndex=n;
            document.getElementById('id01').style.display='block';//shows hidden image viewer
            showDivs(slideIndex);//loads image
        }
    
        function plusDivs(n)
        {
            showDivs(slideIndex += n);//chanding the image
        }
        
        function showDivs(n) 
        {
            var i;
            var x = document.getElementsByClassName("mySlides");//gets the documents
            //x.length = no of elements(images) 
            if (n > x.length) // if n is more than no of elements it goes to first one
            {
                slideIndex = 1
            }
            if (n < 1) //if n is less than no. of image then 
            {
                slideIndex = x.length //sets slideIndex to current image index 
            } 
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";//hides all the image
            }
            x[slideIndex-1].style.display = "block";//shows the asked image
            
            
        }
    </script>
    
  </head>
  <body >
      <script type="text/javascript">
             window.onkeydown = onKeypress;
      </script>  
    
      <p style="width:15em;margin:auto;margin-top:10px"><button class="w3-round-xlarge w3-btn w3-indigo " onclick="document.getElementById('id02').style.display='block'">Upload New Photo</button></p>
      <!-- IMAGES --><?php 
      for($i=1;$i<=$imgs;$i++){?> 
      <a href="#" class="w3-card  container w3-green w3-col w3-hover-shadow" onclick="show(<?php echo $i;?>)" >
          <img src="../images/image<?php echo $i;?>.jpg" style="width:100%;height:20em;" >
      </a>
      <?php }?>
      <!-- /IMAGES -->
      
      <!-- IMAGE VIEWER -->
      <div id="id01" class="w3-modal" >
          
          <div class="w3-modal-content w3-blue w3-card-4">
             
              
              <div class="w3-content " style="position:relative">
                  
                  <!-- close button -->
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn" style="position:absolute;top:0;right:0">&times;</span>
                  <!--/ close button -->
                
                <!-- LIST OF IMAGES --> 
            <?php for($i=1;$i<=$imgs;$i++){?>
                <img class="mySlides" src="../images/image<?php echo $i;?>.jpg" style="width:100%">
            <?php }?>
                <!-- /LIST OF IMAGES -->
                  
                <!-- NEXT AND PREVIOUS BUTTON -->  
                <a class="w3-btn-floating" style="position:absolute;top:45%;left:0" onclick="plusDivs(-1)">❮</a>
                <a class="w3-btn-floating" style="position:absolute;top:45%;right:0" onclick="plusDivs(1)">❯</a>
                <!-- /NEXT AND PREVIOUS BUTTON -->
                
                <button class="w3-btn-floating w3-round-xlarge" onclick="update(slideIndex)" style="position:absolute;top:90%;left:45%;width:10%">Select</button>
              </div>
              
              
          
          </div>
          
      </div>
     <!-- /IMAGE VIEWER --> 
      
      
     <!-- file upload-->
      <div id="id02" class="w3-modal w3-animate-opacity " >
          <div class="w3-modal-content    " style="width:30%">
              <div class="w3-content " style="position:relative">
                  
                  <!-- close button -->
                  <header class="w3-pink">&nbsp;
                <span onclick="document.getElementById('id02').style.display='none'" class="w3-closebtn" style="position:absolute;top:0;right:0">&times;</span>
                  <!--/ close button -->
                  </header>     
                  
                <!-- upload form -->  
                <form action="../upload.php" method="post" class="dropzone"   >
                    <div class="fallback">
                        
                    <input name="file" type="file" multiple />
                    </div>
                </form>
                  
              </div>
          </div>
      </div>
    <!-- /file upload-->
    
  </body>
</html>
