<?php

return [
    'validation_error' => 'Es gab ein Problem mit einer oder mehreren deiner Eingaben.',
    'errors' => [
        'return' => 'Gehe zurück zur voherigen Seite',
        'home' => 'Gehe zur Startseite',
        '403' => [
            'header' => 'Zugriff verweigert',
            'desc' => 'Du darfst diese Seite nicht öffnen.',
        ],
        '404' => [
            'header' => 'Datei nicht gefunden',
            'desc' => 'Es scheint als würde diese Seite nicht exsistieren.',
        ],
        'installing' => [
            'header' => 'Server installiert...',
            'desc' => 'Der Server wird derzeit noch installiert bitte versuche es später erneut.',
        ],
        'suspended' => [
            'header' => 'Server gesperrt',
            'desc' => 'Dieser Server wurde von einem Administrator gesperrt.',
        ],
    ],
    'index' => [
        'header' => 'Deine Server',
        'header_sub' => 'Server auf die du Zugriff hast.',
        'list' => 'Server Liste',
    ],
    'api' => [
        'index' => [
            'header' => 'API Zugriff',
            'header_sub' => 'API-Zugriffsschlüssel bearbeiten.',
            'list' => 'API-Schlüssel',
            'create_new' => 'Neuen API-Schlüssel erstellen',
            'keypair_created' => 'Ein API-Schlüsselpaar wurde generiert. Dein API-Geheimtoken ist <code>:token</code>. Speichere ihn an einem sicheren Ort, denn er wird nur einmal angezeigt.',
        ],
        'new' => [
            'header' => 'Neuer API-Schlüssel',
            'header_sub' => 'Erstelle einen neuen API-Schlüssel',
            'form_title' => 'Details',
            'descriptive_memo' => [
                'title' => 'Kurzbeschreibung',
                'description' => 'Gib eine Kurzbeschreibung an, wofür der Schlüssel verwendet wird.',
            ],
            'allowed_ips' => [
                'title' => 'Erlaubte IPs',
                'description' => 'Gib eine durch Zeilen getrennte der IPs an, denen es erlaubt sein soll, mit diesem Schlüssel API-Zugriff zu haben. CIDR Notation ist erlaubt. Frei lassen, um jede IP zuzulassen.',
            ],
        ],
        'permissions' => [
            'user' => [
                'server_header' => 'Benutzerrechte',
                'server' => [
                    'list' => [
                        'title' => 'Server auflisten',
                        'desc' => 'Der User darf seine Serverliste ansehen.',
                    ],
                    'view' => [
                        'title' => 'Server ansehen',
                        'desc' => 'Der User darf detaillierte Informationen über seine Server sehen.',
                    ],
                    'power' => [
                        'title' => 'Statusoptionen',
                        'desc' => 'Der User darf den Server starten/stoppen/restartet.',
                    ],
                    'command' => [
                        'title' => 'Befehle senden',
                        'desc' => 'Der User hat Zugriff auf die Server Console.',
                    ],
                ],
            ],
            'admin' => [
                'server_header' => 'Server-Verwaltung',
                'server' => [
                    'list' => [
                        'title' => 'Server auflisten',
                        'desc' => 'Der User darf alle Server dieser Instanz sehen.',
                    ],
                    'view' => [
                        'title' => 'Server ansehen',
                        'desc' => 'Der User darf detaillierte Informationen zu allen Servern dieser Instanz sehen.',
                    ],
                    'delete' => [
                        'title' => 'Server löschen',
                        'desc' => 'Der User darf Server löschen.',
                    ],
                    'create' => [
                        'title' => 'Server erstellen',
                        'desc' => 'Der User darf Server erstellen.',
                    ],
                    'edit-details' => [
                        'title' => 'Server Details bearbeiten',
                        'desc' => 'Der User darf die Server Einstellungen bearbeiten.',
                    ],
                    'edit-container' => [
                        'title' => 'Server Container bearbeiten',
                        'desc' => 'Der User darf die Container Einstellungen des Servers verändern.',
                    ],
                    'suspend' => [
                        'title' => 'Server sperren',
                        'desc' => 'Der User darf Server sperren.',
                    ],
                    'install' => [
                        'title' => 'Installationsstatus bearbeiten',
                        'desc' => 'Der User darf den Installationsstatus bearbeiten',
                    ],
                    'rebuild' => [
                        'title' => 'Server neuerstellen',
                        'desc' => 'Der User darf den Server neuerstellen',
                    ],
                    'edit-build' => [
                        'title' => 'Servereinstellungen bearbeiten',
                        'desc' => 'Der User darf Server-Einstellungen bearbeiten.',
                    ],
                    'edit-startup' => [
                        'title' => 'Serverstart bearbeiten',
                        'desc' => 'Der User darf die Startparameter ändern.',
                    ],
                ],
                'location_header' => 'Location-Verwaltung',
                'location' => [
                    'list' => [
                        'title' => 'Locations auflisten',
                        'desc' => 'Der User darf alle Locations sehen.',
                    ],
                ],
                'node_header' => 'Node-Verwaltung',
                'node' => [
                    'list' => [
                        'title' => 'Nodes auflisten',
                        'desc' => 'Der User darf alle nodes sehen',
                    ],
                    'view' => [
                        'title' => 'Node ansehen',
                        'desc' => 'Der User darf detaillierte Details einer Node sehen',
                    ],
                    'view-config' => [
                        'title' => 'Node-Einstellungen ansehen',
                        'desc' => 'Achtung! Der User kann die Konfiguration einer Node sehen.',
                    ],
                    'create' => [
                        'title' => 'Node erstellen',
                        'desc' => 'Der User kann Nodes erstellen.',
                    ],
                    'delete' => [
                        'title' => 'Node löschen',
                        'desc' => 'Der User kann Nodes löschen.',
                    ],
                ],
                'user_header' => 'User-Verwaltung',
                'user' => [
                    'list' => [
                        'title' => 'User auflisten',
                        'desc' => 'Der User kann alle User sehen.',
                    ],
                    'view' => [
                        'title' => 'User ansehen',
                        'desc' => 'Der User kann detaillierte Informationen der User sehen.',
                    ],
                    'create' => [
                        'title' => 'User erstellen',
                        'desc' => 'Der User kann User erstellen.',
                    ],
                    'edit' => [
                        'title' => 'User bearbeiten',
                        'desc' => 'Der User kann User bearbeiten.',
                    ],
                    'delete' => [
                        'title' => 'User löschen',
                        'desc' => 'Der User kann User löschen.',
                    ],
                ],
                'service_header' => 'Service-Verwaltung',
                'service' => [
                    'list' => [
                        'title' => 'Services auflisten',
                        'desc' => 'Der User kann alle Services sehen.',
                    ],
                    'view' => [
                        'title' => 'Services ansehen',
                        'desc' => 'Der User kann detaillierte Informationen über Services sehen.',
                    ],
                ],
                'option_header' => 'Optionsverwaltung',
                'option' => [
                    'list' => [
                        'title' => 'Optionen auflisten',
                        'desc' => '',
                    ],
                    'view' => [
                        'title' => 'Option ansehen',
                        'desc' => '',
                    ],
                ],
                'pack_header' => 'Pack-Verwaltung',
                'pack' => [
                    'list' => [
                        'title' => 'Packs auflisten',
                        'desc' => '',
                    ],
                    'view' => [
                        'title' => 'Pack ansehen',
                        'desc' => '',
                    ],
                ],
            ],
        ],
    ],
    'account' => [
        'details_updated' => 'Dein Account wurde erfolgreich bearbeitet.',
        'invalid_password' => 'Das Passwort war leider ungültig.',
        'header' => 'Dein Account',
        'header_sub' => 'Account Details verwalten.',
        'update_pass' => 'Passwort ändern',
        'update_email' => 'Email ändern',
        'current_password' => 'Aktuelles Passwort',
        'new_password' => 'Neues Passwort',
        'new_password_again' => 'Neues Passwort wiederholen',
        'new_email' => 'Neue Email Adresse',
        'first_name' => 'Vorname',
        'last_name' => 'Nachname',
        'update_identity' => 'Account bearbeiten',
        'username_help' => 'Dein Username muss noch frei sein und aus folgenden Zeichen bestehen: :requirements.',
    ],
    'security' => [
        'session_mgmt_disabled' => 'Der Administrator hat diese Funktion deaktiviert.',
        'header' => 'Account Sicherheit',
        'header_sub' => '2-Faktor-Authentifizierung aktivieren.',
        'sessions' => 'Aktieve Sitzungen',
        '2fa_header' => '2-Faktor-Authentifizierung',
        '2fa_token_help' => 'Bitte gebe den 2FA Code von deiner 2FA APP ein (Google Authenticatior, Authy, etc.).',
        'disable_2fa' => '2-Faktor-Authentifizierung deaktivieren',
        '2fa_enabled' => 'Die 2-Faktor-Authentifizierung ist aktiviert und du wirst nach einem Sicherheits code beim anmelden gefragt
        ',
        '2fa_disabled' => 'Die 2-Faktor-Authentifizierung wurde deaktiviert',
        'enable_2fa' => '2-Faktor-Authentifizierung aktivieren.',
        '2fa_qr' => '2FA konfigurieren',
        '2fa_checkpoint_help' => 'Öffne deine 2FA APP und scanne diesen QR Code.',
        '2fa_disable_error' => 'Die 2-Faktor-Authentifizierung wurde nicht aktiviert da der Code ungültig war.',
    ],
];
