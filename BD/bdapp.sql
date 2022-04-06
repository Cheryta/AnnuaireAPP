drop table if exists Articles;

/*==============================================================*/
/* Table: Articles                                              */
/*==============================================================*/
create table Articles
(
   codeArticle          int not null,
   libelle              varchar(254),
   quantite             int,
   prixUnitaire         int,
   prixTotal            int,
   date                 datetime,
   lieu                 varchar(254),
   primary key (codeArticle)
);
