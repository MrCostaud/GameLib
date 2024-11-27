<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241127103903 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE console DROP FOREIGN KEY FK_3603CFB64B89032C');
        $this->addSql('DROP INDEX IDX_3603CFB64B89032C ON console');
        $this->addSql('ALTER TABLE console CHANGE post_id etat_console_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE console ADD CONSTRAINT FK_3603CFB6DBB5E18A FOREIGN KEY (etat_console_id) REFERENCES etat (id)');
        $this->addSql('CREATE INDEX IDX_3603CFB6DBB5E18A ON console (etat_console_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE console DROP FOREIGN KEY FK_3603CFB6DBB5E18A');
        $this->addSql('DROP INDEX IDX_3603CFB6DBB5E18A ON console');
        $this->addSql('ALTER TABLE console CHANGE etat_console_id post_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE console ADD CONSTRAINT FK_3603CFB64B89032C FOREIGN KEY (post_id) REFERENCES etat (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_3603CFB64B89032C ON console (post_id)');
    }
}
