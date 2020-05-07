<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'validation' => [
        'fqdn_not_resolvable' => 'El FQDN o la dirección IP proporcionada no se resuelve a una dirección IP válida.',
        'fqdn_required_for_ssl' => 'Se requiere un nombre de dominio completo que se resuelva en una dirección IP pública para utilizar SSL para este nodo.',
    ],
    'notices' => [
        'allocations_added' => 'Las asignaciones se han agregado con éxito un este nodo.',
        'node_deleted' => 'El nodo se ha eliminado con éxito del panel.',
        'location_required' => 'Debe tener al menos una ubicación configurada antes de poder agregar un nodo a este panel.',
        'node_created' => 'Nuevo nodo creado con éxito. Puede configurar automáticamente el daemon en esta máquina visitando la pestaña \'Configuración\'. <strong>Antes de poder agregar servidores, primero debe asignar al menos una dirección IP y un puerto.</strong>',
        'node_updated' => 'La información del nodo ha sido actualizada. Si se cambió alguna configuración del daemon, deberá reiniciarla para que esos cambios surtan efecto.',
        'unallocated_deleted' => 'Se eliminaron todos los puertos no asignados para <code>:ip</code>.',
    ],
];
