CREATE VIEW nationalUniversityView AS
    SELECT *
    FROM STUDENT A NATURAL JOIN NATIONAL_UNIVERSITY B
    WHERE A.byqx = '升学';

CREATE VIEW companyView AS
    SELECT *
    FROM STUDENT A NATURAL JOIN COMPANY B NATURAL JOIN COMPANY_RANK C
    WHERE A.byqx <> '升学' AND A.byqx <> '出国、出境' AND
    A.byqx <> '不就业拟升学' AND A.byqx <> '其他暂不就业' AND A.byqx <> '待就业'
    AND A.year=C.year;

CREATE VIEW foreignUniversityView AS
    SELECT *
    FROM STUDENT A NATURAL JOIN FOREIGN_UNIVERSITY B NATURAL JOIN UNIVERSITY_RANK C
    WHERE A.byqx = '出国、出境' AND A.year=C.year;

CREATE VIEW notEmployedView AS
    SELECT *
    FROM STUDENT A
    WHERE A.byqx = '不就业拟升学' OR A.byqx = '其他暂不就业' OR A.byqx = '待就业';
