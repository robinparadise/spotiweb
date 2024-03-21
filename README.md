# **Examen de SpotiWeb**

---

**Instrucciones:**
- Este examen consta de varias tareas relacionadas con la creación de un sitio web llamado SpotiWeb.
- Lee cuidadosamente cada tarea y sigue las instrucciones proporcionadas.
- Puedes utilizar HTML, CSS, JavaScript y PHP para completar el examen.
- Se te evaluará tanto por la precisión como por la calidad de tu código.
- ¡Buena suerte!

---

**Tarea 1 (0 puntos):** Configuración de la base de datos

Crea la base de datos `spotiweb` con una tabla `articles` que tenga los siguientes campos:
- id (int)
- title (varchar)
- category (varchar)
- description (text)
- image (varchar)

Asegúrate de que la función `populateData();` en `config.php` esté descomentada para añadir datos a la base de datos. Luego, recuerda volver a comentarla. Además, asegúrate de introducir tu usuario y contraseña de MySQL en `config.php`.

---

**Tarea 2 (4 puntos):** Página principal

Crea una página principal (`index.php`) con un grid utilizando cards de Bootstrap para mostrar los artículos de la tabla `articles`. Cada card debe mostrar el título, la categoría y la imagen del artículo.

Usa la función `getNews` en `db.php` para obtener los datos de la tabla `articles` y mostrarlos en la página principal.

Se valorará:
- La capacidad de hacer el grid responsive.
- El uso de componentes de Bootstrap para el diseño.

---

**Tarea 3 (2 puntos):** Navbar

Crea un navbar con un logo y un menú de navegación con las siguientes opciones:
- Logo
- Inicio
- Perfil

---

**Tarea 4 (2 puntos):** Página de perfil

Crea una página llamada `profile.php` que muestre un grid utilizando cards de Bootstrap para mostrar los artículos de la tabla `articles`. Cada card debe mostrar el título, la categoría y la imagen del artículo.

Usa la función `getPostNews` en `db.php` para obtener los datos de la tabla `articles` y mostrarlos en la página de perfil.

---

**Tarea 5 (2 punto):** Modal

Crea un modal que se abra al hacer clic en una card de la página principal o de la página de perfil. El modal debe mostrar la descripción del artículo y la imagen.

---


**Puntuación total: 10 puntos**

¡Buena suerte!