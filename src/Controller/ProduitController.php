<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Produit;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ProduitController extends AbstractController
{
    // Create (Post request)
    /**
     * @Route("/produit/post", name="create_produit")
     */
    public function index(Request $request)
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduit(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();
        $request->request->get('page');

        $jsonObj = json_decode($request->getContent(), true);
        
        $nom = $jsonObj['nom'];
        $image = $jsonObj['image'];
        // $date_ajout = $jsonObj['date_ajout'];
        $stock = $jsonObj['stock'];
        $id_famille = $jsonObj['id_famille'];
        $prix = $jsonObj['prix'];
        $prix_promo = $jsonObj['prix_promo'];
        $is_promo = $jsonObj['is_promo'];
        $is_new = $jsonObj['is_new'];
        $description = $jsonObj['description'];
        $poids = $jsonObj['poids'];

        $produit = new produit(); 
        if ($request->getMethod() == 'POST') {

            $produit->setNom($nom);
            $produit->setImage($image);
            $produit->setDateAjout(\DateTime::createFromFormat('Y-m-d', "2020-01-10"));
            $produit->setStock($stock);
            $produit->setIdFamille($id_famille);
            $produit->setPrix($prix);
            $produit->setPrixPromo($prix_promo);
            $produit->setIsPromo($is_promo);
            $produit->setIsNew($is_new);
            $produit->setDescription($description);
            $produit->setPoids($poids);
        }

        $entityManager->persist($produit);
        $entityManager->flush();

        // return new Response('Saved new produit with id '.$produit->getId());
        $response = new JsonResponse(['id' => $produit->getId(), 'nom' => $produit->getNom(), 'image' => $produit->getImage(),'date_ajout' => $produit->getDateAjout(), 'stock' => $produit->getStock(), 'id_famille' => $produit->getIdFamille(), 'prix' => $produit->getPrix(), 'prix_promo' => $produit->getPrixPromo(),'is_promo' => $produit->getIsPromo(),'is_pew' => $produit->getIsNew(), 'description' => $produit->getDescription(),'poids' => $produit->getPoids()]); 
        return $response;
    }

    // Read
    /**
     * @Route("/produit/{id}", name="produit_show")
     */
    public function show($id)
    {
        $produit = $this->getDoctrine()
            ->getRepository(Produit::class)
            ->find($id);

        if (!$produit) {
            throw $this->createNotFoundException(
                'No produit found for id '.$id
            );
        }

        //return new Response('Vous avez demandé le produit: '.$produit->getNom());
        $response = new JsonResponse(['id' => $produit->getId(), 'nom' => $produit->getNom(), 'image' => $produit->getImage(),'date_ajout' => $produit->getDateAjout(), 'stock' => $produit->getStock(), 'id_famille' => $produit->getIdFamille(), 'prix' => $produit->getPrix(), 'prix_promo' => $produit->getPrixPromo(),'is_promo' => $produit->getIsPromo(),'is_pew' => $produit->getIsNew(), 'description' => $produit->getDescription(),'poids' => $produit->getPoids()]); 
        return $response;
    }

    // Read all Produit by date DESC
    /**
     * @Route("/produit", name="produit_show_all")
     */
    public function show_all()
    {
        $produit = $this->getDoctrine()
            ->getRepository(Produit::class)
            ->findAllProduit();
            

        if (!$produit) {
            throw $this->createNotFoundException(
                'No produit found for id '.$id
            );
        }
        // print_r($produit);
        // $produit = json_encode($produit);
        // json_encode(array_values($produit)).
        foreach ($produit as $value) {
            print_r($value);
            echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ ";
            
        }

        
        $response = new JsonResponse($produit);
        // return new Response('');
        // $response = new JsonResponse(['id' => $produit->getId(), 'nom' => $produit->getNom(), 'image' => $produit->getImage(),'date_ajout' => $produit->getDateAjout(), 'stock' => $produit->getStock(), 'id_famille' => $produit->getIdFamille(), 'prix' => $produit->getPrix(), 'prix_promo' => $produit->getPrixPromo(),'is_promo' => $produit->getIsPromo(),'is_pew' => $produit->getIsNew(), 'description' => $produit->getDescription(),'poids' => $produit->getPoids()]); 
         return $response;
    }

    // Update (post request)
    /**
     * @Route("/produit/edit/{id}", name="produit_update")
     */
    public function update(Request $request,$id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $produit = $entityManager->getRepository(Produit::class)->find($id);

        $request->request->get('page');

        $jsonObj = json_decode($request->getContent(), true);
        
        $nom = $jsonObj['nom'];
        $image = $jsonObj['image'];
        // $date_ajout = $jsonObj['date_ajout'];
        $stock = $jsonObj['stock'];
        $id_famille = $jsonObj['id_famille'];
        $prix = $jsonObj['prix'];
        $prix_promo = $jsonObj['prix_promo'];
        $is_promo = $jsonObj['is_promo'];
        $is_new = $jsonObj['is_new'];
        $description = $jsonObj['description'];
        $poids = $jsonObj['poids'];

        if (!$produit) {
            throw $this->createNotFoundException(
                'No produit found for id '.$id
            );
        }

            $produit->setNom($nom);
            $produit->setImage($image);
            // $produit->setDateAjout(\DateTime::createFromFormat('Y-m-d', "2020-01-10"));
            $produit->setStock($stock);
            $produit->setIdFamille($id_famille);
            $produit->setPrix($prix);
            $produit->setPrixPromo($prix_promo);
            $produit->setIsPromo($is_promo);
            $produit->setIsNew($is_new);
            $produit->setDescription($description);
            $produit->setPoids($poids);
            
            $entityManager->flush();

        return $this->redirectToRoute('produit_show', [
            'id' => $produit->getId()
        ]);
    }

    // Delete
    /**
     * @Route("/produit/delete/{id}", name="produit_delete")
     */
    public function delete($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $produit = $this->getDoctrine()
            ->getRepository(Produit::class)
            ->find($id);

        if (!$produit) {
            throw $this->createNotFoundException(
                'No produit found for id '.$id
            );
        }
        $entityManager->remove($produit);
        $entityManager->flush();

        return new Response('Deleted produit with id: '.$id);
    }
}