<?php

require_once ("d://xampp/htdocs/sistema/head.php");

?>






<div class="fondo-login">

<div class="icon">
    <a href="/login/index.php">
    <i class="fa-solid fa-user  dog-icon"  ></i>
    </a>
</div>
    <div class="titulo">
        Inicio de secion 
    </div>
    <form action="verificar.php" method ="POST" class=" col-3 login" autocomplete="off">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <div class="box-eye">
                <button  type="button" onclick="mostrarContraseña('password', 'eyepassword')">
                    <i  id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="contraseña" class="form-control" id="password">
        </div>
         <p><a href="#">¿Olvidaste tu contraseña?</a></p>
        
        <div class="d-grid gap-2" >
            <button type="submit" class="btn btn-primary">Acceder</button>
        </div>
    </form>
    <div class="col-3 login mt-3">
        Crear Cuenta <a href="singout.php" style= "text-decoration: none;">click aqui</a>
    </div>
</div>


<?php

require_once ("d://xampp/htdocs/sistema/footer.php");

?>




