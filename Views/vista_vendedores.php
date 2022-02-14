<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferretería FC</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-900">
    <nav class="flex h-25 space-x-6 h-16 bg-blue-500 items-center text-xl pl-8 text-white font-bold">
        <a class="transition-all hover:shadow-2xl hover:scale-125" href="index">Inicio</a>
        <a class="transition-all hover:shadow-2xl hover:scale-125" href="puestos">Puestos</a>
        <a class="transition-all hover:shadow-2xl hover:scale-125" href="productos">Productos</a>
    </nav>
    <div class="flex w-full h-full justify-center items-center my-16">
        <div class="h-fit px-8 py-10 flex flex-col justify-around rounded-xl ml-12 bg-black">
            <table class="table-fixed text-xl text-white text-center">
            <thead>
                <tr>
                    <th class="border-4 border-white p-4">Mejores trabajadores</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($vendedores as $vendedor){
                        echo "<tr>";
                        echo "<td class=\"border-2 border-white p-4\">".$vendedor['vendedores']."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
            </table>
        </div>
    </div>
</body>
</html>