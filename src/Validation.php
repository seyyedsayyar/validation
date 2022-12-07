<?php  namespace RocketValidation;

class Validation 
{
     public function require(array $data, string $field):bool
    
     {
          return isset($data($field));
     }
}


?>