# unlandmark data observations
## Mark Howe 11/16/17
## After reviewing the Google Spreadsheet data here are some suggestions:
Any time a date or time is required from the user, a calendar widget should be used.

Pull downs should be used for location type, confidence and any other data needing to be controlled

Any text field that has a single quote, needs to be escaped. There is a postgres function in php pg_escape_string that handles the situation

I don't think we need these columns  parcel_number current_owner last_sold_date as they might be difficult to obtain especialy outside Allegheny County

Any data entry should have a default value for insertion into the database

A process is needed to geocode the address. Since we might find unlandmarks outside Allegheny County, their resource might be limited.

Special user text fields should be created to capture https url links. These will have to be validated.


Will we be using SRID 4326 for geo coding the point? 
That's what I've configured

I added two audit columns and supporting function and table triggers

TBD groups and roles and user/password maintenance

You can find the table/column setup under unlandmarks/code/sql folder in unlandmarkpsql.sql

Was processing addresses and once again data entry bytes ;-( thinking of using lat/lng as the primary key, but that is dependant on the
geo-coding source, as decimal accuracy is source unique.

I am working on adding a table that stores all URL's but will type them as photo, information, history, ...

I have mocked up some GUI pages, right now for observation it's in a power point presentation. The code is not functional and needs more entry fields.

The php code is under code/php/View index.html starts the mockup

I have to re-write the Stories mock-up problem with the calendar



