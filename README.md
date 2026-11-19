#  Control de Biblioteca

Aplicación web desarrollada en **PHP**, **MySQL**, **HTML**, **CSS** y **JavaScript** para registrar nuevos libros y consultar el inventario disponible en una base de datos.

## Características principales

* Registro de libros mediante formulario (`título`, `autor` e `ISBN`).
* Validación en el cliente antes de enviar los datos al servidor (campos obligatorios y longitud mínima del ISBN).
* Consulta de libros ordenados de forma descendente en una tabla de inventario.
* Indicador visual del estado del libro (`Disponible` o `Prestado`) y diseño adaptable en pantallas pequeñas.

## Estructura del proyecto

* `index.php`: Conexión a la base de datos, consulta de libros e interfaz principal en HTML con formulario y tabla de inventario.
* `guardar.php`: Procesa las peticiones `POST`, escapa los datos recibidos e inserta el nuevo registro en la tabla `libros`.
* `script.js`: Valida el formulario al enviarlo y muestra una alerta cuando se completa un registro exitoso (`?success=1`).
* `styles.css`: Define los estilos visuales, variables CSS, cuadrícula principal y reglas responsivas.

## Configuración y uso

1. Asegúrate de tener una base de datos MySQL con la tabla `libros` configurada.
2. Verifica o actualiza los datos de conexión (`$servidor`, `$usuario`, `$password`, `$base_datos`) en `index.php` y `guardar.php`.
3. Sube los archivos a tu servidor local o alojamiento web compatible con PHP y abre `index.php` en el navegador.
![bibliotecaa](https://plus.unsplash.com/premium_photo-1681487796280-9c5dbd20eb46?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8YmlibGlvdGVjYSUyMGRpZ2l0YWx8ZW58MHx8MHx8fDA=)
