<?php

$dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);

var_dump($dados); 
 ?>

            <form class="form-control-static" action="#" method="POST">
            <div style="background:LightSteelBlue; padding: 5px; border-radius: 5px"  id="listas">

            </div>

          
            <br>
                <p><input type="button" class="btn btn-primary" id="add_field" value="Caixa de texto">
                    <input type="button" class="btn btn-primary" id="add_Checkbox" value="CheckBox">
                    <input type="button" class="btn btn-primary" id="add_radio" value="Radio"></p>  

                <br>
  <!--               <p><h2>Questionário</h2></p> -->
                
                <br>
                <input type="submit" class="btn btn-success" value="SALVAR">
            </form>


