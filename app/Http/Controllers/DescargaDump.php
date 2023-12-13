<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class DescargaDump extends Controller {

    public function restaurar()
    {
        // Datos de BD
        $base = config('database.connections.mysql.database');
        $archiresp = 'C:\xampp\htdocs\ProyectoLaravel\base.sql';

        // Comando para realizar la copia de respaldo utilizando mysqldump
        $command = "mysqldump -u " . config('database.connections.mysql.username') . " -p" . config('database.connections.mysql.password') . " " . $base . " > " . $archiresp;

        exec($command);

        return "Copia de respaldo de la base de datos creada con éxito.";
    }
    }
