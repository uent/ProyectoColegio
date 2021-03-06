#permisos
InSERT InTO Permiso (nombrePermiso,created_at,updated_at)
VALUES ("IngresoNino",now(),now());

InSERT InTO Permiso (nombrePermiso,created_at,updated_at) #ahora se paso a ajax
VALUES ("AsignarCitas",now(),now());

InSERT InTO Permiso (nombrePermiso,created_at,updated_at)
VALUES ("ingresoProfesional",now(),now());

InSERT InTO Permiso (nombrePermiso,created_at,updated_at)
VALUES ("ContactosPendientes",now(),now());

InSERT InTO Permiso (nombrePermiso,created_at,updated_at)
VALUES ("EvaluarCitas",now(),now());

InSERT InTO Permiso (nombrePermiso,created_at,updated_at)
VALUES ("IngresoTutor",now(),now());

InSERT InTO Permiso (nombrePermiso,created_at,updated_at)
VALUES ("GenerarAnamnesis",now(),now());

InSERT InTO Permiso (nombrePermiso,created_at,updated_at)
VALUES ("FinalizarInformeFinal",now(),now());

InSERT InTO Permiso (nombrePermiso,created_at,updated_at)
VALUES ("IngresoProfesional",now(),now());

InSERT InTO Permiso (nombrePermiso,created_at,updated_at)
VALUES ("LlenarInformeTutor",now(),now());

InSERT InTO Permiso (nombrePermiso,created_at,updated_at)
VALUES ("ModificarFichasNinos",now(),now());

InSERT InTO Permiso (nombrePermiso,created_at,updated_at)
VALUES ("ModificarProfesionales",now(),now());

InSERT InTO Permiso (nombrePermiso,created_at,updated_at)
VALUES ("EditarTutorPlus",now(),now()); #permite editar los datos de un tutor con permisos extras(personal del sistema)

InSERT InTO Permiso (nombrePermiso,created_at,updated_at)
VALUES ("EditarNinoPlus",now(),now());  #permite editar los datos de un niño con permisos extras(personal del sistema)

InSERT InTO Permiso (nombrePermiso,created_at,updated_at)
VALUES ("EditarProfesional",now(),now());

InSERT InTO Permiso (nombrePermiso,created_at,updated_at)
VALUES ("VisualizarInformesFinales",now(),now());

InSERT InTO Permiso (nombrePermiso,created_at,updated_at)
VALUES ("MostrarCalendarioProfesional",now(),now());

#perfiles

#secretaria
InSERT InTO Perfil (nombrePerfil,created_at,updated_at)
VALUES ("Secretaria",now(),now());

InSERT InTO users (rut,name,apellidos,email,password,Profesion,created_at,updated_at)
VALUES ("1234567894","SecretariaNombre","SecretariaApellido","secretariamail@gmail.com",
  "$2y$10$oEte2LMx0QW.ikTiGURxWezu76ZELxmSsNfePraAZnBuFEEgusxDe","Secretaria",now(),now());

  InSERT InTO Perfil_Usuario (idPerfil,id,created_at,updated_at)
  SELECT idPerfil, id, now(),now()
  FROM Users
  InnER JOIn Perfil
  where  Perfil.nombrePerfil = "Secretaria" and Users.email = "secretariamail@gmail.com";

  InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
  SELECT idPerfil, idPermiso, now(),now()
  FROM Permiso
  InnER JOIn Perfil
  where  Permiso.nombrePermiso = "IngresoNino" and Perfil.nombrePerfil ="Secretaria";


#Tutor
InSERT InTO Perfil (nombrePerfil,created_at,updated_at)
VALUES ("Tutor",now(),now());

InSERT InTO users (rut,name,apellidos,email,password,Profesion,created_at,updated_at)
VALUES ("12345","TutorNombre","TutorApellido","tutormail@gmail.com",
  "$2y$10$oEte2LMx0QW.ikTiGURxWezu76ZELxmSsNfePraAZnBuFEEgusxDe","Tutor",now(),now());

  InSERT InTO Perfil_Usuario (idPerfil,id,created_at,updated_at)
  SELECT idPerfil, id, now(),now()
  FROM Users
  InnER JOIn Perfil
  where  Perfil.nombrePerfil = "Tutor" and Users.email = "tutormail@gmail.com";

  InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
  SELECT idPerfil, idPermiso, now(),now()
  FROM Permiso
  InnER JOIn Perfil
  where  Permiso.nombrePermiso = "VisualizarInformesFinales" and Perfil.nombrePerfil ="Tutor";

  InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
  SELECT idPerfil, idPermiso, now(),now()
  FROM Permiso
  InnER JOIn Perfil
  where  Permiso.nombrePermiso = "LlenarInformeTutor" and Perfil.nombrePerfil ="Tutor";

