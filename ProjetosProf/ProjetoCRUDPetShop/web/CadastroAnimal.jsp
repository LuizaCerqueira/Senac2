<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@page contentType="text/html" pageEncoding="iso-8859-1"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>Cadastro Animal</title>
        <style>
            a{
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <h1>PetShop - Cadastro de Animal</h1>
        <fieldset><legend>Cadastro de Animal</legend>
            ${mensagem}
            <form method="post" action="AnimalServlet">
                <table>
                    <tr>
                        <td>Código: </td>
                        <c:choose>
                            <c:when test="${bichinho.codigo > 0}">
                                <td>${bichinho.codigo}</td>
                                <input type="hidden" name="acao" value="update">
                                <input type="hidden" name="codigo" 
                                       value="${bichinho.codigo}">
                            </c:when>
                            <c:otherwise>
                                <td></td>
                                <input type="hidden" name="acao" value="insert">
                            </c:otherwise>
                        </c:choose>
                    </tr>
                    <tr>
                        <td>Nome do Pet: </td>
                        <td><input type="text" name="nomeAnimal" id="nomeAnimal"
                                value="${bichinho.nomeAnimal}"></td>
                    </tr>
                    <tr>
                        <td>Nome do Dono: </td>
                        <td><input type="text" name="dono" id="dono"
                                   value="${bichinho.nomeDono}"></td>
                    </tr>
                    <tr>
                        <td>Espécie: </td>
                        <td><input type="text" name="especie" id="especie"
                                   value="${bichinho.especie}"></td>
                    </tr>
                    <tr>
                        <td>Raça: </td>
                        <td><input type="text" name="raca" id="raca"
                                   value="${bichinho.raca}"></td>
                    </tr>
                    <tr>
                        <td>Sexo: </td>
                        <td>
                            <c:choose>
                                <c:when test="${bichinho.sexo == 'macho'}">
                                    <input type="radio" name="sexo" id="sexo"
                                           value="macho" checked="checked">Macho
                                    <input type="radio" name="sexo" id="sexo"
                                   value="femea">Fêmea
                                </c:when>
                                <c:otherwise>
                                    <input type="radio" name="sexo" id="sexo"
                                           value="macho">Macho
                                    <input type="radio" name="sexo" id="sexo"
                                   value="femea" checked="checked">Fêmea
                                </c:otherwise>
                            </c:choose>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>Idade: </td>
                        <td><input type="text" name="idade" id="idade"
                                   value="${bichinho.idade}"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Enviar"> 
                            <input type="reset" value="Limpar">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset><br>
        <fieldset><legend>Lista de Animais</legend>
            <table border="1" cellspacing="0">
                <tr>
                    <th>Código</th>
                    <th>Nome do Pet</th>
                    <th>Dono</th>
                    <th>Espécie</th>
                    <th>Raça</th>
                    <th>Idade</th>
                    <th>Sexo</th>
                    <th></th>
                </tr>
                <c:forEach items="${animais}" var="animal">
                    <tr>
                        <td>
                            <c:out value="${animal.codigo}"/>
                        </td>
                        <td>
                            <c:out value="${animal.nomeAnimal}"/>
                        </td>
                        <td>
                            <c:out value="${animal.nomeDono}"/>
                        </td>
                        <td>
                            <c:out value="${animal.especie}"/>
                        </td>
                        <td>
                            <c:out value="${animal.raca}"/>
                        </td>
                        <td>
                            <c:out value="${animal.idade}"/>
                        </td>
                        <td>
                            <c:out value="${animal.sexo}"/>
                        </td>
                        <td>
                            <a href="AnimalServlet?acao=update&id=${animal.codigo}">
                                <img src="imagens/edit.png" width="24">
                            </a>
                            <a href="AnimalServlet?acao=delete&id=${animal.codigo}">
                                <img src="imagens/delete.png" width="32">
                            </a>
                        </td>
                    </tr>
                </c:forEach>    
            </table>
        </fieldset>
    </body>
</html>
