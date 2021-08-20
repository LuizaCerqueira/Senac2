package controller;

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import model.Animal;
import model.DaoAnimal;

/**
 *
 * @author ricardo.amaral
 */
@WebServlet(name = "AnimalServlet", urlPatterns = {"/AnimalServlet"})
public class AnimalServlet extends HttpServlet {

    private DaoAnimal daoAnimal = new DaoAnimal();

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        try {
            String acao = request.getParameter("acao");
            int id = Integer.parseInt(request.getParameter("id"));
            String msg = "";
            if (acao.equalsIgnoreCase("update")) {
                Animal animal = daoAnimal.pesquisaAnimalId(id);
                request.setAttribute("bichinho", animal);
            } else if (acao.equalsIgnoreCase("delete")) {
                Animal animal = new Animal();
                animal.setCodigo(id);
                msg = daoAnimal.excluirAnimal(animal);
            } else {

            }
            RequestDispatcher rd = request.getRequestDispatcher("CadastroAnimal.jsp");
            request.setAttribute("mensagem", msg);
            request.setAttribute("animais", daoAnimal.pesquisarAnimais());
            rd.forward(request, response);
        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        String acao = request.getParameter("acao");
        String nomeAnimal = request.getParameter("nomeAnimal");
        String dono = request.getParameter("dono");
        String especie = request.getParameter("especie");
        String raca = request.getParameter("raca");
        String sexo = request.getParameter("sexo");
        int idade = Integer.parseInt(request.getParameter("idade"));

        String msg = "";

        try {
            Animal animal = new Animal();
            animal.setNomeAnimal(nomeAnimal);
            animal.setNomeDono(dono);
            animal.setEspecie(especie);
            animal.setRaca(raca);
            animal.setSexo(sexo);
            animal.setIdade(idade);
            if (acao.equalsIgnoreCase("insert")) {
                msg = daoAnimal.inserirAnimal(animal);
            } else if (acao.equalsIgnoreCase("update")) {
                int codigo = Integer.parseInt(request.getParameter("codigo"));
                animal.setCodigo(codigo);

            }
        } catch (Exception e) {
            e.printStackTrace();
        }
        RequestDispatcher rd = request.getRequestDispatcher("CadastroAnimal.jsp");
        request.setAttribute("mensagem", msg);
        request.setAttribute("animais", daoAnimal.pesquisarAnimais());
        rd.forward(request, response);
    }

    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
