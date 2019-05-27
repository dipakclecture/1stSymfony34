<?php


namespace AppBundle\Controller;

use AppBundle\Document\FriendAdd;
use AppBundle\Document\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class FriendAddController extends Controller
{
    /**
     * @Route("/friendrequest/{id}")
     */
    public function friendRequest(Request $request,$id)
    {

    $dm = $this->get('doctrine_mongodb')->getManager();

    $repository = $dm->getRepository(User::class);
    $receivedby = $repository->find($id);

    $existChecking = $dm->createQueryBuilder(FriendAdd::class)
                        ->field('sentby')->references($this->getUser())
                        ->field('receivedby')->references($receivedby)
                        ->getQuery()
                        ->execute()
                        ->count();

    if(!empty($receivedby) && empty($existChecking))
    {
        $friendadd = new FriendAdd();
        $friendadd->setCreated(new \MongoTimestamp());
        $friendadd->setSentby($this->getUser());
        $friendadd->setReceivedby($receivedby);
        $friendadd->setStatus(0);
        $dm->persist($friendadd);
        $dm->flush();
    }
        return $this->redirectToRoute("myprofile");
}
}