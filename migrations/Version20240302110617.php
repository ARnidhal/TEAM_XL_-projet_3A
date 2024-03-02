<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240302110617 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, id_post_id INT DEFAULT NULL, id_comment INT NOT NULL, contenu_comment VARCHAR(1000) NOT NULL, likes_comment INT DEFAULT NULL, dislikes_comment INT DEFAULT NULL, name_comment VARCHAR(255) NOT NULL, mail_comment VARCHAR(255) NOT NULL, datecreation_comment DATE DEFAULT NULL, INDEX IDX_9474526C9514AA5C (id_post_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservationservice (id INT AUTO_INCREMENT NOT NULL, idserivce_id INT NOT NULL, nom VARCHAR(50) NOT NULL, email VARCHAR(255) NOT NULL, INDEX IDX_505F34CA43E3E8B5 (idserivce_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C9514AA5C FOREIGN KEY (id_post_id) REFERENCES post (id)');
        $this->addSql('ALTER TABLE reservationservice ADD CONSTRAINT FK_505F34CA43E3E8B5 FOREIGN KEY (idserivce_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE service ADD active TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C9514AA5C');
        $this->addSql('ALTER TABLE reservationservice DROP FOREIGN KEY FK_505F34CA43E3E8B5');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE reservationservice');
        $this->addSql('ALTER TABLE service DROP active');
    }
}
