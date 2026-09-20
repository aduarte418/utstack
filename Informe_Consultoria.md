# Informe Técnico de Consultoría

1. Cliente vs. Servidor

En primer lugar es pertinente diferenciar entre el código ejecutado en el navegador del usuario (cliente en este caso) y el procesado por el servidor remoto. En el lado del cliente, el navegador descarga y ejecuta los ficheros que constituyen la página web, a nivel de estructura (HTML), estilo visual (CSS) y funciones de la web (a través de Javascript) para así mostrar al usuario la interfaz funcional completa del sitio, sin necesidad de consultar al servidor.
Por otro lado, la parte del servidor recibe las peticiones que realice el usuario a través de la interfaz dispuesta en el lado del cliente, encargándose de procesarlas (a través de PHP por ejemplo), accediendo a la base de datos y modificando sus registros si fuese necesario, para posteriomente devolver el HTML actualizado tras solventar la petición del usuario. Este proceso es invisible para el usuario hasta que el nuevo documento HTML es devuelto, permitiendo así gestionar internamente peticiones habituales como el inicio de sesión en una aplicación.

Cabe destacar también la Regla de Oro por la que nunca hay que confiar en el cliente en lo que a seguridad web se refiere, ya que la información que proviene del usuario debe tratarse como insegura por defecto, y sólo deberá considerarse fiable y segura una vez haya sido validada por el servidor tras gestionar la petición del usuario a través del navegador.


2. Web Estática vs. Dinámica

La principal diferencia entre páginas web estáticas y dinámicas reside en la manera de procesar el documento HTML que el usuario percibe. Así, una web estática entrega el mismo HTML a todos los usuarios, proporcionando simplicidad y rapidez pero sin ofrecer flexibilidad. Carga siempre la misma estructura y estilo, sin procesar datos de un servidor y/o base de datos, siendo esta filosofía habitual en portfolios o landing pages fijas (como las github pages).
En contraste, las páginas web dinámicas se caracterizan porque un servidor genera el documento HTML que ve el usuario, adaptando el contenido de la web en función de los datos y/o peticiones de éste; consulta la base de datos y los modifica en tiempo real si es necesario para ofrecer una respuesta personalizada (por ejemplo, iniciar sesión en una aplicación recuperando y validando usuario y contraseña o actualizar el carrito de la compra del cliente en una tienda online). 
Esto hace que, pese a no ser tan rápidas de cargar y cachear, las páginas web dinámicas supongan una notable ventaja frente a las estáticas al ofrecer una gran adaptabilidad a las necesidades y peticiones de los usuarios, permitiendo así gestionar eficazmente operaciones a la orden del día como la compra online.


3. La Infraestructura (Servicios)

El rol principal de un servidor web (como Apache o Nginx) consiste en devolver los ficheros que proporcionan la información de una página web al usuario que ha realizado la petición al propio servidor. Un servidor debe contar con un mecanismo de ejecución que le permita procesar el fichero.   
En contraposición al antiguo sistema de ejecución CGI (Common Gateway Interface), que ponía en marcha un proceso por cada petición realizada al servidor, con el coste de recursos que ello implica, la aproximación evolucionó hacia sistemas más modernos y eficientes como PHP-FPM (pool de procesos). Este modelo permite que el servidor reciba la petición y después actúe en función del archivo que debe devolver. Por tanto, si es un archivo estático (como un portfolio que en definitiva es una web con un HTML y CSS definido), el servidor devolverá dichos archivos inmediatamente, mientras que si es un archivo PHP que necesite de la operación del servidor, éste lo envía al gestor de procesos (PHP-FPM) para entonces interpretar la solicitud y procesarla, devolviendo pues el resultado de este último procedimiento. Así, se puede gestionar eficazmente la petición del usuario, devolviendo el contenido de la página y permitiendo intepretar los scripts de PHP para dar respuesta a las peticiones, teniendo en cuenta que también llevará más tiempo configurarlo correctamente.

Por su parte, Laravel es el framework de servidor más popular de PHP, que proporciona una estructura predefinida así como una serie de herramientas que favorecen un desarrollo más rápido y certero de acuerdo a las prácticas de la industria de software. Entre sus características destaca el mapeo objeto-relacional (ORM) que permite acceder a los datos mediante PHP, la herramienta Artisan CLI de línea de comandos para generar código, migraciones y realizar mantenimiento, control de versiones, Blade Templates para plantillas y Middleware para autenticación y validación de peticiones.


4. Evaluación de Herramientas y Frameworks.

¿Por qué usar PHP y Laravel?

PHP es el lenguaje utilizado por la gran mayoría de sitios web actuales, de modo que además de ajustarse a la tendencias en el desarrollo web, permite interpretar las peticiones de los usuarios para así dar respuestas acordes a sus necesidades, gestionando así eficazmente las operaciones mencionadas anteriormente que incluyen inicio de sesión en una aplicación o las funciones de compra online. 

Por su parte, entre las ventajas de Laravel se encuentra su limpia estrucutura de directorios que permite a los desarrolladores enfocarse en la lógica de la aplicación, permitiendo aprender progresivamente a utilizarla y agilizar el desarrollo. Otra ventaja crucial es que integra el Patrón MVC (Modelo-Vista-Controlador), que ofrece una clara separación entre responsabilidades, distinguiéndose así la el Modelo Eloquent ORM para gestionar los datos, Blade como Vista para la interfaz de la aplicación y el Controlador que opera con la lógica que permite gestionar peticiones. Esta separación favorece la solidez y escalabilidad del código. Además, Laravel gestiona protección nativa contra amenazas comunes como XSS o inyecciones SQL, sin que el desarrollador deba configurarlo explícitamente, permitiendo así construir aplicaciones robustas desde el inicio.

