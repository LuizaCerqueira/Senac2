package sql;

import java.sql.Connection;
import java.sql.DriverManager;

public class ConectaBD {
    
    private static String url = "jdbc:mysql://localhost:3306/petshop";
    private static String usuario = "root";
    private static String senha = "senac";
    private static Connection conn = null;
    
    static{
        conectar();
    }
    
    public ConectaBD(){
        conectar();
    }
    
    private static void conectar(){
        try {

            if (conn == null) {
                Class.forName("com.mysql.jdbc.Driver");
                conn = DriverManager.getConnection(url, usuario, senha);
                //conn.setAutoCommit(false);
                //System.out.println("Conectou");
            }
        } catch (Exception e) {
            e.printStackTrace();
            throw new RuntimeException("Erro ao conectar com o "
                    + "banco de dados");
        }
    }
    
    public static Connection getConnection(){
        return conn;
    }
}
