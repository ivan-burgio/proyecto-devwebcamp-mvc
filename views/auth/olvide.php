<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo ?></h2>
    <p class="auth__texto">Recuperar tu acceso a DevWebCamp.</p>

    <form class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input 
                type="email" 
                class="formulario__input" 
                placeholder="Tu email"
                id="email"
                name="email"
            >
        </div>

        <input type="submit" class="formulario__submit" value="Enviar Email">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlaces">¿Ya tienes cuenta? Inicia sesión.</a>
        <a href="/registro" class="acciones__enlaces">¿Aun no tienes cuenta? Crea una.</a>
    </div>

</main>