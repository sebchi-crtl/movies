<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $movie = new Movie();
        $movie->setTitle('The Dark Knight');
        $movie->setReleaseYear(2008);
        $movie->setDescription('This is a Dc movie based of Batman fighting Joker');
        $movie->setImagePath('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.cbr.com%2Fthe-dark-knight-rises-best-nolan-batman%2F&psig=AOvVaw13x8Fy5oFlca7VntZhtwni&ust=1648514356021000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJiRxt7I5_YCFQAAAAAdAAAAABAD');
        
        $manager->persist($movie);


        $movie2 = new Movie();
        $movie2->setTitle('Peaky Blinders');
        $movie2->setReleaseYear(2022);
        $movie2->setDescription('A description about the strongest family cartel in england');
        $movie2->setImagePath('https://www.google.com/url?sa=i&url=https%3A%2F%2Fcollider.com%2Fpeaky-blinders-season-6-cast-character-guide%2F&psig=AOvVaw1iNQ1b14MTgmLO4ZZST4PX&ust=1648514858643000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCIiKseXK5_YCFQAAAAAdAAAAABAD');
        
        $manager->persist($movie2);


        $manager->flush();
    }
}