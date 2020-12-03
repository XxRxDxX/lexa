<?php namespace Ignatiev;

Class Equation{
	public function qu_solve($a, $b){
			if($a == 0)
				return null;
	
			return $this->X=array(-($b/$a));
	}
	protected $X;
}
?>