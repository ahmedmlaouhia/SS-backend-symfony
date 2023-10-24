<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231024095853 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE students (id INT AUTO_INCREMENT NOT NULL, user_id_id INT DEFAULT NULL, university_id INT NOT NULL, email VARCHAR(255) NOT NULL, full_name VARCHAR(255) DEFAULT NULL, birthday DATE DEFAULT NULL, cin INT DEFAULT NULL, phone_number INT DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, skills LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', bio LONGTEXT DEFAULT NULL, score INT DEFAULT NULL, total_tasks INT DEFAULT NULL, start_date DATE DEFAULT NULL, is_active TINYINT(1) DEFAULT NULL, UNIQUE INDEX UNIQ_A4698DB29D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE universities (id INT AUTO_INCREMENT NOT NULL, user_id_id INT NOT NULL, full_name VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_E36065DE9D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(100) NOT NULL, email VARCHAR(100) NOT NULL, password VARCHAR(100) NOT NULL, user_type VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE students ADD CONSTRAINT FK_A4698DB29D86650F FOREIGN KEY (user_id_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE universities ADD CONSTRAINT FK_E36065DE9D86650F FOREIGN KEY (user_id_id) REFERENCES users (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE students DROP FOREIGN KEY FK_A4698DB29D86650F');
        $this->addSql('ALTER TABLE universities DROP FOREIGN KEY FK_E36065DE9D86650F');
        $this->addSql('DROP TABLE students');
        $this->addSql('DROP TABLE universities');
        $this->addSql('DROP TABLE users');
    }
}
