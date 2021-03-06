<?php

namespace Maverickslab\Utilities\Parser\Formats;

/**
 * Formatter Interface
 *
 * @package    Maverickslab\Utilities\Parser\Formats
 * @author     Nathan Macnamara <nathan.macnamara@outlook.com>
 * @license    https://github.com/nathanmac/Parser/blob/master/LICENSE.md  MIT
 */
interface FormatInterface
{
    /**
     * Parse Payload Data
     *
     * @param string $payload
     *
     * @throws ParserException
     *
     * @return array
     */
    public function parse($payload);
}
