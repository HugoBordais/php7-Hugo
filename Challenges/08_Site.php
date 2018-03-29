<?php

class Wyvern{

    protected $type;
    protected $size;
    protected $habitat;

    function __construct($_type,$_size,$_habitat) {
        $this->type = $_type;
        $this->size = $_size;
        $this->habitat = $_habitat;
    }

    public function displayType() {
        print "C'est une Wyvern ".$this->type."\n";
        print "ça taille est de ".$this->size."m"."\n";
        print "elle vit dans ".$this->habitat."\n";
    }
}

class Aquatique extends Wyvern {

    private $nage;

    function __construct($_size,$_habitat){
        parent::__construct("aquatique",$_size,$_habitat);
        $this->nage = true;
    }
    public function displayTypeAqua(){
        parent::displayType();
        if ($this->nage == true){
            print "elle sait parfaitement nager.";
        }
    }
}

class Volante extends Wyvern {

    private $vole;

    function __construct($_size,$_habitat){
        parent::__construct("volante",$_size,$_habitat);
        $this->vole = true;
    }
    public function displayTypeVole(){
        parent::displayType();
        if ($this->vole == true){
            print "elle vole librement dans les cieux."."\n";
        }
    }
}

$rathian = new Volante(45,"l'arbre monde,");
$rathian-> displayTypeVole();

$lagiacrus = new Aquatique(50,"les abysses,");
$lagiacrus-> displayTypeAqua();

 ?>
