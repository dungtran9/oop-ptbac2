<?php
class QuadraticEquation {
    private $a;
    private $b;
    private $c;
    public function __construct($a,$b,$c)
    {
        $this->a =$a;
        $this->b =$b;
        $this->c =$c;
    }
    public function delta(){
        return $this->b*$this->b-4*$this->a*$this->c;
    }
    public function getRoot(){
        return -$this->b/2*$this->a;
    }
    public function getRoot1(){
        return (-$this->b+sqrt($this->delta()))/(2*$this->a);
    }
    public function getRoot2(){
        return (-$this->b-sqrt($this->delta()))/(2*$this->a);
    }
    public function getResult(){
if ($this->delta()<0){
    echo "Phuong trinh vo nghiem ";
}
else if ($this->delta()==0){
    echo "phuong trinh co nghiem kep x = ".$this->getRoot();
}
else if ($this->delta()>0){
    echo "phuong trinh co hai nghiem x1 = ".$this->getRoot1()."<br>"."x2= ".$this->getRoot2();
}
    }

}