<?php

namespace Maverickslab\Utilities\Parser\Formats;

use Maverickslab\Utilities\Parser\Exceptions\ParserException;

/**
 * Serialize Formatter
 *
 * @package    Maverickslab\Utilities\Parser\Formats
 * @author     Nathan Macnamara <nathan.macnamara@outlook.com>
 * @license    https://github.com/nathanmac/Parser/blob/master/LICENSE.md  MIT
 */
class Serialize implements FormatInterface
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
            try {
                return unserialize(trim($payload));
            } catch (\Exception $ex) {
                throw new ParserException('Failed To Parse Serialized Data');
            }
        }

        return [];
    }
}
