<?php

namespace App\Application\UseCases;

use App\Domain\Model\Vhs;
use App\Domain\Repository\VhsRepositoryInterface;

class AddVhs
{
    private VhsRepositoryInterface $vhsRepository;

    public function __construct(VhsRepositoryInterface $vhsRepository)
    {
        $this->vhsRepository = $vhsRepository;
    }

    /**
     * @return array $vhsArray
     */
    public function execute(array $vhsArray): array
    {
        if (!$this->checkMandatoryAttributes($vhsArray)) {
            return ['data' => ['message' => 'bad formed json missing attributes'], 'badRequest' => true];
        }

        if ($this->checkIfIdExists($vhsArray['idFilm'])) {
            return ['data' => ['message' => 'already existing id'], 'badRequest' => true];
        }

        $vhs = new Vhs();
        $vhs->addAttributesFromArray($vhsArray);

        $this->vhsRepository->save($vhs);

        return ['data' => ['message' => 'vhs created'], 'badRequest' => false];
    }

    private function checkMandatoryAttributes(array $vhsArray): bool
    {
        if (isset($vhsArray['idFilm']) && is_int($vhsArray['idFilm'])
            && isset($vhsArray['full_details']['adult']) && is_bool($vhsArray['full_details']['adult'])
            && isset($vhsArray['full_details']['backdrop_path']) && is_string($vhsArray['full_details']['backdrop_path'])
            && isset($vhsArray['full_details']['budget']) && is_numeric($vhsArray['full_details']['budget'])
            && isset($vhsArray['full_details']['genres']) && is_array($vhsArray['full_details']['genres'])
            && isset($vhsArray['full_details']['homepage']) && is_string($vhsArray['full_details']['homepage'])
            && isset($vhsArray['full_details']['imdb_id']) && is_string($vhsArray['full_details']['imdb_id'])
            && isset($vhsArray['full_details']['original_language']) && is_string($vhsArray['full_details']['original_language'])
            && isset($vhsArray['full_details']['original_title']) && is_string($vhsArray['full_details']['original_title'])
            && isset($vhsArray['full_details']['overview']) && is_string($vhsArray['full_details']['overview'])
            && isset($vhsArray['full_details']['popularity']) && is_numeric($vhsArray['full_details']['popularity'])
            && isset($vhsArray['full_details']['poster_path']) && is_string($vhsArray['full_details']['poster_path'])
            && isset($vhsArray['full_details']['production_companies']) && is_array($vhsArray['full_details']['production_companies'])
            && isset($vhsArray['full_details']['production_countries']) && is_array($vhsArray['full_details']['production_countries'])
            && isset($vhsArray['full_details']['release_date']) && is_string($vhsArray['full_details']['release_date'])
            && isset($vhsArray['full_details']['revenue']) && is_numeric($vhsArray['full_details']['revenue'])
            && isset($vhsArray['full_details']['runtime']) && is_int($vhsArray['full_details']['runtime'])
            && isset($vhsArray['full_details']['spoken_languages']) && is_array($vhsArray['full_details']['spoken_languages'])
            && isset($vhsArray['full_details']['status']) && is_string($vhsArray['full_details']['status'])
            && isset($vhsArray['full_details']['tagline']) && is_string($vhsArray['full_details']['tagline'])
            && isset($vhsArray['full_details']['title']) && is_string($vhsArray['full_details']['title'])
            && isset($vhsArray['full_details']['video']) && is_bool($vhsArray['full_details']['video'])
            && isset($vhsArray['full_details']['vote_average']) && is_numeric($vhsArray['full_details']['vote_average'])
            && isset($vhsArray['full_details']['vote_count']) && is_int($vhsArray['full_details']['vote_count'])
            && (is_null($vhsArray['full_details']['belongs_to_collection']) || is_array($vhsArray['full_details']['belongs_to_collection']))) {
            return true;
        }

        return false;
    }

    private function checkIfIdExists(int $id): bool
    {
        $vhs = $this->vhsRepository->findOneById($id);

        if (!is_null($vhs)) {
            return true;
        }

        return false;
    }
}
