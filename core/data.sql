create table data_analyst_employees (
	id INT AUTO_INCREMENT PRIMARY KEY,
	first_name VARCHAR(255),
	last_name VARCHAR(255),
	email VARCHAR(255),
	gender VARCHAR(255),
    position VARCHAR(255),
    years_of_experience INT,
	date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample data for data analyst employees
INSERT INTO data_analyst_employees (first_name, last_name, email, gender, position, years_of_experience) VALUES
('John', 'Smith', 'john.smith@datatech.com', 'Male', 'Senior Data Analyst', 8),
('Sarah', 'Johnson', 'sarah.j@analyticsco.com', 'Female', 'Data Analyst Team Lead', 6),
('Michael', 'Chen', 'mchen@datascience.org', 'Male', 'Business Intelligence Analyst', 4),
('Emily', 'Williams', 'e.williams@techcorp.com', 'Female', 'Junior Data Analyst', 1),
('James', 'Rodriguez', 'jrodriguez@datainsights.com', 'Male', 'Market Data Analyst', 3),
('Maria', 'Garcia', 'mgarcia@analytics.net', 'Female', 'Financial Data Analyst', 5),
('David', 'Kim', 'davidk@dataworks.com', 'Male', 'Healthcare Data Analyst', 7),
('Lisa', 'Patel', 'lpatel@techdata.com', 'Female', 'Product Data Analyst', 2),
('Ahmad', 'Hassan', 'ahassan@datametrics.com', 'Male', 'Research Data Analyst', 4),
('Sofia', 'Martinez', 'smartinez@dataview.com', 'Female', 'Marketing Data Analyst', 3),
('Alexander', 'Wong', 'awong@datacorp.com', 'Male', 'Senior Business Analyst', 6),
('Emma', 'Brown', 'ebrown@analyticslab.com', 'Female', 'Data Operations Analyst', 2),
('Carlos', 'Santos', 'csantos@datatech.org', 'Male', 'Customer Data Analyst', 5),
('Anna', 'Kowalski', 'akowalski@datagroup.com', 'Female', 'Risk Data Analyst', 4),
('Ryan', 'O''Connor', 'roconnor@datateam.com', 'Male', 'Supply Chain Analyst', 3),
('Priya', 'Sharma', 'psharma@datasolutions.com', 'Female', 'Data Quality Analyst', 5),
('Thomas', 'Anderson', 'tanderson@databridge.com', 'Male', 'Operations Data Analyst', 4),
('Nina', 'Ivanova', 'nivanova@dataex.com', 'Female', 'Statistical Analyst', 6),
('Kevin', 'Lee', 'klee@datapro.com', 'Male', 'Digital Analytics Specialist', 3),
('Rachel', 'Clarke', 'rclarke@dataservices.com', 'Female', 'Data Visualization Analyst', 4),
('Mohammed', 'Ali', 'mali@dataexperts.com', 'Male', 'Performance Data Analyst', 5),
('Yuki', 'Tanaka', 'ytanaka@datasci.com', 'Female', 'Data Mining Specialist', 7),
('Daniel', 'Cooper', 'dcooper@datahub.com', 'Male', 'Data Reporting Analyst', 2),
('Olivia', 'Wilson', 'owilson@dataresearch.com', 'Female', 'Business Data Analyst', 4),
('Lucas', 'Silva', 'lsilva@dataplus.com', 'Male', 'Data Insights Analyst', 3);
