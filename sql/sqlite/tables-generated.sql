-- This file is automatically generated using maintenance/generateSchemaSql.php.
-- Source: ./tables.json
-- Do not modify this file directly.
-- See https://www.mediawiki.org/wiki/Manual:Schema_changes
CREATE TABLE /*_*/betafeatures_user_counts (
  feature VARCHAR(255) NOT NULL,
  number INTEGER DEFAULT 0 NOT NULL,
  PRIMARY KEY(feature)
);
