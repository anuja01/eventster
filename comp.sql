USE comp;

CREATE TABLE user (
	user_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
);

INSERT INTO user (name, password) VALUES ('admin', 'admin');
-- department and employee is having one to many relationship
CREATE TABLE department (
    dept_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    floor_no INT NOT NULL
);
INSERT INTO department (name, floor_no) VALUES ('Engineering', 1);

CREATE TABLE employee (
    emp_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    address VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    Fk_dept_id INT NOT NULL,
    FOREIGN KEY (Fk_dept_id) REFERENCES  department(dept_id) ON DELETE CASCADE
);
INSERT INTO employee (name, address, phone, Fk_dept_id) VALUES ('Thilina', '22A, Lowss, Burjan', 077876534, 1);

CREATE TABLE device (
    device_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    brand VARCHAR(100) NOT NULL,
    model VARCHAR(255) NOT NULL,
    Fk_emp_id INT NOT NULL,
    FOREIGN KEY (Fk_emp_id) REFERENCES  employee(emp_id) ON DELETE CASCADE,
    UNIQUE (Fk_emp_id)
);
INSERT INTO device (brand, model, Fk_emp_id) VALUES ('Apple', 'iPhone 12', 1);