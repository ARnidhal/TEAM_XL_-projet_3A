<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240214233444 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064048A0E4E7F');
        $this->addSql('DROP TABLE reply');
        $this->addSql('DROP INDEX UNIQ_CE6064048A0E4E7F ON reclamation');
        $this->addSql('ALTER TABLE reclamation DROP reply_id, DROP id_reclamation, DROP id_user, DROP statut, CHANGE description description LONGTEXT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reply (id INT AUTO_INCREMENT NOT NULL, id_reply INT NOT NULL, id_reclamation INT NOT NULL, id_admin INT NOT NULL, repdate DATETIME NOT NULL, content LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE reclamation ADD reply_id INT DEFAULT NULL, ADD id_reclamation INT NOT NULL, ADD id_user INT NOT NULL, ADD statut VARCHAR(255) NOT NULL, CHANGE description description VARCHAR(800) DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064048A0E4E7F FOREIGN KEY (reply_id) REFERENCES reply (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_CE6064048A0E4E7F ON reclamation (reply_id)');
    }
}
