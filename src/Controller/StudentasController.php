<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StudentasController extends Controller
{
    /**
     * @Route("/studentas", name="studentas")
     */
    public function index(Request  $request)
    {
        return $this->render('studentas/index.html.twig', [
            "mentor" => $request->get('utm_campaign'),
            "student" => $request->get('utm_term'),
            "project" => $request->get('utm_content')

        ]);

    }

}
