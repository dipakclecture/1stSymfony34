<?php


namespace AppBundle\Controller;

use AppBundle\Document\PostAdd;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\PostAddType;

class PostAddController extends Controller
{
    /**
     * @param Request $request
     * @Route("/addpost/")
     */
    public function addPost(Request $request)
    {
        $dm = $this->get('doctrine_mongodb')->getManager();
        $post_add = new PostAdd();
        $form = $this->createForm(PostAddType::class, $post_add);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
                $post_add->setCreated(new \MongoTimestamp());
                $post_add->setPostby($this->getUser());
                $post_add->setLike(0);
                $dm->persist($post_add);
                $dm->flush();

                if ($post_add->getID()) {
                    $this->addFlash('success', 'Post Creation Successfull!');
                    return $this->redirectToRoute('mypost');
                } else {
                    return $this->redirectToRoute('/');
                }
            }

        return $this->render('profile/post_add.html.twig', [
            'form' => $form->createView()
        ]);
    }

}