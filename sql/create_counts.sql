-- Creates the BetaFeatures user counts table
-- Licence: GNU GPL v2+
-- Author: Mark Holmquist <mtraceur@member.fsf.org>

create table if not exists /*$wgDBprefix*/betafeatures_user_counts (
  `feature`          varchar(255) primary key not null,
  `number`           integer not null default 0
) /*$wgDBTableOptions*/;
