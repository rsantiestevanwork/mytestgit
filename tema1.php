<?php
    class SimpleClass
    {
        //property declaration
        public $var = 'a default value';
        
        //method declaration
        public function displayVar()
        {
            echo $this->var."<br>";
        }
        
    }
    
    $obj = new SimpleClass();
    echo $obj->displayVar();
    
    
    $instance = new SimpleClass();
    //This can also be done with a variable:
    $className = 'SimpleClass';
    $instance2 = new $className(); //new SimpleClass()
    
    $instance->displayVar();
    $instance2->displayVar();
    /**************************************/
    $instance = new SimpleClass();
    
    $assigned = $instance;
    $reference =& $instance;
    
    $instance->var = '$assigned will have this value';
    $instance = null;
    
    var_dump($instance);
    var_dump($reference);
    var_dump($assigned);
?>