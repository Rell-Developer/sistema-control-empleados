
    <body>
        <!-- Contenedor principal -->
        <main class="w-full">
            <!-- Contendor del formulario -->
            <div class="mx-auto w-1/4 mt-10">
                <!-- Titulo del formulario -->
                <div class="w-full bg-gray-100 border rounded-t p-3">
                    <h4>
                        Login
                    </h4>
                </div>

                <!-- Formulario -->
                <div class="p-3 border rounded-b">

                    <!-- Mensaje de Alerta -->
                    <div class="w-full rounded-lg bg-red-100 border border-red-200 my-1 hidden">
                        <h4 class="p-3 font-bold text-red-900 text-center">
                            Error: El usuario o contraseña son incorrectos
                        </h4>
                    </div>

                    <form action="./controllers/UsuarioController.php" method="POST">
                        <!-- Usuario -->
                        <div class="flex flex-col">
                            <label for="user">Usuario:</label>
                            <input 
                                type="text" 
                                name="user" 
                                placeholder="Escribe tu usuario"
                                class="border rounded p-2 my-2"
                                required    
                            >
                        </div>
        
                        <!-- Contraseña -->
                        <div class="flex flex-col">
                            <label for="password">Contraseña:</label>
                            <input 
                                type="password" 
                                name="password" 
                                placeholder="Escribe tu contraseña"
                                class="border rounded p-2 my-2"
                                required  
                            >
                        </div>

                        <div>
                            <button
                                type="submit"
                                class="bg-blue-600 hover:bg-blue-500 active:bg-blue-700 
                                text-white rounded-lg px-4 py-2 mt-2 transition-all"
                            >
                                Entrar al sistema
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </body>