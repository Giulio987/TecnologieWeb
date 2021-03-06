CREATE SCHEMA IF NOT EXISTS Startup;
USE Startup;

# RICORDIAMOCI LA NORMALIZZAZIONE DELL'INDIRIZZO SU TUTTI NELLO SCHEMA RELAZIONALE
#SI ASSUME CHE LA MAIL SIA UNICA
CREATE TABLE EDIFICIO(
	CODICE			INT					NOT NULL,
    VIA			    VARCHAR(50),
    CIVICO      	VARCHAR(8),
    CAP         	VARCHAR(5),
    CITTA       	VARCHAR(10),
    UNIQUE(CITTA, VIA,CIVICO),
    PRIMARY KEY(CODICE)
);
CREATE TABLE MEDICO(
    C_F_MEDICO   	CHAR(16)            NOT NULL,
	NOME_MED     	VARCHAR(20)     	NOT NULL,
    COGNOME_MED     VARCHAR(20)     	NOT NULL,
    EMAIL			VARCHAR(50)			NOT NULL,
    SESSO			CHAR(1),
    DOB             DATE,
    TELEFONO    	VARCHAR(15),
    CODICE_EDIFICIO	INT					NOT NULL,
    PRIMARY KEY(C_F_MEDICO),
	FOREIGN KEY(CODICE_EDIFICIO) REFERENCES EDIFICIO(CODICE)
		ON DELETE CASCADE ON UPDATE CASCADE,
    UNIQUE(EMAIL)
);

CREATE TABLE PAZIENTE(
    C_F_PAZIENTE    CHAR(16)        NOT NULL,
	NOME_PAZ     	VARCHAR(20)     NOT NULL,
    COGNOME_PAZ     VARCHAR(20)     NOT NULL,
    EMAIL			VARCHAR(50)		NOT NULL,
    DOB             DATE,
    SESSO			CHAR(1),
    C_F_MEDICO		CHAR(16),
    TELEFONO    	VARCHAR(15),
    VIA         	VARCHAR(50),
    CIVICO      	VARCHAR(8),
    CAP         	VARCHAR(8),
    CITTA       	VARCHAR(10),
    PRIMARY KEY(C_F_PAZIENTE),
    UNIQUE(EMAIL),
    FOREIGN KEY(C_F_MEDICO) REFERENCES MEDICO(C_F_MEDICO)
        ON DELETE CASCADE ON UPDATE CASCADE
);
#QUANDO IL MEDICO VIENE ELIMINATO L'UTENTE(PAZIENTE) TORNA ALLO STATO "SENZA MEDICO"

CREATE TABLE VISITA(
	ID				INT				NOT NULL, #INSERITO AUTOMATICAMENTE DALL'APPLICATIVO WEB(PROGRESSIVO)
    C_F_MEDICO		CHAR(16)		NOT NULL,
    C_F_PAZIENTE    CHAR(16)        NOT NULL,
    DATA_VISITA		DATETIME		NOT NULL, 
    #TOCCA FARLA UNICA PERCHÈ ESISTE O SOLO PER LA DATA O PER DATA E ORARIO INSIEME
    PRIMARY KEY(ID),
    FOREIGN KEY(C_F_PAZIENTE) REFERENCES PAZIENTE(C_F_PAZIENTE)
        ON DELETE NO ACTION ON UPDATE CASCADE,
    FOREIGN KEY(C_F_MEDICO) REFERENCES MEDICO(C_F_MEDICO)
        ON DELETE NO ACTION ON UPDATE CASCADE
#ANCHE SE PAZIENTE E MEDICO NON CI FOSSERO PIÙ L'INFORMAZIONE DELLA VISITA È
#RAGIONEVOLE CHE VENGA MANTENUTA L'INTERA INFORMAZIONE
);
CREATE TABLE FARMACO(
    DESCRIZIONE     VARCHAR(100)    NOT NULL,
	AIC         	CHAR(10)	        NOT NULL,
    PRIMARY KEY(AIC)
);
CREATE TABLE VISITA_SPECIALISTICA(
    DESCRIZIONE     VARCHAR(100)    NOT NULL,
	ID         	    INT	        NOT NULL,    #INSERITO AUTOMATICAMENTE DALL'APPLICATIVO WEB(PROGRESSIVO)
    PRIMARY KEY(AIC)
);
#NRE
#https://sistemats1.sanita.finanze.it/portale/documents/20182/33285/gestione%2BNRE_24_05_2012.pdf/42dadb9f-9c5a-aec0-c5de-a379c41d086e
CREATE TABLE RICETTA_FARMACO(
	NRE				CHAR(15)		NOT NULL, 
    DATA_RICETTA	DATE			NOT NULL, 
    AIC         	CHAR(10)     	NOT NULL, #DOBBIAMO DECIDERE CHE CODICI DARE AI PRODOTTI
    C_F_MEDICO		CHAR(16)		NOT NULL,
    C_F_PAZIENTE    CHAR(16)        NOT NULL,
    PRIMARY KEY(NRE),
    FOREIGN KEY(AIC) REFERENCES PRODOTTO(AIC)
        ON DELETE NO ACTION ON UPDATE CASCADE,
    FOREIGN KEY(C_F_PAZIENTE) REFERENCES PAZIENTE(C_F_PAZIENTE)
        ON DELETE NO ACTION ON UPDATE CASCADE,
    FOREIGN KEY(C_F_MEDICO) REFERENCES MEDICO(C_F_MEDICO)
        ON DELETE NO ACTION ON UPDATE CASCADE
#ANCHE SE PAZIENTE, MEDICO O AIC NON CI FOSSERO PIÙ NEL DB, NELLA RICETTA È
#RAGIONEVOLE CHE VENGA MANTENUTA L'INTERA INFORMAZIONE
);
CREATE TABLE RICETTA_VISITA_SPECILISTICA(
	NRE				CHAR(15)		NOT NULL, 
    DATA_RICETTA	DATE			NOT NULL, 
    ID_SPEC         INT     	    NOT NULL,
    C_F_MEDICO		CHAR(16)		NOT NULL,
    C_F_PAZIENTE    CHAR(16)        NOT NULL,
    PRIMARY KEY(NRE),
    FOREIGN KEY(AIC) REFERENCES PRODOTTO(AIC)
        ON DELETE NO ACTION ON UPDATE CASCADE,
    FOREIGN KEY(C_F_PAZIENTE) REFERENCES PAZIENTE(C_F_PAZIENTE)
        ON DELETE NO ACTION ON UPDATE CASCADE,
    FOREIGN KEY(C_F_MEDICO) REFERENCES MEDICO(C_F_MEDICO)
        ON DELETE NO ACTION ON UPDATE CASCADE
#ANCHE SE PAZIENTE, MEDICO O ID_SPEC NON CI FOSSERO PIÙ NEL DB, NELLA RICETTA È
#RAGIONEVOLE CHE VENGA MANTENUTA L'INTERA INFORMAZIONE
);