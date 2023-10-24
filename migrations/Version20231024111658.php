<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231024111658 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE students DROP university_id');
        $this->addSql('ALTER TABLE users ADD university_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E930068B48 FOREIGN KEY (university_id_id) REFERENCES universities (id)');
        $this->addSql('CREATE INDEX IDX_1483A5E930068B48 ON users (university_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE students ADD university_id INT NOT NULL');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E930068B48');
        $this->addSql('DROP INDEX IDX_1483A5E930068B48 ON users');
        $this->addSql('ALTER TABLE users DROP university_id_id');
    }
}
