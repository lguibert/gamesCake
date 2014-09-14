/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  13/09/2014 01:05:06                      */
/*==============================================================*/


drop table if exists AUTHORS;

drop table if exists CABINETS;

drop table if exists COLLECTIONS;

drop table if exists DESIGNBY;

drop table if exists DISTRIBUTORS;

drop table if exists EDITBY;

drop table if exists EDITORS;

drop table if exists GAMES;

drop table if exists GAMETYPES;

drop table if exists ILLUSTRATORS;

drop table if exists LOCATIONS;

drop table if exists ROOMS;

drop table if exists SHELFS;

drop table if exists TYPEOF;

drop table if exists WRITEBY;

/*==============================================================*/
/* Table : AUTHORS                                              */
/*==============================================================*/
create table AUTHORS
(
   ID_AUTHOR            int not null AUTO_INCREMENT,
   NAME_AUTHOR          char(150),
   primary key (ID_AUTHOR)
);

/*==============================================================*/
/* Table : CABINETS                                             */
/*==============================================================*/
create table CABINETS
(
   ID_CABINET           int not null AUTO_INCREMENT,
   NAME_CABINET         char(150),
   primary key (ID_CABINET)
);

/*==============================================================*/
/* Table : COLLECTIONS                                          */
/*==============================================================*/
create table COLLECTIONS
(
   ID_COLLECTION        int not null AUTO_INCREMENT,
   NAME_COLLECTION      char(150),
   primary key (ID_COLLECTION)
);

/*==============================================================*/
/* Table : DESIGNBY                                             */
/*==============================================================*/
create table GAMESILLUSTRATORS
(
   ID_ILLUSTRATOR       int not null,
   ID_GAME              int not null,
   primary key (ID_ILLUSTRATOR, ID_GAME)
);

/*==============================================================*/
/* Table : DISTRIBUTORS                                         */
/*==============================================================*/
create table DISTRIBUTORS
(
   ID_DISTRIBUTOR       int not null AUTO_INCREMENT,
   NAME_DISTRIBUTOR     char(150),
   primary key (ID_DISTRIBUTOR)
);

/*==============================================================*/
/* Table : EDITBY                                               */
/*==============================================================*/
create table GAMESEDITORS
(
   ID_GAME              int not null,
   ID_EDITOR            int not null,
   primary key (ID_GAME, ID_EDITOR)
);

/*==============================================================*/
/* Table : EDITORS                                              */
/*==============================================================*/
create table EDITORS
(
   ID_EDITOR            int not null AUTO_INCREMENT,
   NAME_EDITOR          char(150),
   primary key (ID_EDITOR)
);

/*==============================================================*/
/* Table : GAMES                                                */
/*==============================================================*/
create table GAMES
(
   ID_GAME              int not null AUTO_INCREMENT,
   ID_COLLECTION        int not null,
   ID_DISTRIBUTOR       int not null,
   ID_LOCATION          int not null,
   NAME_GAME            char(150) not null,
   MIN_GAMER_GAME       int,
   MAX_GAMER_GAME       int,
   PUBLICATION_DATE_GAME date,
   MIN_AGE_GAME         int,
   DURATION_GAME        int,
   DESCRIPTION_GAME     text,
   BUY_DATE_GAME        date,
   CREATED              date,
   PRICE_GAME           decimal,
   EDITION_GAME         int,
   PHOTO_GAME           text,
   primary key (ID_GAME)
);

/*==============================================================*/
/* Table : GAMETYPES                                            */
/*==============================================================*/
create table GAMETYPES
(
   ID_GAMETYPE          int not null AUTO_INCREMENT,
   NAME_GAMETYPE        char(150),
   primary key (ID_GAMETYPE)
);

/*==============================================================*/
/* Table : ILLUSTRATORS                                         */
/*==============================================================*/
create table ILLUSTRATORS
(
   ID_ILLUSTRATOR       int not null AUTO_INCREMENT,
   NAME_ILLUSTRATOR     char(150),
   primary key (ID_ILLUSTRATOR)
);

