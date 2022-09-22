<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Document\User;
use Doctrine\ODM\MongoDB\DocumentManager;

class MongoController extends AbstractController
{
    /**
     * @Route("/mongo", name="app_mongo")
     */
    public function index(): Response
    {
        return $this->render('mongo/index.html.twig', [
            'controller_name' => 'MongoController',
        ]);
    }

    /**
     * @Route("/mongoTest", methods={"GET"})
     */
    public function mongoTest(DocumentManager $dm)
    {
        $user = new User();
        $user->setEmail("hello@medium.com");
        $user->setFirstname("Matt");
        //$user->setLastname("Matt");
        $user->setPassword(md5("123456"));

        $dm->persist($user);
        $dm->flush();
        return new Response('Created product id ' . $user->getId());
        //return new JsonResponse(array('Status' => 'OK'));
    }

}//end controller
