<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240212164758 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reclamation (id INT AUTO_INCREMENT NOT NULL, reply_id INT DEFAULT NULL, id_reclamation INT NOT NULL, id_user INT NOT NULL, subdate DATETIME NOT NULL, sujet VARCHAR(255) NOT NULL, description VARCHAR(800) DEFAULT NULL, statut VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_CE6064048A0E4E7F (reply_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reply (id INT AUTO_INCREMENT NOT NULL, id_reply INT NOT NULL, id_reclamation INT NOT NULL, id_admin INT NOT NULL, repdate DATETIME NOT NULL, content LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064048A0E4E7F FOREIGN KEY (reply_id) REFERENCES reply (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064048A0E4E7F');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE reply');
    }
}
