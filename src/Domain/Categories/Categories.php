<?php


namespace App\Domain\Categories;


final class Categories
{
    public static function getAll(): array
    {
        return [
            [
                'label' => 'Transport',
                'value' => 'Transport',
                'img' => 'https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/271/airplane_2708-fe0f.png',
            ],
            [
                'label' => 'Énergie',
                'value' => 'Énergie',
                'img' => 'https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/271/battery_1f50b.png',
            ],
            [
                'label' => 'Économie',
                'value' => 'Économie',
                'img' => 'https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/271/money-bag_1f4b0.png',
            ],
            [
                'label' => 'Collapsologie',
                'value' => 'Collapsologie',
                'img' => 'https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/271/chart-decreasing_1f4c9.png',
            ],
            [
                'label' => 'Climat',
                'value' => 'Climat',
                'img' => 'https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/271/thermometer_1f321-fe0f.png',
            ],
            [
                'label' => 'Habitat',
                'value' => 'Habitat',
                'img' => 'https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/271/house_1f3e0.png',
            ],
            [
                'label' => 'Biodiversité',
                'value' => 'Biodiversité',
                'img' => 'https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/271/deciduous-tree_1f333.png',
            ],
            [
                'label' => 'Agriculture',
                'value' => 'Agriculture',
                'img' => 'https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/271/sheaf-of-rice_1f33e.png',
            ],
            [
                'label' => 'Démographie',
                'value' => 'Démographie',
                'img' => 'https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/271/family-man-woman-girl-boy_1f468-200d-1f469-200d-1f467-200d-1f466.png',
            ],
            [
                'label' => 'Ressources',
                'value' => 'Ressources',
                'img' => 'https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/271/droplet_1f4a7.png',
            ],
        ];
    }

    public static function getAllForUser(): array
    {
        return array_merge(
            [
                [
                    'label' => 'Tout',
                    'value' => 'Tout',
                    'img' => 'https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/271/eye_1f441-fe0f.png',
                ]
            ],
            self::getAll()
        );
    }
}