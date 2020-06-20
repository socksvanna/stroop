<?php
  if($_POST['formOrder'] == "Order") 
  {
    $varOrder = $_POST['strooporder'];
  }
?>

<?php
  if($_POST['formOrder'] == "Order") 
{
  $errorMessage = "";

  if(empty($_POST['strooporder'])) 
  {
    $errorMessage .= "<li>You forgot to enter an order!</li>";
  }

  $varOrder = $_POST['strooporder'];
}
   
?>

<?php
if($errorMessage != "") 
{
  echo("<p>There was an error:</p>\n");
  echo("<ul>" . $errorMessage . "</ul>\n");
} 
else 
{
  $fs = fopen("mydata.csv","a");
  fwrite($fs,$varName . ", " . $varMovie . "\n");
  fclose($fs);

  header("Location: https://socksvanna.github.io/stroop/thankyou.html");
  exit;
}
?>



