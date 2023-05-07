CREATE DATABASE airline_reservation;

USE airline_reservation;

CREATE TABLE flights (
  id INT(11) NOT NULL AUTO_INCREMENT,
  flight_number VARCHAR(10) NOT NULL,
  departure_city VARCHAR(50) NOT NULL,
  arrival_city VARCHAR(50) NOT NULL,
  departure_date DATE NOT NULL,
  departure_time TIME NOT NULL,
  arrival_time TIME NOT NULL,
  price DECIMAL(10, 2) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE reservations (
  id INT(11) NOT NULL AUTO_INCREMENT,
  flight_number VARCHAR(10) NOT NULL,
  passenger_name VARCHAR(50) NOT NULL,
  passenger_email VARCHAR(100) NOT NULL,
  departure_date DATE NOT NULL,
  num_passengers INT(11) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (flight_number) REFERENCES flights(flight_number)
);
