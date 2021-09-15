<?php

return [

    /*
    |--------------------------------------------------------------
    | ChangeLog Enabled
    |--------------------------------------------------------------
    |
    |
    */
    'enabled' => true,

    /*
    |--------------------------------------------------------------
    | ChangeLog default table name
    |--------------------------------------------------------------
    |
    |
    */
    'change_logs_table' => 'change_logs',

    /*
    |--------------------------------------------------------------
    | Whitelisted events
    |--------------------------------------------------------------
    |
    | Events in this array will be recorded.
    | Available events are: created, updating, deleting, restored
    |
    */
    'events_whitelist' => [
        'created', 'updating', 'deleting', 'restored',
    ],

    /*
    |--------------------------------------------------------------
    | Environments blacklist
    |--------------------------------------------------------------
    |
    | When application's environment is in the list, change logger will be disabled
    |
    */
    'env_blacklist' => [

    ],

];