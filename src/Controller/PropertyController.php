<?php
namespace App\Controller;


use App\Entity\Property;
use App\Repository\PropertyRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class PropertyController extends AbstractController {

    /**
     * @PropertyRepository
     */

    private $repository;
    public function  __construct(PropertyRepository $repository, ObjectManager $em)
    {
        $this->repository = $repository;
        $this->em=$em;
    }


    /**
     * @Route("/biens", name="property.index")
     * @return Response
     */
    public function  index():Response{


//        $property = new Property();
//        $property->setTitle('Mon premier bine')
//            ->setPrice('20000')
//            ->setRooms(4)
//            ->setBedrooms(3)
//            ->setDescription('unkwdfjljdk skdf')
//            ->setSurface(60)
//            ->setFloor(4)
//            ->setHeat(1)
//            ->setCity(4)
//            ->setAdresse('Rte gremda')
//            ->setPostalCode('3000');
//
//        $em = $this->getDoctrine()->getManager();
//        $em->persist($property);
//        $em->flush();







//        $porperty = $this->repository->findAllVisible();
//        $porperty[0]->setSold(false);//modifier le champ sold
//        dump($porperty);
//        $this->em->flush();
        return $this->render('property/index.html.twig',[
            'current_menu'=>'proprtties'

        ]);

    }

    /**
     * @Route("/biens/{slug}-{id}", name="property.detail" , requirements={"slug": "[a-z0-9\-]*"})
     * @property $prop
     * @return Response
     */
    public function  detail(property $prop,string $slug):Response{

        //redirection vers le lien canonique si onchange depuis L'url
        if(  $prop->getSlug()!==$slug  ){
            return $this->redirectToRoute('property.detail',[
                'id'=>$prop->getId(),
                'slug'=>$prop->getSlug()
            ],301);
        }


        return $this->render('property/detail.html.twig',[
            'current_menu'=>'detail',
            'property'=>$prop

        ]);
    }


    /**
     * @Route("/pret", name="property.pret")
     * @return Response
     */
    public function  pret():Response{

        return $this->render('property/index.html.twig',[
            'current_menu'=>'pret'
        ]);

    }
}