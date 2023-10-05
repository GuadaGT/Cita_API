<?php
    $parts = explode("/",$_SERVER["REQUEST_URI"]);

    $ruta = $parts[2];
    $identificador = (sizeof($parts)>3 ? $parts : null);

    // Centros
    $centro1=[
        "ID" => 1,
        "Nombre" => "Centro de Salud Juan XXIII",
        "Dirección" => "Calle Juan XXIII, 39, 46025, Valencia, Comunidad Valenciana",
        "Telefono" => "961923750"
    ];
    $centro2=[
        "ID" => 2,
        "Nombre" => "Centro de Salud Azucena de Benicalap",
        "Dirección" => "Calle Azucena, 9, 46025, Valencia, Comunidad Valenciana",
        "Telefono" => "963469325"
    ];
    $centro3=[
        "ID" => 1,
        "Nombre" => "Centro de Salud Economista Gay",
        "Dirección" => "Carrer de Just Ramírez, 46, 46009, Valencia, Comunidad Valenciana",
        "Telefono" => "963469525"
    ];
    $listaCentros = [];
    $listaCentros[] = $centro1;
    $listaCentros[] = $centro2;
    $listaCentros[] = $centro3;

    // Especialistas
    $especialista1=[
        "ID" => "A",
        "Nombre" => "Victoria Martinez",
        "Especialidad" => "Digestivo",
    ];
    $especialista2=[
        "ID" => "B",
        "Nombre" => "Rafael Bonafont",
        "Especialidad" => "Nefrología",
    ];
    $especialista3=[
        "ID" => "C",
        "Nombre" => "Julieta Garcia",
        "Especialidad" => "Cirugía",
    ];
    $especialista4=[
        "ID" => "D",
        "Nombre" => "Teresa Gonzalez",
        "Especialidad" => "Psiquiatría",
    ];
    $especialista5=[
        "ID" => "E",
        "Nombre" => "Jose Perez",
        "Especialidad" => "Oncología",
    ];
    $listaEspecialista = [];
    $listaEspecialista[] = $especialista1;
    $listaEspecialista[] = $especialista2;
    $listaEspecialista[] = $especialista3;
    $listaEspecialista[] = $especialista4;
    $listaEspecialista[] = $especialista5;

    // Citas
    $cita1=[
        "Fecha" => "10/01/2024",
        "Especialista" => $especialista1["Nombre"],
        "Centro" => $centro1["Nombre"],
        "Detalle" => "confirmada"
    ];
    $cita2=[
        "Fecha" => "24/01/2024",
        "Especialista" => $especialista1["Nombre"],
        "Centro" => $centro1["Nombre"],
        "Detalle" => "confirmada"
    ];
    $cita3=[
        "Fecha" => "12/02/2024",
        "Especialista" => $especialista3["Nombre"],
        "Centro" => $centro1["Nombre"],
        "Detalle" => "confirmada"
    ];
    $cita4=[
        "Fecha" => "10/11/2023",
        "Especialista" => $especialista3["Nombre"],
        "Centro" => $centro2["Nombre"],
        "Detalle" => "confirmada"
    ];
    $cita5=[
        "Fecha" => "06/12/2023",
        "Especialista" => $especialista4["Nombre"],
        "Centro" => $centro2["Nombre"],
        "Detalle" => "confirmada"
    ];
    $cita6=[
        "Fecha" => "07/11/2023",
        "Especialista" => $especialista2["Nombre"],
        "Centro" => $centro3["Nombre"],
        "Detalle" => "confirmada"
    ];
    $cita7=[
        "Fecha" => "20/01/2024",
        "Especialista" => $especialista2["Nombre"],
        "Centro" => $centro3["Nombre"],
        "Detalle" => "confirmada"
    ];
    $cita8=[
        "Fecha" => "09/12/2023",
        "Especialista" => $especialista4["Nombre"],
        "Centro" => $centro1["Nombre"],
        "Detalle" => "confirmada"
    ];
    $cita9=[
        "Fecha" => "25/10/2023",
        "Especialista" => $especialista5["Nombre"],
        "Centro" => $centro2["Nombre"],
        "Detalle" => "confirmada"
    ];
    $cita10=[
        "Fecha" => "13/11/2023",
        "Especialista" => $especialista5["Nombre"],
        "Centro" => $centro3["Nombre"],
        "Detalle" => "confirmada"
    ];
    $listacita = [];
    $listacita[] = $cita1;
    $listacita[] = $cita2;
    $listacita[] = $cita3;
    $listacita[] = $cita4;
    $listacita[] = $cita5;
    $listacita[] = $cita6;
    $listacita[] = $cita7;
    $listacita[] = $cita8;
    $listacita[] = $cita9;
    $listacita[] = $cita10;
    header("Content-Type: application/json; charset=UTF-8");

    switch($ruta)
    {
        case "centro":
            if($identificador == null)
            {
                if($_SERVER["REQUEST_METHOD"]=="GET")
                {
                    echo json_encode($listaCentros);
                    break;
                }
            }
            else{
                echo json_encode($centro1);
                break;
            }
        case "especialista":
            if($identificador == null)
            {
                if($_SERVER["REQUEST_METHOD"]=="GET")
                {
                    echo json_encode($listaEspecialista);
                    break;
                }
            }
        case "cita":
            if($identificador == null)
            {
                if($_SERVER["REQUEST_METHOD"]=="GET")
                {
                    echo json_encode($listacita);
                    break;
                }
            }
        }
?>