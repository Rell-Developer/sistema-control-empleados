<?php
    include('./navegator.php');
?>
<body>
    <section class="w-full flex justify-center content-center mt-5">
        <div class="mx-auto w-5/6 mt-5">
            <!-- Contenedor Superior -->
            <div class="w-full bg-gray-100 border rounded-t p-3">
                <a href="./registro.php">
                    <button
                        type="button"
                        class="bg-blue-600 hover:bg-blue-500 active:bg-blue-700 
                        text-white rounded-lg px-4 py-2 transition-all"
                    >
                        Agregar registro
                    </button>
                </a>
            </div>

            <!-- Contenedor Central-->
            <div class="p-3 border rounded-b">

                <!-- Mostrar Registros y Busqueda -->
                <div class="w-full flex justify-between">
                    
                    <!-- Mostrar N registros -->
                    <div>
                        <h4>
                            Mostrar
                            <select 
                                name="" 
                                id=""
                                class="px-2 py-1 mx-1 border rounded-lg"
                            >
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                            Registros
                        </h4>   
                    </div>

                    <!-- Busqueda -->
                    <div class="flex items-center">
                        <h4>
                            Buscar:
                        </h4>
                        <input 
                            type="text" 
                            autocomplete="off"
                            class="border rounded mx-1 py-2"
                        >
                    </div>
                </div>

                <!-- Tabla -->
                <table class="w-full mx-auto">
                    <thead class="w-full">
                        <tr class="w-full border-b">
                            <td class="font-bold py-1">ID</td>
                            <td class="font-bold py-1">Nombre</td>
                            <td class="font-bold py-1">Foto</td>
                            <td class="font-bold py-1">CV</td>
                            <td class="font-bold py-1">Puesto</td>
                            <td class="font-bold py-1">Fecha de Ingreso</td>
                            <td class="font-bold py-1">Acciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="py-2 border-b">
                            <td>1</td>
                            <td>ROQUE ALEJANDRO LOPEZ HERNANDEZ</td>
                            <td>FOTO</td>
                            <td>CV</td>
                            <td>PROGRAMADOR</td>
                            <td>10/10/2022</td>
                            <td>
                                <button
                                    class="bg-blue-600 rounded p-2 text-white"
                                >
                                    Carta
                                </button>
                                |
                                <button
                                    class="bg-sky-400 rounded p-2"
                                >
                                    Editar
                                </button>
                                |
                                <button
                                    class="bg-red-600 rounded p-2 text-white"
                                >
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                        <tr class="py-2 border-b">
                            <td>2</td>
                            <td>MARIA JULIETA MEZA FERNANDEZ</td>
                            <td>FOTO</td>
                            <td>CV</td>
                            <td>ANALISTA TECNICA</td>
                            <td>03/01/2022</td>
                            <td>
                                <button
                                    class="bg-blue-600 rounded p-2 text-white"
                                >
                                    Carta
                                </button>
                                |
                                <button
                                    class="bg-sky-400 rounded p-2"
                                >
                                    Editar
                                </button>
                                |
                                <button
                                    class="bg-red-600 rounded p-2 text-white"
                                >
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                        <tr class="py-2 border-b">
                            <td>3</td>
                            <td>KARLA FERNANDA MORGADO TORRES</td>
                            <td>FOTO</td>
                            <td>CV</td>
                            <td>Tester js</td>
                            <td>12/11/2021</td>
                            <td>
                                <button
                                    class="bg-blue-600 rounded p-2 text-white"
                                >
                                    Carta
                                </button>
                                |
                                <button
                                    class="bg-sky-400 rounded p-2"
                                >
                                    Editar
                                </button>
                                |
                                <button
                                    class="bg-red-600 rounded p-2 text-white"
                                >
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!--  -->
                <div class="w-full flex justify-between py-5">
                    <div>
                        <p>
                            Mostrando 1 a 3 de 5 registros
                        </p>
                    </div>

                    <div class="flex items-center">
                        <p
                            class="mx-2"
                        >
                            Anterior
                        </p>

                        <button
                            class="mx-2 px-2 rounded border bg-gray-200"
                        >
                            1
                        </button>

                        <p
                            class="mx-2"
                        >
                            Siguiente
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>