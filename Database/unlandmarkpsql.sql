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
        places_type varchar(32),
        current_address text,
        vizrec numeric,
        current_use text,
        current_photo_link VARCHAR(2083),
        historic_address text,
        historic_photo_url VARCHAR(2083),
        start_date date not null,
        start_date_confidence numeric not null,
        end_date date not null,
        end_date_confidence numeric not null,
        history_summary text not null,
        location point not null,
        verification_indicator boolean,
        latlng point,
        parcel_number varchar(20),
        current_owner varchar(128),
        last_sold_date date,
        updatetime timestamp not null
);

DROP TABLE IF EXISTS unlandmark.stories;
CREATE TABLE unlandmark.stories(
story_id serial NOT NULL PRIMARY KEY,
        research_url VARCHAR(2083),
        research_notes text,
        research_sources text,
        personal_history_text text not null,
        personal_history_subject text,
        personal_history_rec text,
        followup_email varchar(255) --,
        -- story_id int primary key AUTO_INCREMENT
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