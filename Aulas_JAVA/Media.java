 import javax.swing.JOptionPane;
public class Media {
    public static void main(String[] args) {
        double[] notas = new double[4];
        double soma = 0;
        
        for (int i = 0; i < 4; i++) {
            String input = JOptionPane.showInputDialog("Digite a nota do " + (i + 1) + "º Bimestre:");
            notas[i] = Double.parseDouble(input);
            soma += notas[i]; 
        }
        double media = soma / 4;
        String situacao;

        if (media >= 7) {
            situacao = "APROVADO";
        } else {
            situacao = "REPROVADO";
        }
        JOptionPane.showMessageDialog(null, 
            "Média Final: " + media + "\nSituação: " + situacao);
        
        System.exit(0);
    }

    }

    
    
