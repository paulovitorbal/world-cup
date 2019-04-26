<?php
/**
 * Created by PhpStorm.
 * User: Michel van Hoof
 * Date: 2019-04-26
 * Time: 16:38
 */

namespace App\Service;

use http\Exception\InvalidArgumentException;

class JSONReader
{

    public function readDataFromUrl(string $url): object
    {
        $json = $this->getJsonDataFromURL($url);
        $decodedJSON = json_decode($json);
        $this->checkIfJsonIsValid();

        return $decodedJSON;
    }

    private function getJsonDataFromURL(string $url): string
    {
        try {
            $contents = file_get_contents($url);
        } catch (\Throwable $exception) {
            throw new InvalidArgumentException("URL given is invalid. : " . $exception->getMessage());
        }
        return $contents;
    }

    private function checkIfJsonIsValid(): void
    {
        if (!json_last_error() == JSON_ERROR_NONE) {
            throw new InvalidArgumentException("Content of URL not valid JSON format.");
        }
    }
}