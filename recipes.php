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
   
  
  /* Aida's Recipe*/
  
} elseif ($name == "Chocolate Chip Cookies"){
    
     if($list == "box1"){
    include "ingredientsA.html";
    
  } elseif ($list == "box2"){
    include "equipmentA.html";
    
  } elseif ($list == "box3"){
    include "directionsA.html";
    
  } else {
    echo "1";
  }
    
 
  

  /* Theo's Recipe */
} elseif($name == "Mrs Sigg's Snickerdoodles"){
    
     if($list == "box1"){
    include "ingredientsT.html";
    
  } elseif ($list == "box2"){
    include "equipmentT.html";
    
  } elseif ($list == "box3"){
    include "directionsT.html";
    
  } else {
    echo "1";
  }
    
  
  
  
} else {
  
  echo "0";
  
}
