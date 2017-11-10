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

DROP TABLE IF EXISTS unlandmark.places;
CREATE TABLE unlandmark.places(
places_id serial NOT NULL PRIMARY KEY,
        name varchar(128),
        one_line text,
        nickname varchar(128),
        places_type_id integer,
        current_address text,
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
        location_latlng point,
        parcel_number varchar(20),
        current_owner varchar(128),
        last_sold_date date,
        updatetime timestamp not null
);

DROP TABLE IF EXISTS unlandmark.stories;
CREATE TABLE unlandmark.stories(
story_id serial NOT NULL PRIMARY KEY,
        research_url_id integer,
        research_notes text,
        research_sources text,
        personal_history_text text,
        personal_history_subject text,
        personal_history_recorder text,
        followup_email varchar(255) 
);

DROP TABLE IF EXISTS unlandmark.PlaceStories;
CREATE TABLE unlandmark.PlaceStories (
  places_id integer NOT NULL,
  story_id integer NOT NULL
);

ALTER TABLE IF EXISTS unlandmark.PlaceStories 
        ADD CONSTRAINT Places_PlaceStories
        FOREIGN KEY (places_id)  REFERENCES  unlandmark.places(places_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE;

ALTER TABLE IF EXISTS unlandmark.PlaceStories
        ADD CONSTRAINT Stories_PlaceStories
        FOREIGN KEY (story_id) REFERENCES unlandmark.stories(story_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE;

DROP TABLE IF EXISTS unlandmark.landmark_status;
CREATE TABLE unlandmark.landmark_status (
landmark_status_id serial NOT NULL PRIMARY KEY,
  landmark_status_description  varchar(20) NOT NULL
  );

DROP TABLE IF EXISTS unlandmark.landmark_type;
CREATE TABLE unlandmark.landmark_type (
landmark_type_id serial NOT NULL PRIMARY KEY,
  landmark_type_description  varchar(20) NOT NULL
  );

DROP TABLE IF EXISTS unlandmark.landmark_photos;
CREATE TABLE unlandmark.landmark_photos (
landmark_photos_id serial NOT NULL PRIMARY KEY,
  landmark_photos_location  varchar(2083)
  );