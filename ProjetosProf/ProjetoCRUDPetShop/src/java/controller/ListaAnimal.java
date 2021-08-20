package controller;

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import model.DaoAnimal;

@WebServlet(name = "ListaAnimal", urlPatterns = {"/ListaAnimal"})
public class ListaAnimal extends HttpServlet {

    private DaoAnimal daoAnimal = new DaoAnimal();
    
    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        try (PrintWriter out = response.getWriter()) {
            /* TODO output your page here. You may use following sample code. */
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<title>Servlet ListaAnimal</title>");            
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>Servlet ListaAnimal at " + request.getContextPath() + "</h1>");
            out.println("</body>");
            out.println("</html>");
        }
    }

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        try{
           String acao = request.getParameter("acao");
            if (acao.equalsIgnoreCase("listar")) {
                doPost(request, response);
            } else {
                RequestDispatcher dispatcher = request.getRequestDispatcher("Teste.jsp");
                dispatcher.forward(request, response);
            } 
        }catch(Exception e) {
            e.printStackTrace();
        }
    }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        try{
            RequestDispatcher rd = request.getRequestDispatcher("CadastroAnimal.jsp");
            request.setAttribute("animais", daoAnimal.pesquisarAnimais());
            rd.forward(request, response);
        }catch(Exception e){
            e.printStackTrace();
        }
    }

    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
