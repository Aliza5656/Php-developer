<?php
session_start();
include 'php/connection.php';
include 'php/profileinfo.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Registration & Feedback Forms</title>
<link rel="stylesheet" href="profile.css">
</head>
<body>

<div class="container">

  <!-- Registration Form -->
  <div class="form-box">
    <h2>Profile</h2>
    <form method="post" enctype="multipart/form-data">
     
   
      <img src="userImages/<?php echo htmlspecialchars($row['image']); ?>" height="100px" width="100px" class="profile-image mb-5" alt="profileimage">

      <input type="text" name="pname" class="name-input"  required value="<?php echo htmlspecialchars($row['name']); ?>" />
      <input type="email" name="pemail" class="name-input" required value="<?php echo htmlspecialchars($row['email']); ?>" />
      <input type="password" name="ppassword" class="name-input" required value="<?php echo base64_decode($row['password']); ?>" />
      <input type="number" name="pNumber" class="name-input" value="<?php echo htmlspecialchars($row['Number']); ?>" />
      <input type="date" name="pDOB" class="name-input"  value="<?php echo htmlspecialchars($row['date of birth']); ?>" />
      
      <select name="pcountry"class="name-input" required>
        <option value="" disabled>Select Country</option>
        <?php
        $countries = ['Pakistan', 'Afghanistan', 'India', 'Russia', 'Lahore', 'Islamabad'];
        foreach ($countries as $c) {
          $selected = ($row['country'] == $c) ? "selected" : "";
          echo "<option value='$c' $selected>$c</option>";
        }
        ?>
      </select>

      <div class="gender-group" class="name-input">
        <label>Gender:</label>
        <input type="radio" name="pgender" value="male" id="male" <?php if ($row['Gender'] == 'male') echo 'checked'; ?> />
        <label for="male">Male</label>
        <input type="radio" name="pgender" value="female" id="female" <?php if ($row['Gender'] == 'female') echo 'checked'; ?> />
        <label for="female">Female</label>
      </div>

      <div class="form-check">
        <input type="checkbox" id="rememberMe" />
        <label for="rememberMe">Remember me</label>
      </div>
      <button type="submit" name="profilebtn">Update Profile</button>
    </form>
    <p class="footer-text">&copy; 2017–2025</p>
  </div>
<?php
include 'php/feedback.php';

?>
  <!-- Feedback Form -->
  <div class="form-box">
    <h2>Feedback</h2>
    <form method="post" enctype="multipart/form-data">
      <input type="text" name="Fname" placeholder="Name" required />
      <input type="email" name="Femail" placeholder="Email" required />
      <textarea name="Fmessage" placeholder="Message.........." required></textarea>
      <button type="submit" name="Fbtnsubmit">Send Feedback</button>
    </form>
    <p class="footer-text">&copy; 2017–2025</p>
  </div>

</div>

</body>
</html>
