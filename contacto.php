<?php require_once("tools/header.php"); ?>
      <!--Breadcrumbs-->
      <nav>
        <div class="nav-wrapper #e0e0e0 grey lighten-2">
          <div class="col s12">
            <a href="index.php" class="breadcrumb grey-text text-darken-2">Inicio</a>
            <a href="#!" class="breadcrumb grey-text text-darken-3">Contáctenos</a>
          </div>
        </div>
      </nav>
    </nav>
    <!--Contáctenos-->
    <div class="row contenedor-formulario">
      <div class="col s10 m10 l10 xl10 offset-s1 offset-m1 offset-l1 offset-xl1">
        <div class="row">
          <!--bienvenida al cliente-->
          <div class="col s12 m12 l6 xl6">
            <h2 class="titulo-mensaje-cliente">
              Aqu&iacute puedes contar con la asistencia que necesitas!!!
            </h2>
            <!--mensaje cliente-->
            <p class="mensaje-cliente">
              Al proporcionar tus datos, nuestro equipo de asistencia se estar&aacute comunicando contigo. Solo tienes que indicar el servicio que requieres, el tipo de proyecto y la ubicaci&oacuten.
            </p>
          </div>
          <!--llenar formulario-->
          <div style= "margin: 7% 0 0 0" class="col s12 m12 l6 xl6">
            <div class="row">
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="col s12">
                <!--Datos personales-->
                <div class="row">
                  <!--Nombre-->
                  <div class="input-field col s12 m6 l6 xl6">
                    <input name="nombre" type="text" id="first_name" class="validate" value="<?php if(!$enviado && isset($nombre)){echo $nombre;} ?>">
                    <label for="first_name">Nombre</label>
                  </div>
                  <!--Apellido-->
                  <div class="input-field col s12 m6 l6 xl6">
                    <input name="apellido" type="text" id="last_name" class="validate" value="<?php if(!$enviado && isset($apellido)){echo $apellido;} ?>">
                    <label for="last_name">Apellido</label>
                  </div>
                  <!--Celular-->
                  <div class="input-field col s12 m6 l6 xl6">
                    <input name="celular" type="tel" id="icon_prefix2" class="validate" value="<?php if(!$enviado && isset($celular)){echo $celular;} ?>">
                    <label class="active" for="icon_prefix2">Celular</label>
                  </div>
                  <!--Correo-->
                  <div class="input-field col s12 m6 l6 xl6">
                    <input name="correo" type="text" id="email2" class="validate" value="<?php if(!$enviado && isset($correo)){echo $correo;} ?>">
                    <label class="active" for="email2">Correo electr&oacutenico</label>
                  </div>
                  <!--Descripcion del proyecto-->
                  <div class="input-field col s12">
                    <textarea name="descripcionProyecto" id="textarea1" class="materialize-textarea"><?php if(!$enviado && isset($descripcionProyecto)) {echo $descripcionProyecto;} ?></textarea>
                    <label for="textarea1">Descripci&oacuten del proyecto</label>
                  </div>

                  <?php if(!empty($errores)): ?>
                      <div class="alert error"><?php echo $errores; ?></div>
                  <?php elseif($enviado): ?>
                      <div class="alert success">
                        <p>
                          <script>
                            swal({
                              title: "La solicitud se envio con exito!",
                              text: "En la brevedad nos pondremos en contacto con usted.",
                              icon: "success",
                            });
                          </script>
                        </p>
                      </div>
                  <?php endif; ?><!--Alertas-->

                  <!--Enviar-->
                  <div class="input-field col s12">
                    <input style="width: 32%; height: 7vh; margin: 0 34% 0 34%; font-size: 1.5em;" type="submit" name="enviar_mensaje" value="enviar">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col s1 m1 l1 xl1"></div><!--comlumna de relleno-->
    </div>

      <!--Footer-->
<?php require_once("tools/footer.php"); ?>
