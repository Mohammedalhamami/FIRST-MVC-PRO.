<?php  

declare(strict_types = 1);
include 'includes/autoloader.inc.php';
 
// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
   
<?php 
  
  $userObj = new UsersView() ;
  
   $userObj->showUsers('Mohammed');

   $userObj2 = new UsersContr();
   $userObj2->createUser("Jhone", "Hussein", 1999-12-12);

?>

</body>
</html>