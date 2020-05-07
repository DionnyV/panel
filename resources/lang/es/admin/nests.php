<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'notices' => [
        'created' => 'Un nuevo nido, :name, ha sido creado con éxito.',
        'deleted' => 'Se eliminó con éxito el nido solicitado del Panel.',
        'updated' => 'Se actualizó con éxito las opciones de configuración del nido.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Importado con éxito este Huevo y sus variables asociadas.',
            'updated_via_import' => 'Este Huevo ha sido actualizado utilizando el archivo proporcionado.',
            'deleted' => 'Se eliminó con éxito el Huevo solicitado del Panel.',
            'updated' => 'Se actualizó con éxito las opciones de configuración del Huevo.',
            'script_updated' => 'El script de instalación del Huevo se ha actualizado y se ejecutará siempre que se instalen servidores.',
            'egg_created' => 'Se puso un nuevo huevo con éxito. Tendrá que reiniciar los daemons en ejecución para aplicar este nuevo huevo.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'La variable ":variable" se ha eliminado y ya no estará disponible para los servidores una vez reconstruido.',
            'variable_updated' => 'La variable ":variable" ha sido actualizada. Deberá reconstruir los servidores que utilicen esta variable para aplicar los cambios.',
            'variable_created' => 'Nueva variable se ha creado y asignado correctamente a este huevo.',
        ],
    ],
];
