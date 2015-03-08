CREATE TABLE TBL_Ejecutor (
	Nom_Ejecutor VARCHAR(50) NOT NULL,
	RUT VARCHAR(12) NOT NULL,
	Cargo VARCHAR(20),
    PRIMARY KEY (Nom_Ejecutor)
);

CREATE TABLE TBL_Gerencia (
	Nom_Gerencia VARCHAR(20) NOT NULL,
	PRIMARY KEY (Nom_Gerencia)
);

CREATE TABLE TBL_Sup_Int (
	Nom_Sup_Int VARCHAR(20) NOT NULL,
	Gerencia VARCHAR(20) NOT NULL REFERENCES TBL_Gerencia(Nom_Gerencia),
	PRIMARY KEY (Nom_Sup_Int)
);

CREATE TABLE TBL_Area (
	Nom_Area VARCHAR(20) NOT NULL,
	Sup_Int VARCHAR(20) NOT NULL REFERENCES TBL_Sup_Int(Nom_Sup_Int),
	PRIMARY KEY (Nom_Area)
);

CREATE TABLE TBL_Empresa (
	Nom_Empresa VARCHAR(20) NOT NULL,
	RUT VARCHAR(12) NOT NULL,
	Giro VARCHAR(50),
	Area VARCHAR(20) NOT NULL REFERENCES TBL_Area(Nom_Area),
	PRIMARY KEY (Nom_Empresa)
);

CREATE TABLE TBL_MV_EQ (
	Patente VARCHAR(6) NOT NULL,
	Km	VARCHAR(6),
	Num_Interno VARCHAR(6) NOT NULL,
	Gerencia VARCHAR(20) NOT NULL REFERENCES TBL_Gerencia(Nom_Gerencia),
	Sup_Int VARCHAR(20) NOT NULL REFERENCES TBL_Sup_Int(Nom_Sup_Int),
	Area VARCHAR(20) NOT NULL REFERENCES TBL_Area(Nom_Area),
	Empresa VARCHAR(20) NOT NULL REFERENCES TBL_Empresa(Nom_Empresa),
   Sn_Rf	VARCHAR(20) NOT NULL,
   Sn_DashBoard VARCHAR(20) NOT NULL,
   Ejecutor VARCHAR(50) NOT NULL REFERENCES TBL_Ejecutor(Nom_Ejecutor),
   Fecha DATE NOT NULL,
   PRIMARY KEY (Patente)
);