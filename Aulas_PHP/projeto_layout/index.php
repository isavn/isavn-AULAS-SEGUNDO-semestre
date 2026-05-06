<?php
/* 
   CONCEITO: Sistema de Templates Reutilizáveis.
   Aqui aprendemos que mudar o cabeçalho em um arquivo altera o site todo.
*/

// Simulação de metadados da página
$page_title = "Página Inicial - Meu Framework";
$categorias = ["Tecnologia", "Design", "Vida de Dev"];

// Incluindo o topo
require_once("templates/header.php");
?>

<main class="content-wrapper" style="padding: 50px; min-height: 400px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <section class="hero-section" style="background: #e9ecef; padding: 30px; border-radius: 8px;">
        <h2>Bem-vindo à Aula de Estruturação!</h2>
        <p>Este é o conteúdo principal da Home. Note que o código do menu não está aqui.</p>
        <p>Atualmente, estamos simulando a separação de pastas que será usada no Blog final.</p>
        
        <div class="category-list" style="margin-top: 20px;">
            <h3>Explore nossas categorias:</h3>
            <ul>
                <?php foreach($categorias as $cat): ?>
                    <li style="color: #007bff; font-weight: bold;"><?= $cat ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <article style="margin-top: 30px; line-height: 1.6;">
        <p>O uso de <strong>require_once</strong> garante que as partes do site não carreguem duas vezes, 
        evitando erros de redeclaração de funções ou variáveis globais.</p>
    </article>
</main>

<?php 
// Incluindo o rodapé
require_once("templates/footer.php"); 
?>