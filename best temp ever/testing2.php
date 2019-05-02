<form class="" action="testing2.php" method="post">


Select Files to Upload:
<input type="file" name="files[]" multiple >
<textarea id="special" name="post2" rows="10" cols="80" placeholder="What's on your mind?"></textarea>
  <input type="submit" name="submitIt" class="buttons-navbar btn btn-primary" value="Upload" />
 <?php

 if (isset($_POST['post2'])) {
   echo "<script>alert('hi')</script>";
 }
else {
   echo "<script>alert('hisas')</script>";
 }
  ?>
</form>
