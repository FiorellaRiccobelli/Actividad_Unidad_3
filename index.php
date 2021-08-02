<?php
    // Actividad Obligatoria N° 3 PHP
    // Crear una clase que tenga 5 atributos y 3 métodos
    // Esto queda realizado a continuación


    class Juegos{

        //5 atributos
        public $nombre;
        public $nivel_dificultad;
        public $tipo; //acción, aventuras, historia, etc.
        public $precio;
        public $gratis;
        
        //agrego 1 atributo extra para crear usar en el método "tiempoTotal"
        public $cantidadNiveles;

        // Realizo un constructor para carga rápida de datos en objetos

        public function __construct($nombre, $dificultad, $tipo, $precio, $gratis, $cantidad){
            $this -> nombre = $nombre;
            $this -> nivel_dificultad = $dificultad;
            $this -> tipo = $tipo;
            $this -> precio = $precio;
            $this -> gratis = $gratis;
            $this -> cantidadNiveles = $cantidad;
        }

        //3 Métodos
        //Método 1: Muestra información del juego.
        public function mostrarInfo(){
            echo "<h4><u>Información del Juego</u></h4><br>
            El nombre del Juego es: ".$this->nombre.".<br> 
            El nivel de dificultad del Juego es: ".$this->nivel_dificultad.".<br>
            El genero del Juego corresponde a: ".$this->tipo.".<br> 
            El precio del Juego es: ".$this->precio." pesos.<br>
            El Juego tiene: ".$this->cantidadNiveles." niveles. <br><br>";
        }

        //Método 2: Pregunta si el juego es gratuito e imprime por pantalla.
        public function esGratis(){
            if($this->gratis == true){
                echo "Este juego se descarga de internet gratis.<br><br>";
            }else{
                echo "Este juego no es gratis. Para obtenerlo, debe abonar ".$this->precio." pesos.<br><br>";
            }
            
        }

        //Método 3: Calcula el tiempo en horas para realizar una cantidad de niveles ingresada por parámetro.

        public function tiempoTotal($cantidad_a_jugar){
            $tiempo_min = $cantidad_a_jugar*15; //se calculan 15 minutos por nivel.
            $tiempo_horas = $tiempo_min/60;
            
            echo "El tiempo que le llevará jugar ".$cantidad_a_jugar." niveles es de: ".$tiempo_horas." horas."; //
        }


    }

    // A partir de la clase creada en el punto anterior crear 2 objetos
    // Instanciar objetos a partir de la clase principal "Juegos"

    $juego1 = new Juegos("Pacman", 2, "Aventuras", 200, false, 375); 
    $juego2 = new Juegos("Tetris", 3, "Aventuras", 0, true, 10);

    // Imprimo por pantalla y lo ordeno con la etiqueta "pre"

    echo "<h3><u>Visualización de los objetos creados</u></h3><pre>";
        var_dump($juego1);
    echo"</pre>";

    echo "<pre>";
        var_dump($juego2);
    echo"</pre><hr>";

    //Imprimo métodos para Juego 1
    $juego2->mostrarInfo();
    $juego2->esGratis();
    $juego2->tiempoTotal(150); //Quiero saber cuanto tiempo en horas me va a llevar jugar 150 niveles 


    // Crear una clase que herede de la clase principal

    class JuegosAccion extends Juegos{

    }
    
    //Creo un nuevo juego de acción a partir de la subclase "JuegosAccion", el cual debe heredar los métodos de la clase principal "Juegos"

    $nuevo_juego= new JuegosAccion("Call of duty", 5, "Acción", 500, false, 200); 

    //Compruebo herencia utilizando métodos de la clase principal en un nuevo objeto ($nuevo_juego) instanciado de esta subclase:
    echo "<hr><h3><u>Visualización de información de Subclase <i>Juegos de acción</i></u></h3>";
    $nuevo_juego->mostrarInfo();
    $nuevo_juego->esGratis();
    $nuevo_juego->tiempoTotal(10); //Quiero saber cuanto tiempo en horas me va a llevar jugar 150 niveles 

?>