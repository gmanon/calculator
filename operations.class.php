<?php
class Operations{

	private $a = 0.0;
	private $b = 0.0;
	public $total = 0.0;
	
	function addition($a,$b)
	{
		$this->a = $a;
		$this->b = $b;
		
		$this->total = $this->a+$this->b;
	
		return $this->total;
	
	}

	function substract($a,$b)
	{
		$this->a = $a;
		$this->b = $b;
		
		$this->total = $this->a-$this->b;
	
		return $this->total;
	
	}

	function multiply($a,$b)
	{
		$this->a = $a;
		$this->b = $b;
		
		$this->total = $this->a*$this->b;
	
		return $this->total;
	
	}

	function divide($a,$b)
	{
		$total = $a/$b;
	
		return $total;
	
	}

	function squaredroot($a)
	{
		
		$this->a = $a;

		$this->total = sqrt($this->a);
	
		return $this->total;
	
	}
}
?>