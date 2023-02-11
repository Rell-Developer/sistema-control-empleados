<?php
    include('../views/templates/header.php');
?>
<header class="w-full">
    <nav class="w-full bg-gray-200">
        <ul class="flex w-1/2 justify-evenly transition-all">
            <li class="text-gray-500 mx-2 p-3 cursor-pointer hover:font-bold transition-all font-bold">
                <a href="../views/home.php">Sistema Web</a>
            </li>
            <li class="text-gray-500 mx-2 p-3 cursor-pointer hover:font-bold transition-all">
                <a href="../views/empleados.php">Empleados</a>
            </li>
            <li class="text-gray-500 mx-2 p-3 cursor-pointer hover:font-bold transition-all">
                <a href="../views/puestos.php">Puestos</a>
            </li>
            <li class="text-gray-500 mx-2 p-3 cursor-pointer hover:font-bold transition-all">
                <a href="../views/users.php">Usuarios</a>
            </li>
            <li class="text-gray-500 mx-2 p-3 cursor-pointer hover:font-bold transition-all">
                <a href="../views/templates/Exit.php">Cerrar Sesión</a>
            </li>
        </ul>
    </nav>
</header>