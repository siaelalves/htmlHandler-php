<?php
namespace html ;

class tag {

 public string $name ;

 /** Atributos da tag. O conteúdo desta matriz deve conter apenas valores do tipo 
  * attribute. Use a função add_attribute ( ) para adicionar valores à esta propriedade.
  */
 public array $attributes = [ ] ;
 public string $inner_text = "" ;

 private string $open_tag ;
 private string $close_tag ;

 public function __construct ( string $tag_name ) {

  $this->name = $tag_name ;

  if ( count ( $this->attributes ) == 0 ) {   

   $this->open_tag = "<" . $this->name . ">" ;

  } else {

   $this->open_tag = "<" . $this->name ;

  }
  
  $this->close_tag = "</" . $this->name . ">" ;
  
 }

 public function get_element ( ) : string {

  if ( $this->inner_text != "" ) {

   return "<" . $this->name . " " . $this->get_attribute_string ( ) . ">" . $this->inner_text . $this->close_tag ;

  } else {

   return "<" . $this->name . " " . $this->get_attribute_string ( ) . ">" ;

  }

 }

 public function add_attribute ( attribute $attrib ) {

  array_push ( $this->attributes , $attrib ) ;

 }

 private function get_attribute_string ( ) : string {

  $attribute_string = "" ;
  foreach ( $this->attributes as $attrib ) {

   $attribute_string .= $attrib->name . "=" . $attrib->value . " " ;

  }

  return $attribute_string ;

 }

}

?>