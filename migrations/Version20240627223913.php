<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240627223913 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE animal_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE avis_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE habitat_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE image_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE race_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE role_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE service_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE animal_animal_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE avis_avis_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE habitat_habitat_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE image_image_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE race_race_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE role_role_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE service_service_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('ALTER TABLE animal DROP CONSTRAINT animal_pkey');
        $this->addSql('ALTER TABLE animal DROP id');
        $this->addSql('ALTER TABLE animal ADD PRIMARY KEY (animal_id)');
        $this->addSql('ALTER TABLE avis DROP CONSTRAINT avis_pkey');
        $this->addSql('ALTER TABLE avis DROP id');
        $this->addSql('ALTER TABLE avis ADD PRIMARY KEY (avis_id)');
        $this->addSql('ALTER TABLE habitat DROP CONSTRAINT habitat_pkey');
        $this->addSql('ALTER TABLE habitat DROP id');
        $this->addSql('ALTER TABLE habitat ADD PRIMARY KEY (habitat_id)');
        $this->addSql('ALTER TABLE image DROP CONSTRAINT image_pkey');
        $this->addSql('ALTER TABLE image DROP id');
        $this->addSql('ALTER TABLE image ADD PRIMARY KEY (image_id)');
        $this->addSql('ALTER TABLE race DROP CONSTRAINT race_pkey');
        $this->addSql('ALTER TABLE race DROP id');
        $this->addSql('ALTER TABLE race ADD PRIMARY KEY (race_id)');
        $this->addSql('ALTER TABLE role DROP CONSTRAINT role_pkey');
        $this->addSql('ALTER TABLE role DROP id');
        $this->addSql('ALTER TABLE role ADD PRIMARY KEY (role_id)');
        $this->addSql('ALTER TABLE service DROP CONSTRAINT service_pkey');
        $this->addSql('ALTER TABLE service DROP id');
        $this->addSql('ALTER TABLE service ADD PRIMARY KEY (service_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE animal_animal_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE avis_avis_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE habitat_habitat_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE image_image_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE race_race_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE role_role_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE service_service_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE animal_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE avis_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE habitat_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE image_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE race_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE role_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE service_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('DROP INDEX race_pkey');
        $this->addSql('ALTER TABLE race ADD id INT NOT NULL');
        $this->addSql('ALTER TABLE race ADD PRIMARY KEY (id)');
        $this->addSql('DROP INDEX image_pkey');
        $this->addSql('ALTER TABLE image ADD id INT NOT NULL');
        $this->addSql('ALTER TABLE image ADD PRIMARY KEY (id)');
        $this->addSql('DROP INDEX habitat_pkey');
        $this->addSql('ALTER TABLE habitat ADD id INT NOT NULL');
        $this->addSql('ALTER TABLE habitat ADD PRIMARY KEY (id)');
        $this->addSql('DROP INDEX service_pkey');
        $this->addSql('ALTER TABLE service ADD id INT NOT NULL');
        $this->addSql('ALTER TABLE service ADD PRIMARY KEY (id)');
        $this->addSql('DROP INDEX role_pkey');
        $this->addSql('ALTER TABLE role ADD id INT NOT NULL');
        $this->addSql('ALTER TABLE role ADD PRIMARY KEY (id)');
        $this->addSql('DROP INDEX avis_pkey');
        $this->addSql('ALTER TABLE avis ADD id INT NOT NULL');
        $this->addSql('ALTER TABLE avis ADD PRIMARY KEY (id)');
        $this->addSql('DROP INDEX animal_pkey');
        $this->addSql('ALTER TABLE animal ADD id INT NOT NULL');
        $this->addSql('ALTER TABLE animal ADD PRIMARY KEY (id)');
    }
}
