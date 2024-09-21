<?php
namespace html ;

class attribute {

 public string $name ;
 public string $value ;

 public function __construct ( string $name = "" , string $value = "" ) {

  $this->name = $name ;
  $this->value = $value ;

 }

}

?>