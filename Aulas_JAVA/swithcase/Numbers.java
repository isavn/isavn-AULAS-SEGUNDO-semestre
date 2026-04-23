/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package numbers;

// 1. ADICIONADO O IMPORT OBRIGATÓRIO
import javax.swing.JOptionPane;

public class Numbers {

    public static void main(String[] args) {
        String st = "INFORME UM NÚMERO ENTRE 1 E 2: ";
        st = JOptionPane.showInputDialog(null, st);
       
        // Conversão de String para int
        int mes = Integer.parseInt(st);
       
        switch (mes) {
            case 1:
                // 2. CORRIGIDO: Aspas agora são retas " "
                st = "PAGAMENTO EM DIA";
                break;
            case 2:
                st = "PAGAMENTO ATRASADO";
                break;
            default:
                st = "DIA INVÁLIDO";
                JOptionPane.showMessageDialog(null, st, "ERRO", 0);
                System.exit(0);
        }
       
        // 3. ORGANIZADO: Chaves agora fecham nos locais corretos
        st = "VOCÊ ESCOLHEU O STATUS: " + st;
        JOptionPane.showMessageDialog(null, st, "MENSAGEM", 1);
        System.exit(0);
    }
}

//teste
