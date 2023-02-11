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
                    <label for="primerNombre">Primer Nombre:</label>
                    <input type="text" name="primerNombre" class="w-full border py-1 rounded my-1">
                </div>

                <div class="flex flex-col w-full mb-2">  
                    <label for="segundoNombre">Segundo Nombre:</label>
                    <input type="text" name="segundoNombre" class="w-full border py-1 rounded my-1">
                </div>

                <div class="flex flex-col w-full mb-2">  
                    <label for="primerApellido">Primer Apellido:</label>
                    <input type="text" name="primerApellido" class="w-full border py-1 rounded my-1">
                </div>

                <div class="flex flex-col w-full mb-2">  
                    <label for="segundoApellido">Segundo Apellido:</label>
                    <input type="text" name="segundoApellido" class="w-full border py-1 rounded my-1">
                </div>

                <div class="flex flex-col w-full mb-2">  
                    <label for="foto">Foto:</label>
                    <input type="file" name="foto" class="w-full border py-1 rounded my-1">
                </div>

                <div class="flex flex-col w-full mb-2">  
                    <label for="cv">CV(PDF):</label>
                    <input type="file" name="cv" class="w-full border py-1 rounded my-1">
                </div>

                <div class="flex flex-col w-full mb-2">  
                    <label for="puesto">Puesto:</label>
                    <select name="puesto" class="w-full border py-1 rounded my-1">
                        <option value="programador">Programador</option>
                        <option value="analista">Analista</option>
                        <option value="testerjs">Tester js</option>
                    </select>
                </div>

                <div class="flex flex-col w-full mb-2">  
                    <label for="fechaIngreso">Fecha de Ingreso:</label>
                    <input type="date" name="fechaIngreso" class="w-full border py-1 rounded my-1">
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