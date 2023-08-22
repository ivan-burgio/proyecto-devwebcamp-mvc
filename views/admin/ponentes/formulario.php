<fieldset>
    <legend>Información Personal</legend>

    <div class="formulario__cmapo">
        <label for="nombre" class="formulario__label">Nombre</label>
        <input 
            type="text" 
            class="formulario__input"
            id="nombre"
            name="nombre"
            placeholder="Nombre del ponente"
            value="<?php echo $ponente->nombre ?? '';  ?>"
        >
    </div>

    <div class="formulario__cmapo">
        <label for="apellido" class="formulario__label">Apellido</label>
        <input 
            type="text" 
            class="formulario__input"
            id="apellido"
            name="apellido"
            placeholder="Apellido del ponente"
            value="<?php echo $ponente->apellido ?? '';  ?>"
        >
    </div>
</fieldset>