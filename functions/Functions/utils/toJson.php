<?php

    /**
     * Encodes the given data into a JSON string with optional flags.
     *
     * @param mixed $data The data to be encoded.
     * @param int[] ...$flags Optional flags to control the encoding process.
     * @return string The JSON encoded string.
     */
function toJson(mixed $data, ...$flags): string {

    return json_encode($data, JSON_PRETTY_PRINT, ...$flags);
}