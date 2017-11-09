# Unlandmarks Work Night - Activity Plan

This is a planning document for the Code for Pittsburgh Civic Hack Night happening Thursday, October 12, 2017.

## The State of the Project

We're working on three things tonight!

* Researching & loading data into a Google Docs (our temporary data-home)
* Building the viewer which renders the map, and embedding it in www.unlandmarks.com
* Planning community listening sessions

## Activities

Lets dig in.

### Do the Research! Fill in the Data!

#### Desired Outcomes

* Research & Data Validation complete for as many landmarks as possible. 
* During that process, the addition of comments, hints, shortcuts, agreed-upon-subsidiary-standards, and other helpful information and clarification added to the Data Standard Document
* At the end of the evening, an action plan for ongoing contribution (and self-organization around that - think about logins, communication methods, etc.)

What we have so far is a formatted google spreadsheet loaded up with the initially submitted Unlandmarks, in something close to the raw state they came in as. Our job for the evening will to be to expand upon and clean up that nomination data, and create a definitive, clear, researched, and well-linked summary of each Unlandmark. We'll turn editing on for the durration of the evening, and go research-crazy!

This is really the heart of the work, right? This is the content which will drive interaction with the map. People really want to know these details about these historical sites. They want to know exactly when their dad's favorite bar existed. This is going to help many many Pittsburgh families piece together the timelines of their family photographs, to locate their memories and the memories of their loved one in space and time within Historic Pittsburgh.

We are dealing with stuff that is gone: some information is lost to history, and so we are going to need to live with imprecision. To that end, some of the fields in the standard are really meant for you, the researcher. The *start_date_confidence* field, the *end_date_confidence* field, the *research_notes* field, etc. The Research notes, field, by the way, is also the place to leave notes to your fellow researchers, EG "RB verified lat-long based on comparing historical aerial photos to Google Maps, verified start and end dates from XYZ Historical Documents".

Many of the fields you fill out will end up being *exactly* what appears on the map, so write with an eye towards history & a wide public audience.

A few of the fields are metadata which will not appear on the public-facing map, but which will be vital for future researchers, community members, citizen activists, historians, or anyone else who makes use of the data.

If someone has left a personal history note, put it in quotes, clean up the spelling and grammar, but don't change words and don't change sentence structure.

It's really, really important work. It's not a race. It is quality over quantity. We only have ~40 nominations so far. We don't *have* quantity yet. But when we do, we *have to* keep this mindset present.

#### Color Scheme

While working in the Master Spreadsheet, a color scheme in the _name_ column should be used to keep the workflow orderly.

* Points that have just been accepted from nomination, which don't have any verified information, should have RED backgrounds. 
* If you are actively researching a point, change the background to ORANGE.
* When you have completed the research on a point and it is ready to  be sent towards the live map, change the background to BLUE. 

#### Flow of Work

* Create a new tab called "{Your Name} Scratch Paper" & copy the top row of the *Master List Tab* into it.
* Pick a RED-background point to clean up & research. Click into the Name cell and change the background to ORANGE.
* **The first five points listed - American Buyers Guild, The Ankara Nightclub, Babyland, Bassenheim & Bruster's Ice Cream, Greenfield are already cleaned. Refer to this set when looking at formatting. (Bonus points if you can track down more precise start and end dates)**
* These five points are highlighted BLUE because they have been cleaned up. Points without cleanup should be highlighted RED. Points being actively researched by someone should be highlighted ORANGE.
* Copy and Paste the whole line into your scratch paper tab. You might want to edit the cell widths within that Scratch Paper tab after you do this, to better suit your screen.
* Research that line until you are satisfied, and then paste the line back into the *Master List Tab*.
* If you research the point but can't find enough details to get it located on the map, change the background to a slightly darker RED and move on.
* Repeat until we run out of nominated points, and then start adding & researching your own!

#### Resources

* [Unlandmark Master Spreadsheet (not live right now)](https://docs.google.com/spreadsheets/d/1kMlKdrgD1538uLtEqh1ikTEMNWjc2LNWSW6fcU5xLfM/edit#gid=0)
* [Unlandmarks Data Standard](https://docs.google.com/spreadsheets/d/14JtvHoKmjXTvapPqOBnRywATbQbaKhnSp0lavJ2OlwE/edit?usp=drive_web)

##### Tools for Self-Organization

* [Github](https://github.com/codeforpittsburgh)
* [Slack](codeforpgh.slack.com) - the #unlandmarks channel specifically
* Suggest one to the group!


### Build the Viewer!
#### Desired Outcomes

* Pick a technical solution. Carto is the strong contender right now.
* Prototype with the BLUE (points which have been verified) data from the database Google Spreadsheet (downloaded & flattened into a more appropriate file type)
* Get the map displaying, and get it hooked into www.unlandmarks.com
* During that process, the addition of comments, hints, shortcuts, agreed-upon-subsidiary-standards, and other helpful information and clarification added to the Data Standard Document

See our technical brainstorm, [here](https://docs.google.com/document/d/1xRo8ak3zzTFIJ0Yru9dHskHt0Ll0qbOK2lMX-oIDXyY/edit#heading=h.2nrt1woa1y90).

This team will be working simultaneously with database & research team. It will be good to identify one person to be an ongoing liaison with the research team, to let them know if there are any technical requirements they'll need to incorporate into their data cleaning. EG "These dates need to be in X format, not Y format".

#### Resources

* [Unlandmark Master Spreadsheet (not live right now)](https://docs.google.com/spreadsheets/d/1kMlKdrgD1538uLtEqh1ikTEMNWjc2LNWSW6fcU5xLfM/edit#gid=0)
* [Unlandmarks Data Standard](https://docs.google.com/spreadsheets/d/14JtvHoKmjXTvapPqOBnRywATbQbaKhnSp0lavJ2OlwE/edit?usp=drive_web)

##### Tools for Self-Organization

* [Github](https://github.com/codeforpittsburgh)
* [Slack](codeforpgh.slack.com) - the #unlandmarks channel specifically
* Suggest one to the group!

### Community Listening!
#### Desired Outcomes

* Plan outreach campaign to communities that want survey'd
* plan volunteer organization - how are volunteer interviewers recruited and trained? How are event managers recruited and trained?

This project is about the Pittsburgh community's collective memory, and if we are to be shepherds of those memories, it is our duty to go *out* into the community, everywhere in that community.

We've started data collection. Our first event with Creative Nonfiction went really well. There will be more to come, during the month of December.


#### Resources

##### Tools for Self-Organization

* [Github](https://github.com/codeforpittsburgh)
* [Slack](codeforpgh.slack.com) - the #unlandmarks channel specifically
* Suggest one to the group!

## Questions arising from tonight's work! 

Please add to these by making an edit and sending a Pull Request!