#Fonoaudiologo
InSERT InTO Perfil (nombrePerfil,created_at,updated_at)
VALUES ("Fonoaudiologo",now(),now());

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "EvaluarCitas" and Perfil.nombrePerfil ="Fonoaudiologo";

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "MostrarCalendarioProfesional" and Perfil.nombrePerfil ="Fonoaudiologo";

InSERT InTO users (rut,name,apellidos,email,password,Profesion,created_at,updated_at)
VALUES ("1236789","FonoNombre","FonoApellido","fonomail@gmail.com",
  "$2y$10$oEte2LMx0QW.ikTiGURxWezu76ZELxmSsNfePraAZnBuFEEgusxDe","Fonoaudiologo",now(),now());

  InSERT InTO Perfil_Usuario (idPerfil,id,created_at,updated_at)
  SELECT idPerfil, id, now(),now()
  FROM Users
  InnER JOIn Perfil
  where  Perfil.nombrePerfil = "Fonoaudiologo" and Users.email = "fonomail@gmail.com";




#Psicologico
InSERT InTO Perfil (nombrePerfil,created_at,updated_at)
VALUES ("Psicologico",now(),now());

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "EvaluarCitas" and Perfil.nombrePerfil ="Psicologico";

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "MostrarCalendarioProfesional" and Perfil.nombrePerfil ="Psicologico";


InSERT InTO users (rut,name,apellidos,email,password,Profesion,created_at,updated_at)
VALUES ("1456789","psicologicoNombre","psicologicoApellido","psicologicomail@gmail.com",
  "$2y$10$oEte2LMx0QW.ikTiGURxWezu76ZELxmSsNfePraAZnBuFEEgusxDe","Psicologico",now(),now());

  InSERT InTO Perfil_Usuario (idPerfil,id,created_at,updated_at)
  SELECT idPerfil, id, now(),now()
  FROM Users
  InnER JOIn Perfil
  where  Perfil.nombrePerfil = "Psicologico" and Users.email = "psicologicomail@gmail.com";




    #Psicopedagogo
    InSERT InTO Perfil (nombrePerfil,created_at,updated_at)
    VALUES ("Psicopedagogo",now(),now());

    InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
    SELECT idPerfil, idPermiso, now(),now()
    FROM Permiso
    InnER JOIn Perfil
    where  Permiso.nombrePermiso = "EvaluarCitas" and Perfil.nombrePerfil ="Psicopedagogo";

    InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
    SELECT idPerfil, idPermiso, now(),now()
    FROM Permiso
    InnER JOIn Perfil
    where  Permiso.nombrePermiso = "MostrarCalendarioProfesional" and Perfil.nombrePerfil ="Psicopedagogo";


    InSERT InTO users (rut,name,apellidos,email,password,Profesion,created_at,updated_at)
    VALUES ("145678912312","psicopedagogoNombre","psicopedagogoApellido","psicopedagogomail@gmail.com",
      "$2y$10$oEte2LMx0QW.ikTiGURxWezu76ZELxmSsNfePraAZnBuFEEgusxDe","Psicopedagogo",now(),now());

      InSERT InTO Perfil_Usuario (idPerfil,id,created_at,updated_at)
      SELECT idPerfil, id, now(),now()
      FROM Users
      InnER JOIn Perfil
      where  Perfil.nombrePerfil = "Psicopedagogo" and Users.email = "psicopedagogomail@gmail.com";



      #TerapeutaOcupacional
      InSERT InTO Perfil (nombrePerfil,created_at,updated_at)
      VALUES ("TerapeutaOcupacional",now(),now());

      InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
      SELECT idPerfil, idPermiso, now(),now()
      FROM Permiso
      InnER JOIn Perfil
      where  Permiso.nombrePermiso = "EvaluarCitas" and Perfil.nombrePerfil ="TerapeutaOcupacional";

      InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
      SELECT idPerfil, idPermiso, now(),now()
      FROM Permiso
      InnER JOIn Perfil
      where  Permiso.nombrePermiso = "MostrarCalendarioProfesional" and Perfil.nombrePerfil ="TerapeutaOcupacional";


      InSERT InTO users (rut,name,apellidos,email,password,Profesion,created_at,updated_at)
      VALUES ("11242567289","terapeutaOcupacionalNombre","terapeutaOcupacionalApellido","terapeutaocupacionalmail@gmail.com",
        "$2y$10$oEte2LMx0QW.ikTiGURxWezu76ZELxmSsNfePraAZnBuFEEgusxDe","TerapeutaOcupacional",now(),now());

        InSERT InTO Perfil_Usuario (idPerfil,id,created_at,updated_at)
        SELECT idPerfil, id, now(),now()
        FROM Users
        InnER JOIn Perfil
        where  Perfil.nombrePerfil = "TerapeutaOcupacional" and Users.email = "terapeutaocupacionalmail@gmail.com";




#Administrador
InSERT InTO Perfil (nombrePerfil,created_at,updated_at)
VALUES ("Administrador",now(),now());

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "IngresoNino" and Perfil.nombrePerfil ="Administrador";

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "IngresoProfesional" and Perfil.nombrePerfil ="Administrador";

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "AsignarCitas" and Perfil.nombrePerfil ="Administrador";

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "Contactospendientes" and Perfil.nombrePerfil ="Administrador";

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "IngresoTutor" and Perfil.nombrePerfil ="Administrador";

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "GenerarAnamnesis" and Perfil.nombrePerfil ="Administrador";

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "IngresoProfesional" and Perfil.nombrePerfil ="Administrador";

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "ModificarFichasNinos" and Perfil.nombrePerfil ="Administrador";

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "ModificarProfesionales" and Perfil.nombrePerfil ="Administrador";

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "EditarTutorPlus" and Perfil.nombrePerfil ="Administrador";

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "EditarNinoPlus" and Perfil.nombrePerfil ="Administrador";

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "EditarProfesional" and Perfil.nombrePerfil ="Administrador";

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "FinalizarInformeFinal" and Perfil.nombrePerfil ="Administrador";

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "VisualizarInformesFinales" and Perfil.nombrePerfil ="Administrador";

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "EvaluarCitas" and Perfil.nombrePerfil ="Administrador";

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "MostrarCalendarioProfesional" and Perfil.nombrePerfil ="Administrador";


InSERT InTO users (rut,name,apellidos,email,password,Profesion,created_at,updated_at)
VALUES ("12789","AdminNombre","AdminApellido","adminmail@gmail.com",
  "$2y$10$oEte2LMx0QW.ikTiGURxWezu76ZELxmSsNfePraAZnBuFEEgusxDe","Administrador",now(),now());

  InSERT InTO Perfil_Usuario (idPerfil,id,created_at,updated_at)
  SELECT idPerfil, id, now(),now()
  FROM Users
  InnER JOIn Perfil
  where  Perfil.nombrePerfil = "Administrador" and Users.email = "adminmail@gmail.com";



#Super Administrador
InSERT InTO Perfil (nombrePerfil,created_at,updated_at)
VALUES ("SuperAdministrador",now(),now());

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "IngresoNino" and Perfil.nombrePerfil ="SuperAdministrador";

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "IngresoProfesional" and Perfil.nombrePerfil ="SuperAdministrador";

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "AsignarCitas" and Perfil.nombrePerfil ="SuperAdministrador";

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "Contactospendientes" and Perfil.nombrePerfil ="SuperAdministrador";

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "IngresoTutor" and Perfil.nombrePerfil ="SuperAdministrador";

InSERT InTO Permiso_Perfil (idPerfil,idPermiso,created_at,updated_at)
SELECT idPerfil, idPermiso, now(),now()
FROM Permiso
InnER JOIn Perfil
where  Permiso.nombrePermiso = "IngresoProfesional" and Perfil.nombrePerfil ="SuperAdministrador";


InSERT InTO users (rut,name,apellidos,email,password,Profesion,created_at,updated_at)
VALUES ("1234567893","SuperNombre","SuperApellido","supermail@gmail.com",
  "$2y$10$oEte2LMx0QW.ikTiGURxWezu76ZELxmSsNfePraAZnBuFEEgusxDe","SuperAdministrador",now(),now());

  InSERT InTO Perfil_Usuario (idPerfil,id,created_at,updated_at)
  SELECT idPerfil, id, now(),now()
  FROM Users
  InnER JOIn Perfil
  where  Perfil.nombrePerfil = "SuperAdministrador" and Users.email ="supermail@gmail.com";
