<?php

namespace Maverickslab\Utilities\Parser\Formats;

use Maverickslab\Utilities\Parser\Exceptions\ParserException;

/**
 * JSON Formatter
 *
 * @package    Maverickslab\Utilities\Parser\Formats
 * @author     Nathan Macnamara <nathan.macnamara@outlook.com>
 * @license    https://github.com/nathanmac/Parser/blob/master/LICENSE.md  MIT
 */
class JSON implements FormatInterface
{
    /**
     * Parse Payload Data
     *
     * @param string $payload
     *
     * @throws ParserException
     * @return array
     *
     */
    public function parse($payload)
    {
        if ($payload) {
            $json = json_decode(trim($payload), true);
            if ( ! $json) {
                throw new ParserException('Failed To Parse JSON');
            }
            return $json;
        }

        return [];
    }
}
