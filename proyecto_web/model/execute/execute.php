<?php 
//error_reporting(0);
class Querys
{
	
	function __construct()
	{
		include_once 'db.php';
		$this->conectar = new Conectar();
		$this->db = $this->conectar->conexion();
	}
	function ConsultaSimple($sql)
	{
		$msg='';
		if ($query=$this->db->query($sql)==true) 
		{
			return $msg='ok';
		}else
		{
			return $msg='bad';
		}
		unset($query);
		unset($this->conectar);
		unset($msg);
	}
	function ConsultaRetorno($sql)
	{
		$query=$this->db->query($sql);
		return $query;
		unset($query);
		unset($this->conectar);
	}
}




 ?>