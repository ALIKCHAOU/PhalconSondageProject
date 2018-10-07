<?php

class Polls extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    public $question;

    /**
     *
     * @var integer
     */
    public $ID;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("sondage");
        $this->setSource("polls");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'polls';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Polls[]|Polls|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Polls|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
