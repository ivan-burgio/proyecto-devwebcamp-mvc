<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Personal</legend>

    <div class="formulario__campo">
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

    <div class="formulario__campo">
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

    <div class="formulario__campo">
        <label for="ciudad" class="formulario__label">Ciudad</label>
        <input 
            type="text" 
            class="formulario__input"
            id="ciudad"
            name="ciudad"
            placeholder="Ciudad del ponente"
            value="<?php echo $ponente->ciudad ?? '';  ?>"
        >
    </div>

    <div class="formulario__campo">
        <label for="pais" class="formulario__label">Pais</label>
        <input 
            type="text" 
            class="formulario__input"
            id="pais"
            name="pais"
            placeholder="Pais del ponente"
            value="<?php echo $ponente->pais ?? '';  ?>"
        >
    </div>

    <div class="formulario__campo">
        <label for="imagen" class="formulario__label">imagen</label>
        <input 
            type="file" 
            class="formulario__input formulario__input--file"
            id="imagen"
            name="imagen"
        >
    </div>
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Extra</legend>

    <div class="formulario__campo">
        <label for="tags_input" class="formulario__label">Áreas de Experiencia (separadas por coma)</label>
        <input 
            type="text" 
            class="formulario__input"
            id="tags_input"
            placeholder="Ej. Node.js, PHP, HTML"
        >

        <div id="tags" class="formulario__listado"></div>
        <input type="hidden" name="tags" value="<?php echo $ponente->tags ? ''; ?">
    </div>

</fieldset>