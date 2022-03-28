<?php

namespace App\Swagger;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema()
 */
class Vhs
{
    /**
     * @OA\Property(type="integer")
     *
     * @var int
     */
    private $id;
    /**
     * @OA\Property(type="boolean")
     *
     * @var bool
     */
    private $adult;
    /**
     * @OA\Property(type="string")
     *
     * @var string
     */
    private $backdropPath;
    /**
     * @OA\Property(type="array")
     *
     * @var array
     */
    private $belongsToCollection;
    /**
     * @OA\Property(type="float")
     *
     * @var float
     */
    private $budget;
    /**
     * @OA\Property(type="array")
     *
     * @var array
     */
    private $genres;
    /**
     * @OA\Property(type="string")
     *
     * @var string
     */
    private $homepage;
    /**
     * @OA\Property(type="string")
     *
     * @var string
     */
    private $imdbId;
    /**
     * @OA\Property(type="string")
     *
     * @var string
     */
    private $originalLanguage;
    /**
     * @OA\Property(type="string")
     *
     * @var string
     */
    private $originalTitle;
    /**
     * @OA\Property(type="string")
     *
     * @var string
     */
    private $overview;
    /**
     * @OA\Property(type="float")
     *
     * @var float
     */
    private $popularity;
    /**
     * @OA\Property(type="string")
     *
     * @var string
     */
    private $posterPath;
    /**
     * @OA\Property(type="array")
     *
     * @var array
     */
    private $productionCompanies;
    /**
     * @OA\Property(type="array")
     *
     * @var array
     */
    private $productionCountries;
    /**
     * @OA\Property(type="string")
     *
     * @var string
     */
    private $releaseDate;
    /**
     * @OA\Property(type="float")
     *
     * @var float
     */
    private $revenue;
    /**
     * @OA\Property(type="int")
     *
     * @var int
     */
    private $runtime;
    /**
     * @OA\Property(type="array")
     *
     * @var array
     */
    private $spokenLanguages;
    /**
     * @OA\Property(type="string")
     *
     * @var string
     */
    private $status;
    /**
     * @OA\Property(type="string")
     *
     * @var string
     */
    private $tagline;
    /**
     * @OA\Property(type="string")
     *
     * @var string
     */
    private $title;
    /**
     * @OA\Property(type="boolean")
     *
     * @var bool
     */
    private $video;
    /**
     * @OA\Property(type="float")
     *
     * @var float
     */
    private $voteAverage;
    /**
     * @OA\Property(type="int")
     *
     * @var int
     */
    private $voteCount;
}
