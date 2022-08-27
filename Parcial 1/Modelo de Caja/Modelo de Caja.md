# Definición de Modelo de Caja  
El modelo de caja (box model) es seguramente la característica más importante del lenguaje de css Ya que es el comportamiento de css que hace que todos los elementos de las páginas se representen mediante cajas regulares


las cajas de una página se crean automáticamente. cada vez que se inserta una etiqueta HTML.  
Los navegadores crean y colocan las cajas de forma automática, pero CSS permite modificar todas sus características. Cada una de las cajas está formada por seis partes.

### ¿Qué es el modelo de cajas CSS?
El modelo de cajas CSS completo se aplica a cajas que presentan comportamiento en bloque; las cajas con comportamiento en línea solo usan una parte del comportamiento definido en el modelo de cajas.  El modelo define cómo funcionan juntas las diferentes partes de una caja (margen, borde, relleno y contenido) para crear una caja que puedas ver en tu página.  
Para complicarlo un poco más, hay un modelo de cajas estándar y un modelo de cajas alternativo.

* Contenido (content): se trata del contenido HTML del elemento (las palabras de un párrafo, una imagen, el texto de una lista de elementos, etc.)
* Relleno (padding): espacio libre opcional existente entre el contenido y el borde.
* Borde (border): línea que encierra completamente el contenido y su relleno.
Imagen de fondo (background image): imagen que se muestra por detrás del contenido y el espacio de relleno.
* Color de fondo (background color): color que se muestra por detrás del contenido y el espacio de relleno.
* Margen (margin): separación opcional existente entre la caja y el resto de cajas adyacentes.

### El modelo de cajas CSS estándar
En el modelo de cajas estándar, cuando estableces los atributos width y height para una caja, defines el ancho y el alto del contenido de la caja.  
Cualquier área de relleno y borde se añade a ese ancho y alto para obtener el tamaño total que ocupa la caja.  
Si suponemos que la caja tiene el CSS siguiente, que establece los valores para las propiedades width, height, margin, border, y padding:
 

>El espacio que ocupa nuestra caja usando el modelo de cajas estándar será en realidad de 410 px (350 + 25 + 25 + 5 + 5); y su altura, de 210 px (150 + 25 + 25 + 5 + 5), porque el área de relleno y el borde se añaden al ancho que se utiliza para el contenido de la caja.

#### El modelo de cajas CSS alternativo
Podrías pensar que es más bien incómodo tener que sumar el borde y el área de relleno para obtener el tamaño real de la caja, ¡y tienes razón! Por este motivo, CSS introdujo un modelo de caja alternativo algún tiempo después del modelo de cajas estándar. Con este modelo, cualquier ancho es el ancho de la caja visible en la página, por lo tanto, el ancho del área de contenido es ese ancho menos el ancho para el relleno y el borde.  
El mismo CSS que hemos usado antes daría entonces el resultado siguiente (ancho = 350 px, altura = 150 px).

>los navegadores usan el modelo de cajas estándar. Si deseas activar el modelo de cajas alternativo para un elemento, hazlo configurando box-sizing: border-box
 
