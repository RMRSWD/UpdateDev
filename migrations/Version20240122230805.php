<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240122230805 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cours ADD COLUMN etcs INTEGER DEFAULT NULL');
        $this->addSql('ALTER TABLE cours ADD COLUMN nombre_heure_td INTEGER DEFAULT NULL');
        $this->addSql('ALTER TABLE cours ADD COLUMN nombre_heure_tp INTEGER DEFAULT NULL');
        $this->addSql('ALTER TABLE cours ADD COLUMN cm INTEGER DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__cours AS SELECT id, semestre, nom, description FROM cours');
        $this->addSql('DROP TABLE cours');
        $this->addSql('CREATE TABLE cours (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, semestre CLOB DEFAULT NULL, nom CLOB DEFAULT NULL, description CLOB DEFAULT NULL)');
        $this->addSql('INSERT INTO cours (id, semestre, nom, description) SELECT id, semestre, nom, description FROM __temp__cours');
        $this->addSql('DROP TABLE __temp__cours');
    }
}
