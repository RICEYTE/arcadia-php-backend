<?php

namespace App\Controller;

use App\Entity\Role;
use App\Repository\RoleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/api/role',name: 'app_api_role_')]
class RoleController extends AbstractController
{
    private $manager;
    private $repository;
    private $serializer;
    public function __construct(
        EntityManagerInterface $manager,
        SerializerInterface $serializer,
        RoleRepository $repository
    )
    {
        $this->repository = $repository;
        $this->manager = $manager;
        $this->serializer = $serializer;
    }

    #[Route('/', name: 'getAll',methods: 'GET')]
    public function getAll(): JsonResponse
    {
        $rolesList = $this->repository->findAll();

        if($rolesList){
            $data = $this->serializer->serialize($rolesList,'json');
            $code_http= Response::HTTP_OK;
        }
        else{
            $data = $this->serializer->serialize("Aucun Role trouvé!",'json');
            $code_http= Response::HTTP_NOT_FOUND;
        }

        $jsonResponse = new JsonResponse($data,$code_http,[],'true');

        return $jsonResponse;
    }

    #[Route('/', name: 'create',methods: 'POST')]
    public function create(Request $request): JsonResponse
    {
        $role = $this->serializer->deserialize($request->getContent(),Role::class,'json');


        if ($role){

            $this->manager->persist($role);
            $this->manager->flush();
            $data =$this->serializer->serialize($role,'json');
            $code_http= Response::HTTP_CREATED;

        }
        else {
            $data = $this->serializer->serialize("creation Impossible!",'json');
            $code_http= Response::HTTP_NOT_FOUND;
        }

        $jsonResponse = new JsonResponse($data,$code_http,[],'true');
        return $jsonResponse;
    }

    #[Route('/{id}', name: 'delete',methods: 'DELETE')]
    public function delete(Request $request, int $id): JsonResponse
    {
        $role = $this->repository->findOneBy(['role_id'=>$id]);


        if ($role){

            $this->manager->remove($role);
            $this->manager->flush();
            $data =$this->serializer->serialize("role supprime !",'json');
            $code_http= Response::HTTP_OK;

        }
        else {
            $data = $this->serializer->serialize("creation Impossible!",'json');
            $code_http= Response::HTTP_NOT_FOUND;
        }

        $jsonResponse = new JsonResponse($data,$code_http,[],'true');
        return $jsonResponse;
    }
}
