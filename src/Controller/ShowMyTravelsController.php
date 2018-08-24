<?php
/**
 * Created by PhpStorm.
 * User: Albert
 * Date: 20/01/2018
 * Time: 19:59
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use App\Application\UseCases\Travel\GetAllMyTravelsService;
use App\Infrastructure\TravelBundle\Repository\DoctrineTravelRepository;

class ShowMyTravelsController extends Controller
{
    private $travelRepository;

    /**
     * ShowMyTravelsController constructor.
     * @param $travelRepository
     */
    public function __construct(DoctrineTravelRepository $travelRepository)
    {
        $this->travelRepository = $travelRepository;
    }


    /**
     * @Route("/{_locale}/private",name="main_private")
     *
     * @return Response
     */
    public function index() {
        $user = $this->getUser();
        $travels =  $getAllMyTravelsService = new GetAllMyTravelsService($this->travelRepository);
        return $this->render('private/index.html.twig', array('travels' =>$travels));
    }
}