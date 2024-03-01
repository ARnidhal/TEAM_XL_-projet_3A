<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240224115100 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rendezvous ADD rapport_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rendezvous ADD CONSTRAINT FK_C09A9BA81DFBCC46 FOREIGN KEY (rapport_id) REFERENCES rapport (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C09A9BA81DFBCC46 ON rendezvous (rapport_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rendezvous DROP FOREIGN KEY FK_C09A9BA81DFBCC46');
        $this->addSql('DROP INDEX UNIQ_C09A9BA81DFBCC46 ON rendezvous');
        $this->addSql('ALTER TABLE rendezvous DROP rapport_id');
    }
}
