<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240227044722 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservationservice ADD idserivce_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservationservice ADD CONSTRAINT FK_505F34CA43E3E8B5 FOREIGN KEY (idserivce_id) REFERENCES service (id)');
        $this->addSql('CREATE INDEX IDX_505F34CA43E3E8B5 ON reservationservice (idserivce_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservationservice DROP FOREIGN KEY FK_505F34CA43E3E8B5');
        $this->addSql('DROP INDEX IDX_505F34CA43E3E8B5 ON reservationservice');
        $this->addSql('ALTER TABLE reservationservice DROP idserivce_id');
    }
}
