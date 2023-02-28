<?php include "include/header-login.php";?>

<div class="container w-80 bg-black mt-5 rounded shadow" style="--bs-bg-opacity: .15;">
    <div class="row aling-items-stretch">
        <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl.6 rounded">

        </div>
        <div class="col bg-white p-5 rounded-end" style="--bs-bg-opacity: .97;">
            <div class="text-end">
                <img src="img/faceLogo.png" width="40px" alt="Luchador">
            </div>

            <h2 class="fw-bold text-center py-1" style ="font-size:4rem">Registrate.</h2>
            <h3 class="fw-normal text-center py-1" style ="font-size:1.7rem">!Y obten beneficios¡</h3>

            <!--    LOGIN   -->
            <form action="#">
                <div class="mb-4">
                    <label for="tel" class="form-label" style ="font-size:1.4rem">Teléfono</label>
                    <input type="tel" class="form-control" name="email">
                </div>
                <div class="mb-4">
                <label for="password" class="form-label" style ="font-size:1.4rem">Contraseña</label>
                    <input type="password" class="form-control" name="email">
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-info">Registrarme</button>
                </div>

                <div class="my-3">
                    <span>Regresar al menu principal  <a href="index.php">AQUÍ</a></span><br>
                    
                </div>
            </form>
        </div>
    </div>
</div>


<?php include "include/footer-login.php";?>