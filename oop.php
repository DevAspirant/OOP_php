Class Grandfather{

  public $global_var; 
 
  function __construct(){
    
      $this->$global_var = 56;
      echo "i am grandfather<br>";
  }
  
  function default_function(){
     echo "default_function from grandfather <br>";
  }
  
  private function private_funcation(){
     echo "private_funcation from grandfather<br>";
  }
  
  protected function protected_function(){
     echo "protected_funcation from grandfather<br>";
  }
  
  public function public_function(){
     echo "public_function from grandfather<br>";
  }
}

class Father extends Granfather{

  public $father_var;
  
  function __construct(){
      Grandfather::__construct();
      $this->father_var = 256;
      echo "i am father";
  }
  
  function display_all(){
     echo "function from father<br>";
      $this->default_function();
      $this->protected_function();
      $this->private_function();
      parent::public_function();
  }

}

class Child extends Father{

  function __construct(){
      Grandfather::__construct(){
         echo "I am child<br>";
      }  
      
      function display_all(){
       
         echo "function from father<br>";
         
         parent::display_all();
         
         echo "new added in child<br>";     
            
      }  
  }
  
  $obj = new Father();
  
  $obj->display_all();
  
  echo "<br><br><br>Child object call<br><br><br>";
  
  $obj2 = new Child();
  
  $obj2->display_all();

}
