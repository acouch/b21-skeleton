<?php

if (empty($GLOBALS['Session']) || !$GLOBALS['Session']->Person || !$GLOBALS['Session']->hasAccountLevel('Administrator')) {
    return;
}
//Duplicate the row below to add links to the tools menu that only administrators will see.
//Slate\UI\Tools::$tools['<name>'] = '<URL>';