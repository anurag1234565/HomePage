<?php 
$conn = mysql_connect('localhost','db_user','db_password') or die("CONNECTION PROBLEM");
mysql_select_db('homepage');

if (isset($_GET['bk']))
{
    $sql = "UPDATE properties
           SET value='".$_GET['bk']."'
           WHERE type = 'background'";
    $query = mysql_query($sql,$conn) or die(mysql_error());
}

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
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/w3.css">
    <link rel="stylesheet" href="styles/font-awesome-4.5.0/css/font-awesome.min.css">
    <style>
        body
        {
            background-image: url("<?php echo $background; ?> ");
            background-attachment: fixed;
            background-size:cover;
        }
        .input
        {
            margin-top:0.5em;
            margin-bottom:0.5em;
            width:15em;
            height:3em;
        }
        .submit
        {
            margin-top:0.5em;
            margin-bottom:0.5em;
            height:3em;
            width:4.2em;
        }
        
        .tabs
        {
            margin-top:0.5em;
            margin-bottom:0.5em;
            height:1.6em;
            width:100%;
            border-style:outset;
        }
        
        .tabholder
        {
            margin-left: 1em;
            margin-right: 1em;
            width:20%;
        }
        
        .wide
        {
            width:50%
        }
        
        .paddingMain
        {
            padding-top:64px!important;
            padding-bottom:64px!important;
        }
       
        
        @media only screen and (max-width: 1322px) and (min-width:943px)
        {
            .wide
            {
                width:70%;   
            }
            
            .paddingMain
            {
                padding-top:128px!important;
                
            }
        }
        
        
        @media only screen and (max-width: 942px) 
        {
            .wide
            {
                width:100%;   
            }
            .paddingMain
            {
                padding-top:128px!important;
                
            }
        }
        
    </style>
   
      
    
  </head>
  <body >
      
      <a href="changebackground"  > <i class="fa fa-cog w3-xxlarge w3-opacity w3-round-xxlarge w3-sand" title="Change background image"></i></a>
    <a href="https://github.com/anurag1234565/HomePage"><img src="images/fork.png" class="w3-right" style="max-height:8em;"></a>
    <div class="paddingMain">
        
        
      <div class="w3-sand w3-opacity w3-card wide w3-round-xlarge" style="margin:auto; height:4em;"><!--Search Section-->
          
        <div class="w3-col " style="width:50%" ><!-- DuckDuckGo SearchBox-->
            <iframe src="https://duckduckgo.com/search.html?width=180&duck=yes&prefill=Search DuckDuckGo&focus=yes" style="overflow:hidden;margin:0;padding:0;width:21em;height:3.9em;" frameborder="0"></iframe>
        </div><!-- / DuckDuckGo Searchbox -->
          
          
        <div class="w3-col " style="width:50%"><!-- Wikipedia SearchBox-->
            <form action="http://www.wikipedia.org/search-redirect.php" id="1" method="get">      
                <i class="fa w3-xlarge  fa-wikipedia-w"></i>
                <input type="hidden" name="language" value="en" />
                <input type="text" name="search" class="input w3-border w3-round-large" placeholder="   Search WikiPedia "/>
                <button class="fa fa-search submit  w3-round-large  " onclick="document.forms['1'].submit();"></button>
            </form> 
        </div><!-- / wikipedia SearchBox -->
      
      </div><!-- / Search section--> 
      
      <br />
      
      <div class="w3-sand w3-opacity w3-card wide w3-round-xlarge" style="margin:auto;min-height:20em;"><!-- Tabs -->
          &nbsp;      
          <div class="w3-col tabholder "><!-- col1 --> 
              <button class="fa fa-facebook w3-hover-indigo w3-hover-shadow w3-round-large tabs w3-xxxlarge" onclick="window.open('http://facebook.com','_blank')"><!--facebook --></button>
              <div class="w3-center"><b>Facebook</b></div>
              
              <button class="fa fa-twitter w3-hover-blue w3-hover-shadow w3-round-large tabs w3-xxxlarge" onclick="window.open('http://twitter.com','_blank')"><!-- twitter--></button>
              <div class="w3-center"><b>Twitter</b></div>
              
          </div>
          
          <div class="w3-col tabholder "><!-- col2 --> 
              <button class="fa fa-github w3-hover-black w3-hover-shadow w3-round-large tabs w3-xxxlarge" onclick="window.open('http://github.com','_blank')"><!--facebook --></button>
              <div class="w3-center"><b>GitHub</b></div>
              
              <button class="fa fa-youtube w3-hover-red w3-hover-shadow w3-round-large tabs w3-xxxlarge" onclick="window.open('http://youtube.com','_blank')"><!-- twitter--></button>
              <div class="w3-center"><b>YouTube</b></div>
              
          </div>
          
          <div class="w3-col tabholder "><!-- col3 --> 
              <button class="fa fa-soundcloud w3-hover-deep-orange w3-hover-shadow w3-round-large tabs w3-xxxlarge" onclick="window.open('http://soundcloud.com','_blank')"><!--SoundCloud --></button>
              <div class="w3-center"><b>SoundCloud</b></div>
              
              <button class="fa fa-google w3-hover-red w3-round-large tabs w3-hover-shadow w3-xxxlarge" onclick="window.open('http://mail.google.com','_blank')"><!-- g-mail--></button>
              <div class="w3-center"><b>G-mail</b></div>
              
          </div>
          
          <div class="w3-col tabholder "><!-- col4 --> 
              <button class="fa fa-stack-overflow w3-hover-orange w3-round-large w3-hover-shadow tabs w3-xxxlarge" onclick="window.open('http://stackoverflow.com','_blank')"><!--StackOverflow --></button>
              <div class="w3-center"><b>Stack-Overflow</b></div>
              
              <button class="fa fa-instagram w3-hover-pale-green w3-round-large w3-hover-shadow tabs w3-xxxlarge" onclick="window.open('http://instagram.com','_blank')"><!-- instagram--></button>
              <div class="w3-center"><b>Instagram</b></div>
              
          </div>
          &nbsp;
      </div><!-- /tabs-->
    
    </div>
      
  </body>
</html>
