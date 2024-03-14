<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240305051019 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post ADD phonenumber INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rapport DROP FOREIGN KEY FK_BE34A09C3345E0A3');
        $this->addSql('ALTER TABLE rapport ADD CONSTRAINT FK_BE34A09C3345E0A3 FOREIGN KEY (rendezvous_id) REFERENCES rendezvous (id)');
        $this->addSql('ALTER TABLE rendezvous DROP FOREIGN KEY FK_C09A9BA81DFBCC46');
        $this->addSql('ALTER TABLE rendezvous ADD CONSTRAINT FK_C09A9BA81DFBCC46 FOREIGN KEY (rapport_id) REFERENCES rapport (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post DROP phonenumber');
        $this->addSql('ALTER TABLE rapport DROP FOREIGN KEY FK_BE34A09C3345E0A3');
        $this->addSql('ALTER TABLE rapport ADD CONSTRAINT FK_BE34A09C3345E0A3 FOREIGN KEY (rendezvous_id) REFERENCES rendezvous (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rendezvous DROP FOREIGN KEY FK_C09A9BA81DFBCC46');
        $this->addSql('ALTER TABLE rendezvous ADD CONSTRAINT FK_C09A9BA81DFBCC46 FOREIGN KEY (rapport_id) REFERENCES rapport (id) ON DELETE CASCADE');
    }
}
