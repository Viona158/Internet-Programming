import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class QuizServlet extends HttpServlet {
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        
        response.setContentType("text/html");
        PrintWriter out = response.getWriter();
        
        int score = 0;

        // Get answers from user
        String q1 = request.getParameter("q1");
        String q2 = request.getParameter("q2");
        String q3 = request.getParameter("q3");
        String q4 = request.getParameter("q4");
        String q5 = request.getParameter("q5");

        // Correct Answers
        if ("b".equals(q1)) score++;  // Sun Microsystems
        if ("c".equals(q2)) score++;  // HTML
        if ("b".equals(q3)) score++;  // Application Server
        if ("a".equals(q4)) score++;  // MySQL
        if ("b".equals(q5)) score++;  // <img>

        // Display result
        out.println("<html><body>");
        out.println("<h2>Your Score: " + score + " / 5</h2>");
        
        if(score == 5){
            out.println("<p>Excellent! 🎉 Full Marks!</p>");
        } else if(score >= 3){
            out.println("<p>Good Job! 👍</p>");
        } else {
            out.println("<p>Keep Practicing! 💪</p>");
        }

        out.println("</body></html>");
    }
}
