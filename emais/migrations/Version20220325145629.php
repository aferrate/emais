<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220325145629 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE vhs (id INT NOT NULL, adult TINYINT(1) NOT NULL, backdrop_path VARCHAR(255) NOT NULL, belongs_to_collection JSON DEFAULT NULL, budget DOUBLE PRECISION NOT NULL, genres JSON NOT NULL, homepage VARCHAR(255) NOT NULL, imdb_id VARCHAR(255) NOT NULL, original_language VARCHAR(255) NOT NULL, original_title VARCHAR(255) NOT NULL, overview LONGTEXT NOT NULL, popularity DOUBLE PRECISION NOT NULL, poster_path VARCHAR(255) NOT NULL, production_companies JSON NOT NULL, production_countries JSON NOT NULL, release_date VARCHAR(255) NOT NULL, revenue DOUBLE PRECISION NOT NULL, runtime INT NOT NULL, spoken_languages JSON NOT NULL, status VARCHAR(255) NOT NULL, tagline VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, video TINYINT(1) NOT NULL, vote_average DOUBLE PRECISION NOT NULL, vote_count INT NOT NULL, UNIQUE INDEX vhs_title_unique (title), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE vhs');
    }
}
