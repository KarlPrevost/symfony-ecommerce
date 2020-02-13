<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200129154752 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE avis (id INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, id_produit INT NOT NULL, date_ajout DATETIME NOT NULL, commentaire LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE produit CHANGE id_famille id_famille INT DEFAULT NULL, CHANGE prix_promo prix_promo INT DEFAULT NULL, CHANGE poids poids INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE avis');
        $this->addSql('ALTER TABLE produit CHANGE id_famille id_famille INT DEFAULT NULL, CHANGE prix_promo prix_promo INT DEFAULT NULL, CHANGE poids poids INT DEFAULT NULL');
    }
}
