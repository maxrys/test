CREATE TABLE transactions (
  id INT NOT NULL PRIMARY KEY,
  paid_to INT NOT NULL,
  paid_by INT NOT NULL,
  amount REAL NOT NULL,
  trdate datetime NOT NULL
);

CREATE INDEX paid_to ON transactions(paid_to ASC);
CREATE INDEX paid_by ON transactions(paid_by ASC);

INSERT INTO transactions(id, paid_to, paid_by, amount, trdate) VALUES(1, 10, 1, 6.0, '2021-01-01');
INSERT INTO transactions(id, paid_to, paid_by, amount, trdate) VALUES(2, 11, 1, 3.0, '2021-01-02');
INSERT INTO transactions(id, paid_to, paid_by, amount, trdate) VALUES(3, 12, 1, 4.0, '2021-01-03');
INSERT INTO transactions(id, paid_to, paid_by, amount, trdate) VALUES(4, 2, 10, 2.0, '2021-01-04');
INSERT INTO transactions(id, paid_to, paid_by, amount, trdate) VALUES(5, 2, 10, 1.0, '2021-01-04');
INSERT INTO transactions(id, paid_to, paid_by, amount, trdate) VALUES(6, 2, 11, 6.0, '2021-01-06');
INSERT INTO transactions(id, paid_to, paid_by, amount, trdate) VALUES(7, 2, 11, 7.0, '2021-01-06');
INSERT INTO transactions(id, paid_to, paid_by, amount, trdate) VALUES(8, 2, 12, 2.0, '2021-01-07');
INSERT INTO transactions(id, paid_to, paid_by, amount, trdate) VALUES(9, 2, 12, 3.0, '2021-01-08');
INSERT INTO transactions(id, paid_to, paid_by, amount, trdate) VALUES(10, 2, 10, 1.0, '2021-01-09');
INSERT INTO transactions(id, paid_to, paid_by, amount, trdate) VALUES(11, 10, 1, 3.0, '2021-01-10');
INSERT INTO transactions(id, paid_to, paid_by, amount, trdate) VALUES(12, 2, 10, 5.0, '2021-01-10');