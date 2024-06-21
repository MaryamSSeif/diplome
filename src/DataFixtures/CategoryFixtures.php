<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        // category for news website
        $data = [
            1 => [
                'name' => 'cinema',
                'slug' => 'cinema',
                'parent' => [
                    1=> [
                        'name' => 'action',
                        'slug' => 'action'
                    ],
                    2=> [
                        'name' => 'comedy',
                        'slug' => 'comedy'
                    ],
                    3=> [
                        'name' => 'drama',
                        'slug' => 'drama'
                    ],
                ],
            ],
            2 => [
                'name' => 'sport',
                'slug' => 'sport',
                'parent' => [
                    1=> [
                        'name' => 'football',
                        'slug' => 'football'
                    ],
                    2=> [
                        'name' => 'basketball',
                        'slug' => 'basketball'
                    ],
                    3=> [
                        'name' => 'tennis',
                        'slug' => 'tennis'
                    ],
                ],
                3 => [
                    'name' => 'politics',
                    'slug' => 'politics',
                    'parent' => [
                        1=> [
                            'name' => 'election',
                            'slug' => 'election'
                        ],
                        2=> [
                            'name' => 'government',
                            'slug' => 'government'
                        ],
                        3=> [
                            'name' => 'parliament',
                            'slug' => 'parliament'
                        ],
                    ],
                ],
                4 => [
                    'name' => 'economy',
                    'slug' => 'economy',
                    'parent' => [
                        1=> [
                            'name' => 'stock',
                            'slug' => 'stock'
                        ],
                        2=> [
                            'name' => 'finance',
                            'slug' => 'finance'
                        ],
                        3=> [
                            'name' => 'business',
                            'slug' => 'business'
                        ],
                    ],
                ],
                5 => [
                    'name' => 'health',
                    'slug' => 'health',
                    'parent' => [
                        1=> [
                            'name' => 'disease',
                            'slug' => 'disease'
                        ],
                        2=> [
                            'name' => 'medicine',
                            'slug' => 'medicine'
                        ],
                        3=> [
                            'name' => 'doctor',
                            'slug' => 'doctor'
                        ],
                    ],
                ],
            ],
        ];

        foreach ($data as $key => $value) {
            $category = new Category();
            $category->setName($value['name']);
            $category->setSlug($value['slug']);
            $manager->persist($category);

            foreach ($value['parent'] as $k => $v) {
                $category1 = new Category();
                $category1->setName($v['name']);
                $category1->setSlug($v['slug']);
                $manager->persist($category1);
            }
        }


        $manager->flush();
    }
}
