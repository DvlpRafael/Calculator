<?php 
        
$nro1 = 0;
$nro2 = 0;
$resultado = 0;
$calcular = 'somar';
    

    if (isset($_GET['nro1'], $_GET['nro2'], $_GET['calcular'])) {
        $nro1= $_GET['nro1'];
        $nro2= $_GET['nro2'];
        $calcular = $_GET['calcular'];



        switch ($calcular) {
            case 'somar':
                $resultado = $nro1 + $nro2;

                break;

                case 'subtrair':
                $resultado = $nro1 - $nro2;

                break;

                case 'multiplicar':
                $resultado = $nro1 * $nro2;

                break;

                 case 'dividir':
                $resultado = $nro1 / $nro2;

                break;

            
            
        }
    }


 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>
         Calculadora
     </title>
 </head>
 <body>

    <style>

        body{
          background: rgb(22,42,150);
          background: linear-gradient(90deg, rgba(22,42,150,1) 12%, rgba(0,9,36,1) 30%, rgba(111,0,132,1) 44%, 
          rgba(0,212,255,1) 62%, rgba(231,0,246,1) 88%); ;  
        }

        p{
            color: white;
        }

        form{
          color: white;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: absolute;

        }
      
    </style>
    <form>
        Primeiro Número <br/>
        <input type="number" name="nro1" value= <?= $nro1 ?> required /> <br/>
        Segundo Número <br/>
        <input type="number" name="nro2" value= <?= $nro2 ?> required /> <br/>
        <select name= "calcular">


            <option value="somar"   <?=($calcular =='somar') ?'Selected': '';?>   >Somar</option>
             <option value="subtrair"  <?=($calcular =='subtrair') ?'Selected': '';?>  >Subtrair</option>
              <option value="multiplicar"  <?=($calcular =='multiplicar') ?'Selected': '';?>  >Multiplicar</option>
               <option value="dividir"  <?=($calcular =='dividir') ?'Selected': '';?>  >Dividir</option>

        </select>

        <br/><br/>

        <p>O resultado é <?= $resultado?></p>

        <input type="submit" name="Calcular"/>

    </form> 

 </body>
 </html>