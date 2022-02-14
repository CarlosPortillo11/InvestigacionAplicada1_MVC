<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferretería FC</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="contain w-full">
        <div class="flex w-full h-full justify-center items-center">
            <div style="background: rgba(139, 61, 19, 0.4);" class="h-fit h-3/5 w-3/5 flex flex-col justify-around
             rounded-xl ml-12">
                <div class="flex justify-center w-full">
                    <a href="vendedores" class="w-full flex justify-center cursor-default">
                        <img class="w-1/4 hover:scale-125 transition-all cursor-pointer" src="images/vendedores.png" alt="Mejores vendedores">
                    </a>
                </div>
                <div class="flex justify-around w-full">
                    <a href="puestos" class="w-full flex justify-center cursor-default">
                        <img class="w-2/5 hover:scale-125 transition-all h-2/3 cursor-pointer" src="images/puestos.png" alt="Puestos más buscados">
                    </a>
                    <a href="productos" class="w-full flex justify-center cursor-default">
                        <img class="w-2/5 hover:scale-125 transition-all h-2/3 cursor-pointer" src="images/productos.png" alt="Productos más vendidos">
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>