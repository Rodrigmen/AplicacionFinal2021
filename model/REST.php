<?php

/**
 * Class REST
 *
 * Clase cuyo métodos métodos permiten obtener información de APIs
 * 
 * @author Rodrigo Robles Miñambres
 * @copyright 28-01-2021
 * @version 1.0
 */
class REST {

    /**
     * Obtiene información de la API de la Nasa
     * 
     * Esta función se encarga de obtener y descodificar un .json con los datos recibidos 
     * tras una consulta a la API con un parámetro insertado. En este caso introduces una fecha y
     * obtienes una imagen con su respectivo título descripción
     * 
     * 
     * @link https://api.nasa.gov/ API usada
     * @access public
     * @param $fecha Fecha formato (Y-m-d) 
     * @return array Array con los valores del .json
     */
    public static function sevicioAPOD($fecha) {
        return json_decode(file_get_contents("https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY&date=$fecha"), true);
    }

    /**
     * Obtiene información de una API de la NBA
     * 
     * Esta función se encarga de obtener y descodificar un .json con los datos recibidos 
     * tras una consulta a la API con un parámetro insertado. En este caso introduces un número
     * y obtienes las características de un equipo
     * 
     * 
     * @link https://www.balldontlie.io/ API usada
     * @access public
     * @param $number Número entero del 1 al 30
     * @return array Array con los valores del .json
     */
    public static function sacarEquipo($number) {
        return json_decode(file_get_contents("https://www.balldontlie.io/api/v1/teams/$number"), true);
    }

    /**
     * Obtiene información de una mi propia API
     * 
     * Esta función se encarga de obtener y descodificar un .json con los datos recibidos 
     * tras una consulta a la API con un parámetro insertado. En este caso introduces una cadena de
     * texto en minúscula y la obtienes en mayúscula
     * 
     * 
     * @access public
     * @param $cadena Cadena de texto introducida en minúscula
     * @return array Array con los valores del .json
     */
    public static function mayusculas($cadena) {
        return json_decode(file_get_contents("https://daw218.ieslossauces.es/proyectoDWES/AplicacionFinal2021/api/aMayusculas.php?cadena=$cadena"), true);
    }

}
