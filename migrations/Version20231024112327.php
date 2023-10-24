<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231024112327 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE students CHANGE university_id university_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE students ADD CONSTRAINT FK_A4698DB230068B48 FOREIGN KEY (university_id_id) REFERENCES universities (id)');
        $this->addSql('CREATE INDEX IDX_A4698DB230068B48 ON students (university_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE students DROP FOREIGN KEY FK_A4698DB230068B48');
        $this->addSql('DROP INDEX IDX_A4698DB230068B48 ON students');
        $this->addSql('ALTER TABLE students CHANGE university_id_id university_id INT NOT NULL');
    }
}
