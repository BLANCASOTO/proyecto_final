<?php 

class Filtro
{
	function Strings($variable)
	{
		unset($this->string);
		$this->valor=$variable;
		$this->string=filter_var($this->valor, FILTER_SANITIZE_STRING);
		return $this->string;
		
	}
	/*function Numeric($variable)
	{
		$msg='';
		if (is_numeric($variable)) {
			return $msg='true';
		}else{
			return $msg='bad';
		}
	}*/
}





 ?>