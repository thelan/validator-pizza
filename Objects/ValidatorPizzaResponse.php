<?php

namespace thelan\ValidatorPizzaBundle\Objects;

class ValidatorPizzaResponse
{

    protected $status;
    protected $email;
    protected $domain;
    protected $mx;
    protected $disposable;
    protected $alias;
    protected $did_you_mean;
    protected $remaining_requests;
    protected $error;

    /**
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @return boolean
     */
    public function isMx()
    {
        return $this->mx;
    }

    /**
     * @return boolean
     */
    public function isDisposable()
    {
        return $this->disposable;
    }

    /**
     * @return boolean
     */
    public function isAlias()
    {
        return $this->alias;
    }

    /**
     * @return string|boolean
     */
    public function getDidYouMean()
    {
        return $this->did_you_mean;
    }

    /**
     * @return integer
     */
    public function getRemainingRequests()
    {
        return $this->remaining_requests;
    }

    /**
     * @return string|null
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Populate data into the class
     * @param $data array
     */
    public function set($data) {
        foreach ($data AS $key => $value) $this->{$key} = $value;
    }

}