<?php
    include('./navegator.php');
?>
<section class="w-full flex justify-center content-center my-5">
    <div class="mx-auto w-5/6 mt-5">
        <!-- Contenedor Superior -->
        <div class="w-full bg-gray-100 border rounded-t p-3">
            <h4>
                Datos del registro
            </h4>
        </div>

        <!-- Contenedor Central-->
        <div class="p-3 border rounded-b">

            <!-- Contenedor del formulario -->
            <div class="w-full flex flex-col">
                
                <!-- Formulario -->
                <div class="flex flex-col w-full mb-2">  
                    <label for="id">ID:</label>
                    <input type="text" name="id" class="w-full border py-1 rounded my-1">
                </div>

                <div class="flex flex-col w-full mb-2">  
                    <label for="nombrePuesto">Nombre del Puesto:</label>
                    <input type="text" name="nombrePuesto" class="w-full border py-1 rounded my-1">
                </div>
            </div>

            <!--  -->
            <div class="w-full flex justify-start py-2">
                <div>
                    <button 
                        class="bg-green-700 py-2 px-4 mx-2 rounded text-white"
                    >
                        Guardar Registro
                    </button>
                </div>

                <div>
                    <button 
                        class="bg-blue-700 py-2 px-4 mx-2 rounded text-white"
                    >
                        Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>