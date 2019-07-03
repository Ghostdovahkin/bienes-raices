<?php include_once 'includes/templates/header1.php'; ?>


    <h1 class="fw-300 centrar-texto">Contacto</h1>
    <img src="img/destacada3.jpg" alt="imagen principal" />
    <main class="contenedor seccion contenido-centrado">
      <h2 class="fw-300 centrar-texto">Llena el formulario de Contacto.</h2>
      <form action="" action="respuesta.php" method="POST">
        <fieldset>
          <legend>Información Personal</legend>
          <label for="Nombre">Nombre:</label>
          <input type="text" id="nombre" placeholder="Tu nombre" />
          <label for="Email">E-mail:</label>
          <input type="email" id="email" placeholder="Email" required />
          <label for="telefono">Teléfono:</label>
          <input type="tel" id="telefono" placeholder="Tu teléfono" required />
          <label for="Mensaje">Mensaje:</label>
          <textarea name="" id="mensaje"></textarea>
        </fieldset>
        <fieldset>
            <legend>Información sobre Propiedad</legend>
            <label for="opciones">Vende o Compra</label>
            <select id="opciones">
                <option value="" disabled selected>--Seleccione--</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>
            <label for="Cantidad">Cantidad:</label>
            <input type="number" min="0" max="10" >
        </fieldset>
        <fieldset>
            <legend>Contacto</legend>

            <p>Como desea ser contactado:</p>
            <div class="forma-contacto">
            <label for="telefono">Teléfono</label>
            <input type="radio" name="contacto" value="telefono" id="telefono">
            <label for="email">E-mail</label>
            <input type="radio" name="contacto" value="correo" id="email">
        </div>
            <p>Si eligió Teléfono,elija la fecha y la hora.</p>
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha">
            <label for="hora">Hora:</label>
            <input type="time" id="hora" min="9:00" max="18:00">
        </fieldset>
        <input type="submit" value="enviar" class="boton boton-verde" >
      </form>
    </main>

    <?php include_once 'includes/templates/footer.php'; ?>

