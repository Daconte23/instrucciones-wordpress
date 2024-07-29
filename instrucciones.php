// Agregar una subpestaña "Instrucciones" al menú "Escritorio"
function add_instructions_submenu() {
    add_dashboard_page(
        'Instrucciones', // Título de la página
        'Instrucciones', // Título del menú
        'manage_options', // Capacidad requerida para ver la página (solo administradores)
        'instructions_page', // Slug de la página
        'instructions_page_content' // Función que muestra el contenido de la página
    );
}
add_action('admin_menu', 'add_instructions_submenu');

// Función que define el contenido de la página de instrucciones
function instructions_page_content() {
    ?>
    <div class="wrap">
        <h1>Instrucciones para el Uso de la Web</h1>

        <!-- Caja de contacto -->
        <div class="instructions-box">
            <h2>Contacta con Nosotros</h2>
            <p>Para cualquier duda, puedes contactarnos:</p>
            <p>Teléfono: <a href="tel:+573004712909">+573004712909</a> | Email: <a href="mailto:jbdaconte@gmail.com">jbdaconte@gmail.com</a></p>
        </div>

        <!-- Sección de gestión de entradas -->
        <div class="instructions-section">
            <h2>Gestión de Entradas</h2>
            <h3>Crear una Entrada</h3>
            <ol>
                <li>Ve a <strong>Entradas > Añadir nueva</strong>.</li>
                <li>Introduce el título y el contenido de la entrada.</li>
                <li>Selecciona una categoría en la sección de "Categorías".</li>
                <li>Sube una imagen destacada en la sección "Imagen destacada".</li>
                <li>Haz clic en <strong>Publicar</strong>.</li>
            </ol>
           


            <h3>Editar una Entrada</h3>
            <ol>
                <li>Ve a <strong>Entradas > Todas las entradas</strong>.</li>
                <li>Haz clic en el título de la entrada que deseas editar.</li>
                <li>Realiza los cambios necesarios y haz clic en <strong>Actualizar</strong>.</li>
            </ol>
            


            <h3>Borrar una Entrada</h3>
            <ol>
                <li>Ve a <strong>Entradas > Todas las entradas</strong>.</li>
                <li>Pasa el cursor sobre la entrada que deseas borrar y haz clic en <strong>Papelera</strong>.</li>
            </ol>
            

        <!-- Sección para subir imágenes -->
        <div class="instructions-section">
            <h2>Subir Imágenes</h2>
            <p>Para subir imágenes, ve a <strong>Medios > Añadir nuevo</strong> y arrastra tus archivos a la ventana o haz clic en "Seleccionar archivos".</p>
            
        </div>

        <!-- Sección sobre el uso del editor Gutenberg -->
        <div class="instructions-section">
            <h2>Uso del Editor Gutenberg</h2>
            <p>El editor Gutenberg permite agregar bloques de contenido como párrafos, imágenes, vídeos, y más. Para agregar un bloque, haz clic en el botón (+) en la esquina superior izquierda del editor.</p>
            
        </div>

        <!-- Sección para cambiar el idioma del sitio -->
        <div class="instructions-section">
            <h2>Cambiar el Idioma del Sitio</h2>
            <ol>
                <li>Ve a <strong>Ajustes > Generales</strong>.</li>
                <li>En la sección "Idioma del sitio", selecciona el idioma deseado.</li>
                <li>Haz clic en <strong>Guardar cambios</strong>.</li>
            </ol>
            
        </div>

        <!-- Sección sobre permalinks -->
        <div class="instructions-section">
            <h2>No Tocar los Permalinks</h2>
            <p>Es importante no modificar los permalinks ya que puede afectar la estructura de las URL de tu sitio y causar errores 404.</p>
            
        </div>

        <!-- Sección de gestión de usuarios -->
        <div class="instructions-section">
            <h2>Gestión de Usuarios</h2>
            <h3>Crear un Nuevo Usuario</h3>
            <ol>
                <li>Ve a <strong>Usuarios > Añadir nuevo</strong>.</li>
                <li>Rellena los campos necesarios y selecciona el rol del usuario.</li>
                <li>Haz clic en <strong>Añadir nuevo usuario</strong>.</li>
            </ol>
            

            <h3>Editar un Usuario</h3>
            <ol>
                <li>Ve a <strong>Usuarios > Todos los usuarios</strong>.</li>
                <li>Haz clic en el nombre del usuario que deseas editar.</li>
                <li>Realiza los cambios necesarios y haz clic en <strong>Actualizar usuario</strong>.</li>
            </ol>
            
        </div>

        <!-- Sección de gestión de páginas -->
        <div class="instructions-section">
            <h2>Gestión de Páginas</h2>
            <h3>Crear una Página</h3>
            <ol>
                <li>Ve a <strong>Páginas > Añadir nueva</strong>.</li>
                <li>Introduce el título y el contenido de la página.</li>
                <li>Haz clic en <strong>Publicar</strong>.</li>
            </ol>
            

            <h3>Editar una Página</h3>
            <ol>
                <li>Ve a <strong>Páginas > Todas las páginas</strong>.</li>
                <li>Haz clic en el título de la página que deseas editar.</li>
                <li>Realiza los cambios necesarios y haz clic en <strong>Actualizar</strong>.</li>
            </ol>
            
        </div>

        <!-- Sección para cambiar la contraseña -->
        <div class="instructions-section">
            <h2>Cambiar la Contraseña</h2>
            <ol>
                <li>Ve a <strong>Usuarios > Tu perfil</strong>.</li>
                <li>Desplázate hacia abajo hasta la sección "Gestión de la cuenta".</li>
                <li>Haz clic en <strong>Generar contraseña</strong> y escribe la nueva contraseña.</li>
                <li>Haz clic en <strong>Actualizar perfil</strong>.</li>
            </ol>
            
        </div>

        <!-- Sección de gestión de comentarios -->
        <div class="instructions-section">
            <h2>Gestión de Comentarios</h2>
            <h3>Moderación de Comentarios</h3>
            <ol>
                <li>Ve a <strong>Comentarios</strong> en el menú de administración.</li>
                <li>Pasa el cursor sobre un comentario y haz clic en <strong>Aprobar</strong>, <strong>Responder</strong>, <strong>Editar</strong> o <strong>Eliminar</strong>.</li>
            </ol>
            
        </div>

        <!-- Sección de actualización de plugins y temas -->
        <div class="instructions-section">
            <h2>Actualización de Plugins y Temas</h2>
            <ol>
                <li>Ve a <strong>Escritorio > Actualizaciones</strong>.</li>
                <li>Selecciona los plugins y temas que deseas actualizar.</li>
                <li>Haz clic en <strong>Actualizar plugins</strong> o <strong>Actualizar temas</strong>.</li>
            </ol>
            
        </div>

        <!-- Sección de backup del sitio -->
        <div class="instructions-section">
            <h2>Backup del Sitio</h2>
            <p>Para realizar copias de seguridad del sitio, utiliza un plugin de backup como UpdraftPlus o BackWPup. Sigue las instrucciones del plugin para configurar y realizar copias de seguridad.</p>
            
        </div>

        <!-- Sección de seguridad del sitio -->
        <div class="instructions-section">
            <h2>Seguridad del Sitio</h2>
            <p>Para mejorar la seguridad del sitio, sigue estos consejos:</p>
            <ul>
                <li>Usa contraseñas fuertes y cámbialas regularmente.</li>
                <li>Mantén WordPress, los plugins y los temas actualizados.</li>
                <li>Utiliza un plugin de seguridad como Wordfence o Sucuri.</li>
            </ul>
            
        </div>

        <!-- Sección de uso de widgets -->
        <div class="instructions-section">
            <h2>Uso de Widgets</h2>
            <ol>
                <li>Ve a <strong>Apariencia > Widgets</strong>.</li>
                <li>Arrastra los widgets a las áreas de widgets disponibles.</li>
                <li>Configura los ajustes del widget según sea necesario y haz clic en <strong>Guardar</strong>.</li>
            </ol>
            
        </div>

        <!-- Sección de configuración de menús -->
        <div class="instructions-section">
            <h2>Configuración de Menús</h2>
            <ol>
                <li>Ve a <strong>Apariencia > Menús</strong>.</li>
                <li>Crea un nuevo menú o selecciona uno existente.</li>
                <li>Añade elementos al menú desde las páginas, entradas, categorías o enlaces personalizados.</li>
                <li>Organiza los elementos del menú arrastrándolos y haz clic en <strong>Guardar menú</strong>.</li>
            </ol>
            
        </div>

        <!-- Sección de uso de shortcodes -->
        <div class="instructions-section">
            <h2>Uso de Shortcodes</h2>
            <p>Si tu tema o plugins proporcionan shortcodes, puedes utilizarlos para agregar contenido especial. Simplemente introduce el shortcode en el editor de la entrada o página.</p>
            
        </div>

        <!-- Sección de SEO básico -->
        <div class="instructions-section">
            <h2>SEO Básico</h2>
            <p>Para mejorar el SEO de tu sitio, sigue estos consejos básicos:</p>
            <ul>
                <li>Usa títulos y descripciones meta únicos y descriptivos.</li>
                <li>Optimiza las imágenes con textos alternativos (alt) descriptivos.</li>
                <li>Utiliza un plugin de SEO como Yoast SEO o All in One SEO.</li>
            </ul>
            
        </div>

        <!-- Sección de gestión de productos WooCommerce -->
        <div class="instructions-section">
            <h2>Gestión de Productos WooCommerce</h2>
            <h3>Crear un Producto</h3>
            <ol>
                <li>Ve a <strong>Productos > Añadir nuevo</strong>.</li>
                <li>Introduce el nombre del producto y una descripción detallada.</li>
                <li>Selecciona la categoría del producto en la sección "Categorías de producto".</li>
                <li>Sube una imagen del producto en la sección "Imagen del producto".</li>
                <li>Configura el precio y las opciones de inventario en la sección "Datos del producto".</li>
                <li>Haz clic en <strong>Publicar</strong>.</li>
            </ol>
            <h3>Editar un Producto</h3>
            <ol>
                <li>Ve a <strong>Productos > Todos los productos</strong>.</li>
                <li>Haz clic en el nombre del producto que deseas editar.</li>
                <li>Realiza los cambios necesarios en la descripción, precio, inventario, etc.</li>
                <li>Haz clic en <strong>Actualizar</strong>.</li>
            </ol>
            
            <h3>Borrar un Producto</h3>
            <ol>
                <li>Ve a <strong>Productos > Todos los productos</strong>.</li>
                <li>Pasa el cursor sobre el producto que deseas borrar y haz clic en <strong>Papelera</strong>.</li>
            </ol>
        </div>

        <!-- Sección de gestión de productos reservables WooCommerce Bookings -->
        <div class="instructions-section">
            <h2>Gestión de Productos Reservables WooCommerce Bookings</h2>
            <h3>Crear un Producto Reservable</h3>
            <ol>
                <li>Ve a <strong>Productos > Añadir nuevo</strong>.</li>
                <li>Introduce el nombre del producto y una descripción detallada.</li>
                <li>En la sección "Datos del producto", selecciona <strong>Producto reservable</strong>.</li>
                <li>Configura las opciones básicas del producto:
                    <ul>
                        <li><strong>Generales:</strong> Define el precio base y si el producto tiene un costo adicional por bloque de tiempo reservado.</li>
                        <li><strong>Reservas:</strong> Configura la duración de la reserva (por hora, día, etc.) y la disponibilidad (fechas y horarios específicos).</li>
                        <li><strong>Restricciones:</strong> Establece restricciones de tiempo entre reservas, cantidad máxima de reservas por persona, y otros parámetros específicos.</li>
                        <li><strong>Costes:</strong> Configura precios adicionales por persona o por recurso.</li>
                        <li><strong>Personas:</strong> Activa esta opción si el producto requiere definir un número de personas para la reserva, con precios específicos.</li>
                        <li><strong>Recursos:</strong> Añade y configura recursos adicionales necesarios para la reserva.</li>
                    </ul>
                </li>
                <li>Selecciona la categoría del producto en la sección "Categorías de producto".</li>
                <li>Sube una imagen del producto en la sección "Imagen del producto".</li>
                <li>Haz clic en <strong>Publicar</strong>.</li>
            </ol>
            
            <h3>Crear un Alojamiento Reservable</h3>
            <ol>
                <li>Ve a <strong>Productos > Añadir nuevo</strong>.</li>
                <li>Introduce el nombre del alojamiento y una descripción detallada.</li>
                <li>En la sección "Datos del producto", selecciona <strong>Alojamiento</strong>.</li>
                <li>Configura las opciones básicas del alojamiento:
                    <ul>
                        <li><strong>Generales:</strong> Define el precio por noche y si el alojamiento tiene un costo adicional por huésped o recurso.</li>
                        <li><strong>Reservas:</strong> Configura la duración mínima y máxima de la estancia, y la disponibilidad del alojamiento.</li>
                        <li><strong>Restricciones:</strong> Establece restricciones de tiempo entre reservas, cantidad máxima de reservas por persona, y otros parámetros específicos.</li>
                        <li><strong>Costes:</strong> Configura precios adicionales por persona o por recurso.</li>
                        <li><strong>Personas:</strong> Activa esta opción si el alojamiento requiere definir un número de huéspedes, con precios específicos.</li>
                        <li><strong>Recursos:</strong> Añade y configura recursos adicionales necesarios para la estancia.</li>
                    </ul>
                </li>
                <li>Selecciona la categoría del alojamiento en la sección "Categorías de producto".</li>
                <li>Sube una imagen del alojamiento en la sección "Imagen del producto".</li>
                <li>Haz clic en <strong>Publicar</strong>.</li>
            </ol>
            
            <h3>Crear un Servicio Reservable</h3>
            <ol>
                <li>Ve a <strong>Productos > Añadir nuevo</strong>.</li>
                <li>Introduce el nombre del servicio y una descripción detallada.</li>
                <li>En la sección "Datos del producto", selecciona <strong>Producto reservable</strong>.</li>
                <li>Configura las opciones básicas del servicio:
                    <ul>
                        <li><strong>Generales:</strong> Define el precio base y si el servicio tiene un costo adicional por bloque de tiempo reservado.</li>
                        <li><strong>Reservas:</strong> Configura la duración de la reserva (por hora, día, etc.) y la disponibilidad (fechas y horarios específicos).</li>
                        <li><strong>Restricciones:</strong> Establece restricciones de tiempo entre reservas, cantidad máxima de reservas por persona, y otros parámetros específicos.</li>
                        <li><strong>Costes:</strong> Configura precios adicionales por persona o por recurso.</li>
                        <li><strong>Personas:</strong> Activa esta opción si el servicio requiere definir un número de personas para la reserva, con precios específicos.</li>
                        <li><strong>Recursos:</strong> Añade y configura recursos adicionales necesarios para el servicio.</li>
                    </ul>
                </li>
                <li>Selecciona la categoría del servicio en la sección "Categorías de producto".</li>
                <li>Sube una imagen del servicio en la sección "Imagen del producto".</li>
                <li>Haz clic en <strong>Publicar</strong>.</li>
            </ol>


        <!-- Sección de FAQs en formato de acordeón -->
        <div class="instructions-section">
            <h2>FAQs (Preguntas Frecuentes)</h2>
            <div class="accordion">
                <!-- Pregunta 1 -->
                <div class="accordion-item">
                    <button id="accordion-button-1" aria-expanded="false">
                        <span class="accordion-title">¿Cómo puedo cambiar mi contraseña?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>Ve a <strong>Usuarios > Tu perfil</strong> y desplázate hacia abajo hasta la sección "Gestión de la cuenta". Haz clic en <strong>Generar contraseña</strong>, escribe la nueva contraseña y haz clic en <strong>Actualizar perfil</strong>.</p>
                    </div>
                </div>
                <!-- Pregunta 2 -->
                <div class="accordion-item">
                    <button id="accordion-button-2" aria-expanded="false">
                        <span class="accordion-title">¿Cómo puedo restaurar una copia de seguridad?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>Utiliza el mismo plugin de backup que usaste para crear la copia de seguridad y sigue las instrucciones para restaurar tu sitio.</p>
                    </div>
                </div>
                <!-- Pregunta 3 -->
                <div class="accordion-item">
                    <button id="accordion-button-3" aria-expanded="false">
                        <span class="accordion-title">¿Cómo puedo añadir un nuevo usuario?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>Ve a <strong>Usuarios > Añadir nuevo</strong>, completa los campos necesarios y haz clic en <strong>Añadir nuevo usuario</strong>.</p>
                    </div>
                </div>
                <!-- Pregunta 4 -->
                <div class="accordion-item">
                    <button id="accordion-button-4" aria-expanded="false">
                        <span class="accordion-title">¿Cómo puedo subir imágenes?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>Ve a <strong>Medios > Añadir nuevo</strong> y arrastra tus archivos a la ventana o haz clic en "Seleccionar archivos".</p>
                    </div>
                </div>
                <!-- Pregunta 5 -->
                <div class="accordion-item">
                    <button id="accordion-button-5" aria-expanded="false">
                        <span class="accordion-title">¿Cómo puedo actualizar plugins y temas?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>Ve a <strong>Escritorio > Actualizaciones</strong>, selecciona los plugins y temas que deseas actualizar y haz clic en "Actualizar plugins" o "Actualizar temas".</p>
                    </div>
                </div>
                <!-- Pregunta 6 -->
                <div class="accordion-item">
                    <button id="accordion-button-6" aria-expanded="false">
                        <span class="accordion-title">¿Cómo puedo cambiar el idioma del sitio?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>Ve a <strong>Ajustes > Generales</strong>, selecciona el idioma deseado en la sección "Idioma del sitio" y haz clic en "Guardar cambios".</p>
                    </div>
                </div>
                <!-- Pregunta 7 -->
                <div class="accordion-item">
                    <button id="accordion-button-7" aria-expanded="false">
                        <span class="accordion-title">¿Cómo puedo crear una nueva página?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>Ve a <strong>Páginas > Añadir nueva</strong>, introduce el título y el contenido de la página, y haz clic en "Publicar".</p>
                    </div>
                </div>
                <!-- Pregunta 8 -->
                <div class="accordion-item">
                    <button id="accordion-button-8" aria-expanded="false">
                        <span class="accordion-title">¿Cómo puedo crear una nueva entrada?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>Ve a <strong>Entradas > Añadir nueva</strong>, introduce el título y el contenido de la entrada, selecciona una categoría y haz clic en "Publicar".</p>
                    </div>
                </div>
                <!-- Pregunta 9 -->
                <div class="accordion-item">
                    <button id="accordion-button-9" aria-expanded="false">
                        <span class="accordion-title">¿Cómo puedo gestionar los comentarios?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>Ve a <strong>Comentarios</strong>, pasa el cursor sobre un comentario y elige "Aprobar", "Responder", "Editar" o "Eliminar".</p>
                    </div>
                </div>
                <!-- Pregunta 10 -->
                <div class="accordion-item">
                    <button id="accordion-button-10" aria-expanded="false">
                        <span class="accordion-title">¿Cómo puedo configurar los menús?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>Ve a <strong>Apariencia > Menús</strong>, añade elementos al menú desde las páginas, entradas, categorías o enlaces personalizados, organiza los elementos y haz clic en "Guardar menú".</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Estilos CSS -->
    <style>
        .wrap h1 {
            color: #0073aa; /* Color del título principal */
            border-bottom: 1px solid #ccc; /* Línea debajo del título */
            padding-bottom: 10px; /* Espacio debajo del título */
        }
        .wrap h2 {
            color: #23282d; /* Color de los títulos secundarios */
            margin-top: 20px; /* Margen superior */
        }
        .wrap h3 {
            color: #444; /* Color de los títulos terciarios */
            margin-top: 15px; /* Margen superior */
        }
        .wrap p, .wrap ul, .wrap ol {
            font-size: 14px; /* Tamaño de la fuente */
            line-height: 1.6; /* Altura de línea */
        }
        .wrap ul {
            list-style-type: disc; /* Estilo de lista no ordenada */
            padding-left: 20px; /* Espacio a la izquierda */
        }
        .wrap ol {
            list-style-type: decimal; /* Estilo de lista ordenada */
            padding-left: 20px; /* Espacio a la izquierda */
        }
        .wrap ul li, .wrap ol li {
            margin-bottom: 10px; /* Margen inferior de los elementos de lista */
        }
        .instructions-box {
            background: #f1f1f1; /* Fondo de la caja de contacto */
            border: 1px solid #ccc; /* Borde de la caja de contacto */
            padding: 20px; /* Espacio interno */
            margin-bottom: 20px; /* Margen inferior */
            border-radius: 5px; /* Bordes redondeados */
        }
        .instructions-box h2 {
            margin-top: 0; /* Sin margen superior */
        }
        .instructions-section {
            border: 1px solid #eee; /* Borde de las secciones */
            padding: 20px; /* Espacio interno */
            margin-bottom: 20px; /* Margen inferior */
            border-radius: 5px; /* Bordes redondeados */
            background: #fff; /* Fondo blanco */
        }
        .accordion {
            border: 1px solid #eee; /* Borde del acordeón */
            border-radius: 5px; /* Bordes redondeados */
        }
        .accordion-item {
            border-bottom: 1px solid #eee; /* Borde inferior de los elementos del acordeón */
        }
        .accordion-item button {
            width: 100%; /* Ancho completo */
            background: #f9f9f9; /* Fondo de los botones del acordeón */
            border: none; /* Sin borde */
            padding: 15px; /* Espacio interno */
            text-align: left; /* Texto alineado a la izquierda */
            font-size: 16px; /* Tamaño de la fuente */
            cursor: pointer; /* Cursor de puntero */
            transition: background 0.3s ease; /* Transición de fondo */
        }
        .accordion-item button[aria-expanded="true"] {
            background: #e2e2e2; /* Fondo de los botones cuando están expandidos */
        }
        .accordion-item button .icon {
            float: right; /* Ícono flotando a la derecha */
            transition: transform 0.3s ease; /* Transición de rotación del ícono */
        }
        .accordion-item button[aria-expanded="true"] .icon {
            transform: rotate(90deg); /* Rotación del ícono cuando está expandido */
        }
        .accordion-content {
            padding: 15px; /* Espacio interno del contenido del acordeón */
            display: none; /* Contenido oculto por defecto */
        }
        .accordion-content p {
            margin: 0; /* Sin margen */
        }
        .thumbnail {
            width: 100px; /* Ancho de la miniatura */
            height: auto; /* Altura automática */
            margin-top: 10px; /* Margen superior */
            cursor: pointer; /* Cursor de puntero */
        }
        .modal {
            display: none; /* Modal oculto por defecto */
            position: fixed; /* Posición fija */
            z-index: 1; /* En la parte superior */
            left: 0;
            top: 0;
            width: 100%; /* Ancho completo */
            height: 100%; /* Altura completa */
            overflow: auto; /* Habilitar desplazamiento si es necesario */
            background-color: rgb(0,0,0); /* Fondo oscuro */
            background-color: rgba(0,0,0,0.9); /* Fondo oscuro con opacidad */
        }
        .modal-content {
            margin: auto; /* Centrar vertical y horizontalmente */
            display: block;
            width: 80%; /* Ancho del contenido del modal */
            max-width: 700px; /* Ancho máximo */
        }
.modal-content img {
    width: 100%; /* Ancho completo */
    height: auto; /* Altura automática */
}
        .close {
            position: absolute; /* Posición absoluta */
            top: 50px;
            right: 35px;
            color: #fff; /* Color del ícono de cerrar */
            font-size: 40px; /* Tamaño del ícono de cerrar */
            font-weight: bold; /* Grosor del ícono de cerrar */
            transition: 0.3s; /* Transición suave */
        }
        .close:hover,
        .close:focus {
            color: #bbb; /* Color del ícono de cerrar al pasar el mouse */
            text-decoration: none; /* Sin subrayado */
            cursor: pointer; /* Cursor de puntero */
        }
    </style>

    <!-- Script JavaScript para el comportamiento del acordeón y las imágenes -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const accordionButtons = document.querySelectorAll('.accordion-item button');
            const thumbnails = document.querySelectorAll('.thumbnail');
            const modal = document.createElement('div');
            modal.classList.add('modal');
            document.body.appendChild(modal);

            const modalContent = document.createElement('div');
            modalContent.classList.add('modal-content');
            modal.appendChild(modalContent);

            const closeModal = document.createElement('span');
            closeModal.classList.add('close');
            closeModal.innerHTML = '&times;';
            modal.appendChild(closeModal);

            closeModal.addEventListener('click', function () {
                modal.style.display = 'none';
            });

            accordionButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const isExpanded = this.getAttribute('aria-expanded') === 'true';
                    accordionButtons.forEach(btn => btn.setAttribute('aria-expanded', 'false'));
                    if (!isExpanded) {
                        this.setAttribute('aria-expanded', 'true');
                    }
                    const content = this.nextElementSibling;
                    accordionButtons.forEach(btn => btn.nextElementSibling.style.display = 'none');
                    if (!isExpanded) {
                        content.style.display = 'block';
                    }
                });
            });

            thumbnails.forEach(thumbnail => {
                thumbnail.addEventListener('click', function () {
                    modalContent.innerHTML = `<img src="${this.src}" alt="${this.alt}">`;
                    modal.style.display = 'block';
                });
            });
        });
    </script>
    <?php
}
