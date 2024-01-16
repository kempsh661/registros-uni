<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style2.css">
    <title>Talento Tech</title>
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION['form_token'])) {
        $_SESSION['form_token'] = bin2hex(random_bytes(32));
    }
    ?>
    <div class="logo-container">
        <img src="Tech.png" alt="Logo de Talento Tech">
    </div>

    <section class="container">
        <header>FORMULARIO DE INSCRIPCIÓN</header>
        <form id="miFormulario" action="registro.php" class="form" method="POST" enctype="multipart/form-data">
            <div class="column">
                <div class="input-box">
                    <label>Tipo de Documento</label>
                    <div class="select-box">
                        <select name="tipo_documento" id="tipo_documento" required>
                            <option value="" disabled selected>Tipo de Documento</option>
                            <option value="cc">Cedula De Ciudadanía</option>
                            <option value="ce">Cedula De Extranjería</option>
                            <option value="ti">Tarjeta de Identidad</option>
                        </select>
                    </div>
                </div>
                <div class="input-box">
                    <label>Número De Documento</label>
                    <input type="number" name="numero_doc" id="numero_doc" placeholder="Escribe tu Número De Documento" required/>
                </div>
            </div>
            <div class="column">
            <div class="input-box">
                <label>Primer nombre</label>
                <input type="text" name="nombre" id="nombre" placeholder="Escribe tus Nombres" required/>
            </div>
            <div class="input-box">
                <label>Segundo nombres</label>
                <input type="text" name="segundo_nombre" id="segundo_nombre" placeholder="Escribe tus Nombres" />
            </div>
            </div>
            <div class="column">
            <div class="input-box">
                <label>Primer apellidos</label>
                <input type="text" name="apellido" id="apellido" placeholder="Escribe tus Apellidos" required/>
            </div>
            <div class="input-box">
                <label>Segundo apellidos</label>
                <input type="text" name="segundo_apellido" id="segundo_apellido" placeholder="Escribe tus Apellidos"/>
            </div>
            </div>
            <div class="column">
                <div class="input-box">
                    <label>Fecha de Nacimiento</label>
                    <input type="Date" name="fecha_nac" id="fecha_nac" placeholder="Escribe tu Fecha de Nacimiento " required/>
                </div>
                <div class="input-box">
                    <label>Fecha de Expedición de Documento</label>
                    <input type="Date" name="fecha_exp" id="fecha_exp" placeholder="Escribe tu Fecha de Nacimiento" required/>
                </div>
            </div>
            <div class="genero-box">
                <h3>Género</h3>
                <div class="genero-option">
                    <div class="genero">
                        <input type="radio" id="masculino" name="genero" value="masculino" required>
                        <label for="masculino">Masculino</label>
                    </div>
                    <div class="genero">
                        <input type="radio" id="femenino" name="genero" value="femenino">
                        <label for="femenino">Femenino</label>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="input-box">
                    <label>Orientación Sexual</label>
                    <div class="select-box">
                        <select name="orientacion" id="orientacion" required>
                            <option value="" selected>Elije Orientación</option>
                            <option value="Heterosexual">Heterosexual</option>
                            <option value="Homosexual">Homosexual</option>
                            <option value="Bisexual">Bisexual</option>
                            <option value="Otra">Otra</option>
                            <option value="No Informa">No Informa</option>
                        </select>
                    </div>
                </div>
                <div class="input-box">
                    <label>Teléfono</label>
                    <input type="number" name="telefono" id="telefono" placeholder=" Escribe tu Número de Teléfono" required/>
                </div>
            </div>
            <div class="input-box">
                <label>Correo Electrónico</label>
                <input type="email" name="email" id="email" placeholder="Escribe tu Correo Electrónico" required/>
            </div>
            <div class="column">
                <div class="input-box">
                    <label>Nacionalidad</label>
                    <div class="select-box">
                        <select name="nacionalidad" id="nacionalidad" required>
                            <option value="" selected>Elije tu Nacionalidad</option>
                            <option value="Colombiano">Colombiano</option>
                            <option value="Extranjero">Extranjero</option>
                        </select>
                    </div>
                </div>
                <div class="input-box">
                    <label>Departamento</label>
                    <div class="select-box">
                        <select name="departamento" id="departamento" required>
                            <option value="" selected>Elije tu Departamento</option>
                            <option value="Nariño">Nariño</option>
                            <option value="Cauca">Cauca</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="input-box">
                    <label>Municipio</label>
                    <div class="select-box">
                    <select name="ciudad" id="ciudad" required>
                        <option value="">Primero selecciona un departamento</option>
                    </select>
                </div>
                </div>
                <div class="input-box">
                    <label>Zona Ubicación</label>
                    <div class="select-box">
                        <select name="zona" id="zona" required>
                            <option value="" selected>Elije tu Zona</option>
                            <option value="Centro Poblado">Centro Poblado</option>
                            <option value="Cabezera Municipal">Cabezera Municipal</option>
                            <option value="Rural">Rural</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="genero-box">
                <h3>Campesino</h3>
                <div class="genero-option">
                    <div class="genero">
                        <input type="radio" id="si" name="campesino" value="si" required>
                        <label for="si">Si</label>
                    </div>
                    <div class="genero">
                        <input type="radio" id="no" name="campesino" value="no">
                        <label for="no">No</label>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="input-box">
                    <label>Estrato Socioeconómico </label>
                    <div class="select-box">
                        <select name="estrato" id="estrato" required>
                            <option value="" selected>Elije tu Estrato</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="Zona Rural">Zona Rural</option>
                            <option value="No Especifica">No Especifica</option>
                        </select>
                    </div>
                </div>
                <div class="input-box">
                    <label>Autoidentificación Étnica</label>
                    <div class="select-box">
                        <select name="etnia" id="etnia" required>
                            <option value="" selected>Elije tu Opción</option>
                            <option value="Raizal de San Andres, Providencia y Santa Catalina">Raizal de San Andrés, Providencia y Santa Catalina</option>
                            <option value="Gitano(a) o Rrom">Gitano(a) o Rrom</option>
                            <option value="Indígena">Indígena</option>
                            <option value="Palenquero(a) de San Basilio">Palenquero(a) de San Basilio</option>
                            <option value="Negro(a)">Negro(a)</option>
                            <option value="Mulato(a)">Mulato(a)</option>
                            <option value="Afrodescendiente">Afrodescendiente</option>
                            <option value="Afrocolombiano(a)">Afrocolombiano(a)</option>
                            <option value="Ninguna">Ninguna</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="genero-box">
                <h3>Víctima del Conflicto Armado</h3>
                <div class="genero-option">
                    <div class="genero">
                        <input type="radio" id="si" name="conflicto" value="si"required>
                        <label for="si">Si</label>
                    </div>
                    <div class="genero">
                        <input type="radio" id="no" name="conflicto" value="no">
                        <label for="no">No</label>
                    </div>
                </div>
            </div>
            <div class="input-box">
                <label>Nivel Educativo</label>
                <div class="select-box">
                    <select name="nivel_edu" id="nivel_edu" required>
                        <option value="" selected>Elije tu Nivel</option>
                        <option value="Básica">Educación Básica</option>
                        <option value="Media">Educación Media</option>
                        <option value="Técnica">Educación Técnica </option>
                        <option value="Tecnológica ">Educación Tecnológica </option>
                        <option value="Pregado">Pregado</option>
                        <option value="Especialización">Especialización</option>
                        <option value="Maestría">Maestría</option>
                        <option value="Doctorado">Doctorado</option>
                    </select>
                </div>
            </div>
            <div>
                <div class="genero-box">
                    <h3>Discapacidad</h3>
                    <div class="genero-option">
                        <div class="genero">
                            <input type="radio" id="discapacidad_si" name="discapacidad" value="si" required>
                            <label for="si">Si</label>
                        </div>
                        <div class="genero">
                            <input type="radio" id="discapacidad_no" name="discapacidad" value="no">
                            <label for="no">No</label>
                        </div>
                    </div>
                </div>
                <div id="discapa_cer" class="genero-box hidden">
                    <h3>Discapacidad Certificada</h3>
                    <div class="genero-option">
                        <div class="genero">
                            <input type="radio" id="si_certificada" name="certificada" value="si">
                            <label for="si">Si</label>
                        </div>
                        <div class="genero">
                            <input type="radio" id="no_certificada" name="certificada" value="no">
                            <label for="no">No</label>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tipos_discapacidad" class="input-box hidden">
                <label>Tipo de Discapacidad</label>
                <div class="select-box">
                    <select name="tipos_discapacidad" id="tipos_discapacidad">
                        <option value="" selected>Elije tu Discapacidad</option>
                        <option value="Auditiva">Auditiva</option>
                        <option value="Visual">Visual</option>
                        <option value="Fisica">Física</option>
                        <option value="Intelectual(Cognitiva)">Intelectual(Cognitiva)</option>
                        <option value="Psicosocial(Mental)">Psicosocial(Mental)</option>
                        <option value="Sordoceguera">Sordoceguera</option>
                        <option value="Multiple">Múltiple</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>
            </div>
            <div id="otra_discapacidad" class="input-box" style="display:none">
                <label>Dinos qué Discapacidad es:</label>
                <textarea id="otra_discapa" name="otra_discapa" rows="4" cols="50"></textarea>
            </div>
            <div class="genero-box">
                <h3>¿Te comprometes a dedicar mínimo 10 horas semanales a Talento Tech?</h3>
                <div class="genero-option">
                    <div class="genero">
                        <input type="radio" id="si" name="compromiso" value="si" required>
                        <label for="si">Si</label>
                    </div>
                    <div class="genero">
                        <input type="radio" id="no" name="compromiso" value="si">
                        <label for="no">No</label>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="input-box">
                    <label>Eje Temático</label>
                    <div class="select-box">
                        <select name="eje_tematico" id="eje_tematico" required>
                            <option value="" selected>Elije tu Eje Temático</option>
                            <option value="Análisis De Datos">Análisis De Datos</option>
                            <option value="Programación">Programación</option>
                            <option value="Blockchain">Blockchain</option>
                            <option value="Arquitectura En La Nube">Arquitectura En La Nube</option>
                            <option value="Inteligencia Artificiál">Inteligencia Artificial</option>
                        </select>
                    </div>
                </div>
                <div class="input-box">
                    <label>Tipo De Formación</label>
                    <div class="select-box">
                        <select name="tipo_forma" id="tipo_forma" required>
                            <option value="" selected>Elije tu Opción</option>
                            <option value="Virtual">Virtual</option>
                            <option value="Presencial/Hibrido">Presencial/Híbrido</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="genero-box">
                <h3>He leído y acepto los requisitos de la convocatoria</h3>
                <div class="genero-option">
                    <div class="genero">
                        <input type="radio" id="si" name="requisitos" value="si" required>
                        <label for="si">Si</label>
                    </div>
                    <div class="genero">
                        <input type="radio" id="no" name="requisitos" value="no">
                        <label for="no">No</label>
                    </div>
                </div>
            </div>
            <div class="genero-box">
                <h3>Cuento con un equipo de computo y/o dispositivo móvil o la posibilidad de usar uno</h3>
                <div class="genero-option">
                    <div class="genero">
                        <input type="radio" id="si" name="computo" value="si" required>
                        <label for="si">Si</label>
                    </div>
                    <div class="genero">
                        <input type="radio" id="no" name="computo" value="no">
                        <label for="no">No</label>
                    </div>
                </div>
            </div>
            <div class="input-box">
                <label>¿Qué te motivó a participar?</label>
                <textarea id="parrafo" name="parrafo" rows="4" cols="50" required></textarea>
            </div>
            <div class="genero-box">
                <h3>He leído y acepto la política de tratamiento de <a href="https://generaciontic.gov.co/politicas-de-tratamiento-de-datos/" target="_blank" rel="noopener noreferrer">Datos</a></h3> 

                <div class="genero-option">
                    <div class="genero">
                        <input type="radio" id="si" name="autoriza" value="si" required>
                        <label for="si">Si</label>
                    </div>
                    <div class="genero">
                        <input type="radio" id="no" name="autoriza" value="no">
                        <label for="no">No</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="form_token" value="<?php echo $_SESSION['form_token']; ?>">
            <button type="submit" id="inscribirse">Inscribirse</button>
        </form>
    </section>
    <script>
        document.querySelectorAll('input[name="discapacidad"]').forEach(function(elem) {
            elem.addEventListener('change', function() {
                var respuesta = document.querySelector('input[name="discapacidad"]:checked').value;
                var preguntaDetalle1 = document.getElementById('discapa_cer');
                var preguntaDetalle2 = document.getElementById('tipos_discapacidad');
                
                if (respuesta === 'si') {
                    preguntaDetalle1.classList.remove('hidden');
                    preguntaDetalle2.classList.remove('hidden');
                } else {
                    preguntaDetalle1.classList.add('hidden');
                    preguntaDetalle2.classList.add('hidden');
                }
            });
        });
       
        
        
        var ciudadesPorDepartamento = {
            "Nariño": ["Aldana", "Ancuyá", "Arboleda", "Barbacoas", "Belén", "Buesaco", "Chachagüí", "Colón",
            "Consacá", "Contadero", "Córdoba", "Cuaspud", "Cumbal", "Cumbitara", "El Charco", "El Peñol",
            "El Rosario", "El Tablón de Gómez", "El Tambo", "Francisco Pizarro", "Funes", "Guachucal",
            "Guaitarilla", "Gualmatán", "Iles", "Imués", "Ipiales", "La Cruz", "La Florida", "La Llanada",
            "La Tola", "La Unión", "Leiva", "Linares", "Los Andes", "Magüí Payán", "Mallama", "Mosquera",
            "Nariño", "Olaya Herrera", "Ospina", "Pasto", "Policarpa", "Potosí", "Providencia", "Puerres",
            "Pupiales", "Ricaurte", "Roberto Payán", "Samaniego", "San Bernardo", "San Lorenzo", "San Pablo",
            "San Pedro de Cartago", "Sandoná", "Santa Bárbara", "Santacruz", "Sapuyes", "Taminango",
            "Tangua", "Tumaco", "Túquerres", "Yacuanquer"],
            "Cauca": ["Almaguer", "Argelia", "Balboa", "Bolívar", "Buenos Aires", "Cajibío", "Caldono", "Caloto",
            "Corinto", "El Tambo", "Florencia", "Guachené", "Guapí", "Inzá", "Jambaló", "La Sierra",
            "La Vega", "López de Micay", "Mercaderes", "Miranda", "Morales", "Padilla", "Páez",
            "Patía", "Piamonte", "Piendamó", "Popayán", "Puerto Tejada", "Puracé", "Rosas",
            "San Sebastián", "Santander de Quilichao", "Santa Rosa", "Silvia", "Sotará",
            "Suárez", "Sucre", "Timbío", "Timbiquí", "Toribío", "Totoró", "Villa Rica"],
            
        };
        document.getElementById('departamento').addEventListener('change', function() {
            var departamentoSeleccionado = this.value;
            var ciudades = ciudadesPorDepartamento[departamentoSeleccionado] || [];
            var selectCiudad = document.getElementById('ciudad');

            // Limpiar select de ciudad
            selectCiudad.innerHTML = '';

            // Opción predeterminada
            var option = document.createElement('option');
            option.value = '';
            option.text = 'Selecciona una ciudad';
            selectCiudad.appendChild(option);

            // Añadir nuevas opciones de ciudades
            ciudades.forEach(function(ciudad) {
                var option = document.createElement('option');
                option.value = ciudad;
                option.text = ciudad;
                selectCiudad.appendChild(option);
            });
        });
        document.getElementById('numero_doc').addEventListener('input', function (e) {
            var nonNumeric = /[^0-9]/g;
            if (this.value.match(nonNumeric)) {
                this.value = this.value.replace(nonNumeric, '');
            }
        });
        
        document.getElementById('miFormulario').addEventListener('submit', function(e) {
            var tipoDocumento = document.getElementById('tipo_documento').value;
            var orientacion = document.getElementById('orientacion').value;
            var nacionalidad = document.getElementById('nacionalidad').value;
            var departamento = document.getElementById('departamento').value;
            var estrato = document.getElementById('estrato').value;
            var zona = document.getElementById('zona').value;
            var etnia = document.getElementById('etnia').value;
            var nivel_edu = document.getElementById('nivel_edu').value;
            var tipos_discapacidad = document.getElementById('tipos_discapacidad').value;
            var eje_tematico = document.getElementById('eje_tematico').value;
            var tipo_forma = document.getElementById('tipo_forma').value;
            if (tipoDocumento === "") {
                alert('Por favor, selecciona un tipo de documento válido.');
                e.preventDefault(); // Evita que el formulario se envíe
            }
            if (orientacion === "") {
                alert('Por favor, selecciona una orientación sexual válida.');
                e.preventDefault(); // Evita que el formulario se envíe
            }
            if (nacionalidad === "") {
                alert('Por favor, selecciona tu nacionalidad.');
                e.preventDefault();
            }
        
            if (departamento === "") {
                alert('Por favor, selecciona tu departamento.');
                e.preventDefault();
            }
            if (zona === "") {
                alert('Por favor, selecciona tu zona de ubicación.');
                e.preventDefault();
            }
            if (estrato === "") {
                alert('Por favor, selecciona tu Estrato.');
                e.preventDefault();
            }
            if (etnia === "") {
                alert('Por favor, selecciona tu Étnica.');
                e.preventDefault();
            }
            if (nivel_edu === "") {
                alert('Por favor, selecciona tu Nivel.');
                e.preventDefault();
            }
            if (tipos_discapacidad === "") {
                alert('Por favor, selecciona tu Discapacidad.');
                e.preventDefault();
            }
            if (eje_tematico === "") {
                alert('Por favor, selecciona tu Eje Temático.');
                e.preventDefault();
            }
            if (tipo_forma === "") {
                alert('Por favor, selecciona tu Opción.');
                e.preventDefault();
            }
            
        });document.getElementById('numero_doc').addEventListener('input', function (e) {
            var nonNumeric = /[^0-9]/g;
            if (this.value.match(nonNumeric)) {
                this.value = this.value.replace(nonNumeric, '');
            }
        });
        
        document.getElementById('miFormulario').addEventListener('submit', function(e) {
            var tipoDocumento = document.getElementById('tipo_documento').value;
            var orientacion = document.getElementById('orientacion').value;
            var nacionalidad = document.getElementById('nacionalidad').value;
            var departamento = document.getElementById('departamento').value;
            var estrato = document.getElementById('estrato').value;
            var zona = document.getElementById('zona').value;
            var etnia = document.getElementById('etnia').value;
            var nivel_edu = document.getElementById('nivel_edu').value;
            var tipos_discapacidad = document.getElementById('tipos_discapacidad').value;
            var eje_tematico = document.getElementById('eje_tematico').value;
            var tipo_forma = document.getElementById('tipo_forma').value;
            if (tipoDocumento === "") {
                alert('Por favor, selecciona un tipo de documento válido.');
                e.preventDefault(); // Evita que el formulario se envíe
            }
            if (orientacion === "") {
                alert('Por favor, selecciona una orientación sexual válida.');
                e.preventDefault(); // Evita que el formulario se envíe
            }
            if (nacionalidad === "") {
                alert('Por favor, selecciona tu nacionalidad.');
                e.preventDefault();
            }
        
            if (departamento === "") {
                alert('Por favor, selecciona tu departamento.');
                e.preventDefault();
            }
            if (zona === "") {
                alert('Por favor, selecciona tu zona de ubicación.');
                e.preventDefault();
            }
            if (estrato === "") {
                alert('Por favor, selecciona tu Estrato.');
                e.preventDefault();
            }
            if (etnia === "") {
                alert('Por favor, selecciona tu Étnica.');
                e.preventDefault();
            }
            if (nivel_edu === "") {
                alert('Por favor, selecciona tu Nivel.');
                e.preventDefault();
            }
            if (tipos_discapacidad === "") {
                alert('Por favor, selecciona tu Discapacidad.');
                e.preventDefault();
            }
            if (eje_tematico === "") {
                alert('Por favor, selecciona tu Eje Temático.');
                e.preventDefault();
            }
            if (tipo_forma === "") {
                alert('Por favor, selecciona tu Opción.');
                e.preventDefault();
            }
            
        });
        document.addEventListener('DOMContentLoaded', function () {
            var discapacidadSi = document.getElementById('discapacidad_si');
            var discapacidadNo = document.getElementById('discapacidad_no');
            var discapacidadCertificadaContenedor = document.getElementById('discapa_cer');
            var tipoDiscapacidadContenedor = document.getElementById('tipos_discapacidad');
            var selectTiposDiscapacidad = document.getElementById('tipos_discapacidad');
            var campoOtraDiscapacidad = document.getElementById('otra_discapacidad');
            
        
            function toggleRequiredDiscapacidad(isRequired) {
                // Seleccionar todos los inputs y selects dentro de los contenedores
                var inputsCertificada = discapacidadCertificadaContenedor.querySelectorAll('input, select');
                var inputsTipo = tipoDiscapacidadContenedor.querySelectorAll('input, select');
                

                inputsCertificada.forEach(function(input) {
                    input.required = isRequired;
                });
        
                inputsTipo.forEach(function(input) {
                    input.required = isRequired;
                });
        
                // Mostrar u ocultar los contenedores
                discapacidadCertificadaContenedor.style.display = isRequired ? 'block' : 'none';
                tipoDiscapacidadContenedor.style.display = isRequired ? 'block' : 'none';
            }
        
            discapacidadSi.addEventListener('change', function () {
                if (this.checked) {
                    toggleRequiredDiscapacidad(true);
                }
            });
        
            discapacidadNo.addEventListener('change', function () {
                if (this.checked) {
                    toggleRequiredDiscapacidad(false);
                }
            });
        
            selectTiposDiscapacidad.addEventListener('change', function() {
                if (this.value === 'Otro') {
                    campoOtraDiscapacidad.style.display = 'none';
                    
                } else {
                    campoOtraDiscapacidad.style.display = 'block';
                    textareaOtraDiscapacidad.required = true;
                }
            });
        
            // Estado inicial
            if (selectTiposDiscapacidad.value === 'Otro') {
                campoOtraDiscapacidad.style.display = 'block';
            } else {
                campoOtraDiscapacidad.style.display = 'none';
            }
        
        });
    </script>
</body>
</html>