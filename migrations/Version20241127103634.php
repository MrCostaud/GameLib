<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241127103634 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE amiibo DROP FOREIGN KEY FK_9826F36A4B89032C');
        $this->addSql('DROP INDEX IDX_9826F36A4B89032C ON amiibo');
        $this->addSql('ALTER TABLE amiibo CHANGE post_id etat_amiibo_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE amiibo ADD CONSTRAINT FK_9826F36A3E0FFA31 FOREIGN KEY (etat_amiibo_id) REFERENCES etat (id)');
        $this->addSql('CREATE INDEX IDX_9826F36A3E0FFA31 ON amiibo (etat_amiibo_id)');
        $this->addSql('ALTER TABLE jeu DROP FOREIGN KEY FK_82E48DB54B89032C');
        $this->addSql('ALTER TABLE jeu DROP FOREIGN KEY FK_82E48DB591BD595D');
        $this->addSql('DROP INDEX IDX_82E48DB54B89032C ON jeu');
        $this->addSql('DROP INDEX IDX_82E48DB591BD595D ON jeu');
        $this->addSql('ALTER TABLE jeu CHANGE post_id console_jeu_id INT DEFAULT NULL, CHANGE postjeu_id etat_jeu_id INT NOT NULL');
        $this->addSql('ALTER TABLE jeu ADD CONSTRAINT FK_82E48DB54456D5FB FOREIGN KEY (console_jeu_id) REFERENCES console (id)');
        $this->addSql('ALTER TABLE jeu ADD CONSTRAINT FK_82E48DB53E65A52A FOREIGN KEY (etat_jeu_id) REFERENCES etat (id)');
        $this->addSql('CREATE INDEX IDX_82E48DB54456D5FB ON jeu (console_jeu_id)');
        $this->addSql('CREATE INDEX IDX_82E48DB53E65A52A ON jeu (etat_jeu_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE amiibo DROP FOREIGN KEY FK_9826F36A3E0FFA31');
        $this->addSql('DROP INDEX IDX_9826F36A3E0FFA31 ON amiibo');
        $this->addSql('ALTER TABLE amiibo CHANGE etat_amiibo_id post_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE amiibo ADD CONSTRAINT FK_9826F36A4B89032C FOREIGN KEY (post_id) REFERENCES etat (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_9826F36A4B89032C ON amiibo (post_id)');
        $this->addSql('ALTER TABLE jeu DROP FOREIGN KEY FK_82E48DB54456D5FB');
        $this->addSql('ALTER TABLE jeu DROP FOREIGN KEY FK_82E48DB53E65A52A');
        $this->addSql('DROP INDEX IDX_82E48DB54456D5FB ON jeu');
        $this->addSql('DROP INDEX IDX_82E48DB53E65A52A ON jeu');
        $this->addSql('ALTER TABLE jeu CHANGE console_jeu_id post_id INT DEFAULT NULL, CHANGE etat_jeu_id postjeu_id INT NOT NULL');
        $this->addSql('ALTER TABLE jeu ADD CONSTRAINT FK_82E48DB54B89032C FOREIGN KEY (post_id) REFERENCES console (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE jeu ADD CONSTRAINT FK_82E48DB591BD595D FOREIGN KEY (postjeu_id) REFERENCES etat (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_82E48DB54B89032C ON jeu (post_id)');
        $this->addSql('CREATE INDEX IDX_82E48DB591BD595D ON jeu (postjeu_id)');
    }
}
