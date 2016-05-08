<!DOCTYPE html>
<script src="../scripts/dropzone.js"></script>
<link rel="stylesheet" href="../styles/dropzone.css">

<script>
    dropzone.on("success", function(file, responseText) {
    window.location.href = ("/items/"+responseText.id)
    });
</script>
<html>
    <head>
        Upload file
    </head>
    
    <body>
        <form action="upload.php" method="post" class="dropzone"   style="width:50%">
            
        </form>
        <button id="submit-all">Submit all files</button>
        <h5>OR</h5>
        <form action="upload.php" method="post" enctype="multipart/form-data" style="width:50%">
            <input type="file" name="files" id="files" /><br>
            <input type="submit" value="Upload">
        </form>
    </body>

</html>

