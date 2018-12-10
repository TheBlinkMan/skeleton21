<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


/**
 * Class CartorioController
 *
 * @package Application\Controller
 */
class CartorioController extends AbstractActionController
{ 
    public function indexAction() {
        //$id = (int) $this->params()->fromRoute('id', 0);
        $entityManager = $this->getServiceLocator()->get(\Doctrine\ORM\EntityManager::class);
        $cartorios = $entityManager->getRepository("Application\Entity\Cartorio")
                                    ->findAll();
        
        foreach ($cartorios as $cartorio) {
            print_r($cartorios[0]->getName());
        }

        $view = new ViewModel(['cartorios' => $cartorios]);
   
        return $view;
    }

    public function addAction() {
        $request = $this->getRequest();
        $result = [];
        if($request->isPost())
        {
            try{
                $name = $request->getPost("name");
                $tipoDocumentoId = $request->getPost("tipoDocumentoId");
                $documento = $request->getPost("documento");
  
                $cartorio = new \Application\Entity\Cartorio();
                $cartorio->setName($name);
                $cartorio->setTipoDocumentoId($tipoDocumentoId);
                $cartorio->setDocumento($documento);
  
                $em = $this->getServiceLocator()->get("Doctrine\ORM\EntityManager");
                $em->persist($cartorio);
                $em->flush();
  
                $result["resp"] = $name. ", enviado corretamente!";
            }  catch (Exception $e){
                 
            }
        }
        $view = new ViewModel();
   
        return $view;
    }

    public function editAction() {

        $id = $this->params()->fromRoute("id", 0);
        $em = $this->getServiceLocator()->get("Doctrine\ORM\EntityManager");
         
        $cartorio = $em->find("Application\Entity\Cartorio", $id);
        $request = $this->getRequest();
        if($request->isPost())
        {
            try{
                $nome = $request->getPost("name");
                $cpf = $request->getPost("razao");
                $salario = $request->getPost("email");
  
                $cartorio->setName($name);
                $cartorio->setRazao($razao);
                $cartorio->setEmail($email);
  
                $em = $this->getServiceLocator()->get("Doctrine\ORM\EntityManager");
                $em->merge($cartorio);
                $em->flush();
  
            }  catch (Exception $e){
                 
            }
             
            return $this->redirect()->toRoute('cartorio', 
                array('controller' => 'index', 'action' => 'listar'));
        }
        return new ViewModel(['cartorio' => $cartorio]);
    }

    public function deleteAction() {
        $id = $this->params()->fromRoute("id", 0);
        $entityManager = $this->getServiceLocator()->get("Doctrine\ORM\EntityManager");
        $cartorio = $entityManager->find("Application\Entity\Cartorio", $id);
        $em->remove($cartorio);
        $em->flush();
         
        return $this->redirect()->toRoute('cartorio');
    }

}
