<?php
//echo "Hello World!";

function nav(){

$navbars = array("Home", "Contact", "Referel");
foreach ($navbars as $navbar ) {
    echo $navbar;
}
}

 function languages(){
    $languages = array("HTML","CSS", "Javascript", "Jquery", "React", "Vue", "PHP", "Laravel");
    foreach ($languages as $language ) {
    echo "$language <br>";
    }
 }
  Class Name {
      public $name;
    function set_name($name)
      {
          return $this->name = $name;
      }
      function get_name(){
          return $this->name;
      }
  }

  $name = new Name();
  $name->set_name("Mark Spence");
  //echo "Name is". $name->get_name();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Web sites</title>
</head>
<body>
<header style="background-color:red;">
<h2><?php echo "Hello my name is: ". $name->get_name(); ?></h2>
</header>
<div>
<ul><li><?php nav(); ?></li></ul>
</div>
<br>
<p>We have ton of experinces as Web Developer! Here Are the list of skills:
<?php languages(); ?>
</p>

<h2><?php echo "Hello my name is: ". $name->get_name(); ?></h2>
</body>
</html>