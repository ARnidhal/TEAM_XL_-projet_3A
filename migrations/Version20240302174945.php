<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240302174945 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rapport (id INT AUTO_INCREMENT NOT NULL, rendezvous_id INT NOT NULL, type VARCHAR(255) NOT NULL, note VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_BE34A09C3345E0A3 (rendezvous_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rendezvous (id INT AUTO_INCREMENT NOT NULL, medecin_id INT NOT NULL, rapport_id INT DEFAULT NULL, fullname VARCHAR(255) NOT NULL, tel VARCHAR(10) NOT NULL, date DATE NOT NULL, note VARCHAR(255) NOT NULL, etat TINYINT(1) DEFAULT NULL, email VARCHAR(255) NOT NULL, time TIME NOT NULL, INDEX IDX_C09A9BA84F31A84 (medecin_id), UNIQUE INDEX UNIQ_C09A9BA81DFBCC46 (rapport_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rapport ADD CONSTRAINT FK_BE34A09C3345E0A3 FOREIGN KEY (rendezvous_id) REFERENCES rendezvous (id)');
        $this->addSql('ALTER TABLE rendezvous ADD CONSTRAINT FK_C09A9BA84F31A84 FOREIGN KEY (medecin_id) REFERENCES medecin (id)');
        $this->addSql('ALTER TABLE rendezvous ADD CONSTRAINT FK_C09A9BA81DFBCC46 FOREIGN KEY (rapport_id) REFERENCES rapport (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rapport DROP FOREIGN KEY FK_BE34A09C3345E0A3');
        $this->addSql('ALTER TABLE rendezvous DROP FOREIGN KEY FK_C09A9BA84F31A84');
        $this->addSql('ALTER TABLE rendezvous DROP FOREIGN KEY FK_C09A9BA81DFBCC46');
        $this->addSql('DROP TABLE rapport');
        $this->addSql('DROP TABLE rendezvous');
    }
}
