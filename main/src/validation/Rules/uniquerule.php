<?php

namespace MrNan\Main\validation\Rules;


use MrNan\Main\Database\Model;
use Rakit\Validation\MissingRequiredParameterException;
use Rakit\Validation\Rule;

class uniquerule extends Rule
{
    protected $message = ":attribute :value has been used";

    protected $fillableParams = ['table', 'column'];



    public function check($value): bool
    {
        // make sure required parameters exists
        try {
            $this->requireParameters(['table', 'column']);
        } catch (MissingRequiredParameterException $e) {
        }

        // getting parameters
        $column = $this->parameter('column');
        $table = $this->parameter('table');

       $data= (new Model)->from($table)->where($column, $value)->first();
        return !$data;
    }
}