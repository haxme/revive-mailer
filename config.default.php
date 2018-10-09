<?php

DEFINE('AUTH_CODE', 'password-for-ui-auth');

DEFINE('FROM_ADDRESS', 'your-email@domain.tld');
DEFINE('FROM_ADDRESS_PASSWORD', 'password-for-your-email');

DEFINE('RECIPIENT_SET', []);
DEFINE('RECIPIENT_SET_JSON_FILE', '/absolute/path/to/set.json');

DEFINE('SMTP_SRV', 'smtp1.server.tld;smtp2.server.tld');
DEFINE('SMTP_PORT', 587);

DEFINE('IS_HTML', true);

DEFINE('INTERSECTION_MODE', false);

DEFINE('INTERSECTION_SET', []);
DEFINE('INTERSECTION_SET_FILE', '/absolute/path/to/intersection-set.txt');
DEFINE('INTERSECTION_SET_FILE_DELIMITER', ',');

DEFINE('USE_INTERSECTION_DB', false);
DEFINE('INTERSECTION_DB_HOST', '127.0.0.1');
DEFINE('INTERSECTION_DB_NAME', 'name-of-database');
DEFINE('INTERSECTION_DB_USER', 'name-of-db-user');
DEFINE('INTERSECTION_DB_PASSWORD', 'password-for-name-of-database');
DEFINE('INTERSECTION_DB_TABLE', 'name-of-database-target-table');
DEFINE('INTERSECTION_DB_COLUMN', 'name-of-database-target-table-target-col');
