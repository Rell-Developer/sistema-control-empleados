<?php
    // Incluimos la plantilla del navegador
    include('../views/navegator.php');

    // Iniciamos el objeto de session para poder usar sus propiedades
    session_start();

    // Si el usuario no se encuentra logeado
    if(!isset($_SESSION["usuario"])){
        // Se redirige al login
        header('location:../index.php');
    }
?>
    <section class="w-full flex justify-center content-center mt-10">
        <div class="bg-gray-100 rounded-lg w-5/6">
            <div class="w-1/2 flex flex-col justify-center my-20 mx-10">
                <h2 class="text-5xl font-bold my-2">
                    Bienvenid@ al sistema
                </h2>

                <p class="text-xl my-2">
                    Usuario : <?php echo $_SESSION["usuario"];?>
                </p>
                <p class="text-xl my-2">
                    Rol : <?php echo $_SESSION["rol"];?>
                </p>

                <button
                    type="button"
                    class="w-48 bg-blue-600 hover:bg-blue-500 active:bg-blue-700 
                    text-white rounded-lg px-4 py-2 mt-2 transition-all my-2"
                >
                    Example Button
                </button>
            </div>
        </div>
    </section>