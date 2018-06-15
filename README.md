# login-codeignite
#VERSION 0.1
#Diseñado por juan carlos avila


El login es un formulario sencillo que consta de dos partes:
1.Desde el frontend se valida la estructura de los datos a enviar con AngularJS y cuando es correcto se activa el boton de "enviar"
2.Desde el backend se realizara la consulta a una base de datos para confirmar la existencia del usuario, en este caso de prueba solo va a una cuenta de prueba llamada 'fake@gmail.com' y de clave 'fake123!'

diseño del frontend:

1-recursos utilizados:
   a.AngularJS
   b.bootstrap 4
   c.animate.css
   d.jQuery
	 e.Awasome Icon
	 f.html
	 g.css


2. Recuros backend:
		Servidor APACHE 2 o superior
		PHP version 5.6 o superior (fue programado en PHP 7.1)
		codeigniter 3.18
	

Datos del frontend:
Se modificaron las vistas creando un layout de tres secciones
	a.head
	b.welcome_message
	c.footer
	
La estructura de las vistas se realizaron con html puro. bootstrap 4 le da un estilo  basico elegente y limpio. Se utilizaron las fuentes open sans y awasome icon para simbolos especiales. Animate.css le da animaciones al diseño. mejore los estilos fixeado un fondo con una buena imagen y una textura al formulario. los recuersos estan en la carpeta "lib"
	
La funcionalidad le ha sido dada por AngularJS la cual mediante a Ng-disabled limita el submit del boton de enviar. Ng-Model y Ng-directive se creo una validacion que busca la letra "@" en el input del email. Ng-show muestra u oculta las indicaciones de colocar email/contraseña dependiendo de reglas de validacion de angularJS
    
Datos del backend:
 El lenguaje utilizado para este app fue PHP con el framework "codeigniter".Los datos son analizados mediante una condicional y reenviado a la misma vista. esto permite en versiones futuras agregar una base de datos y nuevas vistas. Utilice la clase input con su metodo post para enviar los datos al controlador y el metodo "revisar realiza la operacion". Las librerias y helpers utilzados los coloque en el config/autoload.php y en config/config.php cargue la base_url, este punto es importante para el funcionamiento de AngularJS
 
 ESPERO QUE ESTO SEA TOMADO EN CUENTA AL PARA EL ANALISI FINAL DE LA PRUEBA HOY
