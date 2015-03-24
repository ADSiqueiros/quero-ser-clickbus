<?php

namespace Clickbus\Bundle\CajeroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Clickbus\Bundle\CajeroBundle\Classes\CajeroAutomatico;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $params = array(
             'mensaje' => 'Bienvenido al curso de Symfony2',
             'fecha' => date('d-m-yy'),
         );

         return $this->render('ClickbusCajeroBundle:Default:index.html.twig',
         $params);
    }
	
	public function retirarAction()
    {
		$params = array(
		'cantidad' => '',
		'resultado' => array(),
		);

		$c = new CajeroAutomatico();

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$params['cantidad'] = $_POST['cantidad'];
		$params['resultado'] = $c->getbilletes($_POST['cantidad']);
		
		}
		
		return
		$this->render('ClickbusCajeroBundle:Default:mostrarRetiro.html.twig',
		$params);

	}
}
