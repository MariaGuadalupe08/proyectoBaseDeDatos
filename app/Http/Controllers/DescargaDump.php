<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class DescargaDump extends Controller {

    public function restaurar()
    {
        // Nombre de la base de datos
        $base = config('database.connections.mysql.database');

        // Ruta donde guardar la copia de respaldo (ajusta la ruta según tu preferencia)
        $archiresp = 'C:\xampp\htdocs\ProyectoLaravel\respaldo.sql';

        // Comando para realizar la copia de respaldo utilizando mysqldump
        $command = "mysqldump -u " . config('database.connections.mysql.username') . " -p" . config('database.connections.mysql.password') . " " . $base . " > " . $archiresp;

        // Ejecutar el comando
        exec($command);

        return "Copia de respaldo de la base de datos creada con éxito.";
    }
    }


