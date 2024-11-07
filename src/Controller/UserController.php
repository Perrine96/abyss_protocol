<?php

namespace App\Controller;

use App\Repository\CharactersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'user')]
    public function index(CharactersRepository $charactersRepository): Response
    {
        $characters = $charactersRepository->findAll();
        // $users = [
        //     ['name' => 'Luna', 'xp' => 25, 'type' => 'data whisperer', 'gender' => 'female', 'role' => 'Hacker and intelligence gatherer', 'category' => 'augmented human'],
        //     ['name' => 'Kade', 'xp' => 152, 'type' => 'tech guru', 'gender' => 'male', 'role' => 'Engineer and tech specialist', 'category' => 'augmented human'], 
        //     ['name' => 'Raine', 'xp' => 247, 'type' => 'synth medic', 'gender' => 'non-binary', 'role' => 'Healer and support', 'category' => 'human'], 
        //     ['name' => 'Zephyr', 'xp' => 789, 'type' => 'corrupted overlord', 'gender' => 'male', 'role' => 'Main antagonist and power-hungry ruler', 'category' => 'human'],
        //     ['name' => 'Nova', 'xp' => 593, 'type' => 'glitch artificer', 'gender' => 'female', 'role' => 'Engineer and tech specialist', 'category' => 'augmented human'],
        //     ['name' => 'Orion', 'xp' => 143, 'type' => 'circuit prophet', 'gender' => 'non-binary', 'role' => 'Visionary and strategist', 'category' => 'human'],
        //     ['name' => 'Jax', 'xp' => 435, 'type' => 'echo runner', 'gender' => 'male', 'role' => 'Scout and speedster', 'category' => 'augmented human'],
        //     ['name' => 'Lyra', 'xp' => 143, 'type' => 'neuro ghost', 'gender' => 'female', 'role' => 'Cyber psychic and manipulator', 'category' => 'human'],
        //     ['name' => 'Draven', 'xp' => 143, 'type' => 'cyber oracle', 'gender' => 'male', 'role' => 'Strategist and foresight expert', 'category' => 'augmented human'],
        // ];

        return $this->render('user/user.html.twig', [
            'users' => $characters,
        ]);
    }
}
