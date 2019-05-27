<?php

namespace AppBundle\Controller;

use AppBundle\Document\User;
use AppBundle\Form\UserType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class RegistrationController extends Controller
{
    /**
     * @Route("/register/",name="register")
     */
    public function registerAction(Request $request)
    {
        // Create a new blank user and process the form
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Encode the new users password
            $encoder = $this->get('security.password_encoder');
            $password = $encoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
            // Set their role
            $user->setRole('ROLE_USER');
            // Save
            $user->setCreated(new \MongoTimestamp());
            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($user);
            $dm->flush();
            if($user->getID()) {
                $this->addFlash('success', 'User Registration Successfull!');
                return $this->redirectToRoute('login');
            }
            else
            {
                return $this->redirectToRoute('register');
            }
        }
        return $this->render('auth/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
