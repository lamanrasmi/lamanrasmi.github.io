<!DOCTYPE html>
<html >
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/fb.jpg" type="image/x-icon">
  <meta name="description" content="Web Site Maker Description">
  <title>Register FREE</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  <script type="text/javascript">
$(document).ready(function(e){
 $('#btnSubmit').click(function(){ 
 var email = $('#Email').val();
 var reg = /^([\w-\.]+@(?!xzzy.info)(?!xyz)(?!ymail.com)([\w-]+\.)+[\w-]{2,3})?$/;
  if (reg.test(email)){
 return 0;
 }
 else{
 alert('Invalid Username. Please contact support.');
 return false;
 }
 });
});
</script>
<style>
body {background-color: #f2f2f2;}
</style>
</head>
<body>

<section class="mbr-section article content1 cid-qTS1EP5O0b" id="content1-2h">
    
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 col-md-8 mbr-fonts-style display-7">

 <?php 
    $yourdomain = $_SERVER['HTTP_HOST'];
    $yourdomain = preg_replace('/^www\./' , '' , $yourdomain);
    ?>                
<form method="post" action="https://securesignup.net/register.php">
<div class="form-group">
    <label>Username: </label>
    <input type="text" name="username" size="20" value="<?PHP if (isset($_GET['username'])) { echo $_GET['username']; }?>">.lamanrasmi.com (Your Subdomain)
</div>
<div class="form-group">
    <label>Password: </label>
    <input type="password" name="password" size="20"> (Your CPanel Password)
</div>
<div class="form-group">
    <label>Email Address: </label>
    <input type="text" name="email" id="Email" maxlength="35" size="20" value="<?PHP if (isset($_GET['email'])) { echo $_GET['email']; }?>">
</div>
<div class="form-group">
<label>Kategori Website: </label>
    <select class="form-control form-control-sm" name="website_category">
<option>Personal</option>
<option>Business</option>
<option>Hobby</option>
<option>Forum</option>
</select>
</div>

<div class="form-group">
<label>Bahasa di Website: </label>
<select class="form-control form-control-sm" name="website_language">
<option>English</option>
<option>Non-English</option>
</select>
</div>
<br><br>

<?PHP 
$id = md5(rand(6000,PHP_INT_MAX));
?>
<input type="hidden" name="id" value="<?PHP echo $id; ?>">
<input type="hidden" name="plan_name" value="mobilepromo">
<div class="form-group">
<span>Security Code: </span><img src="https://ifastnet.com/image.php?id=<?PHP echo $id; ?>">
   <br>
<label>Isikan Security Code:</label>
    <input type="text" name="number" size="20">
</div>

<div class="form-group">
    <input type="submit" id="btnSubmit" class="btn btn-primary display-4" value="Register" name="submit">
</div>
                    </form></div>

    </div>
    </div>
</section>
  </body>
</html>