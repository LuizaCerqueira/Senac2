package model;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.ArrayList;
import java.util.List;
import sql.ConectaBD;

public class DaoAnimal {

    private Connection conn;

    public DaoAnimal() {
        conn = ConectaBD.getConnection();
    }

    //método para inserir dados na tabela animal
    public String inserirAnimal(Animal animal) {
        String msg = "";
        try {
            String sql = "insert into animal values "
                    + "(null,?,?,?,?,?,?)";
            PreparedStatement inserir = conn.prepareStatement(sql);
            inserir.setString(1, animal.getNomeAnimal());
            inserir.setString(2, animal.getNomeDono());
            inserir.setString(3, animal.getEspecie());
            inserir.setString(4, animal.getRaca());
            inserir.setString(5, animal.getSexo());
            inserir.setInt(6, animal.getIdade());
            inserir.execute();
            msg = "<h3 style='color: green'>Dados cadastrados com sucesso.</h3>";
            return msg;
        } catch (Exception e) {
            msg = e.toString();
            return msg;
        }
    }

    public List<Animal> pesquisarAnimais() {
        List<Animal> lista = new ArrayList<Animal>();
        try {
            String sql = "select * from animal";
            PreparedStatement pesquisa = conn.prepareStatement(sql);
            ResultSet rs = pesquisa.executeQuery();
            while (rs.next()) {
                Animal animal = new Animal();
                animal.setCodigo(rs.getInt("codigo"));
                animal.setNomeAnimal(rs.getString("nomeAnimal"));
                animal.setNomeDono(rs.getString("nomeDono"));
                animal.setEspecie(rs.getString("especie"));
                animal.setRaca(rs.getString("raca"));
                animal.setSexo(rs.getString("sexo"));
                animal.setIdade(rs.getInt("idade"));
                lista.add(animal);
            }
        } catch (Exception e) {
            e.printStackTrace();
        }
        return lista;
    }
    
    public String excluirAnimal(Animal animal){
        String msg = "<h4 style='color: blue;'>Dados excluídos!</h4>";
        try{
            String sql = "delete from animal where codigo = ?";
            PreparedStatement delete = conn.prepareStatement(sql);
            delete.setInt(1, animal.getCodigo());
            delete.execute();
            
        }catch(Exception e){
            e.printStackTrace();
            msg = "<h4 style='color: red;'>Deu ruim!!!!!</h4>";
        }
        return msg;
    }
    
    public Animal pesquisaAnimalId(int codigo){
        Animal animal = new Animal();
        try{
            String sql = "select * from animal where codigo = ?";
            PreparedStatement pesquisa = conn.prepareStatement(sql);
            pesquisa.setInt(1, codigo);
            ResultSet rs = pesquisa.executeQuery();
            if(rs.next()){
                animal.setCodigo(rs.getInt("codigo"));
                animal.setNomeAnimal(rs.getString("nomeAnimal"));
                animal.setNomeDono(rs.getString("nomeDono"));
                animal.setEspecie(rs.getString("especie"));
                animal.setRaca(rs.getString("raca"));
                animal.setSexo(rs.getString("sexo"));
                animal.setIdade(rs.getInt("idade"));
            }
        }catch(Exception e){
            e.printStackTrace();
        }
        return animal;
    }
    
    public String atualizarAnimal(Animal animal){
        String msg = "<h4 style='color: blue;'>Dados atualizados!</h4>";
        try{
            
        }catch(Exception e){
            e.printStackTrace();
        }
        return msg;
    }
    
}
