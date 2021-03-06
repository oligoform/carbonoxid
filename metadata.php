<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'carbonoxid',
    'title'        => '<span style="font-family:monospace;background-color:#000000;color:#FFFFFF;">&nbsp;pflaesterer&nbsp;</span> - carbonoxid',
    'thumbnail'    => 'logo.png',
    'email'        => 'oxid@pflaesterer.org',
    'url'          => 'https://github.com/pflaesterer/carbonoxid',
    'description'  => array(
        'en'=>'Adds a configurable BCC (blind carbon copy) to every email sent from shop.',
        'de'=>'Fügt eine konfigurierbare BCC (blind carbon copy) an jede vom Shop versante Email an.',
    ),
    'version'      => '1.0.2',
    'author'       => 'Philip Pflästerer',

    'extend'      => [
        \OxidEsales\Eshop\Core\Email::class => \Pflaesterer\CarbonOxid\Core\Email::class,
    ],
    'settings' => array(
        array('group' => 'CARBONOXID_MAIL_ADDRESS_ES',  'name' => 'carbonoxid_mail_bcc_email',  'type' => 'str', 'value' => 'johndoe@example.org'),
        array('group' => 'CARBONOXID_MAIL_ADDRESS_ES',  'name' => 'carbonoxid_mail_bcc_name',   'type' => 'str', 'value' => 'John Doe'),
    ),
);

