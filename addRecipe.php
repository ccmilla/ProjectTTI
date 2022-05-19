<form name= "addRecipe" action = "process.php" method="post" autocomplete="off">
        <fieldset><legend>New Recipe</legend>
           <p>Title: <input type="text" name="title" style="margin-left:45px; width:90%"/></p>
           <p>Description: <input type="text" name= "description" style="height:50;width:90%"/></p>
           <p>Ingredients: <input type="text" name= "ingredients" style="height:250px;width:90%"/></p>
           <p>Instructions: <input type="text" name= "instructions" style="height:250px;width:90%"/></p>
           <p><input type="button" name="add" value= "Add" style="margin:0 auto;display: block"/></p>
           <p><input type="button" name="main" onclick="location.href='main.php'" value= "Go Back" style="margin:0 auto;display: block"/></p>
        </fieldset>
</form>