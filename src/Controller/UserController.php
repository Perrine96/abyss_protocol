<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'user')]
    public function index(): Response
    {
        $users = [
            ['name' => 'Luna', 'xp' => 25, 'type' => 'data whisperer', 'gender' => 'female', 'function' => 'Hacker and intelligence gatherer', 'category' => 'augmented human'],
            ['name' => 'Kade', 'xp' => 152, 'type' => 'tech guru', 'gender' => 'male', 'function' => 'Engineer and tech specialist', 'category' => 'augmented human'], 
            ['name' => 'Raine', 'xp' => 247, 'type' => 'synth medic', 'gender' => 'non-binary', 'function' => 'Healer and support', 'category' => 'human'], 
            ['name' => 'Zephyr', 'xp' => 789, 'type' => 'corrupted overlord', 'gender' => 'male', 'function' => 'Main antagonist and power-hungry ruler', 'category' => 'human'],
            ['name' => 'Nova', 'xp' => 593, 'type' => 'glitch artificer', 'gender' => 'female', 'function' => 'Engineer and tech specialist', 'category' => 'augmented human'],
            ['name' => 'Orion', 'xp' => 143, 'type' => 'circuit prophet', 'gender' => 'non-binary', 'function' => 'Visionary and strategist', 'category' => 'human'],
            ['name' => 'Jax', 'xp' => 435, 'type' => 'echo runner', 'gender' => 'male', 'function' => 'Scout and speedster', 'category' => 'augmented human'],
            ['name' => 'Lyra', 'xp' => 143, 'type' => 'neuro ghost', 'gender' => 'female', 'function' => 'Cyber psychic and manipulator', 'category' => 'human'],
            ['name' => 'Draven', 'xp' => 143, 'type' => 'cyber oracle', 'gender' => 'male', 'function' => 'Strategist and foresight expert', 'category' => 'augmented human'],
        ];

        return $this->render('user/index.html.twig', [
            'users' => $users,
        ]);
    }
}
