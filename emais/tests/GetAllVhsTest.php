<?php

namespace App\Tests;

use App\Application\UseCases\GetAllVhs;
use App\Repository\VhsRepository;
use PHPUnit\Framework\TestCase;

class GetAllVhsTest extends TestCase
{
    /**
     * @param array<mixed> $resultVhs
     */
    private array $resultVhs;

    protected function setUp(): void
    {
        $this->resultVhs = [
            'full_details' => [
                'adult' => false,
                'backdropPath' => '/iPhDToxFzREctUA0ZQiYZamXsMy.jpg',
                'belongsToCollection' => null,
                'budget' => 190000000,
                'genres' => [
                    0 => [
                        'id' => 16,
                        'name' => 'Animation',
                    ],
                ],
                'homepage' => 'https://www.disneyplus.com/movies/turning-red/4mFPCXJi7N2m',
                'imdbId' => 'tt8097030',
                'originalLanguage' => 'en',
                'originalTitle' => 'Turning Red',
                'overview' => 'Thirteen-year-old Mei is experiencing the awkwardness of being a teenager with a twist – when she gets too excited, she transforms into a giant red panda.',
                'popularity' => 8354.569,
                'posterPath' => '/qsdjk9oAKSQMWs0Vt5Pyfh6O4GZ.jpg',
                'productionCompanies' => [
                    0 => [
                        'id' => 2,
                        'name' => 'Walt Disney Pictures',
                        'logo_path' => '/wdrCwmRnLFJhEoH8GSfymY85KHT.png',
                        'origin_country' => 'US',
                    ],
                ],
                'productionCountries' => [
                    0 => [
                        'name' => 'United States of America',
                        'iso_3166_1' => 'US',
                    ],
                ],
                'releaseDate' => '2022-03-10',
                'revenue' => 0,
                'runtime' => 100,
                'spokenLanguages' => [
                    0 => [
                        'name' => '广州话 / 廣州話',
                        'iso_639_1' => 'cn',
                        'english_name' => 'Cantonese',
                    ],
                ],
                'status' => 'Released',
                'tagline' => 'Growing up is a beast.',
                'title' => 'Turning Red',
                'video' => false,
                'voteAverage' => 7.5,
                'voteCount' => 975,
                'id' => 508947,
            ],
        ];
    }

    public function testGetAllVhsEmpty(): void
    {
        $vhsRepository = $this->createMock(VhsRepository::class);

        $vhsRepository->expects($this->any())
            ->method('findAll')
            ->willReturn([])
        ;

        $getAllVhs = new GetAllVhs($vhsRepository);

        $this->assertSame(['message' => 'no data found'], $getAllVhs->execute());
    }

    public function testGetAllVhsNoEmpty(): void
    {
        $vhsRepository = $this->createMock(VhsRepository::class);

        $vhsRepository->expects($this->any())
            ->method('findAll')
            ->willReturn($this->resultVhs['full_details'])
        ;

        $getAllVhs = new GetAllVhs($vhsRepository);

        $this->assertSame($this->resultVhs['full_details'], $getAllVhs->execute());
    }
}
