<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160618143012 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX IDX_BBC2C8ACC5457A37 ON img');
        $this->addSql('ALTER TABLE img DROP img_path');
        $this->addSql('ALTER TABLE img ADD CONSTRAINT FK_BBC2C8AC4B89032C FOREIGN KEY (post_id) REFERENCES post (id)');
        $this->addSql('CREATE INDEX IDX_BBC2C8AC4B89032C ON img (post_id)');
        $this->addSql('ALTER TABLE post DROP img_id');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE img DROP FOREIGN KEY FK_BBC2C8AC4B89032C');
        $this->addSql('DROP INDEX IDX_BBC2C8AC4B89032C ON img');
        $this->addSql('ALTER TABLE img ADD img_path INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_BBC2C8ACC5457A37 ON img (img_path)');
        $this->addSql('ALTER TABLE post ADD img_id INT NOT NULL');
    }
}
