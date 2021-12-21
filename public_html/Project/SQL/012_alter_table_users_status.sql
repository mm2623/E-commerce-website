ALTER TABLE Users ADD COLUMN Status varchar(10)
not null default "private"
COMMENT 'Status field that defaults to be private';

ALTER TABLE Users DROP COLUMN Status;