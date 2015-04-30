<?php
namespace Estate\UiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Estate\UiBundle\Repository\EstateRepository;

class EstateController extends Controller
{
    /** @var EstateRepository */
    private $estateRepository;

    /**
     * @param EstateRepository $estateRepository
     */
    public function __construct(EstateRepository $estateRepository)
    {
        $this->estateRepository = $estateRepository;
    }

    /**
     * @return Response
     */
    public function browseAction()
    {
        return $this->render('EstateUiBundle:Estate:index.html.twig', array(
        ));
    }
}