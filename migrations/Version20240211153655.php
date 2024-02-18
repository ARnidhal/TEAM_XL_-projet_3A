<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240211153655 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE medecin (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, token INT NOT NULL, photo VARCHAR(255) DEFAULT NULL, code INT NOT NULL, role VARCHAR(255) NOT NULL, specialite VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, fullname VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rendezvous (id INT AUTO_INCREMENT NOT NULL, medecin_id INT NOT NULL, fullname VARCHAR(255) NOT NULL, tel VARCHAR(10) NOT NULL, date DATE NOT NULL, time VARCHAR(255) NOT NULL, note VARCHAR(255) NOT NULL, etat TINYINT(1) DEFAULT NULL, email VARCHAR(255) NOT NULL, INDEX IDX_C09A9BA84F31A84 (medecin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rendezvous ADD CONSTRAINT FK_C09A9BA84F31A84 FOREIGN KEY (medecin_id) REFERENCES medecin (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rendezvous DROP FOREIGN KEY FK_C09A9BA84F31A84');
        $this->addSql('DROP TABLE medecin');
        $this->addSql('DROP TABLE rendezvous');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
