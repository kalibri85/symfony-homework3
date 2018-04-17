<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {

        return $this->render('home/index.html.twig', [
             'projects' => [
             'Po pamokų'=>[
                  "mentor" => "Tomas",
                  "members" => ["Elena","Justė","Deimantas"]
            ],
             'Tech Guide'=>[
                "mentor" => "Sergej",
                "members" => ["Matas","Martynas"]
            ],
            'Kelionės draugas'=>[
                     "mentor" => "Rokas",
                     "members" => ["Zbignev","Aistė"]
                 ],
            'Wish A Gift'=>[
                     "mentor" => "Aistis",
                     "members" => ["Nerijus","Olga"]
                 ],
            'Mums pakeliui'=>[
                     "mentor" => "Paulius",
                     "members" => ["Eglė","Svetlana"]
                 ],
            'Motyvacinė platforma'=>[
                     "mentor" => "Audrius",
                     "members" => ["Viktoras","Airidas"]
                 ]

          ]
        ]);


    }
}
