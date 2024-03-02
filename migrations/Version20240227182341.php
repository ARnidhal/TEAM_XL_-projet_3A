<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240227182341 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservationservice CHANGE idserivce_id idserivce_id INT NOT NULL');
        $this->addSql('ALTER TABLE reservationservice ADD CONSTRAINT FK_505F34CA43E3E8B5 FOREIGN KEY (idserivce_id) REFERENCES service (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservationservice DROP FOREIGN KEY FK_505F34CA43E3E8B5');
        $this->addSql('ALTER TABLE reservationservice CHANGE idserivce_id idserivce_id INT DEFAULT NULL');
    }
}
