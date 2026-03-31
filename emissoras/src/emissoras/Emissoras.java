/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package emissoras;

// 1. O import deve ficar aqui, fora da classe
import javax.swing.JOptionPane;

public class Emissoras { // O nome da classe deve ser igual ao nome do arquivo
   
    public static void main(String[] args) {
        String input = JOptionPane.showInputDialog(null, "Digite o número do canal:");
       
        // Verifica se o usuário clicou em "Cancelar"
        if (input == null) {
            System.exit(0);
        }

        try {
            int canal = Integer.parseInt(input);
            String emissora;

            emissora = switch (canal) {
                case 2 -> "Cultura";
                case 4 -> "SBT";
                case 5 -> "Globo";
                case 7 -> "Record";
                case 9 -> "Manchete";
                case 11 -> "Gazeta";
                case 13 -> "Bandeirantes";
                default -> "Canal não sintonizado";
            };

            JOptionPane.showMessageDialog(null, "Emissora: " + emissora);
           
        } catch (NumberFormatException e) {
            JOptionPane.showMessageDialog(null, "Por favor, digite um número válido!", "Erro", 0);
        }
    }
}

