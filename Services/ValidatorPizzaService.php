<?php

namespace thelan\ValidatorPizzaBundle\Services;

use thelan\ValidatorPizzaBundle\Objects\ValidatorPizzaResponse;

class ValidatorPizzaService
{
    private static $domain = "https://www.validator.pizza/";

    /**
     * @param $query string a domain or an email address to validate
     * @return ValidatorPizzaResponse
     */
    public function validate($query)
    {

        if(preg_match('/@/',$query))
            $url = self::$domain.'/email/' . $query;
        else
            $url = self::$domain.'/domain/' . $query;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);

        $r = new ValidatorPizzaResponse();
        $r->set(json_decode($response, true));
        return $r;
    }

}