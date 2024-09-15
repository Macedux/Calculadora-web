# Calculadora-web
Repositorio para el apartado de trabajo en equipo de los ejercicios del T1 de Desplegue aplicaciones web


Vais a desarrollar una sencilla aplicación web de tipo calculadora. Debe ser lo más básica posible,
pero debe contar con una interfaz web que permita introducir 2 números y realizar operaciones
de suma, resta, multiplicación o división y mostrar el resultado. El proyecto deberá tener 3
ramas, una rama para la interfaz, otra para realizar la suma y la resta, y otra para realizar la
multiplicación y la división. Una vez estén todas las ramas finalizadas, se deberá hacer un merge
a la rama main.

Deberéis crear un repositorio de GitHub para realizar los ejercicios.
1. Inicializar el repositorio y configurar el entorno
o Uno de los integrantes del equipo (A) crea un nuevo repositorio en GitHub llamado
calculadora-web y lo inicializa con un archivo README.md. Luego, clona el
repositorio en su máquina local e invita al otro integrante (B) como colaborador.
o Clonar el repositorio en la máquina local de B.
2. Estructurar el proyecto
o “A” crea la estructura inicial del proyecto en la rama main con los archivos y carpetas
necesarios para una aplicación web simple (HTML, CSS, y PHP).
▪ index.html para la interfaz de usuario.
▪ styles.css para el estilo.
▪ calculadora.php para manejar las operaciones de la calculadora.
3. Crear las ramas de trabajo
o “A” crea tres ramas adicionales desde main:
▪ funcionalidad/interfaz
▪ funcionalidad/suma-resta
▪ funcionalidad/multiplicacion-division
4. Implementar la interfaz
o “B” cambia a la rama funcionalidad/interfaz y desarrolla la interfaz de usuario en
index.html, incluyendo un formulario con dos campos numéricos y botones para las
operaciones de suma, resta, multiplicación y división, así como un campo para el
resultado.
5. Implementar suma y resta
o “A” cambia a la rama funcionalidad/suma-resta y desarrolla las funcionalidades de
suma y resta en calculadora.php, asegurándose de que se manejen las solicitudes
del formulario de index.html
6. Implementar multiplicación y división
o “B” cambia a la rama funcionalidad/multiplicacion-division y desarrolla las
funcionalidades de multiplicación y división en calculadora.php, asegurándose de
que se manejen las solicitudes del formulario de index.html.
7. Revisión y merge de la interfaz
o “A” revisa los cambios en la rama funcionalidad/interfaz, realiza un merge a main y
resuelve cualquier conflicto.
8. Revisión y merge de suma y resta
o “B” revisa los cambios en la rama funcionalidad/suma-resta, realiza un merge a main
y resuelve cualquier conflicto.
9. Revisión y merge de multiplicación y división
o “A” revisa los cambios en la rama funcionalidad/multiplicacion-division, realiza un
merge a main y resuelve cualquier conflicto.
10. Merge final y prueba de la aplicación
o Ambos integrantes se aseguran de que la rama main tiene la última versión del
código de todas las ramas, realizan pruebas finales de la aplicación, y actualizan el
archivo README.md con instrucciones de uso.
Pruebas
1. Prueba la aplicación en localhost. Hazlo de dos formas, con el servidor web Apache y con el
servidor web incorporado (built-in) de PHP.
2. Prueba la aplicación en la máquina virtual Ubuntu (accede primero desde el navegador de
Ubuntu y luego desde el navegador de la máquina host). Hazlo también de dos formas, con
el servidor web Apache y con el servidor web incorporado (built-in) de PHP.
3. Crea un Docker personalizado con tu aplicación y luego ejecútalo en localhost (hazlo de
manera similar a cómo lo has hecho en el ejemplo práctico del Tema 1).
