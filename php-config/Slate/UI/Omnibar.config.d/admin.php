<?php

if (empty($GLOBALS['Session'])) {
    return;
}

/*Slate\UI\Omnibar::$sources[] = [
    'Google' => 'https://google.com'
];*/


/*Slate\UI\Omnibar::$sources[] = [
    'Jarvus' => [
        // this is optional, the Jarvus header can just be a menu and not a link too
        '_href' => 'https://jarv.us',

        'Consulting' => 'https://jarv.us/consulting',
        'Education' => 'https://jarv.us/education',
        'About' => 'https://jarv.us/about',

        'Slate' => [
            // Slate won't get its own entry unless you set an _href
            // '_href' => 'http://slate.is',

            'About' => 'http://slate.is/home',
            'Tools' => 'http://slate.is/tools',
            'Get Slate' => 'http://slate.is/get'
        ]
    ]
];*/

if ($GLOBALS['Session']->hasAccountLevel('Administrator')) {
    Slate\UI\Omnibar::$sources[] = [
        'School Compass' => [
            // this is optional, the Jarvus header can just be a menu and not a link too
            //'_href' => 'https://jarv.us',

            'Advisory' => '/cbl/dashboards/admin/advisory',
            'Attendance' => '/cbl/dashboards/admin/attendance',
            'Teacher Survey' => '/cbl/dashboards/admin/teacher-survey',
            'College and Career Readiness' => '/cbl/dashboards/admin/cc-readiness',
            'Correlations' => '/cbl/dashboards/admin/correlations',
        ]
    ];
}

