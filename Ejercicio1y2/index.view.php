<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 1y2 - TP2 - PAW</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>TURNOS CONSULTORIO MÉDICO</h1>
        <form action="/save_turno" method="POST" >
            <fieldset>
                <section>
                    <legend>Datos Personales</legend>

                    <article>
                        <label for="nombre">Nombre: </label>
                        <input type="text" id="nombre" name="nombre" maxlength="50" pattern="[A-Za-zÀ-ž\s]{2,}" placeholder="Ingrese su nombre"  required> * 
                    </article>

                    <article>
                        <label for="email">Email: </label>
                        <input type="email" id="email" name="email" placeholder="Ingrese su email" required> *
                    </article>

                    <article>
                        <label for="tel">Teléfono: </label> 
                        <input type="number" id="tel" name="tel" pattern=[0-9\+][0-9]{13} placeholder="Ingrese su teléfono" required> *
                    </article>

                    <article>
                        <label for="edad">Edad: </label>
                        <input type="number" id="edad" name="edad"  min="1" max="105" placeholder="Rango válido [1-105]">
                    </article>

                    <article>
                        <label for="talla">Talla de Calzado: </label>
                        <input type="number" id="talla" name="talla" min="20" max="45" placeholder="Rango válido [20-45]">
                    </article>

                    <article>
                        <label for="altura">Altura: </label>
                        0.5
                        <input type="range" id="altura" name="altura" min="0.5" max="2" step="0.1">
                        2
                    </article>

                    <article>
                        <label for="nacimiento">Fecha de Nacimiento: </label>
                        <input type="date" id="nacimiento" name="nacimiento" required> *
                    </article>

                    <article>
                    <label for="cpelo">Color de Pelo: </label>
                        <select id="cpelo" name="cpelo">
                            <?php foreach ($colores_de_pelo as $color_pelo_key => $color_pelo_valor) : ?>
                                    <option value="<?= $color_pelo_key ?>"><?= $color_pelo_valor ?></option>
                            <?php endforeach ?>
                        </select>
                    </article>    

                    <article>
                        <label for="fechaturno">Fecha de Turno: </label>
                        <input type="date" id="fechaturno" name="fechaturno" min="2020-01-01" required> *
                    </article>

                    <article>
                        <label>Horario del Turno: </label>
                        <input type="time" id="horaturno" name="horaturno" min="08:00:00" max="17:00:00" value="08:00:00" step="900" required> *
                    </article>

                    
                    <p> * <small>Este dato es requerido</small> </p>

                    <article>
                        <input type="reset" name="limpiar" value="limpiar">
                        <input type="submit" name="submit" value="Enviar">
                    </article>
                </section>
            </fieldset>
        </form>         
    </body>
</html>
