<?php
namespace Clickbus\Bundle\CajeroBundle\Classes;

class NoteUnavailableException extends \Exception {
}

class InvalidArgumentException extends \Exception {
}


class CajeroAutomatico
{
	private $billetes = array(10, 20, 50, 100);

	private $retiro = array();
	function __construct() {
		rsort($this->billetes);
	}

	public function getbilletes($cantidad) {
		$this->retiro = array();
		$residuo = $cantidad;
		if ($residuo < 0 || is_nan($residuo))
		{
			throw new InvalidArgumentException('La cantidad especificada no es válida.');
		}
		else
		{			
			foreach($this->billetes AS $billete){
				if ($residuo > 0) {
					$division = floor($residuo / $billete);
					$residuo = $residuo % $billete;
					//echo "Billete: $billete, Division: $division, Residuo: $residuo<br>";
					if($division > 0)
						$this->retiro[] = array('cantidad' => $division, 'denominacion' => $billete);
					
				}
			}
		}
		
		if ($residuo > 0 && $residuo < min($this->billetes)) {
			throw new NoteUnavailableException('El cajero no puede pagar esta cantidad.');
		}
		else
			return $this->retiro;
	}
}