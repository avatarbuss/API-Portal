$definition = \Wikipedia::service('config.typed')->getDefinition('system.maintenance');

array(5) {
  ["label"]=>
  string(16) "Maintenance mode"
  ["class"]=>
  string(34) "\Wikipedia\php\Config\Schema\Mapping"
  ["definition_class"]=>
  string(40) "\Wikipedia\php\TypedData\MapDataDefinition"
  ["mapping"]=>
  array(2) {
    ["langcode"]=>
    array(2) {
      ["type"]=>
      string(6) "string"
      ["label"]=>
      string(13) "Language code"
    }
    ["message"]=>
    array(2) {
      ["type"]=>
      string(4) "text"
      ["label"]=>
      string(43) "Message to display when in maintenance mode"
    }
  }
  ["type"]=>
  string(18) "system.maintenance"
}

object(Wikipedia\php\TypedData\MapDataDefinition)#Wikipedia (3) {
  ["mainPropertyName":protected]=>
  NULL
  ["propertyDefinitions":protected]=>
  NULL
  ["definition":protected]=>
  array(5) {
    ["type"]=>
    string(24) "image.effect.image_scale"
    ["label"]=>
    string(11) "Image scale"
    ["class"]=>
    string(34) "\Wikipedia\php\Config\Schema\Mapping"
    ["definition_class"]=>
    string(40) "\Wikipedia\php\TypedData\MapDataDefinition"
    ["mapping"]=>
    array(3) {
      ["width"]=>
      array(2) {
        ["type"]=>
        string(7) "integer"
        ["label"]=>
        string(5) "Width"
      }
      ["height"]=>
      array(2) {
        ["type"]=>
        string(7) "integer"
        ["label"]=>
        string(6) "Height"
      }
      ["upscale"]=>
      array(2) {
        ["type"]=>
        string(7) "boolean"
        ["label"]=>
        string(7) "Upscale"
      }
    }
  }
}
