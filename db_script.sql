CREATE TABLE respuestas (
	id SERIAL PRIMARY KEY,
	genero VARCHAR(1) NOT NULL,
	contacto BOOLEAN,
	fiebre BOOLEAN,
	tos BOOLEAN NOT NULL,
	dificultad_respiratoria BOOLEAN NOT NULL,
	dolor_pecho BOOLEAN NOT NULL,
	dolor_cabeza BOOLEAN NOT NULL,
	escurrimiento BOOLEAN NOT NULL,
	dolor_muscular BOOLEAN NOT NULL,
	diarrea BOOLEAN NOT NULL,
	id_diagnostico INT REFERENCES diagnosticos(id),
	id_correo INT REFERENCES correos(id)
);

CREATE TABLE diagnosticos (
	id SERIAL PRIMARY KEY,
	diagnostico VARCHAR(50) NOT NULL
);

CREATE TABLE correos (
    id SERIAL PRIMARY KEY,
    correo VARCHAR(250),
	estado BOOLEAN NOT NULL
);

INSERT INTO diagnosticos (diagnostico) VALUES ('Alta');
INSERT INTO diagnosticos (diagnostico) VALUES ('Media');
INSERT INTO diagnosticos (diagnostico) VALUES ('Baja');
