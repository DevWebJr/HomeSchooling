<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200711135256 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE learner (id INT AUTO_INCREMENT NOT NULL, level_id INT NOT NULL, first_name VARCHAR(50) NOT NULL, last_name VARCHAR(50) DEFAULT NULL, gender TINYINT(1) NOT NULL, INDEX IDX_8EF38345FB14BA7 (level_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE learner_teacher (learner_id INT NOT NULL, teacher_id INT NOT NULL, INDEX IDX_89D7138C6209CB66 (learner_id), INDEX IDX_89D7138C41807E1D (teacher_id), PRIMARY KEY(learner_id, teacher_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE level (id INT AUTO_INCREMENT NOT NULL, grade VARCHAR(55) NOT NULL, school_class VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE teacher (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) DEFAULT NULL, pseudo VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, gender TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE learner ADD CONSTRAINT FK_8EF38345FB14BA7 FOREIGN KEY (level_id) REFERENCES level (id)');
        $this->addSql('ALTER TABLE learner_teacher ADD CONSTRAINT FK_89D7138C6209CB66 FOREIGN KEY (learner_id) REFERENCES learner (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE learner_teacher ADD CONSTRAINT FK_89D7138C41807E1D FOREIGN KEY (teacher_id) REFERENCES teacher (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE learner_teacher DROP FOREIGN KEY FK_89D7138C6209CB66');
        $this->addSql('ALTER TABLE learner DROP FOREIGN KEY FK_8EF38345FB14BA7');
        $this->addSql('ALTER TABLE learner_teacher DROP FOREIGN KEY FK_89D7138C41807E1D');
        $this->addSql('DROP TABLE learner');
        $this->addSql('DROP TABLE learner_teacher');
        $this->addSql('DROP TABLE level');
        $this->addSql('DROP TABLE teacher');
    }
}
