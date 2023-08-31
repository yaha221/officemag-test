<?php
if (defined('ADMIN_SECTION')) {
    return;
}
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

use Bitrix\Main\Mail\Event;

Event::Send(array(
    "EVENT_NAME" => "ERROR_MESSAGE",
    "LID" => "s1",
    "C_FIELDS" => array(
        "TEXT_ERROR" => $_POST,
    )
));