<?php

namespace App;

enum RoleEnum: string
{
    case Administrador = 'Administrador';
    case GerenteDeProyecto = 'Gerente de Proyecto';
    case LiderDeEquipo = 'Líder de Equipo';
    case MiembroDelEquipo = 'Miembro del Equipo';
    case Stakeholder = 'Stakeholder';
    case Cliente = 'Cliente';
}
