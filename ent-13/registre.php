<?php


include_once 'c13$12o%-3123nn.php';
include_once 'rf-ent-13.php';

session_start(); 


$error=null;
if(isset($_GET["error"])){
	if(!is_numeric($_GET["error"])){
		$error="Do not edit the URL GET var, thanks.";
	}else{
		$error = errorLogging($_GET["error"]);
	}
}

?> 

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- STYLESHEETS  -->
<link rel="stylesheet" href="ent-13.css">

<!-- END STYLESHEETS  -->

</head>



<body>
   <div class="logo-registro-registro-container"> 
       <div class="logo-registro-registro-subcontainer"></div>
   </div>

    <div class="cap-text-text-registro">
    <div class="fontsize-sub-buscador">   
    <p style="padding-right: 2px; padding-left: 2px;">Obre la porta a una eina municipal que ajudarà a conèixer el teu producte amb els ciutadans i extrangers que visitin el nostre poble.  </p>
    </div>
    </div>


   




    <form method="post" action="r-ent-13.php" method="POST" enctype="multipart/form-data">
<div class="cos-separation-big-container-registro">        
    <div class="cos-separation-container-registro"> 
        <div class="just-a-separation"> </div>
    <div class="cos-separation-title-registro"> 
        <div class="fontsize-big-buscador"> 
            <P> REGISTRA'T </P>
        </div>
    </div>
            
     
        
        <div class="cos-separation-subcontainer-registro"> 

        <div class="cos-separation-registro-registro">				
            <input type="text" style="border: 2px solid green; text-align: center; " class="cos-input-registro" name="nom" placeholder="Nom d'usuari" required>	      
      </div>
      
      <div class="cos-separation-registro-registro">				
            <input type="email" style="border: 2px solid green;  text-align: center;" class="cos-input-registro" name="email" aria-describedby="emailHelp" placeholder="E-mail" required>
        </div>
      
      <div class="cos-separation-registro-registro">				
            <input type="password" style="border: 2px solid green; text-align: center;" class="cos-input-registro" name="contra" placeholder="Crea Contrasenya" required>
        </div>

        <div class="cos-separation-registro-registro">				
            <input type="password" style="border: 2px solid green; text-align: center;" class="cos-input-registro" name="passwordconfirm" placeholder="Confirma Contrasenya" required>
        </div>


        <div class="cos-separation-titletwo-registro"> 
            <div class="fontsize-sub-buscador"> 
                <P> DADES DEL TEU COMERÇ</P>
            </div>
        </div>

        <div class="cos-separation-registro-registro">				
            <input type="social1" style="border: 2px solid green; text-align: center;" class="cos-input-registro" name="social1" placeholder="Nom de l'establiment local" required>
        </div>

        <div class="cos-separation-registro-registro">				
            <input type="social2" style="border: 2px solid green; text-align: center;" class="cos-input-registro" name="social2" placeholder="Pàgina web de l'establiment local" required>

        </div>
        
        <div class="cos-separation-registro-registro">				
            <input type="social2" style="border: 2px solid green; text-align: center;" class="cos-input-registro" name="social3" placeholder="L'adreça de l'establiment local" required>  
        </div>

        <div class="cos-separation-registro-registro">				
            <input type="social2" style=" border: 2px solid green; text-align: center;" class="cos-input-registro" name="social4" placeholder="Horari d'Obertura" required>  
        </div>
        
        <div class="separacio-acepto-termes-registro">
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" required>
            <label for="vehicle1"> Acepto els Termes i Serveis de Taulells.org i vull continuar </label>
             </div>

        <div class="cos-separation-subcontainer-button-registro">
      <button type="submit" class="cos-button-registro">Crea el meu compte</button>

      <hr><p>Vols tornar a la pàgina d'Entrada? <a href="login.html" style="color:blue; border: 2px solid blue; padding: 2px 5px; background: rgba(74, 236, 228, 0.534); text-decoration:none; "title="Go Back">Torna-hi</a>.</p>
        </div>


        </div>  <!--cos-separation-subcontainer-registro-->
        
        <div class="just-a-separation"> </div>
    </div> <!--cos-separation-container-registro-->
</div> <!--close cos-separation-big-container-registro-->
    </form>	

 
    <div class="image-for-smallscreens-registro">
        <img src="../theimages/fullqstat.png" alt="#" class="responsive" width="923" height="407">
        </div> 

    

</body>


</html>
