<?php

return [
    // Hero Section
    'hero_section' => [
        'heading' => 'Registrieren',
        'sub_heading' => 'Um ein Konto für Ihr Haustier zu erstellen, erstellen Sie bitte zunächst ein Konto für sich selbst. Sie können das Konto Ihres Haustiers direkt über Ihr Konto erstellen.',
    ],

    // Form Labels
    'form' => [
        'insurance' => [
            'label' => 'Haben Sie eine Versicherung?',
            'options' => [
                'yes' => 'Ja',
                'no' => 'Nein',
            ],
        ],
        'email' => [
            'label' => 'E-Mail-Adresse',
            'placeholder' => 'Ihre E-Mail',
        ],
        'phone' => [
            'label' => 'Telefonnummer',
            'placeholder' => 'Ohne Leerzeichen eingeben',
        ],
        'canton' => [
            'label' => 'Wählen Sie Ihren Kanton*',
            'placeholder' => 'Wählen...',
            'options' => [
                'canton1' => 'Kanton 1',
                'canton2' => 'Kanton 2',
                // Weitere Kantone hinzufügen, falls nötig
            ],
        ],
        'dob' => [
            'label' => 'Geburtsdatum*',
        ],
        'password' => [
            'label' => 'Passwort',
        ],
        'confirm_password' => [
            'label' => 'Passwort bestätigen*',
        ],
        'insurance_number' => [
            'label' => 'Versicherungsnummer*',
        ],
        'upload_insurance_card' => [
            'label' => 'Versicherungskartenbild hochladen',
        ],
        'upload_passport' => [
            'label' => 'Pass- oder Ausweiskopie hochladen*',
        ],
        'terms' => [
            'label' => 'Ich akzeptiere alle Allgemeinen Geschäftsbedingungen, die Kommunikations- und Datenschutzrichtlinien, die Einwilligung und die Informationen zur Verarbeitung personenbezogener Daten des Patienten',
        ],
        'button' => 'Registrieren',
    ],
];
