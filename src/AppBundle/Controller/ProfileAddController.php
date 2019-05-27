<?php


namespace AppBundle\Controller;


use AppBundle\Document\ProfileAdd;
use AppBundle\Document\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\ProfileAddType;

class ProfileAddController extends Controller
{
    /**
     * @param Request $request
     * @param User $user
     * @Route("/addprofile/{for_id}")
     */
    public function profileAdd(Request $request,$for_id)
    {
        $dm = $this->get('doctrine_mongodb')->getManager();
        $repository = $dm->getRepository(User::class);
        $user = $repository->find($for_id);
        $profile_add = new ProfileAdd();
        $form = $this->createForm(ProfileAddType::class, $profile_add);
        $form->handleRequest($request);
        if(!empty($user))
        {
            if ($form->isSubmitted() && $form->isValid())
            {

            $user->setUpdated(new \MongoTimestamp());
            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($user);
            $dm->flush();

            $profile_add->setCreated(new \MongoTimestamp());
            $profile_add->setForId($user);
            $dm->persist($profile_add);
            $dm->flush();

            if($profile_add->getID()) {
                $this->addFlash('success', 'Profile Update Successfull!');
                return $this->redirectToRoute('myprofile');
            }
            else
            {
                return $this->redirectToRoute('/');
            }
        }
        }else{
            return false;
        }

        return $this->render('profile/profile_add.html.twig', [
            'form' => $form->createView(),
            'for_id' => $for_id,
        ]);
    }

}