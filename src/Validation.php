<?php  namespace RocketValidation;

class Validation 
{
     public function has(array $data, string $field):bool
    
     {
          return isset($data($field));
     }
}


?>