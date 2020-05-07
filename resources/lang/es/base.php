<?php

return [
    'validation_error' => 'Hubo un error en uno o más campos en la solicitud.',
    'errors' => [
        'return' => 'Volver a la página anterior',
        'home' => 'Ir al inicio',
        '403' => [
            'header' => 'Acceso denegado',
            'desc' => 'No tienes permiso para acceder a esta página.',
        ],
        '404' => [
            'header' => 'Archivo no encontrado',
            'desc' => 'No pudimos localizar el recurso solicitado en el servidor.',
        ],
        'installing' => [
            'header' => 'Instalando servidor',
            'desc' => 'Este servidor se está instalando. Por favor, vuelva en unos segundos, deberías recibir un correo cuando el proceso esté completo.',
        ],
        'suspended' => [
            'header' => 'Servidor suspendido',
            'desc' => 'Este servidor se encuentra suspendido y no se puede acceder a él.',
        ],
        'maintenance' => [
            'header' => 'Nodo en mantenimiento',
            'title' => 'No disponible temporalmente',
            'desc' => 'Este nodo está en mantenimiento. No podrás acceder a tu servidor temporalmente.',
        ],
    ],
    'index' => [
        'header' => 'Tus servidores',
        'header_sub' => 'Servidores a los que tienes acceso.',
        'list' => 'Lista de servidores',
    ],
    'api' => [
        'index' => [
            'list' => 'Tus claves',
            'header' => 'Cuentas API',
            'header_sub' => 'Controle las credenciales de acceso para administrar este panel.',
            'create_new' => 'Crear nueva clave de API',
            'keypair_created' => 'Una clave de API se ha generado y está listada abajo.',
        ],
        'new' => [
            'header' => 'Nueva clave API',
            'header_sub' => 'Crea una nueva clave de acceso a la cuenta.',
            'form_title' => 'Detalles',
            'descriptive_memo' => [
                'title' => 'Descripción',
                'description' => 'Escribe una descripción breve para esta clave para ser usada como referencia.',
            ],
            'allowed_ips' => [
                'title' => 'IP permitidas',
                'description' => 'Ingrese una lista delimitada por líneas de IP que pueden acceder a la API con esta clave. Se permite la notación CIDR. Déjelo en blanco para permitir cualquier IP.',
            ],
        ],
    ],
    'account' => [
        'details_updated' => 'Los detalles de tu cuenta se han actualizado correctamente.',
        'invalid_password' => 'La contraseña especificada de tu cuenta no es válida.',
        'header' => 'Tu cuenta',
        'header_sub' => 'Administra los detalles de tu cuenta.',
        'update_pass' => 'Cambiar contraseña',
        'update_email' => 'Cambiar correo eléctronico',
        'current_password' => 'Contraseña actual',
        'new_password' => 'Nueva contraseña',
        'new_password_again' => 'Repita la nueva contraseña',
        'new_email' => 'Nuevo correo eléctronico',
        'first_name' => 'Nombre',
        'last_name' => 'Apellido',
        'update_identity' => 'Actualizar identidad',
        'username_help' => 'Tu nombre de usuario debe ser único y solo puede contener los siguientes caracteres: :requirements.',
        'language' => 'Idioma',
    ],
    'security' => [
        'session_mgmt_disabled' => 'El host no ha activado la función para administrar las sesiones de cuenta a través de esta interfaz.',
        'header' => 'Seguridad de la Cuenta',
        'header_sub' => 'Controla las sesiones activas y la autenticación en dos pasos.',
        'sessions' => 'Sesiones activas',
        '2fa_header' => 'Autenticación en dos pasos',
        '2fa_token_help' => 'Escribe el token 2FA generado por tu app (Google Authenticator, Authy, etc.).',
        'disable_2fa' => 'Deshabilitar autenticación en dos pasos',
        '2fa_enabled' => 'Autenticación en dos pasos está habilitado en esta cuenta y será requerido un código para loguearte. Si quieres desactivar la autenticación en dos pasos, simplemente entra un token válido abajo y presiona Enter.',
        '2fa_disabled' => 'Autenticación en dos pasos está deshabilitado en tu cuenta. Deberías activarla para añadir más protección a tu cuenta.',
        'enable_2fa' => 'Habilitar autenticación en dos pasos',
        '2fa_qr' => 'Configurar autenticación en dos pasos en tu dispositivo',
        '2fa_checkpoint_help' => 'Utiliza la aplicación de autenticación en dos pasos en tu dispositivo para escanear el código QR en la izquierda, o manualmente introduce el código aquí abajo. Una vez hecho, genera un token e introducelo debajo.',
        '2fa_disable_error' => 'El token de autenticación en dos pasos no es válido. La protección no ha sido desactivada.',
    ],
];