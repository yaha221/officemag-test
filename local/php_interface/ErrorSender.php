<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Mail\Event;


Event::Send(array(
    "EVENT_NAME" => "ERROR_MESSAGE",
    "LID" => "s1",
    "C_FIELDS" => array(
        "TEXT_ERROR" => $_POST,
    )
));

print_r ("Сообщение отправлено");