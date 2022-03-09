<?php
class Layout
{
    private static $instances;
    public $styles_html = [];
    public $scripts_html = [];
    public static $styles;
    public static $scripts;
    protected function __construct() { }
    protected function __clone() { }
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }
    public static function getInstance(): Layout
    {
        if (!isset(self::$instances)) {
            self::$instances = new static();
        }
        return self::$instances;
    }
    public function someBusinessLogic()
    {
        // ...
    }
    public function AllOk(){
    echo "All OK1";
    }
    public function styles($path){
        $path_parts = pathinfo($path);
        if($path_parts['extension'] == "js"){
          $this->scripts_html[] = $path;
        }
        elseif ($path_parts['extension'] == "css") {
          $this->styles_html[] ="$path";
        }
    }
    public function static_styles(){
      foreach ($this->styles_html as $element) {
        echo '<link rel="stylesheet" href="static/css/'. $element .'">';
      }
    }
    public function static_scripts(){
      foreach ($this->scripts_html as $element) {
        echo '<script src="static/js/'. $element .'"></script>';
      }
    }
    public function fonts($font){
      echo '<link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family='.$font.'&display=swap" rel="stylesheet">
      <style>body{
        font-family: "'.$font.'", sans-serif;
      }
</style>';

    }
}
?>
