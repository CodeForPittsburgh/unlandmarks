CREATE TABLE Places(
        name varchar(128),
        one_line text,
        nickname varchar(128),
        type varchar(32),
        current_address text,
        vizrec decimal(2, 0),
        current_use text,
        current_photo_link VARCHAR(2083),
        historic_address text,
        historic_photo_url VARCHAR(2083),
        start_date date not null,
        start_date_confidence decimal(2,0) not null,
        end_date date not null,
        end_date_confidence decimal(2, 0) not null,
        history_summary text not null,
        location point not null,
        verification_indicator boolean,
        geopolygon polygon,
        parcel_number varchar(20),
        current_owner varchar(128),
        last_sold_date date,
        unique_id int primary key,
        timestamp datetime not null
);

CREATE TABLE Stories(
        research_url VARCHAR(2083),
        research_notes text,
        research_sources text,
        personal_history_text text not null,
        personal_history_subject text,
        personal_history_rec;order text,
        followup_email varchar(255),
        story_id int primary key AUTO_INCREMENT
);

CREATE TABLE `PlaceStories` (
  `place_id` int(11) NOT NULL,
  `story_id` int(11) NOT NULL
);

ALTER TABLE PlaceStories 
        ADD CONSTRAINT Places_PlaceStories
        FOREIGN KEY (place_id)  REFERENCES  Places(unique_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE;

ALTER TABLE PlaceStories
        ADD CONSTRAINT Stories_PlaceStories
        FOREIGN KEY (story_id) REFERENCES Stories(story_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE;