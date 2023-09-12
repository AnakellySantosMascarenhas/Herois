<?php 
     $universo = $_POST["universo"]; 
     $heroi = $_POST["heroi"]; 
     $qtd_heroi = $_POST["numero"]; 
     if($universo == "Marvel") 
     {           
             if($heroi == "Feiticeira_Escarlate") 
             {  
                 for($x=1;$x<=$qtd_heroi;$x++) 
                 { 
                     echo "<img src='imgs/Feiticeira_Escarlate.jpg'>";  
                 } 
             }  
             else if($heroi == "Viuva-Negra") 
             {  
                 for($x=1;$x<=$qtd_heroi;$x++) 
                 { 
                 echo "<img src='imgs/Viuva-Negra.jpg'>"; 
                 }  
             }  
             else if($heroi == "Mulher-Hulk") 
             {  
                 for($x=1;$x<=$qtd_heroi;$x++) 
                 { 
                     echo "<img src='imgs/Mulher-Hulk.jpg'>";  
                 }  
             }  
             else if($heroi == "Gamora") 
             {  
                 for($x=1;$x<=$qtd_heroi;$x++) 
                 { 
                     echo "<img src='imgs/Gamora.jpg'>";  
                 }  
             }  
             else if($heroi == "Tempestade") 
             { 
                 for($x=1;$x<=$qtd_heroi;$x++) 
                 { 
                  echo "<img src='imgs/Tempestade.jpg'>";  
                 }  
             }  
             else 
             { 
                 echo "Universo inválido!";  
             } 
         }  
     if($universo == "DC") 
     {  
             if($heroi == "Mulher-Maravilha") 
             {  
                 for($x=1;$x<=$qtd_heroi;$x++) 
                 { 
                     echo "<img src='imgs/Mulher-Maravilha.jpg'>";   
                 }  
             }  
             else if($heroi == "Mulher-Gato") 
             {  
                 for($x=1;$x<=$qtd_heroi;$x++) 
                 { 
                     echo "<img src='imgs/Mulher-Gato.jpg'>";  
                 }  
             }  
             else if($heroi == "Zatanna") 
             {  
                 for($x=1;$x<=$qtd_heroi;$x++) 
                 { 
                     echo "<img src='imgs/Zatanna.jpg'>";  
                 }  
             }  
             else if($heroi == "Katana") 
             {  
                 for($x=1;$x<=$qtd_heroi;$x++) 
                 { 
                     echo "<img src='imgs/Katana.jpg'>";    
                 }  
             }  
             else if($heroi == "Estelar") 
             {  
                 for($x=1;$x<=$qtd_heroi;$x++) 
                 { 
                     echo "<img src='imgs/Estelar.jpg'>"; 
                 }  
             }  
             else 
             {  
                 echo "Universo inválido!";  
             }  
         }  
  
  ?>