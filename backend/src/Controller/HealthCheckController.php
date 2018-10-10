<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Swagger\Annotations as SWG;

class HealthCheckController extends AbstractController
{
    /**
     * HealthCheck route
     *
     * @Route("/api/health/check", name="health_check", methods={"GET"})
     * @SWG\Response(
     *     response=200,
     *     description="Returns the Health Symfony application",
     *     @SWG\Property(property="message", type="string", example={"message": "Running"})
     * )
     * @SWG\Tag(name="HealthCheck")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Running'
        ]);
    }
}
