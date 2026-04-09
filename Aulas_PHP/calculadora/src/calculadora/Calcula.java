/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package calculadora;

/**
 *
 * @author Aluno CA
 */
public class Calcula {

    public int soma(int a, int b) {
        return a + b;
    }

    public int subtracao(int a, int b) {
        return a - b;
    }

    public int divisao(int a, int b) {
        return a / b;
    }

    public int multiplicacao(int a, int b) {
        return a * b;
    }

    public void mostrarResultado(String operacao, int resultado) {
        System.out.println("O resultado da " + operacao + " foi: " + resultado);
    }
}