<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200204114128 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE pays (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE adresse_livraison (id INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, id_adresse INT NOT NULL, is_principale TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE adresse (id INT AUTO_INCREMENT NOT NULL, numero INT NOT NULL, code_postal INT NOT NULL, ville VARCHAR(255) NOT NULL, supplement1 VARCHAR(255) NOT NULL, id_pays INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pays_livrable (id INT AUTO_INCREMENT NOT NULL, id_livreur INT NOT NULL, id_pays INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fidelisation (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, valeur INT NOT NULL, type INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE liste_commande (id INT AUTO_INCREMENT NOT NULL, id_produit INT NOT NULL, id_commande INT NOT NULL, quantite INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, id_liste INT NOT NULL, id_user INT NOT NULL, date_commande DATETIME NOT NULL, id_livreur INT NOT NULL, frais_port INT NOT NULL, prix_or_frais INT NOT NULL, id_adresse_facturation INT NOT NULL, id_adresse_livraison INT NOT NULL, etat INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livreur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prix_kilo INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, id_fidelisation INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE adresse_facturation (id INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, id_adresse INT NOT NULL, is_principale TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE produit CHANGE id_famille id_famille INT DEFAULT NULL, CHANGE prix_promo prix_promo INT DEFAULT NULL, CHANGE poids poids INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE pays');
        $this->addSql('DROP TABLE adresse_livraison');
        $this->addSql('DROP TABLE adresse');
        $this->addSql('DROP TABLE pays_livrable');
        $this->addSql('DROP TABLE fidelisation');
        $this->addSql('DROP TABLE liste_commande');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE livreur');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE adresse_facturation');
        $this->addSql('ALTER TABLE produit CHANGE id_famille id_famille INT DEFAULT NULL, CHANGE prix_promo prix_promo INT DEFAULT NULL, CHANGE poids poids INT DEFAULT NULL');
    }
}
