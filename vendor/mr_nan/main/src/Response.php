<?php

namespace MrNan\Main;

use Rakit\Validation\ErrorBag;

class Response
{
public function redirect(string $url):self
{
header('Location: '.$url);
return $this;

}
public function witherores(ErrorBag $errors) :self
{
    session()->flash("errors",$errors);
    return $this;
}
public function withInputs(array $inputs=null) :self{
    session()->flash("old_inputs", ! is_null($inputs) ?  $inputs: request()->all_request_spc()["post"]  );
    return $this;
}

}