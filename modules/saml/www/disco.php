<?php

/**
 * Built-in IdP discovery service.
 */

$discoHandler = new \SimpleSAML\XHTML\IdPDisco(array('saml20-idp-remote', 'shib13-idp-remote'), 'saml');
$discoHandler->handleRequest();
