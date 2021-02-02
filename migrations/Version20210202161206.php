<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210202161206 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_9474526C1BAF0DD4');
        $this->addSql('CREATE TEMPORARY TABLE __temp__comment AS SELECT id, castle_id, content FROM comment');
        $this->addSql('DROP TABLE comment');
        $this->addSql('CREATE TABLE comment (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, castle_id INTEGER NOT NULL, content CLOB NOT NULL COLLATE BINARY, CONSTRAINT FK_9474526C1BAF0DD4 FOREIGN KEY (castle_id) REFERENCES castle (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO comment (id, castle_id, content) SELECT id, castle_id, content FROM __temp__comment');
        $this->addSql('DROP TABLE __temp__comment');
        $this->addSql('CREATE INDEX IDX_9474526C1BAF0DD4 ON comment (castle_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_9474526C1BAF0DD4');
        $this->addSql('CREATE TEMPORARY TABLE __temp__comment AS SELECT id, castle_id, content FROM comment');
        $this->addSql('DROP TABLE comment');
        $this->addSql('CREATE TABLE comment (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, castle_id INTEGER NOT NULL, content CLOB NOT NULL)');
        $this->addSql('INSERT INTO comment (id, castle_id, content) SELECT id, castle_id, content FROM __temp__comment');
        $this->addSql('DROP TABLE __temp__comment');
        $this->addSql('CREATE INDEX IDX_9474526C1BAF0DD4 ON comment (castle_id)');
    }
}
