<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240201105852 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mood ADD type VARCHAR(255) NOT NULL, DROP happy, DROP septic, DROP angry, DROP sad');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mood ADD happy TINYINT(1) DEFAULT NULL, ADD septic TINYINT(1) DEFAULT NULL, ADD angry TINYINT(1) DEFAULT NULL, ADD sad TINYINT(1) DEFAULT NULL, DROP type');
    }
}
