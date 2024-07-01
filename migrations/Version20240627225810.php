<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240627225810 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE role ADD roles_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE role ADD CONSTRAINT FK_57698A6A38C751C4 FOREIGN KEY (roles_id) REFERENCES utilisateur (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_57698A6A38C751C4 ON role (roles_id)');
        $this->addSql('DROP INDEX UNIQ_IDENTIFIER_USERNAME');
        $this->addSql('ALTER TABLE utilisateur RENAME COLUMN email TO username');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_IDENTIFIER_USERNAME ON utilisateur (username)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP INDEX uniq_identifier_username');
        $this->addSql('ALTER TABLE utilisateur RENAME COLUMN username TO email');
        $this->addSql('CREATE UNIQUE INDEX uniq_identifier_username ON utilisateur (email)');
        $this->addSql('ALTER TABLE role DROP CONSTRAINT FK_57698A6A38C751C4');
        $this->addSql('DROP INDEX IDX_57698A6A38C751C4');
        $this->addSql('ALTER TABLE role DROP roles_id');
    }
}
