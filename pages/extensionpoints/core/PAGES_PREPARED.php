<?php

rex_extension::register('PAGES_PREPARED', static function (rex_extension_point $ep) {
    // Ausgabe der Übergabewerte im Logfile
    // Achtung erzeugt einen ellenlangen Eintrag im Logfile und eine Warning im Systemlog!
    //$var = rex_escape(var_export($ep, true));
    //demo_addon_logger::log('<pre>' . $var . '</pre>', $ep->getName());

    $pages = $ep->getSubject(); // rex_be_controller::getPages()
    demo_addon_logger::log('Count pages: ' . count($pages), $ep->getName());
});
