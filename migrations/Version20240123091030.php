<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240123091030 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__cours AS SELECT id, nom, description, etcs, nombre_heure_td, nombre_heure_tp, cm FROM cours');
        $this->addSql('DROP TABLE cours');
        $this->addSql('CREATE TABLE cours (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, semestre_id INTEGER DEFAULT NULL, nom CLOB DEFAULT NULL, description CLOB DEFAULT NULL, etcs INTEGER DEFAULT NULL, nombre_heure_td INTEGER DEFAULT NULL, nombre_heure_tp INTEGER DEFAULT NULL, cm INTEGER DEFAULT NULL, CONSTRAINT FK_FDCA8C9C5577AFDB FOREIGN KEY (semestre_id) REFERENCES semestre (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO cours (id, nom, description, etcs, nombre_heure_td, nombre_heure_tp, cm) SELECT id, nom, description, etcs, nombre_heure_td, nombre_heure_tp, cm FROM __temp__cours');
        $this->addSql('DROP TABLE __temp__cours');
        $this->addSql('CREATE INDEX IDX_FDCA8C9C5577AFDB ON cours (semestre_id)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__semestre AS SELECT id, formation, semestre FROM semestre');
        $this->addSql('DROP TABLE semestre');
        $this->addSql('CREATE TABLE semestre (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, cours_id INTEGER DEFAULT NULL, formation CLOB DEFAULT NULL, semestre CLOB DEFAULT NULL, CONSTRAINT FK_71688FBC7ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO semestre (id, formation, semestre) SELECT id, formation, semestre FROM __temp__semestre');
        $this->addSql('DROP TABLE __temp__semestre');
        $this->addSql('CREATE INDEX IDX_71688FBC7ECF78B0 ON semestre (cours_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__cours AS SELECT id, nom, description, etcs, nombre_heure_td, nombre_heure_tp, cm FROM cours');
        $this->addSql('DROP TABLE cours');
        $this->addSql('CREATE TABLE cours (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom CLOB DEFAULT NULL, description CLOB DEFAULT NULL, etcs INTEGER DEFAULT NULL, nombre_heure_td INTEGER DEFAULT NULL, nombre_heure_tp INTEGER DEFAULT NULL, cm INTEGER DEFAULT NULL, semestre CLOB DEFAULT NULL)');
        $this->addSql('INSERT INTO cours (id, nom, description, etcs, nombre_heure_td, nombre_heure_tp, cm) SELECT id, nom, description, etcs, nombre_heure_td, nombre_heure_tp, cm FROM __temp__cours');
        $this->addSql('DROP TABLE __temp__cours');
        $this->addSql('CREATE TEMPORARY TABLE __temp__semestre AS SELECT id, formation, semestre FROM semestre');
        $this->addSql('DROP TABLE semestre');
        $this->addSql('CREATE TABLE semestre (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, formation CLOB DEFAULT NULL, semestre CLOB DEFAULT NULL)');
        $this->addSql('INSERT INTO semestre (id, formation, semestre) SELECT id, formation, semestre FROM __temp__semestre');
        $this->addSql('DROP TABLE __temp__semestre');
    }
}
