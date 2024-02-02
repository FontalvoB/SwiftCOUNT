## Documentation
La finalidad de este proyecto consiste en llevar un control para la visualización, la creación, la edición y la eliminación de tareas. Entre los requerimientos solicitados, se solicitó implementar la autentificación básica de php artisan make:auth, sin embargo, esta no fue posible debido a que en Laravel 8 y versiones posteriores, la estructura del sistema de autenticación cambió, y el comando php artisan make:auth fue retirado. Buscando otras alternativas de autenticación, se implementó el paquete Jetstream para proporcionar características avanzadas y flexibilidad en la implementación de autenticación.
## URL PARA VISUALIZAR EL PROYECTO: 

CONFIGURACIÓN

-Clonar el repositorio
-Instalar composer o actualizarlo
-Realizar las migraciones
-Configurar el .env con las credenciales de su base de datos
-Correr el programa con el comando php artisan serve

AUTENTIFICACIÓN

-Dirigirse a la parte superior derecha en la opción 'Register'
-Crear un usuario para poder entrar a la Dashboard en la que se encontrará la tabla con las tareas
-Una vez dentro de la dashboard, tiene las opciones de agregar una nueva tarea, eliminar o editar una de las tareas existentes.
