<?php

namespace EJ\EvalBundle\Controller;

use EJ\EvalBundle\Entity\Event;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PagesController extends Controller
{
    public function indexAction()
    {
        $listItems = array(
            array(
                'title'   => 'Soirée Disco',
                'id'      => 1,
                'content' => 'Ce soir, c\'est soirée disco',
                'user'    => ' Boris '
            ),
            array(
                'title'   => 'Soirée Métal',
                'id'      => 2,
                'content' => 'Le métal c\'est pas pour les filles',
                'user'    => 'Corbier et sa bande'
            ),
            array(
                'title'   => 'Soirée Champêtre',
                'id'      => 3,
                'content' => 'Promenons-nous dans les bois',
                'user'    => 'Le grand Méchant Loup featuring RedChaperon'
            )
        );

        return $this->render('EJEvalBundle:Pages:index.html.twig', array(
            'listItems' => $listItems,
        ));
    }

    public function viewAction($id)
    {


        return $this->render('EJEvalBundle:Pages:view.html.twig', array(
            'items' => $items,
        ));
    }

    public function addAction()
        {

            $event = new Event();
            $event->setTitle('Soirée Disco');
            $event->setDescription('Ce soir, c\'est soirée disco');


            $em = $this->getDoctrine()->getManager();


            $em->persist($event);


            $em->flush();

            if ($request->isMethod('POST')) {
                $request->getSession()->getFlashBag()->add('notice', 'Enregistrement bien effectué');


                return $this->redirectToRoute('ej_eval_view', array('id' => $event->getId()));
            }

            return $this->render('EJEvalBundle:Pages:add.html.twig',array('event'=>$event));
        }





}


