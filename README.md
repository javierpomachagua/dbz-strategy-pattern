# Patrón de Diseño Strategy con Personajes de Dragon Ball Z
Si quieres probar el código, clónalo y ejecuta el index.php
## Problemas
- Tenemos personajes como Dende que no pueden atacar, pero aún así tenemos que sobreescribir el método dado que hereda la clase "Character".
- El ataque Hamekameha se repite tanto en Goku como en Krilin ya que ambos pueden usarlo.
- No podemos asignar dinámicamente o en tiempo de ejecución un nuevo ataque algún personaje ya que todo lo ponemos en el mismo código.

## Solución
En cada commit se ve reflejado el proceso de cómo pasamos de un código que no usa el patrón strategy hasta el último commit donde utilizamos el patrón y mejora la flexibilidad de nuestro código.
