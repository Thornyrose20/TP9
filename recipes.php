<?

/* loading recipe for TP9 using Ajax and Php */

$name = $_GET["recipeName"];
$list=$_GET["recipeList"];

if($name == "Brooke's Bombshell Brownies"){
  
  if($list == "box1"){
    include "ingredients.html";
    
  } elseif ($list == "box2"){
    include "equipment.html";
    
  } elseif ($list == "box3"){
    include "directions.html";
    
  } else {
    echo "1";
  }
    
  
  
  
  
  
} else {
  
  echo "0";
  
}
