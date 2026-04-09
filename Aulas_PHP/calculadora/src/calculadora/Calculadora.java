/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package calculadora;

public class Calculadora {

    public static void main(String[] args) {

        Calcula calculaSoma = new Calcula();

        int r1 = calculaSoma.soma(10, 5);
        calculaSoma.mostrarResultado("soma", r1);

        int r2 = calculaSoma.subtracao(10, 5);
        calculaSoma.mostrarResultado("subtracao", r2);

        int r3 = calculaSoma.multiplicacao(10, 5);
        calculaSoma.mostrarResultado("multiplicacao", r3);

       int r4 = calculaSoma.divisao(10, 5);
        calculaSoma.mostrarResultado("divisao", r4);
    }
}
