<!DOCTYPE html> 
<html> 
	
<head> 
	<title> 
        Calculator
	</title> 
    <style>

*{
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body{
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  height: 100vh;
  background-color: #FBAB7E;
background-image: linear-gradient(62deg, #FBAB7E 0%, #F7CE68 100%);

}

    .card{
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  border: 1px solid #232323;
  width: 50vw;
  padding: 3rem;
  border-radius: 10px;
  background-color: #FAD961;
background-image: linear-gradient(90deg, #FAD961 0%, #F76B1C 100%);

  border: solid 1px gray;
  -webkit-box-shadow: 5px 5px 15px 5px gray;
          box-shadow: 5px 5px 15px 5px gray;
}


.card h1 {
  text-align: center;
}

.card form {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.card form input[type="text"] {
  width: 60%;
  height: 2rem;
  border-radius: 5px;
  margin-bottom: 2rem;
}

.card form input[type="text"]:focus {
  outline: none;
  border: solid 3px orange;
}

.card form .button-grid {
  width: 60%;
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: auto auto auto;
      grid-template-columns: auto auto auto;
  border: none;
  outline: none;
}

.card form .button-grid input[type="submit"] {
  height: 3rem;
  background-color:rgba(0,0,0,0.6);
  color: white;
}
    </style>
</head> 

<body> 
	<div class="card">
        <h1> Calculator </h1>
       <?php
            if(isset($_POST['square'])) { 
                $operand =number_format($_POST['operand']);
                echo "<h1>",$operand*$operand,"</h1>"; 
            } 
            if(isset($_POST['cube'])) { 
                $operand =number_format($_POST['operand']);
                echo "<h1>",$operand*$operand*$operand,"</h1>"; 
            } 
            if(isset($_POST['fact'])) { 
                $operand =number_format($_POST['operand']);
                $fact=1;
                for($i=1; $i <= $operand ; $i++){
                    $fact = $fact * $i;
                }
                echo "<h1>",$fact,"</h1>"; 
            } 
            if(isset($_POST['log'])) { 
                $operand =number_format($_POST['operand']);
                echo "<h1>",log($operand,10),"</h1>"; 
            } 
            if(isset($_POST['ln'])) { 
                $operand =number_format($_POST['operand']);
                echo "<h1>",log($operand),"</h1>"; 
            } 
            if(isset($_POST['sin'])) { 
                $operand =number_format($_POST['operand']);
                echo "<h1>",sin($operand),"</h1>"; 
            } 
            if(isset($_POST['cos'])) { 
                $operand =number_format($_POST['operand']);
                echo "<h1>",cos($operand),"</h1>"; 
            } 
            if(isset($_POST['tan'])) { 
                $operand =number_format($_POST['operand']);
                echo "<h1>",tan($operand),"</h1>"; 
            } 
            if(isset($_POST['mod'])) { 
                $operand =number_format($_POST['operand']);
                if($operand < 0){
                    $operand = -$operand;
                }
                echo "<h1>",$operand,"</h1>"; 
            } 

        ?> 
        <form action="index.php" method='POST'>
        <label for="operand">Enter operand</label>
        <input type="text" name="operand">
        <div class="button-grid">
            <input type="submit" name="square" value="Square"/> 
            <input type="submit" name="cube" value="Cube"/>
            <input type="submit" name="fact" value="Fact"/> 
            <input type="submit" name="log" value="log"/> 
            <input type="submit" name="ln" value="ln"/> 
            <input type="submit" name="sin" value="sin"/> 
            <input type="submit" name="cos" value="cos"/> 
            <input type="submit" name="tan" value="tan"/> 
            <input type="submit" name="mod" value="Mod"/> 
        </div>

        <form>
    </div>

</head> 

</html> 