<?php

return [
    'module.CompliantSuggestion' => [
        'compliant' => env('COMPLIANT_ENABLED', true),
        'suggestion' => env('SUGGESTION_ENABLED', true),
        'complaint.to'   => env('COMPLAINT_TO', ''),
        'complaint.bcc'  => env('COMPLAINT_BCC', ''),
        'suggestion.to'  => env('SUGGESTION_TO', ''),
        'suggestion.bcc' => env('SUGGESTION_BCC', 'off'),
    ],
];
