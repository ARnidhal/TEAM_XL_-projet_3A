<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240301014323 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681E12F7FB51');
        $this->addSql('ALTER TABLE evenement ADD color VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681E12F7FB51 FOREIGN KEY (sponsor_id) REFERENCES sponsor (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681E12F7FB51');
        $this->addSql('ALTER TABLE evenement DROP color');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681E12F7FB51 FOREIGN KEY (sponsor_id) REFERENCES sponsor (id) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
