<?php


namespace AppBundle\Controller;

use AppBundle\Document\FriendAdd;
use AppBundle\Document\PostAdd;
use AppBundle\Document\ProfileAdd;
use AppBundle\Document\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListController extends Controller
{
    /**
     * @Route("/", name="welcome")
     */
    public function showAction(Request $request)
    {
        $characters = [
            'Daenerys Targaryen' => 'Emilia Clarke',
            'Jon Snow' => 'Kit Harington',
            'Arya Stark' => 'Maisie Williams',
            'Melisandre' => 'Carice van Houten',
            'Khal Drogo' => 'Jason Momoa',
            'Tyrion Lannister' => 'Peter Dinklage',
            'Ramsay Bolton' => 'Iwan Rheon',
            'Petyr Baelish' => 'Aidan Gillen',
            'Brienne of Tarth' => 'Gwendoline Christie',
            'Lord Varys' => 'Conleth Hill'
        ];
        return $this->render('default/index.html.twig', array('character' => $characters));
    }
    /**
     * @Route("/profile_details/{id}",name="profile_details")
     */
    public function showProfile(Request $request,$id)
    {
        $dm = $this->get('doctrine_mongodb')->getManager();

        $repository = $dm->getRepository(User::class);
        $user = $repository->find($id);

        if(!empty($user))
        {
            $profiledetails = $dm->createQueryBuilder(ProfileAdd::class)
                ->field('for_id')->references($user)
                ->getQuery()
                ->getSingleResult();

            return $this->render('profile/profile_details.html.twig', [
                'profileDetails' => $profiledetails
            ]);
        }
        else
        {
        //Todo
        }
    }

    /**
     * @Route("/myprofile/",name="myprofile")
     */
    public function showMyProfile(Request $request)
    {
        $dm = $this->get('doctrine_mongodb')->getManager();

        $profiledetails = $dm->createQueryBuilder(ProfileAdd::class)
            ->field('for_id')->references($this->getUser())
            ->getQuery()
            ->getSingleResult();

        return $this->render('profile/profile.html.twig',[
            'profileDetails' => $profiledetails
        ]);
    }

    /**
     * @Route("/mypost/",name="mypost")
     */
    public function showMyPost(Request $request)
    {
        $dm = $this->get('doctrine_mongodb')->getManager();

        $mypost = $dm->createQueryBuilder(PostAdd::class)
            ->select("postname","post","created","like")
            ->field('postby')->references($this->getUser())
            ->getQuery()
            ->execute();

        return $this->render('post/my.html.twig', [
            'myPost' => $mypost
        ]);
    }


    /**
     * @Route("/allpost/",name="allpost")
     */
    public function showAllPost(Request $request)
    {
        $dm = $this->get('doctrine_mongodb')->getManager();

        $allpost = $dm->createQueryBuilder(PostAdd::class)
            ->sort('postname', 'ASC')
            ->getQuery()
            ->execute();

        return $this->render('post/all.html.twig', [
            'allPost' => $allpost
        ]);
    }

    /**
     * @param Request $request
     * @param $id
     * @Route("allpost/{id}")
     */
    public function increaseLike(Request $request,$id)
    {
        $dm = $this->get('doctrine_mongodb')->getManager();

        $repository = $dm->getRepository(PostAdd::class);
        $post = $repository->find($id);

        if(!empty($post))
        {
            $updated=new \MongoTimestamp();
            $like = $post->getLike();
            $like = $like + 1;

            $dm->createQueryBuilder(PostAdd::class)
                ->updateOne()
                ->field('like')->set($like)
                ->field('updated')->set($updated)
                ->field('id')->equals($id)
                ->getQuery()
                ->execute();
        }
        else
        {
            //Todo
        }

        return $this->redirectToRoute("allpost");
    }

    /**
     * @Route("/friendlist/{id}")
     */
    public function showFriendList(Request $request,int $id)
    {
        $dm = $this->get('doctrine_mongodb')->getManager();

        $friendList = $dm->createQueryBuilder(FriendAdd::class)
            ->field('receivedby')->references($this->getUser())
            ->field('status')->equals($id)
            ->getQuery()
            ->execute();

              return $this->render('friend/friend.html.twig', [
            'friendList' => $friendList
        ]);

    }
    /**
     * @param Request $request
     * @param $id
     * @Route("/friendaccept/{id}",name="friendaccept")
     */
    public function friendAccept(Request $request,int $id)
    {
        $dm = $this->get('doctrine_mongodb')->getManager();

        $repository = $dm->getRepository(FriendAdd::class);
        $existFriend = $repository->find($id);

        if(!empty($existFriend))
        {
            $updated=new \MongoTimestamp();

            $dm->createQueryBuilder(FriendAdd::class)
                ->updateOne()
                ->field('status')->set(1)
                ->field('updated')->set($updated)
                ->field('id')->equals($id)
                ->getQuery()
                ->execute();
        }
        else
        {
            //Todo
        }

        return $this->redirectToRoute("myprofile");
    }

    /**
     * @param Request $request
     * @param $id
     * @Route("/friendreject/{id}",name="friendreject")
     */
    public function friendReject(Request $request,int $id)
    {
        $dm = $this->get('doctrine_mongodb')->getManager();

        $repository = $dm->getRepository(FriendAdd::class);
        $existFriend = $repository->find($id);

        if(!empty($existFriend))
        {
            $updated=new \MongoTimestamp();

            $dm->createQueryBuilder(FriendAdd::class)
                ->updateOne()
                ->field('status')->set(-1)
                ->field('updated')->set($updated)
                ->field('id')->equals($id)
                ->getQuery()
                ->execute();
        }
        else
        {
            //Todo
        }

        return $this->redirectToRoute("myprofile");
    }
}