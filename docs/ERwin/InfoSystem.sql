
CREATE TABLE COMPANY
(
	company_category     VARCHAR(20) NULL,
	company_industry     VARCHAR(50) NULL,
	parent_company       VARCHAR(80) NULL,
	location             VARCHAR(30) NULL,
	dwmc                 VARCHAR(80) NOT NULL
);



ALTER TABLE COMPANY
ADD PRIMARY KEY (dwmc);



CREATE TABLE COMPANY_RANK
(
	year                 VARCHAR(4) NULL,
	rank_500             VARCHAR(5) NULL,
	dwmc                 VARCHAR(80) NOT NULL
);



ALTER TABLE COMPANY_RANK
ADD PRIMARY KEY (dwmc);



CREATE TABLE DW
(
	dwmc                 VARCHAR(80) NOT NULL
);



ALTER TABLE DW
ADD PRIMARY KEY (dwmc);



CREATE TABLE FOREIGN_UNIVERSITY
(
	country              VARCHAR(30) NULL,
	dwmc                 VARCHAR(80) NOT NULL
);



ALTER TABLE FOREIGN_UNIVERSITY
ADD PRIMARY KEY (dwmc);



CREATE TABLE NATIONAL_UNIVERSITY
(
	institution_category VARCHAR(20) NULL,
	location             VARCHAR(30) NULL,
	dwmc                 VARCHAR(80) NOT NULL
);



ALTER TABLE NATIONAL_UNIVERSITY
ADD PRIMARY KEY (dwmc);



CREATE TABLE STUDENT
(
	year                 VARCHAR(4) NULL,
	xb                   VARCHAR(4) NULL,
	xm                   VARCHAR(30) NULL,
	mz                   VARCHAR(14) NULL,
	cc                   VARCHAR(10) NULL,
	zy                   VARCHAR(30) NULL,
	pyfs                 VARCHAR(20) NULL,
	syszd                VARCHAR(50) NULL,
	knslb                VARCHAR(20) NULL,
	fy                   VARCHAR(30) NULL,
	xh                   VARCHAR(20) NULL,
	qq                   VARCHAR(20) NULL,
	email                VARCHAR(30) NULL,
	mobile               VARCHAR(15) NULL,
	byqx                 VARCHAR(40) NULL,
	dwmc                 VARCHAR(80) NULL,
	sfzh                 VARCHAR(20) NOT NULL
);



ALTER TABLE STUDENT
ADD PRIMARY KEY (sfzh);



CREATE TABLE UNIVERSITY_RANK
(
	year                 VARCHAR(4) NULL,
	QS_rank              VARCHAR(5) NULL,
	dwmc                 VARCHAR(80) NOT NULL
);



ALTER TABLE UNIVERSITY_RANK
ADD PRIMARY KEY (dwmc);



ALTER TABLE COMPANY
ADD FOREIGN KEY R_4 (dwmc) REFERENCES DW (dwmc);



ALTER TABLE COMPANY_RANK
ADD FOREIGN KEY R_6 (dwmc) REFERENCES COMPANY (dwmc);



ALTER TABLE FOREIGN_UNIVERSITY
ADD FOREIGN KEY R_3 (dwmc) REFERENCES DW (dwmc);



ALTER TABLE NATIONAL_UNIVERSITY
ADD FOREIGN KEY R_2 (dwmc) REFERENCES DW (dwmc);



ALTER TABLE STUDENT
ADD FOREIGN KEY R_1 (dwmc) REFERENCES DW (dwmc);



ALTER TABLE UNIVERSITY_RANK
ADD FOREIGN KEY R_5 (dwmc) REFERENCES FOREIGN_UNIVERSITY (dwmc);


