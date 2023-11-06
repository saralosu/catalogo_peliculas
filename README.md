# catalogo_peliculas
# Instalar Dependencias
#
# Navega al directorio del proyecto y ejecuta:
# composer install
#
# Iniciar el Servidor
# symfony serve
#
# Acceder a la Aplicación
# Abre tu navegador y visita http://localhost:8000
#
# Uso de la Aplicación
# Listar Todas las Películas:
# GET http://localhost:8000/peliculas
#
# Filtrar por Título:
# GET http://localhost:8000/peliculas/filtrar/titulo/{titulo}
# http://localhost:8000/peliculas/filtrar/titulo/seven
#
# Filtrar por Fecha publicacion:
# GET http://localhost:8000/peliculas/filtrar/fecha/{fecha}
#
# Filtrar por Valoración Mayor o Igual:
# GET http://localhost:8000/peliculas/filtrar/valoracion/mayor/{valoracion}
#
# Filtrar por Valoración Menor o Igual:
# GET http://localhost:8000/peliculas/filtrar/valoracion/menor/{valoracion}
#
# Entidad Película: Creamos una entidad llamada Pelicula para guardar información importante sobre una película, como su título, fecha de publicacion y valoración. Tambien añadimos la estructura de la base datos para mapearla en el futuro.
#
# Almacén de Películas (Repositorio): Creamos un repositorio PeliculaRepository donde podemos guardar y buscar películas. Tambien se crearon los filtros que se usarian si hubiera bbdd.
#
# Creamos un controlador para poder crear y devolver la response.
#
# Cosas que Podría Mejorar: Usar templates para gestionar de forma visual (navegador) las peliculas. Añadir usuario para poder hacer una autenticación básica con token. Crear y trabajar base de datos. Pedir datos por consola en vez de hardcodear las peliculas

