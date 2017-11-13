/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  mark
 * Created: Nov 9, 2017
 */
create schema unlandmark;

-- roles
-- CREATE ROLE joe LOGIN INHERIT;
-- CREATE ROLE admin NOINHERIT;
-- CREATE ROLE wheel NOINHERIT;
-- GRANT admin TO joe;
-- GRANT wheel TO admin;

-- ALTER TABLE unlandmark.<>
-- OWNER TO postgres;

-- create index

DROP TABLE IF EXISTS unlandmark.places;
CREATE TABLE unlandmark.places(
places_id serial NOT NULL,
        name varchar(128),
        one_line text,
        nickname varchar(128),
        places_type_id integer,
        address_id integer,
        landmark_status_id integer,
        current_use text,
        current_photo_link_id integer,
        historic_address text,
        historic_photo_url_id integer,
        start_date varchar(20),
        start_date_confidence numeric,
        end_date varchar(20),
        end_date_confidence numeric,
        history_summary text,
        verification_indicator boolean default FALSE,
        updatetime timestamp not null,
  CONSTRAINT places_pkey PRIMARY KEY (places_id)
)
WITH (
  OIDS=FALSE
);

DROP TABLE IF EXISTS unlandmark.address;
CREATE TABLE unlandmark.address (
address_id serial NOT NULL,
current_address text,
parcel_number varchar(20),
current_owner varchar(128),
last_sold_date date,
geocode_source varchar(20),
location_latlng point,
  CONSTRAINT address_pkey PRIMARY KEY (address_id)
)
WITH (
  OIDS=FALSE
);

DROP TABLE IF EXISTS unlandmark.stories;
CREATE TABLE unlandmark.stories(
stories_id serial NOT NULL,
        research_url_id integer,
        research_notes text,
        research_sources text,
        personal_history_text text,
        personal_history_subject text,
        personal_history_recorder text,
        followup_email varchar(255), 
  CONSTRAINT stories_pkey PRIMARY KEY (stories_id)
)
WITH (
  OIDS=FALSE
);

DROP TABLE IF EXISTS unlandmark.PlaceStories;
CREATE TABLE unlandmark.PlaceStories (
  places_id integer NOT NULL,
  stories_id integer NOT NULL
)
WITH (
  OIDS=FALSE
);

ALTER TABLE IF EXISTS unlandmark.PlaceStories 
        ADD CONSTRAINT Places_PlaceStories
        FOREIGN KEY (places_id)  REFERENCES  unlandmark.places(places_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE;

ALTER TABLE IF EXISTS unlandmark.PlaceStories
        ADD CONSTRAINT Stories_PlaceStories
        FOREIGN KEY (stories_id) REFERENCES unlandmark.stories(stories_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE;

DROP TABLE IF EXISTS unlandmark.landmark_status;
CREATE TABLE unlandmark.landmark_status (
landmark_status_id serial NOT NULL,
  landmark_status_description  varchar(20) NOT NULL,
  CONSTRAINT landmark_status_pkey PRIMARY KEY (landmark_status_id)
)
WITH (
  OIDS=FALSE
);

DROP TABLE IF EXISTS unlandmark.landmark_type;
CREATE TABLE unlandmark.landmark_type (
landmark_type_id serial NOT NULL,
  landmark_type_description  varchar(20) NOT NULL,
  CONSTRAINT landmark_type_pkey PRIMARY KEY (landmark_type_id)
)
WITH (
  OIDS=FALSE
);

DROP TABLE IF EXISTS unlandmark.landmark_photos;
CREATE TABLE unlandmark.landmark_photos (
landmark_photos_id serial NOT NULL,
  landmark_photos_location  varchar(2083),
  CONSTRAINT landmark_photos_pkey PRIMARY KEY (landmark_photos_id)
)
WITH (
  OIDS=FALSE
);

DROP TABLE IF EXISTS unlandmark.landmark_url;
CREATE TABLE unlandmark.landmark_url (
landmark_url_id serial NOT NULL,
  landmark_url_location  varchar(2083),
  CONSTRAINT landmark_url_pkey PRIMARY KEY (landmark_url_id)
)
WITH (
  OIDS=FALSE
);

DROP TABLE IF EXISTS unlandmark.PlaceURL;
CREATE TABLE unlandmark.PlaceURL (
place_url_id serial NOT NULL,
  places_id integer NOT NULL,
  landmark_url_id integer NOT NULL,
CONSTRAINT place_url_pkey PRIMARY KEY (place_url_id)
)
WITH (
  OIDS=FALSE
);

DROP TABLE IF EXISTS unlandmark.users;
CREATE TABLE unlandmark.users (
users_id serial NOT NULL,
  users_name varchar(20) NOT NULL,
  users_password varchar(255) NOT NULL,
  users_groups_id integer,
CONSTRAINT users_pkey PRIMARY KEY (users_id)
)
WITH (
  OIDS=FALSE
);

DROP TABLE IF EXISTS unlandmark.groups;
CREATE TABLE unlandmark.groups (
groups_id serial NOT NULL,
  groups_name varchar(20) NOT NULL,

CONSTRAINT groups_pkey PRIMARY KEY (groups_id)
)
WITH (
  OIDS=FALSE
);