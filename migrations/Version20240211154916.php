<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240211154916 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rapport (id INT AUTO_INCREMENT NOT NULL, rendezvous_id INT NOT NULL, type VARCHAR(255) NOT NULL, note VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_BE34A09C3345E0A3 (rendezvous_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rapport ADD CONSTRAINT FK_BE34A09C3345E0A3 FOREIGN KEY (rendezvous_id) REFERENCES rendezvous (id)');
        $this->addSql('ALTER TABLE medecin CHANGE username username VARCHAR(15) NOT NULL, CHANGE email email VARCHAR(30) NOT NULL, CHANGE phone phone VARCHAR(10) NOT NULL, CHANGE password password VARCHAR(20) NOT NULL, CHANGE photo photo VARCHAR(254) DEFAULT NULL, CHANGE role role VARCHAR(25) NOT NULL, CHANGE specialite specialite VARCHAR(30) NOT NULL, CHANGE address address VARCHAR(30) NOT NULL, CHANGE fullname fullname VARCHAR(30) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rapport DROP FOREIGN KEY FK_BE34A09C3345E0A3');
        $this->addSql('DROP TABLE rapport');
        $this->addSql('ALTER TABLE medecin CHANGE username username VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(255) NOT NULL, CHANGE phone phone VARCHAR(255) NOT NULL, CHANGE password password VARCHAR(255) NOT NULL, CHANGE photo photo VARCHAR(255) DEFAULT NULL, CHANGE role role VARCHAR(255) NOT NULL, CHANGE specialite specialite VARCHAR(255) NOT NULL, CHANGE address address VARCHAR(255) NOT NULL, CHANGE fullname fullname VARCHAR(255) NOT NULL');
    }
}
