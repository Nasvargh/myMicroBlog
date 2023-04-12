<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230412141508 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE "user" ALTER bio DROP NOT NULL');
        $this->addSql('ALTER TABLE "user" ALTER profile_picture DROP NOT NULL');
        $this->addSql('ALTER TABLE "user" ALTER banner DROP NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE "user" ALTER bio SET NOT NULL');
        $this->addSql('ALTER TABLE "user" ALTER profile_picture SET NOT NULL');
        $this->addSql('ALTER TABLE "user" ALTER banner SET NOT NULL');
    }
}
