create table data_analyst_employees (
	id INT AUTO_INCREMENT PRIMARY KEY,
	first_name VARCHAR(255),
	last_name VARCHAR(255),
	email VARCHAR(255),
	gender VARCHAR(255),
    position VARCHAR(255),
    years_of_experience TIMESTAMP,
	date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);