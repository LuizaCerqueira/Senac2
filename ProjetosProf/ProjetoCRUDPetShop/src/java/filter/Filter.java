package filter;

import java.io.IOException;
import java.sql.Connection;
import javax.servlet.FilterChain;
import javax.servlet.FilterConfig;
import javax.servlet.ServletException;
import javax.servlet.ServletRequest;
import javax.servlet.ServletResponse;
import sql.ConectaBD;

public class Filter implements javax.servlet.Filter{

    private static Connection conn = null;
    
    @Override
    public void init(FilterConfig filterConfig) throws ServletException {
        conn = ConectaBD.getConnection();
    }

    @Override
    public void doFilter(ServletRequest request, ServletResponse response, FilterChain chain) throws IOException, ServletException {
        try {
            chain.doFilter(request, response);
        } catch (Exception e) {
             e.printStackTrace();
        }
    }

    @Override
    public void destroy() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
}
