<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE WORLD OF BOOKS</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="Icons/styles.icons.css">
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="estiloslibros.css">
    
</head>
<body>
    
    <header>
        <img class="uno" src="imagenes/layout_icon.png" alt="LOGO">
        <h2 class="logo">THE WORLD OF BOOKS</h2>
        <input type="checkbox" id="check">
        <label for="check" class="mostrar-menu">
            &#8801
        </label>
        <nav class="menu">
            <a href="#">iniciar sesión</a>
            <a href="#">inicio</a>
            <a href="#">comprar libros</a>
            <a href="#">vender libros</a>
            <a href="#">generos</a>
            <a href="#">destacados</a>
            <label for="check" class="esconder-menu">
                &#215
            </label>
        </nav>
    </header>
    <div class="container">
        <div class ="caja1"> tu carrito</div>
        <div class ="caja2"> producto </div>
        <div class ="caja3"> info articulo 
            <span class="icon icon-cross"></span>
            <div class="vistaproducto"> 
                <img class="imagen" src="imagenes/libro1.jpg"> 
             </div>
             
        </div>
        <div class ="caja4"> subtotal 
            <p id= valor>$ 12,000</p>
        </div>
        <div class ="caja5"> gastos de envio 
            <p id= valor> $ 4,000</p>
        </div>
        <div class ="caja6"> cant productos
            <p id= cantproductos> 1 producto </p> 
        </div>
        <div class ="caja7"> total compra: $ 16.000
            <a class= "button" href="button"> realizar pago</a>
        </div>
       

        
    </div>
    
    <footer class="footer">
        <ul>
            <li>contactanos</li>
            <li>redes</li>
        </ul>
    </footer>
    
</body>

</html>