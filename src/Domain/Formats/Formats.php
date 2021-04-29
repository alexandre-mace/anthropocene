<?php


namespace App\Domain\Formats;


final class Formats
{
    public static function getAll(): array
    {
        return [
            [
                'label' => 'Vidéo',
                'value' => 'Vidéo',
                'img' => 'https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/271/television_1f4fa.png',
            ],
            [
                'label' => 'Interview',
                'value' => 'Interview',
                'img' => 'https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/271/microphone_1f3a4.png',
            ],
            [
                'label' => 'Infographie',
                'value' => 'Infographie',
                'img' => 'https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/271/artist-palette_1f3a8.png',
            ],
            [
                'label' => 'Livre',
                'value' => 'Livre',
                'img' => 'https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/271/open-book_1f4d6.png',
            ],
            [
                'label' => 'Fait',
                'value' => 'Fait',
                'img' => 'https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/271/speech-balloon_1f4ac.png',
            ],
            [
                'label' => 'Outil',
                'value' => 'Outil',
                'img' => 'https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/279/microscope_1f52c.png',
            ]
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