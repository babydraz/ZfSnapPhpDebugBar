<?php

/**
 * @param string $message
 * @param string $type
 */
function debugbar_log($message, $type = 'debug')
{
    \ZfSnapPhpDebugBar\Module::log($message, $type);
}

/**
 * @param string $id
 * @param string $message
 */
function debugbar_startMeasure($id, $message)
{
    \ZfSnapPhpDebugBar\Module::startMeasure($id, $message);
}

/**
 * @param string $id
 */
function debugbar_stopMeasure($id)
{
    \ZfSnapPhpDebugBar\Module::stopMeasure($id);
}