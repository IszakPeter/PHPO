<?php


class Urlap
{
    protected $action;
    protected $gombsz;
    protected $mezok =array();

//    mezö name, title, type
    public function __construct($action, $gombsz)
    {
        $this->action = $action;
        $this->gombsz = $gombsz;
    }

    public function setMezok($mezok)
    {
        $this->mezok = $mezok;
    }
    public function addMezo($name,$title,$type){
        array_push($this->mezok,array($name, $title, $type));
    }

    public function __toString()
    {
        $form = "<form action='$this->action' >";
        foreach ($this->mezok as $m){
            $form.="<label for='$m[0]'>$m[1] </label><input name='$m[0]' type='$m[2]' ></br>";
        }
        $form .= "<input type='submit' value='$this->gombsz'> </form>";
        return $form;
    }
}



$f=new Urlap("res","nyomj meg");
$f->setMezok(array( array("at","Valami","Text")));
$f->addMezo("test","Szia","number");
echo  $f;
