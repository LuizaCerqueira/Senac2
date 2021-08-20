<?php 


/* exemplo de Strode Procedure*/

delimeter##
drop procedure if exists $iCadastropessoa ##
create procedure if exists $iCadastroPessoa
(in nomeP varchar(255), dtNascP date, loginP varchar(255), senhaP varchar(255),
 perfilP varchar(20),emailP varchar(255),cpfp varchar(14),cepP varchar(10), logradoroP varchar(255), 
 complementoP varchar(255),bairroP varchar(255),cidadeP varchar(255),ufP varchar(2), out msg text)
 begin 
 declare idx int (11);

 
 if (idx = 0) then 
 insert into endereco values (null,logradoroP,complementoP,bairroP,cidadeP,ufP,cepP);
 select idendereco into idx from endereco where 
 logradoro = logradoroP and complemento = complementoP and cep= cepP;
 end if;
 insert into pessoa values (null,nomeP,dtNascP,loginP,md5(senhaP),perfilP,emailP,cpfP);
 select idendereco into idx from endereco where 
 logradoro = logradoroP and complemento = complementoP and cep= cepP;
 end ##
 delimeter;
?>
