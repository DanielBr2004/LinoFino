use linofino;


CALL spu_personas_registrar(@idpersona, 'Javier', 'Buleje','789789789','74747474','');
SELECT @idpersona AS 'idpersona';

SELECT * FROM personas;