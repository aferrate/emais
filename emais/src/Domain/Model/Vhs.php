<?php

namespace App\Domain\Model;

final class Vhs
{
    private int $id;
    private bool $adult;
    private string $backdropPath;
    private array $belongsToCollection;
    private float $budget;
    private array $genres;
    private string $homepage;
    private string $imdbId;
    private string $originalLanguage;
    private string $originalTitle;
    private string $overview;
    private float $popularity;
    private string $posterPath;
    private array $productionCompanies;
    private array $productionCountries;
    private string $releaseDate;
    private float $revenue;
    private int $runtime;
    private array $spokenLanguages;
    private string $status;
    private string $tagline;
    private string $title;
    private bool $video;
    private float $voteAverage;
    private int $voteCount;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getAdult(): bool
    {
        return $this->adult;
    }

    public function setAdult(bool $adult): void
    {
        $this->adult = $adult;
    }

    public function getBackdropPath(): string
    {
        return $this->backdropPath;
    }

    public function setBackdropPath(string $backdropPath): void
    {
        $this->backdropPath = $backdropPath;
    }

    public function getBelongsToCollection(): ?array
    {
        return $this->belongsToCollection;
    }

    public function setBelongsToCollection(array $belongsToCollection): void
    {
        $this->belongsToCollection = $belongsToCollection;
    }

    public function getBudget(): float
    {
        return $this->budget;
    }

    public function setBudget(float $budget): void
    {
        $this->budget = $budget;
    }

    public function getGenres(): array
    {
        return $this->genres;
    }

    public function setGenres(array $genres = null): void
    {
        $this->genres = $genres;
    }

    public function getHomepage(): string
    {
        return $this->homepage;
    }

    public function setHomepage(string $homepage): void
    {
        $this->homepage = $homepage;
    }

    public function getImdbId(): string
    {
        return $this->imdbId;
    }

    public function setImdbId(string $imdbId): void
    {
        $this->imdbId = $imdbId;
    }

    public function getOriginalLanguage(): string
    {
        return $this->originalLanguage;
    }

    public function setOriginalLanguage(string $originalLanguage): void
    {
        $this->originalLanguage = $originalLanguage;
    }

    public function getOriginalTitle(): string
    {
        return $this->originalTitle;
    }

    public function setOriginalTitle(string $originalTitle): void
    {
        $this->originalTitle = $originalTitle;
    }

    public function getOverview(): string
    {
        return $this->overview;
    }

    public function setOverview(string $overview): void
    {
        $this->overview = $overview;
    }

    public function getPopularity(): float
    {
        return $this->popularity;
    }

    public function setPopularity(float $popularity): void
    {
        $this->popularity = $popularity;
    }

    public function getPosterPath(): string
    {
        return $this->posterPath;
    }

    public function setPosterPath(string $posterPath): void
    {
        $this->posterPath = $posterPath;
    }

    public function getProductionCompanies(): array
    {
        return $this->productionCompanies;
    }

    public function setProductionCompanies(array $productionCompanies): void
    {
        $this->productionCompanies = $productionCompanies;
    }

    public function getProductionCountries(): array
    {
        return $this->productionCountries;
    }

    public function setProductionCountries(array $productionCountries): void
    {
        $this->productionCountries = $productionCountries;
    }

    public function getReleaseDate(): string
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(string $releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    public function getRevenue(): float
    {
        return $this->revenue;
    }

    public function setRevenue(float $revenue): void
    {
        $this->revenue = $revenue;
    }

    public function getRuntime(): int
    {
        return $this->runtime;
    }

    public function setRuntime(int $runtime): void
    {
        $this->runtime = $runtime;
    }

    public function getSpokenLanguages(): array
    {
        return $this->spokenLanguages;
    }

    public function setSpokenLanguages(array $spokenLanguages): void
    {
        $this->spokenLanguages = $spokenLanguages;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getTagline(): string
    {
        return $this->tagline;
    }

    public function setTagline(string $tagline): void
    {
        $this->tagline = $tagline;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getVideo(): bool
    {
        return $this->video;
    }

    public function setVideo(bool $video): void
    {
        $this->video = $video;
    }

    public function getVoteAverage(): float
    {
        return $this->voteAverage;
    }

    public function setVoteAverage(float $voteAverage): void
    {
        $this->voteAverage = $voteAverage;
    }

    public function getVoteCount(): int
    {
        return $this->voteCount;
    }

    public function setVoteCount(int $voteCount): void
    {
        $this->voteCount = $voteCount;
    }

    public function addAttributesFromArray(array $vhsArray): void
    {
        $this->setId($vhsArray['idFilm']);
        $this->setAdult($vhsArray['full_details']['adult']);
        $this->setBackdropPath($vhsArray['full_details']['backdrop_path']);

        if(isset($vhsArray['full_details']['belongs_to_collection'])) {
            $this->setBelongsToCollection($vhsArray['full_details']['belongs_to_collection']);
        }

        $this->setBudget($vhsArray['full_details']['budget']);
        $this->setGenres($vhsArray['full_details']['genres']);
        $this->setHomepage($vhsArray['full_details']['homepage']);
        $this->setImdbId($vhsArray['full_details']['imdb_id']);
        $this->setOriginalLanguage($vhsArray['full_details']['original_language']);
        $this->setOriginalTitle($vhsArray['full_details']['original_title']);
        $this->setOverview($vhsArray['full_details']['overview']);
        $this->setPopularity($vhsArray['full_details']['popularity']);
        $this->setPosterPath($vhsArray['full_details']['poster_path']);
        $this->setProductionCompanies($vhsArray['full_details']['production_companies']);
        $this->setProductionCountries($vhsArray['full_details']['production_countries']);
        $this->setReleaseDate($vhsArray['full_details']['release_date']);
        $this->setRevenue($vhsArray['full_details']['revenue']);
        $this->setRuntime($vhsArray['full_details']['runtime']);
        $this->setSpokenLanguages($vhsArray['full_details']['spoken_languages']);
        $this->setStatus($vhsArray['full_details']['status']);
        $this->setTagline($vhsArray['full_details']['tagline']);
        $this->setTitle($vhsArray['full_details']['title']);
        $this->setVideo($vhsArray['full_details']['video']);
        $this->setVoteAverage($vhsArray['full_details']['vote_average']);
        $this->setVoteCount($vhsArray['full_details']['vote_count']);
    }
}
