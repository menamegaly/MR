<?php

return [
    'client_tabs' => [
        'munki' => ['view' => 'client_munki_tab', 'i18n' => 'munkireport.munki'],
    ],
    'listings' => [
        'munki' => ['view' => 'munki_listing', 'i18n' => 'munkireport.munki'],
    ],
    'widgets' => [
        'manifests' => ['view' => 'manifests_widget'],
        'munki_versions' => ['view' => 'munki_versions_widget'],
        'munki_errors' => ['view' => 'munki_errors_widget'],
        'munki_warnings' => ['view' => 'munki_warnings_widget'],
        'munki' => ['view' => 'munki_widget'],
    ],
    'reports' => [
        'munki' => ['view' => 'munki', 'i18n' => 'munkireport.managedsoftware'],
    ],
];
