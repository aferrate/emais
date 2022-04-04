<?php

namespace App\Tests;

use App\Application\UseCases\AddVhs;
use App\Domain\Model\Vhs;
use App\Repository\VhsRepository;
use PHPUnit\Framework\TestCase;

class AddVhsTest extends TestCase
{
    /**
     * @param array<mixed> $resultVhs
     */
    private array $resultVhs;

    protected function setUp(): void
    {
        $this->resultVhs = [
            'idFilm' => 508947,
            'full_details' => [
              'adult' => false,
              'backdrop_path' => '/iPhDToxFzREctUA0ZQiYZamXsMy.jpg',
              'belongs_to_collection' => null,
              'budget' => 190000000,
              'genres' => [
                0 => [
                  'id' => 16,
                  'name' => 'Animation',
                ],
              ],
              'homepage' => 'https://www.disneyplus.com/movies/turning-red/4mFPCXJi7N2m',
              'imdb_id' => 'tt8097030',
              'original_language' => 'en',
              'original_title' => 'Turning Red',
              'overview' => 'Thirteen-year-old Mei is experiencing the awkwardness of being a teenager with a twist – when she gets too excited, she transforms into a giant red panda.',
              'popularity' => 8354.569,
              'poster_path' => '/qsdjk9oAKSQMWs0Vt5Pyfh6O4GZ.jpg',
              'production_companies' => [
                0 => [
                  'id' => 2,
                  'logo_path' => '/wdrCwmRnLFJhEoH8GSfymY85KHT.png',
                  'name' => 'Walt Disney Pictures',
                  'origin_country' => 'US',
                ],
              ],
              'production_countries' => [
                0 => [
                  'iso_3166_1' => 'US',
                  'name' => 'United States of America',
                ],
              ],
              'release_date' => '2022-03-10',
              'revenue' => 0,
              'runtime' => 100,
              'spoken_languages' => [
                0 => [
                  'english_name' => 'Cantonese',
                  'iso_639_1' => 'cn',
                  'name' => '广州话 / 廣州話',
                ],
              ],
              'status' => 'Released',
              'tagline' => 'Growing up is a beast.',
              'title' => 'Turning Red',
              'video' => false,
              'vote_average' => 7.5,
              'vote_count' => 975,
            ],
        ];
    }

    public function testAddVhsBadParams(): void
    {
        $vhs = $this->resultVhs;
        $vhs['full_details']['budget'] = null;

        $vhsRepository = $this->createMock(VhsRepository::class);

        $addVhs = new AddVhs($vhsRepository);

        $this->assertSame(['data' => ['message' => 'bad formed json missing attributes'], 'badRequest' => true], $addVhs->execute($vhs));
    }

    public function testAddVhsBadId(): void
    {
        $vhs = new Vhs();

        $vhsRepository = $this->createMock(VhsRepository::class);

        $vhsRepository->expects($this->any())
            ->method('findOneById')
            ->willReturn($vhs)
        ;

        $addVhs = new AddVhs($vhsRepository);

        $this->assertSame(['data' => ['message' => 'already existing id'], 'badRequest' => true], $addVhs->execute($this->resultVhs));
    }

    public function testAddVhs(): void
    {
        $vhsRepository = $this->createMock(VhsRepository::class);

        $vhsRepository->expects($this->any())
            ->method('save')
        ;

        $addVhs = new AddVhs($vhsRepository);

        $this->assertSame(['data' => ['message' => 'vhs created'], 'badRequest' => false], $addVhs->execute($this->resultVhs));
    }
}
