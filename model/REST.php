<?php

/**
 * @author Susana Fabián Antón
 * @since 26/01/2021
 * @version 26/01/2021
 */
class REST {

    /**
     * Llama al servicio API REST APOD(Astronomy Picture of the Day), que nos devuelve la imagen atronómica del
     * día e información relativa a esta.
     * 
     * @param type $fecha la fecha que le vamos a pasar al servicio para que busque una imagen.
     * @return type array que contiene información sobre la imagen astronómica del día. 
     */
    public static function sevicioAPOD($fecha) {
        error_reporting(0);
        return json_decode(file_get_contents("https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY&date=$fecha"), true);
        //llamamos al servicio, pasándole la fecha al campo date, y decodificamos el json que nos devuelve
    }

    public static function sacarEquipo($number) {
        error_reporting(0);
        return json_decode(file_get_contents("https://www.balldontlie.io/api/v1/teams/$number"), true);
        //llamamos al servicio, pasándole la fecha al campo date, y decodificamos el json que nos devuelve
    }

}
