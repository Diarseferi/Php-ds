CREATE DATABASE IF NOT EXISTS real_madrid_tickets;
USE real_madrid_tickets;

CREATE TABLE matches (
    id INT AUTO_INCREMENT PRIMARY KEY,
    opponent VARCHAR(100),
    date DATE,
    description TEXT
);

CREATE TABLE purchases (
    id INT AUTO_INCREMENT PRIMARY KEY,
    match_id INT,
    name VARCHAR(100),
    FOREIGN KEY (match_id) REFERENCES matches(id)
);

-- Example data
INSERT INTO matches (opponent, date, description) VALUES
('Barcelona', '2025-07-10', 'El Clásico at Santiago Bernabéu'),
('Atletico Madrid', '2025-07-20', 'Madrid Derby under the stars');
