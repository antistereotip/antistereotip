<form name='web_form' id='web_form' method='post' action=''>

     <label for="exampleInputEmail1"><h3 style="color: #eee; margin: 0; 
     font-weight: 400;">Request Information</h3></label>

     <input type='text' name='name' class="form-control" id="name" 
     placeholder="Your Name">

     <input type="text" class="form-control" name='email' id='email' 
     placeholder="youremail@domain.com">

     <button type="submit" name='s1' id='s1' value="submit" class="btn btn- 
     primary btn2">Submit</button>
  </form>


<?php
    if (isset($_POST['s1'])) {
      echo $_POST['name'];
      echo $_POST['email'];

      $myfile = fopen("data.txt", "w") or die("Unable to open file");
      $name = $_POST['name']."\n";
      fwrite($myfile, $name);

      $email = $_POST['email']."\n";
      fwrite($myfile, '<div>' . $email . '</div>');
      fclose($myfile);
    }
  ?>