/*==============================================================*/
/* Table : LOCATIONS                                            */
/*==============================================================*/
create table LOCATIONS
(
   ID_LOCATION          int not null AUTO_INCREMENT,
   ID_SHELF             int not null,
   ID_ROOM              int not null,
   ID_CABINET           int not null,
   primary key (ID_LOCATION)
);

/*==============================================================*/
/* Table : ROOMS                                                */
/*==============================================================*/
create table ROOMS
(
   ID_ROOM              int not null AUTO_INCREMENT,
   NAME_ROOM            char(150),
   primary key (ID_ROOM)
);

/*==============================================================*/
/* Table : SHELFS                                               */
/*==============================================================*/
create table SHELFS
(
   ID_SHELF             int not null AUTO_INCREMENT,
   NAME_SHELF           char(150),
   primary key (ID_SHELF)
);

/*==============================================================*/
/* Table : TYPEOF                                               */
/*==============================================================*/
create table GAMESGAMETYPES
(
   ID_GAMETYPE          int not null,
   ID_GAME              int not null,
   primary key (ID_GAMETYPE, ID_GAME)
);

/*==============================================================*/
/* Table : WRITEBY                                              */
/*==============================================================*/
create table GAMESAUTHORS
(
   ID_AUTHOR            int not null,
   ID_GAME              int not null,
   primary key (ID_AUTHOR, ID_GAME)
);

alter table GAMESILLUSTRATORS add constraint FK_GAMESILLUSTRATORS foreign key (ID_ILLUSTRATOR)
      references ILLUSTRATORS (ID_ILLUSTRATOR) on delete restrict on update restrict;

alter table GAMESILLUSTRATORS add constraint FK_GAMESILLUSTRATORS2 foreign key (ID_GAME)
      references GAMES (ID_GAME) on delete restrict on update restrict;

alter table GAMESEDITORS add constraint FK_GAMESEDITORS foreign key (ID_GAME)
      references GAMES (ID_GAME) on delete restrict on update restrict;

alter table GAMESEDITORS add constraint FK_GAMESEDITORS2 foreign key (ID_EDITOR)
      references EDITORS (ID_EDITOR) on delete restrict on update restrict;

alter table GAMES add constraint FK_ASSOCIATION_12 foreign key (ID_LOCATION)
      references LOCATIONS (ID_LOCATION) on delete restrict on update restrict;

alter table GAMES add constraint FK_COLLECT foreign key (ID_COLLECTION)
      references COLLECTIONS (ID_COLLECTION) on delete restrict on update restrict;

alter table GAMES add constraint FK_DISTRIBBY foreign key (ID_DISTRIBUTOR)
      references DISTRIBUTORS (ID_DISTRIBUTOR) on delete restrict on update restrict;

alter table LOCATIONS add constraint FK_ASSOCIATION_10 foreign key (ID_CABINET)
      references CABINETS (ID_CABINET) on delete restrict on update restrict;

alter table LOCATIONS add constraint FK_ASSOCIATION_11 foreign key (ID_SHELF)
      references SHELFS (ID_SHELF) on delete restrict on update restrict;

alter table LOCATIONS add constraint FK_ASSOCIATION_9 foreign key (ID_ROOM)
      references ROOMS (ID_ROOM) on delete restrict on update restrict;

alter table GAMESGAMETYPES add constraint FK_GAMESGAMETYPES foreign key (ID_GAMETYPE)
      references GAMETYPES (ID_GAMETYPE) on delete restrict on update restrict;

alter table GAMESGAMETYPES add constraint FK_GAMESGAMETYPES2 foreign key (ID_GAME)
      references GAMES (ID_GAME) on delete restrict on update restrict;

alter table GAMESAUTHORS add constraint FK_GAMESAUTHORS foreign key (ID_AUTHOR)
      references AUTHORS (ID_AUTHOR) on delete restrict on update restrict;

alter table GAMESAUTHORS add constraint FK_GAMESAUTHORS2 foreign key (ID_GAME)
      references GAMES (ID_GAME) on delete restrict on update restrict;

