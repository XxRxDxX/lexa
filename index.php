<?php 
Class A
{
	public function solve($a, $b)
	{
		if($a==0)
		{
			return null;
		}
	$x=-($b/(2*$a));
	return $x;
	}
}
Class B extends A
{
	protected function dis($a, $b, $c)
	{
		$d=($b*$b-(4*$a*$c));
		return $d;
	}
	public function korni($a, $b, $c)
	{
		if ($a==0) 
		{
			return $this->solve($b,$c)
		}
		$d=$this->dis($a, $b, $c);
		if($d<0)
		{
			return null;
		}
		if($d==0)
		{
			$x=(-($b)/(2*$a));
			return $x;
		}
		$a=(((-$b)+sqrt($d))/(2*$a));
		$b=(((-$b)-sqrt($d))/(2*$a));
		return array($a, $b);
	}
}
$a=new A();
$b=new B();
var_dump($b->korni(2,1,0));
?>
