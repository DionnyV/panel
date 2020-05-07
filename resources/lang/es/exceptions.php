<?php

return [
    'daemon_connection_failed' => 'Hubo un error al intentar comunicarse con el daemon resultando en un error HTTP/:code response code. Este error ha sido registrado.',
    'node' => [
        'servers_attached' => 'El nodo no debe poseer servidores añadidos para poder ser eliminado.',
        'daemon_off_config_updated' => 'La configuración del daemon <strong>ha sido actualizada</strong>, sin embargo ocurrió un error al intentar actualizar automáticamente el archivo de configuración. Deberás actualizar manualmente el archivo de configuración (core.json) para aplicar los cambios.',
    ],
    'allocations' => [
        'server_using' => 'Actualmente hay un servidor asignado a esta asignación. Una asignación solo se puede eliminar si no hay un servidor asignado actualmente.',
        'too_many_ports' => 'Agregar más de 1000 puertos en solo rango a la vez no está soportado.',
        'invalid_mapping' => 'La asignación proporcionada para :port no es válida y no se puede procesar.',
        'cidr_out_of_range' => 'La notación CIDR solo permite máscaras entre /25 y /32.',
        'port_out_of_range' => 'Los puertos en una asignación deben ser mayor que 1024 y menor o igual a 65535.',
    ],
    'nest' => [
        'delete_has_servers' => 'Un Nest con servidores activos anexados no se puede eliminar del Panel.',
        'egg' => [
            'delete_has_servers' => 'Un Egg con servidores activos anexados no se puede eliminar del panel.',
            'invalid_copy_id' => 'El Egg seleccionado para copiar una secuencia de comandos no existe o está copiando una secuencia de comandos en sí.',
            'must_be_child' => 'La directiva "Copiar configuración de" para este Egg debe ser una opción secundaria para el Nest seleccionado.',
            'has_children' => 'Este Egg es padre de uno o más Egg. Elimine esos Egg antes de eliminar este Egg.',
        ],
        'variables' => [
            'env_not_unique' => 'La variable de entorno :name debe ser única de este Egg.',
            'reserved_name' => 'La variable de entorno :name está protegida y no se puede asignar a una variable.',
            'bad_validation_rule' => 'La regla de validación ":rule" no es una regla válida para esta aplicación.',
        ],
        'importer' => [
            'json_error' => 'Se produjo un error al intentar analizar el archivo JSON: :error.',
            'file_error' => 'El archivo JSON proporcionado no era válido.',
            'invalid_json_provided' => 'El archivo JSON proporcionado no está en un formato que pueda ser reconocido.',
        ],
    ],
    'packs' => [
        'delete_has_servers' => 'No se puede eliminar un paquete que está anexado a servidores activos.',
        'update_has_servers' => 'No se puede modificar la ID de la opción asociada cuando los servidores están actualmente anexados a un paquete.',
        'invalid_upload' => 'El archivo proporcionado no parece ser válido.',
        'invalid_mime' => 'El archivo proporcionado no cumple con el tipo requerido :type',
        'unreadable' => 'El archivo proporcionado no pudo ser abierto por el servidor.',
        'zip_extraction' => 'Se encontró una excepción al intentar extraer el archivo proporcionado en el servidor.',
        'invalid_archive_exception' => 'El archivo de paquete proporcionado parece faltar un archivo archive.tar.gz o import.json necesario en el directorio base.',
    ],
    'subusers' => [
        'editing_self' => 'No puedes editar tu propia cuenta de sub-usuario.',
        'user_is_owner' => 'No puedes añadir al dueño del servidor como un sub-usuario para este servidor.',
        'subuser_exists' => 'Un usuario con este correo eléctronico ya está asignado como sub-usuario para este servidor.',
    ],
    'databases' => [
        'delete_has_databases' => 'No se puede eliminar un servidor host de base de datos que tenga bases de datos activas vinculadas a él.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'El tiempo de intervalo máximo para una tarea encadenada es de 15 minutos.',
    ],
    'locations' => [
        'has_nodes' => 'No se puede eliminar una ubicación que tenga nodos activos anexados.',
    ],
    'users' => [
        'node_revocation_failed' => 'Error al revocar claves en <a href=":link">Nodo #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'No se pudieron encontrar nodos que satisfagan los requisitos especificados para la implementación automática.',
        'no_viable_allocations' => 'No se encontraron asignaciones que satisfagan los requisitos para la implementación automática.',
    ],
    'api' => [
        'resource_not_found' => 'El recurso solicitado no existe en este servidor.',
    ],
];
