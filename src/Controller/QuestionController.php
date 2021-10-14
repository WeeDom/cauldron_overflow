<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
  /**
   * @return Response
   * @Route("/")
   */
  public function homepage() {
    return new Response("bewitching controller");
  }

  /**
   * @Route("questions/{slug}")
   */
  public function show($slug) {
    return new Response(sprintf(
      'Return some stuff "%s"', ucwords(str_replace('-', ' ',
      $slug))));
  }
}