<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231004073039 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE task ADD progress_id INT NOT NULL');
        $this->addSql('ALTER TABLE task ADD CONSTRAINT FK_527EDB2543DB87C9 FOREIGN KEY (progress_id) REFERENCES progress (id)');
        $this->addSql('CREATE INDEX IDX_527EDB2543DB87C9 ON task (progress_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE task DROP FOREIGN KEY FK_527EDB2543DB87C9');
        $this->addSql('DROP INDEX IDX_527EDB2543DB87C9 ON task');
        $this->addSql('ALTER TABLE task DROP progress_id');
    }
}
