CREATE TABLE tbl_images (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  title varchar(256) DEFAULT NULL,
  path varchar(256) NOT NULL,
  author varchar(256) DEFAULT NULL,
  attributes varchar(256) DEFAULT NULL,
)
