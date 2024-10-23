# Guía de Comandos Utilizados en el Proyecto

Este documento ofrece una breve explicación de los comandos utilizados para gestionar el proyecto mediante Git y Docker. Los comandos están agrupados por su funcionalidad para facilitar su comprensión.

## Gestión de Versiones con Git

### `git add .`
Este comando agrega todos los archivos nuevos o modificados en el directorio de trabajo al área de preparación de Git. Es útil para preparar los cambios que quieres incluir en el próximo commit.

### `git status`
Muestra el estado actual del repositorio, indicando qué archivos han sido modificados, agregados al área de preparación, o no están siendo rastreados por Git.

### `git commit -m "Mensaje"`
Crea un snapshot de los cambios en el repositorio. El mensaje entre comillas debe describir brevemente lo que se ha cambiado o agregado en este commit.

### `git push -u origin main`
Sube los commits locales al repositorio remoto en la rama `main`. La opción `-u` establece una relación de seguimiento entre la rama local y la remota, lo que facilita futuros `git push`.

### `git pull`
Actualiza la rama local con los últimos cambios de la rama remota. Si hay conflictos entre la versión local y la remota, Git pedirá que los resuelvas.

### `git config pull.rebase true`
Configura Git para utilizar `rebase` en lugar de `merge` al realizar un `git pull`. Esto reordena los commits locales sobre los nuevos commits obtenidos de la rama remota, manteniendo un historial de commits más limpio y lineal.

### `git pull --rebase`
Realiza un `pull` con la opción de `rebase`, aplicando los commits locales sobre los nuevos commits obtenidos de la rama remota.

## Manejo de Docker

### `docker --version`
Muestra la versión instalada de Docker. Es útil para asegurarse de que Docker está instalado y para verificar la compatibilidad con ciertos archivos `docker-compose.yml`.

### `docker compose up --build`
Construye las imágenes Docker si es necesario y luego levanta los contenedores definidos en el archivo `docker-compose.yml`. Específicamente, la opción `--build` fuerza la reconstrucción de las imágenes antes de levantar los contenedores.

### `docker compose up -d`
Levanta los contenedores en segundo plano (modo "detached"), lo que permite que sigan ejecutándose sin bloquear la terminal.

### `docker compose down`
Apaga y elimina los contenedores, redes y volúmenes definidos en `docker-compose.yml`. Esto es útil cuando necesitas detener el entorno de desarrollo.

### `docker compose exec [container_name] bash` y `chmod -R 777 [path]`
Estos comandos se usan en conjunto para acceder al contenedor y ajustar los permisos de archivos y carpetas dentro del contenedor Docker.

- **`docker compose exec [container_name] bash`**: Accede al shell Bash dentro de un contenedor en ejecución. Esto te permite ejecutar comandos directamente en el contenedor.
- **`chmod -R 777 [path]`**: Una vez dentro del contenedor, este comando ajusta los permisos de un directorio (y todos sus subdirectorios y archivos) para que todos los usuarios tengan permisos de lectura, escritura y ejecución.

Este enfoque es útil, por ejemplo, para ajustar permisos en directorios como `wp-content/uploads` en un contenedor de WordPress, asegurando que el servidor web pueda leer y escribir archivos correctamente.

## Gestión de Archivos y Configuración en Git

### `.gitignore`
Este archivo especifica qué archivos o directorios deben ser ignorados por Git, evitando que se agreguen al repositorio. Es útil para excluir archivos temporales, dependencias, o configuraciones locales.




Para ignorar un archivo sin agregarlo a `.gitignore` y sin que se suba al repositorio, puedes utilizar la opción de ignorarlo de manera local con el siguiente comando:

```bash
git update-index --assume-unchanged <ruta_del_archivo>
```

### Pasos:

1. Ejecuta el comando para indicar que quieres asumir que el archivo no ha cambiado:
   ```bash
   git update-index --assume-unchanged <ruta_del_archivo>
   ```

   Esto evitará que Git monitoree los cambios en ese archivo en tu repositorio local. Sin embargo, el archivo seguirá existiendo en el repositorio, simplemente Git no lo marcará como modificado.

### Si necesitas revertir esto:

Si en algún momento deseas que Git vuelva a monitorear el archivo, puedes utilizar el siguiente comando:

```bash
git update-index --no-assume-unchanged <ruta_del_archivo>
```

Con esto, Git volverá a seguir los cambios en el archivo como de costumbre.

### Advertencias:
- Este método solo funciona en tu repositorio local. Si alguien más clona el repositorio, no tendrá el archivo ignorado a menos que también lo configure de esta manera.
- Es útil para archivos de configuración específicos que no quieres compartir ni modificar accidentalmente, pero que existen en el repositorio.




## Resumen

- **Git**: Usado para controlar las versiones del proyecto, realizar commits, sincronizar con el repositorio remoto, y gestionar la configuración de cómo se integran los cambios.
- **Docker**: Usado para construir, ejecutar, y gestionar contenedores que encapsulan el entorno de desarrollo, asegurando que el proyecto se ejecute de manera consistente en diferentes sistemas.
- **Acceso y Permisos en Contenedores Docker**: En algunos casos, es necesario acceder directamente a un contenedor y ajustar los permisos de archivos y directorios para garantizar un correcto funcionamiento, especialmente en entornos web.

Este glosario ofrece una visión general de los comandos esenciales utilizados en el proyecto, proporcionando un marco claro para entender cómo gestionar el código y el entorno de desarrollo.
