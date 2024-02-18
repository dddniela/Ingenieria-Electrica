<?php

require_once "Conexion.php";

class Materia
{
    private $materiaId;
    private $programaId;
    private $especialidadId;
    private $nombre;
    private $area;
    private $semestre;
    private $competencia;
    private $urlVideo;
    private $urlPrograma;
    private $status;
    private $connection;

    public function setConnection($conn)
    {
        $this->connection = $conn;
    }

    function icono($Area)
    {
        $ruta_img = "";
        switch ($Area) {
            case 'Programacion':
                $ruta_img = 'programacion.PNG';
                break;
            case 'Asignaturas Comunes':
                $ruta_img = 'asignaturas-comunes.PNG';
                break;
            case 'Instrumentacion':
                $ruta_img = 'instrumentacion.png';
                break;
            case 'Electromagnetismo':
                $ruta_img = 'electromagnetismo.png';
                break;
            case 'Electronica':
                $ruta_img = 'electronica.png';
                break;
            case 'Ingenieria':
                $ruta_img = 'ingenieria.PNG';
                break;
            case 'Circuito Electrico':
                $ruta_img = 'circuitoElectrico.png';
                break;
            case 'Calculo':
                $ruta_img = 'calculo.PNG';
                break;
            case 'Estadistica':
                $ruta_img = 'estadistica.PNG';
                break;
            case 'Red':
                $ruta_img = 'red.png';
                break;
            case 'Investigacion':
                $ruta_img = 'investigacion.PNG';
                break;
            case 'Energia':
                $ruta_img = 'energia.png';
                break;
            case 'Maquinas':
                $ruta_img = 'maquinas.png';
                break;
            case 'Administracion':
                $ruta_img = 'administracion.PNG';
                break;
            case 'Quimica':
                $ruta_img = 'quimica.png';
                break;
            case 'Materiales':
                $ruta_img = 'materiales.png';
                break;
            case 'Instalaciones':
                $ruta_img = 'instalaciones.png';
                break;
            case 'Sistemas Integrados':
                $ruta_img = 'sistemasIntegrados.png';
                break;
            case 'Control':
                $ruta_img = 'control.png';
                break;
            case 'Etica':
                $ruta_img = 'etica.png';
                break;
            case 'Dibujo':
                $ruta_img = 'dibujo.png';
                break;
            case 'Fisica':
                $ruta_img = 'fisica.png';
                break;
            case 'Electro Analogica':
                $ruta_img = 'electroAnalogica.png';
                break;
            case 'Sustentable':
                $ruta_img = 'sustentable.png';
                break;
            case 'Transformadores':
                $ruta_img = 'transformadores.png';
                break;
            case 'Mecanica':
                $ruta_img = 'mecanica.png';
                break;
            case 'Microcontroladores':
                $ruta_img = 'microcontroladores.png';
                break;
            case 'Diodos':
                $ruta_img = 'diodos.png';
                break;
            case 'PLC':
                $ruta_img = 'plc.png';
                break;
            case 'Proyectos':
                $ruta_img = 'proyectos.png';
                break;
            case 'Comunicaciones':
                $ruta_img = 'comunicaciones.png';
                break;
            default:
                $ruta_img = 'circuloDeLectura.PNG';
                break;
        }
        $type = pathinfo($ruta_img, PATHINFO_EXTENSION);
        $urlImagen = file_get_contents($GLOBALS['PATH_ICONO'] . $ruta_img);
        $urlImagen = 'data:image/' . $type . ';base64,' . base64_encode($urlImagen);
        return $urlImagen;
    }


    public function getMateriasBySemestre($semestre)
    {
        $url =  $GLOBALS['api'] . '/api/materia/getMateriasBySemestre';

        $headers = ['Content-Type: application/json'];
        $data = [
            'programaId' => $GLOBALS['programaId'],
            'semestre' => $semestre,
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    function imprimir($semestre)
    {
        $materias = $this->getMateriasBySemestre($semestre);

        $tabla = "<div class='row justify-content-md-start justify-content-center'>";

        foreach ($materias['data'] as $materia) {
            $materiaId = $materia['materiaId'];
            $nombre = $materia['nombre'];
            $competencia = $materia['competencia'];
            $area = $materia['area'];
            $urlVideo = $materia['urlVideo'];
            $urlPrograma = $materia['urlPrograma'];
            $ruta_img = $this->icono($area);

            // Cuadro de materia
            $tabla .= "<div class='col-lg-4 col-md-6 col-sm-9 col-9 p-4 h-100 justify-content-center rounded-3'>
                <div class='row azul-medio' style='height: 88px;'>
                    <div class='d-flex justify-content-center h-100'>
                        <h5 class='text-white align-self-center rounded-top text-center font-semibold py-3'>$nombre</h5>
                    </div>
                </div>
                <div class='row bg-light overflow-hidden d-none d-sm-flex' style='height: 110px;'>
                    <div class='col-md-3 col-12 justify-content-center align-items-start'>
                        <div class='d-flex flex-row justify-content-center align-items-start h-100'>
                            <img class='h-16 p-1 mt-4 ms-4' src='$ruta_img' alt=''>
                        </div>
                    </div>
                    <div class='col-md-9 col-12 justify-content-center align-items-center'>
                        <div class='d-flex flex-row justify-content-center align-items-center h-100 text-wrap'>
                            <p class='text-sm mx-4 my-2' style='text-align: justify;'>$competencia</p>
                        </div>
                    </div>
                </div>  
                <div class='row bg-light'>
                    <div class='col-12 my-2 justify-content-center'>
                        <div class='d-flex p-2 justify-content-center align-items-center'>
                        <button type='button' class='btn btn-warning font-bold' data-bs-toggle='modal'
                            data-bs-target='#modalReticula' 
                                    data-materia ='$nombre' 
                                    data-videoMateria ='$urlVideo' 
                                    data-descMateria ='$competencia'
                                    data-urlMateria ='$urlPrograma'
                                    data-id='$materiaId'
                                    onclick='youtubePlay(this)'>
                                    Ver más </button>
                                </div>
                            </div>
                        </div>
                    </div>";
        }
        $tabla .= "</div>";

        return $tabla;
    }

    function imprimir1erSemestre()
    {
        return $this->imprimir(1);
    }

    function imprimir2doSemestre()
    {
        return $this->imprimir(2);
    }

    function imprimir3erSemestre()
    {
        return $this->imprimir(3);
    }

    function imprimir4toSemestre()
    {
        return $this->imprimir(4);
    }

    function imprimir5toSemestre()
    {
        return $this->imprimir(5);
    }

    function imprimir6toSemestre()
    {
        return $this->imprimir(6);
    }

    function imprimir7moSemestre()
    {
        return $this->imprimir(7);
    }

    function imprimir8voSemestre()
    {
        return $this->imprimir(8);
    }

    function imprimir9noSemestre()
    {
        return $this->imprimir(9);
    }
}
