<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241127093632 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE amiibo (id INT AUTO_INCREMENT NOT NULL, post_id INT DEFAULT NULL, id_amiibo INT NOT NULL, nom_amiibo VARCHAR(255) NOT NULL, img_amiibo VARCHAR(255) DEFAULT NULL, INDEX IDX_9826F36A4B89032C (post_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE console (id INT AUTO_INCREMENT NOT NULL, post_id INT DEFAULT NULL, id_console INT NOT NULL, nom_console VARCHAR(255) NOT NULL, img_console VARCHAR(255) DEFAULT NULL, INDEX IDX_3603CFB64B89032C (post_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etat (id INT AUTO_INCREMENT NOT NULL, etat VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE jeu (id INT AUTO_INCREMENT NOT NULL, post_id INT DEFAULT NULL, postjeu_id INT NOT NULL, id_jeu INT NOT NULL, nom_jeu VARCHAR(255) NOT NULL, img_jeu VARCHAR(255) DEFAULT NULL, INDEX IDX_82E48DB54B89032C (post_id), INDEX IDX_82E48DB591BD595D (postjeu_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, login VARCHAR(255) NOT NULL, mdp VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE amiibo ADD CONSTRAINT FK_9826F36A4B89032C FOREIGN KEY (post_id) REFERENCES etat (id)');
        $this->addSql('ALTER TABLE console ADD CONSTRAINT FK_3603CFB64B89032C FOREIGN KEY (post_id) REFERENCES etat (id)');
        $this->addSql('ALTER TABLE jeu ADD CONSTRAINT FK_82E48DB54B89032C FOREIGN KEY (post_id) REFERENCES console (id)');
        $this->addSql('ALTER TABLE jeu ADD CONSTRAINT FK_82E48DB591BD595D FOREIGN KEY (postjeu_id) REFERENCES etat (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE amiibo DROP FOREIGN KEY FK_9826F36A4B89032C');
        $this->addSql('ALTER TABLE console DROP FOREIGN KEY FK_3603CFB64B89032C');
        $this->addSql('ALTER TABLE jeu DROP FOREIGN KEY FK_82E48DB54B89032C');
        $this->addSql('ALTER TABLE jeu DROP FOREIGN KEY FK_82E48DB591BD595D');
        $this->addSql('DROP TABLE amiibo');
        $this->addSql('DROP TABLE console');
        $this->addSql('DROP TABLE etat');
        $this->addSql('DROP TABLE jeu');
        $this->addSql('DROP TABLE `user`');
    }
}
