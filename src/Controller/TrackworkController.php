<?php

namespace App\Controller;

use App\Entity\AddWork;
use App\Form\AddWorkType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TrackworkController extends AbstractController
{
    /**
     * @Route("/trackwork", name="trackwork")
     */
    public function index()
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/add-work", name="add_work")
     * @param Request $request
     * @param EntityManagerInterface $em
     * @return RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function addWork(Request $request,EntityManagerInterface $em){
        $addWork = new AddWork();
        $addForm = $this->createForm(AddWorkType::class,$addWork);
        $addForm->handleRequest($request);

        if ($addForm->isSubmitted() && $addForm->isValid()){

            $em->persist($addWork);
            $em->flush();

            return $this->redirectToRoute('successfully_added_work_zone',[
                'work' => $addWork
            ]);
        }

        return $this->render('add_work_zone.html.twig',[
            'addForm' => $addForm->createView()
        ]);


    }

    /**
     * @Route("/succesfully-added", name="successfully_added_work_zone")
     */
    public function successfullyAdded()
    {

        return $this->render('successfully_added_work_zone.html.twig');
    }

    /**
     * @Route("/edit-work/{$id}", name="edit_work")
     */

    // I named class wrongly AddWork - instead I should named it CRUDWork
    public function editWork(AddWork $editWork,Request $request,EntityManagerInterface $em){

        $editForm = $this->createForm('App\Form\AddWorkType',$editWork);

        // I will continue writing tomorrow


    }



}
