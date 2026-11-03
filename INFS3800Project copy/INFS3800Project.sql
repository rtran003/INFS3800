DROP USER IF EXISTS 'joe@localhost';
DROP DATABASE IF EXISTS `INFS3800Project` ;

CREATE DATABASE `INFS3800Project` CHARACTER SET utf8mb4;

-- IF NOT EXISTS + ALTER keeps this script re-runnable even if joe already exists
CREATE USER IF NOT EXISTS 'joe'@'localhost' IDENTIFIED BY 'joe123';
ALTER USER 'joe'@'localhost' IDENTIFIED BY 'joe123';
GRANT ALL PRIVILEGES ON `INFS3800Project`.* TO 'joe'@'localhost';
FLUSH PRIVILEGES;

USE `INFS3800Project`;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  password_hash CHAR(64) NOT NULL
);

INSERT INTO users (username, password_hash) VALUES ('jma', SHA2('jma123', 256));

CREATE TABLE portfolio_items (
  id INT AUTO_INCREMENT PRIMARY KEY,
  category VARCHAR(30) NOT NULL,
  title VARCHAR(100) NOT NULL,
  description TEXT NOT NULL
);

INSERT INTO portfolio_items (category, title, description) VALUES
('Project', 'Ticketing System and Management', 'Managed 50+ weekly IT support tickets in Spiceworks with a sub-2-hour response time and 90%+ SLA closure rate; developed 15+ knowledge base articles.'),
('Project', 'Active Directory Project', 'Deployed an enterprise-grade Active Directory environment on HackTheBox, automated user provisioning with PowerShell, and enforced security policies through GPOs.'),
('Project', 'Power BI Portfolio Dashboard', 'Interactive Power BI dashboard comparing Walmart and Amazon sales and performance data, with data modeled in Excel.'),
('Experience', 'Student Intern - Crossland Colorado', 'Built a competitive analysis tracker in Excel, evaluated scheduling and dispatch software platforms, and wrote a one-page executive pitch.'),
('Experience', 'Student Intern - RISE Southeast', 'Produced a Mentorship Guidebook in Word and Excel and delivered interactive STEM lab sessions using Python, HTML5, and GitHub.'),
('Experience', 'Barista/Cashier - Bubbles n'' Bites', 'Customer service, inventory management, and teamwork in a fast-paced cafe environment.'),
('Education', 'University of Colorado Colorado Springs', 'B.S. in Information Systems and Technology, expected Aug 2027, GPA 3.7.'),
('Education', 'Pikes Peak State College', 'A.S. in Computer and Information Sciences.'),
('Skill', 'Programming Languages', 'Python, Java, C, R, SQL, HTML, CSS.'),
('Skill', 'Tools and Platforms', 'Git, GitHub, Docker, Linux, Ubuntu, Unix, Visual Studio, Eclipse, RStudio, Matplotlib, MS Office, Power BI.');
