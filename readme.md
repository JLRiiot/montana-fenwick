## Las capas de la aplicación ?
## (por ejemplo capa de persistencia, vista, de aplicación, etc) y qué clases pertenecen a cual

La aplicación se hizo usando el patrón Modelo, Vista, Controlador en donde:
###Vista
Representada por el archivo *hello.php* se encarga de representar graficamente la información suministrada por el controlador.

###Controlador
Representada por la clase *HomeController* en el archivo *HomeController.php*. Esta clase se encarga de dar el manejo correcto a los requests correspondientes al "home" (punto de entrada de la app).

###Modelo
Representada por la clase *CubeSummation* en el archivo *CubeSummation.php*. Esta clase se encarga de implementar toda la logica de negocio ejecutando el programa creado en c++ que se puede encontrar en: [link al repositorio!](https://github.com/JLRiiot/cube-summation)


##¿En qué consiste el principio de responsabilidad única? ¿Cuál es su propósito?
Este principio consiste en que cada clase debe tener un solo propósito dependiendo le la capa a la que pertenece, así: Un modelo (User) debe encargarse unicamente de implementar la lógica de negocio (Validaciones, acceso a datos, etc).

##¿Qué características tiene según tu opinión “buen” código o código limpio?
Un código limpio debe cumplir varias características:
* Cumplir el codigo de estilos establecido
* Nombrar variables que sean descriptivas y faciles de leer
* Usar convenciones apropiadas para el lenguaje establecido
* Comentar código sin grandes parrafos de texto
* Núnca mezclar responsabilidades y usar correctamente patrones de diseño


## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)