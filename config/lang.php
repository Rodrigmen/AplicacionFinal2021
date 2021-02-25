<?php

if (isset($_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'])) {
    $usuarioActual = $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'];
}

$aLang = [
    'es' => [
        'user' => 'Usuario',
        'password' => 'Contraseña',
        'login' => 'Iniciar Sesión',
        'signup' => '¿Eres nuevo? Registrate aquí',
        'logoff' => 'Cerrar Sesión',
        'start' => 'Inicio',
        'registration' => 'Registro',
        'welcome' => 'Bienvenido/a ' . (isset($usuarioActual) ? $usuarioActual->getDescUsuario() : null),
        'numConnections' => 'Se ha conectado ' . (isset($usuarioActual) ? $usuarioActual->getNumConexiones() : null) . ' veces',
        'numConnectionsWelcome' => 'Esta es la primera vez que se conecta',
        'lastConnection' => 'Última conexión: ' . (isset($usuarioActual) ? date('d/m/Y H:i:s', $usuarioActual->getFechaHoraUltimaConexion()) : null),
        'editProfile' => 'Editar Perfil',
        'description' => 'Descripción',
        'confirmPassword' => 'Repite la contraseña',
        'cancel' => 'Cancelar',
        'description' => 'Descripción',
        'profile' => 'Perfil',
        'NumConex' => 'Número de conexiones',
        'DateLastConex' => 'Fecha de la última conexión',
        'accept' => 'Aceptar',
        'deleteAccount' => 'Borrar Cuenta',
        'documentation' => 'Documentación',
        'stwebsite' => 'Página Web del Alumno',
        'imitation' => 'Página Imitada por Alumno',
        'return' => 'Volver',
        'tools' => 'Herramientas y tecnologías utilizadas',
        'uppercase' => 'A mayúsculas',
        'maintenance' => 'Mantenimiento Departamentos',
        'search' => 'Buscar',
        'insert' => 'Insertar Departamento',
        'code' => "Código",
        "volume" => "Volumen"
    
    ],
    'en' => [
        'user' => 'User',
        'password' => 'Password',
        'login' => 'Login',
        'signup' => 'Are you new? Sign up here',
        'logoff' => 'Logoff',
        'start' => 'Start',
        'registration' => 'Registration',
        'welcome' => 'Welcome ' . (isset($usuarioActual) ? $usuarioActual->getDescUsuario() : null),
        'numConnections' => 'You have connected ' . (isset($usuarioActual) ? $usuarioActual->getNumConexiones() : null) . ' times',
        'numConnectionsWelcome' => 'This is the first time you connect',
        'lastConnection' => 'Last connection: ' . (isset($usuarioActual) ? date('d/m/Y H:i:s', $usuarioActual->getFechaHoraUltimaConexion()) : null),
        'editProfile' => 'Edit Profile',
        'description' => 'Description',
        'confirmPassword' => 'Repeat the password',
        'cancel' => 'Cancel',
        'edit' => 'Edit',
        'description' => 'Description',
        'profile' => 'Profile',
        'NumConex' => 'Number of connections',
        'DateLastConex' => 'Date of last connection',
        'accept' => 'Accept',
        'deleteAccount' => 'Delete Account',
        'documentation' => 'Documentation',
        'stwebsite' => 'Student Website',
        'imitation' => 'Page Imitated By Student',
        'return' => 'Return',
        'tools' => 'Tools and technologies used',
        'uppercase' => 'Uppercase',
        'maintenance' => 'Maintenance Departments',
        'search' => 'Search',
        'insert' => 'Insert Departament',
        'code' => "Code",
        "volume" => "Volume"
    ]
];
?>