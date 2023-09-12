<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Heróis</title> 
</head> 
<body> 
    <form action="resultado.php" method="post"> 
        Universo : <br> 
        <input type="Radio" id="Marvel" name="universo" value="Marvel">
        <label for="marvel">Marvel</label><br>
        <input type="Radio" id="DC" name="universo" value="DC">
        <label for="dc">DC</label><br> 
        Digite a quantidade de imagens: <input type="text" name="numero"><br>
        
        <select id="heroi" name="heroi"> 
            <option value="Feiticeira_Escarlate">Feiticeira Escarlate</option> 
            <option value="Viuva-Negra">Viuva Negra</option> 
            <option value="Mulher-Hulk">Mulher Hulk</option> 
            <option value="Gamora">Gamora</option> 
            <option value="Tempestade">Tempestade</option> 
            <option value="Mulher-Maravilha">Mulher Maravilha</option> 
            <option value="Mulher-Gato">Mulher Gato</option> 
            <option value="Zatanna">Zatanna</option> 
            <option value="Katana">Katana</option> 
            <option value="Estelar">Estelar</option> </select> 
            
            <input type="submit"> 
    </form> 
</body> 
</html>