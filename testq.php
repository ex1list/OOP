<?php

// $data = echo("<script>console.log('PHP: " . $data . "');</script>");

    interface Farm {
        public function getLitresMilkCow();
        public function getQuantityEggsChicken();
    }

    class AnimalsStable implements Farm {
        public $CountCow;
        public $CountChicken;
        public $MilkLitres;
        public $Eggs;
        
        public function __construct($CountCow,$CountChicken) {
            $this->CountCow=$CountCow;
            $this->CountChicken = $CountChicken;   
        }
        
        public function getLitresMilkCow() {
            $LitersMilk=0;  
            for ($i=1; $i <= $this->CountCow; $i++) {
                $LitersMilk =+ random_int(8, 12);
                $i++;
            }  
            return $LitersMilk;
        }
        
        public function getQuantityEggsChicken() {
            $CountEggs=0;  
            for ($i=1; $i <= $this->CountChicken; $i++) {
                $CountEggs+=random_int(0, 1);
                $i++;
            }     
            return $CountEggs;
        }
        
        public function getQuantities($a,$b)   {
            $commonproduct= "Common count eggs : ".$a."<BR>Common count cow: ".$b;
            return $commonproduct;
        }
   
    }
    //добавления количества коров в хлеву
    $CowandChicken = new AnimalsStable(10,20);
    //произвести сбор продукции (подоить коров и собрать яйца у кур).
    //cобираем молоко
    $litrsMilk= $CowandChicken->getLitresMilkCow();
    //cобираем яйца
    $counteggs = $CowandChicken->getQuantityEggsChicken();
    //общее кол-во собранных шт. яиц и литров молока
    echo $CowandChicken->getQuantities($litrsMilk,$counteggs);
    
