<?

/* loading recipe for TP9 using Ajax and Php */

$name = $_GET["recipeName"];
$list=$_GET["recipeList"];

if($name == "Brooke's Bombshell Brownies"){
  
  if($list == "box1"){
    
    include "ingredients.html";
    
  }elseif ($list == "box2"){
    
    include "equipment.html";
  }
    
  
  
  
  
  
} else{
  
  echo "0";
  
}
