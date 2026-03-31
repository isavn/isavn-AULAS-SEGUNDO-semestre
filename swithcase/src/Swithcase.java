import javax.swing.JOptionPane;

public class Swithcase {

    public static void main(String[] args) {
        // Captura a entrada do usuário
        String mencao = JOptionPane.showInputDialog(null, "Digite a Menção (MB, B, R ou I):");

        // Verifica se o usuário clicou em "Cancelar" ou fechou a janela
        if (mencao == null) {
            System.exit(0);
        }

        String resultado;

        // .toUpperCase() garante que "mb" ou "MB" funcionem do mesmo jeito
        switch (mencao.toUpperCase()) {
            case "MB":
                resultado = "Muito Bom";
                break;
            case "B":
                resultado = "Bom";
                break;
            case "R":
                resultado = "Regular";
                break;
            case "I":
                resultado = "Irregular";
                break;
            default:
                resultado = "Menção Inválida";
                break;
        }

        // Exibe o resultado final
        JOptionPane.showMessageDialog(null, "Resultado: " + resultado);
    }
}